<?php /* Smarty version 2.6.26, created on 2012-04-20 13:54:25
         compiled from MultiSites/templates/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'MultiSites/templates/index.tpl', 11, false),array('modifier', 'replace', 'MultiSites/templates/index.tpl', 11, false),array('modifier', 'translate', 'MultiSites/templates/index.tpl', 21, false),array('function', 'postEvent', 'MultiSites/templates/index.tpl', 27, false),array('function', 'url', 'MultiSites/templates/index.tpl', 80, false),)), $this); ?>
<?php $this->assign('showSitesSelection', false); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CoreHome/templates/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="multisites">
<div id="main">
<?php ob_start();
$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "MultiSites/templates/row.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
$this->assign('row', ob_get_contents()); ob_end_clean();
 ?>
<script type="text/javascript">
	var allSites = new Array();
	var params = new Array();
	<?php $_from = $this->_tpl_vars['sitesData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['site']):
?>
		allSites[<?php echo $this->_tpl_vars['i']; ?>
] = new setRowData(<?php echo $this->_tpl_vars['site']['idsite']; ?>
, <?php echo $this->_tpl_vars['site']['visits']; ?>
, <?php echo $this->_tpl_vars['site']['actions']; ?>
, <?php if (empty ( $this->_tpl_vars['site']['revenue'] )): ?>0<?php else: ?><?php echo $this->_tpl_vars['site']['revenue']; ?>
<?php endif; ?>, '<?php echo ((is_array($_tmp=$this->_tpl_vars['site']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['site']['main_url'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
', '<?php if (isset ( $this->_tpl_vars['site']['visits_evolution'] )): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['site']['visits_evolution'])) ? $this->_run_mod_handler('replace', true, $_tmp, ",", ".") : smarty_modifier_replace($_tmp, ",", ".")); ?>
<?php endif; ?>', '<?php if (isset ( $this->_tpl_vars['site']['actions_evolution'] )): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['site']['actions_evolution'])) ? $this->_run_mod_handler('replace', true, $_tmp, ",", ".") : smarty_modifier_replace($_tmp, ",", ".")); ?>
<?php endif; ?>', '<?php if (isset ( $this->_tpl_vars['site']['revenue_evolution'] )): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['site']['revenue_evolution'])) ? $this->_run_mod_handler('replace', true, $_tmp, ",", ".") : smarty_modifier_replace($_tmp, ",", ".")); ?>
<?php endif; ?>');
	<?php endforeach; endif; unset($_from); ?>
	params['period'] = '<?php echo $this->_tpl_vars['period']; ?>
';
	params['date'] = '<?php echo $this->_tpl_vars['dateRequest']; ?>
';
	params['evolutionBy'] = '<?php echo $this->_tpl_vars['evolutionBy']; ?>
';
	params['mOrderBy'] = '<?php echo $this->_tpl_vars['orderBy']; ?>
';
	params['order'] = '<?php echo $this->_tpl_vars['order']; ?>
';
	params['site'] = '<?php echo $this->_tpl_vars['site']; ?>
';
	params['limit'] = '<?php echo $this->_tpl_vars['limit']; ?>
';
	params['page'] = 1;
	params['prev'] = "<?php echo ((is_array($_tmp=((is_array($_tmp='General_Previous')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
";
	params['next'] = "<?php echo ((is_array($_tmp=((is_array($_tmp='General_Next')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
";
	params['row'] = '<?php echo ((is_array($_tmp=$this->_tpl_vars['row'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
';
	params['dateSparkline'] = '<?php echo $this->_tpl_vars['dateSparkline']; ?>
';
</script>

<?php echo smarty_function_postEvent(array('name' => 'template_headerMultiSites'), $this);?>


<div class="top_controls_inner">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CoreHome/templates/period_select.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CoreHome/templates/header_message.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<div class="centerLargeDiv">

<h2><?php echo ((is_array($_tmp='General_AllWebsitesDashboard')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
 
	<span class='smallTitle'><?php echo ((is_array($_tmp='General_TotalVisitsActionsRevenue')) ? $this->_run_mod_handler('translate', true, $_tmp, "<strong>".($this->_tpl_vars['totalVisits'])."</strong>", "<strong>".($this->_tpl_vars['totalActions'])."</strong>", "<strong>".($this->_tpl_vars['totalRevenue'])."</strong>") : smarty_modifier_translate($_tmp, "<strong>".($this->_tpl_vars['totalVisits'])."</strong>", "<strong>".($this->_tpl_vars['totalActions'])."</strong>", "<strong>".($this->_tpl_vars['totalRevenue'])."</strong>")); ?>
</span>
</h2>

<table id="mt" class="dataTable" cellspacing="0">
	<thead>
	<tr>
		<th id="names" class="label" onClick="params = setOrderBy(this,allSites, params, 'names');">
			<span><?php echo ((is_array($_tmp='General_Website')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</span>
			<span class="arrow <?php if ($this->_tpl_vars['evolutionBy'] == 'names'): ?>multisites_<?php echo $this->_tpl_vars['order']; ?>
<?php endif; ?>"></span>
		</th>
		<th id="visits" class="multisites-column" style="width: 100px" onClick="params = setOrderBy(this,allSites, params, 'visits');">
			<span><?php echo ((is_array($_tmp='General_ColumnNbVisits')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</span>
			<span class="arrow <?php if ($this->_tpl_vars['evolutionBy'] == 'visits'): ?>multisites_<?php echo $this->_tpl_vars['order']; ?>
<?php endif; ?>"></span>
		</th>
		<th id="actions" class="multisites-column" style="width: 110px" onClick="params = setOrderBy(this,allSites, params, 'actions');">
			<span><?php echo ((is_array($_tmp='General_ColumnPageviews')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</span>
			<span class="arrow <?php if ($this->_tpl_vars['evolutionBy'] == 'actions'): ?>multisites_<?php echo $this->_tpl_vars['order']; ?>
<?php endif; ?>"></span>
		</th>
		<?php if ($this->_tpl_vars['displayRevenueColumn']): ?>
		<th id="revenue" class="multisites-column" style="width: 110px" onClick="params = setOrderBy(this,allSites, params, 'revenue');">
			<span><?php echo ((is_array($_tmp='Goals_ColumnRevenue')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</span>
			<span class="arrow <?php if ($this->_tpl_vars['evolutionBy'] == 'revenue'): ?>multisites_<?php echo $this->_tpl_vars['order']; ?>
<?php endif; ?>"></span>
		</th>
		<?php endif; ?>
		<th id="evolution" style=" width:350px" colspan="<?php if ($this->_tpl_vars['show_sparklines']): ?>2<?php else: ?>1<?php endif; ?>">
		<span class="arrow "></span>
			<span class="evolution" style="cursor:pointer;" onClick="params = setOrderBy(this,allSites, params, $('#evolution_selector').val() + 'Summary');"> <?php echo ((is_array($_tmp='MultiSites_Evolution')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</span>
			<select class="selector" id="evolution_selector" onchange="params['evolutionBy'] = $('#evolution_selector').val(); switchEvolution(params);">
				<option value="visits" <?php if ($this->_tpl_vars['evolutionBy'] == 'visits'): ?> selected <?php endif; ?>><?php echo ((is_array($_tmp='General_ColumnNbVisits')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</option>
				<option value="actions" <?php if ($this->_tpl_vars['evolutionBy'] == 'actions'): ?> selected <?php endif; ?>><?php echo ((is_array($_tmp='General_ColumnPageviews')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</option>
				<?php if ($this->_tpl_vars['displayRevenueColumn']): ?><option value="revenue" <?php if ($this->_tpl_vars['evolutionBy'] == 'revenue'): ?> selected <?php endif; ?>><?php echo ((is_array($_tmp='Goals_ColumnRevenue')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</option><?php endif; ?>
			</select>
		</th>
	</tr>
	</thead>

	<tbody id="tb">
	</tbody>

	<tfoot>
	<?php if ($this->_tpl_vars['isSuperUser']): ?>
	<tr>
		<td colspan="8" class="clean" style="text-align: right; padding-top: 15px;padding-right:10px">
			<a href="<?php echo smarty_function_url(array(), $this);?>
&module=SitesManager&action=index&showaddsite=1"><img src='plugins/UsersManager/images/add.png' alt="" style="margin: 0;" /> <?php echo ((is_array($_tmp='SitesManager_AddSite')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a>
		</td>
	</tr>
	<?php endif; ?>
	<tr row_id="last" >
		<td colspan="8" class="clean" style="padding: 20px">
		<span id="prev" class="pager"  style="padding-right: 20px;"></span>
		<span class="dataTablePages">
			<span id="counter">
		</span>
		</span>
		<span id="next" class="clean" style="padding-left: 20px;"></span>
	</td>
	</tr>
	</tfoot>
</table>
</div>
<script type="text/javascript">
prepareRows(allSites, params, '<?php echo $this->_tpl_vars['orderBy']; ?>
');

<?php if ($this->_tpl_vars['autoRefreshTodayReport']): ?>
piwikHelper.refreshAfter(<?php echo $this->_tpl_vars['autoRefreshTodayReport']; ?>
 *1000);
<?php endif; ?>
</script>
</div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CoreHome/templates/piwik_tag.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

</div>
</body>
</html>