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
                <div class="panel-heading"><?php echo $action; ?> 转职 <a href="<?php echo site_url('/oa/CmfHrmsTransfer/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input readonly type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_hrms_transfer['ID'])?$cmf_hrms_transfer['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workId">工作ID：</label>
                            <input type="text" class="form-control" name="workId" placeholder="Enter workId" value="<?php echo !empty($cmf_hrms_transfer['workId'])?$cmf_hrms_transfer['workId']:''; ?>">
                            <?php echo form_error('workId','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="name">名称：</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo !empty($cmf_hrms_transfer['name'])?$cmf_hrms_transfer['name']:''; ?>">
                            <?php echo form_error('name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="transferDate">转职日期：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="transferDate">
                            <?php echo form_error('transferDate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="inDepartment">所在部门：</label>
                            <input type="text" class="form-control" name="inDepartment" placeholder="Enter inDepartment" value="<?php echo !empty($cmf_hrms_transfer['inDepartment'])?$cmf_hrms_transfer['inDepartment']:''; ?>">
                            <?php echo form_error('inDepartment','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="afterDep">之后部门：</label>
                            <input type="text" class="form-control" name="afterDep" placeholder="Enter afterDep" value="<?php echo !empty($cmf_hrms_transfer['afterDep'])?$cmf_hrms_transfer['afterDep']:''; ?>">
                            <?php echo form_error('afterDep','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="beforeStaff">之前职员：</label>
                            <input type="text" class="form-control" name="beforeStaff" placeholder="Enter beforeStaff" value="<?php echo !empty($cmf_hrms_transfer['beforeStaff'])?$cmf_hrms_transfer['beforeStaff']:''; ?>">
                            <?php echo form_error('beforeStaff','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="afterStaff">之后职员：</label>
                            <input type="text" class="form-control" name="afterStaff" placeholder="Enter afterStaff" value="<?php echo !empty($cmf_hrms_transfer['afterStaff'])?$cmf_hrms_transfer['afterStaff']:''; ?>">
                            <?php echo form_error('afterStaff','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="beforegangwei">之后岗位：</label>
                            <input type="text" class="form-control" name="beforegangwei" placeholder="Enter beforegangwei" value="<?php echo !empty($cmf_hrms_transfer['beforegangwei'])?$cmf_hrms_transfer['beforegangwei']:''; ?>">
                            <?php echo form_error('beforegangwei','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="aftergangwei">之后岗位：</label>
                            <input type="text" class="form-control" name="aftergangwei" placeholder="Enter aftergangwei" value="<?php echo !empty($cmf_hrms_transfer['aftergangwei'])?$cmf_hrms_transfer['aftergangwei']:''; ?>">
                            <?php echo form_error('aftergangwei','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="transferReason">转职理由：</label>
                            <textarea name="transferReason" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_hrms_transfer['transferReason'])?$cmf_hrms_transfer['transferReason']:''; ?>
                            </textarea>
                            <?php echo form_error('transferReason','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="staffMan">职员：</label>
                            <input type="text" class="form-control" name="staffMan" placeholder="Enter staffMan" value="<?php echo !empty($cmf_hrms_transfer['staffMan'])?$cmf_hrms_transfer['staffMan']:''; ?>">
                            <?php echo form_error('staffMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <textarea name="memo" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_hrms_transfer['memo'])?$cmf_hrms_transfer['memo']:''; ?>
                            </textarea>
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jobsSituation">工作场合：</label>
                            <input type="text" class="form-control" name="jobsSituation" placeholder="Enter jobsSituation" value="<?php echo !empty($cmf_hrms_transfer['jobsSituation'])?$cmf_hrms_transfer['jobsSituation']:''; ?>">
                            <?php echo form_error('jobsSituation','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="transferType">转职类型：</label>
                            <input type="radio" name="transferType" value="1">职业经理人
                            <input type="radio" name="transferType" value="2">技术工程师
                            <input type="radio" name="transferType" value="3">高级工程师
                            <input type="radio" name="transferType" value="4">人力资源经理
                            <input type="radio" name="transferType" value="0">其他类型
                            <?php echo form_error('transferType','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_hrms_transfer['creator'])?$cmf_hrms_transfer['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creatTime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-5" placeholder="YYYY-MM-DD hh:mm" name="creatTime">
                            <?php echo form_error('creatTime','<p class="help-block text-danger">','</p>'); ?>
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