// Lấy tham chiếu đến phần tử đầu đề và container
const header = document.getElementById("header");
const container = document.querySelector(".container");

// Thêm một sự kiện lắng nghe cho cuộn trang
container.addEventListener("scroll", () => {
    // Lấy vị trí cuộn hiện tại của container
    const scrollTop = container.scrollTop;

    // Thay đổi thuộc tính transform của header để lăn theo cuộn trang
    header.style.transform = `translateY(${scrollTop}px)`;
});
