<table id="custom-column-example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
    </thead>
</table>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#custom-column-example').DataTable({
                serverSide: true,
                processing: true,
                responsive: true,
                ajax: "{{ route('custom-column') }}",
                columns: [
                    { name: 'name' },
                    { name: 'mobile' },
                    { name: 'email' },
                    { name: 'gender' },
                    { name: 'action', orderable: false, searchable: false }
                ]
            });
        });
    </script>
@endpush