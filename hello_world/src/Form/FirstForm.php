<?php
 
/**
 * @file
 * Contains \Drupal\hello_world\Form\FirstForm.
 */
 
namespace Drupal\hello_world\Form;

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
  }
 
  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Do something useful.
    drupal_set_message('thanks for submitting the form!');
  }
 
}
