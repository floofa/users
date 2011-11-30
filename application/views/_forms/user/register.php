<?if ($errors = $form->errors()):?>
  <div class="error" id="form-message">
    <p>Formulář není správně vyplněný, opravte prosím červeně označené údaje:</p>
    
    <ul>
      <?foreach ($errors as $error):?>
        <li><?=$error?></li>
      <?endforeach;?>
    </ul>
  </div>
<?endif;?>

<?=$form->attr('id', 'personal_data_form')->add_class('formBox')->open()?>

  <h2>Přihlašovací údaje</h2>  
  <fieldset>
    <div class="cols cols3">
      <div class="col1">
        <div class="clearfix input <?=( ! $form->login_name->error()) ? 'correct' : 'error'?>">
          <div class="lab help">
            <label for="<?=$form->login_name->name()?>"><?=$form->login_name->label()?> <span>*</span></label><em></em>
          </div>
          <div class="con"><?=$form->login_name->add_class('input')->attr(array ('tabindex' => 1))?></div>
        </div>          
      </div>
      <div class="col2">
        <div class="clearfix input <?=( ! $form->password->error()) ? 'correct' : 'error'?>">
          <div class="lab help">
            <label for="<?=$form->password->name()?>"><?=$form->password->label()?> <span>*</span></label><em></em>
          </div>
          <div class="con"><?=$form->password->attr(array ('autocomplete' => 'off'))->add_class('input')->attr(array ('tabindex' => 2))?></div>
        </div>          
      </div>
      <div class="col3">
        <div class="clearfix input <?=( ! $form->password_repeat->error()) ? 'correct' : 'error'?>">
          <div class="lab help">
            <label for="<?=$form->password_repeat->name()?>"><?=$form->password_repeat->label()?>  <span>*</span></label><em></em>
          </div>
          <div class="con"><?=$form->password_repeat->add_class('input')->attr(array ('tabindex' => 3))?></div>
        </div>          
      </div>
    </div>
  </fieldset>


  <h2>Fakturační údaje</h2>  
  <fieldset>
    <div class="cols cols3">
      <div class="col1">
        <div class="clearfix input <?=( ! $form->name->error()) ? 'correct' : 'error'?>">
          <div class="lab help">
            <label for="<?=$form->name->name()?>"><?=$form->name->label()?> <span>*</span></label><em></em>
          </div>
          <div class="con"><?=$form->name->add_class('input')->attr(array ('tabindex' => 4))?></div>
        </div>
      </div>
      <div class="col2">
        <div class="clearfix input <?=( ! $form->surname->error()) ? 'correct' : 'error'?>">
          <div class="lab help">
            <label for="<?=$form->surname->name()?>"><?=$form->surname->label()?> <span>*</span></label><em></em>
          </div>
          <div class="con"><?=$form->surname->add_class('input')->attr(array ('tabindex' => 5))?></div>
        </div>
      </div>
      <div class="col3">
        <div class="clearfix input <?=( ! $form->email->error()) ? 'correct' : 'error'?>">
          <div class="lab help">
            <label for="<?=$form->email->name()?>"><?=$form->email->label()?>  <span>*</span></label><em></em>
          </div>
          <div class="con"><?=$form->email->add_class('input')->attr(array ('tabindex' => 6))?></div>
        </div>
      </div>
    </div>
    <div class="cols cols3">
      <div class="col1">
        <div class="clearfix input <?=( ! $form->street->error()) ? 'correct' : 'error'?>">
          <div class="lab help">
            <label for="<?=$form->street->name()?>"><?=$form->street->label()?> <span>*</span></label><em></em>
          </div>
          <div class="con"><?=$form->street->add_class('input')->attr(array ('tabindex' => 7))?></div>
        </div>
      </div>
      <div class="col2">
        <div class="clearfix input <?=( ! $form->city->error()) ? 'correct' : 'error'?>">
          <div class="lab help">
            <label for="<?=$form->city->name()?>"><?=$form->city->label()?> <span>*</span></label><em></em>
          </div>
          <div class="con"><?=$form->city->add_class('input')->attr(array ('tabindex' => 8))?></div>
        </div>
      </div>
      <div class="col3">
        <div class="clearfix input <?=( ! $form->postcode->error()) ? 'correct' : 'error'?>">
          <div class="lab help">
            <label for="<?=$form->postcode->name()?>"><?=$form->postcode->label()?> <span>*</span></label><em></em>
          </div>
          <div class="con"><?=$form->postcode->add_class('input')->attr(array ('tabindex' => 9))?></div>
        </div>
      </div>
    </div>
    
    <div class="cols cols3">
      <div class="col1">
        <div class="clearfix input <?=( ! $form->phone->error()) ? 'correct' : 'error'?>">
          <div class="lab help">
            <label for="<?=$form->phone->name()?>"><?=$form->phone->label()?> <span>*</span></label><em></em>
          </div>
          <div class="con"><?=$form->phone->add_class('input')->attr(array ('tabindex' => 10))?></div>
        </div>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <?=$form->company_data->attr(array ('id' => $form->company_data->alias(), 'tabindex' => 11))?> <label for="<?=$form->company_data->alias()?>"><?=$form->company_data->label()?></label>
    <div id="companyForm" style="display: block;">
      <div class="cols cols3">
        <div class="col1">
          <div class="clearfix input <?=( ! $form->company->error()) ? 'correct' : 'error'?>">
            <div class="lab help">
              <label for="<?=$form->company->name()?>"><?=$form->company->label()?> <span>*</span></label><em></em>
            </div>
            <div class="con"><?=$form->company->add_class('input')->attr(array ('tabindex' => 12))?></div>
          </div>          
        </div>
        <div class="col2">
          <div class="clearfix input <?=( ! $form->ic->error()) ? 'correct' : 'error'?>">
            <div class="lab help">
              <label for="<?=$form->ic->name()?>"><?=$form->ic->label()?> <span>*</span></label><em></em>
            </div>
            <div class="con"><?=$form->ic->add_class('input')->attr(array ('tabindex' => 13))?></div>
          </div>          
        </div>
        <div class="col3">
          <div class="clearfix input <?=( ! $form->dic->error()) ? 'correct' : 'error'?>">
            <div class="lab help">
              <label for="<?=$form->dic->name()?>"><?=$form->dic->label()?> </label><em></em>
            </div>
            <div class="con"><?=$form->dic->add_class('input')->attr(array ('tabindex' => 14))?></div>
          </div>          
        </div>
      </div>
    </div>
  </fieldset>
  
  <fieldset>
    
    <?=$form->delivery_address->attr(array ('id' => $form->delivery_address->alias(), 'tabindex' => 15))?> <label for="<?=$form->delivery_address->alias()?>"><?=$form->delivery_address->label()?></label>
    <div id="adressForm" style="display: block;">
      <div class="cols cols3">
        <div class="col1">
          <div class="clearfix input <?=( ! $form->delivery_name->error()) ? 'correct' : 'error'?>">
            <div class="lab help">
              <label for="<?=$form->delivery_name->name()?>"><?=$form->delivery_name->label()?> <span>*</span></label><em></em>
            </div>
            <div class="con"><?=$form->delivery_name->add_class('input')->attr(array ('tabindex' => 16))?></div>
          </div>
        </div>
        <div class="col2">
          <div class="clearfix input <?=( ! $form->delivery_surname->error()) ? 'correct' : 'error'?>">
            <div class="lab help">
              <label for="<?=$form->delivery_surname->name()?>"><?=$form->delivery_surname->label()?> <span>*</span></label><em></em>
            </div>
            <div class="con"><?=$form->delivery_surname->add_class('input')->attr(array ('tabindex' => 17))?></div>
          </div>
        </div>
        <div class="col3">
          <div class="clearfix input <?=( ! $form->delivery_company->error()) ? 'correct' : 'error'?>">
            <div class="lab help">
              <label for="<?=$form->delivery_company->name()?>"><?=$form->delivery_company->label()?> </label><em></em>
            </div>
            <div class="con"><?=$form->delivery_company->add_class('input')->attr(array ('tabindex' => 18))?></div>
          </div>
      </div>
      <div class="cols cols3">
        <div class="col1">
          <div class="clearfix input <?=( ! $form->delivery_street->error()) ? 'correct' : 'error'?>">
            <div class="lab help">
              <label for="<?=$form->delivery_street->name()?>"><?=$form->delivery_street->label()?> <span>*</span></label><em></em>
            </div>
            <div class="con"><?=$form->delivery_street->add_class('input')->attr(array ('tabindex' => 19))?></div>
          </div>
        </div>
        <div class="col2">
          <div class="clearfix input <?=( ! $form->delivery_city->error()) ? 'correct' : 'error'?>">
            <div class="lab help">
              <label for="<?=$form->delivery_city->name()?>"><?=$form->delivery_city->label()?> <span>*</span></label><em></em>
            </div>
            <div class="con"><?=$form->delivery_city->add_class('input')->attr(array ('tabindex' => 20))?></div>
          </div>
        </div>
        <div class="col3">
          <div class="clearfix input <?=( ! $form->delivery_postcode->error()) ? 'correct' : 'error'?>">
            <div class="lab help">
              <label for="<?=$form->delivery_postcode->name()?>"><?=$form->delivery_postcode->label()?> <span>*</span></label><em></em>
            </div>
            <div class="con"><?=$form->delivery_postcode->add_class('input')->attr(array ('tabindex' => 21))?></div>
          </div>
        </div>
      </div>
      
      <div class="cols cols3">
        <div class="col1">
          <div class="clearfix input <?=( ! $form->delivery_phone->error()) ? 'correct' : 'error'?>">
            <div class="lab help">
              <label for="<?=$form->delivery_phone->name()?>"><?=$form->delivery_phone->label()?> </label><em></em>
            </div>
            <div class="con"><?=$form->delivery_phone->add_class('input')->attr(array ('tabindex' => 22))?></div>
          </div>
        </div>
      </div>
    </div>
  </fieldset>
  
  <button type="submit" class="btn bg-right bg-next" tabindex="23"><span>Registrovat</span></button>
  
  <div class="clear20px"></div>
<?=$form->close()?>

<script type="text/javascript">
<!--
  $(function() {
    setCompanyBlock(false);
    setDeliveryAddressBlock(false);
    
    $("#<?=$form->company_data->alias()?>").change(function(){
      setCompanyBlock();  
    });
    
    $("#<?=$form->delivery_address->alias()?>").change(function(){
      setDeliveryAddressBlock();  
    });
  });
//-->
</script>