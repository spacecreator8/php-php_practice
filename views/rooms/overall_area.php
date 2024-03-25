<form method="post">
<input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/><br>
    <h2 class="red_text">Выберите строения для подсчета площади</h2>
    <?php
        foreach($builds as $build){
            ?><label for="<?= $build->id;?>"><input type="checkbox" id="<?= $build->id;?>" name="<?= $build->id;?>" value="<?= $build->adress;?>"><?= $build->adress;?></label><br><?php
        }
    ?> 
    <input type="submit" class='red_button plus_margin'>  
</form>

<?php
    use Model\Rooms;

    $overall=0;
    $count = count($_POST);
    if($_POST){
        foreach($_POST as $key => $value){
            $notes = Rooms::where('build', $key)->get();
            foreach($notes as $note){
                $overall += $note->area;
            }
        } 
        echo '<pre>';
        echo "<p class='red_text'>Общая площадь : $overall м^2 (кол-во зданий - $count )</p>";
        echo '</pre>';   
    }

