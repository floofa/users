<?php defined('SYSPATH') or die('No direct script access.');

abstract class Cms_Controller_Static_User extends Cms_Controller_Static 
{
  protected $_folder = 'user';
  
  public function action_menu()
  {
    $user = Authlite::instance()->get_user();
    $this->view->user = ($user && $user->loaded()) ? $user : FALSE;
  }
  
  public function action_content_menu()
  {
    if (Authlite::instance()->logged_in()) {
      $menu = new Menu('user_menu');
      
      //$menu->add('Objednávky', Route::url('user_orders'));
      $menu->add('Editace údajů', Route::url('user-edit'));
      $menu->add('Změna hesla', Route::url('user-change_password'));
      
      $menu->set_actives(Request::initial_url());
      
      $this->_view->menu = $menu;
    }
    else {
      $this->_view = View::factory('blank');
    }
  }
}
