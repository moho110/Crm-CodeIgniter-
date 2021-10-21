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
            <div class="panel-heading">社会关系详细内容<a href="<?php echo site_url('/oa/CmfHrmsSocialrelation/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfHrmsSocialrelation['ID'])?$CmfHrmsSocialrelation['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>关系：</label>
                    <p><?php echo !empty($CmfHrmsSocialrelation['relation'])?$CmfHrmsSocialrelation['relation']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>名称：</label>
                    <p><?php echo !empty($CmfHrmsSocialrelation['name'])?$CmfHrmsSocialrelation['name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>政治面貌：</label>
                    <p><?php echo !empty($CmfHrmsSocialrelation['political'])?$CmfHrmsSocialrelation['political']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>公司：</label>
                    <p><?php echo !empty($CmfHrmsSocialrelation['company'])?$CmfHrmsSocialrelation['company']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>职员：</label>
                    <p><?php echo !empty($CmfHrmsSocialrelation['staff'])?$CmfHrmsSocialrelation['staff']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfHrmsSocialrelation['creator'])?$CmfHrmsSocialrelation['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsSocialrelation['createTime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>工作ID：</label>
                    <p><?php echo !empty($CmfHrmsSocialrelation['workId'])?$CmfHrmsSocialrelation['workId']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>命名：</label>
                    <p><?php echo !empty($CmfHrmsSocialrelation['named'])?$CmfHrmsSocialrelation['named']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>所在部门：</label>
                    <p><?php echo !empty($CmfHrmsSocialrelation['inDepartment'])?$CmfHrmsSocialrelation['inDepartment']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作地址：</label>
                    <p><?php echo !empty($CmfHrmsSocialrelation['workAddress'])?$CmfHrmsSocialrelation['workAddress']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>电话号码：</label>
                    <p><?php echo !empty($CmfHrmsSocialrelation['telephone'])?$CmfHrmsSocialrelation['telephone']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>