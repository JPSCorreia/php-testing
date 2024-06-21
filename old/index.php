<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $nome = "Joao";
    $dobro = true;
    ?>
    <?php if ($dobro) { ?> <h1>O meu nome é <?= $nome ?></h1> <?php } ?>
    <?php if ($dobro) { ?> <h1> <?= $_SERVER["SERVER_NAME"] ?></h1> <?php } ?>

    <main>
        <form action="includes/formhandler.php" method="post">

            <label for="firstname">First name?</label>
            <input id="firstname" type="text" name="firstname" placeholder="Enter first name...">

            <label for="lastname">Last name?</label>
            <input id="lastname" type="text" name="lastname" placeholder="Enter last name...">

            <label for="favouritepet">Favourite pet?</label>
            <select id="favouritepet" name="favouritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="hamster">Hamster</option>
            </select>

            <button type="submit" name="submit">Submit</button>
        </form>
    </main>


</body>

</html>