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
            <div class="panel-heading">产品采购汇总详细内容 <a href="<?php echo site_url('/oa/CmfChanpincaigouhuizong/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfChanpincaigouhuizong['id'])?$CmfChanpincaigouhuizong['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>主题：</label>
                    <p style="color:red;font-family: bold;"><?php echo !empty($CmfChanpincaigouhuizong['zhuti'])?$CmfChanpincaigouhuizong['zhuti']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品名称：</label>
                    <p style="color:red;font-family: bold;"><?php echo !empty($CmfChanpincaigouhuizong['prodname'])?$CmfChanpincaigouhuizong['prodname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商ID：</label>
                    <p style="color:red;font-family: bold;"><?php echo !empty($CmfChanpincaigouhuizong['supplyid'])?$CmfChanpincaigouhuizong['supplyid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>联系人：</label>
                    <p style="color:red;font-family: bold;"><?php echo !empty($CmfChanpincaigouhuizong['linkman'])?$CmfChanpincaigouhuizong['linkman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>采购日期：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfChanpincaigouhuizong['caigoudate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>单号：</label>
                    <p style="color:red;font-family: bold;"><?php echo !empty($CmfChanpincaigouhuizong['danhao'])?$CmfChanpincaigouhuizong['danhao']:''; ?></p>
                    </p>
                </div>
                <div class="form-group">
                    <label>到货日期：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfChanpincaigouhuizong['daohuodate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p style="color:red;font-family: bold;"><?php echo !empty($CmfChanpincaigouhuizong['createman'])?$CmfChanpincaigouhuizong['createman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>总金额：</label>
                    <p style="color:red;font-family: bold;"><?php echo !empty($CmfChanpincaigouhuizong['totalmoney'])?$CmfChanpincaigouhuizong['totalmoney']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品ID：</label>
                    <p><?php echo !empty($CmfChanpincaigouhuizong['prodid'])?$CmfChanpincaigouhuizong['prodid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品规格：</label>
                    <p style="color:red;font-family: bold;"><?php echo !empty($CmfChanpincaigouhuizong['prodguige'])?$CmfChanpincaigouhuizong['prodguige']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品型号：</label>
                    <p style="color:red;font-family: bold;"><?php echo !empty($CmfChanpincaigouhuizong['prodxinghao'])?$CmfChanpincaigouhuizong['prodxinghao']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品单位：</label>
                    <p style="color:red;font-family: bold;"><?php echo !empty($CmfChanpincaigouhuizong['proddanwei'])?$CmfChanpincaigouhuizong['proddanwei']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品价格：</label>
                    <p style="color:red;font-family: bold;"><?php echo !empty($CmfChanpincaigouhuizong['price'])?$CmfChanpincaigouhuizong['price']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品折扣：</label>
                    <p style="color:red;font-family: bold;"><?php echo !empty($CmfChanpincaigouhuizong['zhekou'])?$CmfChanpincaigouhuizong['zhekou']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品数量：</label>
                    <p style="color:red;font-family: bold;"><?php echo !empty($CmfChanpincaigouhuizong['num'])?$CmfChanpincaigouhuizong['num']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品金额：</label>
                    <p style="color:red;font-family: bold;"><?php echo !empty($CmfChanpincaigouhuizong['jine'])?$CmfChanpincaigouhuizong['jine']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>