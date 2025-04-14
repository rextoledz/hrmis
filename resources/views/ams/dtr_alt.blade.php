<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    th{
        padding: 5px;
        font-size: small;
    }
    .row{
        display: flex;
        align-content: center;
        justify-content: space-evenly;
    }
    .row-header{
        display: flex;
        flex-direction: column;
    }
    .card-body{
        display: inline-block;
        padding: 1rem;
    }
    .control-form{
        display: block;
        padding-bottom: .5rem;
    }
    .control-input{
        align-items: center;
        padding-bottom: .5rem;
    }
    .container-row{
        display: flex;
    }
</style>
<body>
    <div class="row">
        <div class="card-body">
            <div class="row-header">
                <div class="control-form">
                    <label for="" style="font-style: italic;">Civil Service Form No. 48</label>
                </div>
                <div style="position: absolute;margin-top: 2rem;margin-left: 1rem;">
                    <img class="" style="width: 6rem;" alt="" src="{{ asset('assets/images/logo.jpg')}}" />
                </div>
                <div class="row control-input" style="align-items: center;padding-bottom: .5rem;">
                    <label for="">Republic of the Philippines</label>
                </div>
                <div class="row control-input" style="align-items: center;padding-bottom: .5rem;">
                    <label for="">Province of Southern Leyte</label>
                </div>
                <div class="row control-input" style="align-items: center;padding-bottom: .7rem;font-weight: 900">
                    <label for="">MUNICIPALITY OF BONTOC</label>
                </div>
                <div class="row control-input" style="align-items: center;padding-bottom: 2rem;font-weight: bolder;">
                    <label for="">DAILY TIME RECORD</label>
                </div>
               <div class="row control-input" style="border-bottom: 1px solid black">
                    <label for="" style="font-weight: 900;">{{ $employee->firstname }} {{ strtoupper($employee->middlename[0]) }}.  {{ $employee->lastname }} </label>
                </div>
                <div class="row control-input">
                    <label for="">(Name)</label>
                </div>
                <div class="control-form">
                    <div style="display: flex; width: 100%;">
                        <label for="" style="font-size: 1rem;" >For the mont of: </label>
                        <div class="container-row" style="flex-grow: 1; justify-content: center;border-bottom: 1px solid black">
                            <label for="" style="font-weight: 900; padding-left: 5px;">{{ $month }} <span id="dates"></span> {{ $year }}</label>
                        </div>
                    </div>
                </div>
                <div class="control-form">
                    <div style="display: flex; width: 100%;">
                        <label for="" style="font-size: smaller; padding-right: .3rem;" >Office hours of arrival and departure</label>
                        <label for="" style="font-size: smaller; padding-right: .3rem;" >(Regular days)</label>
                        <div class="container-row" style="flex-grow: 1; justify-content: center;border-bottom: 1px solid black">
                            <label for="" style="font-size: smaller;padding-left: 5px;">8:00am-12:00pm;1:00pm-5:00pm</label>
                        </div>
                    </div>
                </div>
                <div class="control-form">
                    <div style="display: flex; width: 100%; justify-content: flex-end;">
                        <label for="" style="font-size: smaller; padding-right: .3rem;" >(Saturdays)</label>
                        <div class="" style="width: 200px; justify-content: center;border-bottom: 1px solid black">
                            <label for="" style="font-size: smaller;padding-left: 5px;">                            </label>
                        </div>
                    </div>
                </div>
                <br>
                
            </div>

            <table id="IDtable" border="1" style="border-collapse: collapse;" width="480" height="400" align="center">
                <tr>
                    <th rowspan="2">Day</th>
                    <th colspan="2">A.M.</th>
                    <th colspan="2">P.M.</th>
                    <th colspan="2">Undertime</th>
                </tr>

                <tr>
                    <th>Arrival</th>
                    <th>Departure</th>
                    <th>Arrival</th>
                    <th>Departure</th>
                    <th>Hours</th>
                    <th>Minutes</th>
                </tr>
                
                @foreach($daysList as $day)
                    <tr>
                        <th>{{ Carbon\Carbon::parse($day)->format('d') }}</th>
                        @if(Carbon\Carbon::parse($day)->dayOfWeek == 6)
                            <th colspan="6">Saturday</th>
                        @elseif(Carbon\Carbon::parse($day)->dayOfWeek == 0)
                            <th colspan="6">Sunday</th>
                        @else
                            @if(Carbon\Carbon::parse($day) <= Carbon\Carbon::parse($endDate))
                                @if($holiday = App\Models\Holiday::whereDate('startdate', Carbon\Carbon::parse($day))->first())
                                    <th colspan="6">{{ $holiday->nameofholiday }}</th>
                                @else
                                    @if(Carbon\Carbon::parse($day) >= Carbon\Carbon::parse($startDate))
                                        @if($attendance = App\Models\Attendance::whereDate('date', Carbon\Carbon::parse($day))->where('biometric', $emp_num)->first())
                                            @if(Carbon\Carbon::parse($day)->dayOfWeek <= 5)
                                                <th class="am_in">{{ $attendance->am_in }}</th>
                                                <th class="am_out">{{ $attendance->am_out }}</th>
                                                <th class="pm_in">{{ $attendance->pm_in }}</th>
                                                <th class="pm_out">{{ $attendance->pm_out }}</th> 
                                                @if($getUndertime = App\Models\Attendance::getUndertimeHour($attendance->am_in,$attendance->am_out, $attendance->pm_in,$attendance->pm_out))
                                                    <th>{{ Carbon\Carbon::parse($getUndertime)->format('H') }}</th>
                                                    <th>{{ Carbon\Carbon::parse($getUndertime)->format('i') }}</th>
                                                @else
                                                    <th></th>
                                                    <th></th>
                                                @endif
                                            
                                            @endif
                                        @else
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        @endif
                                    @else
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    @endif
                                @endif
                            @else
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            @endif
                        @endif
                    </tr>
                @endforeach
            </table>
            <div class="row-header">
                <div class="col-md-12">
                    <div class="control-form" style="padding-top: .7rem;">
                        <div style="display: flex; width: 100%; justify-content: flex-end;">
                            <label for="" style="font-size: smaller; padding-right: .3rem;" >Total:</label>
                            <div class="" style="width: 200px; justify-content: center;border-bottom: 1px solid black">
                                <label for="" style="font-size: smaller;padding-left: 5px;">                            </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="control-form">
                        <label for="" style="font-style: italic;">I CERTIFY on my honor that the above is a true and correct report of the </label>
                    </div>
                    <div class="control-form">
                        <label for="" style="font-style: italic;"> hours of work performed, record of which was made daily at the time of</label>
                    </div>
                    <div class="control-form" style="padding-bottom: 3rem;">
                        <label for="" style="font-style: italic;">arrival and departure from office.</label>
                    </div>
                    <div class="row control-input" style="border-bottom: 2px solid black">
                        <label for="" style="font-weight: 900;"></label>
                    </div>
                    <div class="row control-input" style="padding-bottom: 3rem;">
                        <label for="">Verified as to the prescribed office hours</label>
                    </div>
                    <div class="row control-input" style="border-bottom: 2px solid black">
                        <label for="" style="font-weight: 900;"></label>
                    </div>
                    <div class="row control-input">
                        <label for="">In Charge</label>
                    </div>
                </div>
            </div>

        </div>
        <div class="card-body">
            <div class="row-header">
                <div class="control-form">
                    <label for="" style="font-style: italic;">Civil Service Form No. 48</label>
                </div>
                <div style="position: absolute;margin-top: 2rem;margin-left: 1rem;">
                    <img class="" style="width: 6rem;" alt="" src="{{ asset('assets/images/logo.jpg')}}" />
                </div>
                <div class="row control-input" style="align-items: center;padding-bottom: .5rem;">
                    <label for="">Republic of the Philippines</label>
                </div>
                <div class="row control-input" style="align-items: center;padding-bottom: .5rem;">
                    <label for="">Province of Southern Leyte</label>
                </div>
                <div class="row control-input" style="align-items: center;padding-bottom: .7rem;font-weight: 900">
                    <label for="">MUNICIPALITY OF BONTOC</label>
                </div>
                <div class="row control-input" style="align-items: center;padding-bottom: 2rem;font-weight: bolder;">
                    <label for="">DAILY TIME RECORD</label>
                </div>
                <div class="row control-input" style="border-bottom: 1px solid black">
                    <label for="" style="font-weight: 900;">{{ $employee->firstname }} {{ strtoupper($employee->middlename[0]) }}.  {{ $employee->lastname }} </label>
                </div>
                <div class="row control-input">
                    <label for="">(Name)</label>
                </div>
                <div class="control-form">
                    <div style="display: flex; width: 100%;">
                        <label for="" style="font-size: 1rem;" >For the mont of: </label>
                        <div class="container-row" style="flex-grow: 1; justify-content: center;border-bottom: 1px solid black">
                            <label for="" style="font-weight: 900; padding-left: 5px;">{{ date('F', strtotime("$year-$month-01")) }} <span id="dates2"></span> {{ $year }}</label>
                        </div>
                    </div>
                </div>
                <div class="control-form">
                    <div style="display: flex; width: 100%;">
                        <label for="" style="font-size: smaller; padding-right: .3rem;" >Office hours of arrival and departure</label>
                        <label for="" style="font-size: smaller; padding-right: .3rem;" >(Regular days)</label>
                        <div class="container-row" style="flex-grow: 1; justify-content: center;border-bottom: 1px solid black">
                            <label for="" style="font-size: smaller;padding-left: 5px;">8:00am-12:00pm;1:00pm-5:00pm</label>
                        </div>
                    </div>
                </div>
                <div class="control-form">
                    <div style="display: flex; width: 100%; justify-content: flex-end;">
                        <label for="" style="font-size: smaller; padding-right: .3rem;" >(Saturdays)</label>
                        <div class="" style="width: 200px; justify-content: center;border-bottom: 1px solid black">
                            <label for="" style="font-size: smaller;padding-left: 5px;">                            </label>
                        </div>
                    </div>
                </div>
                <br>
                
            </div>
             <table id="IDtable" border="1" style="border-collapse: collapse;" width="480" height="400" align="center">
                <tr>
                    <th rowspan="2">Day</th>
                    <th colspan="2">A.M.</th>
                    <th colspan="2">P.M.</th>
                    <th colspan="2">Undertime</th>
                </tr>

                <tr>
                    <th>Arrival</th>
                    <th>Departure</th>
                    <th>Arrival</th>
                    <th>Departure</th>
                    <th>Hours</th>
                    <th>Minutes</th>
                </tr>
                 @foreach($daysList as $day)
                    <tr>
                        <th>{{ Carbon\Carbon::parse($day)->format('d') }}</th>
                        @if(Carbon\Carbon::parse($day)->dayOfWeek == 6)
                            <th colspan="6">Saturday</th>
                        @elseif(Carbon\Carbon::parse($day)->dayOfWeek == 0)
                            <th colspan="6">Sunday</th>
                        @else
                            @if(Carbon\Carbon::parse($day) <= Carbon\Carbon::parse($endDate))
                                @if($holiday = App\Models\Holiday::whereDate('startdate', Carbon\Carbon::parse($day))->first())
                                    <th colspan="6">{{ $holiday->nameofholiday }}</th>
                                @else
                                @if(Carbon\Carbon::parse($day) >= Carbon\Carbon::parse($startDate))
                                        @if($attendance = App\Models\Attendance::whereDate('date', Carbon\Carbon::parse($day))->where('biometric', $emp_num)->first())
                                            @if(Carbon\Carbon::parse($day)->dayOfWeek <= 5)
                                                <th class="am_in">{{ $attendance->am_in }}</th>
                                                <th class="am_out">{{ $attendance->am_out }}</th>
                                                <th class="pm_in">{{ $attendance->pm_in }}</th>
                                                <th class="pm_out">{{ $attendance->pm_out }}</th> 
                                                @if($getUndertime = App\Models\Attendance::getUndertimeHour($attendance->am_in,$attendance->am_out, $attendance->pm_in,$attendance->pm_out))
                                                    <th>{{ Carbon\Carbon::parse($getUndertime)->format('H') }}</th>
                                                    <th>{{ Carbon\Carbon::parse($getUndertime)->format('i') }}</th>
                                                @else
                                                    <th></th>
                                                    <th></th>
                                                @endif
                                            
                                            @endif
                                        @else
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        @endif
                                    @else
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    @endif
                                @endif
                            @else
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            @endif
                        @endif
                    </tr>
                @endforeach
            </table>
            <div class="row-header">
                <div class="col-md-12">
                    <div class="control-form" style="padding-top: .7rem;">
                        <div style="display: flex; width: 100%; justify-content: flex-end;">
                            <label for="" style="font-size: smaller; padding-right: .3rem;" >Total:</label>
                            <div class="" style="width: 200px; justify-content: center;border-bottom: 1px solid black">
                                <label for="" style="font-size: smaller;padding-left: 5px;">                            </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="control-form">
                        <label for="" style="font-style: italic;">I CERTIFY on my honor that the above is a true and correct report of the </label>
                    </div>
                    <div class="control-form">
                        <label for="" style="font-style: italic;"> hours of work performed, record of which was made daily at the time of</label>
                    </div>
                    <div class="control-form" style="padding-bottom: 3rem;">
                        <label for="" style="font-style: italic;">arrival and departure from office.</label>
                    </div>
                    <div class="row control-input" style="border-bottom: 2px solid black">
                        <label for="" style="font-weight: 900;"></label>
                    </div>
                    <div class="row control-input" style="padding-bottom: 3rem;">
                        <label for="">Verified as to the prescribed office hours</label>
                    </div>
                    <div class="row control-input" style="border-bottom: 2px solid black">
                        <label for="" style="font-weight: 900;"></label>
                    </div>
                    <div class="row control-input">
                        <label for="">In Charge</label>
                    </div>
                </div>
            </div>
        </div>      
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        console.log( @json($daysList));
         $('.am_in').each(function(index) {
            var timeText = $(this).text(); // Get the time text from the element
            
            // Split the time text into hours, minutes, and seconds
            var timeParts = timeText.split(':');

            // Create a new Date object and set the time from the element
            var dateObj = new Date();
            dateObj.setHours(parseInt(timeParts[0], 10)); // Hours
            dateObj.setMinutes(parseInt(timeParts[1], 10)); // Minutes
            dateObj.setSeconds(parseInt(timeParts[2], 10)); // Seconds

            var timeParts2 = "8:00:00";

            // Split the fixed time text into hours, minutes, and seconds
            var timePartsFixed = timeParts2.split(':');

            // Create a new Date object and set the fixed time
            var dateObj2 = new Date();
            dateObj2.setHours(parseInt(timePartsFixed[0], 10)); // Hours
            dateObj2.setMinutes(parseInt(timePartsFixed[1], 10)); // Minutes
            dateObj2.setSeconds(parseInt(timePartsFixed[2], 10)); // Seconds

            // Compare dateObj with dateObj2
            if (dateObj > dateObj2) {
                $(this).css('color', 'red');
            } else if (dateObj < dateObj2) {
                console.log("dateObj is less than dateObj2");
            } else {
                console.log("dateObj is equal to dateObj2");
            }
            if(timeText != ""){
                let [hours, minutes, seconds] = timeText.split(':');
                let date = new Date(2000, 0, 1, hours, minutes, seconds);
                let formattedTime = date.toLocaleTimeString('en-US', { hour: 'numeric', minute: '2-digit' });
                $(this).text(formattedTime);
            }

        });
        $('.am_out').each(function(index) {
            var timeText = $(this).text(); // Get the time text from the element
            if(timeText != ""){
                let [hours, minutes, seconds] = timeText.split(':');
                let date = new Date(2000, 0, 1, hours, minutes, seconds);
                let formattedTime = date.toLocaleTimeString('en-US', { hour: 'numeric', minute: '2-digit' });
                $(this).text(formattedTime);
            }
        });
        $('.pm_in').each(function(index) {
            var timeText = $(this).text(); // Get the time text from the element
            
            // Split the time text into hours, minutes, and seconds
            var timeParts = timeText.split(':');

            // Create a new Date object and set the time from the element
            var dateObj = new Date();
            dateObj.setHours(parseInt(timeParts[0], 10)); // Hours
            dateObj.setMinutes(parseInt(timeParts[1], 10)); // Minutes
            dateObj.setSeconds(parseInt(timeParts[2], 10)); // Seconds

            var timeParts2 = "13:00:00";

            // Split the fixed time text into hours, minutes, and seconds
            var timePartsFixed = timeParts2.split(':');

            // Create a new Date object and set the fixed time
            var dateObj2 = new Date();
            dateObj2.setHours(parseInt(timePartsFixed[0], 10)); // Hours
            dateObj2.setMinutes(parseInt(timePartsFixed[1], 10)); // Minutes
            dateObj2.setSeconds(parseInt(timePartsFixed[2], 10)); // Seconds
            // Compare dateObj with dateObj2
            if (dateObj > dateObj2) {
                $(this).css('color', 'red');
            } else if (dateObj < dateObj2) {
                console.log("dateObj is less than dateObj2");
            } else {
                console.log("dateObj is equal to dateObj2");
            }
            if(timeText != ""){
                let [hours, minutes, seconds] = timeText.split(':');
                let date = new Date(2000, 0, 1, hours, minutes, seconds);
                let formattedTime = date.toLocaleTimeString('en-US', { hour: 'numeric', minute: '2-digit' });
                $(this).text(formattedTime);
            }
        });
        $('.pm_out').each(function(index) {
            var timeText = $(this).text(); // Get the time text from the element
            if(timeText != ""){
                let [hours, minutes, seconds] = timeText.split(':');
                let date = new Date(2000, 0, 1, hours, minutes, seconds);
                let formattedTime = date.toLocaleTimeString('en-US', { hour: 'numeric', minute: '2-digit' });
                $(this).text(formattedTime);
            }
        });
    </script>
</body>
</html>
 