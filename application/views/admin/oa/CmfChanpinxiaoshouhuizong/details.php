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
            <div class="panel-heading">产品销售汇总详细内容 <a href="<?php echo site_url('/oa/CmfChanpinxiaoshouhuizong/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfChanpinxiaoshouhuizong['id'])?$CmfChanpinxiaoshouhuizong['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品ID：</label>
                    <p><?php echo !empty($CmfChanpinxiaoshouhuizong['prodid'])?$CmfChanpinxiaoshouhuizong['prodid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品名称：</label>
                    <p><?php echo !empty($CmfChanpinxiaoshouhuizong['prodname'])?$CmfChanpinxiaoshouhuizong['prodname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品规格：</label>
                    <p><?php echo !empty($CmfChanpinxiaoshouhuizong['prodguige'])?$CmfChanpinxiaoshouhuizong['prodguige']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品型号：</label>
                    <p><?php echo !empty($CmfChanpinxiaoshouhuizong['prodxinghao'])?$CmfChanpinxiaoshouhuizong['prodxinghao']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品单位：</label>
                    <p><?php echo !empty($CmfChanpinxiaoshouhuizong['proddanwei'])?$CmfChanpinxiaoshouhuizong['proddanwei']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品价格：</label>
                    <p><?php echo !empty($CmfChanpinxiaoshouhuizong['price'])?$CmfChanpinxiaoshouhuizong['price']:''; ?></p>
                    </p>
                </div>
                <div class="form-group">
                    <label>产品折扣：</label>
                    <p><?php echo !empty($CmfChanpinxiaoshouhuizong['zhekou'])?$CmfChanpinxiaoshouhuizong['zhekou']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品数量：</label>
                    <p><?php echo !empty($CmfChanpinxiaoshouhuizong['num'])?$CmfChanpinxiaoshouhuizong['num']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>出库数量：</label>
                    <p><?php echo !empty($CmfChanpinxiaoshouhuizong['chukunum'])?$CmfChanpinxiaoshouhuizong['chukunum']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品利润：</label>
                    <p><?php echo !empty($CmfChanpinxiaoshouhuizong['lirun'])?$CmfChanpinxiaoshouhuizong['lirun']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>主题：</label>
                    <p><?php echo !empty($CmfChanpinxiaoshouhuizong['zhuti'])?$CmfChanpinxiaoshouhuizong['zhuti']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商ID：</label>
                    <p><?php echo !empty($CmfChanpinxiaoshouhuizong['supplyid'])?$CmfChanpinxiaoshouhuizong['supplyid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>销售计划编号：</label>
                    <p><?php echo !empty($CmfChanpinxiaoshouhuizong['sellplanno'])?$CmfChanpinxiaoshouhuizong['sellplanno']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>总金额：</label>
                    <p><?php echo !empty($CmfChanpinxiaoshouhuizong['totalmoney'])?$CmfChanpinxiaoshouhuizong['totalmoney']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>支付类型：</label>
                    <p>
                    	<?php if ($CmfChanpinxiaoshouhuizong['paytype'] == '1') {?>
                    		微信支付
	                    <?php } elseif ($CmfChanpinxiaoshouhuizong['paytype'] == '2') {?>
	                    	支付宝
	                	<?php } elseif ($CmfChanpinxiaoshouhuizong['paytype'] == '3') {?>
	                		现金支付
		            	<?php } elseif ($CmfChanpinxiaoshouhuizong['paytype'] == '4') {?>
		            		信用卡
			        	<?php } elseif ($CmfChanpinxiaoshouhuizong['paytype'] == '5') {?>
			        		借记卡
			        	<?php } elseif ($CmfChanpinxiaoshouhuizong['paytype'] == '6') {?>
							线下支付
			        	<?php } else {?>
			        		其他类型
			        	<?php } ?>
			        </p>
                </div>
                <div class="form-group">
                    <label>汇款金额：</label>
                    <p><?php echo !empty($CmfChanpinxiaoshouhuizong['huikuanjine'])?$CmfChanpinxiaoshouhuizong['huikuanjine']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>