<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>Badwords</h1>

    <?php
    $text = "Società Sportiva Lazio, commonly referred to as Lazio, is an Italian professional sports club based in Rome, most known for its football activity. The society, founded in 1900, plays in the Serie A and have spent most of their history in the top tier of Italian football. Lazio have been Italian champions twice (1974, 2000), and have won the Coppa Italia seven times, the Supercoppa Italiana three times, and both the UEFA Cup Winners' Cup and UEFA Super Cup on one occasion.";
    $lenght = strlen($text);
    $badword = $_GET["badword"];
    $badwordReplace = str_replace($badword, "***", $text);
    $badwordReplaceLenght = strlen($badwordReplace);
    ?>

    <p>
        <?php
        echo $text;
        ?>
        <span>
            <?php
            echo $lenght;
            ?>
        </span>
    </p>

        

    <p>
        <?php
        echo $badwordReplace;
        ?>
        <span>
            <?php
            echo $badwordReplaceLenght;
            ?>
        </span>
    </p>
    
</body>
</html>