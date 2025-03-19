<!DOCTYPE html>
<html>
    <body>
    <?php
        $d["A"]=1;
        $d["J"]=1;
        $d["S"]=1;
        $d["B"]=2;
        $d["K"]=2;
        $d["T"]=2;
        $d["C"]=3;
        $d["L"]=3;
        $d["U"]=3;
        $d["D"]=4;
        $d["M"]=4;
        $d["V"]=4;
        $d["E"]=5;
        $d["N"]=5;
        $d["W"]=5;
        $d["F"]=6;
        $d["O"]=6;
        $d["X"]=6;
        $d["G"]=7;
        $d["P"]=7;
        $d["Y"]=7;
        $d["H"]=8;
        $d["Q"]=8;
        $d["Z"]=8;
        $d["I"]=9;
        $d["R"]=9;
        //tabela de pitagórica
    ?>
    <?php
    //calculo
    $nome=$_GET["nome"];
    $snome=str_split($nome);
    
    $num_nome=count($snome);
    $soma=0.0;
    for ($a=0;$a<=$num_nome;$a++){
        $soma=$soma+$d[$snome[$a]];
    }
    while($soma>=10){
        $nome=strval($soma);//escrevendo o numero em string
        $snome=str_split($nome);// seprando a string
        $num_nome=count($snome);
        $soma=0.0;
        for ($a=0;$a<=$num_nome;$a++){
            $soma=$soma+(int)$snome[$a];//somando a string
        }
    }
    //saida de dados
    echo "<p>o seu numero da sorte é : $soma</p>";
    ?>
    </body>
</html>