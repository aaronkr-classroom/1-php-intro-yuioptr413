<?php
$nothing = "<h1 style = 'color: red'>Nothing</h1>";
$to = "<h2 style= 'color: orange'>to</h2>";
$see = "<h3 style= 'color: green'>see</h3>";
$here = "<h4 style= 'color: purple'>here.</h4>";

$color = 'blue';

$text = "<h1 style ='color: $color '>"; 
$text .= "Nothing to see here.";   // .= 는 x += 3; ... 문자열을 결합해줌
$text .= "</h1>";

echo $text;
echo $nothing . ' ' . $to . ' ' . $see . ' ' . $here;
?>
<!DOCTYPE html>
<html>
<head>
    <title>😊Aaron's PHP Page!</title>
</head>
<body>
    <h1 style="font-size: 48pt">
        Nothing to see here!
        <?= $text ?>
    </h1>
</body>
</html>