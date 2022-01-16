@extends('master')

@section('content')
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">{{__('New Wallet')}}</h3>
          </div>
          <div class="card-body">
            <p class="text-danger"></p>
            <form action="{{route('admin.deposit.manual.store')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">{{__('Coin Name')}}</label>
                    <div class="col-lg-10">
                        <input type="text" name="name" class="form-control" style="border-color: {{$set->s_c}};" reqiured>
                    </div>
                    @if ($errors->has('name'))
                        <div class="error">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">{{__('Coin Icon')}}:</label>
                    <div class="col-lg-10">
                        <input type="file" class="custom-file-input" id="customFileLang" name="image" lang="en">
                        <label class="custom-file-label" for="customFileLang" style="border-color: {{$set->s_c}};">{{__('Choose Media')}}</label>
                    </div>
                </div>           
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">{{__('Wallet Name')}}</label>
                    <div class="col-lg-10">
                        <input type="text" name="wallet" class="form-control" style="border-color: {{$set->s_c}};" reqiured>
                    </div>
                    @if ($errors->has('wallet'))
                        <div class="error">{{ $errors->first('wallet') }}</div>
                    @endif
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">{{__('Wallet Id') }}</label>
                    <div class="col-lg-10">
                        <input type="text" name="wallet_id" class="form-control" style="border-color: {{$set->s_c}};" reqiured>
                    </div>
                    @if ($errors->has('wallet_id'))
                        <div class="error">{{ $errors->first('wallet_id') }}</div>
                    @endif
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">{{__('Minimum Amount ($)') }}</label>
                    <div class="col-lg-10">
                        <input type="text" name="minamo" class="form-control" style="border-color: {{$set->s_c}};" reqiured>
                    </div>
                    @if ($errors->has('minamo'))
                        <div class="error">{{ $errors->first('minamo') }}</div>
                    @endif
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">{{__('Maximum Amount ($)') }}</label>
                    <div class="col-lg-10">
                        <input type="text" name="maxamo" class="form-control" style="border-color: {{$set->s_c}};" reqiured>
                    </div>
                    @if ($errors->has('maxamo'))
                        <div class="error">{{ $errors->first('maxamo') }}</div>
                    @endif
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">{{__('Charge ($)') }}</label>
                    <div class="col-lg-10">
                        <input type="text" name="charge" class="form-control" style="border-color: {{$set->s_c}};" reqiured>
                    </div>
                    @if ($errors->has('charge'))
                        <div class="error">{{ $errors->first('charge') }}</div>
                    @endif
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-success btn-sm">{{__('Save')}}</button>
                </div>
            </form>
        </div>
    </div> 
</div> 

@stop