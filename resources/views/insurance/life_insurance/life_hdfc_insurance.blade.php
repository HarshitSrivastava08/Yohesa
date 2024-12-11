@include('head.header')

<section>
    <div class="container-fluid pb-5 do_1">
        <div class="row">
            <div class="col">
                <figure class="im_g"><img src="{{asset('assets/images/axisbank/life_hdfc.png')}}" width="300"></figure>
            </div>
            <div class="col pt-5">
                <h4 class="airtel">HDFC Life Insurance</h4>
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
    <p style="font-size: 17px; line-height:40px;">HDFC Life Insurance provides a broad spectrum of life insurance plans,
        designed to secure the future of you and your loved ones with flexible and customized coverage options.</p>

    <h2 style="font-weight:700;">Key Highlights of HDFC Life Insurance</h2>
    <p style="font-size:17px;">Key highlights of HDFC Life Insurance include:</p>

    <table id="example" class="table table-striped table-bordered" style="width:100%; line-height:30px;">
        <tbody>
            <tr>
                <td>Sum Assured</td>
                <td>Up to Rs. 1 Crore or more depending on the plan</td>
            </tr>
            <tr>
                <td>Policy Term</td>
                <td>5 years to whole life</td>
            </tr>
            <tr>
                <td>Coverage Type</td>
                <td>Individual and Family options available</td>
            </tr>
            <tr>
                <td>Death Benefit</td>
                <td>Sum assured paid out in case of policyholder's death</td>
            </tr>
            <tr>
                <td>Maturity Benefit</td>
                <td>Available on endowment plans; provides financial returns at maturity</td>
            </tr>
            <tr>
                <td>Critical Illness Cover</td>
                <td>Optional add-on for additional protection</td>
            </tr>
            <tr>
                <td>Age Limit</td>
                <td>Policy available for individuals aged 18 to 65 years</td>
            </tr>
        </tbody>
    </table>
</div>

<section>
    <div class="container pt-5">
        <div class="row">
            <h2 style="font-weight: 700;">Features & Benefits of HDFC Life Insurance</h2>

            <p style="font-weight: 600;">Flexible Plans</p>
            <ul style="font-size: 17px; line-height:40px;">
                <li>Wide range of plans, including term, endowment, ULIP, and retirement plans.</li>
                <li>Coverage options that fit individual and family needs.</li>
                <li>Options for regular or single premium payments.</li>

                <p style="font-weight:600;">Tax Benefits</p>
                <li>Enjoy tax deductions under Section 80C and 10(10D) of the Income Tax Act.</li>

                <p style="font-weight:600;">Add-On Covers</p>
                <li>Critical illness cover, accidental death cover, and waiver of premium.</li>

                <p style="font-weight:600;">Maturity Benefits</p>
                <li>Receive maturity benefits with select policies to meet future financial goals.</li>
            </ul>
        </div>
    </div>
</section>

<section class="faq-grid pt-12 pb-120">
    <div class="container">
        <h2 style="font-weight:700; text-align: center; padding-bottom: 20px;">HDFC Life Insurance FAQs</h2>
        <div class="row row-gutter-y-20">
            <div class="col-lg-6">
                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                    <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>How to apply for HDFC Life Insurance?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Visit our website, choose your preferred life insurance plan, and fill out the
                                    application form.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accrodion active wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>What is the claim settlement process for HDFC Life Insurance?<span
                                    class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Submit the necessary documents, and our team will process the claim quickly and
                                    efficiently.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>Does HDFC Life offer ULIP plans?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Yes, HDFC Life offers ULIP plans that combine investment with insurance benefits.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-2">
                    <div class="accrodion active wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>Can I add riders to my HDFC Life Insurance policy?<span class="accrodion-icon"></span>
                            </h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Yes, you can enhance your policy by adding riders such as accidental death or
                                    critical illness cover.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>What are the exclusions in the policy?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Exclusions include suicide within the first year, death under the influence of
                                    alcohol, and other specified conditions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@include('head.footer')