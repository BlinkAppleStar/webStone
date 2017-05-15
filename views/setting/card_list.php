<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Card List';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile('@web/js/site.js');
?>
<div class="site-index">

    <div class="msg"><?php echo $error ?></div>

    <div class="form-horizontal">
        <div class="form-group">
            <label class="col-lg-1 control-label">ID: </label>
            <div class="col-lg-3">
                <input type="text" name="mongo_id" id="mongo_id" value="" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-1 control-label">类型: </label>
            <div class="col-lg-3">
                <select name="type" id="type">
                    <option value="" />全部
                    <?php foreach ($type_list as $key => $val) { ?>
                    <option value="<?php echo $key ?>" /><?php echo $val ?>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-1 control-label">名称: </label>
            <div class="col-lg-3">
                <input type="text" name="name_like" id="name_like" value="" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-1 control-label">法力值: </label>
            <div class="col-lg-3">
                <input type="text" name="mana" id="mana" value="" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-1 control-label">职业: </label>
            <div class="col-lg-3">
                <select name="career" id="career">
                    <option value="" />全部
                    <?php foreach ($career_list as $key => $val) { ?>
                    <option value="<?php echo $key ?>" /><?php echo $val ?>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-1 control-label">级别: </label>
            <div class="col-lg-3">
                <input type="text" name="level" id="level" value="" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-1 control-label"> </label>
            <div class="col-lg-3">
                <a href="javascript:;" onclick="ajax_list(1, 3)" class="btn-primary btn ">搜 索</a>
            </div>
        </div>
    </div>

    <div class="body-content" >
        <a href="<?php echo Url::to('/setting/card-edit'); ?>" target="_blank" class="btn-success btn">添加</a>
        <table border="1" id="content_list">
            <tr>
                <th>ID</th>
                <th>图片</th>
                <th>名称</th>
                <th>职业</th>
                <th>类型</th>
                <th>消耗</th>
                <th>伤害</th>
                <th>血量</th>
                <th>级别</th>
                <th>操作</th>
            </tr>
        </table>
    </div>

    <div class="body-content" id="pagination">
        
    </div>
</div>

<!--<a href="javascript:;" onclick="page_html(14, 2, 10)"> 测试 </a>-->
<script type="text/javascript">
window.onload = function() {
    ajax_hero_career_list();
    ajax_card_type_list();
    ajax_card_level_list();
};


/*
    删除卡牌
*/
function card_delete(id)
{
    $.get("/setting/card-delete",{id:id},function(ret){
        alert(ret.msg);
    }, 'json');
}

/*
    获取英雄职业
*/
var hero_career_list = [];
function ajax_hero_career_list()
{
    $.get("/setting/hero-career-list",{},function(ret){
        hero_career_list = ret.data;
    }, 'json');
}

/*
    获取卡牌法术类型
*/
var card_type_list = [];
function ajax_card_type_list()
{
    $.get("/setting/card-type-list",{},function(ret){
        card_type_list = ret.data;
    }, 'json');
}

/*
    获取卡牌级别
*/
var card_level_list = [];
function ajax_card_level_list()
{
    $.get("/setting/card-level-list",{},function(ret){
        card_level_list = ret.data;
    }, 'json');
}

/*
    渲染列表
*/
function ajax_list(page, page_size)
{
    $.get("/setting/card-list",
        {
            mongo_id:$('#mongo_id').val(),
            type:$('#type').val(),
            name_like:$('#name_like').val(),
            mana:$('#mana').val(),
            career:$('#career').val(),
            level:$('#level').val(),
            page:page,
            page_size:page_size
        },
        function(ret){
            html = '<tr>';
            html += '<th>ID</th>';
            html += '<th>图片</th>';
            html += '<th>名称</th>';
            html += '<th>职业</th>';
            html += '<th>类型</th>';
            html += '<th>消耗</th>';
            html += '<th>伤害</th>';
            html += '<th>血量</th>';
            html += '<th>级别</th>';
            html += '<th>操作</th>';
            html += '</tr>';

            for (key in ret.data.list) {
                html += '<tr>';
                html += '<td>'+key+'</td>';
                html += '<td>'+'<img src="' + ret.data.list[key]['image'] + '" width="80" height="100" />'+'</td>';
                html += '<td>'+ret.data.list[key]['name']+'</td>';
                html += '<td>'+hero_career_list[ret.data.list[key]['career']]+'</td>';
                html += '<td>'+card_type_list[ret.data.list[key]['type']]+'</td>';
                html += '<td>'+ret.data.list[key]['mana']+'</td>';
                html += '<td>'+ret.data.list[key]['damage']+'</td>';
                html += '<td>'+ret.data.list[key]['hp']+'</td>';
                html += '<td>'+card_level_list[ret.data.list[key]['level']]+'</td>';
                html += '<td>'+'<a href="/setting/card-edit?mongo_id='+key+'" target="_blank" class="btn-default btn ">编辑</a>|<a href="javascript:;" onclick="card_delete('+key+')" class="btn-default btn ">删除</a>'+'</td>';
                html += '</tr>';
            }

            $('#content_list').html(html);

            $('#pagination').html(page_html(ret.data.total, page, page_size));
        },
        'json'
    );
}

</script>
