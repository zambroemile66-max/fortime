<section class="section hero-section">
    <div class="w-layout-blockcontainer container job-application-container w-container">
        <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/64939d7fecc7e42995396ce4_Checkout%20Page%20Pattern%201.svg" loading="lazy" alt="" class="job-application-pattern-1"/>
        <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/6499bd2c45895e38479ae615_Job%20Application%20Pattern%202.svg" loading="lazy" alt="" class="job-application-pattern-2"/>
        <div class="breadcrumb job-application-breaadcrumb">
            <div class="text-r">
                <a href="/fortime" class="breadcrumb-previous-page">Home /</a>
                <a href="/fortime/browse-companies" class="breadcrumb-previous-page">Companies /</a>
                <a href="/fortime/company-details/<?=$params['jobs_application']->comp_id?>" class="breadcrumb-previous-page"><?=$params['jobs_application']->name?> /</a>
                <a href="/fortime/jobs-details/<?=$params['jobs_application']->job_id?>" class="breadcrumb-previous-page"><?=$params['jobs_application']->title?> /</a>
                Job Submission
            </div>
        </div>
        <div class="w-layout-vflex job-application-wrapper">
            <a href="/fortime/jobs-details/<?=$params['jobs_application']->job_id?>" class="job-application-back w-inline-block">
                <div class="svg-icon w-embed">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.5 5L8.5 12L15.5 19" stroke="#25324B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="text-r weight-500 text-neutral-100">Back</div>
            </a>
            <div class="job-application-form w-form">
                <form id="wf-form-Job-Application-Form" name="wf-form-Job-Application-Form" data-name="Job Application Form" method="get" class="job-application-form-inner" data-wf-page-id="6493c8319c69f3c3041406e4" data-wf-element-id="e325c5db-ec10-9852-690e-28a00f61f64d">
                    <div class="w-layout-hflex job-application-role">
                        <div class="job-application-company-logo">
                            <img alt="" loading="lazy" src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/6481677da664682e7e41fd4f_Nomad%20Logo.svg"/>
                        </div>
                        <div class="w-layout-vflex job-application-title">
                            <h4 class="text-neutral-100 weight-600"><?=$params['jobs_application']->title?></h4>
                            <div class="w-layout-hflex job-application-company-details">
                                <div class="text-l text-neutral-80"><?=$params['jobs_application']->name?></div>
                                <div class="svg-icon w-embed">
                                    <svg width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="2" cy="2.5" r="2" fill="#515B6F"/>
                                    </svg>
                                </div>
                                <div class="text-l text-neutral-80"><?=$params['jobs_application']->location?></div>
                                <div class="svg-icon w-embed">
                                    <svg width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="2" cy="2.5" r="2" fill="#515B6F"/>
                                    </svg>
                                </div>
                                <div class="text-l text-neutral-80"><?=$params['jobs_application']->type?></div>
                            </div>
                        </div>
                    </div>
                    <div class="horizontal-divider"></div>
                    <div class="w-layout-vflex job-application-form-head">
                        <h4 class="text-neutral-100 weight-600">Submit your application</h4>
                        <div class="text-r text-neutral-60">The following is required and will only be shared with Nomad</div>
                    </div>
                    <div class="w-layout-vflex job-application-form-group">
                        <label for="Applicant-Full-Name">Full name</label>
                        <input class="job-application-form-input w-input" maxlength="256" name="Applicant-Full-Name" data-name="Applicant Full Name" placeholder="Enter your fullname" type="text" id="Applicant-Full-Name" required=""/>
                    </div>
                    <div class="w-layout-vflex job-application-form-group">
                        <label for="Applicant-Email">Email address</label>
                        <input class="job-application-form-input w-input" maxlength="256" name="Applicant-Email" data-name="Applicant Email" placeholder="Enter your email address" type="email" id="Applicant-Email" required=""/>
                    </div>
                    <div class="w-layout-vflex job-application-form-group">
                        <label for="Applicant-Phone-Number">Phone number</label>
                        <input class="job-application-form-input w-input" maxlength="256" name="Applicant-Phone-Number" data-name="Applicant Phone Number" placeholder="Enter your phone number" type="tel" id="Applicant-Phone-Number" required=""/>
                    </div>
                    <div class="w-layout-vflex job-application-form-group">
                        <label for="Applicant-Previous-Job">Current of previous job title</label>
                        <input class="job-application-form-input w-input" maxlength="256" name="Applicant-Previous-Job" data-name="Applicant Previous Job" placeholder="What’s your current or previous job title?" type="text" id="Applicant-Previous-Job"/>
                    </div>
                    <div class="horizontal-divider"></div>
                    <h4 class="text-neutral-100 weight-600">LINKS</h4>
                    <div class="w-layout-vflex job-application-form-group">
                        <label for="Applicant-LinkedInd-URL">LinkedIn URL</label>
                        <input class="job-application-form-input w-input" maxlength="256" name="Applicant-LinkedInd-URL" data-name="Applicant LinkedInd URL" placeholder="Link to your LinkedIn URL" type="text" id="Applicant-LinkedInd-URL" required=""/>
                    </div>
                    <div class="w-layout-vflex job-application-form-group">
                        <label for="Applicant-Portofolio">Portfolio URL</label>
                        <input class="job-application-form-input w-input" maxlength="256" name="Applicant-Portofolio" data-name="Applicant Portofolio" placeholder="Link to your portfolio URL" type="text" id="Applicant-Portofolio" required=""/>
                    </div>
                    <div class="w-layout-vflex job-application-form-group">
                        <label for="field">Additional information</label>
                        <textarea placeholder="Add a cover letter or anything else you want to share" maxlength="5000" id="field" name="field" data-name="Field" class="job-application-form-input w-input"></textarea>
                    </div>
                    <div class="horizontal-divider"></div>
                    <input type="submit" data-wait="Please wait..." class="button w-button" value="Submit Application"/>
                    <div class="text-r text-neutral-60">
                        By sending the request you can confirm that you accept our 
                        <a href="#">
                            Terms of <br/>Service
                        </a>
                        and <a href="#">Privacy Policy</a>
                    </div>
                </form>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
        </div>
    </div>
</section>