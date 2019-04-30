
@extends('admin.layout.includes.header')
<!-- #TABLE-->
<div class="container-fluid">
    <div class="panel-wrapper">
        <div class="panel">
            <div class="responsive-nav">
                <table class="table">
                    <thead class="thead-inverse">
                    <tr>
                        <th>Categories name</th>
                        <th>Descriptions</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>{{$category->Descriptions}}</td>


                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<!-- END PAGE CONTENT-->
