 <div class="row">
         <div class="mb-3 col-md-6">
            <label for="formTitle" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="formTitle" placeholder="Enter a title for the item" value="{{ isset($slider) ? $slider->title : old('title') }}">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3 col-md-6">
            <label for="formDescription" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="formTitle" placeholder="Enter a title for the item" value="{{ isset($slider) ? $slider->title : old('title') }}">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3 col-md-6">
            <label for="formDescription" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="formTitle" placeholder="Enter a title for the item" value="{{ isset($slider) ? $slider->title : old('title') }}">
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3 col-md-6">
            <label for="formImage" class="form-label">Image <span class="text-danger">*</span></label>
            <input class="form-control" type="file" name="image" id="formImage" accept="image/*">
            <div class="form-text">Upload a Slider Images. (Max size: 5MB)</div>
            @error('image')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        @if(isset($slider))
            <div class="mb-3 col-md-6">
                <label for="formStatus" class="form-label">Status</label>
                <select class="form-select" name="status" id="formStatus" required>
                    <option disabled value="">Choose...</option>
                    <option value="1" {{ $slider->status == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ $slider->status == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
        @endif
    </div>

    
    <div>
        @if(isset($slider))
            <button type="submit" class="btn btn-primary">Update</button>
        @else
            <button type="submit" class="btn btn-primary">Submit</button>
        @endif
        <a href="{{ route('admin.employees.index') }}" class="btn btn-secondary">Back</a>
    </div>