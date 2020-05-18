
<head>
	<title>Creación de un portal con PHP y MySQL</title>
	</head>
	<body bgcolor=#83B4D3 >
	<body text= "#E5E5E5">
	<font face = "tahoma">
	<font size = "2">
	<body link = "#E5E5E5" vlink="E0E0E0">
	<h3>
    <p align = "center">	
   GRACIAS POR OPINAR
    </h3>
    </p>
    <hr size="8" color="ffffff">
    <?php

    $op= $_POST['op'];

    $archivo1 = "si.txt";
    $archivo2 = "no.txt";
    $abre1 = fopen($archivo1, "r");
    $abre2 = fopen($archivo2, "r");
    $total1 = fread($abre1, filesize($archivo1));
    $total2 = fread($abre2, filesize($archivo2));
    fclose($abre1);
    fclose($abre2);
        if($op=="a")
        {
            $abre1 = fopen($archivo1, "w");
            $total1 =$total1 + 1;
            $grabar1=fwrite($abre1, $total1);
            fclose($abre1);
        }
        else if($op =="b")
        {
            $abre2 = fopen($archivo2, "w");
            $total2 =$total2 + 1;
            $grabar2=fwrite($abre2, $total2);
            fclose($abre2);
        }
        $votos = $total1 + $total2;
        $por1  = $total1*100/$votos;
        $por2  = $total2*100/$votos;
        $por2=intval($por2,10);
        echo "<br>";
        echo "<br>";
        echo "<p align=center>";
        echo "<img height=15 width=$por1 SRC=barra.png>";
        echo "<br>";
        echo "<br>";
        echo "Si:<b>$total1</b>votos - <b>$por1 %</b>";
        echo "<br>";
        echo "<br>";

        echo "<p align=center>";
        echo "<img height=15 width=$por2 SRC=barra.png>";
        echo "<br>";
        echo "No:<b>$total2</b>votos - <b>$por2 %</b>";

        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<p align=center>";
        echo "Total votos: <b>$votos</b>";
        echo "<br>";
        echo "<br>";
        echo "<p align=center>";
        echo "<a href=/PROYECTO/index.html>Volver</a>";

        ?>


