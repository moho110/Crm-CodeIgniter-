<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<div class="container">

<div class="panel panel-default">
    <div class="panel-heading">
        <form action="<?php echo site_url('oa/CmfEmail/search'); ?>" method="post">
        <select name="searchvalue">
            <option value="">请选择</option>
            <option value="EMAIL_ID">发送人ID</option>
            <option value="FROM_ID">收件人ID</option>
            <option value="customers">客户名称</option>
            <option value="supplys">收件供应商</option>
            <option value="SUBJECT">标题</option>
            <option value="ATTACHMENT_NAME">附件名称</option>
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
                <div class="panel-heading">邮件发送列表 <a href="<?php echo site_url('oa/CmfEmail/add'); ?>" class="glyphicon glyphicon-plus pull-right" ></a></div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="5%">邮件ID</th>
                            <th width="30%">来自ID</th>
                            <th width="50%">客户</th>
                            <th width="15%">动作</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php if(!empty($CmfEmail)): foreach($CmfEmail as $CmfEmail): ?>
                        <tr>
                            <td><?php echo '#'.$CmfEmail->EMAIL_ID; ?></td>
                            <td><?php echo $CmfEmail->FROM_ID; ?></td>
                            <td><?php echo $CmfEmail->customers; ?></td>
                            <td>
                                <a href="<?php echo site_url('oa/CmfEmail/view/'.$CmfEmail->EMAIL_ID); ?>" class="glyphicon glyphicon-eye-open"></a>
                                <a href="<?php echo site_url('oa/CmfEmail/edit/'.$CmfEmail->EMAIL_ID); ?>" class="glyphicon glyphicon-edit"></a>
                                <a href="<?php echo site_url('oa/CmfEmail/delete/'.$CmfEmail->EMAIL_ID); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete?')"></a>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr><td colspan="4">邮件发送列表未找到......</td></tr>
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