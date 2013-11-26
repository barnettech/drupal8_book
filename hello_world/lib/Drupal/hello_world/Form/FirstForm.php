<?php
 
/**
 * @file
 * Contains \Drupal\hello_world\Form\FirstForm.
 */
 
namespace Drupal\hello_world\Form;
 
use Drupal\Core\Form\FormInterface;
 
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
    drupal_set_title('First Form');
    $form['user_search'] = array(
    '#type' => 'textfield',
    '#title' => '',
    '#autocomplete_route_name' => 'user.autocomplete',
    '#size' => 40,
    '#maxlength' => 60,
    );
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Search'),
    );
    return $form;
  }
 
  /**
   * Implements \Drupal\Core\Form\FormInterface::validateForm().
   */
  public function validateForm(array &$form, array &$form_state) {
    // Validate the form values.
  }
 
  /**
   * Implements \Drupal\Core\Form\FormInterface::submitForm().
   */
  public function submitForm(array &$form, array &$form_state) {
    // Do something useful.
  }
 
}
