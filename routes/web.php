<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;

Route::get('/',[MainController::class,'index'])->name('index');

//=======================================================@CREDIT_CARD=========================================

// ------------------------------------------------------@ HDFC Bank----------------------------------------------------------------------

Route::get('/hdfc_freedom',[MainController::class,'hdfc_freedom'])->name('hdfc_freedom');

Route::get('/hdfc_indianoil',[MainController::class,'hdfc_indianoil'])->name('hdfc_indianoil');

Route::get('/hdfc_money_back_credit',[MainController::class,'hdfc_money_back_credit'])->name('hdfc_money_back_credit');

Route::get('/hdfc_regalia',[MainController::class,'hdfc_regalia'])->name('hdfc_regalia');

Route::get('/hdfc_upi_rupay',[MainController::class,'hdfc_upi_rupay'])->name('hdfc_upi_rupay');

Route::get('/hdfc_infinia',[MainController::class,'hdfc_infinia'])->name('hdfc_infinia');

Route::get('/hdfc_millennia',[MainController::class,'hdfc_millennia'])->name('hdfc_millennia');

Route::get('/hdfc_moneyback',[MainController::class,'hdfc_moneyback'])->name('hdfc_moneyback');

Route::get('/hdfc_bizfirst',[MainController::class,'hdfc_bizfirst'])->name('hdfc_bizfirst');

Route::get('/hdfc_giga',[MainController::class,'hdfc_giga'])->name('hdfc_giga');

Route::get('/hdfc_big_grow',[MainController::class,'hdfc_big_grow'])->name('hdfc_big_grow');

Route::get('/hdfc_6e_reward',[MainController::class,'hdfc_6e_reward'])->name('hdfc_6e_reward');

Route::get('/hdfc_6e_xl_reward',[MainController::class,'hdfc_6e_xl_reward'])->name('hdfc_6e_xl_reward');

Route::get('/hdfc_diner',[MainController::class,'hdfc_diner'])->name('hdfc_diner');

Route::get('/hdfc_swiggy',[MainController::class,'hdfc_swiggy'])->name('hdfc_swiggy');

Route::get('/hdfc_tata_neu',[MainController::class,'hdfc_tata_neu'])->name('hdfc_tata_neu');

Route::get('/hdfc_tata_neu_infinity',[MainController::class,'hdfc_tata_neu_infinity'])->name('hdfc_tata_neu_infinity');

Route::get('/hdfc_marrat_borway',[MainController::class,'hdfc_marrat_borway'])->name('hdfc_marrat_borway');

Route::get('/hdfc_shoppers',[MainController::class,'hdfc_shoppers'])->name('hdfc_shoppers');

Route::get('/hdfc_flipkart_wholeshale',[MainController::class,'hdfc_flipkart_wholeshale'])->name('hdfc_flipkart_wholeshale');

// ------------------------------------------------------@ AXIS Bank----------------------------------------------------------------------

Route::get('/axis_bank_ace',[MainController::class,'axis_bank_ace'])->name('axis_bank_ace');

Route::get('/axis_bank_aritel',[MainController::class,'axis_bank_aritel'])->name('axis_bank_aritel');

Route::get('/axis_bank_flipkart',[MainController::class,'axis_bank_flipkart'])->name('axis_bank_flipkart');

Route::get('/axis_bank_indianoil',[MainController::class,'axis_bank_indianoil'])->name('axis_bank_indianoil');

Route::get('/axis_bank_lic',[MainController::class,'axis_bank_lic'])->name('axis_bank_lic');

Route::get('/axis_bank_magnus',[MainController::class,'axis_bank_magnus'])->name('axis_bank_magnus');

Route::get('/axis_bank_neo',[MainController::class,'axis_bank_neo'])->name('axis_bank_neo');

Route::get('/axis_bank_platinum',[MainController::class,'axis_bank_platinum'])->name('axis_bank_platinum');

Route::get('/axis_bank_reward',[MainController::class,'axis_bank_reward'])->name('axis_bank_reward');

Route::get('/axis_bank_select',[MainController::class,'axis_bank_select'])->name('axis_bank_select');

Route::get('/axis_bank_zone',[MainController::class,'axis_bank_zone'])->name('axis_bank_zone');

// ------------------------------------------------------@ SIB Bank----------------------------------------------------------------------

Route::get('/sbi_elite',[MainController::class,'sbi_elite'])->name('sbi_elite');

Route::get('/sbi_octane',[MainController::class,'sbi_octane'])->name('sbi_octane');

Route::get('/sbi_premier',[MainController::class,'sbi_premier'])->name('sbi_premier');

Route::get('/sbi_prime',[MainController::class,'sbi_prime'])->name('sbi_prime');

Route::get('/sbi_pulse',[MainController::class,'sbi_pulse'])->name('sbi_pulse');

Route::get('/sbi_signature',[MainController::class,'sbi_signature'])->name('sbi_signature');

Route::get('/sbi_simply_save',[MainController::class,'sbi_simply_save'])->name('sbi_simply_save');

Route::get('/sbi_simply',[MainController::class,'sbi_simply'])->name('sbi_simply');

//SBI_FORM

Route::get('/sbi_elite_form',[MainController::class,'sbi_elite_form'])->name('sbi_elite_form');

Route::post('/form_elite',[MainController::class,'form_elite'])->name('form_elite');

Route::get('/sbi_octane_form',[MainController::class,'sbi_octane_form'])->name('sbi_octane_form');

Route::post('/form_octane',[MainController::class,'form_octane'])->name('form_octane');

Route::get('/sbi_premier_form',[MainController::class,'sbi_premier_form'])->name('sbi_premier_form');

Route::post('/form_premier',[MainController::class,'form_premier'])->name('form_premier');

Route::get('/sbi_pulse_form',[MainController::class,'sbi_pulse_form'])->name('sbi_pulse_form');

Route::post('/form_pulse',[MainController::class,'form_pulse'])->name('form_pulse');

Route::get('/sbi_signature_form',[MainController::class,'sbi_signature_form'])->name('sbi_signature_form');

Route::post('/form_signature',[MainController::class,'form_signature'])->name('form_signature');

Route::get('/sbi_simply_save_form',[MainController::class,'sbi_simply_save_form'])->name('sbi_simply_save_form');

Route::post('/form_save',[MainController::class,'form_save'])->name('form_save');

Route::get('/sbi_form',[MainController::class,'sbi_form'])->name('sbi_form');

Route::post('/form_sbi',[MainController::class,'form_sbi'])->name('form_sbi');

// ------------------------------------------------------@ IDFC Bank----------------------------------------------------------------------

Route::get('/idfc_classic',[MainController::class,'idfc_classic'])->name('idfc_classic');

Route::get('/idfc_power',[MainController::class,'idfc_power'])->name('idfc_power');

Route::get('/idfc_swyp',[MainController::class,'idfc_swyp'])->name('idfc_swyp');

Route::get('/idfc_millennia',[MainController::class,'idfc_millennia'])->name('idfc_millennia');

Route::get('/idfc_select',[MainController::class,'idfc_select'])->name('idfc_select');

Route::get('/idfc_vista',[MainController::class,'idfc_vista'])->name('idfc_vista');

Route::get('/idfc_wealth',[MainController::class,'idfc_wealth'])->name('idfc_wealth');

Route::get('/idfc_wowcard',[MainController::class,'idfc_wowcard'])->name('idfc_wowcard');

// ------------------------------------------------------@ AU Bank----------------------------------------------------------------------

Route::get('/au_bank_altura',[MainController::class,'au_bank_altura'])->name('au_bank_altura');

Route::get('/au_bank_alturaplus',[MainController::class,'au_bank_alturaplus'])->name('au_bank_alturaplus');

Route::get('/au_bank_lit',[MainController::class,'au_bank_lit'])->name('au_bank_lit');

Route::get('/au_bank_vetta',[MainController::class,'au_bank_vetta'])->name('au_bank_vetta');

Route::get('/au_bank_zenith',[MainController::class,'au_bank_zenith'])->name('au_bank_zenith');

//------------------------------------------------------@ AMERICAN BANK ------------------------------------------------------------------------

Route::get('/american_express_gold',[MainController::class,'american_express_gold'])->name('american_express_gold');

Route::get('/american_express_payback',[MainController::class,'american_express_payback'])->name('american_express_payback');

Route::get('/american_express_smartearn',[MainController::class,'american_express_smartearn'])->name('american_express_smartearn');

//form


Route::get('/american_gold_form',[MainController::class,'american_gold_form'])->name('american_gold_form');

Route::post('/form_gold',[MainController::class,'form_gold'])->name('form_gold');

Route::get('/american_payment_form',[MainController::class,'american_payment_form'])->name('american_payment_form');

Route::post('/form_payment',[MainController::class,'form_payment'])->name('form_payment');

Route::get('/american_form',[MainController::class,'american_form'])->name('american_form');

Route::post('/form_american',[MainController::class,'form_american'])->name('form_american');

//------------------------------------------------------@ INDUSIND  BANK ------------------------------------------------------------------------

Route::get('/indusind_aura',[MainController::class,'indusind_aura'])->name('indusind_aura');

Route::get('/indusind_british',[MainController::class,'indusind_british'])->name('indusind_british');

Route::get('/indusind_legend',[MainController::class,'indusind_legend'])->name('indusind_legend');

Route::get('/indusind_nexxt',[MainController::class,'indusind_nexxt'])->name('indusind_nexxt');

Route::get('/indusind_pinnacle',[MainController::class,'indusind_pinnacle'])->name('indusind_pinnacle');

Route::get('/indusind_platinum',[MainController::class,'indusind_platinum'])->name('indusind_platinum');

Route::get('/indusind_qatar',[MainController::class,'indusind_qatar'])->name('indusind_qatar');

Route::get('/indusind_rupay',[MainController::class,'indusind_rupay'])->name('indusind_rupay');

//------------------------------------------------------@ HSBC  BANK --------------------------------------------------------------------

Route::get('/hsbc_bank_smart',[MainController::class,'hsbc_bank_smart'])->name('hsbc_bank_smart');

Route::get('/hsbc_live_credit',[MainController::class,'hsbc_live_credit'])->name('hsbc_live_credit');

Route::get('/hsbc_premier_credit',[MainController::class,'hsbc_premier_credit'])->name('hsbc_premier_credit');

Route::get('/hsbc_visa_platinum',[MainController::class,'hsbc_visa_platinum'])->name('hsbc_visa_platinum');

//------------------------------------------------------@ YES  BANK ---------------------------------------------------------------------

Route::get('/yes_bank_rewards',[MainController::class,'yes_bank_rewards'])->name('yes_bank_rewards');

Route::get('/yes_bank_ace',[MainController::class,'yes_bank_ace'])->name('yes_bank_ace');

Route::get('/yes_bank_cashback',[MainController::class,'yes_bank_cashback'])->name('yes_bank_cashback');

Route::get('/yes_bank_first_business',[MainController::class,'yes_bank_first_business'])->name('yes_bank_first_business');

Route::get('/yes_bank_first',[MainController::class,'yes_bank_first'])->name('yes_bank_first');

Route::get('/yes_bank_marquee',[MainController::class,'yes_bank_marquee'])->name('yes_bank_marquee');

Route::get('/yes_bank_reserve',[MainController::class,'yes_bank_reserve'])->name('yes_bank_reserve');

Route::get('/yes_bank_select',[MainController::class,'yes_bank_select'])->name('yes_bank_select');

Route::get('/yes_elite_plus',[MainController::class,'yes_elite_plus'])->name('yes_elite_plus');

//form

Route::get('/yes_form',[MainController::class,'yes_form'])->name('yes_form');

Route::post('/form_yes',[MainController::class,'form_yes'])->name('form_yes');

Route::get('/yes_ace_form',[MainController::class,'yes_ace_form'])->name('yes_ace_form');

Route::post('/form_ace',[MainController::class,'form_ace'])->name('form_ace');

Route::get('/yes_first_business_form',[MainController::class,'yes_first_business_form'])->name('yes_first_business_form');

Route::post('/form_first_bussiness',[MainController::class,'form_first_bussiness'])->name('form_first_bussiness');

Route::get('/yes_first_form',[MainController::class,'yes_first_form'])->name('yes_first_form');
 
Route::post('/form_first',[MainController::class,'form_first'])->name('form_first');

Route::get('/yes_marquee_form',[MainController::class,'yes_marquee_form'])->name('yes_marquee_form');

Route::post('/form_marquee',[MainController::class,'form_marquee'])->name('form_marquee');

Route::get('/yes_reserve_form',[MainController::class,'yes_reserve_form'])->name('yes_reserve_form');

Route::post('/form_reserve',[MainController::class,'form_reserve'])->name('form_reserve');

Route::get('/yes_reward_form',[MainController::class,'yes_reward_form'])->name('yes_reward_form');

Route::post('/form_reward',[MainController::class,'form_reward'])->name('form_reward');

Route::get('/yes_cashback_form',[MainController::class,'yes_cashback_form'])->name('yes_cashback_form');

Route::post('/form_cashback',[MainController::class,'form_cashback'])->name('form_cashback');

