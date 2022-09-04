@extends('layout.main')

@section('content')

    <section class="container z-top position-relative default-margin-top">
        <div class="row justify-content-start align-items-start  text-white">
            <h1 class="py-2">خدمات</h1>
            <p>پرطرفدارترین دسته های پند پلاس در یک نگاه</p>
            <div class="mb-2">
                <div class="tab-pane fade show active" id="cat-1" role="tabpanel" aria-labelledby="cat-1-tab">
                    <ul class="row justify-content-center list-unstyled">
                        @for($i=0;$i<5;$i++)
                            <li class="col-lg-4 col-6">
                                @include('partials.service-card')
                            </li>
                        @endfor
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
