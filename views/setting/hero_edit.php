<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Hero ' . $action;
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
                        <td width="100">
                            ID:
                        </td>
                        <td>
                            <input type="text" name="mongo_id" value="<?php echo $model->mongo_id ? $model->mongo_id->__toString() : '' ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            英雄名称: 
                        </td>
                        <td>
                            <input type="text" name="name" value="<?php echo $model->attributes['name'] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            英雄职业: 
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
                            英雄头像: 
                        </td>
                        <td>
                            <input type="text" name="avatar" value="<?php echo $model->attributes['avatar'] ?>" size="50" />
                            <?php if ($model->attributes['avatar']) { ?>
                            <img src="<?php echo $model->attributes['avatar'] ?>" />
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            英雄图标: 
                        </td>
                        <td>
                            <input type="text" name="logo" value="<?php echo $model->attributes['logo'] ?>" size="50" />
                            <?php if ($model->attributes['logo']) { ?>
                            <img src="<?php echo $model->attributes['logo'] ?>" />
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
