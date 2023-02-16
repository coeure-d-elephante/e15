<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Results</h1>
    <p>You guessed <?php echo $answer; ?></p>
    <?php if($correct) { ?>
    You're right!!!
    <?php } else { ?>
    Absolutely wrong! <a href="index.php">Try again.</a>
    <?php } ?>
</body>

</html>