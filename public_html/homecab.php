<!-- 
    <?php 
            if($_COOKIE['login_cookie'] == ''):
        ?>
                <?php else: ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/menu.css' rel='stylesheet'>
    <link rel="shortcut icon" href="logo.png">
    <script src="https://unpkg.com/gsap@3/dist/gsap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/ScrollTrigger.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com" defer></script>
    <title>ZetWallet</title>
</head>
<body>
    <div class="bodycontainer">
	    <div class="header">
            <div class="menu">
                <input type="checkbox" id="burger-checkbox" class="burger-checkbox">
                <label for="burger-checkbox" class="burger"></label>
                <ul class="menu-list">
                    <li><h3 class="menu-item2">ZetWallet</h3></li>
                    <li><a style="color: #000;" class="menu-item" href="">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAoElEQVR4nO2W0QmAMAwF3w51mHYQx3IPbcdyBPuvFPIRVDDFSFFzEBAak8NCDGAYRzoACUAGsCpFqRUBOAhIio33USQuyZQ80wsaMVPNRSKw1tgKiazudwQ8+8S+hUDPcsuzCXz7CgI14TGw3OHkPGgKxJtT7/0CofUVnGFzoP/9JPStf0Y1vEsgt17J4oNL6SgRcCSxKDYutSbpWm78iw12BRvE/tiRkQAAAABJRU5ErkJggg==">
                    Пополнить кошелек</a></li>
                    <li><a style="color: #000;" class="menu-item" href="replenish.html">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAABSUlEQVR4nO2WvUoDQRSFP40i/sQg2ElqSacoFgE7USHGRsHGpPQRjL2gNqYQKxtT6gsoxDcQH0ARwdeICsrCCQzDZpeBzLjFHjgwHIa53w6zdwZy5cqYikAV2PDkqmrE6gT4An49uwe07OK7Kn4IzANznhyt3QC+gboJ0AHuCKd74NYMHoF2QIC2ag4E2Ae6wJN8BRQICPCm7AK41OFZS1hwWwcryXsuAJ/AkcZTAlhPADgDXlJ84wLwGrMDqwxPqQA14ME4A9EXjoQE8K3sA0xaHWxUedHISsZ8c+60sjErn3ABeLf69ylQBn6sfBM4iOn1s8C1lT+7AJSBFcP9G6xiZEtqTuMa9/NFzS1Zayy4APhWKkAX+EjxuU+ALXXCJC8PE6Dz39dxXY+ERoAHSVO1dmyqln6hEE+y40FbMxPgURrVyJUrO/oD7DCyPhEOZJkAAAAASUVORK5CYII=">
                    Вывести средства</a></li>
                    <li><a style="color: #000;" class="menu-item" href="https://t.me/zetwallet_support">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAACEElEQVR4nO3Xz4uNYRQH8M80GoWylAmXheXsEBpFkp9jpZSFDTZkwUbGjxQjG2OIrb9BdoyNUkqUH5vZ+JGb8WPDgnKLrp46l9frxnvnvnduar51ep/nec97zvd5znlP56E4erABo3iISXwLmYy1i1gfuqViMx7hKU5hNfrRG9Ifa6dDJ5HZVIbjWRjDC+yKtcXYF+PDIWJtUYyT7vM4kWRjSujFTYxjPg5gHpah2oRANd4lnf3xTfr2RthqGdcivqtifh3DMV7ZRL+xNhy6CYP4jiutOt+Il9iLd1iBuahgIc7hCb6EpPFZLMDS0E058R678SqSsxB68Aw7Yj6UMXQoxmOx4zkh6ZQux7uD2BPjLWFjJx4X/TsGY0dZ5cT+buTEwF++HYiY3wk72U2lv2NNEQJXM7EuEyfj5P6J+0WZtoi1uFdE8UPE8yNGSnB8Hp8yOdIUlYhbDfWQ5fhaAoFa2GrYrUV9WJJVSs6Poy/m9dyzHeRt9UWO3c6zbDjvNIGE2eHzJ/KOOk3gj3l9hoCZEHQ5CWtd+A1/K3LjURymqxCdyBeiSixMVym+lS/FeaTO93N0Pu1iJGwlm2dCuoZRHO0mgQfRb3YFQ5ho557QDNviPpCS6w22N9X61dimrqhUVDNGUxP6FscycimOfaITzhsEGt3vurhDXMjIkYh5qccug614HSFIZFJI/i/8AB69rbciF1yAAAAAAElFTkSuQmCC">
                    Поддержка</a><li>
                    <li>
                        <div class="menu-item">
                            <div class="switch">
                            <input type="checkbox" id="switch"/>
                            <label for="switch"></label>
                        </div>
                        <h3 style="color: #303030;">Сменить тему</h3><li>
                    <li><a class="menu-item" href="php/exit.php" style="color: #505050;">Выйти с аккаунта</a></li>
                </ul>
            </div>
            <a href="home">Главная ></a>
            <a href="#about">О нас ></a>
            <a href="cabinet">Кабинет ></a>
            <a>Баланс: <span>0</span></a>
        </div>
    </div>
	</div>
    <section id="home">
    <h1>Добро пожаловать в ZetWallet</h1>
    <p>В данный момент идет разработка сайта, вывод средств и пополнения  временно не доступны</p>
    </section>
    <br><br><br>
    <div style="text-align:center;">
        <div class="ft_box_1">
            <div class="ft_box_padding">
                <div class="ft_prof_box_top_flex">
                    <div class="ft_box_8_1">
                        <div class="ft_box_left">
                            <div style="width:100%;border-top:1px solid #323232;margin:20px 0 20px 0;"></div>
                            <div style="line-height:2em;">
                                <a href=""></a>
                            </div>
                            <div style="width:100%;border-top:1px solid #323232;margin:20px 0 20px 0;"></div>
                            <div class="ft_font_60">© 2023—2024 Все права защищены.</div>
                        </div>
                    </div>
                    <div class="ft_box_8_2 ft_box_top_1">
                        <div class="ft_box_righ">
                            <div class="ft_font_60"><span style="color:#08a652;">Информационные источники</span>, подпишись на наши каналы, для получения информационных материалов.</div>
                            <div style="margin-top:10px;">
                                <div class="ft_menu_button_tg" style="padding:2px 0 5px 35px;margin-top:10px;">
                                    <a href="https://t.me/zetwallet_com">Telegram</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>       
</div>

    <script src="js/index.js"></script>

</body>
</html>
    <?php endif;?> -->