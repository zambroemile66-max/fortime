<?php
    require VIEWS.'components/alert.php';
?>
<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com -->
<!-- Last Published: Mon Jun 14 2021 20:30:44 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="dawn-dashboard.webflow.io" data-wf-page="602304575e9b684c20776f55" data-wf-site="6022ffeab6f354c9aa1eb2a2">
    <head>
        <meta charset="utf-8"/>
        <title>Dawn Dashboard - Webflow HTML website template</title>
        <meta content="Dawn Dashboard - Webflow HTML website template" property="og:title"/>
        <meta content="Dawn Dashboard - Webflow HTML website template" property="twitter:title"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="Webflow" name="generator"/>
        <link href="<?=SCRIPTS.'css'.DIRECTORY_SEPARATOR.'dawn-dashboard.webflow.fad9e2a6a.css'?>" rel="stylesheet" type="text/css"/>
        <link href="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/64c158c6e58ab54051257505_Jobhuntly%20-%20Favicon.png" rel="shortcut icon" type="image/x-icon"/>
        <link href="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/64c158c95e92d9ea81c6207d_Jobhuntly%20-%20Webclip.png" rel="apple-touch-icon"/>
    </head>
    <body class="body">
        <div class="dashboard-wrapper">
            <div data-collapse="medium" data-animation="over-left" data-duration="400" role="banner" class="sidebar-nav w-nav">
                <nav role="navigation" class="dashboard-sidebar w-nav-menu">
                    <div class="sidebar-logo-section">
                        <a href="/fortime" aria-current="page" class="dashboard-logo w-nav-brand w--current">
                            <img src="<?=SCRIPTS.'img'.DIRECTORY_SEPARATOR.'6480c35745aef364b9b9698d_Brand%20Logo.png'?>" width="98" alt="" class="sidebar-logo"/>
                        </a>
                        <div data-w-id="09e608d3-5d29-ea1c-8250-9e1401f1ec35" class="sidebar-collapse">
                            <img src="<?= SCRIPTS.'adminimg'.DIRECTORY_SEPARATOR.'602337522c3ea56827425334_Collapse%20Icon.svg'?>" loading="lazy" alt=""/>
                        </div>
                    </div>
                    <div class="sidebar-menu">
                        <div class="sidebar-menu-section bottom-divider">
                            <a href="/fortime/admin/dashboard" aria-current="page" class="sidebar-link w-inline-block w--current">
                                <img src="<?= SCRIPTS.'adminimg'.DIRECTORY_SEPARATOR.'602339a0e958300219cd1f1d_House.svg'?>" loading="lazy" width="27" alt="" class="sidebar-icon"/>
                                <div class="sidebar-link-text">Dashboard</div>
                            </a>
                            <link rel="prefetch" href="/"/>
                            <a href="/fortime/admin/emails" class="sidebar-link w-inline-block">
                                <img src="<?= SCRIPTS.'adminimg'.DIRECTORY_SEPARATOR.'602339a108f00aa2bc888ea5_EnvelopeOpen.svg'?>" loading="lazy" width="27" alt="" class="sidebar-icon"/>
                                <div class="sidebar-link-text">Emails</div>
                            </a>
                            <link rel="prefetch" href="/tasks"/>
                            <a href="/fortime/admin/company-profile" class="sidebar-link w-inline-block">
                                <img src="<?= SCRIPTS.'adminimg'.DIRECTORY_SEPARATOR.'buildings.svg'?>" loading="lazy" width="27" alt="" class="sidebar-icon"/>
                                <div class="sidebar-link-text">Company profile</div>
                            </a>
                            <link rel="prefetch" href="/emails"/>
                            <a href="/fortime/admin/applicants" class="sidebar-link w-inline-block">
                                <img src="<?= SCRIPTS.'adminimg'.DIRECTORY_SEPARATOR.'users-three.svg'?>" loading="lazy" width="27" alt="" class="sidebar-icon"/>
                                <div class="sidebar-link-text">All Applicants</div>
                            </a>
                            <link rel="prefetch" href="/calender"/>
                            <a href="/fortime/admin/jobs" class="sidebar-link w-inline-block">
                                <img src="<?= SCRIPTS.'adminimg'.DIRECTORY_SEPARATOR.'clipboard-text.svg'?>" loading="lazy" width="27" alt="" class="sidebar-icon"/>
                                <div class="sidebar-link-text">Job listing</div>
                            </a>
                        </div>
                    </div>
                </nav>
                <div class="sidebar-button w-nav-button">
                    <img src="<?= SCRIPTS.'adminimg'.DIRECTORY_SEPARATOR.'6024395e5a23d38bab1bbf77_Menu.svg'?>" loading="lazy" width="22" alt=""/>
                </div>
            </div>
            <div class="dashboard-main">
                <div class="sidebar-spacer"></div>
                <div class="dashboard-content">
                    <div data-collapse="all" data-animation="default" data-duration="0" role="banner" class="dashboard-nav w-nav">
                        
                        <form action="/search" class="search w-form">
                            <input type="submit" value="Search" class="search-button w-button"/>
                            <input type="search" class="search-input w-input" maxlength="256" name="query" placeholder="Search" id="search" required=""/>
                        </form>
                        <div class="nav-spacer"></div>
                        <div data-hover="" data-delay="0" class="nav-dropdown w-dropdown">
                            <div class="nav-dropdown-toggle w-dropdown-toggle">
                                <div class="nav-icon-item">
                                    <img src="<?= SCRIPTS.'adminimg'.DIRECTORY_SEPARATOR.'602447734ab6e4df1472dc60_Bell.svg'?>" loading="lazy" width="27" alt="" class="nav-icon"/>
                                    <div class="bell-dot"></div>
                                </div>
                            </div>
                            <nav class="nav-dropdown-list w-dropdown-list">
                                <div class="module heavy-shadow">
                                    <div class="module-main">
                                        <div class="notificaiton-element">
                                            <div class="notification-top">
                                                <div class="notification-dot"></div>
                                                <div class="notificaiton-title">3 new emails</div>
                                            </div>
                                            <p class="notification-description">From AudioHunt, Domains R Us, and Google Accounts.</p>
                                        </div>
                                        <div class="notificaiton-element seen">
                                            <div class="notification-top">
                                                <div class="notification-dot seen"></div>
                                                <div class="notificaiton-title">4 new orders</div>
                                            </div>
                                            <p class="notification-description">There are new orders to be fulfilled.</p>
                                        </div>
                                        <div class="notificaiton-element seen">
                                            <div class="notification-top">
                                                <div class="notification-dot seen"></div>
                                                <div class="notificaiton-title">5 new tickets</div>
                                            </div>
                                            <p class="notification-description">There are new tickets to be checked.</p>
                                        </div>
                                        <a href="#" class="module-button w-button">See all notifications</a>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <div data-hover="" data-delay="0" class="profile-menu-dropdown w-dropdown">
                            <div data-w-id="b24ef7f8-86e5-1c85-e1c5-b65466441b29" class="profile-menu w-dropdown-toggle">
                                <div class="profile-image">
                                    <img src="<?=SCRIPTS.'uploads'.DIRECTORY_SEPARATOR.$_SESSION['company_logo'] ?? SCRIPTS.'img'.DIRECTORY_SEPARATOR.'default-avatar.jpg'?>" loading="lazy" alt="" class="cover-image"/>
                                </div>
                                <img src="<?= SCRIPTS.'adminimg'.DIRECTORY_SEPARATOR.'6023423b0a5988466e83ffb8_CaretDown.svg'?>" loading="lazy" width="15" alt="" class="menu-down"/>
                            </div>
                            <nav class="profile-menu-list w-dropdown-list">
                                <a href="../admin/profile" class="profile-menu-link w-nav-link">My Profile</a>
                                <a href="/settings" class="profile-menu-link w-nav-link">Settings</a>
                                <div class="menu-divider"></div>
                                <a href="../logout" class="profile-menu-link w-nav-link">Log Out</a>
                            </nav>
                        </div>
                    </div>
                    <?=$content?>
                </div>
                <div data-hover="" data-delay="0" class="new-button w-dropdown">
                    <div class="new-button-toggle w-dropdown-toggle">
                        <div>+</div>
                    </div>
                    <nav class="add-menu w-dropdown-list">
                        <a href="../admin/job-publish" class="add-link w-inline-block">
                            <img src="<?= SCRIPTS.'adminimg'.DIRECTORY_SEPARATOR.'602339a1038967373831278c_Note.svg'?>" loading="lazy" width="27" alt="" class="sidebar-icon"/>
                            <div class="sidebar-link-text">New Job</div>
                        </a>
                        <a href="/tasks" class="add-link w-inline-block">
                            <img src="<?= SCRIPTS.'adminimg'.DIRECTORY_SEPARATOR.'602339a108f00aa2bc888ea5_EnvelopeOpen.svg'?>" loading="lazy" width="27" alt="" class="sidebar-icon"/>
                            <div class="sidebar-link-text">New Email</div>
                        </a>
                        <a href="/tasks" class="add-link w-inline-block">
                            <img src="<?= SCRIPTS.'adminimg'.DIRECTORY_SEPARATOR.'602339a0a91183f9fceef7b0_CalendarBlank.svg'?>" loading="lazy" width="27" alt="" class="sidebar-icon"/>
                            <div class="sidebar-link-text">New Event</div>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
        <script src="<?=SCRIPTS.'js'.DIRECTORY_SEPARATOR.'jquery-3.5.1.min.dc5e7f18c8.js'?>" type="text/javascript"></script>
        <script src="<?=SCRIPTS.'js'.DIRECTORY_SEPARATOR.'webflow.d32f73495.js'?>" type="text/javascript"></script>
        <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
    </body>
