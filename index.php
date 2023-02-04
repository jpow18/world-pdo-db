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
    <form action="./view/result.php" method="get">
      <input type="text" name="country" placeholder="Enter a country">
      <select name="category">
        <option value="culture">Culture</option>
        <option value="nature">Nature</option>
        <option value="history">History</option>
      </select>
      <input type="submit" value="Submit">
    </form>
  </main>
  <footer>
    <p>Contact us at contact@exploretheworld.com</p>
    <p>Copyright &copy; 2023 Explore the world</p>
  </footer>
</body>

</html>