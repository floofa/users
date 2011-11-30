<?php defined('SYSPATH') or die('No direct access allowed.');

class Cms_Model_User extends ORM 
{
  public function rules()
  {
    return array (
      'login_name' => array (
        array (array ($this, 'is_unique'), array (':value', ':field')),
      ),
      'email' => array (
        array ('not_empty'),
        array ('email'),
      ),
      'password' => array (
        //array ('not_empty'),
        array ('min_length', array (':value', 6)),
      ),
      'name' => array (
        array ('not_empty'),
        array ('max_length', array (':value', 30)),
      ),
      'surname' => array (
        array ('not_empty'),
        array ('max_length', array (':value', 30)),
      ),
      'company' => array (
        array ('max_length', array (':value', 50)),
      ),
      'street' => array (
        array ('not_empty'),
        array ('max_length', array (':value', 50)),
      ),
      'city' => array (
        array ('not_empty'),
        array ('max_length', array (':value', 50)),
      ),
      'postcode' => array (
        array ('not_empty'),
        array ('max_length', array (':value', 20)),
      ),
      'country' => array (
        
      ),
      'delivery_company' => array (
        array ('max_length', array (':value', 50)),
      ),
      'delivery_name' => array (
        array ('max_length', array (':value', 30)),
      ),
      'delivery_surname' => array (
        array ('max_length', array (':value', 30)),
      ),
      'delivery_street' => array (
        array ('max_length', array (':value', 50)),
      ),
      'delivery_city' => array (
        array ('max_length', array (':value', 50)),
      ),
      'delivery_postcode' => array (
        array ('max_length', array (':value', 20)),
      ),
    );
  }
  
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
}