<?php
  $country = $_GET["country"];
  $category = $_GET["category"];

  if ($country && $category) {
    echo "You selected $country and $category.";
  }

  ?>