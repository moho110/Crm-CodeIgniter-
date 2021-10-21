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
                <div class="panel-heading"><?php echo $action; ?> 证照 <a href="<?php echo site_url('/oa/CmfCertificate/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                        <div class="form-group">
                            <label for="user_id">用户ID：</label>
                            <input type="text" class="form-control" name="user_id" placeholder="Enter user_id" value="<?php echo !empty($cmf_certificate['user_id'])?$cmf_certificate['user_id']:''; ?>">
                            <?php echo form_error('user_id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="supplyid">供应商ID：</label>
                            <select name="supplyid">
                                <option value="">请选择供应商</option>
                                <?php foreach($CmfSupply as $CmfSupply) {?>
                                <option value="<?php echo $CmfSupply['supplyid'];?>"><?php echo $CmfSupply['supplyname'];?></option>
                                <?php }?>
                            </select>
                            <?php echo form_error('supplyid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="certificatetype">证照类型：</label>
                            <select name="certificatetype">
                                <option value="">请选择证照类型</option>
                                <option value="1" >卫生许可证</option>
                                <option value="2" >企业营业执照</option>
                                <option value="3" >生产许可证</option>
                                <option value="4" >商标注册证</option>
                                <option value="5" >质量检测报告</option>
                                <option value="6" >免检证书</option>
                                <option value="7" >海关检疫检验报告书</option>
                                <option value="8" >委托书或授权书</option>
                            </select>
                            <?php echo form_error('certificatetype','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="certificateno">证照编号：</label>
                            <input type="text" class="form-control" name="certificateno" placeholder="Enter certificateno" value="<?php echo !empty($cmf_certificate['certificateno'])?$cmf_certificate['certificateno']:''; ?>">
                            <?php echo form_error('certificateno','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="certificateinfo">证照信息：</label>
                            <textarea name="certificateinfo" cols="140" rows="10" style="resize: none;"></textarea>
                            <?php echo form_error('certificateinfo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fromdate">开始日期：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="fromdate">
                            <?php echo form_error('fromdate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="enddate">结束日期：</label>
                            <input readonly class="form-control" type="text" id="create_time" placeholder="YYYY-MM-DD hh:mm:ss" name="enddate">
                            <?php echo form_error('enddate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="explianstr">所属字符串：</label>
                            <input type="text" class="form-control" name="explianstr" placeholder="Enter explianstr" value="<?php echo !empty($cmf_certificate['explianstr'])?$cmf_certificate['explianstr']:''; ?>">
                            <?php echo form_error('explianstr','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="user_flag">用户标识：</label>
                            <input type="radio" name="user_flag" value="1">保留
                            <input type="radio" name="user_flag" value="0">删除
                            <?php echo form_error('user_flag','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fileaddress">文件地址：</label>
                            <input type="text" class="form-control" name="fileaddress" placeholder="Enter fileaddress" value="<?php echo !empty($cmf_certificate['fileaddress'])?$cmf_certificate['fileaddress']:''; ?>">
                            <?php echo form_error('fileaddress','<p class="help-block text-danger">','</p>'); ?>
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