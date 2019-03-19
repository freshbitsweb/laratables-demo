<table id="relationship-column-example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Category</th>
        </tr>
    </thead>
</table>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#relationship-column-example').DataTable({
                serverSide: true,
                processing: true,
                responsive: true,
                searching: false,
                ajax: "{{ route('relationship-column') }}",
                columns: [
                    { name: 'id', orderable: false },
                    { name: 'name', orderable: false },
                    { name: 'description', orderable: false },
                    { name: 'productCategory.name', orderable: false },
                ],
            });
        });
    </script>
@endpush