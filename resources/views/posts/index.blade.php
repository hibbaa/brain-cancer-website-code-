@include('include.head');




 
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