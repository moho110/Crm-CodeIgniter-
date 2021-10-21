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
                <div class="panel-heading"><?php echo $action; ?> 中层明细 <a href="<?php echo site_url('/oa/CmfEduZhongcengmingxi/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_edu_zhongcengmingxi['ID'])?$cmf_edu_zhongcengmingxi['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="testName">测试名称：</label>
                            <input type="text" class="form-control" name="testName" placeholder="Enter testName" value="<?php echo !empty($cmf_edu_zhongcengmingxi['testName'])?$cmf_edu_zhongcengmingxi['testName']:''; ?>">
                            <?php echo form_error('testName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="testManBy">由测试人员：</label>
                            <input type="text" class="form-control" name="testManBy" placeholder="Enter testManBy" value="<?php echo !empty($cmf_edu_zhongcengmingxi['testManBy'])?$cmf_edu_zhongcengmingxi['testManBy']:''; ?>">
                            <?php echo form_error('testManBy','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="uit">单元：</label>
                            <input type="text" class="form-control" name="uit" placeholder="Enter uit" value="<?php echo !empty($cmf_edu_zhongcengmingxi['uit'])?$cmf_edu_zhongcengmingxi['uit']:''; ?>">
                            <?php echo form_error('uit','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="staff">职员：</label>
                            <input type="text" class="form-control" name="staff" placeholder="Enter staff" value="<?php echo !empty($cmf_edu_zhongcengmingxi['staff'])?$cmf_edu_zhongcengmingxi['staff']:''; ?>">
                            <?php echo form_error('staff','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="pindeEvl">品德评估：</label>
                            <input type="text" class="form-control" name="pindeEvl" placeholder="Enter pindeEvl" value="<?php echo !empty($cmf_edu_zhongcengmingxi['pindeEvl'])?$cmf_edu_zhongcengmingxi['pindeEvl']:''; ?>">
                            <?php echo form_error('pindeEvl','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="pindeMemo">品德备注：</label>
                            <input type="text" class="form-control" name="pindeMemo" placeholder="Enter pindeMemo" value="<?php echo !empty($cmf_edu_zhongcengmingxi['pindeMemo'])?$cmf_edu_zhongcengmingxi['pindeMemo']:''; ?>">
                            <?php echo form_error('pindeMemo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="abillityPingjia">能力评价：</label>
                            <input type="text" class="form-control" name="abillityPingjia" placeholder="Enter abillityPingjia" value="<?php echo !empty($cmf_edu_zhongcengmingxi['abillityPingjia'])?$cmf_edu_zhongcengmingxi['abillityPingjia']:''; ?>">
                            <?php echo form_error('abillityPingjia','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="abillityMemo">能力备注：</label>
                            <input type="text" class="form-control" name="abillityMemo" placeholder="Enter abillityMemo" value="<?php echo !empty($cmf_edu_zhongcengmingxi['abillityMemo'])?$cmf_edu_zhongcengmingxi['abillityMemo']:''; ?>">
                            <?php echo form_error('abillityMemo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="studyPingjia">学习评价：</label>
                            <input type="text" class="form-control" name="studyPingjia" placeholder="Enter studyPingjia" value="<?php echo !empty($cmf_edu_zhongcengmingxi['studyPingjia'])?$cmf_edu_zhongcengmingxi['studyPingjia']:''; ?>">
                            <?php echo form_error('studyPingjia','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jixiaoPingjia">绩效评价：</label>
                            <input type="text" class="form-control" name="jixiaoPingjia" placeholder="Enter jixiaoPingjia" value="<?php echo !empty($cmf_edu_zhongcengmingxi['jixiaoPingjia'])?$cmf_edu_zhongcengmingxi['jixiaoPingjia']:''; ?>">
                            <?php echo form_error('jixiaoPingjia','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="studyMemo">学习备注：</label>
                            <input type="text" class="form-control" name="studyMemo" placeholder="Enter studyMemo" value="<?php echo !empty($cmf_edu_zhongcengmingxi['studyMemo'])?$cmf_edu_zhongcengmingxi['studyMemo']:''; ?>">
                            <?php echo form_error('studyMemo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jixiaoMemo">绩效备注：</label>
                            <input type="text" class="form-control" name="jixiaoMemo" placeholder="Enter jixiaoMemo" value="<?php echo !empty($cmf_edu_zhongcengmingxi['jixiaoMemo'])?$cmf_edu_zhongcengmingxi['jixiaoMemo']:''; ?>">
                            <?php echo form_error('jixiaoMemo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="lianzhengPingjia">廉政评价：</label>
                            <input type="text" class="form-control" name="lianzhengPingjia" placeholder="Enter lianzhengPingjia" value="<?php echo !empty($cmf_edu_zhongcengmingxi['lianzhengPingjia'])?$cmf_edu_zhongcengmingxi['lianzhengPingjia']:''; ?>">
                            <?php echo form_error('lianzhengPingjia','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="lianzhengMemo">廉政备注：</label>
                            <input type="text" class="form-control" name="lianzhengMemo" placeholder="Enter lianzhengMemo" value="<?php echo !empty($cmf_edu_zhongcengmingxi['lianzhengMemo'])?$cmf_edu_zhongcengmingxi['lianzhengMemo']:''; ?>">
                            <?php echo form_error('lianzhengMemo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="PingjiaMan">评价人：</label>
                            <input type="text" class="form-control" name="PingjiaMan" placeholder="Enter PingjiaMan" value="<?php echo !empty($cmf_edu_zhongcengmingxi['PingjiaMan'])?$cmf_edu_zhongcengmingxi['PingjiaMan']:''; ?>">
                            <?php echo form_error('PingjiaMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="pingjiaTime">评价时间：</label>
                            <input type="text" class="form-control" name="pingjiaTime" placeholder="Enter pingjiaTime" value="<?php echo !empty($cmf_edu_zhongcengmingxi['pingjiaTime'])?$cmf_edu_zhongcengmingxi['pingjiaTime']:''; ?>">
                            <?php echo form_error('pingjiaTime','<p class="help-block text-danger">','</p>'); ?>
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