<div class="dashboard-main-content">
    <div class="dashboard-page-header">
        <h2><?=$params['applicant']->name?></h2>
        <a href="/fortime/admin/applicants" class="button page w-button">Back to all applicants</a>
    </div>
    <div class="container">
        <div>
            <div class="module-group">
                <div class="module">
                    <div class="module-header">
                        <h3 class="module-heading">Applicant Info</h3>
                    </div>
                    <div class="module-main">
                        <div class="_50-width">
                            <div class="field-label">Email</div>
                            <p><?=$params['applicant']->email?></p>
                        </div>
                        <div class="_50-width">
                            <div class="field-label">Role</div>
                            <p><?=$params['applicant']->role?></p>
                        </div>
                        <!-- <div class="_50-width">
                            <div class="field-label">Status</div>
                            <p>Open</p>
                        </div>
                        <div class="_50-width">
                            <div class="field-label">Customer ID</div>
                            <p>68</p>
                        </div> -->
                        <div class="_50-width">
                            <div class="field-label">Date Created</div>
                            <p><?=$params['applicant']->created_at?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>