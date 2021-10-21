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
            <div class="panel-heading">中层测评详细内容<a href="<?php echo site_url('/oa/CmfEduZhongcengceping/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfEduZhongcengceping['ID'])?$CmfEduZhongcengceping['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>测试名称：</label>
                    <p><?php echo !empty($CmfEduZhongcengceping['testName'])?$CmfEduZhongcengceping['testName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开始时间：</label>
                    <p><?php echo !empty($CmfEduZhongcengceping['startTime'])?$CmfEduZhongcengceping['startTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>结束时间：</label>
                    <p><?php echo !empty($CmfEduZhongcengceping['endTime'])?$CmfEduZhongcengceping['endTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否使用：</label>
                    <p><?php echo !empty($CmfEduZhongcengceping['isUse'])?$CmfEduZhongcengceping['isUse']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>由测试人：</label>
                    <p><?php echo !empty($CmfEduZhongcengceping['testManby'])?$CmfEduZhongcengceping['testManby']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>参评人员：</label>
                    <p><?php echo !empty($CmfEduZhongcengceping['joinTestMan'])?$CmfEduZhongcengceping['joinTestMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfEduZhongcengceping['creator'])?$CmfEduZhongcengceping['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfEduZhongcengceping['createTime'])?$CmfEduZhongcengceping['createTime']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>