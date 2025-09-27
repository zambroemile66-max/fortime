<?php
var_dump($_SESSION['auth']['admin']['id']);
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


$open_jobs = splitByDate($params['jobs_listing'])['early'];
$closed_jobs = splitByDate($params['jobs_listing'])['late'];
?>
<div class="dashboard-main-content">
    <div class="dashboard-page-header">
        <h2>Job Listing</h2>
        <a href="../admin/job-publish" class="button page w-button">Add New Job</a>
    </div>
    <div class="_2-5-1-grid">
        <form id="form" action="/fortime/admin/jobs/destroy" method="post">
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
                                        <input type="checkbox" class="w-checkbox-input w-checkbox-input--inputType-custom checkbox" id="checkAll" data-name="Checkbox 8"/>
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
                                                        <input type="checkbox" value="<?=$job->id?>" class="w-checkbox-input w-checkbox-input--inputType-custom checkbox row-check" name="ids[]" data-name="Checkbox 8"/>
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
                                                        <div><?=date('M d, Y',strtotime($job->posted_on))?></div>
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
                                        <input type="checkbox" id="checkAll2" class="w-checkbox-input w-checkbox-input--inputType-custom checkbox" data-name="Checkbox 8"/>
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
                                                        <input type="checkbox" value="<?=$job->id?>" class="w-checkbox-input w-checkbox-input--inputType-custom checkbox row-check2" id="checkbox-8" name="ids[]" data-name="Checkbox 8"/>
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
                                                        <div><?=date('M d, Y',strtotime($job->posted_on))?></div>
                                                    </div>
                                                    <div><?=$job->title?></div>
                                                    <div>
                                                        <!-- <div class="tag new w-condition-invisible">New</div>
                                                        <div class="tag new">Open</div>
                                                        <div class="tag issues w-condition-invisible">Issues</div>
                                                        <div class="tag closed w-condition-invisible">Closed</div> -->
                                                        <div class="tag new"><?=isDateExceeded($job->apply_before) ? 'Closed' : 'Open' ?></div>
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
                                        <input  type="checkbox" id="checkAll3" class="w-checkbox-input w-checkbox-input--inputType-custom checkbox" data-name="Checkbox 8"/>
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
                                                    <input type="checkbox" value="<?=$job->id?>" class="w-checkbox-input w-checkbox-input--inputType-custom checkbox row-check3" id="checkbox-8" name="ids[]" data-name="Checkbox 8"/>
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
                                                    <div><?=date('M d, Y',strtotime($job->posted_on))?></div>
                                                </div>
                                                <div><?=$job->title?></div>
                                                <div>
                                                    <!-- <div class="tag new w-condition-invisible">New</div>
                                                    <div class="tag new">Open</div>
                                                    <div class="tag issues w-condition-invisible">Issues</div>
                                                    <div class="tag closed w-condition-invisible">Closed</div> -->
                                                    <div class="tag closed"><?=isDateExceeded($job->apply_before) ? 'Closed' : 'Open' ?></div>
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
        </form>
        <div class="action-group">
            <div onclick="event.preventDefault(); document.getElementById('form').submit()" class="action-card">
                <img src="<?= SCRIPTS.'adminimg'.DIRECTORY_SEPARATOR.'trash.svg'?>" loading="lazy" width="22" alt="" class="action-icon"/>
                <h3 class="module-heading">Delete</h3>
            </div>
        </div>
    </div>
</div>
