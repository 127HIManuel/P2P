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

<h1>Product Management</h1>
<hr>
<div class="container">
    <div class="item">
        <a href="">
            <div class="img-box">
                <img src="<?=ASSETS?>img/courses/product_management/1.jpg" alt="">
            </div>
            <p>Product Lifecycle</p>
        </a>
    </div>

    <div class="item">
        <a href="">
            <div class="img-box">
                <img src="<?=ASSETS?>img/courses/product_management/2.jpg" alt="">
            </div>
            <p>Market Research</p>
        </a>
    </div>

    <div class="item">
        <a href="">
            <div class="img-box">
                <img src="<?=ASSETS?>img/courses/product_management/3.jpg" alt="">
            </div>
            <p>Product Strategy</p>
        </a>
    </div>

    <div class="item">
        <a href="">
            <div class="img-box">
                <img src="<?=ASSETS?>img/courses/product_management/4.jpg" alt="">
            </div>
            <p>Pricing Strategies</p>
        </a>
    </div>
    <div class="item">
        <a href="">
            <div class="img-box">
                <img src="<?=ASSETS?>img/courses/product_management/5.jpg" alt="">
            </div>
            <p>Product Launch</p>
        </a>
    </div>
    <div class="item">
        <a href="">
            <div class="img-box">
                <img src="<?=ASSETS?>img/courses/product_management/6.jpg" alt="">
            </div>
            <p>Product Marketing</p>
        </a>
    </div>
    <div class="item">
        <a href="">
            <div class="img-box">
                <img src="<?=ASSETS?>img/courses/product_management/7.jpg" alt="">
            </div>
            <p>Customer Feedback</p>
        </a>
    </div>
    <div class="item">
        <a href="">
            <div class="img-box">
                <img src="<?=ASSETS?>img/courses/product_management/8.jpg" alt="">
            </div>
            <p>Product Improvement</p>
        </a>
    </div>
</div>