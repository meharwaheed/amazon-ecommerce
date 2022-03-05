<meta charset="utf-8">
<meta name="description" content="Amazon Ecommerce">
<title>Amazon Ecommerce</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .toggle-btn {
        position: absolute;
        right: 0px;
        top: 16px;
        display: none;
    }

    .mobile-cart-icon {
        display: none;
    }

    .font-size-13 {
        font-size: 13px;
    }

    @media (max-width:480px) {
        .icons {
            display: none !important;
        }

        .logo-img {
            height: 45px;
        }

        .center {
            text-align: center;
        }

        .pad-top {
            padding-top: 20px;
        }

        .f-s {
            font-size: 19px;
        }

    }

    @media (max-width:768px) {
        .mobile-cart-icon {
            display: block;
            font-size: 24px;
            position: absolute;
            right: 2px;
            top: 7px;
        }
    }

    .search-li {
        width: 22rem;
    }

    .search-input {
        border-radius: 100px;
        background: hsl(216deg 20% 95%);
        border: none;
    }

    .header-border-bottom {
        border-bottom: 1px solid #b3898938;
    }

    .navbar-light .navbar-nav .nav-item .nav-link {
        color: black;
    }

    .navbar-light .navbar-nav .active-li {
        color: hsl(211deg 94% 63%) !important;
    }

    .nav-font {
        font-size: 17px;
        font-weight: 500;
    }

    .has-search .form-control {
        padding-left: 2.375rem;
    }

    .has-search .form-control-feedback {
        position: absolute;
        z-index: 2;
        display: block;
        width: 2.375rem;
        height: 2.375rem;
        line-height: 2.375rem;
        text-align: center;
        pointer-events: none;
        color: #aaa;
    }

    .creat-account-btn {
        background: #dcedff;
        border-radius: 50px;
        padding: 10px 14px;
        font-size: 14px;
        min-width: 156px;
        text-align: center;
        color: hsl(211deg 94% 63%) !important;
    }

    .creat-account-btn:hover {
        background: #acd2fc;
    }

    .login-btn {
        color: black !important;
        border-radius: 50px;
        opacity: 0.6;
    }

    .login-btn:hover {
        color: white !important;
        background: #a3b2c2;
        opacity: 1;
    }

    .hoverable:hover {
        color: hsl(211deg 94% 63%) !important;
    }

    .svg-user {
        border: 1px solid #8f6f6f57;
        border-radius: 100%;
        padding: 2px;
    }

    .image-main {
        background: #f0f2f5;
        width: 100%;
        height: 450px;
        /*display: flex;*/
    }

    .image-sub {
        /*background: white;*/
        margin: auto;
        /*height: 244px;
        width: 80%;*/
    }

    .content-img {
        width: 100%;
        height: 100%;
    }

    .heart-icon {
        float: right;
        position: relative;
        background: white;
        height: 30px;
        width: 30px;
        text-align: center;
        padding: 7px;
        color: #5a6f87;
        border-radius: 100%;
    }

    .image-wrapper {
        display: flex;
        height: 100%;
        width: 100%;
    }

    .order_details {
        background: hsl(211deg 14% 95%);
    }

    .order-ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    .order-ul li {
        float: left;
    }

    .price-txt {
        font-size: 14px;
        font-weight: 500;
        color: hsl(211deg 19% 45%);
        text-align: right;
        white-space: nowrap;
    }

    .heading-text {
        font-size: 16px;
        color: hsl(211deg 19% 17%);
        font-weight: 600;
    }

    .text-color {
        color: hsl(211deg 20% 16%);
    }

    .dim-color {
        color: hsl(211deg 20% 45%);
    }

    .check-label {
        font-size: 15px;
        font-weight: 500;
        text-decoration: none;
    }

    .color-primary {
        color: #0d6efd;
    }

    .payment input.form-control::placeholder {
        color: black;
    }

    .footer-link-hover:hover {
        border-bottom: 1px solid grey;
    }

    .btn-brand {
        background: #459bf7;
    }

    .border-radius {
        border-radius: 20px;
    }

    .border-radius-5 {
        border-radius: 10px;
    }

    .text-green {
        color: #13cd64;
    }

    nav ol .breadcrumb-item a {
        color: #6c757d;
        text-decoration: none;
    }

    .breadcrumb-item.active {
        color: black;
    }

    .color-grey {
        color: #6c757d;
    }

    .accordion-item {
        background-color: #fff;
        border: none;
    }

    hr {
        margin: 7px 0;
        opacity: 0.15;
    }

    .accordion-button:not(.collapsed) {
        font-weight: 600;
        color: black;
        background-color: white;
    }

</style>
