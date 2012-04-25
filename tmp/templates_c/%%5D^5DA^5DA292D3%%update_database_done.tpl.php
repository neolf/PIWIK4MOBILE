<?php /* Smarty version 2.6.26, created on 2012-04-17 03:33:21
         compiled from /var/www/piwik/plugins/CoreUpdater/templates/update_database_done.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/var/www/piwik/plugins/CoreUpdater/templates/update_database_done.tpl', 2, false),array('modifier', 'implode', '/var/www/piwik/plugins/CoreUpdater/templates/update_database_done.tpl', 41, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CoreUpdater/templates/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->assign('helpMessage', ((is_array($_tmp='CoreUpdater_HelpMessageContent')) ? $this->_run_mod_handler('translate', true, $_tmp, '<a target="_blank" href="?module=Proxy&action=redirect&url=http://piwik.org/faq/">', '</a>', '</li><li>') : smarty_modifier_translate($_tmp, '<a target="_blank" href="?module=Proxy&action=redirect&url=http://piwik.org/faq/">', '</a>', '</li><li>'))); ?>

<?php if ($this->_tpl_vars['coreError']): ?>
	<br /><br />
	<div class="error">
		<img src="themes/default/images/error_medium.png" /> <?php echo ((is_array($_tmp='CoreUpdater_CriticalErrorDuringTheUpgradeProcess')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

		<?php $_from = $this->_tpl_vars['errorMessages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['message']):
?>
		<pre><?php echo $this->_tpl_vars['message']; ?>
</pre><br />
		<?php endforeach; endif; unset($_from); ?>
	</div>
	<br />
	<p><?php echo ((is_array($_tmp='CoreUpdater_HelpMessageIntroductionWhenError')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

	<ul><li><?php echo $this->_tpl_vars['helpMessage']; ?>
</li></ul></p>

	<p><?php echo ((is_array($_tmp='CoreUpdater_ErrorDIYHelp')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

	<ul><li><?php echo ((is_array($_tmp='CoreUpdater_ErrorDIYHelp_1')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</li>
		<li><?php echo ((is_array($_tmp='CoreUpdater_ErrorDIYHelp_2')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</li>
		<li><?php echo ((is_array($_tmp='CoreUpdater_ErrorDIYHelp_3')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</li>
		<li><?php echo ((is_array($_tmp='CoreUpdater_ErrorDIYHelp_4')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</li>
		<li><?php echo ((is_array($_tmp='CoreUpdater_ErrorDIYHelp_5')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</li></ul></p>
<?php else: ?>
	
	<?php if (count ( $this->_tpl_vars['warningMessages'] ) > 0): ?>
		<div class="warning">
			<p><img src="themes/default/images/warning_medium.png" /> <?php echo ((is_array($_tmp='CoreUpdater_WarningMessages')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</p>
			<?php $_from = $this->_tpl_vars['warningMessages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['message']):
?>
			<pre><?php echo $this->_tpl_vars['message']; ?>
</pre><br />
			<?php endforeach; endif; unset($_from); ?>
		</div>
	<?php endif; ?>
						
	<?php if (count ( $this->_tpl_vars['errorMessages'] ) > 0): ?>
		<div class="warning">
			<p><img src="themes/default/images/error_medium.png" /> <?php echo ((is_array($_tmp='CoreUpdater_ErrorDuringPluginsUpdates')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</p>
			<?php $_from = $this->_tpl_vars['errorMessages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['message']):
?>
			<pre><?php echo $this->_tpl_vars['message']; ?>
</pre><br />
			<?php endforeach; endif; unset($_from); ?>
			
			<?php if (isset ( $this->_tpl_vars['deactivatedPlugins'] ) && count ( $this->_tpl_vars['deactivatedPlugins'] ) > 0): ?>
			<?php $this->assign('listOfDeactivatedPlugins', implode($this->_tpl_vars['deactivatedPlugins'], ', ')); ?>
			<p style="color:red"><img src="themes/default/images/error_medium.png" /> <?php echo ((is_array($_tmp='CoreUpdater_WeAutomaticallyDeactivatedTheFollowingPlugins')) ? $this->_run_mod_handler('translate', true, $_tmp, $this->_tpl_vars['listOfDeactivatedPlugins']) : smarty_modifier_translate($_tmp, $this->_tpl_vars['listOfDeactivatedPlugins'])); ?>
</p>
			<?php endif; ?>
		</div>
	<?php endif; ?>
	
	<?php if (count ( $this->_tpl_vars['errorMessages'] ) > 0 || count ( $this->_tpl_vars['warningMessages'] ) > 0): ?>
		<br />
		<p><?php echo ((is_array($_tmp='CoreUpdater_HelpMessageIntroductionWhenWarning')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

		<ul><li><?php echo $this->_tpl_vars['helpMessage']; ?>
</li></ul>
		</p>
	<?php else: ?>
		<p class="success"><?php echo ((is_array($_tmp='CoreUpdater_PiwikHasBeenSuccessfullyUpgraded')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</p>
	<?php endif; ?>

	<form action="index.php">
	<input type="submit" class="submit" value="<?php echo ((is_array($_tmp='CoreUpdater_ContinueToPiwik')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
" />
	</form>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CoreUpdater/templates/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>