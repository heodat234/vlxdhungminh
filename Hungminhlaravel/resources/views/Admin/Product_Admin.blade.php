
        
            @extends("Admin.Admin")
            @section('Admin.Content_Admin')
            
        <section class="content">
            <div class="container-fluid">
                <div class="row">            
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                    PRODUCT
                                    {{-- <small>You can edit any columns except header/footer</small> --}}
                            </h2>
                        </div>
                        <div class="body"> 
                        <div>
                            <button id="addRow" class="btn btn-primary glyphicon glyphicon-plus-sign" style="height: 60px; width: 60px; border-radius: 10px"></button>
                        </div> 
                        <div style="float: right;">
                            <input type="text" id="search" placeholder="Search" style="width: 200px; height: 50px"></input>
                            <br><br>
                        </div>
                        <br>
                            <table  class="table table-striped table-nonfluid" align="center" id="product_table">
                            @if($type==0)
                                <thead>
                           {{-- <th><input type="checkbox" id="checkall" /></th> --}}
                                    <th style="width: 100px;">id</th>
                                        <th>name</th>
                                        <th>type_product</th>            
                                        <th>description</th>
                                        <th>unit_price</th>
                                        <th>promotion_price</th>
                                        <th>image</th>
                                        <th>unit</th>
                                        <th>created_at</th>
                                        <th>updated_at</th>
                                        <th>Modify</th>
                                        <th>Delete</th>
                                </thead>
                                <tbody>
                                    @foreach($product as $pro )
                                    <tr id="row{{$pro->id}}">
                                        <td id="id{{$pro->id}}">{{$pro->id}}</td>
                                        <td id="name{{$pro->id}}">{{$pro->name}}</td>
                                        <td id="type_name{{$pro->id}}">{{$pro->type_name}}</td>
                                        <td id="description{{$pro->id}}">{{$pro->description}}</td>
                                        <td id="unit_price{{$pro->id}}">{{$pro->unit_price}}</td>
                                        <td id="pro_price{{$pro->id}}">{{$pro->promotion_price}}</td>
                                        <td id="image{{$pro->id}}">{{$pro->image}}</td>
                                        <td id="unit{{$pro->id}}">{{$pro->unit}}</td>
                                        <td>{{$pro->created_at}}</td>
                                        <td id="updated_at{{ $pro->id }}">{{$pro->updated_at}}</td>
                                            <td>
                                                <button class="btn btn-info btn-lg glyphicon glyphicon-hand-right" style="border-radius: 10px;" id="edit_button{{ $pro->id  }}" onclick="edit_row('{{ $pro->id  }}');"> Edit</button>
                                                <button class=" save_button btn btn-success btn-lg glyphicon glyphicon-save" style="border-radius: 10px;" id="save_button{{ $pro->id  }}" onclick="save_row('{{ $pro->id  }}');"> Save</button>
                                            </td>
                                            <td>
                                                <button class="btn btn-warning btn-lg glyphicon glyphicon-trash" style="border-radius: 10px" id="delete_button{{ $pro->id  }}" onclick="delete_row('{{ $pro->id}}');"> Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                        <tr id="new_row">
                                            <form>
                                                <td><input type="text" disabled=""></td>
                                            <td><input type="text" id="new_name" required=""></td>
                                            <td>

                                               <select class="selectpicker" id="new_type">
                                                @foreach($type_product as $type)
                                                    <option value="{{ $type->id }}" >{{ $type->name }}</option>
                                                @endforeach
                                                {{-- <input type="text" id="new_type"></td> --}}
                                            </select> 
                                            </td>
                                            <td><input type="text" id="new_description" required=""></td>
                                            <td><input type="text" id="new_unit_price" required=""></td>
                                            <td><input type="text" id="new_pro_price" required=""></td>
                                            <td><input type="text" id="new_image" required=""></td>
                                            <td><input type="text" id="new_unit" required=""></td>
                                            <td><input type="text" disabled=""></td>
                                            <td><input type="text" disabled=""></td>
                                            <td><button class="btn btn-info btn-lg glyphicon glyphicon-floppy-save" style="border-radius: 10px;" onclick="insert_row();"> Insert</button></td> 
                                            </form>
                                        </tr>
                                </tbody>
                            @else
                                <thead>
                           {{-- <th><input type="checkbox" id="checkall" /></th> --}}
                                    <th style="width: 100px;">id</th>
                                        <th>name</th>
                                        {{-- <th>type_product</th>             --}}
                                        <th>description</th>
                                        <th>unit_price</th>
                                        <th>promotion_price</th>
                                        <th>image</th>
                                        <th>unit</th>
                                        <th>created_at</th>
                                        <th>updated_at</th>
                                        <th>Modify</th>
                                        <th>Delete</th>
                                </thead>
                                <tbody>
                                    @foreach($product as $pro )
                                    <tr id="row{{$pro->id}}">
                                        <td id="id{{$pro->id}}">{{$pro->id}}</td>
                                        <td id="name{{$pro->id}}">{{$pro->name}}</td>
                                        {{-- <td id="type_name{{$pro->id}}">{{$pro->id_type}}</td> --}}
                                        <td id="description{{$pro->id}}">{{$pro->description}}</td>
                                        <td id="unit_price{{$pro->id}}">{{$pro->unit_price}}</td>
                                        <td id="pro_price{{$pro->id}}">{{$pro->promotion_price}}</td>
                                        <td id="image{{$pro->id}}">{{$pro->image}}</td>
                                        <td id="unit{{$pro->id}}">{{$pro->unit}}</td>
                                        <td>{{$pro->created_at}}</td>
                                        <td id="updated_at{{ $pro->id }}">{{$pro->updated_at}}</td>
                                            <td>
                                                <button class="btn btn-info btn-lg glyphicon glyphicon-hand-right" style="border-radius: 10px;" id="edit_button{{ $pro->id  }}" onclick="edit_row('{{ $pro->id  }}');"> Edit</button>
                                                <button class=" save_button btn btn-success btn-lg glyphicon glyphicon-save" style="border-radius: 10px;" id="save_button{{ $pro->id  }}" onclick="save_row('{{ $pro->id  }}');"> Save</button>
                                            </td>
                                            <td>
                                                <button class="btn btn-warning btn-lg glyphicon glyphicon-trash" style="border-radius: 10px" id="delete_button{{ $pro->id  }}" onclick="delete_row('{{ $pro->id}}');"> Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                        <tr id="new_row">
                                                <td><input type="text" disabled=""></td>
                                            <td><input type="text" id="new_name" required=""></td>
                                            {{-- <td><input type="text" id="new_type"></td> --}}
                                            <td><input type="text" id="new_description" required=""></td>
                                            <td><input type="text" id="new_unit_price" required=""></td>
                                            <td><input type="text" id="new_pro_price" required=""></td>
                                            <td><input type="text" id="new_image" required=""></td>
                                            <td><input type="text" id="new_unit" required=""></td>
                                            <td><input type="text" disabled=""></td>
                                            <td><input type="text" disabled=""></td>
                                            <td><input  type ="button" class="btn btn-info btn-lg glyphicon glyphicon-floppy-save" style="border-radius: 10px;" value="Insert" onclick="insert_row();"></td> 
                                            
                                            
                                        </tr>
                                </tbody>
                            @endif
                            </table>
                            <div>{{ $product->links() }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <script type="text/javascript">
            $("#search").on("keyup", function() {
                var value = $(this).val();

                $("table tr").each(function(index) {
                    if (index !== 0) {

                        $row = $(this);

                        var id = $row.find("td:nth-child(2)").text();

                        if (id.indexOf(value) !== 0) {
                            $row.hide();
                            
                        }
                        else {
                            $row.show();
                            $('#new_row').hide();
                        }
                    }
                });
            });

            $('#new_row').hide();
            $('.save_button').hide();
            $('#addRow').click(function() {
                $('#new_row').show();
            });
            function delete_row(idUser)
            {
                ssi_modal.confirm({
                content: 'Are you sure you want to exit?',
                okBtn: {
                className:'btn btn-primary'
                },
                cancelBtn:{
                className:'btn btn-danger'
                }
                },function (result) {
                    if(result)
                    {
                        var route="{{route('Delete_Product','id')}}";
                        route=route.replace('id',idUser);
                        $.ajax({
                        url:route,
                        type:'get',
                        data:null,
                        success:function() {  
                             $('#row'+idUser).hide();
                            alert('Xóa thành công');
                            
                        }
                        });
                        
                        
                    }
                    else
                        ssi_modal.notify('error', {content: 'Result: ' + result});
                }
            );
            }
            function edit_row(id)
            {
                var name=document.getElementById("name"+id).innerHTML;
                // var type_name=document.getElementById("type_name"+id).innerHTML;
                var description=document.getElementById("description"+id).innerHTML;
                var unit_price=document.getElementById("unit_price"+id).innerHTML;
                var pro_price=document.getElementById("pro_price"+id).innerHTML;
                var image=document.getElementById("image"+id).innerHTML;
                var unit=document.getElementById("unit"+id).innerHTML;

                document.getElementById("name"+id).innerHTML="<input type='text' id='name_text"+id+"' value='"+name+"'>";
                // document.getElementById("type_name"+id).innerHTML="<input type='text' id='type_text"+id+"' value='"+type_name+"'>";
                document.getElementById("description"+id).innerHTML="<input type='text' id='description_text"+id+"' value='"+description+"'>";
                document.getElementById("unit_price"+id).innerHTML="<input type='text' id='unit_price_text"+id+"' value='"+unit_price+"'>";
                document.getElementById("pro_price"+id).innerHTML="<input type='text' id='pro_price_text"+id+"' value='"+pro_price+"'>";
                document.getElementById("image"+id).innerHTML="<input type='text' id='image_text"+id+"' value='"+image+"'>";
                document.getElementById("unit"+id).innerHTML="<input type='text' id='unit_text"+id+"' value='"+unit+"'>";
    
                document.getElementById("edit_button"+id).style.display="none";
                document.getElementById("save_button"+id).style.display="block";
                $('#delete_button'+id).hide();
            }

            function save_row(id)
            {
                var name=document.getElementById("name_text"+id).value;
                // var type=document.getElementById("type_text"+id).value;
                var description=document.getElementById("description_text"+id).value;
                var unit_price=document.getElementById("unit_price_text"+id).value;
                var pro_price=document.getElementById("pro_price_text"+id).value;
                var image=document.getElementById("image_text"+id).value;
                var unit=document.getElementById("unit_text"+id).value;

                var route="{{route('Edit_Product',['id','name','desc','unit_price','pro_price','image','unit'])}}";
                route=route.replace('id',id);
                route=route.replace('name',name);
                // route=route.replace('type',type);
                route=route.replace('desc',description);
                route=route.replace('unit_price',unit_price);
                route=route.replace('pro_price',pro_price);
                route=route.replace('image',image);
                route=route.replace('unit',unit);
                $.ajax
                ({
                    type:'get',
                    url:route,
                    data:null,
                    success:function(data) {
                        
                        var updated_at = data;
                        // console.log(updated_at[0]);
                        document.getElementById("name"+id).innerHTML=name;
                        // document.getElementById("type_name"+id).innerHTML=type;
                        document.getElementById("description"+id).innerHTML=description;
                        document.getElementById("unit_price"+id).innerHTML=unit_price;
                        document.getElementById("pro_price"+id).innerHTML=pro_price;
                        document.getElementById("image"+id).innerHTML=image;
                        document.getElementById("unit"+id).innerHTML=unit;
                        document.getElementById("updated_at"+id).innerHTML=updated_at[0]['updated_at'];
                        document.getElementById("edit_button"+id).style.display="inline";
                        document.getElementById("save_button"+id).style.display="none";

                    }
                });
                $('#delete_button'+id).show();
            }
            function insert_row()
            {
                var name=document.getElementById("new_name").value;
                var type=document.getElementById("new_type").value;
                var description=document.getElementById("new_description").value;
                var unit_price=document.getElementById("new_unit_price").value;
                var pro_price=document.getElementById("new_pro_price").value;
                var image=document.getElementById("new_image").value;
                var unit=document.getElementById("new_unit").value;
                // var type=1;
                
                // console.log(name);

                var route="{{route('Insert_Product',['name','type','desc','unit_price','pro_price','image','unit'])}}";
                route=route.replace('name',name);
                route=route.replace('type',type);
                route=route.replace('desc',description);
                route=route.replace('unit_price',unit_price);
                route=route.replace('pro_price',pro_price);
                route=route.replace('image',image);
                route=route.replace('unit',unit);
                // console.log(route);
                $.ajax
                ({
                    type:'get',
                    url:route,
                    data:null,
                    success:function(data) {
                        // console.log(data);
                        var id=data;
                        var table=document.getElementById("product_table");
                        var table_len=(table.rows.length)-1;
                        var row = table.insertRow(table_len).outerHTML="<tr id='row"+id+"'><td id='id"+id+"'>"+id+"</td><td id='name"+id+"'>"+name+"</td><td id='type_name"+id+"'>"+type+"</td><td id='description"+id+"'>"+description+"</td><td id='unit_price"+id+"'>"+unit_price+"</td><td id='pro_price"+id+"'>"+pro_price+"</td><td id='image"+id+"'>"+image+"</td><td id='unit"+id+"'>"+unit+"</td><td id=''></td><td id=''></td><td><button class='btn btn-info btn-lg glyphicon glyphicon-hand-right' style='border-radius: 10px' id='edit_button"+id+"' onclick='edit_row("+id+");'> Edit</button><button class='save_button btn btn-success btn-lg glyphicon glyphicon-save' style='border-radius: 10px' id='save_button"+id+"' onclick='save_row("+id+");'> Save</button></td><td><button class='btn btn-warning btn-lg glyphicon glyphicon-trash' style='border-radius: 10px' id='delete_button"+id+"' onclick='delete_row("+id+");'> Delete</button></td></tr>";

                        document.getElementById("new_name").value="";
                        document.getElementById("new_email").value="";
                        document.getElementById("new_group").value="";
                        $('#new_row').hide();
                        $('#save_button'+id).hide();
                    }
                });
            }
    </script>
    @endsection



                            
