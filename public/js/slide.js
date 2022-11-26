var index = 0;
ShowBanner = function () {
  var img = [
    "./public/image/banner/banner_0.jpg",
    "./public/image/banner/banner_1.jpg",
    "./public/image/banner/banner_2.jpg",
    "./public/image/banner/banner_3.jpg",
    "./public/image/banner/banner_4.jpg",
  ];
  document.querySelector("#img_banner").src = img[index];

  if (index == 5) {
    index = 0;
  }
  //chuyển đến slide tiếp theo
  index++;

  //nếu đang ở slide cuối cùng thì chuyển về slide đầu
  if (index > img.length - 1) {
    index = 0
  }
};
setInterval(ShowBanner, 3000);
ShowBanner(index = 0);
