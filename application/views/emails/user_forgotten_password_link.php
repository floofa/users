<div style="padding: 20px; background-color: #333; color: #fff; margin: 0 0 25px 0; font-size: 0.75em; line-height: 1.5em; border-top: 10px solid #d00;">
  <h1 style="letter-spacing: 1px; font-weight: normal; word-spacing: 1px">Zapomenuté heslo uživatele <span style="color: #d00; font-weight: bold;"><?=$user->name?></span> (ID <?=$user->id?>)</h1>
</div>

<div style="padding: 20px; background-color: #ddd; margin: 0 0 25px 0; font-size: 0.75em; line-height: 1.5em;">
  Pro zaslání nového hesla klikněte na následující odkaz: <a href="<?=Route::url('user_forgotten_password_change', array ('hash' => $user->change_password_hash))?>" style="color: #333;"><?=Route::url('user_forgotten_password_change', array ('hash' => $user->change_password_hash), TRUE)?></a>.
</div>
