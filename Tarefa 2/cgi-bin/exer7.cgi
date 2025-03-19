#!/bin/bash
echo "Content-type: text/html"
echo ''
echo '<body>'
echo "<html><head><title> Exemplo GET</title></head>"
a=$(echo "$QUERY_STRING" | sed -n "s/^.*var1=\([^&]*\).*$/\1/p")
b=$(echo "$QUERY_STRING" | sed -n "s/^.*var2=\([^&]*\).*$/\1/p")
echo "<pre>"
#echo `${a}`
#echo `${b}`
echo 'a soma do Valor1 + Valor2='
./exer7 ${b} ${a}
echo "<pre>"
echo "</body></html>"
