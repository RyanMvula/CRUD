<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class CrudController extends Controller
{

public function __construct(){
    $this->middleware("auth")->except(['contactUs']);
}

  public function index(){
        return view('landingpage');
    } 

    public function contactUs(){
        return view('contactUs');
    } 
    public function ContactDB(Request $req){
        $customer = Customer::create([
            "firstname" => $req->firstname,
            "lastname" => $req->lastname,
            "emailaddress" => $req->emailaddress,
            "mobilenumber" => $req->mobilenumber,
        ]);
        // return $customer; to view whats been posted to the database
         return  redirect()->route("contactUs")->with('msg',"Successfully created");
    } 

    public function customer(){
        $customer = Customer::all();
        //dd($customer);
        return view("customers",compact("customer"));
       //return $customer;
    }

    public function customerEdit($id){
        // $customer = Customer::find($id);
        $customer = Customer::where("id",$id)->get();
        // return $customer;
        return view('ContactUs',compact("customer"));
    }

    public function customerUpdate(Request $req,$id){
        // $customer = Customer::find($id);
        $customer = Customer::where("id",$id)->update([
            "firstname" => $req->firstname,
            "lastname" => $req->lastname,
            "emailaddress" => $req->emailaddress,
            "mobilenumber" => $req->mobilenumber,
        ]);
        // return $customer;
        return  redirect()->route("customer")->with('msg',"Successfully updated");
    }

    public function customerDelete($id){
        // $customer = Customer::find($id);
        Customer::where("id",$id)->delete();
        // return $customer;
        return  redirect()->route("customer")->with('msg',"Successfully updated");
    }
}
