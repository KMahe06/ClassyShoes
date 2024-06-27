<!DOCTYPE html>
<html lang="en">
<?php include 'head.html'; ?>
<head>
    <style>
        .mainbg {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            width: 100%;
            margin: 0;
            background-image: url('https://media.gq.com/photos/63e2b84fc3e6ea31f7c7dd30/16:9/w_2560%2Cc_limit/best-shoe-brands-nike-asics-celine.jpg'); /* Replace 'your-image.jpg' with your actual image path */
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
        }
        .main-class .images {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            padding: 50px 70px;
        }
        .flip-card {
            background-color: transparent;
            width: 200px;
            height: 200px;
            perspective: 1000px;
        }
        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s;
            transform-style: preserve-3d;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }
        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }
        .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
        }
        .flip-card-front {
            background-color: #bbb;
            color: black;
        }
        .flip-card-back {
            background-color: #2980b9;
            color: white;
            transform: rotateY(180deg);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        marquee {
            font-size: 20px;
            color: black;
            background-color: #87cacf;
            padding: 10px ;
        }
    </style>
</head>
<body>
    <marquee>Welcome to My Shoe Collection! Check out the latest shoes from Nike, Adidas, Puma, and Crocs!</marquee>
    <main>
        <div class="mainbg">
            <div class="main-class">
                <div class="images">
                    <a href="https://www.nike.com" target="_blank">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="https://yt3.googleusercontent.com/g3wGI89O9cJEwPVEYQUYTI-XXYyo2M4ma4szxRI7Yjwccp2efgm3eihapjBF1Ef4fQApJU7GE-M=s900-c-k-c0x00ffffff-no-rj" alt="Nike Shoes" style="width:100%;height:100%;">
                                </div>
                                <div class="flip-card-back">
                                    <h1>Nike Shoes</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="https://www.adidas.com" target="_blank">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="data:image/png;base64,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" alt="Adidas Shoes" style="width:100%;height:100%;">
                                </div>
                                <div class="flip-card-back">
                                    <h1>Adidas Shoes</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="https://www.puma.com" target="_blank">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2UKFZOJyNWYWCFvHR3vgtuWlGIXcvzMyWMQ&s" style="width:100%;height:100%">
                                </div>
                                <div class="flip-card-back">
                                    <h1>Puma Shoes</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="https://www.crocs.com" target="_blank">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="https://s3-symbol-logo.tradingview.com/crocs--600.png" alt="Crocs Shoes" style="width:100%;height:100%;">
                                </div>
                                <div class="flip-card-back">
                                    <h1>Crocs Shoes</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <?php include 'footer.html'; ?>
</body>
</html>
