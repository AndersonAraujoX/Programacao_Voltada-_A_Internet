<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

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
</head>
<html>

<body>


<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                <p align="center">&nbsp;</p>
                <p align="center"><font face="Arial">Ver Artistas:</font></p>
            </div>
        </div> 
        <div class="card card-4">
            <div class="card-body">
                <?php
                $lines = fopen("art.dat","r");
                $line=file("art.dat");
                $num_linha=count($line);
                while ( ($linhas= fgets($lines))!==false ) { 
                    echo "<p align='center'><a href=classifout2.php?linha=".$linhas." target='principal'><button type='button' class='btn btn--radius-2 btn--blue'>".$linhas."</button></a></p>";
                    echo "<p align='center'>&nbsp;</p>";    
                    } 
                ?>
            </div>
        </div>
        <div class="card card-4">
            <div class="card-body">
                <p align="center"><a href="classform2.html" target="principal"><button type="button" class="btn btn--radius-2 btn--blue">Anuncie aqui</button></a></p>
                <p align="center">&nbsp;</p>
                <p align="center"><a href="mainclass2.htm" target="principal"><button type="button" class="btn btn--radius-2 btn--blue">Página Principal</button></a></p>
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
</body>
</html>

