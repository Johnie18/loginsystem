<?php

/*ARRAY STRING
$color = array("white","green","red","blue","black");
 echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the {$color[2]} carpet, the {$color[1]} lawn, the {$color[0]} house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
*/

/* SORTING
$color = array('white', 'green', 'red');

sort($color);
foreach($color as $y){
    echo "<li> $y </li>";
}
    */

/*
//associative array
$ceu = array( "Italy"=>"Rome", 
"Luxembourg"=>"Luxembourg", 
"Belgium"=> "Brussels", 
"Denmark"=>"Copenhagen", 
"Finland"=>"Helsinki", 
"France" => "Paris", 
"Slovakia"=>"Bratislava", 
"Slovenia"=>"Ljubljana", 
"Germany" => "Berlin", 
"Greece" => "Athens",
"Ireland"=>"Dublin", 
"Netherlands"=>"Amsterdam", 
"Portugal"=>"Lisbon", 
"Spain"=>"Madrid", 
"Sweden"=>"Stockholm", 
"United Kingdom"=>"London", 
"Cyprus"=>"Nicosia", 
"Lithuania"=>"Vilnius", 
"Czech Republic"=>"Prague",
"Estonia"=>"Tallin", 
"Hungary"=>"Budapest", 
"Latvia"=>"Riga", 
"Malta"=>"Valetta", 
"Austria" => "Vienna", "
Poland"=>"Warsaw") ;

//associative array sorting command
asort($ceu);

//associative array foreach to display COUNTRY => CAPITAL(KEY)
foreach($ceu as $c => $capital){
    echo "THE Capital of {$c} is {$capital}". "<br>";
}
*/

/*
$x = array(1, 2, 3, 4, 5);
print_r($x);
echo "<br>";
//delete an specific array
unset($x[3]);
print_r($x);
*/

/* $color = array(4 => 'white', 6 => 'green', 8 => 'red');
echo reset($color); or echo $color[4]; //reset displays the first element in an array
*/


/* PROBLEM: Write a PHP script which decodes the following JSON string.
Sample JSON code :
{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}
Expected Output :
Title : The Cuckoos Calling
Author : Robert Galbraith
Publisher : Little Brown

//simple solution
$a = array("Title"=> "The Cuckoos Calling",
        "Author"=>"Robert Galbraith",
"Publisher"=> "Little Brown");
 foreach($a as $key => $value){
    echo $key . " : " . $value . "<br>";
 }
    */

 /*
$original = array(1, 2, 3, 4, 5);
foreach ($original as $o){
    echo " " . $o;
}
echo "<br>";
    $x = '$';

array_splice($original, 3, 0, $x); // insert or remove (nameof array, index, remove, optional(insert))
foreach ($original as $o){
    echo " " . $o;
}
    */
/*
$arr = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
asort($array);
echo "ascending order by value<br>";
print_r($array);
echo "<br>";
ksort($array);
echo "ascending order by key<br>";
print_r($array);
echo "<br>";
arsort($array);
echo "descending order by value<br>";
print_r($array);
echo "<br>";
krsort($array);
echo "descending order by key<br>";
print_r($array);
*/

/*
$temp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
echo implode(", ",$temp) . "<br><br>";
$avg = array_sum($temp) / count($temp);
echo round($avg) . "<br><br>";
sort($temp);
 $f = array_splice($temp, 0, 7);
 echo "This is the five lowest temperature: ";
 foreach($f as $first){
 echo " " . $first;
 }
 echo "<br>";
  $l = array_splice($temp, -7);
   echo "This is the five highest temperature: ";
 foreach($l as $last){
     echo " " . $last;
 }
*/
/*
$var = "PHP Tutorial.";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?php echo $var; ?></h3>
    <p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.
Go to the PHP Tutorial."</p>
    <br>
    <a href="https://www.w3resource.com/php-exercises/php-basic-exercises.php">Go to tutorial.</a>
</body>
</html>
*/

/*
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Please input your name:</h1>
<body>
    <form action="exercise.php" method="post">
        <input type="text" name="user">
        <input type="submit" name="submit" value="Submit Name">
    </form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $username = $_POST["user"];
    echo "HELLO" . " " .  $username . "!";
}
?>*/
/*
// Display the text "Your User Agent is :" followed by the user agent string from the HTTP request
echo "Your User Agent is : " . $_SERVER['HTTP_USER_AGENT'];
*/

/*
// Get the base name of the currently executing PHP script file
$current_file_name = basename($_SERVER['PHP_SELF']);
// Display the current file name followed by a newline character
echo $current_file_name . "\n";
*/

/* Define the URL to be parsed
$url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';

// Parse the URL and store its components in the $url variable
$url = parse_url($url);

// Display the scheme (protocol) of the parsed URL
echo 'Scheme : ' . $url['scheme'] . "<br>";

// Display the host (domain) of the parsed URL
echo 'Host : ' . $url['host'] . "<br>";

// Display the path of the parsed URL
echo 'Path : ' . $url['path'] . "<br>";
*/

/*
// Check if the HTTPS (secure) protocol is enabled in the server environment
if (!empty($_SERVER['HTTPS'])) {
  // Display a message if HTTPS is enabled
  echo 'https is enabled';
} else {
  // Display a message if HTTPS is not enabled, followed by a newline character
  echo 'http is enabled' . "\n";
}
*/
/*
header("Location: https://www.w3resource.com/");
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <input type="text" name="email">
    <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])){
    $email = $_POST['email'];
   if(filter_var( $email, FILTER_VALIDATE_EMAIL)){
echo "Valid email" .htmlspecialchars($email);
   }
   else {
    echo "Invalid email!";
}
}

?>