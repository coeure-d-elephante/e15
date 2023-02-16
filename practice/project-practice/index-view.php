<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 1</title>
    <style>
    body {
        padding: 20px;
        padding-left: 15%;
    }

    span {
        text-decoration: underline;
        font-weight: bold;
        padding-left: 25%;
    }

    li {
        font-weight: bold;
        font-size: small;
    }

    p {
        font-family: 'Courier New', Courier, monospace;
        font-size: medium;
    }

    .results {
        border: 1px solid;
        background-color: lightgreen;
        padding: 25px;
        width: 500px;
    }

    .instructions {
        border: 1px solid;
        background-color: lightgrey;
        padding: 25px;
        width: 500px;
    }
    </style>
</head>

<body>
    <div class="instructions">
        <h3>Instructions</h3>
        <p>Enter a word to find out...</p>
        <ul>
            <li>Is it a Palindrome? (Same forwards and backwards)</li>
            <li>How many vowels does it contain?</li>
            <li>What the word would look like if every letter was shifted +1 places in the alphabet</li>
        </ul>
    </div>
    <div class="stringProcessor">
        <h1>String Processor - e15 Project 1</h1>
        <h3 style="color: grey; padding-left: 15%;">Enter a string</h3>
        <form action="process.php" method="GET">
            <input type="text" name="inputString" id="inputString" style="width:400px">

            <button type="submit">Process</button>
        </form>

        <?php if(isset($inputString)) { ?>
    </div>

    <div class="results">
        <span>Results</span>
        <ul>
            <li>Your input: </li>
            <p> <?php echo $str_lower;?> </p>
            <li>Is this a palindrome word? </li>
            <p><?php if($isPalindrome) { ?>
                ✓ Yes, it's a palindrome!
                <?php } else { ?>
                This is NOT a palindrome! <a href="index.php">Try another word.</a>
                <?php } ?></p>

            <li>How many vowels does it contain?</li>
            <p> <?php echo $vowel_count; ?> </p>

            <li>What the word would look like if every letter was shifted +1 places in the alphabet:
            </li>
            <p> <?php echo $shiftedString; ?></p>
        </ul>

    </div>

    <?php } ?>


</body>

</html>