<?php /* Smarty version 2.6.26, created on 2012-04-21 06:07:04
         compiled from /var/www/piwik/plugins/UserCountry/templates/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'postEvent', '/var/www/piwik/plugins/UserCountry/templates/index.tpl', 1, false),array('function', 'sparkline', '/var/www/piwik/plugins/UserCountry/templates/index.tpl', 10, false),array('modifier', 'translate', '/var/www/piwik/plugins/UserCountry/templates/index.tpl', 3, false),)), $this); ?>
<?php echo smarty_function_postEvent(array('name' => 'template_headerUserCountry'), $this);?>


<h2><?php echo ((is_array($_tmp='UserCountry_Country')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h2>
<?php echo $this->_tpl_vars['dataTableCountry']; ?>


<h2><?php echo ((is_array($_tmp='UserCountry_Continent')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h2>
<?php echo $this->_tpl_vars['dataTableContinent']; ?>


<div class="sparkline">
	<?php echo smarty_function_sparkline(array('src' => $this->_tpl_vars['urlSparklineCountries']), $this);?>

	<?php echo ((is_array($_tmp='UserCountry_DistinctCountries')) ? $this->_run_mod_handler('translate', true, $_tmp, "<strong>".($this->_tpl_vars['numberDistinctCountries'])."</strong>") : smarty_modifier_translate($_tmp, "<strong>".($this->_tpl_vars['numberDistinctCountries'])."</strong>")); ?>

</div>	

<?php echo smarty_function_postEvent(array('name' => 'template_footerUserCountry'), $this);?>
