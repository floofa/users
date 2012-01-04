<?php defined('SYSPATH') or die('No direct script access.');

class Form_User_Forgotten_Password_Link extends Forms 
{
  public function build()
  {
    $this->add('login_name');
  }
  
  public function set_rules()
  {
    $this->rules('login_name', array (
      array ('not_empty'),
      array (array ($this, 'exists'), array (':value', ':field', $this->_model)),
    ));
  }
  
   public function do_form($values = array (), $refresh = FALSE, $redirect = TRUE)
  {
    $user = ORM::factory('user')->where('login_name', '=', $values['login_name'])->find();

    if (valid::email($user->email)) {
      $user->change_password_hash = text::random('alnum', 40) . $user->id;
      $user->change_password_timestamp = time() + 5 * 3600;
      $user->save();
      
      $email = Email::factory(Kohana::$config->load('email.types.user_forgotten_password_link'));
      $email->view->set('user', $user);
      $email->to($user->email);
      $email->send();
    }
    
    Session::instance()->set('form_sent', $this->_formo->name());
    
    Request::$current->redirect(Request::initial_url());
  }
}
