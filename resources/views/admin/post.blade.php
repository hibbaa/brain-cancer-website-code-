@include('include.head');
@include('include.adminleftside');


 
              <!-- Trigger the modal with a button -->


              <!-- Modal -->
            <div class="modal fade  text-center" id="myModal" role="dialog" >
                <div class="modal-dialog">
                
                  <!-- Modal content-->
                  <div class="modal-content">
                  
                         <div class="modal-body">
                                <div class="row">
                                  <div class="col-md-12">
                                        <h2 class="card-title   text-center">أنشاء قصة</h2>

                                        
                                              <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data" >
                                                  {{ csrf_field()}}

                                                  <div class="form-group">
                                                    <label for="title">الاسم</label>
                                                    <input type="text" class="form-control " name="title"  >
                                                  </div>
                                                  <br>
                                                  <div class="form-group">
                                                      <label for="content" >محتوى  القصة</label>
                                                      <textarea class="form-control" name="content" id="content" rows="10" cols="10"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="featured">الصورة</label>
                                                      <input type="file" class="form-control-file" name="featured">
                                                    </div>
                                              

                                                    @if(count($errors)>0)
                                              <ul class="navbar-nav mr-auto">
                                                      @foreach ($errors->all() as $error)
                                                          <br>
                                                      {{$error}}
                                                            
                                                      @endforeach
                                                      
                                                    </ul>
                                                    @endif

                                                  <button type="submit" class=" btn btn-primary">    حفظ</button>
                                                </form>     
                                   </div>
                                </div> 
                          </div>  
                     </div>
                </div>
             </div>
  

<!-- second part  -->

<div class="row">
    <div class="col-md-12">
          <div class="card">      
              <div class="card-header">

                <p   class="text-center" style="font-size:30px;font-weight:bold;">  هل لديك قصة قم بمشاركتها معنا 
                 <button type="button" data-toggle="modal" data-target="#myModal"  class="btn btn-primary float-left"> أضافة قصة</button> </p>
              </div>
          </div>
       
                
         <div class="card-body">
            <div class="container mt-12">

            <p class="  text-center" style="font-size:30px;font-weight:bold;">   القصص التي تمت مشاركتها </p>


            @if ($posts->count()>0)

                        <div class="container mt-12">
                                @foreach ($posts as $post)
                                <div class="card ">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <img src="{{$post->featrued}}" alt="{{$post->title}} "  class="img-fluid" > 
                                        </div>
                                        
                                        <div class="col-md-8">
                                            <h2 class="card-title   text-center">{{$post->title}}</h2>
                                                
                                                <p class="card-text ">
                                                {{$post->content}}
                                                </p>
                                        </div>

                                    </div>             

                                                    <!-- Footer -->
                                            <footer class="page-footer ">
                                            <!-- Copyright -->
                                            <div class="footer-copyright text-center py-3">

                                                    <a class="" href="{{route('post.edit',['id' =>$post->id ])}}">   
                                                                                    <i class="glyphicon glyphicon-pencil"></i>
                                                                                </a>  


                                                    <a class="" href="{{route('post.delete',['id' =>$post->id ])}}">
                                                        <i class="glyphicon glyphicon-trash"></i>
                                                    </a>   
                                                                                <br>
                                                    <p >  تم اضافته بتاريخ {{$post->updated_at}}  <br>  تم تعديله بتاريخ    {{$post->created_at}} </p>

                                            </div>
                                            </footer>
                                        
                              </div>
                                @endforeach

            @else
              <p scope="row" class="noadd "> لايوجد أي أضافة قصة جديدة
              </p>  
              @endif
</div>    
 
     </div> 
</div>  

      


    
     

