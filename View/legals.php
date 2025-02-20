<?php
  // Inclusion de la config
  require_once '../Config/config.php';

  // Inclusion du controlleur principal
  require_once CONTROLLER_PATH . 'main_Controller.php';
?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <?php include VIEW_PATH . "main_head.html" ;?>
</head>
<!--_______________________________________100_caractères________________________________________-->
<body>

  <?php include VIEW_PATH . "header.html" ;?>

  <main>
  <?php include VIEW_PATH . "legals.html" ;?>
  </main>

</body>
</html>
<!--_______________________________________100_caractères________________________________________-->