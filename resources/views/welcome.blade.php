<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Resume - John Elfie V Dela Cruz</title>

    <!-- Merged CSS Styles -->
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: "Arial", sans-serif;
        line-height: 1.6;
        background-color: #f4f4f4;
        color: #333;
      }

      .resume-container {
        width: 70%;
        max-width: 900px;
        margin: 40px auto;
        background-color: #fff;
        padding: 20px 40px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      }

      header {
        display: flex;
        align-items: center;
        border-bottom: 2px solid #3498db;
        padding-bottom: 20px;
        margin-bottom: 20px;
      }

      .profile-pic img {
        width: 120px;
        height: 120px;
        margin-right: 20px;
      }

      .header-content {
        text-align: left;
      }

      header h1 {
        font-size: 32px;
        color: #333;
      }

      header h2 {
        font-size: 18px;
        color: #3498db;
      }

      header p {
        font-size: 14px;
        color: #777;
      }

      h2 {
        font-size: 24px;
        color: #333;
        border-bottom: 2px solid #3498db;
        margin-bottom: 10px;
      }

      section {
        margin-bottom: 30px;
      }

      p,
      ul {
        font-size: 16px;
        color: #555;
        margin-bottom: 10px;
      }

      ul {
        list-style-type: disc;
        padding-left: 20px;
      }

      .job h3 {
        font-size: 20px;
        color: #333;
        margin-bottom: 5px;
      }

      .skills-list {
        display: flex;
        justify-content: space-between;
      }

      .skills-list ul {
        list-style-type: none;
      }

      .skills-list li {
        font-size: 16px;
        margin-bottom: 5px;
      }

      footer {
        text-align: center;
        margin-top: 20px;
        padding-top: 10px;
        border-top: 1px solid #ddd;
        color: #777;
      }

      footer p {
        font-size: 14px;
      }
    </style>
  </head>
  <body>
    <div class="resume-container">
      <header>
        <div class="profile-pic">
          <img src="./John Elfie dela Cruz.png" alt="Profile Picture" />
        </div>
        <div class="header-content">
          <h1>{{ $info->name }}</h1>
          <p>{{ $info->address}}</p>
          <p>{{ $info->email}}</p>
          <p>{{ $info->contactnumber}}</p>

        </div>
      </header>

      <section class="summary">
        <h2>Profile</h2>
        <p>
          Innovative web developer with experience in designing and building
          responsive web applications. Skilled in HTML, CSS, JavaScript, and
          frameworks like React and Vue. Dedicated to creating seamless user
          experiences and optimizing website performance.
        </p>
      </section>

      <section class="experience">
        <h3>PERSONAL INFORMATION</h3>
        <ul>
          <li><strong>Date of birth :</strong> {{ $info->dateofbirth}}</li>
          <li><strong>Birthplace : </strong> {{ $info->birthplace}}</li>
          <li><strong>Sex:</strong> {{ $info->sex}}</li>
          <li><strong>Civil Status :</strong> Single</li>
          <li><strong>Religion :</strong> {{ $info->religion}}</li>
          <li><strong>Nationality :</strong>{{ $info->nationality}}</li>
          <li><strong>Father's name :</strong>{{ $info->fathersname}} </li>
          <li><strong>Mother's name :</strong>{{ $info->mothersname}}</li>
        </ul>
      </section>

      <section class="education">
        <h2>Education</h2>
        <p><strong>BS in Information Technology</strong> {{ $info->bsininformationtechnology}}</p>
        <p><strong>Sulivan National Highschool</strong> {{ $info->sulivannationalhighschool}}</p>
        <p><strong>HUMSS</strong> - {{ $info->humss}}</p>
        <p><strong>Sulivan National Highschool</strong> {{ $info->addsulivannationalhighschool}}</p>
        <p><strong>Catulinan Elementary School</strong> {{ $info->catulinanelementaryschool}}</p>
      </section>
    </div>
  </body>
</html>
