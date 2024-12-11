@include('head.header')

<section>
    <div class="container-fluid pb-5 do_1">
        <div class="row">
            <div class="col">
                <figure class="im_g"><img src="{{asset('assets/images/axisbank/yes_bank_business.jpg')}}" width="300"></figure>
            </div>
            <div class="col pt-5">
                <h4 class="airtel">YES Bank First Business Credit Card</h4>
                <p class="Cashback"><span class="best">Best for : </span><span class="cas">Business Expenses &
                        Rewards</span></p>
                <p class="best">Card Type :<img src="{{asset('assets/images/axisbank/Master_Card.avif')}}"></p>
            </div>
            <div class="col pt-5">
                <button type="button" class="btn btn-primary"
                    style="padding:10px 30px 10px 30px; background:#4A9B85; font-weight:700;border-radius: 20px;"><a href="{{route('yes_first_business_form')}}" target="_blank">Apply Now</a></button>
            </div>
        </div>
    </div>
</section>

<div class="container pt-5">
    <p style="font-size:17px; line-height:32px;">The YES Bank First Business Credit Card is designed for business owners
        who want to manage their expenses efficiently while earning rewards. This card offers exclusive features such as
        higher credit limits, specialized business services, and rewards for various categories.</p>

    <h2 style="font-weight:700;">Key Highlights of YES Bank First Business Credit Card</h2>

    <p style="font-size:17px;">Below are the main highlights of this business-oriented credit card:</p>

    <table id="example" class="table table-striped table-bordered"
        style="width:100%; line-height:40px; font-size:17PX;">
        <tbody>
            <tr>
                <td>Joining fee</td>
                <td>Rs. 2,500 + GST</td>
            </tr>
            <tr>
                <td>Annual fee </td>
                <td>Rs. 2,500 + GST (Waived on spending Rs. 2 Lakhs annually)</td>
            </tr>
            <tr>
                <td>Benefits </td>
                <td>Higher credit limit, airport lounge access, expense management tools, and insurance benefits</td>
            </tr>
            <tr>
                <td>Rewards </td>
                <td>4 reward points for every Rs. 200 spent on office supplies, travel, and dining</td>
            </tr>
            <tr>
                <td>Age</td>
                <td>21 to 65 years</td>
            </tr>
            <tr>
                <td>Foreign currency transaction fee</td>
                <td>2.50% </td>
            </tr>
        </tbody>
    </table>
</div>

<section>
    <div class="container pt-5">
        <div class="row">
            <h2 style="font-weight: 700;">Features & Benefits of YES Bank First Business Credit Card</h2>

            <p style="font-size:17px;">Explore the tailored features and benefits of the YES Bank First Business Credit
                Card:</p>

            <ul style="font-size: 17px; line-height:40px;">

                <p style="font-weight:600;">Rewards</p>
                <li>4 reward points for every Rs. 200 spent on office supplies, dining, and travel.</li>
                <li>3 reward points for other business-related expenses.</li>
                <li>Complimentary airport lounge access for business travel across India.</li>

                <p style="font-weight:600;">Expense Management Tools</p>
                <li>Integrated tools for tracking and managing business expenses.</li>
                <li>Detailed expense reports and insights for easier accounting and tax filings.</li>

                <p style="font-weight:600;">Insurance Cover</p>
                <li>Comprehensive insurance coverage including purchase protection, credit shield, and accidental cover.
                </li>

                <p style="font-weight:600;">Fuel Surcharge Waiver</p>
                <li>1% fuel surcharge waiver across all fuel stations in India for transactions between Rs. 500 to Rs.
                    5,000.</li>

                <p style="font-weight:600;">Concierge Services</p>
                <li>24x7 global concierge services for business travel bookings, dining, and event arrangements.</li>

            </ul>
        </div>
    </div>
</section>

<section>
    <div class="container pb-5">
        <h2 style="font-weight:700;">Similar Cards</h2>
        <div class="row" style="border:1px solid; border-radius:10px;padding: 10px;">
            <div class="col">
                <figure class="im_g"><img src="{{asset('assets/images/axisbank/yes_bank_business.jpg')}}" width="250"></figure>
                <h4 class="airtel text-center">YES Bank Business Credit Card</h4>
            </div>
            <div class="col pt-5">
                <p class="Cashback"><span class="best">Best for:</span><span class="cas">Business Expenses </span></p>
                <p class="best">Card Type :<img src="{{asset('assets/images/axisbank/Master_Card.avif')}}"></p>
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
                <P class="best">₹ 1,000 + GST</P>

                <div style="padding-top: 60px;">
                    <p>Annual Percentage Fee</p>
                    <p class="best">33.99%</p>
                </div>
            </div>
            <div class="col pt-5">
                <P>Annual Fees</P>
                <P class="best">₹ 1,000 + GST</P>
                <div style="padding-top: 60px;">
                    <p>Reward Point Value</p>
                    <p class="best">1 RP = Rs. 0.25</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('head.footer')