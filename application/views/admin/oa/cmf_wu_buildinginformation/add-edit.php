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
                <div class="panel-heading"><?php echo $action; ?> 房产信息 <a href="<?php echo site_url('/oa/CmfWuBuildinginformation/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="id">编号：</label>
                            <input type="text" class="form-control" name="id" placeholder="Enter id" value="<?php echo !empty($cmf_wu_buildinginformation['id'])?$cmf_wu_buildinginformation['id']:''; ?>">
                            <?php echo form_error('id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="buildingNo">建筑物编号：</label>
                            <input type="text" class="form-control" name="buildingNo" placeholder="Enter buildingNo" value="<?php echo !empty($cmf_wu_buildinginformation['buildingNo'])?$cmf_wu_buildinginformation['buildingNo']:''; ?>">
                            <?php echo form_error('buildingNo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="buildingName">建筑物名称：</label>
                            <input type="text" class="form-control" name="buildingName" placeholder="Enter buildingName" value="<?php echo !empty($cmf_wu_buildinginformation['buildingName'])?$cmf_wu_buildinginformation['buildingName']:''; ?>">
                            <?php echo form_error('buildingName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="buildingLocate">建筑物位置：</label>
                            <input type="text" class="form-control" name="buildingLocate" placeholder="Enter buildingLocate" value="<?php echo !empty($cmf_wu_buildinginformation['buildingLocate'])?$cmf_wu_buildinginformation['buildingLocate']:''; ?>">
                            <?php echo form_error('buildingLocate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="unit">单元：</label>
                            <input type="text" class="form-control" name="unit" placeholder="Enter unit" value="<?php echo !empty($cmf_wu_buildinginformation['unit'])?$cmf_wu_buildinginformation['unit']:''; ?>">
                            <?php echo form_error('unit','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="buildingStruct">建筑物结构：</label>
                            <input type="text" class="form-control" name="buildingStruct" placeholder="Enter buildingStruct" value="<?php echo !empty($cmf_wu_buildinginformation['buildingStruct'])?$cmf_wu_buildinginformation['buildingStruct']:''; ?>">
                            <?php echo form_error('buildingStruct','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="type">类型：</label>
                            <input type="text" class="form-control" name="type" placeholder="Enter type" value="<?php echo !empty($cmf_wu_buildinginformation['type'])?$cmf_wu_buildinginformation['type']:''; ?>">
                            <?php echo form_error('type','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="sum">总数：</label>
                            <input type="text" class="form-control" name="sum" placeholder="Enter sum" value="<?php echo !empty($cmf_wu_buildinginformation['sum'])?$cmf_wu_buildinginformation['sum']:''; ?>">
                            <?php echo form_error('startDate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="startDate">开始日期：</label>
                            <input type="text" class="form-control" name="startDate" placeholder="Enter startDate" value="<?php echo !empty($cmf_wu_buildinginformation['startDate'])?$cmf_wu_buildinginformation['startDate']:''; ?>">
                            <?php echo form_error('startDate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="finishDate">完成日期：</label>
                            <input type="text" class="form-control" name="finishDate" placeholder="Enter finishDate" value="<?php echo !empty($cmf_wu_buildinginformation['finishDate'])?$cmf_wu_buildinginformation['finishDate']:''; ?>">
                            <?php echo form_error('finishDate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jiaofuDate">交付日期：</label>
                            <input type="text" class="form-control" name="jiaofuDate" placeholder="Enter jiaofuDate" value="<?php echo !empty($cmf_wu_buildinginformation['jiaofuDate'])?$cmf_wu_buildinginformation['jiaofuDate']:''; ?>">
                            <?php echo form_error('jiaofuDate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="useIn">使用：</label>
                            <input type="text" class="form-control" name="useIn" placeholder="Enter useIn" value="<?php echo !empty($cmf_wu_buildinginformation['useIn'])?$cmf_wu_buildinginformation['useIn']:''; ?>">
                            <?php echo form_error('useIn','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="area">区域：</label>
                            <input type="text" class="form-control" name="area" placeholder="Enter area" value="<?php echo !empty($cmf_wu_buildinginformation['area'])?$cmf_wu_buildinginformation['area']:''; ?>">
                            <?php echo form_error('area','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="saledNum">已销售数量：</label>
                            <input type="text" class="form-control" name="saledNum" placeholder="Enter saledNum" value="<?php echo !empty($cmf_wu_buildinginformation['saledNum'])?$cmf_wu_buildinginformation['saledNum']:''; ?>">
                            <?php echo form_error('saledNum','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="rentNum">已出租数量：</label>
                            <input type="text" class="form-control" name="rentNum" placeholder="Enter rentNum" value="<?php echo !empty($cmf_wu_buildinginformation['rentNum'])?$cmf_wu_buildinginformation['rentNum']:''; ?>">
                            <?php echo form_error('rentNum','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="builder">开发商：</label>
                            <input type="text" class="form-control" name="builder" placeholder="Enter builder" value="<?php echo !empty($cmf_wu_buildinginformation['builder'])?$cmf_wu_buildinginformation['builder']:''; ?>">
                            <?php echo form_error('builder','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_wu_buildinginformation['creator'])?$cmf_wu_buildinginformation['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input type="text" class="form-control" name="createTime" placeholder="Enter createTime" value="<?php echo !empty($cmf_wu_buildinginformation['createTime'])?$cmf_wu_buildinginformation['createTime']:''; ?>">
                            <?php echo form_error('createTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <input type="text" class="form-control" name="memo" placeholder="Enter memo" value="<?php echo !empty($cmf_wu_buildinginformation['memo'])?$cmf_wu_buildinginformation['memo']:''; ?>">
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="optManage">操作管理：</label>
                            <input type="text" class="form-control" name="optManage" placeholder="Enter optManage" value="<?php echo !empty($cmf_wu_buildinginformation['optManage'])?$cmf_wu_buildinginformation['optManage']:''; ?>">
                            <?php echo form_error('optManage','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="areaName">区域名称：</label>
                            <input type="text" class="form-control" name="areaName" placeholder="Enter areaName" value="<?php echo !empty($cmf_wu_buildinginformation['areaName'])?$cmf_wu_buildinginformation['areaName']:''; ?>">
                            <?php echo form_error('areaName','<p class="help-block text-danger">','</p>'); ?>
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