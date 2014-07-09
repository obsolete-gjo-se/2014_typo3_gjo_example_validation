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
                'eval' => 'Gjo_AlphanumericValidator',
            ),
        ),
        'not_empty' => array(
            'label' => 'Label: not_empty',
            'config' => array(
                'type' => 'input',
                'eval' => 'required, Gjo\\GjoExampleValidation\\Validation\\Validator\\NotEmptyValidator',
            ),
        ),
    ),

    'types' => array(
        '1' => array(
            'showitem' => '
                alphanumeric,
                not_empty
                '),
    ),

    'interface' => array(
        'showRecordFieldList' => '
            alphanumeric,
            not_empty
            '),
);