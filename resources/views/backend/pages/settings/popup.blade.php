@extends('backend.layouts.master')

@section('title')
    POPUP || Admin Dashboard
@endsection

@section('admin-content')
    @include('backend.pages.blogs.partials.header-breadcrumbs')
    <div class="container-fluid">
        @include('backend.layouts.partials.messages')
        <link href="{{ asset('dragCss/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <div class="create-page">
            <div class="row" style="padding:25px">
                

               
            </div>

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