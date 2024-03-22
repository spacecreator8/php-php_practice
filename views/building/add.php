<form method="post">
    <div class="red_text">Добавление здания</div><br>
    <label class="grey_text">Введите адрес <br><input type="text" name="adress" required placeholder="Введите адрес"></label><br>
    <input type="submit" class="red_button"><br>
</form>


<?php
    echo "<h2>Список зданий</h2><ol>";
    foreach($posts as $post){
        echo "<li><div>". $post->adress . "</div></li>";
    }
    echo "</ol>";