<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<div class="container">
<div class="panel-heading">
        <form action="<?php echo site_url('oa/CmfShoupiaorecord/search'); ?>" method="post">
        <select name="searchvalue">
            <option value="">请选择</option>
            <option value="supplyid">供应商ID</option>
            <option value="caigoubillid">采购清单ID</option>
            <option value="piaojujine">票据金额</option>
            <option value="fapiaono">发票编号</option>
            <option value="kaipiaoren">开票人</option>
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
                <div class="panel-heading">收票记录列表 <a href="<?php echo site_url('oa/CmfShoupiaorecord/add'); ?>" class="glyphicon glyphicon-plus pull-right" ></a></div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="20%">编号</th>
                            <th width="20%">票据金额</th>
                            <th width="20%">开票人</th>
                            <th width="20%">创建时间</th>
                            <th width="20%">动作</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php if(!empty($CmfShoupiaorecord)): foreach($CmfShoupiaorecord as $CmfShoupiaorecord): ?>
                        <tr>
                            <td><?php echo '#'.$CmfShoupiaorecord->id; ?></td>
                            <td><?php echo $CmfShoupiaorecord->piaojujine; ?></td>
                            <td><?php echo $CmfShoupiaorecord->kaipiaoren; ?></td>
                            <td><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfShoupiaorecord->createtime)); ?></td>
                            <td>
                                <a href="<?php echo site_url('oa/CmfShoupiaorecord/view/'.$CmfShoupiaorecord->id); ?>" class="glyphicon glyphicon-eye-open"></a>
                                <a href="<?php echo site_url('oa/CmfShoupiaorecord/edit/'.$CmfShoupiaorecord->id); ?>" class="glyphicon glyphicon-edit"></a>
                                <a href="<?php echo site_url('oa/CmfShoupiaorecord/delete/'.$CmfShoupiaorecord->id); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete?')"></a>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr><td colspan="4">收票记录列表未找到......</td></tr>
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