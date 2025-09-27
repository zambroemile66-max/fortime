<div class="main-content">
    <div class="container w-container">
        <h1 class="page-title">Company Profile</h1>
    </div>
    <div class="_1-2-5-grid">
        <div class="module center-align sticky">
            <div class="profile-image large">
                <img src="<?=is_null($params['company']) ? SCRIPTS.'uploads'.DIRECTORY_SEPARATOR.'default-avatar.jpg' : SCRIPTS.'uploads'.DIRECTORY_SEPARATOR.$params['company']->logo_url?>" loading="lazy" alt="" class="cover-image"/>
            </div>
            <h3 class="no-margin"><?=$params['company']->name ?? null?></h3>
            <h5><?=$params['company']->industry ?? null?></h5>
            <div class="profile-buttons-div"></div>
        </div>
        <div class="module-group">
            <div id="Account-Infomraiton" class="module">
                <div class="module-header minimal">
                    <h3 class="module-heading">Company Information</h3>
                </div>
                <div class="module-main">
                    <div class="settings-label">Profile Picture</div>
                    <div class="w-form">
                    <form id="email-form" name="email-form" data-name="Email Form" class="form" action="company-profile/profile-picture" method="post" enctype="multipart/form-data">
                        <div class="field-block">
                            <label for="file" class="custum-file-upload">
                                <div class="icon">
                                    <svg viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" fill=""></path> </g></svg>
                                </div>
                                <div class="text">
                                    <span class="settings-label" >Upload New Picture</span>
                                </div>
                                <input name="file" id="file" type="file" accept="image/*" required>
                            </label>
                            <img onclick="window.location.reload()" id="image-preview" src="#" alt="Image Preview" style="display: none; max-width: 30%; height: auto; margin-top: 10px;border-radius: 10px">
                        </div>
                        <br>
                        <input type="submit" value="Update Picture" class="button settings w-button"/>
                    </form>
                </div>
                    <style>
                        .custum-file-upload {
                            height: 140px;
                            width: 200px;
                            display: flex;
                            flex-direction: column;
                            align-items: space-between;
                            gap: 1px;
                            cursor: pointer;
                            align-items: center;
                            justify-content: center;
                            border: 2px dashed #cacaca;
                            background-color: rgba(255, 255, 255, 1);
                            padding: 1.5rem;
                            border-radius: 10px;
                            box-shadow: 0px 48px 35px -48px rgba(0,0,0,0.1);
                        }

                        .custum-file-upload .icon {
                            display: flex;
                            align-items: center;
                            justify-content: center;
                        }

                        .custum-file-upload .icon svg {
                            height: 40px;
                            fill: rgba(75, 85, 99, 1);
                        }

                        .custum-file-upload .text {
                            display: flex;
                            align-items: center;
                            justify-content: center;
                        }

                        .custum-file-upload input {
                            display: none;
                        }
                    </style>
                    <script>
                        document.getElementById('file').addEventListener('change', function(event) {
                            const file = event.target.files[0];
                            const reader = new FileReader();

                            reader.onload = function(e) {
                                const imgElement = document.getElementById('image-preview');
                                imgElement.src = e.target.result;
                                imgElement.style.display = 'block';
                            };

                            if (file) {
                                reader.readAsDataURL(file);
                            }
                        });
                    </script>
                    <p class="paragraph-small no-margin">
                        You can upload images up to 400x400px.<br/>
                    </p>
                    <div class="divider"></div>
                    <div class="w-form">
                        <form id="email-form"  action="company-profile/profile-info" method="post" data-name="Email Form" class="form">
                            <div class="field-block">
                                <label for="name">Company Name</label>
                                <input type="text" class="text-input filled w-input" maxlength="256" name="comp_name" data-name="Name" value="<?=$params['company']->name ?? null?>" required=""/>
                            </div>
                            <div class="field-block">
                                <label for="website">Company Website</label>
                                <input type="url" class="text-input filled w-input" maxlength="256" name="comp_web" data-name="Name" value="<?=$params['company']->website ?? null?>"/>
                            </div>
                            <div class="field-block">
                                <label for="Username">Founded</label>
                                <input type="date" class="text-input filled w-input" maxlength="256" name="founded" data-name="Username" value="<?=$params['company']->founded_date ?? null?>" required=""/>
                            </div>
                            <div class="field-block">
                                <label for="Role">Industry</label>
                                <input type="text" class="text-input filled w-input" maxlength="256" name="industry" data-name="Role" value="<?=$params['company']->industry ?? null?>" id="Role"/>
                            </div>
                            <div class="field-block">
                                <label for="Username">Description</label>
                                <textarea  placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat." maxlength="5000" data-name="Field" name="desc" class="text-area filled w-input"><?=$params['company']->description ?? null?></textarea>
                            </div>
                            <input type="submit" value="Update Profile" data-wait="Please wait..." class="button settings w-button"/>
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
            <div id="Password" class="module">
                <div class="module-header minimal">
                    <h3 class="module-heading">Company Information</h3>
                </div>
                <div class="module-main">
                    <div class="w-form">
                        <form id="email-form" name="email-form" action="company-profile/profile-more-info" method="post" data-name="Email Form" class="form">
                            <div class="field-block">
                                <label for="Username">Tech stack</label>
                                <input type="text" id="categorie" class="text-input w-input" maxlength="256"  placeholder="Project Management"/>
                                <input type="button" id="addBtn" class="button w-button text-input w-input d-none" value="Add"/>
                            </div>
                            <div class="field-block">
                                <div id="tagsContainer" class="text-area filled w-input"></div>
                                <textarea id="tagsInput" name="tech_stack" hidden><?=$params['company']->tech_stack ?? null?></textarea>
                            </div>
                            <div class="field-block">
                                <label for="Username">Office Location</label>
                                <input type="text" id="categorie2" class="text-input w-input" maxlength="256"  placeholder="Project Management"/>
                                <input type="button" id="addBtn2" class="button w-button text-input w-input d-none" value="Add"/>
                            </div>
                            <div class="field-block">
                                <div id="tagsContainer2" class="text-area filled w-input"></div>
                                <textarea id="tagsInput2" name="location" hidden><?=$params['company']->location ?? null?></textarea>
                            </div>
                            <input type="submit" value="Change" data-wait="Please wait..." class="button settings w-button"/>
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