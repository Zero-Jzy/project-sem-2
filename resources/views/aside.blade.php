<aside style="overflow: inherit" class="sidebar trans-0-4">
    <!-- Button Hide sidebar -->
    {{--        <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>--}}
    <button id="btn-toggle-sidebar" class="btn-toggle-sidebar m-l-33 trans-0-4">
        <span class="bag-icon" data-food="0" data-set="0"><i class="fal fa-shopping-bag"></i></span>
        <span class="close-icon"><i class="fal fa-times"></i></span>
    </button>

    <!-- - -->
    <div class="my-fill-tab">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="active"
                   id="pills-food-tab"
                   data-toggle="pill"
                   href="#pills-food"
                   role="tab"
                   aria-controls="pills-food"
                   aria-selected="true">
                    Foods (<span id="food-count">0</span>)
                </a>
            </li>
            <li class="nav-item">
                <a class=""
                   id="pills-set-tab"
                   data-toggle="pill"
                   href="#pills-set"
                   role="tab"
                   aria-controls="pills-set"
                   aria-selected="false">
                    Sets (<span id="set-count">0</span>)
                </a>
            </li>
        </ul>
    </div>

    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-food" role="tabpanel" aria-labelledby="pills-food-tab">
            <div id="list-food" class="list-food scrollbar">
                <div class="blo3 flex-w flex-col-l-sm m-b-30">
                    <div style="width: 120px;height: 90px;" class="pic-blo3 bo-rad-10 hov-img-zoom m-r-28">
                        <a href="#"><img src="{{asset('/template/images/lunch-05.jpg')}}" alt="IMG-MENU"></a>
                    </div>
                    <div class="text-blo3 flex-col-l-m">
                        <a href="#" class="txt19 m-b-3">
                            Duis massa
                        </a>
                        <span class="txt10 m-t-20">
								$12.75
							</span>
                    </div>
                    <div class="ml-auto mr-4 my-2">
                        <button id="btn-delete-food ">
                            <i class="fal fa-times"></i>
                        </button>
                    </div>
                </div>

            </div>
            <div class="total-box">
                <div style="">
                    <h5 class="text-center text-uppercase" style="line-height: 50px">Total</h5>
                </div>
                <div class="total-content total-food">
                    <div class="row ml-0">
                        <div class="col-6">
                            <span class="calo">0</span>
                        </div>
                        <div class="col-6">
                            <span class="protein">0</span>
                        </div>
                        <div class="col-6">
                            <span class="dietary_fiber">0</span>
                        </div>
                        <div class="col-6">
                            <span class="carbohydrate">0</span>
                        </div>
                        <div class="col-6">
                            <span class="total_fat">0</span>
                        </div>
                        <div class="col-6">
                            <span class="price">0</span>
                        </div>
                        <div class="col-12">
                            <span class="vitamins"></span>
                        </div>
                        <div class="col-12">
                            <span class="minerals"></span>
                        </div>
                    </div>

                </div>
                <button type="submit" id="btn-create-set"
                        class="btn-incard btn3 flex-c-m size18 txt11 trans-0-4 m-10 m-auto">
                    Create set
                </button>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-set" role="tabpanel" aria-labelledby="pills-set-tab">
            <div id="list-set" class="list-set scrollbar">

            </div>
            <div class="total-box">
                <div>
                    <h5 class="text-center text-uppercase" style="line-height: 50px">Total</h5>
                </div>
                <div class="total-content total-set">
                    <div class="row ml-0">
                        <div class="col-6">
                            <span class="calo">23</span>
                        </div>
                        <div class="col-6">
                            <span class="protein">234</span>
                        </div>
                        <div class="col-6">
                            <span class="dietary_fiber">234</span>
                        </div>
                        <div class="col-6">
                            <span class="carbohydrate">234</span>
                        </div>
                        <div class="col-6">
                            <span class="total_fat">234</span>
                        </div>
                        <div class="col-6">
                            <span class="price">0</span>
                        </div>
                        <div class="col-12">
                            <span class="vitamins"></span>
                        </div>
                        <div class="col-12">
                            <span class="minerals"></span>
                        </div>
                    </div>
                </div>
                <a href="javascript:void(0)" class="btn-incard btn3 flex-c-m size18 txt11 trans-0-4 m-10 m-auto"
                   id="rd_checkout">
                    Checkout
                </a>
            </div>
        </div>
    </div>
