<?php
 
/**
 * @file
 * Contains \Drupal\hello_world\Form\FirstForm.
 */
 
namespace Drupal\hello_world\Form;
use Drupal\Core\Url;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
 
class FirstForm extends FormBase {
 
  /**
   *  {@inheritdoc}
   */
  public function getFormId() {
    return 'first_form';
  }
 
  /**
   * {@inheritdoc}
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   The request object.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    // Use the Form API to define form elements.
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
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    // Validate the form values.
    if (preg_match('#[\d]#', $form_state->getValue('author'))) {
      $form_state->setErrorByName('author', $this->t("The author name '%author' is invalid.  You need to submit a name, a name does not contain numbers.", array('%author' => $form_state->getValue('author'))));
      return FALSE;
    }
    else {
      return TRUE;
    }
  }
 
  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Do something useful.
    drupal_set_message('Your form was submitted successfully, you typed in the title ' . $form_state->getValue('title'));
    drupal_set_message('Your form was submitted successfully, you typed in the body ' . $form_state->getValue('body'));
    drupal_set_message('Your form was submitted successfully, you typed in the name ' . $form_state->getValue('author'));
    $uid = db_query('SELECT uid from users_field_data where name = :name', array('name' => $form_state->getValue('author')))->fetchField();
    drupal_set_message('the users uid is ' . $uid);
    $node = entity_create('node', array(
      'type' => 'article',
      'title' => $form_state->getValue('title'),
      'body' => array(
        'value' => $form_state->getValue('body'),
        'format' => 'basic_html',
      ),
      'uid' => $uid,
    ));
    $node->save();

    $node_url = \Drupal::l('Click to view url', Url::fromUri('base://node/' . $node->id()));
    drupal_set_message("Your new node has been created and can be viewed by clicking the following link $node_url");
  }
}
