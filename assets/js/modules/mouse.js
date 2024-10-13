const customCursor = document.getElementById('custom-cursor');
const teamSection = document.querySelector('.team-section'); // The section you want to hover

// Update the cursor position
document.addEventListener('mousemove', (e) => {
	customCursor.style.left = `${e.pageX}px`;
	customCursor.style.top = `${e.pageY}px`;
});

// Change cursor style on hover
teamSection.addEventListener('mouseenter', () => {
	customCursor.classList.add('bg-red-500', 'w-10', 'h-10'); // Change color and size on hover
});

teamSection.addEventListener('mouseleave', () => {
	customCursor.classList.remove('bg-red-500', 'w-10', 'h-10'); // Reset on leave
})