<?php defined('SYSPATH') or die('No direct script access.');

class Form_User_Edit extends Forms_List
{
  public function build()
  {
    $this->group('group1');
    $this->col('col1')
      ->add('name')
      ->add('surname')
      ->add('email');
    
    $this->col('col2')
      ->add('street')
      ->add('city')
      ->add('postcode');
    
    $this->group('group2');
    $this->col('col1')
      ->add('login_name', array ('attr' => array ('autocomplete' => 'off')));
      
    $this->col('col2')
      ->add('password', 'password', array ('attr' => array ('autocomplete' => 'off')));
      
    $this->add_gallery('users_images', $this->_model, $this->_model_id);
    
    /*
    $this->group('group1');
    $this->col('col1')
      ->add('login_name', array ('attr' => array ('autocomplete' => 'off')));
      
    $this->col('col2')
      ->add('password', 'password', array ('attr' => array ('autocomplete' => 'off')));
      
    $this->group('group4');
    $this->col('col1')
      ->add('email');
      
    $this->col('col2')
      ->add('phone')
      ->add('fax');
      
    $this->group('group2');
    $this->col('col1')
      ->add('company')
      ->add('name')
      ->add('surname')
      ->add('cin')
      ->add('tin');
      
    $this->col('col2')
      ->add('street')
      ->add('postcode')
      ->add('city')
      ->add('country', 'select',array ('options' => ___('users_countries')));
      
    $this->group('group3');
    $this->col('col1')
      ->add('delivery_company')
      ->add('delivery_name')
      ->add('delivery_surname');
      
    $this->col('col2')
      ->add('delivery_street')
      ->add('delivery_postcode')
      ->add('delivery_city')
      ->add('delivery_country', 'select',array ('options' => ___('users_countries')));
    */
  }

  public function set_rules()
  {
    $this->rules('login_name', array (
      array('not_empty'),
      array('min_length', array(':value', 4)),
      array('max_length', array(':value', 127)),
      array('email'),
      array (array ($this, 'is_unique'), array (':value', ':field')),
    ));
    
    if ( ! $this->_model_id)
      $this->rule('password', 'not_empty');
      
    $this->rules('email', array (
      array('not_empty'),
      array('min_length', array(':value', 4)),
      array('max_length', array(':value', 127)),
      array('email'),
    ));
    
    $this->rules('name', array (
      array ('not_empty'),
      array('max_length', array(':value', 30)),
    ));
    
    $this->rules('surname', array (
      array ('not_empty'),
      array('max_length', array(':value', 30)),
    ));
    
    $this->rules('street', array (
      array('max_length', array(':value', 30)),
    ));
    
    $this->rules('city', array (
      array('max_length', array(':value', 30)),
    ));
    
    $this->rules('postcode', array (
      array('max_length', array(':value', 30)),
    ));
  }
}
