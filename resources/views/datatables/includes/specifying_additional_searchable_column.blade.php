<table id="specifying-additional-searchable-column-example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Gender</th>
        </tr>
    </thead>
</table>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#specifying-additional-searchable-column-example').DataTable({
                serverSide: true,
                processing: true,
                responsive: true,
                ajax: "{{ route('specifying-additional-searchable-column') }}",
                columns: [
                    { name: 'name', orderable: false},
                    { name: 'mobile', orderable: false},
                    { name: 'email', orderable: false},
                    { name: 'gender', orderable: false},
                ]
            });
        });
    </script>
@endpush