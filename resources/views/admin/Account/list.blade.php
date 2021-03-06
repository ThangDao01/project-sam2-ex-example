@extends('layout.admin-layout')
@section('title')
    Account
@endsection
@section('detail')

    <section class="wrapper">
        <div class="table-agile-info" style="min-height: 550px">
            <div class="panel panel-default">
                @if($list == null)
                    Null table  <i class="fa fa-frown-o"></i>
                @else()
                    <div class="panel-heading">
                        Basic table
                    </div>
                    <div>
                        <table class="table" ui-jq="footable" ui-options="{
                            &quot;paging&quot;: {
                            &quot;enabled&quot;: true
                                },
                            &quot;filtering&quot;: {
                            &quot;enabled&quot;: true
                            },
                            &quot;sorting&quot;: {
                            &quot;enabled&quot;: true
                            }}">
                            @if(Session::has('message'))
                                <p style="color: red" class=" alert alert-{{ Session::get('type-message') }}">{{ Session::get('message') }}</p>
                            @endif
                            <thead>
                            <tr>
                                <th>Tên user</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Age</th>
                                <th>Auth</th>
                                <th>Status</th>
                                <th>Manage</th>
                                <th>User</th>
                                <th>actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $user)
                                <form action="{{url('/assign-roles')}}"  method="POST">
                                    @csrf
                                    <tr>
                                        <td>{{ $user->LastName }}</td>
                                        <td>
                                            {{ $user->Email }}
                                            <input type="hidden" name="Email" value="{{ $user->Email }}">
                                            <input type="hidden" name="id" value="{{ $user->id }}">
                                        </td>
                                        <td>{{ $user->PhoneNumber }}</td>
                                        <td>{{ $user->Age}}</td>
                                        <td>
                                            <ul>
                                                @if($user->Role==1)
                                                    <li style="color: red">
                                                        Admin
                                                    </li>
                                                @elseif($user->Role==2)
                                                    <li style="color: #36c">
                                                        Manage
                                                    </li>
                                                @elseif($user->Role==3)
                                                    <li style="color: green">
                                                        User
                                                    </li>
                                                @endif
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                @if($user->Status==0)
                                                    <li style="color: red">
                                                        Deleted
                                                    </li>
                                                @elseif($user->Status==1)
                                                    <li style="color: #36c">
                                                        Active
                                                    </li>
                                                @elseif($user->Status==2)
                                                    <li style="color: green">
                                                        Online
                                                    </li>
                                                @endif
                                            </ul>
                                        </td>

                                        <td><input type="checkbox" name="author_role" {{$user->hasRole('author') ? 'checked' : ''}}></td>
                                        <td><input type="checkbox" name="user_role" {{$user->hasRole('user') ? 'checked' : ''}}></td>
                                        <td>
                                            <p><input type="submit" value="Assign roles" class="btn btn-sm btn-default"></p>
                                            <p><a style="margin:5px 0;" class="btn btn-sm btn-danger" href="{{url('/delete-user-roles/'.$user->id)}}">Xóa user</a></p>
                                            <p><a style="margin:5px 0;" class="btn btn-sm btn-success" href="{{url('/impersonate/'.$user->id)}}">Chuyển quyền</a></p>
                                        </td>
                                    </tr>
                                </form>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
            @endif
        </div>
    </section>
@endsection
