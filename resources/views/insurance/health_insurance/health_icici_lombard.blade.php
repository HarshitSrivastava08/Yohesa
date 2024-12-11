@include('head.header')

<section>
    <div class="container-fluid pb-5 do_1">
        <div class="row">
            <div class="col">
                <figure class="im_g"><img src="{{asset('assets/images/axisbank/health_icici.png')}}" width="300"></figure>
            </div>
            <div class="col pt-5">
                <h4 class="airtel">ICICI Lombard Health Insurance</h4>
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
    <p style="font-size: 17px; line-height:40px;">ICICI Lombard Health Insurance offers comprehensive health coverage,
        ensuring you and your family are protected against unexpected medical expenses.</p>

    <h2 style="font-weight:700;">Key Highlights of ICICI Lombard Health Insurance</h2>
    <p style="font-size:17px;">The key highlights of ICICI Lombard Health Insurance include:</p>

    <table id="example" class="table table-striped table-bordered" style="width:100%; line-height:30px;">
        <tbody>
            <tr>
                <td>Sum Insured</td>
                <td>Up to Rs. 1 Crore</td>
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
                <td>Coverage for up to 60 days before and 90 days after hospitalization.</td>
            </tr>
            <tr>
                <td>No Claim Bonus</td>
                <td>Up to 100% increase in sum insured for every claim-free year.</td>
            </tr>
            <tr>
                <td>Network Hospitals</td>
                <td>Access to over 6,000+ network hospitals across India.</td>
            </tr>
            <tr>
                <td>Age Limit</td>
                <td>Policy can be purchased for individuals aged 91 days to 65 years.</td>
            </tr>
        </tbody>
    </table>
</div>

<section>
    <div class="container pt-5">
        <div class="row">
            <h2 style="font-weight: 700;">Features & Benefits of ICICI Lombard Health Insurance</h2>

            <p style="font-weight: 600;">Comprehensive Coverage</p>
            <ul style="font-size: 17px; line-height:40px;">
                <li>Hospitalization expenses covered for listed ailments and injuries.</li>
                <li>Cashless treatment available at network hospitals.</li>
                <li>Coverage for day care procedures not requiring hospitalization.</li>
                <li>Free health check-up every year.</li>

                <p style="font-weight:600;">Family Floater Option</p>
                <li>Covers the entire family under a single sum insured.</li>
                <li>Additional premium discounts for family policies.</li>

                <p style="font-weight:600;">Wellness Benefits</p>
                <li>Access to wellness programs, consultations, and preventive healthcare services.</li>

                <p style="font-weight:600;">Other Benefits</p>
                <li>No waiting period for pre-existing diseases after a specified duration.</li>
                <li>Ambulance charges covered up to a specified limit.</li>
            </ul>
        </div>
    </div>
</section>

<section class="faq-grid pt-12 pb-120">
    <div class="container">
        <h2 style="font-weight:700; text-align: center; padding-bottom: 20px;"> ICICI Lombard Health Insurance FAQs</h2>
        <div class="row row-gutter-y-20">
            <div class="col-lg-6">
                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                    <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>How to apply for ICICI Lombard Health Insurance?<span class="accrodion-icon"></span>
                            </h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>To apply for ICICI Lombard Health Insurance, visit our website, select the Health
                                    Insurance Plan, and fill out the application form with the required details.</p>
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
                                <p>The waiting period for pre-existing diseases is generally 2 to 4 years, depending on
                                    the specific condition.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>Is maternity cover included in the health plan?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Maternity cover is available as an add-on and typically has a waiting period of 9
                                    months.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-2">
                    <div class="accrodion active wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>Can I port my health insurance to ICICI Lombard?<span class="accrodion-icon"></span>
                            </h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Yes, you can port your existing health insurance policy to ICICI Lombard by following
                                    the porting process.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>Are there any exclusions in the health plan?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Yes, the plan has specific exclusions such as cosmetic surgery and self-inflicted
                                    injuries.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@include('head.footer')