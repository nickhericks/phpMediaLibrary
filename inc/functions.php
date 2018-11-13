<?php

// INPUT: item id
// INPUT: item
// RETURN: string of html including item image and title
function get_item_html($id, $item) {
  $output = "<li><a href='#'><img src='"
      . $item["img"] . "' alt='"
      . $item["title"] . "' />"
      . "<p><a href=''>View Details</a></p>"
      . "</a>
      </li>";
  return $output;
}


// Input: array of items
// Input: category string
// Returns: array of item ids with that category
function array_category($catalog, $category) {
  $output = [];

  foreach($catalog as $id => $item) {
    if($category == null OR strtolower($category) == strtolower($item["category"])) {
      $sort = $item["title"];
      $sort = ltrim($sort, "The ");
      $sort = ltrim($sort, "A ");
      $sort = ltrim($sort, "An ");
      $output[$id] = $sort;
    }
  }

  asort($output);
  return array_keys($output);
}





 ?>
