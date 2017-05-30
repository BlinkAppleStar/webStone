
/*
    战场队列中事件处理
*/

function searching_in_queue()
{
    // disable all edit button
    

    ws.send('{"action":"user_match_battle_queue"}');
}


/*
    分页按钮
*/
function page_html(total, page, page_size)
{
    var left_btn_cnt = 2;
    var right_btn_cnt = 2;
    var max_btn_cnt = left_btn_cnt + right_btn_cnt + 1;

    var total_page = Math.ceil(total / page_size);

    var html = '';
    var from = 0;
    var to = 0;
    if (page - left_btn_cnt <= 1) {
        from = 1;
        to = total_page < max_btn_cnt ? total_page : max_btn_cnt;
    } else if (page + right_btn_cnt > total_page) {
        from = total_page - max_btn_cnt + 1 < 1 ? 1 : total_page - max_btn_cnt + 1;
        to = total_page;
    } else {
        from = page - right_btn_cnt;
        to = page + right_btn_cnt;
    }
    for (i = from; i <= to; i++)
    {
        if (i == page) {
            html += ' <a href="javascript:;" class="btn-warning btn">' + i + '</a> ';;
        } else {
            html += ' <a href="javascript:;" onclick="ajax_list('+i+', '+page_size+')" class="btn-danger btn">[' + i + ']</a> ';
        }
    }

    return html;
}

