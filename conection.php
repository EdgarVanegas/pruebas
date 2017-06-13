<?php
/*
$database = mysqli_connect('localhost','root','');
    or die('No se puede conectar: '.mysql_error());
    echo 'Connected successfully';

mysql_select_db('compro') OR DIE("Error: No es posible establcer la conexion");

$query="SELECT id, name, price, special_price FROM wp_wpsc_product_list";

$products = mysqli_query($database,$query);

if(!$products){
    die("Error de conexion");
} else{
    while($data=mysqli_fetch_assoc($products)){
        $arreglo["data"][]=$data;
    }
    echo json_encode($arreglo);    
}
mysqli_free_result($products);
mysqli_close($database);*/

$server="localhost";
$usuario="root";
$password="";
$bd="compro";

$conexion = mysqli_connect($server, $usuario, $password, $bd);
    if (!$conexion){
        die('Error de conexion: '. mysqli_connect_errno());
    }

//  Consulta uno
    
$query="SELECT 
    C.id AS id, C.name AS name, C.description AS description, C.special_price AS special_price, B.category_id AS category
FROM
    compro.wp_wpsc_product_categories AS A
        INNER JOIN
    compro.wp_wpsc_item_category_assoc AS B ON A.id = B.category_id
        INNER JOIN
    compro.wp_wpsc_product_list AS C ON B.product_id = C.id
       WHERE A.group_id IN (1 , 3, 6)
		order by C.id asc;";
$resultado = mysqli_query($conexion, $query);

if(!$resultado){
    die("Error");
}else{
    while($data=mysqli_fetch_assoc($resultado)){
        $arreglo["data"][] = array_map("utf8_encode", $data);
    }
    echo json_encode($arreglo);    
}
mysqli_free_result($resultado);
mysqli_close($conexion);

// consulta dos
/*
$conexion2 = mysqli_connect($server, $usuario, $password, $bd);
    if (!$conexion2){
        die('Error de conexion: '. mysqli_connect_errno());
    }
$consulta="SELECT 
    A.id AS id, B.product_id AS product, B.category_id AS category_id, C.name AS name
FROM
    compro.wp_wpsc_product_categories AS A
        INNER JOIN
    compro.wp_wpsc_item_category_assoc AS B ON A.id = B.category_id
        INNER JOIN
    compro.wp_wpsc_product_list AS C ON B.product_id = C.id
WHERE
    A.group_id =6";

 $resultado2=mysqli_query($conexion2,$consulta);
 
 if (!$resultado2) {
        die("Error 2");
    } else{
        while ($info=mysqli_fetch_assoc($resultado2)) {
            $arreglo2["data"][]=array_map("utf8_encode", $info);
        }
        echo json_encode($arreglo2);
    }
       
mysqli_free_result($resultado2);
mysqli_close($conexion2);*/
?>