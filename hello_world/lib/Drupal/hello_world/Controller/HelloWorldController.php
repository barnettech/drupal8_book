<?php
/**
 * @file
 * Contains \Drupal\hello_world\HelloWorldController.
 */
 
namespace Drupal\hello_world\Controller;
 
use Symfony\Component\DependencyInjection\ContainerAware;
 
class HelloWorldController extends ContainerAware {
 
  /**
   * Page Callback Method to Print out Hello World Text to the Screen.
   */
  public function myCallbackMethod() {
    $content = '<p><b>Saying Hello World in Drupal 8 is cool!</b></p>';
    return $content;  
  }
}
