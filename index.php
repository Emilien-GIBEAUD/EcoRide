<!DOCTYPE html>
<html lang="fr">
<head>
  <?php include "Vue/main_head.html" ;?>
</head>
<!--_______________________________________100_caractères________________________________________-->
<body>
  <?php include "Vue/header.html" ;?>

  <main>
    <div id="seach_bar">
      <img src="./Vue/Assets/icon/search.svg" alt="icône de recherche">
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
    
    <?php include "Vue/home.html" ;?>
  </main>

  <?php include "Vue/footer.html" ;?>
</body>
</html>
<!--_______________________________________100_caractères________________________________________-->