@extends('layouts.backend.app')

@section('content')

<div class="row">
	
</div>
<input type="hidden" id="base_url" value="{{ url('/') }}">
<input type="hidden" id="site_url" value="{{ url('/') }}">
<input type="hidden" id="dashboard_static" value="{{ url('/admin/dashboard/static') }}">
<input type="hidden" id="dashboard_perfomance" value="{{ url('/admin/dashboard/perfomance') }}">
<input type="hidden" id="deposit_perfomance" value="{{ url('/admin/dashboard/deposit/perfomance') }}">
<input type="hidden" id="dashboard_order_statics" value="{{ url('/admin/dashboard/order_statics') }}">
<input type="hidden" id="gif_url" value="{{ asset('uploads/loader.gif') }}">
<input type="hidden" id="month" value="{{ date('F') }}">
@endsection

@push('script')
<script src="{{ asset('admin/assets/js/chart.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('admin/js/dashboard.js') }}"></script>
@endpush