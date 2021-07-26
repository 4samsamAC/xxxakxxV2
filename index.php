<?php

    $title = 'index';
    
    if(isset($_GET['type'])){
        $type = $_GET['type'];
      }else{
        $type = "gif";
      }
    //   if(isset($_GET['page'])){
    //     $page = $_GET['page'];
    //   }else{
    //     $page = "0";
    //   }
    if ($type == "gif"){
        $webp = true;
    } elseif ($type == "img"){
    } else $type = "gif";

    if ($webp == true){
        $files3 = glob("img/*.webp");
    }
    $files = glob("img/*.$type");
    $compteur = count($files);
        $divn = 0; 
        $divnf = 0;
        $divn3 = 0; 
        $divnf3 = 0;
    dn:
        $divn = $divn+4;
        $divnf = $divnf+1;
    if ($compteur >= $divn){
        goto dn;
    }
    $compteur2 = count($files3)+$compteur;
    $compteur3 = count($files3);
    dn3:
        $divn3 = $divn3+4;
        $divnf3 = $divnf3+1;
    if ($compteur3 >= $divn3){
        goto dn3;
    }
    $divn2 = $divn+$divn3;
    $divnf2 = $divnf+$divnf3;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="assets/style.css">
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
    <!-- <script src="" defer></script> -->
    <title><?= $title ?></title>
</head>
<body>
    <div>
    <?php 
        echo "nombre de fichier ".$compteur2."<br>";
        echo "nobres de fichier max ".$divn2."<br>"; 
        echo "nobre de div ".$divnf2."<br>"; 
        echo "le type de fichier demander est ".$type;
    ?>
</div>
<br>
<div>
<p>
    <?php
        $numt3 = $compteur3;
        pass3:
        if ($numt3 >= 1){
            echo "<a href=\"img/".$numt3.".webp\"><img class=\"img\" src=\"img/".$numt3.".webp\" width=\"24%\" height=\"24%\"></a>&nbsp&nbsp&nbsp";
            $numt3 = $numt3-1;
            goto pass3;
        }
        $numt = $compteur;
        pass:
        if ($numt >= 1){
            echo "<a href=\"img/".$numt.".".$type."\"><img class=\"img\" src=\"img/".$numt.".".$type."\" width=\"24%\" height=\"24%\"></a>&nbsp&nbsp&nbsp";
            $numt = $numt-1;
            goto pass;
        }
?>
</p>
</div>
</body>
</html>