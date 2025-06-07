<?php include('component/header.php');?> 

  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      padding: 20px;
      background: #f7f7f7;
    }

    .gallery {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 15px;
    }

    .gallery img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      cursor: pointer;
      border-radius: 10px;
      transition: transform 0.2s ease;
    }

    .gallery img:hover {
      transform: scale(1.02);
    }

    /* Modal (for enlarged photo) */
    .modal {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0; top: 0;
      width: 100%; height: 100%;
      background-color: rgba(0, 0, 0, 0.8);
      justify-content: center;
      align-items: center;
    }

    .modal img {
      max-width: 90%;
      max-height: 90%;
      border-radius: 10px;
    }

    .modal:target {
      display: flex;
    }

    .close-btn {
      position: absolute;
      top: 30px;
      right: 40px;
      font-size: 30px;
      color: white;
      text-decoration: none;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <h2 align="text-center">Nilesh Dhulesia – Photo Gallery</h2>

  <div class="gallery">
    <!-- Repeat 16 times with different image paths -->
    <a href="#img1"><img src="images/social/cityfood.jpeg" alt="Photo 1"></a>
    <a href="#img2"><img src="images/social/digibusiness.jpeg" alt="Photo 2"></a>
    <a href="#img3"><img src="images/social/eduscholarships.jpeg" alt="Photo 3"></a>
    <a href="#img4"><img src="images/social/empeco.jpeg" alt="Photo 4"></a>

    <a href="#img5"><img src="images/social/humanwelfare.jpeg" alt="Photo 5"></a>
    <a href="#img6"><img src="images/social/medicalrelief.jpeg" alt="Photo 6"></a>
    <a href="#img7"><img src="images/social/recmemorial.jpeg" alt="Photo 7"></a>
    <a href="#img8"><img src="images/social/susdevelopment.jpeg" alt="Photo 8"></a>

    <a href="#img9"><img src="images/photo9.jpg" alt="Photo 9"></a>
    <a href="#img10"><img src="images/photo10.jpg" alt="Photo 10"></a>
    <a href="#img11"><img src="images/photo11.jpg" alt="Photo 11"></a>
    <a href="#img12"><img src="images/photo12.jpg" alt="Photo 12"></a>

    <a href="#img13"><img src="images/photo13.jpg" alt="Photo 13"></a>
    <a href="#img14"><img src="images/photo14.jpg" alt="Photo 14"></a>
    <a href="#img15"><img src="images/photo15.jpg" alt="Photo 15"></a>
    <a href="#img16"><img src="images/photo16.jpg" alt="Photo 16"></a>
  </div>

  <!-- Enlarged Image Popups -->
  <div id="img1" class="modal"><a href="#" class="close-btn">&times;</a><img src="images/social/cityfood.jpeg"></div>
  <div id="img2" class="modal"><a href="#" class="close-btn">&times;</a><img src="images/social/digibusiness.jpeg"></div>
  <div id="img3" class="modal"><a href="#" class="close-btn">&times;</a><img src="images/social/eduscholarships.jpeg"></div>
  <div id="img4" class="modal"><a href="#" class="close-btn">&times;</a><img src="images/social/empeco.jpeg"></div>
  <div id="img5" class="modal"><a href="#" class="close-btn">&times;</a><img src="images/social/humanwelfare.jpeg"></div>
  <div id="img6" class="modal"><a href="#" class="close-btn">&times;</a><img src="images/social/medicalrelief.jpeg"></div>
  <div id="img7" class="modal"><a href="#" class="close-btn">&times;</a><img src="images/social/recmemorial.jpeg"></div>
  <div id="img8" class="modal"><a href="#" class="close-btn">&times;</a><img src="images/social/susdevelopment.jpeg"></div>
  <div id="img9" class="modal"><a href="#" class="close-btn">&times;</a><img src="images/social/womenwelfare.jpeg"></div>
  <div id="img10" class="modal"><a href="#" class="close-btn">&times;</a><img src="images/photo10.jpg"></div>
  <div id="img11" class="modal"><a href="#" class="close-btn">&times;</a><img src="images/photo11.jpg"></div>
  <div id="img12" class="modal"><a href="#" class="close-btn">&times;</a><img src="images/photo12.jpg"></div>
  <div id="img13" class="modal"><a href="#" class="close-btn">&times;</a><img src="images/photo13.jpg"></div>
  <div id="img14" class="modal"><a href="#" class="close-btn">&times;</a><img src="images/photo14.jpg"></div>
  <div id="img15" class="modal"><a href="#" class="close-btn">&times;</a><img src="images/photo15.jpg"></div>
  <div id="img16" class="modal"><a href="#" class="close-btn">&times;</a><img src="images/photo16.jpg"></div>



<?php include('component/footer.php');?>





































