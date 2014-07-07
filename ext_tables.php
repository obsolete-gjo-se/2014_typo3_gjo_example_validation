<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript/Static',
    'StaticTSTitle'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Gjo.' . $_EXTKEY,
    'PluginName',
    'PluginTitle'
);



