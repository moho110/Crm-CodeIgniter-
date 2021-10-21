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
                <div class="panel-heading"><?php echo $action; ?> 收票记录 <a href="<?php echo site_url('/oa/CmfShoupiaorecord/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="id">编号：</label>
                            <input  readonly type="text" class="form-control" name="id" placeholder="Enter id" value="<?php echo !empty($cmf_shoupiaorecord['id'])?$cmf_shoupiaorecord['id']:''; ?>">
                            <?php echo form_error('id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="supplyid">供应商ID：</label>
                            <input type="text" class="form-control" name="supplyid" placeholder="Enter supplyid" value="<?php echo !empty($cmf_shoupiaorecord['supplyid'])?$cmf_shoupiaorecord['supplyid']:''; ?>">
                            <?php echo form_error('supplyid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="caigoubillid">采购清单ID：</label>
                            <input type="text" class="form-control" name="caigoubillid" placeholder="Enter caigoubillid" value="<?php echo !empty($cmf_shoupiaorecord['caigoubillid'])?$cmf_shoupiaorecord['caigoubillid']:''; ?>">
                            <?php echo form_error('caigoubillid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kaipiaoneirong">开票内容：</label>
                            <textarea name="kaipiaoneirong" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_shoupiaorecord['kaipiaoneirong'])?$cmf_shoupiaorecord['kaipiaoneirong']:''; ?>
                            </textarea>
                            <?php echo form_error('kaipiaoneirong','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="piaojutype">票据类型：</label>
                            <input type="radio" name="piaojutype" value="1">汇票
                            <input type="radio" name="piaojutype" value="2">本票
                            <input type="radio" name="piaojutype" value="3">支票
                            <input type="radio" name="piaojutype" value="4">存单
                            <input type="radio" name="piaojutype" value="0">其他类型
                            <?php echo form_error('piaojutype','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="piaojujine">票据金额：</label>
                            <input type="text" class="form-control" name="piaojujine" placeholder="Enter piaojujine" value="<?php echo !empty($cmf_shoupiaorecord['piaojujine'])?$cmf_shoupiaorecord['piaojujine']:''; ?>">
                            <?php echo form_error('piaojujine','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fapiaono">发票编号：</label>
                            <input type="text" class="form-control" name="fapiaono" placeholder="Enter fapiaono" value="<?php echo !empty($cmf_shoupiaorecord['fapiaono'])?$cmf_shoupiaorecord['fapiaono']:''; ?>">
                            <?php echo form_error('fapiaono','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kaipiaodate">开票日期：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="kaipiaodate">
                            <?php echo form_error('kaipiaodate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="qici">期次：</label>
                            <input type="text" class="form-control" name="qici" placeholder="Enter qici" value="<?php echo !empty($cmf_shoupiaorecord['qici'])?$cmf_shoupiaorecord['qici']:''; ?>">
                            <?php echo form_error('qici','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kaipiaoren">开票人：</label>
                            <input type="text" class="form-control" name="kaipiaoren" placeholder="Enter kaipiaoren" value="<?php echo !empty($cmf_shoupiaorecord['kaipiaoren'])?$cmf_shoupiaorecord['kaipiaoren']:''; ?>">
                            <?php echo form_error('kaipiaoren','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ifhuikuan">是否汇款：</label>
                            <input type="radio" name="ifhuikuan" value="1">是
                            <input type="radio" name="ifhuikuan" value="0">否
                            <?php echo form_error('ifhuikuan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="huikuanid">汇款ID：</label>
                            <input type="text" class="form-control" name="huikuanid" placeholder="Enter huikuanid" value="<?php echo !empty($cmf_shoupiaorecord['huikuanid'])?$cmf_shoupiaorecord['huikuanid']:''; ?>">
                            <?php echo form_error('huikuanid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="beizhu">备注：</label>
                            <textarea name="beizhu" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_shoupiaorecord['beizhu'])?$cmf_shoupiaorecord['beizhu']:''; ?>
                            </textarea>
                            <?php echo form_error('beizhu','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createtime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-5" placeholder="YYYY-MM-DD hh:mm" name="createtime">
                            <?php echo form_error('createtime','<p class="help-block text-danger">','</p>'); ?>
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