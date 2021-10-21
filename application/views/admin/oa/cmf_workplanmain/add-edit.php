<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<div class="container">
    <div class="col-xs-12">
    <?php 
        if(!empty($success_msg)){
            echo '<div class="alert alert-success">'.$success_msg.'</div>';
        }elseif(!empty($error_msg)){
            echo '<div class="alert alert-danger">'.$error_msg.'</div>';
        }
    ?>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo $action; ?> 工作计划 <a href="<?php echo site_url('/oa/CmfWorkplanmain/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="id">编号：</label>
                            <input type="text" class="form-control" name="id" placeholder="Enter id" value="<?php echo !empty($cmf_workplanmain['id'])?$cmf_workplanmain['id']:''; ?>">
                            <?php echo form_error('id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createtime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="createtime">
                            <?php echo form_error('createtime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createman">创建人：</label>
                            <input type="text" class="form-control" name="createman" placeholder="Enter createman" value="<?php echo !empty($cmf_workplanmain['createman'])?$cmf_workplanmain['createman']:''; ?>">
                            <?php echo form_error('createman','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="state">状态：</label>
                            <input type="radio" name="state" value="1">良好
                            <input type="radio" name="state" value="0">正常
                            <?php echo form_error('state','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="zhuti">主题：</label>
                            <input type="text" class="form-control" name="zhuti" placeholder="Enter zhuti" value="<?php echo !empty($cmf_workplanmain['zhuti'])?$cmf_workplanmain['zhuti']:''; ?>">
                            <?php echo form_error('zhuti','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="content">内容：</label>
                            <textarea name="content" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_workplanmain['content'])?$cmf_workplanmain['content']:''; ?>
                            </textarea>
                            <?php echo form_error('content','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kind">种类：</label>
                            <input type="text" class="form-control" name="kind" placeholder="Enter kind" value="<?php echo !empty($cmf_workplanmain['kind'])?$cmf_workplanmain['kind']:''; ?>">
                            <?php echo form_error('kind','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="begintime">开始时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-5" placeholder="YYYY-MM-DD hh:mm" name="begintime">
                            <?php echo form_error('begintime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="endtime">结束时间：</label>
                            <input readonly class="form-control" type="text" id="create_time" placeholder="YYYY-MM-DD hh:mm" name="endtime">
                            <?php echo form_error('endtime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="zhixingren">执行人：</label>
                            <input type="text" class="form-control" name="zhixingren" placeholder="Enter zhixingren" value="<?php echo !empty($cmf_workplanmain['zhixingren'])?$cmf_workplanmain['zhixingren']:''; ?>">
                            <?php echo form_error('zhixingren','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="finishtime">完成时间：</label>
                            <input readonly class="form-control" type="text" id="teach" placeholder="YYYY-MM-DD hh:mm" name="finishtime">
                            <?php echo form_error('finishtime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="shenheren">审核人：</label>
                            <input type="text" class="form-control" name="shenheren" placeholder="Enter shenheren" value="<?php echo !empty($cmf_workplanmain['shenheren'])?$cmf_workplanmain['shenheren']:''; ?>">
                            <?php echo form_error('shenheren','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="shenchastate">审核状态：</label>
                            <input type="radio" name="shenchastate" value="1">已完成
                            <input type="radio" name="shenchastate" value="0">未完成
                            <?php echo form_error('shenchastate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="shenhetime">审核时间：</label>
                            <input readonly class="form-control" type="text" id="birthday" placeholder="YYYY-MM-DD hh:mm" name="shenhetime">
                            <?php echo form_error('shenhetime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="shenhepishi">审核批示：</label>
                            <input type="text" class="form-control" name="shenhepishi" placeholder="Enter shenhepishi" value="<?php echo !empty($cmf_workplanmain['shenhepishi'])?$cmf_workplanmain['shenhepishi']:''; ?>">
                            <?php echo form_error('shenhepishi','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fujian">附件：</label>
                            <input type="text" class="form-control" name="fujian" placeholder="Enter fujian" value="<?php echo !empty($cmf_workplanmain['fujian'])?$cmf_workplanmain['fujian']:''; ?>">
                            <?php echo form_error('fujian','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ifsms">是否发送短信：</label>
                            <input type="radio" name="ifsms" value="1">已发送
                            <input type="radio" name="ifsms" value="0">未发送
                            <?php echo form_error('ifsms','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ifemail">是否发送邮件：</label>
                            <input type="radio" name="ifemail" value="1">是
                            <input type="radio" name="ifemail" value="0">否
                            <?php echo form_error('ifemail','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="guanlianshiwu">关联事务：</label>
                            <input type="text" class="form-control" name="guanlianshiwu" placeholder="Enter guanlianshiwu" value="<?php echo !empty($cmf_workplanmain['guanlianshiwu'])?$cmf_workplanmain['guanlianshiwu']:''; ?>">
                            <?php echo form_error('guanlianshiwu','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="guanlianurl">关联URL地址：</label>
                            <input type="text" class="form-control" name="guanlianurl" placeholder="Enter guanlianurl" value="<?php echo !empty($cmf_workplanmain['guanlianurl'])?$cmf_workplanmain['guanlianurl']:''; ?>">
                            <?php echo form_error('guanlianurl','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="guanlianid">关联ID：</label>
                            <input type="text" class="form-control" name="guanlianid" placeholder="Enter guanlianid" value="<?php echo !empty($cmf_workplanmain['guanlianid'])?$cmf_workplanmain['guanlianid']:''; ?>">
                            <?php echo form_error('guanlianid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="lastzhixingtime">最后执行时间：</label>
                            <input readonly class="form-control" type="text" id="recovery" placeholder="YYYY-MM-DD hh:mm" name="lastzhixingtime">
                            <?php echo form_error('lastzhixingtime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <input type="submit" name="postSubmit" class="btn btn-primary" value="提交"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>