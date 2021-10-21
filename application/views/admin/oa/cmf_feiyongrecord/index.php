<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<div class="container">

<div class="panel-heading">
        <form action="<?php echo site_url('oa/CmfFeiyongrecord/search'); ?>" method="post">
        <select name="searchvalue">
            <option value="">请选择</option>
            <option value="jine">金额</option>
            <option value="createman">创建人</option>
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
                <div class="panel-heading">费用记录列表 <a href="<?php echo site_url('oa/CmfFeiyongrecord/add'); ?>" class="glyphicon glyphicon-plus pull-right" ></a></div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="5%">清单ID</th>
                            <th width="30%">金额</th>
                            <th width="50%">创建时间</th>
                            <th width="15%">动作</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php if(!empty($CmfFeiyongrecord)): foreach($CmfFeiyongrecord as $CmfFeiyongrecord): ?>
                        <tr>
                            <td><?php echo '#'.$CmfFeiyongrecord->billid; ?></td>
                            <td><?php echo $CmfFeiyongrecord->jine; ?></td>
                            <td><?php echo $CmfFeiyongrecord->createtime; ?></td>
                            <td>
                                <a href="<?php echo site_url('oa/CmfFeiyongrecord/view/'.$CmfFeiyongrecord->billid); ?>" class="glyphicon glyphicon-eye-open"></a>
                                <a href="<?php echo site_url('oa/CmfFeiyongrecord/edit/'.$CmfFeiyongrecord->billid); ?>" class="glyphicon glyphicon-edit"></a>
                                <a href="<?php echo site_url('oa/CmfFeiyongrecord/delete/'.$CmfFeiyongrecord->billid); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete?')"></a>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr><td colspan="4">费用记录列表未找到......</td></tr>
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