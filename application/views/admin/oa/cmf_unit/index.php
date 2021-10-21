<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<div class="container">

<div class="panel panel-default">
    <div class="panel-heading">
        <form action="<?php echo site_url('oa/CmfUnit/search'); ?>" method="post">
        <select name="searchvalue">
            <option value="">请选择</option>
            <option value="UNIT_NAME">单位名称</option>
            <option value="TEL_NO">电话号码</option>
            <option value="FAX_NO">传真号码</option>
            <option value="POST_NO">邮政编码</option>
            <option value="BANK_NAME">银行名称</option>
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
                <div class="panel-heading">单元列表 <a href="<?php echo site_url('oa/CmfUnit/add'); ?>" class="glyphicon glyphicon-plus pull-right" ></a></div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="5%">编号</th>
                            <th width="30%">单元名称</th>
                            <th width="50%">地址</th>
                            <th width="15%">动作</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php if(!empty($CmfUnit)): foreach($CmfUnit as $CmfUnit): ?>
                        <tr>
                            <td><?php echo '#'.$CmfUnit->id; ?></td>
                            <td><?php echo $CmfUnit->UNIT_NAME; ?></td>
                            <td><?php echo $CmfUnit->ADDRESS; ?></td>
                            <td>
                                <a href="<?php echo site_url('oa/CmfUnit/view/'.$CmfUnit->id); ?>" class="glyphicon glyphicon-eye-open"></a>
                                <a href="<?php echo site_url('oa/CmfUnit/edit/'.$CmfUnit->id); ?>" class="glyphicon glyphicon-edit"></a>
                                <a href="<?php echo site_url('oa/CmfUnit/delete/'.$CmfUnit->id); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete?')"></a>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr><td colspan="4">单元列表未找到......</td></tr>
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