Route::get('/yes_select_form',[MainController::class,'yes_select_form'])->name('yes_select_form');

Route::post('/form_select',[MainController::class,'form_select'])->name('form_select');

//------------------------------------------------------@ HSBC  BANK ---------------------------------------------------------------------

Route::get('/kotak_6e_reward',[MainController::class,'kotak_6e_reward'])->name('kotak_6e_reward');

Route::get('/kotak_6e_xl_reward',[MainController::class,'kotak_6e_xl_reward'])->name('kotak_6e_xl_reward');

Route::get('/kotak_811',[MainController::class,'kotak_811'])->name('kotak_811');

Route::get('/kotak_indian_oil',[MainController::class,'kotak_indian_oil'])->name('kotak_indian_oil');

Route::get('/kotak_league_platinum',[MainController::class,'kotak_league_platinum'])->name('kotak_league_platinum');

Route::get('/kotak_myntra',[MainController::class,'kotak_myntra'])->name('kotak_myntra');

Route::get('/kotak_royale_signature',[MainController::class,'kotak_royale_signature'])->name('kotak_royale_signature');

Route::get('/kotak_urbane_gold',[MainController::class,'kotak_urbane_gold'])->name('kotak_urbane_gold');

Route::get('/kotak_white_reserve',[MainController::class,'kotak_white_reserve'])->name('kotak_white_reserve');

Route::get('/kotak_zen',[MainController::class,'kotak_zen'])->name('kotak_zen');

//form

Route::get('/kotak_6e_reward_form',[MainController::class,'kotak_6e_reward_form'])->name('kotak_6e_reward_form');

Route::post('/form_rewards',[MainController::class,'form_rewards'])->name('form_rewards');

Route::get('/kotak_form',[MainController::class,'kotak_form'])->name('kotak_form');

Route::post('/form_kotak',[MainController::class,'form_kotak'])->name('form_kotak');

Route::get('/kotak_6e_xl_form',[MainController::class,'kotak_6e_xl_form'])->name('kotak_6e_xl_form');

Route::post('/form_xl',[MainController::class,'form_xl'])->name('form_xl');

Route::get('/kotak_811_form',[MainController::class,'kotak_811_form'])->name('kotak_811_form');

Route::post('/form_number',[MainController::class,'form_number'])->name('form_number');
 
Route::get('/kotak_indian_oil_form',[MainController::class,'kotak_indian_oil_form'])->name('kotak_indian_oil_form');

Route::post('/form_oil',[MainController::class,'form_oil'])->name('form_oil');

Route::get('/kotak_myntra_form',[MainController::class,'kotak_myntra_form'])->name('kotak_myntra_form');

Route::post('/form_myntra',[MainController::class,'form_myntra'])->name('form_myntra');

Route::get('/kotak_royal_signature_form',[MainController::class,'kotak_royal_signature_form'])->name('kotak_royal_signature_form');

Route::post('/form_royal',[MainController::class,'form_royal'])->name('form_royal');

Route::get('/kotak_urbane_gold_form',[MainController::class,'kotak_urbane_gold_form'])->name('kotak_urbane_gold_form');

Route::post('/form_golds',[MainController::class,'form_golds'])->name('form_golds');

Route::get('/kotak_white_reserve_form',[MainController::class,'kotak_white_reserve_form'])->name('kotak_white_reserve_form');

Route::post('/form_white',[MainController::class,'form_white'])->name('form_white');

Route::get('/kotak_zen_form',[MainController::class,'kotak_zen_form'])->name('kotak_zen_form');

Route::post('/form_zen',[MainController::class,'form_zen'])->name('form_zen');

//------------------------------------------------------@ ICICI  BANK -----------------------------------------------------------------------

Route::get('/icici_coral',[MainController::class,'icici_coral'])->name('icici_coral');

Route::get('/icici_emeralde_private',[MainController::class,'icici_emeralde_private'])->name('icici_emeralde_private');

Route::get('/icici_emeralde',[MainController::class,'icici_emeralde'])->name('icici_emeralde');

Route::get('/icici_manchester_signature',[MainController::class,'icici_manchester_signature'])->name('icici_manchester_signature');

Route::get('/icici_manchester_united',[MainController::class,'icici_manchester_united'])->name('icici_manchester_united');

Route::get('/icici_platinum',[MainController::class,'icici_platinum'])->name('icici_platinum');

Route::get('/icici_rubyx',[MainController::class,'icici_rubyx'])->name('icici_rubyx');

Route::get('/icici_sapphiro',[MainController::class,'icici_sapphiro'])->name('icici_sapphiro');

//form

Route::get('/icici_form',[MainController::class,'icici_form'])->name('icici_form');

Route::post('/form_icici',[MainController::class,'form_icici'])->name('form_icici');

Route::get('/icici_coral_form',[MainController::class,'icici_coral_form'])->name('icici_coral_form');

Route::post('/form_coral',[MainController::class,'form_coral'])->name('form_coral');

Route::get('/icici_emeralde_form',[MainController::class,'icici_emeralde_form'])->name('icici_emeralde_form');

Route::post('/form_emeralde',[MainController::class,'form_emeralde'])->name('form_emeralde');

Route::get('/icici_manchester_signature_form',[MainController::class,'icici_manchester_signature_form'])->name('icici_manchester_signature_form');

Route::post('/form_sign',[MainController::class,'form_sign'])->name('form_sign');

Route::get('/icici_manchester_united_form',[MainController::class,'icici_manchester_united_form'])->name('icici_manchester_united_form');

Route::post('/form_united',[MainController::class,'form_united'])->name('form_united');

Route::get('/icici_platinum_form',[MainController::class,'icici_platinum_form'])->name('icici_platinum_form');

Route::post('/form_platinum',[MainController::class,'form_platinum'])->name('form_platinum');

Route::get('/icici_rubyx_form',[MainController::class,'icici_rubyx_form'])->name('icici_rubyx_form');

Route::post('/form_rubyx',[MainController::class,'form_rubyx'])->name('form_rubyx');

Route::get('/icici_sapphiro_form',[MainController::class,'icici_sapphiro_form'])->name('icici_sapphiro_form');

Route::post('/form_sapphiro',[MainController::class,'form_sapphiro'])->name('form_sapphiro');

//------------------------------------------------------@ STANDARD  BANK ---------------------------------------------------------------------

Route::get('/standard_digismart',[MainController::class,'standard_digismart'])->name('standard_digismart');

Route::get('/standard_manhattan',[MainController::class,'standard_manhattan'])->name('standard_manhattan');

Route::get('/standard_priority',[MainController::class,'standard_priority'])->name('standard_priority');

Route::get('/standard_tittanium',[MainController::class,'standard_tittanium'])->name('standard_tittanium');

Route::get('/standard_ultimate',[MainController::class,'standard_ultimate'])->name('standard_ultimate');

Route::get('/standard_platinum',[MainController::class,'standard_platinum'])->name('standard_platinum');

//form

Route::get('/standard_digi_form',[MainController::class,'standard_digi_form'])->name('standard_digi_form');

Route::post('/form_digi',[MainController::class,'form_digi'])->name('form_digi');

Route::get('/standard_man_form',[MainController::class,'standard_man_form'])->name('standard_man_form');

Route::post('/form_man',[MainController::class,'form_man'])->name('form_man');

Route::get('/standard_platimun_form',[MainController::class,'standard_platimun_form'])->name('standard_platimun_form');

Route::post('/form_plat',[MainController::class,'form_plat'])->name('form_plat');

Route::get('/standard_priority_form',[MainController::class,'standard_priority_form'])->name('standard_priority_form');

Route::post('/form_pri',[MainController::class,'form_pri'])->name('form_pri');

Route::get('/standard_titta_form',[MainController::class,'standard_titta_form'])->name('standard_titta_form');

Route::post('/form_titta',[MainController::class,'form_titta'])->name('form_titta');

Route::get('/standard_form',[MainController::class,'standard_form'])->name('standard_form');

Route::post('/form_standard',[MainController::class,'form_standard'])->name('form_standard');

//===========================================@LOAN=============================================================================================

//--------------------------------------------@PERSONAL_LOAN-BANK----------------------------------------------------------

Route::get('/au_personal_loan',[MainController::class,'au_personal_loan'])->name('au_personal_loan');

Route::get('/axis_personal_loan',[MainController::class,'axis_personal_loan'])->name('axis_personal_loan');

Route::get('/hdfc_form_loan',[MainController::class,'hdfc_form_loan'])->name('hdfc_form_loan');

Route::get('/hsbc_personal_loan',[MainController::class,'hsbc_personal_loan'])->name('hsbc_personal_loan');

Route::get('/icici_personal_loan',[MainController::class,'icici_personal_loan'])->name('icici_personal_loan');

Route::get('/idfc_personal_loan',[MainController::class,'idfc_personal_loan'])->name('idfc_personal_loan');

Route::get('/indusind_personal_loan',[MainController::class,'indusind_personal_loan'])->name('indusind_personal_loan');

Route::get('/kotak_personal_loan',[MainController::class,'kotak_personal_loan'])->name('kotak_personal_loan');

Route::get('/sbi_personal_loan',[MainController::class,'sbi_personal_loan'])->name('sbi_personal_loan');

Route::get('/yes_personal_loan',[MainController::class,'yes_personal_loan'])->name('yes_personal_loan');
//--------------------------------------------@BUSINESS_LOAN-BANK----------------------------------------------------------

Route::get('/au_business_loan',[MainController::class,'au_business_loan'])->name('au_business_loan');

Route::get('/axis_business_loan',[MainController::class,'axis_business_loan'])->name('axis_business_loan');

Route::get('/bajaj_business_loan',[MainController::class,'bajaj_business_loan'])->name('bajaj_business_loan');

Route::get('/hdfc_business_loan',[MainController::class,'hdfc_business_loan'])->name('hdfc_business_loan');

Route::get('/hsbc_business_loan',[MainController::class,'hsbc_business_loan'])->name('hsbc_business_loan');

Route::get('/icici_business_loan',[MainController::class,'icici_business_loan'])->name('icici_business_loan');

Route::get('/idfc_business_loan',[MainController::class,'idfc_business_loan'])->name('idfc_business_loan');

Route::get('/indusind_business_loan',[MainController::class,'indusind_business_loan'])->name('indusind_business_loan');

Route::get('/sbi_bank_business_loan',[MainController::class,'sbi_bank_business_loan'])->name('sbi_bank_business_loan');

Route::get('/yes_business_loan',[MainController::class,'yes_business_loan'])->name('yes_business_loan');

//--------------------------------------------@HOME_LOAN-BANK----------------------------------------------------------------------------------

Route::get('/hdfc_bank_home_loan',[MainController::class,'hdfc_bank_home_loan'])->name('hdfc_bank_home_loan');

Route::get('/icici_bank_home_loan',[MainController::class,'icici_bank_home_loan'])->name('icici_bank_home_loan');

Route::get('/kotak_bank_home_loan',[MainController::class,'kotak_bank_home_loan'])->name('kotak_bank_home_loan');

Route::get('/sbi_bank_home_loan',[MainController::class,'sbi_bank_home_loan'])->name('sbi_bank_home_loan');

//--------------------------------------------@PERSONAL_LOAN & BUSINESS_LOAN & HOME_LOAN-NBFC------------------------------------------------------------------------------------

Route::get('/form_loan',[MainController::class,'form_loan'])->name('form_loan');

//-------------------------------------------@LOAN_AGAINST_PROPERTY------------------------------------------------------------------------------

Route::get('/loan_against_property',[MainController::class,'loan_against_property'])->name('loan_against_property');

//-------------------------------------------@gold_loan------------------------------------------------------------------------------------------

Route::get('/gold_loan',[MainController::class,'gold_loan'])->name('gold_loan');

//===========================================@insurance============================================================================

//-------------------------------------------@HEALTH_INSURANCE--------------------------------------------------------------------

Route::get('/health_aditya_birla',[MainController::class,'health_aditya_birla'])->name('health_aditya_birla');

Route::get('/health_core_health',[MainController::class,'health_core_health'])->name('health_core_health');

Route::get('/health_ergo',[MainController::class,'health_ergo'])->name('health_ergo');

Route::get('/health_future_insurance',[MainController::class,'health_future_insurance'])->name('health_future_insurance');

Route::get('/health_reliance',[MainController::class,'health_reliance'])->name('health_reliance');

Route::get('/health_go_digit',[MainController::class,'health_go_digit'])->name('health_go_digit');

Route::get('/health_icici_lombard',[MainController::class,'health_icici_lombard'])->name('health_icici_lombard');

Route::get('/health_sbi_general',[MainController::class,'health_sbi_general'])->name('health_sbi_general');

Route::get('/health_max_bupa',[MainController::class,'health_max_bupa'])->name('health_max_bupa');

Route::get('/health_tata_insurance',[MainController::class,'health_tata_insurance'])->name('health_tata_insurance');

//-------------------------------------------@LIFE_INSURANCE-----------------------------------------------------------------

Route::get('/life_bajaj_insurance',[MainController::class,'life_bajaj_insurance'])->name('life_bajaj_insurance');

