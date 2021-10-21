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
            <div class="panel-heading">毛利汇总明细内容 <a href="<?php echo site_url('/oa/CmfMaolihuizong/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfMaolihuizong['id'])?$CmfMaolihuizong['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品名称：</label>
                    <p><?php echo !empty($CmfMaolihuizong['prodname'])?$CmfMaolihuizong['prodname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品规格：</label>
                    <p><?php echo !empty($CmfMaolihuizong['prodguige'])?$CmfMaolihuizong['prodguige']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品型号：</label>
                    <p><?php echo !empty($CmfMaolihuizong['prodxinghao'])?$CmfMaolihuizong['prodxinghao']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品单位：</label>
                    <p><?php echo !empty($CmfMaolihuizong['proddanwei'])?$CmfMaolihuizong['proddanwei']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品价格：</label>
                    <p><?php echo !empty($CmfMaolihuizong['price'])?$CmfMaolihuizong['price']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品折扣：</label>
                    <p><?php echo !empty($CmfMaolihuizong['zhekou'])?$CmfMaolihuizong['zhekou']:''; ?></p>
                    </p>
                </div>
                <div class="form-group">
                    <label>产品数量：</label>
                    <p><?php echo !empty($CmfMaolihuizong['num'])?$CmfMaolihuizong['num']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>计划日期：</label>
                    <p><?php echo date('Y年m月d日', strtotime($CmfMaolihuizong['plandate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>操作类型：</label>
                    <p>
                        <?php if ($CmfMaolihuizong['opertype'] == '1') {?>
                            保留
                        <?php } elseif ($CmfMaolihuizong['opertype'] == '0') {?>
                            删除
                        <?php } else {?>
                            其他类型
                        <?php }?>
                    </p>
                </div>
                <div class="form-group">
                    <label>供应商名称：</label>
                    <p><?php echo !empty($CmfMaolihuizong['supplyname'])?$CmfMaolihuizong['supplyname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开始日期：</label>
                    <p><?php echo date('Y年m月d日', strtotime($CmfMaolihuizong['startdate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>结束日期：</label>
                    <p><?php echo date('Y年m月d日', strtotime($CmfMaolihuizong['enddate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>清单ID：</label>
                    <p><?php echo !empty($CmfMaolihuizong['billid'])?$CmfMaolihuizong['billid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>主题：</label>
                    <p><?php echo !empty($CmfMaolihuizong['zhuti'])?$CmfMaolihuizong['zhuti']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>销售计划编号：</label>
                    <p><?php echo !empty($CmfMaolihuizong['sellplanno'])?$CmfMaolihuizong['sellplanno']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>总金额：</label>
                    <p><?php echo !empty($CmfMaolihuizong['totalmoney'])?$CmfMaolihuizong['totalmoney']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>支付类型：</label>
                    <p>
                        <?php if ($CmfMaolihuizong['paytype'] == '1') {?>
                            线上支付
                        <?php } elseif ($CmfMaolihuizong['paytype'] == '0') {?>
                            线下支付
                        <?php } else {?>
                            其他类型
                        <?php }?>
                    </p>
                </div>
                <div class="form-group">
                    <label>汇款金额：</label>
                    <p><?php echo !empty($CmfMaolihuizong['huikuanjine'])?$CmfMaolihuizong['huikuanjine']:''; ?>元</p>
                </div>
                <div class="form-group">
                    <label>发货金额：</label>
                    <p><?php echo !empty($CmfMaolihuizong['fahuojine'])?$CmfMaolihuizong['fahuojine']:''; ?>元</p>
                </div>
                <div class="form-group">
                    <label>开票金额：</label>
                    <p><?php echo !empty($CmfMaolihuizong['kaipiaojine'])?$CmfMaolihuizong['kaipiaojine']:''; ?>元</p>
                </div>
                <div class="form-group">
                    <label>签约人：</label>
                    <p><?php echo !empty($CmfMaolihuizong['qianyueren'])?$CmfMaolihuizong['qianyueren']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户标识：</label>
                    <p>
                        <?php if ($CmfMaolihuizong['user_flag'] == '1') {?>
                            保留
                        <?php } elseif ($CmfMaolihuizong['user_flag'] == '0') {?>
                            删除
                        <?php } else {?>
                            其他类型
                        <?php }?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>