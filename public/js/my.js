const currentUserLogged = $('#current-user-logged').val();

var itemHeader = $('.wrap_menu a, .wrap_menu li a');
var rightNavbar = $('.right-navbar a');
var path = window.location.pathname;

if (['/login', '/register', '/profile', '/checkout_success', '/checkout'].indexOf(path) !== -1) {
    itemHeader.css('color', 'black');
    rightNavbar.css('color', '#000')
}

if(path.includes('menu')){
    itemHeader.css('color', 'black');
    rightNavbar.css('color', '#000')
}


const Toast = Swal.mixin({
    toast: true,
    position: 'top-start',
    showConfirmButton: false,
    timer: 3000
});


// JS MODAL LOGIN AND REGISTER
// Đã free cho ng ta rồi còn cho coppy thiếu dkm nó :)) ai mà ko biết fix thì ăn lol hết :)) vcc
$(document).ready(function () {

    if (window.location.search.split('pleaseLogin=')[1] === '1') {
        Swal.fire({
            title: 'Please login?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Login now!',
            cancelButtonColor: '#d33',
        }).then((result) => {
            if (result.value) {
                showLoginForm()
            }
        })
    }
    ;


    let $form_modal = $('.cd-user-modal'),
        $form_login = $form_modal.find('#cd-login'),
        $form_signup = $form_modal.find('#cd-signup'),
        $form_forgot_password = $form_modal.find('#cd-reset-password'),
        $form_modal_tab = $('.cd-switcher'),
        $tab_login = $form_modal_tab.children('li').eq(0).children('a'),
        $tab_signup = $form_modal_tab.children('li').eq(1).children('a'),
        $forgot_password_link = $form_login.find('.cd-form-bottom-message a'),
        $back_to_login_link = $form_forgot_password.find('.cd-form-bottom-message a'),
        $main_nav = $('.main-nav');

    $('.cd-signin').click(function () {
        showLoginForm()
    });

    function showLoginForm() {
        $form_modal.toggleClass('is-visible');
        if ($('#cd-signup').hasClass('is-selected')) {
            $('#cd-signup').removeClass('is-selected');
        }

        if (!$('#cd-login').hasClass('is-selected')) {
            $('#cd-login').addClass('is-selected');
        }

        let aLast = $('.cd-switcher').children(':last').children(':first');
        if (aLast.hasClass('selected')) {
            aLast.removeClass('selected')
        }

        let aFirst = $('.cd-switcher').children(':first').children(':first');
        if (!aFirst.hasClass('selected')) {
            aFirst.addClass('selected');
        }
    }

    $('.cd-signup').click(function () {
        $form_modal.toggleClass('is-visible');
        if ($('#cd-login').hasClass('is-selected')) {
            $('#cd-login').removeClass('is-selected');
        }

        if (!$('#cd-signup').hasClass('is-selected')) {
            $('#cd-signup').addClass('is-selected');
        }

        let aLast = $('.cd-switcher').children(':last').children(':first');
        if (!aLast.hasClass('selected')) {
            aLast.addClass('selected')
        }
        let aFirst = $('.cd-switcher').children(':first').children(':first');
        if (aFirst.hasClass('selected')) {
            aFirst.removeClass('selected');
        }
    });
    // this.window.onclick = function (event) {
    //     if (event.target == $form_modal) {
    //         $form_modal.toggleClass('is-visible');
    //         $('#cd-login').removeClass('is-selected');
    //         $('#cd-signup').removeClass('is-selected');
    //         $('.cd-switcher').children(':first').children(':first').removeClass('selected');
    //         $('.cd-switcher').children(':last').children(':first').removeClass('selected');
    //     }
    //
    // };
    //open model
    $main_nav.on('click', function (event) {

        if ($(event.target).is($main_nav)) {
            // on mobile open the submenu
            $(this).children('ul').toggleClass('is-visible');
        } else {
            // on mobile close submenu
            $main_nav.children('ul').removeClass('is-visible');
            //show model layer
            $form_modal.addClass('is-visible');
            //show the selected form
            ($(event.target).is('.cd-signup')) ? signup_selected() : login_selected();
        }

    });

    //close model
    $form_modal.on('click', function (event) {
        if ($(event.target).is($form_modal) || $(event.target).is('.cd-close-form')) {
            $form_modal.removeClass('is-visible');
        }
    });
    //close model when clicking the esc keyboard button
    $(document).keyup(function (event) {
        if (event.which === '27') {
            $form_modal.removeClass('is-visible');
        }
    });

    //switch from a tab to another
    $form_modal_tab.on('click', function (event) {
        event.preventDefault();
        ($(event.target).is($tab_login)) ? login_selected() : signup_selected();
    });

    //hide or show password
    $('.hide-password').on('click', function () {
        let $this = $(this),
            $password_field = $this.prevAll('input');

        ('password' === $password_field.attr('type')) ? $password_field.attr('type', 'text') : $password_field.attr('type', 'password');
        ('Hide' === $this.text()) ? $this.text('Show') : $this.text('Hide');
        //focus and move cursor to the end of input field
        $password_field.putCursorAtEnd();
    });

    //show forgot-password form
    $forgot_password_link.on('click', function (event) {
        event.preventDefault();
        forgot_password_selected();
    });

    //back to login from the forgot-password form
    $back_to_login_link.on('click', function (event) {
        event.preventDefault();
        login_selected();
    });

    function login_selected() {
        $form_login.addClass('is-selected');
        $form_signup.removeClass('is-selected');
        $form_forgot_password.removeClass('is-selected');
        $tab_login.addClass('selected');
        $tab_signup.removeClass('selected');
    }

    function signup_selected() {
        $form_login.removeClass('is-selected');
        $form_signup.addClass('is-selected');
        $form_forgot_password.removeClass('is-selected');
        $tab_login.removeClass('selected');
        $tab_signup.addClass('selected');
    }

    function forgot_password_selected() {
        $form_login.removeClass('is-selected');
        $form_signup.removeClass('is-selected');
        $form_forgot_password.addClass('is-selected');
    }

    //REMOVE THIS - it's just to show error messages
    $form_login.find('input[type="submit"]').on('click', function (event) {
        event.preventDefault();
        $form_login.find('input[type="email"]').toggleClass('has-error').next('span').toggleClass('is-visible');
    });
    $form_signup.find('input[type="submit"]').on('click', function (event) {
        event.preventDefault();
        $form_signup.find('input[type="email"]').toggleClass('has-error').next('span').toggleClass('is-visible');
    });

    //IE9 placeholder fallback
    if (!Modernizr.input.placeholder) {
        let placeholder = $('[placeholder]');
        placeholder.focus(function () {
            let input = $(this);
            if (input.val() === input.attr('placeholder')) {
                input.val('');
            }
        }).blur(function () {
            let input = $(this);
            if (input.val() === '' || input.val() === input.attr('placeholder')) {
                input.val(input.attr('placeholder'));
            }
        }).blur();
        placeholder.parents('form').submit(function () {
            $(this).find('[placeholder]').each(function () {
                let input = $(this);
                if (input.val() === input.attr('placeholder')) {
                    input.val('');
                }
            })
        });
    }

});


