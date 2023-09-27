$(() => {
  // Mảng chứa đường dẫn ảnh
  const images = [
    "asset/img/145.jpg",
    "asset/img/123.jpg",
    "asset/img/234.jpg",
    "asset/img/456.jpg"
  ];

  let currentIndex = 0;
  const mainImg = $('#main-img');

  // Xử lý sự kiện khi nhấp vào nút mũi tên trái
  $('.arrow-left').click(() => {
    // Cập nhật chỉ số ảnh hiện tại
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    // Thay đổi đường dẫn ảnh chính
    mainImg.attr('src', images[currentIndex]);
  });

  // Xử lý sự kiện khi nhấp vào nút mũi tên phải
  $('.arrow-right').click(() => {
    // Cập nhật chỉ số ảnh hiện tại
    currentIndex = (currentIndex + 1) % images.length;
    // Thay đổi đường dẫn ảnh chính
    mainImg.attr('src', images[currentIndex]);
  });

  // Xử lý sự kiện khi nhấp vào ảnh nhỏ trong các đoạn văn bản <p>
  $('p img').click(function() {
    // Lấy đường dẫn ảnh được nhấp vào
    let imgPath = $(this).attr('src');
    // Thay đổi đường dẫn ảnh chính
    mainImg.attr('src', imgPath);
    // Cập nhật chỉ số ảnh hiện tại
    currentIndex = images.indexOf(imgPath);
  });
});
