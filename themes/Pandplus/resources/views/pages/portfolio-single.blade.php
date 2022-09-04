@extends('layout.main')

@section('content')

<section class="container z-top position-relative default-margin-top">
    <div class="row mx-1 justify-content-lg-start justify-content-center align-items-start">
        <div class="col-10">
            <h1 class="py-2 text-white">طراحی رابط کاربری و وبسایت پندپلاس</h1>
        </div>
        <div class="col-2">
            <a class="background-radial text-white btn btn-gold px-md-3 px-2 d-md-block d-none " href="#">
                    <span class="d-md-inline">
                        سفارش پروژه
                    <i class="bi bi-arrow-left ms-1"></i>
                    </span>
            </a>
        </div>
        <div class="col-12 position-relative d-flex align-items-center">
            <span class="text-white">اجرا توسط</span>
            <ul class="list-unstyled mb-0 p-2 overlay-top no-hide">
                <li class="d-inline-block">
                    <img class="object-fit rounded-circle d-block" style="width: 45px"
                         src="http://127.0.0.1:8000/images/user-avatar.png" alt="">
                </li>
                <li class="d-inline-block">
                    <img class="object-fit rounded-circle d-block" style="width: 45px"
                         src="http://127.0.0.1:8000/images/user-avatar.png" alt="">
                </li>
                <li class="d-inline-block">
                    <img class="object-fit rounded-circle d-block" style="width: 45px"
                         src="http://127.0.0.1:8000/images/user-avatar.png" alt="">
                </li>
            </ul>
            <span class="text-white">28 مرداد ، 1401</span>
        </div>
        <div class="row  mt-5 text-white justify-content-center background-blur p-4 rounded-1">
            <div class="col-lg-6 col-12">
                <h5 class="mb-1">چکیده</h5>
                <p>وظیفه من ساخت وب سایت شما به گونه ای است که کاربردی و کاربر پسند باشد و در عین حال جذاب باشد. هدف من رساندن پیام و هویت شما به خلاقانه ترین روش است.
                    من از تبدیل مشکلات پیچیده به طراحی ساده ، زیبا و بصری رابط لذت می برم. وقتی کد نویسی یا پیکسل را فشار نمی دهم ، من را در استخر یا در دادگاه پیدا خواهید کرد که در حال تیراندازی است.
                </p>
            </div>
            <div class="col-lg-2 col-12">
                <h5 class="mb-1">مشتری</h5>
                <p>آقای یوسف خلعتبری</p>
            </div>
            <div class="col-lg-2 col-12">
                <h5 class="mb-1">خدمات انجام شده</h5>
                <ul class="list-unstyled text-start">
                    <li>گرافیست</li>
                    <li> برنامه نویس</li>
                    <li> مشاور</li>
                </ul>
            </div>
            <div class="col-lg-2 col-12">
                <h5 class="mb-1">مشتری</h5>
                <p>آقای یوسف خلعتبری</p>
            </div>
        </div>
    </div>
</section>

@endsection