//credits https://css-tricks.com/snippets/jquery/move-cursor-to-end-of-textarea-or-input/
jQuery.fn.putCursorAtEnd = function () {
    return this.each(function () {
        // If this function exists...
        if (this.setSelectionRange) {
            // ... then use it (Doesn't work in IE)
            // Double the length because Opera is inconsistent about whether a carriage return is one character or two. Sigh.
            let len = $(this).val().length * 2;
            this.setSelectionRange(len, len);
        } else {
            // ... otherwise replace the contents with itself
            // (Doesn't work in Google Chrome)
            $(this).val($(this).val());
        }
    });
};

// END JS MODAL LOGIN AND REGISTER


// Register

$('#btn-register').click(function () {
    const data = $('#register-form').serializeArray();
    $('.cd-error-message').removeClass('is-visible');
    $('input[name="password"]').val('');
    $('input[name="password_confirmation"]').val('');
    $.ajax({
        url: '/register',
        method: 'POST',
        data: data,
    }).done(function (res) {
        if (res.hasError) {
            renderErrors(res.errors)
        } else {
            window.location.href = '/menu/food';
        }
    })
});

$('#btn-login').click(function () {
    const data = $('#login-form').serialize();
    $('.cd-error-message').removeClass('is-visible');
    $('input[name="password"]').val('');
    $('input[name="password_confirmation"]').val('');

    $.ajax({
        url: '/login',
        method: 'POST',
        data: data,
    }).done(function (res) {
        if (res.hasError) {
            renderErrors(res.errors)
        } else {
            window.location.href = '/menu/food';
        }
    });


});

const caloValues = [1800, 2000, 2400, 2800];
const proteinValues = [1, 1.2, 1.4, 1.8];
const totalFatValues = [30, 50, 83, 100];
const carbohydrateValues = [150, 225, 325, 350];
const dietaryFiberValues = [25, 32, 42, 60];
const levelValues = ['very-low', 'low', 'normal', 'high', 'very-high'];

const calo = 'calo';
const protein = 'protein';
const total_fat = 'total_fat';
const carbohydrate = 'carbohydrate';
const dietary_fiber = 'dietary_fiber';

function getLevel(value, type) {
    switch (type) {
        case calo:
            return getTypeLevel(caloValues, value);
        case protein:
            return getTypeLevel(proteinValues, value);
        case total_fat:
            return getTypeLevel(totalFatValues, value);
        case carbohydrate:
            return getTypeLevel(carbohydrateValues, value);
        case dietary_fiber:
            return getTypeLevel(dietaryFiberValues, value);
        default:
            break;
    }
}

function getTypeLevel(values, value) {
    var index = 0;
    if (value <= values[0]) index = 0;
    if (value > values[values.length - 1]) index = values.length;
    for (let i = 0; i < values.length - 1; i++) {
        if (value > values[i] && value <= values[i + 1]) {
            index = i + 1;
        }
    }
    return levelValues[index];
}

$('.nutrition-index').each(function () {
    let valueType = $(this).attr('data-type');
    let value = $(this).attr('data-content');
    let level = getLevel(value, valueType);
    $(this).addClass(level);
});

let searchParams = new URLSearchParams(window.location.search)

let category_id = searchParams.get('category');

$('.list-food-category > li').each(function () {
    if(!category_id){
        category_id = '0';
    }

    let id = $(this).attr('data-id');

    console.log(id, category_id);
    if(id === category_id){
        $(this).addClass('ui-tabs-active')
    };
});

function renderErrors(errors) {
    let errFields = Object.keys(errors);
    for (let field of errFields) {
        let errField = $(`input[name=${field}]`).next();
        errField.html(errors[field][0]).addClass('is-visible')
    }
    // $(`${errors}`)
}


