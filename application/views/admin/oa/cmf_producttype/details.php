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
            <div class="panel-heading">产品类型详细内容<a href="<?php echo site_url('/oa/CmfProducttype/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfProducttype['ROWID'])?$CmfProducttype['ROWID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>名称：</label>
                    <p><?php echo !empty($CmfProducttype['name'])?$CmfProducttype['name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfProducttype['id'])?$CmfProducttype['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>代码：</label>
                    <p><?php echo !empty($CmfProducttype['Code'])?$CmfProducttype['Code']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>查看类型：</label>
                    <p><?php echo !empty($CmfProducttype['viewtype'])?$CmfProducttype['viewtype']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户ID：</label>
                    <p><?php echo !empty($CmfProducttype['user_id'])?$CmfProducttype['user_id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户标识：</label>
                    <p>
                        <?php if ($CmfProducttype['user_flag'] == '1') {?>
                            保留
                        <?php } elseif ($CmfProducttype['user_flag'] == '0') {?>
                            删除
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>等级编号：</label>
                    <p><?php echo !empty($CmfProducttype['leverno'])?$CmfProducttype['leverno']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否购买计划：</label>
                    <p>
                        <?php if ($CmfProducttype['isbuyplan'] == '1') {?>
                            购买
                        <?php } elseif ($CmfProducttype['isbuyplan'] == '0') {?>
                            未购买
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>是否自动出库：</label>
                    <p>
                        <?php if ($CmfProducttype['isautoout'] == '1') {?>
                            出库
                        <?php } elseif ($CmfProducttype['isautoout'] == '0') {?>
                            不出库
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>父级ID：</label>
                    <p><?php echo !empty($CmfProducttype['parentid'])?$CmfProducttype['parentid']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>