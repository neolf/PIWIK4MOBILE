<?php /* Smarty version 2.6.26, created on 2012-04-21 16:11:12
         compiled from /var/www/piwik/plugins/VisitTime/templates/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/var/www/piwik/plugins/VisitTime/templates/index.tpl', 2, false),)), $this); ?>
<div id='leftcolumn'>
<h2><?php echo ((is_array($_tmp='VisitTime_LocalTime')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h2>
<?php echo $this->_tpl_vars['dataTableVisitInformationPerLocalTime']; ?>

</div>

<div id='rightcolumn'>
<h2><?php echo ((is_array($_tmp='VisitTime_ServerTime')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h2>
<?php echo $this->_tpl_vars['dataTableVisitInformationPerServerTime']; ?>

</div>