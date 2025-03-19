<HTML>
<HEAD>
<TITLE>Classificados - home page</TITLE>
</HEAD>
<BODY  TEXT="#000000" LINK="#0000ff" bgcolor="#FFFFFF">
<BASEFONT SIZE=4>
<H2><STRONG><I> Classificados - Home Page </I></STRONG></H2>
<P>
<?php 
 // Carrega o arquivo classif.dat em um array e o exibe 
 $vetor_arquivo = file("classif.dat"); 
 while ( list( $num_linha, $linha ) = each( $vetor_arquivo ) ) { 
    print ( $linha); 
 } 
?>
</BODY>
</HTML>
