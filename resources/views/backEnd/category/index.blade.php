@extends('backEnd.layouts.master')
@section('title','Category Manage')
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
        background: #c00000; border-color: #c00000; 
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
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="dashboard-panel">
                <div class="dashboard-panel-title">
                    <h3>Category Manage</h3>
                    <a href="{{ route('categories.create') }}" class="btn-add-cow">Create</a>
                </div>
                <table class="dashboard-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Count</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $key => $value)
                        <tr>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->count }}</td>
                            <td>
                                @if($value->status == 1)
                                <span class="dashboard-tag">Active</span>
                                @else
                                <span class="dashboard-tag inactive">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <div class="custom-btn-list">
                                    <a href="{{ route('categories.edit', $value->id) }}" title="Edit"><i class="fe-edit"></i></a>
                                    <form method="post" action="{{ route('categories.destroy') }}" class="d-inline">
                                        @csrf
                                        <input type="hidden" value="{{ $value->id }}" name="hidden_id">
                                        <button type="submit" class="delete-confirm" title="Delete"><i class="fe-trash-2"></i></button>
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


