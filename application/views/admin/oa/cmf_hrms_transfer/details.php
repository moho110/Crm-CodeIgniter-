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
            <div class="panel-heading">转职详细内容<a href="<?php echo site_url('/oa/CmfHrmsTransfer/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfHrmsTransfer['ID'])?$CmfHrmsTransfer['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作ID：</label>
                    <p><?php echo !empty($CmfHrmsTransfer['workId'])?$CmfHrmsTransfer['workId']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>名称：</label>
                    <p><?php echo !empty($CmfHrmsTransfer['name'])?$CmfHrmsTransfer['name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>转职日期：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsTransfer['transferDate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>所在部门：</label>
                    <p><?php echo !empty($CmfHrmsTransfer['inDepartment'])?$CmfHrmsTransfer['inDepartment']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>之后部门：</label>
                    <p><?php echo !empty($CmfHrmsTransfer['afterDep'])?$CmfHrmsTransfer['afterDep']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>之前职员：</label>
                    <p><?php echo !empty($CmfHrmsTransfer['beforeStaff'])?$CmfHrmsTransfer['beforeStaff']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>之后职员：</label>
                    <p><?php echo !empty($CmfHrmsTransfer['afterStaff'])?$CmfHrmsTransfer['afterStaff']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>之后岗位：</label>
                    <p><?php echo !empty($CmfHrmsTransfer['beforegangwei'])?$CmfHrmsTransfer['beforegangwei']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>之后岗位：</label>
                    <p><?php echo !empty($CmfHrmsTransfer['aftergangwei'])?$CmfHrmsTransfer['aftergangwei']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>转职理由：</label>
                    <p><?php echo !empty($CmfHrmsTransfer['transferReason'])?$CmfHrmsTransfer['transferReason']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>职员：</label>
                    <p><?php echo !empty($CmfHrmsTransfer['staffMan'])?$CmfHrmsTransfer['staffMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfHrmsTransfer['memo'])?$CmfHrmsTransfer['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作场合：</label>
                    <p><?php echo !empty($CmfHrmsTransfer['jobsSituation'])?$CmfHrmsTransfer['jobsSituation']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>转职类型：</label>
                    <p>
                        <?php if ($CmfHrmsTransfer['transferType'] == '1') {?>
                            职业经理人
                        <?php } elseif ($CmfHrmsTransfer['transferType'] == '2') {?>
                            技术工程师
                        <?php } elseif ($CmfHrmsTransfer['transferType'] == '3') {?>
                            高级工程师
                        <?php } elseif ($CmfHrmsTransfer['transferType'] == '4') {?>
                            人力资源经理
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfHrmsTransfer['creator'])?$CmfHrmsTransfer['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsTransfer['creatTime'])); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>