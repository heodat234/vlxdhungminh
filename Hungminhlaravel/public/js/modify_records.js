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
}

function save_row(id)
{
 var group=document.getElementById("group_text"+id).value;
 // var age=document.getElementById("age_text"+id).value;
 var route="{{route('Edit_User','id','group')}}";
  route=route.replace('id',id);
  route=route.replace('group',group);
 $.ajax
 ({
  type:'post',
  url:route,
  data:null,
  success:function(response) {
   if(response=="success")
   {
    document.getElementById("group"+id).innerHTML=group;
    document.getElementById("edit_button"+id).style.display="block";
    document.getElementById("save_button"+id).style.display="none";
   }
  }
 });
}

function delete_row(idUser)
{
  var route="{{route('Delete_User','id')}}";
  route=route.replace('id',idUser);
 $.ajax
 ({
  url:route,
  type:'get',
  
  data:null,
  success:function(response) {
   if(response=="success")
   {
    var row=document.getElementById("row"+id);
    row.parentNode.removeChild(row);
    alert('Xóa thành công');
                          
   }
   else alert('Xóa  không thành công');
                          
  }
 });
}

function insert_row()
{
 var name=document.getElementById("new_name").value;
 var email=document.getElementById("new_email").value;
 var group=document.getElementById("new_group").value;

 var route="{{route('Insert_User','name','email','group')}}";
  route=route.replace('name',name);
  route=route.replace('email',email);
  route=route.replace('group',group);
 $.ajax
 ({
  type:'post',
  url:route,
  data:null,
  success:function(response) {
   if(response!="")
   {
    var id=response;
    var table=document.getElementById("user_table");
    var table_len=(table.rows.length)-1;
    var row = table.insertRow(table_len).outerHTML="<tr id='id"+id+"'><td id='name"+id+"'>"+name+"</td><td id='email"+id+"'>"+email+"</td><td id='pass"+id+"'></td><td id='phone"+id+"'></td><td id='add"+id+"'></td><td id='created_at"+id+"'></td><td id='active"+id+"'></td><td id='group"+id+"'>"+group+"</td><td><input type='button' class='edit_button' id='edit_button"+id+"' value='edit' onclick='edit_row("+id+");'/><input type='button' class='save_button' id='save_button"+id+"' value='save' onclick='save_row("+id+");'/><input type='button' class='delete_button' id='delete_button"+id+"' value='delete' onclick='delete_row("+id+");'/></td></tr>";

    document.getElementById("new_name").value="";
    document.getElementById("new_email").value="";
    document.getElementById("new_group").value="";
   }
  }
 });
}