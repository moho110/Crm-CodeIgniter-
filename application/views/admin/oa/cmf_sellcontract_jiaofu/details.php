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
            <div class="panel-heading">销售合同交付详细内容<a href="<?php echo site_url('/oa/CmfSellcontractJiaofu/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfSellcontractJiaofu['id'])?$CmfSellcontractJiaofu['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>客户ID：</label>
                    <p><?php echo !empty($CmfSellcontractJiaofu['customerid'])?$CmfSellcontractJiaofu['customerid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>合同ID：</label>
                    <p><?php echo !empty($CmfSellcontractJiaofu['hetongid'])?$CmfSellcontractJiaofu['hetongid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品ID：</label>
                    <p><?php echo !empty($CmfSellcontractJiaofu['productid'])?$CmfSellcontractJiaofu['productid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>计划ID：</label>
                    <p><?php echo !empty($CmfSellcontractJiaofu['planid'])?$CmfSellcontractJiaofu['planid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>数量：</label>
                    <p><?php echo !empty($CmfSellcontractJiaofu['num'])?$CmfSellcontractJiaofu['num']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>价格：</label>
                    <p><?php echo !empty($CmfSellcontractJiaofu['price'])?$CmfSellcontractJiaofu['price']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>接收人：</label>
                    <p><?php echo !empty($CmfSellcontractJiaofu['jieshouren'])?$CmfSellcontractJiaofu['jieshouren']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>交付日期：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfSellcontractJiaofu['jiaofudate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfSellcontractJiaofu['beizhu'])?$CmfSellcontractJiaofu['beizhu']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfSellcontractJiaofu['createman'])?$CmfSellcontractJiaofu['createman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfSellcontractJiaofu['createtime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>备用一：</label>
                    <p><?php echo !empty($CmfSellcontractJiaofu['beiyong1'])?$CmfSellcontractJiaofu['beiyong1']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备用二：</label>
                    <p><?php echo !empty($CmfSellcontractJiaofu['beiyong2'])?$CmfSellcontractJiaofu['beiyong2']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备用三：</label>
                    <p><?php echo !empty($CmfSellcontractJiaofu['beiyong3'])?$CmfSellcontractJiaofu['beiyong3']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>金额：</label>
                    <p><?php echo !empty($CmfSellcontractJiaofu['jine'])?$CmfSellcontractJiaofu['jine']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>