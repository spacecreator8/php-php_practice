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

    $overall=0;
    if($_POST){
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
        foreach($_POST as $key => $value){
            echo "ID of key-" . $key . " - " . gettype($key) .  "<br>";
            $notes = Rooms::where('build', $key)->get();
            foreach($notes as $note){
                $overall += $note->area;
            }
        }    
    }

    echo '<pre>';
    echo "\$overall - " . $overall;
    echo '</pre>';