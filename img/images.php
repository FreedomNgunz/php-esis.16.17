<?php
    header('content-type: image/png');
    $img1=imagecreate(800,500);
    //$img2=imagecreatefrompng("star.png");
    //imagepng($img2, "star.png");
    $jaune= imagecolorallocate($img1, 0, 255, 200);//prior to first color
    $noir= imagecolorallocate($img1, 0, 0, 0);
    $police=5;
    $texte="Ajouter ici votre texte";
    $taille=strlen($texte);
    $x=10;
    $y=80;
    imagestring($img1, $police, $x, $y, $texte, $noir);
    imagestringup($img1, $police, $x, $y, "$texte", $noir);
    $x1=90;
    $y1=90;
    $x2=390;
    $y2=290;
    imagesetthickness($img1,3);
    imagesetpixel($img1, $x, $y, $noir);
    imageline($img1,$x1,$y1,$x2,$y2,$noir);
    $x1=700;
    $y1=100;
    $x2=80;
    $y2=40;
    imagefilledrectangle($img1,$x1,$y1,$x2,$y2,$noir);
    $x1=700;
    $y1=350;
    $x2=80;
    $y2=40;
    imagerectangle($img1,$x1,$y1,$x2,$y2,$noir);
    $cx=400;
    $cy=270;
    $w=400;
    $h=300;
    imageellipse($img1,$cx,$cy,$w, $h, $noir);
    $w=300;
    $h=300;
    imagefilledellipse($img1,$cx,$cy,$w, $h, $noir);
    imagecolortransparent($img1,$jaune);
    imagepng($img1);
?>