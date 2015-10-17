@extends('layouts.main2')

@section('content')
<nav id="top_navigation" class="text_nav">
    <div class="container">
        <ul id="text_nav_h" class="clearfix j_menu top_text_nav jMenu">
            <li><a href="/deskpad">Home</a></li>
            <li class="active"><a href="/deskpad/partners">Student</a></li>
        </ul>
    </div>
</nav>
<section class="container main_section">
@if(Session::has('message'))
<div class="alert alert-success">
{{Session::get('message')}}
</div>
@endif
<h5>This is the Partners Tab. Click on the Partner ID to view details</h5>
    <div id="myTable">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>First Grading</th>
                    <th>Second Grading</th>
                    <th>Third Grading</th>
                    <th>Fourth Grading</th>
                </tr>
            </thead>
            <tbody>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                <tr>
                    <td>
                        <div id="page-selection" class="pagination" style="position:fixed; bottom: 30px;right: 350px; width: 700px;"></div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@include('deskpad.modalfunctions.createpartner')

@endsection
