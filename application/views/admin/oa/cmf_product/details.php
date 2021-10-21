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
            <div class="panel-heading">产品详细内容<a href="<?php echo site_url('/oa/CmfProduct/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>产品ID：</label>
                    <p><?php echo !empty($CmfProduct['productid'])?$CmfProduct['productid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品名称：</label>
                    <p><?php echo !empty($CmfProduct['productname'])?$CmfProduct['productname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>测量ID：</label>
                    <p><?php echo !empty($CmfProduct['measureid'])?$CmfProduct['measureid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>模式：</label>
                    <p><?php echo !empty($CmfProduct['mode'])?$CmfProduct['mode']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>标准：</label>
                    <p><?php echo !empty($CmfProduct['standard'])?$CmfProduct['standard']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品类型：</label>
                    <p><?php echo !empty($CmfProduct['producttype'])?$CmfProduct['producttype']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>最小库存：</label>
                    <p><?php echo !empty($CmfProduct['storemin'])?$CmfProduct['storemin']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>最大库存：</label>
                    <p><?php echo !empty($CmfProduct['storemax'])?$CmfProduct['storemax']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户标识：</label>
                    <p><?php echo !empty($CmfProduct['user_flag'])?$CmfProduct['user_flag']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>贩卖价格：</label>
                    <p><?php echo !empty($CmfProduct['sellprice'])?$CmfProduct['sellprice']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品编号：</label>
                    <p><?php echo !empty($CmfProduct['productcn'])?$CmfProduct['productcn']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>贩卖价格二：</label>
                    <p><?php echo !empty($CmfProduct['sellprice2'])?$CmfProduct['sellprice2']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>贩卖价格三：</label>
                    <p><?php echo !empty($CmfProduct['sellprice3'])?$CmfProduct['sellprice3']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>文件地址：</label>
                    <p><?php echo !empty($CmfProduct['fileaddress'])?$CmfProduct['fileaddress']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>过往产品ID：</label>
                    <p><?php echo !empty($CmfProduct['oldproductid'])?$CmfProduct['oldproductid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否库存：</label>
                    <p><?php echo !empty($CmfProduct['ifkucun'])?$CmfProduct['ifkucun']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>相关文件：</label>
                    <p><?php echo !empty($CmfProduct['relatefiles'])?$CmfProduct['relatefiles']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商ID：</label>
                    <p><?php echo !empty($CmfProduct['supplyid'])?$CmfProduct['supplyid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否有颜色：</label>
                    <p><?php echo !empty($CmfProduct['hascolor'])?$CmfProduct['hascolor']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>贩卖价格四：</label>
                    <p><?php echo !empty($CmfProduct['sellprice4'])?$CmfProduct['sellprice4']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>