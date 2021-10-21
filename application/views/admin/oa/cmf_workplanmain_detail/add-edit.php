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
                <div class="panel-heading"><?php echo $action; ?> 工作计划明细 <a href="<?php echo site_url('/oa/CmfWorkplanmainDetail/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="id">编号：</label>
                            <input type="text" class="form-control" name="id" placeholder="Enter id" value="<?php echo !empty($cmf_workplanmain_detail['id'])?$cmf_workplanmain_detail['id']:''; ?>">
                            <?php echo form_error('id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="mainrowid">产品主ID：</label>
                            <input type="text" class="form-control" name="mainrowid" placeholder="Enter mainrowid" value="<?php echo !empty($cmf_workplanmain_detail['mainrowid'])?$cmf_workplanmain_detail['mainrowid']:''; ?>">
                            <?php echo form_error('mainrowid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createman">创建人：</label>
                            <input type="text" class="form-control" name="createman" placeholder="Enter createman" value="<?php echo !empty($cmf_workplanmain_detail['createman'])?$cmf_workplanmain_detail['createman']:''; ?>">
                            <?php echo form_error('createman','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createtime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="createtime">
                            <?php echo form_error('createtime','<p class="help-block text-danger">','</p>'); ?>
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
                            <label for="content">内容：</label>
                            <textarea name="content" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_workplanmain_detail['content'])?$cmf_workplanmain_detail['content']:''; ?>
                            </textarea>
                            <?php echo form_error('content','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="result">结果：</label>
                            <input type="text" class="form-control" name="result" placeholder="Enter result" value="<?php echo !empty($cmf_workplanmain_detail['result'])?$cmf_workplanmain_detail['result']:''; ?>">
                            <?php echo form_error('result','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nexttime">下次时间：</label>
                            <input readonly class="form-control" type="text" id="contract" placeholder="YYYY-MM-DD hh:mm" name="nexttime">
                            <?php echo form_error('nexttime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nextcontent">下次内容：</label>
                            <input type="text" class="form-control" name="nextcontent" placeholder="Enter nextcontent" value="<?php echo !empty($cmf_workplanmain_detail['nextcontent'])?$cmf_workplanmain_detail['nextcontent']:''; ?>">
                            <?php echo form_error('nextcontent','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fujian">附件：</label>
                            <input type="text" class="form-control" name="fujian" placeholder="Enter fujian" value="<?php echo !empty($cmf_workplanmain_detail['fujian'])?$cmf_workplanmain_detail['fujian']:''; ?>">
                            <?php echo form_error('fujian','<p class="help-block text-danger">','</p>'); ?>
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