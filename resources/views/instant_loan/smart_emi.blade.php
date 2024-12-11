@include('head.header')

<section>
    <div class="container-fluid pb-5 do_1">
        <div class="row">
            <div class="col">
                <figure class="im_g">
                    <img src="{{asset('assets/images/instant/smart_emi.jpg')}}" width="300">
                </figure>
            </div>
            <div class="col pt-5">
                <h4 class="airtel">Smart EMI on Credit Card</h4>
                <p style="font-size: 17px; line-height:30px;">Convert your high-value credit card purchases into
                    affordable EMIs with Smart EMI options, offering flexibility and easy repayment.</p>
            </div>
            <div class="col pt-5">
                <button type="button" class="btn btn-primary" style="padding:10px 30px 10px 30px; background:#4A9B85; font-weight:700;border-radius: 20px;"><a href="https://applyonline.hdfcbank.com/loan-against-assets/smartemi/smartemi?&amp;Channel=DSA&amp;DSACode=XYOH&amp;LGCode=XYIH&amp;LC1=XYOH&amp;LC2=XYOH&amp;SMCode=S54558#nbb" target="_blank">Apply Now</a></button>
            </div>
        </div>
    </div>
</section>

<div class="container pt-5">
    <h2 style="font-weight:700;">Key Highlights of Smart EMI on Credit Card</h2>
    <p style="font-size:17px;">Our Smart EMI feature offers a convenient way to manage your high-value credit card
        purchases with the following benefits:</p>

    <table class="table table-striped table-bordered" style="width:100%; line-height:30px;">
        <tbody>
            <tr>
                <td>Conversion Amount</td>
                <td>Eligible for transactions above Rs. 5,000</td>
            </tr>
            <tr>
                <td>Repayment Tenure</td>
                <td>3 to 24 months</td>
            </tr>
            <tr>
                <td>Interest Rate</td>
                <td>Starting from 12% per annum</td>
            </tr>
            <tr>
                <td>Processing Fee</td>
                <td>1% of the converted amount or Rs. 99, whichever is higher</td>
            </tr>
            <tr>
                <td>Prepayment Option</td>
                <td>Available after 3 EMIs with minimal charges</td>
            </tr>
        </tbody>
    </table>
</div>

<section>
    <div class="container pt-5">
        <h2 style="font-weight: 700;">Features & Benefits of Smart EMI on Credit Card</h2>

        <p style="font-weight: 600;">Affordable Repayments</p>
        <ul style="font-size: 17px; line-height:40px;">
            <li>Convert large purchases into manageable monthly payments.</li>
            <li>Flexible tenure options from 3 to 24 months.</li>

            <p style="font-weight:600;">Simple and Quick Process</p>
            <li>Instant conversion of eligible transactions to EMI via mobile banking or net banking.</li>
            <li>No documentation required for processing.</li>

            <p style="font-weight:600;">Additional Benefits</p>
            <li>Competitive interest rates, making it an affordable way to manage finances.</li>
            <li>Easy prepayment option after 3 EMIs with minimal fees.</li>
        </ul>
    </div>
</section>

<section class="faq-grid pt-12 pb-120">
    <div class="container">
        <h2 style="font-weight:700; text-align: center; padding-bottom: 20px;">Smart EMI on Credit Card FAQs</h2>
        <div class="row row-gutter-y-20">
            <div class="col-lg-6">
                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                    <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>What purchases are eligible for Smart EMI conversion?<span
                                    class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Transactions above Rs. 5,000 are eligible for conversion into Smart EMI.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accrodion active wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>Can I prepay my Smart EMI?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Yes, prepayment is available after completing 3 EMIs with minimal charges.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-2">
                    <div class="accrodion active wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>How do I apply for Smart EMI on my credit card?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>You can apply via mobile banking or net banking for eligible transactions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                        <div class="accrodion-title">
                            <h4>What is the interest rate for Smart EMI?<span class="accrodion-icon"></span></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Interest rates start at 12% per annum, depending on the tenure and other conditions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('head.footer')