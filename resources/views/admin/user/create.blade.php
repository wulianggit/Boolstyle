@extends('layouts.admin')

@section('content')
<div class="clearfix"></div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<a href="{{ url('admin/user') }}" class="btn btn-info active" role="button">{{trans('label.user.list')}}</a>
				<h2 class="pull-right" style="margin-right:10px;">{{trans('label.user.add')}}</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">

				<form class="form-horizontal form-label-left" novalidate="" method="post" action="{{ url('admin/user') }}">
					{{csrf_field()}}

					<div class="item form-group {{$errors->has('name') ? 'bad' : ''}}">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">{{trans('label.user.name')}}： <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="name" class="form-control col-md-7 col-xs-12" name="name" placeholder="{{trans('label.user.name')}}" required="required" type="text" value="{{old('name')}}">
						</div>
						@if ($errors->has('name'))
						<div class="alert">{{$errors->first('name')}}</div>
						@endif
					</div>


					<div class="item form-group {{$errors->has('username') ? 'bad' : ''}}">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">{{trans('label.user.username')}} <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="username" name="username" placeholder="{{trans('label.user.username')}}" required="required" class="form-control col-md-7 col-xs-12" value="{{old('username')}}">
						</div>
						@if ($errors->has('username'))
						<div class="alert">{{$errors->first('username')}}</div>
						@endif
					</div>


                    <div class="item form-group {{$errors->has('password') ? 'bad' : ''}}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">{{trans('label.user.password')}} <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="password" id="password" name="password" placeholder="{{trans('label.user.password')}}" required="required" class="form-control col-md-7 col-xs-12" value="{{old('password')}}">
                        </div>
                        @if ($errors->has('password'))
                            <div class="alert">{{$errors->first('password')}}</div>
                        @endif
                    </div>


                    <div class="item form-group {{$errors->has('password_confirmation') ? 'bad' : ''}}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password_confirmation">{{trans('label.user.confirm_password')}} <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="{{trans('label.user.confirm_password')}}" required="required" class="form-control col-md-7 col-xs-12" value="{{old('password_confirmation')}}">
                        </div>
                        @if ($errors->has('password_confirmation'))
                            <div class="alert">{{$errors->first('password_confirmation')}}</div>
                        @endif
                    </div>


					<div class="item form-group {{$errors->has('email') ? 'bad' : ''}}">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">{{trans('label.user.email')}}<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="email" id="email" name="email" placeholder="{{trans('label.user.email')}}" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12" value="{{old('email')}}">
						</div>
						@if ($errors->has('email'))
						<div class="alert">{{$errors->first('email')}}</div>
						@endif
					</div>

                    <div class="item form-group {{$errors->has('role') ? 'bad' : ''}}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">
                            {{trans('label.role.name')}}
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-3 col-xs-12">
                            @if(!$roles->isEmpty())
                            <div class="md-checkbox-inline">
                                @foreach($roles as $key=>$role)
                                <div class="md-checkbox">
                                    <input type="checkbox" class="md-check" id="{{'role_'.$key}}" name="role[]" value="{{$role->id}}">
                                    <label for="{{'role_'.$key}}" class="tooltips" data-placement="top" data-original-title="{{$role->description}}">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span>{{$role->display_name}}
                                        (<small><a href="{{url('admin/role/'.$role->id)}}" data-toggle="modal" data-target="#draggable" class="red-mint">查看角色权限</a></small>)
                                    </label>
                                </div>
                                @endforeach
                            </div>
                            @endif
                        </div>
                        @if ($errors->has('role'))
                            <div class="alert">{{$errors->first('role')}}</div>
                        @endif
                    </div>

					@include('admin.common.globalButton')

				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="draggable" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('backend/vendors/validator/validator.js')}}"></script>
<script src="{{ asset('backend/js/common/validator.js') }}"></script>
<script type="text/javascript">
    $(function() {
        /*modal事件监听*/
        $(".modal").on("hidden.bs.modal", function() {
            //$(".modal-content").empty();
            $(this).removeData("bs.modal");
        });
    });
</script>
@endsection
