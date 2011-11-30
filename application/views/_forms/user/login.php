<?=$form->add_class('formBox')->attr(array ('id' => $form->name()))->open()?>
  <?if ($errors = $form->errors()):?>
    <div id="form-message" class="error">
      <?foreach ($errors as $error):?>
        <p><?=$error?></p>
      <?endforeach;?>
    </div>
  <?endif;?>

  <fieldset>
    <div id="loginForm">
      <div class="cols cols3">
        <div class="col1">
          <div class="clearfix correct">
            <div class="lab">
              <label for="<?=$form->login_name->name()?>"><?=$form->login_name->label()?></label>            
            </div>
            <div class="con">
              <?=$form->login_name->add_class('input')->attr(array ('tabindex' => 1))?>
            </div>
          </div>
        </div><!-- /.col1 -->
        <div class="col2">
          <div class="clearfix correct">
            <div class="lab help">
              <label for="<?=$form->password->name()?>"><?=$form->password->label()?></label><a class="forgot" href="<?=Route::url('user_forgotten_password_link', array (), TRUE)?>" tabindex="4">Neznáte své heslo?</a>
            </div>
            <div class="con">
              <?=$form->password->add_class('input')->attr(array ('tabindex' => 2))?>
            </div>
          </div>
        </div><!-- /.col2 -->
        <div class="col3">
          <button class="btn login fl" href="#" id="login-submit-button" tabindex="3"><span>Přihlásit</span></button>
        </div>
      </div><!-- /.cols -->
    </div><!-- /#loginForm -->
  </fieldset>
<?=$form->close()?>
