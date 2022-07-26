@extends('layouts.usermaster')

@section('section')

    <div class="container-fluid padding20">
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                <div class="card">
                    <div class="card-header">
                        <h3><strong>{{ (__('Privacy Policy')) }}</strong></h3>
                    </div>
                    <div class="card-body">
                        <iframe src="{{ asset('images/docs/Privacy policy.pdf') }}" width="100%" height="1000px" /></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
