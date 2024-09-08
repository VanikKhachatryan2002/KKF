const svgContainer  = document.querySelector('.svgContainer');
const mediaLinkContainer = document.querySelector('.mediaLinkContainer ');

svgContainer.addEventListener('click', function () {
    if (!mediaLinkContainer.classList.contains('hidden')) {
        mediaLinkContainer.classList.remove('fade-in');
        mediaLinkContainer.classList.add('fade-out');
        setTimeout(() => {
            mediaLinkContainer.classList.add('hidden')
        }, 600);
    } else {
        mediaLinkContainer.classList.remove('hidden');
        mediaLinkContainer.classList.remove('fade-out');
        setTimeout(() => {
            mediaLinkContainer.classList.add('fade-in');
        }, 10);
    }
});
