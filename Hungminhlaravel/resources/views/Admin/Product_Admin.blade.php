@extends("Admin.Admin")
@section('Admin.Content_Admin')
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    EDITABLE TABLE
                    <small>Taken from <a href="https://github.com/mindmup/editable-table" taget="_blank">github.com/mindmup/editable-table</a>
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EXAMPLE
                                <small>You can edit any columns except header/footer</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <table id="mainTable" class="table table-striped" style="cursor: pointer;">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>name</th>
                                        <th>type_product</th>
                                        <th>description</th>

                                        <th>unit_price</th>
                                        <th>promotion_price</th>
										<th>image</th>
										<th>unit</th>
										<th>created_at</th>
										<th>updated_at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($product as $pro )
                                    <tr>
                                        <td tabindex="1">{{$pro->id}}</td>
                                        <td tabindex="1">{{$pro->name}}</td>
                                        <td tabindex="1">{{$pro->type_name}}</td>
                                        <td tabindex="1">{{$pro->description}}</td>
                                        <td tabindex="1">{{$pro->unit_price}}</td>
                                        <td tabindex="1">{{$pro->promotion_price}}</td>
                                        <td tabindex="1">{{$pro->image}}</td>
                                        <td tabindex="1">{{$pro->unit}}</td>
                                        <td tabindex="1">{{$pro->created_at}}</td>
                                        <td tabindex="1">{{$pro->updated_at}}</td>

                                    </tr>
                                @endforeach

                                </tbody>
                                
                            </table>
                            <div>{{ $product->links() }}</div>
                        <input style="position: absolute; display: none;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection