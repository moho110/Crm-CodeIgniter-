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
                <div class="panel-heading"><?php echo $action; ?> 工作人员证照 <a href="<?php echo site_url('/oa/CmfHrmsWorkerZhengzhao/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input readonly type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_hrms_worker_zhengzhao['ID'])?$cmf_hrms_worker_zhengzhao['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workId">工作ID：</label>
                            <input type="text" class="form-control" name="workId" placeholder="Enter workId" value="<?php echo !empty($cmf_hrms_worker_zhengzhao['workId'])?$cmf_hrms_worker_zhengzhao['workId']:''; ?>">
                            <?php echo form_error('workId','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="name">名称：</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo !empty($cmf_hrms_worker_zhengzhao['name'])?$cmf_hrms_worker_zhengzhao['name']:''; ?>">
                            <?php echo form_error('name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="inDepartment">所在部门：</label>
                            <input type="text" class="form-control" name="inDepartment" placeholder="Enter inDepartment" value="<?php echo !empty($cmf_hrms_worker_zhengzhao['inDepartment'])?$cmf_hrms_worker_zhengzhao['inDepartment']:''; ?>">
                            <?php echo form_error('inDepartment','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="photo">照片：</label>
                            <input type="text" class="form-control" name="photo" placeholder="Enter photo" value="<?php echo !empty($cmf_hrms_worker_zhengzhao['photo'])?$cmf_hrms_worker_zhengzhao['photo']:''; ?>">
                            <?php echo form_error('photo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="certificationType">认证类型：</label>
                            <input type="text" class="form-control" name="certificationType" placeholder="Enter certificationType" value="<?php echo !empty($cmf_hrms_worker_zhengzhao['certificationType'])?$cmf_hrms_worker_zhengzhao['certificationType']:''; ?>">
                            <?php echo form_error('certificationType','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="certificationName">认证名称：</label>
                            <input type="text" class="form-control" name="certificationName" placeholder="Enter certificationName" value="<?php echo !empty($cmf_hrms_worker_zhengzhao['certificationName'])?$cmf_hrms_worker_zhengzhao['certificationName']:''; ?>">
                            <?php echo form_error('certificationName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="certificationScan">认证扫描：</label>
                            <input type="text" class="form-control" name="certificationScan" placeholder="Enter certificationScan" value="<?php echo !empty($cmf_hrms_worker_zhengzhao['certificationScan'])?$cmf_hrms_worker_zhengzhao['certificationScan']:''; ?>">
                            <?php echo form_error('certificationScan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="prizeTime">奖赏时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="prizeTime">
                            <?php echo form_error('prizeTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="agency">机构：</label>
                            <input type="text" class="form-control" name="agency" placeholder="Enter agency" value="<?php echo !empty($cmf_hrms_worker_zhengzhao['agency'])?$cmf_hrms_worker_zhengzhao['agency']:''; ?>">
                            <?php echo form_error('agency','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_hrms_worker_zhengzhao['creator'])?$cmf_hrms_worker_zhengzhao['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-5" placeholder="YYYY-MM-DD hh:mm" name="createTime">
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