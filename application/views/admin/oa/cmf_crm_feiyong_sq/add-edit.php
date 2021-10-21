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
                <div class="panel-heading"><?php echo $action; ?> 费用申请 <a href="<?php echo site_url('/oa/CmfCrmFeiyongSq/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="listId">编号：</label>
                            <input readonly type="text" class="form-control" name="listId" placeholder="Enter listId" value="<?php echo !empty($cmf_crm_feiyong_sq['listId'])?$cmf_crm_feiyong_sq['listId']:''; ?>">
                            <?php echo form_error('listId','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="feeType">费用类型：</label>
                            <input type="radio" name="feeType" value="1">一
                            <input type="radio" name="feeType" value="0">二
                            <?php echo form_error('feeType','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="count">金额：</label>
                            <input type="text" class="form-control" name="count" placeholder="Enter count" value="<?php echo !empty($cmf_crm_feiyong_sq['count'])?$cmf_crm_feiyong_sq['count']:''; ?>">
                            <?php echo form_error('count','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="feeUse">费用使用：</label>
                            <input type="text" class="form-control" name="feeUse" placeholder="Enter feeUse" value="<?php echo !empty($cmf_crm_feiyong_sq['feeUse'])?$cmf_crm_feiyong_sq['feeUse']:''; ?>">
                            <?php echo form_error('feeUse','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="applyDate">申请日期：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="applyDate">
                            <?php echo form_error('applyDate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="clientName">客户名称：</label>
                            <input type="text" class="form-control" name="clientName" placeholder="Enter clientName" value="<?php echo !empty($cmf_crm_feiyong_sq['clientName'])?$cmf_crm_feiyong_sq['clientName']:''; ?>">
                            <?php echo form_error('clientName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="reimburseMan">补偿人：</label>
                            <input type="text" class="form-control" name="reimburseMan" placeholder="Enter reimburseMan" value="<?php echo !empty($cmf_crm_feiyong_sq['reimburseMan'])?$cmf_crm_feiyong_sq['reimburseMan']:''; ?>">
                            <?php echo form_error('reimburseMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="recorder">记录人：</label>
                            <input type="text" class="form-control" name="recorder" placeholder="Enter recorder" value="<?php echo !empty($cmf_crm_feiyong_sq['recorder'])?$cmf_crm_feiyong_sq['recorder']:''; ?>">
                            <?php echo form_error('recorder','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="isExamine">是否审核：</label>
                            <input type="radio" name="isExamine" value="1">是
                            <input type="radio" name="isExamine" value="0">否
                            <?php echo form_error('isExamine','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="examineDate">审核日期：</label>
                            <input readonly class="form-control" type="text" id="date-group1-5" placeholder="YYYY-MM-DD hh:mm" name="examineDate">
                            <?php echo form_error('examineDate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="cashier">出纳：</label>
                            <input type="text" class="form-control" name="cashier" placeholder="Enter cashier" value="<?php echo !empty($cmf_crm_feiyong_sq['cashier'])?$cmf_crm_feiyong_sq['cashier']:''; ?>">
                            <?php echo form_error('cashier','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="payTime">支付时间：</label>
                            <input readonly class="form-control" type="text" id="pay_time" placeholder="YYYY-MM-DD hh:mm" name="payTime">
                            <?php echo form_error('payTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="bak">备份：</label>
                            <textarea name="bak" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_crm_feiyong_sq['bak'])?$cmf_crm_feiyong_sq['bak']:''; ?>
                            </textarea>
                            <?php echo form_error('bak','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="examineMan">审核人：</label>
                            <input type="text" class="form-control" name="examineMan" placeholder="Enter examineMan" value="<?php echo !empty($cmf_crm_feiyong_sq['examineMan'])?$cmf_crm_feiyong_sq['examineMan']:''; ?>">
                            <?php echo form_error('examineMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="create_time" placeholder="YYYY-MM-DD hh:mm" name="createTime">
                            <?php echo form_error('createTime','<p class="help-block text-danger">','</p>'); ?>
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