</html>
<script>
  // Fonction générique pour gérer un tag input
  function setupTagInput({ input, addBtn, tagsContainer, tagsInput }) {
    // Si tagsInput contient déjà des données
    let tags = tagsInput.value ? tagsInput.value.split(",").map(t => t.trim()).filter(t => t !== '') : [];

    // Afficher les tags
    function renderTags() {
      tagsContainer.innerHTML = "";
      tags.forEach(tag => {
        const span = document.createElement("span");
        span.className = "badge bg-primary me-1 mb-1";
        span.innerHTML = `
          ${tag}
          <button type="button" class="btn-close btn-close-white btn-sm ms-1" aria-label="Supprimer"></button>
        `;
        span.querySelector("button").addEventListener("click", () => removeTag(tag));
        tagsContainer.appendChild(span);
      });
      tagsInput.value = tags.join(","); // stocker dans le champ caché
    }

    // Ajouter un tag
    function addTag(tag) {
      if (tag && !tags.includes(tag)) {
        tags.push(tag);
        renderTags();
      }
    }

    // Supprimer un tag
    function removeTag(tag) {
      tags = tags.filter(t => t !== tag);
      renderTags();
    }

    // Initial render
    renderTags();

    // Événements
    addBtn.addEventListener("click", () => {
      addTag(input.value.trim());
      input.value = "";
    });

    input.addEventListener("keypress", (e) => {
      if (e.key === "Enter") {
        e.preventDefault();
        addTag(input.value.trim());
        input.value = "";
      }
    });
  }

  // ⚡ Initialisation pour 4 champs différents
  setupTagInput({
    input: document.getElementById("categorie"),
    addBtn: document.getElementById("addBtn"),
    tagsContainer: document.getElementById("tagsContainer"),
    tagsInput: document.getElementById("tagsInput")
  });

  setupTagInput({
    input: document.getElementById("categorie2"),
    addBtn: document.getElementById("addBtn2"),
    tagsContainer: document.getElementById("tagsContainer2"),
    tagsInput: document.getElementById("tagsInput2")
  });
</script>
<script>
    // Checkbox principal
  const checkAll = document.getElementById("checkAll");
  // Tous les checkbox de ligne
  const rowChecks = document.querySelectorAll(".row-check");
  // Checkbox principal
  const checkAll2 = document.getElementById("checkAll2");
  // Tous les checkbox de ligne
  const rowChecks2 = document.querySelectorAll(".row-check2");
  // Checkbox principal
  const checkAll3 = document.getElementById("checkAll3");
  // Tous les checkbox de ligne
  const rowChecks3 = document.querySelectorAll(".row-check3");

    function checked(checkAll, rowChecks) {
        // Quand on clique sur le "check main"
        checkAll.addEventListener("change", function() {
            rowChecks.forEach(chk => chk.checked = this.checked);
        });

        // Si l’utilisateur clique sur une case individuelle
        rowChecks.forEach(chk => {
            chk.addEventListener("change", function() {
            // Si toutes les cases sont cochées => checkAll aussi
            // Sinon, on le décoche
            checkAll.checked = [...rowChecks].every(c => c.checked);
            });
        });
    }
    checked(checkAll, rowChecks);
    checked(checkAll2, rowChecks2);
    checked(checkAll3, rowChecks3);
</script>