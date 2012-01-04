<?php defined('SYSPATH') or die('No direct script access.');

class Cms_Controller_User extends Cms_Controller_Builder_Template_Application_Auth
{
  public function before()
  {
    parent::before();
    
    Navigation::add('Uživatelská zóna', Route::url('user'));
  }
  
  public function action_index()
  {
    Request::redirect_initial(Route::get('user-edit')->uri());
  }
  
  /**
  * editace uzivatele
  */
  public function action_edit()
  {
    Navigation::add('Editace údajů', Route::get('user-edit')->uri());
    
    $this->_view->form = Forms::get('edit', 'user', 'user', $this->_user->id);
  }
  
  public function action_change_password()
  {
    Navigation::add('Změna hesla', Route::get('user-change_password')->uri());
    
    $this->_view->form = Forms::get('change_password', 'user', 'user', $this->_user->id);
  }
  
  public function action_block_login_box()
  {
    $this->_view->user = Authlite::instance()->get_user();
  }
}