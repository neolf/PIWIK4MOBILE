<?php /* Smarty version 2.6.26, created on 2012-04-17 03:33:23
         compiled from CoreHome/templates/logo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'CoreHome/templates/logo.tpl', 2, false),)), $this); ?>
<span id="logo">
<a href="index.php" title="<?php if ($this->_tpl_vars['isCustomLogo']): ?><?php echo ((is_array($_tmp='General_PoweredBy')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
 <?php endif; ?>Piwik # <?php echo ((is_array($_tmp='General_OpenSourceWebAnalytics')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
" style="text-decoration: none;">
	<img src='<?php echo $this->_tpl_vars['logoHeader']; ?>
' alt="<?php if ($this->_tpl_vars['isCustomLogo']): ?><?php echo ((is_array($_tmp='General_PoweredBy')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
 <?php endif; ?>Piwik" style='margin-left:10px' height='50px'/>
</a>
</span>