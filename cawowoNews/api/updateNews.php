<?php

include("connectTodb.php");

// cek apakah tombol daftar sudah diklik atau blum?
function update_news($post, $id_news) {
    global $connect;
        
    $title = $post['title'];
    $description = $post['description'];
    $image = $post['image'];
    
    $query = "UPDATE news SET title = '$title', description = '$description', image = '$image' WHERE id=$id_news";
    mysqli_query($connect, $query);
    
   return mysqli_affected_rows($connect);
}


?>
