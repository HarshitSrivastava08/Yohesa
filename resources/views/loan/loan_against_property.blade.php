@include('head.header')

<style>
.instant {
    font-weight: 700;
}

.th_p {
    line-height: 28px;
}

.sha_dow {
    box-sizing: border-box;
    box-shadow: 0px 0px 10px 0px lightgray;
    border-radius: 15px;
}
</style>



<section>
    <div class="container sha_dow pb-5">
        <div class="row">
            <div class="col-md-6 pt-5">
                <h1 class="instant">Loan Against <br>Property to fulfil <br>your dreams</h1>
                <p>Loan against property or LAP is a mortgage or secured loan availed after pledging a property as
                    collateral. The interest rate starts from 9% p.a. You can avail of LAP up to 80% of property value
                    for maximum of 15 years.</p>
                <button type="button" class="btn btn-primary"
                    style="padding:10px 30px 10px 30px; background:#4A9B85; font-weight:700;border-radius: 20px;">Compare
                    and Apply</button>
            </div>

            <div class="col-md-6 pt-5">
                <img src="{{asset('assets/images/Loan_against_property.svg')}}">
            </div>
        </div>
    </div>
</section>

<section class="pt-5">
    <div class="container sha_dow pb-5 pt-5">
        <div class="row">
            <div class="col-md-6 pt-5">

                <h1 class="instant">Loan Against Property Offers Starting @9% p.a.</h1>

                <p style="font-size:20px">You are just a few clicks away from the best offer on loan against property.
                    Share your name, mobile number & email id to unlock customised property loan offers in your city.
                    Compare and choose according to your specific requirements without any obligation. </p>
            </div>
            <div class="col-md-6 pt-5">
                <h1 class="instant">Loan Against Property Offers Starting @9% p.a.</h1>

                <input type="text" class="form-control" placeholder="Full Name"><br>
                <input type="number" class="form-control" placeholder="Phone Number"><br>
                <input type="email" class="form-control" placeholder="Email Address"><br>
                <input type="number" class="form-control" placeholder="Loan Amount"><br>
                <input type="checkbox">I accept Privacy Policy and Terms and Conditions. I appoint MyMoneyMantra as
                authorized representative to receive my credit information from Experian for the purpose of providing
                access to credit &amp; targeted offers ('End Use Purpose') as defined in given<br>
                <input type="checkbox">Allow MyMoneyMantra to send messages on &nbsp; whatsapp<br>
                <button type="button" class="btn btn-primary"
                    style="padding:10px 30px 10px 30px; background:#4A9B85; font-weight:700;border-radius: 20px;">Let's
                    Go!</button>


            </div>
        </div>
    </div>
</section>

<section class="pt-5">
    <div class="container sha_dow pb-5 pt-5">
        <div class="row">
            <div class="col-md-4 pt-5">
                <img src="{{asset('assets/images/shield.svg')}}">
                <h4 class="instant">Easy approval & sanction</h4>

                <p>Loan against property is a secured loan and eligibility criteria are easy to meet. You can apply for
                    high-ticket LAPs for education, business or personal reasons and avail of financing up to Rs. 15
                    crore with minimum hassles. </p>
            </div>
            <div class="col-md-4 pt-5">
                <img src="{{asset('assets/images/shield.svg')}}">
                <h4 class="instant">Attractive interest rates</h4>
                <p>The interest rate for a loan against property starts from 9% p.a. You get a higher loan amount at
                    affordable EMI. Unlike personal loans, property loans cost less and offer greater repayment
                    flexibility with longer tenure options.</p>
            </div>
            <div class="col-md-4 pt-5">
                <img src="{{asset('assets/images/shield.svg')}}">
                <h4 class="instant">Flexible tenure & EMI</h4>
                <p>A loan against property offers you maximum liquidity value for your property. You can avail of
                    financing for up to 15 years. By choosing a long-tenure property loan, you get lower EMI option and
                    ease of repayment. </p>
            </div>
        </div>
    </div>
</section>

<!-- ======================================================== -->
<section>
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-6">
                <h4 class="airtel">View and improve your credit score - for free.</h4>
                <p>Know how good your score is</p>
                <p>Get insights on how to improve it</p>
                <p>Unlock offers as per your score</p>
                <div>
                    <button type="button" class="btn btn-primary"
                        style="padding:10px 30px 10px 30px; background:#4A9B85; font-weight:700;border-radius: 20px;">Evaluate
                        now</button>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{asset('assets/images/chart.png')}}">
            </div>
        </div>
    </div>
