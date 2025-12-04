const productData = {
  'Klasik': [
    { name: 'Balık Köftesi Klasik', img: 'yemek1.webp', quantity: '200gr, 4 adet', price: '300 TL', discount: null, packagePrice: '1200 TL / Paket', packageCount: 'Koli İçi Adet: 20' },
    { name: 'Balık Köftesi Baharatlı', img: 'yemek2.webp', quantity: '200gr, 4 adet', price: '320 TL', discount: null, packagePrice: '1280 TL / Paket', packageCount: 'Koli İçi Adet: 20' },
    { name: 'Balık Köftesi Fırın', img: 'yemek3.webp', quantity: '200gr, 4 adet', price: '350 TL', discount: { percent: 25, oldPrice: '500 TL' }, packagePrice: '1400 TL / Paket', packageCount: 'Koli İçi Adet: 20' },
    { name: 'Balık Köftesi Izgara', img: 'yemek1.webp', quantity: '200gr, 4 adet', price: '330 TL', discount: null, packagePrice: '1320 TL / Paket', packageCount: 'Koli İçi Adet: 20' },
    { name: 'Balık Köftesi Soğanlı', img: 'yemek2.webp', quantity: '200gr, 4 adet', price: '310 TL', discount: null, packagePrice: '1240 TL / Paket', packageCount: 'Koli İçi Adet: 20' },
    { name: 'Balık Köftesi Acılı', img: 'yemek3.webp', quantity: '200gr, 4 adet', price: '340 TL', discount: { percent: 20, oldPrice: '450 TL' }, packagePrice: '1360 TL / Paket', packageCount: 'Koli İçi Adet: 20' },
    { name: 'Balık Köftesi Klasik Büyük', img: 'yemek1.webp', quantity: '250gr, 4 adet', price: '380 TL', discount: null, packagePrice: '1520 TL / Paket', packageCount: 'Koli İçi Adet: 16' },
    { name: 'Balık Köftesi Özel', img: 'yemek2.webp', quantity: '200gr, 4 adet', price: '360 TL', discount: null, packagePrice: '1440 TL / Paket', packageCount: 'Koli İçi Adet: 20' }
  ],
  'Retail': [
    { name: 'Tortilla Balıklı', img: 'yemek4.jpeg', quantity: '200gr, 4 adet', price: '280 TL', discount: null, packagePrice: '1120 TL / Paket', packageCount: 'Koli İçi Adet: 20' },
    { name: 'Kalamar Halkası', img: 'yemek5.jpeg', quantity: '250gr, 6 adet', price: '450 TL', discount: { percent: 15, oldPrice: '550 TL' }, packagePrice: '1800 TL / Paket', packageCount: 'Koli İçi Adet: 15' },
    { name: 'Karides Tava', img: 'yemek6.webp', quantity: '200gr, 8 adet', price: '500 TL', discount: null, packagePrice: '2000 TL / Paket', packageCount: 'Koli İçi Adet: 12' },
    { name: 'Somon Fileto', img: 'yemek7.jpeg', quantity: '300gr, 2 adet', price: '600 TL', discount: { percent: 10, oldPrice: '700 TL' }, packagePrice: '1200 TL / Paket', packageCount: 'Koli İçi Adet: 10' },
    { name: 'Levrek Izgara', img: 'yemek8.webp', quantity: '250gr, 3 adet', price: '550 TL', discount: null, packagePrice: '1650 TL / Paket', packageCount: 'Koli İçi Adet: 12' },
    { name: 'Çipura Fırın', img: 'yemek9.webp', quantity: '300gr, 2 adet', price: '580 TL', discount: null, packagePrice: '1160 TL / Paket', packageCount: 'Koli İçi Adet: 10' },
    { name: 'Mürekkep Balığı', img: 'yemek10.webp', quantity: '200gr, 5 adet', price: '420 TL', discount: { percent: 30, oldPrice: '650 TL' }, packagePrice: '1680 TL / Paket', packageCount: 'Koli İçi Adet: 18' },
    { name: 'Ahtapot Salatası', img: 'yemek1.webp', quantity: '250gr, 4 adet', price: '480 TL', discount: null, packagePrice: '1920 TL / Paket', packageCount: 'Koli İçi Adet: 16' }
  ],
  'Marinat': [
    { name: 'Balık Köftesi Marinatlı', img: 'yemek2.webp', quantity: '200gr, 4 adet', price: '350 TL', discount: null, packagePrice: '1400 TL / Paket', packageCount: 'Koli İçi Adet: 20' },
    { name: 'Somon Marinat', img: 'yemek3.webp', quantity: '300gr, 2 adet', price: '650 TL', discount: { percent: 20, oldPrice: '850 TL' }, packagePrice: '1300 TL / Paket', packageCount: 'Koli İçi Adet: 10' },
    { name: 'Levrek Marinat', img: 'yemek4.jpeg', quantity: '250gr, 3 adet', price: '600 TL', discount: null, packagePrice: '1800 TL / Paket', packageCount: 'Koli İçi Adet: 12' },
    { name: 'Çipura Marinat', img: 'yemek5.jpeg', quantity: '300gr, 2 adet', price: '620 TL', discount: null, packagePrice: '1240 TL / Paket', packageCount: 'Koli İçi Adet: 10' },
    { name: 'Kalamar Marinat', img: 'yemek6.webp', quantity: '250gr, 6 adet', price: '480 TL', discount: { percent: 25, oldPrice: '680 TL' }, packagePrice: '1920 TL / Paket', packageCount: 'Koli İçi Adet: 15' },
    { name: 'Karides Marinat', img: 'yemek7.jpeg', quantity: '200gr, 8 adet', price: '550 TL', discount: null, packagePrice: '2200 TL / Paket', packageCount: 'Koli İçi Adet: 12' },
    { name: 'Mürekkep Marinat', img: 'yemek8.webp', quantity: '200gr, 5 adet', price: '450 TL', discount: null, packagePrice: '1800 TL / Paket', packageCount: 'Koli İçi Adet: 18' },
    { name: 'Ahtapot Marinat', img: 'yemek9.webp', quantity: '250gr, 4 adet', price: '520 TL', discount: { percent: 15, oldPrice: '650 TL' }, packagePrice: '2080 TL / Paket', packageCount: 'Koli İçi Adet: 16' }
  ],
  'Skinpack': [
    { name: 'Balık Köftesi Skinpack', img: 'yemek10.webp', quantity: '200gr, 4 adet', price: '320 TL', discount: null, packagePrice: '1280 TL / Paket', packageCount: 'Koli İçi Adet: 20' },
    { name: 'Somon Skinpack', img: 'yemek1.webp', quantity: '300gr, 2 adet', price: '680 TL', discount: { percent: 10, oldPrice: '780 TL' }, packagePrice: '1360 TL / Paket', packageCount: 'Koli İçi Adet: 10' },
    { name: 'Levrek Skinpack', img: 'yemek2.webp', quantity: '250gr, 3 adet', price: '620 TL', discount: null, packagePrice: '1860 TL / Paket', packageCount: 'Koli İçi Adet: 12' },
    { name: 'Çipura Skinpack', img: 'yemek3.webp', quantity: '300gr, 2 adet', price: '640 TL', discount: null, packagePrice: '1280 TL / Paket', packageCount: 'Koli İçi Adet: 10' },
    { name: 'Kalamar Skinpack', img: 'yemek4.jpeg', quantity: '250gr, 6 adet', price: '500 TL', discount: { percent: 20, oldPrice: '650 TL' }, packagePrice: '2000 TL / Paket', packageCount: 'Koli İçi Adet: 15' },
    { name: 'Karides Skinpack', img: 'yemek5.jpeg', quantity: '200gr, 8 adet', price: '570 TL', discount: null, packagePrice: '2280 TL / Paket', packageCount: 'Koli İçi Adet: 12' },
    { name: 'Mürekkep Skinpack', img: 'yemek6.webp', quantity: '200gr, 5 adet', price: '470 TL', discount: null, packagePrice: '1880 TL / Paket', packageCount: 'Koli İçi Adet: 18' },
    { name: 'Ahtapot Skinpack', img: 'yemek7.jpeg', quantity: '250gr, 4 adet', price: '540 TL', discount: { percent: 25, oldPrice: '750 TL' }, packagePrice: '2160 TL / Paket', packageCount: 'Koli İçi Adet: 16' }
  ],
  'Gurme': [
    { name: 'Gurme Balık Köftesi', img: 'yemek8.webp', quantity: '200gr, 4 adet', price: '400 TL', discount: null, packagePrice: '1600 TL / Paket', packageCount: 'Koli İçi Adet: 20' },
    { name: 'Gurme Somon', img: 'yemek9.webp', quantity: '300gr, 2 adet', price: '750 TL', discount: { percent: 15, oldPrice: '900 TL' }, packagePrice: '1500 TL / Paket', packageCount: 'Koli İçi Adet: 10' },
    { name: 'Gurme Levrek', img: 'yemek10.webp', quantity: '250gr, 3 adet', price: '700 TL', discount: null, packagePrice: '2100 TL / Paket', packageCount: 'Koli İçi Adet: 12' },
    { name: 'Gurme Çipura', img: 'yemek1.webp', quantity: '300gr, 2 adet', price: '720 TL', discount: null, packagePrice: '1440 TL / Paket', packageCount: 'Koli İçi Adet: 10' },
    { name: 'Gurme Kalamar', img: 'yemek2.webp', quantity: '250gr, 6 adet', price: '580 TL', discount: { percent: 20, oldPrice: '750 TL' }, packagePrice: '2320 TL / Paket', packageCount: 'Koli İçi Adet: 15' },
    { name: 'Gurme Karides', img: 'yemek3.webp', quantity: '200gr, 8 adet', price: '650 TL', discount: null, packagePrice: '2600 TL / Paket', packageCount: 'Koli İçi Adet: 12' },
    { name: 'Gurme Mürekkep', img: 'yemek4.jpeg', quantity: '200gr, 5 adet', price: '550 TL', discount: null, packagePrice: '2200 TL / Paket', packageCount: 'Koli İçi Adet: 18' },
    { name: 'Gurme Ahtapot', img: 'yemek5.jpeg', quantity: '250gr, 4 adet', price: '620 TL', discount: { percent: 10, oldPrice: '720 TL' }, packagePrice: '2480 TL / Paket', packageCount: 'Koli İçi Adet: 16' }
  ],
  'Füme': [
    { name: 'Füme Balık Köftesi', img: 'yemek6.webp', quantity: '200gr, 4 adet', price: '380 TL', discount: null, packagePrice: '1520 TL / Paket', packageCount: 'Koli İçi Adet: 20' },
    { name: 'Füme Somon', img: 'yemek7.jpeg', quantity: '300gr, 2 adet', price: '720 TL', discount: { percent: 25, oldPrice: '1000 TL' }, packagePrice: '1440 TL / Paket', packageCount: 'Koli İçi Adet: 10' },
    { name: 'Füme Levrek', img: 'yemek8.webp', quantity: '250gr, 3 adet', price: '680 TL', discount: null, packagePrice: '2040 TL / Paket', packageCount: 'Koli İçi Adet: 12' },
    { name: 'Füme Çipura', img: 'yemek9.webp', quantity: '300gr, 2 adet', price: '700 TL', discount: null, packagePrice: '1400 TL / Paket', packageCount: 'Koli İçi Adet: 10' },
    { name: 'Füme Kalamar', img: 'yemek10.webp', quantity: '250gr, 6 adet', price: '560 TL', discount: { percent: 15, oldPrice: '680 TL' }, packagePrice: '2240 TL / Paket', packageCount: 'Koli İçi Adet: 15' },
    { name: 'Füme Karides', img: 'yemek1.webp', quantity: '200gr, 8 adet', price: '630 TL', discount: null, packagePrice: '2520 TL / Paket', packageCount: 'Koli İçi Adet: 12' },
    { name: 'Füme Mürekkep', img: 'yemek2.webp', quantity: '200gr, 5 adet', price: '530 TL', discount: null, packagePrice: '2120 TL / Paket', packageCount: 'Koli İçi Adet: 18' },
    { name: 'Füme Ahtapot', img: 'yemek3.webp', quantity: '250gr, 4 adet', price: '600 TL', discount: { percent: 20, oldPrice: '780 TL' }, packagePrice: '2400 TL / Paket', packageCount: 'Koli İçi Adet: 16' }
  ],
  'Hamurlular': [
    { name: 'Balık Köftesi Hamurlu', img: 'yemek4.jpeg', quantity: '200gr, 4 adet', price: '360 TL', discount: null, packagePrice: '1440 TL / Paket', packageCount: 'Koli İçi Adet: 20' },
    { name: 'Somon Hamurlu', img: 'yemek5.jpeg', quantity: '300gr, 2 adet', price: '730 TL', discount: { percent: 10, oldPrice: '850 TL' }, packagePrice: '1460 TL / Paket', packageCount: 'Koli İçi Adet: 10' },
    { name: 'Levrek Hamurlu', img: 'yemek6.webp', quantity: '250gr, 3 adet', price: '690 TL', discount: null, packagePrice: '2070 TL / Paket', packageCount: 'Koli İçi Adet: 12' },
    { name: 'Çipura Hamurlu', img: 'yemek7.jpeg', quantity: '300gr, 2 adet', price: '710 TL', discount: null, packagePrice: '1420 TL / Paket', packageCount: 'Koli İçi Adet: 10' },
    { name: 'Kalamar Hamurlu', img: 'yemek8.webp', quantity: '250gr, 6 adet', price: '570 TL', discount: { percent: 30, oldPrice: '850 TL' }, packagePrice: '2280 TL / Paket', packageCount: 'Koli İçi Adet: 15' },
    { name: 'Karides Hamurlu', img: 'yemek9.webp', quantity: '200gr, 8 adet', price: '640 TL', discount: null, packagePrice: '2560 TL / Paket', packageCount: 'Koli İçi Adet: 12' },
    { name: 'Mürekkep Hamurlu', img: 'yemek10.webp', quantity: '200gr, 5 adet', price: '540 TL', discount: null, packagePrice: '2160 TL / Paket', packageCount: 'Koli İçi Adet: 18' },
    { name: 'Ahtapot Hamurlu', img: 'yemek1.webp', quantity: '250gr, 4 adet', price: '610 TL', discount: { percent: 15, oldPrice: '750 TL' }, packagePrice: '2440 TL / Paket', packageCount: 'Koli İçi Adet: 16' }
  ],
  'Tümünü Göster': [
    { name: 'Balık Köftesi Mix', img: 'yemek2.webp', quantity: '200gr, 4 adet', price: '340 TL', discount: null, packagePrice: '1360 TL / Paket', packageCount: 'Koli İçi Adet: 20' },
    { name: 'Somon Fileto', img: 'yemek3.webp', quantity: '300gr, 2 adet', price: '670 TL', discount: { percent: 20, oldPrice: '850 TL' }, packagePrice: '1340 TL / Paket', packageCount: 'Koli İçi Adet: 10' },
    { name: 'Levrek Izgara', img: 'yemek4.jpeg', quantity: '250gr, 3 adet', price: '630 TL', discount: null, packagePrice: '1890 TL / Paket', packageCount: 'Koli İçi Adet: 12' },
    { name: 'Çipura Fırın', img: 'yemek5.jpeg', quantity: '300gr, 2 adet', price: '650 TL', discount: null, packagePrice: '1300 TL / Paket', packageCount: 'Koli İçi Adet: 10' },
    { name: 'Kalamar Halkası', img: 'yemek6.webp', quantity: '250gr, 6 adet', price: '520 TL', discount: { percent: 25, oldPrice: '720 TL' }, packagePrice: '2080 TL / Paket', packageCount: 'Koli İçi Adet: 15' },
    { name: 'Karides Tava', img: 'yemek7.jpeg', quantity: '200gr, 8 adet', price: '590 TL', discount: null, packagePrice: '2360 TL / Paket', packageCount: 'Koli İçi Adet: 12' },
    { name: 'Mürekkep Balığı', img: 'yemek8.webp', quantity: '200gr, 5 adet', price: '490 TL', discount: null, packagePrice: '1960 TL / Paket', packageCount: 'Koli İçi Adet: 18' },
    { name: 'Ahtapot Salatası', img: 'yemek9.webp', quantity: '250gr, 4 adet', price: '570 TL', discount: { percent: 10, oldPrice: '650 TL' }, packagePrice: '2280 TL / Paket', packageCount: 'Koli İçi Adet: 16' }
  ]
};

