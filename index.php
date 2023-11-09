<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./includes/assets.php") ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="">
    <meta description="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <title>Locker Rental</title>
</head>

<body>
    <?php include("./includes/header.php") ?>
    <main>


        <section class="principal_banner_section">
            <div class="principal_banner_ctn">
                <div class="txt_ctn">
                    <h1>Almacena de manera segura y conveniente</h1>
                </div>
                <div class="img_ctn">
                    <img src="./media/gif/gif1.gif" alt="">
                </div>
            </div>
        </section>

        <section class="packs_section">
            <div class="title">
                <h2>Nuestros Servicios</h2>
            </div>
            <div class="packs_ctn">

                <div class="e-card playing">

                    <div class="wave"></div>
                    <div class="wave"></div>
                    <div class="wave"></div>


                    <div class="infotop">
                        <?php include("./media/svg/large_suitcase.svg") ?>
                        <h4>
                            Precio
                        </h4>
                        <div class="price"><i class="fa-solid fa-euro-sign"></i> 7</div>
                    </div>
                </div>

                <div class="pack_ctn ">

                    <div class="e-card playing">

                        <div class="wave"></div>
                        <div class="wave"></div>
                        <div class="wave"></div>


                        <div class="infotop">
                            <?php include("./media/svg/small_suitcase.svg") ?>
                            <h4>
                                Precio
                            </h4>
                            <div class="price"><i class="fa-solid fa-euro-sign"></i> 5</div>
                        </div>
                    </div>
                </div>



                <div class="pack_ctn bagpack">

                    <div class="e-card playing">

                        <div class="wave"></div>
                        <div class="wave"></div>
                        <div class="wave"></div>


                        <div class="infotop">
                            <?php include("./media/svg/bagpack.svg") ?>
                            <h4>
                                Precio
                            </h4>
                            <div class="price"><i class="fa-solid fa-euro-sign"></i> 2</div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="opinion_section">
            <div class="title">
                <h2>Que dicen de nosotros?</h2>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="datos_ctn">
                            <div class="nombre_ctn">
                                <h4>lorem</h4>
                                <?php include("./media/svg/google_icon.svg") ?>
                            </div>
                            <div class="estrellas_ctn">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <div class="opinion_ctn">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia consectetur est, porro
                                maxime aliquam ratione blanditiis dolor vel illo nam, dolorum, quam dicta. Expedita sed
                                modi assumenda aliquid perferendis quis.</p>
                        </div>
                    </div>
                    <div class="swiper-slide"></div>
                    <div class="swiper-slide"></div>
                    <div class="swiper-slide"></div>
                </div>
            </div>
        </section>

    </main>
    <?php include("./includes/footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="js/index.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "cards",
            grabCursor: true,
        });
    </script>

</body>

</html>