</section>
<!-- ======================testimonial============ -->
<section>
    <div class="container pt-5">
        <div class="wrapper">
            <ul class="carousel">
                <li class="card">
                    <div class="img"><img src="{{asset('assets/images/testimonial/apply1.png')}}" draggable="false"></div>

                </li>
                <li class="card">
                    <div class="img"><img src="{{asset('assets/images/testimonial/apply2.png')}}" draggable="false"></div>
                </li>
                <li class="card">
                    <div class="img"><img src="{{asset('assets/images/testimonial/apply3.png')}}" draggable="false"></div>
                </li>
                <li class="card">
                    <div class="img"><img src="{{asset('assets/images/testimonial/apply4.png')}}" draggable="false"></div>
                </li>
                <li class="card">
                    <div class="img"><img src="{{asset('assets/images/testimonial/apply5.png')}}" draggable="false"></div>
                </li>

                <li class="card">
                    <div class="img"><img src="{{asset('assets/images/testimonial/apply6.png')}}" draggable="false"></div>
                </li>
            </ul>

        </div>
    </div>
</section>

<section>
    <div class="container pt-5">
        <div class="row">
            <h2 class="instant text-center pt-5">Financial tools</h2>
            <div class="col-md-6">
                <div class="box sha_dow pb-5 pt-5 pl-10">
                    <h4 class="airtel">EMI Calculator</h4>
                    <p>Find out exactly how much you need to pay for your next purchase</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box sha_dow pb-5 pt-5 pl-10">
                    <h4 class="airtel">Loan Against Property Calculator</h4>
                    <p>This calculator is useful in computing the EMI of a Loan Against Property.</p>
                </div>
            </div>
        </div>
</section>

