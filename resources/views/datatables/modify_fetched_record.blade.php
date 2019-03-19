<div class="card">
    <div class="card-header bg-dark" id="modify-fetched-record-heading">
        <h5 class="mb-0">
            <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#modify-fetched-record" aria-expanded="true" aria-controls="modify-fetched-record">
                <h4 class="m-0">
                    Modify fetched records
                </h4>
            </button>
        </h5>
    </div>

    <div id="modify-fetched-record" class="collapse" aria-labelledby="modify-fetched-record-heading" data-parent="#accordionExample">
        <div class="card-body">
            @include('datatables.includes.modify_fetched_record')
        </div>
    </div>
</div>