// item: 0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16
// 1: 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16

// Tạo một mảng sản phẩm
const product = [
  { id: 1, image: "san-pham-ao-khoac-01.webp", title: "MAGMA HOODIE ZIP", price: "500.000 đ" },
  { id: 2, image: "san-pham-ao-khoac-02.webp", title: "BLING BLING JACKET", price: "500.000 đ" },
  { id: 3, image: "san-pham-7.webp", title: "INVASION TEE", price: "500.000 đ" },
  { id: 4, image: "san-pham-8.webp", title: "MELTING GUM TEE", price: "500.000 đ" },
  { id: 5, image: "san-pham-9.webp", title: "TIEDYE SHORTS GREY", price: "500.000 đ" },
  { id: 6, image: "san-pham-10.webp", title: "STUFFED WOLF", price: "500.000 đ" },
  { id: 7, image: "san-pham-11.webp", title: "SS2 SHOULDER BAG", price: "500.000 đ" },
  { id: 8, image: "san-pham-12.webp", title: "FLAMBOYANT SWEATER", price: "500.000 đ" },
  { id: 9, image: "san-pham-13.webp", title: "SKELETON HOODIE", price: "500.000 đ" },
  { id: 10, image: "san-pham-14.webp", title: "STRIKE SHORTS", price: "500.000 đ" },
  { id: 11, image: "san-pham-15.webp", title: "INSIDE PANTS", price: "500.000 đ" },
  { id: 12, image: "san-pham-16.webp", title: "TIEDYE CAP GREY", price: "500.000 đ" },
  { id: 13, image: "san-pham-17.webp", title: "CAMO BACKPACK", price: "500.000 đ" },
  { id: 14, image: "san-pham-18.webp", title: "ZIPPED PURSE", price: "500.000 đ" },
  { id: 15, image: "san-pham-19.webp", title: "BALO HADES", price: "500.000 đ" },
  { id: 16, image: "san-pham-21.webp", title: "ao thun", price: "500.000 đ" },
  { id: 17, image: "san-pham-22.webp", title: "MAGMA HOODIE ZIP", price: "500.000 đ" },
  { id: 18, image: "san-pham-27.webp", title: "BLING BLING JACKET", price: "500.000 đ" },
  { id: 19, image: "san-pham-24.webp", title: "INVASION TEE", price: "500.000 đ" },
  { id: 20, image: "san-pham-25.webp", title: "MELTING GUM TEE", price: "500.000 đ" },
  { id: 21, image: "san-pham-26.webp", title: "TIEDYE SHORTS GREY", price: "500.000 đ" },
  { id: 22, image: "san-pham-27.webp", title: "STUFFED WOLF", price: "500.000 đ" },
  { id: 23, image: "san-pham-28.webp", title: "SS2 SHOULDER BAG", price: "500.000 đ" },
  { id: 24, image: "san-pham-29.webp", title: "FLAMBOYANT SWEATER", price: "500.000 đ" },
  { id: 25, image: "san-pham-30.webp", title: "SKELETON HOODIE", price: "500.000 đ" },
  { id: 26, image: "san-pham-31.webp", title: "STRIKE SHORTS", price: "500.000 đ" },
  { id: 27, image: "san-pham-32.webp", title: "INSIDE PANTS", price: "500.000 đ" },
  { id: 28, image: "san-pham-33.webp", title: "TIEDYE CAP GREY", price: "500.000 đ" },
  { id: 29, image: "san-pham-34.webp", title: "CAMO BACKPACK", price: "500.000 đ" },
  { id: 30, image: "san-pham-35.webp", title: "ZIPPED PURSE", price: "500.000 đ" },
  { id: 31, image: "san-pham-36.webp", title: "BALO HADES", price: "500.000 đ" },
  { id: 32, image: "san-pham-37.webp", title: "ao thun", price: "500.000 đ" },
  { id: 33, image: "san-pham-38.webp", title: "MAGMA HOODIE ZIP", price: "500.000 đ" },
  { id: 34, image: "san-pham-39.webp", title: "BLING BLING JACKET", price: "500.000 đ" },
  { id: 35, image: "san-pham-40.webp", title: "INVASION TEE", price: "500.000 đ" },
  { id: 36, image: "san-pham-41.webp", title: "MELTING GUM TEE", price: "500.000 đ" },
  { id: 37, image: "san-pham-42.webp", title: "TIEDYE SHORTS GREY", price: "500.000 đ" },
  { id: 38, image: "san-pham-43.webp", title: "STUFFED WOLF", price: "500.000 đ" },
  { id: 39, image: "san-pham-44.webp", title: "SS2 SHOULDER BAG", price: "500.000 đ" },
  { id: 40, image: "san-pham-45.webp", title: "FLAMBOYANT SWEATER", price: "500.000 đ" },
  { id: 41, image: "san-pham-46.webp", title: "SKELETON HOODIE", price: "500.000 đ" },
  { id: 42, image: "san-pham-47.webp", title: "STRIKE SHORTS", price: "500.000 đ" },
  { id: 43, image: "san-pham-48.webp", title: "INSIDE PANTS", price: "500.000 đ" },
  { id: 44, image: "san-pham-49.webp", title: "TIEDYE CAP GREY", price: "500.000 đ" },
  { id: 45, image: "san-pham-33.webp", title: "CAMO BACKPACK", price: "500.000 đ" },
  { id: 46, image: "san-pham-51.webp", title: "ZIPPED PURSE", price: "500.000 đ" },
  { id: 47, image: "san-pham-52.webp", title: "BALO HADES", price: "500.000 đ" },
  { id: 48, image: "san-pham-53.webp", title: "ao thun", price: "500.000 đ" },
  { id: 49, image: "san-pham-54.jpg", title: "MAGMA HOODIE ZIP", price: "500.000 đ" },
  { id: 50, image: "san-pham-55.webp", title: "BLING BLING JACKET", price: "500.000 đ" },
  { id: 51, image: "san-pham-56.webp", title: "INVASION TEE", price: "500.000 đ" },
  { id: 52, image: "san-pham-57.webp", title: "MELTING GUM TEE", price: "500.000 đ" },
  { id: 53, image: "san-pham-58.jpg", title: "TIEDYE SHORTS GREY", price: "500.000 đ" },
  { id: 54, image: "san-pham-59.jpg", title: "STUFFED WOLF", price: "500.000 đ" },
  { id: 55, image: "san-pham-60.jpg", title: "SS2 SHOULDER BAG", price: "500.000 đ" },
  { id: 56, image: "san-pham-61.jpg", title: "FLAMBOYANT SWEATER", price: "500.000 đ" },
  { id: 57, image: "san-pham-62.webp", title: "SKELETON HOODIE", price: "500.000 đ" },
  { id: 58, image: "san-pham-63.webp", title: "STRIKE SHORTS", price: "500.000 đ" },
  { id: 59, image: "san-pham-64.webp", title: "INSIDE PANTS", price: "500.000 đ" },
  { id: 60, image: "san-pham-65.webp", title: "TIEDYE CAP GREY", price: "500.000 đ" },
  { id: 61, image: "san-pham-66.webp", title: "CAMO BACKPACK", price: "500.000 đ" },
  { id: 62, image: "san-pham-67.webp", title: "ZIPPED PURSE", price: "500.000 đ" },
  { id: 63, image: "san-pham-68.webp", title: "BALO HADES", price: "500.000 đ" },
  { id: 64, image: "san-pham-69.webp", title: "ao thun", price: "500.000 đ" },
]

