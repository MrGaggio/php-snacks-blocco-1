<?php
include __DIR__ . '/server/db.php';
$cardsFiltered = $cards;

if (isset($_GET['sistema']) !== false) {
  $sistema = $_GET['sistema'];
  if ($sistema === 'all') {
    $cardsFiltered = $cards;
  } else {
    $cardsFiltered = [];
    foreach ($cards as $card) {
      if ($card['sistema'] === $sistema) {
        $cardsFiltered[] = $card;
      }
    }
  }
} ?>

<!DOCTYPE html>
<html lang="en">
<?php
include __DIR__ . '/partials/head.php';
?>

<body>
  <div class="container">
    <?php include __DIR__ . '/partials/header.php' ?>
    <form action="search.php" method="GET">
      <input type="text" name="titolo">
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
        foreach ($cardsFiltered as $card) {
          include __DIR__ . '/partials/card.php';
        }
        ?>
      </div>
    </main>
    <?php include __DIR__ . '/partials/footer.php' ?>
  </div>
</body>