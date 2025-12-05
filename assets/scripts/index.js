
const buttons = document.querySelectorAll('#button-image');




function changeText(baslik, yazi) {
    const baslikEl = document.getElementById("baslik");
    const yaziEl = document.getElementById("yazi");
    const cizgiEl = document.getElementById("cizgi");

    baslikEl.classList.remove("show");
    yaziEl.classList.remove("show");
    cizgiEl.classList.remove("show");

    baslikEl.classList.add("fade");
    yaziEl.classList.add("fade");
    cizgiEl.classList.add("fade");

    setTimeout(() => {
        baslikEl.textContent = baslik;
        yaziEl.textContent = yazi;

        baslikEl.classList.remove("fade");
        yaziEl.classList.remove("fade");
        cizgiEl.classList.remove("fade");

        baslikEl.classList.add("show");
        yaziEl.classList.add("show");
        cizgiEl.classList.add("show");
    }, 400);
}

const tabData = {
    aciklama: {
        baslik: "Ürün Açıklaması",
        yazi: "Buraya ürün açıklaması gelecek."
    },
    bilgi: {
        baslik: "Ürün Bilgisi",
        yazi: "Ürün bilgisi içerikleri burada gösterilir."
    },
    besin: {
        baslik: "Besin Değerleri",
        yazi: "Besin değerleri tablosu burada yer alacak."
    },
    kimyasal: {
        baslik: "Kimyasal Parametreler",
        yazi: "Kimyasal analiz sonuçları burada görüntülenir."
    },
    mikro: {
        baslik: "Mikrobiyolojik Parametreler",
        yazi: "Mikrobiyolojik parametre içerikleri."
    },
    yasal: {
        baslik: "Yasal Kriter",
        yazi: "Ürünün yasal kriterleri buraya yazılacak."
    },
    agirlik: {
        baslik: "Net Ağırlık Ölçüm Tanımlaması",
        yazi: "Tanımlar ve kurallar burada yer alır."
    },
    alerjen: {
        baslik: "Alerjenler",
        yazi: "Üründe bulunan potansiyel alerjenler."
    },
    medya: {
        baslik: "Medya Kiti",
        yazi: "Medya materyalleri burada gösterilir."
    },
    ödeme: {
        baslik: "Ödeme Seçenekleri",
        yazi: "Ödeme yöntemleri ve bilgiler."
    }
};

Object.keys(tabData).forEach(id => {
    const buton = document.getElementById(id);
    if (buton) {
        buton.addEventListener("click", function () {
            changeText(tabData[id].baslik, tabData[id].yazi);
        });
    }
});

const items = document.querySelectorAll('.urundetay-hovers');

items.forEach(item => {
    item.addEventListener('click', function () {
        items.forEach(i => i.classList.remove('active'));
        this.classList.add('active');
    });
});

document.addEventListener("DOMContentLoaded", function () {

    const buttons = document.querySelectorAll(".urundetay-hovers");

    buttons.forEach(btn => btn.classList.remove("active"));

    const besinBtn = document.getElementById("besin");
    if (besinBtn) {
        besinBtn.classList.add("active");
    }
});

const uyariSection = document.getElementById("uyari");
const toplamabtn = document.getElementById("ekle");
const cikarbtn = document.getElementById("cikar");
const degisensayi = document.getElementById("adet");
const fiyatSpan = document.getElementById("price");

let sayi = degisensayi.value;
let birimFiyat = 3000;

function fiyatiGuncelle() {
    const toplam = birimFiyat * sayi;
    fiyatSpan.textContent = toplam;

    // 5000 TL üzerindeyse gözükmesin ama yerini korusun
    if (toplam > 5000) {
        uyariSection.style.visibility = "hidden";
    } else {
        uyariSection.style.visibility = "visible";
    }
}

// Başlangıç
fiyatiGuncelle();

// Radio butonları
const radioButtons = document.querySelectorAll("input[name='secim']");

radioButtons.forEach(radio => {
    radio.addEventListener("change", function () {
        birimFiyat = parseInt(this.value);
        fiyatiGuncelle();
    });
});

toplamabtn.addEventListener("click", function () {
    sayi++;
    degisensayi.value = sayi;
    fiyatiGuncelle();
});

cikarbtn.addEventListener("click", function () {
    sayi--;
    if (sayi < 1) sayi = 1;
    degisensayi.value = sayi;
    fiyatiGuncelle();
});


// Certificate Modal Functionality
const certificates = {
    cert1: {
        title: 'Sertifika 1',
        pdf: 'assets/certificates/s1.pdf'
    },
    cert2: {
        title: 'Sertifika 2',
        pdf: 'assets/certificates/s1.pdf'
    },
    cert3: {
        title: 'Sertifika 3',
        pdf: 'assets/certificates/s1.pdf'
    }
};

document.querySelectorAll('.certificate-btn').forEach(button => {
    button.addEventListener('click', function () {
        const certId = this.id;
        const cert = certificates[certId];

        if (cert) {
            document.getElementById('certificateTitle').textContent = cert.title;
            document.getElementById('pdfEmbed').src = cert.pdf;
            document.getElementById('certificateModal').classList.remove('hidden');
        }
    });
});

document.getElementById('closeCertificateModal').addEventListener('click', function () {
    document.getElementById('certificateModal').classList.add('hidden');
});

// Close modal when clicking outside
document.getElementById('certificateModal').addEventListener('click', function (event) {
    if (event.target === this) {
        this.classList.add('hidden');
    }
});

