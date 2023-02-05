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
</main>