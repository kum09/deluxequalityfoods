@extends('layouts/frontend/main')
@section('main-section')
<div class="page-wrap">
      <div class="ps-section--hero"><img src="{{url('public/frontend/assets/images/hero/03.jpg')}}" alt="">
        <div class="ps-section__content text-center">
          <h3 class="ps-section__title">Our Products</h3>
          <div class="ps-breadcrumb">
            <ol class="breadcrumb">
              <li><a href="index.html">Home</a></li>
              <li class="active">Our Products</li>
            </ol>
          </div>
        </div>
      </div>
      
      <div class="ps-section ps-section--award pt-80 pb-40">
      <div class="container">
          <div class="ps-section__header text-center mb-50">
            <h4 class="ps-section__top">Sweet Cupcakes</h4>
            <h3 class="ps-section__title ps-section__title--full">Cake</h3>
          </div>
          <div class="ps-section__content">
            <div class="owl-slider owl-slider--best-seller" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="false" data-owl-animate-in="" data-owl-animate-out="" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-nav-left="&lt;i class=&quot;ps-icon--back&quot;&gt;&lt;/i&gt;" data-owl-nav-right="&lt;i class=&quot;ps-icon--next&quot;&gt;&lt;/i&gt;">
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail">
                  <div class="ps-badge"><span>-50%</span></div><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/1.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">MARBLE POUND CAKE</a>
                  <div class="ps-product__category"><a class="ps-product__category">A CLASSIC TREAT WITH A BEAUTIFUL SWIRL OF VANILLA AND
                  CHOCOLATE FLAVORS.</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail">
                  <div class="ps-badge"><span>-50%</span></div><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/1.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">MARBLE POUND CAKE-EGGLESS</a>
                  <div class="ps-product__category"><a class="ps-product__category">The Same Delightful Marble Cake, But Made Without Eggs For Those With Dietary Restrictions.</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/2.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">VANILLA POUND CAKE</a>
                  <div class="ps-product__category"><a class="ps-product__category" href="#">A RICH, BUTTERY POUND CAKE INFUSED WITH THE WARM FLAVOR OF
                  VANILLA.</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/2.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">VANILLA POUND CAKE-EGGLESS</a>
                  <div class="ps-product__category"><a class="ps-product__category" href="#">Enjoy The Classic Vanilla Pound Cake, Now Available In An Eggless Version.</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail">
                  <div class="ps-badge"><span>-50%</span></div><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/3.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">VANILLA SLICED CAKE</a>
                  <div class="ps-product__category"><a class="ps-product__category" href="#">CONVENIENTLY SLICED, THIS CAKE OFFERS A MOIST AND FLAVORFUL VANILLA EXPERIENCE</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail">
                  <div class="ps-badge"><span>-50%</span></div><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/3.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">VANILLA SLICED CAKE-EGGLESS</a>
                  <div class="ps-product__category"><a class="ps-product__category" href="#">THE SAME MOIST VANILLA CAKE, PREPARED WITHOUT EGGS.</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail">
                  <div class="ps-badge"><span>-50%</span></div><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/3.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">TUTTI FRUTTI SLICED CAKE</a>
                  <div class="ps-product__category"><a class="ps-product__category" href="#">BURSTING WITH COLORFUL TUTTI FRUTTI PIECES, THIS CAKE IS A VISUAL AND CULINARY DELIGHT.</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail">
                  <div class="ps-badge"><span>-50%</span></div><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/3.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">TUTTI FRUTTI SLICED CAKE-EGGLESS</a>
                  <div class="ps-product__category"><a class="ps-product__category" href="#">ENJOY THE FRUITY GOODNESS OF TUTTI FRUTTI CAKE WITHOUT THE EGGS.</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-section ps-section--award pt-80 pb-40">
      <div class="container">
          <div class="ps-section__header text-center mb-50">
            <h4 class="ps-section__top">Sweet Cupcakes</h4>
            <h3 class="ps-section__title ps-section__title--full">Cake Rusks</h3>
          </div>
          <div class="ps-section__content">
            <div class="owl-slider owl-slider--best-seller" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="false" data-owl-animate-in="" data-owl-animate-out="" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-nav-left="&lt;i class=&quot;ps-icon--back&quot;&gt;&lt;/i&gt;" data-owl-nav-right="&lt;i class=&quot;ps-icon--next&quot;&gt;&lt;/i&gt;">
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail">
                  <div class="ps-badge"><span>-50%</span></div><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/1.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">ALMOND CAKE RUSK</a>
                  <div class="ps-product__category"><a class="ps-product__category">CRISPY AND CRUNCHY, THESE RUSKS ARE ENRICHED WITH THE NUTTY FLAVOR OF ALMONDS.</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/2.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">MALAI CAKE RUSK</a>
                  <div class="ps-product__category"><a class="ps-product__category" href="#">INDULGE IN THE RICH AND CREAMY TASTE OF MALAI WITH EVERY BITE OF THESE RUSKS.</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail">
                  <div class="ps-badge"><span>-50%</span></div><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/3.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">RAISIN CAKE RUSK</a>
                  <div class="ps-product__category"><a class="ps-product__category" href="#">CRISPY AND CRUNCHY, THESE RUSKS ARE ENRICHED WITH THE NUTTY FLAVOR OF ALMONDS.</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail">
                  <div class="ps-badge ps-badge--new"><span>New</span></div><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/4.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">COCONUT CAKE RUSK</a>
                  <div class="ps-product__category"><a class="ps-product__category" href="#">INDULGE IN THE RICH AND CREAMY TASTE OF MALAI WITH EVERY BITE OF THESE RUSKS.</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail">
                  <div class="ps-badge ps-badge--new"><span>New</span></div><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/4.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">REGULAR CAKE RUSK</a>
                  <div class="ps-product__category"><a class="ps-product__category" href="#">ICRISPY AND CRUNCHY, THESE RUSKS ARE ENRICHED WITH THE NUTTY FLAVOR OF ALMONDS.</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail">
                  <div class="ps-badge ps-badge--new"><span>New</span></div><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/4.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">EGGLESS CAKE RUSK</a>
                  <div class="ps-product__category"><a class="ps-product__category" href="#">INDULGE IN THE RICH AND CREAMY TASTE OF MALAI WITH EVERY BITE OF THESE RUSKS.</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-section ps-section--award pt-80 pb-40">
      <div class="container">
          <div class="ps-section__header text-center mb-50">
            <h4 class="ps-section__top">Sweet Cupcakes</h4>
            <h3 class="ps-section__title ps-section__title--full">Tea Rusks</h3>
          </div>
          <div class="ps-section__content">
            <div class="owl-slider owl-slider--best-seller" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="false" data-owl-animate-in="" data-owl-animate-out="" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-nav-left="&lt;i class=&quot;ps-icon--back&quot;&gt;&lt;/i&gt;" data-owl-nav-right="&lt;i class=&quot;ps-icon--next&quot;&gt;&lt;/i&gt;">
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail">
                  <div class="ps-badge"><span>-50%</span></div><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/1.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">ZEERA TEA RUSK</a>
                  <div class="ps-product__category"><a class="ps-product__category">PERFECTLY SEASONED WITH CUMIN SEEDS, THESE RUSKS ARE IDEAL FOR YOUR TEA-TIME SNACK.</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/2.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">REGUALR TEA RUSK</a>
                  <div class="ps-product__category"><a class="ps-product__category" href="#">AN AROMATIC TREAT INFUSED WITH FENNEL SEEDS, MAKING IT A PERFECT COMPANION FOR YOUR TEA.</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail">
                  <div class="ps-badge"><span>-50%</span></div><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/3.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">SOONFI TEA RUSK</a>
                  <div class="ps-product__category"><a class="ps-product__category" href="#">TRADITIONAL PUNJABI BISCUITS ARE MADE WITH RICH MILK FOR A DELIGHTFUL TASTE.</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail">
                  <div class="ps-badge ps-badge--new"><span>New</span></div><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/4.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">RAISIN TEA RUSK</a>
                  <div class="ps-product__category"><a class="ps-product__category" href="#">SWEETENED WITH JAGGERY, THESE BISCUITS OFFER A UNIQUE AND WHOLESOME FLAVOR.</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail">
                  <div class="ps-badge ps-badge--new"><span>New</span></div><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/4.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">WHOLE WHEAT RUSK</a>
                  <div class="ps-product__category"><a class="ps-product__category" href="#">COMBINING THE SWEETNESS OF JAGGERY WITH THE REFRESHING TASTE OF FENNEL SEEDS.</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-section ps-section--award pt-80 pb-40">
      <div class="container">
          <div class="ps-section__header text-center mb-50">
            <h4 class="ps-section__top">Sweet Cupcakes</h4>
            <h3 class="ps-section__title ps-section__title--full">Biscuits</h3>
          </div>
          <div class="ps-section__content">
            <div class="owl-slider owl-slider--best-seller" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="false" data-owl-animate-in="" data-owl-animate-out="" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-nav-left="&lt;i class=&quot;ps-icon--back&quot;&gt;&lt;/i&gt;" data-owl-nav-right="&lt;i class=&quot;ps-icon--next&quot;&gt;&lt;/i&gt;">
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail">
                  <div class="ps-badge"><span>-50%</span></div><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/1.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">MILK PUNJABI BISCUIT</a>
                  <div class="ps-product__category"><a class="ps-product__category">TRADITIONAL PUNJABI BISCUITS ARE MADE WITH RICH MILK FOR A DELIGHTFUL TASTE.</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/2.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">SOOJI BISCUIT</a>
                  <div class="ps-product__category"><a class="ps-product__category" href="#">SWEETENED WITH JAGGERY, THESE BISCUITS OFFER A UNIQUE AND WHOLESOME FLAVOR.</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail">
                  <div class="ps-badge"><span>-50%</span></div><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/3.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">AJWAIN BISCUIT</a>
                  <div class="ps-product__category"><a class="ps-product__category" href="#">TRADITIONAL PUNJABI BISCUITS ARE MADE WITH RICH MILK FOR A DELIGHTFUL TASTE.</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail">
                  <div class="ps-badge ps-badge--new"><span>New</span></div><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/4.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">ZEERA BISCUIT</a>
                  <div class="ps-product__category"><a class="ps-product__category" href="#">COMBINING THE SWEETNESS OF JAGGERY WITH THE REFRESHING TASTE OF FENNEL SEEDS.</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail">
                  <div class="ps-badge ps-badge--new"><span>New</span></div><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/4.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">GUR SAUNF BISCUIT</a>
                  <div class="ps-product__category"><a class="ps-product__category" href="#">SWEETENED WITH JAGGERY, THESE BISCUITS OFFER A UNIQUE AND WHOLESOME FLAVOR.</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail">
                  <div class="ps-badge ps-badge--new"><span>New</span></div><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/4.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">WHOLE WHEAT BISCUIT</a>
                  <div class="ps-product__category"><a class="ps-product__category" href="#">COMBINING THE SWEETNESS OF JAGGERY WITH THE REFRESHING TASTE OF FENNEL SEEDS.</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-section ps-section--award pt-80 pb-40">
      <div class="container">
          <div class="ps-section__header text-center mb-50">
            <h4 class="ps-section__top">Sweet Cupcakes</h4>
             class="ps-section__title ps-section__title--full">Kulcha</h3>
          </div>
          <div class="ps-section__content">
            <div class="owl-slider owl-slider--best-seller" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="false" data-owl-animate-in="" data-owl-animate-out="" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-nav-left="&lt;i class=&quot;ps-icon--back&quot;&gt;&lt;/i&gt;" data-owl-nav-right="&lt;i class=&quot;ps-icon--next&quot;&gt;&lt;/i&gt;">
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail">
                  <div class="ps-badge"><span>-50%</span></div><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/1.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">STUFF KULCHA</a>
                  <div class="ps-product__category"><a class="ps-product__category">ALL-PURPOSE FLOUR, BAKING POWDER, BAKING SODA, YOGURT, SALT, SUGAR, WATER, BUTTER OR OIL (FOR DOUGH AND COOKING).</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/2.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">PLAIN KULCHA</a>
                  <div class="ps-product__category"><a class="ps-product__category" href="#">ALL-PURPOSE FLOUR, BAKING POWDER, BAKING SODA, YOGURT, SALT, SUGAR, WATER, BUTTER OR OIL (FOR DOUGH AND COOKING)</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-section ps-section--award pt-80 pb-40">
      <div class="container">
          <div class="ps-section__header text-center mb-50">
            <h4 class="ps-section__top">Sweet Cupcakes</h4>
            <h3 class="ps-section__title ps-section__title--full">Bun</h3>
          </div>
          <div class="ps-section__content">
            <div class="owl-slider owl-slider--best-seller" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="false" data-owl-animate-in="" data-owl-animate-out="" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-nav-left="&lt;i class=&quot;ps-icon--back&quot;&gt;&lt;/i&gt;" data-owl-nav-right="&lt;i class=&quot;ps-icon--next&quot;&gt;&lt;/i&gt;">
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail">
                  <div class="ps-badge"><span>-50%</span></div><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/1.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">PAV BUN</a>
                  <div class="ps-product__category"><a class="ps-product__category">ALL-PURPOSE FLOUR, YEAST, SUGAR, SALT, MILK, BUTTER OR OIL, WATER</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
              <div class="ps-product fade-up">
                <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="#"></a><img src="{{url('public/frontend/assets/images/products/2.png')}}" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="#">SWEET BUN</a>
                  <div class="ps-product__category"><a class="ps-product__category" href="#">ALL-PURPOSE FLOUR, YEAST, SUGAR, SALT, MILK, BUTTER OR OIL, WATER, ADDITIONAL SUGAR OR SWEETENERS, OPTIONAL FLAVORINGS LIKE VANILLA EXTRACT, CARDAMOM, ETC.</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price">₹5.00</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="ps-section ps-section--partner">
        <div class="container">
          <div class="owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="40" data-owl-nav="false" data-owl-dots="false" data-owl-animate-in="" data-owl-animate-out="" data-owl-item="6" data-owl-item-xs="3" data-owl-item-sm="4" data-owl-item-md="5" data-owl-item-lg="6" data-owl-nav-left="&lt;i class=&quot;fa fa-angle-left&quot;&gt;&lt;/i&gt;" data-owl-nav-right="&lt;i class=&quot;fa fa-angle-right&quot;&gt;&lt;/i&gt;"><a href="#"><img src="{{url('public/frontend/assets/images/partner/1.png')}}" alt=""></a><a href="#"><img src="{{url('public/frontend/assets/images/partner/2.png')}}" alt=""></a><a href="#"><img src="{{url('public/frontend/assets/images/partner/3.png')}}" alt=""></a><a href="#"><img src="{{url('public/frontend/assets/images/partner/4.png')}}" alt=""></a><a href="#"><img src="{{url('public/frontend/assets/images/partner/5.png')}}" alt=""></a><a href="#"><img src="{{url('public/frontend/assets/images/partner/6.png')}}" alt=""></a><a href="#"><img src="{{url('public/frontend/assets/images/partner/7.png')}}" alt=""></a><a href="#"><img src="{{url('public/frontend/assets/images/partner/8.png')}}" alt=""></a>
          </div>
        </div>
      </div>
      <section class="ps-section ps-section--map">
        <div id="contact-map" data-address="New York, NY" data-title="BAKERY LOCATION!" data-zoom="17"></div>
        <div class="ps-delivery">
          <div class="ps-delivery__header">
            <h3>Contact Us</h3>
            <p>Our Company is the best, meet the creative team that never sleeps. Say something to us we will answer to you.</p>
          </div>
          <div class="ps-delivery__content">
            <form class="ps-delivery__form" action="https://nouthemes.net/html/bakery/product-listing.html" method="post">
              <div class="form-group">
                <label>Name<span>*</span></label>
                <input class="form-control" type="text">
              </div>
              <div class="form-group">
                <label>Email<span>*</span></label>
                <input class="form-control" type="email">
              </div>
              <div class="form-group">
                <label>Phone Number<span>*</span></label>
                <input class="form-control" type="text">
              </div>
              <div class="form-group">
                <label>Your message<span>*</span></label>
                <textarea class="form-control"></textarea>
              </div>
              <div class="form-group text-center">
                <button class="ps-btn">Send Message<i class="fa fa-angle-right"></i></button>
              </div>
            </form>
          </div>
        </div>
      </section>
      <section class="ps-section ps-section--subscribe pt-80 pb-80">
        <div class="container">
          <div class="ps-subscribe">
            <div class="row">
                  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                    <h4>ABOUT US</h4>
                    <p>At Dulexe, we craft delightful baked goods with passion and the finest ingredients. From fresh bread to custom cakes, every treat is made to perfection. Indulge in our sweet creations and make every moment special with Dulexe.</p>
                    <p class="text-uppercase ps-subscribe__highlight">10wilkinson road , Unit#27&28, L6T5B1, Brampton</p>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 "><a class="ps-subscribe__logo" href="index.php"><img src="{{url('public/frontend/assets/images/logo.png')}}" alt=""></a>
                  </div>
                  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                    <h4>SUBSCRIBE EMAIL</h4>
                    <p>Give us your email, and we shall send regular updates for new stuff and events.</p>
                    <form class="ps-subscribe__form" method="post" action="https://nouthemes.net/html/bakery/_action">
                      <input class="form-control" type="text" placeholder="Type your email...">
                      <button class="ps-btn ps-btn--sm">Subscribe</button>
                    </form>
                  </div>
            </div>
          </div>
        </div>
      </section>


@endsection