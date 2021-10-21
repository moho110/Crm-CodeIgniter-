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
                <div class="panel-heading"><?php echo $action; ?> 固定资产 <a href="<?php echo site_url('/oa/CmfFixedasset/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_fixedasset['ID'])?$cmf_fixedasset['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="setName">资产名称：</label>
                            <input type="text" class="form-control" name="setName" placeholder="Enter setName" value="<?php echo !empty($cmf_fixedasset['setName'])?$cmf_fixedasset['setName']:''; ?>">
                            <?php echo form_error('setName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="setNo">资产编号：</label>
                            <input type="text" class="form-control" name="setNo" placeholder="Enter setNo" value="<?php echo !empty($cmf_fixedasset['setNo'])?$cmf_fixedasset['setNo']:''; ?>">
                            <?php echo form_error('setNo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="setPichi">资产批次：</label>
                            <input type="text" class="form-control" name="setPichi" placeholder="Enter setPichi" value="<?php echo !empty($cmf_fixedasset['setPichi'])?$cmf_fixedasset['setPichi']:''; ?>">
                            <?php echo form_error('setPichi','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="setType">资产类型：</label>
                            <input type="text" class="form-control" name="setType" placeholder="Enter setType" value="<?php echo !empty($cmf_fixedasset['setType'])?$cmf_fixedasset['setType']:''; ?>">
                            <?php echo form_error('setType','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="purchaseID">买卖ID：</label>
                            <input type="text" class="form-control" name="purchaseID" placeholder="Enter purchaseID" value="<?php echo !empty($cmf_fixedasset['purchaseID'])?$cmf_fixedasset['purchaseID']:''; ?>">
                            <?php echo form_error('purchaseID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="supply">供应商：</label>
                            <input type="text" class="form-control" name="supply" placeholder="Enter supply" value="<?php echo !empty($cmf_fixedasset['supply'])?$cmf_fixedasset['supply']:''; ?>">
                            <?php echo form_error('supply','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="department">部门：</label>
                            <input type="text" class="form-control" name="department" placeholder="Enter department" value="<?php echo !empty($cmf_fixedasset['department'])?$cmf_fixedasset['department']:''; ?>">
                            <?php echo form_error('department','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="person">人员：</label>
                            <input type="text" class="form-control" name="person" placeholder="Enter person" value="<?php echo !empty($cmf_fixedasset['person'])?$cmf_fixedasset['person']:''; ?>">
                            <?php echo form_error('person','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="size">尺寸：</label>
                            <input type="text" class="form-control" name="size" placeholder="Enter size" value="<?php echo !empty($cmf_fixedasset['size'])?$cmf_fixedasset['size']:''; ?>">
                            <?php echo form_error('size','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="status">状态：</label>
                            <input type="text" class="form-control" name="status" placeholder="Enter status" value="<?php echo !empty($cmf_fixedasset['status'])?$cmf_fixedasset['status']:''; ?>">
                            <?php echo form_error('status','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="quantity">数量：</label>
                            <input type="text" class="form-control" name="quantity" placeholder="Enter quantity" value="<?php echo !empty($cmf_fixedasset['quantity'])?$cmf_fixedasset['quantity']:''; ?>">
                            <?php echo form_error('quantity','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="price">价格：</label>
                            <input type="text" class="form-control" name="price" placeholder="Enter price" value="<?php echo !empty($cmf_fixedasset['price'])?$cmf_fixedasset['price']:''; ?>">
                            <?php echo form_error('price','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="count">金额：</label>
                            <input type="text" class="form-control" name="count" placeholder="Enter count" value="<?php echo !empty($cmf_fixedasset['count'])?$cmf_fixedasset['count']:''; ?>">
                            <?php echo form_error('count','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="unit">单元：</label>
                            <input type="text" class="form-control" name="unit" placeholder="Enter unit" value="<?php echo !empty($cmf_fixedasset['unit'])?$cmf_fixedasset['unit']:''; ?>">
                            <?php echo form_error('unit','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="place">地点：</label>
                            <input type="text" class="form-control" name="place" placeholder="Enter place" value="<?php echo !empty($cmf_fixedasset['place'])?$cmf_fixedasset['place']:''; ?>">
                            <?php echo form_error('place','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="purchaseDate">买卖日期：</label>
                            <input type="text" class="form-control" name="purchaseDate" placeholder="Enter purchaseDate" value="<?php echo !empty($cmf_fixedasset['purchaseDate'])?$cmf_fixedasset['purchaseDate']:''; ?>">
                            <?php echo form_error('purchaseDate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="billNum">清单数量：</label>
                            <input type="text" class="form-control" name="billNum" placeholder="Enter billNum" value="<?php echo !empty($cmf_fixedasset['billNum'])?$cmf_fixedasset['billNum']:''; ?>">
                            <?php echo form_error('billNum','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="IDNumber">ID数量：</label>
                            <input type="text" class="form-control" name="IDNumber" placeholder="Enter IDNumber" value="<?php echo !empty($cmf_fixedasset['IDNumber'])?$cmf_fixedasset['IDNumber']:''; ?>">
                            <?php echo form_error('IDNumber','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <input type="text" class="form-control" name="memo" placeholder="Enter memo" value="<?php echo !empty($cmf_fixedasset['memo'])?$cmf_fixedasset['memo']:''; ?>">
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_fixedasset['creator'])?$cmf_fixedasset['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input type="text" class="form-control" name="createTime" placeholder="Enter createTime" value="<?php echo !empty($cmf_fixedasset['createTime'])?$cmf_fixedasset['createTime']:''; ?>">
                            <?php echo form_error('createTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="useDepartment">使用部门：</label>
                            <input type="text" class="form-control" name="useDepartment" placeholder="Enter useDepartment" value="<?php echo !empty($cmf_fixedasset['useDepartment'])?$cmf_fixedasset['useDepartment']:''; ?>">
                            <?php echo form_error('useDepartment','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="useDirect">使用方向：</label>
                            <input type="text" class="form-control" name="useDirect" placeholder="Enter useDirect" value="<?php echo !empty($cmf_fixedasset['useDirect'])?$cmf_fixedasset['useDirect']:''; ?>">
                            <?php echo form_error('useDirect','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="testDepartment">测试部门：</label>
                            <input type="text" class="form-control" name="testDepartment" placeholder="Enter testDepartment" value="<?php echo !empty($cmf_fixedasset['testDepartment'])?$cmf_fixedasset['testDepartment']:''; ?>">
                            <?php echo form_error('testDepartment','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="dutyMan">责任人：</label>
                            <input type="text" class="form-control" name="dutyMan" placeholder="Enter dutyMan" value="<?php echo !empty($cmf_fixedasset['dutyMan'])?$cmf_fixedasset['dutyMan']:''; ?>">
                            <?php echo form_error('dutyMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="qiyongDate">启用日期：</label>
                            <input type="text" class="form-control" name="qiyongDate" placeholder="Enter qiyongDate" value="<?php echo !empty($cmf_fixedasset['qiyongDate'])?$cmf_fixedasset['qiyongDate']:''; ?>">
                            <?php echo form_error('qiyongDate','<p class="help-block text-danger">','</p>'); ?>
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