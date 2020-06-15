
<div class="plasta pt-3 pb-3">
<div class="plasta-cover pb-3">
    
    <div class="col-md text-center theme-text pt-4">
        <img src="images/logo1.png" style="width: 150px; height: 150px; margin: auto; box-shadow: 2px 2px 4px #000; background: rgba(000, 000, 000, 0.4); border: 3px solid #fff; border-radius: 50%;" alt="">
        <h2><b>DevBiro</b></h2>
        <p class="h6"><i>Every Developer's Favorite NotePad . . .</i></p>
    </div>
</div>
</div>

<p class="h5 text-center theme-text m-4 mb-1">Start your coding journey here!</p>
<p class="text-center m-4 mt-1">
<!-- Trigger/Open The Modal -->
<button class="btn-lg theme-text" id="my-codeBtn">Open mini-Editor</button>
</p>

<!-- The Modal -->
<div id="myModal" class="code-modal theme-text">

<!-- Modal content -->
<div class="modal-content">
    <p class="p-0">
        <span class="modal-close">&times;</span>
        <span class="h4">Mini-DevBiro &nbsp;</span>
    </p>
    <p class="p-0">
        <select id="" style="border-radius: 8px; padding: 5px 10px;" onchange="">
            <option value="html">HTML</option>
            <option value="css">CSS</option>
            <option value="js">JavaScript</option>
        </select>
    <p>
    <div class="row m-0 p-0">
        <div class="col-md p-1 mt-0">
            <span class="theme-dark m-0" style="width: auto; padding: 5px 15px; border-radius: 8px 8px 0px 0px;">
                <input type="radio" checked disabled>
                Script
            </span>
            <button type="button" onclick="runScript()" class="theme-dark text-success p-2" style="width: auto; border: none;"><i class="fa fa-play"></i></button>
            <textarea class="editor"></textarea>
        </div>
        <div class="col-md p-1 mt-0">
            <span class="theme-dark m-0" style="width: auto; padding: 5px 15px; border-radius: 8px 8px 0px 0px;">
                <input type="radio" checked disabled>
                Browser 
            </span>
            <script>
                function searchUrl(){
                    var searchField = document.getElementById("searchBar");
                    document.getElementById("browserFrame").src = searchField.value;
                }
            </script>
            <form>
                <input type="url" id="searchBar" placeholder="Enter URL ..." style="padding: 5px 15px; border-radius: 2px; width: 200px;" id="">
                <button type="button" onclick="searchUrl()" class="theme-dark theme-text p-2 text-white" style="width: auto; border: none;"><i class="fa fa-arrow-circle-right"></i></button>
            </form>
            <iframe id="browserFrame" class="editor" src="" frameborder="0"></iframe>
        </div>
    </div>
