@extends('layouts.usermaster')

@section('section')

    <div class="container-fluid padding20">
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                <div class="card">
                    <div class="card-body">
                        <h3><strong>{{ (__('Prices from 31st July to 29th August')) }} </strong></h3><hr>
{{--                        TODO: Translate those words
                            TODO: Dynamic prices, maybe a DB_table?--}}
                        <table style="width:100%" align="center" class="table">
                            <tr>
                                <td></td>
                                <td><strong>Intera giornata 08:30 - 19:00</strong></td>
                                <td><strong>Mezza giornata 14:00 - 19:00</strong></td>
                                <td><strong> Pomeridiano 15:30 - 19:00</strong></td>
                                <td><strong> Attrezzatura</strong></td>
                            </tr>
                            <tr>
                                <td><strong>1 {{ __('Adulto') }}: </strong></td>
                                <td>€ 65,00</td>
                                <td>€ 47,00</td>
                                <td>€ 40,00</td>
                                <td>1 ombrellone,
                                    1 lettino, 1 sdraio</td>
                            </tr>
                            <tr>
                                <td><strong>2 {{ __('Adulti') }}: </strong></td>
                                <td>€ 90,00</td>
                                <td>€ 65,00</td>
                                <td>€ 56,00</td>
                                <td>1 ombrellone,
                                    2 lettini</td>
                            </tr>
                            <tr>
                                <td><strong>3 {{ __('Adulti') }}: </strong></td>
                                <td>€ 105,00</td>
                                <td>€ 81,00</td>
                                <td>€ 69,00</td>
                                <td> 1 ombrellone,
                                    2 lettini, 1 sdraio</td>
                            </tr>
                            <tr>
                                <td><strong>4 {{ __('Adulti') }}: </strong></td>
                                <td>€ 128,00</td>
                                <td>€ 100,00</td>
                                <td>€ 85,00</td>
                                <td> 1 ombrellone,
                                    2 lettini, 2 sdraio</td>
                            </tr>
{{--                            Prices with kids: --}}
                            <tr>
                                <td><strong>1 {{ __('Adulto') }},1 {{ __('Bambino') }}: </strong></td>
                                <td>€ 70,00</td>
                                <td>€ 50,00</td>
                                <td>€ 45,00</td>
                                <td>1 ombrellone,
                                    2 lettini</td>
                            </tr>
                            <tr>
                                <td><strong>2 {{ __('Adulti') }},1 {{ __('Bambino') }}: </strong></td>
                                <td>€ 95,00</td>
                                <td>€ 77,00</td>
                                <td>€ 71,00</td>
                                <td>1 ombrellone,
                                    2 lettini, 1 sdraio</td>
                            </tr>
                            <tr>
                                <td><strong>3 {{ __('Adulti') }},1 {{ __('Bambino') }}: </strong></td>
                                <td>€ 127,00</td>
                                <td>€ 102,00</td>
                                <td>€ 84,00</td>
                                <td>1 ombrellone,
                                    2 lettini, 2 sdraio</td>
                            </tr>
                            <tr>
                                <td><strong>2 {{ __('Adulti') }},2 {{ __('Bambino') }}: </strong></td>
                                <td>€ 118,00</td>
                                <td>€ 98,00</td>
                                <td>€ 84,00</td>
                                <td>1 ombrellone,
                                    2 lettini, 2 sdraio</td>
                            </tr>

{{--                            Price per kid--}}
                            <tr>
                                <td><strong>1 {{ __('Bambino') }}: </strong></td>
                                <td>€ 25,00</td>
                                <td>€ 23,00</td>
                                <td>€ 21,00</td>
                                <td> Altezza tra
                                    1 mt ed 1.40 mt</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                <div class="card">
                    <div class="card-body">
                        <h3><strong>{{ (__('Prices from 31st July to 29th August')) }} </strong></h3><hr>
                        <iframe src="{{ asset('images/docs/bassa.pdf') }}" width="100%" height="350px" /></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-10 offset-sm-1">
                <div class="card">
                    <div class="card-body">
                        <h3><strong>{{ (__('Prices from August 30 to closing')) }} </strong></h3><hr>
                        <iframe src="{{ asset('images/docs/alta.pdf') }}" width="100%" height="350px" /></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
