let movies = [
    {
      name: "Loki",
      des:
        "Lorem ipsume dolor sit amet consecteture adipising alit. Velit porro et veniam excepturi, eaque voluptatem impedit nulla laboriosam facilis ut laboriosam liberol",
      image: "slider 1.png"
    },
    {
      name: "falcon and the winter soldieri",
      des:
        "Lorem ipsume dolor sit amet consecteture adipising alit. Velit porro et veniam excepturi, eaque voluptatem impedit nulla laboriosam facilis ut laboriosam liberol",
      image: "slider 2.png"
    },
    {
      name: "Wanda Vision",
      des:
        "Lorem ipsume dolor sit amet consecteture adipising alit. Velit porro et veniam excepturi, eaque voluptatem impedit nulla laboriosam facilis ut laboriosam liberol",
      image: "slider 3.png"
    },
    {
      name: "raya and the last dragaon",
      des:
        "Lorem ipsume dolor sit amet consecteture adipising alit. Velit porro et veniam excepturi, eaque voluptatem impedit nulla laboriosam facilis ut laboriosam liberol",
      image: "slider 4.png"
    },
    {
      name: "luca",
      des:
        "Lorem ipsume dolor sit amet consecteture adipising alit. Velit porro et veniam excepturi, eaque voluptatem impedit nulla laboriosam facilis ut laboriosam liberol",
      image: "slider 5.png"
    }
  ];
  
  const carousel = document.querySelector(".carousel");
  let sliders = [];
  
  let slideIndex = 0;
  
  const createSlide = () => {
    if (slideIndex >= movies.length) {
      slideIndex = 0;
    }
    //creating dom element
    let slide = document.createElement("div");
    var imgElement = document.createElement("img");
    let content = document.createElement("div");
    let h1 = document.createElement("h1");
    let p = document.createElement("p");
  
    // attaching all elements
    imgElement.appendChild(document.createTextNode(""));
    h1.appendChild(document.createTextNode(movies[slideIndex].name));
    p.appendChild(document.createTextNode(movies[slideIndex].des));
    content.appendChild(h1);
    content.appendChild(p);
    slide.appendChild(content);
    slide.appendChild(imgElement);
    carousel.appendChild(slide);
  
    //setting up image
    imgElement.src = movies[slideIndex].image;
    slideIndex++;
  
    //setting element classname
    slide.className = "slider";
    content.className = "slider-content";
    imgElement.className = "slider-img";
    h1.className = "movie-title";
    p.className = "movie-des";
  
    sliders.push(slide);
  
    //adding slide Effect
  
    if (sliders.length) {
      sliders[0].style.marginLeft = `calc(-${100 * (sliders.length - 2)}% - ${
        30 * (sliders.length - 2)
      }px)`;
    }
  };
  
  for (let i = 0; i < 3; i++) {
    createSlide();
  }
  setInterval(() => {
    createSlide();
  }, 3000);
  
  //video cards
  const videoCards = [...document.querySelectorAll(".video-card")];
  
  videoCards.forEach((item) => {
    item.addEventListener("mouseover", () => {
      let video = item.children[1];
      video.play();
    });
    item.addEventListener("mouseleave", () => {
      let video = item.children[1];
      video.pause();
    });
  });
  
  //card sliders
  
  let cardContainers = [...document.querySelectorAll(".card-container")];
  let preBtns = [...document.querySelectorAll(".pre-btn")];
  let nxtBtns = [...document.querySelectorAll(".nxt-btn")];
  
  cardContainers.forEach((items, i) => {
    let containerDimensions = items.getBoundingClientRect();
    let containerWidth = containerDimensions.width;
  
    nxtBtns[i].addEventListener("click", () => {
      items.scrollLeft += containerWidth - 200;
    });
  
    preBtns[i].addEventListener("click", () => {
      items.scrollLeft -= containerWidth + 200;
    });
  });
  