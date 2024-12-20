// Get modal, button, and close span - https://www.w3schools.com/howto/howto_css_modals.asp
const modal = document.getElementById('videoModal');
const openModal = document.getElementById('openModal');
const closeModal = document.getElementById('closeModal');

// Open modal when button is clicked
openModal.addEventListener('click', () => {
  modal.style.display = 'block';
});

// Close modal when close button is clicked
closeModal.addEventListener('click', () => {
  modal.style.display = 'none';
});

// Close modal when clicking outside the modal content
window.addEventListener('click', (e) => {
  if (e.target === modal) {
    modal.style.display = 'none';
  }
});
