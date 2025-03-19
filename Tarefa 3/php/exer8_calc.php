<!DOCTYPE html>
<html>
    <body>
    <?php
    //calculo
    $tipo=$_GET["tipo"];
    echo "$tipo <hr>";
    //$arquivo = fopen("voto.txt",'r');
    $file1=fopen("voto1.txt","r+");
    $file2=fopen("voto2.txt","r+");
    while (($array1 = fgets($file1)) !== false) {
        $v1=$array1;
    }
    while (($array2 = fgets($file2)) !== false) {
        $v2=$array2;
    }
    fclose($file1);
    fclose($file2);
    $file1=fopen("voto1.txt","w");
    $file2=fopen("voto2.txt","w");
        if ($tipo=="Biscoito"){
            $v1=$v1+1; 
        }
        if ($tipo=="Bolacha"){
            $v2=$v2+1;
        }
        fwrite($file1,intval($v1));
        fwrite($file2,intval($v2));
    fclose($file1);
    fclose($file2);
    echo"<p> Numero de votos totais de Bolacha:$v1 </p>";
    echo"<p>Quantos porcento votaram em Bolacha</p>";
    echo $v1*100.0/($v1+$v2);
    echo "%";
    echo"<p> Numero de votos totais de Biscoito:$v2 </p>";
    echo"<p>Quantos porcento votaram em Biscoito </p>";
    echo $v2*100.0/($v1+$v2);
    echo "%";
    ?>
    </body>
</html>