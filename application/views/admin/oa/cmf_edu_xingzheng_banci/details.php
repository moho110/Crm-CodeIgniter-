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
            <div class="panel-heading">行政班次详细内容<a href="<?php echo site_url('/oa/CmfEduXingzhengBanci/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：/label>
                    <p><?php echo !empty($CmfEduXingzhengBanci['Id'])?$CmfEduXingzhengBanci['Id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>课程名称：</label>
                    <p><?php echo !empty($CmfEduXingzhengBanci['className'])?$CmfEduXingzhengBanci['className']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>班次时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengBanci['dutyTime'])?$CmfEduXingzhengBanci['dutyTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否开始上班时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengBanci['isStartTimeEnable'])?$CmfEduXingzhengBanci['isStartTimeEnable']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否结束上班时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengBanci['isEndTimeEnable'])?$CmfEduXingzhengBanci['isEndTimeEnable']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>上班打卡时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengBanci['startCardTime'])?$CmfEduXingzhengBanci['startCardTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>下班打卡时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengBanci['endCardTime'])?$CmfEduXingzhengBanci['endCardTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>上班迟到打卡时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengBanci['startDelayCardTime'])?$CmfEduXingzhengBanci['startDelayCardTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>下班迟到打卡时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengBanci['endDelayCardTime'])?$CmfEduXingzhengBanci['endDelayCardTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>迟到时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengBanci['laterTime'])?$CmfEduXingzhengBanci['laterTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>早退时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengBanci['earlyTime'])?$CmfEduXingzhengBanci['earlyTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>课程管理一：</label>
                    <p><?php echo !empty($CmfEduXingzhengBanci['classManageOne'])?$CmfEduXingzhengBanci['classManageOne']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>课程管理二：</label>
                    <p><?php echo !empty($CmfEduXingzhengBanci['classManageTwo'])?$CmfEduXingzhengBanci['classManageTwo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建者：</label>
                    <p><?php echo !empty($CmfEduXingzhengBanci['creator'])?$CmfEduXingzhengBanci['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>课程名称：</label>
                    <p><?php echo !empty($CmfEduXingzhengBanci['className'])?$CmfEduXingzhengBanci['className']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengBanci['createTime'])?$CmfEduXingzhengBanci['createTime']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>