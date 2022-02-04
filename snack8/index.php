<!-- SNACK
Creiamo un array contenete dei prodotti con
Nome
Prezzo
Immagine
Tipologia
Stampiamo tutti i nostri prodotti in pagina
Poi con una select filtriamo i nostri prodotti per prezzo o per tipologia -->




<!DOCTYPE html>
<html lang="en">
<?php
include __DIR__ . '/server/db.php';
include __DIR__ . '/partials/head.php';
?>

<body>
  <div class="container">
    <?php include __DIR__ . '/partials/header.php' ?>
    <form action="search.php">
      <select name="sistema" id="sistema">
      <option value="all">all</option>
        <option value="Ps5">Ps5</option>
        <option value="Ps4">Ps4</option>
        <option value="Switch">Switch</option>
        <option value="Xbox 360">Xbox 360</option>
      </select>
      <button>Cerca</button>
    </form>
    <main>
      <div class="cards-container">
        <?php
        foreach ($cards as $card) {
          include __DIR__ . '/partials/card.php';
        }
        ?>
      </div>
    </main>
    <?php include __DIR__ . '/partials/footer.php' ?>
  </div>
</body>

</html>

