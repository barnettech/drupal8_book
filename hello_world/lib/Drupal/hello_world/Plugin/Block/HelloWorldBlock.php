<?php
 
/**
 * @file
 * Contains \Drupal\hello_world\Plugin\Block\HelloWorldBlock
 */
 
namespace Drupal\hello_world\Plugin\Block;
 
use Drupal\block\BlockBase;
use Drupal\block\Annotation\Block;
use Drupal\Core\Annotation\Translation;

/**
 * Provides a simple block.
 *
 * @Block(
 *   id = "hello_world_block",
 *   admin_label = @Translation("Hello World Block"),
 *   module = "hello_world"
 * )
 */
class HelloWorldBlock extends BlockBase {
 
  /**
   * Implements \Drupal\block\BlockBase::blockBuild().
   */
  public function build() {
    $this->configuration['label'] = t('Hello World Block');
    return array(
      '#children' => t('Hello from a custom block'),
    );
  }
}
