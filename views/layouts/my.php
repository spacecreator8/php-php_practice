<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Работаем</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div class="main_div">
    <header>Ресурс учета площади помещений СибГМУ</header>
        <div class="action_div">
            <nav>
                <a href="<?= app()->route->getUrl('/hello') ?>">Добавить строение</a>
                <a href="<?= app()->route->getUrl('/hello') ?>">Добавить помещение</a>
                <a href="<?= app()->route->getUrl('/hello') ?>">Добавить тип помещения</a>
                <a href="<?= app()->route->getUrl('/hello') ?>">Список помещений</a>
                <a href="<?= app()->route->getUrl('/hello') ?>">Подсчет общей площади</a>
                <a href="<?= app()->route->getUrl('/hello') ?>">Подсчет посадочных мест</a>

                <a href="<?= app()->route->getUrl('/hello') ?>">Создать пользователя</a>

                <a href="<?= app()->route->getUrl('/logout') ?>">Выход</a>
                
            </nav>

            <main>
                <?= $content ?? '' ?>
            </main>
            <style>
                *{
                    margin:0;
                    padding:0;
                    box-sizing: border-box;
                }
                header{
                    height:10vw;
                    max-height:110px;
                    border:1px solid black;

                    color:#666666;
                    font-weight: 900;
                    font-family:Arial;
                    font-size: 48px;
                    text-align: center;
                    line-height: 100px;
                }
                .action_div{
                    position:relative;
                    display:flex;
                    justify-content:flex-start;
                }
                nav{
                    min-height:83vh;
                    width:20vw;
                    max-width:250px;

                    border:1px solid black;
                    background-color: #EEEEEE;
                    position:sticky;
                    top:110px;
                    display:flex;
                    flex-direction:column;

                    padding-top:50px;
                }
                nav>a{
                    margin:11px;
                    margin-left:20px;

                    text-decoration: none;
                    color: #666666;
                    font-weight: 900;
                    font-family: Arial;
                }
                nav>a:hover{
                    color:#C93239;
                }
                main{
                    min-height:83vh;
                    width:81vw;
                    border:1px solid black;
                    background-color: #F4F4F4;
                }
            </style>
        </div>
    </div>

</body>
</html>