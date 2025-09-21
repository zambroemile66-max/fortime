<?php 
    $skills = explode(',',$params['jobs_details']->skills);
    $skills = !empty($params['jobs_details']->skills) ? array_filter(array_map('trim', $skills), function($t) {
    return $t !== '';
    }) : [] 
?>
<section class="section hero-section">
    <div class="container w-container">
        <div class="job-details-hero">
            <div class="breadcrumb">
                <div class="text-r">
                    <a href="/fortime" class="breadcrumb-previous-page">Home /</a>
                    <a href="/browse-companies" class="breadcrumb-previous-page">Companies /</a>
                    <a href="/fortime/company-details/<?=$params['jobs_details']->comp_id?>" class="breadcrumb-previous-page"><?=$params['jobs_details']->name?> /</a>
                    <?=$params['jobs_details']->title?>
                </div>
                
            </div>
            <div class="job-details-hero-banner">
                <div class="job-details-banner-company">
                    <div class="w-layout-hflex job-details-banner-company-brand">
                        <img src="<?=SCRIPTS.'img'.DIRECTORY_SEPARATOR.'6482974d442531bf1466d66d_Webflow%20Logo.svg'?>" loading="lazy" alt="" class="job-details-banner-company-logo"/>
                        <a href="#" class="job-details-banner-company-share w-inline-block" onclick="copyURL(event)">
                            <div class="svg-icon w-embed">
                                <svg width="33" height="34" viewBox="0 0 33 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.66797 20.7648C10.8771 20.7648 12.668 18.9081 12.668 16.6178C12.668 14.3274 10.8771 12.4707 8.66797 12.4707C6.45883 12.4707 4.66797 14.3274 4.66797 16.6178C4.66797 18.9081 6.45883 20.7648 8.66797 20.7648Z" stroke="#7C8493" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M24.668 12.4709C26.8771 12.4709 28.668 10.6142 28.668 8.32382C28.668 6.03346 26.8771 4.17676 24.668 4.17676C22.4588 4.17676 20.668 6.03346 20.668 8.32382C20.668 10.6142 22.4588 12.4709 24.668 12.4709Z" stroke="#7C8493" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M24.668 29.0588C26.8771 29.0588 28.668 27.2021 28.668 24.9117C28.668 22.6213 26.8771 20.7646 24.668 20.7646C22.4588 20.7646 20.668 22.6213 20.668 24.9117C20.668 27.2021 22.4588 29.0588 24.668 29.0588Z" stroke="#7C8493" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.2676 14.8201L21.0676 10.1201" stroke="#7C8493" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.2676 18.415L21.0676 23.115" stroke="#7C8493" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="job-details-banner-title">
                        <h3 class="text-neutral-100"><?=$params['jobs_details']->title?></h3>
                        <div class="featured-jobs-title-row text-r text-neutral-80">
                            <div><?=$params['jobs_details']->name?></div>
                            <div class="svg-icon w-embed">
                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.3" cx="2" cy="2" r="2" fill="currentColor"/>
                                </svg>
                            </div>
                            <div><?=$params['jobs_details']->location?></div>
                            <div class="svg-icon w-embed">
                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.3" cx="2" cy="2" r="2" fill="currentColor"/>
                                </svg>
                            </div>
                            <div><?=$params['jobs_details']->type?></div>
                        </div>
                    </div>
                </div>
                <div class="job-details-banner-link">
                    <a href="#" class="link-with-icon w-inline-block" onclick="copyURL(event)">
                        <div class="svg-icon w-embed">
                            <svg width="33" height="34" viewBox="0 0 33 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.66797 20.7648C10.8771 20.7648 12.668 18.9081 12.668 16.6178C12.668 14.3274 10.8771 12.4707 8.66797 12.4707C6.45883 12.4707 4.66797 14.3274 4.66797 16.6178C4.66797 18.9081 6.45883 20.7648 8.66797 20.7648Z" stroke="#7C8493" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M24.668 12.4709C26.8771 12.4709 28.668 10.6142 28.668 8.32382C28.668 6.03346 26.8771 4.17676 24.668 4.17676C22.4588 4.17676 20.668 6.03346 20.668 8.32382C20.668 10.6142 22.4588 12.4709 24.668 12.4709Z" stroke="#7C8493" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M24.668 29.0588C26.8771 29.0588 28.668 27.2021 28.668 24.9117C28.668 22.6213 26.8771 20.7646 24.668 20.7646C22.4588 20.7646 20.668 22.6213 20.668 24.9117C20.668 27.2021 22.4588 29.0588 24.668 29.0588Z" stroke="#7C8493" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.2676 14.8201L21.0676 10.1201" stroke="#7C8493" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.2676 18.415L21.0676 23.115" stroke="#7C8493" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </a>
                    <div class="vertical-divider"></div>
                    <a href="/fortime/job-application/<?=$params['jobs_details']->job_id?>" class="button button-l w-button">Apply</a>
                </div>
                <a href="/fortime/job-application/<?=$params['jobs_details']->job_id?>" class="button button-l job-details-banner-apply w-button">Apply</a>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container w-container">
        <div class="job-details-content">
            <div class="job-details-content-paragraph w-richtext">
                <h3>Description</h3>
                <p><?=$params['jobs_details']->job_des?></p>
            </div>
            <div class="job-details-content-summary">
                <div class="job-details-summary-about">
                    <h3 class="text-neutral-100">About this role</h3>
                    <div class="job-details-summary-about-row">
                        <div class="text-r text-neutral-80">Apply Before</div>
                        <div class="text-r weight-600 text-neutral-100"><?=$params['jobs_details']->apply_before?></div>
                    </div>
                    <div class="job-details-summary-about-row">
                        <div class="text-r text-neutral-80">Job Posted On</div>
                        <div class="text-r weight-600 text-neutral-100"><?=$params['jobs_details']->posted_on?></div>
                    </div>
                    <div class="job-details-summary-about-row">
                        <div class="text-r text-neutral-80">Job Type</div>
                        <div class="text-r weight-600 text-neutral-100"><?=$params['jobs_details']->type?></div>
                    </div>
                    <div class="job-details-summary-about-row">
                        <div class="text-r text-neutral-80">Salary</div>
                        <div class="text-r weight-600 text-neutral-100"><?=$params['jobs_details']->salary?> fcfa</div>
                    </div>
                </div>
                <div class="horizontal-divider"></div>
                <div class="job-details-summary-skills">
                    <h3 class="text-neutral-100">Required Skills</h3>
                    <div class="job-details-summary-skills-list">
                        <?php foreach($skills as $skill) : ?>
                            <div class="job-details-summary-skills-needed text-r">
                                <div><?=$skill?></div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container w-container">
        <div class="job-details-company">
            <div class="job-details-company-content">
                <a href="/fortime/company-details/<?=$params['jobs_details']->comp_id?>" class="job-details-company-content-more w-inline-block">
                    <img src="<?=SCRIPTS.'img'.DIRECTORY_SEPARATOR.'6481674cddb9563d1f7298fb_ClassPass%20Logo.svg'?>" loading="lazy" alt="" class="job-details-company-content-logo"/>
                    <div class="job-details-company-content-name">
                        <h3 class="text-neutral-100"><?=$params['jobs_details']->name?></h3>
                        <div class="section-headline-link">
                            <div>Read more about <?=$params['jobs_details']->name?></div>
                            <div class="svg-icon w-embed">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.3945 11.7261L5.39453 11.7261" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M14.3457 5.70149L20.3957 11.7255L14.3457 17.7505" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="text-r color-neutral-80"><?=substr_replace($params['jobs_details']->comp_des,'...',200)?></div>
            </div>
            <img src="<?=SCRIPTS.'img'.DIRECTORY_SEPARATOR.'6487556b38b327ed912120cb_Job%20Details%20Company%20Profile.png'?>" loading="lazy" alt="Jobhuntly Company Activities" class="job-details-company-profile"/>
        </div>
    </div>
