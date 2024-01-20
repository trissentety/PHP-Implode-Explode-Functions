<?php
//Explode function
$name = "Spongebob Squarepants";
$full_name = explode(" ", $name); //full name is array. Take each portion as an array and place them as new elements inside array
foreach ($full_name as $name) {
    echo $name . "<br>";
}
//returns
//Spongebob
//Squarepants

//Implode function. Turns array into string
$aUsername = array("Sponge", "bob", " Square", "pants");
$aUsername = implode(" ", $aUsername);
echo $aUsername . "<br>";
//returns
//Sponge bob Square pants

$aUsername1 = array("Sponge", "bob", " Square", "pants");
$aUsername1 = implode($aUsername1);
echo $aUsername1 . "<br>";
//returns
//Spongebob Squarepants
