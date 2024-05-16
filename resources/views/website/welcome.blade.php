<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$shop->slug}}</title>
    <link rel="icon" href="{{url('website/new/assets/images/favicon/icon.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('website/new/assets/css/all.min.css')}}">

    <link rel="stylesheet" href="{{url('website/new/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{url('website/new/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('website/new/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('website/new/assets/css/media-query.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{url('website/assets/css/magnific-popup.min.css')}}">
    <!-- Layerslider -->
    <link rel="stylesheet" href="{{url('website/assets/css/layerslider.min.css')}}">
    <!-- Datepicker -->
    <link rel="stylesheet" href="{{url('website/assets/css/jquery.datetimepicker.min.css')}}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{url('website/assets/css/slick.min.css')}}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{url('website/assets/css/style.css')}}">
    <!-- <link rel="stylesheet" href="website/assets/css/bootstrap.min.css'> -->


    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{url('website/assets/css/fontawesome.min.css')}}">
</head>
<body style="background-image: url('{{url('website/welcome.jpeg')}}') !important;background-size: cover;">
    <div class="site-content">
        <!-- Preloader Start -->
        <div class="loader-mask">
            <div class="circle">
            </div>
        </div>

        <section id="finger-print-sec">
            <div class="container">
                <div class="finger-print-sec-full">
                    <form class="form" action="{{ route('website.welcome', $shop->slug) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('get')
                    <div class="finger-top text-center">
                        <img style="height: 70px !important;" src="{{ url('shops/' . $shop->logo) }}" alt="Pizzan">
                    </div>
                    <div class="finger-bottom">
                        @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if(session('done'))
                    <div class="woocommerce-notices-wrapper bg-success">
                        <div class="woocommerce-message">
                            {{ session('done') }}
                        </div>
                    </div>
                @endif
                    </div>
                    <div class="finger-print-sec-btn">

                        <div class="finger-print-sec-btn-wrapp">
                            <p class="">{{$shop->slug}}</p>
                            
                            <div style="width: 100%" class="print-continue-btn">
                                <button >Make an Order</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </section>
    </div>



    <script src="{{url('website/new/assets/js/jquery-min-3.6.0.js')}}"></script>
    <script src="{{url('website/new/assets/js/slick.min.js')}}"></script>
    <script src="{{url('website/new/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('website/new/assets/js/custom.js')}}"></script>

    @yield('scripts')
</div>
</body>


</html>
