<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sbi_Form;
use App\Models\Kotak_Form;
use App\Models\Icici_Form;
use App\Models\American_Form;
use App\Models\Standard_Form;
use App\Models\Yes_Form;
use App\Models\Elite_Sbi;
use App\Models\Octane_Sbi;
use App\Models\Premier_Sbi;
use App\Models\Signature_Sbi;
use App\Models\Save_Sbi;
use App\Models\Pulse_Sbi;
use App\Models\Gold_Am;
use App\Models\Payback_Am;
use App\Models\Stand_dig_Form;
use App\Models\Titta_Form;
use App\Models\Man_Form;
use App\Models\Platinum_Form;
use App\Models\Pri_Form;
use App\Models\Cashback_Yesform;
use App\Models\Reward_Yesform;
use App\Models\Reserve_Yesform;
use App\Models\Marquee_yesform;
use App\Models\First_Yesform;
use App\Models\First_bus_Yes;
use App\Models\Select_Yesform;
use App\Models\Ace_Yes;
use App\Models\Coral_ICICIform;
use App\Models\Emeralde_ICICIform;
use App\Models\Platinum_ICICIform;
use App\Models\Rubyx_ICICIform;
use App\Models\Sapphiro_ICICIform;
use App\Models\Sign_ICICIform;
use App\Models\United_ICICIform;
use App\Models\Gold_Kotakform;
use App\Models\Indianoil_Kotakform;
use App\Models\KotakNO_Kotakform;
use App\Models\Reward_Kotakform;
use App\Models\White_Kotakform;
use App\Models\Xl_Kotakform;
use App\Models\Zen_Kotakform;
use App\Models\Myntra_Kotakform;
use App\Models\Royal_Kotakform;
use App\Models\Contact_Form;
use App\Models\Form_For;
use Illuminate\Support\Facades\Hash;
use App\Models\Login_REG;
use App\Models\blog;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }

//=====================================================@ CREDIT CARD=====================================================================

//------------------------------------------------------@ HDFC BANK ----------------------------------------------------------------------

    public function hdfc_freedom(){
        return view('credit_card.hdfc.hdfc_freedom');
    }

    public function hdfc_indianoil(){
        return view('credit_card.hdfc.hdfc_indianoil');
    }

    public function hdfc_money_back_credit(){
        return view('credit_card.hdfc.hdfc_money_back_credit');
    }

    public function hdfc_regalia(){
        return view('credit_card.hdfc.hdfc_regalia');
    }

    public function hdfc_upi_rupay(){
        return view('credit_card.hdfc.hdfc_upi_rupay');
    }
    
    public function hdfc_infinia(){
        return view('credit_card.hdfc.hdfc_infinia');
    }
    
    public function hdfc_millennia(){
        return view('credit_card.hdfc.hdfc_millennia');
    }

    public function hdfc_moneyback(){
        return view('credit_card.hdfc.hdfc_moneyback');
    }

    public function hdfc_bizfirst(){
        return view('credit_card.hdfc.hdfc_bizfirst');
    }

    public function hdfc_giga(){
        return view('credit_card.hdfc.hdfc_giga');
    }

    public function hdfc_big_grow(){
        return view('credit_card.hdfc.hdfc_big_grow');
    }

    public function hdfc_6e_reward(){
        return view('credit_card.hdfc.hdfc_6e_reward');
    }

    public function hdfc_6e_xl_reward(){
        return view('credit_card.hdfc.hdfc_6e_xl_reward');
    }

    public function hdfc_diner(){
        return view('credit_card.hdfc.hdfc_diner');
    }

    public function hdfc_swiggy(){
        return view('credit_card.hdfc.hdfc_swiggy');
    }

    public function hdfc_tata_neu(){
        return view('credit_card.hdfc.hdfc_tata_neu');
    }

    public function hdfc_tata_neu_infinity(){
        return view('credit_card.hdfc.hdfc_tata_neu_infinity');
    }

    public function hdfc_marrat_borway(){
        return view('credit_card.hdfc.hdfc_marrat_borway');
    }

    public function hdfc_shoppers(){
        return view('credit_card.hdfc.hdfc_shoppers');
    }

    public function hdfc_flipkart_wholeshale(){
        return view('credit_card.hdfc.hdfc_flipkart_wholeshale');
    }

//------------------------------------------------------@ HDFC BANK -----------------------------------------------------------------------

    public function axis_bank_ace(){
        return view('credit_card.axis.axis_bank_ace');
    }

    public function axis_bank_aritel(){
        return view('credit_card.axis.axis_bank_aritel');
    }

    public function axis_bank_flipkart(){
        return view('credit_card.axis.axis_bank_flipkart');
    }

    public function axis_bank_indianoil(){
        return view('credit_card.axis.axis_bank_indianoil');
    }

    public function axis_bank_lic(){
        return view('credit_card.axis.axis_bank_lic');
    }

    public function axis_bank_magnus(){
        return view('credit_card.axis.axis_bank_magnus');
    }

    public function axis_bank_neo(){
        return view('credit_card.axis.axis_bank_neo');
    }

    public function axis_bank_platinum(){
        return view('credit_card.axis.axis_bank_platinum');
    }

    public function axis_bank_reward(){
        return view('credit_card.axis.axis_bank_reward');
    }

    public function axis_bank_select(){
        return view('credit_card.axis.axis_bank_select');
    }

    public function axis_bank_zone(){
        return view('credit_card.axis.axis_bank_zone');
    }

