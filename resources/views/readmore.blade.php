<x-guest-layout>
  <!DOCTYPE html>
  <html>
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
  body {
    font-family: "Open Sans";}
  .center{
    display: block;
    margin-left: auto;
    margin-right: auto;
  }
  body{
  margin: 40px;
}

button{
  cursor: pointer;
  outline: 0;
  color: #AAA;

}

.btn:focus {
  outline: none;
}

.green{
  color: green;
}

.red{
  color: red;
}
  </style>
  </head>
  <body class="w3-light-grey">
    
  <!-- w3-content defines a container for fixed size centered content, 
  and is wrapped around the whole page content, except for the footer in this example -->
  <div class="w3-content" style="max-width:1600px">
  
    <!-- Header -->
    <header class="w3-container w3-center w3-padding-48 w3-white">
      <h1 class="w3-xxxlarge"><b>PETERANA CLUB</b></h1>
      <h6>Details Information of <span class="w3-tag">Peterana Club</span></h6>
    </header>
  
    <!-- Grid -->
    <div class="w3-row w3-padding w3-border">
        <!-- Blog entry -->
        <div class="w3-container w3-white w3-margin w3-padding-large">
          <div class="w3-center">
            <h3>Flying Dance Studio</h3>
            <h5><span class="w3-opacity">02 September 2022</span></h5>
          </div>
  
          <div class="w3-justify">
            <img src="../storage/images/FDS.jpg" alt="Girl Hat" style="width:40%" class="w3-padding-16 center">
            <p>Established in 1997, Flying Dance Studio is a dancing crew formed by a group of students from Universiti Teknologi Malaysia.
               Flying Dance Studio is a member of Unit Kebudayaan UTM. We perform Chinese traditional dance, contemporary dance, modern dance, 
               Hip hop and K-pop dance. We also specialize in creating choreography and unleashing creativity and skills.</p>
               <br>
               <ul>
               <b>Missions</b>
                   <li>1) To explore and promote the art of dance while nurturing the artistic atmosphere in the campus</li>
                   <li>2) To provide performing stages for those who love and willing to dance</li>
                   <li>3) To provide platforms for choreograph enthusiasts</li>
               </ul>
            <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          </div>
        </div>
        <hr>
  
        <!-- Blog entry -->
        <div class="w3-container w3-white w3-margin w3-padding-large">
          <div class="w3-center">
            <h3>Wushu Club</h3>
            <h5><span class="w3-opacity">April 23, 2016</span></h5>
          </div>
  
          <div class="w3-justify">
          <img src="../storage/images/UTM Wushu.jpg" alt="Girl Hat" style="width:40%" class="w3-padding-16 center">
            <p>UTM Wushu was a club founded in 5/5/2019 to provide a platform for UTM students to learn and explore Wushu as a chinese traditional
              martial art. Wushu was a martial art originated from China, and also called Kung Fu. Every action in Kung Fu is born as an internal 
              impulse as a result of the fusion of three sources: Spirit, ‘Qi’ Energy, and Physical strength.</p>
            <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          </div>
        </div>
  
        <!-- Blog entry -->
        <div class="w3-container w3-white w3-margin w3-padding-large">
          <div class="w3-center">
            <h3>Kumpulan Tarian Citra Daksina</h3>
            <h5><span class="w3-opacity">02 September 2022</span></h5>
          </div>
  
          <div class="w3-justify">
            <img src="../storage/images/CD.jpg" alt="Girl Hat" style="width:40%" class="w3-padding-16 center">
            <p>Citra Daksina Dance Group is a dance group established under the Citra Daksina Arts Association (PETERANA), 
                Universiti Teknologi Malaysia (UTM). Established since 2007 with the objective of encouraging UTM students to venture into 
                the field of dance arts, honing students' talents and interests while also forming a holistic personality. 
                With a deep interest as an art activist to dignify the art of dance so that it does not pass away with time, 
                this group presents various types of traditional, contemporary, modern and folk dances in an effort to present a new image 
                in the world of dance.</p>
            <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          </div>
        </div>
  
        <!-- Blog entry -->
        <div class="w3-container w3-white w3-margin w3-padding-large">
          <div class="w3-center">
            <h3>Freedom Dance Crew</h3>
            <h5><span class="w3-opacity">02 September 2022</span></h5>
          </div>
  
          <div class="w3-justify">
            <img src="../storage/images/FDC.jpg" alt="Girl Hat" style="width:40%" class="w3-padding-16 center">
            <p>"Freedom" implies the symbolic action of freedom. We provide everyone unlimited and creative spaces for infinite imagination. <br>
                The founder of FDC is Louis Loi Shu Kae and a group of companions that love to dance. This ensemble gathers groups of young 
                people who wish to dance, not willing to be bound in frames, dance together in their own world. We welcome everyone to join us, 
                either you are a beginner or an expert. We uphold the spirit of the phrase "come whenever you want, dance whenever you like, 
                dance without any barriers." to give our best to the audience.</p>
               <br>
               <ul>
               <li><b>Mission</b></li>
                  <li>Let FDC be widely known and give more opportunities to perform for the members.
               <li><b>Vision</b></li>
                  <li>Constantly changing and progressing is the key to success and we always try to present different styles of dances.</li>
               </ul>
            <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          </div>
        </div>
  
        <!-- Blog entry -->
        <div class="w3-container w3-white w3-margin w3-padding-large">
          <div class="w3-center">
            <h3>Hanfu Club</h3>
            <h5><span class="w3-opacity">02 September 2022</span></h5>
          </div>
  
          <div class="w3-justify">
            <img src="../storage/images/Hanfu.jpg" alt="Girl Hat" style="width:40%" class="w3-padding-16 center">
            <p>The establishment date of this association is scheduled for the Huachao Festival 
                (the second day of the second month of the lunar calendar), which is on March 14, 2021. 
                The Huachao Festival, commonly known as the Hundred Flowers Birthday. It is a traditional Chinese festival. 
                Because we love Hanfu culture, we are motivated to deeply understand the beauty of Hanfu and promote Hanfu culture to everyone.
                We have cooperated with various government universities, and we have also cooperated with Hanfu merchants. 
                A series of Hanfu activities are indispensable, such as [Hanfu Dou Yi Dou] ,[Hanfu Bi Yi Bi] [Hanfu Chuan Yi Xia].</p>
               <br>
            <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          </div>
        </div>
  
        <!-- Blog entry -->
        <div class="w3-container w3-white w3-margin w3-padding-large">
          <div class="w3-center">
            <h3>Losting Music Club</h3>
            <h5><span class="w3-opacity">02 September 2022</span></h5>
          </div>
  
          <div class="w3-justify">
            <img src="../storage/images/Losting.jpg" alt="Girl Hat" style="width:40%" class="w3-padding-16 center">
            <p>Losting Music Club was established in 1991 by five music lovers from UTM and it was officially named as “Losting” in 1993. 
                Losting Music Club is a platform for music lovers of UTM to develop and pursue their music dream. Losting Music Club welcomes 
                all genres of music and encourages students to achieve their musical potential through composing while promoting the art of music
                in Malaysia.</p>
                <br>
               <ul>
               <li><b>Mission</b></li>
                  <li>Unite the students of UTM through the music community by discovering and optimizing their musical talents.</li>
               <li><b>Vision</b></li>
                  <li>Increase the confidence and creativity levels of UTM students through performing their own music compositions.</li>
              <li><b>Objective</b></li>
                  <li>Increase the confidence and creativity levels of UTM students through performing their own music compositions.</li>
               </ul>
            <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          </div>
        </div>
  
        <!-- Blog entry -->
        <div class="w3-container w3-white w3-margin w3-padding-large">
          <div class="w3-center">
            <h3>24 Festive Drums Club</h3>
            <h5><span class="w3-opacity">02 September 2022</span></h5>
          </div>
  
          <div class="w3-justify">
            <img src="../storage/images/24 FD.jpg" alt="Girl Hat" style="width:40%" class="w3-padding-16 center">
            <p>24 festival drums consists of 24 drums representing the cycle of 24 festivals in the lunar calendar of the Chinese agriculture community, 
                with each drum representing one festival. Now, let's watch their powerful performance together!</p>
               <br>
            <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          </div>
        </div>
  
        <!-- Blog entry -->
        <div class="w3-container w3-white w3-margin w3-padding-large">
          <div class="w3-center">
            <h3>Gamelan Alunan Sari</h3>
            <h5><span class="w3-opacity">02 September 2022</span></h5>
          </div>
  
          <div class="w3-justify">
            <img src="../storage/images/Gasari.jpg" alt="Girl Hat" style="width:40%" class="w3-padding-16 center">
            <p>A gamelan is a multi-timbre percussion ensemble consisting of metallophones, xylophones, flutes, gongs, voices, as well as bowed and plucked strings, 
                originating from the islands of Java and Bali. Let’s enjoy the show brought to you by Gamelan.</p>
               <br>
            <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          </div>
        </div>
  
        <!-- Blog entry -->
        <div class="w3-container w3-white w3-margin w3-padding-large">
          <div class="w3-center">
            <h3>UTM Chinese Orchestra</h3>
            <h5><span class="w3-opacity">02 September 2022</span></h5>
          </div>
  
          <div class="w3-justify">
            <img src="../storage/images/UTMCO.jpg" alt="Girl Hat" style="width:40%" class="w3-padding-16 center">
            <p>Club is an ensemble music group in PETERANA that uses traditional Chinese instruments, based on the Western symphony orchestra. 
                There are four main groups of instruments, which are strings, plucked strings, woodwinds and percussion. 
                Now, let’s enjoy the performance video from them. </p>
               <br>
            <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          </div>
        </div>
  
        <!-- Blog entry -->
        <div class="w3-container w3-white w3-margin w3-padding-large">
          <div class="w3-center">
            <h3>Teens "N" Theatre</h3>
            <h5><span class="w3-opacity">02 September 2022</span></h5>
          </div>
  
          <div class="w3-justify">
            <img src="../storage/images/TnT.jpg" alt="Girl Hat" style="width:40%" class="w3-padding-16 center">
            <p>It looks so much fun to be part of Teens 'N' Theatre UTM! There are a lot of areas to participate in. Please take note that they will be holding 
                2 big events in June and May. If you feel like becoming a part of this event. Now let’s enjoy the performance by them!</p>
               <br>
            <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          </div>
        </div>
  
        <!-- Blog entry -->
        <div class="w3-container w3-white w3-margin w3-padding-large">
          <div class="w3-center">
            <h3>UTM Diabolo Club</h3>
            <h5><span class="w3-opacity">02 September 2022</span></h5>
          </div>
  
          <div class="w3-justify">
            <img src="../storage/images/Diabolo.jpg" alt="Girl Hat" style="width:40%" class="w3-padding-16 center">
            <p>Diabolo is a Chinese yoyo which is a traditional game originated from Mainland China. This traditional game had been 
                inherited among Chinese residents for centuries.</p>
               <br>
            <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          </div>
        </div>
  
        <!-- Blog entry -->
        <div class="w3-container w3-white w3-margin w3-padding-large">
          <div class="w3-center">
            <h3>Southern Voice Choir</h3>
            <h5><span class="w3-opacity">April 7, 2016</span></h5>
          </div>
  
          <div class="w3-justify">
          <img src="../storage/images/SVC.jpg" alt="Girl Hat" style="width:40%" class="w3-padding-16 center">
            <p>UTM Choir is the official choir team of Universiti Teknologi Malaysia and was established by Mr. Dwiono Hermantoro in 1999. 
              He led the choir team and attended a few competitions such as the Intervarsity Choir Competition and the Choir Olympics 2004.
              In 2020, the team undergoes a rebranding and restructuring period, including a name change to Southern Voice Choir UTM. 
              The new branding aims to bring new life to the choir, as well as reorient their vision to that of their original vision. 
              The team is currently led by Darren Ang Jia Le (B. Sc. Hons. Physics), which has extensive experience in the choir. 
              He is also a conductor of the choir team.</p>
            <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          </div>
        </div>
        
      <!-- END BLOG ENTRIES -->
      </div>
  
      <!-- About/Information menu -->
      <div class="w3-col l4">
      <!-- END About/Intro Menu -->
      </div>
  
  <!-- END w3-content -->
  </div>
  
  <script>
  // Toggle between hiding and showing blog replies/comments
  var btn1 = document.querySelector('#green');
  var btn2 = document.querySelector('#red');

  btn1.addEventListener('click', function() {
    
      if (btn2.classList.contains('red')) {
        btn2.classList.remove('red');
      } 
    this.classList.toggle('green');
    
  });

  btn2.addEventListener('click', function() {
    
      if (btn1.classList.contains('green')) {
        btn1.classList.remove('green');
      } 
    this.classList.toggle('red');
    
  });
  </script>
  
  </body>
  </html>
  </x-guest-layout>