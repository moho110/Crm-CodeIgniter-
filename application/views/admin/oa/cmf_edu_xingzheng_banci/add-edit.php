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
                <div class="panel-heading"><?php echo $action; ?> 行政班次 <a href="<?php echo site_url('/oa/CmfEduXingzhengBanci/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="Id">编号：</label>
                            <input type="text" class="form-control" name="Id" placeholder="Enter Id" value="<?php echo !empty($cmf_edu_xingzheng_banci['Id'])?$cmf_edu_xingzheng_banci['Id']:''; ?>">
                            <?php echo form_error('Id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="className">课程名称：</label>
                            <input type="text" class="form-control" name="className" placeholder="Enter className" value="<?php echo !empty($cmf_edu_xingzheng_banci['className'])?$cmf_edu_xingzheng_banci['className']:''; ?>">
                            <?php echo form_error('className','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="dutyTime">班次时间：</label>
                            <input type="text" class="form-control" name="dutyTime" placeholder="Enter dutyTime" value="<?php echo !empty($cmf_edu_xingzheng_banci['dutyTime'])?$cmf_edu_xingzheng_banci['dutyTime']:''; ?>">
                            <?php echo form_error('dutyTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="isStartTimeEnable">是否开始上班时间：</label>
                            <input type="text" class="form-control" name="isStartTimeEnable" placeholder="Enter isStartTimeEnable" value="<?php echo !empty($cmf_edu_xingzheng_banci['isStartTimeEnable'])?$cmf_edu_xingzheng_banci['isStartTimeEnable']:''; ?>">
                            <?php echo form_error('isStartTimeEnable','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="isEndTimeEnable">是否结束上班时间：</label>
                            <input type="text" class="form-control" name="isEndTimeEnable" placeholder="Enter isEndTimeEnable" value="<?php echo !empty($cmf_edu_xingzheng_banci['isEndTimeEnable'])?$cmf_edu_xingzheng_banci['isEndTimeEnable']:''; ?>">
                            <?php echo form_error('isEndTimeEnable','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="startCardTime">上班打卡时间：</label>
                            <input type="text" class="form-control" name="startCardTime" placeholder="Enter startCardTime" value="<?php echo !empty($cmf_edu_xingzheng_banci['startCardTime'])?$cmf_edu_xingzheng_banci['startCardTime']:''; ?>">
                            <?php echo form_error('startCardTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="endCardTime">下班打卡时间：</label>
                            <input type="text" class="form-control" name="endCardTime" placeholder="Enter endCardTime" value="<?php echo !empty($cmf_edu_xingzheng_banci['endCardTime'])?$cmf_edu_xingzheng_banci['endCardTime']:''; ?>">
                            <?php echo form_error('endCardTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="startDelayCardTime">上班迟到打卡时间：</label>
                            <input type="text" class="form-control" name="startDelayCardTime" placeholder="Enter startDelayCardTime" value="<?php echo !empty($cmf_edu_xingzheng_banci['startDelayCardTime'])?$cmf_edu_xingzheng_banci['startDelayCardTime']:''; ?>">
                            <?php echo form_error('startDelayCardTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="endDelayCardTime">下班迟到打卡时间：</label>
                            <input type="text" class="form-control" name="endDelayCardTime" placeholder="Enter endDelayCardTime" value="<?php echo !empty($cmf_edu_xingzheng_banci['endDelayCardTime'])?$cmf_edu_xingzheng_banci['endDelayCardTime']:''; ?>">
                            <?php echo form_error('endDelayCardTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="laterTime">迟到时间：</label>
                            <input type="text" class="form-control" name="laterTime" placeholder="Enter laterTime" value="<?php echo !empty($cmf_edu_xingzheng_banci['laterTime'])?$cmf_edu_xingzheng_banci['laterTime']:''; ?>">
                            <?php echo form_error('laterTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="earlyTime">早退时间：</label>
                            <input type="text" class="form-control" name="earlyTime" placeholder="Enter earlyTime" value="<?php echo !empty($cmf_edu_xingzheng_banci['earlyTime'])?$cmf_edu_xingzheng_banci['earlyTime']:''; ?>">
                            <?php echo form_error('earlyTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="classManageOne">课程管理一：</label>
                            <input type="text" class="form-control" name="classManageOne" placeholder="Enter classManageOne" value="<?php echo !empty($cmf_edu_xingzheng_banci['classManageOne'])?$cmf_edu_xingzheng_banci['classManageOne']:''; ?>">
                            <?php echo form_error('classManageOne','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="classManageTwo">课程管理二：</label>
                            <input type="text" class="form-control" name="classManageTwo" placeholder="Enter classManageTwo" value="<?php echo !empty($cmf_edu_xingzheng_banci['classManageTwo'])?$cmf_edu_xingzheng_banci['classManageTwo']:''; ?>">
                            <?php echo form_error('classManageTwo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建者：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_edu_xingzheng_banci['creator'])?$cmf_edu_xingzheng_banci['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="className">课程名称：</label>
                            <input type="text" class="form-control" name="className" placeholder="Enter className" value="<?php echo !empty($cmf_edu_xingzheng_banci['className'])?$cmf_edu_xingzheng_banci['className']:''; ?>">
                            <?php echo form_error('className','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input type="text" class="form-control" name="createTime" placeholder="Enter createTime" value="<?php echo !empty($cmf_edu_xingzheng_banci['createTime'])?$cmf_edu_xingzheng_banci['createTime']:''; ?>">
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