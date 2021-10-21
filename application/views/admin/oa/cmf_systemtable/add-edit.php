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
                <div class="panel-heading"><?php echo $action; ?> 系统表 <a href="<?php echo site_url('/oa/CmfSystemtable/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="systemtableid">编号：</label>
                            <input type="text" class="form-control" name="systemtableid" placeholder="Enter systemtableid" value="<?php echo !empty($cmf_systemtable['systemtableid'])?$cmf_systemtable['systemtableid']:''; ?>">
                            <?php echo form_error('systemtableid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="systemtablename">系统表名称：</label>
                            <input type="text" class="form-control" name="systemtablename" placeholder="Enter systemtablename" value="<?php echo !empty($cmf_systemtable['systemtablename'])?$cmf_systemtable['systemtablename']:''; ?>">
                            <?php echo form_error('systemtablename','<p class="help-block text-danger">','</p>'); ?>
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