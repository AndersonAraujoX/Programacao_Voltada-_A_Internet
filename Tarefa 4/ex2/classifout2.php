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
<TITLE>Classificados - home page</TITLE>
</HEAD>
<BODY  TEXT="#000000" LINK="#0000ff" bgcolor="#FFFFFF">
<BASEFONT SIZE=4>
<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                    
                <?php 
                // Carrega o arquivo classif.dat em um array e o exibex 
                $name=$_GET["linha"];
                print("$name");
                $vetor_arquivo = file("uploads/".$name."/".$name.".dat");
                while ( list( $num_linha, $linha ) = each( $vetor_arquivo ) ) { 
                print ( $linha); 
                } 
                ?>
                <form action="voto.php" method="GET">
                        <div class="row row-space">
                                <div class="input-group">
                                    <label class="label">Foto 1</label>
                                    <input class="input--style-4" type="radio" name="foto_1">
                                </div>
                                <div class="input-group">
                                    <label class="label">Foto 2</label>
                                    <input class="input--style-4" type="radio" name="foto_2">
                                </div>
                                <div class="input-group">
                                    <label class="label">Foto 3</label>
                                    <input class="input--style-4" type="radio" name="foto_3">
                                </div>
                                <div class="input-group">
                                    <label class="label">Foto 4</label>
                                    <input class="input--style-4" type="radio" name="foto_4">
                                </div>
                                <div class="input-group">
                                    <label class="label">Foto 5</label>
                                    <input class="input--style-4" type="radio" name="foto_5">
                                </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="Submit" value="Enviar">Submit</button>
                        </div>
                </form>
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
