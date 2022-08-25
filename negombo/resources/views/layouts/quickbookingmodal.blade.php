<script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.1/slimselect.min.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.1/slimselect.min.css" rel="stylesheet"/>
<div class="modal fade" id="myModal">
    <div class=row>
        <div class="col-sm-10 offset-sm-1">
            <div class="modal-dialog modal-lg">
                <form action="" method="POST">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Quick Booking</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            {{ csrf_field() }}
                            @isset($error_msg)
                                @foreach ($error_msg as $error)
                                    <li class="text-danger">{{ $error }}</li>
                                @endforeach
                            @endisset

                            <div action="" class="form-group row">
                                <label for="placeid"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Arrival day') }}: </label>
                                <div class="col-md-6">
                                    <div class="container11">
                                        <div style="display:flex;">
                                            <?php 
                                            $makestr = '+365 day';
                                            $startday = date("Y-m-d");
                                            $endday = date("Y-m-d", strtotime($makestr));
                                            ?>
                                            <input min="{{$startday}}"style="margin-right: 10px;" placeholder="DD/MM/YYYY" type="date" id="searchdate_numberofdays" name="t_start"> 
                                            <input min="{{$startday}}" id="searchdate_numberofdays" name="t_end" type="date" placeholder="DD/MM/YYYY">
                                            </div>

                                            @isset($maparray['err_msg'])
                                                <span id="errormsg_txt"
                                                    style="color:red;"> {{ __('You can book maximum') }} {{ $maparray["set_admin"]->max_no_days }} {{ __('days') }}.</span>
                                                <br>
                                            @endisset
                                            <span id="errormsg_txt" style="color:red;display:none;"> {{ __('Arrival day is not selected') }}. </span><br>
                                        </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="placeid" class="col-md-4 col-form-label text-md-right">{{ __('Place ID') }}
                                    : </label>
                                <div class="col-md-6">
                                    <script>
                                        new SlimSelect({
                                            select: '#multiple'
                                        })
                                    </script>
                                    <select name="place_id[]" id="multiple" multiple>
                                        @foreach($places_name as $place)
                                            <option name="place_id[]"
                                                    value="{{$place['place_name']}}">{{$place['place_name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fullname"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}: </label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="user_fullname" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Email address') }}: </label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="user_email" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}
                                    : </label>
                                <div class="col-md-6">
                                    <input type="tel" class="form-control" name="user_phone" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="geust"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Number of adults') }}
                                    [1-4]: </label>
                                <div class="col-md-6">
                                    <select class="form-control booking_inp_textbox_style" id="numberofguest"
                                            name="numberofguest" onchange="addFieldsadmin(this.value);">
                                        <option value="0" active>1</option>
                                        <option value="1">2</option>
                                        <option value="2">3</option>
                                        <option value="3">4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="babies"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Number of babies') }}
                                    [1-4]: </label>
                                <div class="col-md-6">
                                    <select class="form-control booking_inp_textbox_style" id="numberofbabies"
                                            name="numberofbabies" onchange="addFieldsadmin2(this.value);">
                                        <option value="0" active>0</option>
                                        <option id="hidden_op_style1" value="1">1</option>
                                        <option id="hidden_op_style2" value="2">2</option>
                                        <option id="hidden_op_style3" value="3">3</option>
                                        <option id="hidden_op_style4" value="4">4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="containerinput">
                                {{-- dynamic input surname using javascript --}}
                            </div>
                            <div class="containerinput2">
                                {{-- dynamic input surname using javascript --}}
                            </div>
                            <div class="form-group row">
                                <label for="promo" class="col-md-4 col-form-label text-md-right">{{ __('Promo Code') }}
                                    : </label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="user_promo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="book" class="col-md-4 col-form-label text-md-right">{{ __('Booked By') }}
                                    : </label>
                                <div class="col-md-6">
                                    <label>{{ Auth::user()->name }}</label>

                                </div>
                            </div>
                            @if (Auth::user()->role == 'admin')
                                <div class="form-group row">
                                    <label for="Ammount"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Payment Type') }}
                                        : </label>
                                    <div class="col-md-6">
                                        <input type="radio" name="user_payment_type" value="Entrance">
                                        <label for="Entrance"
                                               class="booking_payment_type_style">{{ __('Entrance (Cash)') }}</label>&nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="user_payment_type" value="Admin" checked>
                                        <label for="Entrance"
                                               class="booking_payment_type_style">{{ __('Admin (Free)') }}</label><br>

                                    </div>
                                </div>
                            @else
                                <div class="form-group row">
                                    <label for="promo"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Payment Type') }}
                                        : </label>
                                    <div class="col-md-6">
                                        <input type="radio" name="user_payment_type" value="Entrance" checked>
                                        <label for="Entrance"
                                               class="booking_payment_type_style">{{ __('Entrance (Cash)') }}</label>
                                    </div>
                                </div>
                            @endif


                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    var today = new Date();
    tomorrow = new Date(today);
    tomorrow.setDate(tomorrow.getDate() + 60);
    var date = tomorrow.getFullYear() + '-' + (tomorrow.getMonth() + 1) + '-' + tomorrow.getDate();
    $(document).ready(function () {
        // Call global the function


        $('.t-datepicker').tDatePicker({
            // options here


            firstDay: 0,
            titleDateRange: '{{ __('day') }}',
            titleDateRanges: '{{ __('days') }}',
            titleToday: '{{ __('Today') }}',
            // limitDateRanges    :'{{ $set_admin->max_no_days+1 }}',
            titleCheckIn: '{{ __('Check In') }}',
            titleCheckOut: '{{ __('Check Out') }}',
            numCalendar: 1,
            //endDate: date,
            nextDayHighlighted: false,
            toDayHighlighted: true,
            toDayShowTitle: true,
            autoClose: true,
            dateRangesHover: false,


        });
    });

    //'.t-datepicker').tDatePicker('setDate', '+1');

</script>

<script type="text/javascript">
    new SlimSelect({
        select: '#multiple'
    })

    @isset($error_msg)
    @if (count($error_msg) > 0)
    $('#myModal').modal('show');
    @endif
    @endisset

</script>
