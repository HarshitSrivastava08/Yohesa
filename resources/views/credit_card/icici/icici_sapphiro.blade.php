@include('head.header')

<section>
    <div class="container-fluid pb-5 do_1">
        <div class="row">
            <div class="col">
                <figure class="im_g"><img src="{{asset('assets/images/axisbank/icici_sapphiro.png')}}" width="300"></figure>
            </div>
            <div class="col pt-5">
                <h4 class="airtel">ICICI Sapphiro Credit Card</h4><br>
                <p class="best">Card Type: <img src="{{asset('assets/images/axisbank/Master_Card.avif')}}"></p>
            </div>
            <div class="col pt-5">
                <button type="button" class="btn btn-primary"
                    style="padding:10px 30px; background:#007BFF; font-weight:700;border-radius: 20px;"><a href="{{route('icici_sapphiro_form')}}" target="_blank">Apply Now</a></button>
            </div>
        </div>
    </div>
</section>

<div class="container pt-5">
    <p style="font-size:17px; line-height:32px;">The ICICI Sapphiro Credit Card is your gateway to luxury experiences,
        offering exclusive travel, dining, and lifestyle privileges. Enjoy tailored benefits and rewards with nominal
        fees.</p>
</div>

<section>
    <div class="container pt-5">
        <div class="row">
            <h2 style="font-weight: 700;">Key Highlights of ICICI Sapphiro Credit Card</h2>
            <ul style="font-size: 17px; line-height:40px;">
                <li>Complimentary lounge access at domestic and international airports.</li>
                <li>Exclusive dining and shopping offers globally.</li>
                <li>Comprehensive travel insurance and concierge services.</li>
                <li>Annual fee waived on yearly spends above Rs. 6 Lakhs.</li>
            </ul>

            <h2 style="font-weight:700;">Features & Benefits of ICICI Sapphiro Credit Card</h2>
            <p style="font-weight:600;">Discover the premium features of Sapphiro:</p>

            <p style="font-weight:600;">Welcome Benefits</p>
            <ul>
                <li>Earn 10,000 reward points upon card activation.</li>
            </ul>

            <p style="font-weight:600;">Reward Program</p>
            <ul>
                <li>6 reward points for every Rs. 100 spent on dining and travel.</li>
                <li>3 reward points on all other purchases.</li>
            </ul>

            <p style="font-weight:600;">Travel Benefits</p>
            <ul>
                <li>Complimentary access to select airport lounges globally.</li>
                <li>Exclusive travel insurance and emergency assistance.</li>
            </ul>

            <h2 style="font-weight:700;">ICICI Sapphiro Credit Card Fees & Charges</h2>
            <ul>
                <li>Joining Fee: Rs. 6,000</li>
                <li>Annual Fee: Rs. 6,000 (waived on yearly spends above Rs. 6 Lakhs)</li>
                <li>Interest on outstanding balance: 3.25% per month</li>
                <li>Cash advance fee: Rs. 300 per Rs. 10,000</li>
                <li>Foreign currency markup: 3.5%</li>
            </ul>

            <h2 style="font-weight:700;">Eligibility for ICICI Sapphiro Credit Card</h2>
            <ul>
                <li>Primary cardholder must be aged between 21 and 60 years.</li>
                <li>Annual income should be Rs. 15 Lakhs or more.</li>
            </ul>

            <h2 style="font-weight:700;">Documents Required</h2>
            <ul>
                <li>Proof of identity: Aadhaar, PAN Card, Passport, etc.</li>
                <li>Proof of address: Aadhaar, Utility Bill, Passport, etc.</li>
                <li>Proof of income: Salary slips, Form 16, bank statements.</li>
            </ul>

            <h2 style="font-weight:700;">Reward Redemption</h2>
            <ul>
                <li>Redeem points for flights, luxury items, and more via the ICICI rewards portal.</li>
            </ul>

            <h2 style="font-weight:700;">How to Apply for ICICI Sapphiro Credit Card?</h2>
            <ul>
                <li>Visit the ICICI Bank website, complete the application form, and provide required details.</li>
                <li>ICICI Bank will reach out to verify and finalize your application.</li>
            </ul>
        </div>
    </div>
</section>

<section class="faq-grid pt-12 pb-120">
    <div class="container">
        <h2 style="font-weight:700; text-align: center; padding-bottom: 20px;">ICICI Sapphiro Credit Card FAQs</h2>
        <div class="row row-gutter-y-20">
            <div class="col-lg-6">
                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                    <div class="accrodion wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>Can I withdraw cash using my Sapphiro Credit Card?<span class="accrodion-icon"></span>
                            </h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Yes, you can withdraw cash up to the allowed limit. Cash advance fees of Rs. 300 per
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
                                <p>Redeem your points for travel, shopping, and more through ICICI's rewards portal.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-2">
                    <div class="accrodion active wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>How can I increase my credit limit?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Maintain regular usage and timely payments for eligibility to request a limit
                                    increase. ICICI will evaluate your profile accordingly.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('head.footer')