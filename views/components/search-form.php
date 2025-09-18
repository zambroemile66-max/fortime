<?php
    use Database\DBConnection;
    use App\Controllers\JobController;
    $pdo = new DBConnection('fortime','localhost','root','');
    $jobs = (new JobController($pdo))->retrieveTitleLocationJobs();
?>
<div class="section-content">
    <div class="search-wrapper">
        <div class="search-field-wrapper">
            <form action="search" class="search w-form">
                <div class="search-field">
                    <div class="svg-icon _24x24 w-embed">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11.7659" cy="11.7669" r="8.98856" stroke="#25324B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18.0176 18.4854L21.5416 22.0002" stroke="#25324B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <?php
                        $value = isset($_GET['query']) ? htmlspecialchars($_GET['query']) : null;
                    ?>
                    <input list="liste-pays" id="pays" class="search-input w-input" value="<?=$value?>" maxlength="256" name="query" placeholder="Job title or keyword" type="search" id="search" required=""/>
                    <datalist id="liste-pays">
                        <?php foreach($jobs as $job): ?>
                            <option value="<?=$job->title?>"></option>
                        <?php endforeach ?>
                    </datalist>
                </div>
                <input type="submit" class="button search-button w-button" value="Search"/>
            </form>
        </div>
        <div class="vertical-divider"></div>
        <div class="search-field-wrapper">
            <div class="search-field">
                <div class="svg-icon _24x24 w-embed">
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15 10.5005C15 9.11924 13.8808 8 12.5005 8C11.1192 8 10 9.11924 10 10.5005C10 11.8808 11.1192 13 12.5005 13C13.8808 13 15 11.8808 15 10.5005Z" stroke="#25324B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.4995 21C11.301 21 5 15.8984 5 10.5633C5 6.38664 8.3571 3 12.4995 3C16.6419 3 20 6.38664 20 10.5633C20 15.8984 13.698 21 12.4995 21Z" stroke="#25324B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="form-block w-form">
                    <form action="search" id="email-form-4" data-name="Email Form 4" method="post" class="form" data-wf-page-id="6481405b618c99bec1636443" data-wf-element-id="1da56800-fe78-e6bc-4193-6a651805d55a">
                        <select id="field" name="field" data-name="Field" class="search-select-field w-select">
                            <?php foreach($jobs as $job): ?>
                                <option  value="<?=$job->location?>"><?=$job->location?></option>
                            <?php endforeach ?>
                        </select>
                    </form>
                    <div class="w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-description mg-small">
        <p class="text-r text-neutral-80">
            <span class="mobile-display-block">Popular :</span>
            Twitter, Microsoft, Apple, Facebook
        </p>
    </div>
</div>