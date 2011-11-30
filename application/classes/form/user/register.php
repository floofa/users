<?php defined('SYSPATH') or die('No direct script access.');

class Form_User_Register extends Forms 
{
  protected function build()
  {
    $this->form->add('login_name');
    $this->form->add('password', 'password');
    $this->form->add('password_repeat', 'password');
    
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
  
  protected function set_rules()
  {
    $this->form->rules('login_name', array (array ('not_empty'), array('min_length', array(':value', 4)), array('max_length', array(':value', 40)), array (array (ORM::factory('user'), 'is_unique'), array (':value', ':field'))));
    $this->form->rules('password', array (array ('not_empty'), array('min_length', array(':value', 6)), array('max_length', array(':value', 20))));
    $this->form->rules('password_repeat', array (array ('matches', array(':validation', ':field', 'password'))));
    
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
      arr::arr_without(array ('company', 'ic', 'dic'), $values);
    }
    
    // dorucovaci udaje - pokud nejsou potreba, vymazeme
    if ( ! $values['delivery_address']) {
      arr::arr_without(array ('delivery_company', 'delivery_name', 'delivery_surname', 'delivery_street', 'delivery_city', 'delivery_postcode', 'delivery_phone'), $values);
    }
    else {
      // pokud nebyl zadan telefon, pouzijeme ten z fakturacni adresy
      if ( ! strlen($values['delivery_phone'])) {
        $values['delivery_phone'] = $values['phone'];
      }
    }
    
    // ulozeni uzivatele
    $user = ORM::factory('user')->values($values)->save();
    
    Request::$current->redirect(Route::url('user_register-done', array (), TRUE));
  }
}
