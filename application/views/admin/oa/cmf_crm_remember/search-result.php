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
            <div class="panel-heading">纪念日结果按<font style="color:red;font-size: 14;font-weight: bold;"><?php echo $searchvalue; ?></font>搜索<a href="<?php echo site_url('/oa/CmfCrmRemember/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="10%">编号</th>
                            <th width="10%">客户ID</th>
                            <th width="10%">订单清单ID</th>
                            <th width="20%">计划日期</th>
                            <th width="10%">期次</th>
                            <th width="10%">金额</th>
                            <th width="20%">创建人</th>
                            <th width="10%">动作</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php if(!empty($CmfCrmRemember)): foreach($CmfCrmRemember as $CmfCrmRemember): ?>
                        <tr>
                            <td><?php echo '#'.$CmfCrmRemember->id; ?></td>
                            <td><font style="color:red;font-size: 14;font-weight: bold;"><?php echo $CmfCrmRemember->customerid; ?></font></td>
                            <td><font style="color:red;font-size: 14;font-weight: bold;"><?php echo $CmfCrmRemember->dingdanbillid; ?></font></td>
                            <td><font style="color:red;font-size: 14;font-weight: bold;"><?php echo $CmfCrmRemember->plandate; ?></font></td>
                            <td><font style="color:red;font-size: 14;font-weight: bold;"><?php echo $CmfCrmRemember->qici; ?></font></td>
                            <td><font style="color:red;font-size: 14;font-weight: bold;"><?php echo $CmfCrmRemember->jine; ?></font></td>
                            <td><font style="color:red;font-size: 14;font-weight: bold;"><?php echo $CmfCrmRemember->createman; ?></font></td>
                            <td>
                                <a href="<?php echo site_url('oa/CmfCrmRemember/view/'.$CmfCrmRemember->id); ?>" class="glyphicon glyphicon-eye-open"></a>
                                <a href="<?php echo site_url('oa/CmfCrmRemember/edit/'.$CmfCrmRemember->id); ?>" class="glyphicon glyphicon-edit"></a>
                                <a href="<?php echo site_url('oa/CmfCrmRemember/delete/'.$CmfCrmRemember->id); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('您确认删除吗？')"></a>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr><td colspan="4">纪念日搜索结果列表未找到......</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>