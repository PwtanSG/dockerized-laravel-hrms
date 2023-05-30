<h3 class="mt-3">{{ config('app.name', '') }} 1111</h3>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Contact</th>
            {{-- <th scope="col">Actions</th> --}}
        </tr>
    </thead>
    <tbody>
        @php
            $i = 0;
        @endphp
        @foreach ($records as $record)
            @php
                $i++;
            @endphp
            <tr class="cursor-pointer" >
                <td scope="row">{{ $record->id }}</td>
                <td>{{ $record->name }}</td>
                <td>{{ $record->email }}</td>
                <td>{{ $record->contact_no }}</td>
            </tr>
        @endforeach
    </tbody>
</table>