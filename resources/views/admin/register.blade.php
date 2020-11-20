 @extends('layouts.master');

@section('title')
     Dashboard
@endsection


@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">

              <div class="card-header">
                <h4 class="card-title  text-center"> المستخدمون</h4>
                  @if (session('status'))
                    <div class="alert alert-success" role="alert">
                      {{(session('status'))}}
                    </div>   
                  @endif
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>  التسلسل </th>
                      <th>  الاسم </th>
                      <th> الايميل </th>
                      <th>   الدور </th>
                      <th>وقت الانشاء</th>
                      <th>وقت التعديل</th>
                      <!-- <th >   تعديل </th> -->
                      <th >   حذف</th> 

                    </thead>
                   
                    <tbody>
                       @foreach ($users as $row)
                      <tr>
                      <td>  {{$row->id}}</td>
                        <td>  {{$row->name}}</td>
                        <td>   {{$row->email}}  </td>
                        <td>   {{$row->usertype}}  </td>
                        <td>  {{$row->created_at}}</td>
                        <td>  {{$row->updated_at}}</td>


                        <!-- <td> <a href="/role-edit/{$row->id}" class="btn btn-success" >تعديل </a> </td> -->
                        <td>
                            <form action="/role-delete/{{$row->id}}" method="post">
                                {{csrf_field()}}  
                                {{method_field('DELETE')}}
                                  <button type="submit" class="btn btn-danger">حذف</button>
                                  
                              <form>
                         <td>   
                      </tr>
                        @endforeach
                   </tbody>    
                </div>
              </div>
           </div>
         </div>
       </div>
     </div>
@endsection

@section('scripts')

@endsection

  
      


    
     

