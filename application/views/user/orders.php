<h1>Objednávky</h1>

<?if ( ! count($orders)):?>
  <p>Doposud nebyly vytvořeny žádné objednávky.</p>
<?else:?>
  <table class="tab tabOrders">
    <tr>
      <th class="id">Č. obj.</th>
      <th>Datum přijetí</th>
      <th class="price">Cena s DPH</th>
      <th class="state">Stav</th>
      <th class="actions"></th>
    </tr>
  
    <?foreach ($orders as $order):?>
      <tr>
        <td><?=$order->id?></td>
        <td><?=date('d.m.Y', $order->timestamp)?></td>
        <td class="price"><?=number_format($order->total_price_rounded, 0, '.', ' ')?>,- Kč</td>
        <td><?=___('orders_states.' . $order->state)?></td>
        <td><a href="<?=Route::url('user_orders-detail', array ('id' => $order->id))?>">zobrazit</a></td>
      </tr>
    <?endforeach;?>
  </table>
<?endif;?>