@extends('userlayout')
@section('content')
<div class="container-fluid mt--6">
  <div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <div class="card bg-white">
        <div class="card-body">
          <div class="align-item-sm-center flex-sm-nowrap text-center">
            <div class="">
              <h4 class="mb-0 text-primary">
              {{__('PLEASE SEND EXACTLY')}} <span class="text-dark"> {{ $bcoin }}</span> {{__('ETH')}}
              </h4>              
              <h4 class="mb-0 text-primary">
              {{__('TO')}} <span class="text-dark"> {{ $wallet}}</span>
              </h4>
              {!! $qrurl !!}
              <br><br>
              <h4 class="text-white" >{{__('SCAN TO SEND')}}</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection