let lastScroll = 0;
const topbar = document.getElementById('topbar');
const header = document.getElementById('header');

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;

    if (topbar && header) {
        if (currentScroll <= 0) { 
            topbar.style.transform = 'translateY(0)';
            header.style.transform = 'translateY(0)';
        } else if (currentScroll > lastScroll) {
            topbar.style.transform = 'translateY(-100%)';
            header.style.transform = 'translateY(-100%)';
        } else {
            topbar.style.transform = 'translateY(0)';
            header.style.transform = 'translateY(0)';
        }
    }

    lastScroll = currentScroll;
});


const navbarList = document.getElementById('products-navbar-list');
if(navbarList){
  navbarList.querySelectorAll('li').forEach(li => {
    li.addEventListener('click', function(e){
      e.preventDefault();
      navbarList.querySelectorAll('li').forEach(item => {
        item.classList.remove('active');
      });
      this.classList.add('active');
    });
  });
}
const openHeader = document.querySelector('.open-header-nav');
const openNav = document.querySelector('.open-nav');
const headerNav = document.querySelector('.header-nav');
document.querySelectorAll('#hamburger-menu').forEach(function(menu){
  menu.addEventListener('click', function(){
    const isOpen = openHeader.classList.contains("open")
    if(isOpen){
      openHeader.classList.remove('open');
    }
    else{
      openHeader.classList.add('open');
    }
  });
});

document.body.addEventListener('click', e => {
  // Eğer tıklanan yer openHeader veya içindeyse hiçbir şey yapma
  if (!openNav.contains(e.target)&&!headerNav.contains(e.target)) {
    openHeader.classList.remove('open');
  }
});

// Measure actual heights on load
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.sss-title-bottom').forEach(function(bottom) {
    // Temporarily open to measure height
    bottom.classList.add('open');
    const height = bottom.scrollHeight;
    bottom.setAttribute('data-height', height + 'px');
    bottom.classList.remove('open');
  });
});

document.querySelectorAll('.sss-card').forEach(function(card){
  card.addEventListener('click', function(){
    const icon = card.querySelector('.sss-list');
    const metin = card.querySelector('.sss-title-bottom');
    const isOpen = metin.classList.contains('open');

    // If this card is already open, close it
    if (isOpen) {
      metin.style.maxHeight = '0';
      metin.classList.remove('open');
      icon.classList.remove('rotate-180');
      icon.classList.add('rotate-0');
    } else {
      // Close all others and open this one simultaneously
      document.querySelectorAll('.sss-card').forEach(otherCard => {
        const otherMetin = otherCard.querySelector('.sss-title-bottom');
        const otherIcon = otherCard.querySelector('.sss-list');
        if (otherCard === card) {
          // Open this one
          const height = otherMetin.getAttribute('data-height');
          otherMetin.style.maxHeight = height;
          if (otherMetin) otherMetin.classList.add('open');
          if (otherIcon) {
            otherIcon.classList.remove('rotate-0');
            otherIcon.classList.add('rotate-180');
          }
        } else {
          // Close others
          if (otherMetin) {
            otherMetin.style.maxHeight = '0';
            otherMetin.classList.remove('open');
          }
          if (otherIcon) {
            otherIcon.classList.remove('rotate-180');
            otherIcon.classList.add('rotate-0');
          }
        }
      });
    }
  });
});

document.querySelectorAll('.favorite-icon').forEach(function(icon){
  icon.addEventListener('click', function(){
    if(this.classList.contains('fa-regular')){
      this.classList.remove('fa-regular');
      this.classList.add('fa-solid');
      this.style.color = 'var(--fish-red)';
    } else {
      this.classList.remove('fa-solid');
      this.classList.add('fa-regular');
      this.style.color = '';
    }
  });
});

document.querySelectorAll('.opencart-btn').forEach(function(btn){
  btn.addEventListener('click', function(){
    const icon = btn.querySelector('i');
    if(icon.classList.contains('fa-opencart')){
      icon.classList.remove('fa-opencart','fa-brands');
      icon.classList.add('fa-check','fa-solid','animate-bounce');
      icon.style.color = 'var(--fish-green)';
      setTimeout(function(){
        icon.classList.remove('animate-bounce');
      }, 600);
    } else {
      icon.classList.remove('fa-check','fa-solid');
      icon.classList.add('fa-opencart','fa-brands');
      icon.style.color = '';
    }
  });
});

document.querySelectorAll('.specials-btn').forEach(function(btn){
  btn.addEventListener('mouseenter', function(){
    btn.querySelector('.specials-btn-bg').style.width = '100%';
  });
  btn.addEventListener('mouseleave', function(){
    btn.querySelector('.specials-btn-bg').style.width = '0';
  });
});

