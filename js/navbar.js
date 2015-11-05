/**
 * @file
 * A bootstrap navbar top position adjastment
 */

(function ($, Drupal, displace) {

  'use strict';

  function BootstrapNavbarOffsetChangeHandler(e, offsets) {
    var toolbarMargin = 0;
    
    if($('body').hasClass('toolbar-fixed')){
      toolbarMargin = $('#toolbar-bar').height();
    }
    if($('#toolbar-item-administration-tray').hasClass('is-active') && $('#toolbar-item-administration-tray').hasClass('toolbar-tray-horizontal')){
      toolbarMargin = toolbarMargin + $('#toolbar-item-administration-tray').height();
    }
    alert(toolbarMargin);
    var NavbarMarginBottom = 20;
    $('#navbar').attr('data-offset-top', toolbarMargin +  $('#navbar').height() + NavbarMarginBottom);
    $('#navbar').css('margin-top', toolbarMargin + 'px');
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