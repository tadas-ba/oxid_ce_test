<?php /* Smarty version 2.6.26, created on 2013-01-23 02:59:10
         compiled from widget/product/compare_links.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxaddparams', 'widget/product/compare_links.tpl', 2, false),array('function', 'oxmultilang', 'widget/product/compare_links.tpl', 2, false),)), $this); ?>
<?php $this->assign('_additionalParams', $this->_tpl_vars['oView']->getAdditionalParams()); ?>
<a class="compare remove clear" data-aid="<?php echo $this->_tpl_vars['_compare_aid']; ?>
" id="removeCmp<?php echo $this->_tpl_vars['_compare_testid']; ?>
" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['oView']->getLink())) ? $this->_run_mod_handler('oxaddparams', true, $_tmp, "am=1&amp;removecompare=1&amp;fnc=tocomparelist&amp;aid=".($this->_tpl_vars['_compare_aid'])."&amp;anid=".($this->_tpl_vars['_compare_anid'])."&amp;pgNr=".($this->_tpl_vars['_compare_page'])."&amp;".($this->_tpl_vars['_additionalParams'])) : smarty_modifier_oxaddparams($_tmp, "am=1&amp;removecompare=1&amp;fnc=tocomparelist&amp;aid=".($this->_tpl_vars['_compare_aid'])."&amp;anid=".($this->_tpl_vars['_compare_anid'])."&amp;pgNr=".($this->_tpl_vars['_compare_page'])."&amp;".($this->_tpl_vars['_additionalParams']))); ?>
" rel="nofollow"><?php echo smarty_function_oxmultilang(array('ident' => 'WIDGET_PRODUCT_REMOVEFROMCOMPARELIST'), $this);?>
</a>
<a class="compare add clear" data-aid="<?php echo $this->_tpl_vars['_compare_aid']; ?>
" id="toCmp<?php echo $this->_tpl_vars['_compare_testid']; ?>
" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['oView']->getLink())) ? $this->_run_mod_handler('oxaddparams', true, $_tmp, "am=1&amp;addcompare=1&amp;fnc=tocomparelist&aid=".($this->_tpl_vars['_compare_aid'])."&amp;anid=".($this->_tpl_vars['_compare_anid'])."&amp;pgNr=".($this->_tpl_vars['_compare_page'])."&amp;".($this->_tpl_vars['_additionalParams'])) : smarty_modifier_oxaddparams($_tmp, "am=1&amp;addcompare=1&amp;fnc=tocomparelist&aid=".($this->_tpl_vars['_compare_aid'])."&amp;anid=".($this->_tpl_vars['_compare_anid'])."&amp;pgNr=".($this->_tpl_vars['_compare_page'])."&amp;".($this->_tpl_vars['_additionalParams']))); ?>
" rel="nofollow"><?php echo smarty_function_oxmultilang(array('ident' => 'WIDGET_PRODUCT_COMPARE'), $this);?>
</a>