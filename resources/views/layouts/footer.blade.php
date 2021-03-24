@section('footer')
    <style>
        .footer-container{
            background: #131313;
            position: relative;
        }
        .content-footer{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
@endsection
<div class="footer-container">
    <div class="content-footer">
        <p class="text-center text-secondary">&#169; Copyright 2021 Elevate Clothing Company</p>
    </div>
    <img class="img-fluid" src="{{asset('images_assets/footer.png')}}" alt="footer">
</div>

