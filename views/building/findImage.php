<form method="post"  enctype="multipart/form-data">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/><br>
    <div class="red_text">Поиск изображения</div><br>




    <label class="grey_text">Введите адрес (или его часть) <br><input type="text" name="fimg" placeholder="Введите название"></label><br>
    <input type="submit" class="red_button plus_margin"><br>
</form>

<?php
    echo "<pre>";
    $var = (mb_strtolower($_POST['fimg']));
    echo $var;
    echo "</pre>";

    if(isset($objects)){
        foreach($objects as $index=>$obj){
            echo "<div class='red_text'>$obj->adress</div>";
            echo "<div class='red_text'>$obj->id</div>";
            ?><img src="images/<?= $images[$index] ?>" alt="Building Image"><br><br><br><?php
        }
    }

