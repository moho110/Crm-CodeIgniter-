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
                <div class="panel-heading"><?php echo $action; ?> 费用类型 <a href="<?php echo site_url('/oa/CmfFeiyongtype/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="typename">类型名称：</label>
                            <input type="text" class="form-control" name="typename" placeholder="Enter typename" value="<?php echo !empty($cmf_feiyongtype['typename'])?$cmf_feiyongtype['typename']:''; ?>">
                            <?php echo form_error('typename','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="classid">类别ID：</label>
                            <input type="text" class="form-control" name="classid" placeholder="Enter classid" value="<?php echo !empty($cmf_feiyongtype['classid'])?$cmf_feiyongtype['classid']:''; ?>">
                            <?php echo form_error('classid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="iflock">是否锁定：</label>
                            <input type="radio" name="iflock" value="1">是
                            <input type="radio" name="iflock" value="0">否
                            <?php echo form_error('iflock','<p class="help-block text-danger">','</p>'); ?>
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