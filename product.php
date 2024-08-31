<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="badgeparent" id="parentservice">

    <div class="badge_child">
        <i class="bi bi-x-circle" id="cancel"></i>
        <form action="" class="popup" method="POST" class="row">

            <h1 class="col-12">CONTACT US </h1>


            <div class="col-md-5">
                <label for=""> Nom : </label>
                <input type="text" placeholder="Votre nom" name="nom">
            </div>
            <div class="col-md-5">
                <label for=""> Prénom :</label>
                <input type="text" placeholder="Votre Prénom" name="prenom">
            </div>
            
            <div class="col-md-5">
                <label for=""> Email : </label>
                <input type="Email" placeholder="votre Email" name="email">
            </div>
            <div class="col-md-5">
                <label for=""> Télephone : </label>
                <input type="text" placeholder="Numéro télephone" name="telephone">
            </div>
            <div class="message col-10">
                <label for=""> Message : </label>
                <textarea name="demande" id="" cols="30" rows="8"></textarea>
            </div>

            <div class="btn col-12">
                <BUtton> Envoyer </BUtton>
            </div>

        </form>

    </div>
</div>


<div class="pro-parent">
<div class="aboutus pro">
    <div>
        <h1>
            OUR PRODUCTS
        </h1>
        <p>
            We deliver the best offers for both residential and commercial needs. <br>
            <b>Tailored to your budget & energy needs!</b>
        </p>
    </div>
    <div>
        <img src="imgs/product1.PNG" alt="">
    </div>
</div>
</div>



<div class="scrol-down pro">
    CHOOSE YOUR SOLAR PLAN

    <i class="bi bi-caret-down-fill"></i>
</div>

<div class="services">
<h1><img src="imgs/decoration.png" alt=""> OUR SERVICES <img src="imgs/decoration.png" alt=""></h1>
    <p>we deliver the best offers for both residential & commercial needs
    </p>
    <div class="offers" id="offer1">
        <div class="pic">
            <img src="imgs/offer1.PNG" alt=""><br>
            <button onclick="show()">
                Get one now
            </button>
        </div>
        <div class="txt">
            <p>
                REDUCE YOUR ELECTRICITY BILLS TO <b>ALMOST $0</b>
            <ul>
                <li>
                    Tier 1 High Efficiency Solar Panels

                </li>
                <li>
                    Average Yearly Generation – 9000 kW Annually*

                </li>
                <li>
                    25 Years of Linear Output Warranty on Panels

                </li>
                <li>
                    5kW Power Inverter with 10 Years Warranty.

                </li>
                <li>
                    Premium Solar Technology module.

                </li>
                <li>
                    Reputed and Trustworthy Brand.

                </li>
                <li>
                    Local Australian Installation & Support

                </li>
                <li>
                    For both Residential and Commercial Properties.

                </li>
            </ul>
            <span>
                From $5999* onwards
            </span>
            </p>

        </div>
    </div>
    <div class="offers green" id="offer2">
        <div class="pic">
            <img src="imgs/offer1.PNG" alt=""><br>
            <button onclick="show()">
                Get one now
            </button>
        </div>
        <div class="txt">
            <p>
            REDUCE YOUR ELECTRICITY BILLS TO  <b>ALMOST $0</b>
            <ul>
                <li>
                    Tier 1 High Efficiency Solar Panels


                </li>
                <li>
                Average Yearly Generation – 12000 kW Annually*


                </li>
                <li>
                25 Years of Linear Output Warranty on Panels


                </li>
                <li>
                8kW Power Inverter with 10 Years Warranty.


                </li>
                <li>
                Premium Solar Technology module

                </li>
                <li>
                Reputed and Trustworthy Brand.


                </li>
                <li>
                Local Australian Installation & Support


                </li>
                <li>
                For both Residential and Commercial Properties.


                </li>
            </ul>
            <span>
                From $8999* onwards

            </span>
            </p>

        </div>
    </div>
    <div class="offers blue" id="offer3">
        <div class="pic">
            <img src="imgs/offer1.PNG" alt=""><br>
            <button onclick="show()">
                Get one now
            </button>
        </div>
        <div class="txt">
            <p>
                REDUCE YOUR ELECTRICITY BILLS TO <b>ALMOST $0</b>
            <ul>
                <li>
                    Tier 1 High Efficiency Solar Panels

                </li>
                <li>
                Average Yearly Generation – 13200 kW Annually*

                </li>
                <li>
                    25 Years of Linear Output Warranty on Panels

                </li>
                <li>
                    10kW Power Inverter with 10 Years Warranty.

                </li>
                <li>
                    Premium Solar Technology module.

                </li>
                <li>
                    Reputed and Trustworthy Brand.

                </li>
                <li>
                    Local Australian Installation & Support

                </li>
                <li>
                    For both Residential and Commercial Properties.

                </li>
            </ul>
            <span>
                From $8999* onwards

            </span>
            </p>

        </div>
    </div>
</div>


<div class="services">
<h1> <img src="imgs/decoration.png" alt=""> PARTNERING WITH WORLD LEADING BRANDS <img src="imgs/decoration.png" alt=""> </h1>
    <p>In partner with world leading brands. <br>

        Shop now
    </p>
    <iframe src="parteners.html" id="ser" frameborder="0"></iframe>
</div>

<?php
include('includes/contactus.php');
include('includes/footer.php');
include('includes/scripts.php');
?>