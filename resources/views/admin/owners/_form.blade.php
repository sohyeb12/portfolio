<div class="container">
    <div class="col-md-8">
        <div class="mb-3">
            <label for="name">Name owner: </label>
            <div>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name',$owner?->name) }}" placeholder="Enter Name owner">
                @error('name')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="email">Email owner: </label>
            <div>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email',$owner?->email) }}" placeholder="Enter Email owner">
                @error('email')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="phone">Phone owner: </label>
            <div>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone',$owner?->phone) }}" placeholder="Enter Phone Number">
                @error('phone')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="work">Work owner: </label>
            <div>
                <input type="text" class="form-control @error('work') is-invalid @enderror" id="work" name="work" value="{{ old('work',$owner?->work) }}" placeholder="Enter Owner Work:">
                
                @error('work')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="Brief">Short Brief: </label>
            <div>
                <textarea class="form-control @error('Brief') is-invalid @enderror" id="Brief" name="Brief" placeholder="Enter Short Brief">{{ old('Brief',$owner?->Brief) }}</textarea>

                @error('Brief')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <div class="single-form form-default">
                <label>State</label>
                <div class="select-items">
                    <select name="state" class="form-control">
                        <option value="0">select State</option>
                        @foreach($countries as $code => $name)
                        <option @selected($code==old('state',$owner->state)) value="{{ $code }}">{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="image">owner Image : </label>

            <img src="{{ $owner?->image_url }}" alt="" width="100">

            <div>
                <input type="file" class="form-control @error('image') is-invalid @enderror" width="100" id="image" name="image" placeholder="owner Image">
                @error('image')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">{{ $btn_submit ?? 'Save' }}</button>
    </div>
</div>