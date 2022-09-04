<div class="row g-4">


    <div class="col-md-12 order-md-0 order-first">
        <h4 class="text-white">ارسال نظر</h4>

        <form action="">
            <div class="row text-white">
                <div class="mb-2 mb-lg-3 col-12">
                    <textarea rows="4" type="text" class="form-control background-blur border-0 rounded-1 lazy" id="commentFormInput4" placeholder="نظر"></textarea>
                </div>
                <div class="mb-2 col-lg-6 col-12">
                    <input type="text" class="form-control background-blur border-0 rounded-1 lazy" id="commentFormInput1" placeholder="نام">
                </div>

                <div class="mb-2 col-lg-6 col-12">
                    <input type="text" class="form-control background-blur border-0 rounded-1 lazy" id="commentFormInput2" placeholder="ایمیل ">
                </div>
            </div>

            <div class="text-end">
                <button class="background-radial text-white btn btn-gold px-md-3 px-2">ارسال نظر</button>
            </div>
        </form>
    </div>
    <div class="col-md-12 order-md-1 border-md-end border-secondary text-white">
        <h4>نظرات</h4>

        <div class="hstack gap-3 mb-5 align-items-center">
            <div class="rating-stars fs-5">
                <span class="fill" style="width: 80%"></span>
            </div>

            <p class="lead m-0">
                بر اساس 2 نظر ثبت شده
            </p>
        </div>


        <div class="vstack">
            @include('partials.comment-box')
            @include('partials.comment-box')
        </div>
    </div>
</div>
