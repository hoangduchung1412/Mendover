<?php 
//load file layout vao day
self::$fileLayout = "LayoutTrangTrong.php";
?>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="box_tool">
                <div class="result-short pull-left">
                    <p class="result-count"> Sắp xếp : </p>
                    <form class="filter-xs" method="POST">
                        <?php 
                            $order = isset($_GET["order"]) ? $_GET["order"] : "";
                        ?>
                        <div class="order-by-wrapper">
                           <select class="form-control" onchange="location.href = 'index.php?controller=products&action=category&id=<?php echo $category_id ?>&order='+this.value;">
                                <option value="0">Sắp xếp</option>
                                <option <?php if($order == "priceAsc"): ?> selected <?php endif; ?> value="priceAsc">Giá tăng dần</option>
                                <option <?php if($order == "priceDesc"): ?> selected <?php endif; ?> value="priceDesc">Giá giảm dần</option>
                                <option <?php if($order == "nameAsc"): ?> selected <?php endif; ?> value="nameAsc">Sắp xếp A-Z</option>
                                <option <?php if($order == "nameDesc"): ?> selected <?php endif; ?> value="nameDesc">Sắp xếp Z-A</option>
                           </select>
                        </div>
                    </form>
                </div>
                <div class="view-mode">
                    <a href="#" class="active"><i class="fa fa-th"></i></a>
                    <a href="#" class="switch-view"><i class="fa fa-bars"></i></a>
                </div>
            </div>

        </div>
    </div>

    <div class="row multi-columns-row">
        <?php foreach ($data as $rows): ?>
        <div class="col-lg-4 col-md-4">
            <div class="laster-shop-item row">
                <div class="product">
                      <div class="img">
                        <img src="assets/upload/products/<?php echo $rows->photo; ?>" class="img-fluid">
                      </div>
                      <div class="shop-icon">
                        <?php if($rows->discount > 0): ?>
                        <span class="hv-price"><?php echo $rows->discount; ?> %</span>
                        <?php endif; ?>
                      </div>
                      <div class="buy-btn">
                        <a class="buy-clk" href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>">Mua ngay</a>
                        <a class="buy-clk" href="products/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>">Chi tiết</a>
                      </div>
                      <div class="infor">
                        <p class="name"><a href="products/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>"><?php echo $rows->name; ?></a></p>
                        <p class="vote">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                        </p>
                        <div class="price">
                          <p class="new"><?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?></p>
                          <?php if($rows->discount > 0): ?>
                          <p class="old"><?php echo number_format($rows->price); ?></p>
                          <?php endif; ?>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div style="clear: both;"></div>
        <div style="margin-top: 50px;">
          <ul class="pagination pull-left" style="margin-top: 0px !important;">
            <li class="page-item"><a class="page-link" href="#">Trang</a></li>
            <?php for($i = 1; $i <=  $numPage; $i++): ?>
            <li class="page-item"><a class="page-link" href="index.php?controller=products&action=category&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php endfor; ?>
        </ul>
        <style type="text/css">
            .pagination {display: flex; margin-bottom: 20px;}
            .pagination a {font-size: 16px; color: #333;}
        </style>
        </div>
        <!-- end paging --> 

</div>
