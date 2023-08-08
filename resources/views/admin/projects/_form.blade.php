<div class="container">
    <div class="col-md-8">
        <div class="mb-3">
            <label for="project_name">Project Name: </label>
            <div>
                <input type="text" class="form-control @error('project_name') is-invalid @enderror" id="project_name" name="project_name" value="{{ old('project_name',$project?->project_name) }}" placeholder="Enter Proejct Name">
                @error('project_name')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="project_brief">Short Brief: </label>
            <div>
                <textarea class="form-control @error('project_brief') is-invalid @enderror" id="project_brief" name="project_brief" placeholder="Enter Short Brief">{{ old('project_brief',$project?->project_brief) }}</textarea>

                @error('project_brief')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="image">Project Image : </label>

            <img src="{{ $project?->image_url }}" alt="" width="100">

            <div>
                <input type="file" class="form-control @error('image') is-invalid @enderror" width="100" id="image" name="image" placeholder="proejct Image">
                @error('image')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">{{ $btn_submit ?? 'Save' }}</button>
    </div>
</div>