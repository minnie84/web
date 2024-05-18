<?php
include('Parsedown.php');
echo "<base target='_blank'>";

/*
echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>";
*/

/*
echo "<link rel='stylesheet' href='https://unpkg.com/simpledotcss/simple.min.css'>";
*/
/*
echo "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css' integrity='sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls' crossorigin='anonymous'>";
*/
/*
echo "<link rel='stylesheet' href='https://unpkg.com/simpledotcss/simple.css'>";
*/

echo "<link rel='stylesheet' href='bootstrap.css'>";
$html = file_get_contents('index.md');

$Parsedown = new Parsedown();
echo $Parsedown->text($html);

?>
