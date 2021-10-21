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
                <div class="panel-heading"><?php echo $action; ?> 系统所有日志 <a href="<?php echo site_url('/oa/CmfSystemLogall/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_system_logall['ID'])?$cmf_system_logall['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="currentTime">当前时间：</label>
                            <input type="text" class="form-control" name="currentTime" placeholder="Enter currentTime" value="<?php echo !empty($cmf_system_logall['currentTime'])?$cmf_system_logall['currentTime']:''; ?>">
                            <?php echo form_error('currentTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="executeTime">执行时间：</label>
                            <input type="text" class="form-control" name="executeTime" placeholder="Enter executeTime" value="<?php echo !empty($cmf_system_logall['executeTime'])?$cmf_system_logall['executeTime']:''; ?>">
                            <?php echo form_error('executeTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="SQL">SQL查询：</label>
                            <input type="text" class="form-control" name="SQL" placeholder="Enter SQL" value="<?php echo !empty($cmf_system_logall['SQL'])?$cmf_system_logall['SQL']:''; ?>">
                            <?php echo form_error('SQL','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Slow_launch_threads">运行线程：</label>
                            <input type="text" class="form-control" name="Slow_launch_threads" placeholder="Enter Slow_launch_threads" value="<?php echo !empty($cmf_system_logall['Slow_launch_threads'])?$cmf_system_logall['Slow_launch_threads']:''; ?>">
                            <?php echo form_error('Slow_launch_threads','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Threads_cached">线程缓存：</label>
                            <input type="text" class="form-control" name="Threads_cached" placeholder="Enter Threads_cached" value="<?php echo !empty($cmf_system_logall['Threads_cached'])?$cmf_system_logall['Threads_cached']:''; ?>">
                            <?php echo form_error('Threads_cached','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Threads_connected">线程连接：</label>
                            <input type="text" class="form-control" name="Threads_connected" placeholder="Enter Threads_connected" value="<?php echo !empty($cmf_system_logall['Threads_connected'])?$cmf_system_logall['Threads_connected']:''; ?>">
                            <?php echo form_error('Threads_connected','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Threads_created">线程创建：</label>
                            <input type="text" class="form-control" name="Threads_created" placeholder="Enter Threads_created" value="<?php echo !empty($cmf_system_logall['Threads_created'])?$cmf_system_logall['Threads_created']:''; ?>">
                            <?php echo form_error('Threads_created','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Threads_running">线程运行：</label>
                            <input type="text" class="form-control" name="Threads_running" placeholder="Enter Threads_running" value="<?php echo !empty($cmf_system_logall['Threads_running'])?$cmf_system_logall['Threads_running']:''; ?>">
                            <?php echo form_error('Threads_running','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Qcache_free_blocks">空块：</label>
                            <input type="text" class="form-control" name="Qcache_free_blocks" placeholder="Enter Qcache_free_blocks" value="<?php echo !empty($cmf_system_logall['Qcache_free_blocks'])?$cmf_system_logall['Qcache_free_blocks']:''; ?>">
                            <?php echo form_error('Qcache_free_blocks','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Qcache_free_memory">空内存：</label>
                            <input type="text" class="form-control" name="Qcache_free_memory" placeholder="Enter Qcache_free_memory" value="<?php echo !empty($cmf_system_logall['Qcache_free_memory'])?$cmf_system_logall['Qcache_free_memory']:''; ?>">
                            <?php echo form_error('Qcache_free_memory','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Qcache_hits">次数：</label>
                            <input type="text" class="form-control" name="Qcache_hits" placeholder="Enter Qcache_hits" value="<?php echo !empty($cmf_system_logall['Qcache_hits'])?$cmf_system_logall['Qcache_hits']:''; ?>">
                            <?php echo form_error('Qcache_hits','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Qcache_inserts">插入：</label>
                            <input type="text" class="form-control" name="Qcache_inserts" placeholder="Enter Qcache_inserts" value="<?php echo !empty($cmf_system_logall['Qcache_inserts'])?$cmf_system_logall['Qcache_inserts']:''; ?>">
                            <?php echo form_error('Qcache_inserts','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Qcache_lowmem_prunes">低内存：</label>
                            <input type="text" class="form-control" name="Qcache_lowmem_prunes" placeholder="Enter Qcache_lowmem_prunes" value="<?php echo !empty($cmf_system_logall['Qcache_lowmem_prunes'])?$cmf_system_logall['Qcache_lowmem_prunes']:''; ?>">
                            <?php echo form_error('Qcache_lowmem_prunes','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Qcache_not_cached">非缓存：</label>
                            <input type="text" class="form-control" name="Qcache_not_cached" placeholder="Enter Qcache_not_cached" value="<?php echo !empty($cmf_system_logall['Qcache_not_cached'])?$cmf_system_logall['Qcache_not_cached']:''; ?>">
                            <?php echo form_error('Qcache_not_cached','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Qcache_queries_in_cache">缓存查询：</label>
                            <input type="text" class="form-control" name="Qcache_queries_in_cache" placeholder="Enter Qcache_queries_in_cache" value="<?php echo !empty($cmf_system_logall['Qcache_queries_in_cache'])?$cmf_system_logall['Qcache_queries_in_cache']:''; ?>">
                            <?php echo form_error('Qcache_queries_in_cache','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Qcache_total_blocks">总块：</label>
                            <input type="text" class="form-control" name="Qcache_total_blocks" placeholder="Enter Qcache_total_blocks" value="<?php echo !empty($cmf_system_logall['Qcache_total_blocks'])?$cmf_system_logall['Qcache_total_blocks']:''; ?>">
                            <?php echo form_error('Qcache_total_blocks','<p class="help-block text-danger">','</p>'); ?>
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