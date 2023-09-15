@extends('backend.layouts.master')

@section('title')
    Dynamic Menu || Admin Dashboard
@endsection

@section('admin-content')
    @include('backend.pages.blogs.partials.header-breadcrumbs')
    <div class="container-fluid">
        @include('backend.layouts.partials.messages')
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('drag-drop/bootstrap-iconpicker/css/bootstrap-iconpicker.min.css')}}">


        <div class="create-page">
            <div class="row" style="padding:25px">
                 

                
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-header"><h5 class="float-left">Menu</h5>
                            <div class="float-right">
                                <button id="btnReload" type="button" class="btn btn-outline-secondary">
                                    <i class="fa fa-play"></i> Load Data</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul id="myEditor" class="sortableLists list-group">
                            </ul>
                        </div>
                    </div>
                    <p>Customize Menu  <code>Link or Title</code></p>
                    <div class="card">
                    <div class="card-header">JSON Output
                    <div class="float-right">
                    <button id="btnOutput" type="button" class="btn btn-success"><i class="fas fa-check-square"></i> Output</button>
                    </div>
                    </div>
                    <div class="card-body">
                    <form action="addmenu" method="post">
                        @csrf
                        @if(session('msg'))
                        <h4 style="color:green"> Add Successfully </h4>
                        @endif
                        <div class="form-group"><textarea id="out" name="menudata" class="form-control" cols="50" rows="10"></textarea>
                        <br>
                        <button type="submit" id="btnOutput" class="btn btn-success"><i class="fas fa-check-square"></i>Save Menu</button>
                        
                    </form>
                    
                    </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card border-primary mb-3">
                        <div class="card-header bg-primary text-white">Edit item</div>
                        <div class="card-body">
                            <form id="frmEdit" class="form-horizontal">
                                <div class="form-group">
                                    <label for="text">Text</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control item-menu" name="text" id="text" placeholder="Text">
                                        <div class="input-group-append">
                                            <button type="button" id="myEditor_icon" class="btn btn-outline-secondary"></button>
                                        </div>
                                    </div>
                                    <input type="hidden" name="icon" class="item-menu">
                                </div>
                                <div class="form-group">
                                    <label for="href">URL</label>
                                    <input type="text" class="form-control item-menu" id="href" name="href" placeholder="URL">
                                </div>
                                <div class="form-group">
                                    <label for="target">Target</label>
                                    <select name="target" id="target" class="form-control item-menu">
                                        <option value="_self">Self</option>
                                        <option value="_blank">Blank</option>
                                        <option value="_top">Top</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="title">Tooltip</label>
                                    <input type="text" name="title" class="form-control item-menu" id="title" placeholder="Tooltip">
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <button type="button" id="btnUpdate" class="btn btn-primary" disabled><i class="fas fa-sync-alt"></i> Update</button>
                            <button type="button" id="btnAdd" class="btn btn-success"><i class="fas fa-plus"></i> Add</button>
                        </div>
                    </div>
                </div>
            
            
               
            </div>

</div>
@endsection

@section('scripts')
<script src="{{ asset('drag-drop/jquery-menu-editor.js?v3')}}"></script>
<script type="text/javascript" src="{{ asset('drag-drop/bootstrap-iconpicker/js/iconset/fontawesome5-3-1.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('drag-drop/bootstrap-iconpicker/js/bootstrap-iconpicker.min.js')}}"></script>

  <script>
jQuery(document).ready(function () {
/* =============== DEMO =============== */
// menu items








var menuData = @json($menudata);

var arrayjson = menuData;
// icon picker options
var iconPickerOptions = {searchText: "Buscar...", labelHeader: "{0}/{1}"};
// sortable list options
var sortableListOptions = {
    placeholderCss: {'background-color': "#cccccc"}
};

var editor = new MenuEditor('myEditor', {listOptions: sortableListOptions, iconPicker: iconPickerOptions});
editor.setForm($('#frmEdit'));
editor.setUpdateButton($('#btnUpdate'));
$('#btnReload').on('click', function () {
    editor.setData(arrayjson);
});

$('#btnOutput').on('click', function () {
    var str = editor.getString();
    $("#out").text(str);
});

$("#btnUpdate").click(function(){
    editor.update();
});

$('#btnAdd').click(function(){
    editor.add();
});

var menuDataC = @json($current_menu);
editor.setData(menuDataC);
/* ====================================== */

/** PAGE ELEMENTS **/
$('[data-toggle="tooltip"]').tooltip();
$.getJSON( "https://api.github.com/repos/davicotico/jQuery-Menu-Editor", function( data ) {
    $('#btnStars').html(data.stargazers_count);
    $('#btnForks').html(data.forks_count);
});
});
        </script>





@endsection