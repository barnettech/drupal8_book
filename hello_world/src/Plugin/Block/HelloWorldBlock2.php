<?php
 
/**
 * @file
 * Contains \Drupal\hello_world\Plugin\Block\HelloWorldBlock2
 */

namespace Drupal\hello_world\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\block\Annotation\Block;
use Drupal\Core\Annotation\Translation;

/**
 * Provides a simple block.
 *
 * @Block(
 *   id = "hello_world_block2",
 *   admin_label = @Translation("Hello World Block2"),
 *   module = "hello_world"
 * )
 */
class HelloWorldBlock2 extends BlockBase {
 
  /**
   * Implements \Drupal\block\BlockBase::blockBuild().
   */
  public function build() {
    $this->configuration['label'] = t('Hello World Block2');
    // You wrap your query in the db_query function and put the results in the 
    // $result variable
    $result = db_query("select n.title, u.uid, n.created from node_field_data n,
                         users u where u.uid = n.uid order by n.created desc limit 5");
    $content = "";
    // The result variable is an object with as many rows in it as there were rows 
    // of data returned from your query, you’re going to loop through these rows
    // with the foreach statement, put the individual row data into the $row 
    // variable, add the title from that $row into the $content variable, continue 
    // the loop, add the next title, and so on until all the titles are listed in the 
    // $content variable.
    // Then you assign $block[‘content’] to be equal to $content and tada! Your 
    // titles from your query end up in the first block on your screen.
    foreach($result as $row){
      // the “.=” rather than just “=” means take whatever was already in 
      // the content variable and then concatenate it with what comes after “.=”
      $content .= $row->title . '</br>';
    }
    return array(
      '#children' => $content,
    );
  }
}
