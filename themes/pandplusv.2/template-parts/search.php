<form  method="GET" class="form init me-4" action="<?php echo esc_url(site_url('/')); ?>">
        <div class="position-relative">
            <input type="search" name="s" id="s" size="40" class="form-control validates-as-required validates-as-email form-control rounded p-4" aria-required="true" aria-invalid="false" placeholder="جستجو...">
        <span class="form-control-wrap position-absolute top-0 end-0 me-2" data-name="email">
            <input type="submit" value="جستجو" class="form-control rounded-1 fw-bold mt-2 px-4 py-3 text-white btn shadow bg-danger">
        </span>
        </div>

</form>