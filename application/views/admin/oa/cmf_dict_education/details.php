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
            <div class="panel-heading">教育详细内容<a href="<?php echo site_url('/oa/CmfDictEducation/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfDictEducation['Dict_EducationID'])?$CmfDictEducation['Dict_EducationID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>教育名称：</label>
                    <p><?php echo !empty($CmfDictEducation['Dict_EducationName'])?$CmfDictEducation['Dict_EducationName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>教育代码：</label>
                    <p><?php echo !empty($CmfDictEducation['Dict_EducationCode'])?$CmfDictEducation['Dict_EducationCode']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>