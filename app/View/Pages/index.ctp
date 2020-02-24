<?php 
//debug($data);exit;
?>
    <div class="container">
        <div class="row">
            <!-- Left Sidebar -->
            <div class="col-md-2" id="leftCol">
            <?php //include ('helpers/sidebar.php'); ?>
            </div>

            <!-- Right Content (Change to col-md-10 if left sidebar enabled) -->
            <div class="col-md-12">

                <h1 class="page-header">
                    Welcome to Sabji Adda
                    <p class="text-right" style="font-size: 30px"><i class="fa fa-mobile fa-1x"></i> 8955789799</p>
                </h1>

                <div id="productsDiv">
                <?php
foreach($data as $key=>$val){
                ?>
                    <form method="post" action="" id="product<?php echo $val['Item']['id']; ?>">
                    <div class="col-md-4 text-center">
                        <div class="panel panel-default" style="box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.176)">
                            <div class="panel-body">
                                <h4 class="text-center"> <?php echo $val['Item']['name']; ?></h4>
                                <img src="img/upload/<?php echo $val['Item']['image']; ?>"  class=""img-circle/>
                                <hr>
                                <select id="quantity<?php echo $val['Item']['id']; ?>" class="pull-left product_select" style="margin-right: 5px;">
                                    <option value='0.1'>100 gm</option>
                                    <option value='0.25'>250 gm</option>
                                    <option value='0.5'>500 gm</option>
                                    <option value='1' selected>1 kg</option>
                                    <option value='2'>2 kg</option>
                                    <option value='3'>3 kg</option>
                                    <option value='4'>4 kg</option>
                                    <option value='5'>5 kg</option>
                                </select>
                                <input type="button" value="Add to cart" class="btn-info btn-xs pull-left" id="productAdd<?php echo $val['Item']['id']; ?>" onClick="productAdd(<?php echo $val['Item']['id']; ?>,$('#quantity<?php echo $val['Item']['id']; ?>').val())" />
                                <h4 class="pull-right" ><i class="fa fa-fw fa-rupee"></i> <?php echo $val['Item']['show_price']; ?></h4>
                            </div>
                        </div>
                    </div>
                    </form>
<?php } ?>
                </div>
            </div>
        </div>
     
    </div>

