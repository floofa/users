<?php defined('SYSPATH') or die('No direct script access.');

class Form_User_Edit extends Forms 
{
  protected function build()
  {
    $this->form->add('name');
    $this->form->add('surname');
    $this->form->add('email');
    $this->form->add('phone');
    $this->form->add('street');
    $this->form->add('city');
    $this->form->add('postcode');
    
    $this->form->add('company_data', 'bool');
    $this->form->add('company');
    $this->form->add('ic');
    $this->form->add('dic');
    
    $this->form->add('delivery_address', 'bool');
    $this->form->add('delivery_company');
    $this->form->add('delivery_name');
    $this->form->add('delivery_surname');
    $this->form->add('delivery_street');
    $this->form->add('delivery_city');
    $this->form->add('delivery_postcode');
    $this->form->add('delivery_phone');
  }
  
  protected function set_values()
  {
    parent::set_values();
    
    if ( ! $_POST) {
      $user = $this->form->get_orm_object();
      
      if (strlen($user->company)) {
        $this->form->company_data->val(1);
      }
      
      if (strlen($user->delivery_name)) {
        $this->form->delivery_address->val(1);
      }
    }
  }
  
  protected function set_rules()
  {
    $this->form->rules('name', array (array ('not_empty'), array('max_length', array(':value', 30))));
    $this->form->rules('surname', array (array ('not_empty'), array('max_length', array(':value', 30))));
    $this->form->rules('email', array (array ('not_empty'), array('email'), array('max_length', array(':value', 127))));
    $this->form->rules('phone', array (array ('not_empty'), array('max_length', array(':value', 20))));
    $this->form->rules('street', array (array ('not_empty'), array('max_length', array(':value', 50))));
    $this->form->rules('city', array (array ('not_empty'), array('max_length', array(':value', 50))));
    $this->form->rules('postcode', array (array ('not_empty'), array('max_length', array(':value', 10))));
    
    if ($_POST && isset($_POST[$this->form->name()]['company_data'])) {
      $this->form->rules('company', array (array ('not_empty'), array('max_length', array(':value', 50))));
      $this->form->rules('ic', array (array ('not_empty'), array('max_length', array(':value', 20))));
      $this->form->rules('dic', array (array('max_length', array(':value', 20))));
    }
    
    if ($_POST && isset($_POST[$this->form->name()]['delivery_address'])) {
      $this->form->rules('delivery_name', array (array ('not_empty'), array('max_length', array(':value', 30))));
      $this->form->rules('delivery_surname', array (array ('not_empty'), array('max_length', array(':value', 30))));
      $this->form->rules('delivery_company', array (array('max_length', array(':value', 50))));
      $this->form->rules('delivery_phone', array (array('max_length', array(':value', 20))));
      $this->form->rules('delivery_street', array (array ('not_empty'), array('max_length', array(':value', 50))));
      $this->form->rules('delivery_city', array (array ('not_empty'), array('max_length', array(':value', 50))));
      $this->form->rules('delivery_postcode', array (array ('not_empty'), array('max_length', array(':value', 10))));
    }
  }
  
  protected function do_form($values = array (), $refresh = TRUE)
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
