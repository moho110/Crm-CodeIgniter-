<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<?php if(!empty($success_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-success"><?php echo $success_msg; ?></div>
    </div>
    <?php }elseif(!empty($error_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
    </div>
    <?php } ?>
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">公告通知结果按<font style="color:red;font-size: 14;font-weight: bold;"><?php echo $searchvalue; ?></font>搜索<a href="<?php echo site_url('/oa/CmfNotify/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="10%">编号</th>
                            <th width="10%">标题</th>
                            <th width="10%">收件人</th>
                            <th width="10%">发送人</th>
                            <th width="20%">创建时间</th>
                            <th width="10%">是否读取</th>
                            <th width="20%">是否发送</th>
                            <th width="10%">动作</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php if(!empty($CmfNotify)): foreach($CmfNotify as $CmfNotify): ?>
                        <tr align="center">
                            <td><?php echo '#'.$CmfNotify->id; ?></td>
                            <td><font style="color:red;font-size: 14;font-weight: bold;"><?php echo $CmfNotify->title; ?></font></td>
                            <td><font style="color:red;font-size: 14;font-weight: bold;"><?php echo $CmfNotify->to_user; ?></font></td>
                            <td><font style="color:red;font-size: 14;font-weight: bold;"><?php echo $CmfNotify->from_user; ?></font></td>
                            <td><font style="color:red;font-size: 14;font-weight: bold;">
                                <?php echo date('Y年m月d日', strtotime($CmfNotify->createtime)); ?>
                            </font></td>
                            <td><font style="color:red;font-size: 14;font-weight: bold;">
                                <?php if ($CmfNotify->ifread == '1') {?>
                                    读取
                                <?php } elseif ($CmfNotify->ifread == '0') {?>
                                    不读取
                                <?php } else {?>
                                    其他类型
                                <?php } ?>
                            </font></td>
                            <td><font style="color:red;font-size: 14;font-weight: bold;">
                            <?php if ($CmfNotify->ifsms == '1') {?>
                                    发送
                                <?php } elseif ($CmfNotify->ifread == '0') {?>
                                    不发送
                                <?php } else {?>
                                    其他类型
                                <?php } ?>
                            </font></td>
                            <td>
                                <a href="<?php echo site_url('oa/CmfNotify/view/'.$CmfNotify->id); ?>" class="glyphicon glyphicon-eye-open"></a>
                                <a href="<?php echo site_url('oa/CmfNotify/edit/'.$CmfNotify->id); ?>" class="glyphicon glyphicon-edit"></a>
                                <a href="<?php echo site_url('oa/CmfNotify/delete/'.$CmfNotify->id); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('您确认删除吗？')"></a>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr><td colspan="4">公告通知搜索结果列表未找到......</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>