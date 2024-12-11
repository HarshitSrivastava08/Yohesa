@include('head.header')

<section>
    <div class="container-fluid pb-5 do_1">
        <div class="row">
            <div class="col">
                <figure class="im_g"><img src="{{asset('assets/images/axisbank/health_aditya.jpg')}}" width="300"></figure>
            </div>
            <div class="col pt-5">
                <h4 class="airtel">Aditya Birla Health Insurance</h4>
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
    <p style="font-size: 17px; line-height:40px;">Aditya Birla Health Insurance provides comprehensive health solutions,
        focusing on preventive and wellness-oriented coverage to secure your health and financial well-being.</p>

    <h2 style="font-weight:700;">Key Highlights of Aditya Birla Health Insurance</h2>
    <p style="font-size:17px;">Key highlights of Aditya Birla Health Insurance include:</p>

    <table id="example" class="table table-striped table-bordered" style="width:100%; line-height:30px;">
        <tbody>
            <tr>
                <td>Sum Insured</td>
                <td>Up to Rs. 2 Crore</td>
            </tr>
            <tr>
                <td>Policy Term</td>
                <td>1 year / 2 years / 3 years</td>
            </tr>
            <tr>
                <td>Coverage Type</td>
                <td>Individual and Family Floater options available.</td>
            </tr>
            <tr>
                <td>Pre & Post Hospitalization</td>
                <td>Coverage for up to 60 days before and 180 days after hospitalization.</td>
            </tr>
            <tr>
                <td>No Claim Bonus</td>
                <td>Up to 150% increase in sum insured for every claim-free year.</td>
            </tr>
            <tr>
                <td>Network Hospitals</td>
                <td>Access to over 6,000+ network hospitals across India.</td>
            </tr>
            <tr>
                <td>Age Limit</td>
                <td>Policy available for individuals aged 91 days to 70 years.</td>
            </tr>
        </tbody>
    </table>
</div>

<section>
    <div class="container pt-5">
        <div class="row">
            <h2 style="font-weight: 700;">Features & Benefits of Aditya Birla Health Insurance</h2>

            <p style="font-weight: 600;">Comprehensive Coverage</p>
            <ul style="font-size: 17px; line-height:40px;">
                <li>Hospitalization expenses covered for various illnesses and treatments.</li>
                <li>Cashless treatment at network hospitals across India.</li>
                <li>Day care procedures covered.</li>
                <li>Annual health check-ups included.</li>

                <p style="font-weight:600;">Family Floater Option</p>
                <li>Single sum insured covers the entire family.</li>
                <li>Discounts on premiums for family policies.</li>

                <p style="font-weight:600;">Wellness Benefits</p>
                <li>Wellness coaching, fitness programs, and rewards for a healthy lifestyle.</li>

                <p style="font-weight:600;">Additional Benefits</p>
                <li>Minimal waiting period for pre-existing conditions after a set duration.</li>
                <li>Ambulance expenses covered up to a certain limit.</li>
            </ul>
        </div>
    </div>
</section>

<section class="faq-grid pt-12 pb-120">
    <div class="container">
        <h2 style="font-weight:700; text-align: center; padding-bottom: 20px;">Aditya Birla Health Insurance FAQs</h2>
        <div class="row row-gutter-y-20">
            <div class="col-lg-6">
                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                    <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>How to apply for Aditya Birla Health Insurance?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>To apply, visit our website, choose the Health Insurance Plan, and complete the
                                    application form with the necessary information.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accrodion active wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>What is the waiting period for pre-existing diseases?<span
                                    class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>The waiting period for pre-existing diseases is typically 3 years, depending on the
                                    specific ailment.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>Is maternity cover included?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Maternity cover is available as an add-on with a waiting period of 9 months.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-2">
                    <div class="accrodion active wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>Can I port my existing insurance to Aditya Birla?<span class="accrodion-icon"></span>
                            </h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Yes, porting to Aditya Birla Health Insurance is possible through a simple porting
                                    process.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>What are the exclusions in the plan?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Exclusions include cosmetic procedures, non-prescription treatments, and
                                    self-inflicted injuries.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@include('head.footer')