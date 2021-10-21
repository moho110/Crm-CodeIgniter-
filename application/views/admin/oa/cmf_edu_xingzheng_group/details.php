<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<?php if(!empty($success_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-success"><?php echo $success_msg; ?></div>
    </div>
    <?php }elseif(!empty($error_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
    </div>
    <?php } ?>
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">行政分类详细内容<a href="<?php echo site_url('/oa/CmfEduXingzhengGroup/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfEduXingzhengGroup['Id'])?$CmfEduXingzhengGroup['Id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>部门名称：</label>
                    <p><?php echo !empty($CmfEduXingzhengGroup['departName'])?$CmfEduXingzhengGroup['departName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>分类名称：</label>
                    <p><?php echo !empty($CmfEduXingzhengGroup['groupName'])?$CmfEduXingzhengGroup['groupName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>成员名称：</label>
                    <p><?php echo !empty($CmfEduXingzhengGroup['memberName'])?$CmfEduXingzhengGroup['memberName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfEduXingzhengGroup['memo'])?$CmfEduXingzhengGroup['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfEduXingzhengGroup['creator'])?$CmfEduXingzhengGroup['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengGroup['createTime'])?$CmfEduXingzhengGroup['createTime']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>