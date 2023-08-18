<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.80.0">
  
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>
  <script type="text/javascript" src="js/funcionAutoCompletar.js"></script>
  
 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <style >
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }
    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
    .form-pat {
      text-align: center;
      margin: 0 auto;
      width: 80%;
    }
    .form-group2,#ticketver {
      color:red;
      border:black 2px;

    }
    .form-group1{
      color:green;
    }
    .btn_send{
      background-color: cyan;
    }
  button
     {
    color: white;
    font-size:15pt ;
    border-radius: 5px;
    margin: 8px 8px;
    cursor: pointer;
    padding:5px;
    box-shadow: 0px 3px 3px  #fff;
}
#btnregistrar,#btncancelar,#btnregistrar1,#btnregistrar2{
    width: 225px;
    background-color: #1612e9;
    align-content: center;
}
    .my-0-font-weight-normal{
    background-color: #1612e9;
    color: rgb(247, 38, 38);
    height: 30px;
    font-size:15pt ;
    border-radius: 5px;
    margin: 8px 8px;
    cursor: pointer;
    padding:5px;
    box-shadow: 0px 3px 3px  #fff;
    }

    #body{
      background-color: rgb(228, 228, 228);
    }

    #tablestop{
      padding:5px;
      color:rgb(2, 8, 100);
      left: 135px;
      position: relative;
      top:-45px;
      box-shadow: black 1px 1px 4px 2px;
      width: 620px;
      border-collapse: collapse;
      font-size: 0.9rem;

    }
      tbody tr:nth-child(odd) {
      background-color: #ff33cc;
    }

      tbody tr:nth-child(even) {
      background-color: #e495e4;
    }

    #pres{
    font-family:'Oxygen', sans-serif;
    font-size: 1rem ;
    text-align: center;
    color: white;
    border-radius: 10px;
    border-width: 20px;
    line-height: 35px;
    text-shadow:5px 5px 5px rgb(134, 201, 240) ;
    letter-spacing: 1px;
    background-color: rgb(41, 145, 243);
    }

    .display-4{
      font-size: 2.5rem;
      font-family:'Oxygen', sans-serif;
      position: relative;
      top:-30px;
    }

    .display-5{
      font-size: 1rem;
      font-family:'Oxygen', sans-serif;
      position: relative;
      top:-30px;
      left:-185px;
    }

    #lead{
      position: relative;
      top:-45px;
    }

    .card-body{
      height: 10px;
    }

    .card-title-pricing-card-title{
      font-size:2rem;
      position: relative;
      top:-19px;
    }

    .row {
      position: relative;
      top:20px;
    }

    #precio{
      position: relative;
      top:-42px;
    }

    #ticketver{
      box-shadow: black 1px 1px 4px 2px;
      padding: 0px 3px 5px 5px;
      width: 360px;
      position: relative;
      right:-270px;
      top:20px;
      height: 320px;
      text-align: center;
      background-color: white;
    }

    .barra{
      position: relative;
      left:380px;
      top:-32px;
      
    }

    #btnContable{
      position: relative;
      right:20px;
      top:40px;
    }

    #btnCobrar{
      position: relative;
      left:310px;
      top:10px;
    }

    .color{
      display: flex;
      justify-content: space-around;
      align-items: center;
      position: relative;
      top:-60px;
      font-size: 1rem;
      font-family:'Oxygen', sans-serif;
    }

    .text-center{
      position: relative;
      top:-15px;
    }

    #checkboxGnc{
      position: relative;
      top:-36px;
      font-size: 1rem;
      font-family:'Oxygen', sans-serif;
    }

    #btnregistrar1{
      position: relative;
      top:-65px;
    }

  .main{ 
    position: relative;
    top:-70px;
    margin:auto; 
    border:1px 
    solid #7C7A7A; 
    width:60%;
    height:40%; 
    text-align:center; 
    padding:20px; 
    background-color: rgb(41, 145, 243);
    font-family:"Segoe", "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
    box-shadow: black 5px 5px 4px 2px;
    border-radius: 10px;
    color:white;
    }

input[type=submit]{ 
  background:#6ca16e; 
  width:100%;
  padding:5px 15px; 
  background:#ccc; 
  cursor:pointer;
  font-size:16px;
  font-family:"Segoe", "Segoe UI", "DejaVu Sans", "Trebuchet MS",Verdana, sans-serif;
  box-shadow: black 5px 5px 4px 2px;
  border-radius: 10px;
}
 #img{
  position: relative;
  top:30px;
  left:185px;
  font-size: 1rem;
  font-family:'Oxygen', sans-serif;
  background:#6ca16e;
  box-shadow: black 3px 3px 2px 1px;
  border-radius: 10px;
  width:60%;
  height: 40%;
  padding:0.8px;
}
  #checkboxGnc{
      position: relative;
      top:-13px;
      font-size: 1rem;
      font-family:'Oxygen', sans-serif;
    }
    .display-5{
      font-size: 1rem;
      font-family:'Oxygen', sans-serif;
      position: relative;
      top:-10px;
      left:-185px;
    }

    .list{
      position: relative;
      top:70px;
    }

    .combo{
    width:40%;
    margin:auto; 
    border:1px 
    solid #7C7A7A; 
    width:60%;
    height:40%; 
    text-align:center; 
    padding:10px; 
    background-color: rgb(41, 145, 243);
    font-family:"Segoe", "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
    box-shadow: black 5px 5px 4px 2px;
    border-radius: 10px;
    color:white;
    }

    .error{
      color: red;
      font-family:"Segoe", "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
      font-size: 0.3rem;
      width:60%;
      height:40%;
      text-align: center;
      margin:auto;
    }

    #titular{
      margin-top: -77px;
      text-align: center;
    }

     
  </style>
  <link href="pricing.css" rel="stylesheet">
