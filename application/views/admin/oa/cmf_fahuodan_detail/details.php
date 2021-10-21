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
            <div class="panel-heading">发货单明细详细内容<a href="<?php echo site_url('/oa/CmfFahuodanDetail/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfFahuodanDetail['id'])?$CmfFahuodanDetail['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品ID：</label>
                    <p><?php echo !empty($CmfFahuodanDetail['prodid'])?$CmfFahuodanDetail['prodid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品名称：</label>
                    <p><?php echo !empty($CmfFahuodanDetail['prodname'])?$CmfFahuodanDetail['prodname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品规格：</label>
                    <p><?php echo !empty($CmfFahuodanDetail['prodguige'])?$CmfFahuodanDetail['prodguige']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品型号：</label>
                    <p><?php echo !empty($CmfFahuodanDetail['prodxinghao'])?$CmfFahuodanDetail['prodxinghao']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品单位：</label>
                    <p><?php echo !empty($CmfFahuodanDetail['proddanwei'])?$CmfFahuodanDetail['proddanwei']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品价格：</label>
                    <p><?php echo !empty($CmfFahuodanDetail['price'])?$CmfFahuodanDetail['price']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品折扣：</label>
                    <p><?php echo !empty($CmfFahuodanDetail['zhekou'])?$CmfFahuodanDetail['zhekou']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品数量：</label>
                    <p><?php echo !empty($CmfFahuodanDetail['num'])?$CmfFahuodanDetail['num']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品备注：</label>
                    <p><?php echo !empty($CmfFahuodanDetail['beizhu'])?$CmfFahuodanDetail['beizhu']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品主ID：</label>
                    <p><?php echo !empty($CmfFahuodanDetail['mainrowid'])?$CmfFahuodanDetail['mainrowid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品金额：</label>
                    <p><?php echo !empty($CmfFahuodanDetail['jine'])?$CmfFahuodanDetail['jine']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>