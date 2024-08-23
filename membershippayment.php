<?php

require_once 'membershippayment.civix.php';

function membershippayment_civicrm_buildForm($formName, &$form) {
  if ($formName == 'CRM_Contribute_Form_Contribution') {
    $contribution = CRM_Membershippayment_Contribution_Form::singleton();
    $contribution->buildForm($formName, $form);
  }
}

function membershippayment_civicrm_post($op, $objectName, $objectId, &$objectRef) {
  $contribution = CRM_Membershippayment_Contribution_Form::singleton();
  $contribution->post($op, $objectName, $objectId, $objectRef);
}

/**
 *
 * Implementation of hook_civicrm_postProcess
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_postProcess
 */
function membershippayment_civicrm_postProcess( $formName, &$form ) {
  if ($formName == 'CRM_Contribute_Form_Contribution') {
    $contribution = CRM_Membershippayment_Contribution_Form::singleton();
    $contribution->postProcess($formName, $form);
  }
}

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function membershippayment_civicrm_config(&$config) {
  _membershippayment_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function membershippayment_civicrm_install() {
  _membershippayment_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function membershippayment_civicrm_enable() {
  _membershippayment_civix_civicrm_enable();
}

/**
 * Functions below this ship commented out. Uncomment as required.
 *

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *

*/
