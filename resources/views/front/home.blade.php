@include('flash-message')
<div id="vfx_loader_block">
  <div class="vfx-loader-item"> <img src="{{asset('resource/images/loading.gif')}}" alt="" /> </div>
</div>
<div id="logo-header" data-spy="affix" data-offset-top="500">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 col-xs-9">
        <div id="logo"> <a href="#"><img src="{{asset('resource/images/logo.png')}}" alt="logo"></a> </div>
      </div>
      <div class="col-sm-9 text-right">
        <nav class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#thrift-1" aria-expanded="false"> <span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="collapse navbar-collapse" id="thrift-1"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
            <div id="nav_menu_list">
              <ul>
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Exporter</a></li>
                <li><a href="#">Logistics Lead</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="categories">Categories</a></li>
                <li><a href="#">Listing <i class="fa fa-caret-down"></i></a>
                  <ul class="dropdown">
                    <li><a href="dashboard"><i class="fa fa-angle-double-right"></i> Dashboard</a></li>
                    <li><a href="listing_grid"><i class="fa fa-angle-double-right"></i> Listing Grid</a></li>
                    <li><a href="listing_list"><i class="fa fa-angle-double-right"></i> Listing List</a></li>
                    <li><a href="listing_left_sidebar"><i class="fa fa-angle-double-right"></i> Listing Left Sidebar</a></li>
                    <li><a href="listing_right_sidebar"><i class="fa fa-angle-double-right"></i> Listing Right Sidebar</a></li>
                    <li><a href="listing_detail"><i class="fa fa-angle-double-right"></i> Listing Single Post</a></li>
                    <li><a href="listing_fullwidth"><i class="fa fa-angle-double-right"></i> Listing Full Width</a></li>
                    <li><a href="page_error_404"><i class="fa fa-angle-double-right"></i> Page not Found</a></li>
                  </ul>
                </li>
                <li class="btn_item">
				    <ul>
						<li>
						  <button class="btn_login" data-toggle="modal" data-target="#login">Login</button>
						</li>
						<li>
						  <button class="btn_register" data-toggle="modal" data-target="#register">Register</button>
						</li>
				    </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>
<div id="location-map-block">
  <div id="location-homemap-block"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-lg-12">
        <div id="location-link-item">
          <button id="map_list"><i class="fa fa-angle-double-up"></i></button>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="slider-banner-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div id="home-slider-item">
          <h1> <span>Business</span> Network <span>Gateway</span></h1>
          <p>Is hyper-focused on security, verifying all our users to create a trustworthy space for all businesses to easily complete global trade transactions.
