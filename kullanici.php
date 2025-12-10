<head>
    <?php include 'includes/head-links.php' ?>
    <title>Denizev | Destek</title>
    <link rel="stylesheet" href="assets/css/destek.css">
    <link rel="stylesheet" href="assets/css/kullanici.css">
</head>
<body>
    <body>
    <?php include "includes/header.php" ?>
    <?php
    $title = "Destek";
    $crumb = " / Destek";
    include "includes/breadcrumb.php"
        ?>
    <section class="flex justify-center pages-content">
        <div class="container c-s">
            
            <div class="flex gap-10">
                <?php
                $active = "Destek";
                include "includes/leftmenu.php"
                    ?>
                    
                <div class="kullanici">
                    <h5>Bilgilerim</h5>
                    <form action="">
                        <div class="kullanici-form-hor">
                            <div class="grid w-full ">
                                <span class="form-name">Adınız</span>
                                <input type="text" class="kullanici-inputs">
                            </div>
                            <div class="grid w-full">
                                <span class="form-name">Soy Adınız</span>
                                <input type="text" class="kullanici-inputs">
                            </div>
                        </div>
                        <div class="kullanici-form-hor">
                            <div class="grid w-full ">
                                <span class="form-name">E-Posta</span>
                                <input type="text" class="kullanici-inputs">
                            </div>
                            <div class="grid w-full">
                                <span class="form-name">Telefon</span>
                                <input type="text" class="kullanici-inputs">
                            </div>
                        </div>
                        <h5>Şifre Değişikliği</h5>
                        <div class="kullanici-form-hor">
                            <div class="grid w-full ">
                                <span class="form-name">Şifreniz</span>
                                <input type="text" class="kullanici-inputs">
                            </div>
                        </div>
                        <div class="kullanici-form-hor">
                            <div class="grid w-full ">
                                <span class="form-name">Yeni Şifreniz</span>
                                <input type="text" class="kullanici-inputs">
                            </div>
                        </div>
                        <div class="kullanici-form-hor">
                            <div class="grid w-full ">
                                <span class="form-name">Yeni Şifrenizi Doğrulayın</span>
                                <input type="text" class="kullanici-inputs">
                            </div>
                        </div>
                        <div class="kullanici-form-hor">
                            <div class="grid w-full">
                                <button class="kullanici-buton">
                                    Gönder
                                </button>
                            </div>  
                        </div>
                    </form>
                </div>
                
            </div>
                <div class="f jb ic">
                    <div id="minefield"></div>
                </div>
        </div>
    </section>
    <?php include "includes/footer.php" ?>
    <?php include "includes/product-info-modal.php" ?>
    <?php include "includes/sepet-modal.php" ?>
    <?php include "includes/whatsapp-contact.php" ?>
    <script>
        const size = 10;
const mineCount = 15;
let field = [];
let minefieldDiv = document.getElementById("minefield");

function createField() {
  field = [];
  minefieldDiv.innerHTML = "";
  let mines = [];

  // Rastgele mayın yerleştir
  while (mines.length < mineCount) {
    let pos = Math.floor(Math.random() * size * size);
    if (!mines.includes(pos)) mines.push(pos);
  }

  // Hücreleri oluştur
  for (let i = 0; i < size * size; i++) {
    const cell = {
      index: i,
      isMine: mines.includes(i),
      revealed: false,
      flagged: false
    };
    field.push(cell);

    let cellDiv = document.createElement("div");
    cellDiv.classList.add("cell");
    cellDiv.dataset.index = i;

    cellDiv.addEventListener("click", leftClick);
    cellDiv.addEventListener("contextmenu", rightClick);

    minefieldDiv.appendChild(cellDiv);
  }
}

function getNeighbors(index) {
  const row = Math.floor(index / size);
  const col = index % size;
  let neighbors = [];

  for (let r = -1; r <= 1; r++) {
    for (let c = -1; c <= 1; c++) {
      if (r === 0 && c === 0) continue;
      let nr = row + r, nc = col + c;
      if (nr >= 0 && nr < size && nc >= 0 && nc < size) {
        neighbors.push(nr * size + nc);
      }
    }
  }
  return neighbors;
}

function leftClick(e) {
  let index = parseInt(e.target.dataset.index);
  reveal(index);
}

function rightClick(e) {
  e.preventDefault();
  let index = parseInt(e.target.dataset.index);
  let cell = field[index];

  if (cell.revealed) return;

  cell.flagged = !cell.flagged;
  e.target.classList.toggle("flag");
}

function reveal(index) {
  let cell = field[index];
  if (cell.revealed || cell.flagged) return;

  cell.revealed = true;
  let div = minefieldDiv.children[index];
  div.classList.add("revealed");

  if (cell.isMine) {
    div.classList.add("mine");
    div.innerText = "💣";
    alert("Mayına bastın!");
    showAllMines();
    return;
  }

  let neighbors = getNeighbors(index);
  let mineNumber = neighbors.filter(i => field[i].isMine).length;

  if (mineNumber > 0) {
    div.innerText = mineNumber;
  } else {
    neighbors.forEach(reveal);
  }
}

function showAllMines() {
  field.forEach((c, i) => {
    if (c.isMine) {
      let d = minefieldDiv.children[i];
      d.classList.add("mine");
      d.innerText = "💣";
    }
  });
}

function resetGame() {
  createField();
}

createField();

    </script>
    <script src="assets/scripts/script.js"></script>
</body>
</body>
</html>