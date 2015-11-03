<?php
/**
 * @file
 * theme-settings.php
 *
 * Theme settings file for Bootstrap.
 */

function bootstrap_lite_form_system_theme_settings_alter(&$form, $form_state) {

  $form['tweaks'] = array(
    '#type' => 'fieldset',
    '#title' => t('Tweaks'),
  );

  $form['tweaks']['bootstrap_lite_container'] = array(
    '#type' => 'select',
    '#title' => t('Container type'),
    '#default_value' => theme_get_setting('bootstrap_lite_container', 'bootstrap_lite'),
    '#description' => t('Switch between full width (fluid) or fixed (max 1170px) width.'),
    '#options' => array(
      'container' => t('Fixed'),
      'container-fluid' => t('Fluid'),
    )
  );

  $form['tweaks']['bootstrap_lite_datetime'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show "XX time ago".'),
    '#default_value' => theme_get_setting('bootstrap_lite_datetime', 'bootstrap_lite'),
    '#description' => t('If enabled, replace date output for nodes and comments by "XX time ago".'),
  );

  $form['breadcrumbs'] = array(
    '#type' => 'fieldset',
    '#title' => t('Breadcrumbs'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['breadcrumbs']['bootstrap_lite_breadcrumb_home'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show "Home" breadcrumb link'),
    '#default_value' => theme_get_setting('bootstrap_lite_breadcrumb_home', 'bootstrap_lite'),
    '#description' => t('If your site has a module dedicated to handling breadcrumbs already, ensure this setting is enabled.'),
  );
  $form['breadcrumbs']['bootstrap_lite_breadcrumb_title'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show current page title at end'),
    '#default_value' => theme_get_setting('bootstrap_lite_breadcrumb_title', 'bootstrap_lite'),
    '#description' => t('If your site has a module dedicated to handling breadcrumbs already, ensure this setting is disabled.'),
  );

  $form['navbar'] = array(
    '#type' => 'fieldset',
    '#title' => t('Navbar'),
    '#description' => t('Navigation bar settings.'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['navbar']['bootstrap_lite_navbar_position'] = array(
    '#type' => 'select',
    '#title' => t('Navbar Position'),
    '#description' => t('Select your Navbar position.'),
    '#default_value' => theme_get_setting('bootstrap_lite_navbar_position', 'bootstrap_lite'),
    '#options' => array(
      'static-top' => t('Static Top'),
      'fixed-top' => t('Fixed Top'),
      'fixed-bottom' => t('Fixed Bottom'),
    ),
    '#empty_option' => t('Normal'),
  );
  
  $form['navbar']['bootstrap_lite_navbar_menu_position'] = array(
    '#type' => 'select',
    '#title' => t('Navbar Menu Position'),
    '#description' => t('Select your Navbar Menu position.'),
    '#default_value' => theme_get_setting('bootstrap_lite_navbar_menu_position', 'bootstrap_lite'),
    '#options' => array(
      'navbar-left' => t('Left'),
      'navbar-right' => t('Right'),
    ),
    '#empty_option' => t('Normal'),
  );
  
  $form['navbar']['bootstrap_lite_navbar_inverse'] = array(
    '#type' => 'checkbox',
    '#title' => t('Inverse navbar style'),
    '#description' => t('Select if you want the inverse navbar style.'),
    '#default_value' => theme_get_setting('bootstrap_lite_navbar_inverse', 'bootstrap_lite'),
  );

//  $url = Url::fromUri('http://bootstrapcdn.com');
//  $external_link = \Drupal::l(t('External link'), $url);
  $external_link ="";
  $form['bootstrap_lite_cdn'] = array(
    '#type' => 'fieldset',
    '#title' => t('BootstrapCDN settings'),
    '#description' => t('Use !bootstrapcdn to serve the Bootstrap framework files. Enabling this setting will prevent this theme from attempting to load any Bootstrap framework files locally. !warning', array(
      '!bootstrapcdn' => $external_link,
    '!warning' => '<div class="alert alert-info messages info"><strong>' . t('NOTE') . ':</strong> ' . t('While BootstrapCDN (content distribution network) is the preferred method for providing huge performance gains in load time, this method does depend on using this third party service. BootstrapCDN is under no obligation or commitment to provide guaranteed up-time or service quality for this theme. If you choose to disable this setting, you must provide your own Bootstrap source and/or optional CDN delivery implementation.') . '</div>',
    )),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,    
  );
  // BootstrapCDN.

  $form['bootstrap_lite_cdn']['bootstrap_lite_cdn'] = array(
    '#type' => 'select',
    '#title' => t('BootstrapCDN version'),
    '#options' => array(
      '3.3.5' => '3.3.5',
    ),
    '#default_value' => theme_get_setting('bootstrap_lite_cdn', 'bootstrap_lite'),
    '#empty_option' => t('Disabled'),
    '#empty_value' => NULL,
  );
  
  $form['bootstrap_lite_cdn']['bootstrap_lite_font_awesome'] = array(
    '#type' => 'select',
    '#title' => t('Font Awesome version'),
    '#options' => array(
      '4.4.0' => '4.4.0',
    ),
    '#default_value' => theme_get_setting('bootstrap_lite_font_awesome', 'bootstrap_lite'),
    '#empty_option' => t('Disabled'),
    '#empty_value' => NULL,
  );

}

