<html>
   <head>
      <title>Exemplo Data e Hora</title>
   </head>
   <body bgcolor="#FFFFFF">
   <table border="1">
      <tr>
         <td>
            <?php 
               $tempo = time();  
               date_default_timezone_set('America/New_York');
               echo("<b>Data e Hora Local: Nova Iorque</b><br>");
            ?>
         </td>
      </tr>
      <tr>
         <td>
            <?php
               echo("<b>Dia da Semana:</b> ".date("l",$tempo)."<br>");
               echo("<b>Dia do M�s:</b> ".date("d",$tempo)."<br>");
               echo("<b>M�s:</b> ".date("F",$tempo)."<br>");
               echo("<b>Ano:</b> ".date("Y",$tempo)."<br>");
               echo("<b>Hora:</b> ".date(H.":".i,$tempo)."<br>");
            ?>
         </td>
      </tr>
   </table>
   </body>
</html>