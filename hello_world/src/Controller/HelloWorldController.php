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
    $element = array(
      '#markup' => '<p><b>Saying Hello World in Drupal 8 is cool!</b></p>',
    );
    return $element;
  }
}
