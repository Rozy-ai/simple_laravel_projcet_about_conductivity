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
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="container">
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
    </body>
</html>