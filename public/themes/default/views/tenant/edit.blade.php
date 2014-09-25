@extends('layout.front')


@section('content')

<h3>{{$title}}</h3>

{{Former::open_for_files($submit,'POST',array('class'=>'custom addAttendeeForm'))}}

{{ Former::hidden('id')->value($formdata['_id']) }}
<div class="row-fluid">
    <div class="col-md-6">
        {{ Former::select('salutation')->options(Config::get('kickstart.salutation'))->label('Salutation')->class('col-md-2 form-control') }}
        {{ Former::text('firstname','First Name') }}
        {{ Former::text('lastname','Last Name') }}
        {{ Former::text('phone','Phone') }}

        {{ Former::text('address','Address') }}
        {{ Former::text('city','City') }}
        {{ Former::text('zipCode','ZIP / Postal Code')->id('zip')->class('col-md-2 form-control')->maxlength(5) }}
        <div class="us" style="display:none;">
            {{ Former::select('state')->class('us form-control')->options(Config::get('country.us_states'))->label('State')->style('display:none;')->id('us_states') }}
        </div>
        <div class="au" style="display:none;">
            {{ Former::select('state')->class('au form-control')->options(Config::get('country.aus_states'))->label('State')->style('display:none;')->id('au_states') }}
        </div>
        <div class="outside">
            {{ Former::text('state','State / Province')->class('outside col-md-6 form-control')->id('other_state') }}
        </div>

        {{ Former::select('countryOfOrigin')->id('country')->options(Config::get('country.countries'))->label('Country of Origin') }}
    </div>
    <div class="col-md-6">

        {{ Former::text('email','Email') }}

        {{ Former::password('pass','Password')->help('Leave blank for no changes') }}
        {{ Former::password('repass','Repeat Password') }}

        {{ Former::select('building')->options(Config::get('country.countries'))->label('Building') }}

        {{ Former::select('unit')->options(Config::get('country.countries'))->label('Unit') }}

        {{ Former::text('fromDate','From')->class('col-md-7 eventdate form-control')
            ->id('fromDate')
            //->data_format('dd-mm-yyyy')
            ->append('<i class="icon-th"></i>') }}

        {{ Former::text('toDate','Until')->class('col-md-7 eventdate form-control')
            ->id('toDate')
            //->data_format('dd-mm-yyyy')
            ->append('<i class="icon-th"></i>') }}

    </div>
</div>

<div class="row-fluid right">
    <div class="col-md-12">
        {{ Form::submit('Save',array('class'=>'btn btn-primary'))}}&nbsp;&nbsp;
        {{ HTML::link($back,'Cancel',array('class'=>'btn'))}}
    </div>
</div>
{{Former::close()}}

{{ HTML::script('js/wysihtml5-0.3.0.min.js') }}
{{ HTML::script('js/parser_rules/advanced.js') }}

<script type="text/javascript">


$(document).ready(function() {

    $('#name').keyup(function(){
        var title = $('#name').val();
        var slug = string_to_slug(title);
        $('#permalink').val(slug);
    });

});

</script>

@stop