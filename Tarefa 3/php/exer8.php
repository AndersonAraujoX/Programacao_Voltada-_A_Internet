<html>
    <body>
        HTML form example:
         <form action="exer8_calc.php" method="get">  
            <!-- action -> página a ser enviado os dado do formulário
                 method -> forma como será enviado podendo ser get ou post -->
                 <hr>
                <p>como você chamaria a seguinte imagem abaixo:</p>
                <img src='https://a-static.mlcdn.com.br/618x463/kit-20-biscoito-bolacha-adria-recheado-mousse-de-limao-com-chocolate-150g/sobrinhosmodafeminina/2139p/a63d5b0742a1b07bf79f6451a2365f48.jpg'>
                <hr>
                <input type="radio" id="Bis" name="tipo" value="Biscoito">
                <label for="Bis">Biscoito</label><br>
                <input type="radio" id="Bol" name="tipo" value="Bolacha">
                <label for="Bol">Bolacha</label><br>
                <hr>
                <button type="submit" value="Submit"> Submit</button>
                <button type="cancel" value="cancel"> Cancel</button>
                <!-- o botão do tipo "submit", cria um botão para criar 
                     a ação de envio do formulário -->
            </form>
    </body>
</html>