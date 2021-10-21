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
            <div class="panel-heading">房产信息详细内容<a href="<?php echo site_url('/oa/CmfWuBuildinginformation/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfWuBuildinginformation['id'])?$CmfWuBuildinginformation['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>建筑物编号：</label>
                    <p><?php echo !empty($CmfWuBuildinginformation['buildingNo'])?$CmfWuBuildinginformation['buildingNo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>建筑物名称：</label>
                    <p><?php echo !empty($CmfWuBuildinginformation['buildingName'])?$CmfWuBuildinginformation['buildingName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>建筑物位置：</label>
                    <p><?php echo !empty($CmfWuBuildinginformation['buildingLocate'])?$CmfWuBuildinginformation['buildingLocate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>单元：</label>
                    <p><?php echo !empty($CmfWuBuildinginformation['unit'])?$CmfWuBuildinginformation['unit']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>建筑物结构：</label>
                    <p><?php echo !empty($CmfWuBuildinginformation['buildingStruct'])?$CmfWuBuildinginformation['buildingStruct']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>类型：</label>
                    <p><?php echo !empty($CmfWuBuildinginformation['type'])?$CmfWuBuildinginformation['type']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>总数：</label>
                    <p><?php echo !empty($CmfWuBuildinginformation['sum'])?$CmfWuBuildinginformation['sum']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开始日期：</label>
                    <p><?php echo !empty($CmfWuBuildinginformation['startDate'])?$CmfWuBuildinginformation['startDate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>完成日期：</label>
                    <p><?php echo !empty($CmfWuBuildinginformation['finishDate'])?$CmfWuBuildinginformation['finishDate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>交付日期：</label>
                    <p><?php echo !empty($CmfWuBuildinginformation['jiaofuDate'])?$CmfWuBuildinginformation['jiaofuDate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>使用：</label>
                    <p><?php echo !empty($CmfWuBuildinginformation['useIn'])?$CmfWuBuildinginformation['useIn']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>区域：</label>
                    <p><?php echo !empty($CmfWuBuildinginformation['area'])?$CmfWuBuildinginformation['area']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>已销售数量：</label>
                    <p><?php echo !empty($CmfWuBuildinginformation['saledNum'])?$CmfWuBuildinginformation['saledNum']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>已出租数量：</label>
                    <p><?php echo !empty($CmfWuBuildinginformation['rentNum'])?$CmfWuBuildinginformation['rentNum']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开发商：</label>
                    <p><?php echo !empty($CmfWuBuildinginformation['builder'])?$CmfWuBuildinginformation['builder']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfWuBuildinginformation['creator'])?$CmfWuBuildinginformation['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfWuBuildinginformation['createTime'])?$CmfWuBuildinginformation['createTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfWuBuildinginformation['memo'])?$CmfWuBuildinginformation['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>操作管理：</label>
                    <p><?php echo !empty($CmfWuBuildinginformation['optManage'])?$CmfWuBuildinginformation['optManage']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>区域名称：</label>
                    <p><?php echo !empty($CmfWuBuildinginformation['areaName'])?$CmfWuBuildinginformation['areaName']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>