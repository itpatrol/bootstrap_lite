/**
 * @file
 * A bootstrap navbar top position adjastment
 */

(function ($, Drupal, displace) {

  'use strict';

  function BootstrapNavbarOffsetChangeHandler(e, offsets) {
    var toolbarMargin = $('#toolbar-bar').height() + $('#toolbar-item-administration-tray').height();
    alert(toolbarMargin);
    $('#navbar').attr('data-offset-top', toolbarMargin);
  }
  
  // Bind to custom Drupal events.
  $(document).on({
    /**
     * Recalculate BootstrapNavbar.topOffset when viewport is resized.
     *
     * @ignore
     */
    'drupalViewportOffsetChange.BootstrapNavbar': BootstrapNavbarOffsetChangeHandler
  });

}(jQuery, Drupal, window.parent.Drupal.displace));