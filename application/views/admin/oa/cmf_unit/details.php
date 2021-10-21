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
            <div class="panel-heading">单元详细内容<a href="<?php echo site_url('/oa/CmfUnit/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfUnit['id'])?$CmfUnit['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>单元名称：</label>
                    <p><?php echo !empty($CmfUnit['UNIT_NAME'])?$CmfUnit['UNIT_NAME']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>电话号码：</label>
                    <p><?php echo !empty($CmfUnit['TEL_NO'])?$CmfUnit['TEL_NO']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>传真号码：</label>
                    <p><?php echo !empty($CmfUnit['FAX_NO'])?$CmfUnit['FAX_NO']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>邮政编码：</label>
                    <p><?php echo !empty($CmfUnit['POST_NO'])?$CmfUnit['POST_NO']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>地址：</label>
                    <p><?php echo !empty($CmfUnit['ADDRESS'])?$CmfUnit['ADDRESS']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>URL地址：</label>
                    <p><?php echo !empty($CmfUnit['URL'])?$CmfUnit['URL']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>电子邮件：</label>
                    <p><?php echo !empty($CmfUnit['EMAIL'])?$CmfUnit['EMAIL']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>银行名称：</label>
                    <p><?php echo !empty($CmfUnit['BANK_NAME'])?$CmfUnit['BANK_NAME']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>银行帐号：</label>
                    <p><?php echo !empty($CmfUnit['BANK_NO'])?$CmfUnit['BANK_NO']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>数量：</label>
                    <p><?php echo !empty($CmfUnit['numzero'])?$CmfUnit['numzero']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>购买清单ID：</label>
                    <p><?php echo !empty($CmfUnit['buybillid'])?$CmfUnit['buybillid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>销售清单ID：</label>
                    <p><?php echo !empty($CmfUnit['sellbillid'])?$CmfUnit['sellbillid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>入库清单ID：</label>
                    <p><?php echo !empty($CmfUnit['stockinbillid'])?$CmfUnit['stockinbillid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>出库清单ID：</label>
                    <p><?php echo !empty($CmfUnit['stockoutbillid'])?$CmfUnit['stockoutbillid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>库存清单ID：</label>
                    <p><?php echo !empty($CmfUnit['storecheckbillid'])?$CmfUnit['storecheckbillid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>库存清单：</label>
                    <p><?php echo !empty($CmfUnit['stockchangebillid'])?$CmfUnit['stockchangebillid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>组装清单ID：</label>
                    <p><?php echo !empty($CmfUnit['zuzhuangbillid'])?$CmfUnit['zuzhuangbillid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>费用清单ID：</label>
                    <p><?php echo !empty($CmfUnit['feiyongbillid'])?$CmfUnit['feiyongbillid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>预支付清单ID：</label>
                    <p><?php echo !empty($CmfUnit['prepaybillid'])?$CmfUnit['prepaybillid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>预收款清单ID：</label>
                    <p><?php echo !empty($CmfUnit['preshoubillid'])?$CmfUnit['preshoubillid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>订价公式：</label>
                    <p><?php echo !empty($CmfUnit['dingjiagongshi'])?$CmfUnit['dingjiagongshi']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>