</head>
<body id="body">
  
     <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h4 class="my-0 mr-md-auto font-weight-normal"><img class= "img" src="./img/ligarosa.png" height="80"></h4>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="btn btn-outline-primary" href="estacionar.php">Consulta Vehiculo</a>
      <a class="btn btn-outline-primary" href="registro.php">Registro</a>

    </nav>
    <a class="btn btn-outline-primary" href="login.php">Login</a>
  </div>
  <div id="pres">
  <p>REGISTRO DE RESULTADOS PARTIDOS </p>
  <p>
    <?php
    echo "USUARIO LOGUEADO ACTUALMENTE: ".$_COOKIE["USUARIO"];
    ?>
  </p>
  </div>
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <div id="lead">
    <p><li>1 - 29 de Septiembre</li><li>2 - Biblioteca</li></p><li>3 - Buenos Aires</li><li>4 - CAVA</li>
<li>5 - Claridad</li><li>6 - El Mastil</li><li>7 - El Tacho</li><li>8 - Estrella Caraza</li></p>
<p><li>9 - Estrellas Unidas</li><li>10 - Fomento Darwin</li><li>11 - Fortaleza</li><li>12 - Inmigrantes</li>
<li>13 - Juventud Giardino</li><li>14 - Marplatense</li><li>15 - San Jose Obrero</li></p>
  </div>
  </div>
      <div class="container">
        <div class="row">
          <div class="col">
            <form enctype="multipart/form-data" action="hacerinsertresultado.php" method="post">
              <div id="titular" class="form-group1">
                <h1>CLUB</h1>
                <input name="club" class="form-control form-control-lg form-pat" type="text" placeholder="Ingresar el Nro. del Club segun listado" required autofocus>
                
              </div>
              
              <div class="text-center">
              <form enctype="multipart/form-data" action="hacerinsertresultado.php" method="POST" >

<p><br><br><li class="display-5">CATEGORIA 2009 / 2010</p></li>
<div class="color">
  <div>
    <input type="radio" name="resultado" value="GANADO" required>
    <label for="gnc">GANADO</label>
  </div>
  <div>
    <input type="radio" name="resultado" value="EMPATADO">
    <label for="nafta">EMPATADO</label>
  </div>
  <div>
    <input type="radio" name="resultado" value="PERDIDO">
    <label for="diesel">PERDIDO</label>
  </div>
  
  <div id="checkboxGnc">
  <p><br>Seleccione la opcion si es correcta<br></p>
  <input type="checkbox"  name="gnc"  value="GNC">
                  <label for="combustible"> GNC</label><br>
    </div>              
</div>
<button id="btnregistrar1" type="submit" class="btn_send">ENVIAR 2009/10</button>

</form>
<form enctype="multipart/form-data" action="estacionarHacerEntradaPatente.php" method="POST" >

<p><br><br><li class="display-5">CATEGORIA 2011 / 2012</p></li>
<div class="color">
  <div>
    <input type="radio" name="resultado" value="GANADO" required>
    <label for="gnc">GANADO</label>
  </div>
  <div>
    <input type="radio" name="resultado" value="EMPATADO">
    <label for="nafta">EMPATADO</label>
  </div>
  <div>
    <input type="radio" name="resultado" value="PERDIDO">
    <label for="diesel">PERDIDO</label>
  </div>
  
  <div id="checkboxGnc">
  <p><br>Seleccione la opcion si es correcta<br></p>
  <input type="checkbox"  name="gnc"  value="GNC">
                  <label for="combustible"> GNC</label><br>
    </div>              
</div>
<button id="btnregistrar1" type="submit" class="btn_send">Enviar 2011/12</button>

</form>
<form enctype="multipart/form-data" action="estacionarHacerEntradaPatente.php" method="POST" >

<p><br><br><li class="display-5">CATEGORIA 2013 / 2014</p></li>
<div class="color">
  <div>
    <input type="radio" name="resultado" value="GANADO" required>
    <label for="gnc">GANADO</label>
  </div>
  <div>
    <input type="radio" name="resultado" value="EMPATADO">
    <label for="nafta">EMPATADO</label>
  </div>
  <div>
    <input type="radio" name="resultado" value="PERDIDO">
    <label for="diesel">PERDIDO</label>
  </div>
  
  <div id="checkboxGnc">
  <p><br>Seleccione la opcion si es correcta<br></p>
  <input type="checkbox"  name="gnc"  value="GNC">
                  <label for="combustible"> GNC</label><br>
    </div>              
</div>

<button id="btnregistrar1" type="submit" class="btn_send">Enviar 2013/14</button>

</form>
        <form enctype="multipart/form-data" action="estacionarHacerEntradaPatente.php" method="POST" >

          <p><br><br><li class="display-5">CATEGORIA 2015 / 2016</p></li>
          <div class="color">
            <div>
              <input type="radio" name="resultado" value="GANADO" required>
              <label for="gnc">GANADO</label>
            </div>
            <div>
              <input type="radio" name="resultado" value="EMPATADO">
              <label for="nafta">EMPATADO</label>
            </div>
            <div>
              <input type="radio" name="resultado" value="PERDIDO">
              <label for="diesel">PERDIDO</label>
            </div>
            
            <div id="checkboxGnc">
            <p><br>Seleccione la opcion si es correcta<br></p>
            <input type="checkbox"  name="gnc"  value="GNC">
                            <label for="combustible"> GNC</label><br>
              </div>              
          </div>
       
          <button id="btnregistrar1" type="submit" class="btn_send">Enviar 2015/16</button>

        </form>
        <?php
 include "conexion.php";
 ?>

</div>
