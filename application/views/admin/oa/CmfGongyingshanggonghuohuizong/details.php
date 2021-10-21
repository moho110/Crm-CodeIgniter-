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
            <div class="panel-heading">销售日报详细内容 <a href="<?php echo site_url('/oa/CmfGongyingshanggonghuohuizong/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>清单ID：</label>
                    <p><?php echo !empty($CmfGongyingshanggonghuohuizong['billid'])?$CmfGongyingshanggonghuohuizong['billid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>主题：</label>
                    <p><?php echo !empty($CmfGongyingshanggonghuohuizong['zhuti'])?$CmfGongyingshanggonghuohuizong['zhuti']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商ID：</label>
                    <p><?php echo !empty($CmfGongyingshanggonghuohuizong['supplyid'])?$CmfGongyingshanggonghuohuizong['supplyid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商联系人：</label>
                    <p><?php echo !empty($CmfGongyingshanggonghuohuizong['linkman'])?$CmfGongyingshanggonghuohuizong['linkman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>采购日期：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfGongyingshanggonghuohuizong['caigoudate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>采购单号：</label>
                    <p><?php echo !empty($CmfGongyingshanggonghuohuizong['danhao'])?$CmfGongyingshanggonghuohuizong['danhao']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>总金额：</label>
                    <p><?php echo !empty($CmfGongyingshanggonghuohuizong['totalmoney'])?$CmfGongyingshanggonghuohuizong['totalmoney']:''; ?></p>
                    </p>
                </div>
                <div class="form-group">
                    <label>ROWID：</label>
                    <p><?php echo !empty($CmfGongyingshanggonghuohuizong['ROWID'])?$CmfGongyingshanggonghuohuizong['ROWID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商名称：</label>
                    <p><?php echo !empty($CmfGongyingshanggonghuohuizong['supplyname'])?$CmfGongyingshanggonghuohuizong['supplyname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商电话：</label>
                    <p><?php echo !empty($CmfGongyingshanggonghuohuizong['phone'])?$CmfGongyingshanggonghuohuizong['phone']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>ID：</label>
                    <p><?php echo !empty($CmfGongyingshanggonghuohuizong['id'])?$CmfGongyingshanggonghuohuizong['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品名称：</label>
                    <p><?php echo !empty($CmfGongyingshanggonghuohuizong['prodname'])?$CmfGongyingshanggonghuohuizong['prodname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品规格：</label>
                    <p><?php echo !empty($CmfGongyingshanggonghuohuizong['prodguige'])?$CmfGongyingshanggonghuohuizong['prodguige']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品型号：</label>
                    <p><?php echo !empty($CmfGongyingshanggonghuohuizong['prodxinghao'])?$CmfGongyingshanggonghuohuizong['prodxinghao']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品价格：</label>
                    <p><?php echo !empty($CmfGongyingshanggonghuohuizong['price'])?$CmfGongyingshanggonghuohuizong['price']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品单位：</label>
                    <p><?php echo !empty($CmfGongyingshanggonghuohuizong['proddanwei'])?$CmfGongyingshanggonghuohuizong['proddanwei']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>操作类型：</label>
                    <p>
                        <?php if($CmfGongyingshanggonghuohuizong['opertype'] == '1') {?>
                            正常操作
                        <?php } elseif ($CmfGongyingshanggonghuohuizong['opertype'] == '2') {?>
                            错误操作
                        <?php } else {?>
                            其他操作
                        <?php }?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>