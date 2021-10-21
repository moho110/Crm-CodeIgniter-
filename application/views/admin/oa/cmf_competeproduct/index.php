<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<div class="container">
<div class="panel panel-default">
    <div class="panel-heading">
        <form action="<?php echo site_url('oa/CmfCompeteproduct/search'); ?>" method="post">
        <select name="searchvalue">
            <option value="">请选择</option>
            <option value="jine">预付金额</option>
            <option value="createman">创建人</option>
            <option value="supplyid">供应商ID</option>
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
                <div class="panel-heading">竞争产品列表 <a href="<?php echo site_url('oa/CmfCompeteproduct/add'); ?>" class="glyphicon glyphicon-plus pull-right" ></a></div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="5%">编号</th>
                            <th width="30%">竞争产品</th>
                            <th width="50%">竞争者名称</th>
                            <th width="15%">动作</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php if(!empty($CmfCompeteproduct)): foreach($CmfCompeteproduct as $CmfCompeteproduct): ?>
                        <tr>
                            <td><?php echo '#'.$CmfCompeteproduct->ROWID; ?></td>
                            <td><?php echo $CmfCompeteproduct->comproduct; ?></td>
                            <td><?php echo $CmfCompeteproduct->compname; ?></td>
                            <td>
                                <a href="<?php echo site_url('oa/CmfCompeteproduct/view/'.$CmfCompeteproduct->id); ?>" class="glyphicon glyphicon-eye-open"></a>
                                <a href="<?php echo site_url('oa/CmfCompeteproduct/edit/'.$CmfCompeteproduct->id); ?>" class="glyphicon glyphicon-edit"></a>
                                <a href="<?php echo site_url('oa/CmfCompeteproduct/delete/'.$CmfCompeteproduct->id); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('您确认删除吗？')"></a>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr><td colspan="4">竞争产品列表未找到......</td></tr>
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