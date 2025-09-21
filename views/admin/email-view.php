<div class="dashboard-main-content">
    <div class="dashboard-page-header">
        <h2><?=$params['application']->full_name?></h2>
        <a href="/fortime/admin/emails" class="button page w-button">Back to all emails</a>
    </div>
    <div class="_2-5-1-grid">
        <div class="module">
            <div class="module-main large">
                <h3 class="module-heading large"><?=$params['application']->job_title?></h3>
                <div class="email-time"><?=$params['application']->applied_at?></div>
                <div class="spacer _32"></div>
                <div class="rich-text w-richtext">
                    <p><?=$params['application']->additional_info?></p>
                    <p>
                        <a href="<?=$params['application']->linkedin_url?>"><?=$params['application']->linkedin_url?></a>
                    </p>
                    <p>
                        <a href="<?=$params['application']->portfolio_url?>"><?=$params['application']->portfolio_url?></a>
                    </p>
                    <p>___</p>
                    <p><?=$params['application']->full_name?></p>
                </div>
            </div>
        </div>
        <div class="action-group">
            <div class="action-card">
                <img src="<?= SCRIPTS.'adminimg'.DIRECTORY_SEPARATOR.'trash.svg'?>" loading="lazy" width="22" alt="" class="action-icon"/>
                <h3 class="module-heading">Delete</h3>
            </div>
        </div>
    </div>
</div>