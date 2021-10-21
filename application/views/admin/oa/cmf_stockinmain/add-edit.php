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
                <div class="panel-heading"><?php echo $action; ?> 入库 <a href="<?php echo site_url('/oa/CmfStockinmain/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="billid">清单ID：</label>
                            <input  readonly type="text" class="form-control" name="billid" placeholder="Enter billid" value="<?php echo !empty($cmf_stockinmain['billid'])?$cmf_stockinmain['billid']:''; ?>">
                            <?php echo form_error('billid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="zhuti">主题：</label>
                            <input type="text" class="form-control" name="zhuti" placeholder="Enter zhuti" value="<?php echo !empty($cmf_stockinmain['zhuti'])?$cmf_stockinmain['zhuti']:''; ?>">
                            <?php echo form_error('zhuti','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="storeid">仓库ID：</label>
                            <input type="text" class="form-control" name="storeid" placeholder="Enter storeid" value="<?php echo !empty($cmf_stockinmain['storeid'])?$cmf_stockinmain['storeid']:''; ?>">
                            <?php echo form_error('storeid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="indate">入库日期：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="indate">
                            <?php echo form_error('indate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createman">创建人：</label>
                            <input type="text" class="form-control" name="createman" placeholder="Enter createman" value="<?php echo !empty($cmf_stockinmain['createman'])?$cmf_stockinmain['createman']:''; ?>">
                            <?php echo form_error('createman','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createtime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-5" placeholder="YYYY-MM-DD hh:mm" name="createtime">
                            <?php echo form_error('createtime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="caigoubillid">采购清单ID：</label>
                            <input type="text" class="form-control" name="caigoubillid" placeholder="Enter caigoubillid" value="<?php echo !empty($cmf_stockinmain['caigoubillid'])?$cmf_stockinmain['caigoubillid']:''; ?>">
                            <?php echo form_error('caigoubillid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tuihuobillid">退货清单ID：</label>
                            <input type="text" class="form-control" name="tuihuobillid" placeholder="Enter tuihuobillid" value="<?php echo !empty($cmf_stockinmain['tuihuobillid'])?$cmf_stockinmain['tuihuobillid']:''; ?>">
                            <?php echo form_error('tuihuobillid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <textarea name="memo" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_stockinmain['memo'])?$cmf_stockinmain['memo']:''; ?>
                            </textarea>
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="state">状态：</label>
                            <input type="radio" name="state" value="1">良好
                            <input type="radio" name="state" value="0">一般
                            <?php echo form_error('state','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="beiyong1">备用一：</label>
                            <input type="text" class="form-control" name="beiyong1" placeholder="Enter beiyong1" value="<?php echo !empty($cmf_stockinmain['beiyong1'])?$cmf_stockinmain['beiyong1']:''; ?>">
                            <?php echo form_error('beiyong1','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="beiyong2">备用二：</label>
                            <input type="text" class="form-control" name="beiyong2" placeholder="Enter beiyong2" value="<?php echo !empty($cmf_stockinmain['beiyong2'])?$cmf_stockinmain['beiyong2']:''; ?>">
                            <?php echo form_error('beiyong2','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="beiyong3">备用三：</label>
                            <input type="text" class="form-control" name="beiyong3" placeholder="Enter beiyong3" value="<?php echo !empty($cmf_stockinmain['beiyong3'])?$cmf_stockinmain['beiyong3']:''; ?>">
                            <?php echo form_error('beiyong3','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="totalnum">总数量：</label>
                            <input type="text" class="form-control" name="totalnum" placeholder="Enter totalnum" value="<?php echo !empty($cmf_stockinmain['totalnum'])?$cmf_stockinmain['totalnum']:''; ?>">
                            <?php echo form_error('totalnum','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="totalmoney">总金额：</label>
                            <input type="text" class="form-control" name="totalmoney" placeholder="Enter totalmoney" value="<?php echo !empty($cmf_stockinmain['totalmoney'])?$cmf_stockinmain['totalmoney']:''; ?>">
                            <?php echo form_error('totalmoney','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="instoreshenhe">入库审核：</label>
                            <input type="radio" name="instoreshenhe" value="1">已审核
                            <input type="radio" name="instoreshenhe" value="0">未审核
                            <?php echo form_error('instoreshenhe','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="intype">入库类型：</label>
                            <input type="text" class="form-control" name="intype" placeholder="Enter intype" value="<?php echo !empty($cmf_stockinmain['intype'])?$cmf_stockinmain['intype']:''; ?>">
                            <?php echo form_error('intype','<p class="help-block text-danger">','</p>'); ?>
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