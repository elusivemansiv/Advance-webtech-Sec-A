<?php

namespace App\Http\Controllers\renter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\car_service;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Redirect;

class car_service_renter_controller extends Controller
{
    public function addNewCar(){
           
        return view('Renter_Pages.addNewCar');
    }
    public function addNewCarRenter(Request $request){
        $request->validate([
          
          'car_name'=>'required',
          'car_model'=>'required',
          'car_type'=>'required',
          'car_number'=>'required',
          'rent_price'=>'required',   
          'car_buy_date'=>'required',  
          'car_color'=>'required',  
          'sit_number'=>'required',  
          'car_details'=>'required',  
          
        ]);
        $car_service = new car_service();
        $car_service->car_name = $request->car_name;
        $car_service->car_model = $request->car_model;
        $car_service->car_type = $request->car_type;
        $car_service->car_number = $request->car_number;
        $car_service->car_buy_date = $request->car_buy_date;
        $car_service->rent_price = $request->rent_price;
        $car_service->car_color = $request->car_color;
        $car_service->sit_number = $request->sit_number;
        $car_service->car_details = $request->car_details;
        $car_service->car_pic = $request->car_pic;
        $res = $car_service->save();
        if($res){
            return back()->with('success','You have Uploaded successfully');
        }else{
            return back()->with('fail', 'Something Went Wrong');
        }
    }
     
   
    public function messageRenter(){
           
        return view('Renter_Pages.messageRenter');
    }
    public function profile(){
           
        return view('Renter_Pages.profile');
    }
    public function carList(){
        
        $car_services = car_service::all();
        return view('Renter_Pages.carList')->with('car_services',$car_services);
    }

    public function update($car_service_id){
        
        $car_services = car_service::find($car_service_id);
        return view('Renter_pages.edit',compact('car_services'));
        
    }
    public function editNewCarRenter(Request $request){
        
        $car_service = car_service::find($request->id);
        $car_service->car_name = $request->car_name;
        $car_service->car_model = $request->car_model;
        
        
        $car_service->car_number = $request->car_number;
        $car_service->rent_price = $request->rent_price;
        $car_service->car_buy_date = $request->car_buy_date;
        $car_service->save();
        return Redirect::to('/carList');
        
        
    }
    public function destroy(Request $request){
        
        $car_service = car_service::find($request->id); 
        $car_service->delete();
        return Redirect::to('/carList');
    }
    public function postCarVideo(){
           
        return view('Renter_Pages.postCarVideo');
    }
}