<!-- =============================faq=============== -->
<section>
    <h2 class="instant text-center pt-5">Learn More About Loan against Property</h2>
    <section class="faq-grid pt-120 pb-120" style="padding-top: 80px;">
        <div class="container sha_dow pb-5">
            <div class="row row-gutter-y-20">
                <div class="col-lg-12">
                    <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                        <!--Start Faq One Single-->
                        <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                            <div class="accrodion-title">
                                <h4>✅ Loan against Property Details<span class="accrodion-icon"></span></h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Loan against Property (LAP) can be availed against the mortgage of a self-owned
                                        property for any personal or business purposes. The property acts as a
                                        collateral to support the finance provided by the lender. The margin for Loan
                                        against Property usually ranges from 50-90% of the value of the property (also
                                        known as LTV or Loan-to-Value). </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Faq One Single-->
                        <!--Start Faq One Single-->
                        <div class="accrodion active wow fadeInUp" data-wow-delay="0ms">
                            <div class="accrodion-title">
                                <h4>✅ Features and Benefits of Loan Against Property<span class="accrodion-icon"></span>
                                </h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Each lender has their own eligibility criteria for availing LAP. Below are some
                                        common criteria to be eligible for a mortgage loan: </p>
                                    <ul>
                                        <li>Age: Minimum 21 years and maximum 65 years.</li>
                                        <li>Profession: Both self-employed individuals and salaried persons with a
                                            regular source of income are eligible for a Loan Against Property.</li>
                                        <li>Joint applications: Co-applicants are permissible. Lenders can accept the
                                            income of the co-applicants for arriving at the eligibility.</li>
                                        <li>Ownership:</li>
                                        <ul>
                                            <li>The applicant should have unencumbered property in their name. The
                                                property can be residential, commercial, or industrial. </li>
                                            <li>Agricultural land is not acceptable as security for the loan. </li>
                                            <li>Many banks stipulate that the property should either be vacant or
                                                self-occupied. </li>
                                            <li>Some of the banks do not consider a property that is let out on rent or
                                                lease to third parties. </li>
                                            <li>Some lending institutions sanction loan against vacant residential plots
                                            </li>
                                        </ul>
                                        <li>Margin: The margin requirement for Loan Against Property can be 10% to 50%
                                            of the market value of the property.</li>
                                        <li>Current obligations: The take-home pay norms come into effect. Usually, one
                                            should have a take-home pay of 50% after accounting for all the EMIs
                                            including the proposed one for the Loan against Property. Hence, it is
                                            imperative for the borrowers to declare their current obligations.</li>
                                        <li>Credit history: The lending banks are members of CIBIL (Credit Information
                                            Bureau (India) Limited). They can pull out the records from CIBIL to
                                            determine your credit score. Usually, a credit score in the range of 600 and
                                            above is acceptable.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Faq One Single-->
                        <!--Start Faq One Single-->
                        <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                            <div class="accrodion-title">
                                <h4>✅ Mortgage Loan Interest Rate & Charges applicable by Property Type<span
                                        class="accrodion-icon"></span></h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <ul>
                                        <li>Upfront fees: Many banks follow the procedure of collecting upfront fees for
                                            processing the application. They adjust the fees with the processing fee in
                                            case they approve the loan. Remember, this is a non-refundable fee. It is
                                            usually in the range of Rs. 3,000 to Rs. 5,000.</li>
                                        <li>Processing fees: The regular processing fees are in the range of 0.50-1.00%.
                                        </li>
                                        <li>Valuation charges: Normally, these charges are included in the processing
                                            fees. But, some banks charge it as a separate entity. These charges are
                                            payable to the valuation engineer who determines the value of the property
                                            and submits the valuation report to the bank.</li>
                                        <li>Legal scrutiny charges: Similar to the valuation charges, some banks include
                                            these charges in the processing fees. At times, you have to incur these
                                            charges separately. It is payable to the advocate who conducts the legal
                                            search of the property and submits the Legal Scrutiny Report.</li>
                                        <li>Mortgage registration charges: Some states in India do not require the
                                            registration of the equitable mortgage. It is compulsory in states like
                                            Tamil Nadu. You have to incur these charges (0.5% of the loan amount subject
                                            to a maximum of Rs. 25,000 as stamp duty and Rs. 5,100 as equitable mortgage
                                            registration charges).</li>
                                        <li>Prepayment charges: Some banks charge prepayment charges to the tune of 2%
                                            to 5% of the outstanding loan It depends from bank to bank.</li>
                                        <li>Insurance: Insurance of the property to be mortgaged to the bank is
                                            compulsory. Also, some banks have tie-ups with insurance companies who
                                            market their products like loan insurance, health insurance, and personal
                                            accident coverage. These are optional charges.</li>
                                    </ul>
                                    <p>You can also check Loan Against Property Interest Rate</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Faq One Single-->
                        <!--Start Faq One Single-->
                        <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                            <div class="accrodion-title">
                                <h4>✅ Loan Against Property Interest Rates of All Banks and NBFCs 2023 <span
                                        class="accrodion-icon"></span></h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <table id="example" class="table table-striped table-bordered"
                                        style="width:100%; line-height:30px; font-size:15px;">
                                        <thead>
                                            <tr>
                                                <th>Bank Name</th>
                                                <th>Interest Rate</th>
                                                <th>Processing Fees</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>HDFC Bank</td>
                                                <td>9.50% - 11.00%</td>
                                                <td>Up to 1.50% of loan amount + taxes</td>
                                            </tr>
                                            <tr>
                                                <td>IDFC First</td>
                                                <td>9.00% - 20.00%</td>
                                                <td>Up to 3% of Loan Amount</td>
                                            </tr>
                                            <tr>
                                                <td>HSBC Bank</td>
                                                <td>9.75%</td>
                                                <td>1% of loan amount + GST</td>
                                            </tr>
                                            <tr>
                                                <td>Kotak Mahindra Bank</td>
                                                <td>9.50% - 10.50%</td>
                                                <td>1% of loan amount + GST</td>
                                            </tr>
                                            <tr>
                                                <td>PNB Housing</td>
                                                <td>9.24% - 12.45%</td>
                                                <td>2% of loan amount + GST</td>
                                            </tr>
                                            <tr>
                                                <td>State Bank of India</td>
                                                <td>10.10% - 11.65%</td>
                                                <td>Up to 1% of loan amount</td>
                                            </tr>
                                            <tr>
                                                <td>Federal Bank</td>
                                                <td>11.15% - 14.80%</td>
                                                <td>0.50% of loan amount</td>
                                            </tr>
                                            <tr>
                                                <td>Home First</td>
                                                <td>12.80% - 18.50%</td>
                                                <td>Rs 2,500 + GST</td>
                                            </tr>
                                            <tr>
                                                <td>Bank of India</td>
                                                <td>10.10%</td>
                                                <td>Up to 0.50% of loan amount</td>
                                            </tr>
                                            <tr>
                                                <td>Bank of Baroda</td>
                                                <td>10.85% - 16.50%</td>
                                                <td>Up to 1% of loan amount</td>
                                            </tr>
                                            <tr>
                                                <td>IDBI Bank</td>
                                                <td>9.50% - 11.45%</td>
                                                <td>1% of loan amount</td>
                                            </tr>
                                            <tr>
                                                <td>Central Bank of India</td>
                                                <td>9.75% - 13%</td>
                                                <td>Up to 1% of loan amount</td>
                                            </tr>
                                            <tr>
                                                <td>Bank of Maharashtra</td>
                                                <td>10.95% - 11.95%</td>
                                                <td>1% of loan amount + GST</td>
                                            </tr>
                                            <tr>
                                                <td>Jammu & Kashmir Bank</td>
                                                <td>11.45%</td>
                                                <td>Up to 1% of loan amount + GST</td>
                                            </tr>
                                            <tr>
                                                <td>South Indian Bank</td>
                                                <td>13.15% - 14.40%</td>
                                                <td>1% of loan amount</td>
                                            </tr>
                                            <tr>
                                                <td>YES Bank</td>
                                                <td>8.85%</td>
                                                <td>Up to 1% of loan amount + GST</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- End Faq One Single-->
                        <!--Start Faq One Single-->
                        <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                            <div class="accrodion-title">
                                <h4>✅ Loan against Property Process<span class="accrodion-icon"></span></h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <li>Visit the official website of the lender to fill in the online loan application
                                        form or fill it instantly through our website.</li>
                                    <li>On completion of this mortgage loan process, you will be able to choose the
                                        offer that suits your requirements. You should keep your application form and
                                        documents ready. We have a special team to assist you in this regard at no extra
                                        cost.</li>
                                    <li>The lender has the responsibility of verifying the KYC and income proof
                                        documents. The lender would like to inspect the property and have a discussion
                                        with the borrower to obtain first-hand information about the borrower's
                                        employment, business, income, and investments.</li>
                                    <li>Banks have advocates on their panel to carry out a legal search for the last 30
                                        years to ensure the property is free from any encumbrances and that the borrower
                                        has the clear title to it. It is a prerequisite for the equitable mortgage to be
                                        valid and binding on the borrower.</li>
                                    <li>The evaluation of the property is the next step following which the banks
                                        appraise the loan application for the eligibility amount.</li>
                                    <li>On the approval of the loan, the bank sends you the sanction letter that you
                                        have to go through and agree to the terms and conditions. MyMoneyMantra helps
                                        you in this regard.</li>
                                    <li>Finally, you have to execute the equitable mortgage and register it (if
                                        registration is compulsory - It is not so in some states).</li>
                                    <li>We help you with the disbursement process as well.</li>
                                </div>
                            </div>
                        </div>
                        <!-- End Faq One Single-->
                        <!--Start Faq One Single-->
                        <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                            <div class="accrodion-title">
                                <h4>✅ How to Get the Best Mortgage Loan?<span class="accrodion-icon"></span></h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <li>Do a thorough market research about the best mortgage loan providers in India.
                                    </li>
                                    <li>Compare interest rates, fees & charges, features, documentation requirement,
                                        eligibility and other factors of the top lenders.</li>
                                    <li>Check your eligibility, CIBIL score, and repayment capacity.</li>
                                    <li>Opt for a reputed lender who can offer the best loan against property deal that
                                        suits your finances.</li>
                                    <li>Approach the lender to apply for loan against property.</li>
                                </div>
                            </div>
                            <!-- End Faq One Single-->
                            <!--Start Faq One Single-->
                            <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                                <div class="accrodion-title">
                                    <h4>✅ Types of Loan Against Property <span class="accrodion-icon"></span></h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Types of loan against property can be classified based on the purpose for
                                            which you avail the loan.</p>
                                        <ul>
                                            <li>Business Expansion Loans: Business entities can avail this facility for
                                                acquiring new machinery, purchase of plant, meeting working capital
                                                requirements, and invest in new technology or business. The lending
                                                banks require collateral in the form of property, residential,
                                                commercial, or industrial. Depending on the nature of the property
                                                available as collateral, the lending banks calculate the loan
                                                eligibility. For commercial properties, the LTV is around 55- 65%. In
                                                the case of industrial properties, the LTV reduces to 40-55% whereas the
                                                LTV in the case of residential property is in the range of 65-70%.</li>
                                            <li>Working Capital Overdraft Facility: Banks sanction overdraft facilities
                                                against the property for meeting the day-to-day working capital
                                                requirements. Under such circumstances, the property is accepted as
                                                collateral. Lending banks estimate the amount of finance required based
                                                on the following figures:</li>
                                            <ul>
                                                <li>Property value and nature of the property</li>
                                                <li>Actual working capital requirement calculated as per the internal
                                                    policies of the bank, usually the Projected Annual Turnover method.
                                                </li>
                                            </ul>
                                            <li>Personal Expenses: Individuals can also avail Loan against the Property
                                                for personal expenses such as medical expenses, educational expenses,
                                                marriages, travel, as well as for purchasing consumer durables.</li>
                                            <li>Home Renovation: Usually, people do not avail this loan for renovating
                                                homes as there are separate schemes available at comparatively lower LAP
                                                interest rates. However, there can be circumstances when the borrower
                                                might have to resort to avail a Loan against Property for home
                                                renovation.</li>
                                            <li>Lease Rental Discounting: Some banks offer loans against the future rent
                                                receivables, especially in metropolitan and urban areas. One should note
                                                that the property that fetches the rent should also be mortgaged in
                                                favour of the bank. Banks usually finance in the range of 75% to 90% of
                                                the future lease/rent receivables. The tenure of such loans is shorter
                                                and should end before the expiry of the lease or the rental</li>
                                    </div>
                                </div>
                            </div>
                            <!-- End Faq One Single-->
                            <!--Start Faq One Single-->
                            <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                                <div class="accrodion-title">
                                    <h4>✅ Mortgage Loan EMI Calculator<span class="accrodion-icon"></span></h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>You can use the MyMoneyMantra EMI Calculator to calculate your Loan Against
                                            Property EMI. To do the EMI calculation, open our LAP EMI Calculator and
                                            just enter the details required to know the result. Along with the EMI, you
                                            also get a full chart showing the breakup of principal and interest
                                            repayment throughout the entire duration of the loan.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Faq One Single-->
                            <!--Start Faq One Single-->
                            <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                                <div class="accrodion-title">
                                    <h4>✅ Documents Required for Mortgage Loan <span class="accrodion-icon"></span></h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Following are the documents required for mortgage loan:</p>
                                        <table id="example" class="table table-striped table-bordered"
                                            style="width:100%; line-height:30px; font-size:15px;">
                                            <thead>
                                                <tr>
                                                    <th>Document Type</th>
                                                    <th>Documents Acceptable </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Identity Proof</td>
                                                    <td>
                                                        <ul>
                                                            <li>PAN Card</li>
                                                            <li>Aadhaar Card</li>
                                                            <li>Voter ID</li>
                                                            <li>Passport</li>
                                                            <li>Driving Licence</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> Address Proof</td>
                                                    <td>
                                                        <ul>
                                                            <li>Registered Rent agreement</li>
                                                            <li>Aadhaar Card</li>
                                                            <li>Driving Licence</li>
                                                            <li>Lease agreement</li>
                                                            <li>Passport</li>
                                                            <li>Latest gas/Electricity bill</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Income/Financial Documents</td>
                                                    <td>
                                                        <ul>
                                                            <li>Salary slips for the last 6 months for salaried
                                                                employees (In addition, IT returns for the previous 3
                                                                years along with Form 16).</li>
                                                            <li>IT returns for the past 3 years for self-employed
                                                                persons (Some banks accept 2 years IT returns as well).
                                                            </li>
                                                            <li>Statement of A/c for the past 1 year where your salary
                                                                is credited (in the case of salaried people).</li>
                                                            <li>Profit and Loss statement and Balance sheet for the last
                                                                2 years in the case of self-employed persons.</li>
                                                            <li>Sales tax, GST registration certificates, if applicable.
                                                            </li>
                                                            <li>Partnership deed in case of partnership firms (if the
                                                                applicant is one of the partners or the firm itself).
                                                            </li>
                                                            <li>Certificate of Incorporation for limited companies(if
                                                                the applicant is one of the directors or the company
                                                                itself).</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Property Documents:</td>
                                                    <td>
                                                        <ul>
                                                            <li>Copies of all property documents that can establish the
                                                                chain of ownership for the past 30 years</li>
                                                            <li>Encumbrance certificate for 30 years</li>
                                                            <li>Property tax paid receipt</li>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Other Documents</td>
                                                    <td>
                                                        <ul>
                                                            <li>Loan application form</li>
                                                            <li>Processing fee cheque</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- End Faq One Single-->
                            <!--Start Faq One Single-->
                            <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                                <div class="accrodion-title">
                                    <h4>✅ Prepayment of Loan Against Property<span class="accrodion-icon"></span></h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>The best part about loan against property is that you can prepay your loan
                                            before the end of the repayment tenure if you wish to. As per the RBI’s
                                            rules, this facility does not involve any prepayment charges if the loan is
                                            based on floating mortgage interest rates. For other variants, lenders may
                                            charge prepayment charges to the tune of 2% to 5% of the outstanding loan.
                                            It depends from bank to bank.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Faq One Single-->
                            <!--Start Faq One Single-->
                            <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                                <div class="accrodion-title">
                                    <h4>✅ Why Apply for a Loan against Property with MyMoneyMantra? <span
                                            class="accrodion-icon"></span></h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Many types of mortgage loans exist in the industry, i.e., mortgages,
                                            commercial mortgages, and industrial mortgages. Each bank has its product
                                            and interest rate. It is tedious to compare the products offered by a range
                                            of banks.</p>
                                        <p>MyMoneyMantra can help you in this regard. We procure information from
                                            various sources and display it on a single screen thereby allowing you to
                                            compare a range of products. It helps you make an informed decision. We help
                                            you with other aspects of the deal like demographics, income and repaying
                                            capacity, and so forth.</p>
                                        <h3>At MyMoneyMantra, you have access to:</h3>
                                        <ul>
                                            <li>The lowest rate of interest: The comparison on the screen allows you to
                                                choose the lowest rate on offer.</li>
                                            <li>Lowest processing fees: Usually, banks charge processing fees to the
                                                extent of 0.50-1%. As there is an involvement of a high amount,
                                                processing fees can constitute a significant chunk of your expenses.
                                            </li>
                                            <li>Easy documentation: The credit team at MyMoneyMantra helps in completion
                                                of documentation formalities.</li>
                                            <li>Higher Loan to Value Ratio (LTV): The LTV differs from bank to bank. At
                                                MyMoneyMantra, you will be able to compare the various margin rates and
                                                choose the one most suitable for you.</li>
                                            <li>Prepayment clauses: These are hidden charges that borrowers usually
                                                ignore. It can be in the range of 2-5%. MyMoneyMantra helps you compare
                                                the prepayment clauses of various banks and help you find the best
                                                choice.</li>
                                            <li>Transaction charges: LAP requires the creation of an equitable mortgage
                                                of property. It can cost you a lot of money ranging from advocate fee,
                                                evaluation fee, stamp duty on mortgage registration, and so on. Some
                                                banks include the advocate fee and evaluation fee in their processing
                                                fee structure whereas some banks charge separately. MyMoneyMantra helps
                                                you make this distinction and gets the deal most beneficial for you.
                                            </li>
                                        </ul>
                                        <p>MyMoneyMantra has specialists who have experience of over 28 years in the
                                            field of Loan against Property and can help you:</p>
                                        <ul>
                                            <li>Assess your demographic and personal profile.</li>
                                            <li>Examine your previous repayment record.</li>
                                            <li>Understand the various terms used by bankers such as Legal Scrutiny
                                                Report (LSR), and the other policies of the banks in connection with a
                                                Loans against Property.</li>
                                            <li>Understand the fine print that people frequently overlook.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Faq One Single-->
                            <!--Start Faq One Single-->
                            <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                                <div class="accrodion-title">
                                    <h4>✅ What types of properties are accepted by lenders to provide Loan Against
                                        Property (LAP)?<span class="accrodion-icon"></span></h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <li>Industrial properties, including factories, warehouses, and processing
                                            units.</li>
                                        <li>Commercial properties, including malls, complexes, shops, office buildings,
                                            and hotel buildings.</li>
                                        <li>Residential properties, including residential homes, apartments, flats, and
                                            individual houses.</li>
                                        <li>Schools, hospitals, cinema halls and other properties .</li>
                                        <li>It can also be provided against non-agricultural land.</li>
                                        <li>LAP is also offered against unbuilt/under construction property if it falls
                                            under the list of approved builders of banks/ NBFCs.</li>
                                    </div>
                                </div>
                            </div>
                            <!-- End Faq One Single-->
                            <!--Start Faq One Single-->
                            <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                                <div class="accrodion-title">
                                    <h4>✅ Which bank is best for loan against property?<span
                                            class="accrodion-icon"></span></h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>ICICI, IDFC Bank, Kotak Bank, HDFC, SBI, Federal bank are some of the banks
                                            which are offering great deals on loan against property.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Faq One Single-->
                            <!--Start Faq One Single-->
                            <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                                <div class="accrodion-title">
                                    <h4>✅ What is a mortgage loan? <span class="accrodion-icon"></span></h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>A mortgage loan is a loan provided by banks and other financial institutions
                                            against the mortgage of property or other assets for personal as well as
                                            business purposes.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Faq One Single-->
                            <!--Start Faq One Single-->
                            <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                                <div class="accrodion-title">
                                    <h4>✅ How can I apply for a mortgage loan?<span class="accrodion-icon"></span></h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>You can apply for a mortgage loan through MyMoneyMantra, through the lender’s
                                            website, visiting the nearest branch of the loan provider or by calling on
                                            their customer care number.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Faq One Single-->
                            <!--Start Faq One Single-->
                            <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                                <div class="accrodion-title">
                                    <h4>✅ What is a reverse mortgage loan? <span class="accrodion-icon"></span></h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>A Reverse Mortgage Loan is a credit facility which provides an additional
                                            income source to senior citizens of India, who have a self-owned or
                                            self-occupied home in India. It is a financial arrangement designed for
                                            senior citizens to fulfil their funding needs.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Faq One Single-->
                            <!--Start Faq One Single-->
                            <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                                <div class="accrodion-title">
                                    <h4>✅ What is the maximum loan tenure available under LAP?<span
                                            class="accrodion-icon"></span></h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Most lenders a maximum repayment tenure of 15 to 25 years for LAP.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Faq One Single-->
                            <!--Start Faq One Single-->
                            <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                                <div class="accrodion-title">
                                    <h4>✅ How much loan we can get against property?<span class="accrodion-icon"></span>
                                    </h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>You can get as much as 90% of property’s market value as a loan against your
                                            property, depending on your property’s value.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Faq One Single-->
                            <!--Start Faq One Single-->
                            <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                                <div class="accrodion-title">
                                    <h4>✅ Can NRIs avail loans against property?<span class="accrodion-icon"></span>
                                    </h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Yes, NRIs as well as PIOs can get LAP in India if they are salaried, work for
                                            a reputed organization in selected countries and own a
                                            residential/commercial property in India.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Faq One Single-->
                            <!--Start Faq One Single-->
                            <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                                <div class="accrodion-title">
                                    <h4>✅ What is the difference between home loan and Loan Against Property?<span
                                            class="accrodion-icon"></span></h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>A home loan is availed for the purchase/construction/renovation/repair of a
                                            residential house property whereas LAP is availed to fulfill any personal or
                                            business requirement just like a personal loan.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Faq One Single-->
                            <!--Start Faq One Single-->
                            <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                                <div class="accrodion-title">
                                    <h4>✅ How much CIBIL score is required for loan against property?<span
                                            class="accrodion-icon"></span></h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Individuals with a minimum CIBIL score of 600 or above acain avail LAP.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Faq One Single-->
                            <!--Start Faq One Single-->
                            <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                                <div class="accrodion-title">
                                    <h4>✅ How to get a loan against property without income proof?<span
                                            class="accrodion-icon"></span></h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <li>Elaborate your income to the lender.</li>
                                        <li>Maintain a high average monthly balance in your savings bank account.</li>
                                        <li>Opt for a lower loan-to-value (LTV).</li>
                                        <li>You can also consider Peer-to-Peer lending alternatives.</li>
                                        <li>Apply with a co-applicant.</li>
                                    </div>
                                </div>
                            </div>
                            <!-- End Faq One Single-->
                            <!--Start Faq One Single-->
                            <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                                <div class="accrodion-title">
                                    <h4>✅ What is the process of Mortgage loan?<span class="accrodion-icon"></span></h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <li>Fill in the application form and submit it along with the required
                                            documents.</li>
                                        <li>Lenders will verify all the details.</li>
                                        <li>The property to be mortgaged will be evaluated by the lender.</li>
                                        <li>After evaluation and your eligibility check, your application will be
                                            approved if you are eligible.</li>
                                        <li>You will receive the loan agreement.</li>
                                        <li>If you agree with all the terms and sign the document, the loan amount will
                                            be transferred to your account within a few days.</li>
                                        <p>You can also check mortgage loan interest rate</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Faq One Single-->
                            <!--Start Faq One Single-->
                            <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                                <div class="accrodion-title">
                                    <h4>✅ Can I get a mortgage loan with bad credit?<span class="accrodion-icon"></span>
                                    </h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Yes. Being a secured loan, your application can be approved with a low credit
                                            score as well. You can also co-apply for the loan with your earning spouse
                                            or other co-applicants.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Faq One Single-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
