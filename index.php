<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Science Technology Engineerig & Mathematics</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problema.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

</head>
<body>
    <section id="contenedor">
    <header id="gridHeader">
    <center><h1>Science Technology Engineerig & Mathematics</h1></center>
    <center><h2>Resolver problemas de Ciencia e Ingenieria con JS</h2></center>
    <center><h2>Nombre: Guzman Iguanero Josue Althair &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No. de control: 17091061</h2></center>
    <img class="foto" src="images/foto.jpeg" alt="su foto">
    </header>
    </section>
    <section id="problema"  class="gridProblema">
      <section id=descripcion>
            <center><h2>Problema</h2></center>
            <h1>Descripcion:</h1>
            <p>Se dispara un proyectil con una velocidad inicial de 80m/s y un angulo de 30° por encima de la horizontal. Calcular <br>
            a.-)Posicion y velocidad despues de los 6s<br>
            b.-)Alcance horizontal<br>
           

      </section>
      <section id="datos">
            <center><h2>Datos</h2></center>
            <p>Vo= 80 m/seg<sup>3</sup> <br>
            α = 30°<br>
            posición →  x=?    y=?<br>
            t = 6 seg<br> 
            tmáx =?<br>
            g=9.8m/s<br>
             
            </p>
      </section>
      <section id="formulas">
            <center><h2>Formulas</h2></center>
            <p>Vox = Vo * Cos30° <br>
              Voy = Vo * sen 30° <br>
              x = Vox * t <br>
              y = Voy * t + g * t²/2<br>
              R = Vox * tv<br>
            </p>
      </section>
      <section id="solucion">

            
        
            <center><h2>Calculos</h2></center>
            <p> Vox=cos30°=m/s <br> 
                Voy=sen 30°m/s<br>            
                x=Vox * t = 69.28 m/seg * 6 seg=m<br> 
                y = Voy * t + g * t²/2 = 40 m/seg * 6 seg + ( - 9.8 m/seg²) * ( 6 seg)²/2=m<br>
                R = Vox * tv = 69.28 m/seg * 8.163 seg=m <br>
            </p>
                 
      </section>
      <section id="resultado">
          <center><h2>Solucion</h2></center>
        
        <div class=solution id="resultado1">
          <?php 
          $g=9.8;
          $t=6;
          $Vox=69.28 ;
          $Voy= 40;
          $X=415.68; 
          $Y=63.6 ; 
          
           
          $R=565.53; 
          
          
          print "a.-)Posicion y velocidad despues de los 6s <br>
          Vox = " .$Vox."m/s<br> Voy =".$Voy."m/s<br> X =".$X."m<br> Y=".$Y."m<br> b.-)Alcance horizontal <br> R=".$R."m";
          ?>
        </div><br>
      </section>
    </section>
    <footer id="gridPie">
        <p>&copy; Solution Science Problems. 2019 Creative Commons 3.0</p>
    </footer>
</body>
</html>
