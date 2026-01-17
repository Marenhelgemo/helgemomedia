jQuery(document).ready(function ($) {
  let currentPage = 1;
  let currentCategory = 'all';

  function fetchPosts(category, page = 1) {
    $.ajax({
      url: ves_filter_data.ajax_url,
      type: 'POST',
      data: {
        action: 'filter_and_load_posts',
        category: category,
        page: page
      },
      success: function (data) {
        if (page === 1) {
          $('#post-results').html(data);
        } else {
          $('#post-results').append(data);
        }

        // Show/hide load more button
        if (data.includes('no-more-posts')) {
          $('#load-more').hide();
        } else {
          $('#load-more').show();
        }
      }
    });
  }

  $('.service-btn').on('click', function () {
    $('.service-btn').removeClass('active');
    $(this).addClass('active');
    currentCategory = $(this).data('category');
    currentPage = 1;
    fetchPosts(currentCategory, currentPage);
  });

  $('#load-more').on('click', function () {
    currentPage++;
    fetchPosts(currentCategory, currentPage);
  });

  // Initial load
  fetchPosts(currentCategory, currentPage);
});
