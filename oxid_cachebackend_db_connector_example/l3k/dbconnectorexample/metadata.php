<?php
/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'cachedProducts',
    'title'        => 'Similar products cache',
    'description'  => 'Similar products cache for faster loading',
    'version'      => '1.0',
    'author'       => 'Linas Kukulskis',
    'extend'       => array(
        'oxarticle' => 'l3k/dbconnectorexample/models/l3karticle'
    ),
    'files' => array(
        'l3kdbconnector' => 'l3k/dbconnectorexample/connectors/l3kdbconnector.php',
        'l3kmoduleevents' => 'l3k/dbconnectorexample/l3kmoduleevents.php',
    ),
    'events'       => array(
        'onActivate'   => 'l3kmoduleevents::onActivate',
        'onDeactivate' => 'l3kmoduleevents::onDeactivate'
    ),
);