<form method="post">
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

    if($_POST){
        $overall=0;
        $count = count($_POST);
        if($_POST){
            foreach($_POST as $key => $value){
                $notes = Rooms::where('build', $key)->get();
                foreach($notes as $note){
                    $overall += $note->places;
                }
            }    
        }
        echo "<p class='red_text'>В общем мест : $overall (кол-во зданий - $count )</p>";
    }
        
