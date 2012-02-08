<div class="content-menu">
  <h2>Uživatelská zóna</h2>
  <ul>
    <?foreach ($menu->get_items() as $item_lvl1):?>
      <li<?if($item_lvl1['active']):?> class="active"<?endif;?>>
        <a href="<?=$item_lvl1['link']?>"><?=$item_lvl1['label']?></a>
      </li>
    <?endforeach;?>
  </ul>
</div>