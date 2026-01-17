document.addEventListener("DOMContentLoaded", function () {
  const loadMoreBtn = document.getElementById("load-more");
  const postContainer = document.querySelector(".blog-grid");

  loadMoreBtn?.addEventListener("click", function () {
    const page = parseInt(loadMoreBtn.dataset.page) + 1;
    const ajaxUrl = loadMoreBtn.dataset.url;

    fetch(ajaxUrl, {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: new URLSearchParams({
        action: "load_more_posts",
        page: page,
      }),
    })
      .then(res => res.text())
      .then(data => {
        if (data.trim()) {
          postContainer.insertAdjacentHTML("beforeend", data);
          loadMoreBtn.dataset.page = page;
        } else {
          loadMoreBtn.style.display = "none";
        }
      });
  });
});
