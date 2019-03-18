@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h2>Examples</h2>
                </div>

                <div class="card-body">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header bg-dark" id="controlling-query">
                                <h5 class="mb-0">
                                    <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#query-controlling" aria-expanded="true" aria-controls="query-controlling">
                                        <h4 class="m-0">Controlling the query</h4>
                                    </button>
                                </h5>
                            </div>

                            <div id="query-controlling" class="collapse" aria-labelledby="controlling-query" data-parent="#accordionExample">
                                <div class="card-body">
                                    @include('datatables.includes.controlling_the_query')
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header bg-dark" id="custom-column-heading">
                                <h5 class="mb-0">
                                    <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#custom-column" aria-expanded="true" aria-controls="custom-column">
                                        <h4 class="m-0">
                                            Customize Column
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
