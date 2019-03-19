<table id="modify-fetched-record-example" class="display" style="width:100%">
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
            $('#modify-fetched-record-example').DataTable({
                serverSide: true,
                processing: true,
                responsive: true,
                searching: false,
                ajax: "{{ route('modify-fetched-record') }}",
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