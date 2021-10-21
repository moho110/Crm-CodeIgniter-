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
            <div class="panel-heading">行政考勤补登详细内容<a href="<?php echo site_url('/oa/CmfEduXingzhengKaoqinbudeng/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfEduXingzhengKaoqinbudeng['Id'])?$CmfEduXingzhengKaoqinbudeng['Id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>期限：</label>
                    <p><?php echo !empty($CmfEduXingzhengKaoqinbudeng['term'])?$CmfEduXingzhengKaoqinbudeng['term']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>部门：</label>
                    <p><?php echo !empty($CmfEduXingzhengKaoqinbudeng['department'])?$CmfEduXingzhengKaoqinbudeng['department']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>人员：</label>
                    <p><?php echo !empty($CmfEduXingzhengKaoqinbudeng['person'])?$CmfEduXingzhengKaoqinbudeng['person']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengKaoqinbudeng['time'])?$CmfEduXingzhengKaoqinbudeng['time']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>日期：</label>
                    <p><?php echo !empty($CmfEduXingzhengKaoqinbudeng['day'])?$CmfEduXingzhengKaoqinbudeng['day']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>类别：</label>
                    <p><?php echo !empty($CmfEduXingzhengKaoqinbudeng['class'])?$CmfEduXingzhengKaoqinbudeng['class']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>补登项目：</label>
                    <p><?php echo !empty($CmfEduXingzhengKaoqinbudeng['budengProject'])?$CmfEduXingzhengKaoqinbudeng['budengProject']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>补登状态：</label>
                    <p><?php echo !empty($CmfEduXingzhengKaoqinbudeng['budengStatus'])?$CmfEduXingzhengKaoqinbudeng['budengStatus']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作流ID：</label>
                    <p><?php echo !empty($CmfEduXingzhengKaoqinbudeng['workFlowID'])?$CmfEduXingzhengKaoqinbudeng['workFlowID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>审核人：</label>
                    <p><?php echo !empty($CmfEduXingzhengKaoqinbudeng['exMan'])?$CmfEduXingzhengKaoqinbudeng['exMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>审核时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengKaoqinbudeng['exTime'])?$CmfEduXingzhengKaoqinbudeng['exTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>人员名称：</label>
                    <p><?php echo !empty($CmfEduXingzhengKaoqinbudeng['personName'])?$CmfEduXingzhengKaoqinbudeng['personName']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>