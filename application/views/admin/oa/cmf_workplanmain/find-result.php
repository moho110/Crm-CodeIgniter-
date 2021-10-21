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
            <div class="panel-heading">工作计划查询结果<a href="<?php echo site_url('/oa/CmfWorkplanmain/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="15%">编号</th>
                            <th width="50%">执行人</th>
                            <th width="35%">动作</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php if(!empty($CmfWorkplanmain)): foreach($CmfWorkplanmain as $CmfWorkplanmain): ?>
                        <tr>
                            <td><?php echo '#'.$CmfWorkplanmain->id; ?></td>
                            <td><?php echo $CmfWorkplanmain->zhixingren; ?></td>
                            <td>
                                <a href="<?php echo site_url('oa/CmfWorkplanmain/view/'.$CmfWorkplanmain->id); ?>" class="glyphicon glyphicon-eye-open"></a>
                                <a href="<?php echo site_url('oa/CmfWorkplanmain/edit/'.$CmfWorkplanmain->id); ?>" class="glyphicon glyphicon-edit"></a>
                                <a href="<?php echo site_url('oa/CmfWorkplanmain/delete/'.$CmfWorkplanmain->id); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('您确认删除吗？')"></a>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr><td colspan="4">查询结果列表未找到......</td></tr>
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