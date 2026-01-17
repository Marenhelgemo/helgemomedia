<?php
/* Template Name: Priser */
get_header();

?>

<main class="pricing-section site-container">
  <h1 class="pricing-title">Våre Prispakker</h1>
  <p class="pricing-subtitle">Velg en pakke som passer dine behov</p>

  <div class="pricing-grid">
    <!-- Basic Plan -->
    <div class="pricing-card">
      <h2 class="pricing-plan">Basic</h2>
      <p class="price">fra 15 000,- </p>
      <ul class="features">
        <li>✅ Nettside (5–7 sider)</li>
        <li>✅ E-postoppsett (2 kontoer)</li>
        <li>✅ Hosting & domene (1 år)</li>
        <li>✅ Vedlikehold (1 år)</li>
      </ul>
   <a class="btn-1 open-modal"  data-package="Basic">
        <span>Velg</span>
        <svg class="btn-border" viewBox="0 0 180 60">
          <rect x="2" y="10" rx="10" ry="10" width="170" height="40" />
        </svg>
      </a>
    </div>

    <!-- Pro Plan -->
    <div class="pricing-card highlight">
      <h2 class="pricing-plan">Komplett</h2>
      <p class="price"> fra 20 000,-</p>
      <ul class="features">
        <li>✅ Nettside (8–10 sider + galleri)</li>
        <li>✅ E-postoppsett (3 kontoer)</li>
        <li>✅ Hosting & domene (1 år)</li>
        <li>✅ Vedlikehold (1 år)</li>
        <li>✅ WordPress-opplæring (45 min + PDF)</li>
      </ul>
      <a class="btn-1 open-modal"  data-package="Komplett">
        <span>Velg</span>
        <svg class="btn-border" viewBox="0 0 180 60">
          <rect x="2" y="10" rx="10" ry="10" width="170" height="40" />
        </svg>
      </a>
    </div>

    <!-- Enterprise Plan -->
    <div class="pricing-card">
      <h2 class="pricing-plan">Vekst</h2>
      <p class="price">fra 25 – 30 000,-</p>
      <ul class="features">
        <li>✅ Nettside (8–10 sider + galleri)</li>
        <li>✅ E-postoppsett (3 kontoer)</li>
        <li>✅ Hosting & domene (1 år)</li>
        <li>✅ Vedlikehold (1 år)</li>
        <li>✅ WordPress-opplæring (45 min + PDF)</li>
        <li>✅ Profesjonell logo + presentasjonsmateriell</li>
        <li>✅ SEO-pakke</li>
      </ul>
      <a class="btn-1 open-modal"  data-package="Vekst">
        <span>Velg</span>
        <svg class="btn-border" viewBox="0 0 180 60">
          <rect x="2" y="10" rx="10" ry="10" width="170" height="40" />
        </svg>
      </a>
    </div>
  </div>


<!-- Modal -->
<div id="pricing-modal" class="modal">
  <div class="modal-content">
    <span class="modal-close">&times;</span>
    <h2>Du har valgt: <span id="selectedPackage">Pakke</span></h2>
    <form id="pricing-form">
      <label for="name">Navn:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">E-post:</label>
      <input type="email" id="email" name="email" required>

      <div class="extrascover">
      <h3>Ønsker du tilleggstjenester?</h3>
<div class="extras">
  <label><input type="checkbox" name="extras[]" value="Logo"> Profesjonell logo</label><br>
  <label><input type="checkbox" name="extras[]" value="SEO"> SEO-pakke</label><br>
  <label><input type="checkbox" name="extras[]" value="Nyhetsbrev"> Nyhetsbrev-integrasjon</label><br>
  <label><input type="checkbox" name="extras[]" value="Tekstforfatter"> Hjelp med innhold / tekst</label><br>
</div>
</div>
<div class="summary-section">
  <h3>Din bestilling</h3>
  <ul class="summary-box"></ul>
  <p id="total-price">Total: kr 0</p>
</div>


      <input type="hidden" id="chosen-package" name="chosen-package">

      <button type="submit" class="button-gold">Send</button>
    </form>
  </div>
</div>

<h3>Ønsker du abonnement?</h3>
<div class="abonnement-options">
  <label><input type="checkbox" class="abonnement-checkbox" data-name="Vedlikehold" data-price="290"> Vedlikehold – kr 290/mnd</label><br>
  <label><input type="checkbox" class="abonnement-checkbox" data-name="SEO-rapportering" data-price="390"> SEO-rapportering – kr 390/mnd</label><br>
  <label><input type="checkbox" class="abonnement-checkbox" data-name="Nyhetsbrev-håndtering" data-price="190"> Nyhetsbrev – kr 190/mnd</label><br>
</div>


  <?php
$enkeltpriser = get_field('enkeltpriser');
if ($enkeltpriser):
  $linjer = explode("\n", $enkeltpriser);
?>
  <section class="pricing-section site-container">
    <h2 class="pricing-title">Enkeltpriser</h2>
    <ul class="enkeltpriser">
      <?php foreach ($linjer as $linje): ?>
        <li> <?php echo esc_html(trim($linje)); ?></li>
      <?php endforeach; ?>
    </ul>
  </section>
<?php endif; ?>

</main>

<?php get_footer(); ?>
