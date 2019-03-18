<div class="card">
    <div class="card-header bg-dark" id="relationship_column-heading">
        <h5 class="mb-0">
            <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#relationship_column" aria-expanded="true" aria-controls="relationship_column">
                <h4 class="m-0">
                    Relationship Column
                </h4>
            </button>
        </h5>
    </div>

    <div id="relationship_column" class="collapse" aria-labelledby="relationship_column-heading" data-parent="#accordionExample">
        <div class="card-body">
            @include('datatables.includes.relationship_column')
        </div>
    </div>
</div>