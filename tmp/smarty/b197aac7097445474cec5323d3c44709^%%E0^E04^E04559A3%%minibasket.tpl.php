<?php /* Smarty version 2.6.26, created on 2013-01-23 02:59:11
         compiled from widget/header/minibasket.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxid_include_dynamic', 'widget/header/minibasket.tpl', 1, false),array('function', 'oxscript', 'widget/header/minibasket.tpl', 3, false),)), $this); ?>
<?php echo smarty_function_oxid_include_dynamic(array('file' => "widget/minibasket/minibasket.tpl"), $this);?>

<?php echo smarty_function_oxid_include_dynamic(array('file' => "widget/minibasket/minibasketmodal.tpl"), $this);?>

<?php echo smarty_function_oxscript(array('widget' => $this->_tpl_vars['oView']->getClassName()), $this);?>