@extends('layout.main')

@section('content')

    <section class="container z-top position-relative default-margin-top">
        <div class="row justify-content-start align-items-start">
            <h1 class="py-2 text-white">آخرین نمونه کارها</h1>
            <div class="mb-2">
                <ul class="nav nav-tabs border-0 w-fit-content mx-auto px-md-5 px-3 mb-4" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link py-md-4 px-lg-4 px-md-3 p-2 lazy active position-relative" id="cat-1-tab"
                                data-bs-toggle="tab" data-bs-target="#cat-1"
                                type="button" role="tab" aria-controls="cat-1" aria-selected="true">ﻃﺮاﺣﯽ ﺳﺎﯾﺖ
                            <span class="position-absolute top-0 start-100 translate-middle-x">
                                99
                            </span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link py-md-4 px-lg-4 px-md-3 p-2 lazy position-relative" id="cat-2-tab" data-bs-toggle="tab"
                                data-bs-target="#cat-2"
                                type="button" role="tab" aria-controls="cat-2" aria-selected="false">ﻃﺮاﺣﯽ ﮐﻤﭙﯿﻦ
                            <span class="position-absolute top-0 start-100 translate-middle-x">
                                99
                            </span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link py-md-4 px-lg-4 px-md-3 p-2 lazy position-relative" id="cat-3-tab" data-bs-toggle="tab"
                                data-bs-target="#cat-3"
                                type="button" role="tab" aria-controls="cat-3" aria-selected="false">ﻃﺮاﺣﯽ راﺑﻂ ﮐﺎرﺑﺮی
                            <span class="position-absolute top-0 start-100 translate-middle-x">
                                99
                            </span>
                        </button>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="cat-1" role="tabpanel" aria-labelledby="cat-1-tab">
                        <ul class="row list-unstyled">
                            @for($i=0;$i<12;$i++)
                                <li class="col-lg-4 col-6">
                                    @include('partials.portfolio-card')
                                </li>
                            @endfor
                        </ul>
                    </div>
                    <div class="tab-pane fade show" id="cat-2" role="tabpanel" aria-labelledby="cat-2-tab">
                        <ul class="row list-unstyled">
                            @for($i=0;$i<12;$i++)
                                <li class="col-lg-4 col-6">
                                    @include('partials.portfolio-card')
                                </li>
                            @endfor
                        </ul>
                    </div>
                    <div class="tab-pane fade show" id="cat-3" role="tabpanel" aria-labelledby="cat-3-tab">
                        <ul class="row list-unstyled">
                            @for($i=0;$i<12;$i++)
                                <li class="col-lg-4 col-6">
                                    @include('partials.portfolio-card')
                                </li>
                            @endfor
                        </ul>
                    </div>

                </div>
            </div>

            @include('partials.pagination')
        </div>
    </section>

@endsection
