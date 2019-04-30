
@extends('admin.layout.includes.header');
<body>
<div class="container">
    <h3>Create new Category</h3>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <form method="POST" action="{{route ('store.category')}}" accept-charset="UTF-8" data-parsley-validate=""
                  enctype="multipart/form-data"><input name="name" type="hidden"
                                                       value="HtdQPe4dhyZpO3OqhWKu6lF8We9Ocs6QoxnjtNHS">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" required="" minlength="5" name="name" type="text" id="name">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input class="form-control" name="Descriptions" type="text" id="description">
                </div>
                <input class="btn btn-default" type="submit" value="Create">
            </form>

        </div>
    </div>
</div>
</body>
</html>