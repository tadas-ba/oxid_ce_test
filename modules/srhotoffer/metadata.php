<?php
/**
 * Metadata version
 */
$sMetadataVersion = '1.0';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'srhotoffer',
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
        'oxarticle'          => 'srhotoffer/core/sroxarticle',
//        'sroxalist'          => 'srhotoffer/core/sroxalist'
    ),
    'blocks'    => array(
        array('template' => 'article_extend.tpl', 'block'=>'admin_article_extend_form', 'file'=>'admin_article_extend_form.tpl'),
//        array('template' => 'article_list.tpl', 'block'=>'admin_article_list_filter', 'file'=>'admin_article_list_filter.tpl'),
//        array('template' => 'article_list.tpl', 'block'=>'admin_article_list_colgroup', 'file'=>'admin_article_list_colgroup.tpl'),
//        array('template' => 'article_list.tpl', 'block'=>'admin_article_list_sorting', 'file'=>'admin_article_list_sorting.tpl'),
        array('template' => 'layout/base.tpl', 'block'=>'base_style', 'file'=>'out/blocks/base_style.tpl'),
        array('template' => 'widget/product/listitem_infogrid.tpl', 'block'=>'widget_product_listitem_infogrid_gridpicture', 'file'=>'out/blocks/widget_product_listitem_infogrid_gridpicture.tpl'),
    ),
//    'files' => array(
//        'srOxArticle'            => 'srhotoffer/core/sroxarticle.php',
//    ),
);