<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories_Table;
use App\Models\Subcategories_Table;
use App\Models\Freedom_hdfc;
use App\Models\Money_back_hdfc;
use App\Models\Indian_Oil_hdfc;
use App\Models\Regalia_hdfc;
use App\Models\Upi_hdfc;
use App\Models\Infinia_hdfc;
use App\Models\blog;
use App\Models\Create_Team;
use App\Models\Airtel_axis;
use App\Models\Lic_axis;
use App\Models\Select_axis;
use App\Models\Reward_axis;
use App\Models\Neo_axis;
use App\Models\Zone_axis;
use App\Models\Mangus_axis;
use App\Models\Ace_axis;
use App\Models\Platinum_axis;
use App\Models\Oil_axis;
use App\Models\Flipkart_axis;
use App\Models\Sbi_prime;
use App\Models\Sbi_simple_save;
use App\Models\Sbi_simply_click;
use App\Models\Sbi_elite;
use App\Models\Sbi_pulse;
use App\Models\Sbi_signature;
use App\Models\Sbi_octane;
use App\Models\Sbi_premier;
use App\Models\Idfc_first_swyp;
use App\Models\Iidfc_millenia;
use App\Models\Idfc_wealth;
use App\Models\Idfc_classic;
use App\Models\Idfc_wow;
use App\Models\Idfc_select;
use App\Models\Idfc_first_power;
use App\Models\Idfc_club_vista;
use App\Models\Au_altura;
use App\Models\Au_zenith;
use App\Models\Au_vetta;
use App\Models\Au_lit;
use App\Models\Au_altura_plus;
use App\Models\American_payback;
use App\Models\American_smart_earn;
use App\Models\American_gold;
use App\Models\Indusind_aura;
use App\Models\Indusind_british_airways;
use App\Models\Indusind_legend;
use App\Models\Indusind_nexxt;
use App\Models\Indusind_pinnacle;
use App\Models\Indusind_rupay_platinum;
use App\Models\Indusind_qatar_airways;
use App\Models\Indusind_platinum_visa;

class AdminController extends Controller
{
    public function admin(){
        { if (session()->get('type') === 'admin') {
        return view('admin_body.index');
    } 
    // Redirect non-admin users or unauthenticated users to the login page
    return redirect('login')->with('Error', 'Access Denied');
    }
    }

    //================================================@registration==========================================================

    public function employee_registration_list(){
        return view('admin_body.registration.employee_registration_list');
    }

    public function employee_registration(){
        return view('admin_body.registration.employee_registration');
    }

    //================================================@hdfc Bank==========================================================

    public function admin_hdfc_6e_reward_list(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_6e_reward_list');
    }

    public function admin_hdfc_6e_reward_xl_list(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_6e_reward_xl_list');
    }

    public function admin_hdfc_6e_reward_xl(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_6e_reward_xl');
    }

    public function admin_hdfc_6e_reward(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_6e_reward');
    }

    public function admin_hdfc_biz_first_list(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_biz_first_list');
    }

    public function admin_hdfc_biz_first(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_biz_first');
    }

    public function admin_hdfc_biz_grow_list(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_biz_grow_list');
    }

    public function admin_hdfc_biz_grow(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_biz_grow');
    }

    public function admin_hdfc_diner_club_list(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_diner_club_list');
    }

    public function admin_hdfc_diner_club(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_diner_club');
    }

    public function admin_hdfc_flipkart_wholesale_list(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_flipkart_wholesale_list');
    }

    public function admin_hdfc_flipkart_wholesale(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_flipkart_wholesale');
    }

    public function admin_hdfc_freedom_list(){
        $feed= new Freedom_hdfc();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.hdfc.admin_hdfc_freedom_list',$data);
    }

    //edit

    public function edit_admin_hdfc_freedom($id){
        $data = Freedom_hdfc::find($id);
        return view('admin_body.credit_card.hdfc.edit_admin_hdfc_freedom',compact('data'));
    }

    public function edit_freedom(Request $request, $id)
    {   
        $data = Freedom_hdfc::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

    // Redirect or return response after saving
    return redirect('credit_card/hdfc/admin_hdfc_freedom_list');
    }

     //delete
     public function delete_freedom_hdfc($id){
        $register=Freedom_hdfc::find($id);              
        $reg=$register->delete();
        if($reg){
            return redirect()->back();
        }
        else{
            echo "fail";
        }
    }

    public function admin_hdfc_freedom(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_freedom');
    }

    public function freedom(Request $request){
            
        $data = new Freedom_hdfc();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('/credit_card/hdfc/admin_hdfc_freedom_list');
        
    }

    public function admin_hdfc_giga_business_list(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_giga_business_list');
    }

    public function admin_hdfc_giga_business(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_giga_business');
    }

    public function admin_hdfc_indial_oil_list(){
        $feed= new Indian_Oil_hdfc();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.hdfc.admin_hdfc_indial_oil_list',$data);
    }

    //edit

    public function edit_admin_indian_oil_hdfc($id){
        $data = Indian_Oil_hdfc::find($id);
        return view('admin_body.credit_card.hdfc.edit_admin_hdfc_indial_oil',compact('data'));
    }

    public function edit_indian_oil_hdfc(Request $request, $id)
    {   
        $data = Indian_Oil_hdfc::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

    // Redirect or return response after saving
    return redirect('credit_card/hdfc/admin_hdfc_indial_oil_list');
    }

     //delete
     public function delete_indian_oil_hdfc($id){
        $register=Indian_Oil_hdfc::find($id);              
        $reg=$register->delete();
        if($reg){
            return redirect()->back();
        }
        else{
            echo "fail";
        }
    }

    public function admin_hdfc_indial_oil(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_indial_oil');
    }

    public function indian_oil_hdfc(Request $request){
            
        $data = new Indian_Oil_hdfc();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('/credit_card/hdfc/admin_hdfc_indial_oil_list');
        
    }

    public function admin_hdfc_infinia_list(){
        $feed= new Freedom_hdfc();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.hdfc.admin_hdfc_infinia_list',$data);
    }

    //edit

    public function edit_admin_hdfc_infinia($id){
        $data = Infinia_hdfc::find($id);
        return view('admin_body.credit_card.hdfc.edit_admin_hdfc_infinia',compact('data'));
    }

    public function edit_infinia_hdfc(Request $request, $id)
    {   
        $data = Infinia_hdfc::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

    // Redirect or return response after saving
    return redirect('credit_card/hdfc/admin_hdfc_infinia_list');
    }

    //delete
    public function delete_infinia_hdfc($id){
        $register=Infinia_hdfc::find($id);              
        $reg=$register->delete();
        if($reg){
            return redirect()->back();
        }
        else{
            echo "fail";
        }
    }

    public function admin_hdfc_infinia(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_infinia');
    }

    public function infinia_hdfc(Request $request){
            
        $data = new Infinia_hdfc();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('/credit_card/hdfc/admin_hdfc_infinia_list');
        
    }

    public function admin_hdfc_marriot_bonway_list(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_marriot_bonway_list');
    }

    public function admin_hdfc_marriot_bonway(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_marriot_bonway');
    }

    public function admin_hdfc_millennia_list(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_millennia_list');
    }

    public function admin_hdfc_millennia(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_millennia');
    }

    public function admin_hdfc_moneyback_list(){
        $feed= new  Money_back_hdfc();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.hdfc.admin_hdfc_moneyback_list',$data);
    }

    //edit

    public function edit_admin_hdfc_moneyback($id){
        $data = Money_back_hdfc::find($id);
        return view('admin_body.credit_card.hdfc.edit_admin_hdfc_moneyback',compact('data'));
    }

    public function edit_money_hdfc(Request $request, $id)
    {   
        $data = Money_back_hdfc::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

    // Redirect or return response after saving
    return redirect('credit_card/hdfc/admin_hdfc_moneyback_list');
    }

     //delete
     public function delete_money_hdfc($id){
        $register=Money_back_hdfc::find($id);              
        $reg=$register->delete();
        if($reg){
            return redirect()->back();
        }
        else{
            echo "fail";
        }
    }

    public function admin_hdfc_moneyback_plus_list(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_moneyback_plus_list');
    }

    public function admin_hdfc_moneyback_plus(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_moneyback_plus');
    }

    public function admin_hdfc_moneyback(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_moneyback');
    }

    public function money(Request $request){
            
        $data = new Money_back_hdfc();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('/credit_card/hdfc/admin_hdfc_moneyback_list');
        
    }

    public function admin_hdfc_regalia_list(){
        $feed= new Regalia_hdfc();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.hdfc.admin_hdfc_regalia_list',$data);
    }

    //edit

    public function edit_admin_hdfc_regalia($id){
        $data = Regalia_hdfc::find($id);
        return view('admin_body.credit_card.hdfc.edit_admin_hdfc_regalia',compact('data'));
    }

    public function edit_regalia_hdfc(Request $request, $id)
    {   
        $data = Regalia_hdfc::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

    // Redirect or return response after saving
    return redirect('credit_card/hdfc/admin_hdfc_regalia_list');
    }

    //delete
    public function delete_regalia_hdfc($id){
        $register=Regalia_hdfc::find($id);              
        $reg=$register->delete();
        if($reg){
            return redirect()->back();
        }
        else{
            echo "fail";
        }
    }

    public function admin_hdfc_regalia(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_regalia');
    }

    public function regalia(Request $request){
            
        $data = new Regalia_hdfc();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('/credit_card/hdfc/admin_hdfc_regalia_list');
        
    }

    public function admin_hdfc_shopper_stop_black_list(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_shopper_stop_black_list');
    }

    public function admin_hdfc_shopper_stop_black(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_shopper_stop_black');
    }

    public function admin_hdfc_swiggy_cc_list(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_swiggy_cc_list');
    }

    public function admin_hdfc_swiggy_cc(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_swiggy_cc');
    }

    public function admin_hdfc_tata_neu_infinity_list(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_tata_neu_infinity_list');
    }

    public function admin_hdfc_tata_neu_infinity(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_tata_neu_infinity');
    }

    public function admin_hdfc_tata_neu_plus_list(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_tata_neu_plus_list');
    }

    public function admin_hdfc_tata_neu_plus(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_tata_neu_plus');
    }

