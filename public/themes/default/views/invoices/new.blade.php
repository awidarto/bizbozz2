@extends('layout.front')


@section('content')

{{Former::open_for_files_horizontal($submit,'POST',array('class'=>'custom addAttendeeForm'))}}

                <div class="content-wrap no-padding">
                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel no-margin">
                                <div class="panel-body">
                                    <div class="mg-b-lg clearfix">

                                        <div class="pull-left">
                                            <address>
                                                <strong>Twitter, Inc.</strong>
                                                <br>795 Folsom Ave, Suite 600
                                                <br>San Francisco, CA 94107
                                                <br>
                                                <abbr title="Phone">P:</abbr>(123) 456-7890
                                            </address>

                                            <address>
                                                <strong>Ichabod Crane</strong>
                                                <br>
                                                <a href="mailto:#">crane@twitter.com</a>
                                            </address>

                                        </div>

                                        <div class="pull-right">
                                            <img src="{{ URL::to('cameo')}}/img/invoice.png" alt="" style="max-width: 250px;width: 100%;">
                                        </div>
                                    </div>

                                    <div class="mg-b-lg clearfix row">

                                        <div class="col-md-5">
                                            <h4>To :</h4>
                                            <address>
                                                {{ Former::text('toName','')->class('form-control')->placeholder('Att. name')}}
                                                {{ Former::text('toAddress1','')->class('form-control')->placeholder('Address')}}
                                                {{ Former::text('toAddress2','')->class('form-control')}}

                                                {{ Former::text('toPhone','')->class('form-control')->placeholder('Phone number')}}
                                            </address>
                                        </div>
                                        <div class="col-md-1">
                                        </div>
                                        <div class="col-md-5 form-vertical pull-right">
                                            <h4>Invoice Number :</h4>
                                            {{ Former::text('invNumber','')->placeholder('Invoice Number')->class('form-control dateinput') }}
                                            {{ Former::text('invDate','')->placeholder('Invoice Date')->class('form-control dateinput') }}
                                            {{ Former::text('invDueDate','')->placeholder('Due Date')->class('form-control dateinput') }}
                                        </div>
                                    </div>


                                    <div class="panel panel-default">
                                        <div class="panel-heading">Order Summary</div>
                                        <div class="panel-body no-padding">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Item</th>
                                                            <th>Description</th>
                                                            <th>Unit Cost</th>
                                                            <th>Quantity</th>
                                                            <th>Price</th>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                            <th></th>
                                                            <th><input type="text" class="form-control"></th>
                                                            <th><input type="text" class="form-control"></th>
                                                            <th><input type="text" class="form-control"></th>
                                                            <th><input type="text" class="form-control"></th>
                                                            <th><input type="text" class="form-control"></th>
                                                            <th><span><i class="fa fa-plus-square add-item" ></i></span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                Web Updates
                                                            </td>
                                                            <td>
                                                                Monthly web updates for http://www.themeforest.net
                                                            </td>
                                                            <td>
                                                                $250.00
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                $250.00
                                                            </td>
                                                            <td><span><i class="fa fa-minus-square remove-item" ></i></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                VPN Hosting
                                                            </td>
                                                            <td>
                                                                <span class="label label-danger">Renewal</span>
                                                                Monthly dedicated VPN web hosting (1 Jan - 30 åJan, 2014)
                                                            </td>
                                                            <td>
                                                                $650.00
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                $650.00
                                                            </td>
                                                            <td><span><i class="fa fa-minus-square" ></i></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4" rowspan="4"></td>
                                                            <td colspan="1" class="text-right">Subtotal</td>
                                                            <td class="text-left">$875.00</td>
                                                            <td><span><i class="fa fa-minus-square" ></i></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="1" class="text-right">Total</td>
                                                            <td>$875.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="1" class="text-right">Amount Paid</td>
                                                            <td>$0.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="1" class="text-right">Balance Due</td>
                                                            <td>$875.00</td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                            <p class="pull-right mg-r-md">
                                                {{ Form::submit('Save',array('class'=>'btn btn-primary'))}}&nbsp;&nbsp;
                                                {{ HTML::link($back,'Cancel',array('class'=>'btn'))}}
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                </div>

{{Former::close()}}

<script type="text/javascript">

$(document).ready(function() {

    $('.remove-item').on('click',function(){
        console.log(this);
    });

    $('#name').keyup(function(){
        var title = $('#name').val();
        var slug = string_to_slug(title);
        $('#permalink').val(slug);
    });

});

</script>

@stop