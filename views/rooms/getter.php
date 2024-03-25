<h2 class="red_text">Выдача помещений строения</h2>

<form method="post">
<input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/><br>
    <label class="grey_text">В каком здании находится<br><br><select name="build" required>
            <?php
            foreach($builds as $build){
                ?><option value="<?= $build->id; ?>"><?= $build->adress; ?></option><?php
            }
            ?>
    </select></label><br>

    <input class="red_button plus_margin" type="submit" value="Запросить">
</form>


<?php
use Model\Building;
use Model\Rooms;

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

if($_POST){
    foreach($_POST as $key => $value){
        $notes = Rooms::where('build', $value)->get();
        foreach($notes as $note){
            echo "<h3>$note->name ($note->area м^3)</h3>";
        }
    }    
}