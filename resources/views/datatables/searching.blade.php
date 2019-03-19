<div class="card">
    <div class="card-header bg-dark" id="searching-heading">
        <h5 class="mb-0">
            <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#searching" aria-expanded="true" aria-controls="searching">
                <h4 class="m-0">
                    Searching
                </h4>
            </button>
        </h5>
    </div>

    <div id="searching" class="collapse" aria-labelledby="searching-heading" data-parent="#accordionExample">
        <div class="card-body">
            @include('datatables.includes.searching')
        </div>
    </div>
</div>