<form method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/><br>
    <div class="red_text">Добавление типа помещения</div><br>
    <?php 
    if(isset($message)){
        echo "<div class='red_text'>".$message."</div>";
    }
    ?>
    <label class="grey_text">Введите новый тип помещения <br>
        <input type="text" name="kind" placeholder="Введите новый тип"></label><br>
    <input type="submit" class="red_button"><br>
</form>


<?php
    echo "<h2>Список типов помещений</h2><ol>";
    foreach($posts as $post){
        echo "<li><div>". $post->kind . "</div></li>";
    }
    echo "</ol>";