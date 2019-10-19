<!DOCTYPE html>
<html>
    <head>
        <title>The Most Dangerous Typing Test</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/popup.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/selection.css">
        <link rel="stylesheet" href="css/content.css">

        <script src="js/main.js"></script>
        
        <link rel="icon" type="image/png" href="images/logo.png">
    </head>
    <body>
        <div id="dark">
            <div id="popup">
                <img src="images/cancel.png" id="cancel">
                <h1>Story Title</h1>
                <p>This is the story.</p>
                <hr>
                <p>145 reviews</p>
                <div id="reviews">
                    
                </div>
            </div>
        </div>

        <div id="container">

            <!-- Menu -->
            <div id="menu_area">
                <div class="child">
                    <h1>The World's Most <span class="emphasis">Dangerous</span> Typing Test</h1>
                    <h4>Don’t stop typing, or all progress will be lost.</h4>
                    <br>
                    <button onclick="startTyping()" class="blue_button">Start Typing</button>
                    <br>
                    <p id="message">You failed. <a href="javascript:startTyping()">Try again?</a></p>
                </div>

                <div id="stories">
                    <h1>Stories</h1>
                    <div class="story" onclick="display('id')">
                        <div class="title">Test</div>
                        <div class="rating">5/5 stars</div>
                        <br>
                        <div class="preview">This is a test.</div>
                        <div class="review_count">5 reviews</div>
                    </div>
                    <br>
                    <div class="story" onclick="display('id')">
                        <div class="title">Test</div>
                        <div class="rating">5/5 stars</div>
                        <br>
                        <div class="preview">This is a test.</div>
                        <div class="review_count">5 reviews</div>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div id="content_area" class="child">
                <h3>Time remaining: <span id="count_down">0:00</span></h3>
                <div id="warning_context"><span id="warning"></span> seconds until failure</div>
                <br>
                <textarea id="text_area" placeholder="Start typing to begin..."></textarea>                
                <br>
                <button onclick="stopTyping()" class="gray_button">Back</button>
                <button onclick="finish()" class="red_button" id="stop_button">Stop</button>
                <button onclick="download()" class="blue_button">Save</button>
            </div>

        </div>
    </body>
</html>