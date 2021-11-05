<?php
function callback($buffer)
{
    // заменить все яблоки апельсинами
    return ($buffer);
}

ob_start("callback");
?>
<!doctype html>
<html lang="ru" id="html">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="favicon.ico">
    <title>Аренда авто</title>
    <meta name="description" content="Аренда авто">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="main">
    <header class="top-info">
        <a title="Title" class="logo" href="#"><img alt="alternate" src="./img/logo.png"></a>
        <h1 class="common title"><span class="desktop">Аренда авто</span></h1>
        <p class="slogan">Автомобиль который<br> вас не подведет</p>
        <p class="address">Свободная улица, 16<br> г. Белгород</p>
        <ul class="top phones">
            <li class="phone"><a title="Title" class="call" href="tel:+79066000009">+7 (906) 600-00-09</a></li>
            <li class="phone"><a title="Title" class="call" href="tel:+79290006665">+7 (929) 000-66-65</a></li>
            <li class="work time">Без выходных с <strong>8:00</strong> до <strong>20:00</strong></li>
        </ul>
        <a title="Title" class="to order make" href="#">Заказать звонок</a>
    </header>
    <div class="rent">
        <h2 class="sub title">Аренда автомобилей в<br> Белгороде</h2>
        <h3 class="per day">От <strong>800</strong> руб/день и <strong>скидки</strong> от недели аренды</h3>
        <p>
            <a title="Title" class="make choice" href="#">Выбрать автомобиль</a>
        <p class="image"></p>
        <img alt="alternate" class="arrow" src="./img/arrow.svg">
        <ul class="nets">
            <li class="name">Наши контакты:</li>
            <li><a title="Title" href="#"><img alt="alternate" class="connect" src="./img/instagram-sketched.png"></a>
            </li>
            <li><a title="Title" href="#"><img alt="alternate" class="connect" src="./img/whatsapp.png"></a></li>
            <li><a title="Title" href="#"><img alt="alternate" class="connect"
                                               src="./img/iconfinder_vkontakte_386743.png"></a></li>
        </ul>
    </div>
    <div class="back">
        <ul class="features">
            <li class="advantages">
                <ul class="compact">
                    <li class="digits">500 +</li>
                    <li class="description">Успешно заключенных договоров</li>
                </ul>
            </li>
            <li class="advantages">
                <ul class="compact">
                    <li class="digits">3 +</li>
                    <li class="description">года успешной деятельности</li>
                </ul>
            </li>
            <li class="advantages">
                <ul class="compact">
                    <li class="digits">10</li>
                    <li class="description">Авто с повышенным комфортом</li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="choice zone">
        <h2 class="choice title">Выберите автомобиль</h2>
        <h3 class="variant">Выберете вариацию <strong>КПП</strong></h3>
        <ul class="what">
            <li class="kind mechanic active">Механическая</li>
            <li class="kind automate not-active">Автоматическая</li>
        </ul>
        <div class="techno mech show">
            <div class="car">
                <div class="data">
                    <h3 class="info read">Mazda 6</h3>
                    <ol class="info">
                        <li class="text read">Залог:</li>
                        <li class="mean read">10 тыс руб</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Вариация КПП:</li>
                        <li class="mean read">Автоматическая</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Кузов/привод:</li>
                        <li class="mean read">Седан/передний</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Топливо/расход:</li>
                        <li class="mean read">(АИ-95) 8л/100км</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Доп. опции:</li>
                        <li class="mean read">Кондиционер</li>
                    </ol>
                    <div class="info order">
                        <p class="changing"><a title="Title" class="read" href="#">Выбрать автомобиль</a></p>
                        <div class="add">
                            <p class="read">Стоимость:</p>
                            <p class="read price"><strong>1300</strong> руб/день</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="car">
                <div class="data">
                    <h3 class="info read">Chevrolet Lacetti</h3>
                    <ol class="info">
                        <li class="text read">Залог:</li>
                        <li class="mean read">10 тыс руб</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Вариация КПП:</li>
                        <li class="mean read">Автоматическая</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Кузов/привод:</li>
                        <li class="mean read">Седан/передний</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Топливо/расход:</li>
                        <li class="mean read">(АИ-95) 8л/100км</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Доп. опции:</li>
                        <li class="mean read">Кондиционер</li>
                    </ol>
                    <div class="info order">
                        <p class="changing"><a title="Title" class="read" href="#">Выбрать автомобиль</a></p>
                        <div class="add">
                            <p class="read">Стоимость:</p>
                            <p class="read price"><strong>1200</strong> руб/день</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="car">
                <div class="data">
                    <h3 class="info read">Chevrolet Aveo</h3>
                    <ol class="info">
                        <li class="text read">Залог:</li>
                        <li class="mean read">10 тыс руб</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Вариация КПП:</li>
                        <li class="mean read">Автоматическая</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Кузов/привод:</li>
                        <li class="mean read">Седан/передний</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Топливо/расход:</li>
                        <li class="mean read">(АИ-95) 8л/100км</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Доп. опции:</li>
                        <li class="mean read">Кондиционер</li>
                    </ol>
                    <div class="info order">
                        <p class="changing"><a title="Title" class="read" href="#">Выбрать автомобиль</a></p>
                        <div class="add">
                            <p class="read">Стоимость:</p>
                            <p class="read price"><strong>1400</strong> руб/день</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="techno auto hide">
            <div class="car">
                <div class="data">
                    <h3 class="info read">ВАЗ kalina</h3>
                    <ol class="info">
                        <li class="text read">Залог:</li>
                        <li class="mean read">5 тыс руб</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Вариация КПП:</li>
                        <li class="mean read">Механика</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Кузов/привод:</li>
                        <li class="mean read">Хетчбэк 5 дв/передний</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Топливо/расход:</li>
                        <li class="mean read">(АИ-95) 8л/100км</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Доп. опции:</li>
                        <li class="mean read">-</li>
                    </ol>
                    <div class="info order">
                        <p class="changing"><a title="Title" class="read" href="">Выбрать автомобиль</a></p>
                        <div class="add">
                            <p class="read">Стоимость:</p>
                            <p class="read price"><strong>900</strong> руб/день</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="car">
                <div class="data">
                    <h3 class="info read">ВАЗ 2112</h3>
                    <ol class="info">
                        <li class="text read">Залог:</li>
                        <li class="mean read">5 тыс руб</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Вариация КПП:</li>
                        <li class="mean read">Механика</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Кузов/привод:</li>
                        <li class="mean read">Хетчбэк 5 дв/передний</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Топливо/расход:</li>
                        <li class="mean read">(АИ-95) 8л/100км</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Доп. опции:</li>
                        <li class="mean read">-</li>
                    </ol>
                    <div class="info order">
                        <p class="changing"><a title="Title" class="read" href="">Выбрать автомобиль</a></p>
                        <div class="add">
                            <p class="read">Стоимость:</p>
                            <p class="read price"><strong>800</strong> руб/день</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="conditions">
        <h2 class="t">Условия</h2>
        <h3 class="d">Выполнив их вы точно сможете<br> арендовать любой автомобиль</h3>
        <div class="condition">
            <div class="cond details">
                <ul class="view">
                    <li class="images"><img alt="alternate" src="./img/work.png"></li>
                    <li class="text"><strong>3</strong> года стажа владения автомобилем</li>
                </ul>
            </div>
            <div class="cond details">
                <ul class="view">
                    <li class="images"><img alt="alternate" src="./img/debt.png"></li>
                    <li class="text"><strong>Отсутсвие</strong><br> судебных задолженностей</li>
                </ul>
            </div>
            <div class="cond details">
                <ul class="view">
                    <li class="images"><img alt="alternate" src="./img/personal-information.png"></li>
                    <li class="text"><strong>Наличие</strong> паспорта и водительского удостоверения</li>
                </ul>
            </div>
            <div class="cond details">
                <ul class="view">
                    <li class="images"><img alt="alternate" src="./img/security.png"></li>
                    <li class="text"><strong>Залог</strong> от 5000 руб и выше в зависимости от автомобиля</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="free">
        <h2 class="cons">Бесплатная консультация</h2>
        <form class="call-back" method="post" id="ajax_form" action="#">
            <h3 class="tf">Введите свои данные</h3>
            <p class="massage">мы перезвоним в течении <strong>5</strong><br> минут и проконсультируем вас</p>
            <input class="call-name" type="text" name="name" placeholder="Дмитрий">
            <input class="call-phone mask" type="tel" name="phonenumber" placeholder="+7 (906) 600-00-09"
                   pattern="[7-9]{1}[0-9]{9}"
                   title="Phone number with 7-9 and remaing 9 digit with 0-9">
            <input class="send-number" type="submit" value="Заказать звонок">
            <div class="agreed">
                <input class="agree" type="checkbox">
                <p class="agreement">Нажимая на кнопку вы соглашаетесь с политикой конфиденциальности.</p>
            </div>
            <div id="result_form"></div>
        </form>
        <p class="our">Наши клиенты отмечают факт, <strong>вежливого</strong> общения. Свяжитесь и проверьте сами.</p>
    </div>
    <div class="advantage">
        <h2 class="t">Преимущества</h2>
        <div class="condition">
            <div class="cond details">
                <ul class="view">
                    <li class="images"><img alt="alternate" src="./img/gear.svg"></li>
                    <li class="text">Все автомобили с <strong>ТО</strong> и гарантией, <strong>ОСАГО</strong></li>
                </ul>
            </div>
            <div class="cond details">
                <ul class="view">
                    <li class="images"><img alt="alternate" src="./img/car-insurance.svg"></li>
                    <li class="text">Автомобили с <br>повышенным<br> <strong>комфортом</strong></li>
                </ul>
            </div>
            <div class="cond details">
                <ul class="view">
                    <li class="images"><img alt="alternate" src="./img/license.svg"></li>
                    <li class="text"><strong>Быстрое</strong> оформление договора по паспорту и водительскому
                        удостоверению
                    </li>
                </ul>
            </div>
            <div class="cond details">
                <ul class="view">
                    <li class="images"><svg id="Capa_1"  height="512" viewBox="0 0 511.941 511.941" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m337.706 239.198c-4.61-11.263-17.523-16.683-28.788-12.079l-179.328 73.305c-5.459 2.231-9.722 6.454-12.005 11.892-2.282 5.438-2.309 11.438-.077 16.899 1.119 2.735 2.739 5.174 4.815 7.252.001 0 .001 0 .001.001 4.232 4.232 9.86 6.477 15.6 6.477 2.814 0 5.655-.54 8.372-1.65l179.33-73.305c11.267-4.608 16.687-17.522 12.08-28.792zm-17.755 14.908-179.33 73.305c-2.65 1.082-5.667.475-7.691-1.549-.661-.661-1.179-1.445-1.54-2.325-.716-1.75-.707-3.675.025-5.418.731-1.743 2.098-3.097 3.849-3.813l179.328-73.305c3.613-1.475 7.755.263 9.233 3.874 1.477 3.613-.261 7.754-3.874 9.231z"/><path d="m261.506 234.451c23.616-23.617 25.319-60.341 3.795-81.864s-58.249-19.82-81.865 3.796-25.319 60.34-3.796 81.863c10.109 10.108 23.565 15.093 37.446 15.093 15.677 0 31.893-6.362 44.42-18.888zm-67.464-67.464c9.614-9.615 21.99-14.524 33.81-14.524 10.025 0 19.65 3.534 26.844 10.728 15.677 15.677 13.974 42.886-3.795 60.655-17.768 17.769-44.98 19.47-60.655 3.795-15.677-15.676-13.974-42.885 3.796-60.654z"/><path d="m240.888 213.835c5.605-5.604 9.205-12.759 10.14-20.147 1.008-7.978-1.304-15.445-6.344-20.484-5.038-5.04-12.497-7.351-20.485-6.343-7.388.934-14.542 4.535-20.146 10.139-5.605 5.604-9.205 12.759-10.14 20.147-1.009 7.979 1.303 15.445 6.343 20.484 4.264 4.264 10.264 6.576 16.843 6.575 1.197 0 2.414-.077 3.642-.232 7.388-.935 14.543-4.535 20.147-10.139zm-30.026-6.81c-1.738-1.738-2.492-4.653-2.069-7.999.512-4.044 2.649-8.208 5.865-11.423 3.215-3.216 7.379-5.353 11.423-5.864.61-.078 1.207-.115 1.784-.115 2.586 0 4.794.763 6.214 2.183 0 0 0 0 .001.001 1.737 1.738 2.492 4.653 2.069 7.999-.512 4.044-2.649 8.208-5.865 11.423-3.215 3.216-7.379 5.353-11.423 5.864-3.349.422-6.262-.332-7.999-2.069z"/><path d="m246.735 392.412c5.605-5.604 9.205-12.759 10.14-20.147 1.009-7.979-1.303-15.445-6.343-20.484-5.039-5.04-12.504-7.349-20.485-6.343-7.388.934-14.543 4.534-20.147 10.138-5.605 5.604-9.205 12.759-10.14 20.147-1.008 7.979 1.304 15.446 6.344 20.485 4.263 4.263 10.263 6.575 16.842 6.575 1.197 0 2.414-.077 3.643-.232 7.388-.935 14.542-4.535 20.146-10.139zm-30.026-6.809c-1.737-1.738-2.492-4.653-2.069-7.999.512-4.044 2.649-8.208 5.865-11.423 3.215-3.216 7.379-5.353 11.423-5.864.61-.077 1.206-.115 1.783-.115 2.587 0 4.795.764 6.216 2.184h.001c1.737 1.737 2.491 4.653 2.068 7.998-.512 4.044-2.649 8.208-5.865 11.423-3.215 3.216-7.379 5.353-11.423 5.864-3.341.423-6.261-.33-7.999-2.068z"/><path d="m231.147 431.262c.394 0 .796-.031 1.198-.096 12.961-2.082 25.393-8.524 35.009-18.139 23.616-23.617 25.321-60.34 3.797-81.864-21.529-21.515-58.254-19.816-81.873 3.792-23.61 23.622-25.309 60.35-3.788 81.871 3.843 3.843 8.261 7.029 13.132 9.47 3.7 1.854 8.207.359 10.064-3.344 1.855-3.702.358-8.208-3.344-10.064-3.431-1.719-6.542-3.963-9.245-6.667-15.676-15.676-13.975-42.89 3.787-60.662 17.771-17.762 44.986-19.461 60.664-3.791 15.675 15.675 13.97 42.884-3.799 60.653-7.401 7.402-16.912 12.35-26.782 13.936-4.089.657-6.871 4.504-6.215 8.593.592 3.688 3.776 6.312 7.395 6.312z"/><path d="m509.381 27.814c-5.938-14.976-17.56-24.11-32.724-25.719-26.327-2.797-60.751 17.582-83.533 48.939-17.723-5.061-35.192-8.731-52.2-10.943-4.104-.53-7.869 2.361-8.404 6.469-.534 4.107 2.362 7.869 6.469 8.403 25.376 3.301 51.88 9.992 78.776 19.888 8.125 2.988 14.498 9.361 17.486 17.488.735 1.999 1.432 3.97 2.123 5.937-9.222 4.948-19.272 9.829-30.015 14.574-1.309-1.962-2.825-3.825-4.555-5.555-6.898-6.898-16.069-10.696-25.823-10.696-9.755 0-18.925 3.799-25.824 10.696-14.239 14.239-14.239 37.407 0 51.645 7.12 7.119 16.472 10.679 25.823 10.679 9.352 0 18.704-3.56 25.824-10.679 8.732-8.732 12.099-20.822 10.121-32.152 10.389-4.576 20.16-9.286 29.224-14.07 21.078 68.061 15.502 115.083 11.791 133.157-.986 4.802-3.216 9.346-6.448 13.138-75.574 88.595-141.218 154.906-226.576 228.88-10.699 9.269-26.494 9.646-37.56.896-60.043-47.49-114.562-102.012-162.044-162.055-8.751-11.057-8.375-26.848.896-37.547 73.939-85.33 140.25-150.973 228.885-226.58 3.78-3.228 8.325-5.461 13.134-6.455 9.252-1.899 24.702-4.052 45.739-3.498 4.138.077 7.584-3.161 7.691-7.301.108-4.14-3.161-7.584-7.301-7.692-22.463-.587-39.124 1.743-49.155 3.802-7.289 1.506-14.153 4.874-19.846 9.737-89.24 76.126-156.015 142.23-230.48 228.167-13.985 16.14-14.54 39.976-1.324 56.673 48.2 60.951 103.547 116.301 164.502 164.512 8.065 6.379 17.791 9.55 27.512 9.549 10.416 0 20.826-3.641 29.173-10.874 85.966-74.5 152.07-141.275 228.167-230.483 4.87-5.714 8.234-12.579 9.727-19.853 2.444-11.901 5.015-31.761 3.382-58.784-1.643-27.183-7.184-55.64-16.475-84.818 18.022-10.553 31.884-21.113 41.229-31.436 14.243-15.732 18.486-31.222 12.613-46.039zm-116.277 91.088c-3.522 1.435-6.686 2.68-9.35 3.705-.044-3.232.113-6.488.428-9.755 2.978 1.056 5.716 2.748 8.016 5.048.323.322.609.665.906 1.002zm-.905 29.434c-8.39 8.39-22.043 8.392-30.435 0-8.392-8.391-8.392-22.045 0-30.436 2.126-2.126 4.623-3.738 7.339-4.805-.568 7.057-.435 14.076.438 20.964.284 2.243 1.565 4.238 3.486 5.43 1.201.745 2.573 1.127 3.953 1.127.828 0 1.659-.137 2.46-.415.38-.132 7.806-2.719 19.044-7.293.053 5.581-2.035 11.179-6.285 15.428zm58.422-57.568c-.43-1.202-.852-2.402-1.295-3.606-4.509-12.261-14.126-21.878-26.384-26.385-4.866-1.791-9.72-3.474-14.561-5.062 19.427-24.576 46.822-40.819 66.694-38.705 9.619 1.021 16.472 6.516 20.364 16.332 8.213 20.717-21.577 43.427-44.818 57.426z"/></g></svg></li>
                    <li class="text"><strong>Скидки</strong> от 10% при аренде автомобиля на срок более недели</li>
                </ul>
            </div>
            <div class="cond details">
                <ul class="view">
                    <li class="images"><img alt="alternate" src="./img/tablet.svg"></li>
                    <li class="text">Оформление<br> аренды авто<br> <strong>онлайн</strong></li>
                </ul>
            </div>
            <div class="cond details">
                <ul class="view">
                    <li class="images"><img alt="alternate" src="./img/online-payment.svg"></li>
                    <li class="text">Оплата наличным, безналичным<br> платежом,<br> перевод на карту</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="emotions">
        <h2 class="t">Отзывы</h2>
        <div class="slider show">
            <p class="port"></p>
            <h3 class="tt">Екатерина Воронцова</h3>
            <p class="te">Брала автомобиль Mazda 6 на три дня - и не прогадала. Машина обслужина и ухожена. Цена
                устроила. Оформили аренду быстро через интернет, на все про все ушло минут 15</p>
            <div class="buttons">
                <a title="Title" class="make choice" href="#">Аудио-отзыв</a>
                <a title="Title" class="make choice" href="#">Видео-отзыв</a>
            </div>
        </div>
        <div class="slider">
            <p class="port"></p>
            <h3 class="tt">Александр</h3>
            <p class="te">Хорошие ребята, общительные, вежливые, всегда готовы помочь, подсказать. Автомобиль оказался
                без
                проблем, в общем всем доволен. Желаю удачи и хороших клиентов. Рекомендую (ЯНАО).</p>
            <div class="buttons">
                <a title="Title" class="make choice" href="">Аудио-отзыв</a>
                <a title="Title" class="make choice" href="">Видео-отзыв</a>
            </div>
        </div>
        <div class="slider">
            <p class="port"></p>
            <h3 class="tt">Станислав </h3>
            <p class="te">Условия проката, оперативность, техническое состояние автомобилей на уровне. Спасибо!</p>
            <div class="buttons">
                <a title="Title" class="make choice" href="">Аудио-отзыв</a>
                <a title="Title" class="make choice" href="">Видео-отзыв</a>
            </div>
        </div>
        <div class="slider">
            <p class="port"></p>
            <h3 class="tt">Роман Ивашов</h3>
            <p class="te">Хорошие автомобили и хозяин, и отношение к клиентам. Рекомендую.</p>
            <div class="buttons">
                <a title="Title" class="make choice" href="">Аудио-отзыв</a>
                <a title="Title" class="make choice" href="">Видео-отзыв</a>
            </div>
        </div>
        <div class="slider">
            <p class="port"></p>
            <h3 class="tt">Алексей</h3>
            <p class="te">Машина в хорошем техническом состоянии, свозила на “дальняк” без эксцессов.</p>
            <div class="buttons">
                <a title="Title" class="make choice" href="">Аудио-отзыв</a>
                <a title="Title" class="make choice" href="">Видео-отзыв</a>
            </div>
        </div>
        <p class="counter">
            <span class="emotion-number active">1</span>
            <span class="emotion-number">2</span>
            <span class="emotion-number">3</span>
            <span class="emotion-number">4</span>
            <span class="emotion-number">5</span>
        </p>
        <a title="Title" class="back-go" href="#"></a>
        <a title="Title" class="forward-go" href="#"></a>
    </div>
    <div class="rent-auto">
        <h3 class="t">Как арендовать авто</h3>
        <h4>Заявка онлайн или звонок</h4>
        <p><strong>Заполняете</strong> форму, выбрав необходимую услугу и ждете звонка оператора или звоните сами
            операту. <strong>Не забывайте,</strong>
            что звонок оператора можно заказать для консультации</p>
        <h4>Звонок оператора для подтверждения</h4>
        <p>После подачи заявления вам <strong>перезванивает</strong> оператор для подтверждения заявки и уточнения
            условий аренды.</p>
        <h4>Заполнение документов и оплата</h4>
        <p><strong>Заполняете</strong> документы, подтверждающие сделку и оплачиваете необходимую сумму.</p>
        <h4>Передача автомобиля арендатору</h4>
        <p>Вам передают ключи от автомобиля с самим автомобилем и <strong>начинается срок владения</strong>.</p>
    </div>
    <div class="faq">
        <h3 class="t">Частые вопросы</h3>
        <div class="flexing">
            <div class="slide"><input class="agree" type="checkbox">
                <h4>Какова политика относительно чистоты автомобиля?</h4>
                <p>Лимит суточного пробега - это километраж, который Вы можете проехать на арендованном авто за одни
                    сутки. Он составляет 200 километров.. А если суммарный пробег превысит 200 километров, то превышение
                    лимита вам будет необходимо оплатить по цене 1руб/1км.</p>
            </div>
            <div class="slide"><input class="agree" type="checkbox">
                <h4>Что такое лимит пробега? </h4>
                <p>Лимит суточного пробега - это километраж, который Вы можете проехать на арендованном авто за одни
                    сутки. Он составляет 200 километров.. А если суммарный пробег превысит 200 километров, то превышение
                    лимита вам будет необходимо оплатить по цене 1руб/1км.</p>
            </div>
            <div class="slide"><input class="agree" type="checkbox">
                <h4>Какова политика относительно бензина?</h4>
                <p>Лимит суточного пробега - это километраж, который Вы можете проехать на арендованном авто за одни
                    сутки. Он составляет 200 километров.. А если суммарный пробег превысит 200 километров, то превышение
                    лимита вам будет необходимо оплатить по цене 1руб/1км.</p>
            </div>
            <div class="slide"><input class="agree" type="checkbox">
                <h4>Смогу ли я получить автомобиль, если я задержусь и прибуду в офис после закрытия?</h4>
                <p>Лимит суточного пробега - это километраж, который Вы можете проехать на арендованном авто за одни
                    сутки. Он составляет 200 километров.. А если суммарный пробег превысит 200 километров, то превышение
                    лимита вам будет необходимо оплатить по цене 1руб/1км.</p>
            </div>
            <div class="slide"><input class="agree" type="checkbox">
                <h4>Что такое лимит пробега? </h4>
                <p>Лимит суточного пробега - это километраж, который Вы можете проехать на арендованном авто за одни
                    сутки. Он составляет 200 километров.. А если суммарный пробег превысит 200 километров, то превышение
                    лимита вам будет необходимо оплатить по цене 1руб/1км.</p>
            </div>
            <div class="slide"><input class="agree" type="checkbox">
                <h4>Что включает в себя цена проката?</h4>
                <p>Лимит суточного пробега - это километраж, который Вы можете проехать на арендованном авто за одни
                    сутки. Он составляет 200 километров.. А если суммарный пробег превысит 200 километров, то превышение
                    лимита вам будет необходимо оплатить по цене 1руб/1км.</p>
            </div>
            <div class="slide"><input class="agree" type="checkbox">
                <h4>Могу ли я выезжать за пределы Белгородской области?</h4>
                <p>Лимит суточного пробега - это километраж, который Вы можете проехать на арендованном авто за одни
                    сутки. Он составляет 200 километров.. А если суммарный пробег превысит 200 километров, то превышение
                    лимита вам будет необходимо оплатить по цене 1руб/1км.</p>
            </div>
            <div class="slide"><input class="agree" type="checkbox">
                <h4>Что делать если у меня не получается вернуть автомобиль в срок?</h4>
                <p>Лимит суточного пробега - это километраж, который Вы можете проехать на арендованном авто за одни
                    сутки. Он составляет 200 километров.. А если суммарный пробег превысит 200 километров, то превышение
                    лимита вам будет необходимо оплатить по цене 1руб/1км.</p>
            </div>
        </div>
    </div>
    <p class="more q">
        <a title="Title" class="kind mechanic questions" href="#">Больше вопросв</a>
    </p>
    <div class="contact">
        <form class="call-back">
            <h3 class="tf">Остались вопросы?</h3>
            <p class="massage">Задайте их нам!</p>
            <input class="call-name" type="text" placeholder="Введите ваше имя">
            <input class="call-phone mask" type="tel" placeholder="+7 (906) 600-00-09">
            <input class="send-number" type="submit" value="Заказать звонок">
            <div class="agreed">
                <input class="agree" type="checkbox">
                <p class="agreement">Нажимая на кнопку вы соглашаетесь с политикой конфиденциальности.</p>
            </div>
        </form>
        <img alt="alternate" class="map" src="./img/map.webp">
    </div>
