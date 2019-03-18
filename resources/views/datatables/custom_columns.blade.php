<div class="card">
    <div class="card-header bg-dark" id="custom-column-heading">
        <h5 class="mb-0">
            <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#custom-column" aria-expanded="true" aria-controls="custom-column">
                <h4 class="m-0">
                    Custom column
                </h4>
            </button>
        </h5>
    </div>

    <div id="custom-column" class="collapse" aria-labelledby="custom-column-heading" data-parent="#accordionExample">
        <div class="card-body">
            @include('datatables.includes.custom_column')
        </div>
    </div>
</div>