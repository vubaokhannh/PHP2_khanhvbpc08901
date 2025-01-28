<?php

namespace App\View\Client\Page\Cart;

use App\View\BaseView;

class Index extends BaseView
{
    public static function render($data = null)
    {
?>
        <section class="breadcrumb-section set-bg" data-setbg="/public/assets/client/img/breadcrumb.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2>
                                Giỏ hàng</h2>
                            <div class="breadcrumb__option">
                                <a href="./index.html">Home</a>
                                <span>
                                    Giỏ hàng</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->

        <!-- Shoping Cart Section Begin -->
        <section class="shoping-cart spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping__cart__table">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="shoping__product">Sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Số lượng</th>
                                        <th>Tổng</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <img src="/public/assets/client/img/cart/cart-1.jpg" alt="">
                                            <h5>Vegetable’s Package</h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                            $55.00
                                        </td>
                                        <td class="shoping__cart__quantity">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" value="1">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="shoping__cart__total">
                                            $110.00
                                        </td>
                                        <td class="shoping__cart__item__close">
                                            <span class="icon_close"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <img src="/public/assets/client/img/cart/cart-2.jpg" alt="">
                                            <h5>Fresh Garden Vegetable</h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                            $39.00
                                        </td>
                                        <td class="shoping__cart__quantity">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" value="1">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="shoping__cart__total">
                                            $39.99
                                        </td>
                                        <td class="shoping__cart__item__close">
                                            <span class="icon_close"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <img src="/public/assets/client/img/cart/cart-3.jpg" alt="">
                                            <h5>Organic Bananas</h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                            $69.00
                                        </td>
                                        <td class="shoping__cart__quantity">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" value="1">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="shoping__cart__total">
                                            $69.99
                                        </td>
                                        <td class="shoping__cart__item__close">
                                            <span class="icon_close"></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping__cart__btns">
                            <a href="#" class="primary-btn cart-btn">TIẾP TỤC MUA SẮM</a>
                            <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                                Cập nhật giỏ hàng</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="shoping__continue">
                            <div class="shoping__discount">
                                <h5>
                                    Mã giảm giá</h5>
                                <form action="#">
                                    <input type="text" placeholder="Enter your coupon code">
                                    <button type="submit" class="site-btn">ÁP DỤNG </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="shoping__checkout">
                            <h5>Tổng số </h5>
                            <ul>
                                <li>Tổng phụ <span>$454.98</span></li>
                                <li>Tổng <span>$454.98</span></li>
                            </ul>
                            <a href="/checkout" class="primary-btn">Thanh toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php

    }
}

?>