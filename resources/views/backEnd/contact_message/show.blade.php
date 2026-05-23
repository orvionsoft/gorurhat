@extends('backEnd.layouts.master')
@section('title','View Contact Message')

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <a href="{{route('contact-message.index')}}" class="btn btn-primary">Back to Messages</a>
                </div>
                <h4 class="page-title">Contact Message Details</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Name: {{$message->name}}</h5>
                            <p><strong>Email:</strong> {{$message->email}}</p>
                            <p><strong>Phone:</strong> {{$message->phone}}</p>
                            <p><strong>Subject:</strong> {{$message->subject}}</p>
                            <p><strong>Date:</strong> {{$message->created_at->format('d M Y H:i')}}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Message:</h5>
                            <p>{{$message->message}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection