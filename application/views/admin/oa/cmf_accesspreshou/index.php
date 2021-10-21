<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<div class="container">

    <div class="panel-heading">
        <form action="<?php echo site_url('oa/CmfAccesspreshou/search'); ?>" method="post">
        <select name="searchvalue">
            <option value="">请选择</option>
            <option value="linkman">联系人</option>
            <option value="createman">创建人</option>
            <option value="customerid">客户ID</option>
            <option value="jine">预收款金额</option>
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
                <div class="panel-heading">预收款记录 <a href="<?php echo site_url('oa/CmfAccesspreshou/add'); ?>" class="glyphicon glyphicon-plus pull-right" ></a></div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="5%">ID</th>
                            <th width="20%">联系人</th>
                            <th width="10%">金额</th>
                            <th width="50%">创建时间</th>
                            <th width="15%">动作</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php if(!empty($CmfAccesspreshou)): foreach($CmfAccesspreshou as $CmfAccesspreshou): ?>
                        <tr>
                            <td><?php echo '#'.$CmfAccesspreshou->id; ?></td>
                            <td><?php echo $CmfAccesspreshou->linkman; ?></td>
                            <td><?php echo $CmfAccesspreshou->jine; ?></td>
                            <td><?php echo $CmfAccesspreshou->createtime; ?></td>
                            <td>
                                <a href="<?php echo site_url('oa/CmfAccesspreshou/view/'.$CmfAccesspreshou->id); ?>" class="glyphicon glyphicon-eye-open"></a>
                                <a href="<?php echo site_url('oa/CmfAccesspreshou/edit/'.$CmfAccesspreshou->id); ?>" class="glyphicon glyphicon-edit"></a>
                                <a href="<?php echo site_url('oa/CmfAccesspreshou/delete/'.$CmfAccesspreshou->id); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('您确认删除吗？')"></a>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr><td colspan="4">预收款记录未找到......</td></tr>
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