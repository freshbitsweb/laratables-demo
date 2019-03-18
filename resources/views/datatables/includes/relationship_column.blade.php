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
                ajax: "{{ route('relationship-column') }}",
                columns: [
                    { name: 'id' },
                    { name: 'name' },
                    { name: 'description' },
                    { name: 'productCategory.name', orderable: false },
                ],
            });
        });
    </script>
@endpush