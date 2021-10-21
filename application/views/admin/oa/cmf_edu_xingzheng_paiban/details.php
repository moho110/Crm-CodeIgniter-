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
            <div class="panel-heading">行政排班详细内容<a href="<?php echo site_url('/oa/CmfEduXingzhengPaiban/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfEduXingzhengPaiban['Id'])?$CmfEduXingzhengPaiban['Id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>期限名称：</label>
                    <p><?php echo !empty($CmfEduXingzhengPaiban['termName'])?$CmfEduXingzhengPaiban['termName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>周：</label>
                    <p><?php echo !empty($CmfEduXingzhengPaiban['week'])?$CmfEduXingzhengPaiban['week']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>日期：</label>
                    <p><?php echo !empty($CmfEduXingzhengPaiban['day'])?$CmfEduXingzhengPaiban['day']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>考勤日期：</label>
                    <p><?php echo !empty($CmfEduXingzhengPaiban['kaoqinDate'])?$CmfEduXingzhengPaiban['kaoqinDate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>类别名称：</label>
                    <p><?php echo !empty($CmfEduXingzhengPaiban['className'])?$CmfEduXingzhengPaiban['className']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>排班人员：</label>
                    <p><?php echo !empty($CmfEduXingzhengPaiban['paipanPerson'])?$CmfEduXingzhengPaiban['paipanPerson']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfEduXingzhengPaiban['memo'])?$CmfEduXingzhengPaiban['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfEduXingzhengPaiban['creator'])?$CmfEduXingzhengPaiban['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengPaiban['createTime'])?$CmfEduXingzhengPaiban['createTime']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>