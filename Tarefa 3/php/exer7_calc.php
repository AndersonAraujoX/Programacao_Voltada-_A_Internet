<?php
function LoadPNG($imgname)
{
    /* Attempt to open */
    $im = @imagecreatefrompng($imgname);

    /* See if it failed */
    if(!$im)
    {
        /* Create a blank image */
        $im  = imagecreatetruecolor(150, 30);
        $bgc = imagecolorallocate($im, 255, 255, 255);
        $tc  = imagecolorallocate($im, 0, 0, 0);

        imagefilledrectangle($im, 0, 0, 150, 30, $bgc);

        /* Output an error message */
        imagestring($im, 1, 5, 5, 'Error loading ' . $imgname, $tc);
    }
    return $im;
}
header('Content-Type: image/png');
$sol = $_POST['sol'];
$mercurio = $_POST['mercurio'];
$venus = $_POST['venus'];
$terra = $_POST['terra'];
$marte = $_POST['marte'];
$jupiter = $_POST['jupiter'];
$saturno = $_POST['saturno'];
$urano = $_POST['urano'];
$netuno = $_POST['netuno'];
$img = LoadPNG('solar.png');
$cor = imagecolorallocate($img,0 , 0, 0);
$branco = imagecolorallocate($img, 255, 255, 255);
/*imagefilledrectangle($img, 60, 106, 110, 134, $branco);*/
imagestring($img, 5, 80, 104, $sol, $cor);
imagestring($img, 5, 220, 110, $mercurio, $cor);
imagestring($img, 5, 300, 140, $venus, $cor);
imagestring($img, 5, 380, 110, $terra, $branco);
imagestring($img, 5, 450, 120, $marte, $cor);
imagestring($img, 5,575 , 104, $jupiter, $cor);
imagestring($img, 5,700 , 120, $saturno, $cor);
imagestring($img, 5, 820, 121, $urano, $cor);
imagestring($img, 5, 880, 121, $netuno, $cor);
imagepng($img);
imagedestroy($img);
?>
            
      