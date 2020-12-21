<?php
/**
 * --------------------------------------------------------------
 * File: mits_disable_checkout.php
 * Date: 16.09.2019
 * Time: 09:13
 *
 * Author: Hetfield
 * Copyright: (c) 2019 - MerZ IT-SerVice
 * Web: https://www.merz-it-service.de
 * Contact: info@merz-it-service.de
 * --------------------------------------------------------------
 */

defined('_VALID_XTC') or die('Direct Access to this location is not allowed.');

class mits_disable_checkout {
  var $code, $title, $description, $enabled;

  function __construct() {
    $this->code = 'mits_disable_checkout';
    $this->title = MODULE_MITS_DISABLE_CHECKOUT_TITLE;
    $this->description = MODULE_MITS_DISABLE_CHECKOUT_DESCRIPTION;
    $this->sort_order = defined('MODULE_MITS_DISABLE_CHECKOUT_SORT_ORDER') ? MODULE_MITS_DISABLE_CHECKOUT_SORT_ORDER : 0;
    $this->enabled = ((MODULE_MITS_DISABLE_CHECKOUT_STATUS == 'true') ? true : false);
  }

  function process($file) {
    //do nothing
  }

  function display() {
    return array(
      'text' => '<br>' . xtc_button(BUTTON_SAVE) . '&nbsp;' .
        xtc_button_link(BUTTON_CANCEL, xtc_href_link(FILENAME_MODULE_EXPORT, 'set=' . $_GET['set'] . '&module=' . $this->code))
    );
  }

  function check() {
    if (!isset($this->_check)) {
      $check_query = xtc_db_query("SELECT configuration_value FROM " . TABLE_CONFIGURATION . " WHERE configuration_key = 'MODULE_MITS_DISABLE_CHECKOUT_STATUS'");
      $this->_check = xtc_db_num_rows($check_query);
    }
    return $this->_check;
  }

  function install() {
    xtc_db_query("INSERT INTO " . TABLE_CONFIGURATION . " (configuration_key, configuration_value, configuration_group_id, sort_order, set_function, date_added) VALUES ('MODULE_MITS_DISABLE_CHECKOUT_STATUS', 'true',  '6', '1', 'xtc_cfg_select_option(array(\'true\', \'false\'), ', now())");
    xtc_db_query("INSERT INTO " . TABLE_CONFIGURATION . " (configuration_key, configuration_value, configuration_group_id, sort_order, set_function, date_added) VALUES ('MODULE_MITS_DISABLE_CHECKOUT_ENABLE', 'false',  '6', '1', 'xtc_cfg_select_option(array(\'true\', \'false\'), ', now())");
  }

  function remove() {
    xtc_db_query("DELETE FROM " . TABLE_CONFIGURATION . " WHERE configuration_key LIKE 'MODULE_MITS_DISABLE_CHECKOUT_%'");
  }

  function keys() {
    return array(
      'MODULE_MITS_DISABLE_CHECKOUT_STATUS',
      'MODULE_MITS_DISABLE_CHECKOUT_ENABLE'
    );
  }
}