    public function admin_hdfc_upi_rupay_list(){
        $feed= new Upi_hdfc();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.hdfc.admin_hdfc_upi_rupay_list',$data);
    }

    //edit

    public function edit_admin_hdfc_upi_rupay($id){
        $data = Upi_hdfc::find($id);
        return view('admin_body.credit_card.hdfc.edit_admin_hdfc_upi_rupay',compact('data'));
    }

    public function edit_upi_hdfc(Request $request, $id)
    {   
        $data = Upi_hdfc::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

    // Redirect or return response after saving
    return redirect('credit_card/hdfc/admin_hdfc_regalia_list');
    }

    //delete
    public function delete_upi_hdfc($id){
        $register=Upi_hdfc::find($id);              
        $reg=$register->delete();
        if($reg){
            return redirect()->back();
        }
        else{
            echo "fail";
        }
    }
 
    public function admin_hdfc_upi_rupay(){
        return view('admin_body.credit_card.hdfc.admin_hdfc_upi_rupay');
    }

    public function upi(Request $request){
            
        $data = new Upi_hdfc();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('/credit_card/hdfc/admin_hdfc_upi_rupay_list');
        
    }

//===========================================@AXIS Bank=================================================================================

    //ace----------------------------------------------------------------------------------------------------------------

    public function admin_axis_ace_list(){
        { if (session()->get('type') === 'admin') {
        $feed = new Ace_axis();
        $data['data'] = $feed->all();
        return view('admin_body.credit_card.axis.admin_axis_ace_list',$data);
    } 
    // Redirect non-admin users or unauthenticated users to the login page
    return redirect('login')->with('Error', 'Access Denied');
    }
    }

    public function admin_axis_ace(){
        { if (session()->get('type') === 'admin') {
        return view('admin_body.credit_card.axis.admin_axis_ace');
    } 
    // Redirect non-admin users or unauthenticated users to the login page
    return redirect('login')->with('Error', 'Access Denied');
    }
    }

    public function axis_ace(Request $request){

        $data = new Ace_axis;

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return view('admin_body.credit_card.axis.admin_axis_ace');
    }

    //edit

    public function edit_ace($id){
        { if (session()->get('type') === 'admin') {
        $data = Ace_axis::find($id);
        return view('admin_body.credit_card.axis.edit_admin_axis_ace',compact('data'));
    }
    // Redirect non-admin users or unauthenticated users to the login page
    return redirect('login')->with('Error', 'Access Denied');
    }
    }

    public function update_ace(Request $request, $id){

        $data = Ace_axis::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/axis/admin_axis_ace_list');
    }

    //delete

    public function delete_ace($id){
        { if (session()->get('type') === 'admin') {
        $data=Ace_axis::find($id);              
        $data->delete();
        return redirect()->back();
    }
    // Redirect non-admin users or unauthenticated users to the login page
    return redirect('login')->with('Error', 'Access Denied');
    }
    }

    //airtel----------------------------------------------------------------------------------------------------------------

    public function admin_axis_airtel_credit_card_list(){
        $feed = new Airtel_axis();
        $data['data'] = $feed->all();
        return view('admin_body.credit_card.axis.admin_axis_airtel_credit_card_list',$data);
    }

    //edit

    public function edit_airtel($id){
        $data = Airtel_axis::find($id);
        return view('admin_body.credit_card.axis.edit_admin_axis_airtel_credit_card',compact('data'));
    }

    public function update_airtel(Request $request, $id){

        $data = Airtel_axis::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/axis/admin_axis_airtel_credit_card_list');
    }

    //delete

    public function delete_airtel($id){
        $data=Airtel_axis::find($id);              
        $data->delete();
        return redirect()->back();
    }

    public function airtel(Request $request){

        $data = new Airtel_axis;

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return view('admin_body.credit_card.axis.admin_axis_airtel_credit_card');
    }

    public function admin_axis_airtel_credit_card(){
        return view('admin_body.credit_card.axis.admin_axis_airtel_credit_card');
    }

    //flipkart----------------------------------------------------------------------------------------------------------------

    public function admin_axis_flipkart_list(){
        $feed = new Flipkart_axis();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.axis.admin_axis_flipkart_list',$data);
    }

    //edit

    public function edit_flipkart($id){
        $data = Flipkart_axis::find($id);
        return view('admin_body.credit_card.axis.edit_admin_axis_flipkart',compact('data'));
    }

    public function update_flipkart(Request $request , $id){
        $data = Flipkart_axis::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/axis/admin_axis_flipkart_list');

    }
    

    public function admin_axis_flipkart(){
        return view('admin_body.credit_card.axis.admin_axis_flipkart');
    }

    public function flipkart(Request $request){

        $data = new Flipkart_axis();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/axis/admin_axis_flipkart_list');
    }

    //oil--------------------------------------------------------------------------------------------------------------------

    public function admin_axis_indian_oil_list(){
        $feed = new Lic_axis();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.axis.admin_axis_indian_oil_list',$data);
    }

     //edit

     public function edit_oil($id){
        $data = Oil_axis::find($id);
        return view('admin_body.credit_card.axis.edit_admin_axis_indian_oil',compact('data'));
    }

    public function update_oil(Request $request, $id){

        $data = Oil_axis::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/axis/admin_axis_indian_oil_list');
    }

    //delete
    public function delete_oil($id){
    $data = Oil_axis::find($id);
    $data->delete();
    return redirect()->back();
    }

    public function admin_axis_indian_oil(){
        return view('admin_body.credit_card.axis.admin_axis_indian_oil');
    }

    public function axis_oil(Request $request){

        $data = new Oil_axis();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return view('admin_body.credit_card.axis.admin_axis_indian_oil');
    }
    //lic----------------------------------------------------------------------------------------------------------------

    public function admin_axis_lic_signature_list(){
        $feed = new Lic_axis();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.axis.admin_axis_lic_signature_list',$data);
    }

    //edit

     public function edit_lic($id){
        $data = Lic_axis::find($id);
        return view('admin_body.credit_card.axis.edit_admin_axis_lic_signature',compact('data'));
    }

    public function update_lic(Request $request, $id){

        $data = Lic_axis::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/axis/admin_axis_lic_signature_list');
    }

    //delete
    public function delete_lic($id){
    $data = Lic_axis::find($id);
    $data->delete();
    return redirect()->back();
    }

    public function admin_axis_lic_signature(){
        return view('admin_body.credit_card.axis.admin_axis_lic_signature');
    }

    public function lic_signature(Request $request){

        $data = new Lic_axis();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return view('admin_body.credit_card.axis.admin_axis_lic_signature');
    }

    //magnus----------------------------------------------------------------------------------------------------------------

    public function admin_axis_magnus_list(){
        $feed = new Mangus_axis();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.axis.admin_axis_magnus_list',$data);
    }

    public function admin_axis_magnus(){
        return view('admin_body.credit_card.axis.admin_axis_magnus');
    }

    public function axis_magnus(Request $request){

        $data = new Mangus_axis();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();
        
        return view('admin_body.credit_card.axis.admin_axis_magnus');
    }

    //edit

    public function edit_magnus($id){
        $data = Mangus_axis::find($id);
        return view('admin_body.credit_card.axis.edit_admin_axis_magnus',compact('data'));
    }

    public function update_magnus(Request $request, $id){

        $data = Mangus_axis::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/axis/admin_axis_magnus_list');
    }

    //delete
    public function delete_magnus($id){
        $data = Mangus_axis::find($id);
        $data->delete();
        return redirect()->back();
    }

    //zone----------------------------------------------------------------------------------------------------------------

    public function admin_axis_my_zone_list(){
        $feed = new Zone_axis();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.axis.admin_axis_my_zone_list',$data);
    }

    public function admin_axis_my_zone(){
        return view('admin_body.credit_card.axis.admin_axis_my_zone');
    }

    public function axis_zone(Request $request){

        $data = new Zone_axis();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();
        
        return view('admin_body.credit_card.axis.admin_axis_my_zone');
    }
    
    //edit

    public function edit_zone($id){
        $data = Zone_axis::find($id);
        return view('admin_body.credit_card.axis.edit_admin_axis_my_zone',compact('data'));
    }

    public function update_zone(Request $request, $id){

        $data = Zone_axis::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/axis/admin_axis_my_zone_list');
    }

    //delete
    public function delete_zone($id){
        $data = Zone_axis::find($id);
        $data->delete();
        return redirect()->back();
    }

    //neo----------------------------------------------------------------------------------------------------------------

    public function admin_axis_neo_list(){
        $feed = new Neo_axis();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.axis.admin_axis_neo_list',$data);
    }

    //edit

    public function edit_neo($id){
        $data = Neo_axis::find($id);
        return view('admin_body.credit_card.axis.edit_admin_axis_neo',compact('data'));
    }

    public function update_neo(Request $request, $id){

        $data = Neo_axis::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/axis/admin_axis_neo_list');
    }

