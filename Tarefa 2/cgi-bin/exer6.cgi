#!/bin/bash
echo "Content-type: text/html"
echo ''
echo '<body>'
echo "<html><head><title> Exemplo GET</title></head>"
dir=$(echo "$QUERY_STRING" | sed -n "s/^.*var=\([^&]*\).*$/\1/p")
echo "<pre>"
echo `ls ${dir}` 
echo "<pre>"
echo "</body></html>"
