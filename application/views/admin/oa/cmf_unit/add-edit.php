<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<div class="container">
    <div class="col-xs-12">
    <?php 
        if(!empty($success_msg)){
            echo '<div class="alert alert-success">'.$success_msg.'</div>';
        }elseif(!empty($error_msg)){
            echo '<div class="alert alert-danger">'.$error_msg.'</div>';
        }
    ?>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo $action; ?> 单位 <a href="<?php echo site_url('/oa/CmfUnit/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                        <div class="form-group">
                            <label for="UNIT_NAME">单元名称：</label>
                            <input type="text" class="form-control" name="UNIT_NAME" placeholder="Enter UNIT_NAME" value="<?php echo !empty($cmf_unit['UNIT_NAME'])?$cmf_unit['UNIT_NAME']:''; ?>">
                            <?php echo form_error('UNIT_NAME','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="TEL_NO">电话号码：</label>
                            <input type="text" class="form-control" name="TEL_NO" placeholder="Enter TEL_NO" value="<?php echo !empty($cmf_unit['TEL_NO'])?$cmf_unit['TEL_NO']:''; ?>">
                            <?php echo form_error('TEL_NO','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="FAX_NO">传真号码：</label>
                            <input type="text" class="form-control" name="FAX_NO" placeholder="Enter FAX_NO" value="<?php echo !empty($cmf_unit['FAX_NO'])?$cmf_unit['FAX_NO']:''; ?>">
                            <?php echo form_error('FAX_NO','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="POST_NO">邮政编码：</label>
                            <input type="text" class="form-control" name="POST_NO" placeholder="Enter POST_NO" value="<?php echo !empty($cmf_unit['POST_NO'])?$cmf_unit['POST_NO']:''; ?>">
                            <?php echo form_error('POST_NO','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ADDRESS">地址：</label>
                            <input type="text" class="form-control" name="ADDRESS" placeholder="Enter ADDRESS" value="<?php echo !empty($cmf_unit['ADDRESS'])?$cmf_unit['ADDRESS']:''; ?>">
                            <?php echo form_error('ADDRESS','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="URL">URL地址：</label>
                            <input type="text" class="form-control" name="URL" placeholder="Enter URL" value="<?php echo !empty($cmf_unit['URL'])?$cmf_unit['URL']:''; ?>">
                            <?php echo form_error('URL','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="EMAIL">电子邮件：</label>
                            <input type="text" class="form-control" name="EMAIL" placeholder="Enter EMAIL" value="<?php echo !empty($cmf_unit['EMAIL'])?$cmf_unit['EMAIL']:''; ?>">
                            <?php echo form_error('EMAIL','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="BANK_NAME">银行名称：</label>
                            <input type="text" class="form-control" name="BANK_NAME" placeholder="Enter BANK_NAME" value="<?php echo !empty($cmf_unit['BANK_NAME'])?$cmf_unit['BANK_NAME']:''; ?>">
                            <?php echo form_error('BANK_NAME','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="BANK_NO">银行帐号：</label>
                            <input type="text" class="form-control" name="BANK_NO" placeholder="Enter BANK_NO" value="<?php echo !empty($cmf_unit['BANK_NO'])?$cmf_unit['BANK_NO']:''; ?>">
                            <?php echo form_error('BANK_NO','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="numzero">数量：</label>
                            <input type="text" class="form-control" name="numzero" placeholder="Enter numzero" value="<?php echo !empty($cmf_unit['numzero'])?$cmf_unit['numzero']:''; ?>">
                            <?php echo form_error('numzero','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="buybillid">购买清单ID：</label>
                            <input type="text" class="form-control" name="buybillid" placeholder="Enter buybillid" value="<?php echo !empty($cmf_unit['buybillid'])?$cmf_unit['buybillid']:''; ?>">
                            <?php echo form_error('buybillid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="sellbillid">销售清单ID：</label>
                            <input type="text" class="form-control" name="sellbillid" placeholder="Enter sellbillid" value="<?php echo !empty($cmf_unit['sellbillid'])?$cmf_unit['sellbillid']:''; ?>">
                            <?php echo form_error('sellbillid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="stockinbillid">入库清单ID：</label>
                            <input type="text" class="form-control" name="stockinbillid" placeholder="Enter stockinbillid" value="<?php echo !empty($cmf_unit['stockinbillid'])?$cmf_unit['stockinbillid']:''; ?>">
                            <?php echo form_error('stockinbillid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="stockoutbillid">出库清单ID：</label>
                            <input type="text" class="form-control" name="stockoutbillid" placeholder="Enter stockoutbillid" value="<?php echo !empty($cmf_unit['stockoutbillid'])?$cmf_unit['stockoutbillid']:''; ?>">
                            <?php echo form_error('stockoutbillid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="storecheckbillid">库存清单ID：</label>
                            <input type="text" class="form-control" name="storecheckbillid" placeholder="Enter storecheckbillid" value="<?php echo !empty($cmf_unit['storecheckbillid'])?$cmf_unit['storecheckbillid']:''; ?>">
                            <?php echo form_error('storecheckbillid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="stockchangebillid">库存清单：</label>
                            <input type="text" class="form-control" name="stockchangebillid" placeholder="Enter stockchangebillid" value="<?php echo !empty($cmf_unit['stockchangebillid'])?$cmf_unit['stockchangebillid']:''; ?>">
                            <?php echo form_error('stockchangebillid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="zuzhuangbillid">组装清单ID：</label>
                            <input type="text" class="form-control" name="zuzhuangbillid" placeholder="Enter zuzhuangbillid" value="<?php echo !empty($cmf_unit['zuzhuangbillid'])?$cmf_unit['zuzhuangbillid']:''; ?>">
                            <?php echo form_error('zuzhuangbillid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="feiyongbillid">费用清单ID：</label>
                            <input type="text" class="form-control" name="feiyongbillid" placeholder="Enter feiyongbillid" value="<?php echo !empty($cmf_unit['feiyongbillid'])?$cmf_unit['feiyongbillid']:''; ?>">
                            <?php echo form_error('feiyongbillid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="prepaybillid">预支付清单ID：</label>
                            <input type="text" class="form-control" name="prepaybillid" placeholder="Enter prepaybillid" value="<?php echo !empty($cmf_unit['prepaybillid'])?$cmf_unit['prepaybillid']:''; ?>">
                            <?php echo form_error('prepaybillid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="preshoubillid">预收款清单ID：</label>
                            <input type="text" class="form-control" name="preshoubillid" placeholder="Enter preshoubillid" value="<?php echo !empty($cmf_unit['preshoubillid'])?$cmf_unit['preshoubillid']:''; ?>">
                            <?php echo form_error('preshoubillid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="dingjiagongshi">订价公式：</label>
                            <input type="text" class="form-control" name="dingjiagongshi" placeholder="Enter dingjiagongshi" value="<?php echo !empty($cmf_unit['dingjiagongshi'])?$cmf_unit['dingjiagongshi']:''; ?>">
                            <?php echo form_error('dingjiagongshi','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <input type="submit" name="postSubmit" class="btn btn-primary" value="提交"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>