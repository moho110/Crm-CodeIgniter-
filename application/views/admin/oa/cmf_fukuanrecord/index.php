<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<div class="container">
<div class="panel-heading">
        <form action="<?php echo site_url('oa/CmfFukuanrecord/search'); ?>" method="post">
        <select name="searchvalue">
            <option value="">请选择</option>
            <option value="supplyid">供应商ID</option>
            <option value="caigoubillid">采购清单ID</option>
            <option value="jine">金额</option>
            <option value="createman">创建人</option>
            <option value="qici">期次</option>
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
                <div class="panel-heading">付款记录列表 <a href="<?php echo site_url('oa/CmfFukuanrecord/add'); ?>" class="glyphicon glyphicon-plus pull-right" ></a></div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="5%">编号</th>
                            <th width="30%">支付日期</th>
                            <th width="50%">创建时间</th>
                            <th width="15%">动作</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php if(!empty($CmfFukuanrecord)): foreach($CmfFukuanrecord as $CmfFukuanrecord): ?>
                        <tr>
                            <td><?php echo '#'.$CmfFukuanrecord->id; ?></td>
                            <td><?php echo $CmfFukuanrecord->paydate; ?></td>
                            <td><?php echo $CmfFukuanrecord->createtime; ?></td>
                            <td>
                                <a href="<?php echo site_url('oa/CmfFukuanrecord/view/'.$CmfFukuanrecord->id); ?>" class="glyphicon glyphicon-eye-open"></a>
                                <a href="<?php echo site_url('oa/CmfFukuanrecord/edit/'.$CmfFukuanrecord->id); ?>" class="glyphicon glyphicon-edit"></a>
                                <a href="<?php echo site_url('oa/CmfFukuanrecord/delete/'.$CmfFukuanrecord->id); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete?')"></a>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr><td colspan="4">付款记录列表未找到......</td></tr>
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