<?php

include "conexion.php";


if (isset($_POST["gnc"])) 
{
  $gnc = "GNC";
}
  else
{
    $gnc = "SIN GNC";
}
//&& $_COOKIE["USUARIO"]!=""

if (isset($_POST ["resultado"]) ) 
{
  $club = $_POST ["club"];
  $resultado = $_POST ["resultado"];
  print $_POST ["club"];
  print $_POST ["resultado"];
}
else
{
  die();
}


$directorio = 'archivos/';
$subirArchivo = $directorio.$patente.".jpg";

if (move_uploaded_file($_FILES['subir_archivo']['tmp_name'], $subirArchivo)) 
{

} 
else 
{
    echo "<h1>•Intentelo Nuevamente... Gracias•</h1>";
    echo "La subida ha fallado, solo admite archivo.jpg/png hasta 2gb";
}
    

if($patente != "")
{
  $hora = date("Y-m-d H:i:s"); //."=>".$foto
  $renglon="\n".$patente."=>".$hora."=>".$color."=>".$gnc."=>".$_COOKIE["USUARIO"]."=>x";
  GuardarArchivo ("estacionados.txt",$renglon);

  //header ("Location: estacionar.php");
} 
 
else
{
    //header ("location:error.php");
}

    $cantVehiculo = Vehiculos::cantidadDePatentes($patente);
    //$idUsuario=Usuario::DameIdDeEsteMail($mail);
    //echo "El id del vehiculo es : " . $idVehiculo;

    //Hasta aca tengo que lograr tener un id

    switch ($resultado) 
    {
      case 0:
        // Si no encontro ningun registro en la tabla Vehiculos que cumpla la condicion...
          // tengo que ir a dar de Alta el Vehiculo
        echo "Creo el vehiculo";
        $unVehiculo = Vehiculos::dameUnVehiculo($_POST['nombre'],$_POST['email'],$_POST['password']);
        $idVehiculo= $unVehiculo->InsertarVehiculoParametros($_POST['nombre'],$_POST['email'],$_POST['password']); 
        print ("Ultimo Id Vehiculo: $idVehiculo");
        
        break;

      case 1:
        // Si encontro registro en la tabla Vehiculos
        echo "Traigo el vehiculo";
        //$cantUsuario=Usuarios::cantidadDeUsuarios($_COOKIE["USUARIO"]);
        $idVehiculo=Vehiculos::dameIdPatente($patente);
        echo "id: ".$idVehiculo;
        //var_dump($cantVehiculo);
        break;
    }

    switch ($cantUsuario) 
    {
      case 0:
        // Si no encontro ningun registro en la tabla Vehiculos que cumpla la condicion...
          // tengo que ir a dar de Alta el Usuarios
        echo "cero usuarios";
        break;

      case 1:

      

        break;
    }

// debo tener ID vehiculo y usuario

// aca va insertar estacionado (paso idvehiculo, idusuario)

  //}else{
  //  die();
  //}



?>