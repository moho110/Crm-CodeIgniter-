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
            <div class="panel-heading">客户产品详细内容<a href="<?php echo site_url('/oa/CmfCustomerproduct/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfCustomerproduct['ROWID'])?$CmfCustomerproduct['ROWID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>主题：</label>
                    <p><?php echo !empty($CmfCustomerproduct['theme'])?$CmfCustomerproduct['theme']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>报价人：</label>
                    <p><?php echo !empty($CmfCustomerproduct['priceMan'])?$CmfCustomerproduct['priceMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>客户：</label>
                    <p><?php echo !empty($CmfCustomerproduct['clients'])?$CmfCustomerproduct['clients']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>接收者：</label>
                    <p><?php echo !empty($CmfCustomerproduct['reiceiver'])?$CmfCustomerproduct['reiceiver']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>报价时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfCustomerproduct['priceTime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>金额：</label>
                    <p><?php echo !empty($CmfCustomerproduct['count'])?$CmfCustomerproduct['count']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>销售机会：</label>
                    <p><?php echo !empty($CmfCustomerproduct['saleChance'])?$CmfCustomerproduct['saleChance']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>交付介绍：</label>
                    <p><?php echo !empty($CmfCustomerproduct['jiaofuIntro'])?$CmfCustomerproduct['jiaofuIntro']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>支付介绍：</label>
                    <p><?php echo !empty($CmfCustomerproduct['toPayIntro'])?$CmfCustomerproduct['toPayIntro']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>包装输出介绍：</label>
                    <p><?php echo !empty($CmfCustomerproduct['packageExpIntro'])?$CmfCustomerproduct['packageExpIntro']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfCustomerproduct['memo'])?$CmfCustomerproduct['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>附件：</label>
                    <p><?php echo !empty($CmfCustomerproduct['attach'])?$CmfCustomerproduct['attach']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否审核：</label>
                    <p>
                        <?php if ($CmfCustomerproduct['isExamine'] == '1') {?>
                            已审核
                        <?php } elseif ($CmfProducttype['isExamine'] == '0') {?>
                            未审核
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>创建者：</label>
                    <p><?php echo !empty($CmfCustomerproduct['creator'])?$CmfCustomerproduct['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfCustomerproduct['createTime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>审核人：</label>
                    <p><?php echo !empty($CmfCustomerproduct['examineMan'])?$CmfCustomerproduct['examineMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>审核时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfCustomerproduct['examineTime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>单元ID：</label>
                    <p><?php echo !empty($CmfCustomerproduct['unitid'])?$CmfCustomerproduct['unitid']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>