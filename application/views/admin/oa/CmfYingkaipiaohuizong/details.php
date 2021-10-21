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
            <div class="panel-heading">应开票汇总详细内容 <a href="<?php echo site_url('/oa/CmfYingkaipiaohuizong/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>清单编号ID：</label>
                    <p><?php echo !empty($CmfYingkaipiaohuizong['billid'])?$CmfYingkaipiaohuizong['billid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品主题：</label>
                    <p><?php echo !empty($CmfYingkaipiaohuizong['zhuti'])?$CmfYingkaipiaohuizong['zhuti']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商ID：</label>
                    <p><?php echo !empty($CmfYingkaipiaohuizong['supplyid'])?$CmfYingkaipiaohuizong['supplyid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>机会ID：</label>
                    <p><?php echo !empty($CmfYingkaipiaohuizong['chanceid'])?$CmfYingkaipiaohuizong['chanceid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>销售计划编号：</label>
                    <p><?php echo !empty($CmfYingkaipiaohuizong['sellplanno'])?$CmfYingkaipiaohuizong['sellplanno']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>总金额：</label>
                    <p><?php echo !empty($CmfYingkaipiaohuizong['totalmoney'])?$CmfYingkaipiaohuizong['totalmoney']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>支付类型：</label>
                    <p><?php echo !empty($CmfYingkaipiaohuizong['paytype'])?$CmfYingkaipiaohuizong['paytype']:''; ?></p>
                    </p>
                </div>
                <div class="form-group">
                    <label>汇款金额：</label>
                    <p><?php echo !empty($CmfYingkaipiaohuizong['huikuanjine'])?$CmfYingkaipiaohuizong['huikuanjine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>发货金额：</label>
                    <p><?php echo !empty($CmfYingkaipiaohuizong['fahuojine'])?$CmfYingkaipiaohuizong['fahuojine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开票金额：</label>
                    <p><?php echo !empty($CmfYingkaipiaohuizong['kaipiaojine'])?$CmfYingkaipiaohuizong['kaipiaojine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>计划日期：</label>
                    <p><?php echo date('Y年m月d日d时',strtotime($CmfYingkaipiaohuizong['plandate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>签约人：</label>
                    <p><?php echo !empty($CmfYingkaipiaohuizong['qianyueren'])?$CmfYingkaipiaohuizong['qianyueren']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户标识：</label>
                    <p>
                        <?php if ($CmfYingkaipiaohuizong['user_flag'] == '1') {?>
                            保留
                        <?php } elseif ($CmfYingkaipiaohuizong['user_flag'] == '0') {?>
                            删除
                        <?php } else {?>
                            其他类型
                        <?php }?>
                    </p>
                </div>
                <div class="form-group">
                    <label>发货状态：</label>
                    <p>
                        <?php if ($CmfYingkaipiaohuizong['fahuostate'] == '1') {?>
                            保留
                        <?php } elseif ($CmfYingkaipiaohuizong['fahuostate'] == '0') {?>
                            删除
                        <?php } else {?>
                            其他类型
                        <?php }?>
                    </p>
                </div>
                <div class="form-group">
                    <label>联系人：</label>
                    <p><?php echo !empty($CmfYingkaipiaohuizong['linkman'])?$CmfYingkaipiaohuizong['linkman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>移动电话：</label>
                    <p><?php echo !empty($CmfYingkaipiaohuizong['mobile'])?$CmfYingkaipiaohuizong['mobile']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日d时',strtotime($CmfYingkaipiaohuizong['createtime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>客户ID：</label>
                    <p><?php echo !empty($CmfYingkaipiaohuizong['id'])?$CmfYingkaipiaohuizong['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商ID：</label>
                    <p><?php echo !empty($CmfYingkaipiaohuizong['supplyid'])?$CmfYingkaipiaohuizong['supplyid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商名称：</label>
                    <p><?php echo !empty($CmfYingkaipiaohuizong['supplyname'])?$CmfYingkaipiaohuizong['supplyname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开票ID：</label>
                    <p><?php echo !empty($CmfYingkaipiaohuizong['id'])?$CmfYingkaipiaohuizong['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开票名称：</label>
                    <p><?php echo !empty($CmfYingkaipiaohuizong['name'])?$CmfYingkaipiaohuizong['name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>销售清单类型ID：</label>
                    <p><?php echo !empty($CmfYingkaipiaohuizong['id'])?$CmfYingkaipiaohuizong['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>销售清单类型名称：</label>
                    <p><?php echo !empty($CmfYingkaipiaohuizong['name'])?$CmfYingkaipiaohuizong['name']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>