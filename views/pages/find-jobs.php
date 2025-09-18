<section class="section hero-section">
            <div class="container z-index-10 w-container">
                <div class="section-content-wrapper mg-medium">
                    <div class="section-heading center">
                        <div class="section-title find-jobs-section">
                            <h2>Find your</h2>
                            <div class="section-title-box">
                                <h2 class="text-accents-blue">dream jobs</h2>
                                <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/64816225f9ae7ae6e2ecc4a7_Title%20Decoration.svg" loading="lazy" alt="" class="section-title-box-accent find-jobs"/>
                            </div>
                        </div>
                        <div class="section-description">
                            <p class="text-l text-neutral-80">Find your next career at companies like HubSpot, Nike, and Dropbox</p>
                        </div>
                    </div>
                    <?php
                        require VIEWS.'components/search-form.php';
                    ?>
                </div>
                <div class="hero-section-bg-wrapper">
                    <div class="desktop-hero-section-bg-left">
                        <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/64927bfecd3d734145951f71_Desktop%20Hero%20BG%20Pattern%20Left%20Light.svg" loading="lazy" alt="" class="desktop-hero-section-bg-left-image"/>
                    </div>
                    <div class="desktop-hero-bg-right">
                        <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/64927bfedac5954a75589f81_Desktop%20Hero%20BG%20Pattern%20Right%20Light.svg" loading="lazy" alt="" class="desktop-hero-bg-right-image"/>
                    </div>
                    <div class="mobile-hero-section-bg">
                        <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/648173732bddba5bb5425ea7_Mobile%20Hero%20BG%20Pattern.svg" loading="lazy" alt=""/>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container w-container">
                <div class="section-content-wrapper job-list-section-content-wrapper">
                    <div class="job-list">
                        <div class="section-headline align-center">
                            <div>
                                <h3>All Jobs</h3>
                                <div class="text-r text-neutral-60">Showing <?= $params['total_jobs'] > 0 ? $params['total_jobs'].' results' : $params['total_jobs'].' result'?></div>
                            </div>
                        </div>
                        <div class="job-list-lists">
                            <?php foreach($params['jobs'] as $job) : ?>
                                <div class="job-item-box">
                                    <div class="job-item-profile">
                                        <div class="job-item-company-logo">
                                            <img src="<?=SCRIPTS.'img'.DIRECTORY_SEPARATOR.'6481677da664682e7e41fd4f_Nomad%20Logo.svg'?>" loading="lazy" alt=""/>
                                        </div>
                                        <div class="job-item-content">
                                            <div class="display-3"><?=$job->title?></div>
                                            <div class="job-item-details">
                                                <div class="text-r text-neutral-60"><?=$job->name?></div>
                                                <div class="svg-icon w-embed">
                                                    <svg width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="2" cy="2.5" r="2" fill="#7C8493"/>
                                                    </svg>
                                                </div>
                                                <div class="text-r text-neutral-60"><?=$job->location?></div>
                                            </div>
                                            <div class="job-item-label-wrapper">
                                                <div class="label-work">
                                                    <div class="text-s weight-600"><?=$job->type?></div>
                                                </div>
                                                <div class="vertical-divider"></div>
                                                <?php $categories = !empty($job->category)  ? explode(',',$job->category) : []?>
                                                <?php foreach($categories as $category) : ?>
                                                    <div class="label-category lastest-jobs-label-category-design">
                                                        <div class="text-s weight-600"><?=$category?></div>
                                                    </div>
                                                <?php endforeach ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-item-apply-cta">
                                        <a href="/fortime/jobs-details/<?=$job->id?>" class="button w-button">Apply</a>
                                    </div>
                                </div>
                            <?php endforeach ?>  
                        </div>
                    </div>
                </div>
            </div>
        </section>