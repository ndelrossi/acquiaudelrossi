<?php

/**
 * @file
 * template.php
 */

/**
 * Implements THEME_preprocess_username().
 */
function nick_bootstrap_preprocess_username(&$vars) {
  $vars['name'] = $vars['name_raw'];
}
