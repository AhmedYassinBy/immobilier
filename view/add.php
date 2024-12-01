<?php
ob_start();
?>
<form action="../controller/Add.php" method="POST" class="form-control">
    <label for="">Reference</label>
    <input type="text" name="ref" class="form-control" placeholder="reference"><br>

    <label for="">Proprietaire</label>
    <input type="text" name="prop" class="form-control" placeholder="proprietaire"><br>

    <label for="">Localite</label>
    <input type="text" name="loc" class="form-control" placeholder="Localite"><br>

    <label for="">Surface</label>
    <input type="int" name="sur" class="form-control" placeholder="Surface"><br>

    <label for="" class="form-label mt-4">Domaine d'usage</label>
    <select name="domus" id="adresse" class="form-select">
        <option value="bureau">Bureau</option>
        <option value="domicile">Domicile</option>
    </select><br>


    <label for="">Nombre de piece</label>
    <input type="int" name="pie" class="form-control" placeholder="Nombre de piece"><br>

    <label for="">Surface de l'espace commun</label>
    <input type="int" name="suresp" class="form-control" placeholder="surface"><br>

    <input type="submit" value="ajouter" name="aj" class="btn btn-primary">
</form>
</body>
<?php
$titre = "Ajout d'un immobilier";
$contenu = ob_get_clean();
include 'layout.php';
?>