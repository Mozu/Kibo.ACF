<?php

namespace Drupal\acf_kibo\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class KiboSettingsForm
 *
 * Configure Kibo settings for the site.
 */
class KiboSettingsForm extends ConfigFormBase {

  /**
   * ACF Kibo config settings path.
   * @const CONFIG_KEY
   */
  const CONFIG_KEY = 'acf_kibo.settings';

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'kibo_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config(self::CONFIG_KEY);
    $form['tenantId'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Tenant Id'),
      '#default_value' => $config->get('tenantId'),
      '#required' => TRUE,
    ];
    $form['siteId'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Store Id'),
      '#default_value' => $config->get('siteId'),
      '#required' => TRUE,
    ];
    $form['catalogId'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Catalog Id'),
      '#default_value' => $config->get('catalogId'),
      '#required' => TRUE,
    ];
    $form['sharedSecret'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Shared Secret'),
      '#default_value' => $config->get('sharedSecret'),
      '#required' => TRUE,
    ];
    $form['applicationId'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Application ID'),
      '#default_value' => $config->get('applicationId'),
      '#required' => TRUE,
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->configFactory->getEditable(self::CONFIG_KEY)
      ->set('tenantId', $form_state->getValue('tenantId'))
      ->set('siteId', $form_state->getValue('siteId'))
      ->set('catalogId', $form_state->getValue('catalogId'))
      ->set('sharedSecret', $form_state->getValue('sharedSecret'))
      ->set('applicationId', $form_state->getValue('applicationId'))
      ->save();

    parent::submitForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [self::CONFIG_KEY];
  }
}
