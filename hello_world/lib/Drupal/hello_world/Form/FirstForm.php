<?php
 
/**
 * @file
 * Contains \Drupal\hello_world\Form\FirstForm.
 */
 
namespace Drupal\hello_world\Form;

use Drupal\Core\Form\FormInterface;
use Drupal\Core\Form\FormBuilder;

use Drupal\Core\Entity\EntityInterface;
use Drupal\entity\Entity\EntityDisplay;
use Drupal\node\NodeInterface;
use Drupal\rest\Tests\RESTTestBase;

 
/**
 * Provides a simple example form.
 */
class FirstForm implements FormInterface {
 
  /**
   * Implements \Drupal\Core\Form\FormInterface::getFormID().
   */
  public function getFormID() {
    return 'first_form';
  }
 
  /**
   * Implements \Drupal\Core\Form\FormInterface::buildForm().
   */
  public function buildForm(array $form, array &$form_state) {
    // Use the Form API to define form elements.
    drupal_set_title('Programmatically create a node with our own form');
    $form['title'] = array(
      '#title' => t('Title'),
      '#type' => 'textfield',
      '#maxlength' => 120,
    );
    $form['body'] = array(
      '#title' => t('Body'),
      '#type' => 'textarea',
    );
    $form['author'] = array(
    '#type' => 'textfield',
    '#title' => t('Author'),
    '#description' => t('Choose who the node should appear written by'),
    '#autocomplete_route_name' => 'user.autocomplete',
    '#size' => 40,
    '#maxlength' => 60,
    );
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Submit'),
    );
    return $form;
  }
 
  /**
   * Implements \Drupal\Core\Form\FormInterface::validateForm().
   */
  public function validateForm(array &$form, array &$form_state) {
    // Validate the form values.
    drupal_set_message('<pre>' . print_r($form_state['values'], TRUE) . '</pre>');
    if (preg_match('#[\d]#', $form_state['values']['author'])) {
      form_set_error('author', 'You need to submit a name, a name does not contain numbers');
      return FALSE;
    }
    else {
      return TRUE;
    }
  }
 
  /**
   * Implements \Drupal\Core\Form\FormInterface::submitForm().
   */
  public function submitForm(array &$form, array &$form_state) {
    // Do something useful.
    drupal_set_message('Your form was submitted successfully, you typed in the title ' . $form_state['values']['title']);
    drupal_set_message('Your form was submitted successfully, you typed in the body ' . $form_state['values']['body']);
    drupal_set_message('Your form was submitted successfully, you typed in the name ' . $form_state['values']['author']);
    $uid = db_query('SELECT uid from users where name = :name', array('name' => $form_state['values']['author']))->fetchField();
    drupal_set_message('the users uid is ' . $uid);
    $node = entity_create('node', array(
      'type' => 'article',
      'title' => $form_state['values']['title'],
      'body' => array(
        'value' => $form_state['values']['body'],
        'format' => 'basic_html',
      ),
      'uid' => $uid,
    ));
    $node->save();
    drupal_set_message('Your new node has been created and can be viewed by clicking the following url ' . l('Click here to view your node', 'node/' . $node->id()));
  }
}
