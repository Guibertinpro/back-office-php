<?php include_once('header.php');

  $clientController = new ClientController;
  $clients = $clientController->getAll();

?>

<main class="d-flex">
  
  <?php include_once('sidebar.php'); ?>

  <section id="main">
    <div class="d-flex flex-wrap">
      <?php
        foreach ($clients as $client) {
      ?>
  
        <div class="card m-2" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title"><?= $client->getFirstname() ?> <?= $client->getLastname() ?></h5>
          </div>
        </div>
  
      <?php } ?>
    </div>
  </section>
</main>

<?php include_once('footer.php'); ?>



