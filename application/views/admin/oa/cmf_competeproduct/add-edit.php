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
                <div class="panel-heading"><?php echo $action; ?> 竞争产品 <a href="<?php echo site_url('/oa/CmfCompeteproduct/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ROWID">编号：</label>
                            <input readonly type="text" class="form-control" name="ROWID" placeholder="Enter ROWID" value="<?php echo !empty($cmf_competeproduct['ROWID'])?$cmf_competeproduct['ROWID']:''; ?>">
                            <?php echo form_error('ROWID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="user_id">用户ID：</label>
                            <input type="text" class="form-control" name="user_id" placeholder="Enter user_id" value="<?php echo !empty($cmf_competeproduct['user_id'])?$cmf_competeproduct['user_id']:''; ?>">
                            <?php echo form_error('user_id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="customerid">客户ID：</label>
                            <input type="text" class="form-control" name="customerid" placeholder="Enter customerid" value="<?php echo !empty($cmf_competeproduct['customerid'])?$cmf_competeproduct['customerid']:''; ?>">
                            <?php echo form_error('customerid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="productid">产品ID：</label>
                            <input type="text" class="form-control" name="productid" placeholder="Enter productid" value="<?php echo !empty($cmf_competeproduct['productid'])?$cmf_competeproduct['productid']:''; ?>">
                            <?php echo form_error('productid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="infofrom">信息出处：</label>
                            <input type="text" class="form-control" name="infofrom" placeholder="Enter infofrom" value="<?php echo !empty($cmf_competeproduct['infofrom'])?$cmf_competeproduct['infofrom']:''; ?>">
                            <?php echo form_error('infofrom','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="comproduct">竞争产品：</label>
                            <input type="text" class="form-control" name="comproduct" placeholder="Enter comproduct" value="<?php echo !empty($cmf_competeproduct['comproduct'])?$cmf_competeproduct['comproduct']:''; ?>">
                            <?php echo form_error('comproduct','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="compname">竞争名称：</label>
                            <input type="text" class="form-control" name="compname" placeholder="Enter compname" value="<?php echo !empty($cmf_competeproduct['compname'])?$cmf_competeproduct['compname']:''; ?>">
                            <?php echo form_error('compname','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="compexcel">竞争表：</label>
                            <input type="text" class="form-control" name="compexcel" placeholder="Enter compexcel" value="<?php echo !empty($cmf_competeproduct['compexcel'])?$cmf_competeproduct['compexcel']:''; ?>">
                            <?php echo form_error('compexcel','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="compdefect">反竞争：</label>
                            <input type="text" class="form-control" name="compdefect" placeholder="Enter compdefect" value="<?php echo !empty($cmf_competeproduct['compdefect'])?$cmf_competeproduct['compdefect']:''; ?>">
                            <?php echo form_error('compdefect','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="compprice">竞争价格：</label>
                            <input type="text" class="form-control" name="compprice" placeholder="Enter compprice" value="<?php echo !empty($cmf_competeproduct['compprice'])?$cmf_competeproduct['compprice']:''; ?>">
                            <?php echo form_error('compprice','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="user_flag">用户标识：</label>
                            <input type="radio" name="user_flag" value="1">保留
                            <input type="radio" name="user_flag" value="0">删除
                            <?php echo form_error('user_flag','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fileaddress">文件地址：</label>
                            <input type="text" class="form-control" name="fileaddress" placeholder="Enter fileaddress" value="<?php echo !empty($cmf_competeproduct['fileaddress'])?$cmf_competeproduct['fileaddress']:''; ?>">
                            <?php echo form_error('fileaddress','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createtime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="createtime">
                            <?php echo form_error('createtime','<p class="help-block text-danger">','</p>'); ?>
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