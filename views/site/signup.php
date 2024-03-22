<h2 class="red_text">Создание нового пользователя</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
   <label class="grey_text">Придумайте логин <br><input type="text" name="username"></label><br>
   <label class="grey_text">Введите имя<br><input type="text" name="name"></label><br>
   <label class="grey_text">Введите фамилию <br><input type="text" name="surname"></label><br>
   <label class="grey_text">Пароль <br><input type="password" name="password"></label><br>
   <label class="grey_text">Сделать админом?<br><input type="radio" value="0" name="is_admin" checked><span>Нет</span>
   <input type="radio" value="1" name="is_admin"><span>Да</span></label><br>
   <button class="red_button">Создать пользователя</button>
</form>
