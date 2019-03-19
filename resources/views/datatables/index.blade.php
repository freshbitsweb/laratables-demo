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
                        @include('datatables.searching')
                        @include('datatables.ordering')
                        @include('datatables.selecting_additional_column')
                        @include('datatables.specifying_additional_searchable_column')
                        @include('datatables.modify_fetched_record')
                        @include('datatables.extra_data_datatables_attribute')

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
