@include('head.header')

<section>
    <div class="container-fluid pb-5 do_1">
        <div class="row">
            <div class="col">
                <figure class="im_g"><img src="{{asset('assets/images/axisbank/icici_emeralde.png')}}" width="300"></figure>
            </div>
            <div class="col pt-5">
                <h4 class="airtel">ICICI Emeralde Private Credit Card</h4><br>
                <p class="best">Card Type: <img src="{{asset('assets/images/axisbank/Master_Card.avif')}}"></p>
            </div>
            <div class="col pt-5">
                <button type="button" class="btn btn-primary"
                    style="padding:10px 30px; background:#007BFF; font-weight:700;border-radius: 20px;"><a href="{{route('icici_form')}}" target="_blank">Apply Now</a></button>
            </div>
        </div>
    </div>
</section>

<div class="container pt-5">
    <p style="font-size:17px; line-height:32px;">Experience exclusive privileges with the ICICI Emeralde Private Credit
        Card. Tailored for the elite, it offers luxury benefits, premium rewards, and personalized concierge services.
        Enjoy a range of privileges with low or waived fees on high spending.</p>
</div>

<section>
    <div class="container pt-5">
        <div class="row">
            <h2 style="font-weight: 700;">Key Highlights of ICICI Emeralde Private Credit Card</h2>

            <p style="font-weight: 600;">Some of the standout features include:</p>

            <ul style="font-size: 17px; line-height:40px;">
                <li>Unlimited complimentary access to airport lounges worldwide.</li>
                <li>Dedicated concierge for personal and travel assistance.</li>
                <li>Personalized offers on dining, shopping, and travel.</li>
                <li>Annual fee waived on spends above Rs. 10 Lakhs per year.</li>
            </ul>

            <h2 style="font-weight:700;">Features & Benefits of ICICI Emeralde Private Credit Card</h2>

            <p style="font-weight:600;">Explore the benefits of the Emeralde Private Credit Card:</p>

            <p style="font-weight:600;">Welcome Benefits</p>
            <ul>
                <li>Earn 20,000 reward points upon card activation.</li>
            </ul>

            <p style="font-weight:600;">Reward Program</p>
            <ul>
                <li>5 reward points for every Rs. 100 spent on dining and travel.</li>
                <li>3 reward points on all other transactions.</li>
            </ul>

            <p style="font-weight:600;">Travel Benefits</p>
            <ul>
                <li>Complimentary access to global airport lounges.</li>
                <li>Exclusive travel insurance coverage.</li>
            </ul>

            <h2 style="font-weight:700;">ICICI Emeralde Private Credit Card Fees & Charges</h2>
            <ul>
                <li>Joining Fee: Rs. 12,000</li>
                <li>Annual Fee: Rs. 12,000 (waived on yearly spends of Rs. 10 Lakhs).</li>
                <li>Interest on outstanding balance: 3.40% (40.8% p.a.)</li>
                <li>Cash advance fee: Rs. 300 per Rs. 10,000.</li>
                <li>Foreign currency markup: 3.5%</li>
            </ul>

            <h2 style="font-weight:700;">Eligibility for ICICI Emeralde Private Credit Card</h2>
            <ul>
                <li>Primary cardholders must be aged 21–65 years.</li>
                <li>Annual income should be Rs. 24 Lakhs or above.</li>
            </ul>

            <h2 style="font-weight:700;">Documents Required</h2>
            <ul>
                <li>Proof of identity: PAN Card, Aadhaar, Passport, etc.</li>
                <li>Proof of address: Aadhaar, Utility Bill, Passport, etc.</li>
                <li>Proof of income: Salary slips, Form 16, bank statements.</li>
            </ul>

            <h2 style="font-weight:700;">Reward Redemption</h2>
            <ul>
                <li>Redeem points for flights, luxury hotels, exclusive products, and more.</li>
            </ul>

            <h2 style="font-weight:700;">How to Apply for ICICI Emeralde Private Credit Card?</h2>
            <ul>
                <li>Visit the ICICI Bank website and submit the application form.</li>
                <li>A representative will guide you through the document verification process.</li>
            </ul>
        </div>
    </div>
</section>

<section class="faq-grid pt-12 pb-120">
    <div class="container">
        <h2 style="font-weight:700; text-align: center; padding-bottom: 20px;">ICICI Emeralde Private Credit Card FAQs
        </h2>
        <div class="row row-gutter-y-20">
            <div class="col-lg-6">
                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                    <div class="accrodion wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>Is cash withdrawal allowed on the Emeralde Private Credit Card?<span
                                    class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Yes, cash withdrawal is allowed up to the assigned limit, with fees of Rs. 300 per
                                    Rs. 10,000.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accrodion wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>How can I redeem my reward points?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Points can be redeemed via the ICICI Net Banking portal for travel, merchandise, and
                                    more.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-2">
                    <div class="accrodion active wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>How do I request a credit limit increase?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>To request an increase, maintain regular usage and timely payments. ICICI may offer a
                                    limit increase after evaluating your profile.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('head.footer')