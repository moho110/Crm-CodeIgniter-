<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<div class="container">

<div class="panel panel-default">
    <div class="panel-heading">
        <form action="<?php echo site_url('oa/CmfDepartment/search'); ?>" method="post">
        <select name="searchvalue">
            <option value="">请选择</option>
            <option value="DEPT_NAME">部门名称</option>
            <option value="TEL_NO">电话号码</option>
            <option value="FAX_NO">传真号码</option>
            <option value="DEPT_NO">部门编号</option>
            <option value="MANAGER">经理</option>
        </select>
            <input type="text" name="keyword">
            <input type="submit" name="postSubmit" value="搜索"/>
        </form>
    </div>
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
                <div class="panel-heading">部门列表 <a href="<?php echo site_url('oa/CmfDepartment/add'); ?>" class="glyphicon glyphicon-plus pull-right" ></a></div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="5%">部门ID</th>
                            <th width="30%">部门名称</th>
                            <th width="50%">电话号码</th>
                            <th width="15%">动作</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php if(!empty($CmfDepartment)): foreach($CmfDepartment as $CmfDepartment): ?>
                        <tr>
                            <td><?php echo '#'.$CmfDepartment->DEPT_ID; ?></td>
                            <td><?php echo $CmfDepartment->DEPT_NAME; ?></td>
                            <td><?php echo $CmfDepartment->TEL_NO; ?></td>
                            <td>
                                <a href="<?php echo site_url('oa/CmfDepartment/view/'.$CmfDepartment->DEPT_ID); ?>" class="glyphicon glyphicon-eye-open"></a>
                                <a href="<?php echo site_url('oa/CmfDepartment/edit/'.$CmfDepartment->DEPT_ID); ?>" class="glyphicon glyphicon-edit"></a>
                                <a href="<?php echo site_url('oa/CmfDepartment/delete/'.$CmfDepartment->DEPT_ID); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('您确认删除吗？')"></a>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr><td colspan="4">部门列表未找到......</td></tr>
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