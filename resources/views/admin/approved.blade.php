@extends('layouts.master');



@section('title')
     Dashboard
@endsection


@section('content')

<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title text-center"> موافقة البوست</h4>
              </div>
              <div class="card-body">
    <table class="table  table-striped">
                    <thead class=" text-primary">
                      <th>  الاسم </th>
                     
                      <th class="col-md-8">المحتوى   </th>
                      <th>الموافقة   </th>

                    
                   
                    </thead>
                    <tbody>
                            @forelse($posts as $post)
                        <tr>
                            <td>    {{$post->title}}   </td>
                            <td>    {{$post->content}}   </td>
                            
                            <td>
                                

                            <form   action="{{route('admin.approve',['id' => $post->id ])}}"method="POST" >
                                                  {{ csrf_field()}}

                                                    <input  <?php  if ($post->approve == 1) {echo  "تم الموافقة"; }?> type="checkbox"   name="approve" >
                                                    
                                                    <input type="hidden" name="postid" value="{{$post->id}}">

                                                    <input type="submit" class="btn btn-praimary" value="تم">
                                            
                         </form>     

                            </td>
                        
                        </tr>
                        @empty
                        <h4> لا توجد قصص</h4>
                        @endforelse
                    </tbody>  
     </table>
@endsection

@section('scripts')

@endsection

  
      


    
     

