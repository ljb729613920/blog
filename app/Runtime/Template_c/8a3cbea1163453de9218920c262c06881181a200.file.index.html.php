<?php /* Smarty version Smarty-3.1.16, created on 2018-01-06 15:16:03
         compiled from ".\App\admin\views\article\index.html" */ ?>
<?php /*%%SmartyHeaderCode:200555a5077b332a068-91984880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a3cbea1163453de9218920c262c06881181a200' => 
    array (
      0 => '.\\App\\admin\\views\\article\\index.html',
      1 => 1515198856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200555a5077b332a068-91984880',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'v' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a5077b33be786_37552175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5077b33be786_37552175')) {function content_5a5077b33be786_37552175($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\blackhorse\\www\\blog\\frame\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>拼图后台管理-后台管理</title>
    <link rel="stylesheet" href="/public/admin/css/pintuer.css">
    <link rel="stylesheet" href="/public/admin/css/admin.css">
    <script src="/public/admin/js/jquery.js"></script>
    <script src="/public/admin/js/pintuer.js"></script>
    <script src="/public/admin/js/respond.js"></script>
    <script src="/public/admin/js/admin.js"></script>
    <script src="/public/admin/js/admin.js"></script>
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
    <link href="/favicon.ico" rel="bookmark icon" />
    <link href="/public/bootstrap/css/bootstrap-pages.css" rel="stylesheet">

</head>

<body>
<div class="lefter">
    <div class="logo"><a href="index.php?g=admin&c=index&a=index" target="_blank"><img src="/public/admin/images/logo.png" alt="后台管理系统" /></a></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("../common/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('active'=>"3",'sub'=>'3001'), 0);?>

    <div class="admin-bread">
        <span>您好，<?php echo $_SESSION['userInfo']['a_truename'];?>
，欢迎您的光临。</span>
        <ul class="bread">
            <li><a href="index.php?g=admin&c=index&a=index" class="icon-home"> 开始</a></li>
            <li>文章管理</li>
        </ul>
    </div>
    </div>
    </div>

<div class="admin">
	<form action="#" method="post">
    <div class="panel admin-panel">
    	<div class="panel-head"><strong>文章列表</strong></div>
        <div class="padding border-bottom">
            <input type="button" class="button button-small checkall" name="checkall" checkfor="id[]" value="全选" />
            <input type="button" id="btnAdd" class="button button-small border-green" value="添加文章" onclick="window.location='index.php?g=admin&c=Article&a=addUi'"/>
            <input type="button" class="button button-small border-yellow"  onclick="delRows()" value="批量删除" />
            <script type="text/javascript">
                function delRows(){
                    var ids = '';
                    var objs = document.getElementsByName('ids');
                    for(var i=0;i<objs.length;i++){
                        if (objs[i].checked) {
                            ids += objs[i].value+',';
                        }
                    }
                     window.location='index.php?g=admin&c=article&a=del&id='+ids;
                }

            </script>
            <input type="button" class="button button-small border-blue" id="trash" value="回收站"  onclick="window.location='index.php?g=admin&c=article&a=trash'"/>
        </div>
        <table class="table table-hover" id="tab">
        	<tr>
                <th width="45">选择</th>
                <th width="120">所属类别</th>
                <th width="*">文章标题</th>
                <th width="120">点击率</th>
                <th width="100">推荐</th>
                <th width="180">发布时间</th>
                <th width="100">操作</th>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <tr>
                <td><input type="checkbox" name="ids" id="ids" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['a_id'];?>
" /></td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['a_category'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['a_title'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['a_hits'];?>
</td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['v']->value['a_top']==0) {?>
                    <a class="button border-red button-little" href="index.php?g=admin&c=Article&a=recommend&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['a_id'];?>
" id="recommend">推荐</a>
                    <?php } else { ?>
                    <a class="button border-yellow button-little" href="index.php?g=admin&c=Article&a=recommend&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['a_id'];?>
">取消推荐</a>
                    <?php }?>
                </td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['a_last_time'],'Y-m-d H:i:s');?>
</td>
                <td>
                    <a class="button border-blue button-little" href="index.php?g=admin&c=article&a=modify&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['a_id'];?>
">修改</a>
                    <a class="button border-yellow button-little" href="index.php?g=admin&c=article&a=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['a_id'];?>
" onclick="return confirm('确认删除么？');">删除</a>
                </td>
            </tr>
            <?php } ?>
            <tfoot>
                <tr>
                    <td colspan='6'>
                       <div class="pagination" id='pagination'>
                            <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

                        </div>
                    </td>
                </tr>

            </tfoot>
        </table>
    </div>
    </form>
</div>

</body>
</html>
<?php }} ?>
