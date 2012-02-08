<?
  function render_purchase_personal_data_input($field, $required = FALSE) {
    echo '<div class="input '. (( ! $field->error()) ? 'correct' : 'error') .'">' .
          '<label for="' . $field->alias() . '">' . $field->get('label') . ' ' . (($required) ? ('<span>*</span>') : '') . '</label>' .
          $field->render() .
          '<span class="error">' . $field->error() . '</span>' .
          '<div class="clear"></div>' .
        '</div>';
  }
  
?>

<?=$form->view()->add_class('standard submit')->field()->open()?>
  <fieldset>
    <div class="form_high">
      <div class="input">
        <?=render_purchase_personal_data_input($form->old_password, TRUE)?>
        <?=render_purchase_personal_data_input($form->new_password, TRUE)?>
        <?=render_purchase_personal_data_input($form->new_password_repeat, TRUE)?>
      </div>
    </div>
    
    <a href="" id="submit_<?=$form->name()?>" class="submit script"><?=___('save')?></a>
    <input type="submit" value="uložit" class="submit noscript">
  </fieldset>
  
</form>

<script type="text/javascript">
<!--
  $(function(){
    // odeslani formulare
    $("#submit_<?=$form->name()?>").click(function(){
      $.cms.submit("<?=$form->name()?>");
      return false;
    });
  });
//-->
</script>