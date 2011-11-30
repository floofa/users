<?php defined('SYSPATH') or die('No direct script access.');

class Form_User_Password_Forgotten_Link extends Forms 
{
  protected function build()
  {
    $this->form->add('login_name');
  }
  
  protected function set_rules()
  {
    $this->form->rule('login_name', array (ORM::factory('user'), 'exists'), array (':value', ':field'));
  }
  
  protected function do_form($values = array (), $refresh = TRUE)
  {
    $user = ORM::factory('user')->where('login_name', '=', $values['login_name'])->find();
    
    if (valid::email($user->email)) {
      $user->change_password_hash = text::random('alnum', 40) . $user->id;
      $user->change_password_timestamp = time() + 5 * 3600;
      $user->save();
      
      Email::factory('Obnovení hesla', View::factory('_emails/user_password_forgotten_link')->set('user', $user)->render(), 'text/html')
      ->from('info@obalyvysocina.cz')
      ->to($user->email)
      ->send();
    }
    
    Session::instance()->set('form_sent', $this->form->name());
    
    Request::$current->redirect(Request::initial_url());
  }
}
