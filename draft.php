<?php

$a = array(1, 2, 3); // старый синтаксис
$b = [1, 2, 3]; // новый синтаксис

$c = [1, 2.3, "first", true]; // numeric array
$d = ["first" => 1, "second" => 2]; // ассоциативный массив

print(PHP_EOL);
print($d["first"]);

$c[] = "new element";
print(PHP_EOL); // \n \r \r\n
print($c[4]);
print(PHP_EOL);

print("test\r123");


$len = count($c);
for($i=0; $i < $len; $i++) {
    print($c[$i]);
    print(PHP_EOL);
}

foreach($d as $key => $val) {
    print($key . ' => ' . $val . PHP_EOL);
}
