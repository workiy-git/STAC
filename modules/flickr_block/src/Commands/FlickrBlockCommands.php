<?php

namespace Drupal\flickr_block\Commands;

use Drupal\block\Entity\Block;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\flickr_block\FlickrAPI;
use Drush\Commands\DrushCommands;

/**
 * Class FlickrBlockCommands
 *
 * @package Drupal\flickr_block\Commands
 */
class FlickrBlockCommands extends DrushCommands {

  /**
   * @var \Drupal\Core\Cache\CacheBackendInterface
   */
  protected $configFactory;

  /**
   * @var \Drupal\flickr_block\FlickrAPI
   */
  protected $flickrApi;

  /**
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   * @param \Drupal\flickr_block\FlickrAPI $flickrApi
   */
  public function __construct(
    ConfigFactoryInterface     $config_factory,
    FlickrAPI                  $flickrApi
  ) {
    $this->configFactory = $config_factory;
    $this->flickrApi = $flickrApi;
  }

  /**
   * Set Flickr configuration.
   *
   * @param string $flickr_api_key
   * @param string $flickr_user_id
   *
   * @command flickr_block:set-config
   * @aliases flickrb-config
   * @validate-module-enabled flickr_block
   */
  public function setFlickrConfig($flickr_api_key, $flickr_user_id) {
    $config = $this->configFactory->getEditable('flickr_block.config');

    // Validate API creds
    $params = $this->flickrApi->generateParams([
      'flickr_api_key' => $flickr_api_key,
      'flickr_user_id' => $flickr_user_id,
      'flickr_number_photos' => 1,
      'flickr_photoset_id' => NULL,
    ]);

    // Check response
    $response = $this->flickrApi->call($params);
    if (!$response) {
      $this->output()
        ->writeln('An error has occurred with the Flickr API. No response given.');
      return FALSE;
    }
    else {
      if (isset($response['stat']) && $response['stat'] == 'fail') {
        $this->output()
          ->writeln($response['message'] . ' [' . $response['code'] . ']');
        return FALSE;
      }
    }

    // Save config
    $config
      ->set('flickr_api_key', $flickr_api_key)
      ->set('flickr_user_id', $flickr_user_id)
      ->save();

    $this->output()->writeln('Flickr Block configuration saved.');
  }

  /**
   * Generate a Flickr Block and assign to region & theme.
   *
   * @param string $label
   * @param string $region
   * @param string $theme
   *
   * @throws \Drupal\Core\Entity\EntityStorageException
   *
   * @command flickr_block:generate-block
   * @aliases flickrb-generate
   * @validate-module-enabled flickr_block
   */
  public function generateFlickrBlock($label, $region = 'content', $theme = 'bartik') {
    $config = $this->configFactory->get('flickr_block.config');
    $block = Block::create(
      [
        'id' => 'flickr_block_' . time(),
        'plugin' => 'flickr_block',
        'settings' => [
          'label' => $label,
          'flickr_api_key' => $config->get('flickr_api_key'),
          'flickr_user_id' => $config->get('flickr_user_id'),
        ],
        'theme' => $theme,
        'region' => $region,
      ]
    );

    if ($block->save()) {
      $this->output()
        ->writeln('Flickr Block ' . $label . ' is now generated and assigned to ' . $region . ' region.');
    }
    else {
      $this->output()->writeln('Failed to generate Flickr Block ' . $label);
    }
  }

}
