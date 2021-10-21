<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<div class="container">

<div class="panel panel-default">
    <div class="panel-heading">
        <form action="<?php echo site_url('oa/CmfSystemLog/search'); ?>" method="post">
        <select name="searchvalue">
            <option value="">请选择</option>
            <option value="loginaction">登录动作</option>
            <option value="REMOTE_ADDR">远程地址</option>
            <option value="SCRIPT_NAME">脚本名称</option>
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
                <div class="panel-heading">系统单日志列表 <a href="<?php echo site_url('oa/CmfSystemLog/add'); ?>" class="glyphicon glyphicon-plus pull-right" ></a></div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="5%">编号</th>
                            <th width="30%">日期</th>
                            <th width="50%">远程地址</th>
                            <th width="15%">动作</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php if(!empty($CmfSystemLog)): foreach($CmfSystemLog as $CmfSystemLog): ?>
                        <tr>
                            <td><?php echo '#'.$CmfSystemLog['system_log_id']; ?></td>
                            <td><?php echo $CmfSystemLog['DATE']; ?></td>
                            <td><?php echo $CmfSystemLog['REMOTE_ADDR']; ?></td>
                            <td>
                                <a href="<?php echo site_url('oa/CmfSystemLog/view/'.$CmfSystemLog['system_log_id']); ?>" class="glyphicon glyphicon-eye-open"></a>
                                <a href="<?php echo site_url('oa/CmfSystemLog/edit/'.$CmfSystemLog['system_log_id']); ?>" class="glyphicon glyphicon-edit"></a>
                                <a href="<?php echo site_url('oa/CmfSystemLog/delete/'.$CmfSystemLog['system_log_id']); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete?')"></a>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr><td colspan="4">系统单日志列表未找到......</td></tr>
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