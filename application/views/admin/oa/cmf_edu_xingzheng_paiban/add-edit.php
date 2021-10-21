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
                <div class="panel-heading"><?php echo $action; ?> 行政排班 <a href="<?php echo site_url('/oa/CmfEduXingzhengPaiban/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="Id">编号：</label>
                            <input type="text" class="form-control" name="Id" placeholder="Enter Id" value="<?php echo !empty($cmf_edu_xingzheng_paiban['Id'])?$cmf_edu_xingzheng_paiban['Id']:''; ?>">
                            <?php echo form_error('Id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="termName">期限名称：</label>
                            <input type="text" class="form-control" name="termName" placeholder="Enter termName" value="<?php echo !empty($cmf_edu_xingzheng_paiban['termName'])?$cmf_edu_xingzheng_paiban['termName']:''; ?>">
                            <?php echo form_error('termName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="week">周：</label>
                            <input type="text" class="form-control" name="week" placeholder="Enter week" value="<?php echo !empty($cmf_edu_xingzheng_paiban['week'])?$cmf_edu_xingzheng_paiban['week']:''; ?>">
                            <?php echo form_error('week','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="day">日期：</label>
                            <input type="text" class="form-control" name="day" placeholder="Enter day" value="<?php echo !empty($cmf_edu_xingzheng_paiban['day'])?$cmf_edu_xingzheng_paiban['day']:''; ?>">
                            <?php echo form_error('day','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kaoqinDate">考勤日期：</label>
                            <input type="text" class="form-control" name="kaoqinDate" placeholder="Enter kaoqinDate" value="<?php echo !empty($cmf_edu_xingzheng_paiban['kaoqinDate'])?$cmf_edu_xingzheng_paiban['kaoqinDate']:''; ?>">
                            <?php echo form_error('kaoqinDate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="className">类别名称：</label>
                            <input type="text" class="form-control" name="className" placeholder="Enter className" value="<?php echo !empty($cmf_edu_xingzheng_paiban['className'])?$cmf_edu_xingzheng_paiban['className']:''; ?>">
                            <?php echo form_error('className','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="paipanPerson">排班人员：</label>
                            <input type="text" class="form-control" name="paipanPerson" placeholder="Enter paipanPerson" value="<?php echo !empty($cmf_edu_xingzheng_paiban['paipanPerson'])?$cmf_edu_xingzheng_paiban['paipanPerson']:''; ?>">
                            <?php echo form_error('paipanPerson','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <textarea name="memo" cols="50" rows="10"><?php echo !empty($cmf_edu_xingzheng_paiban['memo'])?$cmf_edu_xingzheng_paiban['memo']:''; ?></textarea>
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_edu_xingzheng_paiban['creator'])?$cmf_edu_xingzheng_paiban['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input type="text" class="form-control" name="createTime" placeholder="Enter createTime" value="<?php echo !empty($cmf_edu_xingzheng_paiban['createTime'])?$cmf_edu_xingzheng_paiban['createTime']:''; ?>">
                            <?php echo form_error('createTime','<p class="help-block text-danger">','</p>'); ?>
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