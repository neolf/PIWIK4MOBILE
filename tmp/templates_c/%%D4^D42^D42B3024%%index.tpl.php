<?php /* Smarty version 2.6.26, created on 2012-04-23 01:49:55
         compiled from /var/www/piwik/plugins/Widgetize/templates/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'loadJavascriptTranslations', '/var/www/piwik/plugins/Widgetize/templates/index.tpl', 4, false),array('function', 'url', '/var/www/piwik/plugins/Widgetize/templates/index.tpl', 77, false),)), $this); ?>
<?php $this->assign('showSitesSelection', true); ?>
<?php $this->assign('showPeriodSelection', true); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CoreHome/templates/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo smarty_function_loadJavascriptTranslations(array('plugins' => 'Dashboard'), $this);?>



<?php echo '
<style type="text/css">
.widgetize{ 
	width:100%; 
	padding:15px 15px 0 15px; 
	font-size:13px; 
}
.widgetize p{ 
	padding: 0 0 20px 0; 
}
.menu {
	display: inline;
}
.widgetize .formEmbedCode{
	font-size: 11px;
	text-decoration: none;
	background-color: #FBFDFF;
	border: 1px solid #ECECEC;
	width:220px;
}

#periodString {
	margin-left:15px;
}

.widgetize label {
	color:#666666;
	line-height:18px;
	margin-right:5px;
	font-weight:bold;
	padding-bottom:100px;
}

#embedThisWidgetIframe,
#embedThisWidgetFlash,
#embedThisWidgetEverywhere {
	margin-top:5px;
}

.menuSelected{
	font-weight:bold;
}
</style>
'; ?>

<script type="text/javascript">
<?php echo '
$(document).ready( function() {
	var widgetized = new widgetize();
	var dashboardUrl = document.location.protocol + \'//\' + document.location.hostname + (document.location.port == \'\' ? \'\' : (\':\' + document.location.port)) + document.location.pathname + \'?module=Widgetize&action=iframe&moduleToWidgetize=Dashboard&actionToWidgetize=index&idSite=\'+piwik.idSite+\'&period=week&date=yesterday\';
	$(\'#exportFullDashboard\').html(
		widgetized.getInputFormWithHtml( \'dashboardEmbed\', \'<iframe src="\'+ dashboardUrl +\'" frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%"></iframe>\')
	);
	$(\'#linkDashboardUrl\').attr(\'href\',dashboardUrl); 
    $(\'#widgetPreview\').widgetPreview({
        onPreviewLoaded: widgetized.callbackAddExportButtonsUnderWidget
    });
});

'; ?>

</script>

<div class="top_controls_inner">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CoreHome/templates/period_select.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<div class="widgetize">
	<p>With Piwik, you can export your Web Analytics reports on your blog, website, or intranet dashboard... in one click. 
	<p><b>&rsaquo; Widget authentication:</b> If you want your widgets to be viewable by everybody, you first have to set the 'view' permissions 
	to the anonymous user in the <a href='index.php?module=UsersManager' target='_blank'>Users Management section</a>. 
	<br />Alternatively, if you are publishing widgets on a password protected or private page, 
	you don't necessarily have to allow 'anonymous' to view your reports. In this case, you can add the secret token_auth parameter (found in the <a href='<?php echo smarty_function_url(array('module' => 'API','action' => 'listAllAPI'), $this);?>
' target='_blank'>API page</a>) in the widget URL. 
	</p>
	<p><b>&rsaquo; Widgetize the full dashboard:</b> You can also display the full Piwik dashboard in your application or website in an IFRAME (<a href='' target='_blank' id='linkDashboardUrl'>see example</a>). 
    The date parameter can be set to a specific calendar date, "today", or "yesterday".  The period parameter can be set to "day", "week", "month", or "year".
    The language parameter can be set to the language code of a translation, such as language=fr.
	For example, for idSite=1 and date=yesterday, you can write: <span id='exportFullDashboard'></span>
	</p>
	<p>	<b>&rsaquo; Select a report, and copy paste in your page the embed code below the widget:</b>
    
    <div id="widgetPreview"></div>
    
	<div id='iframeDivToExport' style='display:none;'></div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CoreHome/templates/piwik_tag.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>