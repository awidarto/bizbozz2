@extends('layout.login')

@section('content')
            <!-- if there are login errors, show them here -->

<?php
    Former::framework('Nude');
?>

<style type="text/css">
    select {
        margin-top:10px;
    }

    #dom-check{
        color:green;
    }
    #dom-cross{
        color:red;
    }

    .redborder{
        border: 2px solid red !important;
    }
</style>

<script type="text/javascript">
    $(document).ready(function(){

        $('#subdomain').on('keyup',function(){
            var subdomain = $('#subdomain').val();
            $.post( '{{ URL::to('dcheck') }}',
                {'subdomain': subdomain},
                function(data){
                    if(data.result == 'OK'){
                        $('#subdomain').removeClass('redborder');
                        $('#dom-cross').hide();
                    }else{
                        $('#subdomain').addClass('redborder');
                        $('#dom-cross').show();
                    }
                },'json'
            );
        });
    });

</script>

{{ Form::open(array('url' => 'organization','class'=>'form-signin')) }}
        <h2>Organization</h2>
        <fieldset>
            @if (Session::get('signupError'))
                <div class="alert alert-danger">{{ Session::get('signupError') }}</div>
                     <button type="button" class="close" data-dismiss="alert"></button>
            @endif
            @if(Auth::check())
                <p class="navbar-text pull-right">
                    Hello {{ Auth::user()->fullname }}, you haven't joined any organization. Please create new one or join existing organization.
                </p>
            @else
                <p>Create new organization or join existing organization : </p>
            @endif

            {{ Former::hidden('user_id')->value($newuser) }}

            {{ Former::text('name')->label('')->placeholder('organization name')->id('name')->class('input-large span12')}}

            {{ Former::text('subdomain')->label('')->placeholder('web domain')->id('subdomain')->class('input-large span12')->autocomplete('off')}}

             <div id="dom-cross" style="display:none;text-align:right;" ><i class="icon-remove"></i> domain taken</div>

            {{ Former::select('apptype')->options( Config::get('kickstart.app_types') )->label('')->id('apptype') }}

            {{ Former::select('employeenumber')->options( Config::get('kickstart.employee_number') )->label('')->id('employeenumber') }}

            {{ Former::select('country')->options( Config::get('country.countries') )->label('')->id('country') }}


            <div class="clearfix"></div>

            <button type="submit" class="btn btn-primary span12">Save Organization</button>
        </fieldset>

{{ Form::close() }}

@stop