<main>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
    <input type="text" name="country" placeholder="Enter a country">

    <input type="submit" value="Submit">
    <input type="button" value="Clear" onclick="window.location.href='index.php'">
  </form>
</main>