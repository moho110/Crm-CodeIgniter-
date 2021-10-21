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
                <div class="panel-heading"><?php echo $action; ?> 日志 <a href="<?php echo site_url('/oa/CmfCommlog/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ROWID">编号：</label>
                            <input type="text" class="form-control" name="ROWID" placeholder="Enter ROWID" value="<?php echo !empty($cmf_commlog['ROWID'])?$cmf_commlog['ROWID']:''; ?>">
                            <?php echo form_error('ROWID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="sysuser">系统用户：</label>
                            <input type="text" class="form-control" name="sysuser" placeholder="Enter sysuser" value="<?php echo !empty($cmf_commlog['sysuser'])?$cmf_commlog['sysuser']:''; ?>">
                            <?php echo form_error('sysuser','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="user_id">用户ID：</label>
                            <input type="text" class="form-control" name="user_id" placeholder="Enter user_id" value="<?php echo !empty($cmf_commlog['user_id'])?$cmf_commlog['user_id']:''; ?>">
                            <?php echo form_error('user_id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="customerid">客户ID：</label>
                            <input type="text" class="form-control" name="customerid" placeholder="Enter customerid" value="<?php echo !empty($cmf_commlog['customerid'])?$cmf_commlog['customerid']:''; ?>">
                            <?php echo form_error('customerid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="commdate">日志日期：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="commdate">
                            <?php echo form_error('commdate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="linkmanid">联系人ID：</label>
                            <input type="text" class="form-control" name="linkmanid" placeholder="Enter linkmanid" value="<?php echo !empty($cmf_commlog['linkmanid'])?$cmf_commlog['linkmanid']:''; ?>">
                            <?php echo form_error('linkmanid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="project">项目：</label>
                            <textarea name="project" cols="50" rows="10"></textarea>
                            <?php echo form_error('project','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="productid">产品ID：</label>
                            <input type="text" class="form-control" name="productid" placeholder="Enter productid" value="<?php echo !empty($cmf_commlog['productid'])?$cmf_commlog['productid']:''; ?>">
                            <?php echo form_error('productid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="projectphase">项目简介：</label>
                            <textarea name="projectphase" cols="50" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_commlog['projectphase'])?$cmf_commlog['projectphase']:''; ?>">
                            </textarea>
                            <?php echo form_error('projectphase','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="iscompete">是否竞争：</label>
                            <input type="radio" name="iscompete" value="1">竞争
                            <input type="radio" name="iscompete" value="0">不竞争
                            <?php echo form_error('iscompete','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="comminfo">日志信息：</label>
                            <textarea name="comminfo" cols="50" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_commlog['comminfo'])?$cmf_commlog['comminfo']:''; ?>
                            </textarea>
                            <?php echo form_error('comminfo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="moniterinfo">监视器信息：</label>
                            <textarea name="moniterinfo" cols="50" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_commlog['moniterinfo'])?$cmf_commlog['moniterinfo']:''; ?>
                            </textarea>
                            <?php echo form_error('moniterinfo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="moniterman">监视人：</label>
                            <input type="text" class="form-control" name="moniterman" placeholder="Enter moniterman" value="<?php echo !empty($cmf_commlog['moniterman'])?$cmf_commlog['moniterman']:''; ?>">
                            <?php echo form_error('moniterman','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="user_flag">用户标识：</label>
                            <input type="radio" name="user_flag" value="1">保留
                            <input type="radio" name="user_flag" value="0">删除
                            <?php echo form_error('user_flag','<p class="help-block text-danger">','</p>'); ?>
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