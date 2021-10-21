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
            <div class="panel-heading">产品退货汇总明细内容 <a href="<?php echo site_url('/oa/CmfTuihuohuizong/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfTuihuohuizong['id'])?$CmfTuihuohuizong['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品ID：</label>
                    <p><?php echo !empty($CmfTuihuohuizong['prodid'])?$CmfTuihuohuizong['prodid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品名称：</label>
                    <p><?php echo !empty($CmfTuihuohuizong['prodname'])?$CmfTuihuohuizong['prodname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品规格：</label>
                    <p><?php echo !empty($CmfTuihuohuizong['prodguige'])?$CmfTuihuohuizong['prodguige']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品型号：</label>
                    <p><?php echo !empty($CmfTuihuohuizong['prodxinghao'])?$CmfTuihuohuizong['prodxinghao']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品单位：</label>
                    <p><?php echo !empty($CmfTuihuohuizong['proddanwei'])?$CmfTuihuohuizong['proddanwei']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品价格：</label>
                    <p><?php echo !empty($CmfTuihuohuizong['price'])?$CmfTuihuohuizong['price']:''; ?></p>
                    </p>
                </div>
                <div class="form-group">
                    <label>产品折扣：</label>
                    <p><?php echo !empty($CmfTuihuohuizong['zhekou'])?$CmfTuihuohuizong['zhekou']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品数量：</label>
                    <p><?php echo !empty($CmfTuihuohuizong['num'])?$CmfTuihuohuizong['num']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品金额：</label>
                    <p><?php echo !empty($CmfTuihuohuizong['jine'])?$CmfTuihuohuizong['jine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品出库数量：</label>
                    <p><?php echo !empty($CmfTuihuohuizong['chukunum'])?$CmfTuihuohuizong['chukunum']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商ID：</label>
                    <p><?php echo !empty($CmfTuihuohuizong['supplyid'])?$CmfTuihuohuizong['supplyid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商名称：</label>
                    <p><?php echo !empty($CmfTuihuohuizong['supplyname'])?$CmfTuihuohuizong['supplyname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>电话号码：</label>
                    <p><?php echo !empty($CmfTuihuohuizong['phone'])?$CmfTuihuohuizong['phone']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>传真号码：</label>
                    <p><?php echo !empty($CmfTuihuohuizong['fax'])?$CmfTuihuohuizong['fax']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>电子邮件：</label>
                    <p><?php echo !empty($CmfTuihuohuizong['email'])?$CmfTuihuohuizong['email']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开始日期：</label>
                    <p><?php echo date("Y年m月d日",strtotime($CmfTuihuohuizong['startdate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>结束日期：</label>
                    <p><?php echo date("Y年m月d日",strtotime($CmfTuihuohuizong['enddate'])); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>