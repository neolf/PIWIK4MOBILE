<?php /* Smarty version 2.6.26, created on 2012-04-20 12:30:50
         compiled from /var/www/piwik/plugins/CoreAdminHome/templates/generalSettings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'loadJavascriptTranslations', '/var/www/piwik/plugins/CoreAdminHome/templates/generalSettings.tpl', 4, false),array('function', 'ajaxErrorDiv', '/var/www/piwik/plugins/CoreAdminHome/templates/generalSettings.tpl', 9, false),array('function', 'ajaxLoadingDiv', '/var/www/piwik/plugins/CoreAdminHome/templates/generalSettings.tpl', 10, false),array('function', 'math', '/var/www/piwik/plugins/CoreAdminHome/templates/generalSettings.tpl', 152, false),array('function', 'url', '/var/www/piwik/plugins/CoreAdminHome/templates/generalSettings.tpl', 170, false),array('modifier', 'translate', '/var/www/piwik/plugins/CoreAdminHome/templates/generalSettings.tpl', 7, false),array('modifier', 'inlineHelp', '/var/www/piwik/plugins/CoreAdminHome/templates/generalSettings.tpl', 32, false),array('modifier', 'escape', '/var/www/piwik/plugins/CoreAdminHome/templates/generalSettings.tpl', 76, false),)), $this); ?>
<?php $this->assign('showSitesSelection', false); ?>
<?php $this->assign('showPeriodSelection', false); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CoreAdminHome/templates/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo smarty_function_loadJavascriptTranslations(array('plugins' => 'UsersManager'), $this);?>


<?php if ($this->_tpl_vars['isSuperUser']): ?>
<h2><?php echo ((is_array($_tmp='General_GeneralSettings')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h2>

<?php echo smarty_function_ajaxErrorDiv(array('id' => 'ajaxError'), $this);?>

<?php echo smarty_function_ajaxLoadingDiv(array('id' => 'ajaxLoading'), $this);?>


<table class="adminTable" style='width:900px;'>
<tr>
	<td style='width:400px'><?php echo ((is_array($_tmp='General_AllowPiwikArchivingToTriggerBrowser')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
	<td style='width:220px'>
	<fieldset>
		<label><input type="radio" value="1" name="enableBrowserTriggerArchiving"<?php if ($this->_tpl_vars['enableBrowserTriggerArchiving'] == 1): ?> checked="checked"<?php endif; ?> />
			<?php echo ((is_array($_tmp='General_Yes')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
 <br />
			<span class="form-description"><?php echo ((is_array($_tmp='General_Default')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</span>
		</label><br /><br />

		<label><input type="radio" value="0" name="enableBrowserTriggerArchiving"<?php if ($this->_tpl_vars['enableBrowserTriggerArchiving'] == 0): ?> checked="checked"<?php endif; ?> />
			<?php echo ((is_array($_tmp='General_No')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
 <br />
			<span class="form-description"><?php echo ((is_array($_tmp='General_ArchivingTriggerDescription')) ? $this->_run_mod_handler('translate', true, $_tmp, "<a href='?module=Proxy&action=redirect&url=http://piwik.org/docs/setup-auto-archiving/' target='_blank'>", "</a>") : smarty_modifier_translate($_tmp, "<a href='?module=Proxy&action=redirect&url=http://piwik.org/docs/setup-auto-archiving/' target='_blank'>", "</a>")); ?>
</span>
		</label>
	</fieldset>
	<td>
	<?php ob_start(); ?>
		<?php echo ((is_array($_tmp='General_ArchivingInlineHelp')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
<br />
		<?php echo ((is_array($_tmp='General_SeeTheOfficialDocumentationForMoreInformation')) ? $this->_run_mod_handler('translate', true, $_tmp, "<a href='?module=Proxy&action=redirect&url=http://piwik.org/docs/setup-auto-archiving/' target='_blank'>", "</a>") : smarty_modifier_translate($_tmp, "<a href='?module=Proxy&action=redirect&url=http://piwik.org/docs/setup-auto-archiving/' target='_blank'>", "</a>")); ?>

	<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('browserArchivingHelp', ob_get_contents());ob_end_clean(); ?>
	<?php echo ((is_array($_tmp=$this->_tpl_vars['browserArchivingHelp'])) ? $this->_run_mod_handler('inlineHelp', true, $_tmp) : smarty_modifier_inlineHelp($_tmp)); ?>

	</td>
</tr>
<tr>
	<td><label for="todayArchiveTimeToLive"><?php echo ((is_array($_tmp='General_ReportsContainingTodayWillBeProcessedAtMostEvery')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</label></td>
	<td>
		<?php echo ((is_array($_tmp='General_NSeconds')) ? $this->_run_mod_handler('translate', true, $_tmp, "<input size='3' value='".($this->_tpl_vars['todayArchiveTimeToLive'])."' id='todayArchiveTimeToLive' />") : smarty_modifier_translate($_tmp, "<input size='3' value='".($this->_tpl_vars['todayArchiveTimeToLive'])."' id='todayArchiveTimeToLive' />")); ?>

	</td>
	<td width='450px'>
	<?php ob_start(); ?>
		<?php if ($this->_tpl_vars['showWarningCron']): ?>
			<strong>
			<?php echo ((is_array($_tmp='General_NewReportsWillBeProcessedByCron')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
<br/>
			<?php echo ((is_array($_tmp='General_ReportsWillBeProcessedAtMostEveryHour')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

			<?php echo ((is_array($_tmp='General_IfArchivingIsFastYouCanSetupCronRunMoreOften')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
<br/>
			</strong>
		<?php endif; ?>
		<?php echo ((is_array($_tmp='General_SmallTrafficYouCanLeaveDefault')) ? $this->_run_mod_handler('translate', true, $_tmp, 10) : smarty_modifier_translate($_tmp, 10)); ?>
<br />
		<?php echo ((is_array($_tmp='General_MediumToHighTrafficItIsRecommendedTo')) ? $this->_run_mod_handler('translate', true, $_tmp, 1800, 3600) : smarty_modifier_translate($_tmp, 1800, 3600)); ?>

	<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('archiveTodayTTLHelp', ob_get_contents());ob_end_clean(); ?>
	<?php echo ((is_array($_tmp=$this->_tpl_vars['archiveTodayTTLHelp'])) ? $this->_run_mod_handler('inlineHelp', true, $_tmp) : smarty_modifier_inlineHelp($_tmp)); ?>

	</td>
</tr>
</table>

<h2><?php echo ((is_array($_tmp='CoreAdminHome_EmailServerSettings')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h2>
<div id='emailSettings'>
<table class="adminTable" style='width:600px;'>
	<tr>
		<td><?php echo ((is_array($_tmp='General_UseSMTPServerForEmail')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
<br />
			<span class="form-description"><?php echo ((is_array($_tmp='General_SelectYesIfYouWantToSendEmailsViaServer')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</span>
		</td>
		<td style='width:200px'>
			<label><input type="radio" name="mailUseSmtp" value="1" <?php if ($this->_tpl_vars['mail']['transport'] == 'smtp'): ?> checked <?php endif; ?>/> <?php echo ((is_array($_tmp='General_Yes')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</label>
			<label><input type="radio" name="mailUseSmtp" value="0" style ="margin-left:20px;" <?php if ($this->_tpl_vars['mail']['transport'] == ''): ?> checked <?php endif; ?>/>  <?php echo ((is_array($_tmp='General_No')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</label> 
		</td>
	</tr>
</table>
</div>

<div id='smtpSettings'>
	<table class="adminTable" style='width:550px;'>
		<tr>
			<td><label for="mailHost"><?php echo ((is_array($_tmp='General_SmtpServerAddress')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</label></td>
			<td style='width:200px'><input type="text" id="mailHost" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['mail']['host'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"></td>
		</tr>
		<tr>
			<td><label for="mailPort"><?php echo ((is_array($_tmp='General_SmtpPort')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</label><br />
				<span class="form-description"><?php echo ((is_array($_tmp='General_OptionalSmtpPort')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</span></td>
			<td><input type="text" id="mailPort" value="<?php echo $this->_tpl_vars['mail']['port']; ?>
"></td>
		</tr>
		<tr>
			<td><label for="mailType"><?php echo ((is_array($_tmp='General_AuthenticationMethodSmtp')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</label><br />
				<span class="form-description"><?php echo ((is_array($_tmp='General_OnlyUsedIfUserPwdIsSet')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</span>
			</td>
			<td>
				<select id="mailType">
					<option value="" <?php if ($this->_tpl_vars['mail']['type'] == ''): ?> selected="selected" <?php endif; ?>></option>
					<option id="plain" <?php if ($this->_tpl_vars['mail']['type'] == 'Plain'): ?> selected="selected" <?php endif; ?> value="Plain">Plain</option>
					<option id="login" <?php if ($this->_tpl_vars['mail']['type'] == 'Login'): ?> selected="selected" <?php endif; ?> value="Login"> Login</option>
					<option id="cram-md5" <?php if ($this->_tpl_vars['mail']['type'] == 'Crammd5'): ?> selected="selected" <?php endif; ?> value="Crammd5"> Crammd5</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><label for="mailUsername"><?php echo ((is_array($_tmp='General_SmtpUsername')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</label><br />
				<span class="form-description"><?php echo ((is_array($_tmp='General_OnlyEnterIfRequired')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</span></td>
			<td>
				<input type="text" id="mailUsername" value = "<?php echo ((is_array($_tmp=$this->_tpl_vars['mail']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
			</td>
		</tr>
		<tr>
			<td><label for="mailPassword"><?php echo ((is_array($_tmp='General_SmtpPassword')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</label><br />
				<span class="form-description"><?php echo ((is_array($_tmp='General_OnlyEnterIfRequiredPassword')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
<br/>
				<?php echo ((is_array($_tmp='General_WarningPasswordStored')) ? $this->_run_mod_handler('translate', true, $_tmp, "<strong>", "</strong>") : smarty_modifier_translate($_tmp, "<strong>", "</strong>")); ?>
</span>
			</td>
			<td>
				<input type="password" id="mailPassword" value = "<?php echo ((is_array($_tmp=$this->_tpl_vars['mail']['password'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
			</td>
		</tr>
		<tr>
			<td><label for="mailEncryption"><?php echo ((is_array($_tmp='General_SmtpEncryption')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</label><br />
				<span class="form-description"><?php echo ((is_array($_tmp='General_EncryptedSmtpTransport')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</span></td>
			<td>
				<select id="mailEncryption">
					<option value="" <?php if ($this->_tpl_vars['mail']['encryption'] == ''): ?> selected="selected" <?php endif; ?>></option>
					<option id="ssl" <?php if ($this->_tpl_vars['mail']['encryption'] == 'ssl'): ?> selected="selected" <?php endif; ?> value="ssl">SSL</option>
					<option id="tls" <?php if ($this->_tpl_vars['mail']['encryption'] == 'tls'): ?> selected="selected" <?php endif; ?> value="tls">TLS</option>
				</select>
			</td>
		</tr>
	</table>
</div>

<h2><?php echo ((is_array($_tmp='CoreAdminHome_BrandingSettings')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h2>
<div id='brandSettings'>
<?php echo ((is_array($_tmp='CoreAdminHome_CustomLogoHelpText')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

<table class="adminTable" style='width:600px;'>
    <tr>
        <td> <?php echo ((is_array($_tmp='CoreAdminHome_UseCustomLogo')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
        <td style='width:200px'>
            <label><input type="radio" name="useCustomLogo" value="1" <?php if ($this->_tpl_vars['branding']['use_custom_logo'] == 1): ?> checked <?php endif; ?>/> <?php echo ((is_array($_tmp='General_Yes')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</label>
            <label><input type="radio" name="useCustomLogo" value="0" style ="margin-left:20px;" <?php if ($this->_tpl_vars['branding']['use_custom_logo'] == 0): ?> checked <?php endif; ?>/>  <?php echo ((is_array($_tmp='General_No')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</label>
        </td>
    </tr>
</table>
</div>
<div id='logoSettings'>
	<?php ob_start(); ?>"<?php echo ((is_array($_tmp='General_GiveUsYourFeedback')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('giveUsFeedbackText', ob_get_contents());ob_end_clean(); ?>
    <?php ob_start(); ?>
        <?php echo ((is_array($_tmp='CoreAdminHome_CustomLogoFeedbackInfo')) ? $this->_run_mod_handler('translate', true, $_tmp, $this->_tpl_vars['giveUsFeedbackText'], "<a href='?module=CorePluginsAdmin&action=index' target='_blank'>", "</a>") : smarty_modifier_translate($_tmp, $this->_tpl_vars['giveUsFeedbackText'], "<a href='?module=CorePluginsAdmin&action=index' target='_blank'>", "</a>")); ?>

    <?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('customLogoHelp', ob_get_contents());ob_end_clean(); ?>
    <?php echo ((is_array($_tmp=$this->_tpl_vars['customLogoHelp'])) ? $this->_run_mod_handler('inlineHelp', true, $_tmp) : smarty_modifier_inlineHelp($_tmp)); ?>

    <form id="logoUploadForm" method="post" enctype="multipart/form-data" action="index.php?module=CoreAdminHome&format=json&action=uploadCustomLogo">
    <table class="adminTable" style='width:550px;'>
        <tr>
            <?php if ($this->_tpl_vars['logosWriteable']): ?>
            <td><label for="customLogo"><?php echo ((is_array($_tmp='CoreAdminHome_LogoUpload')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
:<br />
                <span class="form-description"><?php echo ((is_array($_tmp='CoreAdminHome_LogoUploadDescription')) ? $this->_run_mod_handler('translate', true, $_tmp, "JPG / PNG / GIF", 110) : smarty_modifier_translate($_tmp, "JPG / PNG / GIF", 110)); ?>
</span></label></td>
            <td style='width:200px'>
            <input name="customLogo" type="file" id="customLogo" /><img src="themes/logo.png?r=<?php echo smarty_function_math(array('equation' => 'rand(10,1000)'), $this);?>
" id="currentLogo" height="150"/>
            </td>
            <?php else: ?>
            <td><span class="ajaxSuccess"><?php echo ((is_array($_tmp='CoreAdminHome_LogoNotWriteable')) ? $this->_run_mod_handler('translate', true, $_tmp, "<ul style='list-style: disc inside;'><li>/themes/</li><li>/themes/logo.png</li><li>/themes/logo-header.png</li></ul>") : smarty_modifier_translate($_tmp, "<ul style='list-style: disc inside;'><li>/themes/</li><li>/themes/logo.png</li><li>/themes/logo-header.png</li></ul>")); ?>
</span></td>
            <?php endif; ?>
        </tr>
    </table>
    </form>
</div>

<input type="submit" value="<?php echo ((is_array($_tmp='General_Save')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
" id="generalSettingsSubmit" class="submit" />
<br /><br />

<?php ob_start(); ?><?php echo ((is_array($_tmp='PrivacyManager_DeleteLogSettings')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('clickDeleteLogSettings', ob_get_contents());ob_end_clean(); ?>
<h2><?php echo ((is_array($_tmp='PrivacyManager_DeleteLogSettings')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h2>
<p>
	<?php echo ((is_array($_tmp='PrivacyManager_DeleteLogDescription')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

<br/>
	<a href='<?php echo smarty_function_url(array('module' => 'PrivacyManager','action' => 'privacySettings'), $this);?>
#deleteLogsAnchor'>
		<?php echo ((is_array($_tmp='PrivacyManager_ClickHereSettings')) ? $this->_run_mod_handler('translate', true, $_tmp, "'".($this->_tpl_vars['clickDeleteLogSettings'])."'") : smarty_modifier_translate($_tmp, "'".($this->_tpl_vars['clickDeleteLogSettings'])."'")); ?>

	</a>
</p>
<?php endif; ?>
<h2><?php echo ((is_array($_tmp='CoreAdminHome_OptOutForYourVisitors')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h2>

<p><?php echo ((is_array($_tmp='CoreAdminHome_OptOutExplanation')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

<?php ob_start(); ?><?php echo $this->_tpl_vars['piwikUrl']; ?>
index.php?module=CoreAdminHome&action=optOut&language=<?php echo $this->_tpl_vars['language']; ?>
<?php $this->_smarty_vars['capture']['optOutUrl'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('optOutUrl', $this->_smarty_vars['capture']['optOutUrl']); ?>
<?php ob_start(); ?><iframe frameborder="no" width="600px" height="200px" src="<?php echo $this->_smarty_vars['capture']['optOutUrl']; ?>
"></iframe><?php $this->_smarty_vars['capture']['iframeOptOut'] = ob_get_contents(); ob_end_clean(); ?>
<code><?php echo ((is_array($_tmp=$this->_smarty_vars['capture']['iframeOptOut'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</code>
<br/>
<?php echo ((is_array($_tmp='CoreAdminHome_OptOutExplanationBis')) ? $this->_run_mod_handler('translate', true, $_tmp, "<a href='".($this->_tpl_vars['optOutUrl'])."' target='_blank'>", "</a>") : smarty_modifier_translate($_tmp, "<a href='".($this->_tpl_vars['optOutUrl'])."' target='_blank'>", "</a>")); ?>

</p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CoreAdminHome/templates/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>