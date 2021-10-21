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
            <div class="panel-heading">服务详细内容<a href="<?php echo site_url('/oa/CmfCrmService/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfCrmService['Id'])?$CmfCrmService['Id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>服务ID：</label>
                    <p><?php echo !empty($CmfCrmService['serviceId'])?$CmfCrmService['serviceId']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>服务阶段：</label>
                    <p><?php echo !empty($CmfCrmService['serviceStage'])?$CmfCrmService['serviceStage']:''; ?></p>
                    
                </div>
                <div class="form-group">
                    <label>上次期限：</label>
                    <p><?php echo !empty($CmfCrmService['lastLimited'])?$CmfCrmService['lastLimited']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>服务总结：</label>
                    <p><?php echo !empty($CmfCrmService['serviceSummary'])?$CmfCrmService['serviceSummary']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>客户名称：</label>
                    <p><?php echo !empty($CmfCrmService['clientName'])?$CmfCrmService['clientName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>联系人：</label>
                    <p><?php echo !empty($CmfCrmService['linkMan'])?$CmfCrmService['linkMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>严重程度：</label>
                    <p><?php echo !empty($CmfCrmService['seriousDegree'])?$CmfCrmService['seriousDegree']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>解决人：</label>
                    <p><?php echo !empty($CmfCrmService['solveMan'])?$CmfCrmService['solveMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>解决方法：</label>
                    <p><?php echo !empty($CmfCrmService['solveMethod'])?$CmfCrmService['solveMethod']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>处理状态：</label>
                    <p><?php echo !empty($CmfCrmService['solveStatus'])?$CmfCrmService['solveStatus']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否审核：</label>
                    <p>
                        <?php if ($CmfCrmService['isExamine'] == '1') {?>
                            已审核
                        <?php } elseif ($CmfCrmService['isExamine'] == '0') {?>
                            未审核
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>审核人：</label>
                    <p><?php echo !empty($CmfCrmService['examineMan'])?$CmfCrmService['examineMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>审核时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfCrmService['examineTime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>便签：</label>
                    <p><?php echo !empty($CmfCrmService['note'])?$CmfCrmService['note']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>附件：</label>
                    <p><?php echo !empty($CmfCrmService['attach'])?$CmfCrmService['attach']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfCrmService['creator'])?$CmfCrmService['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfCrmService['createTime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>销售关系列表：</label>
                    <p><?php echo !empty($CmfCrmService['relationSaleList'])?$CmfCrmService['relationSaleList']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>自定义二：</label>
                    <p><?php echo !empty($CmfCrmService['customTwo'])?$CmfCrmService['customTwo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>自定义三：</label>
                    <p><?php echo !empty($CmfCrmService['customThree'])?$CmfCrmService['customThree']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>自定义四：</label>
                    <p><?php echo !empty($CmfCrmService['customFour'])?$CmfCrmService['customFour']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>自定义五：</label>
                    <p><?php echo !empty($CmfCrmService['customFive'])?$CmfCrmService['customFive']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>