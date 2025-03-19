<!DOCTYPE html>
<html>
    <body>
        <?php
        $altura = $_GET["altura"];
        $peso = $_GET["peso"];
        $idade = $_GET["idade"];
        //
        $imc=$peso/($altura*$altura);
        echo "<p> $imc </p>";

        if ( $imc < 18.5 ) {
            echo "<p>Abaixo do peso";
            echo "</p>";
        } 
        elseif ( 24.9> $imc  and $imc >= 18.5) {
            echo "<p>Peso normal";
            echo "</p>";
        }  
        elseif ((29.9 > $imc) and ($imc >= 25)) {
            echo "<p>sobrepeso";
            echo "</p>";
        }      
        elseif ((34.9) > $imc  & ($imc >=30)) {
            echo "<p>obesidade grau 1";
            echo "</p>";
        } 
        elseif( 39.9 > $imc  & $imc >= 35) {
            echo "<p>obesidade grau 2";
            echo "</p>";
        } elseif($imc >= 40) {
            echo "<p>obesidade grau 3";
            echo "</p>";
        }
        ?>
        
    </body>
</html>    