<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            *{
    margin: 0;
    padding:0;
    font-family:sans-serif;
     
}
body{
     background:  #333  ; 
     background-size:cover;
     color:#532837;
    
    
}

.container{
    width: auto;
    margin-right: auto;
    margin-left: auto;
    padding: 20px 50px;
    background: white;
    -webkit-border-radius:5px;
    -moz-border-radius:5px;
    border-radius:5px;
    text-align: center;

}

h1{ 
    margin:0 0 20px;
    padding:0 0 20px;
    border-bottom: solid 1px #ddd;

}
form{
    text-align:left;
}
form label{
   display: block;
    margin:25px 0;
    font-weight:bold;

}
form input,
form select{
    padding:8px ;
    margin:10px 0;
}

form input[type="text"]{
    border: 2px solid #6c2726;
    width:120px ;
}

form input[type="number"]{
    border: 2px solid #6c2726;
    width:120px ;
}
#erdestination,#erage,#erbooking_type{
    color: red;
    font-size: 15px;
    font-weight: 100;
}
button{
    background:#6c2726;
    color: white;
    border:none;
    border-bottom:solid 4px #222;
    text-transform: uppercase;
    font-size:18px;
    padding: 20px 30px;
    width: 100%;

}

button:hover {
    background: #4c2827;
    border-bottom-color:#111;
}    

button:active {
    position:relative;
    top:1px;
}
#finalprice{
    font-size:50px;
    margin-top:20px;
    padding-bottom: 0;
}

#finalprice::before {
    content:"Final price";
    font-size:14px;
    font-weight:bold;
    display:block;
    text-transform: uppercase;

}
#normalprice{
    font-size:50px;
    margin-top:20px;
    padding-bottom: 0;
}

#normalprice::before {
    content:"Normal Price";
    font-size:14px;
    font-weight:bold;
    display:block;
    text-transform: uppercase;

}

a {
  color: #000;
}

/* header */

.header {
  background-color: #fff;
  box-shadow: 1px 1px 4px 0 rgba(0,0,0,.1);
  position: fixed;
  width: 100%;
  z-index: 3;
}

.header ul {
  margin: 0;
  padding: 0;
  list-style: none;
  overflow: hidden;
  background-color: #fff;
}

.header li a {
  display: block;
  padding: 20px 20px;
  border-right: 1px solid #f4f4f4;
  text-decoration: none;
}

.header li a:hover,
.header .menu-btn:hover {
  background-color: #f4f4f4;
}

.header .logo {
  display: block;
  float: left;
  /* font-size: 2em; */
  /* padding: 10px 20px; */
  text-decoration: none;
}
.header .logo img{
    max-height: 60px;
    padding: 0px 20px;
}

/* menu */

.header .menu {
  clear: both;
  max-height: 0;
  transition: max-height .2s ease-out;
}

/* menu icon */

.header .menu-icon {
  cursor: pointer;
  display: inline-block;
  float: right;
  padding: 28px 20px;
  position: relative;
  user-select: none;
}

.header .menu-icon .navicon {
  background: #333;
  display: block;
  height: 2px;
  position: relative;
  transition: background .2s ease-out;
  width: 18px;
}

.header .menu-icon .navicon:before,
.header .menu-icon .navicon:after {
  background: #333;
  content: '';
  display: block;
  height: 100%;
  position: absolute;
  transition: all .2s ease-out;
  width: 100%;
}

.header .menu-icon .navicon:before {
  top: 5px;
}

.header .menu-icon .navicon:after {
  top: -5px;
}

/* menu btn */

.header .menu-btn {
  display: none;
}

.header .menu-btn:checked ~ .menu {
  max-height: 240px;
}

.header .menu-btn:checked ~ .menu-icon .navicon {
  background: transparent;
}

.header .menu-btn:checked ~ .menu-icon .navicon:before {
  transform: rotate(-45deg);
}

.header .menu-btn:checked ~ .menu-icon .navicon:after {
  transform: rotate(45deg);
}

.header .menu-btn:checked ~ .menu-icon:not(.steps) .navicon:before,
.header .menu-btn:checked ~ .menu-icon:not(.steps) .navicon:after {
  top: 0;
}

/* 48em = 768px */

