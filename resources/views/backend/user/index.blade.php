@extends('layouts.backend')

@section('title', '用户列表')

@section('header')
    <h1>
        用户列表
    </h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            @include('backend.alert.success')
            <div class="box box-solid">
                <!-- /.box-header -->
                <div class="box-header">
                    <div class="pull-right">
                        <div class="btn-group">

                        </div>
                    </div><!-- pull-right -->
                </div>
                <div class="box-body table-responsive no-padding ">
                    <table class="table table-hover">
                        <tr>
                            <th>序号</th>
                            <th>头像</th>
                            <th>名字</th>
                            <th>邮箱</th>
                            <th>操作</th>
                        </tr>
                        @if ($user)
                            <?php $line = 1  ?>

                                <tr>
                                    <td>{{ $line }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/avatar') }}/{{ $user->user_pic }}" class="img-circle" style="width:30px;height:auto;">
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a href='{{ route("backend.user.edit", ["id" => $user->id]) }}' class='btn btn-info btn-xs'>
                                            <i class="fa fa-pencil"></i> 修改</a>
                                    </td>
                                </tr>
                                <?php $line++ ?>

                        @endif
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $(function() {
            $(".user-delete").click(function(){
                var url = $(this).attr('data-href');
                Moell.ajax.delete(url);
            });
        });
    </script>
@endsection