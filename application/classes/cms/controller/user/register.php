<?php defined('SYSPATH') or die('No direct script access.');

class Cms_Controller_User_Register extends Cms_Controller_Builder_Template_Application
{
  public function action_index()
  {
    $this->_view->form = Forms::get('register', 'user', 'user');
    
    Assets::add_css('checkout');
    Assets::add_css('user');
  }
  
  public function action_done()
  {
    
  }
  
  public function action_verify()
  {
    $user_id = $this->request->param('user_id');
    $hash = $this->request->param('hash');
    
    $user = ORM::factory('user', $user_id);
    
    if ( ! $user->loaded() || ! strlen($hash) || $user->verify_hash !== $hash)
      throw new Kohana_HTTP_Exception_404();
      
    if ( ! $user->verified) {
      $user->verified = TRUE;
      $user->save();
    }
    
    $this->_view->user = $user;
  }
}