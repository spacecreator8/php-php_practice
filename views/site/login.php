<h2>Авторизация</h2>
<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
   ?>
   <form method="post" class="autorisation_form">
       <label>Логин <input type="text" name="login" class="login_auth"></label>
       <label>Пароль <input type="password" name="password" class="psw_auth"></label>
       <button>Войти</button>
   </form>
<?php endif;
