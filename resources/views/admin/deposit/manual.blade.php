@extends('master')

@section('content')
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                <div class="card-body">
                <a href="{{route('admin.deposit.manual.create')}}" class="btn btn-sm btn-neutral"><i class="fa fa-plus"></i> {{__('Add Wallet')}}</a>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{__('Payment gateways')}}</h3>
                    </div>
                    <div class="table-responsive py-4">
                        <table class="table table-flush" id="datatable-buttons">
                            <thead>
                                <tr>
                                    <th>{{__('S/N')}}</th>
                                    <th>{{__('Coin')}}</th>
                                    <th>{{__('Wallet')}}</th>
                                    <th>{{__('Wallet Id')}}</th>
                                    <th>{{__('Status')}}</th>
                                    <th>{{__('Updated')}}</th>
                                    <th class="text-center">{{__('Action')}}</th>    
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($gateway as $k=>$val)
                                <tr>
                                    <td>{{++$k}}.</td>
                                    <td>{{$val->name}}</td>
                                    <td>{{$val->wallet}}</td>
                                    <td>{{$val->wallet_id}}</td>
                                    <td>
                                        @if($val->status==0)
                                            <span class="badge badge-danger">{{__('Disabled')}}</span>
                                        @elseif($val->status==1)
                                            <span class="badge badge-success">{{__('Active')}}</span> 
                                        @endif
                                    </td>  
                                    <td>{{date("Y/m/d h:i:A", strtotime($val->updated_at))}}</td>
                                    <td class="text-center">
                                    <a data-toggle="modal" data-target="#edit{{$val->id}}" class="" >
                                        <i class="icon-pencil7 mr-2"></i>{{__('Edit')}}
                                    </a>
                                    </td>                   
                                </tr>
                                <div id="edit{{$val->id}}" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{$val->main_name}}</h5>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <form action="{{route('admin.deposit.manual.update')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <label>{{__('Name of Coin')}}</label>
                                                                <input value="{{$val->id}}"type="hidden" name="id">
                                                                <input type="text" value="{{$val->name}}" name="name" class="form-control" style="border-color: {{$set->s_c}};">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label>{{__('Coin Icon')}}:</label>
                                                                <div class="col-lg-10">
                                                                    <input type="file" class="custom-file-input" id="customFileLang" name="image" lang="en">
                                                                    <label class="custom-file-label" for="customFileLang" style="border-color: {{$set->s_c}};">{{__('Choose Media')}}</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <label>{{__('Name of Wallet')}}</label>
                                                                <input type="text" value="{{$val->wallet}}" name="wallet" class="form-control" style="border-color: {{$set->s_c}};">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label>{{__('Wallet ID')}}</label>
                                                                <input type="text" value="{{$val->wallet_id}}" name="wallet_id" class="form-control" style="border-color: {{$set->s_c}};">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <label>{{__('Minimum Amount')}}</label>
                                                                <input type="text" value="{{$val->minamo}}" name="minamo" class="form-control" style="border-color: {{$set->s_c}};">
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <label>{{__('Maximum Amount')}}</label>
                                                                <input type="text" value="{{$val->maxamo}}" name="maxamo" class="form-control" style="border-color: {{$set->s_c}};">
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <label>{{__('Charge')}}</label>
                                                                <input type="text" value="{{$val->charge}}" name="charge" class="form-control" style="border-color: {{$set->s_c}};">
                                                            </div>
                                                        </div>
                                                    </div>

                                                        <div class="form-group">
                                                            <label>{{__('Status')}}</label>
                                                            <select class="form-control select" name="status">
                                                                <option value="1" 
                                                                    @if($val->status==1)
                                                                        selected
                                                                    @endif
                                                                    >{{__('Active')}}
                                                                </option>
                                                                <option value="0"  
                                                                    @if($val->status==0)
                                                                        selected
                                                                    @endif
                                                                    >{{__('Deactive')}}
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-neutral btn-sm" data-dismiss="modal">{{__('Close')}}</button>
                                                    <button type="submit" class="btn btn-success btn-sm">{{__('Save changes')}}</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach               
                            </tbody>                    
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{__('Manual transfer Log')}}</h3>
                    </div>
                    <div class="table-responsive py-4">
                        <table class="table table-flush" id="datatable-buttons">
                            <thead>
                                <tr>
                                    <th>{{__('S/N')}}</th>
                                    <th>{{__('Name')}}</th>
                                    <th>{{__('Amount')}}</th>                                                                       
                                    <th>{{__('Coin')}}</th>                                                                       
                                    <th>{{__('Wallet')}}</th>                                                                       
                                    <th>{{__('Status')}}</th>
                                    <th>{{__('Created')}}</th>
                                    <th>{{__('Updated')}}</th>
                                    <th class="text-center">{{__('Action')}}</th>    
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($deposit as $k=>$val)
                                <tr>
                                    <td>{{++$k}}.</td>
                                    <td><a href="{{url('admin/manage-user')}}/{{$val->user['id']}}">{{$val->user['first_name'].' '.$val->user['last_name']}}</a></td>
                                    <td>{{$currency->symbol.number_format($val->amount)}}</td>
                                    <td>{{$val->coin}}</td>
                                    <td>{{$val->wallet}}</td>
                                    <td>
                                        @if($val->status==0)
                                            <span class="badge badge-danger">{{__('Pending')}}</span>
                                        @elseif($val->status==1)
                                            <span class="badge badge-success">{{__('Approved')}}</span>
                                        @elseif($val->status==2)
                                            <span class="badge badge-info">{{__('Declined')}}</span> 
                                        @endif
                                    </td>  
                                    <td>{{date("Y/m/d h:i:A", strtotime($val->created_at))}}</td>
                                    <td>{{date("Y/m/d h:i:A", strtotime($val->updated_at))}}</td>
                                    <td class="text-center">
                                        <div class="text-right">
                                            <div class="dropdown">
                                                <a class="text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a data-toggle="modal" data-target="#screenshot{{$val->id}}" href="" class="dropdown-item">{{__('Screenshot')}}</a>
                                                    <a data-toggle="modal" data-target="#details{{$val->id}}" href="" class="dropdown-item">{{__('Transfer details')}}</a>
                                                    @if($val->status==0)
                                                        <a class='dropdown-item' href="{{route('deposit.declinemt', ['id' => $val->id])}}">{{__('Decline')}}</a>
                                                        <a class='dropdown-item' href="{{route('deposit.approvemt', ['id' => $val->id])}}">{{__('Approve')}}</a>
                                                    @endif
                                                    <a data-toggle="modal" data-target="#delete{{$val->id}}" href="" class="dropdown-item">{{__('Delete')}}</a>
                                                </div>
                                            </div>
                                        </div> 
                                    </td>                  
                                </tr>
                                <div class="modal fade" id="delete{{$val->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                    <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <div class="card bg-white border-0 mb-0">
                                                    <div class="card-header">
                                                        <h3 class="mb-0">{{__('Are you sure you want to delete this?')}}</h3>
                                                    </div>
                                                    <div class="card-body px-lg-5 py-lg-5 text-right">
                                                        <button type="button" class="btn btn-neutral btn-sm" data-dismiss="modal">{{__('Close')}}</button>
                                                        <a  href="{{route('manualtransfer.delete', ['id' => $val->id])}}" class="btn btn-danger btn-sm">{{__('Proceed')}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="details{{$val->id}}" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">   
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <p class="text-sm text-dark">{{$val->details}}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-neutral btn-sm" data-dismiss="modal">{{__('Close')}}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="modal fade" id="screenshot{{$val->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                    <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                                        <div class="castro-fade">
                                            <div class="modal-body p-0" >
                                                <div class=" border-0 mb-0 text-center">
                                                    <div class="px-lg-5 py-lg-5">
                                                        <img src="{{url('/')}}/asset/screenshot/{{$val->image}}" class="mb-3 user-profile">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach               
                            </tbody>                    
                        </table>
                    </div>
                </div>
                <div id="card">
                    <span><button></button></span>
                </div>
            </div>
        </div>
    </div>
</div>
@stop