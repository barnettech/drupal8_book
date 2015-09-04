<?php
 
/**
 * @file
 * Contains \Drupal\hello_world\Plugin\Block\HelloWorldBlock3
 */

namespace Drupal\hello_world\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\block\Annotation\Block;
use Drupal\Core\Annotation\Translation;
use Drupal\hello_world\Form\FirstForm;

/**
 * Provides a simple block.
 *
 * @Block(
 *   id = "hello_world_block",
 *   admin_label = @Translation("Hello World Block3"),
 *   module = "hello_world"
 * )
 */
class HelloWorldBlock3 extends BlockBase {
 
  /**
   * Implements \Drupal\block\BlockBase::blockBuild().
   */
  public function build() {
    $this->configuration['label'] = t('Autocomplete Form Example');
    $theForm = \Drupal::formBuilder()->getForm('Drupal\hello_world\Form\FirstForm');
    return array(
      '#children' => drupal_render($theForm),
      //'#children' => 'hello',
    );
  }
}