function renderProducts(category, animate = true) {
  const productsArea = document.querySelector('.products-area');
  const products = productData[category];
  let html = '';
  products.forEach(product => {
    let badge = '<span class="nothing"></span>';
    if (product.discount) badge = '<span class="offsale"></span>';
    let priceHtml = `<span class="my-5 font-medium">${product.price}</span>`;
    if (product.discount) {
      priceHtml = `<div class="offsale f ic">
        <i class="fa-solid fa-caret-down text-(--fish-red) text-4xl"></i>
        <span class="ml-1">%${product.discount.percent}</span>
        <span class="line-through opacity-60 ml-2">${product.discount.oldPrice}</span>
        <span class="font-medium text-(--fish-red) ml-2">${product.price}</span>
      </div>`;
    }
    html += `
      <div class="products-box group">
        <div class="products-card" data-href="#">
          <div class="image-area r">
            ${badge}
            <img src="assets/images/${product.img}" alt="">
            <div class="fast-buttons">
              <button>
                <i class="fa-regular fa-eye text-lg"></i>
              </button>
              <button class="opencart-btn">
                <i class="fa-brands fa-opencart text-lg"></i>
              </button>
            </div>
          </div>
          <div class="title-area">
            <div class="f jb ic">
              <span>${product.name}</span>
              <i class="fa-regular fa-heart favorite-icon"></i>
            </div>
            <span class="quantity">${product.quantity}</span>
            ${priceHtml}
            <div class="f jb ic quantity">
              <span>${product.packagePrice}</span>
              <span>${product.packageCount}</span>
            </div>
          </div>
        </div>
      </div>
    `;
  });

  if (animate) {
    // Fade out
    productsArea.style.opacity = '0';
    productsArea.style.transform = 'translateY(20px)';
    setTimeout(() => {
      productsArea.innerHTML = html;
      attachProductEvents();
      // Fade in
      productsArea.style.opacity = '1';
      productsArea.style.transform = 'translateY(0)';
    }, 500);
  } else {
    productsArea.innerHTML = html;
    attachProductEvents();
  }
}

