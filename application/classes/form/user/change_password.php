<?php defined('SYSPATH') or die('No direct script access.');

class Form_User_Change_Password extends Forms 
{
  public function build()
  {
    $this->add('old_password', 'password');
    $this->add('new_password', 'password');
    $this->add('new_password_repeat', 'password');
  }
  
  public function set_rules()
  {
    $this->rules('old_password', array (
      array ('not_empty'),
      array (array ($this, 'check_actual_password'), array (':value')), 
    ));
    
    $this->rules('new_password', array (
      array ('not_empty'), 
      array('min_length', array(':value', 6)), 
      array('max_length', array(':value', 20)),
    ));
    
    $this->rules('new_password_repeat', array (
      array ('matches', array(':validation', ':field', 'new_password'))
    ));
  }
  
  public function set_values()
  {
    return $this;
  }
  
  public function prepare_values()
  {
    $values = $this->as_array();
    
    $values['password'] = $values['new_password'];
    arr::arr_without(array ('old_password', 'new_password', 'new_password_repeat'), $values);
    
    return $values;
  }
  
  public function do_form($values = array (), $refresh = FALSE, $redirect = TRUE)
  {
    parent::do_form($values, TRUE, FALSE);
  }
  
  public function check_actual_password($password)
  {
    $user = $this->_load_orm_object();
    
    return $user->password == Authlite::instance()->hash($password);
  }
}