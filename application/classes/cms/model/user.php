<?php defined('SYSPATH') or die('No direct access allowed.');

class Cms_Model_User extends ORM 
{
  public function set($column, $value)
  {
    switch ($column) {
      case 'password':
        if ( ! strlen($value))
          return;
        break;
      case 'password_confirm':
        return;
    }
  
    return parent::set($column, $value);
  }

  public function filters()
  {
    return array(
      'password' => array(
        array(array(Authlite::instance(), 'hash'))
      )
    );
  }
  
  public function save(Validation $validation = NULL)
  {
    if ( ! strlen($this->login_name)) {
      $this->login_name = $this->email;
    }
    
    return parent::save($validation);
  }
}