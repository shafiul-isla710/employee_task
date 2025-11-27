 <div class="row">
         <div class="mb-3 col-md-6">
            <label for="formTitle" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="formTitle" placeholder="Enter Name" value="{{ isset($employee) ? $employee->name : old('name') }}">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3 col-md-6">
            <label for="formDescription" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="formTitle" placeholder="Enter Email" value="{{ isset($employee) ? $employee->email : old('email') }}">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        
        @if(!isset($employee))
        <div class="mb-3 col-md-6">
            <label for="formDescription" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="formTitle" placeholder="Set Password" value="{{ isset($employee) ? $employee->password : old('password') }}">
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        @endif

        <div class="mb-3 col-md-6">
            <label for="formImage" class="form-label">Image <span class="text-danger">*</span></label>
            <input class="form-control" type="file" name="image" id="formImage" accept="image/*">
            <div class="form-text">Upload a employee Images. (Max size: 5MB)</div>
            @error('image')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        @if(isset($employee))
            <div class="mb-5 col-md-3">
                <label for="formStatus" class="form-label">Status</label>
                <select class="form-select" name="status" id="formStatus" required>
                    <option disabled value="">Choose...</option>
                    <option value="1" {{ $employee->status == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ $employee->status == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
        @endif
    </div>

    
    <div>
        @if(isset($employee))
            <button type="submit" class="btn btn-primary">Update</button>
        @else
            <button type="submit" class="btn btn-primary">Submit</button>
        @endif
        <a href="{{ route('admin.employees.index') }}" class="btn btn-secondary">Back</a>
    </div>