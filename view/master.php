<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/style/style.css">
    <title>Creator users</title>
</head>

<body>
    <header>
        <h1>List of new users, with <?= USERS ?> fake people.</h1>
    </header>
    <?php if (isset($people)) : ?>
        <table border="1">
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Email</td>
            </tr>
            <?php foreach ($people as $user) : ?>
                <tr>
                    <td><?= $number ?></td>
                    <td><?= $user[0] ?></td>
                    <td><?= $user[1] ?></td>
                </tr>
                <?php $number++ ?>
            <?php endforeach ?>
        </table>
    <?php endif ?>

</body>

</html>