<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 12 - Formulaire d'adresse client PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Exercice 12 - Formulaire d'adresse client PHP</h1>

    <?php
    // Exercice 12 : Créez un formulaire comprenant un groupe de champs ayant pour titre "Adresse client".
    // Le groupe doit permettre la saisie du nom, du prénom, de l’adresse, de la ville et du code postal.
    // Les données sont ensuite traitées par un fichier PHP séparé récupérant les données et les affichant dans un tableau XHTML.

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = htmlspecialchars($_POST["nom"]);
        $prenom = htmlspecialchars($_POST["prenom"]);
        $adresse = htmlspecialchars($_POST["adresse"]);
        $ville = htmlspecialchars($_POST["ville"]);
        $codePostal = htmlspecialchars($_POST["codePostal"]);

        echo "<h2>Récapitulatif de l'adresse :</h2>";
        echo "<table border='1'>
                <tr>
                    <th>Nom</th>
                    <td>$nom</td>
                </tr>
                <tr>
                    <th>Prénom</th>
                    <td>$prenom</td>
                </tr>
                <tr>
                    <th>Adresse</th>
                    <td>$adresse</td>
                </tr>
                <tr>
                    <th>Ville</th>
                    <td>$ville</td>
                </tr>
                <tr>
                    <th>Code Postal</th>
                    <td>$codePostal</td>
                </tr>
              </table>";
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset>
            <legend>Adresse client</legend>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required><br>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required><br>

            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" required><br>

            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville" required><br>

            <label for="codePostal">Code Postal :</label>
            <input type="text" id="codePostal" name="codePostal" required><br>

            <input type="submit" value="Valider">
        </fieldset>
    </form>

</body>
</html>