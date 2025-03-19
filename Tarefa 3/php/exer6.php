<!DOCTYPE html>
<html>
    <body>
        <form action="exer5_calc.php" method="get">  
            <!-- action -> página a ser enviado os dado do formulário
                 method -> forma como será enviado podendo ser get ou post -->
                 <?php
                $browser = get_browser();
                echo $browser->platform;
                ?>
                <?php
                preg_match('((?<=\().*?(?=;))',$_SERVER['HTTP_USER_AGENT'],$matches);
                echo $matches[0];
                ?> 
                <hr>
                 <?php
                echo $_SERVER['REMOTE_ADDR'];
                echo "<hr>";
                 ?>
                 <?php
                    $navegador = filter_input(INPUT_SERVER, "HTTP_USER_AGENT", FILTER_DEFAULT);
                    $browsers = array(
                        'amaya' => 'Amaya',
                        'Camino' => 'Camino',
                        'Chimera' => 'Chimera',
                        'Chrome' => 'Chrome',
                        'Edge' => 'Edge',
                        'Firebird' => 'Firebird',
                        'Firefox' => 'Firefox',
                        'Flock' => 'Flock',
                        'hotjava' => 'HotJava',
                        'IBrowse' => 'IBrowse',
                        'icab' => 'iCab',
                        'Internet Explorer' => 'Internet Explorer',
                        'Konqueror' => 'Konqueror',
                        'Links' => 'Links',
                        'Lynx' => 'Lynx',
                        'Maxthon' => 'Maxthon',
                        'Mozilla' => 'Mozilla',
                        'MSIE' => 'Internet Explorer',
                        'Netscape' => 'Netscape',
                        'OmniWeb' => 'OmniWeb',
                        'Opera' => 'Opera',
                        'Opera.*?Version' => 'Opera',
                        'Phoenix' => 'Phoenix',
                        'Safari' => 'Safari',
                        'Shiira' => 'Shiira',
                        'Trident.* rv' => 'Internet Explorer',
                        'Ubuntu' => 'Ubuntu Web Browser',
                        'OPR' => 'Opera'
                    );
                    if (strpos($navegador, 'Edge')):
                        $browserDetect = 'Edge';
                    elseif (strpos($navegador, 'OPR')):
                        $browserDetect = 'Opera';
                    else:
                        $browserDetect = null;
                        foreach ($browsers as $key => $value):
                            if (preg_match('|' . $key . '.*?([0-9\.]+)|i', $navegador)):
                                $browserDetect = $value;
                            endif;
                        endforeach;
                    endif;
                    if (!empty($browserDetect)):
                        echo $browserDetect;
                    else:
                        echo 'Desconhecido';
                    endif;
                 ?>
                 <hr>
            </form>
    </body>
</html>