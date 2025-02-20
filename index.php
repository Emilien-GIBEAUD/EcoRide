<?php
    // Inclusion de la config
    require_once './Config/config.php';

    // Inclusion du controlleur principal
    require_once CONTROLLER_PATH . 'main_Controller.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <?php include "View/main_head.php" ;?>
</head>
<!--_______________________________________100_caractères________________________________________-->
<body>
  <?php include "View/header.php" ;?>

  <main>
    <div id="seach_bar">
      <img src="./View/Assets/icon/search.svg" alt="icône de recherche">
      <div class="input">
        <div class="place">
          <label for="dep_place"></label>
          <input  type="text" id="dep_place" name="départ" placeholder="Lieu de départ" 
                  required="required">
        </div>

        <div class="place">
          <label for="arr_place"></label>
          <input  type="text" id="arr_place" name="arrivée" placeholder="Lieu d'arrivée" 
                  required="required">
        </div>

        <div class="date">
          <label for="date"></label>
          <input type="text" id="date" name="date" placeholder="date" required="required">
        </div>
      </div>
    </div>
    
    <?php include "View/home.php" ;?>
  </main>

  <?php include "View/footer.php" ;?>
</body>
</html>
<!--_______________________________________100_caractères________________________________________-->