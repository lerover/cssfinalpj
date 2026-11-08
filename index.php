
<form method="GET" action="index.php">
    <input type="text" name="age">
    <button type="submit">Submit</button>
</form>


<?php

$age = $_GET['age'];

echo $age;

if($age === 0){
    echo "Invalid Age";
}else{
    if($age>=1 || $age<=5){
        echo "Baby";
    }elseif($age>=5 || $age<=10){
        echo "Child";
    }elseif($age>=10 || $age<=20){
        echo "Teen";
    }elseif($age>=20 || $age<=105){
        echo "Adult";
    }
}