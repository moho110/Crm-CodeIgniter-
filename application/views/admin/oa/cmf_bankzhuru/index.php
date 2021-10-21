<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<div class="container">

    <div class="panel-heading">
        <form action="<?php echo site_url('oa/CmfBankzhuru/search'); ?>" method="post">
        <select name="searchvalue">
            <option value="">请选择</option>
            <option value="accountid">帐户ID</option>
            <option value="jine">金额</option>
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
                <div class="panel-heading">资金注入抽取列表 <a href="<?php echo site_url('oa/CmfBankzhuru/add'); ?>" class="glyphicon glyphicon-plus pull-right" ></a></div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="15%">清单ID</th>
                            <th width="30%">金额</th>
                            <th width="30%">操作时间</th>
                            <th width="10%">动作</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php if(!empty($CmfBankzhuru)): foreach($CmfBankzhuru as $CmfBankzhuru): ?>
                        <tr>
                            <td><?php echo '#'.$CmfBankzhuru->billid; ?></td>
                            <td><?php echo $CmfBankzhuru->jine; ?></td>
                            <td><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfBankzhuru->opertime)); ?></td>
                            <td>
                                <a href="<?php echo site_url('oa/CmfBankzhuru/view/'.$CmfBankzhuru->billid); ?>" class="glyphicon glyphicon-eye-open"></a>
                                <a href="<?php echo site_url('oa/CmfBankzhuru/edit/'.$CmfBankzhuru->billid); ?>" class="glyphicon glyphicon-edit"></a>
                                <a href="<?php echo site_url('oa/CmfBankzhuru/delete/'.$CmfBankzhuru->billid); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('您确认删除吗？')"></a>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr><td colspan="4">资金记录抽取列表未找到......</td></tr>
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