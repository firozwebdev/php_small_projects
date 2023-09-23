<?php



$users = [
    ['id' => 1, 'name' => 'Alice', 'email' => 'alice@example.com'],
    ['id' => 2, 'name' => 'Bob', 'email' => 'bob@example.com'],
    ['id' => 3, 'name' => 'Tina', 'email' => 'tina@example.com'],
];
//$names = array_column($users, 'name');
//print_r($names);

//echo $users[2]['name'] .' '. $users[2]['email'];

foreach($users as $user){
    foreach ($user as $key=>$value){
        echo "$key: $value ,";
    }
}

