
@extends('userlayout')

@section('content')
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-4">
        <div class="card" >
          <div class="card-body text-center">
            <div class="">
              <div>
                <h3 class="card-title mb-3 text-dark">{{__('Wallet Details')}}</h3>
                <ul class="list list-unstyled mb-0 card-text text-sm text-dark">
                  <li>{{__('Coin')}}: {{$gate->name}}</li>
                  <li>{{__('Wallet')}}: {{$gate->wallet}}</li>
                  <li>{{__('Wallet ID')}}: {{$gate->wallet_id}} <button type="button" class="btn-icon-clipboard" data-clipboard-text="{{$gate->wallet_id}}" title="Copy"> {{__('Copy')}}</button></li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card" >
          <div class="card-header">
            <h3 class="mb-0 text-dark">{{__('Manual Deposit')}}</h3>
          </div>
          <div class="card-body">
          <form method="post" action="{{route('manual_transfersubmit')}}" enctype="multipart/form-data">
          @csrf
           <div class="form-group row">
              <label class="col-form-label col-lg-3">{{__('Transfer Amount')}}</label>
              <div class="col-lg-9">
                <div class="input-group">
                  <span class="input-group-prepend">
                    <span class="input-group-text">{{$currency->symbol}}</span>
                  </span>
                <input type="number" step="any" name="amount" max-length="10" class="form-control">
                <input type="hidden" name="gateway" value="{{$gate->id}}">  

                  </div>
                </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-lg-3">{{__('Transfer Notes')}}</label>
              <div class="col-lg-9">
                  <textarea type="text" class="form-control" rows="5" placeholder="{{__('Transaction Details')}}" name="details" required></textarea>
              </div>
            </div> 
            <div class="form-group row">
              <label class="col-form-label col-lg-3">{{__('Proof of Payment')}}</label>
              <div class="col-lg-9">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFileLang" name="image" lang="en">
                  <label class="custom-file-label" for="customFileLang" style="border-color: {{$set->s_c}};">{{__('Choose Screenshot')}}</label>
                </div>
              </div>
            </div> 
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
            <div class="text-right">
                <button type="submit" class="btn btn-success btn-sm">{{__('Proceed')}}</button>
            </div>
                </div>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
    </div>
@stop