<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<div class="container">

<div class="panel-heading">
        <form action="<?php echo site_url('oa/CmfCrmFeiyongSq/search'); ?>" method="post">
        <select name="searchvalue">
            <option value="">请选择</option>
            <option value="count">金额</option>
            <option value="clientName">客户名称</option>
            <option value="reimburseMan">报销人</option>
            <option value="recorder">录单员</option>
            <option value="cashier">出纳</option>
            <option value="examineMan">审核人</option>
        </select>
            <input type="text" name="keyword">
            <input type="submit" name="postSubmit" value="搜索"/>
        </form>
    </div>
    <?php if(!empty($success_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-success"><?php echo $success_msg; ?></div>
    </div>
    <?php }elseif(!empty($error_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
    </div>
    <?php } ?>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default ">
                <div class="panel-heading">费用申请列表 <a href="<?php echo site_url('oa/CmfCrmFeiyongSq/add'); ?>" class="glyphicon glyphicon-plus pull-right" ></a></div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="5%">编号</th>
                            <th width="30%">申请日期</th>
                            <th width="50%">审核人</th>
                            <th width="15%">动作</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php if(!empty($CmfCrmFeiyongSq)): foreach($CmfCrmFeiyongSq as $CmfCrmFeiyongSq): ?>
                        <tr>
                            <td><?php echo '#'.$CmfCrmFeiyongSq->listId; ?></td>
                            <td><?php echo $CmfCrmFeiyongSq->applyDate; ?></td>
                            <td><?php echo $CmfCrmFeiyongSq->examineMan; ?></td>
                            <td>
                                <a href="<?php echo site_url('oa/CmfCrmFeiyongSq/view/'.$CmfCrmFeiyongSq->listId); ?>" class="glyphicon glyphicon-eye-open"></a>
                                <a href="<?php echo site_url('oa/CmfCrmFeiyongSq/edit/'.$CmfCrmFeiyongSq->listId); ?>" class="glyphicon glyphicon-edit"></a>
                                <a href="<?php echo site_url('oa/CmfCrmFeiyongSq/delete/'.$CmfCrmFeiyongSq->listId); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('您确认删除吗？')"></a>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr><td colspan="4">费用申请列表未找到......</td></tr>
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