<?php
require_once __DIR__ . '/Models/Product.php';

$ball = new Game('Dog', 'Game', 7.99, 'Ball');
$bone = new Food('Dog', 'Food', 5.99, 'Bone');
$peluche = new Game('Cat', 'Game', 8.99, 'Peluche');

$dogBed = new DogsBed('Dog', 'DogsBed', 55.99, 'Dog Bed');
$dogBed->height = '70cm';
$dogBed->width = '90cm';

$catBed = new DogsBed('Cat', 'CatsBed', 35.99, 'Cat Bed');
$catBed->height = '30cm';
$catBed->width = '45cm';

$kibbles = new Food('Cat', 'Food', 15.99, 'Kibbles');


$products = [
    $ball,
    $bone,
    $peluche,
    $dogBed,
    $catBed,
    $kibbles
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets' E-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container my-4">
        <div class="row g-5 py-4">
            <?php foreach ($products as $product) { ?>
                <div class="col-4">
                    <div class="card">
                        <img src="<?php echo $product->image ?>" class="card-img-top" alt="<?php $product->name ?>">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $product->name ?></h5>
                            <div><?php echo $product->animal ?></div>
                            <div><?php echo $product->type ?></div>
                            <div><?php echo $product->price ?>$</div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>