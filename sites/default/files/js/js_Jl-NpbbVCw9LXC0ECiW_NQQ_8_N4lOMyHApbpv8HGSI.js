/**
 * @file
 * Text behaviors.
 */

(function ($, Drupal, once) {

  'use strict';

  /**
   * Auto-hide summary textarea if empty and show hide and unhide links.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches auto-hide behavior on `text-summary` events.
   */
  Drupal.behaviors.textSummary = {
    attach: function (context, settings) {
      $(once('text-summary', '.js-text-summary', context)).each(function () {
        var $widget = $(this).closest('.js-text-format-wrapper');

        var $summary = $widget.find('.js-text-summary-wrapper');
        var $summaryLabel = $summary.find('label').eq(0);
        var $full = $widget.find('.js-text-full').closest('.js-form-item');
        var $fullLabel = $full.find('label').eq(0);

        // Create a placeholder label when the field cardinality is greater
        // than 1.
        if ($fullLabel.length === 0) {
          $fullLabel = $('<label></label>').prependTo($full);
        }

        // Set up the edit/hide summary link.
        var $link = $('<span class="field-edit-link"><button type="button" class="link link-edit-summary btn btn-default btn-xs pull-right" data-toggle="button" aria-pressed="false" autocomplete="off">' + Drupal.t('Hide summary') + '</button></span>');
        var $button = $link.find('button');
        var toggleClick = true;
        $link.on('click', function (e) {
          if (toggleClick) {
            $summary.hide();
            $button.html(Drupal.t('Edit summary'));
            $fullLabel.before($link);
          }
          else {
            $summary.show();
            $button.html(Drupal.t('Hide summary'));
            $summaryLabel.before($link);
          }
          e.preventDefault();
          toggleClick = !toggleClick;
        });
        $summaryLabel.before($link);

        // If no summary is set, hide the summary field.
        if ($widget.find('.js-text-summary').val() === '') {
          $link.trigger('click');
        }
        else {
          $link.addClass('active');
        }
      });
    }
  };

})(jQuery, Drupal, once);
;
