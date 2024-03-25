
<h2 class="red_text">Внесение нового помещения в базу данных</h2>

<form method="post">
<input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/><br>

    <?php 
    if(isset($message)){
        echo "<div class='red_text'>".$message."</div>";
    }
    ?>

    <label class="grey_text">В каком здании находится<br><select name="build" required>
        <?php
        foreach($buildings as $build){
            ?><option value="<?= $build->id; ?>"><?= $build->adress; ?></option><?php
        }
        ?>
    </select></label><br>

    <label class="grey_text">Вид помещения<br><select name="type" required>
        <?php
        foreach($types as $type){
            ?><option value="<?= $type->id; ?>"><?= $type->kind; ?></option><?php
        }
        ?>
    </select></label><br>


    
    <label class="grey_text">Название или номер помещения<br><input type="text" name="name"  placeholder="название помещения"></label><br>

    <label class="grey_text">Площадь помещения<br><input type="text" name="area"  placeholder="площадь"></label><br>

    <label class="grey_text">Колличество мест<br><input type="text" name="places"  placeholder="кол-во мест"></label><br>

    <input class="red_button plus_margin" type="submit">
</form>

<?php
    // print_r($_POST);
