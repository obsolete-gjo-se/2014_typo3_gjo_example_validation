<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Gjo.' . $_EXTKEY,
    'Validation',
    array(
        'Example' => 'example'
    ),
    array(
        'Example' => 'example'
    )
);