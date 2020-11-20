@extends('layouts.master');

@section('title')
     Dashboard
@endsection


@section('content')



<div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title  card-center">  من قبل الأدمن (role)  تعديل نوع المستخدم  </h4>
              </div>


              <div class="card-body">
                      <div class="row">
                         <div class="col-md-6">
              
                     
                           <form action="/role-update/{id}" method="POST" >
                                                  {{ csrf_field()}}
                         
                                <div class="form-group">
                               
                                   <lable style="float:right;"> الاسم</lable>
                                   <input type="text"  name="name" class="form-control" value="{{$users->name}}">  
                                
                                </div>

                                <div class="form-group"  >
                                    <label   style="float:right;" >أعطاء الدور</label>
                                    <select name="usertype"  class="form-control" >
                                        <option   value="admin">  admin</option>
                                        <option   value="user">  user</option>

                                    </select>

                                </div>
                                <td> <a href="/role-register" class="btn btn-success" >تحديث </a> </td>
                                <td> <a href=" " class="btn btn-danger" >الغاء </a> </td>

                        </form>
                </div>
              </div>
           </div>
         </div>
       </div>
     </div>


@endsection

@section('scripts')

@endsection

  
      


    
     

