<div class="dashboard-main-content">
    <div class="dashboard-page-header">
        <h2>Emails</h2>
    </div>
    <div class="dashboard-page-contents">
        <div class="module">
            <div class="module-main">
                <div class="email-section">
                    <?php foreach ($params['applications'] as $application) : ?>
                        <a href="email-view/<?=$application->id?>" class="email-element w-inline-block">
                            <div class="notification-top">
                                <div class="notification-dot"></div>
                                <div class="notificaiton-title"><?=$application->job_title?></div>
                                <div class="email-time"><?=$application->applied_at?></div>
                            </div>
                            <p class="notification-subtitle"><?=$application->full_name?></p>
                            <p class="notification-description"><?=substr_replace($application->additional_info,'...',100)?></p>
                        </a>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>