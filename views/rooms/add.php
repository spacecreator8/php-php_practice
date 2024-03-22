

<?php
    echo "<h2>Список типов помещений</h2><ol>";
    foreach($posts as $post){
        echo "<li><h3>". $post->name . "</h3></li>";
        echo "<div>" . $post->type->kind . "</div>";
        echo "<div>" . $post->area . "</div>";
        echo "<div>" . $post->build->adress . "</div>";
    }
    echo "</ol>";