<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<div class="container">

<div class="panel panel-default">
    <div class="panel-heading">
        <form action="<?php echo site_url('oa/CmfSystemlang/search'); ?>" method="post">
        <select name="searchvalue">
            <option value="">请选择</option>
            <option value="fieldname">字段名称</option>
            <option value="tablename">表名称</option>
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
                <div class="panel-heading">系统语言列表 <a href="<?php echo site_url('oa/CmfSystemlang/add'); ?>" class="glyphicon glyphicon-plus pull-right" ></a></div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="10%">系统语言ID</th>
                            <th width="30%">字段名称</th>
                            <th width="50%">表名称</th>
                            <th width="10%">动作</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php if(!empty($CmfSystemlang)): foreach($CmfSystemlang as $CmfSystemlang): ?>
                        <tr>
                            <td><?php echo '#'.$CmfSystemlang->systemlangid; ?></td>
                            <td><?php echo $CmfSystemlang->fieldname; ?></td>
                            <td><?php echo $CmfSystemlang->tablename; ?></td>
                            <td>
                                <a href="<?php echo site_url('oa/CmfSystemlang/view/'.$CmfSystemlang->systemlangid); ?>" class="glyphicon glyphicon-eye-open"></a>
                                <a href="<?php echo site_url('oa/CmfSystemlang/edit/'.$CmfSystemlang->systemlangid); ?>" class="glyphicon glyphicon-edit"></a>
                                <a href="<?php echo site_url('oa/CmfSystemlang/delete/'.$CmfSystemlang->systemlangid); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete?')"></a>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr><td colspan="4">系统语言列表未找到......</td></tr>
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