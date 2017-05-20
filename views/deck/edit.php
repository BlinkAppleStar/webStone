<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = '编辑你的套牌';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile('@web/js/site.js');
$this->registerCssFile('@web/css/global.css');
?>
<div class="site-index">

    <div class="msg"></div>

    <div class="form-horizontal">
        <div class="form-group">
            <label class="col-lg-1 control-label">类型: </label>
            <div class="col-lg-3">
                <input type="radio" name="type" value="" onclick="ajax_list(1, 8)" checked="checked" />全部
                <?php foreach ($card_type_list as $type => $label) { ?>
                <input type="radio" name="type" value="<?php echo $type ?>" onclick="ajax_list(1, 8)" /><?php echo $label ?>
                <?php } ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-1 control-label">级别: </label>
            <div class="col-lg-3">
                <input type="radio" name="level" value="" onclick="ajax_list(1, 8)" checked="checked" />全部
                <?php foreach ($card_level_list as $type => $label) { ?>
                <input type="radio" name="level" value="<?php echo $type ?>" onclick="ajax_list(1, 8)" /><?php echo $label ?>
                <?php } ?>
            </div>
        </div>
        <input type="hidden" name="deck_id" id="deck_id" value="<?php echo $model->mongo_id->__toString() ?>" />
    </div>

    <table border="0">
        <tr>
            <td id="career_btn_1">
                <img src="/images/en/hero/career/<?php echo $model->attributes['career'] ?>.png" onclick="switch_career(1)" />
                <input type="radio" name="career" id="career_radio_1" value="<?php echo $model->attributes['career'] ?>" checked="checked" class="hide" />
            </td>
            <td id="career_btn_2">
                <img src="/images/en/hero/career/neutral.png" class="small_career_log" onclick="switch_career(2)" />
                <input type="radio" name="career" id="career_radio_2" value="neutral" class="hide" />
            </td>
        </tr>
    </table>


    <div class="body-content" >
        <table>
            <tr>
                <td>
                    <table border="1" id="card_list">

                    </table>

                    <div class="height_10"></div>
                    
                    <div class="body-content" id="pagination">
                        
                    </div>

                    <div class="height_10"></div>

                    <div class="body-content" id="mana_btns">
                        <?php for($i = 0; $i <= 7; $i++) { ?>
                        <img src="/images/mana<?php echo $i ?>.png" id="mana_<?php echo $i ?>" onclick="switch_mana('<?php echo $i ?>')" class="" />
                        <?php }?>
                        <input type="hidden" name="mana_selected" id="mana_selected" value="" />
                    </div>

                </td>
                <td width="300px">
                    
                </td>
                <td>
                    <table border="0" id="deck_card_list">

                    </table>
                </td>
            </tr>
        </table>
    </div>




</div>

<!--<a href="javascript:;" onclick="page_html(14, 2, 10)"> 测试 </a>-->
<script type="text/javascript">
window.onload = function() {
    ajax_list(1, 8);
    ajax_detail();
};

/*
    切换卡牌职业
*/
function switch_career(id)
{
    if (id == '1') {
        $('#career_btn_1 img').removeClass('small_career_log');
        $('#career_radio_1').prop('checked', true);
        $('#career_radio_2').prop('checked', false);
        $('#career_btn_2 img').addClass('small_career_log');
    } else {
        $('#career_btn_2 img').removeClass('small_career_log');
        $('#career_radio_2').prop('checked', true);
        $('#career_radio_1').prop('checked', false);
        $('#career_btn_1 img').addClass('small_career_log');
    }

    ajax_list(1, 8);
}

/*
    切换卡牌费用
*/
function switch_mana(id)
{
    if ($('#mana_'+id).hasClass('selected')) {
        $('#mana_selected').val('');
        $('#mana_'+id).attr('src', '/images/mana'+id+'.png');
        $('#mana_'+id).removeClass('selected');
    } else {
        for (var i = 0; i <= 7; i++){
            if ($('#mana_'+i).hasClass('selected')) {
                $('#mana_'+i).attr('src', '/images/mana'+i+'.png');
                $('#mana_'+i).removeClass('selected');
            }
        }
        $('#mana_selected').val(id);
        $('#mana_'+id).attr('src', '/images/mana'+id+'_selected.png');
        $('#mana_'+id).addClass('selected');
    }

    ajax_list(1, 8);
}


/*
    渲染列表
*/
function ajax_list(page, page_size)
{
    var mana = '';
    var mana_min = '';

    if ($('#mana_selected').val() == '7') {
        mana_min = 7;
    } else {
        mana = $('#mana_selected').val();
    }

    $.get("/setting/card-list",
        {
            type:$('input:radio[name="type"]:checked').val(),
            name_like:$('#name_like').val(),
            mana:mana,
            mana_min:mana_min,
            career:$('input:radio[name="career"]:checked').val(),
            level:$('input:radio[name="level"]:checked').val(),
            page:page,
            page_size:page_size
        },
        function(ret){
            var html = '';
            td_cnt = 0;
            for (key in ret.data.list) {
                if (td_cnt == 0) {
                    html += '<tr>';
                }
                html += '<td>'+'<img src="' + ret.data.list[key]['image'] + '" width="100" height="120" onclick="ajax_add_card('+ "'" + key + "'" +')" />'+'</td>';
                td_cnt++;
                if (td_cnt == 4) {
                    html += '</tr>';
                    td_cnt = 0;
                }
            }

            $('#card_list').html(html);

            $('#pagination').html(page_html(ret.data.total, page, page_size));
        },
        'json'
    );
}

/*
    刷新牌库信息
*/
function ajax_detail()
{
    $.get("/deck/detail",
        {
            id:$('#deck_id').val()
        },
        function(ret){
            if (ret.ok) {
                html = '<tr><td>'+'<input type="text" name="deck_name" id="deck_name" value="' + ret.data.name + '" />'+'</td></tr>';

                for (key in ret.data.cards) {
                    html += '<tr>';
                    html += '<td><img src="' + ret.data.cards[key].image + '" width="50" height="60" onclick="ajax_remove_card('+"'" + key + "'" +')" /></td>';
                    html += '<td>x '+ret.data.cards[key].cnt+'</td>';
                    html += '</tr>';
                }
                $('#deck_card_list').html(html);
            } else {
                alert(ret.msg);
            }
        },
        'json'
    );
}

/*
    添加卡牌到牌库
*/
function ajax_add_card(card_id)
{
    $.get("/deck/add-card",
        {
            deck_id:$('#deck_id').val(),
            card_id:card_id
        },
        function(ret){
            if (ret.ok) {
                ajax_detail();
            } else {
                alert(ret.msg);
            }
        },
        'json'
    );
}

/*
    从牌库移除卡牌
*/
function ajax_remove_card(card_id)
{
    $.get("/deck/remove-card",
        {
            deck_id:$('#deck_id').val(),
            card_id:card_id
        },
        function(ret){
            if (ret.ok) {
                ajax_detail();
            } else {
                alert(ret.msg);
            }
        },
        'json'
    );
}

</script>
