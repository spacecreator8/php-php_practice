<form method="post">
    <div class="red_text">Добавление типа помещения</div><br>
    <label class="grey_text">Введите новый тип помещения <br>
        <input type="text" name="kind" required placeholder="Введите новый тип"></label><br>
    <input type="submit" class="red_button"><br>
</form>


<?php
    echo "<h2>Список типов помещений</h2><ol>";
    foreach($posts as $post){
        echo "<li><div>". $post->kind . "</div></li>";
    }
    echo "</ol>";