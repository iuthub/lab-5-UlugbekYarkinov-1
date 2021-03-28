<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sucker</title>
</head>
<body>
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
    </dl>
</body>
</html>