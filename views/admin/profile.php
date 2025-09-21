<div class="main-content">
                <div class="container w-container">
                    <h1 class="page-title">Profile</h1>
                </div>
                <div class="_1-2-5-grid">
                    <div class="module center-align sticky">
                        <div class="profile-image large">
                            <img src="<?=SCRIPTS.'uploads'.DIRECTORY_SEPARATOR.$_SESSION['company_logo'] ?? SCRIPTS.'img'.DIRECTORY_SEPARATOR.'default-avatar.jpg'?>" loading="lazy" alt="" class="cover-image"/>
                        </div>
                        <h3 class="no-margin">Nikolai Bain</h3>
                        <h5>Designer</h5>
                        <div class="profile-buttons-div"></div>
                    </div>
                    <div class="module-group">
                        <div id="Account-Infomraiton" class="module">
                            <div class="module-header minimal">
                                <h3 class="module-heading">Account Information</h3>
                            </div>
                            <div class="module-main">
                                <div class="w-form">
                                    <form id="email-form" name="email-form" data-name="Email Form" class="form">
                                        <div class="field-block">
                                            <label for="name">Name</label>
                                            <input type="text" class="text-input filled w-input" maxlength="256" name="name" data-name="Name" placeholder="Nikolai Bain" required=""/>
                                        </div>
                                        <div class="field-block">
                                            <label for="profile-email">Email</label>
                                            <input type="email" class="text-input filled w-input" maxlength="256" name="profile-email" data-name="profile-email" placeholder="example@email.com" required=""/>
                                        </div>
                                    </form>
                                    <div class="form-success w-form-done">
                                        <div>We &#x27;ve updated your account. Please refresh the page.</div>
                                    </div>
                                    <div class="form-error w-form-fail">
                                        <div>Oops! Something went wrong. Please fill in the required fields and try again.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>