</section>
<section class="section bg-neutral-10">
    <div class="container w-container">
        <div class="lastest-job">
            <div class="section-headline">
                <h2>Similiar Jobs</h2>
                <a href="/find-jobs" class="section-headline-link w-inline-block">
                    <div>Show all jobs</div>
                    <div class="svg-icon w-embed">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.75 11.7261L4.75 11.7261" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13.7002 5.70149L19.7502 11.7255L13.7002 17.7505" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </a>
            </div>
            <div class="lastes-job-list">
                <a id="w-node-_381bf428-7c3d-d33c-0b20-26c40385350e-a4931d09" href="/jobs-details" aria-current="page" class="lastest-jobs-box w-inline-block w--current">
                    <img src="<?=SCRIPTS.'img'.DIRECTORY_SEPARATOR.'6481677da664682e7e41fd4f_Nomad%20Logo.svg'?>" loading="lazy" alt="" class="lastest-job-company-logo"/>
                    <div class="lastest-jobs-content">
                        <div class="display-3 text-neutral-100">Social Media Assistant</div>
                        <div class="lastest-jobs-content-row text-r text-neutral-80">
                            <div>Nomad</div>
                            <div class="svg-icon w-embed">
                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.3" cx="2" cy="2" r="2" fill="currentColor"/>
                                </svg>
                            </div>
                            <div>Paris, France</div>
                        </div>
                        <div class="lastest-jobs-content-label">
                            <div class="lastest-jobs-label-work">
                                <div class="text-s weight-600">Full Time</div>
                            </div>
                            <div class="vertical-divider"></div>
                            <div class="label-category lastest-jobs-label-category-marketing">
                                <div class="text-s weight-600">Marketing</div>
                            </div>
                            <div class="label-category label-category-design">
                                <div class="text-s weight-600">Design</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<script>
    function copyURL(event) {
    event.preventDefault(); // évite de suivre le lien
    const url = window.location.href; // l’URL actuelle de la page

    navigator.clipboard.writeText(url).then(() => {
        alert("Lien copié ");
    }).catch(err => {
        console.error("Erreur lors de la copie : ", err);
    });
    }
</script>