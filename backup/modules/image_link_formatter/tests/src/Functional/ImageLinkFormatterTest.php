<?php

namespace Drupal\Tests\image_link_formatter\Functional;

/**
 * @file
 * Contains Functional test cases for the 'image_link_formatter'.
 */

use Drupal\Tests\image\Functional\ImageFieldTestBase;
use Drupal\Tests\image_link_formatter\Traits\Functional\ImageLinkFormatterTestTrait;
use Drupal\Tests\TestFileCreationTrait;

/**
 * Tests the output of a node with an image wrapped within a link from a field.
 *
 * Extends the core test case 'ImageFieldTestBase' for the creation of the base
 * configuration objects (content types), user login, needed for the tests
 * ('setUp'). On top, the logic related with the 'link' field is added by
 * the trait 'ImageLinkFormatterTestTrait' which provides common methods, such
 * as the effective tests ('doTestImageLinkFormatterWrappedImage', which also
 * creates its 'image' field), or their assertions ('assertImageLinkFormatter'),
 * based on the HTML results to be expected, defined by this object (for the
 * 'image_link_formatter).
 *
 * @group image_link_formatter
 * @see \Drupal\Tests\image\Functional\ImageFieldTestBase
 * @see \Drupal\Tests\image_link_formatter\Traits\Functional\ImageLinkFormatterTestTrait
 * @see \Drupal\Tests\responsive_image_link_formatter\Functional\ResponsiveImageLinkFormatterTest
 */
class ImageLinkFormatterTest extends ImageFieldTestBase {

  use TestFileCreationTrait {
    getTestFiles as drupalGetTestFiles;
  }

  use ImageLinkFormatterTestTrait;

  /**
   * {@inheritdoc}
   */
  protected static $modules = ['field_ui', 'image_link_formatter'];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests the display of an image wrapped within a custom link field.
   *
   * Defines the results to be expected for the supported Drupal versions and
   * calls the standard test method from the trait which displays a node with
   * the image link formatter with and without a link and checks whether the
   * expected HTML is found on the page.
   *
   * @see \Drupal\Tests\image_link_formatter\Traits\Functional\ImageLinkFormatterTestTrait::doTestImageLinkFormatterWrappedImage()
   * @see \Drupal\Tests\image_link_formatter\Traits\Functional\ImageLinkFormatterTestTrait::assertImageLinkFormatter()
   * @see \Drupal\Tests\responsive_image_link_formatter\Functional\ResponsiveImageLinkFormatterTest::testResponsiveImageLinkFormatterWrappedImage()
   */
  public function testImageLinkFormatterWrappedImage() {
    // For each supported Drupal core version, provide the expected HTML result
    // with which to compare the output generated by the formatter, based on the
    // evolutions of the core 'image' module and its formatters.
    $expected_result = [
      // Moving forward, attribute 'loading' added by default, see #3173719.
      '9.4' => [
        'link' => '<a href="http://example.com"><img src="@file_url" width="40" height="20" alt="" loading="lazy" /></a>',
        'no_link' => '<img src="@file_url" width="40" height="20" alt="" loading="lazy" />',
      ],
      // As of 9.4.0, lazy loading is part of core image formatter's
      // configuration, changing the position of the attribute, see #3173180.
      'all' => [
        'link' => '<a href="http://example.com"><img loading="lazy" src="@file_url" width="40" height="20" alt="" /></a>',
        'no_link' => '<img loading="lazy" src="@file_url" width="40" height="20" alt="" />',
      ],
    ];
    // Call the test from the trait for the 'image_link_formatter'.
    $this->doTestImageLinkFormatterWrappedImage('image_link_formatter', $expected_result);
  }

}
