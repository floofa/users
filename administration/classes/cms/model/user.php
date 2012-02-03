<?php defined('SYSPATH') or die('No direct access allowed.');

class Cms_Model_User extends ORM_Classic 
{
  protected $_sorting = array ('surname' => 'ASC', 'name' => 'ASC');
  
  protected $_filter_as_like = array ('email');
  
  public function set_list_item_default(&$arr, $item) 
  {
    $arr['full_name'] = $item->name . ' ' . $item->surname;
  }
  
  public function rules()
  {
    
    return array(
    /*
      'login_name' => array(
        array('not_empty'),
        array('min_length', array(':value', 4)),
        array('max_length', array(':value', 127)),
        array('email'),
        array (array ($this, 'is_unique'), array (':value', ':field')),
      ),
      'email' => array(
        array('not_empty'),
        array('min_length', array(':value', 4)),
        array('max_length', array(':value', 127)),
        array('email'),
      ),
      'name' => array (
        array('not_empty'),
        array ('max_length', array (':value', 30)),
      ),
      'surname' => array (
        array('not_empty'),
        array ('max_length', array (':value', 30)),
      ),
      'company' => array (
        array ('max_length', array (':value', 30)),
      ),
      'ic' => array (
        array ('max_length', array (':value', 30)),
      ),
      'dic' => array (
        array ('max_length', array (':value', 30)),
      ),
      'street' => array (
        array ('max_length', array (':value', 30)),
      ),
      'city' => array (
        array ('max_length', array (':value', 30)),
      ),
      'postcode' => array (
        array ('max_length', array (':value', 10)),
      ),
      'country' => array (
        array ('not_empty'),
      ),
      'delivery_name' => array (
        array ('max_length', array (':value', 30)),
      ),
      'delivery_surname' => array (
        array ('max_length', array (':value', 30)),
      ),
      'delivery_company' => array (
        array ('max_length', array (':value', 30)),
      ),
      'delivery_street' => array (
        array ('max_length', array (':value', 30)),
      ),
      'delivery_city' => array (
        array ('max_length', array (':value', 30)),
      ),
      'delivery_postcode' => array (
        array ('max_length', array (':value', 10)),
      ),
      'delivery_country' => array (
        array ('not_empty'),
      ),
      'phone' => array (
        array ('max_length', array (':value', 20)),
      ),
      'fax' => array (
        array ('max_length', array (':value', 20)),
      ),
      */
    );

  }
  
  public function filters()
  {
    return array (
      'password' => array(
        array(array(Authlite::instance(), 'hash'))
      )
    );
  }
  
  public function set($column, $value)
  {
    switch ($column) {
      case 'password':
        if ( ! strlen($value))
          return;
    }
  
    return parent::set($column, $value);
  }
  
  public function get_navigation_val()
  {
    return $this->name . ' ' . $this->surname;
  }
}
