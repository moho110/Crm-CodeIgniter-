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
            <div class="panel-heading">入库详细内容<a href="<?php echo site_url('/oa/CmfStockinmain/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>清单ID：</label>
                    <p><?php echo !empty($CmfStockinmain['billid'])?$CmfStockinmain['billid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>主题：</label>
                    <p><?php echo !empty($CmfStockinmain['zhuti'])?$CmfStockinmain['zhuti']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>仓库ID：</label>
                    <p><?php echo !empty($CmfStockinmain['storeid'])?$CmfStockinmain['storeid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>入库日期：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfStockinmain['indate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfStockinmain['createman'])?$CmfStockinmain['createman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfStockinmain['createtime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>采购清单ID：</label>
                    <p><?php echo !empty($CmfStockinmain['caigoubillid'])?$CmfStockinmain['caigoubillid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>退货清单ID：</label>
                    <p><?php echo !empty($CmfStockinmain['tuihuobillid'])?$CmfStockinmain['tuihuobillid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfStockinmain['memo'])?$CmfStockinmain['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>状态：</label>
                    <p><?php echo !empty($CmfStockinmain['state'])?$CmfStockinmain['state']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备用一：</label>
                    <p><?php echo !empty($CmfStockinmain['beiyong1'])?$CmfStockinmain['beiyong1']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备用二：</label>
                    <p><?php echo !empty($CmfStockinmain['beiyong2'])?$CmfStockinmain['beiyong2']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备用三：</label>
                    <p><?php echo !empty($CmfStockinmain['beiyong3'])?$CmfStockinmain['beiyong3']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>总数量：</label>
                    <p><?php echo !empty($CmfStockinmain['totalnum'])?$CmfStockinmain['totalnum']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>总金额：</label>
                    <p><?php echo !empty($CmfStockinmain['totalmoney'])?$CmfStockinmain['totalmoney']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>入库审核：</label>
                    <p>
                        <?php if ($CmfStockinmain['instoreshenhe'] == '1') {?>
                            已审核
                        <?php } elseif ($CmfStockinmain['instoreshenhe'] == '0') {?>
                            未审核
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>入库类型：</label>
                    <p><?php echo !empty($CmfStockinmain['intype'])?$CmfStockinmain['intype']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>