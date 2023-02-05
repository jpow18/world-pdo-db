<?php
  $country = filter_input(INPUT_GET, "country", FILTER_SANITIZE_SPECIAL_CHARS);
  $category = filter_input(INPUT_GET, "category", FILTER_SANITIZE_SPECIAL_CHARS);
  include_once("config/database.php");

  if ($country && $category) {
    $query = 'SELECT '.$category.' FROM country WHERE Name = ?';

    $stmt = $pdo->prepare($query);
    $stmt->execute([$country]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
  }
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Explore the world website">
  <title>Explore the world</title>
  <link rel="stylesheet" type="text/css" href="./css/main.css">
</head>

<body>
  <?php include("./view/header.php"); ?>

  <?php include("./view/exploreMain.php"); ?>

  <?php include("./view/footer.php"); ?>
</body>

</html>