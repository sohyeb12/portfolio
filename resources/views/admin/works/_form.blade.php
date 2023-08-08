<div class="container">
    <div class="col-md-8">
        <div class="mb-3">
            <label for="title">Work Title: </label>
            <div>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title',$work?->title) }}" placeholder="Enter Work Date">
                @error('title')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="date">Date Work: </label>
            <div>
                <input type="text" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date',$work?->date) }}" placeholder="Enter Date Work">
                @error('date')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="work_brief">Short Brief: </label>
            <div>
                <textarea class="form-control @error('work_brief') is-invalid @enderror" id="work_brief" name="work_brief" placeholder="Enter Work Brief">{{ old('work_brief',$work?->work_brief) }}</textarea>

                @error('work_brief')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">{{ $btn_submit ?? 'Save' }}</button>
    </div>
</div>