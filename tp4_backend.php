<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>tp4-Matrices-Matias Marchini</h1>
    <?php 
     
    print "<h2>1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</h2><br>";
   
     #Declaro matriz indexada con numeros pares
    $Num_pares = [2, 4, 6, 8, 10]; 
    
    print "<h3> Print_r </h3>";

    print "<pre>\n";
    print_r($Num_pares);#Uso print r para mostrar la matriz

    print "<h3> Ciclo for</h3>";

    print "Los numeros pares son:<br>";
    for($i = 0;$i< 5; $i++){

        print $Num_pares [$i];
        print "<pre>\n";
    }
    
    print "<h3> Ciclo foreach</h3>";

    foreach ($Num_pares as $valor) {
        print "$valor \n";
    }

    #-------------------------------------------------------------------------------------
    print "<h2>2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la matriz. Mostrar el esquema del array con print_r(). </h2><br>";

    #Declaro Matriz indexada
    $valores = ["Pedro", "Ana", 34, 1 ];

    print "<pre>\n";
   print_r ($valores);
    
#----------------------------------------------------------------------------------------
   print "<h2>3. Crear un array asociativo e introducir los siguientes valores:
   <br>Nombre: Pedro  
   <br>Apellido: Torres 
   <br>Dirección: Av. Mayor 3703 
   <br>Teléfono: 1122334455 </h2><br>";

   #Declaro matriz asociativa

   $Array_aso = [
   "Nombre" => "Pedro",
   "Apellido" => "Torres",
   "Direccion" => "Av. Mayor 3703",
   "Telefono" => 1122334455];

    #Codigo opcional
   print "<pre>\n";
   print ($Array_aso["Nombre"]);# Me trae el dato asociado a Nombre
   print "<pre>\n";
   print ($Array_aso["Apellido"]);
   print "<pre>\n";
   print ($Array_aso["Direccion"]);
   print "<pre>\n";
   print ($Array_aso["Telefono"]);

   #------------------------------------------------------------------------------------------------------------
   print "<h2>4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.  Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid. </h2><br>";
     
   #Declaro matriz indexada

   $Ciudades_indx= [
    "Madrid",
    "Barcelona",
    "Londres",
    "New York",
    "Los Angeles",
    "Chicago"];

    print "<h3> Ciclo for</h3>";

    
    for($i = 0;$i< 6; $i++){

        print "<p>La ciudad con el indice $i es $Ciudades_indx[$i]";
    }

    print "<h3> Ciclo foreach</h3>";

    foreach ($Ciudades_indx as $indice => $valor) {

        print "La ciudad con el indice $indice es $valor \n";

    }
 
#--------------------------------------------------------------------------------------------------------------

print "<h2>5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona, LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.  Ejemplo: El índice de Madrid es MD.  </h2><br>";
        
#Declaro matriz asociada y sus indices

    $Ciudades_asos= [
        "Md" => "Madrid",
        "BCL" => "Barcelona",
        "Ld" => "Londres",
        "NY" =>"New York",
        "LA" => "Los Angeles",
        "CCG" => "Chicago"];

        print "<h3> Ciclo foreach</h3>";

        foreach ($Ciudades_asos as $indice => $valor) {
    
            print "El indice de $valor es $indice  \n";
    
        }    
    

    
    



    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
    
</body>
</html>