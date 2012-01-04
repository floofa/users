<div style="padding: 20px; background-color: #333; color: #fff; margin: 0 0 25px 0; font-size: 0.75em; line-height: 1.5em; border-top: 10px solid #d00;">
  <h1 style="letter-spacing: 1px; font-weight: normal; word-spacing: 1px">Zapomenuté heslo uživatele <span style="color: #d00; font-weight: bold;"><?=$user->name?></span> (ID <?=$user->id?>)</h1>
</div>

<div style="padding: 20px; background-color: #ddd; margin: 0 0 25px 0; font-size: 0.75em; line-height: 1.5em;">
  <table cellspacing="0" cellpadding="0" width="50%" style="font-size: 100%; line-height: 150%; margin-bottom: 10px;">
    <tbody>
      <tr>
        <td>Přihlašovací jméno:</td><td style="font-weight: bold;"><?=$user->login_name?></td>
      </tr>
      <tr>
        <td>Heslo:</td><td style="font-weight: bold;"><?=$password?></td>
      </tr>
    </tbody>
  </table>
</div>
