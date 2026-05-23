@extends('backEnd.layouts.master')
@section('title','Edit Cow')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="container-fluid">
    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Edit Cow</h4>
            </div>
        </div>
    </div>       
    <!-- end page title --> 

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('cows.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Cow Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$data->name}}" placeholder="Enter cow name" required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="breed" class="form-label">Breed</label>
                                    <input type="text" class="form-control @error('breed') is-invalid @enderror" id="breed" name="breed" value="{{$data->breed}}" placeholder="e.g. Holstein, Jersey">
                                    @error('breed')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="age" class="form-label">Age (years)</label>
                                    <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" name="age" value="{{$data->age}}" placeholder="Enter age">
                                    @error('age')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="color" class="form-label">Color</label>
                                    <input type="text" class="form-control @error('color') is-invalid @enderror" id="color" name="color" value="{{$data->color}}" placeholder="e.g. Black, White, Brown">
                                    @error('color')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="weight" class="form-label">Weight (kg)</label>
                                    <input type="text" class="form-control @error('weight') is-invalid @enderror" id="weight" name="weight" value="{{$data->weight}}" placeholder="Enter weight">
                                    @error('weight')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price <span class="text-danger">*</span></label>
                            <input type="number" step="0.01" min="0" max="999999999999999.99" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{$data->price}}" placeholder="Enter price" required>
                            @error('price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" placeholder="Enter cow description">{{$data->description}}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="status" name="status" value="1" {{$data->status == 'active' ? 'checked' : ''}}>
                                <label class="form-check-label" for="status">
                                    Active
                                </label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="images" class="form-label">Add More Images</label>
                            <div class="form-group">
                                <input type="file" class="form-control @error('images') is-invalid @enderror" id="images" name="images[]" multiple accept="image/*" placeholder="Upload images">
                                <small class="form-text text-muted">You can upload multiple images</small>
                            </div>
                            @error('images')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Existing Images</label>
                            <div class="row" id="existingImages">
                                @foreach($data->images as $image)
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img src="{{asset($image->image)}}" class="card-img-top" alt="Cow Image" style="height: 200px; object-fit: cover;">
                                        <div class="card-body">
                                            <button type="button" class="btn btn-sm btn-danger w-100" onclick="deleteExistingImage({{$image->id}})">
                                                <i class="bi bi-trash"></i> Delete
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="d-flex gap-3">
                            <button type="submit" class="btn btn-primary rounded-pill">Update Cow</button>
                            <a href="{{route('cows.index')}}" class="btn btn-secondary rounded-pill">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
<script>
function deleteExistingImage(imageId) {
    if(confirm('Are you sure you want to delete this image?')) {
        $.ajax({
            url: "{{ url('admin/cows/image') }}/" + imageId,
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            success: function(response) {
                if(response.success) {
                    toastr.success('Image deleted successfully');
                    location.reload();
                }
            }
        });
    }
}
</script>
@endsection
