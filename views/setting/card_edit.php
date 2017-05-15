<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Card ' . $action;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <?php if ($msg) { ?>
    <div class="jumbotron">
        <?php echo $msg ?>
    </div>
    <?php } ?>
    
    <div class=" discribe">
        <form action="" method="post">
        <div class="block tcenter">
            <div>
                <table style="padding: 5; width: 400px;" border="1">
                    <tr>
                        <td width="150">
                            ID:
                        </td>
                        <td>
                            <input type="text" name="mongo_id" value="<?php echo $model->mongo_id ? $model->mongo_id->__toString() : '' ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            卡牌名称: 
                        </td>
                        <td>
                            <input type="text" name="name" value="<?php echo $model->attributes['name'] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            卡牌类型: 
                        </td>
                        <td>
                            <select name="type">
                                <?php foreach ($type_list as $key => $val) { ?>
                                <option value="<?php echo $key ?>" <?php echo $key == $model->attributes['type'] ? 'selected' : '' ?> /><?php echo $val ?>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            卡牌所属英雄职业: 
                        </td>
                        <td>
                            <select name="career">
                                <?php foreach ($career_list as $key => $val) { ?>
                                <option value="<?php echo $key ?>" <?php echo $key == $model->attributes['career'] ? 'selected' : '' ?> /><?php echo $val ?>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            卡牌法力消耗: 
                        </td>
                        <td>
                            <input type="text" name="mana" value="<?php echo $model->attributes['mana'] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            卡牌随从伤害: 
                        </td>
                        <td>
                            <input type="text" name="damage" value="<?php echo $model->attributes['damage'] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            卡牌随从血量: 
                        </td>
                        <td>
                            <input type="text" name="hp" value="<?php echo $model->attributes['hp'] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            卡牌特效: 
                        </td>
                        <td>
                            <input type="text" name="skill_id" value="<?php echo $model->attributes['skill_id'] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            卡牌等级: 
                        </td>
                        <td>
                            <input type="text" name="level" value="<?php echo $model->attributes['level'] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            卡牌图片: 
                        </td>
                        <td>
                            <input type="text" name="image" value="<?php echo $model->attributes['image'] ?>" size="50" />
                            <?php if ($model->attributes['image']) { ?>
                            <img src="<?php echo $model->attributes['image'] ?>" />
                            <?php } ?>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
        

        <div class="block">
            <div> </div>
            <div>
                <input type="submit" name="submit" value="提 交" class="btn-primary btn btn_submit" />
            </div>
        </div>
        <input type="hidden" name="_csrf" value="<?php echo Yii::$app->request->getCsrfToken()?>" />
        </form>
    </div>

</div>
<script type="text/javascript">


</script>