//------------------------------------------------------@ SBI BANK ------------------------------------------------------------------------

    public function sbi_elite(){
        return view('credit_card.sbi.sbi_elite');
    }

    public function sbi_octane(){
        return view('credit_card.sbi.sbi_octane');
    }

    public function sbi_premier(){
        return view('credit_card.sbi.sbi_premier');
    }

    public function sbi_prime(){
        return view('credit_card.sbi.sbi_prime');
    }

    public function sbi_pulse(){
        return view('credit_card.sbi.sbi_pulse');
    }

    public function sbi_simply(){
        return view('credit_card.sbi.sbi_simply');
    }

    public function sbi_simply_save(){
        return view('credit_card.sbi.sbi_simply_save');
    }

    public function sbi_signature(){
        return view('credit_card.sbi.sbi_signature');
    }

    //SBI_FORM

    public function sbi_elite_form(){
        return view('sbi_elite_form');
    }

    public function form_elite(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formelite = new Elite_Sbi();

            $formelite->customer_name = $request->customer_name;
            $formelite->pan_number  = $request->pan_number;
            $formelite->date_of_birth = $request->date_of_birth;
            $formelite->mother_name = $request->mother_name;
            $formelite->father_name = $request->father_name;
            $formelite->current_address = $request->current_address;
            $formelite->landmark_one = $request->landmark_one;
            $formelite->landmark_two = $request->landmark_two;
            $formelite->pin_code = $request->pin_code;
            $formelite->mobile_number = $request->mobile_number;
            $formelite->personal_email = $request->personal_email;
            $formelite->official_email = $request->official_email;
            $formelite->company_name = $request->company_name;
            $formelite->designation = $request->designation;

            $formelite->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }


    public function sbi_octane_form(){
        return view('sbi_octane_form');
    }

    public function form_octane(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formoctane = new Octane_Sbi();

            $formoctane->customer_name = $request->customer_name;
            $formoctane->pan_number  = $request->pan_number;
            $formoctane->date_of_birth = $request->date_of_birth;
            $formoctane->mother_name = $request->mother_name;
            $formoctane->father_name = $request->father_name;
            $formoctane->current_address = $request->current_address;
            $formoctane->landmark_one = $request->landmark_one;
            $formoctane->landmark_two = $request->landmark_two;
            $formoctane->pin_code = $request->pin_code;
            $formoctane->mobile_number = $request->mobile_number;
            $formoctane->personal_email = $request->personal_email;
            $formoctane->official_email = $request->official_email;
            $formoctane->company_name = $request->company_name;
            $formoctane->designation = $request->designation;

            $formoctane->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }


    public function sbi_premier_form(){
        return view('sbi_premier_form');
    }

    public function form_premier(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formpremier = new Premier_Sbi();

            $formpremier->customer_name = $request->customer_name;
            $formpremier->pan_number  = $request->pan_number;
            $formpremier->date_of_birth = $request->date_of_birth;
            $formpremier->mother_name = $request->mother_name;
            $formpremier->father_name = $request->father_name;
            $formpremier->current_address = $request->current_address;
            $formpremier->landmark_one = $request->landmark_one;
            $formpremier->landmark_two = $request->landmark_two;
            $formpremier->pin_code = $request->pin_code;
            $formpremier->mobile_number = $request->mobile_number;
            $formpremier->personal_email = $request->personal_email;
            $formpremier->official_email = $request->official_email;
            $formpremier->company_name = $request->company_name;
            $formpremier->designation = $request->designation;

            $formpremier->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

    public function sbi_pulse_form(){
        return view('sbi_pulse_form');
    }


    public function form_pulse(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formpulse = new Pulse_Sbi();

            $formpulse->customer_name = $request->customer_name;
            $formpulse->pan_number  = $request->pan_number;
            $formpulse->date_of_birth = $request->date_of_birth;
            $formpulse->mother_name = $request->mother_name;
            $formpulse->father_name = $request->father_name;
            $formpulse->current_address = $request->current_address;
            $formpulse->landmark_one = $request->landmark_one;
            $formpulse->landmark_two = $request->landmark_two;
            $formpulse->pin_code = $request->pin_code;
            $formpulse->mobile_number = $request->mobile_number;
            $formpulse->personal_email = $request->personal_email;
            $formpulse->official_email = $request->official_email;
            $formpulse->company_name = $request->company_name;
            $formpulse->designation = $request->designation;

            $formpulse->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

    public function sbi_signature_form(){
        return view('sbi_signature_form');
    }


    public function form_signature(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formsignature = new Signature_Sbi();

            $formsignature->customer_name = $request->customer_name;
            $formsignature->pan_number  = $request->pan_number;
            $formsignature->date_of_birth = $request->date_of_birth;
            $formsignature->mother_name = $request->mother_name;
            $formsignature->father_name = $request->father_name;
            $formsignature->current_address = $request->current_address;
            $formsignature->landmark_one = $request->landmark_one;
            $formsignature->landmark_two = $request->landmark_two;
            $formsignature->pin_code = $request->pin_code;
            $formsignature->mobile_number = $request->mobile_number;
            $formsignature->personal_email = $request->personal_email;
            $formsignature->official_email = $request->official_email;
            $formsignature->company_name = $request->company_name;
            $formsignature->designation = $request->designation;

            $formsignature->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

    public function sbi_simply_save_form(){
        return view('sbi_simply_save_form');
    }

 
    public function form_save(Request $request)
    {       
        $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
        ]);

            $formsave = new Save_Sbi();

            $formsave->customer_name = $request->customer_name;
            $formsave->pan_number  = $request->pan_number;
            $formsave->date_of_birth = $request->date_of_birth;
            $formsave->mother_name = $request->mother_name;
            $formsave->father_name = $request->father_name;
            $formsave->current_address = $request->current_address;
            $formsave->landmark_one = $request->landmark_one;
            $formsave->landmark_two = $request->landmark_two;
            $formsave->pin_code = $request->pin_code;
            $formsave->mobile_number = $request->mobile_number;
            $formsave->personal_email = $request->personal_email;
            $formsave->official_email = $request->official_email;
            $formsave->company_name = $request->company_name;
            $formsave->designation = $request->designation;

            $forms=$formsave->save();

            if ($forms) {
                return redirect('thankyou');
            } else {
                return back()->with('error', 'Form submission failed. Please try again.');
            }
    }


    public function sbi_form(){
        return view('sbi_form');
    }

    public function form_sbi(Request $request)
    {       
            $request->validate([
           'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formsbi = new Sbi_Form();

            $formsbi->customer_name = $request->customer_name;
            $formsbi->pan_number  = $request->pan_number;
            $formsbi->date_of_birth = $request->date_of_birth;
            $formsbi->mother_name = $request->mother_name;
            $formsbi->father_name = $request->father_name;
            $formsbi->current_address = $request->current_address;
            $formsbi->landmark_one = $request->landmark_one;
            $formsbi->landmark_two = $request->landmark_two;
            $formsbi->pin_code = $request->pin_code;
            $formsbi->mobile_number = $request->mobile_number;
            $formsbi->personal_email = $request->personal_email;
            $formsbi->official_email = $request->official_email;
            $formsbi->company_name = $request->company_name;
            $formsbi->designation = $request->designation;

            $formsbi->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }


//--------------------------------------------------------@ IDFC Bank----------------------------------------------------------------------

    public function idfc_classic(){
        return view('credit_card.idfc.idfc_classic');
    }

    public function idfc_power(){
        return view('credit_card.idfc.idfc_power');
    }

    public function idfc_swyp(){
        return view('credit_card.idfc.idfc_swyp');
    }

    public function idfc_millennia(){
        return view('credit_card.idfc.idfc_millennia');
    }

    public function idfc_select(){
        return view('credit_card.idfc.idfc_select');
    }

    public function idfc_vista(){
        return view('credit_card.idfc.idfc_vista');
    }

    public function idfc_wealth(){
        return view('credit_card.idfc.idfc_wealth');
    }

    public function idfc_wowcard(){
        return view('credit_card.idfc.idfc_wowcard');
    }

//------------------------------------------------------------@ AU BANK -------------------------------------------------------------------

    public function au_bank_altura(){
        return view('credit_card.au.au_bank_altura');
    }

    public function au_bank_alturaplus(){
        return view('credit_card.au.au_bank_alturaplus');
    }

    public function au_bank_lit(){
        return view('credit_card.au.au_bank_lit');
    }

    public function au_bank_vetta(){
        return view('credit_card.au.au_bank_vetta');
    }

    public function au_bank_zenith(){
        return view('credit_card.au.au_bank_zenith');
    }

//------------------------------------------------------@ AMERICAN BANK ------------------------------------------------------------------------

    public function american_express_gold(){
        return view('credit_card.american.american_express_gold');
    }

    public function american_express_payback(){
        return view('credit_card.american.american_express_payback');
    }

    public function american_express_smartearn(){
        return view('credit_card.american.american_express_smartearn');
    }

    //form

    public function american_form(){
        return view('american_form');
    }

    public function form_american(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formamerican = new American_Form();

            $formamerican->customer_name = $request->customer_name;
            $formamerican->pan_number  = $request->pan_number;
            $formamerican->date_of_birth = $request->date_of_birth;
            $formamerican->mother_name = $request->mother_name;
            $formamerican->father_name = $request->father_name;
            $formamerican->current_address = $request->current_address;
            $formamerican->landmark_one = $request->landmark_one;
            $formamerican->landmark_two = $request->landmark_two;
            $formamerican->pin_code = $request->pin_code;
            $formamerican->mobile_number = $request->mobile_number;
            $formamerican->personal_email = $request->personal_email;
            $formamerican->official_email = $request->official_email;
            $formamerican->company_name = $request->company_name;
            $formamerican->designation = $request->designation;

            if ($formamerican->save()) {
                return redirect()->back()->with('success', 'Saved Successfully!');
            } else {
                return redirect()->back()->with('error', 'Failed to save.');
            }
    }


    public function american_gold_form(){
        return view('american_gold_form');
    }

    public function form_gold(Request $request)
    {       
            $request->validate([
           'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formgold = new American_Form();

            $formgold->customer_name = $request->customer_name;
            $formgold->pan_number  = $request->pan_number;
            $formgold->date_of_birth = $request->date_of_birth;
            $formgold->mother_name = $request->mother_name;
            $formgold->father_name = $request->father_name;
            $formgold->current_address = $request->current_address;
            $formgold->landmark_one = $request->landmark_one;
            $formgold->landmark_two = $request->landmark_two;
            $formgold->pin_code = $request->pin_code;
            $formgold->mobile_number = $request->mobile_number;
            $formgold->personal_email = $request->personal_email;
            $formgold->official_email = $request->official_email;
            $formgold->company_name = $request->company_name;
            $formgold->designation = $request->designation;

            if ($formgold->save()) {
                return redirect()->back()->with('success', 'Saved Successfully!');
            } else {
                return redirect()->back()->with('error', 'Failed to save.');
            }
    }


    public function american_payment_form(){
        return view('american_payment_form');
    }

    public function form_payment(Request $request)
    {       
            $request->validate([
           'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formpayment = new American_Form();

            $formpayment->customer_name = $request->customer_name;
            $formpayment->pan_number  = $request->pan_number;
            $formpayment->date_of_birth = $request->date_of_birth;
            $formpayment->mother_name = $request->mother_name;
            $formpayment->father_name = $request->father_name;
            $formpayment->current_address = $request->current_address;
            $formpayment->landmark_one = $request->landmark_one;
            $formpayment->landmark_two = $request->landmark_two;
            $formpayment->pin_code = $request->pin_code;
            $formpayment->mobile_number = $request->mobile_number;
            $formpayment->personal_email = $request->personal_email;
            $formpayment->official_email = $request->official_email;
            $formpayment->company_name = $request->company_name;
            $formpayment->designation = $request->designation;

            if ($formpayment->save()) {
                return redirect()->back()->with('success', 'Saved Successfully!');
            } else {
                return redirect()->back()->with('error', 'Failed to save.');
            }
    }

//------------------------------------------------------@ INDUSIND BANK ------------------------------------------------------------------------ 

    public function indusind_aura(){
        return view('credit_card.indusind.indusind_aura');
    }

    public function indusind_british(){
        return view('credit_card.indusind.indusind_british');
    }

    public function indusind_legend(){
        return view('credit_card.indusind.indusind_legend');
    }

    public function indusind_nexxt(){
        return view('credit_card.indusind.indusind_nexxt');
    }

    public function indusind_pinnacle(){
        return view('credit_card.indusind.indusind_pinnacle');
    }

    public function indusind_platinum(){
        return view('credit_card.indusind.indusind_platinum');
    }

    public function indusind_qatar(){
        return view('credit_card.indusind.indusind_qatar');
    }

    public function indusind_rupay(){
        return view('credit_card.indusind.indusind_rupay');
    }

//------------------------------------------------------@ HSBC  BANK ---------------------------------------------------------------------

    public function hsbc_bank_smart(){
        return view('credit_card.hsbc.hsbc_bank_smart');
    }

    public function hsbc_live_credit(){
        return view('credit_card.hsbc.hsbc_live_credit');
    }

    public function hsbc_premier_credit(){
        return view('credit_card.hsbc.hsbc_premier_credit');
    }

    public function hsbc_visa_platinum(){
        return view('credit_card.hsbc.hsbc_visa_platinum');
    }

//------------------------------------------------------@ YES  BANK ---------------------------------------------------------------------

    public function yes_bank_rewards(){
        return view('credit_card.yes.yes_bank_rewards');
    }

    public function yes_bank_ace(){
        return view('credit_card.yes.yes_bank_ace');
    }

    public function yes_bank_cashback(){
        return view('credit_card.yes.yes_bank_cashback');
    }

    public function yes_bank_first_business(){
        return view('credit_card.yes.yes_bank_first_business');
    }

    public function yes_bank_first(){
        return view('credit_card.yes.yes_bank_first');
    }

    public function yes_bank_marquee(){
        return view('credit_card.yes.yes_bank_marquee');
    }

    public function yes_bank_reserve(){
        return view('credit_card.yes.yes_bank_reserve');
    }

    public function yes_bank_select(){
        return view('credit_card.yes.yes_bank_select');
    }

    public function yes_elite_plus(){
        return view('credit_card.yes.yes_elite_plus');
    }

    //form

    public function yes_form(){
        return view('yes_form');
    }

    public function form_yes(Request $request)
    {       
            $request->validate([
           'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formyes = new Yes_Form();

            $formyes->customer_name = $request->customer_name;
            $formyes->pan_number  = $request->pan_number;
            $formyes->date_of_birth = $request->date_of_birth;
            $formyes->mother_name = $request->mother_name;
            $formyes->father_name = $request->father_name;
            $formyes->current_address = $request->current_address;
            $formyes->landmark_one = $request->landmark_one;
            $formyes->landmark_two = $request->landmark_two;
            $formyes->pin_code = $request->pin_code;
            $formyes->mobile_number = $request->mobile_number;
            $formyes->personal_email = $request->personal_email;
            $formyes->official_email = $request->official_email;
            $formyes->company_name = $request->company_name;
            $formyes->designation = $request->designation;

            $formyes->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

    public function yes_ace_form(){
        return view('yes_ace_form');
    }

    public function form_ace(Request $request)
    {       
            $request->validate([
           'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formace = new Ace_Yes();

            $formace->customer_name = $request->customer_name;
            $formace->pan_number  = $request->pan_number;
            $formace->date_of_birth = $request->date_of_birth;
            $formace->mother_name = $request->mother_name;
            $formace->father_name = $request->father_name;
            $formace->current_address = $request->current_address;
            $formace->landmark_one = $request->landmark_one;
            $formace->landmark_two = $request->landmark_two;
            $formace->pin_code = $request->pin_code;
            $formace->mobile_number = $request->mobile_number;
            $formace->personal_email = $request->personal_email;
            $formace->official_email = $request->official_email;
            $formace->company_name = $request->company_name;
            $formace->designation = $request->designation;

            $formace->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

    public function yes_first_business_form(){
        return view('yes_first_business_form');
    }

    public function form_first_bussiness(Request $request)
    {       
            $request->validate([
          'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formbus = new First_bus_Yes();

            $formbus->customer_name = $request->customer_name;
            $formbus->pan_number  = $request->pan_number;
            $formbus->date_of_birth = $request->date_of_birth;
            $formbus->mother_name = $request->mother_name;
            $formbus->father_name = $request->father_name;
            $formbus->current_address = $request->current_address;
            $formbus->landmark_one = $request->landmark_one;
            $formbus->landmark_two = $request->landmark_two;
            $formbus->pin_code = $request->pin_code;
            $formbus->mobile_number = $request->mobile_number;
            $formbus->personal_email = $request->personal_email;
            $formbus->official_email = $request->official_email;
            $formbus->company_name = $request->company_name;
            $formbus->designation = $request->designation;

            $formbus->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

    public function yes_first_form(){
        return view('yes_first_form');
    }

    public function form_first(Request $request)
    {       
            $request->validate([
           'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formfirst = new First_Yesform();

            $formfirst->customer_name = $request->customer_name;
            $formfirst->pan_number  = $request->pan_number;
            $formfirst->date_of_birth = $request->date_of_birth;
            $formfirst->mother_name = $request->mother_name;
            $formfirst->father_name = $request->father_name;
            $formfirst->current_address = $request->current_address;
            $formfirst->landmark_one = $request->landmark_one;
            $formfirst->landmark_two = $request->landmark_two;
            $formfirst->pin_code = $request->pin_code;
            $formfirst->mobile_number = $request->mobile_number;
            $formfirst->personal_email = $request->personal_email;
            $formfirst->official_email = $request->official_email;
            $formfirst->company_name = $request->company_name;
            $formfirst->designation = $request->designation;

            $formfirst->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

    public function yes_marquee_form(){
        return view('yes_marquee_form');
    }

    public function form_marquee(Request $request)
    {       
            $request->validate([
           'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formmar = new Marquee_yesform();

            $formmar->customer_name = $request->customer_name;
            $formmar->pan_number  = $request->pan_number;
            $formmar->date_of_birth = $request->date_of_birth;
            $formmar->mother_name = $request->mother_name;
            $formmar->father_name = $request->father_name;
            $formmar->current_address = $request->current_address;
            $formmar->landmark_one = $request->landmark_one;
            $formmar->landmark_two = $request->landmark_two;
            $formmar->pin_code = $request->pin_code;
            $formmar->mobile_number = $request->mobile_number;
            $formmar->personal_email = $request->personal_email;
            $formmar->official_email = $request->official_email;
            $formmar->company_name = $request->company_name;
            $formmar->designation = $request->designation;

            $formmar->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

    public function yes_reserve_form(){
        return view('yes_reserve_form');
    }

    public function form_reserve(Request $request)
    {       
            $request->validate([
           'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formreserve = new Reserve_Yesform();

            $formreserve->customer_name = $request->customer_name;
            $formreserve->pan_number  = $request->pan_number;
            $formreserve->date_of_birth = $request->date_of_birth;
            $formreserve->mother_name = $request->mother_name;
            $formreserve->father_name = $request->father_name;
            $formreserve->current_address = $request->current_address;
            $formreserve->landmark_one = $request->landmark_one;
            $formreserve->landmark_two = $request->landmark_two;
            $formreserve->pin_code = $request->pin_code;
            $formreserve->mobile_number = $request->mobile_number;
            $formreserve->personal_email = $request->personal_email;
            $formreserve->official_email = $request->official_email;
            $formreserve->company_name = $request->company_name;
            $formreserve->designation = $request->designation;

            $formreserve->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

    public function yes_reward_form(){
        return view('yes_reward_form');
    }

    public function form_reward(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formreward = new Reward_Yesform();

            $formreward->customer_name = $request->customer_name;
            $formreward->pan_number  = $request->pan_number;
            $formreward->date_of_birth = $request->date_of_birth;
            $formreward->mother_name = $request->mother_name;
            $formreward->father_name = $request->father_name;
            $formreward->current_address = $request->current_address;
            $formreward->landmark_one = $request->landmark_one;
            $formreward->landmark_two = $request->landmark_two;
            $formreward->pin_code = $request->pin_code;
            $formreward->mobile_number = $request->mobile_number;
            $formreward->personal_email = $request->personal_email;
            $formreward->official_email = $request->official_email;
            $formreward->company_name = $request->company_name;
            $formreward->designation = $request->designation;

            $formreward->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

    public function yes_cashback_form(){
        return view('yes_cashback_form');
    }

    public function form_cashback(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formcash = new Cashback_Yesform();

            $formcash->customer_name = $request->customer_name;
            $formcash->pan_number  = $request->pan_number;
            $formcash->date_of_birth = $request->date_of_birth;
            $formcash->mother_name = $request->mother_name;
            $formcash->father_name = $request->father_name;
            $formcash->current_address = $request->current_address;
            $formcash->landmark_one = $request->landmark_one;
            $formcash->landmark_two = $request->landmark_two;
            $formcash->pin_code = $request->pin_code;
            $formcash->mobile_number = $request->mobile_number;
            $formcash->personal_email = $request->personal_email;
            $formcash->official_email = $request->official_email;
            $formcash->company_name = $request->company_name;
            $formcash->designation = $request->designation;

            $formcash->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

    public function yes_select_form(){
        return view('yes_select_form');
    }

    public function form_select(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formselect = new Select_Yesform();

            $formselect->customer_name = $request->customer_name;
            $formselect->pan_number  = $request->pan_number;
            $formselect->date_of_birth = $request->date_of_birth;
            $formselect->mother_name = $request->mother_name;
            $formselect->father_name = $request->father_name;
            $formselect->current_address = $request->current_address;
            $formselect->landmark_one = $request->landmark_one;
            $formselect->landmark_two = $request->landmark_two;
            $formselect->pin_code = $request->pin_code;
            $formselect->mobile_number = $request->mobile_number;
            $formselect->personal_email = $request->personal_email;
            $formselect->official_email = $request->official_email;
            $formselect->company_name = $request->company_name;
            $formselect->designation = $request->designation;

            $formselect->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

//------------------------------------------------------@ KOTAK  BANK ---------------------------------------------------------------------

    public function kotak_6e_reward(){
        return view('credit_card.kotak.kotak_6e_reward');
    }

    public function kotak_6e_xl_reward(){
        return view('credit_card.kotak.kotak_6e_xl_reward');
    }

    public function kotak_811(){
        return view('credit_card.kotak.kotak_811');
    }

    public function kotak_indian_oil(){
        return view('credit_card.kotak.kotak_indian_oil');
    }

    public function kotak_league_platinum(){
        return view('credit_card.kotak.kotak_league_platinum');
    }

    public function kotak_myntra(){
        return view('credit_card.kotak.kotak_myntra');
    }

    public function kotak_royale_signature(){
        return view('credit_card.kotak.kotak_royale_signature');
    }

    public function kotak_urbane_gold(){
        return view('credit_card.kotak.kotak_urbane_gold');
    }

    public function kotak_white_reserve(){
        return view('credit_card.kotak.kotak_white_reserve');
    }

    public function kotak_zen(){
        return view('credit_card.kotak.kotak_zen');
    }

    //form

    public function kotak_6e_reward_form(){
        return view('kotak_6e_reward_form');
    }

    public function form_rewards(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formreward = new Reward_Kotakform();

            $formreward->customer_name = $request->customer_name;
            $formreward->pan_number  = $request->pan_number;
            $formreward->date_of_birth = $request->date_of_birth;
            $formreward->mother_name = $request->mother_name;
            $formreward->father_name = $request->father_name;
            $formreward->current_address = $request->current_address;
            $formreward->landmark_one = $request->landmark_one;
            $formreward->landmark_two = $request->landmark_two;
            $formreward->pin_code = $request->pin_code;
            $formreward->mobile_number = $request->mobile_number;
            $formreward->personal_email = $request->personal_email;
            $formreward->official_email = $request->official_email;
            $formreward->company_name = $request->company_name;
            $formreward->designation = $request->designation;

            $formreward->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

    public function kotak_form(){
        return view('kotak_form');
    }

    public function form_kotak(Request $request)
    {       
            $request->validate([
           'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formkotak = new Kotak_Form();

            $formkotak->customer_name = $request->customer_name;
            $formkotak->pan_number  = $request->pan_number;
            $formkotak->date_of_birth = $request->date_of_birth;
            $formkotak->mother_name = $request->mother_name;
            $formkotak->father_name = $request->father_name;
            $formkotak->current_address = $request->current_address;
            $formkotak->landmark_one = $request->landmark_one;
            $formkotak->landmark_two = $request->landmark_two;
            $formkotak->pin_code = $request->pin_code;
            $formkotak->mobile_number = $request->mobile_number;
            $formkotak->personal_email = $request->personal_email;
            $formkotak->official_email = $request->official_email;
            $formkotak->company_name = $request->company_name;
            $formkotak->designation = $request->designation;

            $formkotak->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

    public function kotak_6e_xl_form(){
        return view('kotak_6e_xl_form');
    }

    public function form_xl(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formxl = new Xl_Kotakform();

            $formxl->customer_name = $request->customer_name;
            $formxl->pan_number  = $request->pan_number;
            $formxl->date_of_birth = $request->date_of_birth;
            $formxl->mother_name = $request->mother_name;
            $formxl->father_name = $request->father_name;
            $formxl->current_address = $request->current_address;
            $formxl->landmark_one = $request->landmark_one;
            $formxl->landmark_two = $request->landmark_two;
            $formxl->pin_code = $request->pin_code;
            $formxl->mobile_number = $request->mobile_number;
            $formxl->personal_email = $request->personal_email;
            $formxl->official_email = $request->official_email;
            $formxl->company_name = $request->company_name;
            $formxl->designation = $request->designation;

            $formxl->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

    public function kotak_811_form(){
        return view('kotak_811_form');
    }

    public function form_number(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formno = new KotakNO_Kotakform();

            $formno->customer_name = $request->customer_name;
            $formno->pan_number  = $request->pan_number;
            $formno->date_of_birth = $request->date_of_birth;
            $formno->mother_name = $request->mother_name;
            $formno->father_name = $request->father_name;
            $formno->current_address = $request->current_address;
            $formno->landmark_one = $request->landmark_one;
            $formno->landmark_two = $request->landmark_two;
            $formno->pin_code = $request->pin_code;
            $formno->mobile_number = $request->mobile_number;
            $formno->personal_email = $request->personal_email;
            $formno->official_email = $request->official_email;
            $formno->company_name = $request->company_name;
            $formno->designation = $request->designation;

            $formno->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

    public function kotak_indian_oil_form(){
        return view('kotak_indian_oil_form');
    }

    public function form_oil(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formoils = new Indianoil_Kotakform();

            $formoils->customer_name = $request->customer_name;
            $formoils->pan_number  = $request->pan_number;
            $formoils->date_of_birth = $request->date_of_birth;
            $formoils->mother_name = $request->mother_name;
            $formoils->father_name = $request->father_name;
            $formoils->current_address = $request->current_address;
            $formoils->landmark_one = $request->landmark_one;
            $formoils->landmark_two = $request->landmark_two;
            $formoils->pin_code = $request->pin_code;
            $formoils->mobile_number = $request->mobile_number;
            $formoils->personal_email = $request->personal_email;
            $formoils->official_email = $request->official_email;
            $formoils->company_name = $request->company_name;
            $formoils->designation = $request->designation;

            $formoils->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

    public function kotak_myntra_form(){
        return view('kotak_myntra_form');
    }

    public function form_myntra(Request $request)
    {       
            $request->validate([
           'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formmyntra = new Myntra_Kotakform();

            $formmyntra->customer_name = $request->customer_name;
            $formmyntra->pan_number  = $request->pan_number;
            $formmyntra->date_of_birth = $request->date_of_birth;
            $formmyntra->mother_name = $request->mother_name;
            $formmyntra->father_name = $request->father_name;
            $formmyntra->current_address = $request->current_address;
            $formmyntra->landmark_one = $request->landmark_one;
            $formmyntra->landmark_two = $request->landmark_two;
            $formmyntra->pin_code = $request->pin_code;
            $formmyntra->mobile_number = $request->mobile_number;
            $formmyntra->personal_email = $request->personal_email;
            $formmyntra->official_email = $request->official_email;
            $formmyntra->company_name = $request->company_name;
            $formmyntra->designation = $request->designation;

            $formmyntra->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

    public function kotak_royal_signature_form(){
        return view('kotak_royal_signature_form');
    }

    public function form_royal(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formroyal = new Royal_Kotakform();

            $formroyal->customer_name = $request->customer_name;
            $formroyal->pan_number  = $request->pan_number;
            $formroyal->date_of_birth = $request->date_of_birth;
            $formroyal->mother_name = $request->mother_name;
            $formroyal->father_name = $request->father_name;
            $formroyal->current_address = $request->current_address;
            $formroyal->landmark_one = $request->landmark_one;
            $formroyal->landmark_two = $request->landmark_two;
            $formroyal->pin_code = $request->pin_code;
            $formroyal->mobile_number = $request->mobile_number;
            $formroyal->personal_email = $request->personal_email;
            $formroyal->official_email = $request->official_email;
            $formroyal->company_name = $request->company_name;
            $formroyal->designation = $request->designation;

            $formroyal->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

    public function kotak_urbane_gold_form(){
        return view('kotak_urbane_gold_form');
    }

    public function form_golds(Request $request)
    {       
            $request->validate([
           'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formgold = new Gold_Kotakform();

            $formgold->customer_name = $request->customer_name;
            $formgold->pan_number  = $request->pan_number;
            $formgold->date_of_birth = $request->date_of_birth;
            $formgold->mother_name = $request->mother_name;
            $formgold->father_name = $request->father_name;
            $formgold->current_address = $request->current_address;
            $formgold->landmark_one = $request->landmark_one;
            $formgold->landmark_two = $request->landmark_two;
            $formgold->pin_code = $request->pin_code;
            $formgold->mobile_number = $request->mobile_number;
            $formgold->personal_email = $request->personal_email;
            $formgold->official_email = $request->official_email;
            $formgold->company_name = $request->company_name;
            $formgold->designation = $request->designation;

            $formgold->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

    public function kotak_white_reserve_form(){
        return view('kotak_white_reserve_form');
    }

    public function form_white(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formwhite = new White_Kotakform();

            $formwhite->customer_name = $request->customer_name;
            $formwhite->pan_number  = $request->pan_number;
            $formwhite->date_of_birth = $request->date_of_birth;
            $formwhite->mother_name = $request->mother_name;
            $formwhite->father_name = $request->father_name;
            $formwhite->current_address = $request->current_address;
            $formwhite->landmark_one = $request->landmark_one;
            $formwhite->landmark_two = $request->landmark_two;
            $formwhite->pin_code = $request->pin_code;
            $formwhite->mobile_number = $request->mobile_number;
            $formwhite->personal_email = $request->personal_email;
            $formwhite->official_email = $request->official_email;
            $formwhite->company_name = $request->company_name;
            $formwhite->designation = $request->designation;

            $formwhite->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

    public function kotak_zen_form(){
        return view('kotak_zen_form');
    }

    public function form_zen(Request $request)
    {       
            $request->validate([
           'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formzen = new Zen_Kotakform();

            $formzen->customer_name = $request->customer_name;
            $formzen->pan_number  = $request->pan_number;
            $formzen->date_of_birth = $request->date_of_birth;
            $formzen->mother_name = $request->mother_name;
            $formzen->father_name = $request->father_name;
            $formzen->current_address = $request->current_address;
            $formzen->landmark_one = $request->landmark_one;
            $formzen->landmark_two = $request->landmark_two;
            $formzen->pin_code = $request->pin_code;
            $formzen->mobile_number = $request->mobile_number;
            $formzen->personal_email = $request->personal_email;
            $formzen->official_email = $request->official_email;
            $formzen->company_name = $request->company_name;
            $formzen->designation = $request->designation;

            $formzen->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }
//------------------------------------------------------@ ICICI  BANK ---------------------------------------------------------------------

    public function icici_coral(){
        return view('credit_card.icici.icici_coral');
    }

    public function icici_emeralde_private(){
        return view('credit_card.icici.icici_emeralde_private');
    }

    public function icici_emeralde(){
        return view('credit_card.icici.icici_emeralde');
    }

    public function icici_manchester_signature(){
        return view('credit_card.icici.icici_manchester_signature');
    }

    public function icici_manchester_united(){
        return view('credit_card.icici.icici_manchester_united');
    }

    public function icici_platinum(){
        return view('credit_card.icici.icici_platinum');
    }

    public function icici_rubyx(){
        return view('credit_card.icici.icici_rubyx');
    }

    public function icici_sapphiro(){
        return view('credit_card.icici.icici_sapphiro');
    }
    
    //form

    public function icici_form(){
        return view('icici_form');
    }

    public function form_icici(Request $request)
    {       
            $request->validate([
           'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formicici = new Icici_Form();

            $formicici->customer_name = $request->customer_name;
            $formicici->pan_number  = $request->pan_number;
            $formicici->date_of_birth = $request->date_of_birth;
            $formicici->mother_name = $request->mother_name;
            $formicici->father_name = $request->father_name;
            $formicici->current_address = $request->current_address;
            $formicici->landmark_one = $request->landmark_one;
            $formicici->landmark_two = $request->landmark_two;
            $formicici->pin_code = $request->pin_code;
            $formicici->mobile_number = $request->mobile_number;
            $formicici->personal_email = $request->personal_email;
            $formicici->official_email = $request->official_email;
            $formicici->company_name = $request->company_name;
            $formicici->designation = $request->designation;

            $formicici->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

    public function icici_coral_form(){
        return view('icici_coral_form');
    }

    public function form_coral(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formcoral = new Coral_ICICIform();

            $formcoral->customer_name = $request->customer_name;
            $formcoral->pan_number  = $request->pan_number;
            $formcoral->date_of_birth = $request->date_of_birth;
            $formcoral->mother_name = $request->mother_name;
            $formcoral->father_name = $request->father_name;
            $formcoral->current_address = $request->current_address;
            $formcoral->landmark_one = $request->landmark_one;
            $formcoral->landmark_two = $request->landmark_two;
            $formcoral->pin_code = $request->pin_code;
            $formcoral->mobile_number = $request->mobile_number;
            $formcoral->personal_email = $request->personal_email;
            $formcoral->official_email = $request->official_email;
            $formcoral->company_name = $request->company_name;
            $formcoral->designation = $request->designation;

            $reg = $formcoral->save();
            if ($reg) {
                // Redirect to thank you page if successful
                return redirect('/thankyou');
            } else {
                // Redirect back with error message
                return redirect()->back()->with('error', 'Form submission failed, please try again.');
            }
    }

    public function icici_emeralde_form(){
        return view('icici_emeralde_form');
    }

    public function form_emeralde(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formem = new Emeralde_ICICIform();

            $formem->customer_name = $request->customer_name;
            $formem->pan_number  = $request->pan_number;
            $formem->date_of_birth = $request->date_of_birth;
            $formem->mother_name = $request->mother_name;
            $formem->father_name = $request->father_name;
            $formem->current_address = $request->current_address;
            $formem->landmark_one = $request->landmark_one;
            $formem->landmark_two = $request->landmark_two;
            $formem->pin_code = $request->pin_code;
            $formem->mobile_number = $request->mobile_number;
            $formem->personal_email = $request->personal_email;
            $formem->official_email = $request->official_email;
            $formem->company_name = $request->company_name;
            $formem->designation = $request->designation;

            $formem->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

    public function icici_manchester_signature_form(){
        return view('icici_manchester_signature_form');
    }

    public function form_sign(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formsign = new Sign_ICICIform();

            $formsign->customer_name = $request->customer_name;
            $formsign->pan_number  = $request->pan_number;
            $formsign->date_of_birth = $request->date_of_birth;
            $formsign->mother_name = $request->mother_name;
            $formsign->father_name = $request->father_name;
            $formsign->current_address = $request->current_address;
            $formsign->landmark_one = $request->landmark_one;
            $formsign->landmark_two = $request->landmark_two;
            $formsign->pin_code = $request->pin_code;
            $formsign->mobile_number = $request->mobile_number;
            $formsign->personal_email = $request->personal_email;
            $formsign->official_email = $request->official_email;
            $formsign->company_name = $request->company_name;
            $formsign->designation = $request->designation;

            $formsign->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

    public function icici_manchester_united_form(){
        return view('icici_manchester_united_form');
    }

    public function form_united(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formunited = new United_ICICIform();

            $formunited->customer_name = $request->customer_name;
            $formunited->pan_number  = $request->pan_number;
            $formunited->date_of_birth = $request->date_of_birth;
            $formunited->mother_name = $request->mother_name;
            $formunited->father_name = $request->father_name;
            $formunited->current_address = $request->current_address;
            $formunited->landmark_one = $request->landmark_one;
            $formunited->landmark_two = $request->landmark_two;
            $formunited->pin_code = $request->pin_code;
            $formunited->mobile_number = $request->mobile_number;
            $formunited->personal_email = $request->personal_email;
            $formunited->official_email = $request->official_email;
            $formunited->company_name = $request->company_name;
            $formunited->designation = $request->designation;

            $formunited->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

    public function icici_platinum_form(){
        return view('icici_platinum_form');
    }

    public function form_platinum(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formplate = new Platinum_ICICIform();

            $formplate->customer_name = $request->customer_name;
            $formplate->pan_number  = $request->pan_number;
            $formplate->date_of_birth = $request->date_of_birth;
            $formplate->mother_name = $request->mother_name;
            $formplate->father_name = $request->father_name;
            $formplate->current_address = $request->current_address;
            $formplate->landmark_one = $request->landmark_one;
            $formplate->landmark_two = $request->landmark_two;
            $formplate->pin_code = $request->pin_code;
            $formplate->mobile_number = $request->mobile_number;
            $formplate->personal_email = $request->personal_email;
            $formplate->official_email = $request->official_email;
            $formplate->company_name = $request->company_name;
            $formplate->designation = $request->designation;

            $formplate->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

    public function icici_rubyx_form(){
        return view('icici_rubyx_form');
    }

    public function form_rubyx(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formrubyx = new Rubyx_ICICIform();

            $formrubyx->customer_name = $request->customer_name;
            $formrubyx->pan_number  = $request->pan_number;
            $formrubyx->date_of_birth = $request->date_of_birth;
            $formrubyx->mother_name = $request->mother_name;
            $formrubyx->father_name = $request->father_name;
            $formrubyx->current_address = $request->current_address;
            $formrubyx->landmark_one = $request->landmark_one;
            $formrubyx->landmark_two = $request->landmark_two;
            $formrubyx->pin_code = $request->pin_code;
            $formrubyx->mobile_number = $request->mobile_number;
            $formrubyx->personal_email = $request->personal_email;
            $formrubyx->official_email = $request->official_email;
            $formrubyx->company_name = $request->company_name;
            $formrubyx->designation = $request->designation;

            $formrubyx->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

    public function icici_sapphiro_form(){
        return view('icici_sapphiro_form');
    }

    public function form_sapphiro(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formsap = new Sapphiro_ICICIform();

            $formsap->customer_name = $request->customer_name;
            $formsap->pan_number  = $request->pan_number;
            $formsap->date_of_birth = $request->date_of_birth;
            $formsap->mother_name = $request->mother_name;
            $formsap->father_name = $request->father_name;
            $formsap->current_address = $request->current_address;
            $formsap->landmark_one = $request->landmark_one;
            $formsap->landmark_two = $request->landmark_two;
            $formsap->pin_code = $request->pin_code;
            $formsap->mobile_number = $request->mobile_number;
            $formsap->personal_email = $request->personal_email;
            $formsap->official_email = $request->official_email;
            $formsap->company_name = $request->company_name;
            $formsap->designation = $request->designation;

            $formsap->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

//------------------------------------------------------@ STANDARD  BANK -------------------------------------

    public function standard_digismart(){
        return view('credit_card.standard.standard_digismart');
    }

    public function standard_manhattan(){
        return view('credit_card.standard.standard_manhattan');
    }

    public function standard_platinum(){
        return view('credit_card.standard.standard_platinum');
    }

    public function standard_priority(){
        return view('credit_card.standard.standard_priority');
    }

    public function standard_tittanium(){
        return view('credit_card.standard.standard_tittanium');
    }

    public function standard_ultimate(){
        return view('credit_card.standard.standard_ultimate');
    }
    
    //form

    public function standard_digi_form(){
        return view('standard_digi_form');
    }

    public function form_digi(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formdigi = new Stand_dig_Form();

            $formdigi->customer_name = $request->customer_name;
            $formdigi->pan_number  = $request->pan_number;
            $formdigi->date_of_birth = $request->date_of_birth;
            $formdigi->mother_name = $request->mother_name;
            $formdigi->father_name = $request->father_name;
            $formdigi->current_address = $request->current_address;
            $formdigi->landmark_one = $request->landmark_one;
            $formdigi->landmark_two = $request->landmark_two;
            $formdigi->pin_code = $request->pin_code;
            $formdigi->mobile_number = $request->mobile_number;
            $formdigi->personal_email = $request->personal_email;
            $formdigi->official_email = $request->official_email;
            $formdigi->company_name = $request->company_name;
            $formdigi->designation = $request->designation;

            $formdigi->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }


    public function standard_man_form(){
        return view('standard_man_form');
    }

    public function form_man(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formman = new Man_Form();

            $formman->customer_name = $request->customer_name;
            $formman->pan_number  = $request->pan_number;
            $formman->date_of_birth = $request->date_of_birth;
            $formman->mother_name = $request->mother_name;
            $formman->father_name = $request->father_name;
            $formman->current_address = $request->current_address;
            $formman->landmark_one = $request->landmark_one;
            $formman->landmark_two = $request->landmark_two;
            $formman->pin_code = $request->pin_code;
            $formman->mobile_number = $request->mobile_number;
            $formman->personal_email = $request->personal_email;
            $formman->official_email = $request->official_email;
            $formman->company_name = $request->company_name;
            $formman->designation = $request->designation;

            if ($formman->save()) {
                return redirect()->back()->with('message', 'Saved Successfully');
            } else {
                return redirect('/');
        }
    }

    public function standard_platimun_form(){
        return view('standard_platimun_form');
    }

    public function form_plat(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formplatinum = new Platinum_Form();

            $formplatinum->customer_name = $request->customer_name;
            $formplatinum->pan_number  = $request->pan_number;
            $formplatinum->date_of_birth = $request->date_of_birth;
            $formplatinum->mother_name = $request->mother_name;
            $formplatinum->father_name = $request->father_name;
            $formplatinum->current_address = $request->current_address;
            $formplatinum->landmark_one = $request->landmark_one;
            $formplatinum->landmark_two = $request->landmark_two;
            $formplatinum->pin_code = $request->pin_code;
            $formplatinum->mobile_number = $request->mobile_number;
            $formplatinum->personal_email = $request->personal_email;
            $formplatinum->official_email = $request->official_email;
            $formplatinum->company_name = $request->company_name;
            $formplatinum->designation = $request->designation;

            $formplatinum->save();
            
            return redirect()->back()->with('success', 'Saved Successfully!');
    }

    public function standard_priority_form(){
        return view('standard_priority_form');
    }

    public function form_pri(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formpri = new Pri_Form();

            $formpri->customer_name = $request->customer_name;
            $formpri->pan_number  = $request->pan_number;
            $formpri->date_of_birth = $request->date_of_birth;
            $formpri->mother_name = $request->mother_name;
            $formpri->father_name = $request->father_name;
            $formpri->current_address = $request->current_address;
            $formpri->landmark_one = $request->landmark_one;
            $formpri->landmark_two = $request->landmark_two;
            $formpri->pin_code = $request->pin_code;
            $formpri->mobile_number = $request->mobile_number;
            $formpri->personal_email = $request->personal_email;
            $formpri->official_email = $request->official_email;
            $formpri->company_name = $request->company_name;
            $formpri->designation = $request->designation;

            $formpri->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }


    public function standard_titta_form(){
        return view('standard_titta_form');
    }

    public function form_titta(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formtitta = new Titta_Form();

            $formtitta->customer_name = $request->customer_name;
            $formtitta->pan_number  = $request->pan_number;
            $formtitta->date_of_birth = $request->date_of_birth;
            $formtitta->mother_name = $request->mother_name;
            $formtitta->father_name = $request->father_name;
            $formtitta->current_address = $request->current_address;
            $formtitta->landmark_one = $request->landmark_one;
            $formtitta->landmark_two = $request->landmark_two;
            $formtitta->pin_code = $request->pin_code;
            $formtitta->mobile_number = $request->mobile_number;
            $formtitta->personal_email = $request->personal_email;
            $formtitta->official_email = $request->official_email;
            $formtitta->company_name = $request->company_name;
            $formtitta->designation = $request->designation;

            $formtitta->save();

            return redirect()->route('thankyou');
    }

    public function standard_form(){
        return view('standard_form');
    }

    public function form_standard(Request $request)
    {       
            $request->validate([
            'customer_name' => 'required|string|max:100',
            'pan_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
            'date_of_birth' => 'required|date',
            'mother_name' => 'required|string|max:100',
            'father_name' => 'required|string|max:100',
            'current_address' => 'required|string|max:255',
            'landmark_one' => 'required|string|max:100',
            'landmark_two' => 'required|string|max:100',
            'pin_code' => 'required|string|size:6',
            'mobile_number' => 'required|digits_between:10,15',
            'personal_email' => 'required|email',
            'official_email' => 'required|email',
            'company_name' => 'required|string|max:100',
            'designation' => 'required|string|max:50',
            ]);

            $formstandard = new Standard_Form();

            $formstandard->customer_name = $request->customer_name;
            $formstandard->pan_number  = $request->pan_number;
            $formstandard->date_of_birth = $request->date_of_birth;
            $formstandard->mother_name = $request->mother_name;
            $formstandard->father_name = $request->father_name;
            $formstandard->current_address = $request->current_address;
            $formstandard->landmark_one = $request->landmark_one;
            $formstandard->landmark_two = $request->landmark_two;
            $formstandard->pin_code = $request->pin_code;
            $formstandard->mobile_number = $request->mobile_number;
            $formstandard->personal_email = $request->personal_email;
            $formstandard->official_email = $request->official_email;
            $formstandard->company_name = $request->company_name;
            $formstandard->designation = $request->designation;

            $formstandard->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
    }

//============================================@LOAN====================================================================

//--------------------------------------------@PERSONAL_LOAN-BANK----------------------------------------

public function au_personal_loan(){
    return view('loan.personal_loan.personal_loan_bank.au_personal_loan');
}

public function axis_personal_loan(){
    return view('loan.personal_loan.personal_loan_bank.axis_personal_loan');
}

public function hdfc_form_loan(){
    return view('loan.personal_loan.personal_loan_bank.hdfc_form_loan');
}

public function hsbc_personal_loan(){
    return view('loan.personal_loan.personal_loan_bank.hsbc_personal_loan');
}

public function icici_personal_loan(){
    return view('loan.personal_loan.personal_loan_bank.icici_personal_loan');
}

public function idfc_personal_loan(){
    return view('loan.personal_loan.personal_loan_bank.idfc_personal_loan');
}

public function indusind_personal_loan(){
    return view('loan.personal_loan.personal_loan_bank.indusind_personal_loan');
}

public function kotak_personal_loan(){
    return view('loan.personal_loan.personal_loan_bank.kotak_personal_loan');
}

public function sbi_personal_loan(){
    return view('loan.personal_loan.personal_loan_bank.sbi_personal_loan');
}

public function yes_personal_loan(){
    return view('loan.personal_loan.personal_loan_bank.yes_personal_loan');
}

//--------------------------------------------@BUSINESS_LOAN-BANK----------------------------------------------------------

    public function au_business_loan(){
        return view('loan.business_loan.business_loan_bank.au_business_loan');
    }

    public function axis_business_loan(){
        return view('loan.business_loan.business_loan_bank.axis_business_loan');
    }

    public function bajaj_business_loan(){
        return view('loan.business_loan.business_loan_bank.bajaj_business_loan');
    }

    public function hdfc_business_loan(){
        return view('loan.business_loan.business_loan_bank.hdfc_business_loan');
    }

    public function hsbc_business_loan(){
        return view('loan.business_loan.business_loan_bank.hsbc_business_loan');
    }

    public function icici_business_loan(){
        return view('loan.business_loan.business_loan_bank.icici_business_loan');
    }

    public function idfc_business_loan(){
        return view('loan.business_loan.business_loan_bank.idfc_business_loan');
    }

    public function indusind_business_loan(){
        return view('loan.business_loan.business_loan_bank.indusind_business_loan');
    }

    public function sbi_bank_business_loan(){
        return view('loan.business_loan.business_loan_bank.sbi_bank_business_loan');
    }

    public function yes_business_loan(){
        return view('loan.business_loan.business_loan_bank.yes_business_loan');
    }

//--------------------------------------------@HOME_LOAN-BANK----------------------------------------------------------

    public function hdfc_bank_home_loan(){
        return view('loan.home_loan.home_loan_bank.hdfc_bank_home_loan');
    }

    public function icici_bank_home_loan(){
        return view('loan.home_loan.home_loan_bank.icici_bank_home_loan');
    }

    public function kotak_bank_home_loan(){
        return view('loan.home_loan.home_loan_bank.kotak_bank_home_loan');
    }  

    public function sbi_bank_home_loan(){
        return view('loan.home_loan.home_loan_bank.sbi_bank_home_loan');
    }

//----------------------------------------@PERSONAL_LOAN & BUSINESS_LOAN & HOME_LOAN-NBFC----------------------------------------------------------------

    public function form_loan(){
        return view('loan.home_loan.home_loan_nbfc.form_loan');
    }

//--------------------------------------------@LOAN_AGAINST_PROPERTY--------------------------------------------------

    public function loan_against_property(){
        return view('loan.loan_against_property');
    }

//--------------------------------------------@GOLD-----------------------------------------------------------

    public function gold_loan(){
        return view('loan.gold_loan');
    }

//============================================@insurance===================================================================

//-------------------------------------------@HEALTH_INSURANCE--------------------------------------------------------------------

    public function health_aditya_birla(){
        return view('insurance.health_insurance.health_aditya_birla');
    }

    public function health_core_health(){
        return view('insurance.health_insurance.health_core_health');
    }

    public function health_ergo(){
        return view('insurance.health_insurance.health_ergo');
    }

    public function health_future_insurance(){
        return view('insurance.health_insurance.health_future_insurance');
    }

    public function health_reliance(){
        return view('insurance.health_insurance.health_reliance');
    }

    public function health_go_digit(){
        return view('insurance.health_insurance.health_go_digit');
    }

    public function health_icici_lombard(){
        return view('insurance.health_insurance.health_icici_lombard');
    }

    public function health_sbi_general(){
        return view('insurance.health_insurance.health_sbi_general');
    }

    public function health_max_bupa(){
        return view('insurance.health_insurance.health_max_bupa');
    }

    public function health_tata_insurance(){
        return view('insurance.health_insurance.health_tata_insurance');
    }

//---------------------------------------------@LIFE_INSURANCE---------------------------------------------------------

    public function life_bajaj_insurance(){
        return view('insurance.life_insurance.life_bajaj_insurance');
    }

    public function life_bharti_insurance(){
        return view('insurance.life_insurance.life_bharti_insurance');
    }

    public function life_hdfc_insurance(){
        return view('insurance.life_insurance.life_hdfc_insurance');
    }

    public function life_icici_insurance(){
        return view('insurance.life_insurance.life_icici_insurance');
    }

    public function life_kotak_insurance(){
        return view('insurance.life_insurance.life_kotak_insurance');
    }

    public function life_max_insurance(){
        return view('insurance.life_insurance.life_max_insurance');
    }

    public function life_sbi_insurance(){
        return view('insurance.life_insurance.life_sbi_insurance');
    }

//-------------------------------------------@GENERAL_INSURANCE-----------------------------------------------------------------

    public function general_bike_insurance(){
        return view('insurance.general_insurance.general_bike_insurance');
    }

    public function general_car_insurance(){
        return view('insurance.general_insurance.general_car_insurance');
    }

    public function general_motor_insurance(){
        return view('insurance.general_insurance.general_motor_insurance');
    }

    public function general_travel_insurance(){
        return view('insurance.general_insurance.general_travel_insurance');
    }

//================================================@INSTANT_LOAN====================================================================

    public function hdfc_xpress_loan(){
        return view('instant_loan.hdfc_xpress_loan');
    }

    public function insta_loan(){
        return view('instant_loan.insta_loan');
    }

    public function jumbo_loan(){
        return view('instant_loan.jumbo_loan');
    }

    public function smart_emi(){
        return view('instant_loan.smart_emi');
    }

//================================================@BLOG===========================================================================

    public function blog(){
        $feed= new blog();
        $products['products']= $feed->orderBy('created_at', 'desc')->get();
        return view('blog',$products);
    }

    public function individual_blog($id)
    {
        $product = blog::findOrFail($id);
        return view('individual_blog', compact('product'));
    }

//================================================@CONTACT=========================================================================== 

    public function contact(){
        return view('contact');
    }

    public function contacts(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ], [
            'name.required' => 'Please enter your full name.',
            'email.required' => 'Please provide a valid email address.',
            'phone.required' => 'Phone number is required.',
            'message.required' => 'Message cannot be empty.',
        ]);

        // Save data to database
        Contact_Form::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
 
        // Redirect with success message
        return  redirect('/thankyou');
    }

//================================================@CONTACT=========================================================================== 

    public function thankyou(){
        return view ('thankyou');
    }

//================================================@CONTACT=========================================================================== 

    public function about(){
        return view ('about');
    }

//================================================@CONTACT=========================================================================== 

    public function faq(){
        return view ('faq');
    }

//================================================@CONTACT=========================================================================== 

    public function services(){
        return view ('services');
    }

//-------------------------------------@LogIn------------------------------------------------------------------------------------------

    public function login(){
        return view('login');
    }


    public function logedin(Request $data)
    {
        // Retrieve the user based on the provided email
        $user = Login_REG::where('email', $data->input('email'))->first();
    
        // Check if the user exists
        if ($user) {
            // Verify the password using Hash::check()
            if (Hash::check($data->input('password'), $user->password)) {
                // Store user details in the session
                session()->put('id', $user->id);
                session()->put('type', $user->type);
    
                // Redirect based on user type
                if ($user->type === 'customer') {
                    return redirect('/');
                } elseif ($user->type === 'admin') {
                    return redirect('/admin_body');
                } else {
                    return redirect('/'); // Default fallback for unknown types
                }
            } else {
                // Password does not match
                return redirect('login')->with('error', 'Password is incorrect.');
            }
        } else {
            // User not found
            return redirect('login')->with('error', 'Email not found.');
        }
    }

    //logout

    public function logout()
    {
        // Clear all session data
        session()->flush();

        // Redirect to the login page with a message (optional)
        return redirect('login')->with('success', 'You have been logged out successfully.');
    }
} 
