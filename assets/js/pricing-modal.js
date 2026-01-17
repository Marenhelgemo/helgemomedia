document.addEventListener('DOMContentLoaded', function () {
  // Modal
  const openButtons = document.querySelectorAll('.open-modal');
  const modal = document.querySelector('.modal');
  const closeButton = document.querySelector('.modal-close');

  const selectedPlanEl = document.getElementById('selectedPackage'); // viser valgt pakke
  const chosenPackageInput = document.getElementById('chosen-package'); // hidden input
  const extrasCheckboxes = document.querySelectorAll('input[name="extras[]"]');
  const abonnementCheckboxes = document.querySelectorAll('.abonnement-checkbox');
  const summaryBox = document.querySelector('.summary-box');
  const totalPriceEl = document.getElementById('total-price');

  function updateSummary() {
    let total = 0;
    let summaryHtml = "";

    // Pakke
    const selectedPlan = selectedPlanEl?.textContent || "Pakke";
    const planPrices = {
      "Basic": 15000,
      "Komplett": 20000,
      "Vekst": 30000
    };
    const planPrice = planPrices[selectedPlan] || 0;

    if (planPrice > 0) {
      total += planPrice;
      summaryHtml += `<li>${selectedPlan} pakke: kr ${planPrice}</li>`;
    }

    // Tilleggstjenester
    extrasCheckboxes.forEach(cb => {
      if (cb.checked) {
        summaryHtml += `<li>${cb.value}: kr 1500</li>`;
        total += 1500;
      }
    });

    // Abonnement (vises, men summeres ikke i total)
    abonnementCheckboxes.forEach(cb => {
      if (cb.checked) {
        const name = cb.getAttribute('data-name');
        const price = cb.getAttribute('data-price');
        summaryHtml += `<li>${name}: kr ${price} / mnd</li>`;
      }
    });

    if (summaryBox) summaryBox.innerHTML = summaryHtml;
    if (totalPriceEl) totalPriceEl.textContent = `Total: kr ${total}`;
  }

  if (modal && openButtons.length > 0) {
    openButtons.forEach(button => {
      button.addEventListener('click', function (e) {
        e.preventDefault();
        modal.style.display = 'block';

        const selectedPackage = button.getAttribute('data-package');
        if (selectedPlanEl && selectedPackage) {
          selectedPlanEl.textContent = selectedPackage;
        }
        if (chosenPackageInput && selectedPackage) {
          chosenPackageInput.value = selectedPackage;
        }

        updateSummary();
      });
    });

    if (closeButton) {
      closeButton.addEventListener('click', function () {
        modal.style.display = 'none';
      });
    }

    window.addEventListener('click', function (e) {
      if (e.target === modal) {
        modal.style.display = 'none';
      }
    });
  }

  // Oppdatering ved avhuking
  extrasCheckboxes.forEach(cb => cb.addEventListener('change', updateSummary));
  abonnementCheckboxes.forEach(cb => cb.addEventListener('change', updateSummary));

  // Toggle content
  const toggleButton = document.getElementById('toggleButton');
  const contentDiv = document.getElementById('contentDiv');

  if (toggleButton && contentDiv) {
    toggleButton.addEventListener('click', function () {
      contentDiv.style.display =
        contentDiv.style.display === 'none' || contentDiv.style.display === ''
          ? 'block'
          : 'none';
    });
  } else {
    console.warn("Element not found:", { toggleButton, contentDiv });
  }
});
