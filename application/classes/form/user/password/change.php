<?php defined('SYSPATH') or die('No direct script access.');

class Form_User_Password_Change extends Forms 
{
  protected function build()
  {
    $this->form->add('actual_password', 'password');
    $this->form->add('new_password', 'password');
    $this->form->add('new_password_repeat', 'password');
  }
  
  protected function set_values()
  {
    // nacte hodnoty z modelu
    //$this->form->load_orm_values();
  }
  
  protected function set_rules()
  {
    $this->form->rules('actual_password', array (array ('not_empty'), array (array ($this, 'check_actual_password'), array (':value', $this->model_id))));
    $this->form->rules('new_password', array (array ('not_empty'), array('min_length', array(':value', 6)), array('max_length', array(':value', 20))));
    $this->form->rules('new_password_repeat', array (array ('matches', array(':validation', ':field', 'new_password'))));
  }
  
  protected function do_form($values = array (), $refresh = TRUE)
  {
    $user = $this->form->get_orm_object();
    $user->password = $values['new_password'];
    $user->save();
    
    Request::refresh_page();
  }
  
  public static function check_actual_password($password, $user_id)
  {
    $user = ORM::factory('user', $user_id);
    
    return $user->password == Authlite::instance()->hash($password);
  }
}
