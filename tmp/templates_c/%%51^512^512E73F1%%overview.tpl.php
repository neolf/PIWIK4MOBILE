<?php /* Smarty version 2.6.26, created on 2012-04-21 06:26:04
         compiled from /var/www/piwik/plugins/Goals/templates/overview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/var/www/piwik/plugins/Goals/templates/overview.tpl', 14, false),array('function', 'sparkline', '/var/www/piwik/plugins/Goals/templates/overview.tpl', 18, false),)), $this); ?>
<link rel="stylesheet" type="text/css" href="plugins/Goals/templates/goals.css" />

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "Goals/templates/title_and_evolution_graph.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_from = $this->_tpl_vars['goalMetrics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['goal']):
?>
	<?php $this->assign('nb_conversions', $this->_tpl_vars['goal']['nb_conversions']); ?>
	<?php $this->assign('nb_visits_converted', $this->_tpl_vars['goal']['nb_visits_converted']); ?>
	<?php $this->assign('conversion_rate', $this->_tpl_vars['goal']['conversion_rate']); ?>
	<?php $this->assign('name', $this->_tpl_vars['goal']['name']); ?>
	
    <div class="goalEntry">
	<h2>
		<a href="javascript:broadcast.propagateAjax('module=Goals&action=goalReport&idGoal=<?php echo $this->_tpl_vars['goal']['id']; ?>
')">
		<?php echo ((is_array($_tmp='Goals_GoalX')) ? $this->_run_mod_handler('translate', true, $_tmp, "'".($this->_tpl_vars['name'])."'") : smarty_modifier_translate($_tmp, "'".($this->_tpl_vars['name'])."'")); ?>

		</a>
	</h2>
	<div id='leftcolumn'>
		<div class="sparkline"><?php echo smarty_function_sparkline(array('src' => $this->_tpl_vars['goal']['urlSparklineConversions']), $this);?>

		<?php echo ((is_array($_tmp='Goals_Conversions')) ? $this->_run_mod_handler('translate', true, $_tmp, "<strong>".($this->_tpl_vars['nb_conversions'])."</strong>") : smarty_modifier_translate($_tmp, "<strong>".($this->_tpl_vars['nb_conversions'])."</strong>")); ?>

		<?php if ($this->_tpl_vars['goal']['goalAllowMultipleConversionsPerVisit']): ?>	
			(<?php echo ((is_array($_tmp='VisitsSummary_NbVisits')) ? $this->_run_mod_handler('translate', true, $_tmp, "<strong>".($this->_tpl_vars['nb_visits_converted'])."</strong>") : smarty_modifier_translate($_tmp, "<strong>".($this->_tpl_vars['nb_visits_converted'])."</strong>")); ?>
)
		<?php endif; ?>
		</div>
	</div>
	<div id='rightcolumn'>
		<div class="sparkline"><?php echo smarty_function_sparkline(array('src' => $this->_tpl_vars['goal']['urlSparklineConversionRate']), $this);?>

		<?php echo ((is_array($_tmp='Goals_ConversionRate')) ? $this->_run_mod_handler('translate', true, $_tmp, "<strong>".($this->_tpl_vars['conversion_rate'])."</strong>") : smarty_modifier_translate($_tmp, "<strong>".($this->_tpl_vars['conversion_rate'])."</strong>")); ?>
</div>
	</div>
    <br class="clear" />
    </div>
<?php endforeach; endif; unset($_from); ?>

<?php if ($this->_tpl_vars['displayFullReport']): ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "Goals/templates/table_by_dimension.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	<?php if ($this->_tpl_vars['userCanEditGoals']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "Goals/templates/add_edit_goal.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
<?php endif; ?>