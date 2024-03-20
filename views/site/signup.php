<h2>Регистрация нового пользователя</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
   <label>Имя <input type="text" name="name"></label><br>
   <label>Логин <input type="text" name="login"></label><br>
   <label>Пароль <input type="password" name="password"></label><br>
   <label>Сделать админом?<input type="radio" value="0" name="is_admin" checked>Нет</label>
   <input type="radio" value="1" name="is_admin">Да</label><br>
   <button>Зарегистрироваться</button>
</form>
