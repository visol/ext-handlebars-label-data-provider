<?php
array_unshift(
    $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['handlebars']['defaultDataProviders'],
    \Visol\HandlebarsLabelDataProvider\DataProvider\LabelDataProvider::class
);
