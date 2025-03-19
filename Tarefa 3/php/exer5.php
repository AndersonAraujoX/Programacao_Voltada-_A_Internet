<!DOCTYPE html>
<html>
    <body>
        <form action="exer5_calc.php" method="get">  
            <!-- action -> página a ser enviado os dado do formulário
                 method -> forma como será enviado podendo ser get ou post -->
                <h1>Tabela da primeira cidade</h1>
                <p>1 - B.Horizonte </p>
                <p>2 - Brasília	</p>
                <p>3 - Campinas	</p>
                <p>4 - Curitiba</p>
                <p>5 - Florianópolis</p>
                <p>6 - Juiz de Fora</p>
                <p>7 - Londrina</p>
                <p>8 - Ribeirão Preto</p>
                <p>9 - Salvador</p>
                <p>10 - São Paulo</p>
                <h1>Tabela para a segunda cidade</h1>
                <p>1 - Americana </p>
                <p>2 - Araraqura </p>
                <p>3 - Barretos	</p>
                <p>4 - Bauru</p>
                <p>5 - Brasília</p>
                <p>6 - Curitiba</p>
                <p>7 - Franca</p>
                <p>8 - Ribeirão Preto</p>
                <p>9 - São Carlos</p>
                <p>10 - São Paulo</p>
                <label for="valor1">Digite o numero da primeira cidade:</label><br>
                <input type="number" id="valor1" name="valor1"><br>
                <label for="valor2">Digite o numero da segunda cidade:</label><br>
                <input type="number" id="valor2" name="valor2"><br>
                <label for="efi">Escreva a eficiência do carro (km/litro):</label><br>
                <input type="text" id="efi" name="efi">
                <hr>
                <button type="submit" value="Submit"> Submit</button>
                <button type="cancel" value="cancel"> Cancel</button>
                <!-- o botão do tipo "submit", cria um botão para criar 
                     a ação de envio do formulário -->
            </form>
    </body>
</html>