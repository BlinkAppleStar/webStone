<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = '我的牌库列表';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile('@web/js/site.js');
?>
<div class="site-index">

    <div class="msg"></div>

    <div class="body-content" >
        <a href="<?php echo Url::to('/deck/create'); ?>" class="btn-success btn">新建牌库</a>
        <table border="1" id="content_list">
            
        </table>
    </div>

    <div class="body-content" id="pagination">
        
    </div>
</div>

<!--<a href="javascript:;" onclick="page_html(14, 2, 10)"> 测试 </a>-->
<script type="text/javascript">
window.onload = function() {
    ajax_list(1, 10);
};


/*
    删除牌库
*/
function deck_delete(id)
{
    $.get("/deck/delete",{id:id},function(ret){
        alert(ret.msg);
        if (ret.ok) {
            window.location.reload();
        }
    }, 'json');
}

/*
    渲染列表
*/
function ajax_list(page, page_size)
{
    $.get("/deck/list",
        {
            page:page,
            page_size:page_size
        },
        function(ret){
            html = '<tr>';
            html += '<th>ID</th>';
            html += '<th>名字</th>';
            html += '<th>英雄</th>';
            html += '<th>操作</th>';
            html += '</tr>';

            for (key in ret.data.list) {
                html += '<tr>';
                html += '<td>'+key+'</td>';
                html += '<td>'+ret.data.list[key]['name']+'</td>';
                html += '<td>'+'<img src="/images/en/hero/logo/'+ret.data.list[key]['career']+'.png' + '" />'+'</td>';
                html += '<td>'+'<a href="/deck/edit-index?mongo_id='+key+'" class="btn-default btn ">编辑</a>|<a href="javascript:;" onclick="deck_delete('+ "'" +key + "'" +')" class="btn-default btn ">删除</a>'+'</td>';
                html += '</tr>';
            }

            $('#content_list').html(html);

            $('#pagination').html(page_html(ret.data.total, page, page_size));
        },
        'json'
    );
}

</script>
