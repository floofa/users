<?php defined('SYSPATH') or die('No direct script access.');

abstract class Cms_Controller_Static_User extends Cms_Controller_Static 
{
  protected $folder = '_static/user';
  
  public function action_menu()
  {
    $user = Authlite::instance()->get_user();
    $this->view->user = ($user && $user->loaded()) ? $user : FALSE;
  }
  
  public function action_content_menu()
  {
    if (Authlite::instance()->logged_in()) {
      $menu = new Menu('user_menu');
      
      $menu->add('Objednávky', Route::url('user_orders'));
      $menu->add('Editace údajů', Route::url('user-edit'));
      $menu->add('Změna hesla', Route::url('user-change_password'));
      
      $uri = trim(Request::$initial->detect_uri(), '/');
      $menu->set_actives(Linker::get($uri));
      
      $this->view->menu = $menu;
    }
    else {
      $this->view = View::factory('blank');
    }
  }
}
