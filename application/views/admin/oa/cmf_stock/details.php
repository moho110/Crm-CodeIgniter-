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
            <div class="panel-heading">库存详细内容<a href="<?php echo site_url('/oa/CmfStock/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfStock['ROWID'])?$CmfStock['ROWID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>名称：</label>
                    <p><?php echo !empty($CmfStock['name'])?$CmfStock['name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>ID：</label>
                    <p><?php echo !empty($CmfStock['id'])?$CmfStock['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户标识：</label>
                    <p>
                        <?php if ($CmfStock['user_flag'] == '1') {?>
                            保留
                        <?php } elseif ($CmfStock['user_flag'] == '0') {?>
                            删除
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>用户ID：</label>
                    <p><?php echo !empty($CmfStock['user_id'])?$CmfStock['user_id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否锁定：</label>
                    <p><?php echo !empty($CmfStock['isClock'])?$CmfStock['isClock']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>等级编号：</label>
                    <p><?php echo !empty($CmfStock['leverno'])?$CmfStock['leverno']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>成本类型：</label>
                    <p><?php echo !empty($CmfStock['costtype'])?$CmfStock['costtype']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>