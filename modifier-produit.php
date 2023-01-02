<?php include_once('header.php');

  $productController = new ProductController;
  $product = $productController->getById($_GET['id']);

  if ($_POST) {
    $product->hydrate($_POST);
    $productController->update($product);

    echo '<script async >window.location.href="./produits.php"</script>';
  }
?>

<main class="d-flex">
  
  <?php include_once('sidebar.php'); ?>

  <section id="main" class="w-100">
    <a href="produits.php" class="position-absolute px-2 py-1 m-2"><i class="fas fa-arrow-left"></i></a>
    <h1 class="h1 text-center m-3">Détail du produit numéro <?= $product->getId() ?></h1>
    <div class="card position-absolute top-50 start-50 translate-middle p-3">
      <form method="post" class="d-flex flex-column">
        <label for="name">Nom</label>
        <input type="text" name="name" id="name" placeholder="<?= $product->getName() ?>">
        <label for="name">Prix</label>
        <input type="text" name="price" id="price" placeholder="<?= $product->getPrice() ?>">
        <input type="submit" value="Modifier" class="btn btn-primary mt-3">
      </form>
    </div>
  </section>
</main>

<?php include_once('footer.php'); ?>

