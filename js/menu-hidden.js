let checMenuMobile = document.getElementById('check-menu-mobile');
let overflowBlock = document.querySelector('.overflow');
let popupForm = document.getElementById('price_form1');
let formPopupClose = document.querySelector('.form-popup__close ');

checMenuMobile.onclick = function () {
    overflowBlock.classList.toggle("display-block");
    document.body.classList.toggle("body-overflow");
};

overflowBlock.addEventListener('click', () => {
    checMenuMobile.checked = false;
    overflowBlock.classList.toggle("display-block");
    document.body.classList.toggle("body-overflow");
    popupForm.classList.remove("form-popup__active");
});

function formOpen() {{
        overflowBlock.classList.toggle("display-block");
    popupForm.classList.toggle("form-popup__active");
        document.body.classList.toggle("body-overflow");
    }
}

formPopupClose.addEventListener('click', () => {
    overflowBlock.classList.toggle("display-block");
    popupForm.classList.toggle("form-popup__active");
    document.body.classList.toggle("body-overflow");
});

