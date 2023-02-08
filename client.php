<?php include_once('header.php');

  try {
    $clientController = new ClientController;
    $client = $clientController->getById($_GET['id']);
    $orderController = new OrderController;
    $nbOrders = $orderController->getNumberOfOrdersByClientId($_GET['id']);
    $totalSpent = $orderController->getTotalSpentByClientId($_GET['id']);

    ?>
    <main class="d-flex">
      
      <?php include_once('sidebar.php'); ?>

      <section id="main" class="w-100">
        <a href="clients.php" class="position-absolute px-2 py-1 m-2"><i class="fas fa-arrow-left"></i></a>
        <h1 class="h1 text-center m-3">Fiche client numéro <?= $client->getId() ?></h1>
        <div class="card p-3 m-4">
          <p class="fw-bold">Nom : <?= $client->getFirstname() ?> <?= $client->getLastname() ?></p>
          <p class="fw-bold">Coordonnées :</p>
          <div class="box mb-4">
            <p class="m-0">Email : <?= $client->getEmail() ?></p> 
            <p class="m-0">Phone : <?= $client->getPhone() ?></p> 
          </div>
          <p class="fw-bold">Adresse :</p>
          <div class="box mb-4">
            <p class="m-0">Adresse : <?= $client->getAddress() ?></p> 
            <p class="m-0">Code postal : <?= $client->getPostcode() ?></p> 
            <p class="m-0">Ville : <?= $client->getCity() ?></p> 
          </div>
          <div class="box mb-4">
            <p class="m-0">Nombre de commande : <?php echo $nbOrders[0] ?></p>
            <p class="m-0">Total dépensé : <?php echo number_format($totalSpent[0], 2, ',', ' ') ?> €</p>
            </div>
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
        <a href="clients.php" class="position-absolute px-2 py-1 m-2"><i class="fas fa-arrow-left"></i></a>
        <h1 class="h1 text-center m-3">Désolé le client numéro <?= $_GET['id'] ?> est introuvable</h1>
      </section>
    </main>

    <?php include_once('footer.php'); ?>

<?php
  }
?>

