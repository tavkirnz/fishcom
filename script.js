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
    {title: 'Tortilla', gr: '200 gr', adet:'Koli İçi Adet: 4', price:'300TL', paket:'1200TL', img: 'yemek1.webp', link:'urun.html',},
    {title: 'Balık Köftesi', gr: '200 gr', adet:'Koli İçi Adet: 5', price:'400TL', paket:'1600TL', img: 'yemek2.webp'},
    {title: 'Kalamar', gr: '250 gr', adet:'Koli İçi Adet: 3', price:'450TL', paket:'1350TL', img: 'yemek3.webp'},
    {title: 'Karides', gr: '200 gr', adet:'Koli İçi Adet: 6', price:'500TL', paket:'3000TL', img: 'yemek4.jpeg'},
    {title: 'Somon', gr: '300 gr', adet:'Koli İçi Adet: 2', price:'600TL', paket:'1200TL', img: 'yemek5.jpeg'},
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
                  <h3 class="text-lg">${item.title}</h3>
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






























// Modal fonksiyonları
const productModal = document.getElementById('productModal');
const closeModalBtn = document.getElementById('closeModal');

// Modal açma fonksiyonu
function openProductModal(productCard) {
  const imageArea = productCard.querySelector('.image-area');
  const titleArea = productCard.querySelector('.title-area');
  
  if (!imageArea || !titleArea) {
    console.error('Ürün kartı yapısı hatalı');
    return;
  }
  
  // Ürün bilgilerini al
  const productImage = imageArea.querySelector('img')?.src || '';
  
  // Ürün adını al (ilk div içindeki ilk span)
  const productName = titleArea.querySelector('.f.jb.ic span')?.textContent || 'Ürün Adı';
  
  // Açıklamayı al (.quantity class'ı olan span)
  const productDescription = titleArea.querySelector('.quantity')?.textContent || '';
  
  // Fiyatı al (.my-5 class'ı olan span - normal fiyat veya indirimli olabilir)
  let productPrice = titleArea.querySelector('.my-5:not(.f)')?.textContent || '';
  
  // Paket bilgilerini al (son .quantity div'indeki spanlar)
  const quantityDivs = titleArea.querySelectorAll('.quantity');
  const lastQuantityDiv = quantityDivs[quantityDivs.length - 1];
  const packageInfo = lastQuantityDiv ? lastQuantityDiv.querySelectorAll('span') : [];
  const packagePrice = packageInfo[0] ? packageInfo[0].textContent : '';
  const packageCount = packageInfo[1] ? packageInfo[1].textContent : '';
  
  // Badge bilgisini al (image-area'daki ilk span - guluten-free, offsale, new)
  const badge = imageArea.querySelector('span:not(.nothing)');
  let badgeClass = '';
  let badgeText = '';
  
  if (badge && !badge.classList.contains('nothing')) {
    if (badge.classList.contains('guluten-free')) {
      badgeClass = 'guluten-free';
      badgeText = 'Glütensiz';
    } else if (badge.classList.contains('offsale')) {
      badgeClass = 'offsale';
      badgeText = 'İndirimli';
    } else if (badge.classList.contains('new')) {
      badgeClass = 'new';
      badgeText = 'Yeni';
    }
  }
  
  // İndirimli fiyat kontrolü
  const offsaleDiv = titleArea.querySelector('.offsale');
  let finalPrice = productPrice;
  if (offsaleDiv) {
    // İndirimli fiyat son span'da (font-medium text-(--fish-red))
    const discountedPrice = offsaleDiv.querySelector('span.font-medium');
    if (discountedPrice) {
      finalPrice = discountedPrice.textContent;
    }
  }
  
  // Modal içeriğini güncelle
  const modalImage = document.getElementById('modalProductImage');
  const modalName = document.getElementById('modalProductName');
  const modalDesc = document.getElementById('modalProductDescription');
  const modalPrice = document.getElementById('modalProductPrice');
  const modalPackagePrice = document.getElementById('modalPackagePrice');
  const modalPackageCount = document.getElementById('modalPackageCount');
  
  if (modalImage) modalImage.src = productImage;
  if (modalName) modalName.textContent = productName;
  if (modalDesc) modalDesc.textContent = productDescription;
  if (modalPrice) modalPrice.textContent = finalPrice;
  if (modalPackagePrice) modalPackagePrice.textContent = packagePrice;
  if (modalPackageCount) modalPackageCount.textContent = packageCount;
  
  // Badge'i güncelle
  const modalBadge = document.getElementById('modalProductBadge');
  if (modalBadge) {
    if (badgeText) {
      modalBadge.textContent = badgeText;
      modalBadge.className = `product-badge ${badgeClass}`;
      modalBadge.style.display = 'block';
    } else {
      modalBadge.style.display = 'none';
    }
  }
  
  // Modal'ı göster
  if (productModal) {
    productModal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
  }
}

// Modal kapatma fonksiyonu
function closeProductModal() {
  productModal.classList.add('hidden');
  document.body.style.overflow = 'auto';
}

// Modal kapatma eventleri
closeModalBtn.addEventListener('click', closeProductModal);

// Modal overlay'e tıklayınca kapat
productModal.addEventListener('click', (e) => {
  if (e.target === productModal) {
    closeProductModal();
  }
});

// ESC tuşu ile kapat
document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape' && !productModal.classList.contains('hidden')) {
    closeProductModal();
  }
});

// Göz ikonu butonlarına event listener ekle
// (Not: DOMContentLoaded'dan çıkarıldı, modal her zaman DOM'da olacak)
function attachEyeButtonListeners() {
  document.querySelectorAll('.eye-button').forEach(button => {
    button.removeEventListener('click', handleEyeButtonClick); // eski listener'ı temizle
    button.addEventListener('click', handleEyeButtonClick);
  });
}

function handleEyeButtonClick(e) {
  e.stopPropagation(); // Kart tıklama eventini engelle
  const productCard = this.closest('.products-card');
  openProductModal(productCard);
}

// İlk yüklemede ve dinamik olarak eklenen kartlara listener ekle
attachEyeButtonListeners();

// Sayfa yüklendiğinde de bir kez daha ekle (güvenlik için)
document.addEventListener('DOMContentLoaded', function() {
  attachEyeButtonListeners();
});

// Modal içindeki favori butonuna event listener ekle
document.getElementById('modalFavorite').addEventListener('click', function() {
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

// Modal içindeki sepete ekle butonuna event listener ekle
document.querySelector('.add-to-cart-btn').addEventListener('click', function() {
  const icon = this.querySelector('i');
  if(icon.classList.contains('fa-opencart')){
    icon.classList.remove('fa-opencart','fa-brands');
    icon.classList.add('fa-check','fa-solid','animate-bounce');
    icon.style.color = 'var(--fish-green)';
    this.innerHTML = '<i class="fa-check fa-solid animate-bounce"></i> Sepete Eklendi!';
    this.style.background = 'var(--fish-green)';
    
    setTimeout(function(){
      icon.classList.remove('animate-bounce');
    }, 600);
    
    // 2 saniye sonra eski haline döndür
    setTimeout(() => {
      this.innerHTML = '<i class="fa-brands fa-opencart"></i> Sepete Ekle';
      this.style.background = 'linear-gradient(135deg, var(--fish-blue), var(--fish-teal))';
    }, 2000);
  }
});

