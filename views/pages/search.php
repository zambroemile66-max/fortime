<?php
    echo isset($_POST['field']) ? $_POST['field'] : null
?>
<section class="section hero-section">
            <div class="container z-index-10 w-container">
                <div class="section-content-wrapper mg-medium">
                    <div class="section-heading center">
                        <div class="section-title vertical-flex">
                            <h2>Find your</h2>
                            <div class="section-title-box">
                                <h2 class="text-accents-blue">dream companies</h2>
                                <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/64816225f9ae7ae6e2ecc4a7_Title%20Decoration.svg" loading="lazy" alt="" class="section-title-box-accent search-result"/>
                            </div>
                        </div>
                        <div class="section-description">
                            <p class="text-l text-neutral-80">Find the dream companies you dream work for</p>
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
        <section>
            <a data-w-id="ba73d9e8-b76a-300f-c99a-bbf41c716b2c" href="#" class="more-filter-pop-up w-inline-block">
                <div class="svg-icon _24x24 w-embed">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1610_6104)">
                            <path d="M4 6H20" stroke="#25324B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6 12H18" stroke="#25324B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8 18H16" stroke="#25324B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_1610_6104">
                                <rect width="24" height="24" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="text-r weight-500 text-neutral-100">More Filters</div>
            </a>
            <div class="job-list-filter-pop-up">
                <div class="job-list-filter">
                    <div class="job-list-filter-headline">
                        <h5>More Filter</h5>
                        <div class="close-button-wrapper">
                            <div data-w-id="3b7036f3-03e0-8427-0c49-94522b6303b9" class="svg-icon _24x24 w-embed">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15115 5.1515C5.37618 4.92654 5.68135 4.80016 5.99955 4.80016C6.31775 4.80016 6.62291 4.92654 6.84795 5.1515L11.9995 10.3031L17.1511 5.1515C17.2618 5.03689 17.3943 4.94547 17.5407 4.88258C17.6871 4.81969 17.8445 4.78659 18.0039 4.7852C18.1632 4.78382 18.3212 4.81418 18.4687 4.87452C18.6162 4.93485 18.7501 5.02396 18.8628 5.13663C18.9755 5.2493 19.0646 5.38328 19.1249 5.53076C19.1853 5.67823 19.2156 5.83625 19.2142 5.99558C19.2129 6.15492 19.1798 6.31238 19.1169 6.45879C19.054 6.60519 18.9626 6.73761 18.8479 6.8483L13.6963 11.9999L18.8479 17.1515C19.0665 17.3778 19.1875 17.6809 19.1848 17.9956C19.182 18.3102 19.0558 18.6112 18.8333 18.8337C18.6108 19.0562 18.3099 19.1824 17.9952 19.1851C17.6806 19.1878 17.3775 19.0669 17.1511 18.8483L11.9995 13.6967L6.84795 18.8483C6.62163 19.0669 6.3185 19.1878 6.00387 19.1851C5.68923 19.1824 5.38826 19.0562 5.16577 18.8337C4.94328 18.6112 4.81707 18.3102 4.81434 17.9956C4.81161 17.6809 4.93256 17.3778 5.15115 17.1515L10.3027 11.9999L5.15115 6.8483C4.92618 6.62327 4.7998 6.3181 4.7998 5.9999C4.7998 5.68171 4.92618 5.37654 5.15115 5.1515Z" fill="#25324B"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="job-list-dropdown">
                        <div class="text-r weight-700 text-neutral-100">Industry</div>
                        <div class="job-list-dropdown-list">
                            <div class="form-block w-form">
                                <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="get" data-wf-page-id="6481405b618c99bec1636443" data-wf-element-id="3b7036f3-03e0-8427-0c49-94522b6303bf">
                                    <label class="w-checkbox job-list-checkbox-field">
                                        <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                        <input type="checkbox" id="checkbox-9" name="checkbox-9" data-name="Checkbox 9" style="opacity:0;position:absolute;z-index:-1"/>
                                        <span class="text-r text-neutral-80 w-form-label" for="checkbox-9">Advertising (43)</span>
                                    </label>
                                    <label class="w-checkbox job-list-checkbox-field">
                                        <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                        <input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" style="opacity:0;position:absolute;z-index:-1"/>
                                        <span class="text-r text-neutral-80 w-form-label" for="checkbox-4">Business Service (4)</span>
                                    </label>
                                    <label class="w-checkbox job-list-checkbox-field">
                                        <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                        <input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1"/>
                                        <span class="text-r text-neutral-80 w-form-label" for="checkbox-3">Blockchain (5)</span>
                                    </label>
                                    <label class="w-checkbox job-list-checkbox-field">
                                        <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                        <input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"/>
                                        <span class="text-r text-neutral-80 w-form-label" for="checkbox-2">Cloud (15)</span>
                                    </label>
                                    <label class="w-checkbox job-list-checkbox-field">
                                        <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                        <input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"/>
                                        <span class="text-r text-neutral-80 w-form-label" for="checkbox-2">Education (34)</span>
                                    </label>
                                    <label class="w-checkbox job-list-checkbox-field">
                                        <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                        <input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"/>
                                        <span class="text-r text-neutral-80 w-form-label" for="checkbox-2">Fintech (45)</span>
                                    </label>
                                    <label class="w-checkbox job-list-checkbox-field">
                                        <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                        <input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"/>
                                        <span class="text-r text-neutral-80 w-form-label" for="checkbox-2">Gaming (33)</span>
                                    </label>
                                    <label class="w-checkbox job-list-checkbox-field">
                                        <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                        <input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"/>
                                        <span class="text-r text-neutral-80 w-form-label" for="checkbox-2">Gaming (33)</span>
                                    </label>
                                    <label class="w-checkbox job-list-checkbox-field">
                                        <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                        <input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"/>
                                        <span class="text-r text-neutral-80 w-form-label" for="checkbox-2">Healthcare (3)</span>
                                    </label>
                                    <label class="w-checkbox job-list-checkbox-field">
                                        <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                        <input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"/>
                                        <span class="text-r text-neutral-80 w-form-label" for="checkbox-2">Hostinng (5)</span>
                                    </label>
                                    <label class="w-checkbox job-list-checkbox-field">
                                        <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                        <input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"/>
                                        <span class="text-r text-neutral-80 w-form-label" for="checkbox-2">Media (4)</span>
                                    </label>
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
                    <div class="job-list-dropdown">
                        <div class="text-r weight-700 text-neutral-100">Company Size</div>
                        <div class="job-list-dropdown-list">
                            <div class="form-block w-form">
                                <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="get" data-wf-page-id="6481405b618c99bec1636443" data-wf-element-id="3b7036f3-03e0-8427-0c49-94522b6303f7">
                                    <label class="w-checkbox job-list-checkbox-field">
                                        <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                        <input type="checkbox" id="checkbox-7" name="checkbox-7" data-name="Checkbox 7" style="opacity:0;position:absolute;z-index:-1"/>
                                        <span class="text-r text-neutral-80 w-form-label" for="checkbox-7">1-50 (25)</span>
                                    </label>
                                    <label class="w-checkbox job-list-checkbox-field">
                                        <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                        <input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" style="opacity:0;position:absolute;z-index:-1"/>
                                        <span class="text-r text-neutral-80 w-form-label" for="checkbox-4">51-150 (57)</span>
                                    </label>
                                    <label class="w-checkbox job-list-checkbox-field">
                                        <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                        <input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1"/>
                                        <span class="text-r text-neutral-80 w-form-label" for="checkbox-3">151-250 (45)</span>
                                    </label>
                                    <label class="w-checkbox job-list-checkbox-field">
                                        <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                        <input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"/>
                                        <span class="text-r text-neutral-80 w-form-label" for="checkbox-2">251-500 (4)</span>
                                    </label>
                                    <label class="w-checkbox job-list-checkbox-field">
                                        <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                        <input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"/>
                                        <span class="text-r text-neutral-80 w-form-label" for="checkbox-2">501-1000 (43)</span>
                                    </label>
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
                    <a href="#" class="button w-button">Apply</a>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container w-container">
                <div class="section-content-wrapper job-list-section-content-wrapper">
                    <div class="job-list-filter mobile-display-none">
                        <div data-hover="false" data-delay="0" data-w-id="250569d6-4946-7d07-ea67-d1b8bcd1dd7a" class="job-list-dropdown w-dropdown">
                            <div class="job-list-dropdown-toggle w-dropdown-toggle">
                                <div class="text-r weight-700 text-neutral-100">Industry</div>
                                <div class="svg-icon _20x20 w-embed">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1701_28484)">
                                            <path d="M15 7.5L10 12.5L5 7.5" stroke="#25324B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1701_28484">
                                                <rect width="20" height="20" fill="white" transform="matrix(-1 0 0 -1 20 20)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <nav class="job-list-dropdown-list w-dropdown-list">
                                <div class="form-block w-form">
                                    <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="get" data-wf-page-id="6481405b618c99bec1636443" data-wf-element-id="250569d6-4946-7d07-ea67-d1b8bcd1dd81">
                                        <label class="w-checkbox job-list-checkbox-field">
                                            <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                            <input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" style="opacity:0;position:absolute;z-index:-1"/>
                                            <span class="text-r text-neutral-80 w-form-label" for="checkbox">Advertising (43)</span>
                                        </label>
                                        <label class="w-checkbox job-list-checkbox-field">
                                            <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                            <input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" style="opacity:0;position:absolute;z-index:-1"/>
                                            <span class="text-r text-neutral-80 w-form-label" for="checkbox-4">Business Service (4)</span>
                                        </label>
                                        <label class="w-checkbox job-list-checkbox-field">
                                            <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                            <input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1"/>
                                            <span class="text-r text-neutral-80 w-form-label" for="checkbox-3">Blockchain (5)</span>
                                        </label>
                                        <label class="w-checkbox job-list-checkbox-field">
                                            <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                            <input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"/>
                                            <span class="text-r text-neutral-80 w-form-label" for="checkbox-2">Cloud (15)</span>
                                        </label>
                                        <label class="w-checkbox job-list-checkbox-field">
                                            <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                            <input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"/>
                                            <span class="text-r text-neutral-80 w-form-label" for="checkbox-2">Education (34)</span>
                                        </label>
                                        <label class="w-checkbox job-list-checkbox-field">
                                            <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                            <input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"/>
                                            <span class="text-r text-neutral-80 w-form-label" for="checkbox-2">Fintech (45)</span>
                                        </label>
                                        <label class="w-checkbox job-list-checkbox-field">
                                            <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                            <input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"/>
                                            <span class="text-r text-neutral-80 w-form-label" for="checkbox-2">Gaming (33)</span>
                                        </label>
                                        <label class="w-checkbox job-list-checkbox-field">
                                            <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                            <input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"/>
                                            <span class="text-r text-neutral-80 w-form-label" for="checkbox-2">Gaming (33)</span>
                                        </label>
                                        <label class="w-checkbox job-list-checkbox-field">
                                            <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                            <input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"/>
                                            <span class="text-r text-neutral-80 w-form-label" for="checkbox-2">Healthcare (3)</span>
                                        </label>
                                        <label class="w-checkbox job-list-checkbox-field">
                                            <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                            <input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"/>
                                            <span class="text-r text-neutral-80 w-form-label" for="checkbox-2">Hostinng (5)</span>
                                        </label>
                                        <label class="w-checkbox job-list-checkbox-field">
                                            <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                            <input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"/>
                                            <span class="text-r text-neutral-80 w-form-label" for="checkbox-2">Media (4)</span>
                                        </label>
                                    </form>
                                    <div class="w-form-done">
                                        <div>Thank you! Your submission has been received!</div>
                                    </div>
                                    <div class="w-form-fail">
                                        <div>Oops! Something went wrong while submitting the form.</div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <div data-hover="false" data-delay="0" data-w-id="250569d6-4946-7d07-ea67-d1b8bcd1ddb4" class="job-list-dropdown w-dropdown">
                            <div class="job-list-dropdown-toggle w-dropdown-toggle">
                                <div class="text-r weight-700 text-neutral-100">Company Size</div>
                                <div class="svg-icon _20x20 w-embed">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1701_28484)">
                                            <path d="M15 7.5L10 12.5L5 7.5" stroke="#25324B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1701_28484">
                                                <rect width="20" height="20" fill="white" transform="matrix(-1 0 0 -1 20 20)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <nav class="job-list-dropdown-list w-dropdown-list">
                                <div class="form-block w-form">
                                    <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="get" data-wf-page-id="6481405b618c99bec1636443" data-wf-element-id="250569d6-4946-7d07-ea67-d1b8bcd1ddbb">
                                        <label class="w-checkbox job-list-checkbox-field">
                                            <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                            <input type="checkbox" id="checkbox-7" name="checkbox-7" data-name="Checkbox 7" style="opacity:0;position:absolute;z-index:-1"/>
                                            <span class="text-r text-neutral-80 w-form-label" for="checkbox-7">1-50 (25)</span>
                                        </label>
                                        <label class="w-checkbox job-list-checkbox-field">
                                            <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                            <input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" style="opacity:0;position:absolute;z-index:-1"/>
                                            <span class="text-r text-neutral-80 w-form-label" for="checkbox-4">51-150 (57)</span>
                                        </label>
                                        <label class="w-checkbox job-list-checkbox-field">
                                            <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                            <input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1"/>
                                            <span class="text-r text-neutral-80 w-form-label" for="checkbox-3">151-250 (45)</span>
                                        </label>
                                        <label class="w-checkbox job-list-checkbox-field">
                                            <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                            <input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"/>
                                            <span class="text-r text-neutral-80 w-form-label" for="checkbox-2">251-500 (4)</span>
                                        </label>
                                        <label class="w-checkbox job-list-checkbox-field">
                                            <div class="w-checkbox-input w-checkbox-input--inputType-custom job-list-checkbox"></div>
                                            <input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"/>
                                            <span class="text-r text-neutral-80 w-form-label" for="checkbox-2">501-1000 (43)</span>
                                        </label>
                                    </form>
                                    <div class="w-form-done">
                                        <div>Thank you! Your submission has been received!</div>
                                    </div>
                                    <div class="w-form-fail">
                                        <div>Oops! Something went wrong while submitting the form.</div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="job-list">
                        <div class="section-headline align-center">
                            <div>
                                <h3>All Companies</h3>
                                <div class="text-r text-neutral-60">Showing 73 results</div>
                            </div>
                            <div class="job-list-headline-filter">
                                <div class="filter-select-field-wrapper">
                                    <div class="mobile-display-none">
                                        <div class="text-r text-neutral-60">Sort by:</div>
                                    </div>
                                    <div class="form-block w-form">
                                        <form id="email-form-3" name="email-form-3" data-name="Email Form 3" method="get" class="form" data-wf-page-id="6481405b618c99bec1636443" data-wf-element-id="250569d6-4946-7d07-ea67-d1b8bcd1dde3">
                                            <select id="Job-List-Filter" name="Job-List-Filter" data-name="Job List Filter" class="filter-select-field w-select">
                                                <option value="">Most Relevant</option>
                                                <option value="First">First choice</option>
                                                <option value="Second">Second choice</option>
                                                <option value="Third">Third choice</option>
                                            </select>
                                        </form>
                                        <div class="w-form-done">
                                            <div>Thank you! Your submission has been received!</div>
                                        </div>
                                        <div class="w-form-fail">
                                            <div>Oops! Something went wrong while submitting the form.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vertical-divider tablet-display-none"></div>
                                <div class="view-options">
                                    <a href="#" class="view-option active w-inline-block">
                                        <div class="svg-icon _24x24 w-embed">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g opacity="0.5" clip-path="url(#clip0_1610_18435)">
                                                    <path d="M9 4H5C4.44772 4 4 4.44772 4 5V9C4 9.55228 4.44772 10 5 10H9C9.55228 10 10 9.55228 10 9V5C10 4.44772 9.55228 4 9 4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M19 4H15C14.4477 4 14 4.44772 14 5V9C14 9.55228 14.4477 10 15 10H19C19.5523 10 20 9.55228 20 9V5C20 4.44772 19.5523 4 19 4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M9 14H5C4.44772 14 4 14.4477 4 15V19C4 19.5523 4.44772 20 5 20H9C9.55228 20 10 19.5523 10 19V15C10 14.4477 9.55228 14 9 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M19 14H15C14.4477 14 14 14.4477 14 15V19C14 19.5523 14.4477 20 15 20H19C19.5523 20 20 19.5523 20 19V15C20 14.4477 19.5523 14 19 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1610_18435">
                                                        <rect width="24" height="24" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="#" class="view-option w-inline-block">
                                        <div class="svg-icon _24x24 w-embed">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_1610_18443)">
                                                    <path d="M18 4H6C4.89543 4 4 4.89543 4 6V8C4 9.10457 4.89543 10 6 10H18C19.1046 10 20 9.10457 20 8V6C20 4.89543 19.1046 4 18 4Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M18 14H6C4.89543 14 4 14.8954 4 16V18C4 19.1046 4.89543 20 6 20H18C19.1046 20 20 19.1046 20 18V16C20 14.8954 19.1046 14 18 14Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1610_18443">
                                                        <rect width="24" height="24" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-2-column company-card-grid">
                            <div class="company-box">
                                <div class="company-card-title">
                                    <div class="company-logo">
                                        <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/64875951284002bdb74bfc70_Company%20Logo%20Stripe.png" loading="lazy" alt=""/>
                                    </div>
                                    <div class="tag">
                                        <div class="text-r text-brands-primary">3 Jobs</div>
                                    </div>
                                </div>
                                <div class="company-card-description">
                                    <h4>Stripe</h4>
                                    <p class="text-l text-neutral-80">Stripe is a software platform for starting and running internet businesses. Millions of businesses rely on Stripe’s software tools...</p>
                                </div>
                                <div class="company-card-category-label-wrapper">
                                    <div class="label-category label-category-design">
                                        <div class="text-s weight-600">Bussiness</div>
                                    </div>
                                    <div class="label-category label-category-design">
                                        <div class="text-s weight-600">Payment gateway</div>
                                    </div>
                                </div>
                            </div>
                            <div class="company-box">
                                <div class="company-card-title">
                                    <div class="company-logo">
                                        <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/6488359fd35cdf0344202984_Trueebill%20Logo.svg" loading="lazy" alt=""/>
                                    </div>
                                    <div class="tag">
                                        <div class="text-r text-brands-primary">3 Jobs</div>
                                    </div>
                                </div>
                                <div class="company-card-description">
                                    <p class="text-l text-neutral-80">Take control of your money. Truebill develops a mobile app that helps consumers take control of their financial...</p>
                                </div>
                                <div class="company-card-category-label-wrapper">
                                    <div class="label-category label-category-design">
                                        <div class="text-s weight-600">Bussiness</div>
                                    </div>
                                </div>
                            </div>
                            <div class="company-box">
                                <div class="company-card-title">
                                    <div class="company-logo">
                                        <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/6482ace168bc3654993aa777_Divy%20Logo.svg" loading="lazy" alt=""/>
                                    </div>
                                    <div class="tag">
                                        <div class="text-r text-brands-primary">3 Jobs</div>
                                    </div>
                                </div>
                                <div class="company-card-description">
                                    <h4>Square</h4>
                                    <p class="text-l text-neutral-80">Square builds common business tools in unconventional ways so more people can start, run, and grow their businesses.</p>
                                </div>
                                <div class="company-card-category-label-wrapper">
                                    <div class="label-category label-category-design">
                                        <div class="text-s weight-600">Bussiness</div>
                                    </div>
                                    <div class="label-category label-category-design">
                                        <div class="text-s weight-600">Blockchain</div>
                                    </div>
                                </div>
                            </div>
                            <div class="company-box">
                                <div class="company-card-title">
                                    <div class="company-logo">
                                        <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/6488359ce545bb88ff9e0e70_Coinbase%20Logo.svg" loading="lazy" alt=""/>
                                    </div>
                                    <div class="tag">
                                        <div class="text-r text-brands-primary">3 Jobs</div>
                                    </div>
                                </div>
                                <div class="company-card-description">
                                    <h4>Coinbase</h4>
                                    <p class="text-l text-neutral-80">Coinbase is a digital currency wallet and platform where merchants and consumers can transact with new digital currencies.</p>
                                </div>
                                <div class="company-card-category-label-wrapper">
                                    <div class="label-category label-category-design">
                                        <div class="text-s weight-600">Bussiness</div>
                                    </div>
                                    <div class="label-category label-category-design">
                                        <div class="text-s weight-600">Blockchain</div>
                                    </div>
                                </div>
                            </div>
                            <div class="company-box">
                                <div class="company-card-title">
                                    <div class="company-logo">
                                        <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/6488359f42d07f8e8d3c42ff_Robinhood%20Logo.svg" loading="lazy" alt=""/>
                                    </div>
                                    <div class="tag">
                                        <div class="text-r text-brands-primary">3 Jobs</div>
                                    </div>
                                </div>
                                <div class="company-card-description">
                                    <h4>Robinhood</h4>
                                    <p class="text-l text-neutral-80">Robinhood is lowering barriers, removing fees, and providing greater access to financial information.</p>
                                </div>
                                <div class="company-card-category-label-wrapper">
                                    <div class="label-category label-category-design">
                                        <div class="text-s weight-600">Bussiness</div>
                                    </div>
                                </div>
                            </div>
                            <div class="company-box">
                                <div class="company-card-title">
                                    <div class="company-logo">
                                        <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/6488359a92750615c6bf0de1_Kraken%20Logo.svg" loading="lazy" alt=""/>
                                    </div>
                                    <div class="tag">
                                        <div class="text-r text-brands-primary">3 Jobs</div>
                                    </div>
                                </div>
                                <div class="company-card-description">
                                    <h4>Kraken</h4>
                                    <p class="text-l text-neutral-80">Based in San Francisco, Kraken is the world’s largest global bitcoin exchange in euro volume and liquidity.</p>
                                </div>
                                <div class="company-card-category-label-wrapper">
                                    <div class="label-category label-category-design">
                                        <div class="text-s weight-600">Bussiness</div>
                                    </div>
                                    <div class="label-category label-category-design">
                                        <div class="text-s weight-600">Blockchain</div>
                                    </div>
                                </div>
                            </div>
                            <div class="company-box">
                                <div class="company-card-title">
                                    <div class="company-logo">
                                        <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/64816750618c99bec18c8cb8_Revolut%20Logo.svg" loading="lazy" alt=""/>
                                    </div>
                                    <div class="tag">
                                        <div class="text-r text-brands-primary">3 Jobs</div>
                                    </div>
                                </div>
                                <div class="company-card-description">
                                    <h4>Revolut</h4>
                                    <p class="text-l text-neutral-80">When Revolut was founded in 2015, we had a vision to build a sustainable, digital alternative to traditional big banks.</p>
                                </div>
                                <div class="company-card-category-label-wrapper">
                                    <div class="label-category label-category-design">
                                        <div class="text-s weight-600">Bussiness</div>
                                    </div>
                                </div>
                            </div>
                            <div class="company-box">
                                <div class="company-card-title">
                                    <div class="company-logo">
                                        <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/6482ace27db698c2a815cb07_Pentagram%20Logo.svg" loading="lazy" alt=""/>
                                    </div>
                                    <div class="tag">
                                        <div class="text-r text-brands-primary">3 Jobs</div>
                                    </div>
                                </div>
                                <div class="company-card-description">
                                    <h4>Divvy</h4>
                                    <p class="text-l text-neutral-80">Divvy is a secure financial platform for businesses to manage payments and subscriptions.</p>
                                </div>
                                <div class="company-card-category-label-wrapper">
                                    <div class="label-category label-category-design">
                                        <div class="text-s weight-600">Bussiness</div>
                                    </div>
                                    <div class="label-category label-category-design">
                                        <div class="text-s weight-600">Blockchain</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search-result-wrapper">
                            <div class="grid-2-column search-result-items">
                                <div class="card">
                                    <div class="company-box">
                                        <div class="company-card-title">
                                            <div class="company-logo">
                                                <img loading="lazy" alt="" src="https://cdn.prod.website-files.com/img/generic/image1.jpg"/>
                                            </div>
                                            <div class="tag">
                                                <div class="text-r text-brands-primary">3 Jobs</div>
                                            </div>
                                        </div>
                                        <div class="company-card-description">
                                            <h4>You &#x27;re viewing sample results.</h4>
                                            <p class="text-l text-neutral-80">
                                                <span>Fusce</span>
                                                <span></span>
                                                <span>aliquet</span>
                                                <span></span>
                                                <span>turpis</span>
                                                <span></span>
                                                <span>at</span>
                                                <span></span>
                                                <span>orci</span>
                                                <span></span>
                                                <span>bibendum</span>
                                                <span>, </span>
                                                <span>non</span>
                                                <span></span>
                                                <span>convallis</span>
                                                <span></span>
                                                <span>justo</span>
                                                <span></span>
                                                <span>tempor</span>
                                                <span>. </span>
                                                <span>Vestibulum</span>
                                                <span></span>
                                                <span>ante</span>
                                                <span></span>
                                                <span>ipsum</span>
                                                <span></span>
                                                <span>primis</span>
                                                <span></span>
                                                <span>in</span>
                                                <span></span>
                                                <span>faucibus</span>
                                                <span></span>
                                                <span>orci</span>
                                                <span></span>
                                                <span>luctus</span>
                                                <span></span>
                                                <span>et</span>
                                                <span></span>
                                                <span>ultrices</span>
                                                <span></span>
                                                <span>posuere</span>
                                                <span></span>
                                                <span>cubilia</span>
                                                <span></span>
                                                <span>curae</span>
                                                <span>. </span>
                                                <span>Vestibulum</span>
                                                <span></span>
                                                <span>ante</span>
                                                <span></span>
                                                <span>ipsum</span>
                                                <span></span>
                                                <span>primis</span>
                                                <span></span>
                                                <span>in</span>
                                                <span></span>
                                                <span>faucibus</span>
                                                <span></span>
                                                <span>orci</span>
                                                <span></span>
                                                <span>luctus</span>
                                                <span></span>
                                                <span>et</span>
                                                <span></span>
                                                <span>ultrices</span>
                                                <span></span>
                                                <span>posuere</span>
                                                <span></span>
                                                <span>cubilia</span>
                                                <span></span>
                                                <span>curae</span>
                                                <span>. </span>
                                                <span>Vivamus</span>
                                                <span></span>
                                                <span>vitae</span>
                                                <span>…</span>
                                            </p>
                                        </div>
                                        <div class="company-card-category-label-wrapper">
                                            <div class="label-category label-category-design">
                                                <div class="text-s weight-600">Bussiness</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="company-box">
                                        <div class="company-card-title">
                                            <div class="company-logo">
                                                <img loading="lazy" alt="" src="https://cdn.prod.website-files.com/img/generic/image20.jpg"/>
                                            </div>
                                            <div class="tag">
                                                <div class="text-r text-brands-primary">3 Jobs</div>
                                            </div>
                                        </div>
                                        <div class="company-card-description">
                                            <h4>Add CMS or Business Hosting and index your site to see real search results!</h4>
                                            <p class="text-l text-neutral-80">
                                                <span>Fusce</span>
                                                <span></span>
                                                <span>aliquet</span>
                                                <span></span>
                                                <span>turpis</span>
                                                <span></span>
                                                <span>at</span>
                                                <span></span>
                                                <span>orci</span>
                                                <span></span>
                                                <span>bibendum</span>
                                                <span>, </span>
                                                <span>non</span>
                                                <span></span>
                                                <span>convallis</span>
                                                <span></span>
                                                <span>justo</span>
                                                <span></span>
                                                <span>tempor</span>
                                                <span>. </span>
                                                <span>Maecenas</span>
                                                <span></span>
                                                <span>euismod</span>
                                                <span></span>
                                                <span>sapien</span>
                                                <span></span>
                                                <span>eu</span>
                                                <span></span>
                                                <span>arcu</span>
                                                <span></span>
                                                <span>convallis</span>
                                                <span>, </span>
                                                <span>vitae</span>
                                                <span></span>
                                                <span>vestibulum</span>
                                                <span></span>
                                                <span>ipsum</span>
                                                <span></span>
                                                <span>maximus</span>
                                                <span>. </span>
                                                <span>Integer</span>
                                                <span></span>
                                                <span>rutrum</span>
                                                <span></span>
                                                <span>ante</span>
                                                <span></span>
                                                <span>et</span>
                                                <span></span>
                                                <span>nunc</span>
                                                <span></span>
                                                <span>venenatis</span>
                                                <span>, </span>
                                                <span>id</span>
                                                <span></span>
                                                <span>ultricies</span>
                                                <span></span>
                                                <span>risus</span>
                                                <span>…</span>
                                            </p>
                                        </div>
                                        <div class="company-card-category-label-wrapper">
                                            <div class="label-category label-category-design">
                                                <div class="text-s weight-600">Bussiness</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="company-box">
                                        <div class="company-card-title">
                                            <div class="company-logo">
                                                <img loading="lazy" alt="" src="https://cdn.prod.website-files.com/img/generic/image16.jpg"/>
                                            </div>
                                            <div class="tag">
                                                <div class="text-r text-brands-primary">3 Jobs</div>
                                            </div>
                                        </div>
                                        <div class="company-card-description">
                                            <h4>Want more from search? Add your idea to our Wishlist</h4>
                                            <p class="text-l text-neutral-80">
                                                <span>Integer</span>
                                                <span></span>
                                                <span>rutrum</span>
                                                <span></span>
                                                <span>ante</span>
                                                <span></span>
                                                <span>et</span>
                                                <span></span>
                                                <span>nunc</span>
                                                <span></span>
                                                <span>venenatis</span>
                                                <span>, </span>
                                                <span>id</span>
                                                <span></span>
                                                <span>ultricies</span>
                                                <span></span>
                                                <span>risus</span>
                                                <span></span>
                                                <span>ultricies</span>
                                                <span>. </span>
                                                <span>Fusce</span>
                                                <span></span>
                                                <span>aliquet</span>
                                                <span></span>
                                                <span>turpis</span>
                                                <span></span>
                                                <span>at</span>
                                                <span></span>
                                                <span>orci</span>
                                                <span></span>
                                                <span>bibendum</span>
                                                <span>, </span>
                                                <span>non</span>
                                                <span></span>
                                                <span>convallis</span>
                                                <span></span>
                                                <span>justo</span>
                                                <span></span>
                                                <span>tempor</span>
                                                <span>. </span>
                                                <span>Integer</span>
                                                <span></span>
                                                <span>rutrum</span>
                                                <span></span>
                                                <span>ante</span>
                                                <span></span>
                                                <span>et</span>
                                                <span></span>
                                                <span>nunc</span>
                                                <span></span>
                                                <span>venenatis</span>
                                                <span>, </span>
                                                <span>id</span>
                                                <span></span>
                                                <span>ultricies</span>
                                                <span></span>
                                                <span>risus</span>
                                                <span></span>
                                                <span>ultricies</span>
                                                <span>.</span>
                                                <span>…</span>
                                            </p>
                                        </div>
                                        <div class="company-card-category-label-wrapper">
                                            <div class="label-category label-category-design">
                                                <div class="text-s weight-600">Bussiness</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="company-box">
                                        <div class="company-card-title">
                                            <div class="company-logo">
                                                <img loading="lazy" alt="" src="https://cdn.prod.website-files.com/img/generic/image17.jpg"/>
                                            </div>
                                            <div class="tag">
                                                <div class="text-r text-brands-primary">3 Jobs</div>
                                            </div>
                                        </div>
                                        <div class="company-card-description">
                                            <h4>Define a search image in Page Settings to add some imagery to results</h4>
                                            <p class="text-l text-neutral-80">
                                                <span>Vestibulum</span>
                                                <span></span>
                                                <span>ante</span>
                                                <span></span>
                                                <span>ipsum</span>
                                                <span></span>
                                                <span>primis</span>
                                                <span></span>
                                                <span>in</span>
                                                <span></span>
                                                <span>faucibus</span>
                                                <span></span>
                                                <span>orci</span>
                                                <span></span>
                                                <span>luctus</span>
                                                <span></span>
                                                <span>et</span>
                                                <span></span>
                                                <span>ultrices</span>
                                                <span></span>
                                                <span>posuere</span>
                                                <span></span>
                                                <span>cubilia</span>
                                                <span></span>
                                                <span>curae</span>
                                                <span>. </span>
                                                <span>Praesent</span>
                                                <span></span>
                                                <span>nec</span>
                                                <span></span>
                                                <span>orci</span>
                                                <span></span>
                                                <span>at</span>
                                                <span></span>
                                                <span>nulla</span>
                                                <span></span>
                                                <span>consequat</span>
                                                <span></span>
                                                <span>congue</span>
                                                <span></span>
                                                <span>ut</span>
                                                <span></span>
                                                <span>non</span>
                                                <span></span>
                                                <span>arcu</span>
                                                <span>. </span>
                                                <span>Maec</span>
                                                <span>…</span>
                                            </p>
                                        </div>
                                        <div class="company-card-category-label-wrapper">
                                            <div class="label-category label-category-design">
                                                <div class="text-s weight-600">Bussiness</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="company-box">
                                        <div class="company-card-title">
                                            <div class="company-logo">
                                                <img loading="lazy" alt="" src="https://cdn.prod.website-files.com/img/generic/image18.jpg"/>
                                            </div>
                                            <div class="tag">
                                                <div class="text-r text-brands-primary">3 Jobs</div>
                                            </div>
                                        </div>
                                        <div class="company-card-description">
                                            <h4>Search snippets too long? Limit their character count in the Settings panel</h4>
                                            <p class="text-l text-neutral-80">
                                                <span>Maecenas</span>
                                                <span></span>
                                                <span>euismod</span>
                                                <span></span>
                                                <span>sapien</span>
                                                <span></span>
                                                <span>eu</span>
                                                <span></span>
                                                <span>arcu</span>
                                                <span></span>
                                                <span>convallis</span>
                                                <span>, </span>
                                                <span>vitae</span>
                                                <span></span>
                                                <span>vestibulum</span>
                                                <span></span>
                                                <span>ipsum</span>
                                                <span></span>
                                                <span>maximus</span>
                                                <span>. </span>
                                                <span>Sed</span>
                                                <span></span>
                                                <span>auctor</span>
                                                <span></span>
                                                <span>augue</span>
                                                <span></span>
                                                <span>id</span>
                                                <span></span>
                                                <span>tellus</span>
                                                <span></span>
                                                <span>lacinia</span>
                                                <span>, </span>
                                                <span>nec</span>
                                                <span></span>
                                                <span>ultricies</span>
                                                <span></span>
                                                <span>est</span>
                                                <span></span>
                                                <span>fermentum</span>
                                                <span>. </span>
                                                <span>Integer</span>
                                                <span></span>
                                                <span>rutrum</span>
                                                <span></span>
                                                <span>ante</span>
                                                <span></span>
                                                <span>et</span>
                                                <span></span>
                                                <span>nunc</span>
                                                <span></span>
                                                <span>venenatis</span>
                                                <span>, </span>
                                                <span>id</span>
                                                <span></span>
                                                <span>ultricies</span>
                                                <span></span>
                                                <span>risus</span>
                                                <span></span>
                                                <span>ultricies</span>
                                                <span>. </span>
                                                <span>Sed</span>
                                                <span></span>
                                                <span>auctor</span>
                                                <span></span>
                                                <span>augue</span>
                                                <span></span>
                                                <span>id</span>
                                                <span></span>
                                                <span>tellus</span>
                                                <span></span>
                                                <span>lacinia</span>
                                                <span>, </span>
                                                <span>nec</span>
                                                <span></span>
                                                <span>ultrici</span>
                                                <span>…</span>
                                            </p>
                                        </div>
                                        <div class="company-card-category-label-wrapper">
                                            <div class="label-category label-category-design">
                                                <div class="text-s weight-600">Bussiness</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="company-box">
                                        <div class="company-card-title">
                                            <div class="company-logo">
                                                <img loading="lazy" alt="" src="https://cdn.prod.website-files.com/img/generic/image2.jpg"/>
                                            </div>
                                            <div class="tag">
                                                <div class="text-r text-brands-primary">3 Jobs</div>
                                            </div>
                                        </div>
                                        <div class="company-card-description">
                                            <h4>You can exclude any page from site search in Page Settings</h4>
                                            <p class="text-l text-neutral-80">
                                                <span>Donec</span>
                                                <span></span>
                                                <span>eu</span>
                                                <span></span>
                                                <span>felis</span>
                                                <span></span>
                                                <span>at</span>
                                                <span></span>
                                                <span>libero</span>
                                                <span></span>
                                                <span>consequat</span>
                                                <span></span>
                                                <span>sagittis</span>
                                                <span></span>
                                                <span>a</span>
                                                <span></span>
                                                <span>et</span>
                                                <span></span>
                                                <span>urna</span>
                                                <span>. </span>
                                                <span>Lorem</span>
                                                <span></span>
                                                <span>ipsum</span>
                                                <span></span>
                                                <span>dolor</span>
                                                <span></span>
                                                <span>sit</span>
                                                <span></span>
                                                <span>amet</span>
                                                <span>, </span>
                                                <span>consectetur</span>
                                                <span></span>
                                                <span>adipiscing</span>
                                                <span></span>
                                                <span>elit</span>
                                                <span>. </span>
                                                <span>Maecenas</span>
                                                <span></span>
                                                <span>euismod</span>
                                                <span></span>
                                                <span>sapien</span>
                                                <span></span>
                                                <span>eu</span>
                                                <span></span>
                                                <span>arcu</span>
                                                <span></span>
                                                <span>convallis</span>
                                                <span>, </span>
                                                <span>vitae</span>
                                                <span></span>
                                                <span>vestibulum</span>
                                                <span></span>
                                                <span>ipsum</span>
                                                <span></span>
                                                <span>maximus</span>
                                                <span>. </span>
                                                <span>Sed</span>
                                                <span></span>
                                                <span>auctor</span>
                                                <span></span>
                                                <span>augue</span>
                                                <span></span>
                                                <span>id</span>
                                                <span></span>
                                                <span>tellus</span>
                                                <span></span>
                                                <span>lacinia</span>
                                                <span>, </span>
                                                <span>nec</span>
                                                <span></span>
                                                <span>ultricies</span>
                                                <span></span>
                                                <span>est</span>
                                                <span></span>
                                                <span>fermentum</span>
                                                <span>. </span>
                                                <span>Inte</span>
                                                <span>…</span>
                                            </p>
                                        </div>
                                        <div class="company-card-category-label-wrapper">
                                            <div class="label-category label-category-design">
                                                <div class="text-s weight-600">Bussiness</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="company-box">
                                        <div class="company-card-title">
                                            <div class="company-logo">
                                                <img loading="lazy" alt="" src="https://cdn.prod.website-files.com/img/generic/image5.jpg"/>
                                            </div>
                                            <div class="tag">
                                                <div class="text-r text-brands-primary">3 Jobs</div>
                                            </div>
                                        </div>
                                        <div class="company-card-description">
                                            <h4>Components and Collection Lists are excluded from site search by default</h4>
                                            <p class="text-l text-neutral-80">
                                                <span>Cras</span>
                                                <span></span>
                                                <span>sit</span>
                                                <span></span>
                                                <span>amet</span>
                                                <span></span>
                                                <span>velit</span>
                                                <span></span>
                                                <span>id</span>
                                                <span></span>
                                                <span>nulla</span>
                                                <span></span>
                                                <span>tempus</span>
                                                <span></span>
                                                <span>dictum</span>
                                                <span></span>
                                                <span>sit</span>
                                                <span></span>
                                                <span>amet</span>
                                                <span></span>
                                                <span>eu</span>
                                                <span></span>
                                                <span>nisi</span>
                                                <span>. </span>
                                                <span>Lorem</span>
                                                <span></span>
                                                <span>ipsum</span>
                                                <span></span>
                                                <span>dolor</span>
                                                <span></span>
                                                <span>sit</span>
                                                <span></span>
                                                <span>amet</span>
                                                <span>, </span>
                                                <span>consectetur</span>
                                                <span></span>
                                                <span>adipiscing</span>
                                                <span></span>
                                                <span>elit</span>
                                                <span>. </span>
                                                <span>Donec</span>
                                                <span></span>
                                                <span>eu</span>
                                                <span></span>
                                                <span>felis</span>
                                                <span></span>
                                                <span>at</span>
                                                <span></span>
                                                <span>l</span>
                                                <span>…</span>
                                            </p>
                                        </div>
                                        <div class="company-card-category-label-wrapper">
                                            <div class="label-category label-category-design">
                                                <div class="text-s weight-600">Bussiness</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="company-box">
                                        <div class="company-card-title">
                                            <div class="company-logo">
                                                <img loading="lazy" alt="" src="https://cdn.prod.website-files.com/img/generic/image7.jpg"/>
                                            </div>
                                            <div class="tag">
                                                <div class="text-r text-brands-primary">3 Jobs</div>
                                            </div>
                                        </div>
                                        <div class="company-card-description">
                                            <h4>Have a super-secret style guide on your site? Exclude it in Page Settings</h4>
                                            <p class="text-l text-neutral-80">
                                                <span>Maecenas</span>
                                                <span></span>
                                                <span>euismod</span>
                                                <span></span>
                                                <span>sapien</span>
                                                <span></span>
                                                <span>eu</span>
                                                <span></span>
                                                <span>arcu</span>
                                                <span></span>
                                                <span>convallis</span>
                                                <span>, </span>
                                                <span>vitae</span>
                                                <span></span>
                                                <span>vestibulum</span>
                                                <span></span>
                                                <span>ipsum</span>
                                                <span></span>
                                                <span>maximus</span>
                                                <span>. </span>
                                                <span>Sed</span>
                                                <span></span>
                                                <span>auctor</span>
                                                <span></span>
                                                <span>augue</span>
                                                <span></span>
                                                <span>id</span>
                                                <span></span>
                                                <span>tellus</span>
                                                <span></span>
                                                <span>lacinia</span>
                                                <span>, </span>
                                                <span>nec</span>
                                                <span></span>
                                                <span>ultricies</span>
                                                <span></span>
                                                <span>est</span>
                                                <span></span>
                                                <span>fermentum</span>
                                                <span>. </span>
                                                <span>Sed</span>
                                                <span></span>
                                                <span>auctor</span>
                                                <span></span>
                                                <span>augue</span>
                                                <span></span>
                                                <span>id</span>
                                                <span></span>
                                                <span>tellus</span>
                                                <span></span>
                                                <span>lacinia</span>
                                                <span>, </span>
                                                <span>nec</span>
                                                <span></span>
                                                <span>ultricies</span>
                                                <span></span>
                                                <span>est</span>
                                                <span></span>
                                                <span>fermentum</span>
                                                <span>.</span>
                                                <span>…</span>
                                            </p>
                                        </div>
                                        <div class="company-card-category-label-wrapper">
                                            <div class="label-category label-category-design">
                                                <div class="text-s weight-600">Bussiness</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="company-box">
                                        <div class="company-card-title">
                                            <div class="company-logo">
                                                <img loading="lazy" alt="" src="https://cdn.prod.website-files.com/img/generic/image8.jpg"/>
                                            </div>
                                            <div class="tag">
                                                <div class="text-r text-brands-primary">3 Jobs</div>
                                            </div>
                                        </div>
                                        <div class="company-card-description">
                                            <h4>Highlight search terms in results in the Settings tab</h4>
                                            <p class="text-l text-neutral-80">
                                                <span>Lorem</span>
                                                <span></span>
                                                <span>ipsum</span>
                                                <span></span>
                                                <span>dolor</span>
                                                <span></span>
                                                <span>sit</span>
                                                <span></span>
                                                <span>amet</span>
                                                <span>, </span>
                                                <span>consectetur</span>
                                                <span></span>
                                                <span>adipiscing</span>
                                                <span></span>
                                                <span>elit</span>
                                                <span>. </span>
                                                <span>Vivamus</span>
                                                <span></span>
                                                <span>vitae</span>
                                                <span></span>
                                                <span>arcu</span>
                                                <span></span>
                                                <span>vel</span>
                                                <span></span>
                                                <span>velit</span>
                                                <span></span>
                                                <span>efficitur</span>
                                                <span></span>
                                                <span>vestibulum</span>
                                                <span></span>
                                                <span>vel</span>
                                                <span></span>
                                                <span>i</span>
                                                <span>…</span>
                                            </p>
                                        </div>
                                        <div class="company-card-category-label-wrapper">
                                            <div class="label-category label-category-design">
                                                <div class="text-s weight-600">Bussiness</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="company-box">
                                        <div class="company-card-title">
                                            <div class="company-logo">
                                                <img loading="lazy" alt="" src="https://cdn.prod.website-files.com/img/generic/image3.jpg"/>
                                            </div>
                                            <div class="tag">
                                                <div class="text-r text-brands-primary">3 Jobs</div>
                                            </div>
                                        </div>
                                        <div class="company-card-description">
                                            <h4>Pro tip: Tell people what they can search for in your search input &#x27;s placeholder text!</h4>
                                            <p class="text-l text-neutral-80">
                                                <span>Vestibulum</span>
                                                <span></span>
                                                <span>ante</span>
                                                <span></span>
                                                <span>ipsum</span>
                                                <span></span>
                                                <span>primis</span>
                                                <span></span>
                                                <span>in</span>
                                                <span></span>
                                                <span>faucibus</span>
                                                <span></span>
                                                <span>orci</span>
                                                <span></span>
                                                <span>luctus</span>
                                                <span></span>
                                                <span>et</span>
                                                <span></span>
                                                <span>ultrices</span>
                                                <span></span>
                                                <span>posuere</span>
                                                <span></span>
                                                <span>cubilia</span>
                                                <span></span>
                                                <span>curae</span>
                                                <span>. </span>
                                                <span>Vivamus</span>
                                                <span></span>
                                                <span>vitae</span>
                                                <span></span>
                                                <span>arcu</span>
                                                <span></span>
                                                <span>vel</span>
                                                <span></span>
                                                <span>velit</span>
                                                <span></span>
                                                <span>efficitur</span>
                                                <span>…</span>
                                            </p>
                                        </div>
                                        <div class="company-card-category-label-wrapper">
                                            <div class="label-category label-category-design">
                                                <div class="text-s weight-600">Bussiness</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-content-wrapper">
                            <div class="svg-icon _24x24 w-embed">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1610_18684)">
                                        <path d="M15 6L9 12L15 18" stroke="#25324B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1610_18684">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="pagination-wrapper">
                                <a href="#" class="pagination-item w-inline-block">
                                    <div class="text-s">1</div>
                                </a>
                                <a href="#" class="pagination-item w-inline-block">
                                    <div class="text-s">2</div>
                                </a>
                                <a href="#" class="pagination-item w-inline-block">
                                    <div class="text-s">3</div>
                                </a>
                                <a href="#" class="pagination-item w-inline-block">
                                    <div class="text-s">4</div>
                                </a>
                                <a href="#" class="pagination-item w-inline-block">
                                    <div class="text-s">5</div>
                                </a>
                                <a href="#" class="pagination-item w-inline-block">
                                    <div class="text-s">...</div>
                                </a>
                                <a href="#" class="pagination-item w-inline-block">
                                    <div class="text-s">33</div>
                                </a>
                            </div>
                            <div class="svg-icon _24x24 w-embed">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1610_18702)">
                                        <path d="M9.375 6L15.625 12L9.375 18" stroke="#25324B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1610_18702">
                                            <rect width="25" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>