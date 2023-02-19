<?php 
//load file layout vao day
self::$fileLayout = "LayoutTrangChu.php";
?>
<!-- CONTENT -->
<div class="container">
    <div class="checkout row">
        <div class="checkout-content checkout-left-content col-lg-7 ">
            <div class="checkout-header">
                <h2 class="checkout-title">Thông tin giao hàng</h2>
            </div>

            <div class="customer-information checkout-section">
                <p>Bạn đã có tài khoản? <a href="account/login" style="color: #007bff;"> Đăng nhập </a></p>

                <div class="fieldset">
                    <div class="field-wrap col-12 px-0">
                        <!-- The input -->
                        <input class="field-input w-100" type="text" placeholder="Họ và tên" id="name"
                            name="name" />

                        <!-- The label -->
                        <label class="field-label" for="name">Họ và tên</label>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="field-wrap col-md-8 px-0">
                                <!-- The input -->
                                <input class="field-input w-100" type="email" placeholder="Email" id="email"
                                    name="email" />

                                <!-- The label -->
                                <label class="field-label" for="email">Email</label>
                            </div>

                            <div class="field-wrap col-md-4 pr-0">
                                <!-- The input -->
                                <input class="field-input w-100" type="tel" maxlength="11"
                                    placeholder="Số điện thoại" id="phone" name="phone" />

                                <!-- The label -->
                                <label class="field-label" for="phone">Số điện thoại</label>
                            </div>
                        </div>
                    </div>
                    <div class="field-wrap col-12 px-0">
                        <!-- The input -->
                        <input class="field-input w-100" type="text" placeholder="Địa chỉ" id="address"
                            name="address" />

                        <!-- The label -->
                        <label class="field-label" for="address">Địa chỉ</label>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="field-wrap field-select-wrap col-md-4 px-0">
                                <!-- The input -->
                                <select class="field-select w-100" id="province" name="province">
                                    <option value="null">Chọn tỉnh/thành</option>
                                </select>

                                <!-- The label -->
                                <label class="field-label" for="province">Tỉnh / thành</label>
                            </div>

                            <div class="field-wrap field-select-wrap col-md-4 pr-0">
                                <!-- The input -->
                                <select class="field-select w-100" id="district" name="district">
                                    <option value="null">Chọn quận/huyện</option>
                                </select>

                                <!-- The label -->
                                <label class="field-label" for="district">Quận / huyện</label>
                            </div>

                            <div class="field-wrap field-select-wrap col-md-4 pr-0">
                                <!-- The input -->
                                <select class="field-select w-100" id="ward" name="ward">
                                    <option value="null">Chọn phường/xã</option>
                                </select>

                                <!-- The label -->
                                <label class="field-label" for="ward">Phường / xã</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shipping-method checkout-section">
                <div class="checkout-header">
                    <h2 class="checkout-title">Phương thức vận chuyển</h2>
                </div>
                <div class="shipping-method-content">

                    <div class="content-box  blank-slate">
                        <i class="blank-slate-icon icon icon-closed-box "></i>
                        <p class="mt-0">Vui lòng chọn quận / huyện để có danh sách phương thức vận chuyển.</p>
                    </div>
                </div>

            </div>

            <div class="payment-method checkout-section">
                <div class="checkout-header">
                    <h2 class="checkout-title">Phương thức thanh toán</h2>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <div data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne"
                                class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="payment-method1" name="payment-method"
                                    class="custom-control-input" checked="checked">
                                <label class="custom-control-label" for="payment-method1">Chuyển khoản Vietcombank
                                    (Yêu thích)</label>
                            </div>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body blank-slate">
                                Vietcombank chi nhánh Hà Nội
                                Vui lòng ghi rõ tên và số điện thoại nhé!

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <div data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo"
                                class="custom-control custom-radio custom-control-inline collapsed">
                                <input type="radio" id="payment-method2" name="payment-method"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="payment-method2">Thanh toán qua ví
                                    Momo</label>
                            </div>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <div data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree"
                                class="custom-control custom-radio custom-control-inline collapsed">
                                <input type="radio" id="payment-method3" name="payment-method"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="payment-method3">Thanh toán bằng thẻ
                                    ATM/Visa/Master/JCB</label>
                            </div>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                        </div>
                    </div>
                </div>
            </div>

            <div class="checkout-footer d-flex align-items-center justify-content-between">
                <a class="previous-link" href="index.php?controller=cart"><i class="fas fa-chevron-left mr-2"></i>Giỏ hàng</a>
                <a href="index.php?controller=checkout&action=checkout"><button name="button" type="submit" class="continue-btn btn">Hoàn tất đơn hàng</button></a>
            </div>

        </div>
        <div class="checkout-content checkout-right-content col-lg-5">
            <?php foreach($_SESSION['cart'] as $product): ?>
            <div class="order-section">
                <div class="order-prd-list order-content">
                    <table class="product-table">
                        <!-- <thead>
                            <tr>
                                <th scope="col"><span class="visually-hidden">Hình ảnh</span></th>
                                <th scope="col"><span class="visually-hidden">Mô tả</span></th>
                                <th scope="col"><span class="visually-hidden">Số lượng</span></th>
                                <th scope="col"><span class="visually-hidden">Giá</span></th>
                            </tr>
                        </thead> -->
                        <tbody>
                            <tr class="order-product">
                                <td class="product-image">
                                    <div class="product-thumbnail">
                                        <div class="product-thumbnail-wrapper">
                                            <img class="product-thumbnail-image" src="assets/upload/products/<?php echo $product['photo']; ?>">
                                        </div>
                                        <span class="product-thumbnail-quantity"><?php echo $product['number']; ?></span>
                                    </div>
                                </td>
                                <td class="product-infor">
                                    <span class="product-name order-prd-list-txt"><a href="index.php?controller=products&action=detail&id=<?php echo $product['id'] ?>"><?php echo $product['name'] ?></a></span>
                                    <span class="product-price order-small-txt"> </span>
                                </td>
                                <td class="product-price">
                                    <span class="order-prd-list-txt"><?php echo number_format($product['number']*($product['price'] - ($product['price'] * $product['discount'])/100)); ?></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <?php endforeach; ?>

                </div>
                <div class="order-discount order-content">
                    <div class="fieldset">
                        <div class="field-wrap discount-content d-flex justify-content-between align-items-center">
                            <div class="discount-input-wrap">
                                <input placeholder="Mã giảm giá" class="field-input" autocomplete="off"
                                    autocapitalize="off" spellcheck="false" size="30" type="text" id="discount"
                                    name="discount" value="">
                                <label class="field-label" for="discount">Mã giảm giá</label>
                            </div>
                            <button type="submit" class="discount-btn btn btn-default">
                                <span class="btn-content">Sử dụng</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="order-total order-content">
                    <table class="total-table w-100">
                        <tbody>
                            <tr class="total total-subtotal">
                                <td class="total-name">Tạm tính</td>
                                <td class="total-price">
                                    <span class="order-summary-emphasis">
                                        <?php echo number_format((new CheckoutController())->cartTotal()) ?>
                                    </span>
                                </td>
                            </tr>

                            <tr class="total total-shipping">
                                <td class="total-name">Phí vận chuyển</td>
                                <td class="total-price">
                                    <span class="order-summary-emphasis">—</span>
                                </td>
                            </tr>

                        </tbody>
                        <tfoot class="total-table-footer">
                            <tr class="total">
                                <td class="total-name payment-due-label">
                                    <span class="payment-due-label-total">Tổng cộng</span>
                                </td>
                                <td class="total-name payment-due">
                                    <span class="payment-due-currency">VND</span>
                                    <span class="payment-due-price">
                                        <?php echo number_format((new CheckoutController())->cartTotal()) ?>
                                    </span>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>