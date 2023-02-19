<?php 
//load file layout vao day
self::$fileLayout = "LayoutTrangTrong.php";
?>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
    <div class="row">
        <div class="col-lg-12 col-md-12">
             <div class="breadcrumbs">
            <div class="container">
            <ul>
                <li class="home"><a style="font-size: 20px;" href="index.php">
                Trang chủ
                <i class="fa-solid fa-angle-right"></i>
                </a></li>
                <li><a href="" style="font-size: 20px;">Tìm kiếm giá: từ <?php echo $fromPrice; ?> - đến <?php echo $toPrice ?></a></li>
            </ul>
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
                        <a class="buy-clk" href="index.php?controller=products&action=detail&id=<?php echo $rows->id ?>">Chi tiết</a>
                      </div>
                      <div class="infor">
                        <p class="name"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id ?>"><?php echo $rows->name; ?></a></p>
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
            <li class="page-item"><a class="page-link" href="index.php?controller=search&action=price&fromPrice=<?php echo $fromPrice; ?>&toPrice=<?php echo $toPrice; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php endfor; ?>
        </ul>
        <style type="text/css">
            .pagination {display: flex; margin-bottom: 20px;}
            .pagination a {font-size: 16px; color: #333;}
        </style>
        </div>
        <!-- end paging --> 

</div>
