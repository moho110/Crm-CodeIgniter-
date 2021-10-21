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
                <div class="panel-heading"><?php echo $action; ?> 发货类型 <a href="<?php echo site_url('/oa/CmfFahuotype/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="id">编号：</label>
                            <input type="text" class="form-control" name="id" placeholder="Enter id" value="<?php echo !empty($cmf_fahuotype['id'])?$cmf_fahuotype['id']:''; ?>">
                            <?php echo form_error('id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="name">名称：</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo !empty($cmf_fahuotype['name'])?$cmf_fahuotype['name']:''; ?>">
                            <?php echo form_error('name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kuaididan">快递单：</label>
                            <input type="text" class="form-control" name="kuaididan" placeholder="Enter kuaididan" value="<?php echo !empty($cmf_fahuotype['kuaididan'])?$cmf_fahuotype['kuaididan']:''; ?>">
                            <?php echo form_error('kuaididan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="design">设计：</label>
                            <input type="text" class="form-control" name="design" placeholder="Enter design" value="<?php echo !empty($cmf_fahuotype['design'])?$cmf_fahuotype['design']:''; ?>">
                            <?php echo form_error('design','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="linkman">联系人：</label>
                            <input type="text" class="form-control" name="linkman" placeholder="Enter linkman" value="<?php echo !empty($cmf_fahuotype['linkman'])?$cmf_fahuotype['linkman']:''; ?>">
                            <?php echo form_error('linkman','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tel">电话号码：</label>
                            <input type="text" class="form-control" name="tel" placeholder="Enter tel" value="<?php echo !empty($cmf_fahuotype['tel'])?$cmf_fahuotype['tel']:''; ?>">
                            <?php echo form_error('tel','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="shunxu">顺序：</label>
                            <input type="text" class="form-control" name="shunxu" placeholder="Enter shunxu" value="<?php echo !empty($cmf_fahuotype['shunxu'])?$cmf_fahuotype['shunxu']:''; ?>">
                            <?php echo form_error('shunxu','<p class="help-block text-danger">','</p>'); ?>
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