<HTML>
<HEAD>
          <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
<TITLE>Evento registro final</TITLE>
</HEAD>
<BODY  TEXT="#000000" LINK="#0000ff" bgcolor="#FFFFFF">
<BASEFONT SIZE=4>
<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
            <?php
            $name=$_POST['nome'];
            $name1=$_POST['nome_1'];
            $name2=$_POST['nome_2'];
            $name3=$_POST['nome_3'];
            $name2=$_POST['nome_4'];
            $name3=$_POST['nome_5'];
            if(!file_exists("uploads/$name")){
              mkdir("uploads/$name",0777,true);
            }
            $target_dir = "uploads/$name/";
            $namef1=basename($_FILES["foto_1"]["name"]);
            $namef2=basename($_FILES["foto_2"]["name"]);
            $namef3=basename($_FILES["foto_3"]["name"]);
            $namef4=basename($_FILES["foto_4"]["name"]);
            $namef5=basename($_FILES["foto_5"]["name"]);
            $target_file1 = $target_dir . basename($_FILES["foto_1"]["name"]);
            $target_file2 = $target_dir . basename($_FILES["foto_2"]["name"]);
            $target_file3 = $target_dir . basename($_FILES["foto_3"]["name"]);
            $target_file4 = $target_dir . basename($_FILES["foto_4"]["name"]);
            $target_file5 = $target_dir . basename($_FILES["foto_5"]["name"]);
            $uploadOk = 1;
            if ($uploadOk == 0) {
              echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
              if (move_uploaded_file($_FILES["foto_1"]["tmp_name"], $target_file1)) {
              } else {
              }
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
            // if everything is ok, try to upload file
            } else {
              if (move_uploaded_file($_FILES["foto_2"]["tmp_name"], $target_file2)) {
    
              } else {
              }
            }
            if ($uploadOk == 0) {
              echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
              if (move_uploaded_file($_FILES["foto_3"]["tmp_name"], $target_file3)) {

              } else {

              }
            }
            if ($uploadOk == 0) {
              echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
              if (move_uploaded_file($_FILES["foto_4"]["tmp_name"], $target_file4)) {

              } else {

              }
            }
            if ($uploadOk == 0) {

            // if everything is ok, try to upload file
            } else {
              if (move_uploaded_file($_FILES["foto_5"]["tmp_name"], $target_file5)) {

              } else {
              }
            }
            $art=fopen("art.dat",'a+');
            fwrite($art,"$name\n");
            fclose($art);
            $dados=fopen("uploads/".$name."/".$name.".dat",'w+');
            fwrite($dados,"<p>\n");
            fwrite($dados,"<HR>\n"); 
            fwrite($dados,"<H3><STRONG><I>" . $_POST['nome'] . "</I></STRONG></H2>\n"); 
            fwrite($dados,"<figure><img src='".$target_file1."' </figure>\n");
            fwrite($dados,"<P>\n"); 
            fwrite($dados,"<pre> foto 1:" .$_POST['nome_1']. "</pre>\n"); 
            fwrite($dados,"<pre> descrição 1:" .$_POST['descricao_1']. "</pre>\n");
            fwrite($dados,"<P>\n"); 
            fwrite($dados,"<figure><img src='".$target_file2."' </figure>\n");
            fwrite($dados,"<P>\n"); 
            fwrite($dados,"<pre> foto 2:" .$_POST['nome_2']. "</pre>\n"); 
            fwrite($dados,"<pre> descrição 2:" .$_POST['descricao_2']. "</pre>\n"); 
            fwrite($dados,"<P>\n");
            fwrite($dados,"<figure><img src='".$target_file3."' </figure>\n");
            fwrite($dados,"<P>\n"); 
            fwrite($dados,"<pre> foto 3:" .$_POST['nome_3']. "</pre>\n"); 
            fwrite($dados,"<pre> descrição 3:" .$_POST['descricao_3']. "</pre>\n"); 
            fwrite($dados,"<P>\n");
            fwrite($dados,"<figure><img src='".$target_file4."' </figure>\n");
            fwrite($dados,"<P>\n"); 
            fwrite($dados,"<pre> foto 4:" .$_POST['nome_4']. "</pre>\n"); 
            fwrite($dados,"<pre> descrição 4:" .$_POST['descricao_4']. "</pre>\n");
            fwrite($dados,"<P>\n");  
            fwrite($dados,"<figure><img src='".$target_file5."' </figure>\n");
            fwrite($dados,"<P>\n"); 
            fwrite($dados,"<pre> foto 5:" .$_POST['nome_5']. "</pre>\n"); 
            fwrite($dados,"<pre> descrição 5:" .$_POST['descricao_5']. "</pre>\n"); 
            fwrite($dados,"<P>\n");  
            fclose($dados);
            print "<p> Obrigado por participar do nosso evento<p> \n";
            print "<p> \n <p>";
            print "<p> veja seus dados abaixo <p> \n";
            print "<p> \n <p>";
            print "<p>Nome:" . $_POST['nome'] . "<p> \n";
            print "<p>" . "foto 1" . "<p> \n";
            print "<p> nome:" . $_POST['nome_1'] . "<p> \n";
            print "<p> Descrição" . $_POST['descricao_1'] . "<p> \n";
            print "<p>" . "foto 2" . "<p> \n";
            print "<p> nome:" . $_POST['nome_2'] . "<p> \n";
            print "<p> Descrição:" . $_POST['descricao_2'] . "<p> \n";
            print "<p>" . "foto 3" . "<p> \n";
            print "<p> nome:" . $_POST['nome_3'] . "<p> \n";
            print "<p> Descrição:" . $_POST['descricao_3'] . "<p> \n";
            print "<p>" . "foto 4" . "<p> \n";
            print "<p> nome:" . $_POST['nome_4'] . "<p> \n";
            print "<p> Descrição:" . $_POST['descricao_4'] . "<p> \n";
            print "<p>" . "foto 5" . "<p> \n";
            print "<p> nome:" . $_POST['nome_5'] . "<p> \n";
            print "<p> Descrição:" . $_POST['descricao_5'] . "<p> \n";
            ?>
            </div>
        </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/datepicker/moment.min.js"></script>
<script src="vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="js/global.js"></script>


</BODY>
</HTML>
