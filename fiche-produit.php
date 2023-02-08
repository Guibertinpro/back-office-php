<?php include_once('header.php');

  try {
    $productController = new ProductController;
    $product = $productController->getById($_GET['id']);
    ?>

    <main class="d-flex">
      
      <?php include_once('sidebar.php'); ?>

      <section id="main" class="w-100">
        <a href="produits.php" class="position-absolute px-2 py-1 m-2"><i class="fas fa-arrow-left"></i></a>
        <h1 class="h1 text-center m-3">Détail du produit numéro <?= $product->getId() ?></h1>
        <div class="card position-absolute top-50 start-50 translate-middle p-3">
          <p class="h3">Nom : <?= $product->getName() ?></p> 
          <p class="h4">Prix : <?= $product->getPrice() ?> €</p> 
        </div>
      </section>
    </main>

    <?php include_once('footer.php'); ?>
  
  <?php
  } catch (\Throwable $th) {
    ?>
    <main class="d-flex">
      
      <?php include_once('sidebar.php'); ?>

      <section id="main" class="w-100">
        <a href="produits.php" class="position-absolute px-2 py-1 m-2"><i class="fas fa-arrow-left"></i></a>
        <h1 class="h1 text-center m-3">Désolé le produit avec l'id <?= $_GET['id'] ?> est introuvable</h1>
      </section>
    </main>

    <?php include_once('footer.php'); ?>
  <?php
  }
  ?>

