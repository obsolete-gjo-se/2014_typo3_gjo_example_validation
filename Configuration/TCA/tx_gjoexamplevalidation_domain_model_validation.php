<?php
if (!defined('TYPO3_MODE')) die ('Access denied.');

return array(
    'ctrl' => array(
        'title' => 'Table: tx_gjoexamplevalidation_domain_model_validation',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('gjo_example_validation') . 'Resources/Public/Icons/tx_gjoexamplevalidation_domain_model_validation.gif',
        'label' => 'alphanumeric',
    ),
    'columns' => array(
        'alphanumeric' => array(
            'label' => 'Label: alphanumeric',
            'config' => array(
                'type' => 'input',
                'eval' => 'Gjo\\GjoExampleValidation\\Validation\\Validator\\AlphanumericValidator',
            ),
        ),
    ),

    'types' => array(
        '1' => array(
            'showitem' => '
                alphanumeric,
                '),
    ),

    'interface' => array(
        'showRecordFieldList' => '
            alphanumeric,
            '),
);