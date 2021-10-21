<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<div class="container">

<div class="panel panel-default">
    <div class="panel-heading">
        <form action="<?php echo site_url('oa/CmfCustomerarea/find'); ?>" method="get" name="find">
            <select name="searchField">
                <option value="name" selected>地域名称</option>
                <option value="ROWID">编号</option>
            </select>
            <input type="text" name="findstr">
            <input type="submit" name="postSubmit" value="查找"/>
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
                <div class="panel-heading">客户区域列表 <a href="<?php echo site_url('oa/CmfCustomerarea/add'); ?>" class="glyphicon glyphicon-plus pull-right" ></a></div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="5%">编号</th>
                            <th width="30%">名称</th>
                            <th width="50%">等级编号</th>
                            <th width="15%">动作</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php if(!empty($CmfCustomerarea)): foreach($CmfCustomerarea as $CmfCustomerarea): ?>
                        <tr>
                            <td><?php echo '#'.$CmfCustomerarea->ROWID; ?></td>
                            <td><?php echo $CmfCustomerarea->name; ?></td>
                            <td><?php echo $CmfCustomerarea->leverno; ?></td>
                            <td>
                                <a href="<?php echo site_url('oa/CmfCustomerarea/view/'.$CmfCustomerarea->ROWID); ?>" class="glyphicon glyphicon-eye-open"></a>
                                <a href="<?php echo site_url('oa/CmfCustomerarea/edit/'.$CmfCustomerarea->ROWID); ?>" class="glyphicon glyphicon-edit"></a>
                                <a href="<?php echo site_url('oa/CmfCustomerarea/delete/'.$CmfCustomerarea->ROWID); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('您确认删除吗？')"></a>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr><td colspan="4">客户区域列表未找到......</td></tr>
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