function attachProductEvents() {
  // Favorite icons
  document.querySelectorAll('.favorite-icon').forEach(function (icon) {
    icon.addEventListener('click', function () {
      if (this.classList.contains('fa-regular')) {
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

  // Opencart buttons
  document.querySelectorAll('.opencart-btn').forEach(function (btn) {
    btn.addEventListener('click', function () {
      const icon = btn.querySelector('i');
      if (icon.classList.contains('fa-opencart')) {
        icon.classList.remove('fa-opencart', 'fa-brands');
        icon.classList.add('fa-check', 'fa-solid', 'animate-bounce');
        icon.style.color = 'var(--fish-green)';
        setTimeout(function () {
          icon.classList.remove('animate-bounce');
        }, 600);
      } else {
        icon.classList.remove('fa-check', 'fa-solid');
        icon.classList.add('fa-opencart', 'fa-brands');
        icon.style.color = '';
      }
    });
  });

  // Product card clicks
  document.querySelectorAll('.products-card').forEach(card => {
    card.addEventListener('click', e => {
      if (e.target.closest('button') || e.target.closest('.favorite-icon')) return;
      const url = card.dataset.href;
      if (url) {
        window.location.href = url;
      }
    });
  });

  // Eye button for modal
  document.querySelectorAll('.fast-buttons button:first-child').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.stopPropagation();
      const card = btn.closest('.products-card');
      if (!card) return;
      const img = card.querySelector('.image-area img');
      const imageSrc = img ? img.src : '';
      const badgeSpan = card.querySelector('.image-area span:not(.fast-buttons)');
      let badgeText = '';
      if (badgeSpan) {
        const classes = badgeSpan.className.split(' ');
        if (classes.includes('guluten-free')) badgeText = 'Gluten Free';
        else if (classes.includes('offsale')) badgeText = 'İndirim';
        else if (classes.includes('new')) badgeText = 'Yeni';
      }
      const titleSpan = card.querySelector('.title-area span');
      const productName = titleSpan ? titleSpan.textContent.trim() : '';
      const quantitySpan = card.querySelector('.title-area .quantity');
      const quantity = quantitySpan ? quantitySpan.textContent.trim() : '';
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
      document.getElementById('main-img').src = imageSrc;
      document.querySelector('.content-title h2').textContent = productName;
      document.getElementById('price').textContent = price.replace('TL', '').trim();
      productModal.classList.remove('hidden');
    });
  });
}

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
if (navbarList) {
  navbarList.querySelectorAll('li').forEach(li => {
    li.addEventListener('click', function (e) {
      e.preventDefault();
      navbarList.querySelectorAll('li').forEach(item => {
        item.classList.remove('active');
      });
      this.classList.add('active');
      const category = this.querySelector('a').textContent.trim();
      renderProducts(category);
    });
  });
}
const openHeader = document.querySelector('.open-header-nav');
const openNav = document.querySelector('.open-nav');
const headerNav = document.querySelector('.header-nav');
document.querySelectorAll('#hamburger-menu').forEach(function (menu) {
  menu.addEventListener('click', function () {
    const isOpen = openHeader.classList.contains("open")
    if (isOpen) {
      openHeader.classList.remove('open');
    }
    else {
      openHeader.classList.add('open');
    }
  });
});

document.body.addEventListener('click', e => {
  // Eğer tıklanan yer openHeader veya içindeyse hiçbir şey yapma
  if (!openNav.contains(e.target) && !headerNav.contains(e.target)) {
    openHeader.classList.remove('open');
  }
});

// Measure actual heights on load
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.sss-title-bottom').forEach(function (bottom) {
    // Temporarily open to measure height
    bottom.classList.add('open');
    const height = bottom.scrollHeight;
    bottom.setAttribute('data-height', height + 'px');
    bottom.classList.remove('open');
  });
});

