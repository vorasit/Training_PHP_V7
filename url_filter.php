<?php
    $url = "https://www.w3schools.com";

    // Remove all illegal characters from a url
    $url = filter_var($url, FILTER_SANITIZE_URL); //sanitizing
    //chang to int,email,ip

    // Validate url
    if (!filter_var($url, FILTER_VALIDATE_URL) === false) { //validate
        echo("$url is a valid URL"."<br>");
    } else {
        echo("$url is not a valid URL"."<br>");
    }
?>

<?php
//cut tag html and string other

    $h1 = "<h1>google hello</h1>";
    $str = filter_var($h1,FILTER_SANITIZE_STRING);
    echo $str."<br>";
?>

<?php
//check because at a value to have integer
$int = 100;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("Integer is valid");
} else {
    echo("Integer is not valid");
}
?>