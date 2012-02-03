<div class="address page" id="checkout">
  <h1><?=___('OBNOVENÍ HESLA')?></h1>
  
  <?if ($sent):?>
    <p><?=___('Odkaz pro obnovení hesla Vám byl zaslán na e-mail uvedný při registraci.')?></p>
  <?else:?>
    <?=$form?>
  <?endif;?>
</div>