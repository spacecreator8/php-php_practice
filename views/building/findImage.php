<form method="post"  enctype="multipart/form-data">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/><br>
    <div class="red_text">Поиск изображения</div><br>
    <?php 
    if(isset($message)){
        echo "<div class='red_text'>".$message."</div>";
    }
    ?>

    <?php
    if(isset($image)){
        ?><img src="images/<?= $image ?>" alt="Building Image"><br><br><br><?php

    }
    ?>

    <label class="grey_text">Введите адрес (или его часть) <br><input type="text" name="fimg" placeholder="Введите название"></label><br>
    <input type="submit" class="red_button plus_margin"><br>
</form>

<?php
echo "<pre>";
echo "Root- ".$path."<br>";
echo "Controller- ".$real."<br>";
echo "Template-" . __DIR__;
echo "</pre>";