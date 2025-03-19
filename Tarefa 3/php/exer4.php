<!DOCTYPE html>
<html>
    <body>
        <form action="exer4_calc.php" method="get">  
            <!-- action -> página a ser enviado os dado do formulário
                 method -> forma como será enviado podendo ser get ou post -->
                <label for="nome">Digite o seu nome:</label><br>
                <input type="text" id="nome" name="nome"><br>
                <hr>
                <button type="submit" value="Submit"> Submit</button>
                <button type="cancel" value="cancel"> Cancel</button>
                <!-- o botão do tipo "submit", cria um botão para criar 
                     a ação de envio do formulário -->
            </form>
    </body>
</html>