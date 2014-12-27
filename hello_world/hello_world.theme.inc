<?php

/**
 * Generates the output for the hello/world page.
 *
 * @param $item
 *   How many items to show from the hello_world database.
 *
 * @return
 *   HTML-formatted output from the hello_world table
 *   in the database.
 */
function theme_hello_world_primary_page($items) {
  $content = '<p><b>Here are all the messages recorded in the hello_world custom table!!!!! </b></p>';
  if (isset($items['items'])) {
    $results = db_query('SELECT * from hello_world limit ' . $items['items']);
  }
  else {
    $results = db_query('SELECT * from hello_world');
  }
  foreach($results as $row) {
    $content .= 'Row: ' . $row->hid . ', Message: ' . $row->message . ', Timestamp: ' . $row->timestamp . '</br>';
  }
  $element = array(
    '#markup' => $content,
  );
  return $element;
}
