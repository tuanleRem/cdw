<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
    
    <div class="sidebar-footer">					
		<div class="col-lg-3 col-md-3 col-sm-6 widget text-8 widget_text" data-scroll-reveal="enter right move 20px wait 0.3s"><div class="widget-inner">			
            <div class="textwidget">
                <div class="about-info-footer">
                    <img alt="Toppy - Responsive WordPress Multipurpose Theme" src="./images/logo-default.png">
                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat</p>
                    </div>
                    <div class="social-footer">
                        <ul>
                            <li><a title="Facebook" href="https://www.facebook.com/flytheme"><span class="fa fa-facebook"></span></a></li>
                            <li><a title="Twitter" href="https://twitter.com/Flytheme"><span class="fa fa-twitter"></span></a></li>
                            <li><a title="Tumblr" href="#"><span class="fa fa-tumblr"></span></a></li>
                            <li><a title="Pinterest" href="https://www.pinterest.com/flytheme/"><span class="fa fa fa-pinterest"></span></a></li>
                            <li><a title="Link in" href="https://www.linkedin.com/in/flytheme"><span class="fa fa-linkedin"></span></a></li>
                            <li><a title="Google Plus" href="https://plus.google.com/u/0/b/102399087761949580069/102399087761949580069/posts"><span class="fa fa-google-plus"></span></a></li>
                        </ul>
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

    