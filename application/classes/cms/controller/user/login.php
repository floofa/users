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
    $this->view->form = Forms::get('user_login');
  }
  
  public function action_logout()
  {
    Authlite::instance()->logout(FALSE);
    Linker::redirect();
  }
  
  public function action_forgotten_password()
  {
    Navigation::remove_last();
    Navigation::add('Obnovení hesla', Request::initial_url());
    
    $this->view->form = Forms::get('user_password_forgotten_link');
  }
  
  public function action_forgotten_password_change()
  {
    Navigation::remove_last();
    Navigation::add('Obnovení hesla', Request::initial_url());
    
    $hash = $this->request->param('hash');
    
    $show = FALSE;
    
    if (strlen($hash)) {
      if ($hash == 'hotovo') {
        $show = TRUE;
        $this->view->sent = TRUE;
      }
      else {
        $user = ORM::factory('user')->where('change_password_hash', '=', $hash)->find();
        
        if ($user->change_password_timestamp >= time()) {
          $show = TRUE;
          $this->view->form = Forms::get('user_password_forgotten_change', 'user', $user->id);
        }
      }
    }
    
    if ( ! $show)
      $this->request->redirect(Route::url('user_forgotten_password_link', array (), TRUE));
  }
}