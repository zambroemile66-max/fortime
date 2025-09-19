<div class="wrapper">
            <div class="section">
                <div class="contact-sales-grid">
                    <div class="simple-text-box">
                        <h1>Publish a Job</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.<br/>
                        </p>
                        <p>Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                    </div>
                    <div class="module">
                        <div class="module-main large">
                            <div class="w-form">
                                <form id="email-form" action="job-publish" method="post" class="form">
                                    <div class="_2-fields-split">
                                        <div class="field-block">
                                            <label for="name">Title*</label>
                                            <input type="text" class="text-input w-input" maxlength="256" name="title" data-name="Name" placeholder="Job Title" required=""/>
                                        </div>
                                        <div class="field-spacer"></div>
                                        <div class="field-block">
                                            <label for="pays">Location*</label>
                                            <select class="text-input w-input" id="pays" name="location">
                                                <option value="cm">Cameroun</option>
                                                <option value="ci">Côte d’Ivoire</option>
                                                <option value="sn">Sénégal</option>
                                                <option value="fr">France</option>
                                                <option value="us">États-Unis</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="_2-fields-split">
                                        <div class="field-block">
                                            <label for="name">Type*</label>
                                            <input type="text" class="text-input w-input" maxlength="256" name="type" placeholder="CDD" required=""/>
                                        </div>
                                        <div class="field-spacer"></div>
                                        <div class="field-block">
                                            <label for="number">Salary</label>
                                            <input type="number" class="text-input w-input" min="500" maxlength="256" name="salary" data-name="number" placeholder="500" id="number" required=""/>
                                        </div>
                                    </div>
                                    <div class="_2-fields-split">
                                        <div class="field-block">
                                            <label for="Company-Name">Apply Before*</label>
                                            <input type="date" class="text-input w-input" maxlength="256" name="apply_before" data-name="Company Name" placeholder="Example Co." id="Company-Name" required=""/>
                                        </div>
                                        <div class="field-spacer"></div>
                                        <div class="field-block">
                                            <label for="Username">Skills Required</label>
                                            <input type="text" id="categorie" class="text-input w-input" maxlength="256"  placeholder="Project Management"/>
                                        </div>
                                        <div class="field-block">
                                            <label for="Username">Skills Required</label>
                                            <input type="button" id="addBtn" class="button w-button text-input w-input" value="Add"/>
                                        </div>
                                    </div>
                                    <div class="field-block">
                                        <div id="tagsContainer" class="text-area full-width w-input"></div>
                                        <textarea id="tagsInput" name="skills" hidden></textarea>
                                    </div>
                                    <div class="field-block">
                                        <label for="Username">Description</label>
                                        <textarea style="resize: vertical;" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique." maxlength="5000" data-name="Field" name="field" class="text-area full-width w-input"></textarea>
                                    </div>
                                    <input type="submit" value="Submit" data-wait="Please wait..." class="button w-button"/>
                                    <p class="paragraph-small light">
                                        By clicking the button above, you agree to our <a href="/pages/terms-conditions" target="_blank" class="simple-link light">Terms &amp;Conditions</a>
                                        and <a href="/pages/privacy-policy" target="_blank" class="simple-link light">Privacy Policy</a>
                                        .
                                    </p>
                                </form>
                                <div class="form-success w-form-done">
                                    <div>Your request has been submitted and we will get to you shortly.</div>
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
<script>
  const input = document.getElementById("categorie");
  const addBtn = document.getElementById("addBtn");
  const tagsContainer = document.getElementById("tagsContainer");
  const tagsInput = document.getElementById("tagsInput");

  let tags = [];

  // Ajouter une catégorie
  function addTag(tag) {
    if (tag && !tags.includes(tag)) {
      tags.push(tag);
      renderTags();
    }
  }

  // Supprimer une catégorie
  function removeTag(tag) {
    tags = tags.filter(t => t !== tag);
    renderTags();
  }

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

  // Clic sur bouton Ajouter
  addBtn.addEventListener("click", () => {
    addTag(input.value.trim());
    input.value = "";
  });

  // Entrée clavier (Enter)
  input.addEventListener("keypress", (e) => {
    if (e.key === "Enter") {
      e.preventDefault();
      addTag(input.value.trim());
      input.value = "";
    }
  });
</script>