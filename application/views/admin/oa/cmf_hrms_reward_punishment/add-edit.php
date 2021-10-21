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
                <div class="panel-heading"><?php echo $action; ?> 奖惩 <a href="<?php echo site_url('/oa/CmfHrmsRewardPunishment/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input  readonly type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_hrms_reward_punishment['ID'])?$cmf_hrms_reward_punishment['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="type">类型：</label>
                            <input type="radio" name="type" value="1">保留
                            <input type="radio" name="type" value="0">删除
                            <?php echo form_error('type','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="status">状态：</label>
                            <input type="radio" name="status" value="1">良好
                            <input type="radio" name="status" value="0">一般
                            <?php echo form_error('status','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workId">工作ID：</label>
                            <input type="text" class="form-control" name="workId" placeholder="Enter workId" value="<?php echo !empty($cmf_hrms_reward_punishment['workId'])?$cmf_hrms_reward_punishment['workId']:''; ?>">
                            <?php echo form_error('workId','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="name">名称：</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo !empty($cmf_hrms_reward_punishment['name'])?$cmf_hrms_reward_punishment['name']:''; ?>">
                            <?php echo form_error('name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="inDepartment">所在部门：</label>
                            <input type="text" class="form-control" name="inDepartment" placeholder="Enter inDepartment" value="<?php echo !empty($cmf_hrms_reward_punishment['inDepartment'])?$cmf_hrms_reward_punishment['inDepartment']:''; ?>">
                            <?php echo form_error('inDepartment','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="punishmentName">惩罚名称：</label>
                            <input type="text" class="form-control" name="punishmentName" placeholder="Enter punishmentName" value="<?php echo !empty($cmf_hrms_reward_punishment['punishmentName'])?$cmf_hrms_reward_punishment['punishmentName']:''; ?>">
                            <?php echo form_error('punishmentName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="punishmentReason">惩罚理由：</label>
                            <textarea name="punishmentReason" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_hrms_reward_punishment['punishmentReason'])?$cmf_hrms_reward_punishment['punishmentReason']:''; ?>
                            </textarea>
                            <?php echo form_error('punishmentReason','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="punishmentContent">惩罚内容：</label>
                            <textarea name="punishmentContent" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_hrms_reward_punishment['punishmentContent'])?$cmf_hrms_reward_punishment['punishmentContent']:''; ?>
                            </textarea>
                            <?php echo form_error('punishmentContent','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="approvalDep">批准部门：</label>
                            <input type="text" class="form-control" name="approvalDep" placeholder="Enter approvalDep" value="<?php echo !empty($cmf_hrms_reward_punishment['approvalDep'])?$cmf_hrms_reward_punishment['approvalDep']:''; ?>">
                            <?php echo form_error('approvalDep','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="approvalMan">批准人：</label>
                            <input type="text" class="form-control" name="approvalMan" placeholder="Enter approvalMan" value="<?php echo !empty($cmf_hrms_reward_punishment['approvalMan'])?$cmf_hrms_reward_punishment['approvalMan']:''; ?>">
                            <?php echo form_error('approvalMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="approvalTime">批准时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="approvalTime">
                            <?php echo form_error('approvalTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="shengxiaobyDate">生效日期：</label>
                            <input readonly class="form-control" type="text" id="date-group1-5" placeholder="YYYY-MM-DD hh:mm" name="shengxiaobyDate">
                            <?php echo form_error('shengxiaobyDate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <textarea name="memo" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_hrms_reward_punishment['memo'])?$cmf_hrms_reward_punishment['memo']:''; ?>
                            </textarea>
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="cancelTime">取消时间：</label>
                            <input readonly class="form-control" type="text" id="recovery" placeholder="YYYY-MM-DD hh:mm" name="cancelTime">
                            <?php echo form_error('cancelTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="cancelReason">取消理由：</label>
                            <textarea name="cancelReason" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_hrms_reward_punishment['cancelReason'])?$cmf_hrms_reward_punishment['cancelReason']:''; ?>
                            </textarea>
                            <?php echo form_error('cancelReason','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_hrms_reward_punishment['creator'])?$cmf_hrms_reward_punishment['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="pay_time" placeholder="YYYY-MM-DD hh:mm" name="createTime">
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