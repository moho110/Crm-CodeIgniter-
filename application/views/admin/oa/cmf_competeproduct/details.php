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
            <div class="panel-heading">竞争产品详细内容<a href="<?php echo site_url('/oa/CmfCompeteproduct/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfCompeteproduct['ROWID'])?$CmfCompeteproduct['ROWID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户ID：</label>
                    <p><?php echo !empty($CmfCompeteproduct['user_id'])?$CmfCompeteproduct['user_id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>客户ID：</label>
                    <p><?php echo !empty($CmfCompeteproduct['customerid'])?$CmfCompeteproduct['customerid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品ID：</label>
                    <p><?php echo !empty($CmfCompeteproduct['productid'])?$CmfCompeteproduct['productid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>信息出处：</label>
                    <p><?php echo !empty($CmfCompeteproduct['infofrom'])?$CmfCompeteproduct['infofrom']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>竞争产品：</label>
                    <p><?php echo !empty($CmfCompeteproduct['comproduct'])?$CmfCompeteproduct['comproduct']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>竞争名称：</label>
                    <p><?php echo !empty($CmfCompeteproduct['compname'])?$CmfCompeteproduct['compname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>竞争表：</label>
                    <p><?php echo !empty($CmfCompeteproduct['compexcel'])?$CmfCompeteproduct['compexcel']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>反竞争：</label>
                    <p><?php echo !empty($CmfCompeteproduct['compdefect'])?$CmfCompeteproduct['compdefect']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>竞争价格：</label>
                    <p><?php echo !empty($CmfCompeteproduct['compprice'])?$CmfCompeteproduct['compprice']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户标识：</label>
                    <p>
                        <?php if ($CmfCompeteproduct['user_flag'] == '1') {?>
                            保留
                        <?php } elseif ($CmfCompeteproduct['user_flag'] == '0') {?>
                            删除
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>文件地址：</label>
                    <p><?php echo !empty($CmfCompeteproduct['fileaddress'])?$CmfCompeteproduct['fileaddress']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfCompeteproduct['createtime'])); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>