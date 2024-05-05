<?php

include("connectTodb.php");

// cek apakah tombol daftar sudah diklik atau blum?
function post_news($post) {
    global $connect;
        
    $title = $post['title'];
    $description = $post['description'];
    $image = $post['image'];
    
    $query = "INSERT INTO news (title,description, image) VALUE ('$title', '$description', '$image')";
    mysqli_query($connect, $query);
    
    // apakah query simpan berhasil?
   return mysqli_affected_rows($connect);
}


?>
