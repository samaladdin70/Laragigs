<div class="m-3">
    <label class="form-label" for="">Email:</label>
    <input placeholder="example@mail.com" class="form-control" type="email" name="email" id=""
        value="{{ old('email') }}">
    @error('email')
        <p class="text-danger fs-6 fw-bold">{{ $message }}</p>
    @enderror
</div>
<div class="m-3">
    <label class="form-label" for="">Password:</label>
    <input class="form-control" type="password" name="password" id="">
    @error('password')
        <p class="text-danger fs-6 fw-bold">{{ $message }}</p>
    @enderror
</div>

<div class="mt-3 mx-3">
    <button name="submit" class="btn btn-danger" type="submit">Login</button>
</div>

<div class="mt-3 mx-3">
    <b>Register as a new user?
        <a href="{{ route('register') }}" class="text-decoration-none text-danger">Register</a>
    </b>
</div>
<div class="mt-3 mx-3">
    <b>
        <a class="text-decoration-none text-dark" href="{{ route('listings') }}">
            OR - Back to <i class="fa-solid fa-house"></i>
        </a>
    </b>
</div>
