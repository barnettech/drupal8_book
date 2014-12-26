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
ORDERED LIST: 
<ol>
  <li>Item 1</li>
  <li>Item 2</li>
</ol>
UNORDERED LIST:
<ul>
  <li>Item 1</li>
  <li>Item 2</li>
</ul>
   ';
    $element = array(
      '#markup' => $content,
    );
    return $element;
  }
}
