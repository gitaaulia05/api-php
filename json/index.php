<?php
 $data = file_get_contents('data/sbux.json');
 $menu = json_decode($data , true);

 $product = $menu['product'];
 // TEST JSON
//  echo $product[0]["name"];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>



  <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link"  aria-current="page" href="#">All Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Drink</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Beverages</a>
              </li>
            
            </ul>
          </div>
        </div>
      </nav>

      <div class="container mt-3">
        <div class="row">
          <div class="col">
            <h1>All Menu</h1>
          </div>
        </div>

        <div class="row">
        <?php foreach ($product as $p) : ?>
          
          <div class="col-md-4">
                <div class="card mb-3" >
        <img src="img/<?= $p['img'];?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?= $p['name'];?></h5>
          <p class="card-text"><?= $p['desc'];?></p>
          <p class="card-text fw-bold">RP.<?= $p['price'];?></p>
          <a href="#" class="btn btn-primary">Pesan Sekarang</a>
        </div>
      </div>
          </div>

          <?php endforeach; ?>
        </div>


      </div>



    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>