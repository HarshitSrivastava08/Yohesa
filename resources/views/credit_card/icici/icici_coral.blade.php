@include('head.header')

<section>
    <div class="container-fluid pb-5 do_1">
        <div class="row">
            <div class="col">
                <figure class="im_g"><img src="{{asset('assets/images/axisbank/icici_coral.webp/')}}" width="300"></figure>
            </div>
            <div class="col pt-5">
                <h4 class="airtel">ICICI Coral Credit Card</h4><br>
                <p class="best">Card Type: <img src="{{asset('assets/images/axisbank/visa_card.avif/')}}"></p>
            </div>
            <div class="col pt-5">
                <button type="button" class="btn btn-primary"
                    style="padding:10px 30px; background:#007BFF; font-weight:700;border-radius: 20px;"><a href="{{route('icici_coral_form')}}" target="_blank">Apply Now</a></button>
            </div>
        </div>
    </div>
</section>

<div class="container pt-5">
    <p style="font-size:17px; line-height:32px;">The ICICI Coral Credit Card provides a blend of rewards, lifestyle, and
        entertainment privileges. Get access to a world of benefits at a nominal annual fee, tailored to elevate your
        experiences.</p>
</div>

<section>
    <div class="container pt-5">
        <div class="row">
            <h2 style="font-weight: 700;">Key Highlights of ICICI Coral Credit Card</h2>
            <ul style="font-size: 17px; line-height:40px;">
                <li>Monthly movie ticket discounts and dining offers.</li>
                <li>Complimentary access to select airport lounges within India.</li>
                <li>Rewards for every transaction and discounts at partner restaurants.</li>
                <li>Annual fee waiver on annual spends above Rs. 1.5 Lakhs.</li>
            </ul>

            <h2 style="font-weight:700;">Features & Benefits of ICICI Coral Credit Card</h2>
            <p style="font-weight:600;">Explore the features and benefits of the Coral card:</p>

            <p style="font-weight:600;">Welcome Benefits</p>
            <ul>
                <li>Get complimentary movie tickets as part of the activation benefits.</li>
            </ul>

            <p style="font-weight:600;">Reward Program</p>
            <ul>
                <li>2 reward points for every Rs. 100 spent on retail transactions, excluding fuel.</li>
                <li>Additional rewards for dining and entertainment spending.</li>
            </ul>

            <p style="font-weight:600;">Travel Benefits</p>
            <ul>
                <li>Complimentary lounge access at select domestic airports.</li>
            </ul>

            <h2 style="font-weight:700;">ICICI Coral Credit Card Fees & Charges</h2>
            <ul>
                <li>Joining Fee: Rs. 500</li>
                <li>Annual Fee: Rs. 500 (waived on annual spends above Rs. 1.5 Lakhs)</li>
                <li>Interest on outstanding balance: 3.40% per month</li>
                <li>Cash advance fee: Rs. 250 per Rs. 10,000</li>
                <li>Foreign currency markup: 3.5%</li>
            </ul>

            <h2 style="font-weight:700;">Eligibility for ICICI Coral Credit Card</h2>
            <ul>
                <li>Primary cardholder should be aged between 21 and 60 years.</li>
                <li>Annual income of Rs. 3 Lakhs or above.</li>
            </ul>

            <h2 style="font-weight:700;">Documents Required</h2>
            <ul>
                <li>Proof of identity: Aadhaar, PAN Card, Passport, etc.</li>
                <li>Proof of address: Aadhaar, Utility Bill, Passport, etc.</li>
                <li>Proof of income: Salary slips, Form 16, bank statements.</li>
            </ul>

            <h2 style="font-weight:700;">Reward Redemption</h2>
            <ul>
                <li>Redeem reward points for travel, shopping, and other options through ICICI's rewards portal.</li>
            </ul>

            <h2 style="font-weight:700;">How to Apply for ICICI Coral Credit Card?</h2>
            <ul>
                <li>Visit the ICICI Bank website, fill out the application form, and provide necessary details.</li>
                <li>An ICICI representative will contact you to finalize the process.</li>
            </ul>
        </div>
    </div>
</section>

<section class="faq-grid pt-12 pb-120">
    <div class="container">
        <h2 style="font-weight:700; text-align: center; padding-bottom: 20px;">ICICI Coral Credit Card FAQs</h2>
        <div class="row row-gutter-y-20">
            <div class="col-lg-6">
                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                    <div class="accrodion wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>Can I use my Coral Card for cash withdrawals?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Yes, you can withdraw cash up to the allowed limit. Cash advance fees of Rs. 250 per
                                    Rs. 10,000 apply.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accrodion wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>How can I redeem my reward points?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Redeem your points for flights, shopping, and more on the ICICI rewards portal.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-2">
                    <div class="accrodion active wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>Can I increase my Coral Credit Card limit?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Consistent usage and timely payments make you eligible for a credit limit increase,
                                    evaluated by ICICI based on your profile.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('head.footer')