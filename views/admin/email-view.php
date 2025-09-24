<?php
    $_SESSION['role'] = $params['application']->job_title;
    $_SESSION['email_view'] = $params['application']->id;
?>
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
                        <a target="_blank" href="<?=$params['application']->linkedin_url?>">Lien LinkedIn</a>
                    </p>
                    <p>
                        <a class="btn btn-primary" target="_blank" class="btn btn-success" onclick="event.preventDefault(); window.open('<?=SCRIPTS.'/pdfs/'.$params['application']->portfolio_url?>', '_blank');" >📄 Ouvrir le Portfolio</a>
                    </p>
                    <p>___</p>
                    <p><?=$params['application']->full_name?></p>
                </div>
            </div>
        </div>
        <div class="action-group">
            <div onclick="event.preventDefault(); window.location.href = '/fortime/admin/email-view/destroy/<?=$params['application']->id?>'" class="action-card">
                <img src="<?= SCRIPTS.'adminimg'.DIRECTORY_SEPARATOR.'trash.svg'?>" loading="lazy" width="22" alt="" class="action-icon"/>
                <h3 class="module-heading">Delete</h3>
            </div>
            <div class="action-card" onclick="event.preventDefault(); window.location.href = '/fortime/admin/applicants/add/<?=$params['application']->user_id?>'">
                <img src="<?= SCRIPTS.'adminimg'.DIRECTORY_SEPARATOR.'trash.svg'?>" loading="lazy" width="22" alt="" class="action-icon"/>
                <h3 class="module-heading">Add</h3>
            </div>
        </div>
    </div>
</div>