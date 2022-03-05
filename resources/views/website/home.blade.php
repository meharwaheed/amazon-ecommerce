@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="container p-0 mt-3">
            <div class="row">
                <div class="col-md-5 col-xs-12">
                    <div class="image-main">
                        <i class="fa fa-heart heart-icon mt-2 me-3"></i>
                        <div class="image-wrapper">
                            <div class="image-sub p-1">
                                <img class="content-img"
                                    src="{{asset('public/assets/images/product_image.PNG')}}">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-7 col-xs-12">
                    <nav aria-label="breadcrumb"
                        style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Japan</a></li>
                            <li class="breadcrumb-item"><a href="#">Ecommerce</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Amazon.co.jp</li>
                        </ol>
                    </nav>
                    <div class="row my-2">
                        <span>
                            <h4 class="d-inline">Amazon.co.jp Gift Card（5000円）</h4>
                            <span class="badge bg-primary text-White btn-brand border-radius-5">
                                <!-- Featured  -->
                                特徴
                           </span>
                            <span class="badge bg-warning text-dark border-radius-5">
                            <!-- 1 % Rewards -->
                            1％の報酬
                             </span>
                        </span>
                    </div>
                    <div class="row my-2">
                        <div class="col d-flex">
                            <div class="d-inline">
                                <div class="text-warning mx-1">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                            <span class="d-inline color-grey">Rating 5 - 2 reviews </span>
                        </div>
                    </div>
                  <!--   <div class="row my-2">
                        <div class="col">
                            <span class="color-grey border border-black form-text p-1">
                                This gift is only redeemable on the e-commerce platform.
                            </span>
                        </div>
                    </div> -->
                    <div class="row my-2">
                        <div class="col">
                            <p class="color-grey">
                                Amazon | 本, ファッション, 家電から食品まで | アマゾン
