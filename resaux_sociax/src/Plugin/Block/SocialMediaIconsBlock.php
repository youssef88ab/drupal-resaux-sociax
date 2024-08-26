<?php

namespace Drupal\resaux_sociax\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'Social Media Icons' Block.
 *
 * @Block(
 *   id = "social_media_icons_block",
 *   admin_label = @Translation("Social Media Icons"),
 * )
 */
class SocialMediaIconsBlock extends BlockBase implements BlockPluginInterface {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $config = \Drupal::config('resaux_sociax.settings');
    return [
      '#theme' => 'resaux_sociax',
      '#facebook_url' =>   $config->get('social_links.facebook'),
      '#facebook_icon' =>  $config->get('social_links.facebook_icon'),
      '#twitter_url' =>    $config->get('social_links.twitter'),
      '#twitter_icon' =>   $config->get('social_links.twitter_icon'),
      '#linkedin_url' =>   $config->get('social_links.linkedin'),
      '#linkedin_icon' =>  $config->get('social_links.linkedin_icon'),
      '#instagram_url' =>  $config->get('social_links.instagram'),
      '#instagram_icon' => $config->get('social_links.instagram_icon'),
    ];
  }
}
