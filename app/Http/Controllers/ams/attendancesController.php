<?php

namespace App\Http\Controllers\ams;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendance as Attendances;
use Carbon\Carbon;

class attendancesController extends Controller
{
     public function index()
    {
        $attendance=Attendances::orderby('date', 'asc')->paginate(10);
        return view('ams.attendances', ['attendance' =>$attendance
        ]);
    }


    public function showWorkingHoursList($biometric)
    {
            $workingHours = Attendances::where('biometric', $biometric)->get();
            $workingHoursList = [];

            foreach ($workingHours as $entry) {

                $amIn = $entry->am_in;
                $amOut = $entry->am_out;
                $pmIn = $entry->pm_in;
                $pmOut = $entry->pm_out;
                $calc = 0;

                

                $workingHoursList[] = [
                    'am_in' => $entry->am_in,
                    'am_out'=> $entry->am_out, 
                    'pm_in'=> $entry->pm_in, 
                    'pm_out'=>  $entry->pm_out,
                    'working_hours' => $calc
                ];
            }

            return view('ams.attendances', compact('workingHoursList'));
    }

    public function import_csv(Request $request){
        if (isset($request->datFile)) {
            $targetDir = "uploads/"; // Change this to the directory where you want to store the uploaded .dat files
            $targetFile = $targetDir . basename($_FILES["datFile"]["name"]);
            $uploadOk = 1;
            $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            // Check if the file is a .dat file
            if ($fileType != "dat") {
                echo "Only .dat files are allowed.";
                $uploadOk = 0;
            }

            // Check if the file was successfully uploaded
            if ($uploadOk == 0) {
                echo "File upload failed.";
            } else {
                // if (move_uploaded_file($_FILES["datFile"]["tmp_name"], $targetFile)) {
                    $this::savetodb($_FILES["datFile"]["tmp_name"]);
                // } else {
                    // echo "Error uploading the file.";
                // }
            }
        }
    }
    public static function savetodb($filename){
        $delimiter = "\t";
        // Check if the file exists
        if (file_exists($filename)) {
            // Open the file for reading
            $file = fopen($filename, "r");

            // Check if the file was opened successfully
            if ($file) {
                while (!feof($file)) {
                    // Read a line from the file
                    $row = fgets($file);

                    // Process the data from each row
                    if ($row !== false) {
                        // Do something with $row, e.g., print it
                        $columns = explode($delimiter, $row);
                        // Process the columns as needed

                        $biometric = trim($columns[0]);
                        $csvdate = Carbon::parse(trim($columns[1]));
                        $hourIndex = trim($columns[3]);
                        $date = $csvdate->format('Y-m-d');
                        $checkAttendance = Attendances::where('biometric', $biometric)
                                                        ->where('date',$date)
                                                        ->first();

                        if(isset($checkAttendance)){
                            switch($hourIndex){
                                case 0://AM in 
                                    $checkAttendance->am_in = $csvdate->format('H:i:s');
                                    $checkAttendance->save();
                                    break;
                                case 4://AM out
                                    $checkAttendance->am_out = $csvdate->format('H:i:s');
                                    $checkAttendance->save();
                                    break;
                                case 5://PM in
                                    $checkAttendance->pm_in = $csvdate->format('H:i:s');
                                    $checkAttendance->save();
                                    break;
                                case 1://PM out
                                    $checkAttendance->pm_out = $csvdate->format('H:i:s');
                                    $checkAttendance->save();
                                    break;
                                    default:
                            }
                        }else{
                            if(!empty($biometric)){
                                $saveAttendance = new Attendances();
                                $saveAttendance->biometric = $biometric;
                                $saveAttendance->date = $date;
                                switch($hourIndex){
                                    case 0:
                                        $saveAttendance->am_in = $csvdate->format('H:i:s');
                                        break;
                                    case 4:
                                        $saveAttendance->am_out = $csvdate->format('H:i:s');
                                        break;
                                    case 5:
                                        $saveAttendance->pm_in = $csvdate->format('H:i:s');
                                        break;
                                    case 1:
                                        $saveAttendance->pm_out = $csvdate->format('H:i:s');
                                        break;
                                        default: 0;
                                }
                                $saveAttendance->save();

                            }
                        }
                    }
                }
                // Close the file
                fclose($file);
                
                return redirect()->back()->with('message', 'Successfully imported!!');
                
            } else{
                echo "Error opening the file.";
            }
        } else {
            echo "File not found.";
        }
    }

}