<?php
/* Smarty version 4.3.4, created on 2026-01-27 09:13:55
  from '/var/www/html/admin278e8gncl50mfjvppmy/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_697873c3255755_66976008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48928674d2478b440d29bcab9786a19b39f88481' => 
    array (
      0 => '/var/www/html/admin278e8gncl50mfjvppmy/themes/new-theme/template/content.tpl',
      1 => 1718360660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_697873c3255755_66976008 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
