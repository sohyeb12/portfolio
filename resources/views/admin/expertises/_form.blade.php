<div class="container">
    <div class="col-md-8">
        <div class="mb-3">
            <label for="name">Name Expertise: </label>
            <div>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name',$expertise?->name) }}" placeholder="Enter Name User">
                
                @error('name')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="icon">Icon: </label>
            <div>
                @foreach($icons as $key => $value)
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="icon" id="icon_{{$key}}" value="{{$key}}" @checked($key==old('icon',$expertise?->icon) )>
                    <label class="form-check-label" for="icon_{{$key}}">{{$value}}</label>

                </div>
                @endforeach
            </div>
        </div>

        <div class="mb-3">
            <label for="brief">Short Brief: </label>
            <div>
                <textarea class="form-control @error('brief') is-invalid @enderror" id="brief" name="brief" placeholder="Enter Short Brief">{{ old('brief',$expertise?->brief) }}</textarea>

                @error('brief')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>

        
        <button type="submit" class="btn btn-primary">{{ $btn_submit ?? 'Save' }}</button>
    </div>
</div>