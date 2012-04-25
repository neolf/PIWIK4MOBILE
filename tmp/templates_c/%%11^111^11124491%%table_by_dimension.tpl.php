<?php /* Smarty version 2.6.26, created on 2012-04-21 06:26:04
         compiled from Goals/templates/table_by_dimension.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'Goals/templates/table_by_dimension.tpl', 2, false),array('function', 'ajaxLoadingDiv', 'Goals/templates/table_by_dimension.tpl', 41, false),)), $this); ?>
<h2 id='titleGoalsByDimension'><?php if (isset ( $this->_tpl_vars['idGoal'] )): ?>
	<?php echo ((is_array($_tmp='Goals_GoalConversionsBy')) ? $this->_run_mod_handler('translate', true, $_tmp, $this->_tpl_vars['goalName']) : smarty_modifier_translate($_tmp, $this->_tpl_vars['goalName'])); ?>

	<?php else: ?><?php echo ((is_array($_tmp='Goals_ConversionsOverviewBy')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
<?php endif; ?></h2> 

<div class='entityList goalDimensions'>
	<?php if (isset ( $this->_tpl_vars['ecommerce'] )): ?>
	<div class='dimensionCategory'>
		<?php echo ((is_array($_tmp='Goals_EcommerceReports')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

		<ul class='listCircle'>
		<li class='goalDimension' module='Goals' action='getItemsSku'>
			<span class='dimension'><?php echo ((is_array($_tmp='Goals_ProductSKU')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</span>
		</li>
		<li class='goalDimension' module='Goals' action='getItemsName'>
			<span class='dimension'><?php echo ((is_array($_tmp='Goals_ProductName')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</span>
		</li>
		</li>
		<li class='goalDimension' module='Goals' action='getItemsCategory'>
			<span class='dimension'><?php echo ((is_array($_tmp='Goals_ProductCategory')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</span>
		</li>
		<li class='goalDimension' module='Goals' action='getEcommerceLog'>
			<span class='dimension'><?php echo ((is_array($_tmp='Goals_EcommerceLog')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</span>
		</li>
		</ul>
	</div>
	<?php endif; ?>
	<?php $_from = $this->_tpl_vars['goalDimensions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dimensionFamilyName'] => $this->_tpl_vars['dimensions']):
?>
		<div class='dimensionCategory'>
			<?php echo ((is_array($_tmp='Goals_ViewGoalsBy')) ? $this->_run_mod_handler('translate', true, $_tmp, $this->_tpl_vars['dimensionFamilyName']) : smarty_modifier_translate($_tmp, $this->_tpl_vars['dimensionFamilyName'])); ?>

			<ul class='listCircle'>
			<?php $_from = $this->_tpl_vars['dimensions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dimension']):
?>
				<li title='<?php echo ((is_array($_tmp='Goals_ViewGoalsBy')) ? $this->_run_mod_handler('translate', true, $_tmp, $this->_tpl_vars['dimension']['name']) : smarty_modifier_translate($_tmp, $this->_tpl_vars['dimension']['name'])); ?>
' class='goalDimension' module='<?php echo $this->_tpl_vars['dimension']['module']; ?>
' action='<?php echo $this->_tpl_vars['dimension']['action']; ?>
'>
					<span class='dimension'><?php echo $this->_tpl_vars['dimension']['name']; ?>
</span>
				</li>
			<?php endforeach; endif; unset($_from); ?>
			</ul>
		</div>
	<?php endforeach; endif; unset($_from); ?>
</div>

<div style='float: left;'>
	<?php echo smarty_function_ajaxLoadingDiv(array('id' => 'tableGoalsLoading'), $this);?>

	
	<div id='tableGoalsByDimension'></div>
</div>
<div class="clear"></div>
<?php echo '
<script type="text/javascript">
$(document).ready( function() {
	var countLoaded = 0;
	/* 
	 * For each \'dimension\' in the list, a click will trigger an ajax request to load the datatable 
	 * showing Goals metrics (conversion, conv. rates, revenue) for this dimension
	 */
	$(\'.goalDimension\').click( function() {
		var self = this;
		$(\'.goalDimension\').removeClass(\'activeDimension\');
		$(this).addClass(\'activeDimension\');
		var module = $(this).attr(\'module\');
		var action = $(this).attr(\'action\');
		widgetUniqueId = module+action;
		self.expectedWidgetUniqueId = widgetUniqueId;
		
		var widgetParameters = {
			\'module\': module,
			\'action\': action
		};
		var idGoal = broadcast.getValueFromHash(\'idGoal\');
		widgetParameters[\'idGoal\'] = idGoal.length ? idGoal : 0; //Piwik_DataTable_Filter_AddColumnsProcessedMetricsGoal::GOALS_FULL_TABLE;
		
		// Loading segment table means loading Goals view for Top Countries/etc.
		if(module != \'Goals\') {
			widgetParameters[\'viewDataTable\'] = \'tableGoals\';
			// 0 is Piwik_DataTable_Filter_AddColumnsProcessedMetricsGoal::GOALS_FULL_TABLE
			widgetParameters[\'documentationForGoalsPage\'] = 1;
		}
		var onWidgetLoadedCallback = function (response) {
			if(widgetUniqueId != self.expectedWidgetUniqueId) {
				return;
			}
			$(\'#tableGoalsByDimension\').html($(response));
			$(\'#tableGoalsLoading\').hide();
			$(\'#tableGoalsByDimension\').show();
			
			countLoaded++;
			// only scroll down to the loaded datatable if this is not the first one
			// otherwise, screen would jump down to the table when loading the report 
			if(countLoaded > 1)
			{
				piwikHelper.lazyScrollTo("#titleGoalsByDimension", 400);
			}
		};
		$(\'#tableGoalsByDimension\').hide();
		$(\'#tableGoalsLoading\').show();

		ajaxRequest = widgetsHelper.getLoadWidgetAjaxRequest(widgetUniqueId, widgetParameters, onWidgetLoadedCallback);
		$.ajax(ajaxRequest);
	});
	$(\'.goalDimension\').first().click();
});
</script>
'; ?>
