<div class="dashboard-main-content">
    <div class="dashboard-page-header">
        <h2>Applicants</h2>
    </div>
    <div class="_2-5-1-grid">
        <div class="module">
            <div class="module-main">
                <form id="form" action="/fortime/admin/applicants/destroy" method="post">
                    <div class="grid-section">
                        <div class="customer-row head">
                            <div class="checkbox-grid w-form">
                                <input type="checkbox" class="w-checkbox-input w-checkbox-input--inputType-custom checkbox" id="checkAll" data-name="Checkbox 8"/>
                                <div class="w-form-done">
                                    <div>Thank you! Your submission has been received!</div>
                                </div>
                                <div class="w-form-fail">
                                    <div>Oops! Something went wrong while submitting the form.</div>
                                </div>
                            </div>
                            <h4 class="grid-header">Picture</h4>
                            <h4 class="grid-header">Name</h4>
                            <h4 class="grid-header mob-hidden">Email</h4>
                            <h4 class="grid-header mob-hidden">Role</h4>
                        </div>
                        <div class="w-dyn-list">
                            <div role="list" class="w-dyn-items">
                                <?php foreach($params['applicants'] ?? [] as $applicant) : ?>
                                    <div role="listitem" class="w-dyn-item">
                                        <div class="full-customer-row">
                                            <div class="checkbox-grid w-form">
                                                <input type="checkbox" value="<?=$applicant->id?>" class="w-checkbox-input w-checkbox-input--inputType-custom checkbox row-check" name="ids[]" data-name="Checkbox 8"/>
                                                <div class="w-form-done">
                                                    <div>Thank you! Your submission has been received!</div>
                                                </div>
                                                <div class="w-form-fail">
                                                    <div>Oops! Something went wrong while submitting the form.</div>
                                                </div>
                                            </div>
                                                <a href="/fortime/admin/applicants/<?=$applicant->id?>" class="customer-element w-inline-block">
                                                    <div class="grid-number-block">
                                                        <div>
                                                            <img src="<?=$applicant->photo != "" ? SCRIPTS.'uploads'.DIRECTORY_SEPARATOR.$applicant->photo : SCRIPTS.'uploads'.DIRECTORY_SEPARATOR.'default-avatar.jpg'?>" 
                                                            alt="Avatar" 
                                                            class="rounded-circle border" 
                                                            width="50" height="50">
                                                        </div>
                                                    </div>
                                                    <div><?=$applicant->name?></div>
                                                    <div class="mob-hidden"><?=$applicant->email?></div>
                                                    <div class="grid-block mob-hidden">
                                                        <div><?=$applicant->role?></div>
                                                    </div>
                                                </a>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div onclick="event.preventDefault(); document.getElementById('form').submit()" class="action-group">
            <a href="#" class="action-card w-inline-block">
                <img src="https://cdn.prod.website-files.com/6022ffeab6f354c9aa1eb2a2/60283f3ab4409ef426cbb94d_Archive.svg" loading="lazy" width="22" alt="" class="action-icon"/>
                <h3 class="module-heading">Delete Applicant</h3>
            </a>
        </div>
    </div>
</div>