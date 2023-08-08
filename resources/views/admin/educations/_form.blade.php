<div class="container">
    <div class="col-md-8">
        <div class="mb-3">
            <label for="education_degree">Education Degree: </label>
            <div>
                <input type="text" class="form-control @error('education_degree') is-invalid @enderror" id="education_degree" name="education_degree" value="{{ old('education_degree',$education?->education_degree) }}" placeholder="Enter Education Degree">

                @error('education_degree')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="degree_brief">Short Brief: </label>
            <div>
                <textarea class="form-control @error('degree_brief') is-invalid @enderror" id="degree_brief" name="degree_brief" placeholder="Enter Short Brief">{{ old('degree_brief',$education?->degree_brief) }}</textarea>

                @error('degree_brief')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">{{ $btn_submit ?? 'Save' }}</button>
    </div>
</div>