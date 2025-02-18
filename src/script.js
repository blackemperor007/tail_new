const swiper = new Swiper('.swiper-wrapper', {
    // Optional parameters
    loop: true,
    spaceBetween: 10,
    gabCursor: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    
     breakpoints: {
        // when window width is <= 600px
        // 600: {
        //   slidesPerView: 2,
        //   spaceBetween: 20,
        // },
        // // when window width is <= 992px
        // 992: {
        //   slidesPerView: 3,
        //   spaceBetween: 30,
        // },
        // // when window width is <= 1200px
        // 1200: {
        //   slidesPerView: 4,
        //   spaceBetween: 40,
        // },
        0:{
            slidesPerView: 1,
           
        },
      
        
      },

   
  });
