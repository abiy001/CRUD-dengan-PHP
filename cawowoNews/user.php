<?php 
    // $source = "http://localhost/cawowoNews/getNews.php";
    // $content = file_get_contents($source);
    // $data =json_decode($content,true);

    // var_dump($data);

    include "./api/getNews.php";
    $data_news = select("SELECT * FROM news")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class='flex items-center'>
<div class='grid gap-4 place-content-center grid-cols-4 w-screen w-80 '>
    <?php
        foreach ($data_news['items'] as $value) {?>
    <div class=' bg-red-600 flex flex-col w-full'>
        <div>
            <img src=<?php echo $value['image']?>  alt='card-pic'/>
        </div>
        <div>
            <h1 class='text-slate-50'><?php echo $value['title']?></h1>
        </div>
        <div>
            <h1><?php echo $value['description']?></h1>
        </div>

        </div>
    <?php
}
?>
</div>
</div>
</body>
</html>