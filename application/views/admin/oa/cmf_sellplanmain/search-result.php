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
            <div class="panel-heading">销售订单结果按<font style="color:red;font-size: 14;font-weight: bold;"><?php echo $searchvalue; ?></font>搜索<a href="<?php echo site_url('/oa/CmfSellplanmain/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="10%">编号</th>
                            <th width="10%">主题</th>
                            <th width="10%">供应商ID</th>
                            <th width="20%">机会ID</th>
                            <th width="10%">销售计划编号</th>
                            <th width="10%">回款金额</th>
                            <th width="20%">计划日期</th>
                            <th width="10%">动作</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php if(!empty($CmfSellplanmain)): foreach($CmfSellplanmain as $CmfSellplanmain): ?>
                        <tr>
                            <td><?php echo '#'.$CmfSellplanmain->billid; ?></td>
                            <td><font style="color:red;font-size: 14;font-weight: bold;"><?php echo $CmfSellplanmain->zhuti; ?></font></td>
                            <td><font style="color:red;font-size: 14;font-weight: bold;"><?php echo $CmfSellplanmain->supplyid; ?></font></td>
                            <td><font style="color:red;font-size: 14;font-weight: bold;"><?php echo $CmfSellplanmain->chanceid; ?></font></td>
                            <td><font style="color:red;font-size: 14;font-weight: bold;"><?php echo $CmfSellplanmain->sellplanno; ?></font></td>
                            <td><font style="color:red;font-size: 14;font-weight: bold;"><?php echo $CmfSellplanmain->huikuanjine; ?></font></td>
                            <td><font style="color:red;font-size: 14;font-weight: bold;"><?php echo $CmfSellplanmain->plandate; ?></font></td>
                            <td>
                                <a href="<?php echo site_url('oa/CmfSellplanmain/view/'.$CmfSellplanmain->billid); ?>" class="glyphicon glyphicon-eye-open"></a>
                                <a href="<?php echo site_url('oa/CmfSellplanmain/edit/'.$CmfSellplanmain->billid); ?>" class="glyphicon glyphicon-edit"></a>
                                <a href="<?php echo site_url('oa/CmfSellplanmain/delete/'.$CmfSellplanmain->billid); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('您确认删除吗？')"></a>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr><td colspan="4">销售订单搜索结果列表未找到......</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                <p><?php echo $links; ?></p>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>