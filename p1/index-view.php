<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 1</title>
    <style>
    body {
        padding: 20px;
    }

    h3 {
        color: grey;
    }
    </style>
</head>

<body>
    <h1>String Processor - e15 Project 1</h1>
    <h3>Enter a string</h3>
    <input type="text" style="width:400px"> <input value="Process" type="submit">

    <ul>
        <li>String: <?php echo $inputString; ?></li>
        <li>Is big word? <?php if($isBigWord) { ?>
            Yes
            <?php } else { ?>
            No
            <?php } ?>
        </li>
    </ul>
</body>

</html>