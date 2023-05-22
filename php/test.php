<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <style type="text/css">
        body{
            background: #FFE5CC;
            font-family: lstat;
        }
        .detail-111-title-price-wislist-cart{
            background-color: white;
            height: 420px;
            overflow: hidden;
        }
        .detail-111-title-price-wislist-cart .image-2222{
            width: 100%;
            height: 320px;
        }
        .detail-111-title-price-wislist-cart .image-2222 img{
            height: 100%;
            width: 100%;
            padding: 24px 39px;
        }
        .detail-111-title-price-wislist-cart .title-rtin-1122 h2{
            margin: 0 0 10px;
            padding: 1px 2px;
            font-size: 16px;
            line-height: 1.3;
            font-weight: 400;
            margin-left: 10px;
        }
        .detail-111-title-price-wislist-cart .title-description{
            margin-left: 13px;
        }
        .detail-111-title-price-wislist-cart .rtin-title-1313{
            margin-left: 10px;
        }
        .detail-111-title-price-wislist-cart .description-rtin-1122 .title{
            margin: 0 0 10px;
            padding: 0;
            font-size: 16px;
            line-height: 1.3;
            font-weight: 400;
            margin-left: 10px;
            overflow: hidden;
        }
        .detail-111-title-price-wislist-cart .price-wislist-cart-12{
            width: 100%;
            padding: 0px 24px;
            display: flex;
            justify-content: space-between;
        }
        .detail-111-title-price-wislist-cart .wislist-cart-1111{
            display: flex;
            justify-content: space-between;
            width: 40%;
        }
    </style>
</head>
<body>
    <a href=""></a>
    <div class="container">
        <div class="row slider">
            <?php
                for($i=0;$i<=8;$i++){
                    ?>
                        <div class="col-12">
                            <div class="detail-111-title-price-wislist-cart">
                                <div class="row">
                                    <div class="image-2222">
                                        <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" alt="">
                                    </div>
                                    <div class="title-description">
                                        <div class="rtin-title-1313">content slider</div>
                                        <div class="description-rtin-1122">
                                            <h3 class="title"> <a href="">content slider</a></h3>
                                        </div>
                                    </div>
                                    <div class="price-wislist-cart-12">
                                        <div class="price-123">
                                            <span class="price-amount-1313">$150</span>
                                        </div>
                                        <div class="wislist-cart-1111">
                                            <div class="wislist-112">
                                                <a href="">ss</a>
                                            </div>
                                            <div class="cart-112">
                                                <span><a href=""></a>ssss</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script type="text/javascript">
        $('.slider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<a href=""></a>

    <form action="" method="post">
        <div class="wislist-cart-1111">
            <div class="wislist-112">
             
             <a href=""><i class="wishlist-icon fa fa-heart-o" name="btn_submit"></i></a>
            </div>



            <div class="cart-112">
                <span><a href=""></a>cart</span>
            </div>
        </div>
    </form>

           