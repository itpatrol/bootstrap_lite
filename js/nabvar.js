/**
 * @file
 * A bootstrap navbar top position adjastment
 */

(function ($, Drupal, displace) {

  'use strict';

  function BootstrapNavbarOffsetChangeHandler(e, offsets) {
    var css = {};
    if (typeof offsets.top === 'number') {
      css.top = offsets.top + 'px';
    }
    alert(css.top);
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