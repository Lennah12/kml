<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>faq oryx</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>body {
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    color: #fff;
    background-color:whitesmoke;
    margin: 0;
    padding: 0;
}



.hero {
    background-color:white;
    padding: 100px 0;
    text-align: center;
}

.hero h1 {
    font-size: 3em;
    color:green;
}

.hero p {
    font-size: 1.5em;
    color:olivedrab;
}

.hero-image {
    margin-top: 20px;
}

.hero-image img {
    width: 100%;
    max-width: 500px;
}

.features {
    background-color:green;
    padding: 50px 0;
}

.feature-card {
    background-color: #222;
    padding: 30px;
    margin: 20px 0;
    border-radius: 8px;
}

.feature-card h3 {
    color:green;
}

.feature-card p {
    color:olivedrab;
}

.feature-card .btn {
    background-color: #9acd32;
    border: none;
    color: #000;
}

.feature-card .btn:hover {
    background-color: #8ac52d;
}

.faq {
    background-color:whitesmoke;
    color: #000;
    padding: 50px 0;
}

.faq h2 {
    color:green;
}

.panel-group .panel {
    border-radius: 0;
    box-shadow: none;
}

.panel-group .panel-heading {
    background-color:green;
    border-color:green;
}

.panel-group .panel-title a {
    color:white;
    display: block;
    padding: 10px 15px;
    text-decoration: none;
}

.panel-group .panel-title a:hover {
    background-color: #8ac52d;
}

.panel-group .panel-body {
    background-color: #f9f9f9;
}

body {
            margin: 0;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #f1f1f1;
            padding: 10px 20px;
        }
        
        .header .imgcontainer {
            margin-right: 10px;
        }
        
        .header img {
            width: 100px;
            height: auto;
            object-fit: contain;
            /* Optional: Adjust positioning if needed */
        }
        
        .header a {
            color: green;
            text-align: center;
            padding: 5px;
            text-decoration: none;
            font-size: 12px;
            line-height: 25px;
            border-radius: 4px;
            margin-right: 5px;
        }
        
        .header a.logo {
            font-size: 25px;
            font-weight: bolder;
        }
        
        .header a:hover {
            background-color: #ddd;
            color: black;
        }
        
        .header a.active {
            background-color: green;
            color: white;
        }
        
        @media screen and (max-width: 500px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
            }
            .header a {
                display: block;
                text-align: left;
                margin: 5px 0;
            }
        }
        
        h1,
        h2 {
            font-weight: bold;
            text-align: center;
        }
        
        footer {
            color: green;
            padding: 20px;
            background-color: black;
        }
        
        .footer-content {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .footer-content form {
            display: flex;
            justify-content: center;
            align-items: center;
            color: green;
        }
        
        .footer-content input {
            padding: 10px;
            margin-right: 10px;
            border: none;
            border-radius: 5px;
        }
        
        .footer-content button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: darkorange;
            color: green;
            cursor: pointer;
        }
        
        .footer-links {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            color: green;
        }
        
        .footer-links div {
            margin-bottom: 20px;
        }
        
        .footer-links h5 {
            margin-bottom: 10px;
        }
        
        .footer-links ul {
            list-style: none;
            padding: 0;
        }
        
        .footer-links ul li {
            margin-bottom: 10px;
        }
        
        .footer-links ul li a {
            text-decoration: none;
            color: olive;
        }
        
        footer p {
            text-align: center;
            margin: 0;
            margin-top: 20px;
            font-size: 14px;
        }
        
</style>
</head>

<body>
<div class="header">
        <div class="imgcontainer">
            <img src="corn8.jpeg" alt="Logo">
        </div>
        <div class="header-right">
            <a href="index.html">HOME</a>
            <a href="brands.html">OUR BRANDS</a>
            <a href="gallery.html">PRODUCTS GALLERY</a>
            <a href="contact.html">CONTACTS</a>
            <a href="about.html">ABOUT</a>
            <a class="active" href="faq.html">FAQ</a>
        </div>
    </div>
    <section class="hero">
        <div class="container text-center">
            <h1>How can we help?</h1>
            <p>Find answers to your questions</p>
            
        </div>
    </section>

    <section class="features container text-center">
        <div class="row">
            <div class="col-md-4">
                <div class="feature-card">
                    <h3>KML Brands</h3>
                    <p>Get to know KML brands.</p>
                    <a href="brands.html" class="btn btn-secondary">view brands</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <h3>Contact Us</h3>
                    <p>Reach out to Us for assistance.</p>
                    <a href="contact.html" class="btn btn-secondary">Contact Us</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <h3>KML Gallery</h3>
                    <p>Get to explore.</p>
                    <a href="#" class="btn btn-secondary">Explore</a>
                </div>
            </div>
        </div>
    </section>

    <section class="faq container">
        <h2 class="text-center">Frequently Asked Questions</h2>
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">How can I contact customer support?</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">You can contact our customer support team via email at kilimambogomillers@gmail.com or by calling our company's number at +25490272858.</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">what packaging sizes do you offer?</a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">We offer various packaging sizes ,including 2kg bales,1kg bales,5kg, and bulk packaging for commercial use.</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">How do you ensure the quality of your maize flour?</a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">We follow strict quality control measures,including sourcing high-quality corns and conducting regular quality checks to ensure our maize flour meets the highest standards.</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">How long does it take to receive my order?</a>
                    </h4>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body">Delivery time vary depending on your location, typically orders are processed & delivered within 1-2 business days.</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Where can I buy your maize flour?</a>
                    </h4>
                </div>
                <div id="collapse5" class="panel-collapse collapse">
                    <div class="panel-body">You can purchase our maize flour from us directly or source it in our supermarkets outlets such as Quickmarts.</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">How many maize flour brands do you have?</a>
                    </h4>
                </div>
                <div id="collapse6" class="panel-collapse collapse">
                    <div class="panel-body">We have two maize flour brands, One's  namely, ORYX PREMIUM MAIZE MEAL the other one's grade 1 sifted namely, TAHIDI GRADE 1 SIFTED MAIZE FLOUR.</div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-content">
            <h4>Sign Up </h4>
            <form>
                <input type="email" placeholder="mailto@youremail.com">
                <button type="submit">Subscribe</button>
            </form>
        </div>
        <div class="footer-links">
            <div>
                <h5>Quick Links</h5>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="brands.html">Brands</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <div>
                <h5>Service</h5>
                <ul>
                    <li><a href="contact.html">Support</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                   
                </ul>
            </div>
            <div>
                <h5>Social Media</h5>
                <ul>
                    <li><a href="#">FaceBook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Linked In</a></li>
                </ul>
            </div>
            <div>
                <h5 style>Reach Out To Us</h5>
                <ul>
                    <li><a href="contact.html">Telephone</a></li>
                    <li><a href="contact.html">Email</a></li>

                </ul>
            </div>
        </div>
        <p>&copy; 2024-KML | All Right Reserved</p>
    </footer>
</body>

</html>
</body>

</html>
