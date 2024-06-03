@extends('layouts.backend.app')

@section('title','Coupons')

@section('head')
@include('layouts.backend.partials.headersection',['title'=>'Coupons','button_name'=> 'Create New','button_link'=> url('seller/coupon/create')])
@endsection

@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="Search">{{ __('Search') }}</label>
                        <form method="get">
                            <div class="row">
                                <input name="src" type="text" value="{{ $request->src ?? '' }}" class="form-control col-lg-4 ml-2" placeholder="search with coupon code...">
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover text-center table-borderless">
                            <thead>
                                <tr>
                                     <th><i class="fa fa-image"></i></th>
                                    <th>{{ __('Code') }}</th>
                                    <th>{{ __('Amount') }}</th>
                                    <th>{{ __('Start From') }}</th>
                                    <th>{{ __('Will Expire') }}</th>
                                    <th>{{ __('Total Used') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $row)
                                <tr>
                                    <td><img src="{{ asset($row->avatar) }}" alt="" height="50"></td>
                                    <td>{{ $row->code }}</td>
                                    <td>{{ $row->value }}</td>
                                    <td>{{ $row->start_from }}</td>
                                    <td>{{ $row->will_expire }}</td>
                                    <td>change it here</td>
                                    <td><span class="badge badge-{{ $row->status == 1 ? 'success' : 'warning' }}">{{ $row->status == 1 ? 'Active' : 'Disable' }}</span></td>
                                    <td class="">
                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ __('Action') }}
                                        </button>
                                        <div class="dropdown-menu" x-placement="bottom-start">
                                        
                                            <a class="dropdown-item has-icon text-warning" href="{{ route('seller.coupon.edit', $row->id) }}"><i class="fa fa-edit"></i>{{ __('Edit') }}</a>


                                            <a class="dropdown-item has-icon delete-confirm text-danger" href="javascript:void(0)" data-id="{{$row->id}}"><i class="fa fa-trash"></i>{{ __('Delete') }}</a>
                                            <!-- Delete Form -->
                                            <form class="d-none" id="delete_form_{{ $row->id }}" action="{{ route('seller.coupon.destroy', $row->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        </form>
                                        </div>
                                    </td>
                                </tr>      
                                @endforeach
                            </tbody>
                        </table>
                     {{ $posts->links('vendor.pagination.bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection

