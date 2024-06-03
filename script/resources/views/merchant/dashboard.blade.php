@extends('layouts.backend.app')

@section('title','Dashboard')

@section('content')
<section class="section">
	<div class="section-header">
		<h1>{{ __('Dashboard') }}</h1>
	</div>    
</section>

<div class="row">

</div>
<input type="hidden" id="base_url" value="{{ url('/') }}">
@endsection

@push('script')
<script src="{{ asset('admin/js/merchant.js') }}"></script>
<script src="{{ asset('admin/js/merchantdashboard.js') }}"></script>
@endpush

