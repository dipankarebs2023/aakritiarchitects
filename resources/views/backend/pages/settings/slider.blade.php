@extends('backend.layouts.master')

@section('title')
    Uploads || Admin Dashboard
@endsection

@section('admin-content')
    @include('backend.pages.blogs.partials.header-breadcrumbs')
    <div class="container-fluid">
        @include('backend.layouts.partials.messages')
        <link href="{{ asset('dragCss/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <div class="create-page">
            <form action="addslider_image" method="post" enctype="multipart/form-data">
            
            @csrf
            @if(session('msg'))
            <br>
            <h1 style="margin-left: 25px;margin-top: 17px">{{session('msg')}}</h1>
            @endif
            <div class="row" style="padding:25px">
                   
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="logo">
                                Upload Image &nbsp;
                                <i class="fa fa-info-circle" data-toggle="tooltip"
                                    title="Only png jpg jpeg webp svg type
                                images are allowed. Max image size  1 MB."></i>
                            </label>
                            <input type="file" class="form-control dropify" data-allowed-file-extensions="png jpg jpeg webp svg"
                                data-max-file-size="1024K" data-height="100" id="logo" name="logo" data-default-file="" />
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="name"> Title <span class="required">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Site name." value="" required />
                        </div>


                         <button type="submit" id="btnOutput" class="btn btn-success"><i class="fas fa-check-square"></i>Save</button>
                    </div>
              

             </div>
        </form>


        <div class="row" style="padding:25px">
            <table class="table">
                <tr>
                    <th>Title</th>
                    <th>Photo</th>
                    <th>Edit</th>
                    <th>Link</th>
                    <th>Delete</th>
                </tr>
                @foreach($slider_data as $row)
                <tr>
                    <td>{{htmlspecialchars($row['title'] ?? 'No Title' )}}</td>
                    <td><img src="{{ url('storage/app/public/' . $row['image_path']) }}" style="width:100px">
                    </td>

                    <td style="width:100px"><a href="show_slider/{{ $row['id']}}" class="btn btn-success"><i class="fas fa-check-square"></i>Edit</a>
                    </td>
                    <td style="width:150px">
                        <p id="mlink_{{$row['id']}}" style="display:none">{{ url('storage/app/public/' . $row['image_path']) }}</p>  
                       
                        <button class="btn btn-primary"  onclick="copytxt('#mlink_{{$row["id"]}}',{{$row['id']}})" >Copy-Link</button>
                        <div id="copyMessage_{{$row['id']}}" style="color:green"></div>
                    </td>
                    <td style="width:100px">
                        <form action="slider/delete/{{$row['id']}}" method="get" style="float-left">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>

        </div>

</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Nestable/2012-10-15/jquery.nestable.min.js"></script>
<script>

        function copytxt(which_id,ids) {
                var $temp = $("<input>");
                $("body").append($temp);
                $temp.val($(which_id).text()).select();
                document.execCommand("copy");
                $temp.remove();
                $('#copyMessage_'+ids).html('Done!');
              }

        </script>



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