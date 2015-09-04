<?php
 
/**
 * @file
 * Contains \Drupal\hello_world\Plugin\Block\HelloWorldBlock1
 */

namespace Drupal\hello_world\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\block\Annotation\Block;
use Drupal\Core\Annotation\Translation;

/**
 * Provides a simple block.
 *
 * @Block(
 *   id = "hello_world_block1",
 *   admin_label = @Translation("Hello World Block1"),
 *   module = "hello_world"
 * )
 */
class HelloWorldBlock extends BlockBase {
 
  /**
   * Implements \Drupal\block\BlockBase::blockBuild().
   */
  public function build() {
    $this->configuration['label'] = t('Hello World Block1');
    return array(
      '#children' => t('Hello from a custom block'),
    );
  }
}