</div>
<footer>
    <div class="top-info">
        <a title="Title" class="logo" href="#"><img alt="alternate" src="./img/logo.png"></a>
        <h1 class="common title">Аренда авто</h1>
        <p class="slogan">Автомобиль который<br> вас не подведет</p>
        <ul class="nets">
            <li class="name">Наши контакты:</li>
            <li class="icon"><a title="Title" href="#"><img alt="alternate" class="connect"
                                                            src="./img/instagram-sketched.png"></a></li>
            <li class="icon"><a title="Title" href="#"><img alt="alternate" class="connect"
                                                            src="./img/whatsapp.png"></a></li>
            <li class="icon"><a title="Title" href="#"><img alt="alternate" class="connect"
                                                            src="./img/iconfinder_vkontakte_386743.png"></a></li>
        </ul>
        <p class="confident"><a title="Title" href="#">Политика конфиденциальности</a></p>
        <ul class="top phones">
            <li class="phone"><a title="Title" class="call" href="tel:+79066000009">+7 (906) 600-00-09</a></li>
            <li class="phone"><a title="Title" class="call" href="tel:+79290006665">+7 (929) 000-66-65</a></li>
            <li class="work time">Без выходных с 8:00 до 20:00</li>
        </ul>
    </div>
</footer>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.60/inputmask/jquery.inputmask.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
<script src="js/script.js"></script>
</body>
</html>
<?php ob_end_flush(); ?>
