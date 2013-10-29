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
    return $content;  
  }
}
