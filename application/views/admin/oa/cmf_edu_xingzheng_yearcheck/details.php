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
            <div class="panel-heading">行政年检详细内容<a href="<?php echo site_url('/oa/CmfEduXingzhengYearcheck/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['ID'])?$CmfEduXingzhengYearcheck['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>期限：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['term'])?$CmfEduXingzhengYearcheck['term']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户名称：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['userName'])?$CmfEduXingzhengYearcheck['userName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>名称：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['name'])?$CmfEduXingzhengYearcheck['name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>教室：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['classRoom'])?$CmfEduXingzhengYearcheck['classRoom']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>刻章：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['kezhang'])?$CmfEduXingzhengYearcheck['kezhang']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>品德态度能力：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['pindetaiduAbillityScore'])?$CmfEduXingzhengYearcheck['pindetaiduAbillityScore']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>出勤：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['chuqinScore'])?$CmfEduXingzhengYearcheck['chuqinScore']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作数量：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['workquantityScore'])?$CmfEduXingzhengYearcheck['workquantityScore']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作纪律：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['workjilvScore'])?$CmfEduXingzhengYearcheck['workjilvScore']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作分工：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['workSpecScore'])?$CmfEduXingzhengYearcheck['workSpecScore']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作效果：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['workxiaoguoScore'])?$CmfEduXingzhengYearcheck['workxiaoguoScore']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>班主任：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['banzhurenScore'])?$CmfEduXingzhengYearcheck['banzhurenScore']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>临时工作：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['tempWorkScore'])?$CmfEduXingzhengYearcheck['tempWorkScore']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>论文：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['thesisScore'])?$CmfEduXingzhengYearcheck['thesisScore']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>教学：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['teachingScore'])?$CmfEduXingzhengYearcheck['teachingScore']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>总评分：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['sumScore'])?$CmfEduXingzhengYearcheck['sumScore']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>审核时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['exTime'])?$CmfEduXingzhengYearcheck['exTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>品德能力：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['pindeAbillityScore'])?$CmfEduXingzhengYearcheck['pindeAbillityScore']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>出勤表现：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['chuqinbiaoxianScore'])?$CmfEduXingzhengYearcheck['chuqinbiaoxianScore']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作审核：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['workExScore'])?$CmfEduXingzhengYearcheck['workExScore']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作纪律审核：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['workJilvExScore'])?$CmfEduXingzhengYearcheck['workJilvExScore']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作分工审核：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['workSpecExScore'])?$CmfEduXingzhengYearcheck['workSpecExScore']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作效果审核：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['workxiaoguoExScore'])?$CmfEduXingzhengYearcheck['workxiaoguoExScore']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>班主任工作审核：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['banzhurenWorkExScore'])?$CmfEduXingzhengYearcheck['banzhurenWorkExScore']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>临时工作审核：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['tempWorkExScore'])?$CmfEduXingzhengYearcheck['tempWorkExScore']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>论文审核：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['thesisExScore'])?$CmfEduXingzhengYearcheck['thesisExScore']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>教学审核：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['techingExScore'])?$CmfEduXingzhengYearcheck['techingExScore']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>总评分审核：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['sumExScore'])?$CmfEduXingzhengYearcheck['sumExScore']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>科室评分人员：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['keshiScoreMan'])?$CmfEduXingzhengYearcheck['keshiScoreMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>教室评分时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['classRoomScoreTime'])?$CmfEduXingzhengYearcheck['classRoomScoreTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作流：</label>
                    <p><?php echo !empty($CmfEduXingzhengYearcheck['workflow'])?$CmfEduXingzhengYearcheck['workflow']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>