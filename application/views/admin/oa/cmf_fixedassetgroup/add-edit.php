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
                <div class="panel-heading"><?php echo $action; ?> 固定资产分组 <a href="<?php echo site_url('/oa/CmfFixedassetgroup/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_fixedassetgroup['ID'])?$cmf_fixedassetgroup['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Name">名称：</label>
                            <input type="text" class="form-control" name="Name" placeholder="Enter Name" value="<?php echo !empty($cmf_fixedassetgroup['Name'])?$cmf_fixedassetgroup['Name']:''; ?>">
                            <?php echo form_error('Name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="sort">排序：</label>
                            <input type="text" class="form-control" name="sort" placeholder="Enter sort" value="<?php echo !empty($cmf_fixedassetgroup['sort'])?$cmf_fixedassetgroup['sort']:''; ?>">
                            <?php echo form_error('sort','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="preLeveType">等级类型：</label>
                            <input type="text" class="form-control" name="preLeveType" placeholder="Enter preLeveType" value="<?php echo !empty($cmf_fixedassetgroup['preLeveType'])?$cmf_fixedassetgroup['preLeveType']:''; ?>">
                            <?php echo form_error('preLeveType','<p class="help-block text-danger">','</p>'); ?>
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