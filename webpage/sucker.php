<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
    <title>Sucker</title>
</head>
<body>
    <?php
    $fields = ['name','section','creditCard','typeOfCard'];
    $counter = 0;
    foreach ($fields as $field) {
        if (empty($_REQUEST[$field])) {
            $counter++;
        }
    }?>

    <?php
    if ($counter == 0) { ?>
        <!--  Writing data to a file  -->
        <?php
        $suckers = fopen("suckers.txt", "a");
        $sucker = $_REQUEST["name"].";".$_REQUEST["section"].";".$_REQUEST["creditCard"].";".$_REQUEST["typeOfCard"]."\n";
        fwrite($suckers, $sucker);
        fclose($suckers);
        ?>

        <h1 style="text-align: center">Thanks, sucker!</h1>
        <h3>Your information has been recorded</h3>
        <dl>
            <dt>Name</dt>
            <dd><?= $_REQUEST["name"] ?></dd>
            <dt>Section</dt>
            <dd><?= $_REQUEST["section"] ?></dd>
            <dt>Credit Card</dt>
            <dd>
                <?= $_REQUEST["creditCard"] ?> ( <?= $_REQUEST["typeOfCard"] ?> )
            </dd>
            <dt>Here are all the suckers who have submitted here:)</dt>
            <dd>
                <?php $fool = file_get_contents("suckers.txt"); ?>
                <pre>
                <?php print($fool); ?>
            </pre>
            </dd>
        </dl>
    <?php } else {?>
        <h1>Sorry</h1>
        <p>You didn't fill out the form completely. <a href="buyagrade.html">Try again?</a></p>
    <?php } ?>
</body>
</html>