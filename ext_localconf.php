<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Gjo.' . $_EXTKEY,
    'Validation',
    array(
        'Validation' => 'findAll, show, addForm, add, updateForm, update, remove'
    ),
    array(
        'Validation' => 'findAll, show, addForm, add, updateForm, update, remove'
    )
);

//// Form evaluation function for fe_users
//$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tce']['formevals']['tx_saltedpasswords_eval_fe'] = 'EXT:saltedpasswords/Classes/Evaluation/FrontendEvaluator.php';
//// Form evaluation function for be_users
//$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tce']['formevals']['tx_saltedpasswords_eval_be'] = 'EXT:saltedpasswords/Classes/Evaluation/BackendEvaluator.php';
//$TYPO3_CONF_VARS['SC_OPTIONS']['tce']['formevals']['tx_gjoexamplevalidation_alphanumeric'] = 'EXT:gjo_example_validation/Classes/Validation/Validator/AlphanumericValidator.php';
//$TYPO3_CONF_VARS['SC_OPTIONS']['tce']['formevals']['tx_exampleextraevaluations_extraeval1'] = 'EXT:gjo_example_validation/Classes/Validation/Validator/class.tx_exampleextraevaluations_extraeval1.php';
$TYPO3_CONF_VARS['SC_OPTIONS']['tce']['formevals']['tx_exampleextraevaluations_extraeval1'] = 'EXT:gjo_example_validation/Classes/Validation/Validator/class.AlphanumericValidator.php';
//$TYPO3_CONF_VARS['SC_OPTIONS']['tce']['formevals']['tx_exampleextraevaluations_extraeval1'] = 'EXT:gjo_example_validation/tx_exampleextraevaluations_extraeval1';

//$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tce']['formevals']['tx_gjoexamplevalidation_alphanumeric'] =
//    'EXT:gjo_example_validation/Classes/Validation/Validator/AlphanumericValidator.php';