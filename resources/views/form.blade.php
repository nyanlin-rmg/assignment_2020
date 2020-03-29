@extends('layouts')
@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="text-center">
                    <h1>Volunteer Registration</h1>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 offset-3">
                <div class="justify-content-center">
                    <form action="{{ route('volunteerRegistration') }}" method="POST" id="registrationForm">
                        @csrf
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : ''}}">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('value') }}" id="name">
                            @if($errors->has('name'))
                                <span class="help-block small" style="color: red; font-style: italic">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="dob" {{ $errors->has('dob') ? ' has-error' : ''}}>Data of Birth</label>
                            <input type="date" class="form-control" name="dob" value="{{ old('dob') }}">
                            @if($errors->has('dob'))
                                <span class="help-block small" style="color: red; font-style: italic">
                                <strong>{{ $errors->first('dob') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('nrc') ? ' has-error' : ''}}">
                            <label for="name">NRC Number</label>
                            <input type="text" class="form-control" name="nrc" value="{{ old('nrc') }}">
                            @if($errors->has('nrc'))
                                <span class="help-block small" style="color: red; font-style: italic">
                                <strong>{{ $errors->first('nrc') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="father_name" {{ $errors->has('father_name') ? ' has-error' : ''}}>Father Name</label>
                            <input type="text" class="form-control" name="father_name" value="{{ old('father_name') }}">
                            @if($errors->has('father_name'))
                                <span class="help-block small" style="color: red; font-style: italic">
                                <strong>{{ $errors->first('father_name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="occupation" {{ $errors->has('occupation') ? ' has-error' : ''}}>Occupation</label>
                            <input type="text" class="form-control" name="occupation" value="{{ old('occupation') }}">
                            @if($errors->has('occupation'))
                                <span class="help-block small" style="color: red; font-style: italic">
                                <strong>{{ $errors->first('occupation') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group" {{ $errors->has('address') ? ' has-error' : ''}}>
                            <label for="address">Address</label>
                            <textarea name="address" id="address" class="form-control">{{ old('value') }}</textarea>
                            @if($errors->has('address'))
                                <span class="help-block small" style="color: red; font-style: italic">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <span class="small">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur commodi consequuntur corporis, delectus, dolor eius fugiat hic labore magnam, magni nemo officiis pariatur saepe sapiente sequi sunt unde vero.
                            </span>
                            <div>
                                <input type="checkbox" name="accept" class="custom-checkbox" id="acceptCheck"
                                    {{ old('accept') == 'on' ? 'checked' : '' }}
                                >
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Register" id="btnRegister" onclick="return checkForm();">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function checkForm() {
            if($('#acceptCheck').is(":checked") === false) {
                alert("Check The Accept");
                return false;
            }
            return true;
        }
    </script>
@endsection
