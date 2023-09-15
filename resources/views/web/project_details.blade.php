@extends('web.layout.main')
@section('main-content')  
        <!-- End Featured Title -->

         <div id="main-content" class="site-main clearfix">
            <div id="content-wrap">
                <div id="site-content" class="site-content clearfix">
                    <div id="inner-content" class="inner-content-wrap">
                        <div class="page-content">
                            <!-- PROJECT DETAIL -->
                            <div class="row-project-detail">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>
                                            <h2 class="heading text-center">{{$project->title}}</h2>
                                            <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                                            <div class="detail-inner-wrap">
                                                
                                                <div class="detail-gallery">
                                                    <div class="themesflat-spacer clearfix" data-desktop="21" data-mobile="21" data-smobile="21"></div>
                                                    <div class="themesflat-gallery style-2 has-arrows arrow-center arrow-circle offset-v-82 has-thumb w185 clearfix" data-gap="0" data-column="1" data-column2="1" data-column3="1" data-auto="false">
                                                        <div class="container">
                                                         <div class="row"> 
                                                         <div class="col-md-7">                                   
                                                              <div class="gallery-item" style="margin-top: -40px;">
                                                                <div class="inner">

                                                                    <div class="thumb">

                                                                        <img src="{{ url('public/assets/images/services')}}/{{$project->banner_image}}" alt="Image" style="height: 80%; width: 95%;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="col-md-5" style="padding-top: -40px; margin-bottom:100px;">
                                                                       {!! $project->description !!}
                                                                            
                                                                </div>                                                        
                                                                     
                                                             
                                                            
                                                         </div>
                                                     </div>
                                                     </div><!-- /.themesflat-cousel-box -->
                                                         
                                                    
                                                </div>
                                            </div>
                                            <div class="themesflat-spacer clearfix" data-desktop="58" data-mobile="60" data-smobile="60"></div>
                                        </div>
                                    </div><!-- /.row -->
                                    
                                </div><!-- /.container -->
                            </div>
                            <!-- END PROJECT DETAIL -->
                        </div><!-- /.page-content -->
                                            
                    </div><!-- /#inner-content -->
                </div><!-- /#site-content -->
            </div><!-- /#content-wrap -->
        </div><!-- /#main-content -->

@endsection