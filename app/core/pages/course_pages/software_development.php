<style>
    .container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 16px;
        max-width: 100vw;
        max-height: 100vh;
        overflow-y: auto;
        padding: 10px;
    }

    .item {
        text-align: center;
    }

    .item .img-box {
        background-color: #f1f1f1;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 20px;
    }

    .item img {
        width: 100%;
        max-width: 100%;
        height: 200px; /* Fixed height */
        object-fit: cover; /* Ensures aspect ratio is kept and fills the area */
        border-radius: 20px;
        display: block;
        margin: 0 auto;
    }

    .item p {
        margin-top: 10px;
        font-size: 16px;
        color: #333;
    }
    .item a {
        text-decoration: none;
        color: #007bff;
    }
</style>
<h1>Software Development</h1>
<hr>
<div class="container">
    <div class="item">
        <a href="">
            <div class="img-box">
                <img src="<?=ASSETS?>img/courses/software_development/1.jpg" alt="">
            </div>
            <p>Front-end Development</p>
        </a>
    </div>

    <div class="item">
        <a href="">
            <div class="img-box">
                <img src="<?=ASSETS?>img/courses/software_development/2.jpg" alt="">
            </div>
            <p>Back-end Development</p>
        </a>
    </div>

    <div class="item">
        <a href="">
            <div class="img-box">
                <img src="<?=ASSETS?>img/courses/software_development/3.jpg" alt="">
            </div>
            <p>Database Management</p>
        </a>
    </div>

    <div class="item">
        <a href="">
            <div class="img-box">
                <img src="<?=ASSETS?>img/courses/software_development/4.jpg" alt="">
            </div>
            <p>API's</p>
        </a>
    </div>
    <div class="item">
        <a href="">
            <div class="img-box">
                <img src="<?=ASSETS?>img/courses/software_development/5.jpg" alt="">
            </div>
            <p>Development Methodologies</p>
        </a>
    </div>
    <div class="item">
        <a href="">
            <div class="img-box">
                <img src="<?=ASSETS?>img/courses/software_development/6.jpg" alt="">
            </div>
            <p>SDLC</p>
        </a>
    </div>
    <div class="item">
        <a href="">
            <div class="img-box">
                <img src="<?=ASSETS?>img/courses/software_development/7.jpg" alt="">
            </div>
            <p>Software Testing</p>
        </a>
    </div>
    <div class="item">
        <a href="">
            <div class="img-box">
                <img src="<?=ASSETS?>img/courses/software_development/8.jpg" alt="">
            </div>
            <p>Integrating Components</p>
        </a>
    </div>
</div>