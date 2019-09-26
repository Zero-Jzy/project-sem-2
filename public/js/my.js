const currentUserLogged = $('#current-user-logged').val();

var itemHeader = $('.wrap_menu a, .wrap_menu li a');
var rightNavbar = $('.right-navbar a');
var path = window.location.pathname;
let isLogged = $('input[name="checkLogin"]').val();
if (path.match(/menu|profile|checkout/g)) {
    itemHeader.css('color', 'black');
    rightNavbar.css('color', '#000')
}

const Toast = Swal.mixin({
    toast: true,
    position: 'top-start',
    showConfirmButton: false,
    timer: 3000
});

$(document)
    .ajaxStart(function () {
        $("body").css("cursor", "progress");
    })
    .ajaxStop(function () {
        $("body").css("cursor", "default");
    });

// JS MODAL LOGIN AND REGISTER
// Đã free cho ng ta rồi còn cho coppy thiếu dkm nó :)) ai mà ko biết fix thì ăn lol hết :)) vcc


if (window.location.search.split('pleaseLogin=')[1] === '1') {
    showErrLogin();
}
;

function showErrLogin() {
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

function renderErrors(errors) {
    let errFields = Object.keys(errors);
    for (let field of errFields) {
        let errField = $(`input[name=${field}]`).next();
        errField.html(errors[field][0]).addClass('is-visible')
    }
};


function renderErrors(errors) {
    let errFields = Object.keys(errors);
    for (let field of errFields) {
        let errField = $(`input[name=${field}]`).next();
        errField.html(errors[field][0]).addClass('is-visible')
    }
}


function openModalAddress() {
    Swal.fire({
        title: 'Add new address',
        width: 730,
        showConfirmButton: false,
        html: ` <form id="form-add-address">
                  <input  type="hidden" name="_token" value="${token}">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Full name</label>
                    <div class="col-sm-10">
                        <input name="name" type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Phone number</label>
                    <div class="col-sm-10">
                        <input name="phone" type="number" class="form-control" placeholder="Phone Number">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Province</label>
                    <div class="col-md-10">
                        <select name="tinh" class="form-control" id="tinh">

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Districts</label>
                    <div class="col-md-10">
                        <select name="huyen" class="form-control" id="huyen">
                            <option value="">Select District</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Wards</label>
                    <div class="col-md-10">
                        <select name="xa" class="form-control" id="xa">
                            <option value="">Select Wards</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row  has-feedback">
                    <label for="address"
                           class="col-lg-2 col-md-2 control-label visible-md-block visible-lg-block">Address:</label>
                    <div class="col-lg-10 col-md-10">
                    <textarea class="form-control" name="address" cols="30" rows="4"
                              placeholder="Enter the address"></textarea>
                        <i class="form-control-feedback" style="display: none;"></i>
                    </div>
                </div>
                <input type="hidden" name="profile_id" value="${profile_id}">
                <button>Submit</button>
                </form>`,
        onBeforeOpen: () => beforeOpen()
    })
};

function beforeOpen() {
    const tinh = document.getElementById('tinh');
    const huyen = document.getElementById('huyen');
    const xa = document.getElementById('xa');
    var data = [];

    $.ajax({
        url: '/api/hanh-chinh-viet-nam',
        method: 'get',
        success: res => {
            data = JSON.parse(res);
        },
        error: err => {
            alert('Có lỗi xảy ra!')
        },
        async: false
    });

    renderOption(tinh, data, 'City');

    xa.disabled = true;
    huyen.disabled = true;
    var huyenData;
    tinh.onchange = function (e) {
        let currentValue = e.target.value.split('-')[0];
        huyenData = data.filter(item => item.value === currentValue)[0].children;
        renderOption(huyen, huyenData, 'District');
        huyen.disabled = false;
        xa.innerHTML = '<option value="">Select Wards</option>';
        xa.disabled = true;
        huyen.click()
    };

    huyen.onchange = function (e) {
        let currentValue = e.target.value.split('--')[0];
        var xaData = huyenData.filter(item => item.value === currentValue)[0].children;
        renderOption(xa, xaData, 'Wards');
        xa.disabled = false;
    };

    function renderOption(select, data, type) {
        var htmlTxt = data.map(e => `<option value="${e.value}--${e.label}">${e.label}</option>`).join('');
        select.innerHTML = `<option value="">Select ${type}</option>` + htmlTxt
    }

    $('#form-add-address').submit(function (e) {
        e.preventDefault();

        let data = $(this).serialize();

        console.log(data);
        $.ajax({
            type: "POST",
            url: '/profile',
            data,
            success: function (data) {
                if (data === 'success') {
                    Swal.close();
                    location.reload();
                } // show response from the php script.
            },
            error: function (err) {

                let errors = err.responseJSON;

                for (let err in errors) {
                    $('input[name="' + err + '"],select[name="' + err + '"],textarea[name="' + err + '"]')
                        .after(`<small class="error-mes-address">${errors[err]}</small>`)
                }
            }
        });
    })
}

