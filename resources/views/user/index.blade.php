@extends('userlayout')

@section('content')
<div class="container-fluid mt--6">
  <div class="content-wrapper">
  <div class="row">
    <div class="col-lg-4">
      @if($set->upgrade_status==1)
              @if($user->upgrade==0)
              <div class="card" style="background-color:{{$set->s_c}};">
                <!-- Card header -->
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-8">
                      <!-- Title -->
                      <h4 class="mb-0 text-white">Start Receiving Bonuses</h4>
                    </div>
                  </div>
                  <p class="card-text text-sm mb-4 text-white">You can now receive certain bonus of total profit after investment ends.</p>
                  <a href="#" data-toggle="modal" data-target="#modal-formx" class="btn btn-block btn-white"><i class="fad fa-arrow-up"></i> Upgrade Account</a>
                  <div class="modal fade" id="modal-formx" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="text-left mt-2 mb-3 text-dark text-sm">Don't let your money sit there, upgrade your account & start receiving bonuses</div> 
                          <div class="text-left mt-2 mb-3 text-dark text-sm">Upgrade fee costs {{$currency->symbol.$set->upgrade_fee}}</div> 
                          <div class="text-left">
                            <a href="{{route('user.upgrade')}}" class="btn btn-success btn-block">Upgrade</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
              @endif 
            @endif 
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <div class="row align-items-center">
              <div class="col-8">
                <!-- Surtitle -->
                <h5 class="surtitle" style="color: {{$set->s_c}};"><i class="fad fa-sync"></i> {{__('Recent Investments')}}</h5>
                <!-- Title -->
                <h5 class="h3 mb-0 text-dark">{{__('Progress track')}}</h5>
              </div>
            </div>
          </div>
          <!-- Card body -->
          <div class="card-body">
            <!-- List group -->
            <ul class="list-group list-group-flush list my--3">
              @foreach($profit as $k=>$val)
              <li class="list-group-item px-0">
                <div class="row align-items-center">
                  <div class="col">
                  @php $pp=$val->compound*$val->amount/100; @endphp

                  <p class="text-sm text-gray mb-0 text-uppercase"><span class="text-sm text-dark mb-2 text-uppercase">{{__('TID')}}:</span> {{$val->trx}}</p>
                  <p class="text-sm text-gray mb-0 text-uppercase"><span class="text-sm text-dark mb-2 text-uppercase">{{__('PLAN')}}:</span> {{isset($val->plan->name)}} <i><small> [{{$val->duration}}s ]</small></i> </p>
                  <p class="text-sm text-gray mb-2 text-uppercase"><span class="text-sm text-dark mb-2 text-uppercase">{{__('INVESTED')}}:</span> {{round($val->amount, 1).$currency->name}}</p>
                  <h4 class="mb-1 h2" style="color: {{$set->s_c}};"><span class="text-sm text-dark mb-2 text-uppercase">{{__('ROI')}}:</span> {{round($val->profit, 1).$currency->name}}</h4>

                    {{-- <span class="card-text text-sm text-dark">#{{$val->trx}} @ {{$val->plan->name}} [{{number_format($val->profit)}}/{{number_format($pp).$currency->name}}]</span> --}}
                    <div class="progress progress-xs mb-0">
                      <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{($val->profit*100)/$pp}}%;background-color:{{$set->s_c}};"></div>
                    </div>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>  
  
    <div class="col-lg-8">
      <div class="row">
        <div class="col-lg-12 mb-3">
          <div class="card">
          <div class="card-body">
          <h4 class="mb-0"><i class="fad fa-undo-alt"></i> {{__('Earning log')}}</h5>
          @if(count($history)>0)
          <canvas id="myChart" width="400" height="180"></canvas>
          @else
            <div class="text-center mb-5 mt-8">
              <div class="mb-3">
                <img src="{{url('/')}}/asset/images/empty.svg">
              </div>
              <h3 class="text-dark">No Earning History</h3>
              <p class="text-dark text-sm card-text">We couldn't find any earning log to this account</p>
            </div>
          @endif
        </div>
        </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h4 class="card-title mb-0">{{__('Available Profit')}}</h4>
                      <span class="mb-0 text-dark">{{$currency->symbol.number_format($user->profit)}}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>             
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h4 class="card-title mb-0">{{__('Total Profit')}}</h4>
                      <span class="mb-0 text-dark">{{$currency->symbol.number_format($user->total_profit)}}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>           
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h4 class="card-title mb-0">{{__('Referral')}}</h4>
                      <span class="mb-0 text-dark">{{$currency->symbol.number_format($user->ref_bonus)}}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>           
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h4 class="card-title mb-0">{{__('Total Bonus')}}</h4>
                      <span class="mb-0 text-dark">{{$currency->symbol.number_format($user->trade_bonus)}}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-auto">
                  <div class="icon icon-shape rounded-circle" style="background-color:{{$set->m_c}};">
                    <i class="fad fa-unlock" style="color:{{$set->s_c}};"></i>
                  </div>
                </div>
                <div class="col">
                  <h3 class="mb-0 h4">{{__('Two Factor Authentication')}}</h3>
                  
                    @if($user->fa_status==0)
                    <span class="badge badge-pill badge-danger">
                    {{__('Disabled')}}
                    </span>
                    @else
                    <span class="badge badge-pill badge-success">
                    {{__('Active')}}
                    </span>
                    @endif
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-auto">
                  <div class="icon icon-shape rounded-circle" style="background-color:{{$set->m_c}};">
                    <i class="fad fa-calendar" style="color:{{$set->s_c}};"></i>
                  </div>
                </div>
                <div class="col">
                  <h3 class="mb-0 h4">{{__('Next Settlement')}}</h3>
                  <ul class="list list-unstyled mb-0">
                    <li><span class="text-default text-sm">{{date("Y/m/d", strtotime($set->next_settlement))}}</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop