<div class="container">
    <div class="col-md-8">
        <div class="mb-3">
            <label for="name">Name User: </label>
            <div>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name',$user?->name) }}" placeholder="Enter Name User as this (Sohyeb Jarwan)">
                @error('name')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="email">Email User: </label>
            <div>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email',$user?->email) }}" placeholder="Enter Email User">
                @error('email')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="password">password User: </label>
            <div>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password',$user?->password) }}" placeholder="Enter password User">
                @error('password')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="password_confirmation">Confirm User: </label>
            <div>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password:">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">{{ $btn_submit ?? 'Save' }}</button>
    </div>
</div>