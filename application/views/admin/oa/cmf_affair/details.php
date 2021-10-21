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
            <div class="panel-heading">CmfAffair Details <a href="<?php echo site_url('/oa/CmfAffair/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>事务ID：</label>
                    <p><?php echo !empty($CmfAffair['AFF_ID'])?$CmfAffair['AFF_ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户ID：</label>
                    <p><?php echo !empty($CmfAffair['USER_ID'])?$CmfAffair['USER_ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开始时间：</label>
                    <p><?php echo !empty($CmfAffair['BEGIN_TIME'])?$CmfAffair['BEGIN_TIME']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>结束时间：</label>
                    <p><?php echo !empty($CmfAffair['END_TIME'])?$CmfAffair['END_TIME']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>类型：</label>
                    <p><?php echo !empty($CmfAffair['TYPE'])?$CmfAffair['TYPE']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>其他日期：</label>
                    <p><?php echo !empty($CmfAffair['REMIND_DATE'])?$CmfAffair['REMIND_DATE']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>其他时间</label>
                    <p><?php echo !empty($CmfAffair['REMIND_TIME'])?$CmfAffair['REMIND_TIME']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>内容：</label>
                    <p><?php echo !empty($CmfAffair['CONTENT'])?$CmfAffair['CONTENT']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>最后时间</label>
                    <p><?php echo !empty($CmfAffair['LAST_REMIND'])?$CmfAffair['LAST_REMIND']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>短信时间：</label>
                    <p><?php echo !empty($CmfAffair['SMS2_REMIND'])?$CmfAffair['SMS2_REMIND']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>最后短信发送时间：</label>
                    <p><?php echo !empty($CmfAffair['LAST_SMS2_REMIND'])?$CmfAffair['LAST_SMS2_REMIND']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>管理者ID：</label>
                    <p><?php echo !empty($CmfAffair['MANAGER_ID'])?$CmfAffair['MANAGER_ID']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>