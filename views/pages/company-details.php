<?php 
    $locations = isset($params['company_details']->location) ? explode(',',$params['company_details']->location) : [];
    $count_locations = count($locations);
?>
<section class="section hero-section">
            <div class="container w-container">
                <div class="section-content-wrapper mg-medium">
                    <div class="breadcrumb checkout-breadcrumb">
                        <div class="text-r text-neutral-100">
                            <a href="/fortime" class="breadcrumb-previous-page">Home /</a>
                            <a href="../browse-companies" class="breadcrumb-previous-page">Companies /</a>
                            <?=$params['company_details']->name?>
                        </div>
                    </div>
                    <div class="company-hero-box">
                        <div class="w-layout-hflex company-hero-logo-wrap">
                            <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/64875951284002bdb74bfc70_Company%20Logo%20Stripe.png" loading="lazy" alt="" class="company-hero-logo"/>
                            <div class="company-hero-name-tag company-hero-name-tag-mobile">
                                <div>43 Jobs</div>
                            </div>
                        </div>
                        <div class="company-hero-inner">
                            <div class="company-hero-title">
                                <div class="company-hero-name">
                                    <h2 class="text-neutral-100"><?=$params['company_details']->name?></h2>
                                    <div class="company-hero-name-tag text-r">
                                        <div>43 Jobs</div>
                                    </div>
                                </div>
                                <a href="#" class="text-r weight-600 text-brands-primary"><?=$params['company_details']->website?></a>
                            </div>
                            <div class="company-hero-summary">
                                <div class="company-hero-summary-item">
                                    <div class="company-hero-summary-item-icon">
                                        <div class="svg-icon w-embed">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.4678 8.3947L8.46555 8.39653L8.46341 8.39861L8.4678 8.3947ZM18.4219 8.20817C18.3523 8.14111 18.2751 8.08244 18.1919 8.03336C18.0741 7.96402 17.9433 7.91958 17.8076 7.9028C17.672 7.88601 17.5343 7.89723 17.4031 7.93577C17.272 7.9743 17.1501 8.03933 17.0451 8.12683C16.9401 8.21433 16.8541 8.32245 16.7925 8.4445C16.448 9.12319 15.9729 9.72718 15.3945 10.2218C15.483 9.72344 15.5276 9.21825 15.5278 8.71207C15.5297 7.17217 15.1234 5.65928 14.3505 4.32743C13.5775 2.99558 12.4654 1.89235 11.1274 1.13007C10.98 1.04651 10.8138 1.00178 10.6444 1.00005C10.475 0.998327 10.3079 1.03967 10.1588 1.12021C10.0098 1.20074 9.88362 1.31783 9.7922 1.46048C9.70078 1.60313 9.6471 1.76666 9.6362 1.93574C9.58024 2.88391 9.33236 3.81085 8.90759 4.6604C8.48282 5.50995 7.88999 6.26442 7.16503 6.8781L6.93456 7.0656C6.17648 7.57569 5.50546 8.2045 4.94726 8.9279C4.07958 10.021 3.47851 11.3012 3.19172 12.6671C2.90493 14.0329 2.94031 15.4468 3.29506 16.7966C3.6498 18.1464 4.31415 19.3949 5.23543 20.4433C6.1567 21.4916 7.30956 22.3109 8.60257 22.8361C8.75439 22.8981 8.91914 22.9219 9.08229 22.9052C9.24545 22.8885 9.40198 22.8319 9.5381 22.7404C9.67422 22.6489 9.78573 22.5254 9.8628 22.3806C9.93987 22.2358 9.98013 22.0743 9.98003 21.9103C9.97932 21.8042 9.96252 21.6989 9.93023 21.5978C9.7065 20.7568 9.64208 19.8814 9.74028 19.0168C10.6865 20.8015 12.2054 22.2162 14.0528 23.0334C14.2783 23.1342 14.5332 23.1478 14.7681 23.0715C16.2277 22.6004 17.5425 21.7639 18.5878 20.6415C19.633 19.5191 20.3739 18.1481 20.74 16.6588C21.1061 15.1694 21.0853 13.6112 20.6796 12.1321C20.2739 10.653 19.4967 9.30227 18.4219 8.20817ZM14.5171 21.0392C13.6454 20.5975 12.8765 19.9772 12.2603 19.2187C11.6441 18.4602 11.1944 17.5806 10.9405 16.6369C10.8629 16.3191 10.8029 15.9974 10.7608 15.673C10.7322 15.4665 10.6398 15.274 10.4965 15.1226C10.3532 14.9711 10.1661 14.8682 9.96146 14.8283C9.89841 14.8159 9.8343 14.8096 9.77003 14.8097C9.59427 14.8097 9.42161 14.856 9.26944 14.9439C9.11728 15.0319 8.991 15.1584 8.90333 15.3107C8.0736 16.7419 7.65633 18.3748 7.69776 20.0285C6.968 19.4611 6.35811 18.7545 5.90344 17.9497C5.44876 17.1449 5.15835 16.2578 5.04903 15.3399C4.93971 14.422 5.01366 13.4915 5.26658 12.6024C5.51951 11.7133 5.94639 10.8833 6.52247 10.1603C6.95989 9.59218 7.48756 9.09964 8.08447 8.70235C8.11032 8.68567 8.1351 8.6674 8.15869 8.64766C8.15869 8.64766 8.45538 8.40218 8.46552 8.39656C9.89022 7.19152 10.9035 5.57207 11.3643 3.76387C12.4538 4.7711 13.1804 6.1099 13.431 7.57238C13.6817 9.03485 13.4425 10.5392 12.7505 11.8518C12.6591 12.0269 12.6216 12.2252 12.6427 12.4216C12.6639 12.6181 12.7427 12.8039 12.8693 12.9555C12.9959 13.1072 13.1646 13.218 13.3541 13.2739C13.5436 13.3298 13.7454 13.3284 13.9341 13.2698C15.4659 12.7896 16.8138 11.8517 17.7964 10.5823C18.3869 11.4545 18.773 12.4489 18.9259 13.4911C19.0787 14.5334 18.9944 15.5967 18.6792 16.6018C18.364 17.6069 17.826 18.528 17.1054 19.2963C16.3847 20.0646 15.5 20.6604 14.5171 21.0393L14.5171 21.0392Z" fill="#26A4FF"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-r color-neutral-80">Founded</div>
                                        <div class="text-r weight-600 text-neutral-100"><?=$params['company_details']->founded_date?></div>
                                    </div>
                                </div>
                                <div class="company-hero-summary-item">
                                    <div class="company-hero-summary-item-icon">
                                        <div class="svg-icon w-embed">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 5C11.4696 5 10.9609 5.21071 10.5858 5.58579C10.2107 5.96086 10 6.46957 10 7C10 7.53043 10.2107 8.03914 10.5858 8.41421C10.9609 8.78929 11.4696 9 12 9C12.5304 9 13.0391 8.78929 13.4142 8.41421C13.7893 8.03914 14 7.53043 14 7C14 6.46957 13.7893 5.96086 13.4142 5.58579C13.0391 5.21071 12.5304 5 12 5ZM9.17157 4.17157C9.92172 3.42143 10.9391 3 12 3C13.0609 3 14.0783 3.42143 14.8284 4.17157C15.5786 4.92172 16 5.93913 16 7C16 8.06087 15.5786 9.07828 14.8284 9.82843C14.0783 10.5786 13.0609 11 12 11C10.9391 11 9.92172 10.5786 9.17157 9.82843C8.42143 9.07828 8 8.06087 8 7C8 5.93913 8.42143 4.92172 9.17157 4.17157ZM5 9C4.73478 9 4.48043 9.10536 4.29289 9.29289C4.10536 9.48043 4 9.73478 4 10C4 10.2652 4.10536 10.5196 4.29289 10.7071C4.48043 10.8946 4.73478 11 5 11C5.26522 11 5.51957 10.8946 5.70711 10.7071C5.89464 10.5196 6 10.2652 6 10C6 9.73478 5.89464 9.48043 5.70711 9.29289C5.51957 9.10536 5.26522 9 5 9ZM2.87868 7.87868C3.44129 7.31607 4.20435 7 5 7C5.79565 7 6.55871 7.31607 7.12132 7.87868C7.68393 8.44129 8 9.20435 8 10C8 10.7956 7.68393 11.5587 7.12132 12.1213C6.55871 12.6839 5.79565 13 5 13C4.20435 13 3.44129 12.6839 2.87868 12.1213C2.31607 11.5587 2 10.7956 2 10C2 9.20435 2.31607 8.44129 2.87868 7.87868ZM19 9C18.7348 9 18.4804 9.10536 18.2929 9.29289C18.1054 9.48043 18 9.73478 18 10C18 10.2652 18.1054 10.5196 18.2929 10.7071C18.4804 10.8946 18.7348 11 19 11C19.2652 11 19.5196 10.8946 19.7071 10.7071C19.8946 10.5196 20 10.2652 20 10C20 9.73478 19.8946 9.48043 19.7071 9.29289C19.5196 9.10536 19.2652 9 19 9ZM16.8787 7.87868C17.4413 7.31607 18.2043 7 19 7C19.7957 7 20.5587 7.31607 21.1213 7.87868C21.6839 8.44129 22 9.20435 22 10C22 10.7957 21.6839 11.5587 21.1213 12.1213C20.5587 12.6839 19.7957 13 19 13C18.2043 13 17.4413 12.6839 16.8787 12.1213C16.3161 11.5587 16 10.7957 16 10C16 9.20435 16.3161 8.44129 16.8787 7.87868ZM12 13.9993C11.2003 13.9993 10.4189 14.2389 9.75658 14.6872C9.13228 15.1098 8.64084 15.6996 8.33765 16.3878L8.09655 19H15.9034L15.6623 16.3878C15.3592 15.6996 14.8677 15.1098 14.2434 14.6872C13.5811 14.2389 12.7997 13.9993 12 13.9993ZM18 19H21V18.0001C21 18 21 18.0001 21 18.0001C21 17.5845 20.8704 17.1791 20.6294 16.8405C20.3884 16.5019 20.0479 16.2467 19.6552 16.1106C19.2625 15.9744 18.8371 15.964 18.4382 16.0808C18.2014 16.1501 17.981 16.2621 17.7871 16.41C17.9262 16.9175 18 17.451 18 18V19ZM16.9298 14.5776C16.51 13.9732 15.9804 13.4479 15.3646 13.031C14.3713 12.3587 13.1994 11.9993 12 11.9993C10.8006 11.9993 9.62867 12.3587 8.63543 13.031C8.01963 13.4479 7.49002 13.9732 7.07024 14.5776C6.77575 14.3995 6.45782 14.2591 6.12365 14.1613C5.32584 13.9278 4.47509 13.9486 3.68967 14.2209C2.90425 14.4932 2.22318 15.0035 1.74115 15.6808C1.25911 16.358 1.00006 17.1686 1 17.9999V20C1 20.5523 1.44772 21 2 21H22C22.5523 21 23 20.5523 23 20V18C22.9999 17.1687 22.7409 16.358 22.2589 15.6808C21.7768 15.0035 21.0958 14.4932 20.3103 14.2209C19.5249 13.9486 18.6742 13.9278 17.8763 14.1613C17.5422 14.2591 17.2242 14.3995 16.9298 14.5776ZM6.21295 16.41C6.01904 16.2621 5.79859 16.1501 5.56183 16.0808C5.16292 15.964 4.73754 15.9744 4.34483 16.1106C3.95212 16.2467 3.61159 16.5019 3.37057 16.8405C3.12957 17.1791 3.00005 17.5844 3 18C3 18 3 18 3 18V19H6V18C6 17.451 6.07383 16.9175 6.21295 16.41Z" fill="#26A4FF"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-r color-neutral-80">Employees</div>
                                        <div class="text-r weight-600 text-neutral-100">300+</div>
                                    </div>
                                </div>
                                <div class="company-hero-summary-item">
                                    <div class="company-hero-summary-item-icon">
                                        <div class="svg-icon w-embed">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5 10.5005C14.5 9.11924 13.3808 8 12.0005 8C10.6192 8 9.5 9.11924 9.5 10.5005C9.5 11.8808 10.6192 13 12.0005 13C13.3808 13 14.5 11.8808 14.5 10.5005Z" stroke="#26A4FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9995 21C10.801 21 4.5 15.8984 4.5 10.5633C4.5 6.38664 7.8571 3 11.9995 3C16.1419 3 19.5 6.38664 19.5 10.5633C19.5 15.8984 13.198 21 11.9995 21Z" stroke="#26A4FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-r color-neutral-80">Location</div>
                                        <div class="text-r weight-600 text-neutral-100"><?=$count_locations > 1 ? $count_locations.' countries' : $count_locations.' countrie'?></div>
                                    </div>
                                </div>
                                <div class="company-hero-summary-item">
                                    <div class="company-hero-summary-item-icon">
                                        <div class="svg-icon w-embed">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_1706_27857)">
                                                    <path d="M3 21H21" stroke="#26A4FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M5 21V7L13 3V21" stroke="#26A4FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M19 21V11L13 7" stroke="#26A4FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M9 9V9.01" stroke="#26A4FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M9 12V12.01" stroke="#26A4FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M9 15V15.01" stroke="#26A4FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M9 18V18.01" stroke="#26A4FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1706_27857">
                                                        <rect width="24" height="24" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-r color-neutral-80">Industry</div>
                                        <div class="text-r weight-600 text-neutral-100"><?=$params['company_details']->industry?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="company-hero-pattern-1">
                <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/64bf14537b7c9dc2eccb4eac_Company%20Details%20Hero%20Pattern%201.svg" loading="lazy" alt=""/>
            </div>
            <div class="company-hero-pattern-2">
                <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/64bf145251494891c0c7e021_Company%20Details%20Hero%20Pattern%202.svg" loading="lazy" alt=""/>
            </div>
            <div class="company-hero-pattern-mobile">
                <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/64bf1454d5ebd89ee2c8314e_Company%20Details%20Hero%20Pattern%20Mobile.svg" loading="lazy" alt=""/>
            </div>
        </section>
        <section class="section company-details-section">
            <div class="container w-container">
                <div class="company-details-main">
                    <div class="company-details-main-content">
                        <div class="company-details-main-content-text">
                            <div class="company-details-main-content-col">
                                <h3 class="text-neutral-100">Company Profile</h3>
                                <p class="text-r text-neutral-100"><?=$params['company_details']->description?></p>
                            </div>
                            <div class="company-details-main-content-col">
                                <h3 class="text-neutral-100">Company Profile</h3>
                                <div class="company-details-main-content-contact">
                                    <a href="#" class="company-details-main-content-contact-item text-r w-inline-block">
                                        <div class="svg-icon w-embed">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M22 5.80021C21.2483 6.1263 20.4534 6.34187 19.64 6.44021C20.4982 5.92753 21.1413 5.12099 21.45 4.17021C20.6436 4.65027 19.7608 4.98851 18.84 5.17021C18.2245 4.50278 17.405 4.05851 16.5098 3.90706C15.6147 3.75562 14.6945 3.90557 13.8938 4.3334C13.093 4.76123 12.4569 5.44274 12.0852 6.27105C11.7135 7.09935 11.6273 8.0276 11.84 8.91021C10.2094 8.82774 8.61444 8.40316 7.15865 7.66407C5.70287 6.92498 4.41885 5.8879 3.39 4.62021C3.02914 5.25038 2.83952 5.96403 2.84 6.69021C2.83872 7.36459 3.00422 8.02883 3.32176 8.62377C3.63929 9.21872 4.09902 9.72592 4.66 10.1002C4.00798 10.0825 3.36989 9.90751 2.8 9.59021V9.64021C2.80489 10.5851 3.13599 11.4993 3.73731 12.2282C4.33864 12.957 5.17326 13.4559 6.1 13.6402C5.74326 13.7488 5.37287 13.806 5 13.8102C4.74189 13.8072 4.48442 13.7838 4.23 13.7402C4.49391 14.553 5.00462 15.2634 5.69107 15.7724C6.37753 16.2814 7.20558 16.5638 8.06 16.5802C6.6172 17.7155 4.83588 18.3351 3 18.3402C2.66574 18.3413 2.33174 18.3213 2 18.2802C3.87443 19.4905 6.05881 20.1329 8.29 20.1302C9.82969 20.1462 11.3571 19.8552 12.7831 19.2743C14.2091 18.6934 15.505 17.8341 16.5952 16.7467C17.6854 15.6593 18.548 14.3656 19.1326 12.9411C19.7172 11.5166 20.012 9.98994 20 8.45021C20 8.28021 20 8.10021 20 7.92021C20.7847 7.33502 21.4615 6.61763 22 5.80021Z" fill="#4640DE"/>
                                            </svg>
                                        </div>
                                        <div>twitter.com/stripe</div>
                                    </a>
                                    <a href="#" class="company-details-main-content-contact-item text-r w-inline-block">
                                        <div class="svg-icon w-embed">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.1194 5.32003H16.9994V2.14003C16.0891 2.04538 15.1745 1.99865 14.2594 2.00003C11.5394 2.00003 9.67938 3.66003 9.67938 6.70003V9.32003H6.60938V12.88H9.67938V22H13.3594V12.88H16.4194L16.8794 9.32003H13.3594V7.05003C13.3594 6.00003 13.6394 5.32003 15.1194 5.32003Z" fill="#4640DE"/>
                                            </svg>
                                        </div>
                                        <div>facebook.com/StripeHQ</div>
                                    </a>
                                    <a href="#" class="company-details-main-content-contact-item text-r w-inline-block">
                                        <div class="svg-icon w-embed">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20.4705 2.00014H3.53055C3.34013 1.9975 3.15105 2.03239 2.97411 2.10282C2.79718 2.17326 2.63585 2.27786 2.49934 2.41065C2.36284 2.54344 2.25383 2.70182 2.17854 2.87675C2.10325 3.05167 2.06316 3.23972 2.06055 3.43014V20.5701C2.06316 20.7606 2.10325 20.9486 2.17854 21.1235C2.25383 21.2985 2.36284 21.4568 2.49934 21.5896C2.63585 21.7224 2.79718 21.827 2.97411 21.8975C3.15105 21.9679 3.34013 22.0028 3.53055 22.0001H20.4705C20.661 22.0028 20.85 21.9679 21.027 21.8975C21.2039 21.827 21.3652 21.7224 21.5017 21.5896C21.6383 21.4568 21.7473 21.2985 21.8226 21.1235C21.8978 20.9486 21.9379 20.7606 21.9405 20.5701V3.43014C21.9379 3.23972 21.8978 3.05167 21.8226 2.87675C21.7473 2.70182 21.6383 2.54344 21.5017 2.41065C21.3652 2.27786 21.2039 2.17326 21.027 2.10282C20.85 2.03239 20.661 1.9975 20.4705 2.00014ZM8.09055 18.7401H5.09055V9.74014H8.09055V18.7401ZM6.59055 8.48014C6.17681 8.48014 5.78002 8.31578 5.48746 8.02323C5.1949 7.73067 5.03055 7.33388 5.03055 6.92014C5.03055 6.5064 5.1949 6.10961 5.48746 5.81705C5.78002 5.5245 6.17681 5.36014 6.59055 5.36014C6.81024 5.33522 7.03272 5.35699 7.24342 5.42402C7.45412 5.49105 7.64829 5.60183 7.8132 5.7491C7.97812 5.89637 8.11007 6.07682 8.20042 6.27862C8.29076 6.48043 8.33746 6.69904 8.33746 6.92014C8.33746 7.14124 8.29076 7.35985 8.20042 7.56166C8.11007 7.76346 7.97812 7.94391 7.8132 8.09118C7.64829 8.23845 7.45412 8.34923 7.24342 8.41626C7.03272 8.48329 6.81024 8.50505 6.59055 8.48014ZM18.9105 18.7401H15.9105V13.9101C15.9105 12.7001 15.4805 11.9101 14.3905 11.9101C14.0532 11.9126 13.7247 12.0184 13.4494 12.2133C13.174 12.4082 12.965 12.6828 12.8505 13.0001C12.7723 13.2352 12.7384 13.4827 12.7505 13.7301V18.7301H9.75055C9.75055 18.7301 9.75055 10.5501 9.75055 9.73014H12.7505V11.0001C13.0231 10.5272 13.4195 10.1377 13.897 9.87334C14.3745 9.60902 14.9151 9.47999 15.4605 9.50014C17.4605 9.50014 18.9105 10.7901 18.9105 13.5601V18.7401Z" fill="#4640DE"/>
                                            </svg>
                                        </div>
                                        <div>linkedin.com/company/stripe</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="company-details-main-content-galery">
                            <div>
                                <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/6487e05e522a23d03429ee75_Company%20Galery%201.png" loading="lazy" alt="Jobhuntly Company Activities" class="company-details-galery-thumbnail"/>
                            </div>
                            <div class="company-details-galery-images">
                                <div>
                                    <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/6487e05b2569738adc223440_Company%20Galery%202.png" loading="lazy" alt="Jobhuntly Company Activities" class="company-details-galery-image"/>
                                </div>
                                <div>
                                    <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/6487e05b79eff354cee70510_Company%20Galery%203.png" loading="lazy" alt="Jobhuntly Company Activities" class="company-details-galery-image"/>
                                </div>
                                <div>
                                    <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/6487e05c2569738adc2234e6_Company%20Galery%204.png" loading="lazy" alt="Jobhuntly Company Activities" class="company-details-galery-image"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="company-details-main-right">
                        <div class="company-details-right-tech">
                            <div class="company-details-right-header">
                                <h3 class="text-neutral-100">Tech stack</h3>
                                <div class="text-r text-neutral-80">Learn about the technology and tools that Stripe uses.</div>
                            </div>
                            <div class="company-details-right-tech-inner">
                                <div class="company-details-right-tech-grid">
                                    <?php $tech_stack = isset($params['company_details']->tech_stack) ? explode(',',$params['company_details']->tech_stack) : [] ?>
                                    <?php foreach($tech_stack as $tech): ?>
                                        <div id="w-node-f4cbfe95-d372-e6a3-9ba8-dce5bd520b85-cec1493a" class="company-details-right-tech-box">
                                            <div>
                                                <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/6487db15a394f56a82843fd1_Company%20Tech%20HTML.png" loading="lazy" alt=""/>
                                            </div>
                                            <div class="text-r text-neutral-100"><?=$tech?></div>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                        <div class="company-details-right-location">
                            <div class="company-details-right-header">
                                <h3 class="text-neutral-100">Office Location</h3>
                                <div class="text-r text-neutral-80">Stripe offices spread across 20 countries</div>
                            </div>
                            <div class="company-details-right-location-list">
                                <?php foreach($locations as $location): ?>
                                    <div class="company-details-right-location-box">
                                        <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/6487df2e79eff354cee5c0b2_Location%20Flag%20England.png" loading="lazy" alt="" class="company-details-right-location-flag"/>
                                        <div class="text-r weight-600 text-neutral-100"><?=$location?></div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section company-teams">
            <div class="container w-container">
                <div class="company-teams-wrapper">
                    <div class="company-teams-header">
                        <h3>Team</h3>
                    </div>
                    <div class="company-teams-list">
                        <div class="company-team-card">
                            <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/6487e849b908c9bf34d17340_Company%20Team%20Avatar%201.png" loading="lazy" alt="Jobhuntly Company Teams" class="company-team-card-avatar"/>
                            <div class="company-team-card-name">
                                <div class="text-l weight-600 text-neutral-100">Célestin Gardinier</div>
                                <div class="text-r text-neutral-60">CEO &amp;Co-Founder</div>
                            </div>
                            <div class="company-team-card-social">
                                <a href="#" class="w-inline-block">
                                    <div class="svg-icon w-embed">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.5" clip-path="url(#clip0_1717_21412)">
                                                <path d="M16.8008 4H8.80078C6.59164 4 4.80078 5.79086 4.80078 8V16C4.80078 18.2091 6.59164 20 8.80078 20H16.8008C19.0099 20 20.8008 18.2091 20.8008 16V8C20.8008 5.79086 19.0099 4 16.8008 4Z" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12.8008 15C14.4576 15 15.8008 13.6569 15.8008 12C15.8008 10.3431 14.4576 9 12.8008 9C11.1439 9 9.80078 10.3431 9.80078 12C9.80078 13.6569 11.1439 15 12.8008 15Z" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M17.3008 7.5V7.501" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1717_21412">
                                                    <rect width="24" height="24" fill="white" transform="translate(0.800781)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </a>
                                <a href="#" class="w-inline-block">
                                    <div class="svg-icon w-embed">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.5" clip-path="url(#clip0_1717_21417)">
                                                <path d="M18.8008 4H6.80078C5.69621 4 4.80078 4.89543 4.80078 6V18C4.80078 19.1046 5.69621 20 6.80078 20H18.8008C19.9054 20 20.8008 19.1046 20.8008 18V6C20.8008 4.89543 19.9054 4 18.8008 4Z" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8.80078 11V16" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8.80078 8V8.01" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12.8008 16V11" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M16.8008 16V13C16.8008 12.4696 16.5901 11.9609 16.215 11.5858C15.8399 11.2107 15.3312 11 14.8008 11C14.2703 11 13.7616 11.2107 13.3866 11.5858C13.0115 11.9609 12.8008 12.4696 12.8008 13" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1717_21417">
                                                    <rect width="24" height="24" fill="white" transform="translate(0.800781)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="company-team-card">
                            <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/6487e84978b5478ce2f59120_Company%20Team%20Avatar%202.png" loading="lazy" alt="Jobhuntly Company Teams" class="company-team-card-avatar"/>
                            <div class="company-team-card-name">
                                <div class="text-l weight-600 text-neutral-100">Reynaud Colbert</div>
                                <div class="text-r text-neutral-60">Co-Founder</div>
                            </div>
                            <div class="company-team-card-social">
                                <a href="#" class="w-inline-block">
                                    <div class="svg-icon w-embed">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.5" clip-path="url(#clip0_1717_21412)">
                                                <path d="M16.8008 4H8.80078C6.59164 4 4.80078 5.79086 4.80078 8V16C4.80078 18.2091 6.59164 20 8.80078 20H16.8008C19.0099 20 20.8008 18.2091 20.8008 16V8C20.8008 5.79086 19.0099 4 16.8008 4Z" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12.8008 15C14.4576 15 15.8008 13.6569 15.8008 12C15.8008 10.3431 14.4576 9 12.8008 9C11.1439 9 9.80078 10.3431 9.80078 12C9.80078 13.6569 11.1439 15 12.8008 15Z" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M17.3008 7.5V7.501" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1717_21412">
                                                    <rect width="24" height="24" fill="white" transform="translate(0.800781)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </a>
                                <a href="#" class="w-inline-block">
                                    <div class="svg-icon w-embed">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.5" clip-path="url(#clip0_1717_21417)">
                                                <path d="M18.8008 4H6.80078C5.69621 4 4.80078 4.89543 4.80078 6V18C4.80078 19.1046 5.69621 20 6.80078 20H18.8008C19.9054 20 20.8008 19.1046 20.8008 18V6C20.8008 4.89543 19.9054 4 18.8008 4Z" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8.80078 11V16" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8.80078 8V8.01" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12.8008 16V11" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M16.8008 16V13C16.8008 12.4696 16.5901 11.9609 16.215 11.5858C15.8399 11.2107 15.3312 11 14.8008 11C14.2703 11 13.7616 11.2107 13.3866 11.5858C13.0115 11.9609 12.8008 12.4696 12.8008 13" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1717_21417">
                                                    <rect width="24" height="24" fill="white" transform="translate(0.800781)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="company-team-card">
                            <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/6487e84c78fc8182d6181892_Company%20Team%20Avatar%203.png" loading="lazy" alt="Jobhuntly Company Teams" class="company-team-card-avatar"/>
                            <div class="company-team-card-name">
                                <div class="text-l weight-600 text-neutral-100">Célestin Gardinier</div>
                                <div class="text-r text-neutral-60">CEO &amp;Co-Founder</div>
                            </div>
                            <div class="company-team-card-social">
                                <a href="#" class="w-inline-block">
                                    <div class="svg-icon w-embed">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.5" clip-path="url(#clip0_1717_21412)">
                                                <path d="M16.8008 4H8.80078C6.59164 4 4.80078 5.79086 4.80078 8V16C4.80078 18.2091 6.59164 20 8.80078 20H16.8008C19.0099 20 20.8008 18.2091 20.8008 16V8C20.8008 5.79086 19.0099 4 16.8008 4Z" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12.8008 15C14.4576 15 15.8008 13.6569 15.8008 12C15.8008 10.3431 14.4576 9 12.8008 9C11.1439 9 9.80078 10.3431 9.80078 12C9.80078 13.6569 11.1439 15 12.8008 15Z" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M17.3008 7.5V7.501" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1717_21412">
                                                    <rect width="24" height="24" fill="white" transform="translate(0.800781)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </a>
                                <a href="#" class="w-inline-block">
                                    <div class="svg-icon w-embed">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.5" clip-path="url(#clip0_1717_21417)">
                                                <path d="M18.8008 4H6.80078C5.69621 4 4.80078 4.89543 4.80078 6V18C4.80078 19.1046 5.69621 20 6.80078 20H18.8008C19.9054 20 20.8008 19.1046 20.8008 18V6C20.8008 4.89543 19.9054 4 18.8008 4Z" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8.80078 11V16" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8.80078 8V8.01" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12.8008 16V11" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M16.8008 16V13C16.8008 12.4696 16.5901 11.9609 16.215 11.5858C15.8399 11.2107 15.3312 11 14.8008 11C14.2703 11 13.7616 11.2107 13.3866 11.5858C13.0115 11.9609 12.8008 12.4696 12.8008 13" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1717_21417">
                                                    <rect width="24" height="24" fill="white" transform="translate(0.800781)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="company-team-card">
                            <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/6487e849c3473ff5e550b9b5_Company%20Team%20Avatar%204.png" loading="lazy" alt="Jobhuntly Company Teams" class="company-team-card-avatar"/>
                            <div class="company-team-card-name">
                                <div class="text-l weight-600 text-neutral-100">Célestin Gardinier</div>
                                <div class="text-r text-neutral-60">CEO &amp;Co-Founder</div>
                            </div>
                            <div class="company-team-card-social">
                                <a href="#" class="w-inline-block">
                                    <div class="svg-icon w-embed">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.5" clip-path="url(#clip0_1717_21412)">
                                                <path d="M16.8008 4H8.80078C6.59164 4 4.80078 5.79086 4.80078 8V16C4.80078 18.2091 6.59164 20 8.80078 20H16.8008C19.0099 20 20.8008 18.2091 20.8008 16V8C20.8008 5.79086 19.0099 4 16.8008 4Z" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12.8008 15C14.4576 15 15.8008 13.6569 15.8008 12C15.8008 10.3431 14.4576 9 12.8008 9C11.1439 9 9.80078 10.3431 9.80078 12C9.80078 13.6569 11.1439 15 12.8008 15Z" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M17.3008 7.5V7.501" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1717_21412">
                                                    <rect width="24" height="24" fill="white" transform="translate(0.800781)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </a>
                                <a href="#" class="w-inline-block">
                                    <div class="svg-icon w-embed">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.5" clip-path="url(#clip0_1717_21417)">
                                                <path d="M18.8008 4H6.80078C5.69621 4 4.80078 4.89543 4.80078 6V18C4.80078 19.1046 5.69621 20 6.80078 20H18.8008C19.9054 20 20.8008 19.1046 20.8008 18V6C20.8008 4.89543 19.9054 4 18.8008 4Z" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8.80078 11V16" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8.80078 8V8.01" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12.8008 16V11" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M16.8008 16V13C16.8008 12.4696 16.5901 11.9609 16.215 11.5858C15.8399 11.2107 15.3312 11 14.8008 11C14.2703 11 13.7616 11.2107 13.3866 11.5858C13.0115 11.9609 12.8008 12.4696 12.8008 13" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1717_21417">
                                                    <rect width="24" height="24" fill="white" transform="translate(0.800781)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="company-team-card">
                            <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/6487e849805ae1943180bd84_Company%20Team%20Avatar%205.png" loading="lazy" alt="Jobhuntly Company Teams" class="company-team-card-avatar"/>
                            <div class="company-team-card-name">
                                <div class="text-l weight-600 text-neutral-100">Célestin Gardinier</div>
                                <div class="text-r text-neutral-60">CEO &amp;Co-Founder</div>
                            </div>
                            <div class="company-team-card-social">
                                <a href="#" class="w-inline-block">
                                    <div class="svg-icon w-embed">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.5" clip-path="url(#clip0_1717_21412)">
                                                <path d="M16.8008 4H8.80078C6.59164 4 4.80078 5.79086 4.80078 8V16C4.80078 18.2091 6.59164 20 8.80078 20H16.8008C19.0099 20 20.8008 18.2091 20.8008 16V8C20.8008 5.79086 19.0099 4 16.8008 4Z" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12.8008 15C14.4576 15 15.8008 13.6569 15.8008 12C15.8008 10.3431 14.4576 9 12.8008 9C11.1439 9 9.80078 10.3431 9.80078 12C9.80078 13.6569 11.1439 15 12.8008 15Z" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M17.3008 7.5V7.501" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1717_21412">
                                                    <rect width="24" height="24" fill="white" transform="translate(0.800781)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </a>
                                <a href="#" class="w-inline-block">
                                    <div class="svg-icon w-embed">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.5" clip-path="url(#clip0_1717_21417)">
                                                <path d="M18.8008 4H6.80078C5.69621 4 4.80078 4.89543 4.80078 6V18C4.80078 19.1046 5.69621 20 6.80078 20H18.8008C19.9054 20 20.8008 19.1046 20.8008 18V6C20.8008 4.89543 19.9054 4 18.8008 4Z" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8.80078 11V16" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8.80078 8V8.01" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12.8008 16V11" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M16.8008 16V13C16.8008 12.4696 16.5901 11.9609 16.215 11.5858C15.8399 11.2107 15.3312 11 14.8008 11C14.2703 11 13.7616 11.2107 13.3866 11.5858C13.0115 11.9609 12.8008 12.4696 12.8008 13" stroke="#515B6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1717_21417">
                                                    <rect width="24" height="24" fill="white" transform="translate(0.800781)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section bg-neutral-10">
            <div class="container w-container">
                <div class="section-content-wrapper">
                    <div class="section-headline">
                        <h2>Open Jobs</h2>
                    </div>
                    <div class="section-content">
                        <div class="grid-2-column lastest-job-grid">
                            <a id="w-node-_6558ebea-da99-112d-118d-633712f4f6e0-cec1493a" href="#" class="lastest-jobs-box w-inline-block">
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
            <div class="company-open-pattern-1">
                <img src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/64bf1453df18c6646b15f705_Company%20Details%20Open%20Jobs%20Pattern.svg" loading="lazy" alt=""/>
            </div>
            <div class="company-open-skewed-bg-top">
                <br/>
                <br/>‍
            </div>
        </section>