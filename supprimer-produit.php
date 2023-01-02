<?php include_once('header.php');

  $productController = new ProductController;
  $productController->delete($_GET['id']);

?>

<script async >window.location.href="./produits.php"</script>