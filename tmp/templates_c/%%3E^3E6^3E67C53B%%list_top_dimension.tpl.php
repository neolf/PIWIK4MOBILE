<?php /* Smarty version 2.6.26, created on 2012-04-21 06:31:29
         compiled from Goals/templates/list_top_dimension.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'Goals/templates/list_top_dimension.tpl', 5, false),array('function', 'logoHtml', 'Goals/templates/list_top_dimension.tpl', 8, false),)), $this); ?>

<?php $_from = $this->_tpl_vars['topDimension']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['topGoalElements'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['topGoalElements']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['element']):
        $this->_foreach['topGoalElements']['iteration']++;
?>
	<?php $this->assign('goal_nb_conversion', $this->_tpl_vars['element']['nb_conversions']); ?>
	<?php $this->assign('goal_conversion_rate', $this->_tpl_vars['element']['conversion_rate']); ?>
	<span class='goalTopElement' title='<?php echo ((is_array($_tmp='Goals_Conversions')) ? $this->_run_mod_handler('translate', true, $_tmp, "<b>".($this->_tpl_vars['goal_nb_conversion'])."</b>") : smarty_modifier_translate($_tmp, "<b>".($this->_tpl_vars['goal_nb_conversion'])."</b>")); ?>
, 
		<?php echo ((is_array($_tmp='Goals_ConversionRate')) ? $this->_run_mod_handler('translate', true, $_tmp, "<b>".($this->_tpl_vars['goal_conversion_rate'])."</b>") : smarty_modifier_translate($_tmp, "<b>".($this->_tpl_vars['goal_conversion_rate'])."</b>")); ?>
'>
	<?php echo $this->_tpl_vars['element']['name']; ?>
</span>
	<?php echo smarty_function_logoHtml(array('metadata' => $this->_tpl_vars['element']['metadata'],'alt' => $this->_tpl_vars['element']['name']), $this);?>

	<?php if ($this->_foreach['topGoalElements']['iteration'] == $this->_foreach['topGoalElements']['total']-1): ?> and <?php elseif ($this->_foreach['topGoalElements']['iteration'] < $this->_foreach['topGoalElements']['total']-1): ?>, <?php else: ?><?php endif; ?>
<?php endforeach; endif; unset($_from); ?> 