// Inject a favorite (star) button into each recipe-card and wire up toggle behavior
document.querySelectorAll('.recipe-card').forEach(function(card){
  // create button
  const btn = document.createElement('button');
  btn.className = 'recipe-fav-btn';
  btn.type = 'button';
  btn.setAttribute('aria-pressed','false');
  btn.setAttribute('aria-label','Favorilere ekle');
  // use FontAwesome empty star by default
  btn.innerHTML = '<i class="fa-regular fa-star"></i>';
  // prepend to card so it's on top-left
  card.appendChild(btn);

  function toggleFav(){
    const icon = btn.querySelector('i');
    const isActive = btn.classList.toggle('active');
    if(isActive){
      // filled star
      icon.classList.remove('fa-regular');
      icon.classList.add('fa-solid');
      btn.setAttribute('aria-pressed','true');
      btn.setAttribute('aria-label','Favorilerden çıkar');
    } else {
      icon.classList.remove('fa-solid');
      icon.classList.add('fa-regular');
      btn.setAttribute('aria-pressed','false');
      btn.setAttribute('aria-label','Favorilere ekle');
      // remove focus so an empty star will hide immediately when mouse leaves
      try { btn.blur(); } catch(e) {}
    }
  }

  btn.addEventListener('click', function(e){
    e.stopPropagation();
    toggleFav();
  });

  // keyboard accessibility: toggle on Enter / Space
  btn.addEventListener('keydown', function(e){
    if(e.key === 'Enter' || e.key === ' '){
      e.preventDefault();
      toggleFav();
    }
  });
});

const fishButtons = document.querySelectorAll('.fish-button');

fishButtons.forEach(btn => {
  btn.addEventListener('mouseenter', () => {
    if (!btn.classList.contains('animate')) {
      btn.classList.add('animate');

      btn.addEventListener('animationend', () => {
        btn.classList.remove('animate');
      }, { once: true });
    }
  });
});

document.querySelectorAll('.products-card').forEach(card => {
  card.addEventListener('click', e => {
    // Eğer buton veya favori ikonuna tıklanırsa yönlendirme yapma
    if (e.target.closest('button') || e.target.closest('.favorite-icon')) return;

    // data-href değerine yönlendir
    const url = card.dataset.href;
    if (url) {
      window.location.href = url;
    }
  });
});

const input = document.getElementById('searchInput');
const suggestions = document.getElementById('suggestions');

// Örnek veri
const data = [
    {title: 'Tortilla', gr: '200 gr', adet:'Koli İçi Adet: 4', price:'300TL', paket:'1200TL', img: 'yemek1.webp', link:'urundetay.php'},
    {title: 'Balık Köftesi', gr: '200 gr', adet:'Koli İçi Adet: 5', price:'400TL', paket:'1600TL', img: 'yemek2.webp', link:'urundetay.php'},
    {title: 'Kalamar', gr: '250 gr', adet:'Koli İçi Adet: 3', price:'450TL', paket:'1350TL', img: 'yemek3.webp', link:'urundetay.php'},
    {title: 'Karides', gr: '200 gr', adet:'Koli İçi Adet: 6', price:'500TL', paket:'3000TL', img: 'yemek4.jpeg', link:'urundetay.php'},
    {title: 'Somon', gr: '300 gr', adet:'Koli İçi Adet: 2', price:'600TL', paket:'1200TL', img: 'yemek5.jpeg', link:'urundetay.php'},
];

input.addEventListener('input', () => {
    const value = input.value.toLowerCase();
    suggestions.innerHTML = '';

    if (value) {
        // 🔹 Arama + sadece ilk 3 sonucu al
        const filtered = data
            .filter(item => item.title.toLowerCase().includes(value))
            .slice(0, 5);

        filtered.forEach(item => {
            const div = document.createElement('div');
            div.className = ' hover:bg-neutral-100 cursor-pointer flex justify-between';

            div.innerHTML = `
                <figure class="w-1/4 flex h-30 p-3">
                  <img class="w-full h-full object-cover" src="assets/images/${item.img}" alt="">
                </figure>
                <div class="flex flex-col justify-center w-1/4 px-5">
                  <h5 class="text-lg">${item.title}</h5>
                  <p class="text-md font-extralight">${item.gr}<br>${item.adet}</p>
                </div>
                <div class="flex flex-col justify-center w-1/4 px-5">
                  <h4 class="text-lg">${item.price}</h4>
                  <p class="text-md font-extralight">${item.paket} / Paket</p>
                </div>
                <div class="flex justify-center items-center w-1/4 gap-2">
                  <p class="text-lg font-semibold">Sepete Ekle</p>
                  <i class="fa-solid fa-plus text-xl"></i>
                </div>
            `;

            div.addEventListener('click', () => {
                window.location.href = item.link;
                suggestions.classList.add('hidden');
                suggestions.classList.remove('flex');
            });

            suggestions.appendChild(div);
        });

        // Eğer sonuç varsa göster
        if (filtered.length > 0) {
            suggestions.classList.remove('hidden');
            suggestions.classList.add('flex');
        } else {
            suggestions.classList.add('hidden');
        }
    } else {
        suggestions.classList.add('hidden');
        suggestions.classList.remove('flex');
    }
});

