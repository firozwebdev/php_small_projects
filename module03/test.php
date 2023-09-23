<?php



$testUsers = [
    ['id' => 1, 'name' => 'Alice', 'email' => 'alice@example.com'],
    ['id' => 2, 'name' => 'Bob', 'email' => 'bob@example.com'],
    ['id' => 3, 'name' => 'Tina', 'email' => 'tina@example.com'],
];

$users = [
    "Jhon" => [
        'age'=>23,
        'email'=>'jhon@gmail.com'
    ],
    "sabuz" => [
        'age'=>34,
        'email'=>'jhon@gmail.com'
    ],
    "Rasel" => [
        'age'=>56,
        'email'=>'jhon@gmail.com'
    ],
    "Karim" => [
        'age'=>12,
        'email'=>'jhon@gmail.com'
    ]
];

//foreach ($users as $username => $details){
//    echo "Username : $username \n";
//    foreach($details as $key => $value){
//        echo "$key : $value \n";
//    }
//}
//$names = array_column($users, 'name');
//print_r($names);

//echo $users[2]['name'] .' '. $users[2]['email'];

//foreach($users as $user){
//    foreach ($user as $key=>$value){
//        echo "$key: $value ,";
//    }
//}

//$arr1 = ["a",'b','c','d'];
//$arr2 = ['Apple','Ball','Cat','Doll'];
//
//print_r(array_combine($arr1,$arr2));

//$assoc = array("a" => "apple", "b" => "banana", "c" => "cherry");
//print_r(array_values($assoc));
//print_r(array_keys($assoc));

//$indexArr = ['apple','orange','banana','Multa'];
//$filled = array_fill(1,3,'True');
//print_r($filled);

//$array = ['apple','orange','Multa','banana'];
//array_push($array,'grape'); // return no. of  items in the array
//print_r($array);

//$array = ['apple','orange','Multa','banana'];
//$test = array_pop($array);  //return removed item
//print_r($array);

//$array = ['apple','orange','Multa','banana'];
//$test = array_unshift($array,'mango'); //return no. of array item
//
//echo $test;
//print_r($array);

//$array = ['apple','orange','Multa','banana'];
//$test = array_shift($array); // apple; return removed item from the array.
//echo $test;
//print_r($array);

//$array = ['apple','orange','Multa','banana'];
//$test = array_splice($array,1,1,['cherry','coconut']);
//
////print_r($array);

$array = ['apple','orange','Multa','banana'];
$newArray = array_slice($array,2,1);
print_r($newArray);
