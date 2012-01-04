<?php defined('SYSPATH') or die('No direct script access.');

class Form_User_Edit extends Forms 
{
  public function build()
  {
    $this->add('name');
    $this->add('surname');
    $this->add('email');
    $this->add('phone');
    $this->add('street');
    $this->add('city');
    $this->add('postcode');
    
    $this->add('company_data', 'bool');
    $this->add('company');
    $this->add('ic');
    $this->add('dic');
    
    $this->add('delivery_address', 'bool');
    $this->add('delivery_company');
    $this->add('delivery_name');
    $this->add('delivery_surname');
    $this->add('delivery_street');
    $this->add('delivery_city');
    $this->add('delivery_postcode');
    $this->add('delivery_phone');
  }
  
  public function set_values()
  {
    parent::set_values();
  }
  
  public function set_rules()
  {
    $this->rules('name', array (array ('not_empty'), array('max_length', array(':value', 30))));
    $this->rules('surname', array (array ('not_empty'), array('max_length', array(':value', 30))));
    $this->rules('email', array (array ('not_empty'), array('email'), array('max_length', array(':value', 127))));
    $this->rules('phone', array (array ('not_empty'), array('max_length', array(':value', 20))));
    $this->rules('street', array (array ('not_empty'), array('max_length', array(':value', 50))));
    $this->rules('city', array (array ('not_empty'), array('max_length', array(':value', 50))));
    $this->rules('postcode', array (array ('not_empty'), array('max_length', array(':value', 10))));
    
    if ($_POST && isset($_POST[$this->form->name()]['company_data'])) {
      $this->rules('company', array (array ('not_empty'), array('max_length', array(':value', 50))));
      $this->rules('ic', array (array ('not_empty'), array('max_length', array(':value', 20))));
      $this->rules('dic', array (array('max_length', array(':value', 20))));
    }
    
    if ($_POST && isset($_POST[$this->form->name()]['delivery_address'])) {
      $this->rules('delivery_name', array (array ('not_empty'), array('max_length', array(':value', 30))));
      $this->rules('delivery_surname', array (array ('not_empty'), array('max_length', array(':value', 30))));
      $this->rules('delivery_company', array (array('max_length', array(':value', 50))));
      $this->rules('delivery_phone', array (array('max_length', array(':value', 20))));
      $this->rules('delivery_street', array (array ('not_empty'), array('max_length', array(':value', 50))));
      $this->rules('delivery_city', array (array ('not_empty'), array('max_length', array(':value', 50))));
      $this->rules('delivery_postcode', array (array ('not_empty'), array('max_length', array(':value', 10))));
    }
  }
  
  public function do_form($values = array (), $refresh = TRUE, $redirect = FALSE)
  {
    // firemni udaje - pokud nejsou potreba, vymazeme
    if ( ! $values['company_data']) {
      $values['company'] = '';
      $values['ic'] = '';
      $values['dic'] = '';
    }
    
    // dorucovaci udaje - pokud nejsou potreba, vymazeme
    if ( ! $values['delivery_address']) {
      $values['delivery_company'] = '';
      $values['delivery_name'] = '';
      $values['delivery_surname'] = '';
      $values['delivery_street'] = '';
      $values['delivery_city'] = '';
      $values['delivery_postcode'] = '';
      $values['delivery_phone'] = '';
    }
    else {
      // pokud nebyl zadan telefon, pouzijeme ten z fakturacni adresy
      if ( ! strlen($values['delivery_phone'])) {
        $values['delivery_phone'] = $values['phone'];
      }
    }
    
    // ulozeni uzivatele
    $this->form->get_orm_object()->values($values)->save();
    
    Session::instance()->set('form_sent', $this->form->name());
    
    Request::refresh_page();
  }
}
