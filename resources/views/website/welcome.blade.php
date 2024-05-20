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

    <style>
        .splitor {
            height: 40px;
            width: 100%;
            margin: 0 auto;
        }
    </style>

</head>

<body style="background-image: url('{{url('website/welcome.jpeg')}}') !important;background-size: cover;" >

    <div class="mx-auto d-flex align-items-center justify-content-center flex-column"
        style="min-height: 100vh; min-width: 100vw; position : fixed ; top : 0 ; left : 0;" >

        <div class="container" style="position: relative; min-height: 100vh;">

            @if (session('error') || session('done'))

                <div class=" mx-auto"   style="width: fit-content">
                    @if (session('error'))
                        <div class="alert alert-danger text-center">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if(session('done'))
                        <div class="woocommerce-notices-wrapper bg-success">
                            <div class="woocommerce-message text-center">
                                {{ session('done') }}
                            </div>
                        </div>
                    @endif
                </div>
            @endif

            <div class="finger-top text-center  ">
                <img style="height: 70px !important;" src="{{ url('shops/' . $shop->logo) }}" alt="Pizzan">
            </div>

            <div class="splitor"></div>

            <p class="text-center text-white display-6 mx-auto p-3 rounded " style="background-color: red ; width: 100%;  font-weight: bold;">{{ strtoupper($shop->slug) }}</p>

            <div class="splitor"></div>

            <div class=" mx-auto d-flex align-items-center justify-content-center" style=" width: 87vw; position: absolute; bottom: 20px; " >

                <form class="form " 
                    action="{{ route('website.welcome', $shop->slug) }}" method="post" enctype="multipart/form-data" 
                    >
                    @csrf
                    @method('get')
                    <div style="width: 100%" class="print-continue-btn "
                    style="position: absolute; bottom: 0px; width: fit-content ; margin: 0 auto !important ; padding: 10px "
                    >
                        <button >Make An Order</button>
                    </div>
                </form>
            </div>

        </div>
    </div>


    <script src="{{url('website/new/assets/js/jquery-min-3.6.0.js')}}"></script>
    <script src="{{url('website/new/assets/js/slick.min.js')}}"></script>
    <script src="{{url('website/new/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('website/new/assets/js/custom.js')}}"></script>

    @yield('scripts')
</div>
</body>


</html>
