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
            <div class="panel-heading">回款计划结果按<font style="color:red;font-size: 14;font-weight: bold;"><?php echo $searchvalue; ?></font>搜索<a href="<?php echo site_url('/oa/CmfDictXingzhengQingjia/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
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
                        <?php if(!empty($CmfDictXingzhengQingjia)): foreach($CmfDictXingzhengQingjia as $CmfDictXingzhengQingjia): ?>
                        <tr>
                            <td><?php echo '#'.$CmfDictXingzhengQingjia->id; ?></td>
                            <td><font style="color:red;font-size: 14;font-weight: bold;"><?php echo $CmfDictXingzhengQingjia->customerid; ?></font></td>
                            <td><font style="color:red;font-size: 14;font-weight: bold;"><?php echo $CmfDictXingzhengQingjia->dingdanbillid; ?></font></td>
                            <td><font style="color:red;font-size: 14;font-weight: bold;"><?php echo $CmfDictXingzhengQingjia->plandate; ?></font></td>
                            <td><font style="color:red;font-size: 14;font-weight: bold;"><?php echo $CmfDictXingzhengQingjia->qici; ?></font></td>
                            <td><font style="color:red;font-size: 14;font-weight: bold;"><?php echo $CmfDictXingzhengQingjia->jine; ?></font></td>
                            <td><font style="color:red;font-size: 14;font-weight: bold;"><?php echo $CmfDictXingzhengQingjia->createman; ?></font></td>
                            <td>
                                <a href="<?php echo site_url('oa/CmfDictXingzhengQingjia/view/'.$CmfDictXingzhengQingjia->id); ?>" class="glyphicon glyphicon-eye-open"></a>
                                <a href="<?php echo site_url('oa/CmfDictXingzhengQingjia/edit/'.$CmfDictXingzhengQingjia->id); ?>" class="glyphicon glyphicon-edit"></a>
                                <a href="<?php echo site_url('oa/CmfDictXingzhengQingjia/delete/'.$CmfDictXingzhengQingjia->id); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('您确认删除吗？')"></a>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr><td colspan="4">回款计划搜索结果列表未找到......</td></tr>
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