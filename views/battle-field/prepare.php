<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = '选择保留的卡牌';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile('@web/js/site.js');
$this->registerCssFile('@web/css/global.css');
?>
<div class="site-index">

    <div class="body-content" >
        <table id="card_list">

        </table>
        <a href="javascript:;" onclick="ws_init_deck()" class="btn-success btn">提 交</a>
        <input type="hidden" name="uid" id="uid" value="<?php echo Yii::$app->user->id ?>"/>
    </div>

</div>

<script type="text/javascript">
window.onload = function() {
    ajax_list();
};

function ajax_list()
{
    $.get("/battle-field/init-handing-cards",
        {

        },
        function(ret){
            if (ret.ok) {
                var html = '<tr>';
                for (i in ret.data) {
                    html += '<td>';
                    html += '<img src="' + ret.data[i]['image'] + '" width="100" height="120" />';
                    html += '<input type="checkbox" value="'+ ret.data[i]['_id'] +'" name="remaining_cards" checked="checked" />';
                    html += '</td>';
                }
                html += '</tr>';
                $('#card_list').html(html);
            }

        },
        'json'
    );
}

var ws = new WebSocket("ws://127.0.0.1:2346");
ws.onopen = function() {
    //alert("连接成功");
    ws.send('{"action":"update_connection", "uid":"'+$('#uid').val()+'"}');
};

ws.onmessage = function(e) {
    var ret_msg = eval('(' + e.data + ')');
    //alert(ret_msg.request.action);
    switch (ret_msg.request.action) {
        case 'update_connection':
            if (!ret_msg.ok) {
                alert(ret_msg.msg);
            }
            break;
        case 'user_init_deck':
            if (!ret_msg.ok) {
                alert(ret_msg.msg);
            } else {
                if (ret_msg.data == 'waiting') {
                    // disable click
                    alert(ret_msg.msg);
                } else {
                    window.location = '/battle-field/index';
                }
            }
            break;
        default:
            alert('websocket return handle failed');
            break;
    }
};

ws.onclose = function() {

};

function ws_init_deck()
{
    var remain_cards = [];
    $('[name="remaining_cards"][checked]').each(function () {
        remain_cards.push($(this).val());
    });

    ws.send('{"action":"user_init_deck", "uid":"' + $('#uid').val() + '", "remaining_cards":'+ window.JSON.stringify(remain_cards) +'}');

//    $.get("/battle-field/init-deck",
//        {
//            'remaining_cards':window.JSON.stringify(remain_cards)
//        },
//        function(ret){
//
//        },
//        'json'
//    );

}

</script>
