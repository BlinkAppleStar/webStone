<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = '你的对阵战场';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile('@web/js/site.js');
$this->registerCssFile('@web/css/global.css');
?>
<div class="site-index">

    <div class="form-horizontal">
        <div class="form-group">
            <span id="opponent_player"></span>
        </div>
    </div>

    <div class="body-content" >
        <table>
            <tr>
                <td width="500" colspan="2">
                    <table border="1" id="opponent_handing_cards">

                    </table>
                </td>
                <td width="300">
                    <table border="1" id="opponent_mana">

                    </table>
                </td>
                <td id="opponent_weapon">
                    
                </td>
                <td id="opponent_hero">
                    
                </td>
                <td id="opponent_hero_skill">
                    
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <table border="1" id="opponent_minion_holder" height="200">
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <table border="1" id="my_minion_holder" height="200">
                    </table>
                </td>
            </tr>
            <tr>
                <td width="500" colspan="2">
                    <table border="1" id="my_handing_cards">

                    </table>
                </td>
                <td width="300">
                    <table border="1" id="my_mana">
                    </table>
                </td>
                <td id="my_weapon">
                </td>
                <td id="my_hero">
                </td>
                <td id="my_hero_skill">
                </td>
            </tr>
        </table>
    </div>
    <a href="javascript:;" id="end_turn_btn" class="btn-success btn" onclick="end_my_turn()">结束回合</a>
    <a href="javascript:;" id="waiting_turn_btn" class="btn-warning btn"  >对手回合</a>
    <input type="hidden" name="uid" id="uid" value="<?php echo Yii::$app->user->id ?>"/>
    <!--<a href="javascript:;" id="test_draw_card_btn" onclick="draw_me_card()" class="btn-warning btn"  >测试抽牌</a>-->



</div>

<!--<a href="javascript:;" onclick="page_html(14, 2, 10)"> 测试 </a>-->
<script type="text/javascript">
window.onload = function() {
    ajax_loading();
};

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
        case 'end_round':
            //alert(ret_msg.msg);
            if (ret_msg.ok) {
                if (ret_msg.data.opponent_id == $('#uid').val()) { // 该我了
                    draw_me_card();
                    //$('#end_turn_btn').show();
                    //$('#waiting_turn_btn').hide();
                } else {
                    // 等待对手回合
                    //$('#end_turn_btn').hide();
                    //$('#waiting_turn_btn').show();
                }
            }
            break;
        case 'draw_card':
            if (ret_msg.ok) {
                if (ret_msg.data.opponent_id == $('#uid').val()) { // 对方抽了牌
                    //alert('对方抽牌');
                } else {
                    //alert('我抽牌');
                    // 我方刚抽了牌
                }
                ajax_loading();
            }
            break;
        default:
            alert('websocket return handle failed');
            break;
    }
};

ws.onclose = function() {

};

var battle_id = '<?php echo $battle_id ?>';

/*
    页面加载
*/
function ajax_loading()
{
    $.get("/battle-field/data",
        {
            'battle_id' : battle_id
        },
        function(ret){
            if (ret.ok) {
                // 对手手牌
                html = '<tr>';
                for (i = 0; i < ret.data.opponent_handing_pool_len; i++)
                {
                    html += '<td><img src="/images/en/card/System/card_back.png" width="60" height="80" title="'+ ret.data.opponent_handing_pool_len +'张手牌" /></td>';
                }
                html += '</tr>';
                $('#opponent_handing_cards').html(html);

                // 对手魔法值
                html = '<tr><td>' + ret.data.opponent_mana + ' / ' + ret.data.opponent_mana_max + '';
                var used_mana_cnt = ret.data.opponent_mana_max - ret.data.opponent_mana;
                for (i = 0; i < ret.data.opponent_mana; i++)
                {
                    html += '<img src="/images/mana.png" />';
                }
                for (i = 0; i < ret.data.used_mana_cnt; i++)
                {
                    html += '<img src="/images/mana_used.png" />';
                }
                html += '</td></tr>';
                $('#opponent_mana').html(html);

                // 对手头像
                html = '<img src="'+ret.data.opponent_avatar+'" width="120" height="130" />' + ret.data.opponent_hp + ' / 30';
                $('#opponent_hero').html(html);

                // 对手技能
                if (ret.data.opponent_skill_on) {
                    html = '<img src="'+ret.data.opponent_skill+'" width="60" height="60" />';
                } else {
                    html = '<img src="/images/en/hero/skill/used.png" width="60" height="60" />';
                }
                $('#opponent_hero_skill').html(html);

                // 我的魔法值
                html = '<tr><td>' + ret.data.my_mana + ' / ' + ret.data.my_mana_max + '';
                used_mana_cnt = ret.data.my_mana_max - ret.data.my_mana;
                for (i = 0; i < ret.data.my_mana; i++)
                {
                    html += '<img src="/images/mana.png" />';
                }
                for (i = 0; i < ret.data.used_mana_cnt; i++)
                {
                    html += '<img src="/images/mana_used.png" />';
                }
                html += '</td></tr>';
                $('#my_mana').html(html);

                // 我的头像
                html = '<img src="'+ret.data.my_avatar+'" width="120" height="130" />' + ret.data.my_hp + ' / 30';
                $('#my_hero').html(html);

                // 我的技能
                if (ret.data.my_skill_on) {
                    html = '<img src="'+ret.data.my_skill+'" width="60" height="60" />';
                } else {
                    html = '<img src="/images/en/hero/skill/used.png" width="60" height="60" />';
                }
                $('#my_hero_skill').html(html);

                // 我的手牌
                html = '<tr>';
                for (key in ret.data.my_handing_cards)
                {
                    html += '<td><img src="'+ret.data.my_handing_cards[key].image+'" width="80" height="120" title="'+ ret.data.my_handing_cards_len +'张手牌" /></td>';
                }
                html += '</tr>';
                $('#my_handing_cards').html(html);

                // 回合按钮
                if (ret.data.round_player == 'opponent') {
                    $('#end_turn_btn').hide();
                    $('#waiting_turn_btn').show();
                } else {
                    $('#end_turn_btn').show();
                    $('#waiting_turn_btn').hide();
                }
            } else {
                alert(ret.msg);
            }
        },
        'json'
    );
}

// 通知抽一张牌
function draw_me_card()
{
//    $.get("/battle-field/draw-card",
//        {
//            'battle_id':battle_id,
//            'player_id':$('#uid').val()
//        },
//        function(ret){
//
//        },
//        'json'
//    );
    ws.send('{"action":"draw_card", "uid":"' + $('#uid').val() + '", "battle_id":"'+ battle_id +'"}');
}

// 结束回合
function end_my_turn()
{
//    $.get("/battle-field/end-round",
//        {
//            'battle_id':battle_id
//        },
//        function(ret){
//
//        },
//        'json'
//    );
    ws.send('{"action":"end_round", "uid":"' + $('#uid').val() + '", "battle_id":"'+ battle_id +'"}');
}

</script>
