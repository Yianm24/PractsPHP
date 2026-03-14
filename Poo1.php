<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css" >
    <title>Poo1</title>
</head>
<body>
    
    <form class="row g-3" action="" method="post">
        <div class="col-6 input-group-sm">
            <label for="id">ID:</label>
            <input type="text" id="id" name="datos[]"><br><br>
        </div>
        
        <div class="col-6 input-group-sm ">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="datos[]"><br><br>
        </div>    
        
        <div class="col-6 input-group-sm">
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="datos[]"><br><br>
        </div>
        
        <div class="col-6 input-group-sm">
            <label for="direccion">direccion:</label>
            <input type="text" id="direccion" name="datos[]"><br><br>
        </div>

            <button class="btn btn-success" type="submit" >Registrar Cliente</button>
    </form>

    <?php
    $array=$_POST['datos'];


// $cliente1 = new Cliente($array[0],$array[1],$array[2]);
// $cliente1->mostrarDatos();

    $comprador1= new Comprador($array[0],$array[1],$array[2], $array[3]);

    
    ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">telefono</th>
      <th scope="col">direccion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php $comprador1->mostrarDatos(1);?></td>
      <td><?php $comprador1->mostrarDatos(2);?></td>
      <td><?php $comprador1->mostrarDatos(3);?></td>
    <td><?php $comprador1->mostrarDatos(4);?></td>
    </tr>
    <tr>
      
  </tbody>
</table>
    
</body>
</html>

<?php

class Cliente{

    public $id;
    public $nombre;
    public $telefono;

    public function __construct($id, $nombre, $telefono)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
    }
    
    // public function registrarCliente(){

    // }

    public function mostrarDatos($dato){

        if($dato==1){
        echo $this->id . "<br>";
        }else if($dato==2){
            echo $this->nombre . "<br>";
        } else if($dato==3){
            echo $this->telefono . "<br>";
        }
        
        
        
    


}
}


class Comprador extends Cliente{

    public $direccion;

    public function __construct($id, $nombre, $telefono, $direccion)
    {
        parent::__construct($id, $nombre, $telefono);
        $this->direccion = $direccion;
    }

    public function mostrarDatos($dato){
        parent::mostrarDatos($dato);

        if($dato==4){echo $this->direccion . "<br>";}
        
    }

}

// $array=$_POST['num'];

// //var_dump($array);
// echo "El numero es: ".$array[0]."</br>";
// echo "El numero es: ".$array[1]."</br>";

// $resultado=$array[0]+$array[1];

// echo "El resultado es: ".$resultado."</br>";



?>