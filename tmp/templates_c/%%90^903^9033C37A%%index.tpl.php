<?php /* Smarty version 2.6.26, created on 2012-04-21 16:11:11
         compiled from /var/www/piwik/plugins/VisitorInterest/templates/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/var/www/piwik/plugins/VisitorInterest/templates/index.tpl', 2, false),)), $this); ?>

<h2><?php echo ((is_array($_tmp='VisitorInterest_VisitsPerDuration')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h2>
<?php echo $this->_tpl_vars['dataTableNumberOfVisitsPerVisitDuration']; ?>


<h2><?php echo ((is_array($_tmp='VisitorInterest_VisitsPerNbOfPages')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h2>
<?php echo $this->_tpl_vars['dataTableNumberOfVisitsPerPage']; ?>


<h2><?php echo ((is_array($_tmp='VisitorInterest_visitsByVisitCount')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h2>
<?php echo $this->_tpl_vars['dataTableNumberOfVisitsByVisitNum']; ?>


<h2><?php echo ((is_array($_tmp='VisitorInterest_VisitsByDaysSinceLast')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h2>
<?php echo $this->_tpl_vars['dataTableNumberOfVisitsByDaysSinceLast']; ?>
