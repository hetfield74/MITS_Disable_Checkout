<?php
/**
 * --------------------------------------------------------------
 * File: mits_disable_checkout.php
 * Date: 15.09.2019
 * Time: 15:53
 *
 * Author: Hetfield
 * Copyright: (c) 2019 - MerZ IT-SerVice
 * Web: https://www.merz-it-service.de
 * Contact: info@merz-it-service.de
 * --------------------------------------------------------------
 */

//if (!file_exists(DIR_FS_CATALOG.'includes/local/configure.php')) {
if (defined('MODULE_MITS_DISABLE_CHECKOUT_STATUS') && MODULE_MITS_DISABLE_CHECKOUT_STATUS == 'true') {
  if (mits_check_disable_checkout()) {
    xtc_redirect(xtc_href_link(FILENAME_SHOPPING_CART));
  }
}
//}