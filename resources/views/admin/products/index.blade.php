
@extends('admin.layout.includes.header')
    <!-- #TABLE-->
    <div class="container-fluid">
        <div class="panel-wrapper">
            <div class="panel">
                <div class="responsive-nav">
                    <table class="table">
                        <thead class="thead-inverse">
                        <tr>
                            <th>image</th>
                            <th>Product name</th>
                            <th>Descriptions</th>
                            <th>Price</th>
                            <th>Size</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td><img src="{{asset('images/products').'/'.$product->image}}" alt="{{$product->name}}" width="70px" height="70"></td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->size}}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->
