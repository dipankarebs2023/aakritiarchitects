@extends('web.layout.main')
@section('main-content')  
        <!-- End Featured Title -->
        <style>
            .imgd {
              filter: grayscale(100%);
            }
            .imgd:hover{
               filter: grayscale(0%);
            }
        </style>
        <!-- Main Content -->
        <div id="main-content" class="site-main clearfix">
            <div id="content-wrap">
                <div id="site-content" class="site-content clearfix">
                    <div id="inner-content" class="inner-content-wrap">
                       <div class="page-content">
                            <!-- SERVICES -->
                            <div class="row-services">
                                <div class="container">
                                    <div class="row">
                                          <div class="col-md-12">

                                            <div class="themesflat-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>
                                            <h2 class="heading text-center">PROJECTS</h2>
                                            <ul class="themesflat-filter style-1 clearfix text-center">
                                                @foreach ($category as $item)
                                                     <li><a href="#" data-filter=".data_{{$item->id}}">{{$item->name}}</a></li>
                                                @endforeach
                                                
                                            </ul>
                                            <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="35" data-smobile="35"></div>
                                            <div class="themesflat-project style-2 isotope-project has-margin mg15 data-effect clearfix">
                                                

                                                @foreach ($project as $pro)
                                                     <div class="project-item data_{{$pro->category_id}}">
                                                        <div class="inner">
                                                            <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                                <a href="projects/{{$pro->slug}}">
                                                                <img src="{{ url('public/assets/images/services')}}/{{$pro->image}}" alt="Image" class="imgd">
                                                               
                                                                <!--div class="overlay-effect"><img src="{{ url('public/assets/images/services')}}/{{$pro->banner_image}}"></div-->
                                                                                                                
                                                                <center> <h5>{{$pro->title}}</h5> </center>
                                                            </div>
                                                            <!--div class="text-wrap">                                       
                                                                View Details
                                                            </div-->
                                                        </div>
                                                    </div><!-- /.product-item -->
                                                @endforeach
                                                    

                                              
                                                
                                               
                                                
                                            </div><!-- /.themesflat-project -->                                        
                                            <div class="themesflat-spacer clearfix" data-desktop="72" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->

                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END SERVICES -->
                       </div><!-- /.page-content -->
                    </div><!-- /#inner-content -->
                </div><!-- /#site-content -->
            </div><!-- /#content-wrap -->
        </div><!-- /#main-content -->
    </div><!-- /#page -->
</div><!-- /#wrapper -->

@endsection