<?php defined('SYSPATH') or die('No direct script access.');

class Form_User_Password_Forgotten_Change extends Forms 
{
  protected function build()
  {
    $this->form->add('password', 'password');
    $this->form->add('password_repeat', 'password');
  }
  
  protected function set_values()
  {
    // nacte hodnoty z modelu
    //$this->form->load_orm_values();
  }
  
  protected function set_rules()
  {
    $this->form->rules('password', array (array ('not_empty'), array('min_length', array(':value', 6)), array('max_length', array(':value', 20))));
    $this->form->rules('password_repeat', array (array ('matches', array(':validation', ':field', 'password'))));
  }
  
  protected function do_form($values = array (), $refresh = TRUE)
  {
    $user = $this->form->get_orm_object();
    $user->password = $values['password'];
    $user->change_password_hash = NULL;
    $user->change_password_timestamp = NULL;
    $user->save();
    
    Request::$current->redirect(Route::url('user_forgotten_password_change', array ('hash' => 'hotovo'), TRUE));
  }
}
