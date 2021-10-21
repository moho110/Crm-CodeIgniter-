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
                <div class="panel-heading"><?php echo $action; ?> 服务 <a href="<?php echo site_url('/oa/CmfCrmService/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="Id">编号：</label>
                            <input type="text" class="form-control" name="Id" placeholder="Enter Id" value="<?php echo !empty($cmf_crm_service['Id'])?$cmf_crm_service['Id']:''; ?>">
                            <?php echo form_error('Id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="serviceId">服务ID：</label>
                            <input type="text" class="form-control" name="serviceId" placeholder="Enter serviceId" value="<?php echo !empty($cmf_crm_service['serviceId'])?$cmf_crm_service['serviceId']:''; ?>">
                            <?php echo form_error('serviceId','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="serviceStage">服务阶段：</label>
                            <input type="radio" name="serviceStage" value="1">答疑
                            <input type="radio" name="serviceStage" value="2">故障排除
                            <input type="radio" name="serviceStage" value="3">培训
                            <input type="radio" name="serviceStage" value="4">升级
                            <input type="radio" name="serviceStage" value="5">投诉
                            <input type="radio" name="serviceStage" value="6">其他
                            <?php echo form_error('serviceStage','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="lastLimited">上次期限：</label>
                            <input type="text" class="form-control" name="lastLimited" placeholder="Enter lastLimited" value="<?php echo !empty($cmf_crm_service['lastLimited'])?$cmf_crm_service['lastLimited']:''; ?>">
                            <?php echo form_error('lastLimited','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="serviceSummary">服务总结：</label>
                            <textarea name="serviceSummary" cols="50" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_crm_service['serviceSummary'])?$cmf_crm_service['serviceSummary']:''; ?>
                            </textarea>
                            <?php echo form_error('serviceSummary','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="clientName">客户名称：</label>
                            <input type="text" class="form-control" name="clientName" placeholder="Enter clientName" value="<?php echo !empty($cmf_crm_service['clientName'])?$cmf_crm_service['clientName']:''; ?>">
                            <?php echo form_error('clientName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="linkMan">联系人：</label>
                            <input type="text" class="form-control" name="linkMan" placeholder="Enter linkMan" value="<?php echo !empty($cmf_crm_service['linkMan'])?$cmf_crm_service['linkMan']:''; ?>">
                            <?php echo form_error('linkMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="seriousDegree">严重程度：</label>
                            <input type="text" class="form-control" name="seriousDegree" placeholder="Enter seriousDegree" value="<?php echo !empty($cmf_crm_service['seriousDegree'])?$cmf_crm_service['seriousDegree']:''; ?>">
                            <?php echo form_error('seriousDegree','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="solveMan">解决人：</label>
                            <input type="text" class="form-control" name="solveMan" placeholder="Enter solveMan" value="<?php echo !empty($cmf_crm_service['solveMan'])?$cmf_crm_service['solveMan']:''; ?>">
                            <?php echo form_error('solveMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="solveMethod">解决方法：</label>
                            <input type="radio" name="solveMethod" value="1">电话
                            <input type="radio" name="solveMethod" value="2">QQ/MSN
                            <input type="radio" name="solveMethod" value="3">邮寄
                            <input type="radio" name="solveMethod" value="4">上门
                            <input type="radio" name="solveMethod" value="5">其他
                            <input type="radio" name="solveMethod" value="6">Email
                            <?php echo form_error('solveMethod','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="solveStatus">处理状态：</label>
                            <input type="radio" name="solveStatus" value="1">无需处理
                            <input type="radio" name="solveStatus" value="2">未处理
                            <input type="radio" name="solveStatus" value="3">处理中
                            <input type="radio" name="solveStatus" value="4">处理完成
                            <?php echo form_error('solveStatus','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="isExamine">是否审核：</label>
                            <input type="radio" name="isExamine"value="1">已审核
                            <input type="radio" name="isExamine"value="0">未审核
                            <?php echo form_error('isExamine','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="examineMan">审核人：</label>
                            <input type="text" class="form-control" name="examineMan" placeholder="Enter examineMan" value="<?php echo !empty($cmf_crm_service['examineMan'])?$cmf_crm_service['examineMan']:''; ?>">
                            <?php echo form_error('examineMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="examineTime">审核时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="examineTime">
                            <?php echo form_error('examineTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="note">便签：</label>
                            <textarea name="note" cols="50" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_crm_service['note'])?$cmf_crm_service['note']:''; ?>
                            </textarea>
                            <?php echo form_error('note','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="attach">附件：</label>
                            <input type="text" class="form-control" name="attach" placeholder="Enter attach" value="<?php echo !empty($cmf_crm_service['attach'])?$cmf_crm_service['attach']:''; ?>">
                            <?php echo form_error('attach','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_crm_service['creator'])?$cmf_crm_service['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="create_time" placeholder="YYYY-MM-DD hh:mm" name="createTime">
                            <?php echo form_error('createTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="relationSaleList">销售关系列表：</label>
                            <input type="text" class="form-control" name="relationSaleList" placeholder="Enter createTime" value="<?php echo !empty($cmf_crm_service['relationSaleList'])?$cmf_crm_service['relationSaleList']:''; ?>"><?php echo form_error('relationSaleList','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="customTwo">自定义二：</label>
                            <input type="text" class="form-control" name="customTwo" placeholder="Enter customTwo" value="<?php echo !empty($cmf_crm_service['customTwo'])?$cmf_crm_service['customTwo']:''; ?>">
                            <?php echo form_error('customTwo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="customThree">自定义三：</label>
                            <input type="text" class="form-control" name="customThree" placeholder="Enter customThree" value="<?php echo !empty($cmf_crm_service['customThree'])?$cmf_crm_service['customThree']:''; ?>">
                            <?php echo form_error('customThree','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="customFour">自定义四：</label>
                            <input type="text" class="form-control" name="customFour" placeholder="Enter customFour" value="<?php echo !empty($cmf_crm_service['customFour'])?$cmf_crm_service['customFour']:''; ?>">
                            <?php echo form_error('customFour','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="customFive">自定义五：</label>
                            <input type="text" class="form-control" name="customFive" placeholder="Enter customFive" value="<?php echo !empty($cmf_crm_service['customFive'])?$cmf_crm_service['customFive']:''; ?>">
                            <?php echo form_error('customFive','<p class="help-block text-danger">','</p>'); ?>
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