<form method="post"  enctype="multipart/form-data">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/><br>
    <div class="red_text">Добавление здания</div><br>
    <?php 
    if(isset($message)){
        echo "<div class='red_text'>".$message."</div>";
    }
    ?>
    <label class="grey_text">Введите адрес <br><input type="text" name="adress" placeholder="Введите адрес"></label><br>
    <label class="grey_text2">Фото<br><input type="file" name="photo"></label><br>
    <input type="submit" class="red_button plus_margin"><br>
</form>


<?php
    echo "<h2>Список зданий</h2><ol>";
    foreach($posts as $post){
        echo "<li><div>". $post->adress . "</div></li>";
    }
    echo "</ol>";
    echo "<br><pre>";
    print_r($_FILES);
    echo"</pre>";