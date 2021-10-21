<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<div class="container">

<div class="panel panel-default">
    <div class="panel-heading">
        <form action="<?php echo site_url('oa/CmfSmsSendlist/search'); ?>" method="post">
        <select name="searchvalue">
            <option value="">请选择</option>
            <option value="userid">发送人</option>
            <option value="batchid">批次ID</option>
            <option value="msg">内容</option>
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
                <div class="panel-heading">短信列表 <a href="<?php echo site_url('oa/CmfSmsSendlist/add'); ?>" class="glyphicon glyphicon-plus pull-right" ></a></div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="5%">编号</th>
                            <th width="30%">消息</th>
                            <th width="50%">结果</th>
                            <th width="15%">动作</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php if(!empty($CmfSmsSendlist)): foreach($CmfSmsSendlist as $CmfSmsSendlist): ?>
                        <tr>
                            <td><?php echo '#'.$CmfSmsSendlist->id; ?></td>
                            <td><?php echo $CmfSmsSendlist->msg; ?></td>
                            <td><?php echo $CmfSmsSendlist->result; ?></td>
                            <td>
                                <a href="<?php echo site_url('oa/CmfSmsSendlist/view/'.$CmfSmsSendlist->id); ?>" class="glyphicon glyphicon-eye-open"></a>
                                <a href="<?php echo site_url('oa/CmfSmsSendlist/edit/'.$CmfSmsSendlist->id); ?>" class="glyphicon glyphicon-edit"></a>
                                <a href="<?php echo site_url('oa/CmfSmsSendlist/delete/'.$CmfSmsSendlist->id); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete?')"></a>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr><td colspan="4">短信列表未找到......</td></tr>
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