@extends('backend.layouts.master')

@section('title')
    Slider || Admin Dashboard
@endsection

@section('admin-content')
    @include('backend.pages.blogs.partials.header-breadcrumbs')
    <div class="container-fluid">
        @include('backend.layouts.partials.messages')
        <link href="{{ asset('dragCss/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <div class="create-page">
            
            
            
            

            @foreach($slider_show_data as $row)
            <form action="update_slider_image" method="post" enctype="multipart/form-data">
            @csrf
            @if(session('msg'))
            <h1 style="margin-left: 25px;margin-top: 7px">{{session('msg')}}</h1>
            @endif

            <div class="row" style="padding:25px">
                   <input type="hidden" name="sid" value="{{$row['id']}}">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="logo">
                                Uploads Image &nbsp;
                                <i class="fa fa-info-circle" data-toggle="tooltip"
                                    title="Only png jpg jpeg webp svg type
                                images are allowed. Max image size  1 MB."></i>
                            </label>
                            <input type="file" class="form-control dropify" data-allowed-file-extensions="png jpg jpeg webp svg"
                                data-max-file-size="1024K" data-height="100" id="logo" name="logo" data-default-file="{{ url('storage/' . $row['image_path']) }}" />
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="name"> Title<span class="required">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Site name." value="{{$row['title']}}" required />
                        </div>


                         <button type="submit" id="btnOutput" class="btn btn-success"><i class="fas fa-check-square"></i>Update</button>
                    </div>
              

             </div>
              </form>
             @endforeach
       


</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Nestable/2012-10-15/jquery.nestable.min.js"></script>

    <script>

   $(document).ready(function()
        {

            var updateOutput = function(e)
            {
                var list   = e.length ? e : $(e.target),
                    output = list.data('output');
                if (window.JSON) {
                    output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
                } else {
                    output.val('JSON browser support required for this demo.');
                }
            };

            // activate Nestable for list 1
            $('#nestable').nestable({
                group: 1
            })
            .on('change', updateOutput);

            // activate Nestable for list 2
            $('#nestable2').nestable({
                group: 1
            })
            .on('change', updateOutput);

            // output initial serialised data
            updateOutput($('#nestable').data('output', $('#nestable-output')));
            updateOutput($('#nestable2').data('output', $('#nestable2-output')));

            $('#nestable-menu').on('click', function(e)
            {
                var target = $(e.target),
                    action = target.data('action');
                if (action === 'expand-all') {
                    $('.dd').nestable('expandAll');
                }
                if (action === 'collapse-all') {
                    $('.dd').nestable('collapseAll');
                }
            });

            $('#nestable3').nestable();

        });
    
</script>
@endsection