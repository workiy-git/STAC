<?php

namespace Drupal\bootstrap_ce\Plugin\Field\FieldFormatter;

use Drupal\image\Plugin\Field\FieldFormatter\ImageFormatter;

/**
 * Plugin implementation of 'Bootstrap Carousel entities and medias' formatter.
 *
 * @FieldFormatter(
 *   id = "bootstrap_ce_image",
 *   label = @Translation("Boostrap Carousel"),
 *   field_types = {
 *     "image",
 *   }
 * )
 */
class BootstrapCEImageFormatter extends ImageFormatter {

  use BootstrapCEFormatterTrait;

}
