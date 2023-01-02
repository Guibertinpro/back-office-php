<?php include_once('header.php');

  $orderController = new OrderController;
  $orders = $orderController->getAll();

?>

<main class="d-flex">
  
  <?php include_once('sidebar.php'); ?>

  <section id="main" class="w-100">
    <h1 class="h1 text-center m-3">Liste des commandes</h1>
    <div class="d-flex flex-wrap">
      <?php
        foreach ($orders as $order) {
      ?>
  
        <div class="card m-2" style="width: 18rem;">
          <div class="card-body">
            <p class="card-title m-0">Commande numéro : <?= $order->getId() ?></p>
            <p class="card-title m-0">Montant : <?= $order->getAmount() ?> €</p>
          </div>
        </div>
  
      <?php } ?>
    </div>
  </section>
</main>

<?php include_once('footer.php'); ?>