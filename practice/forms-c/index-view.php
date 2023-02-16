<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method='GET' action='process.php'>
        <h1>Mystery Word Scramble</h1>

        <p>Mystery word: kiumppn</p>
        <p>Hint: Halloween’s favorite fruit</p>

        <label for='answer'>Your guess:</label>
        <input type='text' name='answer' id='answer'>

        <button type='submit'>Check answer</button>
    </form>

    <?php if(isset($answer)) { ?>
    <h1>Results</h1>

    <p>You guessed <?php echo $answer; ?></p>

    <?php if($correct) { ?>
    You're right!!!
    <?php } else { ?>
    Absolutely wrong! <a href="index.php">Try again.</a>
    <?php } ?>
    <?php } ?>
</body>

</html>