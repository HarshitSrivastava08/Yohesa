@include('head.header')

<section>
    <div class="container-fluid pb-5 do_1">
        <div class="row">
            <div class="col">
                <figure class="im_g"><img src="{{asset('assets/images/axisbank/life_sbi.png')}}" width="300"></figure>
            </div>
            <div class="col pt-5">
                <h4 class="airtel">SBI Life Insurance</h4>
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
    <p style="font-size: 17px; line-height:40px;">SBI Life Insurance provides a comprehensive range of life insurance
        products tailored to protect your family's financial future and ensure peace of mind.</p>

    <h2 style="font-weight:700;">Key Highlights of SBI Life Insurance</h2>
    <p style="font-size:17px;">Key highlights of SBI Life Insurance include:</p>

    <table id="example" class="table table-striped table-bordered" style="width:100%; line-height:30px;">
        <tbody>
            <tr>
                <td>Sum Assured</td>
                <td>Up to Rs. 2 Crore or more depending on the chosen plan</td>
            </tr>
            <tr>
                <td>Policy Term</td>
                <td>5 years to whole life</td>
            </tr>
            <tr>
                <td>Coverage Type</td>
                <td>Individual and family plans available</td>
            </tr>
            <tr>
                <td>Death Benefit</td>
                <td>Guaranteed sum assured paid on the policyholder's death</td>
            </tr>
            <tr>
                <td>Maturity Benefit</td>
                <td>Available with certain plans for financial returns at maturity</td>
            </tr>
            <tr>
                <td>Critical Illness Cover</td>
                <td>Optional add-on for added financial security</td>
            </tr>
            <tr>
                <td>Age Limit</td>
                <td>Policies available for individuals aged 18 to 65 years</td>
            </tr>
        </tbody>
    </table>
</div>

<section>
    <div class="container pt-5">
        <div class="row">
            <h2 style="font-weight: 700;">Features & Benefits of SBI Life Insurance</h2>

            <p style="font-weight: 600;">Comprehensive Plan Options</p>
            <ul style="font-size: 17px; line-height:40px;">
                <li>A variety of plans including term, whole life, ULIP, and endowment policies.</li>
                <li>Flexible premium payment options, including monthly, quarterly, and yearly payment modes.</li>

                <p style="font-weight:600;">Tax Benefits</p>
                <li>Eligible for tax deductions under Section 80C and 10(10D) of the Income Tax Act.</li>

                <p style="font-weight:600;">Add-On Riders</p>
                <li>Enhance your coverage with riders such as critical illness, accidental death benefit, and waiver of
                    premium.</li>

                <p style="font-weight:600;">Maturity and Bonus Benefits</p>
                <li>Receive maturity benefits and bonuses with select plans, assisting you in achieving your financial
                    objectives.</li>
            </ul>
        </div>
    </div>
</section>

<section class="faq-grid pt-12 pb-120">
    <div class="container">
        <h2 style="font-weight:700; text-align: center; padding-bottom: 20px;">SBI Life Insurance FAQs</h2>
        <div class="row row-gutter-y-20">
            <div class="col-lg-6">
                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                    <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>How to apply for SBI Life Insurance?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Visit our website, select your preferred life insurance plan, and complete the online
                                    application form.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accrodion active wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>What is the claim settlement process?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Submit the required documents, and our dedicated team will ensure a prompt and
                                    hassle-free claim settlement process.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>Does SBI Life Insurance offer ULIP plans?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Yes, SBI Life offers ULIP plans that combine insurance coverage with investment
                                    benefits.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-2">
                    <div class="accrodion active wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>Can I add riders to my SBI Life policy?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Yes, you can enhance your policy with additional riders such as critical illness
                                    cover, accidental death benefit, and waiver of premium.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>What are the exclusions in the policy?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Exclusions include suicide within the first year, death due to intoxication, and
                                    other specified conditions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@include('head.footer')