document.addEventListener('DOMContentLoaded', () => {
    const cursor = document.getElementById('customCursor');

    document.addEventListener('mousemove', (e) => {
        cursor.style.left = `${e.clientX}px`;
        cursor.style.top = `${e.clientY}px`;
    });

    const cards = document.querySelectorAll('.card-container');
    cards.forEach((card) => {
        

        card.addEventListener('mouseenter', () => {
            const imageUrl = card.querySelector('img').src; 
            cursor.style.backgroundImage = `url(${imageUrl})`;
            cursor.classList.remove('hidden');
        });

        card.addEventListener('mouseleave', () => {
            cursor.classList.add('hidden');
        });
    });
    
});