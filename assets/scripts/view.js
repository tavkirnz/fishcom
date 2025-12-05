// Grid View Toggle
const gridButtons = document.querySelectorAll('.filter-grids button');
const productsBoxes = document.querySelectorAll('.products-box');

gridButtons.forEach((button, index) => {
  button.addEventListener('click', function () {
    // Remove active class from all buttons
    gridButtons.forEach(btn => btn.classList.remove('active'));
    // Add active class to clicked button
    this.classList.add('active');

    // Remove all grid classes
    productsBoxes.forEach(box => {
      box.classList.remove('grid-2col', 'list-view');
    });

    // Apply appropriate class based on button clicked
    if (index === 0) {
      // // cells: 2 columns
      productsBoxes.forEach(box => box.classList.add('grid-2col'));
    } else if (index === 1) {
      // cells-large: 3 columns (default)
      // No class needed, it's the default
    } else if (index === 2) {
      // table-list: list view
      productsBoxes.forEach(box => box.classList.add('list-view'));
    }
  });
});

const mainImg = document.getElementById('main-img');
const roofImg = document.querySelectorAll('#roof-img');
roofImg.forEach((img) => {
    img.addEventListener('click', () => {
        mainImg.src = img.src;
    });
});

// Soru Sor Modal
document.getElementById('askQuestionLink').addEventListener('click', () => {
document.getElementById('questionModal').classList.remove('hidden');
});

document.getElementById('closeQuestionModal').addEventListener('click', () => {
document.getElementById('questionModal').classList.add('hidden');
});

document.getElementById('cancelQuestion').addEventListener('click', () => {
document.getElementById('questionModal').classList.add('hidden');
});

document.getElementById('sendQuestion').addEventListener('click', () => {
// Send question logic here
document.getElementById('questionModal').classList.add('hidden');
});

// Not Ekle Modal
document.getElementById('addNoteLink').addEventListener('click', () => {
document.getElementById('noteModal').classList.remove('hidden');
});

document.getElementById('closeNoteModal').addEventListener('click', () => {
document.getElementById('noteModal').classList.add('hidden');
});

document.getElementById('cancelNote').addEventListener('click', () => {
document.getElementById('noteModal').classList.add('hidden');
});

document.getElementById('saveNote').addEventListener('click', () => {
// Save note logic here
document.getElementById('noteModal').classList.add('hidden');
});

// Close on overlay click
document.getElementById('questionModal').addEventListener('click', (e) => {
if (e.target === document.getElementById('questionModal')) {
document.getElementById('questionModal').classList.add('hidden');
}
});

document.getElementById('noteModal').addEventListener('click', (e) => {
  if (e.target === document.getElementById('noteModal')) {
    document.getElementById('noteModal').classList.add('hidden');
  }
});

// Share Modal
document.getElementById('shareLink').addEventListener('click', () => {
  document.getElementById('shareModal').classList.remove('hidden');
});

document.getElementById('closeShareModal').addEventListener('click', () => {
  document.getElementById('shareModal').classList.add('hidden');
});

document.getElementById('shareModal').addEventListener('click', (e) => {
  if (e.target === document.getElementById('shareModal')) {
    document.getElementById('shareModal').classList.add('hidden');
  }
});

// Share functionality
document.querySelectorAll('.share-option').forEach(button => {
  button.addEventListener('click', function() {
    const platform = this.dataset.platform;
    const productName = document.querySelector('.content-title h2').textContent.trim();
    const url = window.location.href;

    switch(platform) {
      case 'whatsapp':
        window.open(`https://wa.me/?text=${encodeURIComponent(`${productName} - ${url}`)}`, '_blank');
        break;
      case 'facebook':
        window.open(`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`, '_blank');
        break;
      case 'copy':
        navigator.clipboard.writeText(url).then(() => {
          // Could show a toast notification here
          alert('Link kopyalandı!');
        });
        break;
      case 'email':
        window.location.href = `mailto:?subject=${encodeURIComponent(productName)}&body=${encodeURIComponent(`${productName} - ${url}`)}`;
        break;
    }

    document.getElementById('shareModal').classList.add('hidden');
  });
});

// Initial render
renderProducts('Klasik', false);


// Note Modal Functionality
document.getElementById('addNoteLink').addEventListener('click', function () {
  document.getElementById('noteModal').classList.remove('hidden');
});

document.getElementById('closeNoteModal').addEventListener('click', function () {
  document.getElementById('noteModal').classList.add('hidden');
});

document.getElementById('cancelNote').addEventListener('click', function () {
  document.getElementById('noteModal').classList.add('hidden');
});

document.getElementById('saveNote').addEventListener('click', function () {
  const note = document.getElementById('orderNote').value;
  // Here you can save the note, e.g., send to server or store locally
  alert('Not kaydedildi: ' + note);
  document.getElementById('noteModal').classList.add('hidden');
});

// Close note modal when clicking outside
document.getElementById('noteModal').addEventListener('click', function (event) {
  if (event.target === this) {
    this.classList.add('hidden');
  }
});

// Question Modal Functionality
document.getElementById('askQuestionLink').addEventListener('click', function () {
  document.getElementById('questionModal').classList.remove('hidden');
});

document.getElementById('closeQuestionModal').addEventListener('click', function () {
  document.getElementById('questionModal').classList.add('hidden');
});

document.getElementById('cancelQuestion').addEventListener('click', function () {
  document.getElementById('questionModal').classList.add('hidden');
});

document.getElementById('sendQuestion').addEventListener('click', function () {
  const question = document.getElementById('questionText').value;
  // Here you can send the question, e.g., send to server
  alert('Soru gönderildi: ' + question);
  document.getElementById('questionModal').classList.add('hidden');
});

// Close question modal when clicking outside
document.getElementById('questionModal').addEventListener('click', function (event) {
  if (event.target === this) {
    this.classList.add('hidden');
  }
});
