@extends("layouts.app")


@section("main")

<h1>List of registered teachers.</h1>
    
    <table class="table table-stripped">
  <thead>
     <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>DATE OF BIRTH</th>
     </tr>
  </thead>
 
  
  <tbody>
            @foreach($animals as $teacher)
     <tr>
                <td>{{ $teacher->first_name }}</td>
                <td>{{ $teacher->last_name }}</td>
                <td>{{ $teacher->age }}</td>
                <td>{{ $teacher->address }}</td>
                <td>{{ $teacher->phone_number }}</td>
                <td>{{ $teacher->dob }}</td>
     </tr>
            @endforeach
  </tbody>
  
</table>
@endsection




