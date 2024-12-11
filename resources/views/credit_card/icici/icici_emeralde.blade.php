@include('head.header')

<section>
    <div class="container-fluid pb-5 do_1">
        <div class="row">
            <div class="col">
                <figure class="im_g"><img src="{{asset('assets/images/axisbank/icici_emereld.png')}}" width="300"></figure>
            </div>
            <div class="col pt-5">
                <h4 class="airtel">ICICI Emeralde Credit Card</h4><br>
                <p class="best">Card Type: <img src="{{asset('assets/images/axisbank/Master_Card.avif')}}"></p>
            </div>
            <div class="col pt-5">
                <button type="button" class="btn btn-primary"
                    style="padding:10px 30px; background:#007BFF; font-weight:700;border-radius: 20px;"><a href="{{route('icici_emeralde_form')}}" target="_blank">Apply Now</a></button>
            </div>
        </div>
    </div>
</section>

<div class="container pt-5">
    <p style="font-size:17px; line-height:32px;">The ICICI Emeralde Credit Card offers unparalleled lifestyle benefits,
        designed for those who seek premium rewards and experiences. Discover a world of exclusive privileges and
        conveniences with minimal fees.</p>
</div>

<section>
    <div class="container pt-5">
        <div class="row">
            <h2 style="font-weight: 700;">Key Highlights of ICICI Emeralde Credit Card</h2>
            <ul style="font-size: 17px; line-height:40px;">
                <li>Exclusive rewards on dining, travel, and luxury shopping.</li>
                <li>Complimentary access to global airport lounges.</li>
                <li>Personalized concierge and travel assistance services.</li>
                <li>Annual fee waived on yearly spends above Rs. 15 Lakhs.</li>
            </ul>

            <h2 style="font-weight:700;">Features & Benefits of ICICI Emeralde Credit Card</h2>
            <p style="font-weight:600;">Explore the exclusive benefits offered:</p>

            <p style="font-weight:600;">Welcome Benefits</p>
            <ul>
                <li>Receive 25,000 reward points upon activation of the card.</li>
            </ul>

            <p style="font-weight:600;">Reward Program</p>
            <ul>
                <li>10 reward points for every Rs. 100 spent on dining and travel.</li>
                <li>5 reward points on other purchases.</li>
            </ul>

            <p style="font-weight:600;">Travel Benefits</p>
            <ul>
                <li>Complimentary lounge access across major airports worldwide.</li>
                <li>Global travel insurance for cardholders.</li>
            </ul>

            <h2 style="font-weight:700;">ICICI Emeralde Credit Card Fees & Charges</h2>
            <ul>
                <li>Joining Fee: Rs. 12,000</li>
                <li>Annual Fee: Rs. 12,000 (waived on yearly spends above Rs. 15 Lakhs)</li>
                <li>Interest on outstanding balance: 3.25% per month</li>
                <li>Cash advance fee: Rs. 250 per Rs. 10,000</li>
                <li>Foreign currency markup: 3.5%</li>
            </ul>

            <h2 style="font-weight:700;">Eligibility for ICICI Emeralde Credit Card</h2>
            <ul>
                <li>Primary cardholder must be aged between 21 and 65 years.</li>
                <li>Annual income should be Rs. 20 Lakhs or more.</li>
            </ul>

            <h2 style="font-weight:700;">Documents Required</h2>
            <ul>
                <li>Proof of identity: Aadhaar, PAN Card, Passport, etc.</li>
                <li>Proof of address: Aadhaar, Utility Bill, Passport, etc.</li>
                <li>Proof of income: Salary slips, Form 16, bank statements.</li>
            </ul>

            <h2 style="font-weight:700;">Reward Redemption</h2>
            <ul>
                <li>Redeem points for flights, hotels, luxury items, and more via the ICICI Bank rewards portal.</li>
            </ul>

            <h2 style="font-weight:700;">How to Apply for ICICI Emeralde Credit Card?</h2>
            <ul>
                <li>Visit the ICICI Bank website, fill out the application form, and submit necessary details.</li>
                <li>An ICICI representative will contact you for verification and further processing.</li>
            </ul>
        </div>
    </div>
</section>

<section class="faq-grid pt-12 pb-120">
    <div class="container">
        <h2 style="font-weight:700; text-align: center; padding-bottom: 20px;">ICICI Emeralde Credit Card FAQs</h2>
        <div class="row row-gutter-y-20">
            <div class="col-lg-6">
                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                    <div class="accrodion wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>Can I withdraw cash using my Emeralde Credit Card?<span class="accrodion-icon"></span>
                            </h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Yes, cash withdrawals are allowed up to the assigned limit, with fees of Rs. 250 per
                                    Rs. 10,000 withdrawn.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accrodion wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>How can I redeem my reward points?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Rewards can be redeemed for travel, luxury products, and more through ICICI Net
                                    Banking.</p>
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
                                <p>Regular usage and timely payments can increase your eligibility for a limit increase.
                                    ICICI Bank will evaluate your profile accordingly.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('head.footer')