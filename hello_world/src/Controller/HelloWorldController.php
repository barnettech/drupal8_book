<?php
/**
 * @file
 * Contains \Drupal\hello_world\HelloWorldController.
 */
 
namespace Drupal\hello_world\Controller;

/**
 * Provides route responses for the hello world page example.
 */
class HelloWorldController {
  /**
   * Returns a simple hello world page.
   *
   * @return array
   *   A very simple renderable array is returned.
   */
  public function myCallbackMethod() {
    $content = '
<table border=”1”>
  <tr>
    <th>Header 1</th>
    <th>Header 2</th>
  </tr>
  <tr>
    <td>row 1, cell 1</td>
    <td>row 1, cell 2</td>
  </tr>
  <tr>
    <td>row 2, cell 1</td>
    <td>row 2, cell 2</td>
  </tr>
</table>
      ';
    $element = array(
      '#markup' => $content,
    );
    return $element;
  }
}
