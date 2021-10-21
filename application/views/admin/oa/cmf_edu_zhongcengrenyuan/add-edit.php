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
                <div class="panel-heading"><?php echo $action; ?> 中层人员 <a href="<?php echo site_url('/oa/CmfEduZhongcengrenyuan/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_edu_zhongcengrenyuan['ID'])?$cmf_edu_zhongcengrenyuan['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="testName">测试名称：</label>
                            <input type="text" class="form-control" name="testName" placeholder="Enter testName" value="<?php echo !empty($cmf_edu_zhongcengrenyuan['testName'])?$cmf_edu_zhongcengrenyuan['testName']:''; ?>">
                            <?php echo form_error('testName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="testManBy">由测试人员：</label>
                            <input type="text" class="form-control" name="testManBy" placeholder="Enter testManBy" value="<?php echo !empty($cmf_edu_zhongcengrenyuan['testManBy'])?$cmf_edu_zhongcengrenyuan['testManBy']:''; ?>">
                            <?php echo form_error('testManBy','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="uit">单元：</label>
                            <input type="text" class="form-control" name="uit" placeholder="Enter uit" value="<?php echo !empty($cmf_edu_zhongcengrenyuan['uit'])?$cmf_edu_zhongcengrenyuan['uit']:''; ?>">
                            <?php echo form_error('uit','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="staff">职员：</label>
                            <input type="text" class="form-control" name="staff" placeholder="Enter staff" value="<?php echo !empty($cmf_edu_zhongcengrenyuan['staff'])?$cmf_edu_zhongcengrenyuan['staff']:''; ?>">
                            <?php echo form_error('staff','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="pindeDesp">品德描述：</label>
                            <input type="text" class="form-control" name="pindeDesp" placeholder="Enter pindeDesp" value="<?php echo !empty($cmf_edu_zhongcengrenyuan['pindeDesp'])?$cmf_edu_zhongcengrenyuan['pindeDesp']:''; ?>">
                            <?php echo form_error('pindeDesp','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="pindeSelf">自我品德评价：</label>
                            <input type="text" class="form-control" name="pindeSelf" placeholder="Enter pindeSelf" value="<?php echo !empty($cmf_edu_zhongcengrenyuan['pindeSelf'])?$cmf_edu_zhongcengrenyuan['pindeSelf']:''; ?>">
                            <?php echo form_error('pindeSelf','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="abillityDesp">能力描述：</label>
                            <input type="text" class="form-control" name="abillityDesp" placeholder="Enter abillityDesp" value="<?php echo !empty($cmf_edu_zhongcengrenyuan['abillityDesp'])?$cmf_edu_zhongcengrenyuan['abillityDesp']:''; ?>">
                            <?php echo form_error('abillityDesp','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="abillitySelf">自我能力评价：</label>
                            <input type="text" class="form-control" name="abillitySelf" placeholder="Enter abillitySelf" value="<?php echo !empty($cmf_edu_zhongcengrenyuan['abillitySelf'])?$cmf_edu_zhongcengrenyuan['abillitySelf']:''; ?>">
                            <?php echo form_error('abillitySelf','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="studyDesp">学习描述：</label>
                            <input type="text" class="form-control" name="studyDesp" placeholder="Enter studyDesp" value="<?php echo !empty($cmf_edu_zhongcengrenyuan['studyDesp'])?$cmf_edu_zhongcengrenyuan['studyDesp']:''; ?>">
                            <?php echo form_error('studyDesp','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="studySelf">自我学习评价：</label>
                            <input type="text" class="form-control" name="studySelf" placeholder="Enter studySelf" value="<?php echo !empty($cmf_edu_zhongcengrenyuan['studySelf'])?$cmf_edu_zhongcengrenyuan['studySelf']:''; ?>">
                            <?php echo form_error('studySelf','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jixiaoDesp">绩效描述：</label>
                            <input type="text" class="form-control" name="jixiaoDesp" placeholder="Enter jixiaoDesp" value="<?php echo !empty($cmf_edu_zhongcengrenyuan['jixiaoDesp'])?$cmf_edu_zhongcengrenyuan['jixiaoDesp']:''; ?>">
                            <?php echo form_error('jixiaoDesp','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jixiaoSelf">自我绩效评价：</label>
                            <input type="text" class="form-control" name="jixiaoSelf" placeholder="Enter jixiaoSelf" value="<?php echo !empty($cmf_edu_zhongcengrenyuan['jixiaoSelf'])?$cmf_edu_zhongcengrenyuan['jixiaoSelf']:''; ?>">
                            <?php echo form_error('jixiaoSelf','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="lianzhengDesp">廉政描述：</label>
                            <input type="text" class="form-control" name="lianzhengDesp" placeholder="Enter lianzhengDesp" value="<?php echo !empty($cmf_edu_zhongcengrenyuan['lianzhengDesp'])?$cmf_edu_zhongcengrenyuan['lianzhengDesp']:''; ?>">
                            <?php echo form_error('lianzhengDesp','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="lianzhengSelf">自我廉政评价：</label>
                            <input type="text" class="form-control" name="lianzhengSelf" placeholder="Enter lianzhengSelf" value="<?php echo !empty($cmf_edu_zhongcengrenyuan['lianzhengSelf'])?$cmf_edu_zhongcengrenyuan['lianzhengSelf']:''; ?>">
                            <?php echo form_error('lianzhengSelf','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="attach">附件：</label>
                            <input type="text" class="form-control" name="attach" placeholder="Enter attach" value="<?php echo !empty($cmf_edu_zhongcengrenyuan['attach'])?$cmf_edu_zhongcengrenyuan['attach']:''; ?>">
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