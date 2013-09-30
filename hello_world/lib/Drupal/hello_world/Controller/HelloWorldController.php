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
    drupal_add_css(drupal_get_path('module', 'hello_world') . '/css/hello_world.css');
    drupal_add_library('system', 'ui.draggable');
    drupal_add_js(drupal_get_path('module', 'hello_world') . '/js/hello_world.js', array(
        'scope' => 'footer'));
    
    $content = '
    <div class="myDiv">
      <div class="bg"></div>
        <div class="block-title">A basic Drupal page created programmatically, Hello World</div>
        
        Some random text to show off this transparent background ....
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nisi purus, gravida sit amet molestie et, facilisis vel nulla.
        Mauris f        aucibus augue eu quam feugiat at lacinia velit malesuada. Sed bibendum faucibus mattis. Maecenas quis ligula nibh,
        sit amet iaculis metus. Aenean lobortis massa ut nulla tristique eu vestibulum leo eleifend. Maecenas arcu lectus, facilisis in
        mattis sed, pretium et metus. Phasellus elementum, elit fringilla mollis sollicitudin, ipsum odio vestibulum quam, vitae
        tristique odio tortor eu augue. Pellentesque volutpat placerat neque, sit amet vehicula lectus commodo vitae. Aliquam nec
        mauris pharetra velit tincidunt consectetur. Aliquam vitae lectus nisi. Curabitur mi sapien, ultrices quis bibendum eu,
        ultricies eget libero. Donec mollis malesuada est a varius. Vestibulum dignissim venenatis nisl, nec semper massa tincidunt
        egestas. Maecenas a erat sem.

        Vestibulum semper eleifend eros at semper. Phasellus neque augue, eleifend ut congue pharetra, sagittis in neque. Duis sit
        amet es et risus sodales vulputate sed ut sapien. Vestibulum consequat est lobortis ligula aliquam ac sodales ante sodales. Fusce dict        um tortor ut est vehicula sit amet imperdiet dolor consequat. Maecenas nec risus sed quam accumsan vestibulum id ac urna. 
        Suspendisse suscipit dictum dolor condimentum rutrum. Duis augue sem, mattis vel tincidunt ut, interdum in mauris. In
        quis feugiat ipsum. Donec euismod massa et tortor rhoncus lacinia. Nunc felis ligula, tincidunt eu viverra at, auctor quis magna.  

        Nullam sapien augue, venenatis sit amet ornare et, blandit nec velit. Morbi eu ligula a lacus commodo lacinia vel et neque.
        Sed at nisi at sapien adipiscing accumsan in fringilla ligula. Nunc fringilla, est vel ullamcorper tincidunt, tellus ligula
        lobortis turpis, vel gravida purus lacus a dui. Quisque et massa vestibulum nisi dictum lacinia vehicula ac nisi. Nulla facilisi.
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus sed neque ante, venenatis
        sagittis dui. Cras lorem ipsum, scelerisque tempor aliquet quis, imperdiet in augue. Curabitur tellus est, ultrices eu sagittis
        et, pellentesque id enim. Nunc lobortis mattis viverra. Sed non purus ipsum. Aenean ac justo sed urna eleifend consequat.
    </div>';
    return $content;  
  }
}
