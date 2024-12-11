@include('head.header')

<section>
    <div class="container-fluid pb-5 do_1">
        <div class="row">
            <div class="col">
                <figure class="im_g"><img src="{{asset('assets/images/axisbank/life_bajaj.jpg')}}" width="300"></figure>
            </div>
            <div class="col pt-5">
                <h4 class="airtel">Bajaj Allianz Life Insurance</h4>
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
    <p style="font-size: 17px; line-height:40px;">Bajaj Allianz Life Insurance offers a wide range of insurance products
        designed to meet your financial needs and secure your family's future.</p>

    <h2 style="font-weight:700;">Key Highlights of Bajaj Allianz Life Insurance</h2>
    <p style="font-size:17px;">Key highlights of Bajaj Allianz Life Insurance include:</p>

    <table id="example" class="table table-striped table-bordered" style="width:100%; line-height:30px;">
        <tbody>
            <tr>
                <td>Sum Assured</td>
                <td>Up to Rs. 2 Crore or more depending on the selected plan</td>
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
                <td>Available with certain plans, offering financial returns at maturity</td>
            </tr>
            <tr>
                <td>Critical Illness Cover</td>
                <td>Optional add-on for enhanced protection</td>
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
            <h2 style="font-weight: 700;">Features & Benefits of Bajaj Allianz Life Insurance</h2>

            <p style="font-weight: 600;">Variety of Plan Options</p>
            <ul style="font-size: 17px; line-height:40px;">
                <li>A diverse range of plans including term, ULIP, endowment, and retirement plans.</li>
                <li>Flexible premium payment options, including monthly, quarterly, and yearly payment modes.</li>

                <p style="font-weight:600;">Tax Benefits</p>
                <li>Eligible for tax deductions under Section 80C and 10(10D) of the Income Tax Act.</li>

                <p style="font-weight:600;">Add-On Riders</p>
                <li>Enhance your coverage with riders such as critical illness, accidental death benefit, and waiver of
                    premium.</li>

                <p style="font-weight:600;">Maturity and Bonus Benefits</p>
                <li>Receive maturity benefits and bonuses with select plans to help you achieve your financial goals.
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="faq-grid pt-12 pb-120">
    <div class="container">
        <h2 style="font-weight:700; text-align: center; padding-bottom: 20px;">Bajaj Allianz Life Insurance FAQs</h2>
        <div class="row row-gutter-y-20">
            <div class="col-lg-6">
                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                    <div class="accrodion wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>How to apply for Bajaj Allianz Life Insurance?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Visit our website, choose your desired life insurance plan, and fill out the online
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
                                <p>Submit the necessary documents, and our dedicated team will ensure a quick and
                                    hassle-free claim settlement process.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accrodion wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>Does Bajaj Allianz Life Insurance offer ULIP plans?<span class="accrodion-icon"></span>
                            </h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Yes, Bajaj Allianz offers ULIP plans that provide both insurance coverage and
                                    investment options.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-2">
                    <div class="accrodion active wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>Can I add riders to my Bajaj Allianz policy?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Yes, you can enhance your policy with additional riders such as critical illness
                                    cover, accidental death benefit, and waiver of premium.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accrodion wow fadeInUp" data-wow-delay="0ms">
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