 <div class="menu">
     <button id="ToggleMenu"> <span class="material-symbols-outlined">menu</span>
     </button>
     <div id="Slidebarframe">
         <div class="Settingtoggler">
             <!-- <p class="RainbowText">Rainbow Theme</p>
             <button id="EnableRainbowTheme">x</button>
             No rainbows :(
             -->
             <p id="lightText">Light theme</p>
             <button id="light">x</button>

         </div>

     </div>
 </div>
 <script>
     const ToggleMenu = document.getElementById('ToggleMenu')
     const Slidebarframe = document.getElementById('Slidebarframe')
     //  const EnableRainbowTheme = document.getElementById('EnableRainbowTheme')
     const light = document.getElementById('light')
     const mainTh = document.querySelector('main')
     const footHead = document.querySelectorAll('footer, header')
     const lightText = document.getElementById('lightText')

     //  const NeonBorders = document['red', 'green']
     let theme = true
     let IsOpen = false
     // let can be changed and const can't be changed

     ToggleMenu.addEventListener('click', () => {
         if (IsOpen === true) {
             Slidebarframe.style.display = 'none';

             IsOpen = false
         } else {
             Slidebarframe.style.display = 'flex';
             IsOpen = true
         }
     });
     light.addEventListener('click', () => {
         if (theme === true) {
             mainTh.classList.remove('darkTheme')
             mainTh.classList.add('lightTheme')
             footHead.forEach(function(A) {
                 A.classList.remove('darkThemeFtHr')
                 A.classList.add('lightThemeFtHr')
             })
             lightText.textContent = 'darkTheme'
             theme = false
             
         } else {
             mainTh.classList.remove('lightTheme')
             mainTh.classList.add('darkTheme')
             footHead.forEach(function(A) {
                 A.classList.remove('lightThemeFtHr')
                 A.classList.add('darkThemeFtHr')
             })
             lightText.textContent = 'lightTheme'
             theme = true
         }


     })
     //  EnableRainbowTheme.addEventListener('click', () => {
     //  document.querySelectorAll('.red, .green, .blue').forEach(el => {
     //      el.classList.remove(...colors); // removes red, green and blue
     //      el.classList.add('rainbowBorder');
     //  });
     //  }); Misread the assignment dont change to rainbow theme, it doesn't work anyways but i'll keep it here incase
 </script>,