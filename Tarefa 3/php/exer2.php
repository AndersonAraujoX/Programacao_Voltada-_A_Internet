<html>
   <head>
      <title>Exemplo Data e Hora</title>
   </head>
   <body bgcolor="#FFFFFF">
   <table border="1">
      <tr>
         <td>
            <?php 
               $usuario = system('netstat -na | fgrep -f grep\_strings | grep :80 | wc -l');
               echo("<p>Qunatidade de usuario logados:".$usuario."</p>");
            ?>
         </td>
      </tr>
   </table>
   </body>
</html>