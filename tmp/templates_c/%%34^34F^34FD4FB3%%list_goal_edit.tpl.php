<?php /* Smarty version 2.6.26, created on 2012-04-21 06:26:04
         compiled from Goals/templates/list_goal_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'Goals/templates/list_goal_edit.tpl', 6, false),array('modifier', 'money', 'Goals/templates/list_goal_edit.tpl', 18, false),)), $this); ?>
<div id='entityEditContainer' style="display:none;">
	<table class="dataTable entityTable">
	<thead>
	<tr>
		<th class="first">Id</td>
        <th><?php echo ((is_array($_tmp='Goals_GoalName')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</th>
        <th><?php echo ((is_array($_tmp='Goals_GoalIsTriggeredWhen')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</th>
        <th><?php echo ((is_array($_tmp='Goals_ColumnRevenue')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</th>
        <th><?php echo ((is_array($_tmp='General_Edit')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</th>
        <th><?php echo ((is_array($_tmp='General_Delete')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</th>
	</tr>
	</thead>
	<?php $_from = $this->_tpl_vars['goals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['goal']):
?>
	<tr>
		<td class="first"><?php echo $this->_tpl_vars['goal']['idgoal']; ?>
</td>
		<td><?php echo $this->_tpl_vars['goal']['name']; ?>
</td>
        <td><span class='matchAttribute'><?php echo $this->_tpl_vars['goal']['match_attribute']; ?>
</span> <?php if (isset ( $this->_tpl_vars['goal']['pattern_type'] )): ?><br /><?php echo ((is_array($_tmp='Goals_Pattern')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
 <?php echo $this->_tpl_vars['goal']['pattern_type']; ?>
: <?php echo $this->_tpl_vars['goal']['pattern']; ?>
</b><?php endif; ?></td>
		<td><?php if ($this->_tpl_vars['goal']['revenue'] == 0): ?>-<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['goal']['revenue'])) ? $this->_run_mod_handler('money', true, $_tmp, $this->_tpl_vars['idSite']) : smarty_modifier_money($_tmp, $this->_tpl_vars['idSite'])); ?>
<?php endif; ?></td>
		<td><a href='#' name="linkEditGoal" id="<?php echo $this->_tpl_vars['goal']['idgoal']; ?>
" class="link_but"><img src='themes/default/images/ico_edit.png' border="0" /> <?php echo ((is_array($_tmp='General_Edit')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></td>
		<td><a href='#' name="linkDeleteGoal" id="<?php echo $this->_tpl_vars['goal']['idgoal']; ?>
" class="link_but"><img src='themes/default/images/ico_delete.png' border="0" /> <?php echo ((is_array($_tmp='General_Delete')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
	</table>
</div>

<div class="ui-confirm" id="confirm">
    <h2></h2>
    <input id="yes" type="button" value="<?php echo ((is_array($_tmp='General_Yes')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
" />
    <input id="no" type="button" value="<?php echo ((is_array($_tmp='General_No')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
" />
</div> 

<script type="text/javascript">
var goalTypeToTranslation = {
    "manually" : "<?php echo ((is_array($_tmp='Goals_ManuallyTriggeredUsingJavascriptFunction')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
",
    "file" : "<?php echo ((is_array($_tmp='Goals_Download')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
",
    "url" : "<?php echo ((is_array($_tmp='Goals_VisitUrl')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
",
    "title" : "<?php echo ((is_array($_tmp='Goals_VisitPageTitle')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
",
    "external_website" : "<?php echo ((is_array($_tmp='Goals_ClickOutlink')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
"
}
<?php echo '
$(document).ready( function() {	
	// translation of the goal "match attribute" to human readable description
	$(\'.matchAttribute\').each( function() {
		matchAttribute = $(this).text();
		translation = goalTypeToTranslation[matchAttribute];
		$(this).text(translation);
	});
} );
'; ?>

</script>