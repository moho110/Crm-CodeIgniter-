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
                <div class="panel-heading"><?php echo $action; ?> 行政年检 <a href="<?php echo site_url('/oa/CmfEduXingzhengYearcheck/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['ID'])?$cmf_edu_xingzheng_yearcheck['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="term">期限：</label>
                            <input type="text" class="form-control" name="term" placeholder="Enter term" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['term'])?$cmf_edu_xingzheng_yearcheck['term']:''; ?>">
                            <?php echo form_error('term','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="userName">用户名称：</label>
                            <input type="text" class="form-control" name="userName" placeholder="Enter userName" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['userName'])?$cmf_edu_xingzheng_yearcheck['userName']:''; ?>">
                            <?php echo form_error('userName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="name">名称：</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['name'])?$cmf_edu_xingzheng_yearcheck['name']:''; ?>">
                            <?php echo form_error('name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="classRoom">教室：</label>
                            <input type="text" class="form-control" name="classRoom" placeholder="Enter classRoom" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['classRoom'])?$cmf_edu_xingzheng_yearcheck['classRoom']:''; ?>">
                            <?php echo form_error('classRoom','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kezhang">刻章：</label>
                            <input type="text" class="form-control" name="kezhang" placeholder="Enter kezhang" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['kezhang'])?$cmf_edu_xingzheng_yearcheck['kezhang']:''; ?>">
                            <?php echo form_error('kezhang','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="pindetaiduAbillityScore">品德态度能力：</label>
                            <input type="text" class="form-control" name="pindetaiduAbillityScore" placeholder="Enter pindetaiduAbillityScore" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['pindetaiduAbillityScore'])?$cmf_edu_xingzheng_yearcheck['pindetaiduAbillityScore']:''; ?>">
                            <?php echo form_error('pindetaiduAbillityScore','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="chuqinScore">出勤：</label>
                            <input type="text" class="form-control" name="chuqinScore" placeholder="Enter chuqinScore" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['chuqinScore'])?$cmf_edu_xingzheng_yearcheck['chuqinScore']:''; ?>">
                            <?php echo form_error('chuqinScore','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workquantityScore">工作数量：</label>
                            <input type="text" class="form-control" name="workquantityScore" placeholder="Enter workquantityScore" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['workquantityScore'])?$cmf_edu_xingzheng_yearcheck['workquantityScore']:''; ?>">
                            <?php echo form_error('workquantityScore','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workjilvScore">工作纪律：</label>
                            <input type="text" class="form-control" name="workjilvScore" placeholder="Enter workjilvScore" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['workjilvScore'])?$cmf_edu_xingzheng_yearcheck['workjilvScore']:''; ?>">
                            <?php echo form_error('workjilvScore','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workSpecScore">工作分工：</label>
                            <input type="text" class="form-control" name="workSpecScore" placeholder="Enter workSpecScore" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['workSpecScore'])?$cmf_edu_xingzheng_yearcheck['workSpecScore']:''; ?>">
                            <?php echo form_error('workSpecScore','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workxiaoguoScore">工作效果：</label>
                            <input type="text" class="form-control" name="workxiaoguoScore" placeholder="Enter workxiaoguoScore" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['workxiaoguoScore'])?$cmf_edu_xingzheng_yearcheck['workxiaoguoScore']:''; ?>">
                            <?php echo form_error('workxiaoguoScore','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="banzhurenScore">班主任：</label>
                            <input type="text" class="form-control" name="banzhurenScore" placeholder="Enter banzhurenScore" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['banzhurenScore'])?$cmf_edu_xingzheng_yearcheck['banzhurenScore']:''; ?>">
                            <?php echo form_error('banzhurenScore','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tempWorkScore">临时工作：</label>
                            <input type="text" class="form-control" name="tempWorkScore" placeholder="Enter tempWorkScore" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['tempWorkScore'])?$cmf_edu_xingzheng_yearcheck['tempWorkScore']:''; ?>">
                            <?php echo form_error('tempWorkScore','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="thesisScore">论文：</label>
                            <input type="text" class="form-control" name="thesisScore" placeholder="Enter thesisScore" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['thesisScore'])?$cmf_edu_xingzheng_yearcheck['thesisScore']:''; ?>">
                            <?php echo form_error('thesisScore','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="teachingScore">教学：</label>
                            <input type="text" class="form-control" name="teachingScore" placeholder="Enter teachingScore" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['teachingScore'])?$cmf_edu_xingzheng_yearcheck['teachingScore']:''; ?>">
                            <?php echo form_error('teachingScore','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="sumScore">总评分：</label>
                            <input type="text" class="form-control" name="sumScore" placeholder="Enter sumScore" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['sumScore'])?$cmf_edu_xingzheng_yearcheck['sumScore']:''; ?>">
                            <?php echo form_error('sumScore','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exTime">审核时间：</label>
                            <input type="text" class="form-control" name="exTime" placeholder="Enter exTime" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['exTime'])?$cmf_edu_xingzheng_yearcheck['exTime']:''; ?>">
                            <?php echo form_error('exTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="pindeAbillityScore">品德能力：</label>
                            <input type="text" class="form-control" name="pindeAbillityScore" placeholder="Enter pindeAbillityScore" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['pindeAbillityScore'])?$cmf_edu_xingzheng_yearcheck['pindeAbillityScore']:''; ?>">
                            <?php echo form_error('pindeAbillityScore','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="chuqinbiaoxianScore">出勤表现：</label>
                            <input type="text" class="form-control" name="chuqinbiaoxianScore" placeholder="Enter chuqinbiaoxianScore" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['chuqinbiaoxianScore'])?$cmf_edu_xingzheng_yearcheck['chuqinbiaoxianScore']:''; ?>">
                            <?php echo form_error('chuqinbiaoxianScore','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workExScore">工作审核：</label>
                            <input type="text" class="form-control" name="workExScore" placeholder="Enter workExScore" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['workExScore'])?$cmf_edu_xingzheng_yearcheck['workExScore']:''; ?>">
                            <?php echo form_error('workExScore','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workJilvExScore">工作纪律审核：</label>
                            <input type="text" class="form-control" name="workJilvExScore" placeholder="Enter workJilvExScore" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['workJilvExScore'])?$cmf_edu_xingzheng_yearcheck['workJilvExScore']:''; ?>">
                            <?php echo form_error('workJilvExScore','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workSpecExScore">工作分工审核：</label>
                            <input type="text" class="form-control" name="workSpecExScore" placeholder="Enter workSpecExScore" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['workSpecExScore'])?$cmf_edu_xingzheng_yearcheck['workSpecExScore']:''; ?>">
                            <?php echo form_error('workSpecExScore','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workxiaoguoExScore">工作效果审核：</label>
                            <input type="text" class="form-control" name="workxiaoguoExScore" placeholder="Enter workxiaoguoExScore" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['workxiaoguoExScore'])?$cmf_edu_xingzheng_yearcheck['workxiaoguoExScore']:''; ?>">
                            <?php echo form_error('workxiaoguoExScore','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="banzhurenWorkExScore">班主任工作审核：</label>
                            <input type="text" class="form-control" name="banzhurenWorkExScore" placeholder="Enter banzhurenWorkExScore" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['banzhurenWorkExScore'])?$cmf_edu_xingzheng_yearcheck['banzhurenWorkExScore']:''; ?>">
                            <?php echo form_error('banzhurenWorkExScore','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tempWorkExScore">临时工作审核：</label>
                            <input type="text" class="form-control" name="tempWorkExScore" placeholder="Enter tempWorkExScore" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['tempWorkExScore'])?$cmf_edu_xingzheng_yearcheck['tempWorkExScore']:''; ?>">
                            <?php echo form_error('tempWorkExScore','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="thesisExScore">论文审核：</label>
                            <input type="text" class="form-control" name="thesisExScore" placeholder="Enter thesisExScore" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['thesisExScore'])?$cmf_edu_xingzheng_yearcheck['thesisExScore']:''; ?>">
                            <?php echo form_error('thesisExScore','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="techingExScore">教学审核：</label>
                            <input type="text" class="form-control" name="techingExScore" placeholder="Enter techingExScore" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['techingExScore'])?$cmf_edu_xingzheng_yearcheck['techingExScore']:''; ?>">
                            <?php echo form_error('techingExScore','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="sumExScore">总评分审核：</label>
                            <input type="text" class="form-control" name="sumExScore" placeholder="Enter sumExScore" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['sumExScore'])?$cmf_edu_xingzheng_yearcheck['sumExScore']:''; ?>">
                            <?php echo form_error('sumExScore','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="keshiScoreMan">科室评分人员：</label>
                            <input type="text" class="form-control" name="keshiScoreMan" placeholder="Enter keshiScoreMan" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['keshiScoreMan'])?$cmf_edu_xingzheng_yearcheck['keshiScoreMan']:''; ?>">
                            <?php echo form_error('keshiScoreMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="classRoomScoreTime">教室评分时间：</label>
                            <input type="text" class="form-control" name="classRoomScoreTime" placeholder="Enter classRoomScoreTime" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['classRoomScoreTime'])?$cmf_edu_xingzheng_yearcheck['classRoomScoreTime']:''; ?>">
                            <?php echo form_error('classRoomScoreTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workflow">工作流：</label>
                            <input type="text" class="form-control" name="workflow" placeholder="Enter workflow" value="<?php echo !empty($cmf_edu_xingzheng_yearcheck['workflow'])?$cmf_edu_xingzheng_yearcheck['workflow']:''; ?>">
                            <?php echo form_error('workflow','<p class="help-block text-danger">','</p>'); ?>
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