<?php
if (!defined('TYPO3_MODE')) die ('Access denied.');

return array(
    'ctrl' => array(
        'title' => 'Table: tx_gjoexamplevalidation_domain_model_validation',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('gjo_example_validation') . 'Resources/Public/Icons/tx_gjoexamplevalidation_domain_model_validation.gif',
        'label' => 'string_without_break',
    ),
    'columns' => array(
        'string_without_break' => array(
            'label' => 'Label: stringWithoutBreak',
            'config' => array(
                'type' => 'input',
                'eval' => 'required',
                'max' => '30',
            ),
        ),
    ),

    'types' => array(
        '1' => array(
            'showitem' => '
                string_without_break,
                '),
    ),

    'interface' => array(
        'showRecordFieldList' => '
            string_without_break,
            '),
);