Route::get('/life_bharti_insurance',[MainController::class,'life_bharti_insurance'])->name('life_bharti_insurance');

Route::get('/life_hdfc_insurance',[MainController::class,'life_hdfc_insurance'])->name('life_hdfc_insurance');

Route::get('/life_icici_insurance',[MainController::class,'life_icici_insurance'])->name('life_icici_insurance');

Route::get('/life_kotak_insurance',[MainController::class,'life_kotak_insurance'])->name('life_kotak_insurance');

Route::get('/life_max_insurance',[MainController::class,'life_max_insurance'])->name('life_max_insurance');

Route::get('/life_sbi_insurance',[MainController::class,'life_sbi_insurance'])->name('life_sbi_insurance');

//-------------------------------------------@GENERAL_INSURANCE-----------------------------------------------------------------

Route::get('/general_bike_insurance',[MainController::class,'general_bike_insurance'])->name('general_bike_insurance');

Route::get('/general_car_insurance',[MainController::class,'general_car_insurance'])->name('general_car_insurance');

Route::get('/general_motor_insurance',[MainController::class,'general_motor_insurance'])->name('general_motor_insurance');

Route::get('/general_travel_insurance',[MainController::class,'general_travel_insurance'])->name('general_travel_insurance');

//-------------------------------------------@INSTANT_LOAN----------------------------------------------------------------------

Route::get('/hdfc_xpress_loan',[MainController::class,'hdfc_xpress_loan'])->name('hdfc_xpress_loan');

Route::get('/insta_loan',[MainController::class,'insta_loan'])->name('insta_loan');

Route::get('/jumbo_loan',[MainController::class,'jumbo_loan'])->name('jumbo_loan');

Route::get('/smart_emi',[MainController::class,'smart_emi'])->name('smart_emi');

//==============================================@BLOG============================================================================

Route::get('/blog',[MainController::class,'blog'])->name('blog');

Route::get('/individual_blog/{id}', [MainController::class, 'individual_blog'])->name('individual_blog');

//==============================================@CONTACT============================================================================

Route::get('/contact',[MainController::class,'contact'])->name('contact');

Route::post('/contacts',[MainController::class,'contacts'])->name('contacts');

//==============================================@THANKU=============================================================================

Route::get('/thankyou',[MainController::class,'thankyou'])->name('thankyou');

//==============================================@ABOUT=============================================================================

Route::get('/about',[MainController::class,'about'])->name('about');

//==============================================@FAQ=============================================================================

Route::get('/faq',[MainController::class,'faq'])->name('faq');

//==============================================@SERVICES=============================================================================

Route::get('/services',[MainController::class,'services'])->name('services');

//----------------------------------------------@ADMIN---------------------------------------------------------------------------------

Route::get('admin_body',[AdminController::class,'admin'])->name('admin');

//==============================================@registration===================================================================

Route::get('registration/employee_registration_list',[AdminController::class,'employee_registration_list'])->name('employee_registration_list');

Route::get('registration/employee_registration',[AdminController::class,'employee_registration'])->name('employee_registration');

//==============================================@HDFC BANK===================================================================


Route::get('credit_card/hdfc/admin_hdfc_6e_reward_list',[AdminController::class,'admin_hdfc_6e_reward_list'])->name('admin_hdfc_6e_reward_list');

Route::get('credit_card/hdfc/admin_hdfc_6e_reward_xl_list',[AdminController::class,'admin_hdfc_6e_reward_xl_list'])->name('admin_hdfc_6e_reward_xl_list');

Route::get('credit_card/hdfc/admin_hdfc_6e_reward_xl',[AdminController::class,'admin_hdfc_6e_reward_xl'])->name('admin_hdfc_6e_reward_xl');

Route::get('credit_card/hdfc/admin_hdfc_6e_reward',[AdminController::class,'admin_hdfc_6e_reward'])->name('admin_hdfc_6e_reward');

Route::get('credit_card/hdfc/admin_hdfc_biz_first_list',[AdminController::class,'admin_hdfc_biz_first_list'])->name('admin_hdfc_biz_first_list');

Route::get('credit_card/hdfc/admin_hdfc_biz_first',[AdminController::class,'admin_hdfc_biz_first'])->name('admin_hdfc_biz_first');

Route::get('credit_card/hdfc/admin_hdfc_biz_grow_list',[AdminController::class,'admin_hdfc_biz_grow_list'])->name('admin_hdfc_biz_grow_list');

Route::get('credit_card/hdfc/admin_hdfc_biz_grow',[AdminController::class,'admin_hdfc_biz_grow'])->name('admin_hdfc_biz_grow');

Route::get('credit_card/hdfc/admin_hdfc_diner_club_list',[AdminController::class,'admin_hdfc_diner_club_list'])->name('admin_hdfc_diner_club_list');

Route::get('credit_card/hdfc/admin_hdfc_diner_club',[AdminController::class,'admin_hdfc_diner_club'])->name('admin_hdfc_diner_club');

Route::get('credit_card/hdfc/admin_hdfc_flipkart_wholesale_list',[AdminController::class,'admin_hdfc_flipkart_wholesale_list'])->name('admin_hdfc_flipkart_wholesale_list');

Route::get('credit_card/hdfc/admin_hdfc_flipkart_wholesale',[AdminController::class,'admin_hdfc_flipkart_wholesale'])->name('admin_hdfc_flipkart_wholesale');

Route::get('credit_card/hdfc/admin_hdfc_freedom_list',[AdminController::class,'admin_hdfc_freedom_list'])->name('admin_hdfc_freedom_list');

Route::get('credit_card/hdfc/admin_hdfc_freedom',[AdminController::class,'admin_hdfc_freedom'])->name('admin_hdfc_freedom');

Route::post('freedom',[AdminController::class,'freedom'])->name('freedom');

Route::get('delete_freedom_hdfc/{id}',[AdminController::class,'delete_freedom_hdfc'])->name('delete_freedom_hdfc');

Route::get('credit_card/hdfc/edit_admin_hdfc_freedom/{id}',[AdminController::class,'edit_admin_hdfc_freedom'])->name('edit_admin_hdfc_freedom');

Route::post('edit_freedom/{id}',[AdminController::class,'edit_freedom'])->name('edit_freedom');

Route::get('credit_card/hdfc/admin_hdfc_giga_business_list',[AdminController::class,'admin_hdfc_giga_business_list'])->name('admin_hdfc_giga_business_list');

Route::get('credit_card/hdfc/admin_hdfc_giga_business',[AdminController::class,'admin_hdfc_giga_business'])->name('admin_hdfc_giga_business');

Route::get('credit_card/hdfc/admin_hdfc_indial_oil_list',[AdminController::class,'admin_hdfc_indial_oil_list'])->name('admin_hdfc_indial_oil_list');

Route::get('delete_indian_oil_hdfc/{id}',[AdminController::class,'delete_indian_oil_hdfc'])->name('delete_indian_oil_hdfc');

Route::get('credit_card/hdfc/edit_admin_indian_oil_hdfc/{id}',[AdminController::class,'edit_admin_indian_oil_hdfc'])->name('edit_admin_indian_oil_hdfc');

Route::post('edit_indian_oil_hdfc/{id}',[AdminController::class,'edit_indian_oil_hdfc'])->name('edit_indian_oil_hdfc');

Route::get('credit_card/hdfc/admin_hdfc_indial_oil',[AdminController::class,'admin_hdfc_indial_oil'])->name('admin_hdfc_indial_oil');

Route::post('indian_oil_hdfc',[AdminController::class,'indian_oil_hdfc'])->name('indian_oil_hdfc');

Route::get('credit_card/hdfc/admin_hdfc_infinia_list',[AdminController::class,'admin_hdfc_infinia_list'])->name('admin_hdfc_infinia_list');

Route::get('credit_card/hdfc/admin_hdfc_infinia',[AdminController::class,'admin_hdfc_infinia'])->name('admin_hdfc_infinia');

Route::post('infinia_hdfc',[AdminController::class,'infinia_hdfc'])->name('infinia_hdfc');

Route::get('credit_card/hdfc/edit_admin_hdfc_infinia/{id}',[AdminController::class,'edit_admin_hdfc_infinia'])->name('edit_admin_hdfc_infinia');

Route::post('edit_infinia_hdfc/{id}',[AdminController::class,'edit_infinia_hdfc'])->name('edit_infinia_hdfc');

Route::get('delete_infinia_hdfc/{id}',[AdminController::class,'delete_infinia_hdfc'])->name('delete_infinia_hdfc');

Route::get('credit_card/hdfc/admin_hdfc_marriot_bonway_list',[AdminController::class,'admin_hdfc_marriot_bonway_list'])->name('admin_hdfc_marriot_bonway_list');

Route::get('credit_card/hdfc/admin_hdfc_marriot_bonway',[AdminController::class,'admin_hdfc_marriot_bonway'])->name('admin_hdfc_marriot_bonway');

Route::get('credit_card/hdfc/admin_hdfc_millennia_list',[AdminController::class,'admin_hdfc_millennia_list'])->name('admin_hdfc_millennia_list');

Route::get('credit_card/hdfc/admin_hdfc_millennia',[AdminController::class,'admin_hdfc_millennia'])->name('admin_hdfc_millennia');

Route::get('credit_card/hdfc/admin_hdfc_moneyback_list',[AdminController::class,'admin_hdfc_moneyback_list'])->name('admin_hdfc_moneyback_list');

Route::get('delete_money_hdfc/{id}',[AdminController::class,'delete_money_hdfc'])->name('delete_money_hdfc');

Route::get('credit_card/hdfc/edit_admin_hdfc_moneyback/{id}',[AdminController::class,'edit_admin_hdfc_moneyback'])->name('edit_admin_hdfc_moneyback');

Route::post('edit_money_hdfc/{id}',[AdminController::class,'edit_money_hdfc'])->name('edit_money_hdfc');

Route::get('credit_card/hdfc/admin_hdfc_moneyback_plus_list',[AdminController::class,'admin_hdfc_moneyback_plus_list'])->name('admin_hdfc_moneyback_plus_list');

Route::get('credit_card/hdfc/admin_hdfc_moneyback_plus',[AdminController::class,'admin_hdfc_moneyback_plus'])->name('admin_hdfc_moneyback_plus');

Route::get('credit_card/hdfc/admin_hdfc_moneyback',[AdminController::class,'admin_hdfc_moneyback'])->name('admin_hdfc_moneyback');

Route::post('money',[AdminController::class,'money'])->name('money');

Route::get('credit_card/hdfc/admin_hdfc_regalia_list',[AdminController::class,'admin_hdfc_regalia_list'])->name('admin_hdfc_regalia_list');

Route::get('delete_regalia_hdfc/{id}',[AdminController::class,'delete_regalia_hdfc'])->name('delete_regalia_hdfc');

Route::get('credit_card/hdfc/edit_admin_hdfc_regalia/{id}',[AdminController::class,'edit_admin_hdfc_regalia'])->name('edit_admin_hdfc_regalia');

Route::post('edit_regalia_hdfc/{id}',[AdminController::class,'edit_regalia_hdfc'])->name('edit_regalia_hdfc');

Route::get('credit_card/hdfc/admin_hdfc_regalia',[AdminController::class,'admin_hdfc_regalia'])->name('admin_hdfc_regalia');

Route::post('regalia',[AdminController::class,'regalia'])->name('regalia');

Route::get('credit_card/hdfc/admin_hdfc_shopper_stop_black_list',[AdminController::class,'admin_hdfc_shopper_stop_black_list'])->name('admin_hdfc_shopper_stop_black_list');

Route::get('credit_card/hdfc/admin_hdfc_shopper_stop_black',[AdminController::class,'admin_hdfc_shopper_stop_black'])->name('admin_hdfc_shopper_stop_black');

Route::get('credit_card/hdfc/admin_hdfc_swiggy_cc_list',[AdminController::class,'admin_hdfc_swiggy_cc_list'])->name('admin_hdfc_swiggy_cc_list');

Route::get('credit_card/hdfc/admin_hdfc_swiggy_cc',[AdminController::class,'admin_hdfc_swiggy_cc'])->name('admin_hdfc_swiggy_cc');

Route::get('credit_card/hdfc/admin_hdfc_tata_neu_infinity_list',[AdminController::class,'admin_hdfc_tata_neu_infinity_list'])->name('admin_hdfc_tata_neu_infinity_list');
 
Route::get('credit_card/hdfc/admin_hdfc_tata_neu_infinity',[AdminController::class,'admin_hdfc_tata_neu_infinity'])->name('admin_hdfc_tata_neu_infinity');

Route::get('credit_card/hdfc/admin_hdfc_tata_neu_plus_list',[AdminController::class,'admin_hdfc_tata_neu_plus_list'])->name('admin_hdfc_tata_neu_plus_list');

Route::get('credit_card/hdfc/admin_hdfc_tata_neu_plus',[AdminController::class,'admin_hdfc_tata_neu_plus'])->name('admin_hdfc_tata_neu_plus');

Route::get('credit_card/hdfc/admin_hdfc_upi_rupay_list',[AdminController::class,'admin_hdfc_upi_rupay_list'])->name('admin_hdfc_upi_rupay_list');

