<?php

namespace App\Http\Controllers;

use App\Models\dbmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App;

class patientinfo extends Controller
{

    public function insertdb(Request $req)
    {
        $i = DB::table('patient_details')
        ->insert([
            'P_Name' => $req->input('name'),
            'P_DOB' => $req->input('dob'),
            'P_BloodGroup' => $req->input('bdg'),
            'P_Contact' => $req->input('con'),
            'P_Email' => $req->input('email'),
            'P_Address' => $req->input('address'),
            'Room_No' => $req->input('room'),
            'CheckIn' => $req->input('cin')
        ]);
        return redirect('/');
    }

    public function showdb(Request $req)
    {
        $p = DB::table('patient_details')->get();
        return view('show_details',['patient' => $p]);
    }

    public function history(Request $req)
    {
        $ph = DB::table('patient_history')->get();
        return view('patient_history',['patient' => $ph]);
    }

    public function updatedb(Request $req)
    {
        $p = DB::table('patient_details')->get();
        $pid = "";
        $pnm = "";
        $proom = "";
        $pcon = "";

        return view('update_details',['patient' => $p],compact('pid','pnm','proom','pcon'));
    }

    public function changeroom(Request $req)
    {
        $p = DB::table('patient_details')->get();

        $ckpid = DB::table('patient_details')
        ->where('P_ID', $req->input('p_id'))
        ->get();

        foreach ($ckpid as $user)
        {
            $pid =  $user->P_ID;
            $pnm =  $user->P_Name;
            $proom =  $user->Room_No;
            $pcon =  $user->P_Contact;
        }

        return view('update_details',['patient' => $p],compact('pid','pnm','proom','pcon'));
    }

    public function confirmupdate(Request $req)
    {
        $updatevalue = DB::table('patient_details')
        ->where('P_ID',$req->input('pid'))
        ->update([
            'P_Name' => $req->input('name'),
            'Room_No' => $req->input('room'),
            'P_Contact' => $req->input('con')
        ]);

        return redirect('/');
    }

    public function showbill(Request $req)
    {
        $pid = "";
        $pnm = "";
        $pdob = "";
        $pbdg = "";
        $pcon = "";
        $pemail = "";
        $padd = "";
        $proom = "";
        $pckin ="";
        $pckout ="";
        $tdays = "";
        $total = "";
        return view('bill', compact('pid','pnm','pdob','pbdg','pcon','pemail','padd','proom','pckin','pckout','tdays','total'));
    }

    public function checkid(Request $req)
    {
        $pckout = date("Y-m-d");
        
        $ck = DB::table('patient_details')
        ->where('P_ID', $req->input('pid'))
        ->get();

        foreach ($ck as $user)
        {
            $pid = $user->P_ID;
            $pnm =  $user->P_Name;
            $pdob =  $user->P_DOB;
            $pbdg =  $user->P_BloodGroup;
            $pcon =  $user->P_Contact;
            $pemail =  $user->P_Email;
            $padd =  $user->P_Address;
            $proom =  $user->Room_No;
            $pckin = $user->CheckIn;
            $diff = date_diff(date_create($pckin),date_create($pckout));
            $tdays = $diff->format("%a");
            $total = $tdays * 100;
        }
        return view('bill', compact('pid','pnm','pdob','pbdg','pcon','pemail','padd','proom','pckin','pckout','tdays','total'));
    }

    public function confirm(Request $req)
    {
        $id = $req->input('pid');
        $nm = $req->input('name');
        $dob = $req->input('dob');
        $bdg = $req->input('bdg');
        $con = $req->input('con');
        $email = $req->input('email');
        $add = $req->input('address');
        $room = $req->input('room');
        $ckin = $req->input('ckin');
        $ckout = $req->input('ckout');
        $tdays = $req->input('tdays');
        $total = $req->input('total');

        $values = DB::table('patient_history')
        ->insert([
            'P_ID' => $id,
            'P_Name' => $nm,
            'P_DOB' => $dob,
            'P_BloodGroup' => $bdg,
            'P_Contact' => $con,
            'P_Email' => $email,
            'P_Address' => $add,
            'Room_No' => $room,
            'CheckIn' => $ckin,
            'CheckOut' => $ckout,
            'Total_Amount' => $total
        ]);

        $dlt = DB::table('patient_details')
        ->where('P_ID',$id)
        ->delete();

        $pdf = App::make('dompdf.wrapper');
        $data = "
            <style>
                .grid {
                    width: 500px;
                    margin-top: 10px;
                    margin-left: 20px;
                    background-color: #fff;
                    padding: 10px 50px 50px 50px;
                    border-radius: 50px;
                    border: 2px solid #cbcbcb;
                    box-shadow: 10px 15px 5px #cbcbcb;
                    padding-top: 10px;
                }
            </style>
            <body>
                <div class='grid'>
                    <h1 align='center'>Patient Details</h1>
                    <hr style='margin-bottom: 30px;'>
                    <table>
                        <tr>
                            <td>
                                Patient ID : <br> $id
                            </td>
                            <td style='padding-left: 180px;'>
                                Patient Name : <br> $nm
                            </td>
                        </tr>
                    </table>
                    <hr style='margin-bottom: 30px;'>
                    <table>
                        <tr>
                            <td>
                                Patient DOB : <br> $dob
                            </td>
                            <td style='padding-left: 161px;'>
                                Patient Blood Group : <br> $bdg
                            </td>
                        </tr>
                    </table>
                    <hr style='margin-bottom: 30px;'>
                    <table>
                        <tr>
                            <td>
                                Patient Contact : <br> $con
                            </td>
                            <td style='padding-left: 143px;'>
                                Patient EmailID : <br> $email
                            </td>
                        </tr>
                    </table>
                    <hr style='margin-bottom: 30px;'>
                    <table>
                        <tr>
                            <td>
                                Patient Address : <br> $add
                            </td>
                            <td style='padding-left: 140px;'>
                                Patient Stay in Hospital Room : <br> $room
                            </td>
                        </tr>
                    </table>
                    <hr style='margin-bottom: 30px;'>
                    <table>
                        <tr>
                            <td>
                                Patient Check-in Date : $ckin
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Patient Check-out Date : $ckout
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Patient Stay in Hospital : $tdays Days
                            </td>
                        </tr>
                    </table>
                    <hr style='margin-bottom: 30px;'>
                    <table>
                        <tr>
                            <td>
                                Total Amount : $total
                            </td>
                        </tr>
                    </table>
                </div>
            </body>
        ";
        $pdf->loadHTML($data);
        return $pdf->stream();
    }
}
