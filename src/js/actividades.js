document.querySelectorAll('.actividad-content').forEach(section => {
    const showMoreLink = section.querySelector('.show-more-link');
    const showLessLink = section.querySelector('.show-less-link');
    const extraContent = section.querySelector('.extra-content');
    if (extraContent != null || showMoreLink != null || showLessLink != null) {
        showMoreLink.addEventListener('click', function () {
            extraContent.style.display = 'block';
            showMoreLink.style.display = 'none';
            showLessLink.style.display = 'block';
        });

        showLessLink.addEventListener('click', function () {
            extraContent.style.display = 'none';
            showLessLink.style.display = 'none';
            showMoreLink.style.display = 'block';
        });
    }
});