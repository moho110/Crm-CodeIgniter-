<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<div class="container">

<div class="panel panel-default">
    <div class="panel-heading">
        <form action="<?php echo site_url('oa/CmfCallchuli/search'); ?>" method="post">
        <select name="searchvalue">
            <option value="">请选择</option>
            <option value="tel">电话号码</option>
            <option value="linkman">联系人</option>
            <option value="createman">创建人</option>
            <option value="customer">客户</option>
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
                <div class="panel-heading">呼叫处理列表 <a href="<?php echo site_url('oa/CmfCallchuli/add'); ?>" class="glyphicon glyphicon-plus pull-right" ></a></div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="5%">编号</th>
                            <th width="30%">电话号码</th>
                            <th width="50%">联系人</th>
                            <th width="15%">动作</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php if(!empty($CmfCallchuli)): foreach($CmfCallchuli as $CmfCallchuli): ?>
                        <tr>
                            <td><?php echo '#'.$CmfCallchuli->id; ?></td>
                            <td><?php echo $CmfCallchuli->tel; ?></td>
                            <td><?php echo $CmfCallchuli->linkman; ?></td>
                            <td>
                                <a href="<?php echo site_url('oa/CmfCallchuli/view/'.$CmfCallchuli->id); ?>" class="glyphicon glyphicon-eye-open"></a>
                                <a href="<?php echo site_url('oa/CmfCallchuli/edit/'.$CmfCallchuli->id); ?>" class="glyphicon glyphicon-edit"></a>
                                <a href="<?php echo site_url('oa/CmfCallchuli/delete/'.$CmfCallchuli->id); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('您确认删除吗？')"></a>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr><td colspan="4">呼叫处理列表未找到......</td></tr>
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