<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Exception;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create(Request $request)
    {

        $name   = $request->name    ?? "";
        $email  = $request->email   ?? "";
        $phone  = $request->phone   ?? "";
        $gender = $request->name    ?? "";

        if($name == "")
        {
            return response()->json([
                "status"    =>  false,
                "message"   =>  "Please type your Full Name!"
            ], 200);
        }

        if($email == "")
        {
            return response()->json([
                "status"    =>  false,
                "message"   =>  "Please type your Email!"
            ], 200);
        }

        if($phone == "")
        {
            return response()->json([
                "status"    =>  false,
                "message"   =>  "Please type your Phone Number!"
            ], 200);
        }

        if(strlen($phone) != 10)
        {
            return response()->json([
                "status"    =>  false,
                "message"   =>  "Please type your correct Phone Number!"
            ], 200);
        }

        if($gender == "")
        {
            return response()->json([
                "status"    =>  false,
                "message"   =>  "Please select your Gender!"
            ], 200);
        }

        try {

            Employee::create([
                "name"      =>  $name,
                "email"     =>  $email,
                "phone"     =>  $phone,
                "gender"    =>  $gender,
            ]);
    
            return response()->json([
                "status"    =>  true,
                "message"   =>  "Employee added successfully!"
            ], 200);

        }
        catch(Exception $e) {
            return response()->json([
                'status'    =>  false,
                'message'   =>  "Something went wrong!",
                "exception" =>  $e->getMessage()
            ]);
        }
    }

    public function getEmployeesList()
    {

        try {

            $employees = Employee::orderBy("id", "desc")->get();
    
            return response()->json([
                "status"    =>  true,
                "message"   =>  "Employees list found!",
                "data"      =>  $employees ?? []
            ], 200);

        }
        catch(Exception $e) {

            return response()->json([
                "status"    =>  false,
                "message"   =>  "Something went wrong!",
                "exception" =>  $e->getMessage()
            ]);

        }

    }

    public function delete(Request $request)
    {
        $id = $request->id ?? "";

        if($id == "")
        {
            return response()->json([
                "status"    =>  false,
                "message"   =>  "Can not delete. Employee id is missing!",
            ], 200);
        }

        try {

            Employee::find($id)->delete();
            
            $employees = Employee::orderBy("id", "desc")->get();
    
            return response()->json([
                "status"    =>  true,
                "message"   =>  "Employee deleted successfully!",
                "data"      =>  $employees ?? []
            ], 200);

        }
        catch(Exception $e) {

            return response()->json([
                "status"    =>  false,
                "message"   =>  "Something went wrong!",
                "exception" =>  $e->getMessage()
            ]);

        }

    }

    public function getEmployeeDetails(Request $request)
    {
        $id = $request->id ?? "";

        if($id == "")
        {
            return response()->json([
                "status"    =>  false,
                "message"   =>  "Employee id is missing!",
            ], 200);
        }

        try {

            $employee = Employee::find($id);

            return response()->json([
                "status"    =>  true,
                "message"   =>  "Employee details found!",
                "data"      =>  $employee ?? []
            ], 200);

        }
        catch(Exception $e) {

            return response()->json([
                "status"    =>  false,
                "message"   =>  "Something went wrong!",
                "exception" =>  $e->getMessage()
            ]);

        }

    }

    public function updateEmployeeDetails(Request $request)
    {

        $id     = $request->id      ?? "";
        $name   = $request->name    ?? "";
        $email  = $request->email   ?? "";
        $phone  = $request->phone   ?? "";
        $gender = $request->gender  ?? "";

        if($name == "")
        {
            return response()->json([
                "status"    =>  false,
                "message"   =>  "Please type your Full Name!"
            ], 200);
        }

        if($email == "")
        {
            return response()->json([
                "status"    =>  false,
                "message"   =>  "Please type your Email!"
            ], 200);
        }

        if($phone == "")
        {
            return response()->json([
                "status"    =>  false,
                "message"   =>  "Please type your Phone Number!"
            ], 200);
        }

        if(strlen($phone) != 10)
        {
            return response()->json([
                "status"    =>  false,
                "message"   =>  "Please type your correct Phone Number!"
            ], 200);
        }

        if($gender == "")
        {
            return response()->json([
                "status"    =>  false,
                "message"   =>  "Please select your Gender!"
            ], 200);
        }

        try {

            Employee::where('id', $id)->update([
                "name"      =>  $name,
                "email"     =>  $email,
                "phone"     =>  $phone,
                "gender"    =>  $gender,
            ]);
    
            return response()->json([
                "status"    =>  true,
                "message"   =>  "Employee details updated!"
            ], 200);

        }
        catch(Exception $e) {
            return response()->json([
                'status'    =>  false,
                'message'   =>  "Something went wrong!",
                "exception" =>  $e->getMessage()
            ]);
        }
    }

}
