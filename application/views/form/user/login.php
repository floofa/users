<?if ($errors = $form->errors()):?>
    <div class="error">
      <?foreach ($errors as $error):?>
        <?=$error?>.<br />
      <?endforeach;?>
    </div>
  <?endif;?>

<?=$form->open()?>
  <?=$form->redirect?>

  <fieldset>
    <div>
      <label for="<?=$form->email->name()?>"><?=$form->email->get('label')?></label>
      <?=$form->email?>
    </div>
    <div>
      <label for="<?=$form->password->name()?>"><?=$form->password->get('label')?></label>
      <?=$form->password?>
    </div>

    <button type="submit" value="<?=___('přihlásit se')?>">Přihlásit se</button>
    <div class="clear"></div>
  </fieldset>

  <div class="else">
    <a href="<?=Route::url('user_forgotten_password')?>"><?=___('zapomněli jste heslo?')?></a>
    <a<?if ($data['type'] == 'purchase'):?> id="login_form_register_link"<?endif;?> href="<?=Route::url('user_register')?>"><?=___('registrace')?></a>
    <div class="clear"></div>
  </div>
</form>
