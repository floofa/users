<?php defined('SYSPATH') or die('No direct script access.');

class Cms_Controller_User extends Cms_Controller_Auth
{
  public function before()
  {
    parent::before();
    
    Navigation::add('Uživatelská zóna', Linker::get('uzivatel'));
  }
  
  public function action_index()
  {
    Linker::redirect(Route::get('user_orders')->uri());
  }
  
  /**
  * editace uzivatele
  */
  public function action_edit()
  {
    Navigation::add('Editace údajů', Route::get('user-edit')->uri());
    
    $this->view->form = Forms::get('user_edit', 'user', $this->_user->id);
  }
  
  public function action_change_password()
  {
    Navigation::add('Změna hesla', Route::get('user-change_password')->uri());
    
    $this->view->form = Forms::get('user_password_change', 'user', $this->_user->id);
  }
}