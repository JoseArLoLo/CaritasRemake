document.querySelectorAll('.menu-item').forEach(item => {
    item.addEventListener('click', function () {
        document.querySelectorAll('.menu-item').forEach(i => i.classList.remove('active'));
        this.classList.add('active');

        document.querySelectorAll('.content').forEach(c => c.classList.remove('active'));
        const activeContent = document.getElementById(this.dataset.content);
        activeContent.classList.add('active');
    });
});