</section>

<section>
    <section class="faq-grid pt-12 pb-120">
        <div class="container">
            <div class="row row-gutter-y-20">
                <div class="col-lg-6">
                    <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                        <!--Start Faq One Single-->
                        <div class="accrodion wow fadeInUp" data-wow-delay="0ms">
                            <div class="accrodion-title">
                                <h4>
                                    <i class="fa fa-university"></i> <!-- Bank Loan Icon -->
                                    Loan Against Property Providers
                                    <span class="accrodion-icon">
                                        <i class="fa fa-plus"></i> <!-- Plus Icon -->
                                    </span>
                                </h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>SBI Loan Against Property,LAP without Income Proof and ITR, Home First Loan
                                        Against Property,HDFC Loan Against Property,Yes Bank Loan Against Property,IDFC
                                        First Loan Against Property,Bank of Baroda Loan Against Property,Bajaj Finserv
                                        Loan Against Property,RBL Bank Loan Against Property,Indiabulls Loan Against
                                        Property,Bank of India Loan Against Property,Federal Bank Loan Against
                                        Property,Allahabad Bank Loan Against Property,Tata Capital Loan Against
                                        Property,Aditya Birla Loan Against Property</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Faq One Single-->
                        <!--Start Faq One Single-->
                        <div class="accrodion active wow fadeInUp" data-wow-delay="0ms">
                            <div class="accrodion-title">
                                <h4>
                                    <i class="fa fa-university"></i> <!-- Bank Loan Icon -->
                                    Loan Against Property Eligibility
                                    <span class="accrodion-icon">
                                        <i class="fa fa-plus"></i> <!-- Plus Icon -->
                                    </span>
                                </h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Loan Against Property Eligibility, SBI Loan Against Property Eligibility, HDFC
                                        Loan Against Property Eligibility,PNB Loan Against Property Eligibility</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Faq One Single-->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-2">
                        <!--Start Faq One Single-->
                        <div class="accrodion active wow fadeInUp" data-wow-delay="0ms">
                            <div class="accrodion-title">
                                <h4>
                                    <i class="fa fa-university"></i> <!-- Bank Loan Icon -->
                                    Loan Against Property Interest Rates
                                    <span class="accrodion-icon">
                                        <i class="fa fa-plus"></i> <!-- Plus Icon -->
                                    </span>
                                </h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>SBI Bank Loan Against Property Interest Rates, HDFC Loan Against Property
                                        Interest Rates, ICICI Loan Against Property Interest Rates,PNB Loan Against
                                        Property Interest Rates</p>
                                </div>
                            </div>
                        </div>


                        <div class="accrodion wow fadeInUp" data-wow-delay="0ms">
                            <div class="accrodion-title">
                                <h4>
                                    <i class="fa fa-university"></i> <!-- Bank Loan Icon -->
                                    Home Loan Providers
                                    <span class="accrodion-icon">
                                        <i class="fa fa-plus"></i> <!-- Plus Icon -->
                                    </span>
                                </h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Apply for Home Loan, SBI Home Loan, HDFC Home Loan,Bandhan Bank Home Loan,PNB
                                        Home Loan,Kotak Mahindra Bank Home Loan,Bank of Baroda Home Loan,Bajaj Finserv
                                        Home Loan,Yes Bank Home Loan,DHFL Home Loan,Canara Bank Home Loan,PNB Housing
                                        Finance Home Loan,Federal Bank Home Loan,Tata Capital Home Loan,LIC Home
                                        Loan,RBL Home Loan,Navi Home Loan</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</section>