    //delete
    public function delete_neo($id){
        $data = Neo_axis::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function admin_axis_neo(){
        return view('admin_body.credit_card.axis.admin_axis_neo');
    }

    public function axis_neo(Request $request){

        $data = new Neo_axis();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();
        
        return view('admin_body.credit_card.axis.admin_axis_neo');
    }

    //platinum----------------------------------------------------------------------------------------------------------------

    public function admin_axis_platinum_list(){
        $feed = new Platinum_axis();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.axis.admin_axis_platinum_list',$data);
    }

    public function admin_axis_platinum(){
        return view('admin_body.credit_card.axis.admin_axis_platinum');
    }

    public function axis_platinum(Request $request){

        $data = new Platinum_axis();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();
        
        return view('admin_body.credit_card.axis.admin_axis_platinum');
    }

    //edit

    public function edit_platinum($id){
        $data = Platinum_axis::find($id);
        return view('admin_body.credit_card.axis.edit_admin_axis_platinum',compact('data'));
    }

    public function update_platinum(Request $request, $id){

        $data = Platinum_axis::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/axis/admin_axis_platinum_list');
    }

    //delete
    public function delete_platinum($id){
        $data = Platinum_axis::find($id);
        $data->delete();
        return redirect()->back();
        }

    //reward----------------------------------------------------------------------------------------------------------------

    public function admin_axis_reward(){
        return view('admin_body.credit_card.axis.admin_axis_reward');
    }

    public function axis_reward(Request $request){

        $data = new Reward_axis();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();
        
        return view('admin_body.credit_card.axis.admin_axis_reward');
    }

    public function admin_axis_reward_list(){
        $feed = new Reward_axis();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.axis.admin_axis_reward_list',$data);
    }

    //edit

     public function edit_reward($id){
        $data = Reward_axis::find($id);
        return view('admin_body.credit_card.axis.edit_admin_axis_reward',compact('data'));
    }

    public function update_reward(Request $request, $id){

        $data = Reward_axis::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/axis/admin_axis_reward_list');
    }

    //delete
    public function delete_reward($id){
        $data = Reward_axis::find($id);
        $data->delete();
        return redirect()->back();
        }
    

    //select----------------------------------------------------------------------------------------------------------------

    public function admin_axis_select_list(){
        $feed = new Select_axis();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.axis.admin_axis_select_list',$data);
    }

    public function admin_axis_select(){
        return view('admin_body.credit_card.axis.admin_axis_select');
    }

    public function axis_select(Request $request){

        $data = new Select_axis();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return view('admin_body.credit_card.axis.admin_axis_select');
    }

    //edit

    public function edit_select($id){
        $data = Lic_axis::find($id);
        return view('admin_body.credit_card.axis.edit_admin_axis_lic_signature',compact('data'));
    }

    public function update_select(Request $request, $id){

        $data = Select_axis::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/axis/admin_axis_lic_signature_list');
    }

    //delete
    public function delete_select($id){
        $data = Select_axis::find($id);
        $data->delete();
        return redirect()->back();
        }
    
    //===========================================@SBI Bank=================================================================================
        

    //admin_sbi_elite---------------------------------------------------------------------------------------------------------

    public function admin_sbi_elite_list(){
        $feed = new Sbi_elite();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.sbi.admin_sbi_elite_list',$data);
    }

    //edit

    public function edit_sbi_elite($id){
        $data = Sbi_elite::find($id);
        return view('admin_body.credit_card.sbi.edit_admin_sbi_elite',compact('data'));
    }

    public function update_sbi_elite(Request $request ,$id){
        $data = Sbi_elite::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/sbi/admin_sbi_elite_list');
    }

    //delete
    public function delete_sbi_elite($id){
    $data = Sbi_elite::find($id);
    $data->delete();
    return redirect()->back();
    }
    
    public function admin_sbi_elite(){
        return view('admin_body.credit_card.sbi.admin_sbi_elite');
    }

    public function sbi_elite(Request $request){
        $data = new Sbi_elite();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/sbi/admin_sbi_elite_list');
    }

    //sbi_form---------------------------------------------------------------------------------------------------------
    
    public function admin_sbi_form_list(){
        return view('admin_body.credit_card.sbi.admin_sbi_form_list');
    }

    //admin_sbi_octane---------------------------------------------------------------------------------------------------------
    
    public function admin_sbi_octane_list(){
        $feed = new Sbi_octane();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.sbi.admin_sbi_octane_list',$data);
    }
    
    //edit

    public function edit_sbi_octane($id){
        $data = Sbi_octane::find($id);
        return view('admin_body.credit_card.sbi.edit_admin_sbi_octane',compact('data'));
    }

    public function update_sbi_octane(Request $request ,$id){
        $data = Sbi_octane::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/sbi/admin_sbi_octane_list');
    }

    //delete
    public function delete_sbi_octane($id){
    $data = sbi_octane::find($id);
    $data->delete();
    return redirect()->back();
    }

    public function admin_sbi_octane(){
        return view('admin_body.credit_card.sbi.admin_sbi_octane');
    }

    public function sbi_octane(Request $request){
        $data = new Sbi_octane();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/sbi/admin_sbi_octane_list');
    }
    
    //admin_sbi_premier---------------------------------------------------------------------------------------------------------
    
    public function admin_sbi_premier_list(){
        $feed = new Sbi_premier();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.sbi.admin_sbi_premier_list',$data);
    }

    //edit

    public function edit_sbi_premier($id){
        $data = Sbi_premier::find($id);
        return view('admin_body.credit_card.sbi.edit_admin_sbi_premier',compact('data'));
    }

    public function update_sbi_premier(Request $request ,$id){
        $data = Sbi_premier::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/sbi/admin_sbi_premier_list');
    }

    //delete
    public function delete_sbi_premier($id){
    $data = sbi_premier::find($id);
    $data->delete();
    return redirect()->back();
    }
    
    public function admin_sbi_premier(){
        return view('admin_body.credit_card.sbi.admin_sbi_premier');
    }

    public function sbi_premier(Request $request){
        $data = new Sbi_premier();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/sbi/admin_sbi_premier_list');
    }
    
    //prime_credit _card----------------------------------------------------------------------------------------------------------

    public function admin_sbi_prime_list(){
        $feed = new Sbi_prime();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.sbi.admin_sbi_prime_list',$data);
    }

    //edit

    public function edit_prime($id){
        $data = Sbi_prime::find($id);
        return view('admin_body.credit_card.sbi.edit_admin_sbi_prime',compact('data'));
    }

    public function update_sbi_prime(Request $request ,$id){
        $data = Sbi_prime::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/sbi/admin_sbi_prime_list');
    }

    //delete
    public function delete_prime($id){
    $data = sbi_prime::find($id);
    $data->delete();
    return redirect()->back();
    }
    
    public function admin_sbi_prime(){
        return view('admin_body.credit_card.sbi.admin_sbi_prime');
    }

    public function sbi_prime(Request $request){
        $data = new Sbi_prime();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/sbi/admin_sbi_prime_list');
    }

    //sbi_pulse----------------------------------------------------------------------------------------------------------
    
    public function admin_sbi_pulse_list(){
        $feed = new Sbi_pulse();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.sbi.admin_sbi_pulse_list',$data);
    }

    //edit

    public function edit_sbi_pulse($id){
        $data = Sbi_pulse::find($id);
        return view('admin_body.credit_card.sbi.edit_admin_sbi_pulse',compact('data'));
    }

    public function update_sbi_pulse(Request $request ,$id){
        $data = Sbi_pulse::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/sbi/admin_sbi_pulse_list');
    }

    //delete
    public function delete_sbi_pulse($id){
    $data = Sbi_pulse::find($id);
    $data->delete();
    return redirect()->back();
    }
    
    public function admin_sbi_pulse(){
        return view('admin_body.credit_card.sbi.admin_sbi_pulse');
    }

    public function sbi_pulse(Request $request){
        $data = new Sbi_pulse();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/sbi/admin_sbi_pulse_list');
    }
    
    //admin_sbi_signature---------------------------------------------------------------------------------------------------------
    
    public function admin_sbi_signature_list(){
        $feed = new Sbi_signature();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.sbi.admin_sbi_signature_list',$data);
    }
    
    //edit

    public function edit_sbi_signature($id){
        $data = Sbi_signature::find($id);
        return view('admin_body.credit_card.sbi.edit_admin_sbi_signature',compact('data'));
    }

    public function update_sbi_signature(Request $request ,$id){
        $data = Sbi_signature::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/sbi/admin_sbi_signature_list');
    }

    //delete
    public function delete_sbi_signature($id){
    $data = Sbi_signature::find($id);
    $data->delete();
    return redirect()->back();
    }

    public function admin_sbi_signature(){
        return view('admin_body.credit_card.sbi.admin_sbi_signature');
    }

    public function sbi_signature(Request $request){
        $data = new Sbi_signature();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/sbi/admin_sbi_signature_list');
    }

    //admin_sbi_simply_click---------------------------------------------------------------------------------------------------------
    
    public function admin_sbi_simply_click_list(){
        $feed = new Sbi_simply_click();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.sbi.admin_sbi_simply_click_list',$data);
    }

    //edit

    public function edit_sbi_simply_click($id){
        $data = Sbi_simply_click::find($id);
        return view('admin_body.credit_card.sbi.edit_admin_sbi_simply_click',compact('data'));
    }

    public function update_sbi_simply_click(Request $request ,$id){
        $data = Sbi_simply_click::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/sbi/admin_sbi_simply_click_list');
    }

    //delete
    public function delete_sbi_simply_click($id){
        $data = Sbi_simply_click::find($id);
        $data->delete();
        return redirect()->back();

    }
    
    public function admin_sbi_simply_click(){
        return view('admin_body.credit_card.sbi.admin_sbi_simply_click');
    }

    public function sbi_simply_click(Request $request){
        $data = new Sbi_simply_click();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/sbi/admin_sbi_simply_click_list');
    }
    
    //admin_sbi_simply_save---------------------------------------------------------------------------------------------------------
    
    public function admin_sbi_simply_save_list(){
        $feed = new Sbi_simple_save();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.sbi.admin_sbi_simply_save_list',$data);
    }

    //edit

    public function edit_sbi_simply_save($id){
        $data = Sbi_simple_save::find($id);
        return view('admin_body.credit_card.sbi.edit_admin_sbi_simply_save',compact('data'));
    }

    public function update_admin_sbi_simply_save(Request $request ,$id){
        $data = Sbi_simple_save::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/sbi/admin_sbi_simply_save_list');
    }

    //delete
    public function delete_sbi_simply_save($id){
        $data = Sbi_simple_save::find($id);
        $data->delete();
        return redirect()->back();

    }
    
    public function admin_sbi_simply_save(){
        return view('admin_body.credit_card.sbi.admin_sbi_simply_save');
    }

    public function sbi_simply_save(Request $request){
        $data = new Sbi_simple_save();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/sbi/admin_sbi_simply_save_list');
    }

//===========================================@IDFC Bank=================================================================================

//classic-----------------------------------------------------------------------------------------------------------------

    public function admin_idfc_classic_list(){
        $feed = new Idfc_classic();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.idfc.admin_idfc_classic_list',$data);
    }

    //edit

    public function edit_admin_idfc_classic($id){
        $data = Idfc_classic::find($id);
        return view('admin_body.credit_card.idfc.edit_admin_idfc_classic',compact('data'));
    }

    public function update_idfc_classic(Request $request ,$id){
        $data = Idfc_classic::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/idfc/admin_idfc_classic_list');
    }

    //delete
    public function delete_idfc_classic($id){
        $data = Idfc_classic::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function admin_idfc_classic(){
        return view('admin_body.credit_card.idfc.admin_idfc_classic');
    }

    public function idfc_classic(Request $request){
        $data = new Idfc_classic();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/idfc/admin_idfc_classic_list');
    }

    //club-----------------------------------------------------------------------------------------------------------------

    public function admin_idfc_club_vista_list(){
        $feed = new Idfc_club_vista();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.idfc.admin_idfc_club_vista_list',$data);
    }

    //edit

    public function edit_admin_idfc_club_vista($id){
        $data = Idfc_club_vista::find($id);
        return view('admin_body.credit_card.idfc.edit_admin_idfc_club_vista',compact('data'));
    }

    public function update_idfc_club_vista(Request $request ,$id){
        $data = Idfc_club_vista::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/idfc/admin_idfc_club_vista_list');
    }

    //delete
    public function delete_idfc_club_vista($id){
        $data = Idfc_club_vista::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function admin_idfc_club_vista(){
        return view('admin_body.credit_card.idfc.admin_idfc_club_vista');
    }

    public function idfc_club_vista(Request $request){
        $data = new Idfc_club_vista();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/idfc/admin_idfc_club_vista_list');
    }

    //power-----------------------------------------------------------------------------------------------------------------

    public function admin_idfc_first_power_list(){
        $feed = new Idfc_first_power();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.idfc.admin_idfc_first_power_list',$data);
    }

    //edit

    public function edit_admin_idfc_first_power($id){
        $data = Idfc_first_power::find($id);
        return view('admin_body.credit_card.idfc.edit_admin_idfc_first_power',compact('data'));
    }

    public function update_idfc_first_power(Request $request ,$id){
        $data = Idfc_first_power::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/idfc/admin_idfc_first_power_list');
    }

    //delete
    public function delete_idfc_first_power($id){
        $data = Idfc_first_power::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function admin_idfc_first_power(){
        return view('admin_body.credit_card.idfc.admin_idfc_first_power');
    }

    public function idfc_first_power(Request $request){
        $data = new Idfc_first_power();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/idfc/admin_idfc_first_power_list');
    }

    //idfc_first_swyp-----------------------------------------------------------------------------------------------------------------

    public function admin_idfc_first_swyp(){
        return view('admin_body.credit_card.idfc.admin_idfc_first_swyp');
    }

    public function idfc_first(Request $request){
        $data = new Idfc_first_swyp();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/idfc/admin_idfc_first_swyp_list');
    }

    public function admin_idfc_first_swyp_list(){
        $feed = new Idfc_first_swyp();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.idfc.admin_idfc_first_swyp_list',$data);
    }

    //edit

    public function edit_admin_idfc_first_swyp($id){
        $data = Idfc_first_swyp::find($id);
        return view('admin_body.credit_card.idfc.edit_admin_idfc_first_swyp',compact('data'));
    }

    public function update_idfc_first(Request $request ,$id){
        $data = Idfc_first_swyp::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/idfc/admin_idfc_first_swyp_list');
    }

    //delete
    public function delete_idfc_first($id){
        $data = Idfc_first_swyp::find($id);
        $data->delete();
        return redirect()->back();
    }

    //idfc_millenia_list-----------------------------------------------------------------------------------------------------------------

    public function admin_idfc_millenia_list(){
        return view('admin_body.credit_card.idfc.admin_idfc_millenia_list');
    }

    public function admin_idfc_millenia(){
        return view('admin_body.credit_card.idfc.admin_idfc_millenia');
    }

    

    //select---------------------------------------------------------------------------------------

    public function admin_idfc_select_list(){
        $feed = new Idfc_select();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.idfc.admin_idfc_select_list',$data);
    }

    //edit

    public function edit_admin_idfc_select($id){
        $data = Idfc_select::find($id);
        return view('admin_body.credit_card.idfc.edit_admin_idfc_select',compact('data'));
    }

    public function update_idfc_select(Request $request ,$id){
        $data = Idfc_select::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/idfc/admin_idfc_select_list');
    }

    //delete
    public function delete_idfc_select($id){
        $data = Idfc_select::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function admin_idfc_select(){
        return view('admin_body.credit_card.idfc.admin_idfc_select');
    }

    public function idfc_select(Request $request){
        $data = new Idfc_select();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/idfc/admin_idfc_select_list');
    }

    //wealth------------------------------------------------------------------------------------------------------------

    public function admin_idfc_wealth_list(){
        $feed = new Idfc_wealth();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.idfc.admin_idfc_wealth_list',$data);
    }

    //edit

    public function edit_admin_idfc_wealth($id){
        $data = Idfc_wealth::find($id);
        return view('admin_body.credit_card.idfc.edit_admin_idfc_wealth',compact('data'));
    }

    public function update_admin_idfc_wealth(Request $request ,$id){
        $data = Idfc_wealth::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/idfc/admin_idfc_wealth_list');
    }

    //delete
    public function delete_idfc_wealth($id){
        $data = Idfc_wealth::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function admin_idfc_wealth(){
        return view('admin_body.credit_card.idfc.admin_idfc_wealth');
    }

    public function idfc_wealth(Request $request){
        $data = new Idfc_wealth();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/idfc/admin_idfc_wealth_list');
    }

    //wow------------------------------------------------------------------------------------------------------------------

    public function admin_idfc_wow_list(){
        $feed = new Idfc_wow();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.idfc.admin_idfc_wow_list',$data);
    }

    //edit

    public function edit_admin_idfc_wow($id){
        $data = Idfc_wow::find($id);
        return view('admin_body.credit_card.idfc.edit_admin_idfc_wow',compact('data'));
    }

    public function update_admin_idfc_wow(Request $request ,$id){
        $data = Idfc_wow::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/idfc/admin_idfc_wow_list');
    }

    //delete
    public function delete_admin_idfc_wow($id){
        $data = Idfc_wow::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function admin_idfc_wow(){
        return view('admin_body.credit_card.idfc.admin_idfc_wow');
    }

    public function idfc_wow(Request $request){
        $data = new Idfc_wow();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/idfc/admin_idfc_wow_list');
    }

//===========================================@AU Bank=================================================================================
    
//admin_au_altura------------------------------------------------------------------------------------------------------

    public function admin_au_altura_list(){
        $feed = new Au_altura();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.au.admin_au_altura_list',$data);
    }

    //edit

    public function edit_admin_au_altura($id){
        $data = Au_altura::find($id);
        return view('admin_body.credit_card.au.edit_admin_au_altura',compact('data'));
    }

    public function update_admin_au_altura(Request $request ,$id){
        $data = Au_altura::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/au/admin_au_altura_list');
    }

    //delete
    public function delete_au_altura($id){
        $data = Au_altura::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function admin_au_altura(){
        return view('admin_body.credit_card.au.admin_au_altura');
    }

    public function au_altura(Request $request){
        $data = new Au_altura();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/au/admin_au_altura_list');
    }

    //admin_au_altura_plus------------------------------------------------------------------------------------------------------

    public function admin_au_altura_plus_list(){
        $feed = new Au_altura_plus();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.au.admin_au_altura_plus_list',$data);
    }

    //edit

    public function edit_admin_au_altura_plus($id){
        $data = Au_altura_plus::find($id);
        return view('admin_body.credit_card.au.edit_admin_au_altura_plus',compact('data'));
    }

    public function update_au_altura_plus(Request $request ,$id){
        $data = Au_altura_plus::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/au/admin_au_altura_plus_list');
    }

    //delete
    public function delete_au_altura_plus($id){
        $data = Au_altura_plus::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function admin_au_altura_plus(){
        return view('admin_body.credit_card.au.admin_au_altura_plus');
    }

    public function au_altura_plus(Request $request){
        $data = new Au_altura_plus();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/au/admin_au_altura_plus_list');
    }

    //admin_au_lit------------------------------------------------------------------------------------------------------

    public function admin_au_lit_list(){
        $feed = new Au_lit();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.au.admin_au_lit_list',$data);
    }

    //edit

    public function edit_admin_au_lit($id){
        $data = Au_lit::find($id);
        return view('admin_body.credit_card.au.edit_admin_au_lit',compact('data'));
    }

    public function update_admin_au_lit(Request $request ,$id){
        $data = Au_lit::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/au/admin_au_lit_list');
    }

    //delete
    public function delete_au_lit($id){
        $data = Au_lit::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function admin_au_lit(){
        return view('admin_body.credit_card.au.admin_au_lit');
    }

    public function au_lit(Request $request){
        $data = new Au_lit();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/au/admin_au_lit_list');
    }

    //admin_au_vetta------------------------------------------------------------------------------------------------------

    public function admin_au_vetta_list(){
        $feed = new Au_vetta();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.au.admin_au_vetta_list',$data);
    }

    //edit

    public function edit_admin_au_vetta($id){
        $data = Au_vetta::find($id);
        return view('admin_body.credit_card.au.edit_admin_au_vetta',compact('data'));
    }

    public function update_admin_au_vetta(Request $request ,$id){
        $data = Au_vetta::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/au/admin_au_vetta_list');
    }

    //delete
    public function delete_au_vetta($id){
        $data = Au_vetta::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function admin_au_vetta(){
        return view('admin_body.credit_card.au.admin_au_vetta');
    }

    public function au_vetta(Request $request){
        $data = new Au_vetta();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/au/admin_au_vetta_list');
    }

    //admin_au_zenith-------------------------------------------------------------------------------------------------------

    public function admin_au_zenith_list(){
        $feed = new Au_zenith();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.au.admin_au_zenith_list',$data);
    }

    //edit

    public function edit_admin_au_zenith($id){
        $data = Au_zenith::find($id);
        return view('admin_body.credit_card.au.edit_admin_au_zenith',compact('data'));
    }

    public function update_admin_au_zenith(Request $request ,$id){
        $data = Au_zenith::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/au/admin_au_zenith_list');
    }

    //delete
    public function delete_au_zenith($id){
        $data = Au_zenith::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function admin_au_zenith(){
        return view('admin_body.credit_card.au.admin_au_zenith');
    }

    public function au_zenith(Request $request){
        $data = new Au_zenith();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/au/admin_au_zenith_list');
    }

//===========================================@AMERICAN BANK===============================================================================

//admin_american_form_list----------------------------------------------------------------------------------------------

    public function admin_american_form_list(){
        return view('admin_body.credit_card.american.admin_american_form_list');
    }

    //admin_american_gold----------------------------------------------------------------------------------------------

    public function admin_american_gold_list(){
        $feed = new American_gold();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.american.admin_american_gold_list',$data);
    }

    //edit

    public function edit_admin_american_gold($id){
        $data = American_gold::find($id);
        return view('admin_body.credit_card.american.edit_admin_american_gold',compact('data'));
    }

    public function update_american_gold(Request $request ,$id){
        $data = American_gold::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/american/admin_american_gold_list');
    }

    //delete
    public function delete_american_gold($id){
        $data = American_gold::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function admin_american_gold(){
        return view('admin_body.credit_card.american.admin_american_gold');
    }

    public function american_gold(Request $request){
        $data = new American_gold();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/american/admin_american_gold_list');
    }

    //admin_american_payback----------------------------------------------------------------------------------------------

    public function admin_american_payback_list(){
        $feed = new American_payback();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.american.admin_american_payback_list',$data);
    }

    //edit

    public function edit_american_payback($id){
        $data = American_payback::find($id);
        return view('admin_body.credit_card.american.edit_admin_american_payback',compact('data'));
    }

    public function update_american_payback(Request $request ,$id){
        $data = American_payback::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/american/admin_american_payback_list');
    }

    //delete
    public function delete_american_payback($id){
        $data = American_payback::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function admin_american_payback(){
        return view('admin_body.credit_card.american.admin_american_payback');
    }

    public function american_payback(Request $request){
        $data = new American_payback();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/american/admin_american_payback_list');
    }

    //admin_american_smart_earn----------------------------------------------------------------------------------------------

    public function admin_american_smart_earn_list(){
        $feed = new American_smart_earn();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.american.admin_american_smart_earn_list',$data);
    }

    //edit

    public function edit_admin_american_smart_earn($id){
        $data = American_smart_earn::find($id);
        return view('admin_body.credit_card.american.edit_admin_american_smart_earn',compact('data'));
    }

    public function update_admin_american_smart_earn(Request $request ,$id){
        $data = American_smart_earn::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/american/admin_american_smart_earn_list');
    }

    //delete
    public function delete_american_smart_earn($id){
        $data = American_smart_earn::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function admin_american_smart_earn(){
        return view('admin_body.credit_card.american.admin_american_smart_earn');
    }

    public function american_smart_earn(Request $request){
        $data = new American_smart_earn();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/american/admin_american_smart_earn_list');
    }

//===========================================@INDUSIND BANK===============================================================================
    
//admin_indusind_aura-----------------------------------------------------------------------------------------------

    public function admin_indusind_aura_list(){
        $feed = new Indusind_aura();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.indusind.admin_indusind_aura_list',$data);
    }
     
    //edit

    public function edit_admin_indusind_aura($id){
        $data = Indusind_aura::find($id);
        return view('admin_body.credit_card.indusind.edit_admin_indusind_aura',compact('data'));
    }

    public function update_admin_indusind_aura(Request $request ,$id){
        $data = Indusind_aura::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/indusind/admin_indusind_aura_list');
    }

    //delete
    public function delete_indusind_aura($id){
        $data = Indusind_aura::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function admin_indusind_aura(){
        return view('admin_body.credit_card.indusind.admin_indusind_aura');
    }

    public function indusind_aura(Request $request){
        $data = new Indusind_aura();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/indusind/admin_indusind_aura_list');
    }
     
//admin_indusind_british_airways-----------------------------------------------------------------------------------------------

    public function admin_indusind_british_airways_list(){
        $feed = new Indusind_british_airways();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.indusind.admin_indusind_british_airways_list',$data);
    }

    //edit

    public function edit_admin_indusind_british_airways($id){
        $data = Indusind_british_airways::find($id);
        return view('admin_body.credit_card.indusind.edit_admin_indusind_british_airways',compact('data'));
    }

    public function update_admin_indusind_british_airways(Request $request ,$id){
        $data = Indusind_british_airways::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/indusind/admin_indusind_british_airways_list');
    }

    //delete
    public function delete_indusind_british_airways($id){
        $data = Indusind_british_airways::find($id);
        $data->delete();
        return redirect()->back();

    }
     
    public function admin_indusind_british_airways(){
        return view('admin_body.credit_card.indusind.admin_indusind_british_airways');
    }

    public function indusind_british_airways(Request $request){
        $data = new Indusind_british_airways();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/indusind/admin_indusind_british_airways_list');
    }
     
//admin_indusind_legend-----------------------------------------------------------------------------------------------

    public function admin_indusind_legend_list(){
        $feed = new Indusind_legend();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.indusind.admin_indusind_legend_list',$data);
    }

    //edit

    public function edit_admin_indusind_legend($id){
        $data = Indusind_legend::find($id);
        return view('admin_body.credit_card.indusind.edit_admin_indusind_legend',compact('data'));
    }

    public function update_admin_indusind_legend(Request $request ,$id){
        $data = Indusind_legend::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/indusind/admin_indusind_legend_list');
    }

    //delete
    public function delete_indusind_legend($id){
        $data = Indusind_legend::find($id);
        $data->delete();
        return redirect()->back();

    }
     
    public function admin_indusind_legend(){
        return view('admin_body.credit_card.indusind.admin_indusind_legend');
    }
    
    public function indusind_legend(Request $request){
        $data = new Indusind_legend();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/indusind/admin_indusind_legend_list');
    } 

//admin_indusind_nexxt-----------------------------------------------------------------------------------------------

    public function admin_indusind_nexxt_list(){
        $feed = new Indusind_nexxt();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.indusind.admin_indusind_nexxt_list',$data);
    }
     
    //edit

    public function edit_admin_indusind_nexxt($id){
        $data = Indusind_nexxt::find($id);
        return view('admin_body.credit_card.indusind.edit_admin_indusind_nexxt',compact('data'));
    }

    public function update_admin_indusind_nexxt(Request $request ,$id){
        $data = Indusind_nexxt::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/indusind/admin_indusind_nexxt_list');
    }

    //delete
    public function delete_indusind_nexxt($id){
        $data = Indusind_nexxt::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function admin_indusind_nexxt(){
        return view('admin_body.credit_card.indusind.admin_indusind_nexxt');
    }

    public function indusind_nexxt(Request $request){
        $data = new Indusind_nexxt();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/indusind/admin_indusind_nexxt_list');
    }

//admin_indusind_pinnacle-----------------------------------------------------------------------------------------------

    public function admin_indusind_pinnacle_list(){
        $feed = new Indusind_pinnacle();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.indusind.admin_indusind_pinnacle_list',$data);
    }
     
    //edit

    public function edit_admin_indusind_pinnacle($id){
        $data = Indusind_pinnacle::find($id);
        return view('admin_body.credit_card.indusind.edit_admin_indusind_pinnacle',compact('data'));
    }

    public function update_indusind_pinnacle(Request $request ,$id){
        $data = Indusind_pinnacle::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/indusind/admin_indusind_pinnacle_list');
    }

    //delete
    public function delete_indusind_pinnacle($id){
        $data = Indusind_pinnacle::find($id);
        $data->delete();
        return redirect()->back();

    }
    public function admin_indusind_pinnacle(){
        return view('admin_body.credit_card.indusind.admin_indusind_pinnacle');
    }

    public function indusind_pinnacle(Request $request){
        $data = new Indusind_pinnacle();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/indusind/admin_indusind_pinnacle_list');
    }

//admin_indusind_platinum_visa-----------------------------------------------------------------------------------------------

    public function admin_indusind_platinum_visa_list(){
        $feed = new Indusind_platinum_visa();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.indusind.admin_indusind_platinum_visa_list',$data);
    }
     
    //edit

    public function edit_admin_indusind_platinum_visa($id){
        $data = Indusind_platinum_visa::find($id);
        return view('admin_body.credit_card.indusind.edit_admin_indusind_platinum_visa',compact('data'));
    }

    public function update_admin_indusind_platinum_visa(Request $request ,$id){
        $data = Indusind_platinum_visa::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/indusind/admin_indusind_platinum_visa_list');
    }

    //delete
    public function delete_indusind_platinum_visa($id){
        $data = Indusind_platinum_visa::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function admin_indusind_platinum_visa(){
        return view('admin_body.credit_card.indusind.admin_indusind_platinum_visa');
    } 

    public function indusind_platinum_visa(Request $request){
        $data = new Indusind_platinum_visa();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/indusind/admin_indusind_platinum_visa_list');
    }
    
//admin_indusind_qatar_airways-----------------------------------------------------------------------------------------------

    public function admin_indusind_qatar_airways_list(){
        $feed = new Indusind_qatar_airways();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.indusind.admin_indusind_qatar_airways_list',$data);
    }
     
    //edit

    public function edit_admin_indusind_qatar_airways($id){
        $data = Indusind_qatar_airways::find($id);
        return view('admin_body.credit_card.indusind.edit_admin_indusind_qatar_airways',compact('data'));
    }

    public function update_admin_indusind_qatar_airways(Request $request ,$id){
        $data = Indusind_qatar_airways::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/indusind/admin_indusind_qatar_airways_list');
    }

    //delete
    public function delete_indusind_qatar_airways($id){
        $data = Indusind_qatar_airways::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function admin_indusind_qatar_airways(){
        return view('admin_body.credit_card.indusind.admin_indusind_qatar_airways');
    }
     
    public function indusind_qatar_airways(Request $request){
        $data = new Indusind_qatar_airways();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/indusind/admin_indusind_qatar_airways_list');
    }

//admin_indusind_rupay_platinum-----------------------------------------------------------------------------------------------

    public function admin_indusind_rupay_platinum_list(){
        $feed = new Indusind_rupay_platinum();
        $data['data']=$feed->all();
        return view('admin_body.credit_card.indusind.admin_indusind_rupay_platinum_list',$data);
    }

     //edit

    public function edit_admin_indusind_rupay_platinum($id){
        $data = Indusind_rupay_platinum::find($id);
        return view('admin_body.credit_card.indusind.edit_admin_indusind_rupay_platinum',compact('data'));
    }

    public function update_admin_indusind_rupay_platinum(Request $request ,$id){
        $data = Indusind_rupay_platinum::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/indusind/admin_indusind_rupay_platinum_list');
    }

    //delete
    public function delete_indusind_rupay_platinum($id){
        $data = Indusind_rupay_platinum::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function admin_indusind_rupay_platinum(){
        return view('admin_body.credit_card.indusind.admin_indusind_rupay_platinum');
    }

    public function indusind_rupay_platinum(Request $request){
        $data = new Indusind_rupay_platinum();

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/indusind/admin_indusind_rupay_platinum_list');
    }

//===========================================@HSBC BANK===================================================================================

    //admin_hsbc_cashback-------------------------------------------------------------------------------------------------

    public function admin_hsbc_cashback(){
        { if (session()->get('type') === 'admin') {
        return view('admin_body.credit_card.hsbc.admin_hsbc_cashback');
    }
    // Redirect non-admin users or unauthenticated users to the login page
    return redirect('login')->with('Error', 'Access Denied');
    }
    }
    
    public function hsbc_cashback(Request $request){

        $data = new Hsbc_cashback;

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return view('admin_body.credit_card.hsbc.admin_hsbc_cashback');
    }
    
    public function admin_hsbc_cashback_list(){
        { if (session()->get('type') === 'admin') {
            $feed = new Hsbc_cashback();
            $data['data'] = $feed->all();
        return view('admin_body.credit_card.hsbc.admin_hsbc_cashback_list',$data);
    }
    // Redirect non-admin users or unauthenticated users to the login page
    return redirect('login')->with('Error', 'Access Denied');
    }
    }

    //edit

    public function edit_hsbc_cashback($id){
        { if (session()->get('type') === 'admin') {
        $data = Ace_axis::find($id);
        return view('admin_body.credit_card.hsbc.edit_admin_hsbc_cashback',compact('data'));
    }
    // Redirect non-admin users or unauthenticated users to the login page
    return redirect('login')->with('Error', 'Access Denied');
    }
    }

    public function update_hsbc_cashback(Request $request, $id){

        $data = Hsbc_cashback::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/hsbc/admin_hsbc_cashback_list');
    }

    //delete

    public function delete_hsbc_cashback($id){
        { if (session()->get('type') === 'admin') {
        $data=Hsbc_cashback::find($id);              
        $data->delete();
        return redirect()->back();
    }
    // Redirect non-admin users or unauthenticated users to the login page
    return redirect('login')->with('Error', 'Access Denied');
    }
    }

    //admin_hsbc_premier-------------------------------------------------------------------------------------------------

    public function admin_hsbc_premier_list(){
        { if (session()->get('type') === 'admin') {
            $feed = new Hsbc_premier();
            $data['data'] = $feed->all();
        return view('admin_body.credit_card.hsbc.admin_hsbc_premier_list',$data);
    }
    // Redirect non-admin users or unauthenticated users to the login page
    return redirect('login')->with('Error', 'Access Denied');
    }
    }

    //edit

    public function edit_hsbc_premier($id){
        { if (session()->get('type') === 'admin') {
        $data = Hsbc_premier::find($id);
        return view('admin_body.credit_card.hsbc.edit_admin_hsbc_premier',compact('data'));
    }
    // Redirect non-admin users or unauthenticated users to the login page
    return redirect('login')->with('Error', 'Access Denied');
    }
    }

    public function update_hsbc_premier(Request $request, $id){

        $data = Hsbc_premier::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/hsbc/admin_hsbc_premier_list');
    }

    //delete

    public function delete_hsbc_premier($id){
        { if (session()->get('type') === 'admin') {
        $data=Hsbc_premier::find($id);              
        $data->delete();
        return redirect()->back();
    }
    // Redirect non-admin users or unauthenticated users to the login page
    return redirect('login')->with('Error', 'Access Denied');
    }
    }

    public function admin_hsbc_premier(){
        { if (session()->get('type') === 'admin') {
        return view('admin_body.credit_card.hsbc.admin_hsbc_premier');
    }
    // Redirect non-admin users or unauthenticated users to the login page
    return redirect('login')->with('Error', 'Access Denied');
    }
    }

    public function hsbc_premier(Request $request){

        $data = new Hsbc_premier;

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return view('admin_body.credit_card.hsbc.admin_hsbc_premier');
    }

    //admin_hsbc_smart_value-------------------------------------------------------------------------------------------------

    public function admin_hsbc_smart_value_list(){
        { if (session()->get('type') === 'admin') {
            $feed = new Hsbc_smart_value();
            $data['data'] = $feed->all();
        return view('admin_body.credit_card.hsbc.admin_hsbc_smart_value_list',$data);
    }
    // Redirect non-admin users or unauthenticated users to the login page
    return redirect('login')->with('Error', 'Access Denied');
    }
    }

    //edit

    public function edit_hsbc_smart_value($id){
        { if (session()->get('type') === 'admin') {
        $data = Hsbc_smart_value::find($id);
        return view('admin_body.credit_card.hsbc.edit_admin_hsbc_smart_value',compact('data'));
    }
    // Redirect non-admin users or unauthenticated users to the login page
    return redirect('login')->with('Error', 'Access Denied');
    }
    }

    public function update_hsbc_smart_value(Request $request, $id){

        $data = Hsbc_smart_value::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/hsbc/admin_hsbc_smart_value');
    }

    //delete

    public function delete_hsbc_smart_value($id){
        { if (session()->get('type') === 'admin') {
        $data=Hsbc_smart_value::find($id);              
        $data->delete();
        return redirect()->back();
    }
    // Redirect non-admin users or unauthenticated users to the login page
    return redirect('login')->with('Error', 'Access Denied');
    }
    }

    public function admin_hsbc_smart_value(){
        { if (session()->get('type') === 'admin') {
        return view('admin_body.credit_card.hsbc.admin_hsbc_smart_value');
    }
    // Redirect non-admin users or unauthenticated users to the login page
    return redirect('login')->with('Error', 'Access Denied');
    }
    }

    public function hsbc_smart_value(Request $request){

        $data = new Hsbc_smart_value;

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return view('admin_body.credit_card.hsbc.admin_hsbc_smart_value');
    }

    //admin_hsbc_visa_platinum-------------------------------------------------------------------------------------------------

    public function admin_hsbc_visa_platinum_list(){
        { if (session()->get('type') === 'admin') {
            $feed = new Ace_axis();
            $data['data'] = $feed->all();
        return view('admin_body.credit_card.hsbc.admin_hsbc_visa_platinum_list',$data);
    }
    // Redirect non-admin users or unauthenticated users to the login page
    return redirect('login')->with('Error', 'Access Denied');
    }
    }

    //edit

    public function edit_hsbc_visa_platinum($id){
        { if (session()->get('type') === 'admin') {
        $data = Hsbc_visa_platinum::find($id);
        return view('admin_body.credit_card.hsbc.edit_admin_hsbc_visa_platinum',compact('data'));
    }
    // Redirect non-admin users or unauthenticated users to the login page
    return redirect('login')->with('Error', 'Access Denied');
    }
    }

    public function update_hsbc_visa_platinum(Request $request, $id){

        $data = Hsbc_visa_platinum::find($id);

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return redirect('credit_card/hsbc/admin_hsbc_visa_platinum_list');
    }

    //delete

    public function delete_hsbc_visa_platinum($id){
        { if (session()->get('type') === 'admin') {
        $data=Hsbc_visa_platinum::find($id);              
        $data->delete();
        return redirect()->back();
    }
    // Redirect non-admin users or unauthenticated users to the login page
    return redirect('login')->with('Error', 'Access Denied');
    }
    }

    public function admin_hsbc_visa_platinum(){
        { if (session()->get('type') === 'admin') {
        return view('admin_body.credit_card.hsbc.admin_hsbc_visa_platinum');
    }
    // Redirect non-admin users or unauthenticated users to the login page
    return redirect('login')->with('Error', 'Access Denied');
    }
    }

    public function hsbc_visa_platinum(Request $request){

        $data = new Hsbc_visa_platinum;

        $data->first_name = $request->first_name;
        $data->url = $request->url;

        $data->save();

        return view('admin_body.credit_card.hsbc.admin_hsbc_visa_platinum');
    }

//===========================================@YES BANK=====================================================================

    //ace

    public function admin_yes_ace_list(){
        return view('admin_body.credit_card.yes.admin_yes_ace_list');
    }

    public function admin_yes_ace(){
        return view('admin_body.credit_card.yes.admin_yes_ace');
    }

    //plus_list
    
    public function admin_yes_elite_plus_list(){
        return view('admin_body.credit_card.yes.admin_yes_elite_plus_list');
    }
    
    public function admin_yes_elite_plus(){
        return view('admin_body.credit_card.yes.admin_yes_elite_plus');
    }
    
    public function admin_yes_first_business_list(){
        return view('admin_body.credit_card.yes.admin_yes_first_business_list');
    }
    
    public function admin_yes_first_business(){
        return view('admin_body.credit_card.yes.admin_yes_first_business');
    }

    public function admin_yes_first_list(){
        return view('admin_body.credit_card.yes.admin_yes_first_list');
    }
    
    public function admin_yes_first(){
        return view('admin_body.credit_card.yes.admin_yes_first');
    }
    
    public function admin_yes_form_list(){
        return view('admin_body.credit_card.yes.admin_yes_form_list');
    }
    
    public function admin_yes_marquee_list(){
        return view('admin_body.credit_card.yes.admin_yes_marquee_list');
    }
    
    public function admin_yes_marquee(){
        return view('admin_body.credit_card.yes.admin_yes_marquee');
    }
    
    public function admin_yes_properity_cashback_list(){
        return view('admin_body.credit_card.yes.admin_yes_properity_cashback_list');
    }
    
    public function admin_yes_properity_cashback(){
        return view('admin_body.credit_card.yes.admin_yes_properity_cashback');
    }
    
    public function admin_yes_prosperity_list(){
        return view('admin_body.credit_card.yes.admin_yes_prosperity_list');
    }
    
    public function admin_yes_prosperity(){
        return view('admin_body.credit_card.yes.admin_yes_prosperity');
    }
    
    public function admin_yes_reserve_list(){
        return view('admin_body.credit_card.yes.admin_yes_reserve_list');
    }
    
    public function admin_yes_reserve(){
        return view('admin_body.credit_card.yes.admin_yes_reserve');
    }
    
    public function admin_yes_select_list(){
        return view('admin_body.credit_card.yes.admin_yes_select_list');
    }
    
    public function admin_yes_select(){
        return view('admin_body.credit_card.yes.admin_yes_select');
    }

//============================================@KOTAK BANK============================================================================

    public function admin_kotak_6e_reward_list(){
        return view('admin_body.credit_card.kotak.admin_kotak_6e_reward_list');
    }

    public function admin_kotak_6e_reward_xl_list(){
        return view('admin_body.credit_card.kotak.admin_kotak_6e_reward_xl_list');
    }

    public function admin_kotak_6e_reward_xl(){
        return view('admin_body.credit_card.kotak.admin_kotak_6e_reward_xl');
    }

    public function admin_kotak_6e_reward(){
        return view('admin_body.credit_card.kotak.admin_kotak_6e_reward');
    }

    public function admin_kotak_811_list(){
        return view('admin_body.credit_card.kotak.admin_kotak_811_list');
    }

    public function admin_kotak_811(){
        return view('admin_body.credit_card.kotak.admin_kotak_811');
    }

    public function admin_kotak_form_list(){
        return view('admin_body.credit_card.kotak.admin_kotak_form_list');
    }

    public function admin_kotak_india_oil_list(){
        return view('admin_body.credit_card.kotak.admin_kotak_india_oil_list');
    }

    public function admin_kotak_india_oil(){
        return view('admin_body.credit_card.kotak.admin_kotak_india_oil');
    }

    public function admin_kotak_league_platinum_list(){
        return view('admin_body.credit_card.kotak.admin_kotak_league_platinum_list');
    }

    public function admin_kotak_league_platinum(){
        return view('admin_body.credit_card.kotak.admin_kotak_league_platinum');
    }

    public function admin_kotak_myntra_list(){
        return view('admin_body.credit_card.kotak.admin_kotak_myntra_list');
    }

    public function admin_kotak_myntra(){
        return view('admin_body.credit_card.kotak.admin_kotak_myntra');
    }

    public function admin_kotak_royal_signature_list(){
        return view('admin_body.credit_card.kotak.admin_kotak_royal_signature_list');
    }

    public function admin_kotak_royal_signature(){
        return view('admin_body.credit_card.kotak.admin_kotak_royal_signature');
    }

    public function admin_kotak_urbane_gold_list(){
        return view('admin_body.credit_card.kotak.admin_kotak_urbane_gold_list');
    }

    public function admin_kotak_urbane_gold(){
        return view('admin_body.credit_card.kotak.admin_kotak_urbane_gold');
    }

    public function admin_kotak_white_reserve_list(){
        return view('admin_body.credit_card.kotak.admin_kotak_white_reserve_list');
    }

    public function admin_kotak_white_reserve(){
        return view('admin_body.credit_card.kotak.admin_kotak_white_reserve');
    }

    public function admin_kotak_zen_signature_list(){
        return view('admin_body.credit_card.kotak.admin_kotak_zen_signature_list');
    }

    public function admin_kotak_zen_signature(){
        return view('admin_body.credit_card.kotak.admin_kotak_zen_signature');
    }

//======================================@ICICI BANK=============================================================================

    public function admin_icici_coral_list(){
        return view('admin_body.credit_card.icici.admin_icici_coral_list');
    }

    public function admin_icici_coral(){
        return view('admin_body.credit_card.icici.admin_icici_coral');
    }

    public function admin_icici_emeralde_list(){
        return view('admin_body.credit_card.icici.admin_icici_emeralde_list');
    }

    public function admin_icici_emeralde_private_list(){
        return view('admin_body.credit_card.icici.admin_icici_emeralde_private_list');
    }

    public function admin_icici_emeralde_private(){
        return view('admin_body.credit_card.icici.admin_icici_emeralde_private');
    }

    public function admin_icici_emeralde(){
        return view('admin_body.credit_card.icici.admin_icici_emeralde');
    }

    public function admin_icici_form_list(){
        return view('admin_body.credit_card.icici.admin_icici_form_list');
    }

    public function admin_icici_manchester_united_platinum_list(){
        return view('admin_body.credit_card.icici.admin_icici_manchester_united_platinum_list');
    }

    public function admin_icici_manchester_united_platinum(){
        return view('admin_body.credit_card.icici.admin_icici_manchester_united_platinum');
    }

    public function admin_icici_manchester_united_signature_list(){
        return view('admin_body.credit_card.icici.admin_icici_manchester_united_signature_list');
    }

    public function admin_icici_manchester_united_signature(){
        return view('admin_body.credit_card.icici.admin_icici_manchester_united_signature');
    }

    public function admin_icici_platinum_list(){
        return view('admin_body.credit_card.icici.admin_icici_platinum_list');
    }

    public function admin_icici_platinum(){
        return view('admin_body.credit_card.icici.admin_icici_platinum');
    }

    public function admin_icici_rubyx_list(){
        return view('admin_body.credit_card.icici.admin_icici_rubyx_list');
    }

    public function admin_icici_rubyx(){
        return view('admin_body.credit_card.icici.admin_icici_rubyx');
    }

    public function admin_icici_sapphiro_list(){
        return view('admin_body.credit_card.icici.admin_icici_sapphiro_list');
    }

    public function admin_icici_sapphiro(){
        return view('admin_body.credit_card.icici.admin_icici_sapphiro');
    }

//=============================================@STANDARD BANK===================================================================

    public function admin_standard_digismart_list(){
        return view('admin_body.credit_card.standard.admin_standard_digismart_list');
    }

    public function admin_standard_digismart(){
        return view('admin_body.credit_card.standard.admin_standard_digismart');
    }

    public function admin_standard_form_list(){
        return view('admin_body.credit_card.standard.admin_standard_form_list');
    }

    public function admin_standard_mahattan_list(){
        return view('admin_body.credit_card.standard.admin_standard_mahattan_list');
    }

    public function admin_standard_mahattan(){
        return view('admin_body.credit_card.standard.admin_standard_mahattan');
    }

    public function admin_standard_platinum_reward_list(){
        return view('admin_body.credit_card.standard.admin_standard_platinum_reward_list');
    }

    public function admin_standard_platinum_reward(){
        return view('admin_body.credit_card.standard.admin_standard_platinum_reward');
    }

    public function admin_standard_priority_visa_list(){
        return view('admin_body.credit_card.standard.admin_standard_priority_visa_list');
    }

    public function admin_standard_priority_visa(){
        return view('admin_body.credit_card.standard.admin_standard_priority_visa');
    }

    public function admin_standard_super_value_list(){
        return view('admin_body.credit_card.standard.admin_standard_super_value_list');
    }

    public function admin_standard_super_value(){
        return view('admin_body.credit_card.standard.admin_standard_super_value');
    }

    public function admin_standard_ultimate_list(){
        return view('admin_body.credit_card.standard.admin_standard_ultimate_list');
    }

    public function admin_standard_ultimate(){
        return view('admin_body.credit_card.standard.admin_standard_ultimate');
    }

//---------------------------------------------------@ LOAN --------------------------------------------------------------------

//=================================================@PERSONAL LOAN==================================================================

    public function admin_personal_loan_list(){
        return view('admin_body.loan.personal.admin_personal_loan_list');
    }

//=================================================@HOME LOAN==================================================================

    public function admin_business_loan_list(){
        return view('admin_body.loan.business.admin_business_loan_list');
    }


//=================================================@HOME LOAN==================================================================

    public function admin_home_loan_list(){
        return view('admin_body.loan.home.admin_home_loan_list');
    }

//=================================================@LOAN AGAINST PROPERTY LOAN==================================================================

    public function admin_loan_against_property_list(){
        return view('admin_body.loan.loan_against_property.admin_loan_against_property_list');
    }

    public function admin_loan_against_property(){
        return view('admin_body.loan.loan_against_property.admin_loan_against_property');
    }

//=================================================@LOAN AGAINST PROPERTY LOAN==================================================================

    public function admin_gold_loan_list(){
        return view('admin_body.loan.gold.admin_gold_loan_list');
    }

    public function admin_gold_loan(){
        return view('admin_body.loan.gold.admin_gold_loan');
    }

//-------------------------------------------------@INSURANCE----------------------------------------------------------------------

//=================================================@HEALTH INSURANCE===============================================================

    public function admin_health_aditya_birla_list(){
        return view('admin_body.insurance.health.admin_health_aditya_birla_list');
    }

    public function admin_health_aditya_birla(){
        return view('admin_body.insurance.health.admin_health_aditya_birla');
    }

    public function admin_health_core_list(){
        return view('admin_body.insurance.health.admin_health_core_list');
    }

    public function admin_health_core(){
        return view('admin_body.insurance.health.admin_health_core');
    }

    public function admin_health_future_list(){
        return view('admin_body.insurance.health.admin_health_future_list');
    }

    public function admin_health_future(){
        return view('admin_body.insurance.health.admin_health_future');
    }

    public function admin_health_godigital_list(){
        return view('admin_body.insurance.health.admin_health_godigital_list');
    }

    public function admin_health_godigital(){
        return view('admin_body.insurance.health.admin_health_godigital');
    }

    public function admin_health_hdfc_ergo(){
        return view('admin_body.insurance.health.admin_health_hdfc_ergo');
    }
    
    public function admin_health_hdfc_ergo_list(){
        return view('admin_body.insurance.health.admin_health_hdfc_ergo_list');
    }

    public function admin_health_icici_lomboard_list(){
        return view('admin_body.insurance.health.admin_health_icici_lomboard_list');
    }

    public function admin_health_icici_lomboard(){
        return view('admin_body.insurance.health.admin_health_icici_lomboard');
    }

    public function admin_health_max_bupa_list(){
        return view('admin_body.insurance.health.admin_health_max_bupa_list');
    }

    public function admin_health_max_bupa(){
        return view('admin_body.insurance.health.admin_health_max_bupa');
    }

    public function admin_health_reliance_list(){
        return view('admin_body.insurance.health.admin_health_reliance_list');
    }

    public function admin_health_reliance(){
        return view('admin_body.insurance.health.admin_health_reliance');
    }

    public function admin_health_sbi_general_list(){
        return view('admin_body.insurance.health.admin_health_sbi_general_list');
    }

    public function admin_health_sbi_general(){
        return view('admin_body.insurance.health.admin_health_sbi_general');
    }

    public function admin_health_tata_aig_list(){
        return view('admin_body.insurance.health.admin_health_tata_aig_list');
    }

    public function admin_health_tata_aig(){
        return view('admin_body.insurance.health.admin_health_tata_aig');
    }

//=================================================@LIFE INSURANCE===============================================================

    public function admin_life_bajaj_allianz_list(){
        return view('admin_body.insurance.life.admin_life_bajaj_allianz_list');
    }

    public function admin_life_bajaj_allianz(){
        return view('admin_body.insurance.life.admin_life_bajaj_allianz');
    }

    public function admin_life_bharti_axa_list(){
        return view('admin_body.insurance.life.admin_life_bharti_axa_list');
    }

    public function admin_life_bharti_axa(){
        return view('admin_body.insurance.life.admin_life_bharti_axa');
    }

    public function admin_life_hdfc_list(){
        return view('admin_body.insurance.life.admin_life_hdfc_list');
    }

    public function admin_life_hdfc(){
        return view('admin_body.insurance.life.admin_life_hdfc');
    }

    public function admin_life_icici_list(){
        return view('admin_body.insurance.life.admin_life_icici_list');
    }

    public function admin_life_icici(){
        return view('admin_body.insurance.life.admin_life_icici');
    }

    public function admin_life_kotak_list(){
        return view('admin_body.insurance.life.admin_life_kotak_list');
    }

    public function admin_life_kotak(){
        return view('admin_body.insurance.life.admin_life_kotak');
    }

    public function admin_life_max_list(){
        return view('admin_body.insurance.life.admin_life_max_list');
    }

    public function admin_life_max(){
        return view('admin_body.insurance.life.admin_life_max');
    }

    public function admin_life_sbi_list(){
        return view('admin_body.insurance.life.admin_life_sbi_list');
    }

    public function admin_life_sbi(){
        return view('admin_body.insurance.life.admin_life_sbi');
    }               

    
//=================================================@GENERAL INSURANCE===============================================================

    public function admin_general_bike_list(){
        return view('admin_body.insurance.general.admin_general_bike_list');
    }

    public function admin_general_bike(){
        return view('admin_body.insurance.general.admin_general_bike');
    }

    public function admin_general_car_list(){
        return view('admin_body.insurance.general.admin_general_car_list');
    }


    public function admin_general_car(){
        return view('admin_body.insurance.general.admin_general_car');
    }


    public function admin_general_motor_list(){
        return view('admin_body.insurance.general.admin_general_motor_list');
    }


    public function admin_general_motor(){
        return view('admin_body.insurance.general.admin_general_motor');
    }


    public function admin_general_travel_list(){
        return view('admin_body.insurance.general.admin_general_travel_list');
    }


    public function admin_general_travel(){
        return view('admin_body.insurance.general.admin_general_travel');
    }

//-----------------------------------------------------@INSTANT LOAN------------------------------------------------------------

    public function admin_hdfc_xpress_loan_list(){
         return view('admin_body.instant_loan.admin_hdfc_xpress_loan_list');
     }

    public function admin_hdfc_xpress_loan(){
         return view('admin_body.instant_loan.admin_hdfc_xpress_loan');
    }

    public function admin_insta_loan_list(){
        return view('admin_body.instant_loan.admin_insta_loan_list');
    }

    public function admin_insta_loan(){
        return view('admin_body.instant_loan.admin_insta_loan');
    }

    public function admin_jumbo_loan_list(){
        return view('admin_body.instant_loan.admin_jumbo_loan_list');
    }

    public function admin_jumbo_loan(){
        return view('admin_body.instant_loan.admin_jumbo_loan');
    }

    public function admin_smart_emi_loan_list(){
        return view('admin_body.instant_loan.admin_smart_emi_loan_list');
    }

    public function admin_smart_emi_loan(){
        return view('admin_body.instant_loan.admin_smart_emi_loan');
    }

//-----------------------------------------------------@BLOG------------------------------------------------------------

    public function admin_blog_list(){
        $feed= new blog();
        $products['products']=$feed->all();
        return view('admin_body.blog.admin_blog_list',$products);
    }

    //edit

    public function edit_admin_blog($id){
        if (session()->get('type') === 'admin') {
        $products = blog::find($id);
        return view ('admin_body/blog/edit_admin_blog',compact('products'));
       }
       // Redirect non-admin users or unauthenticated users to the login page
       return redirect('login')->with('Error', 'Access Denied');
       }

       public function edit_blog(Request $request, $id)
       {    
            $validated = $request->validate([
                'editor1' => 'required|string',
            ]);
            
           $products = blog::find($id);
           $products->meta_title = $request->meta_title;
           if($request->hasFile('image'))
           {
               $file = $request->file('image');
               $filename = time() . '.' . $file->getClientOriginalExtension();
               $file->move(public_path('uploads'), $filename);
               $products->image = 'uploads/' . $filename; // Save file path to database
               }
               $products->meta_description = $request->meta_description;
               $products->description = $request->description;
               $products->editor1 = $request->editor1;
            // Save the updated product
           $products->save();
   
           return redirect()->route('admin_blog_list', $id)->with('success', 'Product updated successfully');
   
       }

     //delete
   public function blog_delete($id){
    $register=blog::find($id);              
    $reg=$register->delete();
    if($reg){
        return redirect()->back();
    }
    else{
        echo "fail";
    }
    }

    public function admin_blog(){
        return view('admin_body.blog.admin_blog');
    }   

    public function bloged(Request $request)
   {
    $validated = $request->validate([
        'editor1' => 'required|string',
    ]);
    
       $products = new Blog();
            $products->meta_title = $request->meta_title;
            if($request->hasFile('image'))
            {
                $file = $request->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads'), $filename);
                $products->image = 'uploads/' . $filename; // Save file path to database
                }
            $products->meta_description = $request->meta_description;
            $products->description = $request->description;
            $products->editor1 = $request->editor1;
      
      $products->save();

      // Redirect or return response after saving
      return redirect('blog/admin_blog_list')->with('success', 'Form submitted successfully!');
  }

//-----------------------------------------------------@BLOG------------------------------------------------------------

    public function admin_documentation_list(){
        return view('admin_body.document.admin_documentation_list');
    }

    public function admin_documentation(){
        return view('admin_body.document.admin_documentation');
    }

//-----------------------------------------------------@CREATE TEAM------------------------------------------------------------

    public function admin_create_team_list(){
        $feed = new Create_Team();
        $data['data']=$feed->all();
        return view('admin_body.create_team.admin_create_team_list',$data);
    }

    //edit

    public function edit_team($id){
        $data = Create_Team::find($id);
        return view('admin_body.create_team.edit_admin_create_team',compact('data'));
    }

    public function update_team(Request $request, $id){

        $data = Create_Team::find($id);

        $data->main = $request->main;
        $data->senior = $request->senior;
        $data->manager = $request->manager;
        $data->team = $request->team;
        $data->telecaller = $request->telecaller;

        $data->save();

        return redirect('create_team/admin_create_team_list');
    }

    //delete
    public function delete_team($id){
    $data=Create_Team::find($id);              
    $data->delete();
    return redirect()->back();
    }
    
    public function admin_create_team(){
        return view('admin_body.create_team.admin_create_team');
    }

    public function create_team(Request $request){

        $data = new Create_Team;

        $data->main = $request->main;
        $data->senior = $request->senior;
        $data->manager = $request->manager;
        $data->team = $request->team;
        $data->telecaller = $request->telecaller;

        $data->save();

        return redirect('create_team/admin_create_team_list');
    }
    
//-----------------------------------------------------@HSBC TEAM------------------------------------------------------------

    public function admin_hsbc_bank_upload_form_list(){
        return view('admin_body.hsbc_team.admin_hsbc_bank_upload_form_list');
    }

    public function admin_hsbc_bank_upload_form(){
        return view('admin_body.hsbc_team.admin_hsbc_bank_upload_form');
    }

//----------------------------------------------@ CATEGORY----------------------------------------------------------------------------

    public function category(){
        return view('admin_body.category');
    }

    public function categories(Request $request){
        
        $cat = new Categories_Table(); 
    
        $cat->category_name = $request->input('category_name');
           
        $cat->save();
    
        return redirect('admin_body/sub_category');

    }

    //----------------------------------------------@ CATEGORY_LIST---------------------------------------------------------------------------

    public function category_list()
    {
        $category_list=new Categories_Table();
        $data['data']=$category_list->all();
        return view('admin_body.category_list',$data);
    }
 
    //edit

        public function edit($id)
    {
        // Fetch the category by ID for editing
        $edit_profile = Categories_Table::find($id);  // Fetching directly with find
        if (!$edit_profile) {
            return redirect()->back()->with('msg', 'Category not found');  // Handling if no category found
        }

        // Passing the fetched data to the view
        return view('admin_body.edit', ['data' => $edit_profile]);
    }

    public function updatefunction(Request $request)
    {
        // Fetching the ID from the request
        $id = $request->id;

        // Fetch the category to update
        $update_about_us = Categories_Table::find($id);

        // Check if the category exists
        if ($update_about_us) {
            // Update the category details
            $update_about_us->category_name= $request->category_name;

            // Save the updated category
            $update_about = $update_about_us->save();

            // Check if save was successful
            if ($update_about) {
                return redirect('admin_body')->with('msg', 'Category updated successfully');
            } else {
                return redirect()->back()->with('msg', 'Failed to update category');
            }
        } else {
            // If category not found, return with an error
            return redirect()->back()->with('msg', 'Category not found');
        }
    }

    //delete

    public function delete($id){
        $register=Categories_Table::find($id);              
        $reg=$register->delete();
        if($reg){
            return redirect()->back();
        }
        else{
            echo "fail";
        }
    }

//========================================@SUB_CATEGORY======================================================================================
    
    public function sub_category()
    {
        $categories = Categories_Table::with('subcategories')->get();
        return view('admin_body.sub_category', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category' => 'required',
            'subcategory' => 'required',
        ]);

        return back()->with('success', 'Form submitted successfully!');
    }


}