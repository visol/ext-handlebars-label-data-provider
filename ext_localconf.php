<?php
array_unshift(
    $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['handlebars']['defaultDataProviders'],
    \JFB\HandlebarsLabelDataProvider\DataProvider\LabelDataProvider::class
);
