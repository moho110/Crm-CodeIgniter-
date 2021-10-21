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
                <div class="panel-heading"><?php echo $action; ?> 固定资产报废 <a href="<?php echo site_url('/oa/CmfFixedassetbaofei/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_fixedassetbaofei['ID'])?$cmf_fixedassetbaofei['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="setName">资产名称：</label>
                            <input type="text" class="form-control" name="setName" placeholder="Enter setName" value="<?php echo !empty($cmf_fixedassetbaofei['setName'])?$cmf_fixedassetbaofei['setName']:''; ?>">
                            <?php echo form_error('setName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="setNo">资产编号：</label>
                            <input type="text" class="form-control" name="setNo" placeholder="Enter setNo" value="<?php echo !empty($cmf_fixedassetbaofei['setNo'])?$cmf_fixedassetbaofei['setNo']:''; ?>">
                            <?php echo form_error('setNo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="inDepartment">所在部门：</label>
                            <input type="text" class="form-control" name="inDepartment" placeholder="Enter inDepartment" value="<?php echo !empty($cmf_fixedassetbaofei['inDepartment'])?$cmf_fixedassetbaofei['inDepartment']:''; ?>">
                            <?php echo form_error('inDepartment','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="baofeiTime">报废时间：</label>
                            <input type="text" class="form-control" name="baofeiTime" placeholder="Enter baofeiTime" value="<?php echo !empty($cmf_fixedassetbaofei['baofeiTime'])?$cmf_fixedassetbaofei['baofeiTime']:''; ?>">
                            <?php echo form_error('baofeiTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="baofeiApplyMan">报废申请人：</label>
                            <input type="text" class="form-control" name="baofeiApplyMan" placeholder="Enter baofeiApplyMan" value="<?php echo !empty($cmf_fixedassetbaofei['baofeiApplyMan'])?$cmf_fixedassetbaofei['baofeiApplyMan']:''; ?>">
                            <?php echo form_error('baofeiApplyMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="approvalMan">批准人：</label>
                            <input type="text" class="form-control" name="approvalMan" placeholder="Enter approvalMan" value="<?php echo !empty($cmf_fixedassetbaofei['approvalMan'])?$cmf_fixedassetbaofei['approvalMan']:''; ?>">
                            <?php echo form_error('approvalMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <input type="text" class="form-control" name="memo" placeholder="Enter memo" value="<?php echo !empty($cmf_fixedassetbaofei['memo'])?$cmf_fixedassetbaofei['memo']:''; ?>">
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_fixedassetbaofei['creator'])?$cmf_fixedassetbaofei['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input type="text" class="form-control" name="createTime" placeholder="Enter createTime" value="<?php echo !empty($cmf_fixedassetbaofei['createTime'])?$cmf_fixedassetbaofei['createTime']:''; ?>">
                            <?php echo form_error('createTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="price">价格：</label>
                            <input type="text" class="form-control" name="price" placeholder="Enter price" value="<?php echo !empty($cmf_fixedassetbaofei['price'])?$cmf_fixedassetbaofei['price']:''; ?>">
                            <?php echo form_error('price','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="quantity">数量：</label>
                            <input type="text" class="form-control" name="quantity" placeholder="Enter quantity" value="<?php echo !empty($cmf_fixedassetbaofei['quantity'])?$cmf_fixedassetbaofei['quantity']:''; ?>">
                            <?php echo form_error('quantity','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="count">金额：</label>
                            <input type="text" class="form-control" name="count" placeholder="Enter count" value="<?php echo !empty($cmf_fixedassetbaofei['count'])?$cmf_fixedassetbaofei['count']:''; ?>">
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