        
            @extends("Admin.Admin")
            @section('Admin.Content_Admin')
            
        <section class="content">
            <div class="container-fluid">
                <div class="row">            
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                    USER
                                    {{-- <small>You can edit any columns except header/footer</small> --}}
                            </h2>
                        </div>
                        <div class="body"> 
                        <div>
                            <button id="addRow" class="btn btn-primary glyphicon glyphicon-plus-sign" style="height: 60px; width: 60px; border-radius: 10px"> </button>
                        </div> 
                        <br>
                            <table  class="table table-striped table-nonfluid" align="center" id="user_table">
                                <thead>
                           {{-- <th><input type="checkbox" id="checkall" /></th> --}}
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Created at</th>
                                    <th>Active</th>
                                    <th>Group</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </thead>
                                <tbody>
                                    @foreach($user as $users)
                                        <tr id="row{{$users->id }}">
                                                {{-- <td><input type="checkbox" class="checkthis" /></td> --}}
                                            <td id="id{{ $users->id }}">{{ $users->id }}</td>
                                            <td id="name{{ $users->id }}">{{ $users->full_name }}</td>
                                            <td id="email{{ $users->id }}">{{ $users->email }}</td>
                                            <td id="pass{{ $users->id }}">{{ $users->password }}</td>
                                            <td id="phone{{ $users->id }}">{{ $users->phone }}</td>
                                            <td id="add{{ $users->id }}">{{ $users->address }}</td>
                                            <td id="created_at{{ $users->id }}">{{ $users->created_at }}</td>
                                            <td id="active{{ $users->id }}">{{ $users->active }}</td>
                                            <td id="group{{ $users->id }}">{{ $users->group }}</td>
                                            <td>
                                                <button class="btn btn-info btn-lg glyphicon glyphicon-hand-right" style="border-radius: 10px;" id="edit_button{{ $users->id  }}" onclick="edit_row('{{ $users->id  }}');"> Edit</button>
                                                <button class=" save_button btn btn-success btn-lg glyphicon glyphicon-save" style="border-radius: 10px;" id="save_button{{ $users->id  }}" onclick="save_row('{{ $users->id  }}');"> Save</button>
                                            </td>
                                            <td>
                                                <button class="btn btn-warning btn-lg glyphicon glyphicon-trash" style="border-radius: 10px" id="delete_button{{ $users->id  }}" onclick="delete_row('{{ $users->id}}');"> Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                        <tr id="new_row">
                                        <form>
                                            <td><input type="text" disabled="" ></td>
                                            <td><input type="text" id="new_name" required=""></td>
                                            <td><input type="text" id="new_email" required=""></td>
                                            <td><input type="text" ></td>
                                            <td><input type="text" ></td>
                                            <td><input type="text" ></td>
                                            <td><input type="text" ></td>
                                            <td><input type="text" ></td>
                                            <td><input type="text" id="new_group" required=""></td>
                                            <td><button class="btn btn-info btn-lg glyphicon glyphicon-floppy-save" style="border-radius: 10px;" onclick="insert_row();"> Insert</button></td> 
                                        </form>
                                            
                                            
                                        </tr>
                                </tbody>
                            </table>
                            <div>{{ $user->links() }}</div>
                            <input style="position: absolute; display: none;">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <script type="text/javascript">
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
                        var route="{{route('Delete_User','id')}}";
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
 // var name=document.getElementById("name"+id).innerHTML;
 // var eamil=document.getElementById("email"+id).innerHTML;
 // var phone=document.getElementById("phone"+id).innerHTML;
 // var add=document.getElementById("add"+id).innerHTML;
                var group=document.getElementById("group"+id).innerHTML;

                document.getElementById("group"+id).innerHTML="<input type='text' id='group_text"+id+"' value='"+group+"'>";
                // document.getElementById("email"+id).innerHTML="<input type='text' id='age_text"+id+"' value='"+age+"'>";
    
                document.getElementById("edit_button"+id).style.display="none";
                document.getElementById("save_button"+id).style.display="block";
                $('#delete_button'+id).hide();
            }

            function save_row(id)
            {
                var group=document.getElementById("group_text"+id).value;
                // var age=document.getElementById("age_text"+id).value;
                var route="{{route('Edit_User',['id','group'])}}";
                route=route.replace('id',id);
                route=route.replace('group',group);
                $.ajax
                ({
                    type:'get',
                    url:route,
                    data:null,
                    success:function() {
                        document.getElementById("group"+id).innerHTML=group;
                        document.getElementById("edit_button"+id).style.display="inline";
                        document.getElementById("save_button"+id).style.display="none";

                    }
                });
                $('#delete_button'+id).show();
            }
            function insert_row()
            {
                var name=document.getElementById("new_name").value;
                var email=document.getElementById("new_email").value;
                var group=document.getElementById("new_group").value;

                var route="{{route('Insert_User',['name','email','group'])}}";
                route=route.replace('name',name);
                route=route.replace('email',email);
                route=route.replace('group',group);
                $.ajax
                ({
                    type:'get',
                    url:route,
                    data:null,
                    success:function(data) {
                        // console.log(data);
                        var id=data;
                        var table=document.getElementById("user_table");
                        var table_len=(table.rows.length)-1;
                        var row = table.insertRow(table_len).outerHTML=
                        "<tr id='row"+id+"'><td id='id"+id+"'>"+id+"</td><td id='name"+id+"'>"+name+"</td><td id='email"+id+"'>"+email+"</td><td id='pass"+id+"'></td><td id='phone"+id+"'></td><td id='add"+id+"'></td><td id='created_at"+id+"'></td><td id='active"+id+"'></td><td id='group"+id+"'>"+group+"</td><td><button class='btn btn-info btn-lg glyphicon glyphicon-hand-right' style='border-radius: 10px' id='edit_button"+id+"' onclick='edit_row("+id+");'> Edit</button><button class='save_button btn btn-success btn-lg glyphicon glyphicon-save' style='border-radius: 10px' id='save_button"+id+"' onclick='save_row("+id+");'> Save</button></td><td><button class='btn btn-warning btn-lg glyphicon glyphicon-trash' style='border-radius: 10px' id='delete_button"+id+"' onclick='delete_row("+id+");'> Delete</button></td></tr>";

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



                            