document.querySelectorAll('.sss-card').forEach(function (card) {
  card.addEventListener('click', function () {
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

document.querySelectorAll('.favorite-icon').forEach(function (icon) {
  icon.addEventListener('click', function () {
    if (this.classList.contains('fa-regular')) {
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

document.querySelectorAll('.opencart-btn').forEach(function (btn) {
  btn.addEventListener('click', function () {
    const icon = btn.querySelector('i');
    if (icon.classList.contains('fa-opencart')) {
      icon.classList.remove('fa-opencart', 'fa-brands');
      icon.classList.add('fa-check', 'fa-solid', 'animate-bounce');
      icon.style.color = 'var(--fish-green)';
      setTimeout(function () {
        icon.classList.remove('animate-bounce');
      }, 600);
    } else {
      icon.classList.remove('fa-check', 'fa-solid');
      icon.classList.add('fa-opencart', 'fa-brands');
      icon.style.color = '';
    }
  });
});

document.querySelectorAll('.specials-btn').forEach(function (btn) {
  btn.addEventListener('mouseenter', function () {
    btn.querySelector('.specials-btn-bg').style.width = '100%';
  });
  btn.addEventListener('mouseleave', function () {
    btn.querySelector('.specials-btn-bg').style.width = '0';
  });
});

// Inject a favorite (star) button into each recipe-card and wire up toggle behavior
document.querySelectorAll('.recipe-card').forEach(function (card) {
  // create button
  const btn = document.createElement('button');
  btn.className = 'recipe-fav-btn';
  btn.type = 'button';
  btn.setAttribute('aria-pressed', 'false');
  btn.setAttribute('aria-label', 'Favorilere ekle');
  // use FontAwesome empty star by default
  btn.innerHTML = '<i class="fa-regular fa-star"></i>';
  // prepend to card so it's on top-left
  card.appendChild(btn);

  function toggleFav() {
    const icon = btn.querySelector('i');
    const isActive = btn.classList.toggle('active');
    if (isActive) {
      // filled star
      icon.classList.remove('fa-regular');
      icon.classList.add('fa-solid');
      btn.setAttribute('aria-pressed', 'true');
      btn.setAttribute('aria-label', 'Favorilerden çıkar');
    } else {
      icon.classList.remove('fa-solid');
      icon.classList.add('fa-regular');
      btn.setAttribute('aria-pressed', 'false');
      btn.setAttribute('aria-label', 'Favorilere ekle');
      // remove focus so an empty star will hide immediately when mouse leaves
      try { btn.blur(); } catch (e) { }
    }
  }

  btn.addEventListener('click', function (e) {
    e.stopPropagation();
    toggleFav();
  });

  // keyboard accessibility: toggle on Enter / Space
  btn.addEventListener('keydown', function (e) {
    if (e.key === 'Enter' || e.key === ' ') {
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
  { title: 'Tortilla', gr: '200 gr', adet: 'Koli İçi Adet: 4', price: '300TL', paket: '1200TL', img: 'yemek1.webp', link: 'urundetay.php' },
  { title: 'Balık Köftesi', gr: '200 gr', adet: 'Koli İçi Adet: 5', price: '400TL', paket: '1600TL', img: 'yemek2.webp', link: 'urundetay.php' },
  { title: 'Kalamar', gr: '250 gr', adet: 'Koli İçi Adet: 3', price: '450TL', paket: '1350TL', img: 'yemek3.webp', link: 'urundetay.php' },
  { title: 'Karides', gr: '200 gr', adet: 'Koli İçi Adet: 6', price: '500TL', paket: '3000TL', img: 'yemek4.jpeg', link: 'urundetay.php' },
  { title: 'Somon', gr: '300 gr', adet: 'Koli İçi Adet: 2', price: '600TL', paket: '1200TL', img: 'yemek5.jpeg', link: 'urundetay.php' },
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
const cart = document.getElementById('cart');
const closeCartModalBtn = document.getElementById('closeCartModal');

// Open cart modal
document.querySelectorAll('.user-cart a').forEach(cartLink => {
  cartLink.addEventListener('click', (e) => {
    e.preventDefault();
    cartModal.classList.add('active');
    cart.style.transform = 'translateX(0)';
  });
});

// Close cart modal on button click
closeCartModalBtn.addEventListener('click', () => {
  cartModal.classList.remove('active');
  cart.style.transform = 'translateX(100%)';
});

// Close cart modal on overlay click
cartModal.addEventListener('click', (e) => {
  if (e.target === cartModal) {
    cartModal.classList.remove('active');
    cart.style.transform = 'translateX(100%)';
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
    document.getElementById('main-img').src = imageSrc;
    document.querySelector('.content-title h2').textContent = productName;
    document.getElementById('price').textContent = price.replace('TL', '').trim();

    // Show modal
    productModal.classList.remove('hidden');
  });
});

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