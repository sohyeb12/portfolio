<div class="container">
    <div class="col-md-8">
        <div class="mb-3">
            <label for="name">Name Skill: </label>
            <div>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name',$skill->name) }}" placeholder="Enter Name User">
                @error('name')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="percentage">Percentage Skill: </label>
            <div>
                <input type="number" class="form-control @error('percentage') is-invalid @enderror" id="percentage" name="percentage" value="{{ old('percentage',$skill->percentage) }}" placeholder="Enter Skill Percentage">
                @error('percentage')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary">{{ $btn_submit ?? 'Save' }}</button>
    </div>
</div>