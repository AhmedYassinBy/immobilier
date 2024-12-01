<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <?php
    include 'view/nav.php';
    ?>

    <h1>Liste des immobiliers</h1>
    <div class="row">
        <?php
        for ($i = 0; $i < 4; $i++) {
        ?>
            <div class="col-3">
                <div class="card">
                    <img src="https://picsum.photos/200/200" class="img-fluid" alt="123">
                    <div class="card-body">
                        <h1 class="card-title">appartement mezyena</h1>
                        <a href="#" class="btn btn-success btn-sm">Detail</a>
                        <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-shopping-card"></i>Ajouter</a>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php
        include "view/footer.php";
        ?>
    </div>
</body>

</html>