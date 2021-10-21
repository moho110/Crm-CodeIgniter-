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
            <div class="panel-heading">奖惩详细内容<a href="<?php echo site_url('/oa/CmfHrmsRewardPunishment/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfHrmsRewardPunishment['ID'])?$CmfHrmsRewardPunishment['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>类型：</label>
                    <p>
                        <?php if ($CmfHrmsRewardPunishment['type'] == '1') {?>
                            保留
                        <?php } elseif ($CmfHrmsRewardPunishment['type'] == '0') {?>
                            删除
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>状态：</label>
                    <p>
                        <?php if ($CmfHrmsRewardPunishment['status'] == '1') {?>
                            良好
                        <?php } elseif ($CmfHrmsRewardPunishment['status'] == '0') {?>
                            一般
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>工作ID：</label>
                    <p><?php echo !empty($CmfHrmsRewardPunishment['workId'])?$CmfHrmsRewardPunishment['workId']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>名称：</label>
                    <p><?php echo !empty($CmfHrmsRewardPunishment['name'])?$CmfHrmsRewardPunishment['name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>所在部门：</label>
                    <p><?php echo !empty($CmfHrmsRewardPunishment['inDepartment'])?$CmfHrmsRewardPunishment['inDepartment']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>惩罚名称：</label>
                    <p><?php echo !empty($CmfHrmsRewardPunishment['punishmentName'])?$CmfHrmsRewardPunishment['punishmentName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>惩罚理由：</label>
                    <p><?php echo !empty($CmfHrmsRewardPunishment['punishmentReason'])?$CmfHrmsRewardPunishment['punishmentReason']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>惩罚内容：</label>
                    <p><?php echo !empty($CmfHrmsRewardPunishment['punishmentContent'])?$CmfHrmsRewardPunishment['punishmentContent']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>批准部门：</label>
                    <p><?php echo !empty($CmfHrmsRewardPunishment['approvalDep'])?$CmfHrmsRewardPunishment['approvalDep']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>批准人：</label>
                    <p><?php echo !empty($CmfHrmsRewardPunishment['approvalMan'])?$CmfHrmsRewardPunishment['approvalMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>批准时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsRewardPunishment['approvalTime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>生效日期：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsRewardPunishment['shengxiaobyDate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfHrmsRewardPunishment['memo'])?$CmfHrmsRewardPunishment['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>取消时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsRewardPunishment['cancelTime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>取消理由：</label>
                    <p><?php echo !empty($CmfHrmsRewardPunishment['cancelReason'])?$CmfHrmsRewardPunishment['cancelReason']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfHrmsRewardPunishment['creator'])?$CmfHrmsRewardPunishment['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsRewardPunishment['createTime'])); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>