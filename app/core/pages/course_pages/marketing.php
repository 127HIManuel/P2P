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
<h1>Marketing</h1>
<hr>
<div class="container">
    <div class="item">
        <a href="">
            <div class="img-box">
                <img src="<?=ASSETS?>img/courses/marketing/1.jpg" alt="">
            </div>
            <p>Customer Management</p>
        </a>
    </div>

    <div class="item">
        <a href="">
            <div class="img-box">
                <img src="<?=ASSETS?>img/courses/marketing/2.jpg" alt="">
            </div>
            <p>Consumer Etiquette</p>
        </a>
    </div>

    <div class="item">
        <a href="">
            <div class="img-box">
                <img src="<?=ASSETS?>img/courses/marketing/3.jpg" alt="">
            </div>
            <p>Sales Techniques</p>
        </a>
    </div>

    <div class="item">
        <a href="">
            <div class="img-box">
                <img src="<?=ASSETS?>img/courses/marketing/4.jpg" alt="">
            </div>
            <p>Business Pitch</p>
        </a>
    </div>
    <div class="item">
        <a href="">
            <div class="img-box">
                <img src="<?=ASSETS?>img/courses/marketing/5.jpg" alt="">
            </div>
            <p>Market Analysis</p>
        </a>
    </div>
    <div class="item">
        <a href="">
            <div class="img-box">
                <img src="<?=ASSETS?>img/courses/marketing/6.jpg" alt="">
            </div>
            <p>SEO</p>
        </a>
    </div>
    <div class="item">
        <a href="">
            <div class="img-box">
                <img src="<?=ASSETS?>img/courses/marketing/7.jpg" alt="">
            </div>
            <p>SEM</p>
        </a>
    </div>
    <div class="item">
        <a href="">
            <div class="img-box">
                <img src="<?=ASSETS?>img/courses/marketing/8.jpg" alt="">
            </div>
            <p>Social Media Managing</p>
        </a>
    </div>
</div>