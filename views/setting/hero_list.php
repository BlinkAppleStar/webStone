<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Hero List';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">

    <div class="msg"><?php echo $error ?></div>

    <div class="body-content" >
        <a href="<?php echo Url::to('/setting/hero-edit'); ?>" target="_blank">添加</a>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>名称</th>
                <th>职业</th>
                <th>头像</th>
                <th>LOGO</th>
                <th>操作</th>
            </tr>
            <?php foreach ($list as $key => $val) { ?>
            <tr>
                <td><?php echo $key ?></td>
                <td><?php echo $val['name'] ?></td>
                <td><?php echo $career_list[$val['career']] ?></td>
                <td><img src="<?php echo $val['avatar'] ?>" /></td>
                <td><img src="<?php echo $val['logo'] ?>" /></td>
                <td>
                    <a href="<?php echo Url::to('/setting/hero-edit?mongo_id='.$key); ?>" target="_blank">编辑</a>|
                    <a href="javascript:;" onclick="hero_delete('<?php echo $key ?>')">删除</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>
<script type="text/javascript">
function hero_delete(id)
{
    $.get("/setting/hero-delete",{id:id},function(ret){
        alert(ret.msg);
    }, 'json');
}
</script>
