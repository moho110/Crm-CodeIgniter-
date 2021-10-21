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
            <div class="panel-heading">销售机会详细内容<a href="<?php echo site_url('/oa/CmfCrmChance/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfCrmChance['chanceId'])?$CmfCrmChance['chanceId']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>机会主题：</label>
                    <p><?php echo !empty($CmfCrmChance['chanceTheme'])?$CmfCrmChance['chanceTheme']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>客户名称：</label>
                    <p><?php echo !empty($CmfCrmChance['clientName'])?$CmfCrmChance['clientName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>联系人：</label>
                    <p><?php echo !empty($CmfCrmChance['linkMan'])?$CmfCrmChance['linkMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>发现时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfCrmChance['findTime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>客户需求：</label>
                    <p><?php echo !empty($CmfCrmChance['clientNeed'])?$CmfCrmChance['clientNeed']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>预登录时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfCrmChance['preSignTime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>预数量：</label>
                    <p><?php echo !empty($CmfCrmChance['preCount'])?$CmfCrmChance['preCount']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>可能性：</label>
                    <p><?php echo !empty($CmfCrmChance['enable'])?$CmfCrmChance['enable']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>最近状态：</label>
                    <p><?php echo !empty($CmfCrmChance['recentStatus'])?$CmfCrmChance['recentStatus']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>当前状态：</label>
                    <p><?php echo !empty($CmfCrmChance['status'])?$CmfCrmChance['status']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfCrmChance['creator'])?$CmfCrmChance['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfCrmChance['createTime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>备份：</label>
                    <p><?php echo !empty($CmfCrmChance['bak'])?$CmfCrmChance['bak']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>最后合同时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfCrmChance['lastContactTime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>附件：</label>
                    <p><?php echo !empty($CmfCrmChance['attach'])?$CmfCrmChance['attach']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>