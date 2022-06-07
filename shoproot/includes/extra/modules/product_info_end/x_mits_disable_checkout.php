<?php
/**
 * --------------------------------------------------------------
 * File: x_mits_disable_checkout.php
 * Date: 16.09.2019
 * Time: 08:57
 *
 * Author: Hetfield
 * Copyright: (c) 2019 - MerZ IT-SerVice
 * Web: https://www.merz-it-service.de
 * Contact: info@merz-it-service.de
 * --------------------------------------------------------------
 */

if (defined('MODULE_MITS_DISABLE_CHECKOUT_STATUS') && MODULE_MITS_DISABLE_CHECKOUT_STATUS == 'true') {
  if (mits_check_disable_checkout()) {
    $info_smarty->clear_assign('ADD_CART_BUTTON_PAYPAL');
    $info_smarty->clear_assign('PAYPAL_INSTALLMENT');
    $info_smarty->clear_assign('ADD_CART_BUTTON_EXPRESS');
  }
}