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
            <div class="panel-heading">固定资产详细内容<a href="<?php echo site_url('/oa/CmfFixedasset/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfFixedasset['ID'])?$CmfFixedasset['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>资产名称：</label>
                    <p><?php echo !empty($CmfFixedasset['setName'])?$CmfFixedasset['setName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>资产编号：</label>
                    <p><?php echo !empty($CmfFixedasset['setNo'])?$CmfFixedasset['setNo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>资产批次：</label>
                    <p><?php echo !empty($CmfFixedasset['setPichi'])?$CmfFixedasset['setPichi']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>资产类型：</label>
                    <p><?php echo !empty($CmfFixedasset['setType'])?$CmfFixedasset['setType']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>买卖ID：</label>
                    <p><?php echo !empty($CmfFixedasset['purchaseID'])?$CmfFixedasset['purchaseID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商：</label>
                    <p><?php echo !empty($CmfFixedasset['supply'])?$CmfFixedasset['supply']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>部门：</label>
                    <p><?php echo !empty($CmfFixedasset['department'])?$CmfFixedasset['department']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>人员：</label>
                    <p><?php echo !empty($CmfFixedasset['person'])?$CmfFixedasset['person']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>尺寸：</label>
                    <p><?php echo !empty($CmfFixedasset['size'])?$CmfFixedasset['size']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>状态：</label>
                    <p><?php echo !empty($CmfFixedasset['status'])?$CmfFixedasset['status']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>数量：</label>
                    <p><?php echo !empty($CmfFixedasset['quantity'])?$CmfFixedasset['quantity']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>价格：</label>
                    <p><?php echo !empty($CmfFixedasset['price'])?$CmfFixedasset['price']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>金额：</label>
                    <p><?php echo !empty($CmfFixedasset['count'])?$CmfFixedasset['count']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>单元：</label>
                    <p><?php echo !empty($CmfFixedasset['unit'])?$CmfFixedasset['unit']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>地点：</label>
                    <p><?php echo !empty($CmfFixedasset['place'])?$CmfFixedasset['place']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>买卖日期：</label>
                    <p><?php echo !empty($CmfFixedasset['purchaseDate'])?$CmfFixedasset['purchaseDate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>清单数量：</label>
                    <p><?php echo !empty($CmfFixedasset['billNum'])?$CmfFixedasset['billNum']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>ID数量：</label>
                    <p><?php echo !empty($CmfFixedasset['IDNumber'])?$CmfFixedasset['IDNumber']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfFixedasset['memo'])?$CmfFixedasset['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfFixedasset['creator'])?$CmfFixedasset['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfFixedasset['createTime'])?$CmfFixedasset['createTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>使用部门：</label>
                    <p><?php echo !empty($CmfFixedasset['useDepartment'])?$CmfFixedasset['useDepartment']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>使用方向：</label>
                    <p><?php echo !empty($CmfFixedasset['useDirect'])?$CmfFixedasset['useDirect']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>测试部门：</label>
                    <p><?php echo !empty($CmfFixedasset['testDepartment'])?$CmfFixedasset['testDepartment']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>责任人：</label>
                    <p><?php echo !empty($CmfFixedasset['dutyMan'])?$CmfFixedasset['dutyMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>启用日期：</label>
                    <p><?php echo !empty($CmfFixedasset['qiyongDate'])?$CmfFixedasset['qiyongDate']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>