</p>
        </div>
        <div id="search-categorie-item-block">
          <form id="categorie-search-form">
            <h1>Find Worldwide Buyers, Suppliers & Products</h1>
            <div class="col-sm-9 col-md-10 nopadding">
              <div id="search-input">
                <div class="col-sm-3 nopadding">
                  <select id="location-search-list" class="form-control">
                    <option>All Categories</option>
                    <option>Buyers</option>
                    <option>Sellers</option>
                    <option>Manufacturers</option>
                    <option>Freight  Forwarders</option>
                  </select>
                </div>
                <div class="col-sm-9 nopadding">
                  <div class="form-group">
                    <input id="location-search-data-store" class="form-control" name="search" placeholder="Enter Keyword" required>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-md-2 text-right nopadding-right">
              <div id="location-search-btn">
                <button type="submit" id="search-btn"><i class="fa fa-search"></i>Search</button>
              </div>
            </div>
          </form>
        </div>
        <div id="location_slider_item_block">
          <button id="map_mark"><i class="fa fa-map-marker"></i></button>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="search-categorie-item">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="row">
          <div class="col-md-12 categories-heading bt_heading_3">
            <h1>Directory <span>Categorie</span></h1>
            <div class="blind line_1"></div>
            <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
            <div class="blind line_2"></div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="categorie_item">
              <div class="cate_item_block hi-icon-effect-8">
                <div class="cate_item_social hi-icon"><i class="fa fa-home"></i></div>
                <h1><a href="#">Category 1</a></h1>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="categorie_item">
              <div class="cate_item_block hi-icon-effect-8">
                <div class="cate_item_social hi-icon"><i class="fa fa-send"></i></div>
                <h1><a href="#">Category 2</a></h1>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="categorie_item">
              <div class="cate_item_block hi-icon-effect-8">
                <div class="cate_item_social hi-icon"><i class="fa fa-suitcase"></i></div>
                <h1><a href="#">Category 3</a></h1>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="categorie_item">
              <div class="cate_item_block hi-icon-effect-8">
                <div class="cate_item_social hi-icon"><i class="fa fa-eye"></i></div>
                <h1><a href="#">Category 4</a></h1>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="categorie_item">
              <div class="cate_item_block hi-icon-effect-8">
                <div class="cate_item_social hi-icon"><i class="fa fa-heart"></i></div>
                <h1><a href="#">Category 5</a></h1>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="categorie_item">
              <div class="cate_item_block hi-icon-effect-8">
                <div class="cate_item_social hi-icon"><i class="fa fa-female"></i></div>
                <h1><a href="#">Category 6</a></h1>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="categorie_item">
              <div class="cate_item_block hi-icon-effect-8">
                <div class="cate_item_social hi-icon"><i class="fa fa-gears"></i></div>
                <h1><a href="#">Category 7</a></h1>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="categorie_item">
              <div class="cate_item_block hi-icon-effect-8">
                <div class="cate_item_social hi-icon"><i class="fa fa-users"></i></div>
                <h1><a href="#">Category 8</a></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="feature-item_listing_block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="col-md-12 feature-item-listing-heading bt_heading_3">
          <h1>Featured <span>Listing</span></h1>
          <div class="blind line_1"></div>
          <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
          <div class="blind line_2"></div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="feature-item-container-box listing-item">
              <div class="feature-title-item">
                <h1>Food</h1>
                <img src="{{asset('resource/images/product/img1.png')}}" alt="img1"> </div>
              <div class="hover-overlay">
                <div class="hover-overlay-inner">
                  <ul class="listing-links">
                    <li><a href="#"><i class="fa fa-heart green-1 "></i></a></li>
                    <li><a href="#"><i class="fa fa-map-marker blue-1"></i></a></li>
                    <li><a href="#"><i class="fa fa-share yallow-1"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="feature-box-text">
				<h3><a href="listing_detail">Hello Directory Listing</a></h3>
                <a href="#"><i class="fa fa-phone"></i> +91 087 654 3210</a>
                <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed veniam quis nostrud lorem ipsum dolor sit amet consectetur...</p>
              </div>
              <div class="feature-item-location">
                <h2><i class="fa fa-map-marker"></i> Your City Here</h2>
                <span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="feature-item-container-box listing-item">
              <div class="feature-title-item">
                <h1>Food</h1>
                <img src="{{asset('resource/images/product/img2.png')}}" alt="img2"> </div>
              <div class="hover-overlay">
                <div class="hover-overlay-inner">
                  <ul class="listing-links">
                    <li><a href="#"><i class="fa fa-heart green-1 "></i></a></li>
                    <li><a href="#"><i class="fa fa-map-marker blue-1"></i></a></li>
                    <li><a href="#"><i class="fa fa-share yallow-1"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="feature-box-text">
                <h3><a href="listing_detail">Hello Directory Listing</a></h3>
                <a href="#"><i class="fa fa-phone"></i> +91 087 654 3210</a>
                <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed veniam quis nostrud lorem ipsum dolor sit amet consectetur...</p>
              </div>
              <div class="feature-item-location">
                <h2><i class="fa fa-map-marker"></i> Your City Here</h2>
                <span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="feature-item-container-box listing-item">
              <div class="feature-title-item">
                <h1>Food</h1>
                <img src="{{asset('resource/images/product/img3.png')}}" alt="img3"> </div>
              <div class="hover-overlay">
                <div class="hover-overlay-inner">
                  <ul class="listing-links">
                    <li><a href="#"><i class="fa fa-heart green-1 "></i></a></li>
                    <li><a href="#"><i class="fa fa-map-marker blue-1"></i></a></li>
                    <li><a href="#"><i class="fa fa-share yallow-1"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="feature-box-text">
                <h3><a href="listing_detail">Hello Directory Listing</a></h3>
                <a href="#"><i class="fa fa-phone"></i> +91 087 654 3210</a>
                <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed veniam quis nostrud lorem ipsum dolor sit amet consectetur...</p>
              </div>
              <div class="feature-item-location">
                <h2><i class="fa fa-map-marker"></i> Your City Here</h2>
                <span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="feature-item-container-box listing-item">
              <div class="feature-title-item">
                <h1>Food</h1>
                <img src="{{asset('resource/images/product/img4.png')}}" alt="img4"> </div>
              <div class="hover-overlay">
                <div class="hover-overlay-inner">
                  <ul class="listing-links">
                    <li><a href="#"><i class="fa fa-heart green-1 "></i></a></li>
                    <li><a href="#"><i class="fa fa-map-marker blue-1"></i></a></li>
                    <li><a href="#"><i class="fa fa-share yallow-1"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="feature-box-text">
                <h3><a href="listing_detail">Hello Directory Listing</a></h3>
                <a href="#"><i class="fa fa-phone"></i> +91 087 654 3210</a>
                <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed veniam quis nostrud lorem ipsum dolor sit amet consectetur...</p>
              </div>
              <div class="feature-item-location">
                <h2><i class="fa fa-map-marker"></i> Your City Here</h2>
                <span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="feature-item-container-box listing-item">
              <div class="feature-title-item">
                <h1>Food</h1>
                <img src="{{asset('resource/images/product/img5.png')}}" alt="img5"> </div>
              <div class="hover-overlay">
                <div class="hover-overlay-inner">
                  <ul class="listing-links">
                    <li><a href="#"><i class="fa fa-heart green-1 "></i></a></li>
                    <li><a href="#"><i class="fa fa-map-marker blue-1"></i></a></li>
                    <li><a href="#"><i class="fa fa-share yallow-1"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="feature-box-text">
                <h3><a href="listing_detail">Hello Directory Listing</a></h3>
                <a href="#"><i class="fa fa-phone"></i> +91 087 654 3210</a>
                <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed veniam quis nostrud lorem ipsum dolor sit amet consectetur...</p>
              </div>
              <div class="feature-item-location">
                <h2><i class="fa fa-map-marker"></i> Your City Here</h2>
                <span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="feature-item-container-box listing-item">
              <div class="feature-title-item">
                <h1>Food</h1>
                <img src="{{asset('resource/images/product/img6.png')}}" alt="img6"> </div>
              <div class="hover-overlay">
                <div class="hover-overlay-inner">
                  <ul class="listing-links">
                    <li><a href="#"><i class="fa fa-heart green-1 "></i></a></li>
                    <li><a href="#"><i class="fa fa-map-marker blue-1"></i></a></li>
                    <li><a href="#"><i class="fa fa-share yallow-1"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="feature-box-text">
                <h3><a href="listing_detail">Hello Directory Listing</a></h3>
                <a href="#"><i class="fa fa-phone"></i> +91 087 654 3210</a>
                <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed veniam quis nostrud lorem ipsum dolor sit amet consectetur...</p>
              </div>
              <div class="feature-item-location">
                <h2><i class="fa fa-map-marker"></i> Your City Here</h2>
                <span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="feature-item-container-box listing-item">
              <div class="feature-title-item">
                <h1>Food</h1>
                <img src="{{asset('resource/images/product/img7.png')}}" alt="img7"> </div>
              <div class="hover-overlay">
                <div class="hover-overlay-inner">
                  <ul class="listing-links">
                    <li><a href="#"><i class="fa fa-heart green-1 "></i></a></li>
                    <li><a href="#"><i class="fa fa-map-marker blue-1"></i></a></li>
                    <li><a href="#"><i class="fa fa-share yallow-1"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="feature-box-text">
                <h3><a href="listing_detail">Hello Directory Listing</a></h3>
                <a href="#"><i class="fa fa-phone"></i> +91 087 654 3210</a>
                <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed veniam quis nostrud lorem ipsum dolor sit amet consectetur...</p>
              </div>
              <div class="feature-item-location">
                <h2><i class="fa fa-map-marker"></i> Your City Here</h2>
                <span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="feature-item-container-box listing-item">
              <div class="feature-title-item">
                <h1>Food</h1>
                <img src="{{asset('resource/images/product/img8.png')}}" alt="img8"> </div>
              <div class="hover-overlay">
                <div class="hover-overlay-inner">
                  <ul class="listing-links">
                    <li><a href="#"><i class="fa fa-heart green-1 "></i></a></li>
                    <li><a href="#"><i class="fa fa-map-marker blue-1"></i></a></li>
                    <li><a href="#"><i class="fa fa-share yallow-1"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="feature-box-text">
                <h3><a href="listing_detail">Hello Directory Listing</a></h3>
                <a href="#"><i class="fa fa-phone"></i> +91 087 654 3210</a>
                <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed veniam quis nostrud lorem ipsum dolor sit amet consectetur...</p>
              </div>
              <div class="feature-item-location">
                <h2><i class="fa fa-map-marker"></i> Your City Here</h2>
                <span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="vfx-counter-block">
  <div class="vfx-item-container-slope vfx-item-bottom-slope vfx-item-left-slope"></div>
  <div class="container">
    <div class="vfx-item-counter-up">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="vfx-item-countup">
            <div class="vfx-item-black-top-arrow"><i class="fa fa-file"></i></div>
            <div id="count-1" class="vfx-coutter-item count_number vfx-item-count-up">496</div>
            <div class="counter_text">Listings</div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="vfx-item-countup">
            <div class="vfx-item-black-top-arrow"><i class="fa fa-users"></i></div>
            <div id="count-2" class="vfx-coutter-item count_number vfx-item-count-up">245</div>
            <div class="counter_text">Users</div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="vfx-item-countup">
            <div class="vfx-item-black-top-arrow"><i class="fa fa-th"></i></div>
            <div id="count-3" class="vfx-coutter-item count_number vfx-item-count-up">96</div>
            <div class="counter_text">Categories</div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="vfx-item-countup last-countup">
            <div class="vfx-item-black-top-arrow"><i class="fa fa-th-list"></i></div>
            <div id="count-4" class="vfx-coutter-item count_number vfx-item-count-up">274</div>
            <div class="counter_text">Listings Types</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="recent-product-item-listing">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="col-md-12 recent-item-listing-heading bt_heading_3">
          <h1>Recent <span>Listing</span></h1>
          <div class="blind line_1"></div>
          <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
          <div class="blind line_2"></div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="recent-listing-box-container-item">
              <div class="col-md-6 col-sm-12 nopadding">
                <div class="recent-listing-box-image">
                  <h1>Food</h1>
                  <img src="{{asset('resource/images/product/img1.png')}}" alt="img1"> </div>
                <div class="hover-overlay">
                  <div class="hover-overlay-inner">
                    <ul class="listing-links">
                      <li><a href="#"><i class="fa fa-heart green-1"></i></a></li>
                      <li><a href="#"><i class="fa fa-map-marker blue-1"></i></a></li>
                      <li><a href="#"><i class="fa fa-share yallow-1"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 nopadding">
                <div class="recent-listing-box-item">
                  <div class="listing-boxes-text"> <a href="listing_detail">
                    <h3>Hello Directory Listing</h3>
                    </a> <a href="#"><i class="fa fa-phone"></i> +91 087 654 3210</a>
                    <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed veniam quis nostrud lorem ipsum dolor sit amet consectetur...</p>
                  </div>
                  <div class="recent-feature-item-rating">
                    <h2><i class="fa fa-map-marker"></i> Your City Here</h2>
                    <span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="recent-listing-box-container-item">
              <div class="col-md-6 col-sm-12 nopadding">
                <div class="recent-listing-box-image">
                  <h1>Food</h1>
                  <img src="{{asset('resource/images/product/img2.png')}}" alt="img1"> </div>
                <div class="hover-overlay">
                  <div class="hover-overlay-inner">
                    <ul class="listing-links">
                      <li><a href="#"><i class="fa fa-heart green-1"></i></a></li>
                      <li><a href="#"><i class="fa fa-map-marker blue-1"></i></a></li>
                      <li><a href="#"><i class="fa fa-share yallow-1"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 nopadding">
                <div class="recent-listing-box-item">
                  <div class="listing-boxes-text"> <a href="listing_detail">
                    <h3>Hello Directory Listing</h3>
                    </a> <a href="#"><i class="fa fa-phone"></i> +91 087 654 3210</a>
                    <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed veniam quis nostrud lorem ipsum dolor sit amet consectetur...</p>
                  </div>
                  <div class="recent-feature-item-rating">
                    <h2><i class="fa fa-map-marker"></i> Your City Here</h2>
                    <span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="recent-listing-box-container-item">
              <div class="col-md-6 col-sm-12 nopadding">
                <div class="recent-listing-box-image">
                  <h1>Food</h1>
                  <img src="{{asset('resource/images/product/img3.png')}}" alt="img1"> </div>
                <div class="hover-overlay">
                  <div class="hover-overlay-inner">
                    <ul class="listing-links">
                      <li><a href="#"><i class="fa fa-heart green-1"></i></a></li>
                      <li><a href="#"><i class="fa fa-map-marker blue-1"></i></a></li>
                      <li><a href="#"><i class="fa fa-share yallow-1"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 nopadding">
                <div class="recent-listing-box-item">
                  <div class="listing-boxes-text"> <a href="listing_detail">
                    <h3>Hello Directory Listing</h3>
                    </a> <a href="#"><i class="fa fa-phone"></i> +91 087 654 3210</a>
                    <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed veniam quis nostrud lorem ipsum dolor sit amet consectetur...</p>
                  </div>
                  <div class="recent-feature-item-rating">
                    <h2><i class="fa fa-map-marker"></i> Your City Here</h2>
                    <span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="recent-listing-box-container-item">
              <div class="col-md-6 col-sm-12 nopadding">
                <div class="recent-listing-box-image">
                  <h1>Food</h1>
                  <img src="{{asset('resource/images/product/img4.png')}}" alt="img1"> </div>
                <div class="hover-overlay">
                  <div class="hover-overlay-inner">
                    <ul class="listing-links">
                      <li><a href="#"><i class="fa fa-heart green-1"></i></a></li>
                      <li><a href="#"><i class="fa fa-map-marker blue-1"></i></a></li>
                      <li><a href="#"><i class="fa fa-share yallow-1"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 nopadding">
                <div class="recent-listing-box-item">
                  <div class="listing-boxes-text"> <a href="listing_detail">
                    <h3>Hello Directory Listing</h3>
                    </a> <a href="#"><i class="fa fa-phone"></i> +91 087 654 3210</a>
                    <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed veniam quis nostrud lorem ipsum dolor sit amet consectetur...</p>
                  </div>
                  <div class="recent-feature-item-rating">
                    <h2><i class="fa fa-map-marker"></i> Your City Here</h2>
                    <span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="recent-listing-box-container-item">
              <div class="col-md-6 col-sm-12 nopadding">
                <div class="recent-listing-box-image">
                  <h1>Food</h1>
                  <img src="{{asset('resource/images/product/img5.png')}}" alt="img1"> </div>
                <div class="hover-overlay">
                  <div class="hover-overlay-inner">
                    <ul class="listing-links">
                      <li><a href="#"><i class="fa fa-heart green-1"></i></a></li>
                      <li><a href="#"><i class="fa fa-map-marker blue-1"></i></a></li>
                      <li><a href="#"><i class="fa fa-share yallow-1"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 nopadding">
                <div class="recent-listing-box-item">
                  <div class="listing-boxes-text"> <a href="listing_detail">
                    <h3>Hello Directory Listing</h3>
                    </a> <a href="#"><i class="fa fa-phone"></i> +91 087 654 3210</a>
                    <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed veniam quis nostrud lorem ipsum dolor sit amet consectetur...</p>
                  </div>
                  <div class="recent-feature-item-rating">
                    <h2><i class="fa fa-map-marker"></i> Your City Here</h2>
                    <span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="recent-listing-box-container-item">
              <div class="col-md-6 col-sm-12 nopadding">
                <div class="recent-listing-box-image">
                  <h1>Food</h1>
                  <img src="{{asset('resource/images/product/img6.png')}}" alt="img1"> </div>
                <div class="hover-overlay">
                  <div class="hover-overlay-inner">
                    <ul class="listing-links">
                      <li><a href="#"><i class="fa fa-heart green-1"></i></a></li>
                      <li><a href="#"><i class="fa fa-map-marker blue-1"></i></a></li>
                      <li><a href="#"><i class="fa fa-share yallow-1"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 nopadding">
                <div class="recent-listing-box-item">
                  <div class="listing-boxes-text"> <a href="listing_detail">
                    <h3>Hello Directory Listing</h3>
                    </a> <a href="#"><i class="fa fa-phone"></i> +91 087 654 3210</a>
                    <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed veniam quis nostrud lorem ipsum dolor sit amet consectetur...</p>
                  </div>
                  <div class="recent-feature-item-rating">
                    <h2><i class="fa fa-map-marker"></i> Your City Here</h2>
                    <span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="pricing-item-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="col-md-12 pricing-heading-title bt_heading_3">
          <h1>Pricing <span>Plan</span></h1>
          <div class="blind line_1"></div>
          <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
          <div class="blind line_2"></div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="price-table-feature-block">
              <h1>Basic</h1>
              <hr>
              <p>Free <span>$24</span> Per Month</p>
              <div class="vfx-pl-seperator"> <span><i class="fa fa-caret-down"></i></span> </div>
              <div class="vfx-price-list-item">
                <h2>Limited Number</h2>
                <p>Our company offers best pricing options for field agents and companies.</p>
              </div>
              <div class="vfx-price-list-item">
                <h2>One Agent for All</h2>
                <p>Our company offers best pricing options for field agents and companies.</p>
              </div>
              <div class="vfx-price-list-item">
                <h2>Mail Communication</h2>
                <p>Our company offers best pricing options for field agents and companies.</p>
              </div>
              <div class="vfx-price-btn">
                <button class="purchase-btn"><i class="fa fa-unlock-alt"></i> Purchase Now</button>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="price-table-feature-block active">
              <h1>Premium</h1>
              <hr>
              <p>Free <span>$49</span> Per Month</p>
              <div class="vfx-pl-seperator"> <span><i class="fa fa-caret-down"></i></span> </div>
              <div class="vfx-price-list-item">
                <h2>Unlimited Number</h2>
                <p>Our company offers best pricing options for field agents and companies.</p>
              </div>
              <div class="vfx-price-list-item">
                <h2>One Agent for All</h2>
                <p>Our company offers best pricing options for field agents and companies.</p>
              </div>
              <div class="vfx-price-list-item">
                <h2>Mail Communication</h2>
                <p>Our company offers best pricing options for field agents and companies.</p>
              </div>
              <div class="vfx-price-btn">
                <button class="purchase-btn"><i class="fa fa-unlock-alt"></i> Purchase Now</button>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="price-table-feature-block">
              <h1>Plus</h1>
              <hr>
              <p>Free <span>$99</span> Per Month</p>
              <div class="vfx-pl-seperator"> <span><i class="fa fa-caret-down"></i></span> </div>
              <div class="vfx-price-list-item">
                <h2>Unlimited Number</h2>
                <p>Our company offers best pricing options for field agents and companies.</p>
              </div>
              <div class="vfx-price-list-item">
                <h2>Unlimited Number</h2>
                <p>Our company offers best pricing options for field agents and companies.</p>
              </div>
              <div class="vfx-price-list-item">
                <h2>Personal Training</h2>
                <p>Our company offers best pricing options for field agents and companies.</p>
              </div>
              <div class="vfx-price-btn">
                <button class="purchase-btn"><i class="fa fa-unlock-alt"></i> Purchase Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="site-footer footer-map">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <h2>About Us</h2>
          <hr>
          <p class="about-lt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer justo lectus, consectetur quis nisi vitae, Nunc eget ultrices ligula.</p>
          <a href="about" class="btn-primary-link more-detail"><i class="fa fa-hand-o-right"></i> Read More</a>
          <h2>Follow Us</h2>
          <hr>
          <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <h2>Recent Listing</h2>
          <hr>
          <ul class="widget-news-simple">
            <li>
              <div class="news-thum"><a href="#"><img src="{{asset('resource/images/new-thum-1.png')}}" alt="new-thum-1"></a></div>
              <div class="news-text-thum">
                <h6><a href="listing_detail">Hello Directory Listing</a></h6>
                <p>Phasellus ut condimentum diam, eget tempus lorem...</p>
                <div>Price: $117</div>
              </div>
            </li>
            <li>
              <div class="news-thum"><a href="#"><img src="{{asset('resource/images/new-thum-1.png')}}" alt="new-thum-1"></a></div>
              <div class="news-text-thum">
                <h6><a href="listing_detail">Hello Directory Listing</a></h6>
                <p>Phasellus ut condimentum diam, eget tempus lorem...</p>
                <div>Price: $117</div>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <h2>Useful links</h2>
          <hr>
          <ul class="use-slt-link">
            <li><a href="#"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;Privacy & Policy</a></li>
            <li><a href="#"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;Payment Method</a></li>
            <li><a href="#"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;Sitemap</a></li>
            <li><a href="#"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;Support</a></li>
            <li><a href="#"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;Terms & Condition</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <h2>Have you any Query?</h2>
          <hr>
          <form class="form-alt">
            <div class="form-group">
              <input type="text" placeholder="Name :-" required class="form-control">
            </div>
            <div class="form-group">
              <input type="text" placeholder="Email :-" required class="form-control">
            </div>
            <div class="form-group">
              <textarea placeholder="Message :-" required class="form-control"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn-quote">Send Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12">
          <p class="text-xs-center">Copyright © 2020 All Rights Reserved.</p>
        </div>
        <div><a href="#" class="scrollup">Scroll</a></div>
      </div>
    </div>
  </div>
