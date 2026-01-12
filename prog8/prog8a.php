<?php
$counterfile = "counter.txt";

if(!file_exists($counterfile)){
    file_put_contents($counterfile,"0");
}

$counter=file_get_contents($counterfile);

$counter=$counter+1;

file_put_contents($counterfile,$counter);

?>

<html>
    <head>
        <title>Page Visit Counter</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Welcome!</h1>
            <p>You have visited this site <?php echo $counter; ?>times</p>
        </h1>
    </body>
</html>