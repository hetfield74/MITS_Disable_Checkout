<?php
/**
 * --------------------------------------------------------------
 * File: mits_disable_checkout.php
 * Date: 15.09.2019
 * Time: 17:21
 *
 * Author: Hetfield
 * Copyright: (c) 2019 - MerZ IT-SerVice
 * Web: https://www.merz-it-service.de
 * Contact: info@merz-it-service.de
 * --------------------------------------------------------------
 */

if (basename($PHP_SELF) == FILENAME_SHOPPING_CART) {
  if (mits_check_disable_checkout()) {
    $smarty->assign('BUTTON_CHECKOUT', '');
    $smarty->clear_assign('BUTTON_PAYPAL');
    $smarty->clear_assign('ACTIVATE_EXPRESS_LINK');
  }
}