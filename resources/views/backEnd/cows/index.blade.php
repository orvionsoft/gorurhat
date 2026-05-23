@extends('backEnd.layouts.master')
@section('title','Cows Manage')
@section('css')
<link href="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<link href="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<link href="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<link href="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="container-fluid">
    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <a href="{{route('cows.create')}}" class="btn btn-primary rounded-pill">Create Cow</a>
                </div>
                <h4 class="page-title">Cows Manage</h4>
            </div>
        </div>
    </div>       
    <!-- end page title --> 
   <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Breed</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $key=>$value)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$value->name}}</td>
                            <td>
                                @if($value->image)
                                    <img src="{{asset($value->image->image)}}" class="backend-image" alt="{{$value->name}}" style="height: 50px; width: 50px;">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td>{{$value->breed ?? 'N/A'}}</td>
                            <td>৳ {{number_format($value->price, 2)}}</td>
                            <td>
                                @if($value->status == 'active')
                                    <span class="badge bg-soft-success text-success">Active</span>
                                @else
                                    <span class="badge bg-soft-danger text-danger">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <div class="button-list flex-nowrap">
                                    <a href="{{route('cows.edit', $value->id)}}" class="btn btn-sm btn-warning rounded-pill" title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-info rounded-pill" onclick="openImageModal({{$value->id}})" title="Manage Images">
                                        <i class="bi bi-image"></i>
                                    </button>
                                    <form action="{{route('cows.destroy', $value->id)}}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger rounded-pill" onclick="return confirm('Are you sure?');" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   </div>
</div>

<!-- Image Management Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Manage Images</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="currentCowId" value="">
                
                <!-- Upload Form -->
                <div class="mb-3">
                    <label for="imageFile" class="form-label">Upload New Image</label>
                    <input type="file" class="form-control" id="imageFile" accept="image/*">
                </div>
                
                <button type="button" class="btn btn-primary mb-3" onclick="uploadImage()">Upload</button>
                
                <hr>
                
                <!-- Images List -->
                <h6>Existing Images</h6>
                <div id="imagesList" class="row">
                    <!-- Images will be loaded here -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>

<script>
$(document).ready(function() {
    $('#datatable-buttons').DataTable({
        responsive: true,
        pageLength: 25,
    });
});

function openImageModal(cowId) {
    document.getElementById('currentCowId').value = cowId;
    loadImages(cowId);
    new bootstrap.Modal(document.getElementById('imageModal')).show();
}

function loadImages(cowId) {
    $.ajax({
        url: "{{ url('admin/cows/images') }}/" + cowId,
        type: 'GET',
        success: function(response) {
            let html = '';
            if(response.data.length > 0) {
                response.data.forEach(function(image) {
                    html += `
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img src="{{ asset('') }}${image.image}" class="card-img-top" alt="Cow Image" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <button type="button" class="btn btn-sm btn-danger w-100" onclick="deleteImage(${image.id})">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                });
            } else {
                html = '<div class="col-12"><p class="text-center text-muted">No images yet</p></div>';
            }
            document.getElementById('imagesList').innerHTML = html;
        }
    });
}

function uploadImage() {
    let fileInput = document.getElementById('imageFile');
    let cowId = document.getElementById('currentCowId').value;
    
    if(!fileInput.files[0]) {
        alert('Please select an image');
        return;
    }
    
    let formData = new FormData();
    formData.append('image', fileInput.files[0]);
    formData.append('cow_id', cowId);
    formData.append('_token', '{{ csrf_token() }}');
    
    $.ajax({
        url: "{{ route('cows.image.upload') }}",
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            if(response.success) {
                toastr.success('Image uploaded successfully');
                fileInput.value = '';
                loadImages(cowId);
            }
        },
        error: function(xhr) {
            let errors = xhr.responseJSON.errors;
            if(errors) {
                Object.keys(errors).forEach(function(key) {
                    toastr.error(errors[key][0]);
                });
            }
        }
    });
}

function deleteImage(imageId) {
    if(confirm('Are you sure you want to delete this image?')) {
        let cowId = document.getElementById('currentCowId').value;
        
        $.ajax({
            url: "{{ url('admin/cows/image') }}/" + imageId,
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            success: function(response) {
                if(response.success) {
                    toastr.success('Image deleted successfully');
                    loadImages(cowId);
                }
            }
        });
    }
}
</script>
@endsection
