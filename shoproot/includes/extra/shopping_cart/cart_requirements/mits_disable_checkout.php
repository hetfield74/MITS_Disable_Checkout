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
  if (defined('MODULE_MITS_DISABLE_CHECKOUT_INFO_MESSAGE') && mits_check_disable_checkout()) {
    $smarty->assign('info_message', MODULE_MITS_DISABLE_CHECKOUT_INFO_MESSAGE);
    $smarty->assign('error_message', MODULE_MITS_DISABLE_CHECKOUT_INFO_MESSAGE);
  }
}
//}