<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php

    //Creando el arreglo
    $libro = array(
        
        "ficcion"=>array( //arreglo dentro de otro arreglo
        
            "cincuenta",
            "sombras",
            "fundacion"
            
        ),
        "terror"=>array( //
        
            "la neblina",
            "tierra",
            "infierno"
            
        )
        
    );

    echo $libro["ficcion"][1]; //imprimimos un elemento del arreglo

    array_push($libro["ficcion"], "hola");

    echo "<br>" . $libro["ficcion"][3];
    
    echo "<br>".$libro["ficcion"][3];

     
    ?>

</body>
</html>