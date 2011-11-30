<?=$form->add_class('formBox')->attr(array ('id' => $form->name()))->open()?>
  <?if ($errors = $form->errors()):?>
    <div id="form-message" class="error">
      <p>Formulář není správně vyplněný, opravte prosím červeně označené údaje:</p>
      <ul>
        <?foreach ($errors as $error):?>
          <li><?=$error?></li>
        <?endforeach;?>
      </ul>
    </div>
  <?endif;?>

  <fieldset>
    <div id="loginForm">
      <div class="cols cols3">
        <div class="col1">
          <div class="clearfix <?=( ! $form->actual_password->error()) ? 'correct' : 'error'?>">
            <div class="lab">
              <label for="<?=$form->actual_password->name()?>"><?=$form->actual_password->label()?></label>            
            </div>
            <div class="con">
              <?=$form->actual_password->add_class('input')->attr(array ('tabindex' => 1))?>
            </div>
          </div>
        </div><!-- /.col1 -->
        <div class="col2">
          <div class="clearfix <?=( ! $form->new_password->error()) ? 'correct' : 'error'?>">
            <div class="lab">
              <label for="<?=$form->new_password->name()?>"><?=$form->new_password->label()?></label>            
            </div>
            <div class="con">
              <?=$form->new_password->add_class('input')->attr(array ('tabindex' => 2))?>
            </div>
          </div>
        </div><!-- /.col2 -->
        <div class="col3">
          <div class="clearfix <?=( ! $form->new_password_repeat->error()) ? 'correct' : 'error'?>">
            <div class="lab">
              <label for="<?=$form->new_password_repeat->name()?>"><?=$form->new_password_repeat->label()?></label>            
            </div>
            <div class="con">
              <?=$form->new_password_repeat->add_class('input')->attr(array ('tabindex' => 2))?>
            </div>
          </div>
        </div>
      </div><!-- /.cols -->
      
      <button class="btn login fl" href="#" id="login-submit-button" tabindex="3"><span>Uložit</span></button>
    </div><!-- /#loginForm -->
  </fieldset>
<?=$form->close()?>