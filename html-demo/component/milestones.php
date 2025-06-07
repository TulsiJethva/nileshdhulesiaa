
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f9f9f9;
    }

    .timeline {
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: relative;
      margin: 40px auto;
      max-width: 1000px;
      padding: 0 20px;
      overflow-x: auto;
    }

    .timeline::before {
      content: '';
      position: absolute;
      top: 20px;
      left: 20px;
      right: 20px;
      height: 2px;
      background: #ccc;
      z-index: 1;
    }

    .step {
      position: relative;
      z-index: 2;
      text-align: center;
      cursor: pointer;
      flex: 1;
    }

    .circle {
      width: 36px;
      height: 36px;
      background: #fff;
      border: 3px solid #956956;
      border-radius: 50%;
      margin: 0 auto;
      line-height: 36px;
      color: #956956;
      font-weight: bold;
      transition: background 0.3s, color 0.3s;
    }

    .label {
      margin-top: 10px;
      font-size: 14px;
      color: #444;
    }

    .step.active .circle {
      background: #956956;
      color: #fff;
    }

    .content-container {
      max-width: 800px;
      margin: 40px auto;
      padding: 20px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .content-box {
      display: none;
    }

    .content-box.active {
      display: block;
    }

    /* Responsive Scroll Timeline */
    @media (max-width: 600px) {
      .timeline {
        flex-direction: row;
        overflow-x: scroll;
        padding-bottom: 10px;
      }

      .step {
        min-width: 80px;
        flex: 0 0 auto;
      }
    }
  </style>
</head>
<body>

  <h2 style="text-align:center;">Entrepreneurial Milestones</h2>
  <h4 style="text-align:center;">Year Wise Business Ventures</h4>
  <div class="timeline">
    <div class="step active" data-step="1">
      <div class="circle">1</div>
      <div class="label">Real Estate</div>
    </div>
    <div class="step" data-step="2">
      <div class="circle">2</div>
      <div class="label">Education</div>
    </div>
    <div class="step" data-step="3">
      <div class="circle">3</div>
      <div class="label">Entertainment</div>
    </div>
    <div class="step" data-step="4">
      <div class="circle">4</div>
      <div class="label">Digiventure</div>
    </div>
    <div class="step" data-step="5">
      <div class="circle">5</div>
      <div class="label">Hospitality</div>
    </div>
    <div class="step" data-step="6">
      <div class="circle">6</div>
      <div class="label">Wellness</div>
    </div>
    <div class="step" data-step="7">
      <div class="circle">7</div>
      <div class="label">Hospital</div>
    </div>
    <div class="step" data-step="8">
      <div class="circle">8</div>
      <div class="label">Politics</div>
    </div>
    <div class="step" data-step="9">
      <div class="circle">9</div>
      <div class="label">Charity</div>
    </div>
    <div class="step" data-step="10">
      <div class="circle">10</div>
      <div class="label">Social</div>
    </div>
    </div>
  </div>

  <div class="content-container">
  <div id="content-1" class="content-box active">
  <h3>Real Estate (Since Year 1991)</h3>
  <h6 style="margin:8px 0;background:#8d5c3d;color:white;display:inline-block;padding:4px 10px;border-radius:4px;">NOBLE BUILDERS</h6>
  <p style="margin-top:15px;">
    Mr. Nilesh Dhulesia laid the foundation for Noble Group of Companies in year 1991 by venturing into real estate.
    His company developed residential and commercial properties, transforming Junagadh’s urban landscape.
  </p>
  <ul style="margin-top:20px;list-style:none;padding:0;">
    <li style="margin-bottom:10px;">
      <i class="fas fa-house-user" style="margin-right:8px;color:#6e402c;"></i>
      <strong>5000+ Families</strong> Provided Homes
    </li>
    <li style="margin-bottom:10px;">
      <i class="fas fa-building" style="margin-right:8px;color:#6e402c;"></i>
      <strong>50+ Projects</strong> Completed
    </li>
    <li>
      <i class="fas fa-leaf" style="margin-right:8px;color:#6e402c;"></i>
      <strong>Sustainable & Ethical</strong> Real Estate Development
    </li>
  </ul>
</div>


<div id="content-2" class="content-box">
  <h3>Education Sector (Since Year 2003)</h3>
  <p>
    Understanding the importance of education, Mr. Nilesh Dhulesia expanded into the academic sector by establishing Eklavya Public School in 2004, followed by Eklavya Global School in 2016. He also founded the Noble Group of Institutes in 2007, which evolved into Noble University in 2022. As the president, he has played a pivotal role in shaping the institution's vision and commitment to excellence.
  </p>

  <div style="display:flex;flex-wrap:wrap;gap:20px;margin-top:20px;justify-content:center;">
    <div style="flex:1;min-width:250px;text-align:center;">
      <img src="images/logos/eps.png"  alt="Eklavya Public School Logo" style="height:80px;">
      <h4>Eklavya Public School</h4>
      <p>Playhouse to 12th (Gujarati & English Medium)<br>
      <strong>Year:</strong> 2004</p>
    </div>

    <div style="flex:1;min-width:250px;text-align:center;">
      <img src="images/logos/egs.png" alt="Eklavya Global School Logo" style="height:80px;">
      <h4>Eklavya Global School</h4>
      <p>First “Bagless School” in Junagadh<br>
      <strong>Year:</strong> 2016</p>
    </div>

    <div style="flex:1;min-width:250px;text-align:center;">
      <img src="images/logos/nu.jpg" alt="Noble University Logo" style="height:80px;">
      <h4>Noble University</h4>
      <p>Skill-based Higher Education Institute<br>
      <strong>Year:</strong> 2007</p>
    </div>
  </div>
</div>

<div id="content-3" class="content-box">
  <h3>Entertainment & Leisure (Since Year 2007)</h3>
  <h6 style="background:#8d5c3d;color:white;display:inline-block;padding:4px 12px;border-radius:4px;">SURAJ MAGIC LAND PVT. LTD.</h6>
  <p style="margin-top:10px;">
    Recognising the need for modern entertainment and leisure facilities in Junagadh, Nilesh Dhulesia established Suraj Magic Land Pvt. Ltd. in the year 2007. Under his leadership, the company has launched several initiatives that have transformed the city's recreational landscape.
  </p>

  <div style="display:flex;flex-wrap:wrap;gap:20px;margin-top:20px;justify-content:center;">

    <div style="flex:1;min-width:250px;text-align:center;">
      <img src="images/logos/scp.jpg" alt="Suraj Cineplex Logo" style="height:100px;"><br>
      <h7 style="margin:8px 0;background:#8d5c3d;color:white;display:inline-block;padding:4px 10px;border-radius:4px;">Suraj Cineplex</h7>
      <p>The city’s first multiplex<br><strong>with 5 screens.</strong></p>
    </div>

    <div style="flex:1;min-width:250px;text-align:center;">
      <img src="images/logos/funworld.jpg" alt="Suraj Funworld Logo" style="height:100px;"><br>
      <h7 style="margin:8px 0;background:#8d5c3d;color:white;display:inline-block;padding:4px 10px;border-radius:4px;">Suraj Funworld</h7>
      <p>A theme park with <strong>25+ rides</strong><br>for families.</p>
    </div>

    <div style="flex:1;min-width:250px;text-align:center;">
      <img src="images/logos/sfs.jpg" alt="Suraj Fitness Studio Logo" style="height:100px;"><br>
      <h7 style="margin:8px 0;background:#8d5c3d;color:white;display:inline-block;padding:4px 10px;border-radius:4px;">Suraj Fitness Studio</h7>
      <p>First <strong>Unisex Gym</strong><br>in Junagadh.</p>
    </div>

  </div>
</div>

<!-- Content for Step 4 -->
<div id="content-4" class="content-box">
  <h3>Digital Venture (Since Year 2017)</h3>

  <!-- Highlighted Company Name Box -->
  <h6 style="background:#8d5c3d;color:white;display:inline-block;padding:4px 12px;border-radius:4px;">
    NOBLE DIGI VENTURES
  </h6>
  <img src="images/logos/ndv.jpg" alt="Noble Digi Ventures Logo" style="height:80px;"><br>

  <p style="margin-top:10px;">
    With digital transformation on the rise, Mr. Nilesh Dhulesia spearheaded Aapdu Junagadh, a community-driven platform connecting locals digitally. This later evolved into Noble Digi Ventures, offering digital marketing, SEO, lead generation and website development.
  </p>

  <!-- Stats Row -->
  <div style="display:flex;flex-wrap:wrap;gap:20px;margin-top:20px;justify-content:center;text-align:center;">

    <!-- Social Media Followers -->
    <div style="flex:1;min-width:220px;">
      <i class="fas fa-users" style="font-size:40px;color:#4a2e1c;"></i>
      <h4 style="margin:0;font-size:18px;"><strong>4+ Lakh</strong></h4>
      <p style="margin:4px 0 0;">Social Media<br>Followers</p>
    </div>

    <!-- Clients -->
    <div style="flex:1;min-width:220px;">
      <i class="fas fa-handshake" style="font-size:40px;color:#4a2e1c;"></i>
      <h4 style="margin:0;font-size:18px;"><strong>50+ Clients</strong></h4>
      <p style="margin:4px 0 0;">Served in<br>Digital Marketing</p>
    </div>

    <!-- Campaigns -->
    <div style="flex:1;min-width:220px;">
     <i class="fas fa-bullseye" style="font-size:40px;color:#4a2e1c;"></i>
      <h4 style="margin:0;font-size:18px;"><strong>40+ Campaigns</strong></h4>
      <p style="margin:4px 0 0;">Executed</p>
    </div>

  </div>
</div>


<!-- Content for Step 5 -->
<div id="content-5" class="content-box">
  <h3>Hospitality (Since Year 2019)</h3>

  <!-- Highlighted Company Name Box -->
  <h6 style="background:#8d5c3d;color:white;display:inline-block;padding:4px 12px;border-radius:4px;">
    BYKE SURAJ CLUB & RAIVAT INN
  </h6>

  <p style="margin-top:10px;">
    Understanding the growing tourism potential of Junagadh, Nilesh Dhulesia expanded into the hospitality sector in year 2019. 
    His vision was to provide affordable hospitality services while maintaining quality, comfort and customer satisfaction.
  </p>

  <!-- BYKE Section -->
  <div style="display:flex;flex-wrap:wrap;gap:20px;margin-top:30px;align-items:center;">
    <!-- Logo -->
    <div style="flex:1;min-width:150px;text-align:center;">
      <img src="images/logos/thebyke.jpg" alt="Byke Suraj Club Logo" style="max-height:90px;">
    </div>
    <!-- Text -->
    <div style="flex:3;min-width:220px;">
      <p style="margin:0;">
        <strong>The Byke Suraj Club</strong> – A 3-star pure-veg hotel in partnership with Byke Group.
      </p>
    </div>
  </div>

  <!-- Raivat Section -->
  <div style="display:flex;flex-wrap:wrap;gap:20px;margin-top:30px;align-items:center;">
    <!-- Logo -->
    <div style="flex:1;min-width:150px;text-align:center;">
      <img src="images/logos/raivatinn.png" alt="Raivat Inn Logo" style="max-height:100px;">
    </div>
    <!-- Text -->
    <div style="flex:3;min-width:220px;">
      <p style="margin:0;">
        <strong>Raivat Inn & Raivat Kitchen</strong> – Junagadh’s first-ever cloud kitchen, now expanded to include a 
        <strong>150 seat rooftop restaurant</strong> and a <strong>banquet hall</strong> for small private parties, offering 
        fresh, high-quality meals in a comfortable dining environment.
      </p>
    </div>
  </div>
</div>


<!-- Content for Step 6 -->
<div id="content-6" class="content-box">
  <h3>Health & Wellness (Since Year 2020)</h3>

  <!-- Highlighted Company Name Box -->
  <h6 style="background:#8d5c3d;color:white;display:inline-block;padding:4px 12px;border-radius:4px;">
    GIRVEDA
  </h6>

  <p style="margin-top:10px;">
    With a vision to promote natural health and sustainable living, Nilesh Dhulesia established Girveda in year 2020. 
    This initiative focuses on Ayurvedic products and cow-based natural farming, supporting both wellness and eco-friendly agriculture.
  </p>

  <!-- Logo + Description Row -->
  <div style="display:flex;flex-wrap:wrap;gap:20px;margin-top:30px;align-items:center;">
    <!-- Logo -->
    <div style="flex:1;min-width:150px;text-align:center;">
      <img src="images/logos/girveda.png" alt="Girveda Logo" style="max-height:100px;">
    </div>
    <!-- Optional: If you want text here, add another <div> -->
  </div>

  <!-- Stats Row -->
  <div style="display:flex;flex-wrap:wrap;gap:30px;margin-top:30px;justify-content:center;text-align:center;">

    <!-- Farmer Collaborations -->
    <div style="flex:1;min-width:200px;">
      <i class="fas fa-tractor" style="font-size:40px; color:#4a2e1c;"></i>
      <h4 style="margin:0;font-size:18px;"><strong>100+ FARMER</strong></h4>
      <p style="margin:4px 0 0;">COLLABORATIONS</p>
    </div>

    <!-- Natural Products -->
    <div style="flex:1;min-width:200px;">
<i class="fas fa-seedling" style="font-size:40px; color:#4a2e1c;"></i>
      <h4 style="margin:0;font-size:18px;"><strong>50+ NATURAL</strong></h4>
      <p style="margin:4px 0 0;">PRODUCTS</p>
    </div>

    <!-- Online Presence -->
    <div style="flex:1;min-width:200px;">
<i class="fas fa-globe-americas" style="font-size:40px; color:#4a2e1c;"></i>
      <h4 style="margin:0;font-size:18px;"><strong>NATIONWIDE</strong></h4>
      <p style="margin:4px 0 0;">ONLINE PRESENCE</p>
    </div>

  </div>
</div>


<!-- Content for Step 7 -->
<div id="content-7" class="content-box">
  <h3>Health Care (Hospital)</h3>

  <!-- Highlighted Company Name Box -->
  <h6 style="background:#8d5c3d;color:white;display:inline-block;padding:4px 12px;border-radius:4px;">
    NOBLE HOSPITAL
  </h6>

  <p style="margin-top:10px;">
    Mr. Nilesh Dhulesia’s commitment to health is truly remarkable. Recognising the healthcare challenges faced by Junagadh’s rural population, he initiated various medical and educational institutions, including an <strong>Ayurveda Hospital (100-bed)</strong>, <strong>Homoeopathy Hospital (50-bed)</strong>, <strong>Nursing School</strong>, <strong>Nursing College</strong>, <strong>Pharmacy College</strong> and a <strong>DMLT Centre</strong>. These institutions provide <strong>free medical treatment</strong> to the community surrounding the university area, benefiting thousands of patients annually.
  </p>

  <p style="margin-top:10px;">
    Beyond human healthcare, Shri Dhulesia also extends his compassion to <strong>animal welfare</strong>. He established a <strong>Veterinary Dispensary</strong> under Noble Polytechnic in Animal Husbandry, reinforcing his dedication to caring for animals as well.
  </p>

  <!-- Logos Row -->
  <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:40px;margin-top:30px;align-items:center;">

    <!-- Homoeopathy Logo -->
    <div style="text-align:center;">
      <img src="images/logos/homeopathy.png" alt="Homoeopathy College Logo" style="height:70px;">
      <p style="margin-top:10px;font-weight:600;">Homoeopathic College & Research Institute</p>
    </div>

    <!-- Ayurved Logo -->
    <div style="text-align:center;">
      <img src="images/logos/ayurved.png" alt="Ayurved College Logo" style="height:70px;">
      <p style="margin-top:10px;font-weight:600;">Ayurved College & Research Institute</p>
    </div>

  </div>
</div>


<!-- Content for Step 8 -->
<div id="content-8" class="content-box">
  <h3>Political Responsibilities in BJP</h3>

  <!-- BJP Logo -->
  <div style="text-align:right;margin-top:-40px;margin-bottom:10px;">
    <img src="images/logos/bjp.png" alt="BJP Logo" style="height:80px;">
  </div>

  <p>
    Nilesh Dhulesia has been actively involved in the Bharatiya Janata Party (BJP), contributing significantly to its growth and organisational development in Junagadh. With a strong leadership approach, strategic vision and commitment to public service, he has held various key positions within the party. His dedication to grassroots politics and governance has played a crucial role in strengthening the party's presence in the region.
  </p>

  <!-- Personal Info List -->
  <h6 style="background:#8d5c3d;color:white;display:inline-block;padding:4px 12px;border-radius:4px;">PERSONAL INFORMATION</h6>
  <ul style="margin-top:10px;line-height:1.6;">
    <li><strong>Ex. Chairman</strong>, Standing Committee, Junagadh Municipal Corporation.</li>
    <li><strong>Ex. Corporator & Former Dandak</strong>, Junagadh Municipal Corporation.</li>
    <li><strong>Ex. BJP Vice President</strong>, Junagadh City.</li>
    <li><strong>Ex. Board Member</strong>, Gujarat Secondary Education Board, Gandhinagar.</li>
    <li><strong>Ex. Committee Member</strong>, Examination Committee, Gujarat Secondary Education Board, Gandhinagar.</li>
  </ul>

  <!-- Additional Text -->
  <p style="margin-top:10px;">
    <em>Public Service Report by Nilesh Dhulesia – Standing Committee Chairman, Junagadh Municipal Corporation.</em>
  </p>

  <p>
    Nilesh Dhulesia presents a decade-long report of his service with the Junagadh Municipal Corporation, including time spent in both opposition and ruling positions. Despite facing challenges, he remained committed to public issues and development, particularly in underdeveloped areas of Ward No. 13 and beyond. He praises his colleagues and mentors, especially the late Mayor Shri Jitubhai Hirpara, and thanks his team, government officials, and citizens for their support.
  </p>

  <p>
    He emphasizes his governance principles: efficiency, transparency, innovation, and dedication to social service, inspired by the motto of PM Narendra Modi: <strong>“Sabka Saath, Sabka Vikas, Sabka Vishwas.”</strong>
  </p>
</div>

<!-- Content for Step 9 -->
<div id="content-9" class="content-box">
  <h3>Social & Charitable Activities</h3>

  <!-- Section Highlight -->
  
      <h6 style="background:#8d5c3d;color:white;display:inline-block;padding:4px 12px;border-radius:4px;">Shri Jyoti Dhulesia Memorial Foundation</h6>

  <!-- Logo Right -->
  <div style="text-align:right;margin-top:-40px;margin-bottom:10px;">
    <img src="images/logos/sjd.png" alt="Shri Jyoti Dhulesia Memorial Foundation Logo" style="height:100px;">
  </div>

  <p>
    Founded by Nilesh Dhulesia in year 2011, Shri Jyoti Dhulesia Memorial Foundation is dedicated to social welfare, education, healthcare and community development. The foundation has undertaken various initiatives to uplift underprivileged communities and contribute to the overall betterment of society.
  </p>

  <!-- Activities Section with Smaller Images and Equal Side Space -->
  <div style="display:flex;justify-content:space-between;gap:30px;flex-wrap:wrap;padding:0 5%;">
    
    <!-- Block 1 -->
    <div style="flex:1;min-width:280px;text-align:center;">
      <img src="images/social/cityfood.jpeg" alt="City Food Programme" style="width:80%;border-radius:8px;margin-bottom:10px;">
      <h6 style="margin-top:0;">1. City Food Programme</h6>
      <ul style="padding-left:20px;line-height:1.6;text-align:left;">
        <li>Distributes ration kits to underprivileged families to ensure they have access to essential meals.</li>
        <li>Aims to eradicate hunger and provide food security to those in need.</li>
      </ul>
    </div>

    <!-- Block 2 -->
    <div style="flex:1;min-width:280px;text-align:center;">
      <img src="images/social/humanwelfare.jpeg" alt="Human Welfare & Relief Initiatives" style="width:80%;border-radius:8px;margin-bottom:10px;">
      <h6 style="margin-top:0;">2. Human Welfare & Relief Initiatives</h6>
      <ul style="padding-left:20px;line-height:1.6;text-align:left;">
        <li>Supports families and individuals facing financial difficulties.</li>
        <li>Conducts disaster relief programmes and provides emergency assistance.</li>
      </ul>
    </div>


     <!-- Block 3 -->
    <div style="flex:1;min-width:280px;text-align:center;">
      <img src="images/social/medicalrelief.jpeg" alt="City Food Programme" style="width:80%;border-radius:8px;margin-bottom:10px;">
      <h6 style="margin-top:0;">3. Medical Relief and Healthcare Support</h6>
      <ul style="padding-left:20px;line-height:1.6;text-align:left;">
        <li>Covers medical expenses and treatments
            for underprivileged individuals.</li>
        <li>Provides financial aid for critical health
            cases and long-term medication needs.</li>
      </ul>
    </div>

    <!-- Block 4 -->
    <div style="flex:1;min-width:280px;text-align:center;">
      <img src="images/social/womenwelfare.jpeg" alt="Human Welfare & Relief Initiatives" style="width:80%;border-radius:8px;margin-bottom:10px;">
      <h6 style="margin-top:0;">4. Women's Welfare and Empowerment</h6>
      <ul style="padding-left:20px;line-height:1.6;text-align:left;">
        <li>Initiatives focused on women’s education,
            skill development and healthcare.</li>
        <li>Encourages self-reliance and social recognition for women in need.</li>
      </ul>
    </div>

 <!-- Block 5 -->
    <div style="flex:1;min-width:280px;text-align:center;">
      <img src="images/social/eduscholarships.jpeg" alt="City Food Programme" style="width:80%;border-radius:8px;margin-bottom:10px;">
      <h6 style="margin-top:0;">5. Education Scholarship and Student Support</h6>
      <ul style="padding-left:20px;line-height:1.6;text-align:left;">
        <li>Provides scholarships and financial aid to talented students from economically
            weaker sections.</li>
        <li>Ensures access to quality education for deserving students.</li>
      </ul>
    </div>

    <!-- Block 6 -->
    <div style="flex:1;min-width:280px;text-align:center;">
      <img src="images/social/recmemorial.jpeg" alt="Human Welfare & Relief Initiatives" style="width:80%;border-radius:8px;margin-bottom:10px;">
      <h6 style="margin-top:0;">6. Recognition and Memorials for Social Contributors</h6>
      <ul style="padding-left:20px;line-height:1.6;text-align:left;">
        <li>Honors individuals who contribute to social welfare and community development.</li>
        <li>Encourages a culture of service and social responsibility.</li>
      </ul>
    </div>

 <!-- Block 7-->
    <div style="flex:1;min-width:280px;text-align:center;">
      <img src="images/social/empeco.jpeg" alt="City Food Programme" style="width:80%;border-radius:8px;margin-bottom:10px;">
      <h6 style="margin-top:0;">7. Employment and Economic Growth Initiatives</h6>
      <ul style="padding-left:20px;line-height:1.6;text-align:left;">
        <li>Through various business ventures, the foundation has generated employment for over 1,000+ individuals.</li>
        <li>Supports local entrepreneurs and small businesses through mentor ship and financial aid.</li>
      </ul>
    </div>

    <!-- Block 8 -->
    <div style="flex:1;min-width:280px;text-align:center;">
      <img src="images/social/susdevelopment.jpeg" alt="Human Welfare & Relief Initiatives" style="width:80%;border-radius:8px;margin-bottom:10px;">
      <h6 style="margin-top:0;">8. Sustainable Development and Environmental Conservation</h6>
      <ul style="padding-left:20px;line-height:1.6;text-align:left;">
        <li>Promotes eco-friendly urban development and green initiatives.</li>
        <li>Through Girveda, supports 100+ farmers in cow-based natural farming, encouraging
            organic and chemical-free agriculture.</li>
      </ul>
    </div>


 <!-- Block 9 -->
    <div style="flex:1;min-width:280px;text-align:center;">
      <img src="images/social/digibusiness.jpeg" alt="City Food Programme" style="width:40%;border-radius:8px;margin-bottom:10px;">
      <h6 style="margin-top:0;">9. Digital and Local Support for Local Entrepreneurs</h6>
      <ul style="padding-left:20px;line-height:1.6;text-align:left;">
        <li>Helps small businesses and startups with digital marketing, branding and promotional
support.</li>
        <li>Organises campaigns and events to boost local businesses in Junagadh.</li>
      </ul>
    </div>
 </div>
</div>


<!-- Content for Step 10 -->
<div id="content-10" class="content-box">
  <h3>Social Responsibilities</h3>

  <p>
    Nilesh Dhulesia has been actively involved in social, religious, and community welfare initiatives, holding key positions in various organisations.
  </p>

  <ul style="line-height:1.8;padding-left:20px;">
    <li><strong>President</strong>, Shri Umiya Mataji Mandir, Gathila.</li>
    <li><strong>Founder Trustee</strong>, Sardar Dham, Ahmedabad.</li>
    <li><strong>Trustee</strong>, Shri Kadva Patel Samaj, Gandhinagar.</li>
    <li><strong>Karobari Member</strong>, Shri Umiya Mataji Sansthan, Unjha.</li>
    <li><strong>Trustee</strong>, Shri Umiya Mataji Mandir, Sidsar.</li>
    <li><strong>Ex. President</strong>, Shri Junagadh Umiya Parivar Trust, Junagadh.</li>
    <li><strong>Chairman</strong>, CREDAI (Builders Association), Junagadh.</li>
    <li><strong>Board Member</strong>, Gujarat CREDAI, Ahmedabad.</li>
    <li><strong>Ex. Vice President</strong>, Junagadh District Cricket Association.</li>
    <li><strong>Ex. District Chairman</strong>, Lions Club, Saurashtra Region.</li>
    <li><strong>Trustee</strong>, Shri Vruddha Niketan Sanstha, Junagadh.</li>
    <li><strong>SARDARDHAM TEAM Honorary Secretary</strong> – Project, <strong>Vice Chairman</strong> – Social Affairs, Corporate, Trade, Industrial Coordination – Rajkot</li>
  </ul>
  <p></p>

  <p>
    Located 15 km from Junagadh in Ganthila village by the Ozat River, Shree Umiya Mandir was built as a grand tribute to Maa Umiya due to growing community devotion. The construction began in 2004 under the leadership of Mr. Nilesh Dhulesia, a young builder from Junagadh, who led the entire project with professional precision and heartfelt dedication.
  </p>

<p>The temple was completed beautifully with well-designed landscaping and donor plaques. On
17th April 2008, the eternal holy flame from Unjha’s original temple was ceremoniously
installed after a pad-yatra.</p>

<p>Mr. Nilesh Dhulesia ensured inclusive participation through donation programs, enabling
even the poorest families to contribute. Under his leadership, various facilities were developed:</p>

<ul style="line-height:1.8;padding-left:20px;">
   <li>48-room Atithi Bhavan (guest house)
</li>
   <li>Dining hall for 1,000 people
</li>
   <li>Marriage hall with capacity for 1,000 people
</li>
   <li>Ideal Marriage Program hosting up to 4 free weddings daily
</li>
   <li>Stage and guest suites, including Govani AC Hall
</li>
   <li>Yagna Cottages for weekly Gayatri Havan
</li>

<p>He continues to lead as temple president, overseeing events like Patotsav and Khel
Mahakumbh, and has remained deeply involved—physically, mentally, and financially—in the
temple's ongoing spiritual and infrastructural development.</p>



</div>



  </div>

  <script>
    const steps = document.querySelectorAll('.step');
    const contents = document.querySelectorAll('.content-box');

    steps.forEach(step => {
      step.addEventListener('click', () => {
        steps.forEach(s => s.classList.remove('active'));
        contents.forEach(c => c.classList.remove('active'));

        step.classList.add('active');
        document.getElementById(`content-${step.dataset.step}`).classList.add('active');
      });
    });
  </script>

                 
               </div>
            </section>