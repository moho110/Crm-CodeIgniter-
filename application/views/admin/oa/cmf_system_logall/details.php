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
            <div class="panel-heading">系统所有日志详细内容<a href="<?php echo site_url('/oa/CmfSystemLogall/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfSystemLogall['ID'])?$CmfSystemLogall['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>当前时间：</label>
                    <p><?php echo !empty($CmfSystemLogall['currentTime'])?$CmfSystemLogall['currentTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>执行时间：</label>
                    <p><?php echo !empty($CmfSystemLogall['executeTime'])?$CmfSystemLogall['executeTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>SQL查询：</label>
                    <p><?php echo !empty($CmfSystemLogall['SQL'])?$CmfSystemLogall['SQL']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>运行线程：</label>
                    <p><?php echo !empty($CmfSystemLogall['Slow_launch_threads'])?$CmfSystemLogall['Slow_launch_threads']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>线程缓存：</label>
                    <p><?php echo !empty($CmfSystemLogall['Threads_cached'])?$CmfSystemLogall['Threads_cached']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>线程连接：</label>
                    <p><?php echo !empty($CmfSystemLogall['Threads_connected'])?$CmfSystemLogall['Threads_connected']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>线程创建：</label>
                    <p><?php echo !empty($CmfSystemLogall['Threads_created'])?$CmfSystemLogall['Threads_created']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>线程运行：</label>
                    <p><?php echo !empty($CmfSystemLogall['Threads_running'])?$CmfSystemLogall['Threads_running']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>空块：</label>
                    <p><?php echo !empty($CmfSystemLogall['Qcache_free_blocks'])?$CmfSystemLogall['Qcache_free_blocks']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>空内存：</label>
                    <p><?php echo !empty($CmfSystemLogall['Qcache_free_memory'])?$CmfSystemLogall['Qcache_free_memory']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>次数：</label>
                    <p><?php echo !empty($CmfSystemLogall['Qcache_hits'])?$CmfSystemLogall['Qcache_hits']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>插入：</label>
                    <p><?php echo !empty($CmfSystemLogall['Qcache_inserts'])?$CmfSystemLogall['Qcache_inserts']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>低内存：</label>
                    <p><?php echo !empty($CmfSystemLogall['Qcache_lowmem_prunes'])?$CmfSystemLogall['Qcache_lowmem_prunes']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>非缓存：</label>
                    <p><?php echo !empty($CmfSystemLogall['Qcache_not_cached'])?$CmfSystemLogall['Qcache_not_cached']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>缓存查询：</label>
                    <p><?php echo !empty($CmfSystemLogall['Qcache_queries_in_cache'])?$CmfSystemLogall['Qcache_queries_in_cache']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>总块：</label>
                    <p><?php echo !empty($CmfSystemLogall['Qcache_total_blocks'])?$CmfSystemLogall['Qcache_total_blocks']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>