<?php /* Smarty version Smarty-3.1.7, created on 2019-09-13 13:40:09
         compiled from "D:\htdocs\v71base\includes\runtime/../../layouts/v7\modules\Vtiger\dashboards\DashBoardHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12905d7b9c3992c322-44952135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ff3e8799de14a3a2939b8b20edaf78244b91184' => 
    array (
      0 => 'D:\\htdocs\\v71base\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\dashboards\\DashBoardHeader.tpl',
      1 => 1520586670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12905d7b9c3992c322-44952135',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SELECTABLE_WIDGETS' => 0,
    'WIDGET' => 0,
    'MODULE_NAME' => 0,
    'MINILISTWIDGET' => 0,
    'NOTEBOOKWIDGET' => 0,
    'MODULE_PERMISSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d7b9c399a5da',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d7b9c399a5da')) {function content_5d7b9c399a5da($_smarty_tpl) {?>

<div class='dashboardHeading container-fluid'>
	<div class="buttonGroups pull-right">
		<div class="btn-group">
			<?php if (count($_smarty_tpl->tpl_vars['SELECTABLE_WIDGETS']->value)>0){?>
				<button class='btn btn-default addButton dropdown-toggle' data-toggle='dropdown'>
					<?php echo vtranslate('LBL_ADD_WIDGET');?>
&nbsp;&nbsp;<i class="caret"></i>
				</button>

				<ul class="dropdown-menu dropdown-menu-right widgetsList pull-right" style="min-width:100%;text-align:left;">
					<?php $_smarty_tpl->tpl_vars["MINILISTWIDGET"] = new Smarty_variable('', null, 0);?>
					<?php  $_smarty_tpl->tpl_vars['WIDGET'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['WIDGET']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SELECTABLE_WIDGETS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['WIDGET']->key => $_smarty_tpl->tpl_vars['WIDGET']->value){
$_smarty_tpl->tpl_vars['WIDGET']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['WIDGET']->value->getName()=='MiniList'){?>
							<?php $_smarty_tpl->tpl_vars["MINILISTWIDGET"] = new Smarty_variable($_smarty_tpl->tpl_vars['WIDGET']->value, null, 0);?> 
						<?php }elseif($_smarty_tpl->tpl_vars['WIDGET']->value->getName()=='Notebook'){?>
							<?php $_smarty_tpl->tpl_vars["NOTEBOOKWIDGET"] = new Smarty_variable($_smarty_tpl->tpl_vars['WIDGET']->value, null, 0);?> 
						<?php }else{ ?>
							<li>
								<a onclick="Vtiger_DashBoard_Js.addWidget(this, '<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getUrl();?>
')" href="javascript:void(0);"
									data-linkid="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid');?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getName();?>
" data-width="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getWidth();?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getHeight();?>
">
									<?php echo vtranslate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a>
							</li>
						<?php }?>
					<?php } ?>

					<?php if ($_smarty_tpl->tpl_vars['MINILISTWIDGET']->value&&$_smarty_tpl->tpl_vars['MODULE_NAME']->value=='Home'){?>
						<li class="divider"></li>
						<li>
							<a onclick="Vtiger_DashBoard_Js.addMiniListWidget(this, '<?php echo $_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->getUrl();?>
')" href="javascript:void(0);"
								data-linkid="<?php echo $_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->get('linkid');?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->getName();?>
" data-width="<?php echo $_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->getWidth();?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->getHeight();?>
">
								<?php echo vtranslate($_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a>
						</li>
						<li>
							<a onclick="Vtiger_DashBoard_Js.addNoteBookWidget(this, '<?php echo $_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->getUrl();?>
')" href="javascript:void(0);"
								data-linkid="<?php echo $_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->get('linkid');?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->getName();?>
" data-width="<?php echo $_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->getWidth();?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->getHeight();?>
">
								<?php echo vtranslate($_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a>
						</li>
					<?php }?>

				</ul>
			<?php }elseif($_smarty_tpl->tpl_vars['MODULE_PERMISSION']->value){?>
				<button class='btn btn-default addButton dropdown-toggle' disabled="disabled" data-toggle='dropdown'>
					<strong><?php echo vtranslate('LBL_ADD_WIDGET');?>
</strong> &nbsp;&nbsp;
					<i class="caret"></i>
				</button>
			<?php }?>
		</div>
	</div>
</div>
<?php }} ?>