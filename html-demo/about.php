  <?php include('component/header.php');?> 





<section class="about-banner">
  <div class="content">
    <h3>About</h3>
    <h1>Dr. Nilesh Dhulesia</h1>
  </div>
</section>



<div style="display: flex; align-items: center; text-align: center;">
  <hr style="flex: 1; border: none; height: 1px; background: #ccc;">
  <span style="padding: 0 10px; font-style: italic; color: #666;">
    From Vision to Action – The Journey of Impact.
  </span><p><br></p><p></p>
  <hr style="flex: 1; border: none; height: 1px; background: #ccc;">
</div>

  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 0;
      background: #f9f9f9;
      color: #333;
    }
    .container {
      display: flex;
      flex-wrap: wrap;
      max-width: 1200px;
      margin: 40px auto;
      padding: 20px;
      align-items: center;
      justify-content: center;
      gap: 40px;
    }
    .image-wrapper {
      position: relative;
      width: 300px;
      height: 300px;
    }
    .profile-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 50%;
      border: 10px solid white;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    .logo-overlay {
      position: absolute;
      bottom: 20px;
      right: -20px;
      width: 80px;
      height: 80px;
      background: white;
      border-radius: 50%;
      padding: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    .logo-overlay img {
      width: 100%;
      height: 100%;
      object-fit: contain;
    }
    .bio-text {
      max-width: 700px;
    }
    .bio-text h1 {
      font-size: 32px;
      margin-bottom: 20px;
    }
    .bio-text p {
      font-size: 18px;
      margin-bottom: 15px;
    }
    .bio-text strong {
      font-weight: bold;
    }
    @media (max-width: 768px) {
      .container {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="image-wrapper">
      <img src="images/poster2.jpeg" alt="Nilesh Dhulesia" class="profile-img" />
      <div class="logo-overlay">
        <img src="images/logos/bjp.png" alt="Party Logo" />
      </div>
    </div>
    <div class="bio-text">
      <h1>Biography</h1>
      <p>
        Mr. Arjunbhai Devabhai Modhwadia was born on February 17, 1957, in the village of Modhwada in Porbandar.
        He spent his childhood in a humble farmer’s family with two brothers and two sisters.
        From a young age, Mr. Arjunbhai developed qualities of humility and respect towards people.
      </p>
      <p>
        Being the son of a farmer, Mr. Arjunbhai Modhwadia understands the importance of hard work.
        Therefore, until his education was complete, he assisted his father in farming.
        His experience working at the grassroots level still keeps him connected to the land.
      </p>
      <p>
        Mr. Arjunbhai Modhwadia completed his primary education at the government school in his village, Modhwada.
        In 1982, he earned a bachelor’s degree in Mechanical Engineering from <strong>L.E. College of Morbi</strong>.
        His commitment to education is evident from the fact that from 1982 to 2002, he was elected as a member
        of the Senate and Syndicate of Saurashtra University, Rajkot.
      </p>
      <p>
        During his tenure at the university, he actively participated in efforts to improve the quality of education.
        In 1988, he was elected as a member of the Executive Council of the university.
      </p>
    </div>
  </div>
</body>
</html>



  <?php include('component/milestones.php');?> 

<?php include('component/footer.php');?> 

