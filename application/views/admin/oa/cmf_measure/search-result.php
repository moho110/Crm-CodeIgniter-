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
            <div class="panel-heading">计量单位结果按<font style="color:red;font-size: 14;font-weight: bold;"><?php echo $searchvalue; ?></font>搜索<a href="<?php echo site_url('/oa/CmfMeasure/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="20%">编号</th>
                            <th width="20%">名称</th>
                            <th width="20%">用户ID</th>
                            <th width="20%">代码</th>
                            <th width="20%">动作</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php if(!empty($CmfMeasure)): foreach($CmfMeasure as $CmfMeasure): ?>
                        <tr>
                            <td><?php echo '#'.$CmfMeasure->ROWID; ?></td>
                            <td><font style="color:red;font-size: 14;font-weight: bold;"><?php echo $CmfMeasure->name; ?></font></td>
                            <td><font style="color:red;font-size: 14;font-weight: bold;"><?php echo $CmfMeasure->user_id; ?></font></td>
                            <td><font style="color:red;font-size: 14;font-weight: bold;"><?php echo $CmfMeasure->code; ?></font></td>
                            <td>
                                <a href="<?php echo site_url('oa/CmfMeasure/view/'.$CmfMeasure->ROWID); ?>" class="glyphicon glyphicon-eye-open"></a>
                                <a href="<?php echo site_url('oa/CmfMeasure/edit/'.$CmfMeasure->ROWID); ?>" class="glyphicon glyphicon-edit"></a>
                                <a href="<?php echo site_url('oa/CmfMeasure/delete/'.$CmfMeasure->ROWID); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('您确认删除吗？')"></a>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr><td colspan="4">计量单位搜索结果列表未找到......</td></tr>
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