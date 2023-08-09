<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "hello World"
    $x = 2; //number
    $ y = 20.2; //double
    $ a = "Hello World"; // string
    $ b = true;
    $ z = false;//boolean
    echo $x;
    echo "The number is".$y."<br>";// concatination . le hunxa
    var_dump($y);// displays the type of variables
    var_dump($a);//diaplays the length and string
    // array
    $array1 = array(1,2,3,4,5);
    echo $array1; // displays only array not the element
    var_dump($array1); //semi colum is necessay
    // if else condition
    $a = 5;
    $b = 10;
    $c = 20;

    if($a > $b){
        if($a >$c){
            echo $a;
        }
        else{
          echo $c;
        }
    else if($b>$a){
        if ($b>$c){
            echo $b
        }else{
            echo $c
        }
        
    }
    if($a>$b){
        //statement to be excuted when condition is true
        echo $a;
    }
    else if($b>$c){
        echo $b;
    }
    esle{
        //statement to be executed when the condition is false
        echo $c;
    }
    // nestedifelse statement
    if (condtion 1){
        if(condition 2){
              //statement to be executed when cond1  and cond2 are true
        }else{
           //statement to b executed when cond1 is true but the cond2 is false
        }
    }
    else {
        if(condition 3){
         //statement to be executed when cond1 is false and cond3 is true
        }else{
        // statememt to be executed when cond1 and cond3 are false
        }
    }
    //switch case
    switch(expression){
        case A:
            break;
            //statements
        case B:
            //statemnets
            break;
    }
    default:
    //statement to be executed when none of the cases matches
    $day = 1;
    switch($day){
        case 1:
            echo "sunday"
            break;
        case 2:
            echo "Monday"
            break;
        default:
        echo "Put the number between 1 to 7"
    }
    $d = date("D");
    switch($d){
        case "Mon":
            echo "today is Monday"
            break;
        case "Tue":
            echo "Today is tueday"
            break;
        case "Wed":
            echo "Today is wednesday"
            break;
        case "Thu":
            echo "Today is Thursday";
            break;
        case "Fri":
            echo "Today is Friday";
            break;
        case "Sat":
            echo "Today is Saturday";
            break;
        case "Sun":
            echo "Today is Saudau";
            break;
        default:
        echo "Wonder which day is this?"
    }
    // forloop
    $array3 = array(1,2,3,4,5);
    for($i = 0; $i < count($array3); $i++){
        echo $array3[$i]."<br>";
        //satements
    }
    //while loop
    while(condition){

    }
    //do while
    do{

    }while(condition)
    //for each
    foreach(array as value){
        //code to be executed
    }
    $array2 = array(5,6,7,8,9);
    foreach($array2 as $value2){
        echo "The values are $value2"."<br>";
    }
    // indexing
    $array4 = array(1,2,3,4,5);
    // this will update the element of the array
    $array4[0] = "One";
    $array4[1] = "Two";
    $array4[2] = "Three";       
    $array4[3] = "Four";
    $array4[4] = "Five";
    $array4[11] = "Ten";

    var_dump($array4)
    //key value pair is assciative array
    

    ?>
    
</body>
</html>