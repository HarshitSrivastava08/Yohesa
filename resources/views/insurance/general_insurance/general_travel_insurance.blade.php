@include('head.header')

<section>
    <div class="container-fluid pb-5 do_1">
        <div class="row">
            <div class="col">
                <figure class="im_g"><img src="{{asset('assets/images/axisbank/general_travel.jpg')}}" width="300"></figure>
            </div>
            <div class="col pt-5">
                <h4 class="airtel">Travel Insurance</h4>
            </div>
            <div class="col pt-5">
                <button type="button" class="btn btn-primary"
                    style="padding:10px 30px; background:#4A9B85; font-weight:700; border-radius: 20px;">Get
                    Quote</button>
            </div>
        </div>
    </div>
</section>

<div class="container pt-5">
    <p style="font-size: 17px; line-height:40px;">Travel insurance provides coverage for unexpected events that can
        occur while traveling, ensuring peace of mind and financial protection during your journey.</p>

    <h2 style="font-weight:700;">Key Highlights of Travel Insurance</h2>
    <p style="font-size:17px;">Key highlights of Travel Insurance include:</p>

    <table id="example" class="table table-striped table-bordered" style="width:100%; line-height:30px;">
        <tbody>
            <tr>
                <td>Coverage</td>
                <td>Medical emergencies, trip cancellations, and lost luggage</td>
            </tr>
            <tr>
                <td>Sum Insured</td>
                <td>Varies based on the selected plan and coverage options</td>
            </tr>
            <tr>
                <td>Policy Term</td>
                <td>Single trip and annual multi-trip policies available</td>
            </tr>
            <tr>
                <td>Additional Benefits</td>
                <td>Emergency medical evacuation, trip interruption cover, and more</td>
            </tr>
            <tr>
                <td>No Claim Bonus</td>
                <td>Discounts on renewal for claim-free policies</td>
            </tr>
            <tr>
                <td>Age Limit</td>
                <td>No age restrictions for travelers</td>
            </tr>
        </tbody>
    </table>
</div>

<section>
    <div class="container pt-5">
        <div class="row">
            <h2 style="font-weight: 700;">Features & Benefits of Travel Insurance</h2>

            <p style="font-weight: 600;">Comprehensive Coverage Options</p>
            <ul style="font-size: 17px; line-height:40px;">
                <li>Choose between comprehensive and basic plans based on your travel needs.</li>
                <li>Covers medical emergencies, trip cancellations, and lost baggage.</li>

                <p style="font-weight:600;">Add-On Covers</p>
                <li>Enhance your policy with add-ons like adventure sports coverage or rental car protection.</li>

                <p style="font-weight:600;">Easy Claim Process</p>
                <li>Hassle-free claims assistance through our dedicated support team.</li>

                <p style="font-weight:600;">24/7 Emergency Assistance</p>
                <li>Access to emergency assistance services anytime during your trip.</li>
            </ul>
        </div>
    </div>
</section>

<section class="faq-grid pt-12 pb-120">
    <div class="container">
        <h2 style="font-weight:700; text-align: center; padding-bottom: 20px;">Travel Insurance FAQs</h2>
        <div class="row row-gutter-y-20">
            <div class="col-lg-6">
                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                    <div class="accrodion wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>How to apply for Travel Insurance?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Visit our website, select the travel insurance plan you need, and fill out the online
                                    application form.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accrodion active wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>What documents are required for claims?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>You will need to provide your policy document, travel itinerary, and any relevant
                                    incident reports.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accrodion wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>What is No Claim Bonus?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>No Claim Bonus is a discount on your premium for each year you do not make a claim,
                                    rewarding safe travel.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-2">
                    <div class="accrodion active wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>Can I add additional coverage?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Yes, you can add extra coverage options like trip interruption or adventure sports
                                    coverage.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accrodion wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>What are the exclusions in the policy?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Exclusions typically include pre-existing medical conditions, travel to high-risk
                                    areas, and certain adventure activities.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@include('head.footer')