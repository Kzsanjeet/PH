<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Hello World";
    $x = 20;
    echo $x;
    $a = 5
    $b = 10
    if($a > $b){
        echo $a;
    }
    else{
        echo $b;
    }
    if(1 condition){
        if(2 condition){

        }
    }else{
        if (3 condition){

        }
        else{

        }
    }
    switch(expression){
        case A:
            break;
        case B:
            break;
        default :
        echo"Put the day from 1 to 7";
    }
    $fruits = "Mango"
    switch($fruits){
        case Mango:
            echo "I scondly like Mango";
            break;
        case Apple:
            echo "I dont like apple";
            break;
        default:
        echo "CHoose two option";
    }

    $array1 = array(1,2,3,4,5,6);
    for ($i = 0; $i < count(array1); $i++){
        echo $array3[$i]."<br>";
    }
    $array2 = array(1,2,3,4,5);
    $array3 = array();
    for ($i = 0; $i <count($array2); $i++){
        $value1 = $array2[$i];
        array_push($array3,$value1);        
    }
    var_dump($array3.'<br>');

    $i = 0;
    while($i < 6){
        echo "The count is.$i".'<br>';
        $i+=1;
    }
    $color = array("Red","Yellow","Green","Blue");
    for ($i=0; $i < count($color); $i++){
        echo $color[i+1];
    }
    foreach($color as $i){
        echo $color[$i]+1;
    }
    $array4 = array(1,2,3,4,5);
    $array4[11]= 6;
    var_dump($array4);

    $array = array(1,2,2);
    $colors = array("red","yellow","blue","green","orange","pink","gray","black");
    $array[0]+$array[1]+$array[2] = $sum;
    while($sum < 7){
        if($sum == 1){
            echo $colors[0];
        else if($sum == 2){
            echo $colors[1];
        }
        else if ($sum == 3){
            echo $colors[2];
        }
        else if ($sum == 4){
            echo $colors[3];
        }
        else if ($sum == 5){
            echo $colors[4];
        }
        else if ($sum == 6){
            echo $colors[5];
        }
        else{
            echo "Out of range";
        }
    }}

    ?>
</body>
</html>