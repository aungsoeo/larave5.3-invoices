@extends('layouts.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="clearfix">
                <div class="panel-title">
                  <h1>Simple Invoice System</h1>
                </div>
                <br><br>
                <div class="panle panel-default">
                  <a href="{{route('invoices.create')}}" class="btn btn-success pull-right"> + Add Invoice</a>

                  <input type="text" name="Search_box" ><button type="button" name="Search">Search</button>
                </div>

            </div>
        </div>

        <div class="panel-body">
            @if($invoices->count())
                <table class="table table-striped">
                    <thead>
                        <th>Invoice Name</th>
                        <th># of Items</th>
                        <th>Total</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach($invoices as $invoice)
                        <tr>
                            <td>{{ $invoice->invoice_no }}</td>
                            <td>{{ $invoice->client }}</td>
                            <td>{{ $invoice->grand_total }}</td>
                            <td>
                              <a href="#" class="btn btn-success ">PDF</a>
                              <a href="#" class="btn btn-danger "> Remove</a>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@stop
