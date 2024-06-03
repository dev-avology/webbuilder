@extends('layouts.backend.app')

@section('title','Dashboard')
@push('css')
<link rel="stylesheet" href="{{ asset('admin/assets/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/css/owl.theme.default.min.css') }}">
@endpush
@section('content')

<div class="row">
  <div class="col-lg-4">
    
  </div>
</div>

@if(tenant('push_notification') == 'on' && env('FMC_SERVER_API_KEY') != null)
<div class="notification-button-area notification_button">
  <button id="btn-nft-enable" class="btn btn-danger btn-xs btn-flat notification_button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M20 17h2v2H2v-2h2v-7a8 8 0 1 1 16 0v7zM9 21h6v2H9v-2z"/></svg></button>
</div>
@endif
  

<input type="hidden" id="dashboard_static" value="{{ url('/seller/dashboard/static') }}">
<input type="hidden" id="dashboard_perfomance" value="{{ url('/seller/dashboard/perfomance') }}">
<input type="hidden" id="deposit_perfomance" value="{{ url('/seller/dashboard/deposit/perfomance') }}">
<input type="hidden" id="dashboard_order_statics" value="{{ url('/seller/dashboard/order_statics') }}">
<input type="hidden" id="gif_url" value="{{ asset('uploads/loader.gif') }}">
<input type="hidden" id="month" value="{{ date('F') }}">
<input type="hidden" id="new_order_link" value="{{ route('seller.orders.new') }}">
<input type="hidden" id="save_token" value="{{ route('seller.save-token') }}">
<input type="hidden" id="currency_settings" value="{{ get_option('currency_data') }}">
@endsection
@push('script')
<script src="{{ asset('admin/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/chart.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/seller.js') }}"></script>


@endpush
