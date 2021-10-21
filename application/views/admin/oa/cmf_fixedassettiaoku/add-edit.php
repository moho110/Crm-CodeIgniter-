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
                <div class="panel-heading"><?php echo $action; ?> 固定资产调库 <a href="<?php echo site_url('/oa/CmfFixedassettiaoku/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_fixedassettiaoku['ID'])?$cmf_fixedassettiaoku['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="setName">资产名称：</label>
                            <input type="text" class="form-control" name="setName" placeholder="Enter setName" value="<?php echo !empty($cmf_fixedassettiaoku['setName'])?$cmf_fixedassettiaoku['setName']:''; ?>">
                            <?php echo form_error('setName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="setNo">资产编号：</label>
                            <input type="text" class="form-control" name="setNo" placeholder="Enter setNo" value="<?php echo !empty($cmf_fixedassettiaoku['setNo'])?$cmf_fixedassettiaoku['setNo']:''; ?>">
                            <?php echo form_error('setNo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="oriInDepartment">原所在部门：</label>
                            <input type="text" class="form-control" name="oriInDepartment" placeholder="Enter oriInDepartment" value="<?php echo !empty($cmf_fixedassettiaoku['oriInDepartment'])?$cmf_fixedassettiaoku['oriInDepartment']:''; ?>">
                            <?php echo form_error('oriInDepartment','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nowInDepartment">现所在部门：</label>
                            <input type="text" class="form-control" name="nowInDepartment" placeholder="Enter nowInDepartment" value="<?php echo !empty($cmf_fixedassettiaoku['nowInDepartment'])?$cmf_fixedassettiaoku['nowInDepartment']:''; ?>">
                            <?php echo form_error('nowInDepartment','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="approvalMan">批准人：</label>
                            <input type="text" class="form-control" name="approvalMan" placeholder="Enter approvalMan" value="<?php echo !empty($cmf_fixedassettiaoku['approvalMan'])?$cmf_fixedassettiaoku['approvalMan']:''; ?>">
                            <?php echo form_error('approvalMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <input type="text" class="form-control" name="memo" placeholder="Enter memo" value="<?php echo !empty($cmf_fixedassettiaoku['memo'])?$cmf_fixedassettiaoku['memo']:''; ?>">
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_fixedassettiaoku['creator'])?$cmf_fixedassettiaoku['creator']:''; ?>">
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input type="text" class="form-control" name="createTime" placeholder="Enter createTime" value="<?php echo !empty($cmf_fixedassettiaoku['createTime'])?$cmf_fixedassettiaoku['createTime']:''; ?>">
                            <?php echo form_error('createTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="price">价格：</label>
                            <input type="text" class="form-control" name="price" placeholder="Enter price" value="<?php echo !empty($cmf_fixedassettiaoku['price'])?$cmf_fixedassettiaoku['price']:''; ?>">
                            <?php echo form_error('price','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="quantity">数量：</label>
                            <input type="text" class="form-control" name="quantity" placeholder="Enter quantity" value="<?php echo !empty($cmf_fixedassettiaoku['quantity'])?$cmf_fixedassettiaoku['quantity']:''; ?>">
                            <?php echo form_error('quantity','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="count">金额：</label>
                            <input type="text" class="form-control" name="count" placeholder="Enter count" value="<?php echo !empty($cmf_fixedassettiaoku['count'])?$cmf_fixedassettiaoku['count']:''; ?>">
                            <?php echo form_error('count','<p class="help-block text-danger">','</p>'); ?>
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