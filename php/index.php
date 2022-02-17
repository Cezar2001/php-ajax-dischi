<?php 

require_once __DIR__ . "/db/data.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <!-- navbar -->
    <div class="logo-container">
        <img class="logo" src="https://th.bing.com/th/id/R.cdbd7c0bd0c0324064ea876f18d936f9?rik=deMnRk0z%2f9v1Bg&riu=http%3a%2f%2fwww.pearlinux.fr%2fwp-content%2fuploads%2f2017%2f04%2fspotify-music.png&ehk=%2bbtZ94TR91Bvdo2%2fAplSAwxghO6L1IEQe%2fnrBYvQYRE%3d&risl=&pid=ImgRaw&r=0&sres=1&sresct=1" />
    </div>
    
    <!-- main -->
    <div class="container">

        <?php
            foreach ($discList as $disc) {
        ?>

            <div class="img-container">
                <img src="<?php echo $disc['poster'] ?>">  
                <h3><?php echo strtoupper($disc['title'])?></h3>
                <div class="info"><?php echo $disc['author'] ?></div>
                <div class="info"><?php echo $disc['year'] ?></div>
            </div>

        <?php   
            }
        ?>
    </div>
</body>
</html>