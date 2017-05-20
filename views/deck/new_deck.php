<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = '选择英雄';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">

    <div class="msg"> </div>

    <div class="form-horizontal">
        <?php foreach ($hero_list as $hero_id => $hero) { ?>
        <div class="form-group">
            <label class="col-lg-2 control-label"><?php echo $hero['name'] ?> </label>
            <div class="col-lg-3">
                <img src="/images/en/hero/logo/<?php echo $hero['career'] ?>.png" />
            </div>
            <div class="col-lg-3">
                <input type="radio" name="hero_id" value="<?php echo $hero_id ?>" />
            </div>
        </div>
        <?php } ?>

        <div class="form-group">
            <label class="col-lg-1 control-label"> </label>
            <div class="col-lg-3">
                <a href="javascript:;" onclick="ajax_create_deck()" class="btn-primary btn ">创 建</a>
            </div>
        </div>
    </div>

    <div class="body-content" >
    </div>

</div>

<!--<a href="javascript:;" onclick="page_html(14, 2, 10)"> 测试 </a>-->
<script type="text/javascript">
function ajax_create_deck()
{
    $.get("/deck/create",
        {
            hero_id:$('input:radio[name="hero_id"]:checked').val()
        },
        function(ret){
            alert(ret.msg);
        },
        'json'
    );
}

</script>
