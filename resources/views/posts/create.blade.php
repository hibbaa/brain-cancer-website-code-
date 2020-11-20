
@include('include.head');

<div class="row">

  <div class="column">
    <div class="card">
<!-- left side -->
        <p class="  text-center" style="font-size:30px;font-weight:bold;color:#DC7633;">   للأطلاع على القصص التي تم أنشائها </p>
              <div class="card-body">
                <a href="{{route('post.index')}}" > <button class="buttonindex" type="button"> أضغط هنا</button></a>
              </div>   
    </div>
  </div>


   <!-- right side -->
   
  <div class="column">
    <div class="card">
         <p   class="text-center" style="color:#DC7633 ;font-size:30px;font-weight:bold;"> هل لديك قصة قم بمشاركتها معنا</p>
    
         <div class="card-body">
            
            <div class="container mt-12">

           
              <!-- Trigger the modal with a button -->
              <button type="button" class="setbutton " data-toggle="modal" data-target="#myModal"> أضافة قصة</button>

              <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
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
                                                    <input type="text" class="form-control" name="title"  placeholder="ادخل الأسم">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="content">محتوى  القصة</label>
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

                                                  <button type="submit" class=" setbutton">    حفظ</button>
                                                </form>     
                                  </div>
                              </div> 
                          </div>
                    </div>
              
                  </div>
            </div>

      </div>   
     </div>
</div>

</div>
</div>
</div>





@section('styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">

@endsection


@section('scripts')
 
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js" defer></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script>
    $(document).ready(function() {
      $('#content').summernote();
    });
</script>

@endsection

 
