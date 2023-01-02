<?php include_once('header.php');

  $clientController = new ClientController;
  $clients = $clientController->getAll();

?>

<main class="d-flex">
  
  <?php include_once('sidebar.php'); ?>

  <section id="main" class="w-100">
    <h1 class="h1 text-center m-3">Liste des clients</h1>
    <div class="d-flex flex-wrap">
      <?php
        foreach ($clients as $client) {
      ?>
  
        <div class="card m-2" style="width: 18rem;">
          <div class="card-body d-flex align-items-center">
            <i class="far fa-user me-2"></i>
            <p class="card-title m-0 fw-bold"><?= $client->getFirstname() ?> <?= $client->getLastname() ?></p>
          </div>
        </div>
  
      <?php } ?>
    </div>
  </section>
</main>

<?php include_once('footer.php'); ?>