// Các biến cần dùng để phân trang
let perPage = 16;
let currentPage = 1;
let start = 0;
let end = perPage;
const totalPage = Math.ceil(product.length / perPage);
console.log(totalPage);
//Hàm dùng để render HTML sản phẩm
function renderProduct() {
  html = "";
  const content = product.map((item, index) => {
    if (index >= start && index < end) {
      html += '<div class="grid__column-2-4">';
      html += '<a href="" class="home-product-link">';
      html += '<div class="home-product-item">';
      html += '<img src="./assets/img/' + item.image + '" width="100%" class="home-product-item__img">';
      html += '<h4 class="home-product-item__name">' + item.title + '</h4>';
      html += '<div class="home-product-item__price">' + item.price + '</div>';
      html += '<div class="home-product-item__action">';
      html += '<span class="home-product-item__like home-product-item__like--liked">';
      html += '<i class="home-product-item__like-icon-empty far fa-heart"></i>';
      html += '<i class="home-product-item__like-icon-fill fas fa-heart"></i>';
      html += '</span>';
      html += '<div class="home-product-item__rating">';
      html += '<i class="fas fa-star"></i>'
      html += '<i class="fas fa-star"></i>'
      html += '<i class="fas fa-star"></i>'
      html += '<i class="fas fa-star"></i>'
      html += '<i class="fas fa-star"></i>'
      html += '</div>';
      html += '</div>';
      html += '<button class="btn home-product-item__add-product"><i class="fas fa-cart-plus"></i></button>';
      html += '</div>';
      html += '</a>';
      html += '</div>';
    }
  })
  document.getElementById('listProduct').innerHTML = html;
}


function getPage(currentPage) {
  start = (currentPage - 1) * perPage;
  end = currentPage * perPage;
}
// Xử lý button next của pagination
const btnNext = document.getElementById("btnNext");
btnNext.onclick = function () {
  currentPage++;
  if (currentPage > totalPage) {
    currentPage = totalPage;
  }
  if (currentPage === totalPage){
    $('#btnNext').addClass('btn-active');
  }
  $('#btnNext').removeClass('btn-active'); 
  getPage(currentPage);
  renderProduct();
}

// Xử lý button pre của pagination
const btnPre = document.getElementById("btnPre");
btnPre.onclick = function () {
  currentPage--;
  if (currentPage <= 1) {
    currentPage = 1;
  }
  if (currentPage === 1){
    $('#btnPre').addClass('btn-active');
  }
  $('#btnPre').removeClass('btn-active');
  getPage(currentPage);
  renderProduct();
}

// Xử lý các number trên pagination
function renderNumberPagination() {
  let html = '';
  html += `<a class="btn btn-numberpage">${1}</a>`;
  for (let i = 2; i <= totalPage; i++) {
    html += `<a class="btn btn-numberpage">${i}</a>`;
  }
  document.getElementById("numberPage").innerHTML = html;
}

function changePageNumber() {
  const currentPages = document.querySelectorAll('.product__number-page a');
  for (let i = 0; i < currentPages.length; i++) {
    currentPages[i].onclick = function () {
      var value = i + 1;
      currentPage = value;
      getPage(currentPage);
      renderProduct();
    }
  }
}


// Gọi các hàm cần
renderProduct();
renderNumberPagination();
changePageNumber();