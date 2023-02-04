<?php
  $country = filter_input(INPUT_GET, "country", FILTER_SANITIZE_SPECIAL_CHARS);
  $category = filter_input(INPUT_GET, "category", FILTER_SANITIZE_SPECIAL_CHARS);
  include_once("./config/database.php");

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
  <header>
    <h1>Explore the world</h1>
  </header>
  <main>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
      <input type="text" name="country" placeholder="Enter a country">
      <select name="category">
        <option value="Continent">Continent</option>
        <option value="Region">Region</option>
        <option value="SurfaceArea">Surface Area</option>
        <option value="IndepYear">Year of Independence</option>
        <option value="Population">Population</option>
        <option value="LocalName">Local Name</option>
        <option value="HeadOfState">Head Of State</option>
        <option value="Capital">Capital</option>
      </select>
      <input type="submit" value="Submit">
      <input type="button" value="Clear" onclick="window.location.href='index.php'">
    </form>
    <div class="result">
      
      <?php if(isset($country) && isset($category)) {
          echo "<h3>{$country}</h3>";
          echo "<p>{$category}: {$results[0][$category]}</p>";
        }
        
      ?>
    </div>
  </main>
  <footer>
    <p>Contact us at contact@exploretheworld.com</p>
    <p>Copyright &copy; 2023 Explore the world</p>
  </footer>
</body>

</html>