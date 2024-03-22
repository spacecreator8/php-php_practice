<form method="post">
    <h2 class="red_text">Выберите строения для подсчета площади</h2>
    <?php
        foreach($posts as $post){
            ?><label for="<?= $post->id;?>"><input type="checkbox" id="<?= $post->id;?>" name="<?= $post->id;?>" value="<?= $post->adress;?>"><?= $post->adress;?></label><br><?php
        }
    ?> 
    <input type="submit" class='red_button plus_margin'>  
</form>

<?php
    if($_POST){
        print_r($_POST);
    }