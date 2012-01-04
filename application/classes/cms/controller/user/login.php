<?php defined('SYSPATH') or die('No direct script access.');

class Cms_Controller_User_Login extends Cms_Controller_Application
{
  public function before()
  {
    parent::before();
    
    Navigation::add('Přihlášení uživatele', Route::get('user_login')->uri());
  }
  
  public function action_index()
  {
    $this->_view->form = Forms::get('login', 'user', 'user');
  }
  
  public function action_logout()
  {
    Authlite::instance()->logout(FALSE);
    Request::redirect_initial('');
  }
  
  public function action_forgotten_password()
  {
    Navigation::remove_last();
    Navigation::add('Obnovení hesla', Request::initial_url());
    
    $this->_view->form = Forms::get('forgotten_password_link', 'user', 'user');
  }
  
  public function action_forgotten_password_change()
  {
    Navigation::remove_last();
    Navigation::add('Obnovení hesla', Request::initial_url());
    
    $hash = $this->request->param('hash');
    
    $show = FALSE;
    
    if (strlen($hash)) {
      $user = ORM::factory('user')->where('change_password_hash', '=', $hash)->find();
      
      if ($user->change_password_timestamp >= time()) {
        $password = strtolower(text::random('alnum', 8));
        
        $user->password = $password;
        $user->save();
        
        $email = Email::factory(Kohana::$config->load('email.types.user_forgotten_password_change'));
        $email->view->set('user', $user);
        $email->view->set('password', $password);
        $email->to($user->email);
        $email->render_view();
        $email->send();
        
        $show = TRUE;
      }
    }
    
    if ( ! $show)
      Request::redirect_initial(Route::get('user_forgotten_password')->uri());
  }
}