<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<div class="container">
<div class="panel panel-default">
    <div class="panel-heading">
        <form action="<?php echo site_url('oa/CmfProductzuzhuang2Detail/search'); ?>" method="post">
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
                <div class="panel-heading">产品组装明细列表 <a href="<?php echo site_url('oa/CmfProductzuzhuang2Detail/add'); ?>" class="glyphicon glyphicon-plus pull-right" ></a></div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="5%">编号</th>
                            <th width="30%">产品名称</th>
                            <th width="50%">产品规格</th>
                            <th width="15%">动作</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php if(!empty($CmfProductzuzhuang2Detail)): foreach($CmfProductzuzhuang2Detail as $CmfProductzuzhuang2Detail): ?>
                        <tr>
                            <td><?php echo '#'.$CmfProductzuzhuang2Detail->id; ?></td>
                            <td><?php echo $CmfProductzuzhuang2Detail->prodname; ?></td>
                            <td><?php echo $CmfProductzuzhuang2Detail->prodguige; ?></td>
                            <td>
                                <a href="<?php echo site_url('oa/CmfProductzuzhuang2Detail/view/'.$CmfProductzuzhuang2Detail->id); ?>" class="glyphicon glyphicon-eye-open"></a>
                                <a href="<?php echo site_url('oa/CmfProductzuzhuang2Detail/edit/'.$CmfProductzuzhuang2Detail->id); ?>" class="glyphicon glyphicon-edit"></a>
                                <a href="<?php echo site_url('oa/CmfProductzuzhuang2Detail/delete/'.$CmfProductzuzhuang2Detail->id); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete?')"></a>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr><td colspan="4">产品组装明细列表未找到......</td></tr>
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