<?php
/**
 * --------------------------------------------------------------
 * File: mits_disable_checkout.php
 * Date: 15.09.2019
 * Time: 16:14
 *
 * Author: Hetfield
 * Copyright: (c) 2019 - MerZ IT-SerVice
 * Web: https://www.merz-it-service.de
 * Contact: info@merz-it-service.de
 * --------------------------------------------------------------
 */

function mits_check_disable_checkout() {
  if (defined(MODULE_MITS_DISABLE_CHECKOUT_STATUS) && MODULE_MITS_DISABLE_CHECKOUT_STATUS == 'true') {  
    if (defined(MODULE_MITS_DISABLE_CHECKOUT_ENABLE) && MODULE_MITS_DISABLE_CHECKOUT_ENABLE == 'true') {
      return true;
    } else {
      return false;
    }
  } else {
    return false;
  }
}