<?php
include __DIR__. '/backend/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="./styles/style.css">
    <!-- vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js" ></script>
    <script src="./js/main.js" defer></script>
    <title>Document</title>
</head>
<body>
<div id="app">
    <header class="p-1">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png" alt="">
      </header>
      <main>
        <div class="container-lg">
            <div class="row g-4 justify-content-center position-relative">
                <?php foreach($albums as $album){?>
                <div class="single-card col-2 mx-3 p-2 text-center">
                <img src=" <?php echo $album['poster'] ?> " alt="">
                    <p>
                        <?php echo $album['title']?>
                    </p>
                    <p> <?php echo $album['author']?> </p>
                    <p> <?php echo $album['genre']?></p>
                </div>
                <?php } ?>
            </div>
                </div>
            </div>
      </main>
</div>
</body>
</html>