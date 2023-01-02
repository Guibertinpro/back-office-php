<?php include_once('header.php');

  $productController = new ProductController;
  $products = $productController->getAll();

?>

<main class="d-flex">
  
  <?php include_once('sidebar.php'); ?>

  <section id="main" class="w-100">
    <h1 class="h1 text-center m-3">Liste des produits</h1>
    <div class="d-flex flex-wrap">
      <div class="card m-2" style="width: 18rem;">
        <a href="creer-produit.php" class="h-100">
          <div class="card-body text-center d-flex flex-column align-items-center justify-content-center h-100">
            <i class="fas fa-circle-plus fa-2x"></i>
            <p class="m-0 mt-2">
              Ajouter un produit
            </p>
          </div>
        </a>
      </div>
      <?php
        foreach ($products as $product) {
      ?>
  
        <div class="card m-2" style="width: 18rem;">
          
            <div class="card-body">
              <p class="card-title m-0 fw-bold"><?= $product->getName() ?></p>
              <p class="card-title m-0 mt-2">Prix : <?= $product->getPrice() ?> €<sup>TTC</sup></p>
            </div>
            <div class="card-footer d-flex justify-content-between align-items-center">
              <a href="supprimer-produit.php?id=<?= $product->getId() ?>">
                <p class="m-0"><i class="fas fa-trash text-danger me-2"></i>Supprimer</p>
              </a>
              <a href="modifier-produit.php?id=<?= $product->getId() ?>">
                <p class="m-0"><i class="far fa-pen-to-square text-warning me-2"></i>Modifier</p>
              </a>
            </div>
          
        </div>
  
      <?php } ?>
    </div>
  </section>
</main>

<?php include_once('footer.php'); ?>