Amazon.co.jp 公式サイト。アマゾンで本, 日用品, ファッション, 食品, ベビー用品, カー用品ほか一億種の商品をいつでもお安く。通常配送無料(一部を除く)
                            </p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>
                                    <!-- Enter amount -->
                                    金額を入力します
                                </h5>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-white border-right-0">JPY</div>
                                    </div>
                                    <input type="text" class="form-control border-left-0" id="inlineFormInputGroupUsername"
                                        placeholder="金額を入力します">
                                </div>
                            </div>
                            <!-- <div class="col-md-3 mt-4 col-sm-6 col-xs-6">
                                <span class='mt-2'>Estimated Price</span>

                                <div class="input-group" style="width: 87px;">
                                    {{-- <label for="disabledSelect" class="form-label">Estimated Price</label> --}}
                                    {{-- <div class="input-group-prepend">
                                        <div class="input-group-text bg-white border-right-0">Est. Price</div>
                                    </div> --}}
                                    <select id="disabledSelect" class="form-select border-0 p-0">
                                        <option>£1.38</option>
                                    </select>
                                </div>
                            </div> -->
                            <div class="col-md-2 text-green mt-5 col-sm-6 col-xs-6"><svg width="17" height="17"
                                    viewBox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M20.3175 15.4435C20.6601 14.7981 21.1341 14.2316 21.709 13.7805V13.782L21.7159 13.7757C22.3482 13.1957 23 12.5978 23 12C23 11.4022 22.3484 10.8045 21.7151 10.2236L21.708 10.217C21.1329 9.76618 20.6588 9.19962 20.3165 8.554C20.0915 7.8328 20.0197 7.07258 20.1055 6.322C20.138 5.484 20.17 4.617 19.777 4.222C19.3844 3.8274 18.5183 3.86093 17.6795 3.8934L17.677 3.8935C16.9264 3.97917 16.1662 3.9073 15.445 3.6825C14.7996 3.33986 14.2331 2.86585 13.782 2.291L13.7784 2.28706C13.1975 1.65329 12.5988 1 12 1C11.4009 1 10.8017 1.65412 10.2195 2.28977L10.217 2.2925C9.7659 2.86735 9.19941 3.34136 8.554 3.684C7.83259 3.90873 7.07224 3.98059 6.3215 3.895C5.4835 3.862 4.616 3.8295 4.2215 4.223C3.82788 4.61563 3.86085 5.48015 3.89279 6.31742L3.893 6.323C3.97899 7.07354 3.90729 7.83377 3.6825 8.555C3.33986 9.20041 2.86585 9.7669 2.291 10.218L2.28706 10.2216C1.65329 10.8025 1 11.4012 1 12C1 12.5987 1.6531 13.1973 2.28778 13.7791L2.292 13.783C2.86712 14.2338 3.34118 14.8004 3.6835 15.446C3.90846 16.1672 3.98033 16.9274 3.8945 17.678C3.862 18.516 3.83 19.3835 4.223 19.778C4.616 20.1725 5.484 20.139 6.323 20.1065C6.569 20.097 6.818 20.0875 7.0635 20.0875C7.57088 20.0666 8.07748 20.1447 8.555 20.3175C9.20041 20.6601 9.7669 21.1341 10.218 21.709L10.2216 21.7129C10.8025 22.3467 11.4012 23 12 23C12.6 23 13.2 22.344 13.783 21.706C14.2341 21.1311 14.8006 20.6571 15.446 20.3145C16.1673 20.0895 16.9278 20.0176 17.6785 20.1035L17.6805 20.1036C18.5174 20.1356 19.3843 20.1687 19.7785 19.7755C20.1721 19.3829 20.1391 18.5184 20.1072 17.6811L20.107 17.6755C20.021 16.925 20.0927 16.1647 20.3175 15.4435ZM10.6413 13.0994L15.1489 8.76379C15.3457 8.576 15.612 8.47059 15.8896 8.47059C16.1672 8.47059 16.4335 8.576 16.6304 8.76379C16.7289 8.85752 16.807 8.96904 16.8604 9.09191C16.9137 9.21478 16.9412 9.34657 16.9412 9.47967C16.9412 9.61278 16.9137 9.74457 16.8604 9.86744C16.807 9.99031 16.7289 10.1018 16.6304 10.1956L11.3768 15.237C11.1811 15.4233 10.9169 15.5283 10.6413 15.5294C10.503 15.5302 10.3659 15.5047 10.2379 15.4546C10.1099 15.4044 9.99346 15.3304 9.89528 15.237L7.4261 12.8574C7.3161 12.767 7.22677 12.6558 7.1637 12.5307C7.10064 12.4056 7.0652 12.2694 7.05961 12.1305C7.05402 11.9917 7.0784 11.8532 7.13122 11.7238C7.18405 11.5944 7.26417 11.4769 7.36657 11.3786C7.46897 11.2804 7.59143 11.2035 7.72626 11.1528C7.86109 11.1021 8.00539 11.0787 8.15009 11.0841C8.2948 11.0894 8.43678 11.1234 8.56714 11.184C8.6975 11.2445 8.81341 11.3302 8.90761 11.4358L10.6413 13.0994Z"
                                        fill="currentColor"></path>
                                </svg>
                                <!-- No Free -->
                                有料
                            </div>
                        </div>
                    </div>
                   <!--  <div class="row my-2">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <div id="phoneHelp" class="form-text">The phone number to refill.</div>
                                <input placeholder="Phone Number" type="phone" class="form-control"
                                    id="exampleInputphone1" aria-describedby="phoneHelp">
                            </div>
                        </div>
                    </div> -->
                    <div class="row my-2 mb-4 mt-4">
                        <div class="col-md-6 col-xs-12">
                            <div class="row px-3 mb-3">
                                <button type="button" class="btn btn-primary btn-brand border-radius">
                                    <!-- <svg stroke-width="2.5" width="18" height="18" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <circle cx="9" cy="21" r="1"></circle>
                                        <circle cx="20" cy="21" r="1"></circle>
                                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                    </svg> -->
                                    <!-- Buy -->
                                    買う
                                </button>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="row px-3">
                                <a class="nav-link creat-account-btn">
                                    <svg width="16" height="16" style="margin-top:-2px" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12.0613 4.01808C12.8073 2.66166 14.1939 1 16.5 1C17.4283 1 18.3185 1.36875 18.9749 2.02513C19.6313 2.6815 20 3.57174 20 4.5C20 5.02384 19.8826 5.53557 19.6623 6H21C22.6569 6 24 7.34315 24 9V11.8819C24.3069 12.1566 24.5 12.5557 24.5 13C24.5 13.4443 24.3069 13.8434 24 14.1181V21C24 22.6569 22.6569 24 21 24H13C13 24.5523 12.5523 25 12 25C11.4477 25 11 24.5523 11 24H3C1.34315 24 0 22.6569 0 21V14.1181C-0.306875 13.8434 -0.5 13.4443 -0.5 13C-0.5 12.5557 -0.306875 12.1566 0 11.8819V9C0 7.34315 1.34315 6 3 6H4.33772C4.11743 5.53557 4 5.02384 4 4.5C4 3.57174 4.36875 2.6815 5.02513 2.02513C5.6815 1.36875 6.57174 1 7.5 1C9.8061 1 11.1927 2.66166 11.9387 4.01808C11.9595 4.0559 11.9799 4.09368 12 4.13141C12.0201 4.09368 12.0405 4.0559 12.0613 4.01808ZM11 8H7.5H3C2.44772 8 2 8.44772 2 9V11.5H11V8ZM10.654 6C10.5319 5.68061 10.3774 5.32942 10.1863 4.98192C9.55732 3.83834 8.6939 3 7.5 3C7.10218 3 6.72064 3.15804 6.43934 3.43934C6.15804 3.72064 6 4.10218 6 4.5C6 4.89782 6.15804 5.27936 6.43934 5.56066C6.72064 5.84196 7.10218 6 7.5 6H10.654ZM17.5607 5.56066C17.2794 5.84196 16.8978 6 16.5 6H13.346C13.4681 5.68061 13.6226 5.32942 13.8137 4.98192C14.4427 3.83834 15.3061 3 16.5 3C16.8978 3 17.2794 3.15804 17.5607 3.43934C17.842 3.72064 18 4.10218 18 4.5C18 4.89782 17.842 5.27936 17.5607 5.56066ZM13 11.5V8H16.5H21C21.5523 8 22 8.44772 22 9V11.5H13ZM11 14.5H2V21C2 21.5523 2.44772 22 3 22H11V14.5ZM13 22V14.5H22V21C22 21.5523 21.5523 22 21 22H13Z"
                                                fill="currentColor"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="24" height="24" fill="transparent"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <!-- Purchase as gift -->
                                    ギフトとして購入
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row my-2 py-3">
                        <div class="col-6 text-center">
                            <span class="text-green">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43726 15.628 1.87979 13.4881 2.02167 11.3363C2.16356 9.18455 2.9972 7.13631 4.39828 5.49706C5.79935 3.85781 7.69278 2.71537 9.79619 2.24013C11.8996 1.7649 14.1003 1.98232 16.07 2.85999"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                    </path>
                                    <path d="M22 4L12 14.01L9 11.01" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                            <span class="color-grey">
                                <!-- Instant Delivery -->
                                即納
                            </span>
                        </div>
                        <div class="col-6 ext-center">
                            <span class="text-green">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43726 15.628 1.87979 13.4881 2.02167 11.3363C2.16356 9.18455 2.9972 7.13631 4.39828 5.49706C5.79935 3.85781 7.69278 2.71537 9.79619 2.24013C11.8996 1.7649 14.1003 1.98232 16.07 2.85999"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                    </path>
                                    <path d="M22 4L12 14.01L9 11.01" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                            <span class="color-grey">
                            <!-- Fast, Private, Safe -->
                            高速、プライベート、安全
                        </span>
                        </div>
                    </div>
                    <hr>
                    <div class="row my-2">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        <span class="font-bold">Description</span>

                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body color-grey">
                                        This is a gift card product. <br>
                                        We will provide you with a gift code and <br>
                                        instructions for how you apply the code.
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseTwo">
                                        <span class="font-bold">
                                            How to Redeem
                                        </span>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body color-grey">
                                        Paste the gift code here: https://www.epicgames.com/fortnite/redeem
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseThree">
                                        <span class="font-bold">Reviews (7) </span>
                                        <div class="text-warning mx-1 float-right">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body color-grey">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                        until the collapse plugin adds the appropriate classes that we use to style each
                                        element. These classes control the overall appearance, as well as the showing and
                                        hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                        our default variables. It's also worth noting that just about any HTML can go within
                                        the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <!--   <section class="my-4 text-center justify-center container">
            <h2>More Products on bitter fly</h2>
            <div class="row my-4">
                <div class="col-md-3 p-2">
                    <div class="card border-0">
                        <img src="{{ asset('public/assets/images/steam.webp') }}" class="card-img-top border-radius-5"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Steam United Kingdom</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2">
                    <div class="card border-0">
                        <img src="{{ asset('public/assets/images/steam.webp') }}" class="card-img-top border-radius-5"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Steam United Kingdom</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2">
                    <div class="card border-0">
                        <img src="{{ asset('public/assets/images/steam.webp') }}" class="card-img-top border-radius-5"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Steam United Kingdom</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2">
                    <div class="card border-0">
                        <img src="{{ asset('public/assets/images/steam.webp') }}" class="card-img-top border-radius-5"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Steam United Kingdom</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2">
                    <div class="card border-0">
                        <img src="{{ asset('public/assets/images/steam.webp') }}" class="card-img-top border-radius-5"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Steam United Kingdom</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2">
                    <div class="card border-0">
                        <img src="{{ asset('public/assets/images/steam.webp') }}" class="card-img-top border-radius-5"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Steam United Kingdom</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2">
                    <div class="card border-0">
                        <img src="{{ asset('public/assets/images/steam.webp') }}" class="card-img-top border-radius-5"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Steam United Kingdom</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2">
                    <div class="card border-0">
                        <img src="{{ asset('public/assets/images/steam.webp') }}" class="card-img-top border-radius-5"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Steam United Kingdom</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2">
                    <div class="card border-0">
                        <img src="{{ asset('public/assets/images/steam.webp') }}" class="card-img-top border-radius-5"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Steam United Kingdom</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2">
                    <div class="card border-0">
                        <img src="{{ asset('public/assets/images/steam.webp') }}" class="card-img-top border-radius-5"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Steam United Kingdom</h5>
                        </div>
                    </div>
                </div>
            </div>
            <a href="google.com">See all</a>
        </section> -->

       <!--  <section class="container ">
            <div class="row justify-center text-center">

                <h2 class="my-5 py-5"> How Gift Cards work</h2>

                <div class="col-md-12">
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-6">
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <img class="card-img-top"
                                        src="{{ asset('public/assets/images/landing_gift_cards_step1.svg') }}" alt="">
                                </div>
                                <div class="col-md-6 text-start my-3">
                                    <span class="color-primary">1.</span> Enter the amount

                                    <br>
                                    <span class="color-grey">
                                        Enter the amount you want the voucher to have
                                    </span>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <img class="card-img-top"
                                        src="{{ asset('public/assets/images/landing_gift_cards_step2.svg') }}" alt="">
                                </div>
                                <div class="col-md-6 text-start my-3">
                                    <span class="color-primary">2.</span> Pay with Crypto

                                    <br>
                                    <span class="color-grey">

                                        Your payment is confirmed the same minute in most cases
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <img class="card-img-top"
                                        src="{{ asset('public/assets/images/landing_gift_cards_step3.svg') }}" alt="">
                                </div>
                                <div class="col-md-6 text-start my-3">
                                    <span class="color-primary">3.</span> That's it, redeem your code!

                                    <br>
                                    <span class="color-grey">

                                        Once your payment is confirmed you will get your gift card code
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 text-end">
                    <span class="text-green">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43726 15.628 1.87979 13.4881 2.02167 11.3363C2.16356 9.18455 2.9972 7.13631 4.39828 5.49706C5.79935 3.85781 7.69278 2.71537 9.79619 2.24013C11.8996 1.7649 14.1003 1.98232 16.07 2.85999"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path d="M22 4L12 14.01L9 11.01" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                    </span>
                    <span class="color-grey">
                        Get gift card anywhere, anytime
                    </span>
                </div>
                <div class="col-6 text-start">
                    <span class="text-green">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43726 15.628 1.87979 13.4881 2.02167 11.3363C2.16356 9.18455 2.9972 7.13631 4.39828 5.49706C5.79935 3.85781 7.69278 2.71537 9.79619 2.24013C11.8996 1.7649 14.1003 1.98232 16.07 2.85999"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path d="M22 4L12 14.01L9 11.01" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                    </span>
                    <span class="color-grey">
                        Gift Cards for 4,000+ services
                    </span>
                </div>

            </div>

        </section> -->

        <section class="order_details mt-3 pt-3 pb-3">
            <div class="container p-0 mt-3">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class=" bg-white rounded-3 p-2">
                            <h4 class="pt-3 text-color">Order Details</h5>
                                <ul class="order-ul mt-3">
                                    <li>
                                        <img class="rounded-circle me-2"
                                            src="{{asset('public/assets/images/product_image.PNG')}}"
                                            loading="lazy" alt="amazon-icon image" width="48" height="48">
                                    </li>
                                    <li>
                                        <p class="ml-1 heading-text">
                                            Amazon.co.jp Japan <br>
                                            <!-- <span class="price-txt">1000000.00 JPY</span> -->
                                        </p>
                                    </li>
                                    <li class="float-end">
                                        <p class="mt-2 price-txt">500 JYP</p>
                                    </li>
                                </ul>
                                
                                <p class="mt-3 font-weight-bold h5 text-color">
                                        <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    Total Estimate
                                    <i class=" color-primary fa fa-info-circle" data-bs-toggle="tooltip"
                                        data-bs-placement="right" data-bs-html="true"
                                        title="<div> Due to price volatility of crypto currencies there may be a tiny differnce between this estimated price and actual price you will be expected to pay at last step of the order process.</div>"
                                        id="tooltip">

                                    </i>
                                

                                    <script>
                                        var exampleEl = document.getElementById('tooltip')
                                        var tooltip = new bootstrap.Tooltip(exampleEl, 'html')
                                    </script>
                                    <span class="float-end">500 JYP</span>
                                    <br>

                                </p>
                        </div>

                    </div>
                    <div class="col-md-6 col-xs-12 bg-white rounded-3">
                        <div class=" bg-white rounded-3 p-2">
                            <label class="dim-color">Email address for order status updates</label>
                            <input type="text" name="" class="form-control">

                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label dim-color check-label" for="flexCheckChecked">
                                    Add me to the newsletter to receive news about new products and features
                                </label>
                            </div>

                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" value="" id="terms" checked>
                                <label class="form-check-label dim-color check-label" for="terms">

                                    I have read and agree with the Bitrefill
                                    <span class="color-primary">Terms & Conditions</span>
                                    and the <span class="color-primary">Privacy Policy</span>
                                </label>
                            </div>
                            <div class="d-grid gap-2 mt-3">
                                <button class="btn btn-primary btn-brand" type="button">Payment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="order_details mt-3 pt-3 pb-3">
            <div class="container p-0 mt-3">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="bg-white rounded-3 p-2">
                            <div class="row">
                                <div class="col-6">
                                    <i class="fas fa-arrow-left border p-2" style="border-radius:100%;"></i>
                                </div>
                                <div class="col-6 text-end">
                                    <i class="fas fa-times border p-2 float-right" style="border-radius:100%;"></i>
                                </div>
                            </div>
                            <div class="row justify-center text-center">
                                <h4 class="pt-3 text-color">Enter Payment Information</h4>
                                <span>
                                    Enter your personel information as it appears on your bank account.
                                </span>
                            </div>
                            <div>
                                <form class="my-3 payment p-2">
                                    <div class="row">
                                        <h6>Card info</h6>
                                        <div class="mb-3 col-6">
                                            <input placeholder="First name*" type="text"
                                                class="form-control shadow-sm p-2 bg-body rounded border-0">
                                        </div>
                                        <div class="mb-3 col-6">
                                            <input placeholder="Last NAME*" type="text"
                                                class="form-control shadow-sm p-2 bg-body rounded border-0">
                                        </div>
                                        <div class="mb-3 col-12">
                                            <input placeholder="Card number*" type="text"
                                                class="form-control shadow-sm p-2 bg-body rounded border-0">
                                        </div>
                                        <div class="mb-3 col-6">
                                            <input placeholder="Expiration*" type="text"
                                                class="form-control shadow-sm p-2 bg-body rounded border-0">
                                        </div>
                                        <div class="mb-3 col-6">
                                            <input placeholder="CVV*" type="text"
                                                class="form-control shadow-sm p-2 bg-body rounded border-0">
                                        </div>
                                        <h6>Billing Address</h6>
                                        <div class="mb-3 col-12">
                                            <select id="disabledSelect"
                                                class="form-select shadow-sm p-2 bg-body rounded border-0">
                                                <option>Country*</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-12">
                                            <input placeholder="District*" type="text"
                                                class="form-control shadow-sm p-2 bg-body rounded border-0">
                                        </div>
                                        <div class="mb-3 col-12">
                                            <input placeholder="Address*" type="text"
                                                class="form-control shadow-sm p-2 bg-body rounded border-0">
                                        </div>
                                        <div class="mb-3 col-6">
                                            <input placeholder="Postel / Zip Code*" type="text"
                                                class="form-control shadow-sm p-2 bg-body rounded border-0">
                                        </div>
                                        <div class="mb-3 col-6">
                                            <input placeholder="City*" type="text"
                                                class="form-control shadow-sm p-2 bg-body rounded border-0">
                                        </div>
                                        <h6>Contact Info</h6>
                                        <div class="mb-3 col-12">
                                            <input placeholder="Email*" type="email"
                                                class="form-control shadow-sm p-2 bg-body rounded border-0">
                                        </div>

                                        <button type="submit*" class="col-md-12 btn btn-primary btn-brand">
                                            Confirm Order
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
