@include('head.header')

<section>
    <div class="container-fluid pb-5 do_1">
        <div class="row">
            <div class="col">
                <figure class="im_g"><img src="{{asset('assets/images/axisbank/yes_bank_reserve.webp')}}" width="300"></figure>
            </div>
            <div class="col pt-5">
                <h4 class="airtel">YES Bank Reserve Credit Card</h4>
                <p class="Cashback"><span class="best">Best for : </span><span class="cas">Ultra-Premium Lifestyle &
                        Exclusive Travel Benefits</span></p>
                <p class="best">Card Type :<img src="{{asset('assets/images/axisbank/visa_card.avif')}}"></p>
            </div>
            <div class="col pt-5">
                <button type="button" class="btn btn-primary"
                    style="padding:10px 30px 10px 30px; background:#4A9B85; font-weight:700;border-radius: 20px;"><a href="{{route('yes_reserve_form')}}" target="_blank">Apply Now</a></button>
            </div>
        </div>
    </div>
</section>
<!-- ============================Card section start tabs================ -->

<!-- ==========================table=============================== -->

<div class="container pt-5">
    <p style="font-size:17px; line-height:32px;">The YES Bank Reserve Credit Card is an exclusive offering tailored for
        individuals who value extraordinary privileges. From unlimited global lounge access to high reward points on
        every purchase, this card is designed to cater to your ultra-premium lifestyle needs.</p>

    <h2 style="font-weight:700;">Key Highlights of YES Bank Reserve Credit Card</h2>

    <p style="font-size:17px;">Below are the main highlights of this ultra-premium credit card:</p>

    <table id="example" class="table table-striped table-bordered"
        style="width:100%; line-height:40px; font-size:17PX;">
        <tbody>
            <tr>
                <td>Joining fee</td>
                <td>Rs. 10,000 + GST</td>
            </tr>
            <tr>
                <td>Annual fee </td>
                <td>Rs. 10,000 + GST</td>
            </tr>
            <tr>
                <td>Benefits </td>
                <td>Unlimited global airport lounge access, exclusive luxury concierge, travel offers, insurance cover,
                    and curated lifestyle experiences.</td>
            </tr>
            <tr>
                <td>Rewards </td>
                <td>10 reward points for every Rs. 100 spent on travel and dining, 5 points on other categories</td>
            </tr>
            <tr>
                <td>Age</td>
                <td>21 to 60 years</td>
            </tr>
            <tr>
                <td>Foreign currency transaction fee</td>
                <td>2.00% </td>
            </tr>
        </tbody>
    </table>
</div>

<section>
    <div class="container pt-5">
        <div class="row">
            <h2 style="font-weight: 700;">Features & Benefits of YES Bank Reserve Credit Card</h2>

            <p style="font-size:17px;">Explore the remarkable features and benefits of the YES Bank Reserve Credit Card:
            </p>

            <ul style="font-size: 17px; line-height:40px;">

                <p style="font-weight:600;">Rewards</p>
                <li>10 reward points for every Rs. 100 spent on travel and dining.</li>
                <li>5 reward points on all other spends.</li>
                <li>Unlimited complimentary access to airport lounges globally.</li>
                <li>Exclusive travel deals through Visa Infinite Privileges.</li>

                <p style="font-weight:600;">Insurance Cover</p>
                <li>Personal Accident Cover up to Rs. 2 crore.</li>
                <li>Air accident cover up to Rs. 5 crore.</li>

                <p style="font-weight:600;">Fuel Surcharge Waiver </p>
                <li>1% fuel surcharge waiver across India for transactions between Rs. 500 to Rs. 10,000.</li>

                <p style="font-weight:600;">Instant EMI</p>
                <li>Convert purchases over Rs. 10,000 into EMIs with flexible tenures.</li>
                <li>Zero documentation and fast processing for EMI conversion.</li>
                <li>Low interest rates ranging from 8% to 12% p.a.</li>

                <p style="font-weight:600;">Concierge Services</p>
                <li>24x7 premium concierge services for flight bookings, dining reservations, and exclusive event
                    access.</li>

            </ul>
        </div>
    </div>
</section>

<section>
    <div class="container pb-5">
        <h2 style="font-weight:700;">Similar Cards</h2>
        <div class="row" style="border:1px solid; border-radius:10px;padding: 10px;">
            <div class="col">
                <figure class="im_g"><img src="{{asset('assets/images/axisbank/Yes3.avif')}}" width="250"></figure>
                <h4 class="airtel text-center">YES First Exclusive Credit Card</h4>
            </div>
            <div class="col pt-5">
                <p class="Cashback"><span class="best">Best for:</span><span class="cas">Luxury Travel &
                        Lifestyle</span></p>
                <p class="best">Card Type :<img src="{{asset('assets/images/axisbank/visa_card.avif')}}"></p>
                <div style="display:flex;justify-content: space-between;">
                    <P>Customer Rating</P>
                    <div class="f_icon" style="color:#ffb400;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p>Are you liking this Credit Card?</p>
                <div style="padding-top: 10px;">
                    <button type="button" class="btn btn-primary"
                        style="padding:8px 10px; background:#fff; color: #000; font-weight:500;border-radius: 10px;">Know
                        More</button>
                    &nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-primary"
                        style="padding:8px 10px; background:#3593B0; font-weight:500;border-radius: 8px;"><a href="{{route('yes_form')}}" target="_blank">Apply</a></button>
                </div>
            </div>
            <div class="col pt-5">
                <P>Joining Fees</P>
                <P class="best">₹ 5,000 + GST</P>

                <div style="padding-top: 60px;">
                    <p>Annual Percentage Fee</p>
                    <p class="best">35.86%</p>
                </div>
            </div>
            <div class="col pt-5">
                <P>Annual Fees</P>
                <P class="best">₹ 5,000 + GST</P>
                <div style="padding-top: 60px;">
                    <p>Reward Point Value</p>
                    <p class="best">1 RP = Rs. 0.30</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('head.footer')