@extends('layout.front')


@section('content')

<h3>{{$title}}</h3>


{{Former::open_for_files($submit,'POST',array('class'=>'custom'))}}

{{ Former::hidden('id')->value($formdata['_id']) }}
<div class="row-fluid">
    <div class="col-md-6">

        {{ Former::text('building','building') }}
        {{ Former::text('floor','Floor') }}
        {{ Former::text('number','Number') }}
        {{ Former::text('type','Unit Type') }}
        {{ Former::text('rentalRate','Rental Rate Monthly')->class('col-md-4 form-control') }}
        {{ Former::text('squareMeter','Square Meter')->class('col-md-4 form-control') }}
        {{ Former::select('categoryLink','Category')->options(Prefs::getUnitCategory()->UnitCatToSelection('slug', 'title' )) }}

        {{ Former::text('unitDescription','Description') }}

        {{ Former::text('tags','Tags')->class('tag_keyword') }}

    </div>
    <div class="col-md-6">

        <?php
            $fupload = new Fupload();
        ?>

        {{ $fupload->id('imageupload')->title('Select Images')->label('Upload Images')->make($formdata) }}

    </div>
</div>

<div class="row-fluid right">
    <div class="col-md-12">
        {{ Form::submit('Save',array('class'=>'btn btn-primary'))}}&nbsp;&nbsp;
        {{ HTML::link($back,'Cancel',array('class'=>'btn'))}}
    </div>
</div>
{{Former::close()}}

<script type="text/javascript">

$(document).ready(function() {

    $('.pick-a-color').pickAColor({
        showHexInput:false
    });

    $('#name').keyup(function(){
        var title = $('#name').val();
        var slug = string_to_slug(title);
        $('#permalink').val(slug);
    });


});

</script>

@stop