Route::get('credit_card/hdfc/admin_hdfc_upi_rupay',[AdminController::class,'admin_hdfc_upi_rupay'])->name('admin_hdfc_upi_rupay');

Route::post('upi',[AdminController::class,'upi'])->name('upi');

Route::get('delete_upi_hdfc/{id}',[AdminController::class,'delete_upi_hdfc'])->name('delete_upi_hdfc');

Route::get('credit_card/hdfc/edit_admin_hdfc_upi_rupay/{id}',[AdminController::class,'edit_admin_hdfc_upi_rupay'])->name('edit_admin_hdfc_upi_rupay');

Route::post('edit_upi_hdfc/{id}',[AdminController::class,'edit_upi_hdfc'])->name('edit_upi_hdfc');

//===========================================@AXIS Bank=================================================================================

//ace

Route::get('credit_card/axis/admin_axis_ace_list',[AdminController::class,'admin_axis_ace_list'])->name('admin_axis_ace_list');

Route::get('credit_card/axis/admin_axis_ace',[AdminController::class,'admin_axis_ace'])->name('admin_axis_ace');

Route::post('axis_ace',[AdminController::class,'axis_ace'])->name('axis_ace');

Route::get('edit_admin_axis_ace/{id}',[AdminController::class,'edit_ace'])->name('edit_ace');

Route::post('update_ace/{id}',[AdminController::class,'update_ace'])->name('update_ace');

Route::get('delete_ace/{id}',[AdminController::class,'delete_ace'])->name('delete_ace');

//airtel

Route::get('credit_card/axis/admin_axis_airtel_credit_card_list',[AdminController::class,'admin_axis_airtel_credit_card_list'])->name('admin_axis_airtel_credit_card_list');

Route::get('credit_card/axis/edit_admin_axis_airtel_credit_card/{id}',[AdminController::class,'edit_airtel'])->name('edit_airtel');

Route::post('update_airtel/{id}',[AdminController::class,'update_airtel'])->name('update_airtel');

Route::get('delete_airtel/{id}',[AdminController::class,'delete_airtel'])->name('delete_airtel');

Route::get('credit_card/axis/admin_axis_airtel_credit_card',[AdminController::class,'admin_axis_airtel_credit_card'])->name('admin_axis_airtel_credit_card');

Route::post('airtel',[AdminController::class,'airtel'])->name('airtel');

//flipkart

Route::post('flipkart',[AdminController::class,'flipkart'])->name('flipkart');

Route::get('credit_card/axis/admin_axis_flipkart_list',[AdminController::class,'admin_axis_flipkart_list'])->name('admin_axis_flipkart_list');

Route::get('credit_card/axis/edit_admin_axis_flipkart/{id}',[AdminController::class,'edit_flipkart'])->name('edit_flipkart');

Route::post('update_flipkart/{id}',[AdminController::class,'update_flipkart'])->name('update_flipkart');

Route::get('credit_card/axis/admin_axis_flipkart',[AdminController::class,'admin_axis_flipkart'])->name('admin_axis_flipkart');

//oil 

Route::get('credit_card/axis/admin_axis_indian_oil_list',[AdminController::class,'admin_axis_indian_oil_list'])->name('admin_axis_indian_oil_list');

Route::get('credit_card/axis/admin_axis_indian_oil',[AdminController::class,'admin_axis_indian_oil'])->name('admin_axis_indian_oil');

Route::post('axis_oil',[AdminController::class,'axis_oil'])->name('axis_oil');

Route::get('credit_card/axis/edit_admin_axis_oil/{id}',[AdminController::class,'edit_platinum'])->name('edit_oil');

Route::post('update_oil/{id}',[AdminController::class,'update_platinum'])->name('update_oil');

Route::get('delete_oil/{id}',[AdminController::class,'delete_oil'])->name('delete_oil');

//lic

Route::get('credit_card/axis/admin_axis_lic_signature_list',[AdminController::class,'admin_axis_lic_signature_list'])->name('admin_axis_lic_signature_list');

Route::get('delete_lic/{id}',[AdminController::class,'delete_lic'])->name('delete_lic');

Route::get('credit_card/axis/edit_admin_axis_lic_signature/{id}',[AdminController::class,'edit_lic'])->name('edit_lic');

Route::post('update_lic/{id}',[AdminController::class,'update_lic'])->name('update_lic');

Route::get('credit_card/axis/admin_axis_lic_signature',[AdminController::class,'admin_axis_lic_signature'])->name('admin_axis_lic_signature');

Route::post('lic_signature',[AdminController::class,'lic_signature'])->name('lic_signature');

//magnus

Route::get('credit_card/axis/admin_axis_magnus_list',[AdminController::class,'admin_axis_magnus_list'])->name('admin_axis_magnus_list');

Route::get('credit_card/axis/admin_axis_magnus',[AdminController::class,'admin_axis_magnus'])->name('admin_axis_magnus');

Route::post('axis_magnus',[AdminController::class,'axis_magnus'])->name('axis_magnus');

Route::get('edit_admin_axis_magnus/{id}',[AdminController::class,'edit_magnus'])->name('edit_magnus');

Route::post('update_magnus/{id}',[AdminController::class,'update_magnus'])->name('update_magnus');

Route::get('delete_magnus/{id}',[AdminController::class,'delete_magnus'])->name('delete_magnus');

//zone

Route::get('credit_card/axis/admin_axis_my_zone_list',[AdminController::class,'admin_axis_my_zone_list'])->name('admin_axis_my_zone_list');

Route::get('credit_card/axis/admin_axis_my_zone',[AdminController::class,'admin_axis_my_zone'])->name('admin_axis_my_zone');

Route::post('axis_zone',[AdminController::class,'axis_zone'])->name('axis_zone');

Route::get('edit_admin_axis_my_zone/{id}',[AdminController::class,'edit_zone'])->name('edit_zone');

Route::post('update_zone/{id}',[AdminController::class,'update_zone'])->name('update_zone');

Route::get('delete_zone/{id}',[AdminController::class,'delete_zone'])->name('delete_zone');

//neo

Route::get('credit_card/axis/admin_axis_neo_list',[AdminController::class,'admin_axis_neo_list'])->name('admin_axis_neo_list');

Route::get('edit_admin_axis_neo',[AdminController::class,'edit_admin_axis_neo'])->name('edit_admin_axis_neo');

Route::get('edit_admin_axis_neo/{id}',[AdminController::class,'edit_neo'])->name('edit_neo');

Route::post('axis_neo',[AdminController::class,'axis_neo'])->name('axis_neo');

Route::post('update_neo/{id}',[AdminController::class,'update_neo'])->name('update_neo');

Route::get('delete_neo/{id}',[AdminController::class,'delete_neo'])->name('delete_neo');

Route::get('credit_card/axis/admin_axis_neo',[AdminController::class,'admin_axis_neo'])->name('admin_axis_neo');

//platinum

Route::get('credit_card/axis/admin_axis_platinum_list',[AdminController::class,'admin_axis_platinum_list'])->name('admin_axis_platinum_list');

Route::get('credit_card/axis/admin_axis_platinum',[AdminController::class,'admin_axis_platinum'])->name('admin_axis_platinum');

Route::post('axis_platinum',[AdminController::class,'axis_platinum'])->name('axis_platinum');

Route::get('edit_admin_axis_platinum/{id}',[AdminController::class,'edit_platinum'])->name('edit_platinum');

Route::post('update_platinum/{id}',[AdminController::class,'update_platinum'])->name('update_platinum');

Route::get('delete_platinum/{id}',[AdminController::class,'delete_platinum'])->name('delete_platinum');

//reward

Route::get('credit_card/axis/admin_axis_reward',[AdminController::class,'admin_axis_reward'])->name('admin_axis_reward');

Route::post('axis_reward',[AdminController::class,'axis_reward'])->name('axis_reward');

Route::get('credit_card/axis/admin_axis_reward_list',[AdminController::class,'admin_axis_reward_list'])->name('admin_axis_reward_list');

Route::get('delete_reward/{id}',[AdminController::class,'delete_reward'])->name('delete_reward');

Route::get('credit_card/axis/edit_admin_axis_reward/{id}',[AdminController::class,'edit_reward'])->name('edit_reward');

Route::post('update_reward/{id}',[AdminController::class,'update_reward'])->name('update_reward');

//select

Route::get('credit_card/axis/admin_axis_select_list',[AdminController::class,'admin_axis_select_list'])->name('admin_axis_select_list');

Route::get('credit_card/axis/admin_axis_select',[AdminController::class,'admin_axis_select'])->name('admin_axis_select');

Route::post('axis_select',[AdminController::class,'axis_select'])->name('axis_select');

Route::get('delete_select/{id}',[AdminController::class,'delete_select'])->name('delete_select');

Route::get('credit_card/axis/edit_admin_axis_lic_signature/{id}',[AdminController::class,'edit_lic'])->name('edit_lic');

Route::post('update_lic/{id}',[AdminController::class,'update_lic'])->name('update_lic');

//------------------------------------------@sbi bank------------------------------------------------------------

//elite

Route::get('credit_card/sbi/admin_sbi_elite_list',[AdminController::class,'admin_sbi_elite_list'])->name('admin_sbi_elite_list');

Route::get('credit_card/sbi/admin_sbi_elite',[AdminController::class,'admin_sbi_elite'])->name('admin_sbi_elite');

Route::get('credit_card/sbi/edit_admin_sbi_elite/{id}',[AdminController::class,'edit_sbi_elite'])->name('edit_sbi_elite');

Route::post('update_sbi_elite/{id}',[AdminController::class,'update_sbi_elite'])->name('update_sbi_elite');

Route::get('delete_sbi_elite/{id}',[AdminController::class,'delete_sbi_elite'])->name('delete_sbi_elite');

Route::post('sbi_elite',[AdminController::class,'sbi_elite'])->name('sbi_elite');

//form_list

Route::get('credit_card/sbi/admin_sbi_form_list',[AdminController::class,'admin_sbi_form_list'])->name('admin_sbi_form_list');

//octane

Route::get('credit_card/sbi/admin_sbi_octane_list',[AdminController::class,'admin_sbi_octane_list'])->name('admin_sbi_octane_list');

Route::get('credit_card/sbi/admin_sbi_octane',[AdminController::class,'admin_sbi_octane'])->name('admin_sbi_octane');

Route::get('credit_card/sbi/edit_admin_sbi_octane/{id}',[AdminController::class,'edit_sbi_octane'])->name('edit_sbi_octane');

Route::post('update_sbi_octane/{id}',[AdminController::class,'update_sbi_octane'])->name('update_sbi_octane');

Route::get('delete_sbi_octane/{id}',[AdminController::class,'delete_sbi_octane'])->name('delete_sbi_octane');

Route::post('sbi_octane',[AdminController::class,'sbi_octane'])->name('sbi_octane');

//premier

Route::get('credit_card/sbi/admin_sbi_premier_list',[AdminController::class,'admin_sbi_premier_list'])->name('admin_sbi_premier_list');

Route::get('credit_card/sbi/admin_sbi_premier',[AdminController::class,'admin_sbi_premier'])->name('admin_sbi_premier');

Route::get('credit_card/sbi/edit_admin_sbi_premier/{id}',[AdminController::class,'edit_sbi_premier'])->name('edit_sbi_premier');

Route::post('update_sbi_premier/{id}',[AdminController::class,'update_sbi_premier'])->name('update_sbi_premier');

Route::get('delete_sbi_premier/{id}',[AdminController::class,'delete_sbi_premier'])->name('delete_sbi_premier');

Route::post('sbi_premier',[AdminController::class,'sbi_premier'])->name('sbi_premier');

//prime_credit _card----------------------------------------------------------------------------------------------------------

Route::get('credit_card/sbi/admin_sbi_prime_list',[AdminController::class,'admin_sbi_prime_list'])->name('admin_sbi_prime_list');

Route::get('credit_card/sbi/admin_sbi_prime',[AdminController::class,'admin_sbi_prime'])->name('admin_sbi_prime');

Route::post('sbi_prime',[AdminController::class,'sbi_prime'])->name('sbi_prime');

Route::get('/delete_prime/{id}',[AdminController::class,'delete_prime'])->name('delete_prime');

Route::get('/credit_card/sbi/edit_admin_sbi_prime/{id}',[AdminController::class,'edit_prime'])->name('edit_prime');

Route::post('/update_sbi_prime/{id}',[AdminController::class,'update_sbi_prime'])->name('update_sbi_prime');

//pulse

Route::get('credit_card/sbi/admin_sbi_pulse_list',[AdminController::class,'admin_sbi_pulse_list'])->name('admin_sbi_pulse_list');

Route::get('credit_card/sbi/admin_sbi_pulse',[AdminController::class,'admin_sbi_pulse'])->name('admin_sbi_pulse');

Route::get('credit_card/sbi/edit_admin_sbi_pulse/{id}',[AdminController::class,'edit_sbi_pulse'])->name('edit_sbi_pulse');

Route::post('update_sbi_pulse/{id}',[AdminController::class,'update_sbi_pulse'])->name('update_sbi_pulse');

