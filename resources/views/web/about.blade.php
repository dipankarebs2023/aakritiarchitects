@extends('web.layout.main')
@section('main-content') 
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
                                                <h2 class="heading">{{$aboutdata['title']}}</h2>
                                                <!--img src="{{ url('public/assets/images/pages')}}/{{$aboutdata['image']}}" style="width: 20%; padding-bottom: 20px;"><br-->
                                              {!! $aboutdata['description'] !!}
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


