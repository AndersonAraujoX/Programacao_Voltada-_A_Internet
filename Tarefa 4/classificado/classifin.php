<HTML>
<HEAD>
<TITLE>Classificados - home page</TITLE>
</HEAD>
<BODY  TEXT="#000000" LINK="#0000ff" bgcolor="#FFFFFF">
<BASEFONT SIZE=4>
<H2><STRONG><I> Classificados - Home Page </I></STRONG></H2>
<P>
<?php
$arquivo=fopen("classif.dat","a");
fwrite($arquivo,"<p>\n");
fwrite($arquivo,"<HR>\n");
fwrite($arquivo,"<H3><STRONG><I>" . $_GET['titulo'] . "</I> </STRONG> </H2> \n");
fwrite($arquivo,"<P>\n");
fwrite($arquivo,"<pre>" . $_GET['classificado'] . "</pre>\n");
fwrite($arquivo,"<P>\n");
fwrite($arquivo, "Entre em contato com: " . $_GET['nome'] . "</H5>\n</pre>");
fwrite($arquivo,"<P>\n");
fwrite($arquivo,"e-mail: <A href=\"mailto:" . $_GET['email'] ."\">" . $_GET['email'] . "</A>");
fwrite($arquivo,"<P>\n");
fwrite($arquivo,"fone: " . $_GET['fone']);
fwrite($arquivo,"<P>\n");
fwrite($arquivo,"<P>\n");
fclose($arquivo);
print "<p> Obrigado por utilizar nosso serviço de classificados <p> \n";
print "<p> \n <p>";
print "<p> Seu classificado foi publicado com sucesso, confira os dados abaixo <p> \n";
print "<p> \n <p>";
print "<p>" . $_GET['titulo'] . "<p> \n";
print "<p>" . $_GET['classificado'] . "<p> \n";
print "<p>" . "contato:" . "<p> \n";
print "<p>" . $_GET['nome'] . "<p> \n";
print "<p>" . $_GET['email'] . "<p> \n";
print "<p>" . $_GET['fone'] . "<p> \n";
?>
</BODY>
</HTML>