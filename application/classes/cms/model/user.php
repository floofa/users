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
        array(array(Authlite::instance('authlite_user'), 'hash'))
      )
    );
  }
  
  public function save(Validation $validation = NULL)
  {
    return parent::save($validation);
  }
  
  public function has_company_data()
  {
    return (bool)(strlen($this->company));
  }
  
  public function has_delivery_address()
  {
    return (bool)(strlen($this->delivery_name));
  }
}