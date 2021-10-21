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
            <div class="panel-heading">办公用品详细内容<a href="<?php echo site_url('/oa/CmfOfficeproduct/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfOfficeproduct['ID'])?$CmfOfficeproduct['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>办公用品名称：</label>
                    <p><?php echo !empty($CmfOfficeproduct['officeName'])?$CmfOfficeproduct['officeName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>办公用品编号：</label>
                    <p><?php echo !empty($CmfOfficeproduct['officeNo'])?$CmfOfficeproduct['officeNo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>办公用品类型：</label>
                    <p><?php echo !empty($CmfOfficeproduct['officeType'])?$CmfOfficeproduct['officeType']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>规格尺寸：</label>
                    <p><?php echo !empty($CmfOfficeproduct['specSize'])?$CmfOfficeproduct['specSize']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>单元：</label>
                    <p><?php echo !empty($CmfOfficeproduct['unit'])?$CmfOfficeproduct['unit']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>数量：</label>
                    <p><?php echo !empty($CmfOfficeproduct['quantity'])?$CmfOfficeproduct['quantity']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>仓库信息：</label>
                    <p><?php echo !empty($CmfOfficeproduct['warehouseInfo'])?$CmfOfficeproduct['warehouseInfo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>价格：</label>
                    <p><?php echo !empty($CmfOfficeproduct['price'])?$CmfOfficeproduct['price']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>总金额：</label>
                    <p><?php echo !empty($CmfOfficeproduct['totalCount'])?$CmfOfficeproduct['totalCount']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>品牌：</label>
                    <p><?php echo !empty($CmfOfficeproduct['brand'])?$CmfOfficeproduct['brand']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>保存位置：</label>
                    <p><?php echo !empty($CmfOfficeproduct['savedPlace'])?$CmfOfficeproduct['savedPlace']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfOfficeproduct['memo'])?$CmfOfficeproduct['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfOfficeproduct['creator'])?$CmfOfficeproduct['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfOfficeproduct['createTime'])?$CmfOfficeproduct['createTime']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>