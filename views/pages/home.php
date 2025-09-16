<section class="section homepage-hero-section">
            <div class="container w-container">
                <div class="homepage-hero-wrapper">
                    <div class="section-title-box homepage-hero-title">
                        <h1>
                            Discover <br/>
                            more than <br/>
                            <span class="text-accents-blue">5000+ Jobs</span>
                        </h1>
                        <img src="<?=SCRIPTS.'img'.DIRECTORY_SEPARATOR.'6482d9e701243d4ce022dcb9_Homepage%20Hero%20Title%20Pattern.png'?>" loading="lazy" alt="" class="section-title-box-accent home"/>
                    </div>
                    <div class="text-xl text-neutral-80 homepage-hero-desc">Great platform for the job seeker that searching for new career heights and passionate about startups.</div>
                    <?php
                        require VIEWS.'components/search-form.php';
                    ?>
                </div>
                <div class="homepage-v1-hero-pattern">
                    <img src="<?=SCRIPTS.'img'.DIRECTORY_SEPARATOR.'64bde07d1b90be3b5ff02525_Homepage%20V1%20Page%20Hero%20Pattern.svg'?>" loading="lazy" alt=""/>
                </div>
                <div class="homepage-v1-hero-image">
                    <img src="<?=SCRIPTS.'img'.DIRECTORY_SEPARATOR.'64bde07ebe4c261139a6ba44_Homepage%20V1%20Page%20Hero%20Image.png'?>" loading="lazy" sizes="100vw" alt="Jobhuntly Models - Noah Jones" class="homepage-v1-hero-image-source"/>
                </div>
            </div>
        </section>
        <section class="section section-logo">
            <div class="container w-container">
                <div class="section-brand-logo-wrapper">
                    <div class="text-l text-neutral-100">Companies we helped grow</div>
                    <div class="section-brand-logo-list">
                        <img src="<?=SCRIPTS.'img'.DIRECTORY_SEPARATOR.'6485fcd28db049ae8260bffa_Companies%20Logo%20Vodafone.svg'?>" loading="lazy" alt=""/>
                        <img src="<?=SCRIPTS.'img'.DIRECTORY_SEPARATOR.'6485fcd22af599674f1bfb19_Companies%20Logo%20Intel.svg'?>" loading="lazy" alt=""/>
                        <img src="<?=SCRIPTS.'img'.DIRECTORY_SEPARATOR.'6485fcd1cdba2a48dbf28b07_Companies%20Logo%20Tesla.svg'?>" loading="lazy" alt=""/>
                        <img src="<?=SCRIPTS.'img'.DIRECTORY_SEPARATOR.'6485fcd155c5edc7b181d23f_Companies%20Logo%20AMD.svg'?>" loading="lazy" alt=""/>
                        <img src="<?=SCRIPTS.'img'.DIRECTORY_SEPARATOR.'6485fcd2d8da4bb319349a9b_Companies%20Logo%20Talkit.svg'?>" loading="lazy" alt=""/>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container w-container">
                <div class="section-content-wrapper">
                    <div class="section-headline">
                        <h2>
                            Latest <span class="text-accents-blue">Companies</span>
                        </h2>
                        <a href="browse-companies" class="section-headline-link w-inline-block">
                            <div>Show all companies</div>
                            <div class="svg-icon w-embed">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.75 11.7261L4.75 11.7261" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M13.7002 5.70149L19.7502 11.7255L13.7002 17.7505" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                   <div class="section-content">
                        <div class="grid-3-column">
                            <a id="w-node-c77a323f-5989-c4b9-a51c-a39ada385073-347409a8" href="company-details" class="company-box w-inline-block">
                                <div class="company-card-title">
                                    <div class="company-logo">
                                        <img src="<?=SCRIPTS.'img'.DIRECTORY_SEPARATOR.'6481677da664682e7e41fd4f_Nomad%20Logo.svg'?>" loading="lazy" alt=""/>
                                    </div>
                                    <div class="tag">
                                        <div class="text-r text-brands-primary">3 Jobs</div>
                                    </div>
                                </div>
                                <div class="company-card-description">
                                    <h4>Nomad</h4>
                                    <p class="text-l text-neutral-80">Nomad is located in Paris, France. Nomad has generates $728,000 in sales (USD).</p>
                                </div>
                                <div class="company-card-category-label-wrapper">
                                    <div class="label-category label-category-design">
                                        <div class="text-s weight-600">Bussiness Services</div>
                                    </div>
                                </div>
                            </a>
                            <?php foreach($params['companies'] as $company) : ?>
                                <a id="w-node-c77a323f-5989-c4b9-a51c-a39ada385073-347409a8" href="company-details/<?=$company->id?>" class="company-box w-inline-block">
                                    <div class="company-card-title">
                                        <div class="company-logo">
                                            <img src="<?=SCRIPTS.'img'.DIRECTORY_SEPARATOR.'6481677da664682e7e41fd4f_Nomad%20Logo.svg'?>" loading="lazy" alt=""/>
                                        </div>
                                        <div class="tag">
                                            <div class="text-r text-brands-primary">3 Jobs</div>
                                        </div>
                                    </div>
                                    <div class="company-card-description">
                                        <h4><?=$company->name?></h4>
                                        <p class="text-l text-neutral-80"><?=substr_replace($company->description,'...',100)?></p>
                                    </div>
                                    <div class="company-card-category-label-wrapper">
                                        <div class="label-category label-category-design">
                                            <div class="text-s weight-600">Bussiness Services</div>
                                        </div>
                                    </div>
                                </a>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <section class="section bg-neutral-10">
            <div class="container w-container">
                <div class="section-content-wrapper">
                    <div class="section-headline">
                        <h2>
                            Latest <span class="text-accents-blue">jobs open</span>
                        </h2>
                        <a href="find-jobs" class="section-headline-link homepage-header-link w-inline-block">
                            <div>Show all jobs</div>
                            <div class="svg-icon w-embed">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.75 11.7261L4.75 11.7261" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M13.7002 5.70149L19.7502 11.7255L13.7002 17.7505" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="section-content">
                        <div class="grid-2-column lastest-job-grid">
                            <a id="w-node-e026f1a0-2092-2606-fedb-be05c5572b3c-b15929cd" href="jobs-details" class="lastest-jobs-box w-inline-block">
                                <img src="<?=SCRIPTS.'img'.DIRECTORY_SEPARATOR.'6481677da664682e7e41fd4f_Nomad%20Logo.svg'?>" loading="lazy" alt="" class="lastest-job-company-logo"/>
                                <div class="job-item-content">
                                    <div class="display-3 text-neutral-100">Social Media Assistant</div>
                                    <div class="job-item-details">
                                        <div>Nomad</div>
                                        <div class="svg-icon w-embed">
                                            <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle opacity="0.3" cx="2" cy="2" r="2" fill="currentColor"/>
                                            </svg>
                                        </div>
                                        <div>Paris, France</div>
                                    </div>
                                    <div class="job-item-label-wrapper">
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
            </div>
        </section>