<?php
   $style = 'index.css';
   include 'header.php';
?>
<!-- Main Graphic -->
<div id="indexBanner">
   <div id="bannerText" class="pageWrapper">
      Stay fit. <br />
      Make goals. <br />
      Change your life. <br />
      <span class="highlight">Start Tollo today.</span>
   </div>
</div>
<!-- Welcome To Tollo Section -->
<main id="mainContent">
   <div class="pageWrapper wrapper">
      <div id="welcomeSection" class="flexContainer">
         <div id="welcome">
            <h2 class="title">Welcome to Tollo.</h2>
            <div id="welcomeText">
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eu ligula in dui ullamcorper accumsan. In vel est mattis, elementum nulla a, rutrum mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris tincidunt purus quis varius dictum. Maecenas id aliquam nunc. Nulla tristique ligula in diam consequat, id pharetra ex porttitor. Sed feugiat facilisis leo, quis volutpat nisi condimentum eget. Phasellus vestibulum sodales orci, id aliquet purus auctor eu. Nam vel dolor nec felis pharetra porta. Fusce rhoncus hendrerit neque eu ultricies.
                  <br />
                  <br />
                  Start today with Tollo, keep track of your measurements, goals and workouts!
               </p>
            </div>
            <br />
            <div class="buttonContainer">
               <a id="startTollo" href="<?= VIEWPATH ?>dashboard.php" class="button buttonMain">Start Tollo</a>
            </div>
         </div>
         <div id="welcomeImg">
            <img class="largePic" src="<?= IMGPATH ?>jogging.jpg" alt="A person jogging in the city">
         </div>
      </div>
   </div>
   <div class="divider"></div>
   <!--Features Section-->
   <div id="featuresSection">
      <h2 class="hidden">Features</h2>
      <div id="features" class="flexContainer pageWrapper">
         <div id="trackWorkouts" class="feature flexContainer">
            <h3>Track workouts.</h3>
            <div class="featureImgandText">
               <img src="<?= IMGPATH ?>1.jpg" alt="A person jogging on a treadmill">
               <div class="featureImgText">
                  <p>Easily track your workouts and set routines. With Tollo you can become your own personal trainer.</p>
               </div>
            </div>
         </div>
         <div id="setGoals" class="feature flexContainer">
            <h3>Set goals.</h3>
            <div class="featureImgandText">
               <img src="<?= IMGPATH ?>8.jpg" alt="A person lifting weights">
               <div class="featureImgText">
                  <p>Set daily goals, long-term goals and keep track of your progress.</p>
               </div>
            </div>
         </div>
         <div id="trackJournal" class="feature flexContainer">
            <h3>Journal.</h3>
            <div class="featureImgandText">
               <img src="<?= IMGPATH ?>goal.jpg" alt="A person running through a forest">
               <div class="featureImgText">
                  <p>Track your thoughts, feelings and results in Tollo. With our diary feature, you can log what you're feeling.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
<?php
   include 'footer.php';
?>
