function bugIE(base, added) {
    let images = new Image()
    images.hasWebP = true;
    images.src = './img/car.webp';
    images.onerror = function () {
        images.hasWebP = false;
        images.setting();
        tryyy();
    };
    images.setting = function () {
        document.querySelector(base).setAttribute('class', document.querySelector(base).getAttribute('class') + ' ' + added);
    }
}

bugIE('p.image', 'car-webp1 bug webp fix');
bugIE('p.image', 'car-webp1 bug webp fix');

function tryyy() {
    console.log('ooo');
}

let cacheAuto = {
    show: 'techno mech show',
    hide: 'techno mech hide',
    linkActive: 'kind mechanic active',
    linkNotActive: 'kind mechanic not-active',
    oldTag: document.querySelectorAll('.techno')[0],
    oldTagTwo: document.querySelectorAll('.techno')[1],
    oldLink: document.querySelectorAll('.kind')[0],
    oldLinkTwo: document.querySelectorAll('.kind')[1]
}

function switching() {
    cacheAuto.cachingClass = cacheAuto.oldTag.classList[2];
    if (this.classList[2] === 'active') {
        return true;
    }
    if (cacheAuto.cachingClass === 'show') {
        cacheAuto.oldTag.setAttribute('class', cacheAuto.hide);
        cacheAuto.oldTagTwo.setAttribute('class', cacheAuto.show);
        cacheAuto.oldLink.setAttribute('class', cacheAuto.linkNotActive);
        cacheAuto.oldLinkTwo.setAttribute('class', cacheAuto.linkActive);
    } else {
        cacheAuto.oldTagTwo.setAttribute('class', cacheAuto.hide);
        cacheAuto.oldLinkTwo.setAttribute('class', cacheAuto.linkNotActive);
        cacheAuto.oldTag.setAttribute('class', cacheAuto.show);
        cacheAuto.oldLink.setAttribute('class', cacheAuto.linkActive);
    }
}

cacheAuto.listSlide = document.querySelectorAll('.slider');
cacheAuto.listSlideStart = 0;
cacheAuto.listSlideCurrent = 0;
cacheAuto.listSlideAll = cacheAuto.listSlide.length;
cacheAuto.backGo = function (event) {
    event.preventDefault();
    if (cacheAuto.listSlideCurrent !== cacheAuto.listSlideStart) {
        cacheAuto.listSlide[cacheAuto.listSlideCurrent].setAttribute('class', 'slider');
        document.querySelectorAll('.emotion-number')[cacheAuto.listSlideCurrent].setAttribute('class', 'emotion-number');
        cacheAuto.listSlideCurrent--;
        cacheAuto.listSlide[cacheAuto.listSlideCurrent].setAttribute('class', 'slider show');
        document.querySelectorAll('.emotion-number')[cacheAuto.listSlideCurrent].setAttribute('class', 'emotion-number active');
    }
}
cacheAuto.forwardGo = function (event) {
    event.preventDefault();
    if (cacheAuto.listSlideAll === cacheAuto.listSlideCurrent + 1) {
        return true;
    }
    if (cacheAuto.listSlideAll !== cacheAuto.listSlideCurrent) {
        cacheAuto.listSlide[cacheAuto.listSlideCurrent].setAttribute('class', 'slider');
        document.querySelectorAll('.emotion-number')[cacheAuto.listSlideCurrent].setAttribute('class', 'emotion-number');
        cacheAuto.listSlideCurrent++;
        cacheAuto.listSlide[cacheAuto.listSlideCurrent].setAttribute('class', 'slider show');
        document.querySelectorAll('.emotion-number')[cacheAuto.listSlideCurrent].setAttribute('class', 'emotion-number active');
    }
};
cacheAuto.setEmotion = function () {
    cacheAuto.listSlide[cacheAuto.listSlideCurrent].setAttribute('class', 'slider');
    document.querySelectorAll('.emotion-number')[cacheAuto.listSlideCurrent].setAttribute('class', 'emotion-number');
    cacheAuto.listSlide[this.textContent - 1].setAttribute('class', 'slider show');
    cacheAuto.listSlideCurrent = this.textContent - 1;
    document.querySelectorAll('.emotion-number')[cacheAuto.listSlideCurrent].setAttribute('class', 'emotion-number active');
}
document.querySelector('.kind.mechanic').addEventListener("click", switching, false);
document.querySelector('.kind.automate').addEventListener("click", switching, false);
document.querySelector('.back-go').addEventListener("click", cacheAuto.backGo, false);
document.querySelector('.forward-go').addEventListener("click", cacheAuto.forwardGo, false);
cacheAuto.setEmotion.allEl = document.querySelectorAll('.emotion-number');
for (let i = 0; i < cacheAuto.setEmotion.allEl.length; i++) {
    cacheAuto.setEmotion.allEl[i].addEventListener("click", cacheAuto.setEmotion, false);
}

const options = {
    rootMargins: '20pt 0pt',
    threshold: [0.0, 0.2, 0.4, 0.6, 0.8, 1.0]
};

function vdHandler(els) {
    els.forEach((data) => {
        data.target.style.opacity = 0.2 + data.intersectionRatio *
            0.8;
    });
}

const vd = new IntersectionObserver(vdHandler, options);

const cImgs = document.querySelectorAll('.Observe');
cImgs.forEach((el) => {
    vd.observe(el);
});
