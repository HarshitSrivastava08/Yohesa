<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="menu-item treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route('admin')}}"><i class="fa fa-circle-o"></i> Dashboard</a></li>
                </ul>
            </li>
            <li class="menu-item treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Manage Employee</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('employee_registration')}}"><i class="fa fa-circle-o"></i>  MANAGE EMPLOYEE</a></li>
                    <li><a href="{{route('employee_registration_list')}}"><i class="fa fa-circle-o"></i> MANAGE EMPLOYEE LIST</a></li>
                </ul>
            </li>
            <li class="header" style="color:white;">CREDIT CARDS</li>
            <li class="menu-item treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>HDFC BANK CARDS</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin_hdfc_freedom')}}"><i class="fa fa-circle-o"></i>ADD Freedom Credit
                            Card</a></li>
                    <li><a href="{{route('admin_hdfc_freedom_list')}}"><i class="fa fa-circle-o"></i>Freedom Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_hdfc_indial_oil')}}"><i class="fa fa-circle-o"></i>ADD IndianOil Credit
                            Card</a></li>
                    <li><a href="{{route('admin_hdfc_indial_oil_list')}}"><i class="fa fa-circle-o"></i>IndianOil Credit
                            Card LIST</a></li>
                    <li><a href="{{route('admin_hdfc_moneyback')}}"><i class="fa fa-circle-o"></i>ADD MoneyBack Credit
                            Card</a></li>
                    <li><a href="{{route('admin_hdfc_moneyback_list')}}"><i class="fa fa-circle-o"></i>MoneyBack Credit
                            Card LIST</a></li>
                    <li><a href="{{route('admin_hdfc_regalia')}}"><i class="fa fa-circle-o"></i>ADD Regalia Credit
                            Card</a></li>
                    <li><a href="{{route('admin_hdfc_regalia_list')}}"><i class="fa fa-circle-o"></i>Regalia Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_hdfc_upi_rupay')}}"><i class="fa fa-circle-o"></i>ADD UPI Rupay Credit
                            Card</a></li>
                    <li><a href="{{route('admin_hdfc_upi_rupay_list')}}"><i class="fa fa-circle-o"></i>UPI Rupay Credit
                            Card LIST</a></li>
                    <li><a href="{{route('admin_hdfc_infinia')}}"><i class="fa fa-circle-o"></i>ADD Infinia Credit
                            Card</a></li>
                    <li><a href="{{route('admin_hdfc_infinia_list')}}"><i class="fa fa-circle-o"></i>Infinia Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_hdfc_millennia')}}"><i class="fa fa-circle-o"></i>ADD Millennia Credit
                            Card</a></li>
                    <li><a href="{{route('admin_hdfc_millennia_list')}}"><i class="fa fa-circle-o"></i>Millennia Credit
                            Card LIST</a></li>
                    <li><a href="{{route('admin_hdfc_moneyback_plus')}}"><i class="fa fa-circle-o"></i>ADD MoneyBack+
                            Credit Card</a></li>
                    <li><a href="{{route('admin_hdfc_moneyback_plus_list')}}"><i class="fa fa-circle-o"></i>MoneyBack+
                            Credit Card LIST</a></li>
                    <li><a href="{{route('admin_hdfc_biz_first')}}"><i class="fa fa-circle-o"></i>ADD HDFC BIZ First
                            Rupaey</a></li>
                    <li><a href="{{route('admin_hdfc_biz_first_list')}}"><i class="fa fa-circle-o"></i>HDFC BIZ First
                            Rupaey LIST</a></li>
                    <li><a href="{{route('admin_hdfc_giga_business')}}"><i class="fa fa-circle-o"></i>ADD HDFC GIGA
                            Business</a></li>
                    <li><a href="{{route('admin_hdfc_giga_business_list')}}"><i class="fa fa-circle-o"></i>HDFC GIGA
                            Business LIST</a></li>
                    <li><a href="{{route('admin_hdfc_biz_grow')}}"><i class="fa fa-circle-o"></i>ADD HDFC BIZ Grow</a>
                    </li>
                    <li><a href="{{route('admin_hdfc_biz_grow_list')}}"><i class="fa fa-circle-o"></i>HDFC BIZ Grow
                            LIST</a></li>
                    <li><a href="{{route('admin_hdfc_6e_reward')}}"><i class="fa fa-circle-o"></i>ADD HDFC 6E
                            Rewards</a></li>
                    <li><a href="{{route('admin_hdfc_6e_reward_list')}}"><i class="fa fa-circle-o"></i>HDFC 6E Rewards
                            LIST</a></li>
                    <li><a href="{{route('admin_hdfc_6e_reward_xl')}}"><i class="fa fa-circle-o"></i>ADD HDFC 6E Reward
                            XL</a></li>
                    <li><a href="{{route('admin_hdfc_6e_reward_xl_list')}}"><i class="fa fa-circle-o"></i>HDFC 6E Reward
                            XL LIST</a></li>
                    <li><a href="{{route('admin_hdfc_diner_club')}}"><i class="fa fa-circle-o"></i>ADD HDFC DINER Club
                            Privilege</a></li>
                    <li><a href="{{route('admin_hdfc_diner_club_list')}}"><i class="fa fa-circle-o"></i>HDFC DINER Club
                            Privilege LIST</a></li>
                    <li><a href="{{route('admin_hdfc_swiggy_cc')}}"><i class="fa fa-circle-o"></i>ADD HDFC SWIGGY CC</a>
                    </li>
                    <li><a href="{{route('admin_hdfc_swiggy_cc_list')}}"><i class="fa fa-circle-o"></i>HDFC SWIGGY CC
                            LIST</a></li>
                    <li><a href="{{route('admin_hdfc_tata_neu_plus')}}"><i class="fa fa-circle-o"></i>ADD HDFC TATA Neu
                            Plus</a></li>
                    <li><a href="{{route('admin_hdfc_tata_neu_plus_list')}}"><i class="fa fa-circle-o"></i>HDFC TATA Neu
                            Plus LIST</a></li>
                    <li><a href="{{route('admin_hdfc_tata_neu_infinity')}}"><i class="fa fa-circle-o"></i>ADD HDFC TATA
                            Neu Infinity</a></li>
                    <li><a href="{{route('admin_hdfc_tata_neu_infinity_list')}}"><i class="fa fa-circle-o"></i>HDFC TATA
                            Neu Infinity LIST</a></li>
                    <li><a href="{{route('admin_hdfc_shopper_stop_black')}}"><i class="fa fa-circle-o"></i>ADD SHOPPERS
                            Stop Black</a></li>
                    <li><a href="{{route('admin_hdfc_shopper_stop_black_list')}}"><i class="fa fa-circle-o"></i>HDFC
                            SHOPPERS Stop LIST</a></li>
                    <li><a href="{{route('admin_hdfc_marriot_bonway')}}"><i class="fa fa-circle-o"></i>ADD Marriott
                            Bonway</a></li>
                    <li><a href="{{route('admin_hdfc_marriot_bonway_list')}}"><i class="fa fa-circle-o"></i>HDFC
                            Marriott Bonway LIST</a></li>
                    <li><a href="{{route('admin_hdfc_flipkart_wholesale')}}"><i class="fa fa-circle-o"></i>ADD HDFC
                            FLIPKART Wholesale</a></li>
                    <li><a href="{{route('admin_hdfc_flipkart_wholesale_list')}}"><i class="fa fa-circle-o"></i>HDFC
                            FLIPKART Wholesale LIST</a></li>
                </ul>
            </li>
            <li class="menu-item treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>AXIS BANK CARDS</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin_axis_airtel_credit_card')}}"><i class="fa fa-circle-o"></i>ADD Airtel
                            Credit Card</a></li>
                    <li><a href="{{route('admin_axis_airtel_credit_card_list')}}"><i class="fa fa-circle-o"></i>Airtel
                            Credit Card LIST</a></li>
                    <li><a href="{{route('admin_axis_lic_signature')}}"><i class="fa fa-circle-o"></i>ADD LIC Signature
                            Credit Card</a></li>
                    <li><a href="{{route('admin_axis_lic_signature_list')}}"><i class="fa fa-circle-o"></i>LIC Signature
                            Credit Card LIST</a></li>
                    <li><a href="{{route('admin_axis_select')}}"><i class="fa fa-circle-o"></i>ADD SELECT Credit
                            Card</a></li>
                    <li><a href="{{route('admin_axis_select_list')}}"><i class="fa fa-circle-o"></i>SELECT Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_axis_reward')}}"><i class="fa fa-circle-o"></i>ADD Reward Credit
                            Card</a></li>
                    <li><a href="{{route('admin_axis_reward_list')}}"><i class="fa fa-circle-o"></i>Reward Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_axis_neo')}}"><i class="fa fa-circle-o"></i>ADD Neo Credit Card</a></li>
                    <li><a href="{{route('admin_axis_neo_list')}}"><i class="fa fa-circle-o"></i>Neo Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_axis_my_zone')}}"><i class="fa fa-circle-o"></i>ADD My Zone Credit
                            Card</a></li>
                    <li><a href="{{route('admin_axis_my_zone_list')}}"><i class="fa fa-circle-o"></i>My Zone Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_axis_magnus')}}"><i class="fa fa-circle-o"></i>ADD Magnus Credit
                            Card</a></li>
                    <li><a href="{{route('admin_axis_magnus_list')}}"><i class="fa fa-circle-o"></i>Magnus Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_axis_ace')}}"><i class="fa fa-circle-o"></i>ADD Ace Credit Card</a></li>
                    <li><a href="{{route('admin_axis_ace_list')}}"><i class="fa fa-circle-o"></i>Ace Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_axis_platinum')}}"><i class="fa fa-circle-o"></i>ADD Platinum Credit
                            Card</a></li>
                    <li><a href="{{route('admin_axis_platinum_list')}}"><i class="fa fa-circle-o"></i>Platinum Credit
                            Card LIST</a></li>
                    <li><a href="{{route('admin_axis_indian_oil')}}"><i class="fa fa-circle-o"></i>ADD Indian Oil Credit
                            Card</a></li>
                    <li><a href="{{route('admin_axis_indian_oil_list')}}"><i class="fa fa-circle-o"></i>Indian Oil
                            Credit Card LIST</a></li>
                    <li><a href="{{route('admin_axis_flipkart')}}"><i class="fa fa-circle-o"></i>ADD Flipkart Credit
                            Card</a></li>
                    <li><a href="{{route('admin_axis_flipkart_list')}}"><i class="fa fa-circle-o"></i>Flipkart Credit
                            Card LIST</a></li>
                </ul>
            </li>
            <li class="menu-item treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>SBI BANK CARDS</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin_sbi_prime')}}"><i class="fa fa-circle-o"></i>ADD Prime Credit Card</a>
                    </li>
                    <li><a href="{{route('admin_sbi_prime_list')}}"><i class="fa fa-circle-o"></i>Prime Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_sbi_simply_click')}}"><i class="fa fa-circle-o"></i>ADD Simply Click
                            Credit Card</a></li>
                    <li><a href="{{route('admin_sbi_simply_click_list')}}"><i class="fa fa-circle-o"></i>Simply Click
                            Credit Card LIST</a></li>
                    <li><a href="{{route('admin_sbi_elite')}}"><i class="fa fa-circle-o"></i>ADD Elite Credit Card</a>
                    </li>
                    <li><a href="{{route('admin_sbi_elite_list')}}"><i class="fa fa-circle-o"></i>Elite Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_sbi_simply_save')}}"><i class="fa fa-circle-o"></i>ADD Simply Save
                            Credit Card</a></li>
                    <li><a href="{{route('admin_sbi_simply_save_list')}}"><i class="fa fa-circle-o"></i>Simply Save
                            Credit Card LIST</a></li>
                    <li><a href="{{route('admin_sbi_pulse')}}"><i class="fa fa-circle-o"></i>ADD Pulse Credit Card</a>
                    </li>
                    <li><a href="{{route('admin_sbi_pulse_list')}}"><i class="fa fa-circle-o"></i>Pulse Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_sbi_signature')}}"><i class="fa fa-circle-o"></i>ADD Signature Credit
                            Card</a></li>
                    <li><a href="{{route('admin_sbi_signature_list')}}"><i class="fa fa-circle-o"></i>Signature Credit
                            Card LIST</a></li>
                    <li><a href="{{route('admin_sbi_octane')}}"><i class="fa fa-circle-o"></i>ADD Octane Credit Card</a>
                    </li>
                    <li><a href="{{route('admin_sbi_octane_list')}}"><i class="fa fa-circle-o"></i>Octane Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_sbi_premier')}}"><i class="fa fa-circle-o"></i>ADD Premier Credit
                            Card</a></li>
                    <li><a href="{{route('admin_sbi_premier_list')}}"><i class="fa fa-circle-o"></i>Premier Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_sbi_form_list')}}"><i class="fa fa-circle-o"></i>SBI Bank Form LIST</a>
                    </li>
                </ul>
            </li>
            <li class="menu-item treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>IDFC BANK CARD</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin_idfc_wealth')}}"><i class="fa fa-circle-o"></i>ADD wealth Credit
                            Card</a></li>
                    <li><a href="{{route('admin_idfc_wealth_list')}}"><i class="fa fa-circle-o"></i>wealth Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_idfc_millenia')}}"><i class="fa fa-circle-o"></i>ADD MILLENNIA Credit
                            Card</a></li>
                    <li><a href="{{route('admin_idfc_millenia_list')}}"><i class="fa fa-circle-o"></i>MILLENNIA Credit
                            Card LIST</a></li>
                    <li><a href="{{route('admin_idfc_classic')}}"><i class="fa fa-circle-o"></i>ADD CLASSIC Credit
                            Card</a></li>
                    <li><a href="{{route('admin_idfc_classic_list')}}"><i class="fa fa-circle-o"></i>CLASSIC Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_idfc_wow')}}"><i class="fa fa-circle-o"></i>ADD WOW Credit Card</a></li>
                    <li><a href="{{route('admin_idfc_wow_list')}}"><i class="fa fa-circle-o"></i>WOW Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_idfc_select')}}"><i class="fa fa-circle-o"></i>ADD SELECT Credit
                            Card</a></li>
                    <li><a href="{{route('admin_idfc_select_list')}}"><i class="fa fa-circle-o"></i>SELECT Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_idfc_club_vista')}}"><i class="fa fa-circle-o"></i>ADD Club Vista Credit
                            Card</a></li>
                    <li><a href="{{route('admin_idfc_club_vista_list')}}"><i class="fa fa-circle-o"></i>Club Vista
                            Credit Card LIST</a></li>
                    <li><a href="{{route('admin_idfc_first_power')}}"><i class="fa fa-circle-o"></i>ADD First Power
                            Credit Card</a></li>
                    <li><a href="{{route('admin_idfc_first_power_list')}}"><i class="fa fa-circle-o"></i>First Power
                            Credit Card LIST</a></li>
                    <li><a href="{{route('admin_idfc_first_swyp')}}"><i class="fa fa-circle-o"></i>ADD First SWYP Credit
                            Card</a></li>
                    <li><a href="{{route('admin_idfc_first_swyp_list')}}"><i class="fa fa-circle-o"></i>First SWYP
                            Credit Card LIST</a></li>
                </ul>
            </li>
            <li class="menu-item treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>AU BANK CARDS</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin_au_lit')}}"><i class="fa fa-circle-o"></i>ADD LIT Credit Card</a></li>
                    <li><a href="{{route('admin_au_lit_list')}}"><i class="fa fa-circle-o"></i>LIT Credit Card LIST</a>
                    </li>
                    <li><a href="{{route('admin_au_zenith')}}"><i class="fa fa-circle-o"></i>ADD Zenith Credit Card</a>
                    </li>
                    <li><a href="{{route('admin_au_zenith_list')}}"><i class="fa fa-circle-o"></i>Zenith Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_au_vetta')}}"><i class="fa fa-circle-o"></i>ADD Vetta Credit Card</a>
                    </li>
                    <li><a href="{{route('admin_au_vetta_list')}}"><i class="fa fa-circle-o"></i>Vetta Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_au_altura')}}"><i class="fa fa-circle-o"></i>ADD Altura Credit Card</a>
                    </li>
                    <li><a href="{{route('admin_au_altura_list')}}"><i class="fa fa-circle-o"></i>Altura Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_au_altura_plus')}}"><i class="fa fa-circle-o"></i>ADD Altura Plus Credit
                            Card</a></li>
                    <li><a href="{{route('admin_au_altura_plus_list')}}"><i class="fa fa-circle-o"></i>Altura Plus
                            Credit Card LIST</a></li>
                </ul>
            </li>
            <li class="menu-item treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>AMERICAN EXPRESS CARDS</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin_american_gold')}}"><i class="fa fa-circle-o"></i>ADD Gold Card</a></li>
                    <li><a href="{{route('admin_american_gold_list')}}"><i class="fa fa-circle-o"></i>Gold Card LIST</a>
                    </li>
                    <li><a href="{{route('admin_american_smart_earn')}}"><i class="fa fa-circle-o"></i>ADD Smart Earn
                            Credit Card</a></li>
                    <li><a href="{{route('admin_american_smart_earn_list')}}"><i class="fa fa-circle-o"></i>Smart Earn
                            Credit Card LIST</a></li>
                    <li><a href="{{route('admin_american_payback')}}"><i class="fa fa-circle-o"></i>ADD Payback Credit
                            Card</a></li>
                    <li><a href="{{route('admin_american_payback_list')}}"><i class="fa fa-circle-o"></i>Payback Credit
                            Card LIST</a></li>
                    <li><a href="{{route('admin_american_form_list')}}"><i class="fa fa-circle-o"></i>American Express
                            Form LIST</a></li>
                </ul>
            </li>
            <li class="menu-item treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>INDUSIND BANK CARDS</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin_indusind_nexxt')}}"><i class="fa fa-circle-o"></i>ADD Nexxt Credit
                            Card</a></li>
                    <li><a href="{{route('admin_indusind_nexxt_list')}}"><i class="fa fa-circle-o"></i>Nexxt Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_indusind_legend')}}"><i class="fa fa-circle-o"></i>ADD Legend Credit
                            Card</a></li>
                    <li><a href="{{route('admin_indusind_legend_list')}}"><i class="fa fa-circle-o"></i>Legend Credit
                            Card LIST</a></li>
                    <li><a href="{{route('admin_indusind_pinnacle')}}"><i class="fa fa-circle-o"></i>ADD Pinnacle Credit
                            Card</a></li>
                    <li><a href="{{route('admin_indusind_pinnacle_list')}}"><i class="fa fa-circle-o"></i>Pinnacle
                            Credit Card LIST</a></li>
                    <li><a href="{{route('admin_indusind_platinum_visa')}}"><i class="fa fa-circle-o"></i>ADD Platinum
                            Visa Credit Card</a></li>
                    <li><a href="{{route('admin_indusind_platinum_visa_list')}}"><i class="fa fa-circle-o"></i>Platinum
                            Visa Credit Card LIST</a></li>
                    <li><a href="{{route('admin_indusind_aura')}}"><i class="fa fa-circle-o"></i>ADD Aura Credit
                            Card</a></li>
                    <li><a href="{{route('admin_indusind_aura_list')}}"><i class="fa fa-circle-o"></i>Aura Visa Credit
                            Card LIST</a></li>
                    <li><a href="{{route('admin_indusind_rupay_platinum')}}"><i class="fa fa-circle-o"></i>ADD Rupay
                            platinum Credit Card</a></li>
                    <li><a href="{{route('admin_indusind_rupay_platinum_list')}}"><i class="fa fa-circle-o"></i>Rupay
                            platinum Credit Card LIST</a></li>
                    <li><a href="{{route('admin_indusind_qatar_airways')}}"><i class="fa fa-circle-o"></i>ADD Qatar
                            airways Credit Card</a></li>
                    <li><a href="{{route('admin_indusind_qatar_airways_list')}}"><i class="fa fa-circle-o"></i>Qatar
                            airways Credit Card LIST</a></li>
                    <li><a href="{{route('admin_indusind_british_airways')}}"><i class="fa fa-circle-o"></i>ADD British
                            airways Credit Card</a></li>
                    <li><a href="{{route('admin_indusind_british_airways_list')}}"><i class="fa fa-circle-o"></i>British
                            airways Credit Card LIST</a></li>
                </ul>
            </li>
            <li class="menu-item treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>HSBC BANK CARDS</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin_hsbc_visa_platinum')}}"><i class="fa fa-circle-o"></i>ADD Visa Platinum
                            Credit Card</a></li>
                    <li><a href="{{route('admin_hsbc_visa_platinum_list')}}"><i class="fa fa-circle-o"></i>Visa Platinum
                            Credit Card LIST</a></li>
                    <li><a href="{{route('admin_hsbc_cashback')}}"><i class="fa fa-circle-o"></i>ADD Cashback Credit
                            Card</a></li>
                    <li><a href="{{route('admin_hsbc_cashback_list')}}"><i class="fa fa-circle-o"></i>Cashback Credit
                            Card LIST</a></li>
                    <li><a href="{{route('admin_hsbc_smart_value')}}"><i class="fa fa-circle-o"></i>ADD Smart Value
                            Credit Card</a></li>
                    <li><a href="{{route('admin_hsbc_smart_value_list')}}"><i class="fa fa-circle-o"></i>Smart Value
                            Credit Card LIST</a></li>
                    <li><a href="{{route('admin_hsbc_premier')}}"><i class="fa fa-circle-o"></i>ADD Premier Credit
                            Card</a></li>
                    <li><a href="{{route('admin_hsbc_premier_list')}}><i class=" fa fa-circle-o"></i>Premier Credit Card
                            LIST</a></li>
                </ul>
            </li>
            <li class="menu-item treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>YES BANK CARDS</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin_yes_elite_plus')}}"><i class="fa fa-circle-o"></i>ADD Elite+ Credit
                            Card</a></li>
                    <li><a href="{{route('admin_yes_elite_plus_list')}}"><i class="fa fa-circle-o"></i>Elite+ Credit
                            Card LIST</a></li>
                    <li><a href="{{route('admin_yes_select')}}"><i class="fa fa-circle-o"></i>ADD SELECT Credit Card</a>
                    </li>
                    <li><a href="{{route('admin_yes_select_list')}}"><i class="fa fa-circle-o"></i>SELECT Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_yes_ace')}}"><i class="fa fa-circle-o"></i>ADD ACE Credit Card</a></li>
                    <li><a href="{{route('admin_yes_ace_list')}}"><i class="fa fa-circle-o"></i>ACE Credit Card LIST</a>
                    </li>
                    <li><a href="{{route('admin_yes_marquee')}}"><i class="fa fa-circle-o"></i>ADD MARQUEE Credit
                            Card</a></li>
                    <li><a href="{{route('admin_yes_marquee_list')}}"><i class="fa fa-circle-o"></i>MARQUEE Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_yes_reserve')}}"><i class="fa fa-circle-o"></i>ADD Reserve Credit
                            Card</a></li>
                    <li><a href="{{route('admin_yes_reserve_list')}}"><i class="fa fa-circle-o"></i>Reserve Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_yes_prosperity')}}"><i class="fa fa-circle-o"></i>ADD Prosperity Credit
                            Card</a></li>
                    <li><a href="{{route('admin_yes_prosperity_list')}}"><i class="fa fa-circle-o"></i>Prosperity Credit
                            Card LIST</a></li>
                    <li><a href="{{route('admin_yes_first')}}"><i class="fa fa-circle-o"></i>ADD First Credit Card</a>
                    </li>
                    <li><a href="{{route('admin_yes_first_list')}}"><i class="fa fa-circle-o"></i>First Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_yes_first_business')}}"><i class="fa fa-circle-o"></i>ADD First
                            Businesses Credit Card</a></li>
                    <li><a href="{{route('admin_yes_first_business_list')}}"><i class="fa fa-circle-o"></i>First
                            Businesses Credit Card LIST</a></li>
                    <li><a href="{{route('admin_yes_properity_cashback')}}"><i class="fa fa-circle-o"></i>ADD Prosperity
                            Cashback Card</a></li>
                    <li><a href="{{route('admin_yes_properity_cashback_list')}}"><i
                                class="fa fa-circle-o"></i>Prosperity Cashback Card LIST</a></li>
                    <li><a href="{{route('admin_yes_form_list')}}"><i class="fa fa-circle-o"></i>Yes Bank Form LIST</a>
                    </li>
                </ul>
            </li>
            <li class="menu-item treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>KOTAK BANK CARDS</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin_kotak_urbane_gold')}}"><i class="fa fa-circle-o"></i>ADD Urbane Gold Credit Card</a>
                    </li>
                    <li><a href="{{route('admin_kotak_urbane_gold_list')}}"><i class="fa fa-circle-o"></i>Urbane Gold Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_kotak_royal_signature')}}"><i class="fa fa-circle-o"></i>ADD Royale Signature Credit
                            Card</a></li>
                    <li><a href="{{route('admin_kotak_royal_signature_list')}}"><i class="fa fa-circle-o"></i>Royale Signature Credit
                            Card LIST</a></li>
                    <li><a href="{{route('admin_kotak_league_platinum')}}"><i class="fa fa-circle-o"></i>ADD League Platinum Credit
                            Card</a></li>
                    <li><a href="{{route('admin_kotak_league_platinum_list')}}"><i class="fa fa-circle-o"></i>League Platinum Credit
                            Card LIST</a></li>
                    <li><a href="{{route('admin_kotak_myntra')}}"><i class="fa fa-circle-o"></i>ADD Myntra Credit Card</a></li>
                    <li><a href="{{route('admin_kotak_myntra_list')}}"><i class="fa fa-circle-o"></i>Myntra Credit Card LIST</a></li>
                    <li><a href="{{route('admin_kotak_6e_reward_xl')}}"><i class="fa fa-circle-o"></i>ADD 6E Rewards XL Credit Card</a>
                    </li>
                    <li><a href="{{route('admin_kotak_6e_reward_xl_list')}}"><i class="fa fa-circle-o"></i>6E Rewards XL Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_kotak_6e_reward')}}"><i class="fa fa-circle-o"></i>ADD 6E Rewards Credit Card</a></li>
                    <li><a href="{{route('admin_kotak_6e_reward_list')}}"><i class="fa fa-circle-o"></i>6E Rewards Credit Card LIST</a>
                    </li>
                    <li><a href="{{route('admin_kotak_india_oil')}}"><i class="fa fa-circle-o"></i>ADD IndianOil Credit Card</a></li>
                    <li><a href="{{route('admin_kotak_india_oil_list')}}"><i class="fa fa-circle-o"></i>IndianOil Credit Card LIST</a>
                    </li>
                    <li><a href="{{route('admin_kotak_white_reserve')}}"><i class="fa fa-circle-o"></i>ADD White Reserve Credit
                            Card</a></li>
                    <li><a href="{{route('admin_kotak_white_reserve_list')}}"><i class="fa fa-circle-o"></i>White Reserve Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_kotak_811')}}"><i class="fa fa-circle-o"></i>ADD 811 Credit Card</a></li>
                    <li><a href="{{route('admin_kotak_811_list')}}"><i class="fa fa-circle-o"></i>811 Credit Card LIST</a></li>
                    <li><a href="{{route('admin_kotak_zen_signature')}}"><i class="fa fa-circle-o"></i>ADD Zen Signature Credit
                            Card</a></li>
                    <li><a href="{{route('admin_kotak_zen_signature_list')}}"><i class="fa fa-circle-o"></i>Zen Signature Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_kotak_form_list')}}"><i class="fa fa-circle-o"></i>Kotak Bank Form LIST</a></li>
                </ul>
            </li>
            <li class="menu-item treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>ICICI BANK CARDS</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin_icici_emeralde_private')}}"><i class="fa fa-circle-o"></i>ADD Emeralde Private Card</a>
                    </li>
                    <li><a href="{{route('admin_icici_emeralde_private_list')}}"><i class="fa fa-circle-o"></i>Emeralde Private Card
                            LIST</a></li>
                    <li><a href="{{route('admin_icici_emeralde')}}"><i class="fa fa-circle-o"></i>ADD Emeralde Credit Card</a></li>
                    <li><a href="{{route('admin_icici_emeralde_list')}}"><i class="fa fa-circle-o"></i>Emeralde Credit Card LIST</a>
                    </li>
                    <li><a href="{{route('admin_icici_sapphiro')}}"><i class="fa fa-circle-o"></i>ADD Sapphiro Credit Card</a></li>
                    <li><a href="{{route('admin_icici_sapphiro_list')}}"><i class="fa fa-circle-o"></i>Sapphiro Credit Card LIST</a>
                    </li>
                    <li><a href="{{route('admin_icici_rubyx')}}"><i class="fa fa-circle-o"></i>ADD Rubyx Credit Card</a></li>
                    <li><a href="{{route('admin_icici_rubyx_list')}}"><i class="fa fa-circle-o"></i>Rubyx Credit Card LIST</a></li>
                    <li><a href="{{route('admin_icici_coral')}}"><i class="fa fa-circle-o"></i>ADD Coral Credit Card</a></li>
                    <li><a href="{{route('admin_icici_coral_list')}}"><i class="fa fa-circle-o"></i>Coral Credit Card LIST</a></li>
                    <li><a href="{{route('admin_icici_manchester_united_platinum')}}"><i class="fa fa-circle-o"></i>ADD United Platinum
                            Card</a></li>
                    <li><a href="{{route('admin_icici_manchester_united_platinum_list')}}"><i class="fa fa-circle-o"></i>United
                            Platinum Card LIST</a></li>
                    <li><a href="{{route('admin_icici_manchester_united_signature')}}"><i class="fa fa-circle-o"></i>ADD United
                            Signature Card</a></li>
                    <li><a href="{{route('admin_icici_manchester_united_signature_list')}}"><i class="fa fa-circle-o"></i>United
                            Signature Card LIST</a></li>
                    <li><a href="{{route('admin_icici_platinum')}}"><i class="fa fa-circle-o"></i>ADD Platinum Credit Card</a></li>
                    <li><a href="{{route('admin_icici_platinum_list')}}"><i class="fa fa-circle-o"></i>Platinum Credit Card LIST</a>
                    </li>
                    <li><a href="{{route('admin_icici_form_list')}}"><i class="fa fa-circle-o"></i>ICICI Bank Form LIST</a></li>
                </ul>
            </li>
            <li class="menu-item treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Statndard Chartered CARDS</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin_standard_ultimate')}}"><i class="fa fa-circle-o"></i>ADD Ultimate Credit Card</a></li>
                    <li><a href="{{route('admin_standard_ultimate_list')}}"><i class="fa fa-circle-o"></i>Ultimate Credit Card LIST</a>
                    </li>
                    <li><a href="{{route('admin_standard_digismart')}}"><i class="fa fa-circle-o"></i>ADD DigiSmart Credit Card</a>
                    </li>
                    <li><a href="{{route('admin_standard_digismart_list')}}"><i class="fa fa-circle-o"></i>DigiSmart Credit Card
                            LIST</a></li>
                    <li><a href="{{route('admin_standard_mahattan')}}"><i class="fa fa-circle-o"></i>ADD Mahattan Credit Card</a></li>
                    <li><a href="{{route('admin_standard_mahattan_list')}}"><i class="fa fa-circle-o"></i>Mahattan Credit Card LIST</a>
                    </li>
                    <li><a href="{{route('admin_standard_super_value')}}"><i class="fa fa-circle-o"></i>ADD Titanium Cashback Card</a>
                    </li>
                    <li><a href="{{route('admin_standard_super_value_list')}}"><i class="fa fa-circle-o"></i>Titanium Cashback Card
                            LIST</a></li>
                    <li><a href="{{route('admin_standard_platinum_reward')}}"><i class="fa fa-circle-o"></i>ADD Platinum Rewards
                            Card</a></li>
                    <li><a href="{{route('admin_standard_platinum_reward_list')}}"><i class="fa fa-circle-o"></i>Platinum Rewards Card
                            LIST</a></li>
                    <li><a href="{{route('admin_standard_priority_visa')}}"><i class="fa fa-circle-o"></i>ADD Priority Visa Card</a>
                    </li>
                    <li><a href="{{route('admin_standard_priority_visa_list')}}"><i class="fa fa-circle-o"></i>Priority Visa Card
                            LIST</a></li>
                    <li><a href="{{route('admin_standard_form_list')}}"><i class="fa fa-circle-o"></i>Standard Charted Form LIST</a>
                    </li>
                </ul>
            </li>

            <li class="header" style="color:white;">LOAN</li>
            <li class="menu-item treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>PERSONAL LOAN</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin_personal_loan_list')}}"><i class="fa fa-circle-o"></i> Personal Loan LIST</a></li>
                </ul>
            </li>
            <li class="menu-item treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>BUSINESS LOAN</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin_business_loan_list')}}"><i class="fa fa-circle-o"></i>Business Loan LIST</a></li>

                </ul>
            </li>
            <li class="menu-item treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>HOME LOAN</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin_home_loan_list')}}"><i class="fa fa-circle-o"></i>Home Loan LIST</a></li>
                </ul>
            </li>
            <li class="menu-item treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>LOAN AGAINST PROPERTY</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin_loan_against_property')}}"><i class="fa fa-circle-o"></i>ADD Loan Against</a></li>
                    <li><a href="{{route('admin_loan_against_property_list')}}"><i class="fa fa-circle-o"></i>Loan Against LIST</a>
                    </li>
                </ul>
            </li>
            <li class="menu-item treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>GOLD LOAN</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin_gold_loan')}}"><i class="fa fa-circle-o"></i>ADD Gold Loan</a></li>
                    <li><a href="{{route('admin_gold_loan_list')}}"><i class="fa fa-circle-o"></i>Gold Loan LIST</a></li>
                </ul>
            </li>
            <li class="header" style="color:white;">INSURANCE</li>
            <li class="menu-item treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span> HEALTH INSURANCE</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin_health_hdfc_ergo')}}"><i class="fa fa-circle-o"></i>ADD HDFC Ergo Insurance</a></li>
                    <li><a href="{{route('admin_health_hdfc_ergo_list')}}"><i class="fa fa-circle-o"></i>HDFC Ergo Insurance LIST</a>
                    </li>
                    <li><a href="{{route('admin_health_icici_lomboard')}}"><i class="fa fa-circle-o"></i>ADD ICICI Lomboard
                            Insurance</a></li>
                    <li><a href="{{route('admin_health_icici_lomboard_list')}}"><i class="fa fa-circle-o"></i>ICICI Lomboard Insurance
                            LIST</a></li>
                    <li><a href="{{route('admin_health_core')}}"><i class="fa fa-circle-o"></i>ADD Core Health Insurance</a></li>
                    <li><a href="{{route('admin_health_core_list')}}"><i class="fa fa-circle-o"></i>Core Health Insurance LIST</a></li>
                    <li><a href="{{route('admin_health_godigital')}}"><i class="fa fa-circle-o"></i>ADD Go Digit Insurance</a></li>
                    <li><a href="{{route('admin_health_godigital_list')}}"><i class="fa fa-circle-o"></i>Go Digit Insurance LIST</a>
                    </li>
                    <li><a href="{{route('admin_health_aditya_birla')}}"><i class="fa fa-circle-o"></i>ADD Aditya Birla Insurance</a>
                    </li>
                    <li><a href="{{route('admin_health_aditya_birla_list')}}"><i class="fa fa-circle-o"></i>Aditya Birla Insurance
                            LIST</a></li>
                    <li><a href="{{route('admin_health_reliance')}}"><i class="fa fa-circle-o"></i>ADD Reliance General Insurance</a>
                    </li>
                    <li><a href="{{route('admin_health_reliance_list')}}"><i class="fa fa-circle-o"></i>Reliance General Insurance
                            LIST</a></li>
                    <li><a href="{{route('admin_health_future')}}"><i class="fa fa-circle-o"></i>ADD Future General Insurance</a></li>
                    <li><a href="{{route('admin_health_future_list')}}"><i class="fa fa-circle-o"></i>Future General Insurance LIST</a>
                    </li>
                    <li><a href="{{route('admin_health_tata_aig')}}"><i class="fa fa-circle-o"></i>ADD Tata AIG General Insurance</a>
                    </li>
                    <li><a href="{{route('admin_health_tata_aig_list')}}"><i class="fa fa-circle-o"></i>Tata AIG General Insurance
                            LIST</a></li>
                    <li><a href="{{route('admin_health_sbi_general')}}"><i class="fa fa-circle-o"></i>ADD SBI General Insurance</a>
                    </li>
                    <li><a href="{{route('admin_health_sbi_general_list')}}"><i class="fa fa-circle-o"></i>SBI General Insurance
                            LIST</a></li>
                    <li><a href="{{route('admin_health_max_bupa')}}"><i class="fa fa-circle-o"></i>ADD MAX Bupa Insurance</a></li>
                    <li><a href="{{route('admin_health_max_bupa_list')}}"><i class="fa fa-circle-o"></i>MAX Bupa Insurance LIST</a>
                    </li>
                </ul>
            </li>
            <li class="menu-item treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span> LIFE INSURANCE</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin_life_hdfc')}}"><i class="fa fa-circle-o"></i>ADD HDFC Life Insurance</a></li>
                    <li><a href="{{route('admin_life_hdfc_list')}}"><i class="fa fa-circle-o"></i>HDFC Life Insurance LIST</a></li>
                    <li><a href="{{route('admin_life_icici')}}"><i class="fa fa-circle-o"></i>ADD ICICI Prodential Insurance</a></li>
                    <li><a href="{{route('admin_life_icici_list')}}"><i class="fa fa-circle-o"></i>ICICI Prodential Insurance LIST</a>
                    </li>
                    <li><a href="{{route('admin_life_kotak')}}"><i class="fa fa-circle-o"></i>ADD Kotak Mahindra Insurance</a></li>
                    <li><a href="{{route('admin_life_kotak_list')}}"><i class="fa fa-circle-o"></i>Kotak Mahindra Insurance LIST</a>
                    </li>
                    <li><a href="{{route('admin_life_max')}}"><i class="fa fa-circle-o"></i>ADD Max Life Insurance</a></li>
                    <li><a href="{{route('admin_life_max_list')}}"><i class="fa fa-circle-o"></i>Max Life Insurance LIST</a></li>
                    <li><a href="{{route('admin_life_sbi')}}"><i class="fa fa-circle-o"></i>ADD Sbi Life Insurance</a></li>
                    <li><a href="{{route('admin_life_sbi_list')}}"><i class="fa fa-circle-o"></i>Sbi Life Insurance LIST</a></li>
                    <li><a href="{{route('admin_life_bharti_axa')}}"><i class="fa fa-circle-o"></i>ADD Bharti AXA Life Insurance</a>
                    </li>
                    <li><a href="{{route('admin_life_bharti_axa_list')}}"><i class="fa fa-circle-o"></i>Bharti AXA Life Insurance
                            LIST</a></li>
                    <li><a href="{{route('admin_life_bajaj_allianz')}}"><i class="fa fa-circle-o"></i>ADD Bajaj Allianz Insurance</a>
                    </li>
                    <li><a href="{{route('admin_life_bajaj_allianz_list')}}"><i class="fa fa-circle-o"></i>Bajaj Allianz Insurance
                            LIST</a></li>
                </ul>
            </li>
            <li class="menu-item treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span> GENERAL INSURANCE</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin_general_motor')}}"><i class="fa fa-circle-o"></i>ADD Motor Insurance</a></li>
                    <li><a href="{{route('admin_general_motor_list')}}"><i class="fa fa-circle-o"></i>Motor Insurance LIST</a></li>
                    <li><a href="{{route('admin_general_car')}}"><i class="fa fa-circle-o"></i>ADD Car Insurance</a></li>
                    <li><a href="{{route('admin_general_car_list')}}"><i class="fa fa-circle-o"></i>Car Insurance LIST</a></li>
                    <li><a href="{{route('admin_general_bike')}}"><i class="fa fa-circle-o"></i>ADD Bike Insurance</a></li>
                    <li><a href="{{route('admin_general_bike_list')}}"><i class="fa fa-circle-o"></i>Bike Insurance LIST</a></li>
                    <li><a href="{{route('admin_general_travel')}}"><i class="fa fa-circle-o"></i>ADD Travel Insurance</a></li>
                    <li><a href="{{route('admin_general_travel_list')}}"><i class="fa fa-circle-o"></i>Travel Insurance LIST</a></li>
                </ul>
            </li>
            <li class="header" style="color:white;">Instant Loan</li>
            <li class="menu-item treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>INSTANT LOAN</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin_insta_loan')}}"><i class="fa fa-circle-o"></i>ADD Insta Loan</a></li>
                    <li><a href="{{route('admin_insta_loan_list')}}"><i class="fa fa-circle-o"></i>Insta Loan LIST</a></li>
                    <li><a href="{{route('admin_jumbo_loan')}}"><i class="fa fa-circle-o"></i>ADD Jumbo Loan</a></li>
                    <li><a href="{{route('admin_jumbo_loan_list')}}"><i class="fa fa-circle-o"></i>Jumbo Loan LIST</a></li>
                    <li><a href="{{route('admin_hdfc_xpress_loan')}}"><i class="fa fa-circle-o"></i>ADD HDFC Xpress Loan</a></li>
                    <li><a href="{{route('admin_hdfc_xpress_loan_list')}}"><i class="fa fa-circle-o"></i>HDFC Xpress Loan LIST</a></li>
                    <li><a href="{{route('admin_smart_emi_loan')}}"><i class="fa fa-circle-o"></i>ADD Smart EMI Loan</a></li>
                    <li><a href="{{route('admin_smart_emi_loan_list')}}"><i class="fa fa-circle-o"></i>Smart EMI Loan LIST</a></li>
                </ul>
            </li>
            <li class="header" style="color:white;">BLOGS</li>
            <li class="menu-item treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>BLOGS</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin_blog')}}"><i class="fa fa-circle-o"></i>ADD Blogs</a></li>
                    <li><a href="{{route('admin_blog_list')}}"><i class="fa fa-circle-o"></i>Blogs LIST</a></li>
                </ul>
            </li>
            <li class="header" style="color:white;">DOCUMENTATION</li>
            <li class="menu-item treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>DOCUMENTATION</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin_documentation')}}"><i class="fa fa-circle-o"></i>ADD Documentation</a></li>
                    <li><a href="{{route('admin_documentation_list')}}"><i class="fa fa-circle-o"></i>Documentation LIST</a></li>
                </ul>
            </li>
            <li class="header" style="color:white;">CREATE TEAM</li>
            <li class="menu-item treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>CREATE TEAM</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin_create_team')}}"><i class="fa fa-circle-o"></i>ADD Create Team</a></li>
                    <li><a href="{{route('admin_create_team_list')}}"><i class="fa fa-circle-o"></i>Create Team LIST</a></li>
                </ul>
            </li>
            <li class="header" style="color:white;">HSBC TEAM</li>
            <li class="menu-item treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>HSBC TEAM</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin_hsbc_bank_upload_form')}}"><i class="fa fa-circle-o"></i>ADD HSBC Team</a></li>
                    <li><a href="{{route('admin_hsbc_bank_upload_form_list')}}"><i class="fa fa-circle-o"></i>HSBC Team LIST</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<script>
// script.js
document.addEventListener('DOMContentLoaded', () => {
    // Select all menu items
    const menuItems = document.querySelectorAll('.sidebar-menu .menu-item');

    // Add click event listener to each menu item
    menuItems.forEach(item => {
        item.addEventListener('click', function() {
            // Remove active class from all menu items
            menuItems.forEach(el => el.classList.remove('active'));

            // Add active class to the clicked item
            this.classList.add('active');
        });
    });
});
</script>