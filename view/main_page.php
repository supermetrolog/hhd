<div class="container-fluid header">
    <div class="container pt-4">
        <div class="row">
            <div class="col-12 text-center text-lg-left">
                <div class="logo">
                    <img src="/assets/img/logo.png" alt="logo">
                    <h5>HoneyHunters</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <div class="contact-icon">
                    <img src="/assets/img/contact_icon.png" alt="contact_icon">
                </div>
            </div>
        </div>
        <form id="form" method="POST">
            <div class="row">
                <div class="col-12 col-lg-6 pr-lg-5">
                    <div class="input mb-5">
                        <label class="required">Имя</label>
                        <input type="text" name="name">
                    </div>
                    <div class="input">
                        <label class="required">E-Mail</label>
                        <input type="text" name="email">
                    </div>
                </div>
                <div class="col-12 col-lg-6 pl-lg-5 mt-lg-0 mt-5">
                    <label class="required">Комментарий</label>

                    <textarea name="content"></textarea>
                </div>
                <div class="col-12 py-5 text-lg-right text-center">
                    <button class="btn">
                        Записать
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>

<div class="container-fluid content">
    <div class="container py-5">
        <div class="row py-4">
            <div class="col-12 text-center">
                <h5>Выводим комментарии</h5>
            </div>
        </div>
        <div class="row" id="cards">
            <? include "cards.php" ?>
        </div>
    </div>
</div>

<div class="container-fluid footer">
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-6 col-12 text-lg-left text-center">
                <div class="logo">
                    <img src="/assets/img/logo.png" alt="logo">
                    <h6>HoneyHunters</h6>
                </div>
            </div>
            <div class="col-lg-6 col-12 text-lg-right text-center align-self-center">
                <div class="social-icon">
                    <i class="fab fa-vk"></i>
                </div>
                <div class="social-icon ml-3 mt-lg-0 mt-3">
                    <i class="fab fa-facebook-f"></i>
                </div>
            </div>
        </div>
    </div>

</div>