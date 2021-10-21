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
            <div class="panel-heading">客户等级详细内容<a href="<?php echo site_url('/oa/CmfCustomerlever/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfCustomerlever['ROWID'])?$CmfCustomerlever['ROWID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>名称：</label>
                    <p><?php echo !empty($CmfCustomerlever['name'])?$CmfCustomerlever['name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户ID：</label>
                    <p><?php echo !empty($CmfCustomerlever['user_id'])?$CmfCustomerlever['user_id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>代码：</label>
                    <p><?php echo !empty($CmfCustomerlever['code'])?$CmfCustomerlever['code']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户标识：</label>
                    <p>
                        <?php if ($CmfCustomerlever['user_flag'] == '1') {?>
                            保留
                        <?php } elseif ($CmfCustomerlever['user_flag'] == '0') {?>
                            删除
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>相关价格：</label>
                    <p><?php echo !empty($CmfCustomerlever['relatePrice'])?$CmfCustomerlever['relatePrice']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>