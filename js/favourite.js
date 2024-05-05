document.addEventListener("DOMContentLoaded", function () {
    // Favori dövizleri seçilebilir hale getirme ve renk değiştirme işlemleri
    const favoriteStars = document.querySelectorAll(".favorite-star");
  
    // Her bir favori yıldızı için olay dinleyicisi ekleme
    favoriteStars.forEach((star) => {
      star.addEventListener("click", function () {
        // Yıldız simgesinin rengini değiştirme
        if (star.classList.contains("fas")) {
          star.classList.remove("fas");
          star.classList.add("far");
        } else {
          star.classList.remove("far");
          star.classList.add("fas");
        }
  
        // Yıldızın içindeki input kutusunun rengini değiştirme
        const inputId = "fav_" + star.dataset.id;
        const inputElement = document.getElementById(inputId);
        if (inputElement.classList.contains("selected")) {
          inputElement.classList.remove("selected");
        } else {
          inputElement.classList.add("selected");
        }
      });
    });
  });
  