Route::get('delete_sbi_pulse/{id}',[AdminController::class,'delete_sbi_pulse'])->name('delete_sbi_pulse');

Route::post('sbi_pulse',[AdminController::class,'sbi_pulse'])->name('sbi_pulse');

//signature

Route::get('credit_card/sbi/admin_sbi_signature_list',[AdminController::class,'admin_sbi_signature_list'])->name('admin_sbi_signature_list');

Route::get('credit_card/sbi/admin_sbi_signature',[AdminController::class,'admin_sbi_signature'])->name('admin_sbi_signature');

Route::get('credit_card/sbi/edit_admin_sbi_signature/{id}',[AdminController::class,'edit_sbi_signature'])->name('edit_sbi_signature');

Route::post('update_sbi_signature/{id}',[AdminController::class,'update_sbi_signature'])->name('update_sbi_signature');

Route::get('delete_sbi_signature/{id}',[AdminController::class,'delete_sbi_signature'])->name('delete_sbi_signature');

Route::post('sbi_signature',[AdminController::class,'sbi_signature'])->name('sbi_signature');

//simple_click

Route::get('credit_card/sbi/admin_sbi_simply_click_list',[AdminController::class,'admin_sbi_simply_click_list'])->name('admin_sbi_simply_click_list');

Route::get('credit_card/sbi/admin_sbi_simply_click',[AdminController::class,'admin_sbi_simply_click'])->name('admin_sbi_simply_click');

Route::get('credit_card/sbi/edit_admin_sbi_simply_click/{id}',[AdminController::class,'edit_sbi_simply_click'])->name('edit_sbi_simply_click');

Route::post('update_sbi_simply_click/{id}',[AdminController::class,'update_sbi_simply_click'])->name('update_sbi_simply_click');

Route::get('delete_sbi_simply_click/{id}',[AdminController::class,'delete_sbi_simply_click'])->name('delete_sbi_simply_click');

Route::post('sbi_simply_clcik',[AdminController::class,'sbi_simply_click'])->name('sbi_simply_click');


//simple_save

Route::get('credit_card/sbi/admin_sbi_simply_save_list',[AdminController::class,'admin_sbi_simply_save_list'])->name('admin_sbi_simply_save_list');

Route::get('credit_card/sbi/edit_admin_sbi_simply_save/{id}',[AdminController::class,'edit_sbi_simply_save'])->name('edit_sbi_simply_save');

Route::post('update_admin_sbi_simply_save/{id}',[AdminController::class,'update_admin_sbi_simply_save'])->name('update_admin_sbi_simply_save');

Route::get('delete_sbi_simply_save/{id}',[AdminController::class,'delete_sbi_simply_save'])->name('delete_sbi_simply_save');

Route::get('credit_card/sbi/admin_sbi_simply_save',[AdminController::class,'admin_sbi_simply_save'])->name('admin_sbi_simply_save');

Route::post('sbi_simple_save',[AdminController::class,'sbi_simple_save'])->name('sbi_simple_save');

//===========================================@IDFC Bank=================================================================================

//classic----------------------------------------------------------------------------------------------------------------

Route::get('credit_card/idfc/admin_idfc_classic_list',[AdminController::class,'admin_idfc_classic_list'])->name('admin_idfc_classic_list');

Route::get('credit_card/idfc/admin_idfc_classic',[AdminController::class,'admin_idfc_classic'])->name('admin_idfc_classic');

Route::get('credit_card/idfc/edit_admin_idfc_classic/{id}',[AdminController::class,'edit_admin_idfc_classic'])->name('edit_admin_idfc_classic');

Route::post('update_idfc_classic/{id}',[AdminController::class,'update_idfc_classic'])->name('update_idfc_classic');

Route::get('delete_idfc_classic/{id}',[AdminController::class,'delete_idfc_classic'])->name('delete_idfc_classic');

Route::post('idfc_classic',[AdminController::class,'idfc_classic'])->name('idfc_classic');

//club----------------------------------------------------------------------------------------------------------------

Route::get('credit_card/idfc/admin_idfc_club_vista_list',[AdminController::class,'admin_idfc_club_vista_list'])->name('admin_idfc_club_vista_list');

Route::get('credit_card/idfc/admin_idfc_club_vista',[AdminController::class,'admin_idfc_club_vista'])->name('admin_idfc_club_vista');

Route::get('credit_card/idfc/edit_admin_idfc_club_vista/{id}',[AdminController::class,'edit_admin_idfc_club_vista'])->name('edit_admin_idfc_club_vista');

Route::post('update_idfc_club_vista/{id}',[AdminController::class,'update_idfc_club_vista'])->name('update_idfc_club_vista');

Route::get('delete_idfc_club_vista/{id}',[AdminController::class,'delete_idfc_club_vista'])->name('delete_idfc_club_vista');

Route::post('idfc_club_vista',[AdminController::class,'idfc_club_vista'])->name('idfc_club_vista');

//first_power----------------------------------------------------------------------------------------------------------------

Route::get('credit_card/idfc/admin_idfc_first_power_list',[AdminController::class,'admin_idfc_first_power_list'])->name('admin_idfc_first_power_list');

Route::get('credit_card/idfc/admin_idfc_first_power',[AdminController::class,'admin_idfc_first_power'])->name('admin_idfc_first_power');

Route::get('credit_card/idfc/edit_admin_idfc_first_power/{id}',[AdminController::class,'edit_admin_idfc_first_power'])->name('edit_admin_idfc_first_power');

Route::post('update_idfc_first_power/{id}',[AdminController::class,'update_idfc_first_power'])->name('update_idfc_first_power');

Route::get('delete_idfc_first_power/{id}',[AdminController::class,'delete_idfc_first_power'])->name('delete_idfc_first_power');

Route::post('idfc_first_power',[AdminController::class,'idfc_first_power'])->name('idfc_first_power');

//swyp_list----------------------------------------------------------------------------------------------------------------

Route::get('credit_card/idfc/admin_idfc_first_swyp_list',[AdminController::class,'admin_idfc_first_swyp_list'])->name('admin_idfc_first_swyp_list');

Route::get('credit_card/idfc/edit_admin_idfc_first_swyp/{id}',[AdminController::class,'edit_admin_idfc_first_swyp'])->name('edit_admin_idfc_first_swyp');

Route::post('update_idfc_first/{id}',[AdminController::class,'update_idfc_first'])->name('update_idfc_first');

Route::get('delete_idfc_first/{id}',[AdminController::class,'delete_idfc_first'])->name('delete_idfc_first');

Route::post('idfc_first',[AdminController::class,'idfc_first'])->name('idfc_first');

Route::get('credit_card/idfc/admin_idfc_first_swyp',[AdminController::class,'admin_idfc_first_swyp'])->name('admin_idfc_first_swyp');

//millenia----------------------------------------------------------------------------------------------------------------

Route::get('credit_card/idfc/admin_idfc_millenia_list',[AdminController::class,'admin_idfc_millenia_list'])->name('admin_idfc_millenia_list');

Route::get('credit_card/idfc/admin_idfc_millenia',[AdminController::class,'admin_idfc_millenia'])->name('admin_idfc_millenia');

//idfc_select----------------------------------------------------------------------------------------------------------------

Route::get('credit_card/idfc/admin_idfc_select_list',[AdminController::class,'admin_idfc_select_list'])->name('admin_idfc_select_list');

Route::get('credit_card/idfc/admin_idfc_select',[AdminController::class,'admin_idfc_select'])->name('admin_idfc_select');

Route::get('credit_card/idfc/edit_admin_idfc_select/{id}',[AdminController::class,'edit_admin_idfc_select'])->name('edit_admin_idfc_select');

Route::post('update_idfc_select/{id}',[AdminController::class,'update_idfc_select'])->name('update_idfc_select');

Route::get('delete_idfc_select/{id}',[AdminController::class,'delete_idfc_select'])->name('delete_idfc_select');

Route::post('idfc_select',[AdminController::class,'idfc_select'])->name('idfc_select');

//wealth_list----------------------------------------------------------------------------------------------------------------

Route::get('credit_card/idfc/admin_idfc_wealth_list',[AdminController::class,'admin_idfc_wealth_list'])->name('admin_idfc_wealth_list');

Route::get('credit_card/idfc/admin_idfc_wealth',[AdminController::class,'admin_idfc_wealth'])->name('admin_idfc_wealth');

Route::post('update_admin_idfc_wealth/{id}',[AdminController::class,'update_admin_idfc_wealth'])->name('update_admin_idfc_wealth');

Route::get('delete_idfc_wealth/{id}',[AdminController::class,'delete_idfc_wealth'])->name('delete_idfc_wealth');

Route::post('idfc_wealth',[AdminController::class,'idfc_wealth'])->name('idfc_wealth');

Route::get('credit_card/idfc/edit_admin_idfc_wealth/{id}',[AdminController::class,'edit_admin_idfc_wealth'])->name('edit_admin_idfc_wealth');

//wow----------------------------------------------------------------------------------------------------------------

Route::get('credit_card/idfc/admin_idfc_wow_list',[AdminController::class,'admin_idfc_wow_list'])->name('admin_idfc_wow_list');

Route::get('credit_card/idfc/admin_idfc_wow',[AdminController::class,'admin_idfc_wow'])->name('admin_idfc_wow');

Route::get('credit_card/idfc/edit_admin_idfc_wow/{id}',[AdminController::class,'edit_admin_idfc_wow'])->name('edit_admin_idfc_wow');

Route::post('update_admin_idfc_wow/{id}',[AdminController::class,'update_admin_idfc_wow'])->name('update_admin_idfc_wow');

Route::get('delete_admin_idfc_wow/{id}',[AdminController::class,'delete_admin_idfc_wow'])->name('delete_admin_idfc_wow');

Route::post('idfc_wow',[AdminController::class,'idfc_wow'])->name('idfc_wow');

//=======================================@AU BANK================================================================================

//altura---------------------------------------------------------------------------------------------------------------

Route::get('credit_card/au/admin_au_altura_list',[AdminController::class,'admin_au_altura_list'])->name('admin_au_altura_list');

Route::get('credit_card/au/admin_au_altura_plus_list',[AdminController::class,'admin_au_altura_plus_list'])->name('admin_au_altura_plus_list');

Route::get('credit_card/au/edit_admin_au_altura/{id}',[AdminController::class,'edit_admin_au_altura'])->name('edit_admin_au_altura');

Route::post('update_admin_au_altura/{id}',[AdminController::class,'update_admin_au_altura'])->name('update_admin_au_altura');

Route::get('delete_au_altura/{id}',[AdminController::class,'delete_au_altura'])->name('delete_au_altura');

Route::post('au_altura',[AdminController::class,'au_altura'])->name('au_altura');

//aultra_plus---------------------------------------------------------------------------------------------------------------

Route::get('credit_card/au/admin_au_altura_plus',[AdminController::class,'admin_au_altura_plus'])->name('admin_au_altura_plus');

Route::get('credit_card/au/admin_au_altura',[AdminController::class,'admin_au_altura'])->name('admin_au_altura');

Route::get('credit_card/au/edit_admin_au_altura_plus/{id}',[AdminController::class,'edit_admin_au_altura_plus'])->name('edit_admin_au_altura_plus');

Route::post('update_au_altura_plus/{id}',[AdminController::class,'update_au_altura_plus'])->name('update_au_altura_plus');

Route::get('delete_au_altura_plus/{id}',[AdminController::class,'delete_au_altura_plus'])->name('delete_au_altura_plus');

Route::post('au_altura_plus',[AdminController::class,'au_altura_plus'])->name('au_altura_plus');

//au_lit---------------------------------------------------------------------------------------------------------------

Route::get('credit_card/au/admin_au_lit_list',[AdminController::class,'admin_au_lit_list'])->name('admin_au_lit_list');

Route::get('credit_card/au/admin_au_lit',[AdminController::class,'admin_au_lit'])->name('admin_au_lit');

Route::get('credit_card/au/edit_admin_au_lit/{id}',[AdminController::class,'edit_admin_au_lit'])->name('edit_admin_au_lit');

Route::post('update_admin_au_lit/{id}',[AdminController::class,'update_admin_au_lit'])->name('update_admin_au_lit');

Route::get('delete_au_lit/{id}',[AdminController::class,'delete_au_lit'])->name('delete_au_lit');

Route::post('au_lit',[AdminController::class,'au_lit'])->name('au_lit');

//au_vetta---------------------------------------------------------------------------------------------------------------

Route::get('credit_card/au/admin_au_vetta_list',[AdminController::class,'admin_au_vetta_list'])->name('admin_au_vetta_list');

Route::get('credit_card/au/admin_au_vetta',[AdminController::class,'admin_au_vetta'])->name('admin_au_vetta');

Route::get('credit_card/au/edit_admin_au_vetta/{id}',[AdminController::class,'edit_admin_au_vetta'])->name('edit_admin_au_vetta');

Route::post('update_admin_au_vetta/{id}',[AdminController::class,'update_admin_au_vetta'])->name('update_admin_au_vetta');

Route::get('delete_au_vetta/{id}',[AdminController::class,'delete_au_vetta'])->name('delete_au_vetta');