</footer>
<!--================================ Login and Register Forms ===========================================-->

<!-- login form -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="listing-modal-1 modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"> Login</h4>
      </div>
      <div class="modal-body">
        <div class="listing-login-form">
          <form action="#">
            <div class="listing-form-field"> <i class="fa fa-user blue-1"></i>
              <input class="form-field bgwhite" type="text" name="user_name" placeholder="Username" />
            </div>
            <div class="listing-form-field"> <i class="fa fa-lock blue-1"></i>
              <input class="form-field bgwhite" type="password" name="user_pass" placeholder="Password"  />
            </div>
            <div class="listing-form-field clearfix margin-top-20 margin-bottom-20">
              <input type="checkbox" id="checkbox-1-1" class="regular-checkbox" />
              <label for="checkbox-1-1"></label>
              <label class="checkbox-lable">Remember Me</label>
              <a href="#">Forgot Password?</a> </div>
            <div class="listing-form-field">
              <input class="submit" type="submit" value="login" />
            </div>
          </form>
          <div class="bottom-links">
            <p>Not a Member?<a href="#">Create Account</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- registration form -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="listing-modal-1 modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel2">Registration</h4>
      </div>
      <div class="modal-body">
        <div class="listing-register-form">
        {{ Form::open(array('url' => '/RegisterAuth')) }}
          @csrf
            <div class="listing-form-field"> <i class="fa fa-user blue-1"></i>
              <input class="form-field bgwhite" type="text" name="user_name" placeholder="Name"  />
            </div>
            <div class="listing-form-field"> <i class="fa fa-envelope blue-1"></i>
              <input class="form-field bgwhite" type="email" name="user_email" placeholder="Email" />
            </div>
            <div class="listing-form-field"> <i class="fa fa-lock blue-1"></i>
              <input class="form-field bgwhite" type="password" name="user_password" placeholder="Password"  />
            </div>
            <div class="listing-form-field"> <i class="fa fa-lock blue-1"></i>
              <input class="form-field bgwhite" type="password" name="user_confirm_password" placeholder="Confirm Password" />
            </div>
            <div class="listing-form-field clearfix margin-top-20 margin-bottom-20 login_form_text_center">
              <input type="checkbox" id="checkbox-1-2" class="regular-checkbox" />
              <label for="checkbox-1-2"></label>
              <label class="checkbox-lable">i agree with</label> &nbsp; <a href="#">Terms & Conditions</a> </div>
            <div class="listing-form-field">
              <input class="submit" type="submit" value="create account" />
            </div>
            {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>
</div>
