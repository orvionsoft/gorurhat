@extends('backEnd.layouts.master')
@section('title','Contact Messages')

@section('css')
<style>
    .product-manage-card, .dashboard-panel {
        background: #fff; border-radius: 18px; padding: 24px; box-shadow: 0 12px 35px rgba(0,0,0,0.05);
    }
    .dashboard-panel-title {
        display: flex; justify-content: space-between; align-items: center; gap: 16px; margin-bottom: 20px; flex-wrap: wrap;
    }
    .dashboard-panel-title h3 {
        margin: 0; font-size: 20px; color: #222;
    }
    .dashboard-panel-title a {
        color: white; text-decoration: none; font-weight: 600;
    }
    .dashboard-table {
        width: 100%; border-collapse: collapse; font-size: 14px;
    }
    .dashboard-table th, .dashboard-table td {
        padding: 14px 12px; text-align: left; border-bottom: 1px solid #f0f0f0; vertical-align: middle;
    }
    .dashboard-table thead th {
        background: #fff5f5; color: #555; font-weight: 700;
    }
    .dashboard-table tbody tr:last-child td {
        border-bottom: none;
    }
    .dashboard-tag {
        display: inline-flex; align-items: center; background: #e8f5e9; color: #2e7d32; border-radius: 999px; padding: 6px 12px; font-size: 12px;
    }
    .dashboard-tag.inactive {
        background: #fdecea; color: #c00000;
    }
    .custom-btn-list a, .custom-btn-list button {
        width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center; border: 1px solid #c00000; color: #c00000; background: #fff; border-radius: 8px; transition: all .2s ease;
    }
    .custom-btn-list a:hover, .custom-btn-list button:hover {
        background: #c00000; border-color: #c00000; color: #fff;
    }
    .btn-add-cow {
        border-radius: 8px !important; background: #c00000 !important; border-color: #c00000 !important; padding: 10px 20px !important;
    }
    .btn-add-cow:hover {
        background: #a00000 !important; border-color: #a00000 !important;
    }
</style>
@endsection

@section('content')
<div class="container-fluid" style="padding-top: 50px">
    <div class="row">
        <div class="col-12">
            <div class="dashboard-panel">
                <div class="dashboard-panel-title">
                    <h3>Contact Messages</h3>
                </div>
                <table class="dashboard-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($messages as $key => $message)
                        <tr>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->subject }}</td>
                            <td>{{ $message->created_at->format('d M Y H:i') }}</td>
                            <td>
                                <div class="custom-btn-list">
                                    <a href="{{ route('contact-message.show', $message->id) }}" title="View"><i class="fe-eye"></i></a>
                                    <form method="post" action="{{ route('contact-message.destroy') }}" class="d-inline">
                                        @csrf
                                        <input type="hidden" value="{{ $message->id }}" name="hidden_id">
                                        <button type="submit" class="delete-confirm" title="Delete"><i class="mdi mdi-close"></i></button>
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
@endsection


@section('script')
<!-- third party js -->
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/js/pages/datatables.init.js"></script>
@endsection