Route::post('au_vetta',[AdminController::class,'au_vetta'])->name('au_vetta');

//au_zenith---------------------------------------------------------------------------------------------------------------

Route::get('credit_card/au/admin_au_zenith_list',[AdminController::class,'admin_au_zenith_list'])->name('admin_au_zenith_list');

Route::get('credit_card/au/admin_au_zenith',[AdminController::class,'admin_au_zenith'])->name('admin_au_zenith');

Route::get('credit_card/au/edit_admin_au_zenith/{id}',[AdminController::class,'edit_admin_au_zenith'])->name('edit_admin_au_zenith');

Route::post('update_admin_au_zenith/{id}',[AdminController::class,'update_admin_au_zenith'])->name('update_admin_au_zenith');

Route::get('delete_au_zenith/{id}',[AdminController::class,'delete_au_zenith'])->name('delete_au_zenith');

Route::post('au_zenith',[AdminController::class,'au_zenith'])->name('au_zenith');

//=======================================@AMERICAN BANK================================================================================

//form----------------------------------------------------------------------------------------------------------------

Route::get('credit_card/american/admin_american_form_list',[AdminController::class,'admin_american_form_list'])->name('admin_american_form_list');

//admin_american_gold----------------------------------------------------------------------------------------------------------------

Route::get('credit_card/american/admin_american_gold_list',[AdminController::class,'admin_american_gold_list'])->name('admin_american_gold_list');

Route::get('credit_card/american/admin_american_gold',[AdminController::class,'admin_american_gold'])->name('admin_american_gold');

Route::get('credit_card/american/edit_admin_american_gold/{id}',[AdminController::class,'edit_admin_american_gold'])->name('edit_admin_american_gold');

Route::post('update_american_gold/{id}',[AdminController::class,'update_american_gold'])->name('update_american_gold');

Route::get('delete_american_gold/{id}',[AdminController::class,'delete_american_gold'])->name('delete_american_gold');

Route::post('american_gold',[AdminController::class,'american_gold'])->name('american_gold');

//admin_american_payback----------------------------------------------------------------------------------------------------------------

Route::get('credit_card/american/admin_american_payback_list',[AdminController::class,'admin_american_payback_list'])->name('admin_american_payback_list');

Route::get('credit_card/american/admin_american_payback',[AdminController::class,'admin_american_payback'])->name('admin_american_payback');

Route::get('credit_card/american/edit_american_payback/{id}',[AdminController::class,'edit_american_payback'])->name('edit_american_payback');

Route::post('update_american_payback/{id}',[AdminController::class,'update_american_payback'])->name('update_american_payback');

Route::get('delete_american_payback/{id}',[AdminController::class,'delete_american_payback'])->name('delete_american_payback');

Route::post('american_payback',[AdminController::class,'american_payback'])->name('american_payback');
 
//admin_american_smart_earn----------------------------------------------------------------------------------------------------------------

Route::get('credit_card/american/admin_american_smart_earn_list',[AdminController::class,'admin_american_smart_earn_list'])->name('admin_american_smart_earn_list');

Route::get('credit_card/american/admin_american_smart_earn',[AdminController::class,'admin_american_smart_earn'])->name('admin_american_smart_earn');

Route::get('credit_card/american/edit_admin_american_smart_earn/{id}',[AdminController::class,'edit_admin_american_smart_earn'])->name('edit_admin_american_smart_earn');

Route::post('update_admin_american_smart_earn/{id}',[AdminController::class,'update_admin_american_smart_earn'])->name('update_admin_american_smart_earn');

Route::get('delete_american_smart_earn/{id}',[AdminController::class,'delete_american_smart_earn'])->name('delete_american_smart_earn');

Route::post('american_smart_earn',[AdminController::class,'american_smart_earn'])->name('american_smart_earn');

//=======================================@INDUSIND BANK================================================================================

//admin_indusind_aura-----------------------------------------------------------------------------------------------

Route::get('credit_card/indusind/admin_indusind_aura_list',[AdminController::class,'admin_indusind_aura_list'])->name('admin_indusind_aura_list');

Route::get('credit_card/indusind/admin_indusind_aura',[AdminController::class,'admin_indusind_aura'])->name('admin_indusind_aura');

Route::get('credit_card/indusind/edit_admin_indusind_aura/{id}',[AdminController::class,'edit_admin_indusind_aura'])->name('edit_admin_indusind_aura');

Route::post('update_admin_indusind_aura/{id}',[AdminController::class,'update_admin_indusind_aura'])->name('update_admin_indusind_aura');

Route::get('delete_indusind_aura/{id}',[AdminController::class,'delete_indusind_aura'])->name('delete_indusind_aura');

Route::post('indusind_aura',[AdminController::class,'indusind_aura'])->name('indusind_aura');

//admin_indusind_british_airways-----------------------------------------------------------------------------------------------

Route::get('credit_card/indusind/admin_indusind_british_airways_list',[AdminController::class,'admin_indusind_british_airways_list'])->name('admin_indusind_british_airways_list');

Route::get('credit_card/indusind/admin_indusind_british_airways',[AdminController::class,'admin_indusind_british_airways'])->name('admin_indusind_british_airways');

Route::get('credit_card/indusind/edit_admin_indusind_british_airways/{id}',[AdminController::class,'edit_admin_indusind_british_airways'])->name('edit_admin_indusind_british_airways');

Route::post('update_admin_indusind_british_airways/{id}',[AdminController::class,'update_admin_indusind_british_airways'])->name('update_admin_indusind_british_airways');

Route::get('delete_indusind_british_airways/{id}',[AdminController::class,'delete_indusind_british_airways'])->name('delete_indusind_british_airways');

Route::post('indusind_british_airways',[AdminController::class,'indusind_british_airways'])->name('indusind_british_airways');

//admin_indusind_legend-----------------------------------------------------------------------------------------------

Route::get('credit_card/indusind/admin_indusind_legend_list',[AdminController::class,'admin_indusind_legend_list'])->name('admin_indusind_legend_list');

Route::get('credit_card/indusind/admin_indusind_legend',[AdminController::class,'admin_indusind_legend'])->name('admin_indusind_legend');

Route::get('credit_card/indusind/edit_admin_indusind_legend/{id}',[AdminController::class,'edit_admin_indusind_legend'])->name('edit_admin_indusind_legend');

Route::post('update_admin_indusind_legend/{id}',[AdminController::class,'update_admin_indusind_legend'])->name('update_admin_indusind_legend');

Route::get('delete_indusind_legend/{id}',[AdminController::class,'delete_indusind_legend'])->name('delete_indusind_legend');

Route::post('indusind_legend',[AdminController::class,'indusind_legend'])->name('indusind_legend');

//admin_indusind_nexxt-----------------------------------------------------------------------------------------------

Route::get('credit_card/indusind/admin_indusind_nexxt_list',[AdminController::class,'admin_indusind_nexxt_list'])->name('admin_indusind_nexxt_list');

Route::get('credit_card/indusind/admin_indusind_nexxt',[AdminController::class,'admin_indusind_nexxt'])->name('admin_indusind_nexxt');

Route::get('credit_card/indusind/edit_admin_indusind_nexxt/{id}',[AdminController::class,'edit_admin_indusind_nexxt'])->name('edit_admin_indusind_nexxt');

Route::post('update_admin_indusind_nexxt/{id}',[AdminController::class,'update_admin_indusind_nexxt'])->name('update_admin_indusind_nexxt');

Route::get('delete_indusind_nexxt/{id}',[AdminController::class,'delete_indusind_nexxt'])->name('delete_indusind_nexxt');

Route::post('indusind_nexxt',[AdminController::class,'indusind_nexxt'])->name('indusind_nexxt');

//admin_indusind_pinnacle-----------------------------------------------------------------------------------------------

Route::get('credit_card/indusind/admin_indusind_pinnacle_list',[AdminController::class,'admin_indusind_pinnacle_list'])->name('admin_indusind_pinnacle_list');

Route::get('credit_card/indusind/admin_indusind_pinnacle',[AdminController::class,'admin_indusind_pinnacle'])->name('admin_indusind_pinnacle');

Route::get('credit_card/indusind/edit_admin_indusind_pinnacle/{id}',[AdminController::class,'edit_admin_indusind_pinnacle'])->name('edit_admin_indusind_pinnacle');

Route::post('update_indusind_pinnacle/{id}',[AdminController::class,'update_indusind_pinnacle'])->name('update_indusind_pinnacle');

Route::get('delete_indusind_pinnacle/{id}',[AdminController::class,'delete_indusind_pinnacle'])->name('delete_indusind_pinnacle');

Route::post('indusind_pinnacle',[AdminController::class,'indusind_pinnacle'])->name('indusind_pinnacle');

//admin_indusind_platinum_visa-----------------------------------------------------------------------------------------------

Route::get('credit_card/indusind/admin_indusind_platinum_visa_list',[AdminController::class,'admin_indusind_platinum_visa_list'])->name('admin_indusind_platinum_visa_list');

Route::get('credit_card/indusind/admin_indusind_platinum_visa',[AdminController::class,'admin_indusind_platinum_visa'])->name('admin_indusind_platinum_visa');

Route::get('credit_card/indusind/edit_admin_indusind_platinum_visa/{id}',[AdminController::class,'edit_admin_indusind_platinum_visa'])->name('edit_admin_indusind_platinum_visa');

Route::post('update_admin_indusind_platinum_visa/{id}',[AdminController::class,'update_admin_indusind_platinum_visa'])->name('update_admin_indusind_platinum_visa');

Route::get('delete_indusind_platinum_visa/{id}',[AdminController::class,'delete_indusind_platinum_visa'])->name('delete_indusind_platinum_visa');

Route::post('indusind_platinum_visa',[AdminController::class,'indusind_platinum_visa'])->name('indusind_platinum_visa');

//admin_indusind_qatar_airways-----------------------------------------------------------------------------------------------

Route::get('credit_card/indusind/admin_indusind_qatar_airways_list',[AdminController::class,'admin_indusind_qatar_airways_list'])->name('admin_indusind_qatar_airways_list');

Route::get('credit_card/indusind/admin_indusind_qatar_airways',[AdminController::class,'admin_indusind_qatar_airways'])->name('admin_indusind_qatar_airways');

Route::get('credit_card/indusind/edit_admin_indusind_qatar_airways/{id}',[AdminController::class,'edit_admin_indusind_qatar_airways'])->name('edit_admin_indusind_qatar_airways');

Route::post('update_admin_indusind_qatar_airways/{id}',[AdminController::class,'update_admin_indusind_qatar_airways'])->name('update_admin_indusind_qatar_airways');

Route::get('delete_indusind_qatar_airways/{id}',[AdminController::class,'delete_indusind_qatar_airways'])->name('delete_indusind_qatar_airways');

Route::post('indusind_qatar_airways',[AdminController::class,'indusind_qatar_airways'])->name('indusind_qatar_airways');

//indusind_rupay_platinum-----------------------------------------------------------------------------------------------

Route::get('credit_card/indusind/admin_indusind_rupay_platinum_list',[AdminController::class,'admin_indusind_rupay_platinum_list'])->name('admin_indusind_rupay_platinum_list');

Route::get('credit_card/indusind/admin_indusind_rupay_platinum',[AdminController::class,'admin_indusind_rupay_platinum'])->name('admin_indusind_rupay_platinum');

Route::get('credit_card/indusind/edit_admin_indusind_rupay_platinum/{id}',[AdminController::class,'edit_admin_indusind_rupay_platinum'])->name('edit_admin_indusind_rupay_platinum');

Route::post('update_admin_indusind_rupay_platinum/{id}',[AdminController::class,'update_admin_indusind_rupay_platinum'])->name('update_admin_indusind_rupay_platinum');

Route::get('delete_indusind_rupay_platinum/{id}',[AdminController::class,'delete_indusind_rupay_platinum'])->name('delete_indusind_rupay_platinum');

Route::post('indusind_rupay_platinum',[AdminController::class,'indusind_rupay_platinum'])->name('indusind_rupay_platinum');
 
//=============================================@HSBC BANK================================================================================

//admin_hsbc_cashback-----------------------------------------------------------------------------------------------

Route::get('credit_card/hsbc/admin_hsbc_cashback',[AdminController::class,'admin_hsbc_cashback'])->name('admin_hsbc_cashback');

Route::get('credit_card/hsbc/admin_hsbc_cashback_list',[AdminController::class,'admin_hsbc_cashback_list'])->name('admin_hsbc_cashback_list');

Route::get('credit_card/indusind/edit_admin_hsbc_cashback/{id}',[AdminController::class,'edit_hsbc_cashback'])->name('edit_hsbc_cashback');

Route::post('update_hsbc_cashback/{id}',[AdminController::class,'update_hsbc_cashback'])->name('update_hsbc_cashback');

Route::get('delete_hsbc_cashback/{id}',[AdminController::class,'delete_hsbc_cashback'])->name('delete_hsbc_cashback');

Route::post('hsbc_cashback',[AdminController::class,'hsbc_cashback'])->name('hsbc_cashback');

