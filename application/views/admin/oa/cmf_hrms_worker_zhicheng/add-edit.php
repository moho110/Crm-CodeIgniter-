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
                <div class="panel-heading"><?php echo $action; ?> 工作人员职称 <a href="<?php echo site_url('/oa/CmfHrmsWorkerZhicheng/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input readonly type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_hrms_worker_zhicheng['ID'])?$cmf_hrms_worker_zhicheng['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workId">工作ID：</label>
                            <input type="text" class="form-control" name="workId" placeholder="Enter workId" value="<?php echo !empty($cmf_hrms_worker_zhicheng['workId'])?$cmf_hrms_worker_zhicheng['workId']:''; ?>">
                            <?php echo form_error('workId','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="name">名称：</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo !empty($cmf_hrms_worker_zhicheng['name'])?$cmf_hrms_worker_zhicheng['name']:''; ?>">
                            <?php echo form_error('name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="staffName">职员名称：</label>
                            <input type="text" class="form-control" name="staffName" placeholder="Enter staffName" value="<?php echo !empty($cmf_hrms_worker_zhicheng['staffName'])?$cmf_hrms_worker_zhicheng['staffName']:''; ?>">
                            <?php echo form_error('staffName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="getTime">获取时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="getTime">
                            <?php echo form_error('getTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="agency">机构：</label>
                            <input type="text" class="form-control" name="agency" placeholder="Enter agency" value="<?php echo !empty($cmf_hrms_worker_zhicheng['agency'])?$cmf_hrms_worker_zhicheng['agency']:''; ?>">
                            <?php echo form_error('agency','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="inDepartment">所在部门：</label>
                            <input type="text" class="form-control" name="inDepartment" placeholder="Enter inDepartment" value="<?php echo !empty($cmf_hrms_worker_zhicheng['inDepartment'])?$cmf_hrms_worker_zhicheng['inDepartment']:''; ?>">
                            <?php echo form_error('inDepartment','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_hrms_worker_zhicheng['creator'])?$cmf_hrms_worker_zhicheng['creator']:''; ?>">
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