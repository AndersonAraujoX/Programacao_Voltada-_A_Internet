<!DOCTYPE html>
<html>
    <body>
        HTML form example:
         <form action="exer3_calc.php" method="get">  
            <!-- action -> página a ser enviado os dado do formulário
                 method -> forma como será enviado podendo ser get ou post -->
                <p>Your Personal information:</p>
                <label for="altura">Qual é a sua Altura:</label><br>
                <input type="text" id="altura" name="altura"><br>
                <label for="idade">Qual é a sua idade:</label><br>
                <input type="text" id="idade" name="idade"><br>
                <label for="peso">Qual é a seu peso:</label><br>
                <input type="number" id="peso" name="peso">
                <hr>
                <button type="submit" value="Submit"> Submit</button>
                <button type="cancel" value="cancel"> Cancel</button>
                <!-- o botão do tipo "submit", cria um botão para criar 
                     a ação de envio do formulário -->
            </form>
    </body>
</html>