<?php
    include __DIR__. '/db.php';

    

    if(isset($_GET['genre'])){
        $genre = $_GET['genre'];
        $filteredAlbums = [];
        foreach($albums as $album){
            if($album['genre'] == $genre){
              $filteredAlbums[] = $album;
            }
        }
    } else {
        $filteredAlbums = $albums;
    }



    header('Content-type: application/json');

    echo json_encode($filteredAlbums);