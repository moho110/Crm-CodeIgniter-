<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<div class="container">
    <div class="col-xs-12">
    <?php 
        if(!empty($success_msg)){
            echo '<div class="alert alert-success">'.$success_msg.'</div>';
        }elseif(!empty($error_msg)){
            echo '<div class="alert alert-danger">'.$error_msg.'</div>';
        }
    ?>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo $action; ?> 评论 <a href="<?php echo site_url('/oa/CmfComment/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="id">编号：</label>
                            <input type="text" class="form-control" name="id" placeholder="Enter id" value="<?php echo !empty($cmf_comment['id'])?$cmf_comment['id']:''; ?>">
                            <?php echo form_error('id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="parent_id">父级ID：</label>
                            <input type="text" class="form-control" name="parent_id" placeholder="Enter parent_id" value="<?php echo !empty($cmf_comment['parent_id'])?$cmf_comment['parent_id']:''; ?>">
                            <?php echo form_error('parent_id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="user_id">用户ID：</label>
                            <input type="text" class="form-control" name="user_id" placeholder="Enter user_id" value="<?php echo !empty($cmf_comment['user_id'])?$cmf_comment['user_id']:''; ?>">
                            <?php echo form_error('user_id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="to_user_id">发送用户ID：</label>
                            <input type="text" class="form-control" name="to_user_id" placeholder="Enter to_user_id" value="<?php echo !empty($cmf_comment['to_user_id'])?$cmf_comment['to_user_id']:''; ?>">
                            <?php echo form_error('to_user_id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="object_id">对象ID：</label>
                            <input type="text" class="form-control" name="object_id" placeholder="Enter object_id" value="<?php echo !empty($cmf_comment['object_id'])?$cmf_comment['object_id']:''; ?>">
                            <?php echo form_error('object_id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="like_count">喜欢数量：</label>
                            <input type="text" class="form-control" name="like_count" placeholder="Enter like_count" value="<?php echo !empty($cmf_comment['like_count'])?$cmf_comment['like_count']:''; ?>">
                            <?php echo form_error('like_count','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="dislike_count">讨厌数量：</label>
                            <input type="text" class="form-control" name="dislike_count" placeholder="Enter dislike_count" value="<?php echo !empty($cmf_comment['dislike_count'])?$cmf_comment['dislike_count']:''; ?>">
                            <?php echo form_error('dislike_count','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="floor">楼层：</label>
                            <input type="text" class="form-control" name="floor" placeholder="Enter floor" value="<?php echo !empty($cmf_comment['floor'])?$cmf_comment['floor']:''; ?>">
                            <?php echo form_error('floor','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="create_time">创建时间：</label>
                            <input readonly class="form-control" type="text" id="#date-group1-5" placeholder="YYYY-MM-DD hh:mm" name="create_time">
                            <?php echo form_error('create_time','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="delete_time">删除时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="delete_time">
                            <?php echo form_error('delete_time','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="status">状态：</label>
                            <input type="radio" name="status" value="1">良好
                            <input type="radio" name="status" value="0">懈怠
                            <?php echo form_error('status','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="type">类型：</label>
                            <input type="radio" name="type" value="1">是
                            <input type="radio" name="type" value="0">否
                            <?php echo form_error('type','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="table_name">表名：</label>
                            <input type="text" class="form-control" name="table_name" placeholder="Enter table_name" value="<?php echo !empty($cmf_comment['table_name'])?$cmf_comment['table_name']:''; ?>">
                            <?php echo form_error('table_name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="full_name">全名：</label>
                            <input type="text" class="form-control" name="full_name" placeholder="Enter full_name" value="<?php echo !empty($cmf_comment['full_name'])?$cmf_comment['full_name']:''; ?>">
                            <?php echo form_error('full_name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">电子邮件：</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter email" value="<?php echo !empty($cmf_comment['email'])?$cmf_comment['email']:''; ?>">
                            <?php echo form_error('email','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="path">路径：</label>
                            <input type="text" class="form-control" name="path" placeholder="Enter path" value="<?php echo !empty($cmf_comment['path'])?$cmf_comment['path']:''; ?>">
                            <?php echo form_error('path','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="url">URL地址：</label>
                            <input type="text" class="form-control" name="url" placeholder="Enter url" value="<?php echo !empty($cmf_comment['url'])?$cmf_comment['url']:''; ?>">
                            <?php echo form_error('url','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="content">内容：</label>
                            <textarea name="content" cols="50" rows="10" style="resize: none;"></textarea>
                            <?php echo form_error('content','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="more">更多评论：</label>
                            <textarea name="more" cols="50" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_comment['more'])?$cmf_comment['more']:''; ?>
                            </textarea>
                            <?php echo form_error('more','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <input type="submit" name="postSubmit" class="btn btn-primary" value="提交"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>