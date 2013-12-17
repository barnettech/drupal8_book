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
    $content = '<p><b>Here are all the messages recorded in the hello_world custom table! </b></p>';
    $results = db_query('SELECT * from hello_world');
    foreach($results as $row) {
      $content .= 'Row: ' . $row->hid . ', Message: ' . $row->message . ', Timestamp: ' . $row->timestamp . '</br>';
    }
    return $content;  
  }
}
