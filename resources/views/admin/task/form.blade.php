 <div class="row">
     <div class="mb-3 col-md-6">
         <label for="formTitle" class="form-label">Title</label>
         <input type="text" class="form-control" name="title" id="formTitle" placeholder="Enter Title"
             value="{{ isset($task) ? $task->title : old('title') }}">
         @error('title')
             <span class="text-danger">{{ $message }}</span>
         @enderror
     </div>
     @php
         $priorities = \App\Models\Task::priority();
     @endphp
     <div class="mb-3 col-md-6">
         <label for="formTitle" class="form-label">Priority</label>
         <select class="form-select" name="priority" aria-label="Default select example">
             <option selected>Choose...</option>
             @foreach ($priorities as $priority)
                 <option value="{{ $priority }}">{{ $priority }}</option>
             @endforeach
         </select>
         @error('title')
             <span class="text-danger">{{ $message }}</span>
         @enderror
     </div>

     <div class="mb-3 col-md-6">
         <label for="formDescription" class="form-label">Description</label>
         <textarea class="form-control" name="description" id="formDescription" rows="3"
             placeholder="Provide a detailed description">
                {{ isset($task) ? $task->description : old('description') }}
            </textarea>
         @error('description')
             <span class="text-danger">{{ $message }}</span>
         @enderror
     </div>
 </div>

 <div>
     @if (isset($task))
         <button type="submit" class="btn btn-primary">Update</button>
     @else
         <button type="submit" class="btn btn-primary">Submit</button>
     @endif
     <a href="{{ route('admin.task.index') }}" class="btn btn-secondary">Back</a>
 </div>
