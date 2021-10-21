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
            <div class="panel-heading">评论详细内容<a href="<?php echo site_url('/oa/CmfComment/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfComment['id'])?$CmfComment['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>父级ID：</label>
                    <p><?php echo !empty($CmfComment['parent_id'])?$CmfComment['parent_id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户ID：</label>
                    <p><?php echo !empty($CmfComment['user_id'])?$CmfComment['user_id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>发送用户ID：</label>
                    <p><?php echo !empty($CmfComment['to_user_id'])?$CmfComment['to_user_id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>对象ID：</label>
                    <p><?php echo !empty($CmfComment['object_id'])?$CmfComment['object_id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>喜欢数量：</label>
                    <p><?php echo !empty($CmfComment['like_count'])?$CmfComment['like_count']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>讨厌数量：</label>
                    <p><?php echo !empty($CmfComment['dislike_count'])?$CmfComment['dislike_count']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>楼层：</label>
                    <p><?php echo !empty($CmfComment['floor'])?$CmfComment['floor']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfComment['create_time'])?$CmfComment['create_time']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>删除时间：</label>
                    <p><?php echo !empty($CmfComment['delete_time'])?$CmfComment['delete_time']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>状态：</label>
                    <p>
                        <?php if ($CmfComment['status'] == '1') {?>
                            良好
                        <?php } elseif ($CmfComment['status'] == '0') {?>
                            正常
                    </p>
                </div>
                <div class="form-group">
                    <label>类型：</label>
                    <p><?php echo !empty($CmfComment['type'])?$CmfComment['type']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>表名：</label>
                    <p><?php echo !empty($CmfComment['table_name'])?$CmfComment['table_name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>全名：</label>
                    <p><?php echo !empty($CmfComment['full_name'])?$CmfComment['full_name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>电子邮件：</label>
                    <p><?php echo !empty($CmfComment['email'])?$CmfComment['email']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>路径：</label>
                    <p><?php echo !empty($CmfComment['path'])?$CmfComment['path']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>URL地址：</label>
                    <p><?php echo !empty($CmfComment['url'])?$CmfComment['url']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>内容：</label>
                    <p><?php echo !empty($CmfComment['content'])?$CmfComment['content']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>更多评论：</label>
                    <p><?php echo !empty($CmfComment['more'])?$CmfComment['more']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>