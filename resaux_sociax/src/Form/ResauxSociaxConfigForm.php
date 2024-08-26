<?php

namespace Drupal\resaux_sociax\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class ResauxSociaxConfigForm extends ConfigFormBase {
  
  protected function getEditableConfigNames() {
    return ['resaux_sociax.settings'];
  }

  public function getFormId() {
    return 'resaux_sociax_config_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('resaux_sociax.settings');

    $form['facebook'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Facebook URL'),
      '#default_value' => $config->get('social_links.facebook'),
    ];
    $form['facebook_icon'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Facebook Icon URL'),
      '#default_value' => $config->get('social_links.facebook_icon'),
    ];

    $form['twitter'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Twitter URL'),
      '#default_value' => $config->get('social_links.twitter'),
    ];
    $form['twitter_icon'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Twitter Icon URL'),
      '#default_value' => $config->get('social_links.twitter_icon'),
    ];

    $form['linkedin'] = [
      '#type' => 'textfield',
      '#title' => $this->t('LinkedIn URL'),
      '#default_value' => $config->get('social_links.linkedin'),
    ];
    $form['linkedin_icon'] = [
      '#type' => 'textfield',
      '#title' => $this->t('LinkedIn Icon URL'),
      '#default_value' => $config->get('social_links.linkedin_icon'),
    ];

    $form['instagram'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Instagram URL'),
      '#default_value' => $config->get('social_links.instagram'),
    ];
    $form['instagram_icon'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Instagram Icon URL'),
      '#default_value' => $config->get('social_links.instagram_icon'),
    ];

    return parent::buildForm($form, $form_state);
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->configFactory->getEditable('resaux_sociax.settings')
      ->set('social_links.facebook', $form_state->getValue('facebook'))
      ->set('social_links.facebook_icon', $form_state->getValue('facebook_icon'))
      ->set('social_links.twitter', $form_state->getValue('twitter'))
      ->set('social_links.twitter_icon', $form_state->getValue('twitter_icon'))
      ->set('social_links.linkedin', $form_state->getValue('linkedin'))
      ->set('social_links.linkedin_icon', $form_state->getValue('linkedin_icon'))
      ->set('social_links.instagram', $form_state->getValue('instagram'))
      ->set('social_links.instagram_icon', $form_state->getValue('instagram_icon'))
      ->save();

    parent::submitForm($form, $form_state);
  }
}