//admin_hsbc_premier-----------------------------------------------------------------------------------------------

Route::get('credit_card/hsbc/admin_hsbc_premier_list',[AdminController::class,'admin_hsbc_premier_list'])->name('admin_hsbc_premier_list');

Route::get('credit_card/hsbc/admin_hsbc_premier',[AdminController::class,'admin_hsbc_premier'])->name('admin_hsbc_premier');

Route::get('credit_card/indusind/edit_admin_hsbc_premier/{id}',[AdminController::class,'edit_hsbc_premier'])->name('edit_hsbc_premier');

Route::post('update_hsbc_premier/{id}',[AdminController::class,'update_hsbc_premier'])->name('update_hsbc_premier');

Route::get('delete_hsbc_premier/{id}',[AdminController::class,'delete_hsbc_premier'])->name('delete_hsbc_premier');

Route::post('hsbc_premier',[AdminController::class,'hsbc_premier'])->name('hsbc_premier');

//admin_hsbc_smart_value-----------------------------------------------------------------------------------------------

Route::get('credit_card/hsbc/admin_hsbc_smart_value_list',[AdminController::class,'admin_hsbc_smart_value_list'])->name('admin_hsbc_smart_value_list');

Route::get('credit_card/hsbc/admin_hsbc_smart_value',[AdminController::class,'admin_hsbc_smart_value'])->name('admin_hsbc_smart_value');

Route::get('credit_card/indusind/edit_admin_hsbc_smart_value/{id}',[AdminController::class,'edit_hsbc_smart_value'])->name('edit_hsbc_smart_value');

Route::post('update_hsbc_smart_value/{id}',[AdminController::class,'update_hsbc_smart_value'])->name('update_hsbc_smart_value');

Route::get('delete_hsbc_smart_value/{id}',[AdminController::class,'delete_hsbc_smart_value'])->name('delete_hsbc_smart_value');

Route::post('admin_hsbc_smart_value',[AdminController::class,'admin_hsbc_smart_value'])->name('admin_hsbc_smart_value');

//hsbc_visa_platinum-----------------------------------------------------------------------------------------------

Route::get('credit_card/hsbc/admin_hsbc_visa_platinum_list',[AdminController::class,'admin_hsbc_visa_platinum_list'])->name('admin_hsbc_visa_platinum_list');

Route::get('credit_card/hsbc/admin_hsbc_visa_platinum',[AdminController::class,'admin_hsbc_visa_platinum'])->name('admin_hsbc_visa_platinum');

Route::get('credit_card/indusind/edit_admin_hsbc_visa_platinum/{id}',[AdminController::class,'edit_hsbc_visa_platinum'])->name('edit_hsbc_visa_platinum');

Route::post('update_hsbc_visa_platinum/{id}',[AdminController::class,'update_hsbc_visa_platinum'])->name('update_hsbc_visa_platinum');

Route::get('delete_hsbc_visa_platinum/{id}',[AdminController::class,'delete_hsbc_visa_platinum'])->name('delete_hsbc_visa_platinum');

Route::post('hsbc_visa_platinum',[AdminController::class,'hsbc_visa_platinum'])->name('hsbc_visa_platinum');

//==============================================@YES BANK===================================================================

Route::get('credit_card/yes/admin_yes_ace_list',[AdminController::class,'admin_yes_ace_list'])->name('admin_yes_ace_list');

Route::get('credit_card/yes/admin_yes_ace',[AdminController::class,'admin_yes_ace'])->name('admin_yes_ace');

Route::get('credit_card/yes/admin_yes_elite_plus_list',[AdminController::class,'admin_yes_elite_plus_list'])->name('admin_yes_elite_plus_list');

Route::get('credit_card/yes/admin_yes_elite_plus',[AdminController::class,'admin_yes_elite_plus'])->name('admin_yes_elite_plus');

Route::get('credit_card/yes/admin_yes_first_business_list',[AdminController::class,'admin_yes_first_business_list'])->name('admin_yes_first_business_list');

Route::get('credit_card/yes/admin_yes_first_business',[AdminController::class,'admin_yes_first_business'])->name('admin_yes_first_business');

Route::get('credit_card/yes/admin_yes_first_list',[AdminController::class,'admin_yes_first_list'])->name('admin_yes_first_list');

Route::get('credit_card/yes/admin_yes_first',[AdminController::class,'admin_yes_first'])->name('admin_yes_first');

Route::get('credit_card/yes/admin_yes_form_list',[AdminController::class,'admin_yes_form_list'])->name('admin_yes_form_list');

Route::get('credit_card/yes/admin_yes_marquee_list',[AdminController::class,'admin_yes_marquee_list'])->name('admin_yes_marquee_list');

Route::get('credit_card/yes/admin_yes_marquee',[AdminController::class,'admin_yes_marquee'])->name('admin_yes_marquee');

Route::get('credit_card/yes/admin_yes_properity_cashback_list',[AdminController::class,'admin_yes_properity_cashback_list'])->name('admin_yes_properity_cashback_list');

Route::get('credit_card/yes/admin_yes_properity_cashback',[AdminController::class,'admin_yes_properity_cashback'])->name('admin_yes_properity_cashback');

Route::get('credit_card/yes/admin_yes_prosperity_list',[AdminController::class,'admin_yes_prosperity_list'])->name('admin_yes_prosperity_list');

Route::get('credit_card/yes/admin_yes_prosperity',[AdminController::class,'admin_yes_prosperity'])->name('admin_yes_prosperity');

Route::get('credit_card/yes/admin_yes_reserve_list',[AdminController::class,'admin_yes_reserve_list'])->name('admin_yes_reserve_list');

Route::get('credit_card/yes/admin_yes_reserve',[AdminController::class,'admin_yes_reserve'])->name('admin_yes_reserve');

Route::get('credit_card/yes/admin_yes_select_list',[AdminController::class,'admin_yes_select_list'])->name('admin_yes_select_list');

Route::get('credit_card/yes/admin_yes_select',[AdminController::class,'admin_yes_select'])->name('admin_yes_select');

//======================================@KOTAK BANK=======================================================================

Route::get('kotak/admin_kotak_6e_reward_list',[AdminController::class,'admin_kotak_6e_reward_list'])->name('admin_kotak_6e_reward_list');

Route::get('kotak/admin_kotak_6e_reward_xl_list',[AdminController::class,'admin_kotak_6e_reward_xl_list'])->name('admin_kotak_6e_reward_xl_list');

Route::get('kotak/admin_kotak_6e_reward_xl',[AdminController::class,'admin_kotak_6e_reward_xl'])->name('admin_kotak_6e_reward_xl');

Route::get('kotak/admin_kotak_6e_reward',[AdminController::class,'admin_kotak_6e_reward'])->name('admin_kotak_6e_reward');

Route::get('kotak/admin_kotak_811_list',[AdminController::class,'admin_kotak_811_list'])->name('admin_kotak_811_list');

Route::get('kotak/admin_kotak_811',[AdminController::class,'admin_kotak_811'])->name('admin_kotak_811');

Route::get('kotak/admin_kotak_form_list',[AdminController::class,'admin_kotak_form_list'])->name('admin_kotak_form_list');

Route::get('kotak/admin_kotak_india_oil_list',[AdminController::class,'admin_kotak_india_oil_list'])->name('admin_kotak_india_oil_list');

Route::get('kotak/admin_kotak_india_oil',[AdminController::class,'admin_kotak_india_oil'])->name('admin_kotak_india_oil');

Route::get('kotak/admin_kotak_league_platinum_list',[AdminController::class,'admin_kotak_league_platinum_list'])->name('admin_kotak_league_platinum_list');

Route::get('kotak/admin_kotak_league_platinum',[AdminController::class,'admin_kotak_league_platinum'])->name('admin_kotak_league_platinum');

Route::get('kotak/admin_kotak_myntra_list',[AdminController::class,'admin_kotak_myntra_list'])->name('admin_kotak_myntra_list');

Route::get('kotak/admin_kotak_myntra',[AdminController::class,'admin_kotak_myntra'])->name('admin_kotak_myntra');

Route::get('kotak/admin_kotak_royal_signature_list',[AdminController::class,'admin_kotak_royal_signature_list'])->name('admin_kotak_royal_signature_list');

Route::get('kotak/admin_kotak_royal_signature',[AdminController::class,'admin_kotak_royal_signature'])->name('admin_kotak_royal_signature');

Route::get('kotak/admin_kotak_urbane_gold_list',[AdminController::class,'admin_kotak_urbane_gold_list'])->name('admin_kotak_urbane_gold_list');

Route::get('kotak/admin_kotak_urbane_gold',[AdminController::class,'admin_kotak_urbane_gold'])->name('admin_kotak_urbane_gold');

Route::get('kotak/admin_kotak_white_reserve_list',[AdminController::class,'admin_kotak_white_reserve_list'])->name('admin_kotak_white_reserve_list');

Route::get('kotak/admin_kotak_white_reserve',[AdminController::class,'admin_kotak_white_reserve'])->name('admin_kotak_white_reserve');

Route::get('kotak/admin_kotak_zen_signature_list',[AdminController::class,'admin_kotak_zen_signature_list'])->name('admin_kotak_zen_signature_list');

Route::get('kotak/admin_kotak_zen_signature',[AdminController::class,'admin_kotak_zen_signature'])->name('admin_kotak_zen_signature');

//======================================@ICICI BANK=========================================================================

Route::get('credit_card/icici/admin_icici_coral_list',[AdminController::class,'admin_icici_coral_list'])->name('admin_icici_coral_list');

Route::get('credit_card/icici/admin_icici_coral',[AdminController::class,'admin_icici_coral'])->name('admin_icici_coral');

Route::get('credit_card/icici/admin_icici_emeralde_list',[AdminController::class,'admin_icici_emeralde_list'])->name('admin_icici_emeralde_list');

Route::get('credit_card/icici/admin_icici_emeralde_private_list',[AdminController::class,'admin_icici_emeralde_private_list'])->name('admin_icici_emeralde_private_list');

Route::get('credit_card/icici/admin_icici_emeralde_private',[AdminController::class,'admin_icici_emeralde_private'])->name('admin_icici_emeralde_private');

Route::get('credit_card/icici/admin_icici_emeralde',[AdminController::class,'admin_icici_emeralde'])->name('admin_icici_emeralde');

Route::get('credit_card/icici/admin_icici_form_list',[AdminController::class,'admin_icici_form_list'])->name('admin_icici_form_list');

Route::get('credit_card/icici/admin_icici_manchester_united_platinum_list',[AdminController::class,'admin_icici_manchester_united_platinum_list'])->name('admin_icici_manchester_united_platinum_list');

Route::get('credit_card/icici/admin_icici_manchester_united_platinum',[AdminController::class,'admin_icici_manchester_united_platinum'])->name('admin_icici_manchester_united_platinum');

Route::get('credit_card/icici/admin_icici_manchester_united_signature_list',[AdminController::class,'admin_icici_manchester_united_signature_list'])->name('admin_icici_manchester_united_signature_list');

Route::get('credit_card/icici/admin_icici_manchester_united_signature',[AdminController::class,'admin_icici_manchester_united_signature'])->name('admin_icici_manchester_united_signature');

Route::get('credit_card/icici/admin_icici_platinum_list',[AdminController::class,'admin_icici_platinum_list'])->name('admin_icici_platinum_list');

Route::get('credit_card/icici/admin_icici_platinum',[AdminController::class,'admin_icici_platinum'])->name('admin_icici_platinum');

Route::get('credit_card/icici/admin_icici_rubyx_list',[AdminController::class,'admin_icici_rubyx_list'])->name('admin_icici_rubyx_list');

Route::get('credit_card/icici/admin_icici_rubyx',[AdminController::class,'admin_icici_rubyx'])->name('admin_icici_rubyx');

Route::get('credit_card/icici/admin_icici_sapphiro_list',[AdminController::class,'admin_icici_sapphiro_list'])->name('admin_icici_sapphiro_list');

Route::get('credit_card/icici/admin_icici_sapphiro',[AdminController::class,'admin_icici_sapphiro'])->name('admin_icici_sapphiro');

//=============================================@STANDARD BANK===================================================================

Route::get('credit_card/standard/admin_standard_digismart_list',[AdminController::class,'admin_standard_digismart_list'])->name('admin_standard_digismart_list');

Route::get('credit_card/standard/admin_standard_digismart',[AdminController::class,'admin_standard_digismart'])->name('admin_standard_digismart');

Route::get('credit_card/standard/admin_standard_form_list',[AdminController::class,'admin_standard_form_list'])->name('admin_standard_form_list');

Route::get('credit_card/standard/admin_standard_mahattan_list',[AdminController::class,'admin_standard_mahattan_list'])->name('admin_standard_mahattan_list');

Route::get('credit_card/standard/admin_standard_mahattan',[AdminController::class,'admin_standard_mahattan'])->name('admin_standard_mahattan');

Route::get('credit_card/standard/admin_standard_platinum_reward_list',[AdminController::class,'admin_standard_platinum_reward_list'])->name('admin_standard_platinum_reward_list');

