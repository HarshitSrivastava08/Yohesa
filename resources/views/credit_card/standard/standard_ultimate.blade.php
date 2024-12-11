@include('head.header')

<section>
    <div class="container-fluid pb-5 do_1">
        <div class="row">
            <div class="col">
                <figure class="im_g"><img src="{{asset('assets/images/axisbank/standard_ultimate.jpg')}}" width="300"></figure>
            </div>
            <div class="col pt-5">
                <h4 class="airtel">Ultimate Credit Card</h4><br>
                <p class="best">Card Type: <img src="{{asset('assets/images/axisbank/visa_card.avif')}}"></p>
            </div>
            <div class="col pt-5">
                <button type="button" class="btn btn-primary"
                    style="padding:10px 30px; background:#007BFF; font-weight:700;border-radius: 20px;"><a href="{{route('standard_form')}}" target="_blank">Apply Now</a></button>
            </div>
        </div>
    </div>
</section>

<div class="container pt-5">
    <p style="font-size:17px; line-height:32px;">The Ultimate Credit Card offers unparalleled rewards, exclusive
        privileges, and extensive travel benefits, crafted to elevate your lifestyle and financial management.</p>
</div>

<section>
    <div class="container pt-5">
        <div class="row">
            <h2 style="font-weight: 700;">Key Highlights of Ultimate Credit Card</h2>
            <ul style="font-size: 17px; line-height:40px;">
                <li>Welcome bonuses including complimentary flight tickets.</li>
                <li>Exclusive access to luxury airport lounges globally.</li>
                <li>High reward points for every spend across categories.</li>
                <li>Annual fee waiver on spending above Rs. 2 Lakhs.</li>
            </ul>

            <h2 style="font-weight:700;">Features & Benefits of Ultimate Credit Card</h2>
            <p style="font-weight:600;">Discover the exclusive features of the Ultimate Credit Card:</p>

            <p style="font-weight:600;">Welcome Benefits</p>
            <ul>
                <li>Enjoy bonus reward points upon activation.</li>
                <li>Complimentary flight tickets on reaching specific spends.</li>
            </ul>

            <p style="font-weight:600;">Reward Program</p>
            <ul>
                <li>5 reward points for every Rs. 100 spent on all categories.</li>
                <li>Special bonus points for travel and dining transactions.</li>
            </ul>

            <p style="font-weight:600;">Travel Benefits</p>
            <ul>
                <li>Unlimited complimentary lounge access at international airports.</li>
                <li>Travel insurance coverage for trip cancellations.</li>
            </ul>

            <h2 style="font-weight:700;">Ultimate Credit Card Fees & Charges</h2>
            <ul>
                <li>Joining Fee: Rs. 1,000</li>
                <li>Annual Fee: Rs. 1,000 (waived on annual spends above Rs. 2 Lakhs)</li>
                <li>Interest on outstanding balance: 3.25% per month</li>
                <li>Cash advance fee: Rs. 300 per Rs. 10,000</li>
                <li>Foreign currency markup: 3.5%</li>
            </ul>

            <h2 style="font-weight:700;">Eligibility for Ultimate Credit Card</h2>
            <ul>
                <li>Primary cardholder should be aged between 21 and 65 years.</li>
                <li>Annual income of Rs. 6 Lakhs or above.</li>
            </ul>

            <h2 style="font-weight:700;">Documents Required</h2>
            <ul>
                <li>Proof of identity: Aadhaar, PAN Card, Passport, etc.</li>
                <li>Proof of address: Aadhaar, Utility Bill, Passport, etc.</li>
                <li>Proof of income: Salary slips, Form 16, bank statements.</li>
            </ul>

            <h2 style="font-weight:700;">Reward Redemption</h2>
            <ul>
                <li>Redeem reward points for exclusive products, travel, and experiences through the Ultimate rewards
                    portal.</li>
            </ul>

            <h2 style="font-weight:700;">How to Apply for Ultimate Credit Card?</h2>
            <ul>
                <li>Visit the bank's website, fill out the application form, and provide necessary details.</li>
                <li>An Ultimate representative will contact you to finalize the process.</li>
            </ul>
        </div>
    </div>
</section>

<section class="faq-grid pt-12 pb-120">
    <div class="container">
        <h2 style="font-weight:700; text-align: center; padding-bottom: 20px;">Ultimate Credit Card FAQs</h2>
        <div class="row row-gutter-y-20">
            <div class="col-lg-6">
                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                    <div class="accrodion wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>Can I use my Ultimate Card for cash withdrawals?<span class="accrodion-icon"></span>
                            </h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Yes, you can withdraw cash up to your limit. A cash advance fee of Rs. 300 per Rs.
                                    10,000 will apply.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accrodion wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>How can I redeem my reward points?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Redeem your points for exclusive products, travel, and experiences on the Ultimate
                                    rewards portal.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-2">
                    <div class="accrodion active wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>Can I increase my Ultimate Credit Card limit?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Consistent usage and timely payments make you eligible for a credit limit increase,
                                    evaluated by the bank based on your profile.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accrodion wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>What should I do if I lose my Ultimate Credit Card?<span class="accrodion-icon"></span>
                            </h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Immediately report the loss to customer service to block your card and prevent
                                    unauthorized use.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('head.footer')