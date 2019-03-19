<div class="card">
    <div class="card-header bg-dark" id="ordering-heading">
        <h5 class="mb-0">
            <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#ordering" aria-expanded="true" aria-controls="ordering">
                <h4 class="m-0">
                    Ordering (Sorting)
                </h4>
            </button>
        </h5>
    </div>

    <div id="ordering" class="collapse" aria-labelledby="ordering-heading" data-parent="#accordionExample">
        <div class="card-body">
            @include('datatables.includes.ordering')
        </div>
    </div>
</div>