// Input dışında tıklayınca gizle
document.addEventListener('click', (e) => {
    if (!input.contains(e.target) && !suggestions.contains(e.target)) {
        suggestions.classList.add('hidden');
    }
});

const accountBtn = document.getElementById('accountBtn');
const accountMenu = document.getElementById('accountMenu');

accountBtn.addEventListener('click', (e) => {
  e.preventDefault();
  accountMenu.classList.toggle('hidden');
});

// Dışarı tıklanınca kapansın
document.addEventListener('click', (e) => {
  if (!accountMenu.contains(e.target) && !accountBtn.contains(e.target)) {
    accountMenu.classList.add('hidden');
  }
});

// Modal functionality
const productModal = document.getElementById('productModal');
const closeModalBtn = document.getElementById('closeModal');

// Close modal on button click
closeModalBtn.addEventListener('click', () => {
  productModal.classList.add('hidden');
});

// Close modal on overlay click
productModal.addEventListener('click', (e) => {
  if (e.target === productModal) {
    productModal.classList.add('hidden');
  }
});

// Cart modal functionality
const cartModal = document.getElementById('cartModal');
const closeCartModalBtn = document.getElementById('closeCartModal');

// Open cart modal
document.querySelectorAll('.user-cart a').forEach(cartLink => {
  cartLink.addEventListener('click', (e) => {
    e.preventDefault();
    cartModal.classList.remove('hidden');
  });
});

// Close cart modal on button click
closeCartModalBtn.addEventListener('click', () => {
  cartModal.classList.add('hidden');
});

// Close cart modal on overlay click
cartModal.addEventListener('click', (e) => {
  if (e.target === cartModal) {
    cartModal.classList.add('hidden');
  }
});

// Open modal on fa-eye button click
document.querySelectorAll('.fast-buttons button:first-child').forEach(btn => {
  btn.addEventListener('click', (e) => {
    e.stopPropagation(); // Prevent card click

    const card = btn.closest('.products-card');
    if (!card) return;

    // Extract product data
    const img = card.querySelector('.image-area img');
    const imageSrc = img ? img.src : '';

    const badgeSpan = card.querySelector('.image-area span:not(.fast-buttons)');
    let badgeText = '';
    if (badgeSpan) {
      const classes = badgeSpan.className.split(' ');
      if (classes.includes('guluten-free')) badgeText = 'Gluten Free';
      else if (classes.includes('offsale')) badgeText = 'İndirim';
      else if (classes.includes('new')) badgeText = 'Yeni';
      // else nothing
    }

    const titleSpan = card.querySelector('.title-area span');
    const productName = titleSpan ? titleSpan.textContent.trim() : '';

    const quantitySpan = card.querySelector('.title-area .quantity');
    const quantity = quantitySpan ? quantitySpan.textContent.trim() : '';

    // Price: either .my-5 or in .offsale
    let price = '';
    const priceSpan = card.querySelector('.title-area .my-5');
    if (priceSpan) {
      price = priceSpan.textContent.trim();
    } else {
      const offsalePrice = card.querySelector('.offsale .font-medium');
      if (offsalePrice) {
        price = offsalePrice.textContent.trim();
      }
    }

    // Package info
    const packageDiv = card.querySelector('.title-area .quantity:last-of-type');
    let packagePrice = '';
    let packageCount = '';
    if (packageDiv) {
      const spans = packageDiv.querySelectorAll('span');
      if (spans.length >= 2) {
        packagePrice = spans[0].textContent.trim();
        packageCount = spans[1].textContent.trim();
      }
    }

    // Populate modal
    document.getElementById('modalProductImage').src = imageSrc;
    document.getElementById('modalProductBadge').textContent = badgeText;
    document.getElementById('modalProductName').textContent = productName;
    document.getElementById('modalProductDescription').textContent = quantity; // Using quantity as description
    document.getElementById('modalProductPrice').textContent = price;
    document.getElementById('modalPackagePrice').textContent = packagePrice;
    document.getElementById('modalPackageCount').textContent = packageCount;

    // Show modal
    productModal.classList.remove('hidden');
  });
});

