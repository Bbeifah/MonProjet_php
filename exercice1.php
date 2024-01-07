<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 - Variables PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Exercice 1 - Variables PHP</h1>
        <p>Explorez les variables PHP avec cet exercice.</p>
    </header>

    <section>
        <h2>Question :</h2>
        <p>Parmi les variables suivantes, lesquelles ont un nom valide :</p>
        <ul>
            <?php
            $variables = array('mavar', '$mavar', '$var5', '$_mavar', '$_5var', '$__élément1', '$hotel4*');

            foreach ($variables as $variable) {
                echo '<li>' . htmlspecialchars($variable) . '</li>';
            }
            ?>
        </ul>
    </section>

</body>
</html>