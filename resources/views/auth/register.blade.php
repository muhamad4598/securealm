<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <title>Register form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class='container'>
        <div class='row'>
            <div class="col-md-4 col-md-offset-4" style="margin-top:30px">
                <h2>Registration<h2>
                        <hr>
                        <div class='form-group'>
                            <form action="{{ route('register-user') }}" method="post">
                                @if (Session::has('SUCCESS'))
                                    <div class="alert alert-success">{{ Session::get('SUCCESS') }}</div>
                                @endif
                                @if (Session::has('FAILED'))
                                    <div class="alert alert-danger">{{ Session::get('FAILED') }}</div>
                                @endif
                                @csrf
                                <div class='form-group'>
                                    <label for='name'>Name</label>
                                    <input type='text' class='form-control' value='{{ old('name') }}'
                                        name='name'>
                                    <span class="text-danger">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class='form-group'>
                                    <label for='blood'>Blood type</label>
                                    <input type='text' class='form-control' value='{{ old('blood') }}'
                                        name='blood'>
                                    <span class="text-danger">
                                        @error('blood')
                                            {{ $message }}
                                        @enderror
                                    </span>

                                </div>
                                <div class='form-group'>
                                    <label for='sex'>sex</label>
                                    <select type='text' class='form-control' value='{{ old('sex') }}'
                                        name='sex'>
                                        <option value="male">male</option>
                                        <option value="female">female</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('sex')
                                            {{ $message }}
                                        @enderror
                                    </span>

                                </div>
                                <div class='form-group'>
                                    <label for='email'>Email</label>
                                    <input type='text' class='form-control' value='{{ old('email') }}'
                                        name='email'>
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>

                                </div>
                                <div class='form-group'>
                                    <label for='password'>Password</label>
                                    <input type='text' class='form-control' value='{{ old('password') }}'
                                        name='password'>
                                    <span class="text-danger">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>

                                </div>
                                <div class='form-group'>
                                    <label for='name'>Confirm your password</label>
                                    <input type='text' class='form-control' value='' name='passCon'>
                                </div>
                                <button class=' btn btn-block btn-primary' style="margin-top: 20px">Register</button>

                            </form>
                            <a  style="font-size:13px" href="login">already have an account login .</a>

                        </div>
            </div>
        </div>
    </div>




</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

</html>
