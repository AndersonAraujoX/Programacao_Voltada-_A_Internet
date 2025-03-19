<HTML>
<HEAD>
<TITLE>Evento de fotógrafia</TITLE>
</HEAD>
<BODY  TEXT="#000000" LINK="#0000ff" bgcolor="#FFFFFF">
<BASEFONT SIZE=4>
<H2><STRONG><I> Classificados - Home Page </I></STRONG></H2>
<P>
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
$nome=$_GET['nome'];
error_reporting(E_ALL);
ini_set('display_errors', '1');
$f1=$_POST["foto_1"];
//header (" Content-type: image/jpeg ");
$image=LoadPNG('solar.png');
imagepng($image);
/*$f2=$_POST["foto_2"];
$f3=$_GET["foto_3"];
$f4=$_GET["foto_4"];
$f5=$_GET["foto_5"];
$n1=$_GET["nome_1"];
$n2=$_GET["nome_2"];
$n3=$_GET["nome_3"];
$n4=$_GET["nome_4"];
$n5=$_GET["nome_5"];
print"$nome/$n1";
print"<img src=$f1>";
move_uploaded_file($f1,'fotos');
 print "<p> Obrigado por participar do nosso evento<p> \n";
 print "<p> \n <p>";
 print "<p> veja seus dados abaixo <p> \n";
 print "<p> \n <p>";
 print "<p>" . $_GET['nome'] . "<p> \n";
 print "<p>" . "foto 1:" . "<p> \n";
 print "<p> nome:" . $_GET['nome_1'] . "<p> \n";
 print "<p> Descrição" . $_GET['descricao_1'] . "<p> \n";
 print "<p>" . "foto 2:" . "<p> \n";
 print "<p> nome:" . $_GET['nome_2'] . "<p> \n";
 print "<p> Descrição:" . $_GET['descricao_2'] . "<p> \n";
 print "<p>" . "foto 3:" . "<p> \n";
 print "<p> nome:" . $_GET['nome_3'] . "<p> \n";
 print "<p> Descrição:" . $_GET['descricao_3'] . "<p> \n";
 print "<p>" . "foto 4:" . "<p> \n";
 print "<p> nome:" . $_GET['nome_4'] . "<p> \n";
 print "<p> Descrição:" . $_GET['descricao_4'] . "<p> \n";
 print "<p>" . "foto 5:" . "<p> \n";
 print "<p> nome:" . $_GET['nome_5'] . "<p> \n";
 print "<p> Descrição:" . $_GET['descricao_5'] . "<p> \n";*/
?>
</BODY>
</HTML>
