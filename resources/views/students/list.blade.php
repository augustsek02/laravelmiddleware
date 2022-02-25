@extends("layouts.app")


@section("main")
<div class="p-5">

    @if(Session::has('success'))
        <div class="alert alert-success">
            <span class="text-success">{{ Session::get('success')}}</span>
        </div>
    @endif
    @if(Session::has('error'))
        <div class="alert alert-danger">
            <span class="text-danger">{{ Session::get('error')}}</span>
        </div>
    @endif

    <h4 class="mb-4">List of all the students.</h4>

    <table class="table table-stripped">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>DATE OF BIRTH</th>
            <th>Class</th>
            <th>Parent Name</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{ $student->first_name }}</td>
                <td>{{ $student->last_name }}</td>
                <td>{{ $student->date_of_birth }}</td>
                <td>{{ $student->class }}</td>
                <td>{{ $student->parent_name }}</td>
                <td>{{ $student->home_address }}</td>
                <td>
                    <a href="{{route("student.edit", $student->id)}}" class="btn btn-primary">Edit</a>
                    <a onclick="return confirm('Are you sure you want to delete this student?')" href="{{route("student.delete", $student->id)}}" class="btn btn-danger">Delete</a>
                </td>

            </tr>
        @endforeach
        </tbody>

    </table>
</div>
@endsection
