<?php

function resize_image($file, $w, $h, $crop=FALSE) {
   list($width, $height) = getimagesize($file);
   $r = $width / $height;
   if ($crop) {
       if ($width > $height) {
           $width = ceil($width-($width*abs($r-$w/$h)));
       } else {
           $height = ceil($height-($height*abs($r-$w/$h)));
       }
       $newwidth = $w;
       $newheight = $h;
   } else {
       if ($w/$h > $r) {
           $newwidth = $h*$r;
           $newheight = $h;
       } else {
           $newheight = $w/$r;
           $newwidth = $w;
       }
   }
   $src = imagecreatefromjpeg($file);
   $dst = imagecreatetruecolor($newwidth, $newheight);
   imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
   imagejpeg($dst, $file);
   return $dst;
}
$imgResized = resize_image("path/to/image.jpeg", 300, 300);
?>