<!DOCTYPE html>
<html>
    <body>
    <?php
    //calculo
    $tipo=$_GET["tipo"];
    echo "$tipo <hr>";
    $arquivo = fopen("/".$name."/voto.dat",'r+');
    $file=file("/".$name."/voto.dat","r+");
    $soma=0;
    for($i=0;4;$i++){
        $soma+=$file[$i];
    }
    fclose($file1);
    fclose($file2);
    echo $file[0]*100.0/($soma);
    echo "%\n";
    echo $file[1]*100.0/($soma);
    echo "%\n";
    echo $file[2]*100.0/($soma);
    echo "%\n";
    echo $file[3]*100.0/($soma);
    echo "%\n";
    echo $file[4]*100.0/($soma);
    echo "%\n";
    ?>
    </body>
</html>