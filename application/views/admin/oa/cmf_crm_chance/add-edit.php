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
                <div class="panel-heading"><?php echo $action; ?> 销售机会 <a href="<?php echo site_url('/oa/CmfCrmChance/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="chanceId">编号：</label>
                            <input type="text" class="form-control" name="chanceId" placeholder="Enter chanceId" value="<?php echo !empty($cmf_crm_chance['chanceId'])?$cmf_crm_chance['chanceId']:''; ?>">
                            <?php echo form_error('chanceId','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="chanceTheme">机会主题：</label>
                            <input type="text" class="form-control" name="chanceTheme" placeholder="Enter chanceTheme" value="<?php echo !empty($cmf_crm_chance['chanceTheme'])?$cmf_crm_chance['chanceTheme']:''; ?>">
                            <?php echo form_error('chanceTheme','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="clientName">客户名称：</label>
                            <input type="text" class="form-control" name="clientName" placeholder="Enter clientName" value="<?php echo !empty($cmf_crm_chance['clientName'])?$cmf_crm_chance['clientName']:''; ?>">
                            <?php echo form_error('clientName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="linkMan">联系人：</label>
                            <input type="text" class="form-control" name="linkMan" placeholder="Enter linkMan" value="<?php echo !empty($cmf_crm_chance['linkMan'])?$cmf_crm_chance['linkMan']:''; ?>">
                            <?php echo form_error('linkMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="findTime">发现时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="findTime">
                            <?php echo form_error('findTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="clientNeed">客户需求：</label>
                            <input type="text" class="form-control" name="clientNeed" placeholder="Enter clientNeed" value="<?php echo !empty($cmf_crm_chance['clientNeed'])?$cmf_crm_chance['clientNeed']:''; ?>">
                            <?php echo form_error('clientNeed','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="preSignTime">预登录时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-5" placeholder="YYYY-MM-DD hh:mm" name="findTime">
                            <?php echo form_error('preSignTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="preCount">预数量：</label>
                            <input type="text" class="form-control" name="preCount" placeholder="Enter preCount" value="<?php echo !empty($cmf_crm_chance['preCount'])?$cmf_crm_chance['preCount']:''; ?>">
                            <?php echo form_error('preCount','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="enable">可能性：</label>
                            <input type="text" class="form-control" name="enable" placeholder="Enter enable" value="<?php echo !empty($cmf_crm_chance['enable'])?$cmf_crm_chance['enable']:''; ?>">
                            <?php echo form_error('enable','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="recentStatus">最近状态：</label>
                            <input type="text" class="form-control" name="recentStatus" placeholder="Enter recentStatus" value="<?php echo !empty($cmf_crm_chance['recentStatus'])?$cmf_crm_chance['recentStatus']:''; ?>">
                            <?php echo form_error('recentStatus','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="status">当前状态：</label>
                            <input type="text" class="form-control" name="status" placeholder="Enter status" value="<?php echo !empty($cmf_crm_chance['status'])?$cmf_crm_chance['status']:''; ?>">
                            <?php echo form_error('status','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_crm_chance['creator'])?$cmf_crm_chance['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="pay_time" placeholder="YYYY-MM-DD hh:mm" name="createTime">
                            <?php echo form_error('createTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="bak">备份：</label>
                            <input type="text" class="form-control" name="bak" placeholder="Enter bak" value="<?php echo !empty($cmf_crm_chance['bak'])?$cmf_crm_chance['bak']:''; ?>">
                            <?php echo form_error('bak','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="lastContactTime">最后合同时间：</label>
                            <input readonly class="form-control" type="text" id="birthday" placeholder="YYYY-MM-DD hh:mm" name="lastContactTime">
                            <?php echo form_error('lastContactTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="attach">附件：</label>
                            <input type="text" class="form-control" name="attach" placeholder="Enter attach" value="<?php echo !empty($cmf_crm_chance['attach'])?$cmf_crm_chance['attach']:''; ?>">
                            <?php echo form_error('attach','<p class="help-block text-danger">','</p>'); ?>
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