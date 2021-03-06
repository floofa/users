<?php defined('SYSPATH') or die('No direct script access.');

class Form_User_Login extends Forms 
{
  public function build()
  {
    $this->add('email');
    $this->add('password', 'password');
    $this->add('redirect', 'hidden', '');
  }
  
  public function set_rules()
  {
    $this->rules('email', array (
      array ('not_empty'),
    ));
    
    $this->rules('password', array (
      array ('not_empty'),
    ));
  }
  
  public function do_form($values = array (), $refresh = TRUE, $redirect = FALSE)
  {
    if ($user = Authlite::instance('authlite_user')->login($values['email'], $values['password'])) {
      if (strlen($values['redirect']))
        Request::redirect_initial($values['redirect']);
      else 
        Request::redirect_initial('');
    }
    else {
      $this->_formo->error('not_found');
    }
    
  }
}