
<h2 class="red_text">Внесение нового помещения в базу данных</h2>

<form method="post">

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


    
    <label class="grey_text">Название или номер помещения<br><input type="text" name="name" required placeholder="название помещения"></label><br>

    <label class="grey_text">Площадь помещения<br><input type="number" name="area" required placeholder="площадь"></label><br>

    <label class="grey_text">Колличество мест<br><input type="number" name="places" required placeholder="кол-во мест"></label><br>

    <input class="red_button plus_margin" type="submit">
</form>

<?php
    print_r($_POST);
