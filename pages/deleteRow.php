<link rel="stylesheet" href="../css/main.css">

<?php 

  $country = filter_input(INPUT_GET, "country", FILTER_SANITIZE_SPECIAL_CHARS);

  include_once "../config/database.php"; 

  if ($country) {
    try {
      $pdo->beginTransaction();
      $query = 'DELETE FROM country WHERE Name = :country';

      $stmt = $pdo->prepare($query);
      $stmt->execute(['country' => $country]);

      $pdo->commit();
      $stmt->closeCursor();

    } catch (PDOException $e) {
      $pdo->rollBack();
      $error_message = 'Database Error: ';
      $error_message .= $e->getMessage();
      echo $error_message;
    }
  }

?>

<?php include "../view/header.php"  ?>
<?php include "../view/deleteRowMain.php" ?>
<?php include "../view/footer.php"  ?>