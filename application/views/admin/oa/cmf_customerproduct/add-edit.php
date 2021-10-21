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
                <div class="panel-heading"><?php echo $action; ?> 客户产品 <a href="<?php echo site_url('/oa/CmfCustomerproduct/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ROWID">编号：</label>
                            <input readonly type="text" class="form-control" name="ROWID" placeholder="Enter ROWID" value="<?php echo !empty($cmf_customerproduct['ROWID'])?$cmf_customerproduct['ROWID']:''; ?>">
                            <?php echo form_error('ROWID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="theme">主题：</label>
                            <input type="text" class="form-control" name="theme" placeholder="Enter theme" value="<?php echo !empty($cmf_customerproduct['theme'])?$cmf_customerproduct['theme']:''; ?>">
                            <?php echo form_error('theme','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="priceMan">报价人：</label>
                            <input type="text" class="form-control" name="priceMan" placeholder="Enter priceMan" value="<?php echo !empty($cmf_customerproduct['priceMan'])?$cmf_customerproduct['priceMan']:''; ?>">
                            <?php echo form_error('priceMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="clients">客户：</label>
                            <input type="text" class="form-control" name="clients" placeholder="Enter clients" value="<?php echo !empty($cmf_customerproduct['clients'])?$cmf_customerproduct['clients']:''; ?>">
                            <?php echo form_error('clients','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="reiceiver">接收者：</label>
                            <input type="text" class="form-control" name="reiceiver" placeholder="Enter reiceiver" value="<?php echo !empty($cmf_customerproduct['reiceiver'])?$cmf_customerproduct['reiceiver']:''; ?>">
                            <?php echo form_error('reiceiver','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="priceTime">报价时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="priceTime">
                            <?php echo form_error('priceTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="count">金额：</label>
                            <input type="text" class="form-control" name="count" placeholder="Enter count" value="<?php echo !empty($cmf_customerproduct['count'])?$cmf_customerproduct['count']:''; ?>">
                            <?php echo form_error('count','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="saleChance">销售机会：</label>
                            <input type="text" class="form-control" name="saleChance" placeholder="Enter saleChance" value="<?php echo !empty($cmf_customerproduct['saleChance'])?$cmf_customerproduct['saleChance']:''; ?>">
                            <?php echo form_error('saleChance','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jiaofuIntro">交付介绍：</label>
                            <textarea name="jiaofuIntro" cols="50" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_customerproduct['jiaofuIntro'])?$cmf_customerproduct['jiaofuIntro']:''; ?>
                            </textarea>
                            <?php echo form_error('jiaofuIntro','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="toPayIntro">支付介绍：</label>
                            <textarea name="toPayIntro" cols="50" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_customerproduct['toPayIntro'])?$cmf_customerproduct['toPayIntro']:''; ?>
                            </textarea>
                            <?php echo form_error('toPayIntro','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="packageExpIntro">包装输出介绍：</label>
                            <textarea name="packageExpIntro" cols="50" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_customerproduct['packageExpIntro'])?$cmf_customerproduct['packageExpIntro']:''; ?>
                            </textarea>
                            <?php echo form_error('packageExpIntro','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <textarea name="memo" cols="50" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_customerproduct['memo'])?$cmf_customerproduct['memo']:''; ?>
                            </textarea>
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="attach">附件：</label>
                            <input type="text" class="form-control" name="attach" placeholder="Enter attach" value="<?php echo !empty($cmf_customerproduct['attach'])?$cmf_customerproduct['attach']:''; ?>">
                            <?php echo form_error('attach','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="isExamine">是否审核：</label>
                            <input type="radio" name="isExamine" value="1">是
                            <input type="radio" name="isExamine" value="0">否
                            <?php echo form_error('isExamine','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建者：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_customerproduct['creator'])?$cmf_customerproduct['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-5" placeholder="YYYY-MM-DD hh:mm" name="createTime">
                            <?php echo form_error('createTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="examineMan">审核人：</label>
                            <input type="text" class="form-control" name="examineMan" placeholder="Enter examineMan" value="<?php echo !empty($cmf_customerproduct['examineMan'])?$cmf_customerproduct['examineMan']:''; ?>">
                            <?php echo form_error('examineMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="examineTime">审核时间：</label>
                            <input readonly class="form-control" type="text" id="birthday" placeholder="YYYY-MM-DD hh:mm" name="examineTime">
                            <?php echo form_error('examineTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="unitid">单元ID：</label>
                            <input type="text" class="form-control" name="unitid" placeholder="Enter unitid" value="<?php echo !empty($cmf_customerproduct['unitid'])?$cmf_customerproduct['unitid']:''; ?>">
                            <?php echo form_error('unitid','<p class="help-block text-danger">','</p>'); ?>
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