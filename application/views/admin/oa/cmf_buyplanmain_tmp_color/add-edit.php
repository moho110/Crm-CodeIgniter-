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
                <div class="panel-heading"><?php echo $action; ?> 采购单明细临时颜色表 <a href="<?php echo site_url('/oa/CmfBank/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="color">颜色：</label>
                            <input type="text" class="form-control" name="color" placeholder="Enter color" value="<?php echo !empty($cmf_buyplanmain_tmp_color['color'])?$cmf_buyplanmain_tmp_color['color']:''; ?>">
                            <?php echo form_error('color','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="num">数量：</label>
                            <input type="text" class="form-control" name="num" placeholder="Enter num" value="<?php echo !empty($cmf_buyplanmain_tmp_color['num'])?$cmf_buyplanmain_tmp_color['num']:''; ?>">
                            <?php echo form_error('num','<p class="help-block text-danger">','</p>'); ?>
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