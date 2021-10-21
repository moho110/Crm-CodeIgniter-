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
                <div class="panel-heading"><?php echo $action; ?> 人力劳动技能 <a href="<?php echo site_url('/oa/CmfHrmsLaboringskill/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="Id">编号：</label>
                            <input  readonly type="text" class="form-control" name="Id" placeholder="Enter Id" value="<?php echo !empty($cmf_hrms_laboringskill['Id'])?$cmf_hrms_laboringskill['Id']:''; ?>">
                            <?php echo form_error('Id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workId">工作ID：</label>
                            <input type="text" class="form-control" name="workId" placeholder="Enter workId" value="<?php echo !empty($cmf_hrms_laboringskill['workId'])?$cmf_hrms_laboringskill['workId']:''; ?>">
                            <?php echo form_error('workId','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="name">名称：</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo !empty($cmf_hrms_laboringskill['name'])?$cmf_hrms_laboringskill['name']:''; ?>">
                            <?php echo form_error('name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="inDepartment">所在部门：</label>
                            <input type="text" class="form-control" name="inDepartment" placeholder="Enter inDepartment" value="<?php echo !empty($cmf_hrms_laboringskill['inDepartment'])?$cmf_hrms_laboringskill['inDepartment']:''; ?>">
                            <?php echo form_error('inDepartment','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="startTime">开始时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="startTime">
                            <?php echo form_error('startTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="endTime">结束时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-5" placeholder="YYYY-MM-DD hh:mm" name="endTime">
                            <?php echo form_error('endTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="certifiationUnit">认证单位：</label>
                            <input type="text" class="form-control" name="certifiationUnit" placeholder="Enter certifiationUnit" value="<?php echo !empty($cmf_hrms_laboringskill['certifiationUnit'])?$cmf_hrms_laboringskill['certifiationUnit']:''; ?>">
                            <?php echo form_error('certifiationUnit','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="certificationDep">认证部门：</label>
                            <input type="text" class="form-control" name="certificationDep" placeholder="Enter certificationDep" value="<?php echo !empty($cmf_hrms_laboringskill['certificationDep'])?$cmf_hrms_laboringskill['certificationDep']:''; ?>">
                            <?php echo form_error('certificationDep','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="certificationName">认证名称：</label>
                            <input type="text" class="form-control" name="certificationName" placeholder="Enter certificationName" value="<?php echo !empty($cmf_hrms_laboringskill['certificationName'])?$cmf_hrms_laboringskill['certificationName']:''; ?>">
                            <?php echo form_error('certificationName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="proveMan">证明人：</label>
                            <input type="text" class="form-control" name="proveMan" placeholder="Enter proveMan" value="<?php echo !empty($cmf_hrms_laboringskill['proveMan'])?$cmf_hrms_laboringskill['proveMan']:''; ?>">
                            <?php echo form_error('proveMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <textarea name="memo" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_hrms_laboringskill['memo'])?$cmf_hrms_laboringskill['memo']:''; ?>
                            </textarea>
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_hrms_laboringskill['creator'])?$cmf_hrms_laboringskill['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="create_time" placeholder="YYYY-MM-DD hh:mm" name="createTime">
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