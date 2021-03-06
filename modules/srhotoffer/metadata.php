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
        'oxviewconfig'       => 'srhotoffer/core/sroxviewconfig',
        'oxubase'            => 'srhotoffer/core/srhotoffers',
        'oxarticlelist'      => 'srhotoffer/core/sroxarticlelist',
        'alist'              => 'srhotoffer/controllers/sralist'
    ),
    'blocks'    => array(
        array('template' => 'article_extend.tpl', 'block'=>'admin_article_extend_form', 'file'=>'admin_article_extend_form.tpl'),
        array('template' => 'article_list.tpl', 'block'=>'admin_article_list_filter', 'file'=>'admin_article_list_filter.tpl'),
        array('template' => 'article_list.tpl', 'block'=>'admin_article_list_colgroup', 'file'=>'admin_article_list_colgroup.tpl'),
        array('template' => 'article_list.tpl', 'block'=>'admin_article_list_sorting', 'file'=>'admin_article_list_sorting.tpl'),
        array('template' => 'article_list.tpl', 'block'=>'admin_article_list_item', 'file'=>'admin_article_list_item.tpl'),
        array('template' => 'layout/base.tpl', 'block'=>'base_style', 'file'=>'out/blocks/base_style.tpl'),
        array('template' => 'widget/product/listitem_infogrid.tpl', 'block'=>'widget_product_listitem_infogrid_gridpicture', 'file'=>'out/blocks/widget_product_listitem_infogrid_gridpicture.tpl'),
        array('template' => 'page/details/inc/productmain.tpl', 'block'=>'details_productmain_zoom', 'file'=>'out/blocks/details_productmain_zoom.tpl'),
        array('template' => 'widget/product/listitem_line.tpl', 'block'=>'widget_product_listitem_line_picturebox', 'file'=>'out/blocks/widget_product_listitem_line_picturebox.tpl'),
    ),
//    'files' => array(
//        'srOxArticle'            => 'srhotoffer/core/sroxarticle.php',
//    ),
);