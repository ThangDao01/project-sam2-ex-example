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
                        <thead>
                        <tr>
                            <th data-breakpoints="xs">ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th data-breakpoints="xs sm" data-title="DOB">Email</th>

                            <th data-breakpoints="xs">Age</th>
                            <th  >Role</th>
                            <th data-breakpoints="xs sm md" data-title="DOB">Status</th>
                            <th data-breakpoints="xs sm md" data-title="DOB">Create At</th>
                            <th data-breakpoints="xs sm md" data-title="DOB">Update At</th>
                            <th data-breakpoints="xs">actions</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $account)
                        <tr data-expanded="true">
                            <td>{{$account->id}}</td>
                            <td>{{$account->FirstName}}</td>
                            <td>{{$account->LastName}}</td>
                            <td>{{$account->Email}}</td>
                            <td>{{$account->Age}}</td>
                            <td>{{$account->Role}}</td>
                            <td>{{$account->create_At}}</td>
                            <td>{{$account->update_At}}</td>

                        </tr>
                        @endforeach
                        <tr data-expanded="true">
                            <td>1</td>
                            <td>Dennise</td>
                            <td>Fuhrman</td>
                            <td>High School History Teacher</td>
                            <td>July 25th 1960</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="actions">
                                <a href="" class="on-default edit-row">
                                        <i style="font-size: 20px" class="fa fa-check-square text-success text-active"></i></a>
                                <a href="" class="on-default remove-row" onclick="return confirm('Chắc xoá danh muc này?')">
                                    <i style="font-size: 20px" class="fa fa-minus-square-o text-danger text"></i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>
                @endif

            </div>
        </div>
    </section>
@endsection
