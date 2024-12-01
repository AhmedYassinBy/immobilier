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

            foreach ($villa as $vil) {


            ?><tr>
                    <td><?= $vil[0] ?></td>
                    <td><?= $vil[1] ?></td>
                    <td><?= $vil[2] ?></td>
                    <td><?= $vil[3] ?></td>
                    <td><?= $vil[4] ?></td>
                    <td><?= $vil[5] ?></td>
                    <td><?= $vil[6] ?></td>
                    <td><?= $vil[7] ?></td>
                    <td><?= $vil[8] ?></td>
                    <td><a href="ModifierVilla.php?reference=<?= $vil[0] ?>" class="btn btn-info btn-sm">Modifier</a></td>
                    <td><a href="SupprimerVilla.php?reference=<?= $vil[0] ?>" class="btn btn-danger btn-sm">Supprimer</a></td>
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
$titre = "Liste des villa";
include "../../view/layout.php";
?>