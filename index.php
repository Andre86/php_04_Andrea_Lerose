<?php

$users = [
['name' => 'Andrea' , 'surname' => "Lerose" , 'gender' => 'NB'],
['name' => 'Leonardo' , 'surname' => "Lerose" , 'gender' => 'M'],
['name' => 'Martina' , 'surname' => "Lerose" , 'gender' => 'F'],
['name' => 'Lorenzo' , 'surname' => "Lerose" , 'gender' => 'NB'],
['name' => 'Alessandro' , 'surname' => "Lerose" , 'gender' => 'M'],
];

foreach ($users as $user) {
    if($user['gender']== 'M'){
        echo "Buongiorno Sig. " . $user['name'] . " " . $user['surname'] . "\n";
    }elseif($user['gender'] == 'F'){
        echo "Buongiorno Sig.na " . $user['name'] . " " . $user['surname'] . "\n";
    }else{
        echo "Buongiorno " . $user['name'] . " " . $user['surname'] . "\n";
    }
}