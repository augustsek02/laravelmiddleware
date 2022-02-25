@extends("layouts.app")


@section("main")

    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">

                    <div class="card">
                        <div class="card-header">

                            <div class="row">
                                <div class="col-md-2">
                                    <h5>STUDENTS</h5>
                                </div>
                                <div class="col-md-10">
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
                                </div>
                            </div>
                        </div>
                        <div class="card-block">
                            <form action="{{ route('student.create') }}" method="POST">
                                @csrf
                                <div class="m-b-20">
                                    <h4 class="sub-title">Student Information</h4>
                                    <div class="row">

                                        <label class="col-sm-4 col-lg-2 col-form-label">First name</label>
                                        <div class="col-sm-8 col-lg-10">
                                            @error('firstName')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="input-group">
                                                <span class="input-group-prepend" id="basic-addon2">
                                                </span>
                                                <input type="text" name="firstName" value="{{ old('firstName') }}"
                                                       class="form-control @error('firstName') is-invalid @enderror"
                                                       placeholder="first name">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-4 col-lg-2 col-form-label">Last name</label>
                                        <div class="col-sm-8 col-lg-10">
                                            @error('lastName')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="input-group">
                                                <span class="input-group-prepend" id="basic-addon2">
                                                </span>
                                                <input type="text" name="lastName" value="{{ old('lastName') }}"
                                                       class="form-control @error('lastName') is-invalid @enderror"
                                                       placeholder="Last name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-4 col-lg-2 col-form-label">Date of birth</label>
                                        <div class="col-sm-8 col-lg-10">
                                            @error('dob')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="input-group">
                                                <input type="date" name="dob" value="{{ old('dob') }}"
                                                       class="form-control @error('dob') is-invalid @enderror"
                                                       placeholder="Date of birth">
                                                <span class="input-group-append" id="basic-addon3">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-4 col-lg-2 col-form-label">class</label>
                                        <div class="col-sm-8 col-lg-10">
                                            @error('class')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="input-group">
                                                <span class="input-group-prepend"></span>
                                                <input type="text" name="class" value="{{ old('class') }}"
                                                       class="form-control @error('class') is-invalid @enderror"
                                                       placeholder="class">
                                                <span class="input-group-append">
                                                </span>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-4 col-lg-2 col-form-label">Parent name</label>
                                        <div class="col-sm-8 col-lg-10">
                                            @error('parentName')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="input-group">
                                                <span class="input-group-prepend" id="basic-addon2">
                                                </span>
                                                <input type="text" name="parentName" value="{{ old('parentName') }}"
                                                       class="form-control @error('parentName') is-invalid @enderror"
                                                       placeholder="Parent name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-4 col-lg-2 col-form-label">Home address</label>
                                        <div class="col-sm-8 col-lg-10">
                                            @error('homeAddress')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="input-group">
                                                <span class="input-group-prepend" id="basic-addon2">
                                                </span>
                                                <input type="text" name="homeAddress" value="{{ old('homeAddress') }}"
                                                       class="form-control @error('homeAddress') is-invalid @enderror"
                                                       placeholder="Home address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2"></label>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                                        </div>

                            </form>
                        </div>



@endsection