Route::get('credit_card/standard/admin_standard_platinum_reward',[AdminController::class,'admin_standard_platinum_reward'])->name('admin_standard_platinum_reward');

Route::get('credit_card/standard/admin_standard_priority_visa_list',[AdminController::class,'admin_standard_priority_visa_list'])->name('admin_standard_priority_visa_list');

Route::get('credit_card/standard/admin_standard_priority_visa',[AdminController::class,'admin_standard_priority_visa'])->name('admin_standard_priority_visa');

Route::get('credit_card/standard/admin_standard_super_value_list',[AdminController::class,'admin_standard_super_value_list'])->name('admin_standard_super_value_list');

Route::get('credit_card/standard/admin_standard_super_value',[AdminController::class,'admin_standard_super_value'])->name('admin_standard_super_value');

Route::get('credit_card/standard/admin_standard_ultimate_list',[AdminController::class,'admin_standard_ultimate_list'])->name('admin_standard_ultimate_list');

Route::get('credit_card/standard/admin_standard_ultimate',[AdminController::class,'admin_standard_ultimate'])->name('admin_standard_ultimate');


//---------------------------------------------------@ LOAN --------------------------------------------------------------------

//=================================================@PERSONAL LOAN==================================================================

Route::get('loan/perosnal/admin_personal_loan_list',[AdminController::class,'admin_personal_loan_list'])->name('admin_personal_loan_list');

//=================================================@BUSINESS LOAN==================================================================

Route::get('loan/business/admin_business_loan_list',[AdminController::class,'admin_business_loan_list'])->name('admin_business_loan_list');

//=================================================@HOME LOAN==================================================================

Route::get('loan/home/admin_home_loan_list',[AdminController::class,'admin_home_loan_list'])->name('admin_home_loan_list');

//=================================================@HOME LOAN==================================================================

Route::get('loan/loan_against_property/admin_loan_against_property_list',[AdminController::class,'admin_loan_against_property_list'])->name('admin_loan_against_property_list');

Route::get('loan/loan_against_property/admin_loan_against_property',[AdminController::class,'admin_loan_against_property'])->name('admin_loan_against_property');

//=================================================@HOME LOAN==================================================================

Route::get('loan/gold/admin_gold_loan_list',[AdminController::class,'admin_gold_loan_list'])->name('admin_gold_loan_list');

Route::get('loan/gold/admin_gold_loan',[AdminController::class,'admin_gold_loan'])->name('admin_gold_loan');

//---------------------------------------------------@ INSURANCE --------------------------------------------------------------------

//=================================================@HEALTH INSURANCE=================================================================

Route::get('insurance/health/admin_health_aditya_birla_list',[AdminController::class,'admin_health_aditya_birla_list'])->name('admin_health_aditya_birla_list');

Route::get('insurance/health/admin_health_aditya_birla',[AdminController::class,'admin_health_aditya_birla'])->name('admin_health_aditya_birla');

Route::get('insurance/health/admin_health_core_list',[AdminController::class,'admin_health_core_list'])->name('admin_health_core_list');

Route::get('insurance/health/admin_health_core',[AdminController::class,'admin_health_core'])->name('admin_health_core');

Route::get('insurance/health/admin_health_future_list',[AdminController::class,'admin_health_future_list'])->name('admin_health_future_list');

Route::get('insurance/health/admin_health_future',[AdminController::class,'admin_health_future'])->name('admin_health_future');

Route::get('insurance/health/admin_health_godigital_list',[AdminController::class,'admin_health_godigital_list'])->name('admin_health_godigital_list');

Route::get('insurance/health/admin_health_godigital',[AdminController::class,'admin_health_godigital'])->name('admin_health_godigital');

Route::get('insurance/health/admin_health_hdfc_ergo',[AdminController::class,'admin_health_hdfc_ergo'])->name('admin_health_hdfc_ergo');

Route::get('insurance/health/admin_health_hdfc_ergo_list',[AdminController::class,'admin_health_hdfc_ergo_list'])->name('admin_health_hdfc_ergo_list');

Route::get('insurance/health/admin_health_icici_lomboard_list',[AdminController::class,'admin_health_icici_lomboard_list'])->name('admin_health_icici_lomboard_list');

Route::get('insurance/health/admin_health_icici_lomboard',[AdminController::class,'admin_health_icici_lomboard'])->name('admin_health_icici_lomboard');

Route::get('insurance/health/admin_health_max_bupa_list',[AdminController::class,'admin_health_max_bupa_list'])->name('admin_health_max_bupa_list');

Route::get('insurance/health/admin_health_max_bupa',[AdminController::class,'admin_health_max_bupa'])->name('admin_health_max_bupa');

Route::get('insurance/health/admin_health_reliance_list',[AdminController::class,'admin_health_reliance_list'])->name('admin_health_reliance_list');

Route::get('insurance/health/admin_health_reliance',[AdminController::class,'admin_health_reliance'])->name('admin_health_reliance');

Route::get('insurance/health/admin_health_sbi_general_list',[AdminController::class,'admin_health_sbi_general_list'])->name('admin_health_sbi_general_list');

Route::get('insurance/health/admin_health_sbi_general',[AdminController::class,'admin_health_sbi_general'])->name('admin_health_sbi_general');

Route::get('insurance/health/admin_health_tata_aig_list',[AdminController::class,'admin_health_tata_aig_list'])->name('admin_health_tata_aig_list');

Route::get('insurance/health/admin_health_tata_aig',[AdminController::class,'admin_health_tata_aig'])->name('admin_health_tata_aig');

//=================================================@LIFE INSURANCE=================================================================

Route::get('insurance/life/admin_life_bajaj_allianz_list',[AdminController::class,'admin_life_bajaj_allianz_list'])->name('admin_life_bajaj_allianz_list');

Route::get('insurance/life/admin_life_bajaj_allianz',[AdminController::class,'admin_life_bajaj_allianz'])->name('admin_life_bajaj_allianz');

Route::get('insurance/life/admin_life_bharti_axa_list',[AdminController::class,'admin_life_bharti_axa_list'])->name('admin_life_bharti_axa_list');

Route::get('insurance/life/admin_life_bharti_axa',[AdminController::class,'admin_life_bharti_axa'])->name('admin_life_bharti_axa');

Route::get('insurance/life/admin_life_hdfc_list',[AdminController::class,'admin_life_hdfc_list'])->name('admin_life_hdfc_list');

Route::get('insurance/life/admin_life_hdfc',[AdminController::class,'admin_life_hdfc'])->name('admin_life_hdfc');

Route::get('insurance/life/admin_life_icici_list',[AdminController::class,'admin_life_icici_list'])->name('admin_life_icici_list');

Route::get('insurance/life/admin_life_icici',[AdminController::class,'admin_life_icici'])->name('admin_life_icici');

Route::get('insurance/life/admin_life_kotak_list',[AdminController::class,'admin_life_kotak_list'])->name('admin_life_kotak_list');

Route::get('insurance/life/admin_life_kotak',[AdminController::class,'admin_life_kotak'])->name('admin_life_kotak');

Route::get('insurance/life/admin_life_max_list',[AdminController::class,'admin_life_max_list'])->name('admin_life_max_list');

Route::get('insurance/life/admin_life_max',[AdminController::class,'admin_life_max'])->name('admin_life_max');

Route::get('insurance/life/admin_life_sbi_list',[AdminController::class,'admin_life_sbi_list'])->name('admin_life_sbi_list');

Route::get('insurance/life/admin_life_sbi',[AdminController::class,'admin_life_sbi'])->name('admin_life_sbi');

//=================================================@GENERAL INSURANCE=================================================================

Route::get('insurance/general/admin_general_bike_list',[AdminController::class,'admin_general_bike_list'])->name('admin_general_bike_list');

Route::get('insurance/general/admin_general_bike',[AdminController::class,'admin_general_bike'])->name('admin_general_bike');

Route::get('insurance/general/admin_general_car_list',[AdminController::class,'admin_general_car_list'])->name('admin_general_car_list');

Route::get('insurance/general/admin_general_car',[AdminController::class,'admin_general_car'])->name('admin_general_car');

Route::get('insurance/general/admin_general_motor_list',[AdminController::class,'admin_general_motor_list'])->name('admin_general_motor_list');

Route::get('insurance/general/admin_general_motor',[AdminController::class,'admin_general_motor'])->name('admin_general_motor');

Route::get('insurance/general/admin_general_travel_list',[AdminController::class,'admin_general_travel_list'])->name('admin_general_travel_list');

Route::get('insurance/general/admin_general_travel',[AdminController::class,'admin_general_travel'])->name('admin_general_travel');

//--------------------------------------------@INSTANT LOAN--------------------------------------------------------------------------------

Route::get('insurance/instant_loan/admin_hdfc_xpress_loan_list',[AdminController::class,'admin_hdfc_xpress_loan_list'])->name('admin_hdfc_xpress_loan_list');

Route::get('insurance/instant_loan/admin_hdfc_xpress_loan',[AdminController::class,'admin_hdfc_xpress_loan'])->name('admin_hdfc_xpress_loan');

Route::get('insurance/instant_loan/admin_insta_loan_list',[AdminController::class,'admin_insta_loan_list'])->name('admin_insta_loan_list');

Route::get('insurance/instant_loan/admin_insta_loan',[AdminController::class,'admin_insta_loan'])->name('admin_insta_loan');

Route::get('insurance/instant_loan/admin_jumbo_loan_list',[AdminController::class,'admin_jumbo_loan_list'])->name('admin_jumbo_loan_list');

Route::get('insurance/instant_loan/admin_jumbo_loan',[AdminController::class,'admin_jumbo_loan'])->name('admin_jumbo_loan');

Route::get('insurance/instant_loan/admin_smart_emi_loan_list',[AdminController::class,'admin_smart_emi_loan_list'])->name('admin_smart_emi_loan_list');

Route::get('insurance/instant_loan/admin_smart_emi_loan',[AdminController::class,'admin_smart_emi_loan'])->name('admin_smart_emi_loan');

//--------------------------------------------@BLOG--------------------------------------------------------------------------------

Route::get('blog/admin_blog_list',[AdminController::class,'admin_blog_list'])->name('admin_blog_list');

Route::get('blog/edit_admin_blog/{id}',[AdminController::class,'edit_admin_blog'])->name('edit_admin_blog');

Route::post('/edit_blog/{id}',[AdminController::class,'edit_blog'])->name('edit_blog');

Route::get('/blog_delete/{id}',[AdminController::class,'blog_delete'])->name('blog_delete');

Route::get('blog/admin_blog',[AdminController::class,'admin_blog'])->name('admin_blog');

Route::post('bloged',[AdminController::class,'bloged'])->name('bloged');

//--------------------------------------------@DOCUMENT--------------------------------------------------------------------------------

Route::get('document/admin_documentation_list',[AdminController::class,'admin_documentation_list'])->name('admin_documentation_list');

Route::get('document/admin_documentation',[AdminController::class,'admin_documentation'])->name('admin_documentation');

//--------------------------------------------@create_team--------------------------------------------------------------------------------

Route::get('create_team/admin_create_team_list',[AdminController::class,'admin_create_team_list'])->name('admin_create_team_list');

Route::post('create_team',[AdminController::class,'create_team'])->name('create_team');

Route::get('/delete_team/{id}',[AdminController::class,'delete_team'])->name('delete_team');

Route::get('admin_body/create_team/edit_team/{id}',[AdminController::class,'edit_team'])->name('edit_team');

Route::post('update_team/{id}',[AdminController::class,'update_team'])->name('update_team');

Route::get('create_team/admin_create_team',[AdminController::class,'admin_create_team'])->name('admin_create_team');

//--------------------------------------------@HSBC TEAM--------------------------------------------------------------------------------

Route::get('hsbc_team/admin_hsbc_bank_upload_form_list',[AdminController::class,'admin_hsbc_bank_upload_form_list'])->name('admin_hsbc_bank_upload_form_list');

Route::get('hsbc_team/admin_hsbc_bank_upload_form',[AdminController::class,'admin_hsbc_bank_upload_form'])->name('admin_hsbc_bank_upload_form');

//----------------------------------------------@CATEGORY----------------------------------------------------------------------------------

Route::get('admin_body/category',[AdminController::class,'category'])->name('category');

Route::post('categories',[AdminController::class,'categories'])->name('categories');

Route::get('admin_body/category_list',[AdminController::class,'category_list'])->name('category_list');


//update

Route::get('admin_body/edit/{id}',[AdminController::class,'edit'])->name('edit');

Route::post('/admin_body/updatefunction',[AdminController::class,'updatefunction'])->name('updatefunction'); 

//delete

Route::get('/delete/{id}',[AdminController::class,'delete'])->name('delete');

//===============================================@Sub Category==============================================================================

Route::get('admin_body/sub_category',[AdminController::class,'sub_category'])->name('sub_category');

Route::post('admin_body/sub_category',[AdminController::class,'sub_categories'])->name('sub_category');

//===============================================@login=====================================================================================

Route::get('login',[MainController::class,'login'])->name('login');

Route::post('logedin',[MainController::class,'logedin'])->name('logedin');

Route::get('logout',[MainController::class,'logout'])->name('logout');

