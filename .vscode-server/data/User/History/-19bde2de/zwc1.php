<html> 
<head> 
    <meta charset="UTF-8">
    <link href="tyylitiedot.css" rel="stylesheet">
    <title>Sitaatteja</title> 
</head> 
<body> 
<?php

$sitaatti = array("The computer was born to solve problems that did not exist before." => "Bill Gates",
"Software is a gas; it expands to fill its container." => "Nathan Myhrvold",
"The problem of viruses is temporary and will be solved in two years." => "John McAfee, 1988",
"Computer viruses are an urban legend." => "Peter Norton, 1988",
"In 2031, lawyers will be commonly a part of most development teams." => "Grady Booch",
"In the future, computers may weigh no more than 1.5 tonnes." => "Popular mechanics, 1949",
"I see little commercial potential for the Internet for at least ten years." => "Bill Gates, 1994");

//echo count($sitaatti);                    //laskee avain-arvo -parien lkm:n
//print_r($sitaatti);                       //tulostaa kaikki avaimet ja arvot
//print_r(array_keys($sitaatti));           //tulostaa kaikki avaimet
//print_r(array_values($sitaatti));         //tulostaa kaikki taulukon arvot
//echo array_rand($sitaatti) . "<br>";


$key = array_rand($sitaatti);
$value = $sitaatti[$key];
echo $key . "<br>";
echo "~ " . $value . " ~";



/*foreach ($sitaatti as $key => $value) {       //tulostaa kaikki taulukon avaimet ja arvot
    echo $key ." ". "<br>";                     //kivasti alekkain 
    echo $value . "<br>" . "<br>";
}*/


?>