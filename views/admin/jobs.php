<?php
function isDateExceeded($dateString) {
    // Convertit la date donnée en timestamp
    $givenDate = strtotime($dateString);
    // Récupère la date actuelle (à minuit)
    $today = strtotime(date("Y-m-d"));

    // Vérifie si la date est dépassée
    return $givenDate < $today;
}

function splitByDate(array $data, string $dateKey = "apply_before"): array {
    $today = strtotime(date("Y-m-d"));
    $early = [];
    $late = [];

    foreach ($data as $item) {
        if (!isset($item->$dateKey)) continue; // sécurité

        $itemDate = strtotime($item->$dateKey);

        if ($itemDate >= $today) {
            $early[] = $item;
        } else {
            $late[] = $item;
        }
    }

    return [
        "early" => $early,
        "late"  => $late
    ];
}

// Exemple d’utilisation :
$tasks = [
    ["id" => 1, "name" => "Projet A", "date" => "2025-09-10"],
    ["id" => 2, "name" => "Projet B", "date" => "2025-09-25"],
    ["id" => 3, "name" => "Projet C", "date" => "2025-09-19"],
];

$open_jobs = splitByDate($params['jobs_listing'])['early'];
$closed_jobs = splitByDate($params['jobs_listing'])['late'];
?>
<div class="dashboard-main-content">
    <div class="dashboard-page-header">
        <h2>Job Listing</h2>
        <a href="../admin/job-publish" class="button page w-button">Add New Job</a>
    </div>
    <div class="container">
        <div class="module">
            <div data-duration-in="300" data-duration-out="100" data-current="Tab 1" data-easing="ease" class="w-tabs">
                <div class="module-tabs w-tab-menu">
                    <a data-w-tab="Tab 1" class="tab w-inline-block w-tab-link w--current">
                        <div>All</div>
                    </a>
                    <a data-w-tab="Tab 2" class="tab w-inline-block w-tab-link">
                        <div>Open</div>
                    </a>

                    <a data-w-tab="Tab 3" class="tab w-inline-block w-tab-link">
                        <div>Closed</div>
                    </a>
                </div>
                <div class="module-main w-tab-content">
                    <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active">
                        <div class="grid-section">
                            <div class="support-row head">
                                <div class="checkbox-grid w-form">
                                    <form id="email-form" name="email-form" data-name="Email Form" method="get" data-wf-page-id="6025b7699e16628a0e7b8945" data-wf-element-id="8c729c5f-ac1a-3f63-a1e7-2970bfc8a7f8">
                                        <label data-w-id="8c729c5f-ac1a-3f63-a1e7-2970bfc8a7f9" class="w-checkbox checkbox-field-simple">
                                            <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>
                                            <input type="checkbox" id="checkbox-1" name="checkbox-8" data-name="Checkbox 8" style="opacity:0;position:absolute;z-index:-1"/>
                                            <span for="checkbox-8" class="hidden-checkbox-label w-form-label">Fix CSS styling on mobile</span>
                                        </label>
                                    </form>
                                    <div class="w-form-done">
                                        <div>Thank you! Your submission has been received!</div>
                                    </div>
                                    <div class="w-form-fail">
                                        <div>Oops! Something went wrong while submitting the form.</div>
                                    </div>
                                </div>
                                <h4 class="grid-header">Type</h4>
                                <h4 class="grid-header mob-hidden">Date</h4>
                                <h4 class="grid-header">Title</h4>
                                <h4 class="grid-header">Status</h4>
                            </div>
                            <div class="w-dyn-list">
                                <div role="list" class="w-dyn-items">
                                    <?php foreach($params['jobs_listing'] as $job): ?>
                                        <div role="listitem" class="w-dyn-item">
                                            <div class="support-row">
                                                <div class="checkbox-grid w-form">
                                                    <form id="email-form" name="email-form" data-name="Email Form" method="get" data-wf-page-id="6025b7699e16628a0e7b8945" data-wf-element-id="53836506-e398-2c07-dd83-94de7447ccf2">
                                                        <label data-w-id="2603dc5a-7a75-7d77-b566-d9d286540ac1" class="w-checkbox checkbox-field-simple checked">
                                                            <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>
                                                            <input type="checkbox" id="check-all-main" name="checkbox-8" data-name="Checkbox 8" style="opacity:1;position:absolute;z-index:-1"/>
                                                            <span for="checkbox-8" class="hidden-checkbox-label w-form-label">Fix CSS styling on mobile</span>
                                                        </label>
                                                    </form>
                                                    <div class="w-form-done">
                                                        <div>Thank you! Your submission has been received!</div>
                                                    </div>
                                                    <div class="w-form-fail">
                                                        <div>Oops! Something went wrong while submitting the form.</div>
                                                    </div>
                                                </div>
                                                <div class="grid-number-block">
                                                    <div><?=$job->type?></div>
                                                </div>
                                                <div class="grid-block mob-hidden">
                                                    <div><?=$job->posted_on?></div>
                                                </div>
                                                <div><?=$job->title?></div>
                                                <div>
                                                    <!-- <div class="tag new w-condition-invisible">New</div>
                                                    <div class="tag new">Open</div>
                                                    <div class="tag issues w-condition-invisible">Issues</div>
                                                    <div class="tag closed w-condition-invisible">Closed</div> -->
                                                    <div class="tag <?=isDateExceeded($job->apply_before) ? 'closed' : 'new' ?>"><?=isDateExceeded($job->apply_before) ? 'Closed' : 'Open' ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-w-tab="Tab 2" class="w-tab-pane">
                        <div class="grid-section">
                            <div class="support-row head">
                                <div class="checkbox-grid w-form">
                                    <form id="email-form" name="email-form" data-name="Email Form" method="get" data-wf-page-id="6025b7699e16628a0e7b8945" data-wf-element-id="a54bbcbd-e309-7caa-c05b-27a6655e5707">
                                        <label data-w-id="a54bbcbd-e309-7caa-c05b-27a6655e5708" class="w-checkbox checkbox-field-simple">
                                            <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>
                                            <input type="checkbox" id="check-open-main" name="checkbox-8" data-name="Checkbox 8" style="opacity:0;position:absolute;z-index:-1"/>
                                            <span for="checkbox-8" class="hidden-checkbox-label w-form-label">Fix CSS styling on mobile</span>
                                        </label>
                                    </form>
                                    <div class="w-form-done">
                                        <div>Thank you! Your submission has been received!</div>
                                    </div>
                                    <div class="w-form-fail">
                                        <div>Oops! Something went wrong while submitting the form.</div>
                                    </div>
                                </div>
                                <h4 class="grid-header">Type</h4>
                                <h4 class="grid-header mob-hidden">Date</h4>
                                <h4 class="grid-header">Title</h4>
                                <h4 class="grid-header">Status</h4>
                            </div>
                            <div class="w-dyn-list">
                                <div role="list" class="w-dyn-items">
                                    <?php foreach($open_jobs as $job): ?>
                                        <div role="listitem" class="w-dyn-item">
                                            <div class="support-row">
                                                <div class="checkbox-grid w-form">
                                                    <form id="email-form" name="email-form" data-name="Email Form" method="get" data-wf-page-id="6025b7699e16628a0e7b8945" data-wf-element-id="53836506-e398-2c07-dd83-94de7447ccf2">
                                                        <label data-w-id="2603dc5a-7a75-7d77-b566-d9d286540ac1" class="w-checkbox checkbox-field-simple">
                                                            <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>
                                                            <input type="checkbox" id="checkbox-8" name="checkbox-8" data-name="Checkbox 8" style="opacity:0;position:absolute;z-index:-1"/>
                                                            <span for="checkbox-8" class="hidden-checkbox-label w-form-label">Fix CSS styling on mobile</span>
                                                        </label>
                                                    </form>
                                                    <div class="w-form-done">
                                                        <div>Thank you! Your submission has been received!</div>
                                                    </div>
                                                    <div class="w-form-fail">
                                                        <div>Oops! Something went wrong while submitting the form.</div>
                                                    </div>
                                                </div>
                                                <div class="grid-number-block">
                                                    <div><?=$job->type?></div>
                                                </div>
                                                <div class="grid-block mob-hidden">
                                                    <div><?=$job->posted_on?></div>
                                                </div>
                                                <div><?=$job->title?></div>
                                                <div>
                                                    <!-- <div class="tag new w-condition-invisible">New</div>
                                                    <div class="tag new">Open</div>
                                                    <div class="tag issues w-condition-invisible">Issues</div>
                                                    <div class="tag closed w-condition-invisible">Closed</div> -->
                                                    <div class="tag <?=isDateExceeded($job->apply_before) ? 'closed' : 'new' ?>"><?=isDateExceeded($job->apply_before) ? 'Closed' : 'Open' ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-w-tab="Tab 3" class="w-tab-pane">
                        <div class="grid-section">
                            <div class="support-row head">
                                <div class="checkbox-grid w-form">
                                    <form id="email-form" name="email-form" data-name="Email Form" method="get" data-wf-page-id="6025b7699e16628a0e7b8945" data-wf-element-id="96643273-fa3c-328c-14d5-12252d97cb11">
                                        <label data-w-id="96643273-fa3c-328c-14d5-12252d97cb12" class="w-checkbox checkbox-field-simple">
                                            <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>
                                            <input type="checkbox" id="check-closed-main" name="checkbox-8" data-name="Checkbox 8" style="opacity:0;position:absolute;z-index:-1"/>
                                            <span for="checkbox-8" class="hidden-checkbox-label w-form-label">Fix CSS styling on mobile</span>
                                        </label>
                                    </form>
                                    <div class="w-form-done">
                                        <div>Thank you! Your submission has been received!</div>
                                    </div>
                                    <div class="w-form-fail">
                                        <div>Oops! Something went wrong while submitting the form.</div>
                                    </div>
                                </div>
                                <h4 class="grid-header">Type</h4>
                                <h4 class="grid-header mob-hidden">Date</h4>
                                <h4 class="grid-header">Title</h4>
                                <h4 class="grid-header">Status</h4>
                            </div>
                            <div class="w-dyn-list">
                                <?php foreach($closed_jobs as $job): ?>
                                    <div role="listitem" class="w-dyn-item">
                                        <div class="support-row">
                                            <div class="checkbox-grid w-form">
                                                <form id="email-form" name="email-form" data-name="Email Form" method="get" data-wf-page-id="6025b7699e16628a0e7b8945" data-wf-element-id="53836506-e398-2c07-dd83-94de7447ccf2">
                                                    <label data-w-id="2603dc5a-7a75-7d77-b566-d9d286540ac1" class="w-checkbox checkbox-field-simple">
                                                        <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>
                                                        <input type="checkbox" id="checkbox-8" name="checkbox-8" data-name="Checkbox 8" style="opacity:0;position:absolute;z-index:-1"/>
                                                        <span for="checkbox-8" class="hidden-checkbox-label w-form-label">Fix CSS styling on mobile</span>
                                                    </label>
                                                </form>
                                                <div class="w-form-done">
                                                    <div>Thank you! Your submission has been received!</div>
                                                </div>
                                                <div class="w-form-fail">
                                                    <div>Oops! Something went wrong while submitting the form.</div>
                                                </div>
                                            </div>
                                            <div class="grid-number-block">
                                                <div><?=$job->type?></div>
                                            </div>
                                            <div class="grid-block mob-hidden">
                                                <div><?=$job->posted_on?></div>
                                            </div>
                                            <div><?=$job->title?></div>
                                            <div>
                                                <!-- <div class="tag new w-condition-invisible">New</div>
                                                <div class="tag new">Open</div>
                                                <div class="tag issues w-condition-invisible">Issues</div>
                                                <div class="tag closed w-condition-invisible">Closed</div> -->
                                                <div class="tag <?=isDateExceeded($job->apply_before) ? 'closed' : 'new' ?>"><?=isDateExceeded($job->apply_before) ? 'Closed' : 'Open' ?></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // All
    const mainAll = document.getElementById('check-all-main');
    if(mainAll) {
        mainAll.addEventListener('change', function() {
            document.querySelectorAll('.check-all-child').forEach(cb => cb.checked = mainAll.checked);
        });
    }
    // Open
    const mainOpen = document.getElementById('check-open-main');
    if(mainOpen) {
        mainOpen.addEventListener('change', function() {
            document.querySelectorAll('.check-open-child').forEach(cb => cb.checked = mainOpen.checked);
        });
    }
    // Closed
    const mainClosed = document.getElementById('check-closed-main');
    if(mainClosed) {
        mainClosed.addEventListener('change', function() {
            document.querySelectorAll('.check-closed-child').forEach(cb => cb.checked = mainClosed.checked);
        });
    }
});
</script>