@media (min-width: 48em) {
  .header li {
    float: left;
  }
  .header li a {
    padding: 20px 30px;
  }
  .header .menu {
    clear: none;
    float: right;
    max-height: none;
  }
  .header .menu-icon {
    display: none;
  }
}

        </style>
    </head>
    <body class="antialiased">
        <header class="header">
            <a href="/" class="logo"> <img src="/images/logo.png" alt="TITU"></a>
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
            {{-- <h2>Oguz han Engineering and Technology University of Turkmenistan</h2> --}}
            <ul class="menu">
              <li><a href="#calculator">Calculator</a></li>
              <li><a href="#about">About</a></li>
              {{-- <li><a href="#careers">Careers</a></li> --}}
              {{-- <li><a href="#contact">Contact</a></li> --}}
            </ul>
          </header>

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="main-start">
                <img src="/images/titu.png" alt="TITU">
              </div>
        </div>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="container" id="calculator">
                <h1>Calculating the thermal conductivity of a one-dimensional rod</h1>
        
                <div class="calculator">
        
                    <form action="/calculate-thermal-conductivity" method="POST">
                        @csrf
                        
                        <label>Temperature at the first end of the rod (in degrees Celsius)<br>
                            <input type="number" id="first_end" name="first_end" required>
                             <p id="erage" ></p>
                        </label>

                        <label>Temperature at the second end of the rod (in degrees Celsius)<br>
                            <input type="number" id="second_end" name="second_end" required>
                             <p id="erage" ></p>
                        </label>

                        <label>Rod length (meters)<br>
                            <input type="number" id="length" name="length"  min="1" required>
                             <p id="erage" ></p>
                        </label>

                        <label>Cross-sectional area of the rod (in square meters)<br>
                            <input type="text" id="area" name="area" required>
                             <p id="erage" ></p>
                        </label>

                        <label>Heat flow (in watts)<br>
                            <input type="text" id="flow" name="flow" required>
                             <p id="erage" ></p>
                        </label>
                       
                        <button type="submit" id="calculate">Calculate!</button>
        
                    </form>
                </div> 
        
                {{-- <div id="normalprice">
                   
                    ₹<span id="namount">0.00</span>
        
                </div>
        
                <div id="finalprice">
                   
                    ₹<span id="amount">0.00</span>
                    
                </div> --}}
            </div>
        
        </div>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0" id="about">
            <div class="container" style="text-align:left">
                <h2 style="text-align:center">About ETUT</h2> <br> <br>
                <div class="text-justify"><p>There are currently five faculties at the university:</p>

                    <p>Chemical and Nanotechnologies;<br>
                    <br>
                    Biotechnology and Ecology;<br>
                    <br>
                    Computer Sciences and Information Technologies;<br>
                    <br>
                    Cyberphysical Systems;<br>
                    <br>
                    Economics of Innovations.</p>
                    
                    <p>The university offers the following undergraduate courses:</p>
                    
                    <p>1. Mathematics and mechanics (course of study: applied mathematics and computer science (mathematics for engineers)).</p>
                    
                    <p>2. Biological sciences (areas of preparation: cellular and molecular biology; genetics and bioengineering; microbiology).</p>
                    
                    <p>3. Chemical Technology (areas of training: chemical technology; chemical engineering).</p>
                    
                    <p>4. Industrial ecology and biotechnology (direction of preparation: biotechnology).</p>
                    
                    <p>5. Materials Technology (Preparation: Materials Research and New Materials Technology).</p>
                    
                    <p>6. Nanotechnologies and nanomaterials (direction of preparation: nanomaterials).</p>
                    
                    <p>7. Geography (areas of preparation: ecology and nature use; cartography and geoinformatics).</p>
                    
                    <p>8. Informatics and Computing Techniques (Areas of Preparation: Informatics and Computing Techniques; Information Systems and Technologies; Digital Infrastructure and Cyber ​​Security; Mobile and Network Engineering; Animation and Graphic Design; Artificial Intelligence and Expert Systems; Data Protection Techniques; Digital Economy) .</p>
                    
                    <p>9. Mechanical Engineering (areas of preparation: automation and control; mechatronics and robotics).</p>
                    
                    <p>10. Electronics, radio engineering and communication systems (direction of preparation: electronics and nanoelectronics).</p>
                    
                    <p>11. Photonics, equipment, optical and biotechnical systems and technologies (direction of preparation: biotechnology electronics).</p>
                    
                    <p>12. Economics and Management (areas of training: HR Management; Innovative Economics; Technology Business; Innovation Management and International Business).</p>
                    
                    <p>13. Physical and technical sciences and technologies (direction of preparation: physics of modern technologies).</p>
                    
                    <p>14. Study of linguistics and literature (areas of preparation: philology (technical English and Japanese); computer linguistics).</p>
                    
                    <p>Master's degree is taught in the field of "Pedagogical Education (Methods of Teaching Natural and Exact Sciences)".</p>
                    
                    <p>&nbsp;</p></div>
    </div>
    </body>
</html>
