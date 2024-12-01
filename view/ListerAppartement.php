<?php
ob_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th>reference</th>
                <th>proprietaire</th>
                <th>localite</th>
                <th>surface</th>
                <th>nombre pieces</th>
                <th>domaine d'usage</th>
                <th>Nature</th>
                <th>nbr d'etage</th>
                <th>surface espace commun</th>

            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($appartements as $appartement) {


            ?><tr>
                    <td><?= $appartement[0] ?></td>
                    <td><?= $appartement[1] ?></td>
                    <td><?= $appartement[2] ?></td>
                    <td><?= $appartement[3] ?></td>
                    <td><?= $appartement[4] ?></td>
                    <td><?= $appartement[5] ?></td>
                    <td><?= $appartement[6] ?></td>
                    <td><?= $appartement[7] ?></td>
                    <td><?= $appartement[8] ?></td>
                    <td><a href="../view/ModifierAppartement.php?reference=<?= $appartement[0] ?>" class="btn btn-info btn-sm">Modifier</a></td>
                    <td><a href="SupprimerAppartement.php?reference=<?= $appartement[0] ?>" class="btn btn-danger btn-sm">Supprimer</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>

    </table>
</body>

</html>

</html>
<?php
$contenu = ob_get_clean();
$titre = "Liste des appartements";
include "layout.php";
?>