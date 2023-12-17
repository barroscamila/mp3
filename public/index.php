<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MP3 em PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
            if (isset($_GET['page'])) {
                if (file_exists("pages/{$_GET['page']}.php")) {
                    include_once "pages/{$_GET['page']}.php";
                } else {
                    include_once 'pages/error404.php';
                }
            } else {
                include_once 'pages/albums.php';
            }
        ?>
    </div>
</body>
</html>