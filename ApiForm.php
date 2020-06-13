<?php
namespace Drupal\customform\Formapi;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
class ApiForm extends FormBase {
 
  public function getFormId() {
    return 'customform';
  }
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['username'] = array(
      '#title' => 'username',
      '#description' => 'enter a username',
      '#type' => 'textfield',
       '#required' => TRUE,
    );
  
  $form['mail'] = array(
    '#title' => 'Email',
    '#description' => 'enter a valid email address',
    '#type' => 'textfield',
    '#required' => TRUE,
  );
$form['pass'] = array(
  '#title' => 'Password',
  '#description' => 'enter a  password',
  '#type' => 'textfield',
  '#required' => TRUE,
);
$form['Empolyee id'] = array(
  '#title' => 'Emp id',
  '#description' => 'enter a  empolyee id',
  '#type' => 'textfield',
  '#required' => FALSE,
);
    $form['submit'] = array
    (
      '#type' => 'submit',
      '#value' => $this->t ('Submit'),
    );
    return $form;
  }
  public function submitForm(array &$form, FormStateInterface $form_state) {
    foreach ($form_state->getValues() as $key => $value) {
      drupal_set_message($key . ': ' . $value);
}
  }
}
