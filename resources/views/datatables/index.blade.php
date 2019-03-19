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

                        @include('datatables.controlling_the_query')
                        @include('datatables.custom_columns')
                        @include('datatables.relationship_column')
                        @include('datatables.customizing_column_values')

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
