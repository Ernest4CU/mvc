<?php
/* Smarty version 3.1.29, created on 2016-04-22 04:47:19
  from "D:\Program Files\wamp\www\mvc\tpl\test.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571990b7882ea7_39594178',
  'file_dependency' => 
  array (
    '2754861e2d8f230f567d8b21e1e83fb3c7b33e8a' => 
    array (
      0 => 'D:\\Program Files\\wamp\\www\\mvc\\tpl\\test.tpl',
      1 => 1461293238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571990b7882ea7_39594178 ($_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>MVC</title>
		<style type="text/css">
		h1{
			color:red;
			text-align:center;
			background-color:blue;
		}
		p{
			font-size:50px;	
		}
		</style>
    </head>
    <body>
        <h1>温度实时发布</h1>
		<p>实时温度：</p><p><?php echo $_smarty_tpl->tpl_vars['str']->value;?>
</p>
		show();
		<?php echo '<?php
		';?>function show(){
			echo "php测试"；
		}
		<?php echo '?>';?>
    </body>
</html><?php }
}
