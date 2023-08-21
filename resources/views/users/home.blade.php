<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Cart</title>
    {{-- css --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    {{-- script --}}
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> --}}
</head>
<body>
<div class="super_container">

	<!-- Header -->
    @include('users.includes.header')
    <!-- Header -->

	<div class="wrapper">
        <div class="content py-md-0 py-3">
            <section id="products">
                <div class="container py-3">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                            <div class="card"> <img class="card-img-top" src="https://www.freepnglogos.com/uploads/cucumber-png/cucumber-png-image-purepng-transparent-png-26.png">
                                <div class="card-body">
                                    <h6 class="font-weight-bold pt-1">Product title</h6>
                                    <div class="text-muted description">Space for small product description</div>
                                    <div class="d-flex align-items-center product"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star"></span> </div>
                                    <div class="d-flex align-items-center justify-content-between pt-3">
                                        <div class="d-flex flex-column">
                                            <div class="h6 font-weight-bold">36.99 USD</div>
                                            <div class="text-muted rebate">48.56</div>
                                        </div>
                                        <div class="btn btn-primary">Buy now</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 pt-md-0 pt-4">
                            <div class="card"> <img class="card-img-top" src="https://www.freepnglogos.com/uploads/carrot-png/carrot-mint-with-turmeric-chia-equine-pure-delights-12.png">
                                <div class="card-body">
                                    <h6 class="font-weight-bold pt-1">Product title</h6>
                                    <div class="text-muted description">Space for small product description</div>
                                    <div class="d-flex align-items-center product"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star"></span> </div>
                                    <div class="d-flex align-items-center justify-content-between pt-3">
                                        <div class="d-flex flex-column">
                                            <div class="h6 font-weight-bold">36.99 USD</div>
                                            <div class="text-muted rebate">48.56</div>
                                        </div>
                                        <div class="btn btn-primary">Buy now</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 pt-lg-0 pt-4">
                            <div class="card"> <img class="card-img-top" src="https://www.freepnglogos.com/uploads/tomato-png/tomato-bunch-fresh-tomatoes-png-image-pngpix-24.png">
                                <div class="card-body">
                                    <h6 class="font-weight-bold pt-1">Product title</h6>
                                    <div class="text-muted description">Space for small product description</div>
                                    <div class="d-flex align-items-center product"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star"></span> </div>
                                    <div class="d-flex align-items-center justify-content-between pt-3">
                                        <div class="d-flex flex-column">
                                            <div class="h6 font-weight-bold">36.99 USD</div>
                                            <div class="text-muted rebate">48.56</div>
                                        </div>
                                        <div class="btn btn-primary">Buy now</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 pt-lg-4 pt-4">
                            <div class="card"> <img class="card-img-top" src="https://www.freepnglogos.com/uploads/grapes-png/grapes-grape-red-transparent-png-stickpng-5.png">
                                <div class="card-body">
                                    <h6 class="font-weight-bold pt-1">Product title</h6>
                                    <div class="text-muted description">Space for small product description</div>
                                    <div class="d-flex align-items-center product"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star"></span> </div>
                                    <div class="d-flex align-items-center justify-content-between pt-3">
                                        <div class="d-flex flex-column">
                                            <div class="h6 font-weight-bold">36.99 USD</div>
                                            <div class="text-muted rebate">48.56</div>
                                        </div>
                                        <div class="btn btn-primary">Buy now</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 pt-lg-4 pt-4">
                            <div class="card"> <img class="card-img-top" src="https://www.freepnglogos.com/uploads/cucumber-png/cucumber-png-image-purepng-transparent-png-26.png">
                                <div class="card-body">
                                    <h6 class="font-weight-bold pt-1">Product title</h6>
                                    <div class="text-muted description">Space for small product description</div>
                                    <div class="d-flex align-items-center product"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star"></span> </div>
                                    <div class="d-flex align-items-center justify-content-between pt-3">
                                        <div class="d-flex flex-column">
                                            <div class="h6 font-weight-bold">36.99 USD</div>
                                            <div class="text-muted rebate">48.56</div>
                                        </div>
                                        <div class="btn btn-primary">Buy now</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 pt-lg-4 pt-4">
                            <div class="card"> <img class="card-img-top" src="https://www.freepnglogos.com/uploads/watermelon-png/watermelon-gea-products-2.png">
                                <div class="card-body">
                                    <h6 class="font-weight-bold pt-1">Product title</h6>
                                    <div class="text-muted description">Space for small product description</div>
                                    <div class="d-flex align-items-center product"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star"></span> </div>
                                    <div class="d-flex align-items-center justify-content-between pt-3">
                                        <div class="d-flex flex-column">
                                            <div class="h6 font-weight-bold">36.99 USD</div>
                                            <div class="text-muted rebate">48.56</div>
                                        </div>
                                        <div class="btn btn-primary">Buy now</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Footer -->
    @include('users.includes.footer')
    <!-- Footer -->

</div>
</body>
</html>
