@extends('web.layout.main')
@section('main-content')
        <!-- Featured Title --
        <div id="featured-title" class="featured-title clearfix">
            <div id="featured-title-inner" class="container clearfix">
                <div class="featured-title-inner-wrap">                    
                    <div id="breadcrumbs">
                        <div class="breadcrumbs-inner">
                            <div class="breadcrumb-trail">
                                <a href="index.html" class="trail-begin">Home</a>
                                <span class="sep">|</span>
                                <span class="trail-end">About Us</span>
                            </div>
                        </div>
                    </div>
                    <div class="featured-title-heading-wrap">
                        <h1 class="feautured-title-heading">
                            About Us
                        </h1>
                    </div>
                </div>-- /.featured-title-inner-wrap -
            </div><!-- /#featured-title-inner --          
        </div>
        -- End Featured Title -->

        <!-- Main Content -->
        <div id="main-content" class="site-main clearfix">
            <div id="content-wrap">
                <div id="site-content" class="site-content clearfix">
                    <div id="inner-content" class="inner-content-wrap">
                       <div class="page-content">
                            <!-- ICONBOX -->
                            <div class="row-iconbox">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                                            <div class="themesflat-headings style-1 text-center clearfix">
                                                <h2 class="heading" style="padding-bottom: 50px;">{{$servicedata['title']}}</h2>
                                                {!! $servicedata['description'] !!}
                                      
                                            </div>
                                            <div class="themesflat-spacer clearfix" data-desktop="42" data-mobile="35" data-smobile="35"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END ICONBOX -->
                       </div><!-- /.page-content -->
                    </div><!-- /#inner-content -->
                </div><!-- /#site-content -->
            </div><!-- /#content-wrap -->
        </div><!-- /#main-content -->
    </div><!-- /#page -->
</div><!-- /#wrapper -->
@endsection
