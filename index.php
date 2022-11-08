<?php
//echo "hjhjuhu";
//
//$a = "asd";
//$b = "sdfg";
//echo"<br>";
//echo $a . " " . $b . "<br>";
//
//$a = 4;
//$b = 6;
//echo $a + $b . "<br>";
//echo $a + $b . "<br>";
//echo $a / $b . "<br>";
//echo $a - $b . "<br>";
//echo $a % $b . "<br>";
//echo $a ** $b . "<br>";
//if ( $a > $b ) {
//    echo "bolshe" . $a;
//}
//
//else if ( $a<$b ) {
//    echo "menshe" . $b;
//}
//else {
//    echo "ravno";
//}
//echo"<br>";

function split( $arg1, $arg2 ) {
    if ( $arg2 == 0 )
    return "нельзя";
    return $arg1 / $arg2;
}

function minus( $arg1, $arg2 ) {

    return $arg1 - $arg2;
}

function summa( $arg1, $arg2 ) {

    return $arg1 + $arg2;
}

function mult( $arg1, $arg2 ) {
    return $arg1 * $arg2;
}

function math( $arg1, $arg2, $op ) {
    switch( $op ) {
        case "plus":
        echo summa( $arg1, $arg2 );
        break;
        case "split":
        echo split( $arg1, $arg2 );
        break;
        case "minus":
        echo minus( $arg1, $arg2 );
        break;
        case "multiply":
        echo mult( $arg1, $arg2 );
        break;

        default:
        echo "error";

    }

}
echo "switch", math( 10, 30, "multiply" );
echo"<br>";
//for ( $i = 0; $i <= 100; $i++ ) {
//    if ( $i % 3 == 0 )
//        echo $i, " " ;
//}
//echo"<br>";
$n = 100;

$i = 0 ;

while ( $i <= $n ) {
    if ( $i%3 == 0 )
    echo $i, " " ;
    $i++;
}
echo"<br>";
//$myArray = [];
////var_dump( $myArray );
//$myArray[] = true;
//$myArray[] = 1;
//$myArray[] = "dsfsfw";
////var_dump( $myArray );
//$aqr = ["html", "css", "php", "js", "mysql"];
//for ( $i = 0; $i< count( $aqr );
//$i++ ) {
//    echo $aqr[$i], " ";
//}
//foreach ( $aqr as $item ) {
//    echo $item, " ";
//}
//<!-- $users = [];
//$users[0] = [
//    "name"=> "Alex",
//    "email"=> "alex@gmail.com"
//];
//
//$users[1] = [
//    "name"=> "Mike",
//    "email"=> "mike@gmail.com"
//];
//$users[2] = [
//    "name"=> "Ok",
//    "email"=> "ok@gmail.com"
//];
//foreach ( $users as $key => $item ) {
//   echo $key;
//    foreach ( $item as $value )
//        echo $value, "<br>";
//}

?>
