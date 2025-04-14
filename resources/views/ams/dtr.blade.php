@if(isset($employees))
    @foreach($employees as $employee)
    @endforeach
@endif
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
                    <img class="" style="width: 6rem;" alt="" src="{{ assets('assets/images/logo.jpg')}}" />
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
                            <label for="" style="font-weight: 900; padding-left: 5px;">{{ date('F', strtotime("$year-$month-01")) }} <span id="dates"></span> {{ $year }}</label>
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
                    <th>Arrival</th>
                    <th>Departure</th>
                </tr>
                <script>
                    var attendances = @json($attendanceList);
                    var employee = @json($employees);
                    var count = Object.keys(attendances).length;
                    var dates = document.getElementById('dates');
                    let holiday = @json($holiday);
                    let hCount = Object.keys(holiday).length;
                    var x=0;
                    var ctr = Object.keys(employee).length;
                    var stat = (ctr > 1) ? 1 : 0;

                    var hDates ={};
                    for(var i=0; i<hCount; i++){
                        var strDate = holiday[i]['startdate'];
                        var endDate = holiday[i]['enddate'];
                        var holidayName = holiday[i]['holidayName'];
                        // Extracting day part 
                        var sDate = parseInt(strDate.split('-')[2]);
                        var eDate = parseInt(endDate.split('-')[2]);
                        hDates[i] = {holidayName: holidayName,hDays: []};

                        if(sDate < eDate){
                            for(var d=sDate; d<=eDate; d++){
                                hDates[i].hDays.push(d);
                            }
                        }else{
                            hDates[i].hDays.push(sDate);
                        }
                    }
                    let month = @json($month);
                    let year = @json($year);
                    // Get the first and last day of the month
                    var firstDay = new Date(year, month - 1, 1);
                    var lastDay = new Date(year, month, 0);

                    // Initialize an array to store Saturdays and Sundays
                    var weekends = [];
                    var dayName = '';
                    var dat = '';
                    
                    // Iterate through the days of the month
                    for (var day = firstDay; day <= lastDay; day.setDate(day.getDate() + 1)) {
                        // Check if the current day is a Saturday or Sunday
                        if (day.getDay() === 0 || day.getDay() === 6) {
                            dayName = day.toLocaleDateString('en-US', { weekday: 'long' });
                            dat = new Date(day).getDate();
                            weekends.push({d:dayName,dte:dat}); // Store the date
                        }
                    }
                    console.log(weekends);
                    if(employee[stat]['status'] == "Job Order" || employee[stat]['status'] == "Casual"){
                        
                        dates.textContent = '1-15';
                        for(i=1; i<=15; i++){
                            document.write("<tr>"); 
                            document.write("<th>"+i+"</th>");
                            var present = false;
                            var isHoliday = false;
                            if(hCount > 0){
                                isHoliday = true;
                            }

                            if(hCount > 0){
                                isHoliday = true;
                                var isFound = false;
                                var notFound = 0;
                                for (let j = 0; j < hCount; j++) {
                                    isFound = false;
                                    
                                    let hDaycnt = hDates[j]['hDays'].length;
                                    for (let x = 0; x < hDaycnt; x++) {
                                        if (hDates[j].hDays[x] === i) {
                                            document.write("<th colspan='2' style='color:#ff6347'>HOLIDAY</th>");
                                            document.write("<th colspan='2' style='color:#ff6347'>"+hDates[j].holidayName+"</th>");
                                            isFound = true;
                                            break; // Break out of the inner loop once the value is found
                                        }
                                    }
                                    if (isFound) {
                                        break; // Break out of the outer loop once the value is found
                                    }else{
                                        notFound++;
                                    }
                                    if(notFound == hCount){
                                            console.log(count);
                                            if(count != 0){
                                                for(x=0; x<count; x++){

                                                var am_in = attendances[x]['am_in'] === null? "" : attendances[x]['am_in'];
                                                var am_out = attendances[x]['am_out'] === null? "" : attendances[x]['am_out'];
                                                var pm_in = attendances[x]['pm_in'] === null? "" : attendances[x]['pm_in'];
                                                var pm_out = attendances[x]['pm_out'] === null? "" : attendances[x]['pm_out'];
                                                var dte = attendances[x]['date'];
                                                
                                                am_in = militaryTo12HrTime(am_in);
                                                am_out = militaryTo12HrTime(am_out);
                                                pm_in = militaryTo12HrTime(pm_in);
                                                pm_out = militaryTo12HrTime(pm_out);
                                                dte = new Date(dte).getDate();
                                                var color = "";                      
                                                if(am_in != ""){
                                                    //if the time in is late. the color will change in to red
                                                    const am = new Date("2023-01-01 8:00 AM");
                                                    const time_in = new Date("2023-01-01 " + am_in);
                                                    
                                                    if(time_in > am){
                                                        color = 'style="color:red;"';
                                                    }
                                                }
                                                var color_pm = "";
                                                if(pm_in != ""){
                                                    //if the time in is late. the color will change in to red
                                                    const pm = new Date("2023-01-01 1:00 PM");
                                                    const time_in = new Date("2023-01-01 " + pm_in);
                                            
                                                    if(time_in > pm){
                                                        color_pm = 'style="color:red;"';
                                                    }
                                                }
                                                if(i == dte){
                                                    document.write("<th "+color+">"+am_in+"</th>");
                                                    document.write("<th>"+am_out+"</th>");
                                                    document.write("<th "+color_pm+">"+pm_in+"</th>");
                                                    document.write("<th>"+pm_out+"</th>");
                                                    present = true;
                                                    break;
                                                }else{
                                                    isHoliday = false;
                                                }

                                            }

                                        }else{
                                            document.write("<th></th>");
                                            document.write("<th></th>");
                                            document.write("<th></th>");
                                            document.write("<th></th>");
                                        }       

                                        
                                        
                                    }
                                }
                            }else{

                                for(x=0; x<count; x++){

                                    var am_in = attendances[x]['am_in'] === null? "" : attendances[x]['am_in'];
                                    var am_out = attendances[x]['am_out'] === null? "" : attendances[x]['am_out'];
                                    var pm_in = attendances[x]['pm_in'] === null? "" : attendances[x]['pm_in'];
                                    var pm_out = attendances[x]['pm_out'] === null? "" : attendances[x]['pm_out'];
                                    var dte = attendances[x]['date'];
                                    am_in = militaryTo12HrTime(am_in);
                                    am_out = militaryTo12HrTime(am_out);
                                    pm_in = militaryTo12HrTime(pm_in);
                                    pm_out = militaryTo12HrTime(pm_out);
                                    dte = new Date(dte).getDate();
                                    console.log(dte);

                                    var color = "";                      
                                    if(am_in != ""){
                                        //if the time in is late. the color will change in to red
                                        const am = new Date("2023-01-01 8:00 AM");
                                        const time_in = new Date("2023-01-01 " + am_in);
                                        
                                        if(time_in > am){
                                            color = 'style="color:red;"';
                                        }
                                    }
                                    var color_pm = "";
                                    if(pm_in != ""){
                                        //if the time in is late. the color will change in to red
                                        const pm = new Date("2023-01-01 1:00 PM");
                                        const time_in = new Date("2023-01-01 " + pm_in);
                                
                                        if(time_in > pm){
                                            color_pm = 'style="color:red;"';
                                        }
                                    }
                                    if(i == dte){
                                        document.write("<th "+color+">"+am_in+"</th>");
                                        document.write("<th>"+am_out+"</th>");
                                        document.write("<th "+color_pm+">"+pm_in+"</th>");
                                        document.write("<th>"+pm_out+"</th>");
                                        present = true;
                                        break;
                                    }
                                }
                            }
                            
                            if(!isHoliday && !present){
                                // absent or saturday & sunday
                                var isWeekends = false;
                                for(var d = 0;d < weekends.length; d++){
                                    if(i == weekends[d]['dte']){
                                        document.write('<th colspan="2">'+weekends[d]['d']+'</th>');
                                        document.write("<th></th>");
                                        document.write("<th></th>");
                                        isWeekends = true;
                                        break;
                                    }
                                    
                                }
                                if(!isWeekends){
                                    document.write("<th></th>");
                                    document.write("<th></th>");
                                    document.write("<th></th>");
                                    document.write("<th></th>");
                                }
                            }
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<tr>");
                        }
                        for(i=16; i<=31; i++){
                            document.write("<tr>");
                            document.write("<th>"+i+"</th>");
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<tr>");
                        }     
                    }else{

                        dates.textContent = '1-31';
                        for(i=1; i<=31; i++){
                            document.write("<tr>");
                            document.write("<th>"+i+"</th>");
                            var present = false;
                            var isHoliday = false;
                            if(hCount > 0){
                                isHoliday = true;
                            }

                            if(hCount > 0){
                                isHoliday = true;
                                var isFound = false;
                                var notFound = 0;
                                for (let j = 0; j < hCount; j++) {
                                    isFound = false;
                                    
                                    let hDaycnt = hDates[j]['hDays'].length;
                                    for (let x = 0; x < hDaycnt; x++) {
                                        if (hDates[j].hDays[x] === i) {
                                            document.write("<th colspan='2' style='color:#ff6347'>HOLIDAY</th>");
                                            document.write("<th colspan='2' style='color:#ff6347'>"+hDates[j].holidayName+"</th>");
                                            isFound = true;
                                            break; // Break out of the inner loop once the value is found
                                        }
                                    }
                                    if (isFound) {
                                        break; // Break out of the outer loop once the value is found
                                    }else{
                                        notFound++;
                                    }
                                    
                                    if(notFound == hCount){
                                        console.log('gdsss');
                                        if(count != 0)
                                        {
                                            for(x=0; x<count; x++){
                                            var am_in = attendances[x]['am_in'] === null? "" : attendances[x]['am_in'];
                                            var am_out = attendances[x]['am_out'] === null? "" : attendances[x]['am_out'];
                                            var pm_in = attendances[x]['pm_in'] === null? "" : attendances[x]['pm_in'];
                                            var pm_out = attendances[x]['pm_out'] === null? "" : attendances[x]['pm_out'];
                                            var dte = attendances[x]['date'];
                                            am_in = militaryTo12HrTime(am_in);
                                            am_out = militaryTo12HrTime(am_out);
                                            pm_in = militaryTo12HrTime(pm_in);
                                            pm_out = militaryTo12HrTime(pm_out);
                                            dte = new Date(dte).getDate();

                                            var color = "";  
                                            if(am_in != ""){
                                                //if the time in is late. the color will change in to red
                                                const am = new Date("2023-01-01 8:00 AM");
                                                const time_in = new Date("2023-01-01 " + am_in);

                                                if(time_in > am){
                                                    color = 'style="color:red;"';
                                                }
                                            }
                                            var color_pm = "";
                                            if(pm_in != ""){
                                                //if the time in is late. the color will change in to red
                                                const pm = new Date("2023-01-01 1:00 PM");
                                                const time_in = new Date("2023-01-01 " + pm_in);
                                        
                                                if(time_in > pm){
                                                    color_pm = 'style="color:red;"';
                                                }
                                            }
                                            if(i == dte){
                                                document.write("<th "+color+">"+am_in+"</th>");
                                                document.write("<th>"+am_out+"</th>");
                                                document.write("<th "+color_pm+">"+pm_in+"</th>");
                                                document.write("<th>"+pm_out+"</th>");
                                                present = true;
                                                break;
                                                }else{
                                                    isHoliday = false;
                                                }

                                            }
                                        }else{
                                            document.write("<th></th>");    
                                            document.write("<th></th>");
                                            document.write("<th></th>");
                                            document.write("<th></th>");
                                        }
                                        
                                        
                                    }
                                }
                            }else{
                                for(x=0; x<count; x++){
                                    var am_in = attendances[x]['am_in'] === null? "" : attendances[x]['am_in'];
                                    var am_out = attendances[x]['am_out'] === null? "" : attendances[x]['am_out'];
                                    var pm_in = attendances[x]['pm_in'] === null? "" : attendances[x]['pm_in'];
                                    var pm_out = attendances[x]['pm_out'] === null? "" : attendances[x]['pm_out'];
                                    var dte = attendances[x]['date'];
                                    am_in = militaryTo12HrTime(am_in);
                                    am_out = militaryTo12HrTime(am_out);
                                    pm_in = militaryTo12HrTime(pm_in);
                                    pm_out = militaryTo12HrTime(pm_out);
                                    dte = new Date(dte).getDate();
                                    var color = ""; 
                                    if(am_in != ""){
                                        //if the time in is late. the color will change in to red
                                        const am = new Date("2023-01-01 8:00 AM");
                                        const time_in = new Date("2023-01-01 " + am_in);
                                        
                                        if(time_in > am){
                                            color = 'style="color:red;"';
                                        }
                                    }
                                    var color_pm = "";
                                    if(pm_in != ""){
                                        //if the time in is late. the color will change in to red
                                        const pm = new Date("2023-01-01 1:00 PM");
                                        const time_in = new Date("2023-01-01 " + pm_in);
                                
                                        if(time_in > pm){
                                            color_pm = 'style="color:red;"';
                                        }
                                    }
                                    if(i == dte){
                                        document.write("<th "+color+">"+am_in+"</th>");
                                        document.write("<th>"+am_out+"</th>");
                                        document.write("<th "+color_pm+">"+pm_in+"</th>");
                                        document.write("<th>"+pm_out+"</th>");
                                        present = true;
                                        break;
                                    }
                                }
                            }
                           
                            if(!isHoliday && !present){
                                // absent or saturday & sunday
                                var isWeekends = false;
                                for(var d = 0;d < weekends.length; d++){
                                    if(i == weekends[d]['dte']){
                                        document.write('<th colspan="2">'+weekends[d]['d']+'</th>');
                                        document.write("<th></th>");
                                        document.write("<th></th>");
                                        isWeekends = true;
                                        break;
                                    }
                                    
                                }
                                if(!isWeekends){
                                    document.write("<th></th>");
                                    document.write("<th></th>");
                                    document.write("<th></th>");
                                    document.write("<th></th>");
                                }
                            }
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<tr>");
                        }
                    }
                    function militaryTo12HrTime(militaryTime) {
                        if (!militaryTime) {
                            return ""; // Handle the case where militaryTime is empty
                        }
                        // Split the military time string into hours and minutes
                        const [hours, minutes] = militaryTime.split(':').map(Number);

                        // Determine whether it's AM or PM
                        const period = hours < 12 ? "AM" : "PM";

                        // Convert to 12-hour format
                        let twelveHourTime = hours % 12;
                        if (twelveHourTime === 0) {
                            twelveHourTime = 12; // 12:00 AM or 12:00 PM
                        }

                        // Format the time in 12-hour format
                        twelveHourTime = `${twelveHourTime.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')} ${period}`;
                        
                        return twelveHourTime;
                    }
                    
                </script>
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
                    <img class="" style="width: 6rem;" alt="" src="{{ asset('assets/css/dstyle/logo.JPG')}}" />
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
                    <th>Arrival</th>
                    <th>Departure</th>
                </tr>
                <script>
                    var attendances = @json($attendanceList);
                    var employee = @json($employees);
                    var count = Object.keys(attendances).length;
                    var dates2 = document.getElementById('dates2');
                    // let holiday = @json($holiday);
                    // let hCount = Object.keys(holiday).length;
                    var x=0;

                    var hDates ={};
                    for(var i=0; i<hCount; i++){
                        var strDate = holiday[i]['startdate'];
                        var endDate = holiday[i]['enddate'];
                        var holidayName = holiday[i]['holidayName'];
                        // Extracting day part 
                        var sDate = parseInt(strDate.split('-')[2]);
                        var eDate = parseInt(endDate.split('-')[2]);
                        hDates[i] = {holidayName: holidayName,hDays: []};

                        if(sDate < eDate){
                            for(var d=sDate; d<=eDate; d++){
                                hDates[i].hDays.push(d);
                            }
                        }else{
                            hDates[i].hDays.push(sDate);
                        }
                    }
                    if(employee[stat]['status'] == "Job Order" || employee[stat]['status'] == "Casual"){
                        dates2.textContent = '16-31';
                        for(i=1; i<=15; i++){
                            document.write("<tr>");
                            document.write("<th>"+i+"</th>");
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<tr>");
                        }     
                        for(i=16; i<=31; i++){
                            document.write("<tr>");
                            document.write("<th>"+i+"</th>");
                            var present = false;
                            var isHoliday = false;
                            if(hCount > 0){
                                isHoliday = true;
                            }

                            if(hCount > 0){
                                isHoliday = true;
                                var isFound = false;
                                var notFound = 0;
                                for (let j = 0; j < hCount; j++) {
                                    isFound = false;
                                    
                                    let hDaycnt = hDates[j]['hDays'].length;
                                    for (let x = 0; x < hDaycnt; x++) {
                                        if (hDates[j].hDays[x] === i) {
                                            document.write("<th colspan='2' style='color:#ff6347'>HOLIDAY</th>");
                                            document.write("<th colspan='2' style='color:#ff6347'>"+hDates[j].holidayName+"</th>");
                                            isFound = true;
                                            break; // Break out of the inner loop once the value is found
                                        }
                                    }
                                    if (isFound) {
                                        break; // Break out of the outer loop once the value is found
                                    }else{
                                        notFound++;
                                    }
                                    if(notFound == hCount){

                                        if(count != 0){
                                            for(x=0; x<count; x++){
                                            var am_in = attendances[x]['am_in'] === null? "" : attendances[x]['am_in'];
                                            var am_out = attendances[x]['am_out'] === null? "" : attendances[x]['am_out'];
                                            var pm_in = attendances[x]['pm_in'] === null? "" : attendances[x]['pm_in'];
                                            var pm_out = attendances[x]['pm_out'] === null? "" : attendances[x]['pm_out'];
                                            var dte = attendances[x]['date'];
                                            am_in = militaryTo12HrTime(am_in);
                                            am_out = militaryTo12HrTime(am_out);
                                            pm_in = militaryTo12HrTime(pm_in);
                                            pm_out = militaryTo12HrTime(pm_out);
                                            dte = new Date(dte).getDate();
                                            var color = "";                      
                                            if(am_in != ""){
                                                //if the time in is late. the color will change in to red
                                                const am = new Date("2023-01-01 8:00 AM");
                                                const time_in = new Date("2023-01-01 " + am_in);
                                                
                                                if(time_in > am){
                                                    color = 'style="color:red;"';
                                                }
                                            }
                                            var color_pm = "";
                                            if(pm_in != ""){
                                                //if the time in is late. the color will change in to red
                                                const pm = new Date("2023-01-01 1:00 PM");
                                                const time_in = new Date("2023-01-01 " + pm_in);
                                        
                                                if(time_in > pm){
                                                    color_pm = 'style="color:red;"';
                                                }
                                            }
                                            if(i == dte){
                                                document.write("<th "+color+">"+am_in+"</th>");
                                                document.write("<th>"+am_out+"</th>");
                                                document.write("<th "+color_pm+">"+pm_in+"</th>");
                                                document.write("<th>"+pm_out+"</th>");
                                                present = true;
                                                break;
                                            }else{
                                                isHoliday = false;
                                            }

                                        }
                                        
                                    }else{
                                        document.write("<th></th>");
                                        document.write("<th></th>");
                                        document.write("<th></th>");
                                        document.write("<th></th>");
                                    }
                                }
                                    
                                }
                                        
                            }else{
                                for(x=0; x<count; x++){
                                    var am_in = attendances[x]['am_in'] === null? "" : attendances[x]['am_in'];
                                    var am_out = attendances[x]['am_out'] === null? "" : attendances[x]['am_out'];
                                    var pm_in = attendances[x]['pm_in'] === null? "" : attendances[x]['pm_in'];
                                    var pm_out = attendances[x]['pm_out'] === null? "" : attendances[x]['pm_out'];
                                    var dte = attendances[x]['date'];
                                    am_in = militaryTo12HrTime(am_in);
                                    am_out = militaryTo12HrTime(am_out);
                                    pm_in = militaryTo12HrTime(pm_in);
                                    pm_out = militaryTo12HrTime(pm_out);
                                    dte = new Date(dte).getDate();
                                    var color = "";                      
                                    if(am_in != ""){
                                        //if the time in is late. the color will change in to red
                                        const am = new Date("2023-01-01 8:00 AM");
                                        const time_in = new Date("2023-01-01 " + am_in);
                                        
                                        if(time_in > am){
                                            color = 'style="color:red;"';
                                        }
                                    }
                                    var color_pm = "";
                                    if(pm_in != ""){
                                        //if the time in is late. the color will change in to red
                                        const pm = new Date("2023-01-01 1:00 PM");
                                        const time_in = new Date("2023-01-01 " + pm_in);
                                
                                        if(time_in > pm){
                                            color_pm = 'style="color:red;"';
                                        }
                                    }
                                    if(i == dte){
                                        document.write("<th "+color+">"+am_in+"</th>");
                                        document.write("<th>"+am_out+"</th>");
                                        document.write("<th "+color_pm+">"+pm_in+"</th>");
                                        document.write("<th>"+pm_out+"</th>");
                                        present = true;
                                        break;
                                    }
                                }
                            }
                            
                            if(!isHoliday && !present){
                                // absent or saturday & sunday
                                var isWeekends = false;
                                for(var d = 0;d < weekends.length; d++){
                                    if(i == weekends[d]['dte']){
                                        document.write('<th colspan="2">'+weekends[d]['d']+'</th>');
                                        document.write("<th></th>");
                                        document.write("<th></th>");
                                        isWeekends = true;
                                        break;
                                    }
                                    
                                }
                                if(!isWeekends){
                                    document.write("<th></th>");
                                    document.write("<th></th>");
                                    document.write("<th></th>");
                                    document.write("<th></th>");
                                }
                            }
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<tr>");
                        }
                    }else{
                        dates2.textContent = '1-31';
                        for(i=1; i<=31; i++){
                            document.write("<tr>");
                            document.write("<th>"+i+"</th>");
                            var present = false;
                            var isHoliday = false;
                            if(hCount > 0){
                                isHoliday = true;
                            }

                            if(hCount > 0){
                                isHoliday = true;
                                var isFound = false;
                                var notFound = 0;
                                for (let j = 0; j < hCount; j++) {
                                    isFound = false;
                                    
                                    let hDaycnt = hDates[j]['hDays'].length;
                                    for (let x = 0; x < hDaycnt; x++) {
                                        if (hDates[j].hDays[x] === i) {
                                            document.write("<th colspan='2' style='color:#ff6347'>HOLIDAY</th>");
                                            document.write("<th colspan='2' style='color:#ff6347'>"+hDates[j].holidayName+"</th>");
                                            isFound = true;
                                            break; // Break out of the inner loop once the value is found
                                        }
                                    }
                                    if (isFound) {
                                        break; // Break out of the outer loop once the value is found
                                    }else{
                                        notFound++;
                                    }
                                    
                                    if(notFound == hCount){
                                        console.log('qqq');
                                        if(count != 0){
                                            for(x=0; x<count; x++){
                                            var am_in = attendances[x]['am_in'] === null? "" : attendances[x]['am_in'];
                                            var am_out = attendances[x]['am_out'] === null? "" : attendances[x]['am_out'];
                                            var pm_in = attendances[x]['pm_in'] === null? "" : attendances[x]['pm_in'];
                                            var pm_out = attendances[x]['pm_out'] === null? "" : attendances[x]['pm_out'];
                                            var dte = attendances[x]['date'];
                                            am_in = militaryTo12HrTime(am_in);
                                            am_out = militaryTo12HrTime(am_out);
                                            pm_in = militaryTo12HrTime(pm_in);
                                            pm_out = militaryTo12HrTime(pm_out);
                                            dte = new Date(dte).getDate();
                                            var color_am = "";
                                            if(am_in != ""){
                                                //if the time in is late. the color will change in to red
                                                const am = new Date("2023-01-01 8:00 AM");
                                                const time_in = new Date("2023-01-01 " + am_in);
                                        
                                                if(time_in > am){
                                                    color_am = 'style="color:red;"';
                                                }
                                            }
                                            var color_pm = "";
                                            if(pm_in != ""){
                                                //if the time in is late. the color will change in to red
                                                const pm = new Date("2023-01-01 1:00 PM");
                                                const time_in = new Date("2023-01-01 " + pm_in);
                                        
                                                if(time_in > pm){
                                                    color_pm = 'style="color:red;"';
                                                }
                                            }
                                            if(i == dte){
                                                document.write("<th "+color_am+">"+am_in+"</th>");
                                                document.write("<th>"+am_out+"</th>");
                                                document.write("<th "+color_pm+">"+pm_in+"</th>");
                                                document.write("<th>"+pm_out+"</th>");
                                                present = true;
                                                break;
                                            }else{
                                                isHoliday = false;
                                            }

                                        }
                                        }else{
                                            document.write("<th></th>");
                                            document.write("<th></th>");
                                            document.write("<th></th>");
                                            document.write("<th></th>");
                                        }
                                        
                                        
                                    }
                                }
                            }else{
                                for(x=0; x<count; x++){
                                    var am_in = attendances[x]['am_in'] === null? "" : attendances[x]['am_in'];
                                    var am_out = attendances[x]['am_out'] === null? "" : attendances[x]['am_out'];
                                    var pm_in = attendances[x]['pm_in'] === null? "" : attendances[x]['pm_in'];
                                    var pm_out = attendances[x]['pm_out'] === null? "" : attendances[x]['pm_out'];
                                    var dte = attendances[x]['date'];
                                    am_in = militaryTo12HrTime(am_in);
                                    am_out = militaryTo12HrTime(am_out);
                                    pm_in = militaryTo12HrTime(pm_in);
                                    pm_out = militaryTo12HrTime(pm_out);
                                    dte = new Date(dte).getDate();
                                    var color = "";                      
                                    if(am_in != ""){
                                        //if the time in is late. the color will change in to red
                                        const am = new Date("2023-01-01 8:00 AM");
                                        const time_in = new Date("2023-01-01 " + am_in);
                                        
                                        if(time_in > am){
                                            color = 'style="color:red;"';
                                        }
                                    }
                                    var color_pm = "";
                                    if(pm_in != ""){
                                        //if the time in is late. the color will change in to red
                                        const pm = new Date("2023-01-01 1:00 PM");
                                        const time_in = new Date("2023-01-01 " + pm_in);
                                
                                        if(time_in > pm){
                                            color_pm = 'style="color:red;"';
                                        }
                                    }
                                    if(i == dte){
                                        document.write("<th "+color+">"+am_in+"</th>");
                                        document.write("<th>"+am_out+"</th>");
                                        document.write("<th "+color_pm+">"+pm_in+"</th>");
                                        document.write("<th>"+pm_out+"</th>");
                                        present = true;
                                        break;
                                    }
                                }
                            }
                           
                            if(!isHoliday && !present){
                                // absent or saturday & sunday
                                var isWeekends = false;
                                for(var d = 0;d < weekends.length; d++){
                                    if(i == weekends[d]['dte']){
                                        document.write('<th colspan="2">'+weekends[d]['d']+'</th>');
                                        document.write("<th></th>");
                                        document.write("<th></th>");
                                        isWeekends = true;
                                        break;
                                    }
                                    
                                }
                                if(!isWeekends){
                                    document.write("<th></th>");
                                    document.write("<th></th>");
                                    document.write("<th></th>");
                                    document.write("<th></th>");
                                }
                            }
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<tr>");
                        }
                    }
                    function militaryTo12HrTime(militaryTime) {
                        if (!militaryTime) {
                            return ""; // Handle the case where militaryTime is empty
                        }
                        // Split the military time string into hours and minutes
                        const [hours, minutes] = militaryTime.split(':').map(Number);

                        // Determine whether it's AM or PM
                        const period = hours < 12 ? "AM" : "PM";

                        // Convert to 12-hour format
                        let twelveHourTime = hours % 12;
                        if (twelveHourTime === 0) {
                            twelveHourTime = 12; // 12:00 AM or 12:00 PM
                        }

                        // Format the time in 12-hour format
                        twelveHourTime = `${twelveHourTime.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')} ${period}`;
                        
                        return twelveHourTime;
                    }
                </script>
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
</body>
</html>
    <script type="text/javascript">

    
    
</script>