</div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("my-codeBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("modal-close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// }
</script>
<p class="h5 theme-text m-4 mb-1">Do complex coding, on a verified account:  &nbsp;
<!-- Trigger/Open The Modal -->
<button class="btn-lg theme-text" id="my-logBtn">Auth Coding</button>
</p>

<!-- The Modal -->
<div id="my-logModal" class="code-modal theme-text">

<!-- Modal content -->
<div class="modal-content">
    <p class="p-0">
        <span class="loGmodal-close modal-close">&times;</span>
        <span class="h4">Login OR Signup &nbsp;</span>
    </p>
    <div class="row m-0 p-0">
        <div class="col-md p-1 mt-0">
            <span class="theme-dark m-0" style="width: auto; padding: 5px 15px; border-radius: 8px 8px 0px 0px;">
                <input type="radio" checked disabled>
                Login
            </span>
            <form id="loginForm" class="editor" style="height: auto;">
                <p class="h5 theme-text m-2">Email : </p>
                <input type="email" id="logmail" placeholder="email@host.com" class="form-control theme-input m-2">
                <p class="h5 theme-text m-2">Password : </p>
                <input type="password" id="logpass" placeholder="XXXXXX" class="form-control theme-input m-2">
                <button type="button" class="theme-dark m-2 btn theme-text">Login</button>
            </form>
        </div>
        <div class="col-md p-1 mt-0">
            <span class="theme-dark m-0" style="width: auto; padding: 5px 15px; border-radius: 8px 8px 0px 0px;">
                <input type="radio" checked disabled>
                Signup
            </span>
            <form id="signupForm" class="editor" style="height: auto;">
                <p class="h5 theme-text m-2">Fullname : </p>
                <input type="text" id="supname" placeholder="Firstname Lastname" class="form-control theme-input m-2">
                <p class="h5 theme-text m-2">Email : </p>
                <input type="email" id="supmail" placeholder="email@host.com" class="form-control theme-input m-2">
                <p class="h5 theme-text m-2">Password : </p>
                <input type="password" id="suppass" placeholder="XXXXXX" class="form-control theme-input m-2">
                <button type="button" class="theme-dark m-2 btn theme-text">Signup</button>
            </form>

            </form>
        </div>
    </div>
</div>

</div>

<script>
// Get the modal
var loGmodal = document.getElementById("my-logModal");

// Get the button that opens the loGmodal
var loGbtn = document.getElementById("my-logBtn");

// Get the <span> element that closes the loGmodal
var loGspan = document.getElementsByClassName("loGmodal-close")[0];

// When the user clicks the button, open the loGmodal 
loGbtn.onclick = function() {
loGmodal.style.display = "block";
}

// When the user clicks on <span> (x), close the loGmodal
loGspan.onclick = function() {
loGmodal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// }
</script>
<p class="text-center" style="max-width: 95%; max-height: 80%;">
    <video onclick="playPause()" muted id="myVideo" style="margin-bottom: -140px; position: static; z-index: -10; max-width: 95%; max-height: 80%; border-radius: 8px;" loop>
        <source src="images/greathack.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div onclick="playPause()" class="h1 theme-text text-center" style="height 90px; min-width:40%; width: auto; max-width: 80%; margin:auto; margin-bottom: 100px; opacity: 0.7; position: relative: z-index: 100;"><i class="fa fa-play" id="myplay"></i><i class="fa fa-pause" id="mypause"></i></div>
    <script> 
        var myVideo = document.getElementById("myVideo"); 
        var play = document.getElementById("myplay"); 
        var pause = document.getElementById("mypause"); 

        function playPause() { 
            
            if (myVideo.paused) {
                myVideo.play(); 
                pause.style.display = "block";
                play.style.display = "none";
            }
            else {
                myVideo.pause(); 
                pause.style.display = "none";
                play.style.display = "block";
            } 
        }
        setTimeout(playPause(), 3000);
    </script>
</p>


<!-- User guide -->
<div class="p-3 theme-text">
    <p class="h3">DevBiro</p>
    <p>
        <span class="h5">Online Code Editor</span> | 
        <span style="border-radius: 8px; background: #ccc; color: dodgerblue; padding: 5px 8px;"> V1.0.0</span>
    </p>
    <p class="m-2">
        <p class="h5">Introduction</p>
        <p class="h6">
            This an online code editor for effective
            <span style="border-radius: 4px; background: #ccc; color: dodgerblue; padding: 0px 5px;"> editing</span>,
            <span style="border-radius: 4px; background: #ccc; color: dodgerblue; padding: 0px 5px;"> refactoring</span>,
            <span style="border-radius: 4px; background: #ccc; color: dodgerblue; padding: 0px 5px;"> reloading</span>, and
            <span style="border-radius: 4px; background: #ccc; color: dodgerblue; padding: 0px 5px;"> running</span>,
            codes written in basic programming languages, as well as support.
            
        </p>
    </p>
    <p class="m-2">
        <p class="h5">Installation</p>
        <p class="h6">
            Install DevBiro into webpages by following the guide 
            <span style="border-radius: 4px; background: #ccc; color: dodgerblue; padding: 0px 5px;">
                <a href="http://">Installation</a>
            </span>.
        </p>
    </p>
    <p class="m-2">
        <p class="h5">Documentation</p>
        <p class="h6">
            Please check the DevBiro documentation for using,
            <span style="border-radius: 4px; background: #ccc; color: dodgerblue; padding: 0px 5px;"><a href="">Docs</a></span>.
        </p>
    </p>
    <p class="m-2">
        <p class="h5">Reporting Issues</p>
        <p class="h6">
            Issues should be reported in the DevBiro support services, 
            <span style="border-radius: 4px; background: #ccc; color: dodgerblue; padding: 0px 5px;"><a href="">Supports</a></span>.
        </p>
    </p>
    <p class="m-2">
        <p class="h5">Dependencies</p>
        <ul>
            <li class="h3">
                <span style="border-radius: 4px; background: #ccc; color: dodgerblue; padding: 0px 5px;">Code Mirror</span>
            </li>
        </ul>
    </p>

</div>