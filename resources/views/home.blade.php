@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">EAGLE FINANCIAL SERVICES</div>

                <div class="panel-body">
                    Eagle Financial Services provides financial services and provides advising services for the customer on investing and
                    growing the financial portfolio! Established in 1990 and rapidly grown to be one of the leading financial company.
                    Tracking all the stocks and investments is an important key for enhancing our future services.
                    <br>
                    <br>
                    <a href="{{ url('/customers') }}">Hello!!!! Financial Advisor
                        Click Here!!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
