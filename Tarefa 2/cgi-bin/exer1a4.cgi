#!/bin/bash
echo "Content-type: text/html"
echo ''
echo '<body>'
echo "<html lang=pt-br>"
echo "<head>"
echo "<meta charset="UTF-8">"
echo "<title>Exercício 1 a 4</title>"
echo "</head>"
#contador de visitas: exercício 1
n=$(head -n 1 visita.dat)
cont=$(($n+1))
echo $cont > visita.dat
echo "<p>Visitas: $cont</p>"

#Data do servidor: exercício 2
echo '<hr>'
date=$(date '+%Y-%m-%d %H:%M:%S')
echo "<p>Data no servidor: $(date '+%Y-%m-%d')</p>"
echo "<p>Horário do servidor:" 
date | awk '{print $4}'
echo "</p>"
echo ''
# uso do processador: exercício 3 
echo '<hr>'
echo '<p>Porcentagem do processador'
awk '{u=$2+$4; t=$2+$4+$5; if (NR==1){u1=u; t1=t;} else print ($2+$4-u1) * 100 / (t-t1) "%"; }' \
<(grep 'cpu ' /proc/stat) <(sleep 1;grep 'cpu ' /proc/stat)
echo '</p>'
echo '<hr>'
#Tempo que o servidor fico liga: exercício 4
echo "<p>Tempo que o servidor está ligado:"
uptime -p
echo "</p>"
echo '<hr>'
echo '</body></html>'
