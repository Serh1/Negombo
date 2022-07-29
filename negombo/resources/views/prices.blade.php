@extends('layouts.usermaster')

@section('section')
    <div class="container-fluid padding20">
        {{--        Low Season prices--}}
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                <div class="card">
                    <div class="card-body">

                        <h3><strong>{{ (__('Prices from 31st July to 29th August')) }} </strong></h3>
                        {{--                        TODO: Translate those words
                                                    TODO: Dynamic prices, maybe a DB_table?
                                                    TODO: An better way to do the tables, to be more easy to read--}}
                        <table style="width:100%" align="center" class="table">
                            <tr>
                                <td></td>
                                <td><strong> {{__(('All day'))}} 08:30 - 19:00</strong></td>
                                <td><strong> {{__('Half day')}} 14:00 - 19:00</strong></td>
                                <td><strong> {{__('Afternoon')}} 15:30 - 19:00</strong></td>
                                <td><strong> {{__('Equipment')}}</strong></td>
                            </tr>
                            <tr>
                                <td><strong>1 {{ __('Adult') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->lw_adult1_price}},00</td>
                                <td>€ 47,00</td>
                                <td>€ 40,00</td>
                                <td>1 {{__('beach umbrella')}},
                                    1 {{__('sunbed')}}, 1 {{__('deckchair')}}</td>
                            </tr>
                            <tr>
                                <td><strong>2 {{ __('Adults') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->lw_adult2_price}},00</td>
                                <td>€ 65,00</td>
                                <td>€ 56,00</td>
                                <td>1 {{__('beach umbrella')}},
                                    2 {{__('sunbeds')}}</td>
                            </tr>
                            <tr>
                                <td><strong>3 {{ __('Adults') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->lw_adult3_price}},00</td>
                                <td>€ 81,00</td>
                                <td>€ 69,00</td>
                                <td> 1 {{__('beach umbrella')}},
                                    2 {{__('sunbeds')}}, 1 {{__('deckchair')}}</td>
                            </tr>
                            <tr>
                                <td><strong>4 {{ __('Adults') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->lw_adult4_price}},00</td>
                                <td>€ 100,00</td>
                                <td>€ 85,00</td>
                                <td> 1 {{__('beach umbrella')}},
                                    2 {{__('sunbeds')}}, 2 {{__('deckchair')}}</td>
                            </tr>
                            {{--                            Prices with kids: --}}
                            <tr>
                                <td><strong>1 {{ __('Adult') }},1 {{ __('Baby') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->lw_adult1_1baby_price}},00</td>
                                <td>€ 50,00</td>
                                <td>€ 45,00</td>
                                <td>1 {{__('beach umbrella')}},
                                    2 {{__('sunbeds')}}</td>
                            </tr>
                            <tr>
                                <td><strong>1 {{ __('Adult') }},2 {{ __('Babies') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->lw_adult1_2baby_price}},00</td>
                                <td>€ 50,00</td>
                                <td>€ 45,00</td>
                                <td>1 {{__('beach umbrella')}},
                                    2 {{__('sunbeds')}}</td>
                            </tr>
                            <tr>
                                <td><strong>1 {{ __('Adult') }},3 {{ __('Babies') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->lw_adult1_3baby_price}},00</td>
                                <td>€ 50,00</td>
                                <td>€ 45,00</td>
                                <td>1 {{__('beach umbrella')}},
                                    2 {{__('sunbeds')}}</td>
                            </tr>
                            <tr>
                                <td><strong>1 {{ __('Adult') }},1 {{ __('Baby') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->lw_adult1_4baby_price}},00</td>
                                <td>€ 50,00</td>
                                <td>€ 45,00</td>
                                <td>1 {{__('beach umbrella')}},
                                    2 {{__('sunbeds')}}</td>
                            </tr>
                            <tr>
                                <td><strong>2 {{ __('Adults') }},1 {{ __('Baby') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->lw_adult2_1baby_price}},00</td>
                                <td>€ 77,00</td>
                                <td>€ 71,00</td>
                                <td>1 {{__('beach umbrella')}},
                                    2 {{__('sunbeds')}}, 1 {{__('deckchair')}}</td>
                            </tr>
                            <tr>
                                <td><strong>2 {{ __('Adults') }},2 {{ __('Babies') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->lw_adult2_2baby_price}},00</td>
                                <td>€ 77,00</td>
                                <td>€ 71,00</td>
                                <td>1 {{__('beach umbrella')}},
                                    2 {{__('sunbeds')}}, 1 {{__('deckchair')}}</td>
                            </tr>
                            <tr>
                                <td><strong>2 {{ __('Adults') }},3 {{ __('Babies') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->lw_adult2_1baby_price}},00</td>
                                <td>€ 77,00</td>
                                <td>€ 71,00</td>
                                <td>1 {{__('beach umbrella')}},
                                    2 {{__('sunbeds')}}, 1 {{__('deckchair')}}</td>
                            </tr>
                            <tr>
                                <td><strong>3 {{ __('Adults') }},1 {{ __('Baby') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->lw_adult3_1baby_price}},00</td>
                                <td>€ 102,00</td>
                                <td>€ 84,00</td>
                                <td>1 {{__('beach umbrella')}},
                                    2 {{__('sunbeds')}}, 2 {{__('deckchair')}}</td>
                            </tr>
                            <tr>
                                <td><strong>3 {{ __('Adults') }},2 {{ __('Babies') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->lw_adult3_2baby_price}},00</td>
                                <td>€ 102,00</td>
                                <td>€ 84,00</td>
                                <td>1 {{__('beach umbrella')}},
                                    2 {{__('sunbeds')}}, 2 {{__('deckchair')}}</td>
                            </tr>
                            <tr>
                                <td><strong>4 {{ __('Adults') }},1 {{ __('Baby') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->lw_adult4_1baby_price}},00</td>
                                <td>€ 102,00</td>
                                <td>€ 84,00</td>
                                <td>1 {{__('beach umbrella')}},
                                    2 {{__('sunbeds')}}, 2 {{__('deckchair')}}</td>
                            </tr>

                            {{--                            Price per kid--}}
                            <tr>
                                <td><strong>1 {{ __('Baby') }}: </strong></td>
                                <td>€ 25,00</td>
                                <td>€ 23,00</td>
                                <td>€ 21,00</td>
                                <td> {{__('Height between 1 m and 1.40 m')}}</td>
                            </tr>
                        </table>
                        <strong>*{{__('For Half day and Afternoon, online booking is not possible')}}. </strong>
                    </div>
                </div>
            </div>
        </div>

        {{--        <div class="row">--}}
        {{--            <div class="col-sm-10 offset-sm-1">--}}
        {{--                <div class="card">--}}
        {{--                    <div class="card-body">--}}
        {{--                        <h3><strong>{{ (__('Prices from 31st July to 29th August')) }} </strong></h3><hr>--}}
        {{--                        <iframe src="{{ asset('images/docs/bassa.pdf') }}" width="100%" height="350px" /></iframe>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        High  Season prices--}}
    <p></p>
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                <div class="card">
                    <div class="card-body">

                        <h3><strong>{{ (__('Prices from August 30 to closing')) }} </strong></h3>
                        <table style="width:100%" align="center" class="table">
                            <tr>
                                <td></td>
                                <td><strong> {{__(('All day'))}} 08:30 - 19:00</strong></td>
                                <td><strong> {{__('Half day')}} 14:00 - 19:00</strong></td>
                                <td><strong> {{__('Afternoon')}} 15:30 - 19:00</strong></td>
                                <td><strong> {{__('Equipment')}}</strong></td>
                            </tr>
                            <tr>
                                <td><strong>1 {{ __('Adult') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->adult1_price}},00</td>
                                <td>€ 47,00</td>
                                <td>€ 40,00</td>
                                <td>1 {{__('beach umbrella')}},
                                    1 {{__('sunbed')}}, 1 {{__('deckchair')}}</td>
                            </tr>
                            <tr>
                                <td><strong>2 {{ __('Adults') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->adult2_price}},00</td>
                                <td>€ 65,00</td>
                                <td>€ 56,00</td>
                                <td>1 {{__('beach umbrella')}},
                                    2 {{__('sunbeds')}}</td>
                            </tr>
                            <tr>
                                <td><strong>3 {{ __('Adults') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->adult3_price}},00</td>
                                <td>€ 81,00</td>
                                <td>€ 69,00</td>
                                <td> 1 {{__('beach umbrella')}},
                                    2 {{__('sunbeds')}}, 1 {{__('deckchair')}}</td>
                            </tr>
                            <tr>
                                <td><strong>4 {{ __('Adults') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->adult4_price}},00</td>
                                <td>€ 100,00</td>
                                <td>€ 85,00</td>
                                <td> 1 {{__('beach umbrella')}},
                                    2 {{__('sunbeds')}}, 2 {{__('deckchair')}}</td>
                            </tr>
                            {{--                            Prices with kids: --}}
                            <tr>
                                <td><strong>1 {{ __('Adult') }},1 {{ __('Baby') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->adult1_1baby_price}},00</td>
                                <td>€ 50,00</td>
                                <td>€ 45,00</td>
                                <td>1 {{__('beach umbrella')}},
                                    2 {{__('sunbeds')}}</td>
                            </tr>
                            <tr>
                                <td><strong>1 {{ __('Adult') }},2 {{ __('Babies') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->adult1_2baby_price}},00</td>
                                <td>€ 50,00</td>
                                <td>€ 45,00</td>
                                <td>1 {{__('beach umbrella')}},
                                    2 {{__('sunbeds')}}</td>
                            </tr>
                            <tr>
                                <td><strong>1 {{ __('Adult') }},3 {{ __('Babies') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->adult1_3baby_price}},00</td>
                                <td>€ 50,00</td>
                                <td>€ 45,00</td>
                                <td>1 {{__('beach umbrella')}},
                                    2 {{__('sunbeds')}}</td>
                            </tr>
                            <tr>
                                <td><strong>1 {{ __('Adult') }},1 {{ __('Baby') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->adult1_4baby_price}},00</td>
                                <td>€ 50,00</td>
                                <td>€ 45,00</td>
                                <td>1 {{__('beach umbrella')}},
                                    2 {{__('sunbeds')}}</td>
                            </tr>
                            <tr>
                                <td><strong>2 {{ __('Adults') }},1 {{ __('Baby') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->adult2_1baby_price}},00</td>
                                <td>€ 77,00</td>
                                <td>€ 71,00</td>
                                <td>1 {{__('beach umbrella')}},
                                    2 {{__('sunbeds')}}, 1 {{__('deckchair')}}</td>
                            </tr>
                            <tr>
                                <td><strong>2 {{ __('Adults') }},2 {{ __('Babies') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->adult2_2baby_price}},00</td>
                                <td>€ 77,00</td>
                                <td>€ 71,00</td>
                                <td>1 {{__('beach umbrella')}},
                                    2 {{__('sunbeds')}}, 1 {{__('deckchair')}}</td>
                            </tr>
                            <tr>
                                <td><strong>2 {{ __('Adults') }},3 {{ __('Babies') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->adult2_1baby_price}},00</td>
                                <td>€ 77,00</td>
                                <td>€ 71,00</td>
                                <td>1 {{__('beach umbrella')}},
                                    2 {{__('sunbeds')}}, 1 {{__('deckchair')}}</td>
                            </tr>
                            <tr>
                                <td><strong>3 {{ __('Adults') }},1 {{ __('Baby') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->adult3_1baby_price}},00</td>
                                <td>€ 102,00</td>
                                <td>€ 84,00</td>
                                <td>1 {{__('beach umbrella')}},
                                    2 {{__('sunbeds')}}, 2 {{__('deckchair')}}</td>
                            </tr>
                            <tr>
                                <td><strong>3 {{ __('Adults') }},2 {{ __('Babies') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->adult3_2baby_price}},00</td>
                                <td>€ 102,00</td>
                                <td>€ 84,00</td>
                                <td>1 {{__('beach umbrella')}},
                                    2 {{__('sunbeds')}}, 2 {{__('deckchair')}}</td>
                            </tr>
                            <tr>
                                <td><strong>4 {{ __('Adults') }},1 {{ __('Baby') }}: </strong></td>
                                <td>€ {{$maparray["set_admin"]->adult4_1baby_price}},00</td>
                                <td>€ 102,00</td>
                                <td>€ 84,00</td>
                                <td>1 {{__('beach umbrella')}},
                                    2 {{__('sunbeds')}}, 2 {{__('deckchair')}}</td>
                            </tr>

                            {{--                            Price per kid--}}
                            <tr>
                                <td><strong>1 {{ __('Baby') }}: </strong></td>
                                <td>€ 25,00</td>
                                <td>€ 23,00</td>
                                <td>€ 21,00</td>
                                <td> {{__('Height between 1 m and 1.40 m')}}</td>
                            </tr>
                        </table>
                        <strong>*{{__('For Half day and Afternoon, online booking is not possible')}}. </strong>
                    </div>
                </div>
            </div>
        </div>

        {{--        <div class="row mt-2">--}}
        {{--            <div class="col-sm-10 offset-sm-1">--}}
        {{--                <div class="card">--}}
        {{--                    <div class="card-body">--}}
        {{--                        <h3><strong>{{ (__('Prices from August 30 to closing')) }} </strong></h3><hr>--}}
        {{--                        <iframe src="{{ asset('images/docs/alta.pdf') }}" width="100%" height="350px" /></iframe>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}

    </div>
@endsection