<section>
    <div class="container">
        <div class="row">
            <p style="font-weight:600;">Popular Products MyMoneyMantra</p>
            <p>Business Loan | Mudra Loan | MSME Loan | Bank Balance Check Number | Fixed Deposit | Fixed Deposit
                Interest Rates | FD Calculator | Startup Business Loan | SBI Internet Banking | HDFC NetBanking | Gold
                Loan | IndiaGold Loan | Rupeek Gold Loan | LAP Without Income Proof | LAP | LAP EMI Calculator | SBI LAP
                | HLBT Interest Rates</p>

            <p style="font-weight:600;">Personal Loan</p>
            <p>Personal Loan | Short Term Personal Loan | L&T Finance Consumer Loan | Personal Loan Interest Rates |
                Best Instant Loan Apps | SBI Personal Loan | HDFC Personal Loan | Navi Personal Loan | Kotak Personal
                Loan | SBI Personal Loan Interest Rates | HDFC Personal Loan Interest Rates | HDFC Personal Loan EMI
                Calculator | Mpokket | KreditBee | Paysense | MoneyTap</p>

            <p style="font-weight:600;">Credit Card</p>
            <p>Apply for Credit Cards | SBI Credit Card | HDFC Credit Card | American Express Credit Card | Axis Bank
                Credit Card | IDFC Credit Card | Kotak Credit Card | AU Bank Credit Card | HSBC Bank Credit Card |
                Credit Card Interest Rates | Yes Bank Credit Card | Credit Card Types | Credit Card Articles | Airport
                Lounge Access Credit Card</p>

            <p style="font-weight:600;">Home Loan</p>
            <p>Home Loan | Home Loan EMI Calculator | Home Loan Interest Rates | SBI Home Loan | LIC Home Loan | Tata
                Capital Home Loan | Kotak Home Loan | Navi Home Loan | SBI Home Loan Interest Rates | SBI Home Loan EMI
                Calculator | LIC Home Loan EMI Calculator</p>

            <p style="font-weight:600;">Credit Score</p>
            <p>Check Free Credit Score | Free CIBIL Score Check | CIBIL Score Calculator | Pan Card CIBIL Score | SBI
                CIBIL Score | CIBIL Score for Personal Loan | CIBIL Score for Home Loan | CIBIL Score for Credit Card |
                TransUnion CIBIL Score | Experian Credit Score | Equifax Credit Score | CIBIL Dispute | CIBIL Score
                Range | How To Improve CIBIL Score | CIBIL Full</p>
        </div>
    </div>
</section>





@include('head.footer')