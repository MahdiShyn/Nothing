<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Address</th>
            <th scope="col">Wallet</th>
        </tr>
    </thead>
    <tbody>
{{-- @foreach($cars as $car) --}}
@for($i=0;$i<30;$i++)
    <tr>
        <th scope="row">{{ $i }}</th>
        <td>Name{{ $i }}</td>
        <td>Email{{ $i }}</td>
        <td>Phone Number{{ $i }}</td>
        <td>Address{{ $i }}</td>
        <td>Wallet{{ $i }}</td>
    </tr>
@endfor
{{-- @endforeach --}}
    </tbody>
</table>