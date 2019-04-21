<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
    <footer>
        <div class = "container">
            <div class="row">
                <div class="sidebar-footer">					
                    <div class="col-lg-3 col-md-3 col-sm-6 widget text-8 widget_text" data-scroll-reveal="enter right move 20px wait 0.3s"><div class="widget-inner">			
                        <div class="textwidget">
                            <div class="about-info-footer">
                                <img alt="Toppy - Responsive WordPress Multipurpose Theme" src="./images/logo-header2.png">
                                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat</p>
                                </div>
                                <div class="tagcloud">
                                    <a href="http://demo.wpthemego.com/themes/sw_toppy/?product_tag=ecommerce" class="tag-link-53 tag-link-position-1" title="4 products" style="font-size: 22pt;">ecommerce</a>
                                    <a href="http://demo.wpthemego.com/themes/sw_toppy/?product_tag=fashion" class="tag-link-54 tag-link-position-2" title="4 products" style="font-size: 22pt;">fashion</a>
                                    <a href="http://demo.wpthemego.com/themes/sw_toppy/?product_tag=hot" class="tag-link-57 tag-link-position-3" title="3 products" style="font-size: 18.5pt;">hot</a>
                                    <a href="http://demo.wpthemego.com/themes/sw_toppy/?product_tag=men" class="tag-link-55 tag-link-position-4" title="4 products" style="font-size: 22pt;">men</a>
                                    <a href="http://demo.wpthemego.com/themes/sw_toppy/?product_tag=multipurpose" class="tag-link-59 tag-link-position-5" title="1 product" style="font-size: 8pt;">multipurpose</a>
                                    <a href="http://demo.wpthemego.com/themes/sw_toppy/?product_tag=responsive" class="tag-link-60 tag-link-position-6" title="2 products" style="font-size: 14.3pt;">responsive</a>
                                    <a href="http://demo.wpthemego.com/themes/sw_toppy/?product_tag=shoes" class="tag-link-61 tag-link-position-7" title="1 product" style="font-size: 8pt;">shoes</a>
                                    <a href="http://demo.wpthemego.com/themes/sw_toppy/?product_tag=stylish" class="tag-link-58 tag-link-position-8" title="3 products" style="font-size: 18.5pt;">stylish</a>
                                    <a href="http://demo.wpthemego.com/themes/sw_toppy/?product_tag=trend" class="tag-link-56 tag-link-position-9" title="1 product" style="font-size: 8pt;">trend</a>
                                    <a href="http://demo.wpthemego.com/themes/sw_toppy/?product_tag=woocommerce" class="tag-link-62 tag-link-position-10" title="3 products" style="font-size: 18.5pt;">woocommerce</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 widget text-9 widget_text" data-scroll-reveal="enter right move 20px wait 0.3s">
                        <div class="widget-inner">			
                            <div class="textwidget">
                                <ul class="info-store-footer">
                                <li class="address">5611 Wellington Road, Suite 115, Gainesville, VA 20155</li>
                                <li class="phone"><a href="#" title="Call">608 1345 96</a> - <a href="#" title="Call">608 1345 90</a></li>
                                <li class="mail"><a href="#" title="Email">support@yourdomain.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 widget nav_menu-6 widget_nav_menu" data-scroll-reveal="enter right move 20px wait 0.3s">
                        <div class="widget-inner">
                            <div class="button-ver-menu">Categories</div>
                            <ul id="menu-menu-categories" class="menu">
                                <li class="menu-caps-hats toppymenu-custom level1"><a href="http://demo.wpthemego.com/themes/sw_toppy/?product_cat=jackets-coats" class="item-link"><span class="have-title"><span class="menu-title">Caps &amp; Hats</span></span></a></li>
                                <li class="menu-hoodies-sweatshirts toppymenu-custom level1"><a href="http://demo.wpthemego.com/themes/sw_toppy/?product_cat=hoodies-sweatshirts" class="item-link"><span class="have-title"><span class="menu-title">Hoodies &amp; Sweatshirts</span></span></a></li>
                                <li class="menu-jacket-coats toppymenu-custom level1"><a href="http://demo.wpthemego.com/themes/sw_toppy/?product_cat=jackets-coats" class="item-link"><span class="have-title"><span class="menu-title">Jacket &amp; Coats</span></span></a></li>
                                <li class="menu-jumpers-cardigans toppymenu-custom level1"><a href="http://demo.wpthemego.com/themes/sw_toppy/?product_cat=bags" class="item-link"><span class="have-title"><span class="menu-title">Jumpers &amp; Cardigans</span></span></a></li>
                                <li class="menu-shoes-boots-trainers toppymenu-custom level1"><a href="http://demo.wpthemego.com/themes/sw_toppy/?product_cat=shoes" class="item-link"><span class="have-title"><span class="menu-title">Shoes, Boots &amp; Trainers</span></span></a></li>
                                <li class="menu-leather-jackets toppymenu-custom level1"><a href="http://demo.wpthemego.com/themes/sw_toppy/?product_cat=hoodies-sweatshirts" class="item-link"><span class="have-title"><span class="menu-title">Leather Jackets</span></span></a></li>
                                <li class="menu-underwear-socks toppymenu-custom level1"><a href="http://demo.wpthemego.com/themes/sw_toppy/?product_cat=shoes" class="item-link"><span class="have-title"><span class="menu-title">Underwear &amp; Socks</span></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 widget nav_menu-7 widget_nav_menu" data-scroll-reveal="enter right move 20px wait 0.3s">
                        <div class="widget-inner">
                            <div class="button-ver-menu">Customer services</div>
                            <ul id="menu-customer-service" class="menu">
                                <li class="menu-customer-service toppymenu-custom level1"><a href="http://demo.wpthemego.com/themes/sw_toppy/?page_id=482" class="item-link"><span class="have-title"><span class="menu-title">Customer Service</span></span></a></li>
                                <li class="menu-shipping-returns toppymenu-custom level1"><a href="http://demo.wpthemego.com/themes/sw_toppy/?page_id=81" class="item-link"><span class="have-title"><span class="menu-title">Shipping &amp; Returns</span></span></a></li>
                                <li class="menu-track-your-order toppymenu-custom level1"><a href="http://demo.wpthemego.com/themes/sw_toppy/?page_id=77" class="item-link"><span class="have-title"><span class="menu-title">Track Your Order</span></span></a></li>
                                <li class="menu-help-center toppymenu-custom level1"><a href="http://demo.wpthemego.com/themes/sw_toppy/?page_id=482" class="item-link"><span class="have-title"><span class="menu-title">Help Center</span></span></a></li>
                                <li class="menu-store-location toppymenu-custom level1"><a href="http://demo.wpthemego.com/themes/sw_toppy/?page_id=484" class="item-link"><span class="have-title"><span class="menu-title">Store Location</span></span></a></li>
                                <li class="menu-my-account toppymenu-custom level1"><a href="http://demo.wpthemego.com/themes/sw_toppy/?page_id=79" class="item-link"><span class="have-title"><span class="menu-title">My Account</span></span></a></li>
                                <li class="menu-customer-feedback toppymenu-custom level1"><a href="#" class="item-link"><span class="have-title"><span class="menu-title">Customer Feedback</span></span></a></li>
                            </ul>
                        </div>
                    </div>				
                </div>
            </div>
        </div>
    </footer>
    
    

    