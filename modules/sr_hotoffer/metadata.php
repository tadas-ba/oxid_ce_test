<?php
/**
 * Metadata version
 */
$sMetadataVersion = '1.0';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'sr_hotoffer',
    'title'        => 'Hot Offer Tagging',
    'description'  => array(

        'en' => 'Tags all products that are marked as Hot Offer',
    ),
    // 'thumbnail'    => 'module.png',
    'version'      => '1.0',
    'author'       => 'Super Real',
    'url'          => '',
    'email'        => '',
    'extend'       => array(
        'oxarticle'          => 'sr_hotoffer/core/sroxarticle',

    ),
    'blocks'    => array(
        array('template' => 'article_extend.tpl', 'block'=>'admin_article_extend_form', 'file'=>'admin_article_extend_form.tpl'),
    ),
//    'files' => array(
//        'srOxArticle'            => 'sr_hotoffer/core/sroxarticle.php',
//    ),
);