</aside>

<div class="board-color">
    <div class="very-high">Very high</div>
    <div class="high">High</div>
    <div class="normal">Normal</div>
    <div class="low">Low</div>
    <div class="very-low">Very low</div>
</div>

<script>
    const btnAddFood = $('.btn-add-food');
    const btnCheckout = $('#checkout');
    const btnAddSet = $('.btn-add-set');
    var foodsInBag = new Map(JSON.parse(localStorage.getItem('foods_in_bag'))) || new Map();
    var setsInBag = new Map(JSON.parse(localStorage.getItem('sets_in_bag'))) || new Map();
    const listFoodInBag = $('#list-food');
    const listSetInBag = $('#list-set');

    renderFoodInBag();
    renderSetInBag();

    const btnUp = $('.quantity-up');
    const btnDown = $('.quantity-down');

    const increment = 'increment';
    const decrement = 'decrement';
    const withValue = 'withValue';
    const deleteFood = 'deleteFood';

    btnAddFood.click(function () {
        const foodId = $(this).attr('data-id');
        updateQuantityFood(foodId, increment)
    });

    btnAddSet.click(function () {
        const setId = $(this).attr('data-id');
        updateQuantitySet(setId, increment)
    });

    function updateQuantityFood(id, type, payload) {
        id = parseInt(id);
        const food = foodsInBag.get(id);
        var currentQuantity = food ? food.quantity : 0;
        switch (type) {
            case increment:
                if (foodsInBag.has(id)) {
                    foodsInBag.set(id, {...food, quantity: currentQuantity + 1});
                } else {
                    $.get(`/api/food/${id}`)
                        .done(function (res) {
                            foodsInBag.set(res.id, {...res, quantity: 1});
                            localStorage.foods_in_bag = JSON.stringify(Array.from(foodsInBag.entries()));
                            renderFoodInBag();
                        });
                }
                Toast.fire({
                    type: 'success',
                    title: `Adding to bag success!`,
                });
                break;
            case decrement:
                if (!foodsInBag.has(id) || currentQuantity <= 0) break;

                if (currentQuantity === 1) {
                    foodsInBag.delete(id)
                } else {
                    foodsInBag.set(id, {...food, quantity: currentQuantity - 1})
                }
                break;
            case withValue:
                foodsInBag.set(id, {...food, quantity: parseInt(payload)});
                break;
            case deleteFood:
                foodsInBag.delete(id);
                break;
            default:
                break;
        }

        localStorage.foods_in_bag = JSON.stringify(Array.from(foodsInBag.entries()));
        renderFoodInBag();
    }

    function updateQuantitySet(id, type, payload) {
        id = parseInt(id);
        const set = setsInBag.get(id);
        const currentQuantity = set ? set.quantity : 0;
        switch (type) {
            case increment:
                if (setsInBag.has(id)) {
                    setsInBag.set(id, {...set, quantity: currentQuantity + 1});
                } else {
                    $.get(`/api/set/${id}`)
                        .done(function (res) {
                            setsInBag.set(res.id, {...res, quantity: 1});
                            localStorage.sets_in_bag = JSON.stringify(Array.from(setsInBag.entries()));
                            renderSetInBag();
                        });
                }
                Toast.fire({
                    type: 'success',
                    title: `Adding to bag success!`,
                });
                break;
            case decrement:
                if (!setsInBag.has(id) || currentQuantity < 0) break;

                if (currentQuantity === 1) {
                    setsInBag.delete(id)
                } else {
                    setsInBag.set(id, {...set, quantity: currentQuantity - 1})
                }
                break;
            case withValue:
                setsInBag.set(id, {...set, quantity: parseInt(payload)});
                break;
            case deleteFood:
                setsInBag.delete(id);
                break;
            default:
                break;
        }
        localStorage.sets_in_bag = JSON.stringify(Array.from(setsInBag.entries()));
        renderSetInBag();
    }

    function renderFoodInBag(foods = Array.from(foodsInBag.values())) {
        var countFood = foods.reduce((a, b) => {
            return a + b.quantity
        }, 0);

        $('.bag-icon').attr('data-food', countFood);
        $('#food-count').html(countFood);
        let listFoodsHtml = foods.map(food => (
            `<div class="blo3 flex-w m-2 flex-col-l-sm m-b-30138">
                    <div style="width: 120px;height: 90px;" class="pic-blo3 bo-rad-10 hov-img-zoom m-r-28">
                        <a href="#"><img src="https://res.cloudinary.com/cloud-pj-sem2/image/upload/w_300,h_300,c_lpad,b_auto/${food.image}" alt="${food.name}"></a>
                    </div>
                    <div class="text-blo3 flex-col-l-m">
                        <a href="#" class="txt19 m-b-3">
                            ${food.name.length < 18 ? food.name : food.name.slice(0, 18) + ' ...'}
                        </a>
                        <div>
                            <div class="quantity">
                                 <input onchange="updateQuantityFood(${food.id}, withValue, this.value)" type="number" min="1" step="1" data-id="${food.id}" value="${food.quantity}">
                                 <div class="quantity-nav">
                                     <div onclick="updateQuantityFood(${food.id}, increment)" class="quantity-button quantity-up">+</div>
                                     <div onclick="updateQuantityFood(${food.id}, decrement)" class="quantity-button quantity-down">-</div>
                                 </div>
                            </div>
                            <span class="txt10 m-t-20">${food.price}</span>
                        </div>
                    </div>
                    <div class="ml-auto mr-4 my-2">
                        <button onclick="updateQuantityFood(${food.id}, deleteFood)">
                            <i class="fal fa-times"></i>
                        </button>
                    </div>
                </div>`)
        );

        listFoodInBag.html(listFoodsHtml.join(''));

        renderTotal('total-food', foods);
    }

    function renderSetInBag(sets = Array.from(setsInBag.values())) {
        var countSet = sets.reduce((a, b) => {
            return a + b.quantity
        }, 0);

        $('.bag-icon').attr('data-set', countSet);
        $('#set-count').html(countSet);
        countSet <= 0 ? btnCheckout.attr('href', 'javascript:void(0)') : btnCheckout.attr('href', '/checkout');
        let listSetsHtml = sets.map(set => (
            `<div class="blo3 flex-w m-2 flex-col-l-sm m-b-30138">
                <div style="width: 120px;height: 90px;" class="pic-blo3 bo-rad-10 hov-img-zoom m-r-28">
                    <a href="/menu/set/${set.id}"><img src="https://res.cloudinary.com/cloud-pj-sem2/image/upload/w_300,h_300,c_lpad,b_auto/${set.image}" alt="${set.name}"></a>
                </div>
                <div class="text-blo3 flex-col-l-m">
                    <a href="/menu/set/${set.id}" class="txt19 m-b-3">
                        ${set.name.length < 18 ? set.name : set.name.slice(0, 18) + ' ...'}
                    </a>
                    <div>
                        <div class="quantity">
                            <input onchange="updateQuantitySet(id, withValue, ${set.quantity})" type="number" min="1" step="1" data-id="${set.id}" value="${set.quantity}">
                                <div class="quantity-nav">
                                    <div onclick="updateQuantitySet(${set.id}, increment)" class="quantity-button quantity-up">+</div>
                                    <div onclick="updateQuantitySet(${set.id}, decrement)" class="quantity-button quantity-down">-</div>
                                </div>
                        </div>
                        <span class="txt10 m-t-20">${set.price}$</span>
                    </div>
                </div>
                <div class="ml-auto mr-4 my-2">
                    <button onclick="updateQuantitySet(${set.id}, deleteFood)">
                        <i class="fal fa-times"></i>
                    </button>
                </div>
            </div>`)
        );

        renderTotal('total-set', sets);

        listSetInBag.html(listSetsHtml.join(''))
    }

    function renderTotal(nameClass, arr) {
        let totalSetBox = $(`.${nameClass}`),
            calo = totalSetBox.find('.calo'),
            protein = totalSetBox.find('.protein'),
            dietary_fiber = totalSetBox.find('.dietary_fiber'),
            carbohydrate = totalSetBox.find('.carbohydrate'),
            total_fat = totalSetBox.find('.total_fat'),
            price = totalSetBox.find('.price');

        var totalValue = getTotalValue(arr);

        calo.html('Calo: ' + totalValue.calo);
        protein.html('Protein: ' + totalValue.protein);
        dietary_fiber.html('Dietary Fiber: ' + totalValue.dietary_fiber);
        carbohydrate.html('Carbohydrate: ' + totalValue.carbohydrate);
        total_fat.html('Total fat: ' + totalValue.total_fat);
        price.html('Price: ' + totalValue.price);
    }

    function getTotalValue(arr) {
        return arr.reduce((a, item) => {
            let quantity = item.quantity;
            return {
                calo: a.calo + parseInt(item.calo) * quantity,
                protein: a.protein + parseInt(item.protein) * quantity,
                dietary_fiber: a.dietary_fiber + parseInt(item.dietary_fiber) * quantity,
                carbohydrate: a.carbohydrate + parseInt(item.carbohydrate) * quantity,
                total_fat: a.total_fat + parseInt(item.total_fat) * quantity,
                price: a.price + parseInt(item.price) * quantity
            }
        }, {calo: 0, protein: 0, dietary_fiber: 0, carbohydrate: 0, total_fat: 0, price: 0});
    }

    $('#rd_checkout').click(function () {
        closeBag()
        if (!isLogged) {
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
        if (setsInBag.size <= 0) return;

        window.location = '/checkout'
    })

    $('#btn-create-set').click(function () {
        if (foodsInBag.size <= 0) return;

        const listFood = Array.from(foodsInBag.values()).map(food => ({
            id: food.id,
            quantity: food.quantity,
            price: food.price
        }));

        var totalValueFood = getTotalValue(Array.from(foodsInBag.values()));

        $.ajax({
            method: 'post',
            url: "/menu/set",
            data: {
                '_token': `{{ csrf_token() }}`,
                'currentUserLogged': currentUserLogged,
                'listFood': listFood,
                'totalValue': totalValueFood
            }
        }).done(function (res) {
            const set = JSON.parse(res);
            localStorage.removeItem('foods_in_bag');
            foodsInBag = new Map();
            renderFoodInBag();
            setsInBag.set(set.id, {...set, quantity: 1});
            localStorage.sets_in_bag = JSON.stringify(Array.from(setsInBag.entries()));
            renderSetInBag();
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

    let searchParams = new URLSearchParams(window.location.search);

    let category_id = searchParams.get('category');

    $('.list-food-category > li').each(function () {
        if (!category_id) {
            category_id = '0';
        }

        let id = $(this).attr('data-id');

        if (id === category_id) {
            $(this).addClass('ui-tabs-active')
        }
        ;
    });

    function renderErrors(errors) {
        let errFields = Object.keys(errors);
        for (let field of errFields) {
            let errField = $(`input[name=${field}]`).next();
            errField.html(errors[field][0]).addClass('is-visible')
        }
        // $(`${errors}`)
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

</script>
