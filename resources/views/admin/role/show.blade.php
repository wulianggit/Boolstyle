<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title">{{trans('label.role.show')}}</h4>
        </div>
        <div class="modal-body">
            <div class="table-scrollable">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="col-md-2 text-center">{{trans('label.role.module')}}</th>
                        <th class="col-md-8 text-center">{{trans('label.role.permission')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if($permissions['permission'])
                            @foreach($permissions['permission'] as $model => $permission)
                                <tr>
                                    <td class="text-center" style="vertical-align: middle;"> {{trans('label.model.'.$model)}} </td>
                                    <td>
                                        @foreach($permission as $val)
                                            <div class="col-md-4">
                                                <label>{{$val['displayName']}}</label>
                                            </div>
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn green btn-outline" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
