
<header class="header">

  <!-- Header Top Start -->
  <div class="header-top-area d-none d-lg-block bg-white border-bm-1">
    <div class="container-fluid">
      <div class="row ml-lg-4 mr-lg-4 pt-2 pb-2">
        <div class="col-lg-5">
          <div class="header-top-settings">
            <ul class="nav align-items-center">
              <li class="language">
                <strong>
                  <i class="fas fa-globe-asia mr-2"></i> English
                  <i class="fa fa-angle-down"></i>
                </strong>
                <ul class="dropdown-list">
                  <li>
                    <a href="#">English</a>
                  </li>
                  <li>
                    <a href="#">French</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2">
          <div class="logo-area pt-2">
              <a href="/">
                <img
                src="https://luxhall.id/assets/img/logo/luxhall_title.png"
                alt="logo Header" />
              </a>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="top-info-wrap text-right">
            <ul class="my-account-container">
              <li>
                <a href="my-account.html">Login / Register</a>
              </li>
              <li>|</li>
              <li>
                <div class="right-blok-box d-flex">
                  <div class="shopping-cart-wrap">
                    <a href="/">
                      <i class="fas fa-shopping-cart"></i>
                      <span class="cart-total">2</span>
                    </a>
                    @include('layouts.store.cart')
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header Top End -->

  <!-- haeader bottom Start -->
  <div class="haeader-bottom-area header-sticky bg-white">
    <div class="container-fluid borderBotSolid">
        <div class="row align-items-center">
            <div class="col-lg-12 d-none d-lg-block">
                <div class="main-menu-area text-dark">
                    <!--  Start Mainmenu Nav-->
                    <nav class="main-navigation text-center">
                        <ul>
                            <li class="active"><a href="index.html">Home <i class="fa fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home Page 1</a></li>
                                    <li><a href="index-2.html">Home Page 2</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Shop <i class="fa fa-angle-down"></i></a>
                                <ul class="mega-menu">
                                    <li><a href="#">Shop Layouts</a>
                                        <ul>
                                            <li><a href="shop.html">Shop Left Sidebar</a></li>
                                            <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                            <li><a href="shop-list-left.html">Shop List Left Sidebar</a></li>
                                            <li><a href="shop-list-right.html">Shop List Right Sidebar</a></li>
                                            <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Product Details</a>
                                        <ul>
                                            <li><a href="product-details.html">Single Product Details</a></li>
                                            <li><a href="variable-product-details.html">Variable Product Details</a></li>
                                            <li><a href="affiliate-product-details.html">affiliatel Product Details</a></li>
                                            <li><a href="gallery-product-details.html">Gallery Product Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Shop Pages</a>
                                        <ul>
                                            <li><a href="error404.html">Error 404</a></li>
                                            <li><a href="compare.html">Compare Page</a></li>
                                            <li><a href="cart.html">Cart Page</a></li>
                                            <li><a href="checkout.html">Checkout Page</a></li>
                                            <li><a href="wishlist.html">Wish List Page</a></li>
                                        </ul>
                                    </li>
                                </ul>

                            </li>
                            <li><a href="blog.html">Blog <i class="fa fa-angle-down"></i></a>

                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-grid.html">Blog Grid Page</a></li>
                                    <li><a href="blog-largeimage.html">Blog Large Image</a></li>
                                    <li><a href="blog-details.html">Blog Details Page</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Pages <i class="fa fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="frequently-questions.html">FAQ</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="login-register.html">login &amp; register</a></li>
                                </ul>
                            </li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="contact-us.html">Contact</a></li>
                        </ul>
                    </nav>

                </div>
            </div>

            <div class="col-7 col-md-6 d-block d-lg-none">
              <div class="mobile-menu-btn d-inline-block d-lg-none mr-3">
                <div class="off-canvas-btn">
                  <a href="#" onClick={handleShowMenuMobile}>
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="logo">
                <a href="index.html">
                  <img
                    src="https://luxhall.id/assets/img/logo/luxhall_title.png"
                    alt=""
                  />
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-5 d-block d-lg-none">
              <div class="right-blok-box d-flex">
                <div class="user-wrap">
                  <a href="wishlist.html">
                    <span class="cart-total">2</span>
                    <i class="fas fa-heart"></i>
                  </a>
                </div>

                <div class="shopping-cart-wrap">
                  <a href="#">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-total">2</span>
                  </a>
                  <MiniCart />
                </div>
              </div>
            </div>
            
        </div>
    </div>
  </div>
  <!-- haeader bottom End -->

  <!-- off-canvas menu start -->
  <aside class="off-canvas-wrapper">
      <div class="off-canvas-overlay"></div>
      <div class="off-canvas-inner-content">
          <div class="btn-close-off-canvas">
              <i class="fa fa-times"></i>
          </div>

          <div class="off-canvas-inner">

              <div class="search-box-offcanvas">
                  <form>
                      <input type="text" placeholder="Search product...">
                      <button class="search-btn"><i class="icon-magnifier"></i></button>
                  </form>
              </div>

              <!-- mobile menu start -->
              <div class="mobile-navigation">

                  <!-- mobile menu navigation start -->
                  <nav>
                      <ul class="mobile-menu">
                          <li class="menu-item-has-children"><a href="#">Home</a>
                              <ul class="dropdown">
                                  <li><a href="index.html">Home Page 1</a></li>
                                  <li><a href="index-2.html">Home Page 2</a></li>
                              </ul>
                          </li>
                          <li class="menu-item-has-children"><a href="#">Shop</a>
                              <ul class="megamenu dropdown">
                                  <li class="mega-title has-children"><a href="#">Shop Layouts</a>
                                      <ul class="dropdown">
                                          <li><a href="shop.html">Shop Left Sidebar</a></li>
                                          <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                          <li><a href="shop-list-left.html">Shop List Left Sidebar</a></li>
                                          <li><a href="shop-list-right.html">Shop List Right Sidebar</a></li>
                                          <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                                      </ul>
                                  </li>
                                  <li class="mega-title has-children"><a href="#">Product Details</a>
                                      <ul class="dropdown">
                                          <li><a href="product-details.html">Single Product Details</a></li>
                                          <li><a href="variable-product-details.html">Variable Product Details</a></li>
                                          <li><a href="affiliate-product-details.html">affiliatel Product Details</a></li>
                                          <li><a href="gallery-product-details.html">Gallery Product Details</a></li>
                                      </ul>
                                  </li>
                                  <li class="mega-title has-children"><a href="#">Shop Pages</a>
                                      <ul class="dropdown">
                                          <li><a href="error404.html">Error 404</a></li>
                                          <li><a href="compare.html">Compare Page</a></li>
                                          <li><a href="cart.html">Cart Page</a></li>
                                          <li><a href="checkout.html">Checkout Page</a></li>
                                          <li><a href="wishlist.html">Wish List Page</a></li>
                                      </ul>
                                  </li>
                              </ul>
                          </li>
                          <li class="menu-item-has-children "><a href="#">Blog</a>
                              <ul class="dropdown">
                                  <li><a href="blog.html">Blog Left Sidebar</a></li>
                                  <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                  <li><a href="blog-grid.html">Blog Grid Page</a></li>
                                  <li><a href="blog-largeimage.html">Blog Large Image</a></li>
                                  <li><a href="blog-details.html">Blog Details Page</a></li>
                              </ul>
                          </li>
                          <li class="menu-item-has-children "><a href="#">Pages</a>
                              <ul class="dropdown">
                                  <li><a href="frequently-questions.html">FAQ</a></li>
                                  <li><a href="my-account.html">My Account</a></li>
                                  <li><a href="login-register.html">login &amp; register</a></li>
                              </ul>
                          </li>
                          <li><a href="about-us.html">About Us</a></li>
                          <li><a href="contact-us.html">Contact</a></li>
                      </ul>
                  </nav>
                  <!-- mobile menu navigation end -->
              </div>
              <!-- mobile menu end -->


              <div class="header-top-settings offcanvas-curreny-lang-support">
                  <h5>My Account</h5>
                  <ul class="nav align-items-center">
                      <li class="language">English <i class="fa fa-angle-down"></i>
                          <ul class="dropdown-list">
                              <li><a href="#">English</a></li>
                              <li><a href="#">French</a></li>
                          </ul>
                      </li>
                      <li class="curreny-wrap">Currency <i class="fa fa-angle-down"></i>
                          <ul class="dropdown-list curreny-list">
                              <li><a href="#">$ USD</a></li>
                              <li><a href="#"> € EURO</a></li>
                          </ul>
                      </li>
                  </ul>
              </div>

              <!-- offcanvas widget area start -->
              <div class="offcanvas-widget-area">
                  <div class="top-info-wrap text-left text-black">
                      <h5>My Account</h5>
                      <ul class="offcanvas-account-container">
                          <li><a href="my-account.html">My account</a></li>
                          <li><a href="cart.html">Cart</a></li>
                          <li><a href="wishlist.html">Wishlist</a></li>
                          <li><a href="checkout.html">Checkout</a></li>
                      </ul>
                  </div>

              </div>
              <!-- offcanvas widget area end -->
          </div>
      </div>
  </aside>
  <!-- off-canvas menu end -->
  
</header>