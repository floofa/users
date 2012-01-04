<?=$form->open()?>
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
          <div class="clearfix <?=( ! $form->login_name->error()) ? 'correct' : 'error'?>">
            <div class="lab">
              <label for="<?=$form->login_name->name()?>"><?=$form->login_name->get('label')?></label>            
            </div>
            <div class="con">
              <?=$form->login_name?>
            </div>
          </div>
        </div><!-- /.col1 -->
        <div class="col2">
          <button class="btn login fl" href="#" id="login-submit-button" tabindex="2"><span>Odeslat</span></button>
        </div><!-- /.col2 -->
        <div class="col3">
        </div>
      </div><!-- /.cols -->
    </div><!-- /#loginForm -->
  </fieldset>
</form>