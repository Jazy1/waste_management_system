@extends('admin.layouts.parent')

@section('title', 'Profile | User')

@section('content')

    <main class="page-content page-content--order-header">
        <div class="container">
            <div class="page-header">
                <h3 class="page-header__subtitle d-lg-none">User Details</h3>
                <h1 class="page-header__title">User ID <span class="text-grey">#1010
                    {{-- {{$order->number}} --}}
                </span></h1>
            </div>
            <div class="page-tools">
                <div class="page-tools__breadcrumbs">
                    <div class="breadcrumbs">
                        <div class="breadcrumbs__container">
                            <ol class="breadcrumbs__list">
                                <li class="breadcrumbs__item">
                                    <a class="breadcrumbs__link" href="{{ route("admin.dashboard") }}">
                                        <svg class="icon-icon-home breadcrumbs__icon">
                                            <use xlink:href="#icon-home"></use>
                                        </svg>
                                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                            <use xlink:href="#icon-keyboard-right"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="breadcrumbs__item "><a class="breadcrumbs__link"
                                        href="{{ route("admin.users.index") }}"><span>Users</span>
                                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                            <use xlink:href="#icon-keyboard-right"></use>
                                        </svg></a>
                                </li>
                                <li class="breadcrumbs__item active"><span class="breadcrumbs__link">User #1010</span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                {{-- <div class="page-tools__right">
                    <div class="page-tools__right-row">
                        <div class="page-tools__right-item"><a class="button-icon" href="#"><span
                                    class="button-icon__icon">
                                    <svg class="icon-icon-print">
                                        <use xlink:href="#icon-print"></use>
                                    </svg></span></a>
                        </div>
                        <div class="page-tools__right-item">
                            <a href="{{ route("companies.orders.destroy", ["id"=> $order->id]) }}" class="button-icon" type="button"><span class="button-icon__icon">
                                    <svg class="icon-icon-trash">
                                        <use xlink:href="#icon-trash"></use>
                                    </svg></span>
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="card card-order" style="padding-top: 2rem;!important">
                <div class="card__wrapper">
                    <section class="card-order__section pt-0">
                        <div class="card__container">
                            <div class="card__header">
                                <div class="row gutter-bottom-xs justify-content-between flex-grow-1">
                                    <div class="col">
                                        <h3 class="card__title">User</h3>
                                    </div>
                                    <div class="col-auto"><span class="card__date">Joined on 
                                        {{-- {{ \Carbon\Carbon::parse($order->created_on)->format('jS F Y') }} --}}
                                        25th May 2024
                                    </span>
                                    </div>
                                </div>
                            </div>
                            <ul class="card-order__customer-list">
                                <li class="card-order__customer-item">
                                    <svg class="icon-icon-user">
                                        <use xlink:href="#icon-user"></use>
                                    </svg> <b>Name:</b> <span>
                                        Kora denay wala
                                        {{-- {{$order->freelancer->name}} --}}
                                    </span>
                                </li>
                                {{-- <li class="card-order__customer-item">
                                    <svg class="icon-icon-phone">
                                        <use xlink:href="#icon-phone"></use>
                                    </svg> <b>Phone:</b> <a href="mailto:{{$order->freelancer->email}}">{{$order->freelancer->email}}</a>
                                </li> --}}
                                <li class="card-order__customer-item">
                                    <svg class="icon-icon-email">
                                        <use xlink:href="#icon-email"></use>
                                    </svg> <b>Email:</b> <a href="mailto:
                                    {{-- {{$order->freelancer->email}} --}}
                                    ">
                                        {{-- {{$order->freelancer->email}} --}}
                                        kora@gmail.com
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <section class="card-order__section card-order__method">
                        <div class="card__container">
                            <div class="row gutter-bottom-sm">
                                <div class="col">
                                    <h3 class="card__title">User Details</h3>
                                    <div class="card-order__payment">
                                        {{-- <div class="form-group">
                                            <div class="input-group input-group--append">
                                                <select class="input js-input-select input--fluid select2-hidden-accessible"
                                                    data-placeholder="" tabindex="-1" aria-hidden="true">
                                                    <option value="1" selected="selected">Credit Card
                                                    </option>
                                                    <option value="2">Pay Pal
                                                    </option>
                                                </select><span class="select2 select2-container select2-container--default"
                                                    dir="ltr" style="width: 200px;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0" aria-labelledby="select2-tsw1-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-tsw1-container"
                                                                title="Credit Card">Credit
                                                                Card
                                                            </span><span class="select2-selection__arrow"
                                                                role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span><span
                                                    class="input-group__arrow">
                                                    <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                    </svg></span>
                                            </div>
                                        </div> --}}
                                        <ul class="card-order__list">
                                            {{-- <li><b>Order #:</b> {{$order->number}}</li>
                                            <li><b>Amount:</b> ${{$order->amount}}</li> --}}
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-10 col-md-8 col-xl card-order__method-status">
                                    <h3 class="card__title">Description</h3>
                                    <div class="card-order__shipping">
                                        <div class="form-group">
                                            {{-- {{$order->description}} --}}
                                            Kora denay wala is professional kora guy who has all types of trash at his house. You can come anytime to get trash. This guy also tips very generously so be sure to be in his good books. His tips include metal trash and sometimes, orange and banana peels.
                                            {{-- <div class="input-group input-group--append">
                                                <select
                                                    class="input js-input-select input--fluid select2-hidden-accessible"
                                                    data-placeholder="" tabindex="-1" aria-hidden="true">
                                                    <option value="1" selected="selected">Carrier
                                                    </option>
                                                </select><span class="select2 select2-container select2-container--default"
                                                    dir="ltr" style="width: 200px;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0" aria-labelledby="select2-9s2m-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-9s2m-container"
                                                                title="Carrier">Carrier
                                                            </span><span class="select2-selection__arrow"
                                                                role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span><span
                                                    class="input-group__arrow">
                                                    <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                    </svg></span>
                                            </div> --}}
                                        </div>
                                        {{-- <ul class="card-order__list">
                                            <li><b>Tracking Code:</b> FX-012345-6</li>
                                            <li><b>Date:</b> 12.15.2018</li>
                                        </ul> --}}
                                    </div>
                                </div>
                                {{-- <div class="col-12 col-sm-10 col-md-8 col-xl card-order__method-status">
                                    <div class="card-order__status-panel">
                                        <div class="form-group form-group--inline">
                                            <label class="form-label">Fulfilment status</label>
                                            <div class="input-group input-group--white input-group--append">
                                                <select
                                                    class="input js-input-select input--fluid select2-hidden-accessible"
                                                    data-placeholder="" tabindex="-1" aria-hidden="true">
                                                    <option value="1" selected="selected">Delivered
                                                    </option>
                                                </select><span class="select2 select2-container select2-container--default"
                                                    dir="ltr" style="width: 236.328px;"><span
                                                        class="selection"><span
                                                            class="select2-selection select2-selection--single"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0" aria-labelledby="select2-pe8d-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-pe8d-container"
                                                                title="Delivered
                                                ">Delivered
                                                            </span><span class="select2-selection__arrow"
                                                                role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span><span
                                                    class="input-group__arrow">
                                                    <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                    </svg></span>
                                            </div>
                                        </div>
                                        <div class="form-group form-group--inline">
                                            <label class="form-label">Payment status</label>
                                            <div class="input-group input-group--white input-group--append">
                                                <select
                                                    class="input js-input-select input--fluid select2-hidden-accessible"
                                                    data-placeholder="" tabindex="-1" aria-hidden="true">
                                                    <option value="1" selected="selected">Paid
                                                    </option>
                                                </select><span class="select2 select2-container select2-container--default"
                                                    dir="ltr" style="width: 236.328px;"><span
                                                        class="selection"><span
                                                            class="select2-selection select2-selection--single"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0" aria-labelledby="select2-tp4i-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-tp4i-container"
                                                                title="Paid
                                                ">Paid
                                                            </span><span class="select2-selection__arrow"
                                                                role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span><span
                                                    class="input-group__arrow">
                                                    <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                    </svg></span>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </section>
                    {{-- <section class="card-order__section color-grey-bg">
                        <div class="card__container">
                            <div class="row gutter-bottom-sm">
                                <div class="col">
                                    <h3 class="card__title">Payment method</h3>
                                    <address class="card-order__address">
                                        <ul class="card-order__list">
                                            <li><b>First name:</b> Sophia</li>
                                            <li><b>Last name:</b> Hale</li>
                                        </ul>
                                        <ul class="card-order__list">
                                            <li><b>Address:</b> 4898 Joanne Lane street</li>
                                            <li><b>City:</b> Boston</li>
                                            <li><b>Country: </b>United States</li>
                                            <li><b>State:</b> Massachusetts</li>
                                            <li><b>Zip code:</b> 02110</li>
                                        </ul>
                                        <ul class="card-order__list">
                                            <li><b>Phone:</b> <a href="%2b10701234567.html">+1 (070) 123-4567</a></li>
                                        </ul>
                                    </address>
                                </div>
                                <div class="col">
                                    <h3 class="card__title">Shipping address</h3>
                                    <address class="card-order__address">
                                        <ul class="card-order__list">
                                            <li><b>First name:</b> Sophia</li>
                                            <li><b>Last name:</b> Hale</li>
                                        </ul>
                                        <ul class="card-order__list">
                                            <li><b>Address:</b> 4898 Joanne Lane street</li>
                                            <li><b>City:</b> Boston</li>
                                            <li><b>Country: </b>United States</li>
                                            <li><b>State:</b> Massachusetts</li>
                                            <li><b>Zip code:</b> 02110</li>
                                        </ul>
                                        <ul class="card-order__list">
                                            <li><b>Phone:</b> <a href="%2b10701234567.html">+1 (070) 123-4567</a></li>
                                        </ul>
                                    </address>
                                </div>
                                <div class="col d-none d-xl-block"></div>
                            </div>
                        </div>
                    </section>
                    <div class="card-order__product scrollbar-thin scrollbar-visible" data-simplebar="init">
                        <div class="simplebar-wrapper" style="margin: 0px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;">
                                        <div class="simplebar-content" style="padding: 0px;">
                                            <table class="table table--lines table--groups table--striped">
                                                <colgroup>
                                                    <col class="colgroup-1">
                                                    <col class="colgroup-2">
                                                    <col>
                                                    <col>
                                                    <col>
                                                </colgroup>
                                                <thead class="table__header">
                                                    <tr class="table__header-row">
                                                        <th><span class="text-nowrap">PRODUCT</span>
                                                        </th>
                                                        <th class="text-center"><span>PRICE</span>
                                                        </th>
                                                        <th class="text-center"><span>QUANTITY</span>
                                                        </th>
                                                        <th><span>TOTAL</span>
                                                        </th>
                                                        <th class="table__actions"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table__row">
                                                        <td class="table__td">
                                                            <div class="mw-200"><span class="text-light-theme">MacBook Pro
                                                                    15” (Mid 2018)</span>
                                                            </div>
                                                        </td>
                                                        <td class="table__td text-center text-dark-theme">
                                                            <div class="d-inline-block">
                                                                <div class="input-group input-group--prepend-xs">
                                                                    <div class="input-group__prepend">$</div>
                                                                    <div class="input input--edit" contenteditable="true">
                                                                        2500</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="table__td text-center">
                                                            <input class="input input--edit text-center text-light-theme"
                                                                type="number" value="10" min="0"
                                                                max="999">
                                                        </td>
                                                        <td class="table__td text-nowrap text-dark-theme">$25,000</td>
                                                        <td class="table__td table__actions text-dark-theme">
                                                            <button class="table__remove" type="button">
                                                                <svg class="icon-icon-trash">
                                                                    <use xlink:href="#icon-trash"></use>
                                                                </svg>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="table__row">
                                                        <td class="table__td">
                                                            <div class="mw-200"><span class="text-light-theme">MacBook Pro
                                                                    15” (Mid 2018)</span>
                                                            </div>
                                                        </td>
                                                        <td class="table__td text-center text-dark-theme">
                                                            <div class="d-inline-block">
                                                                <div class="input-group input-group--prepend-xs">
                                                                    <div class="input-group__prepend">$</div>
                                                                    <div class="input input--edit" contenteditable="true">
                                                                        2500</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="table__td text-center">
                                                            <input class="input input--edit text-center text-light-theme"
                                                                type="number" value="10" min="0"
                                                                max="999">
                                                        </td>
                                                        <td class="table__td text-nowrap text-dark-theme">$25,000</td>
                                                        <td class="table__td table__actions text-dark-theme">
                                                            <button class="table__remove" type="button">
                                                                <svg class="icon-icon-trash">
                                                                    <use xlink:href="#icon-trash"></use>
                                                                </svg>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="table__row">
                                                        <td class="table__td">
                                                            <div class="mw-200"><span class="text-light-theme">MacBook Pro
                                                                    15” (Mid 2018)</span>
                                                            </div>
                                                        </td>
                                                        <td class="table__td text-center text-dark-theme">
                                                            <div class="d-inline-block">
                                                                <div class="input-group input-group--prepend-xs">
                                                                    <div class="input-group__prepend">$</div>
                                                                    <div class="input input--edit" contenteditable="true">
                                                                        2500</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="table__td text-center">
                                                            <input class="input input--edit text-center text-light-theme"
                                                                type="number" value="10" min="0"
                                                                max="999">
                                                        </td>
                                                        <td class="table__td text-nowrap text-dark-theme">$25,000</td>
                                                        <td class="table__td table__actions text-dark-theme">
                                                            <button class="table__remove" type="button">
                                                                <svg class="icon-icon-trash">
                                                                    <use xlink:href="#icon-trash"></use>
                                                                </svg>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: auto; height: 241px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar"
                                style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                            <div class="simplebar-scrollbar"
                                style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                        </div>
                    </div>
                    <div class="card-order__footer-total">
                        <div class="card__container">
                            <div class="row gutter-bottom-sm justify-content-end">
                                <div class="card-order__footer-submit col-12 col-sm">
                                    <button class="button button--secondary" type="button"><span
                                            class="button__text">Add Product</span>
                                    </button>
                                </div>
                                <div class="col-auto">
                                    <ul class="card-order__total">
                                        <li class="card-order__total-item">
                                            <div class="card-order__total-title">Subtotal:</div>
                                            <div class="card-order__total-value">$75,000</div>
                                        </li>
                                        <li class="card-order__total-item">
                                            <div class="card-order__total-title">TAX(20%):</div>
                                            <div class="card-order__total-value">$90,000</div>
                                        </li>
                                        <li class="card-order__total-item">
                                            <div class="card-order__total-title">DISCOUNT:</div>
                                            <div class="card-order__total-value">10%</div>
                                        </li>
                                        <li class="card-order__total-item card-order__total-footer">
                                            <div class="card-order__total-title">total:</div>
                                            <div class="card-order__total-value">$81,000</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <section class="section">
                <div class="section__title d-none">
                    <h2>Section</h2>
                </div>
                <div class="row gutter-bottom-xl">
                    <div class="col-12 d-flex">
                        <div class="card pb-0">
                            <div class="card__wrapper">
                                <div class="card__container">
                                    <div class="card__header">
                                        <div class="card__header-left">
                                            <h3 class="card__header-title">
                                                Recent Activities
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="card__body">
                                        <div class="card__scrollbar card__table">
                                            <div class="card__table-transactions scrollbar-thin scrollbar-visible"
                                                data-simplebar="data-simplebar">
                                                <table class="table table--lines table--striped">
                                                    <colgroup>
                                                        <col class="colgroup-1" />
                                                        <col class="colgroup-2" />
                                                        <col class="colgroup-3" />
                                                        <col class="colgroup-4" />
                                                        <col class="colgroup-5" />
                                                        <col class="colgroup-6" />
                                                        <col />
                                                    </colgroup>
                                                    <thead class="table__header table__header--sticky">
                                                        <tr>
                                                            <th>
                                                                <span>Collector</span>
                                                            </th>
                                                            <th>
                                                                <span>User</span>
                                                            </th>
                                                            <th>
                                                                <span>Scrap</span>
                                                            </th>
                                                            <th>
                                                                <span>Bid</span>
                                                            </th>
                                                            <th>
                                                                <span>Description</span>
                                                            </th>
                                                            <th>
                                                                <span>Status</span>
                                                            </th>
                                                            <th class="table__actions"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        {{-- @foreach ($lastTransactions as $lastTransaction) --}}
                                                            <tr class="table__row">
                                                                {{-- <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{$lastTransaction->number}} 
    
                                                                        Sindhi Koraywala
                                                                    </span>
                                                                </td> --}}
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Koraywala
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Kora denay wala
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Kora
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{-- {{ \Carbon\Carbon::parse($lastTransaction->created_at)->format('d-m-Y h:i:s A') }}  --}}
                                                                        RS.2500
                                                                    </span>
                                                                </td>
                                                                <td class="table__td">
                                                                    <span>
                                                                        Koraywala wants to pickup Kora denay wala's kora
                                                                    </span>
                                                                </td>
                                                                {{-- <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{ $lastTransaction->company->name }}
                                                                        pending
                                                                    </span>
                                                                </td> --}}
                                                                <td class="table__td">
                                                                    <div class="table__status">
                                                                        {{-- @if ($lastTransaction->status == "paid" ) --}}
                                                                            <span class="table__status-icon color-green"></span>
                                                                            Paid
                                                                        {{-- @endif --}}
                                                                        {{-- @if ($lastTransaction->status == "cancelled" ) --}}
                                                                            <span class="table__status-icon color-red"></span>
                                                                            Canceled
                                                                        {{-- @endif --}}
                                                                        {{-- @if ($lastTransaction->status == "pending" ) --}}
                                                                            <span class="table__status-icon color-blue"></span>
                                                                            Pending
                                                                        {{-- @endif --}}
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="table__row">
                                                                {{-- <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{$lastTransaction->number}} 
    
                                                                        Sindhi Koraywala
                                                                    </span>
                                                                </td> --}}
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Koraywala
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Kora denay wala
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Kora
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{-- {{ \Carbon\Carbon::parse($lastTransaction->created_at)->format('d-m-Y h:i:s A') }}  --}}
                                                                        RS.2500
                                                                    </span>
                                                                </td>
                                                                <td class="table__td">
                                                                    <span>
                                                                        Kora denay wala just confirmed at  Koraywala's bid to pickup kora
                                                                    </span>
                                                                </td>
                                                                {{-- <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{ $lastTransaction->company->name }}
                                                                        pending
                                                                    </span>
                                                                </td> --}}
                                                                <td class="table__td">
                                                                    <div class="table__status">
                                                                        {{-- @if ($lastTransaction->status == "paid" ) --}}
                                                                            <span class="table__status-icon color-green"></span>
                                                                            Paid
                                                                        {{-- @endif --}}
                                                                        {{-- @if ($lastTransaction->status == "cancelled" ) --}}
                                                                            <span class="table__status-icon color-red"></span>
                                                                            Canceled
                                                                        {{-- @endif --}}
                                                                        {{-- @if ($lastTransaction->status == "pending" ) --}}
                                                                            <span class="table__status-icon color-blue"></span>
                                                                            Pending
                                                                        {{-- @endif --}}
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="table__row">
                                                                {{-- <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{$lastTransaction->number}} 
    
                                                                        Sindhi Koraywala
                                                                    </span>
                                                                </td> --}}
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Koraywala
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Kora denay wala
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Kora
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{-- {{ \Carbon\Carbon::parse($lastTransaction->created_at)->format('d-m-Y h:i:s A') }}  --}}
                                                                        RS.2500
                                                                    </span>
                                                                </td>
                                                                <td class="table__td">
                                                                    <span>
                                                                        Koraywala wants to pickup Kora denay wala's kora
                                                                    </span>
                                                                </td>
                                                                {{-- <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{ $lastTransaction->company->name }}
                                                                        pending
                                                                    </span>
                                                                </td> --}}
                                                                <td class="table__td">
                                                                    <div class="table__status">
                                                                        {{-- @if ($lastTransaction->status == "paid" ) --}}
                                                                            <span class="table__status-icon color-green"></span>
                                                                            Paid
                                                                        {{-- @endif --}}
                                                                        {{-- @if ($lastTransaction->status == "cancelled" ) --}}
                                                                            <span class="table__status-icon color-red"></span>
                                                                            Canceled
                                                                        {{-- @endif --}}
                                                                        {{-- @if ($lastTransaction->status == "pending" ) --}}
                                                                            <span class="table__status-icon color-blue"></span>
                                                                            Pending
                                                                        {{-- @endif --}}
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="table__row">
                                                                {{-- <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{$lastTransaction->number}} 
    
                                                                        Sindhi Koraywala
                                                                    </span>
                                                                </td> --}}
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Koraywala
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Kora denay wala
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Kora
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{-- {{ \Carbon\Carbon::parse($lastTransaction->created_at)->format('d-m-Y h:i:s A') }}  --}}
                                                                        RS.2500
                                                                    </span>
                                                                </td>
                                                                <td class="table__td">
                                                                    <span>
                                                                        Kora denay wala just confirmed at  Koraywala's bid to pickup kora
                                                                    </span>
                                                                </td>
                                                                {{-- <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{ $lastTransaction->company->name }}
                                                                        pending
                                                                    </span>
                                                                </td> --}}
                                                                <td class="table__td">
                                                                    <div class="table__status">
                                                                        {{-- @if ($lastTransaction->status == "paid" ) --}}
                                                                            <span class="table__status-icon color-green"></span>
                                                                            Paid
                                                                        {{-- @endif --}}
                                                                        {{-- @if ($lastTransaction->status == "cancelled" ) --}}
                                                                            <span class="table__status-icon color-red"></span>
                                                                            Canceled
                                                                        {{-- @endif --}}
                                                                        {{-- @if ($lastTransaction->status == "pending" ) --}}
                                                                            <span class="table__status-icon color-blue"></span>
                                                                            Pending
                                                                        {{-- @endif --}}
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="table__row">
                                                                {{-- <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{$lastTransaction->number}} 
    
                                                                        Sindhi Koraywala
                                                                    </span>
                                                                </td> --}}
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Koraywala
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Kora denay wala
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Kora
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{-- {{ \Carbon\Carbon::parse($lastTransaction->created_at)->format('d-m-Y h:i:s A') }}  --}}
                                                                        RS.2500
                                                                    </span>
                                                                </td>
                                                                <td class="table__td">
                                                                    <span>
                                                                        Koraywala wants to pickup Kora denay wala's kora
                                                                    </span>
                                                                </td>
                                                                {{-- <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{ $lastTransaction->company->name }}
                                                                        pending
                                                                    </span>
                                                                </td> --}}
                                                                <td class="table__td">
                                                                    <div class="table__status">
                                                                        {{-- @if ($lastTransaction->status == "paid" ) --}}
                                                                            <span class="table__status-icon color-green"></span>
                                                                            Paid
                                                                        {{-- @endif --}}
                                                                        {{-- @if ($lastTransaction->status == "cancelled" ) --}}
                                                                            <span class="table__status-icon color-red"></span>
                                                                            Canceled
                                                                        {{-- @endif --}}
                                                                        {{-- @if ($lastTransaction->status == "pending" ) --}}
                                                                            <span class="table__status-icon color-blue"></span>
                                                                            Pending
                                                                        {{-- @endif --}}
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="table__row">
                                                                {{-- <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{$lastTransaction->number}} 
    
                                                                        Sindhi Koraywala
                                                                    </span>
                                                                </td> --}}
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Koraywala
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Kora denay wala
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Kora
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{-- {{ \Carbon\Carbon::parse($lastTransaction->created_at)->format('d-m-Y h:i:s A') }}  --}}
                                                                        RS.2500
                                                                    </span>
                                                                </td>
                                                                <td class="table__td">
                                                                    <span>
                                                                        Kora denay wala just confirmed at  Koraywala's bid to pickup kora
                                                                    </span>
                                                                </td>
                                                                {{-- <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{ $lastTransaction->company->name }}
                                                                        pending
                                                                    </span>
                                                                </td> --}}
                                                                <td class="table__td">
                                                                    <div class="table__status">
                                                                        {{-- @if ($lastTransaction->status == "paid" ) --}}
                                                                            <span class="table__status-icon color-green"></span>
                                                                            Paid
                                                                        {{-- @endif --}}
                                                                        {{-- @if ($lastTransaction->status == "cancelled" ) --}}
                                                                            <span class="table__status-icon color-red"></span>
                                                                            Canceled
                                                                        {{-- @endif --}}
                                                                        {{-- @if ($lastTransaction->status == "pending" ) --}}
                                                                            <span class="table__status-icon color-blue"></span>
                                                                            Pending
                                                                        {{-- @endif --}}
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="table__row">
                                                                {{-- <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{$lastTransaction->number}} 
    
                                                                        Sindhi Koraywala
                                                                    </span>
                                                                </td> --}}
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Koraywala
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Kora denay wala
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Kora
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{-- {{ \Carbon\Carbon::parse($lastTransaction->created_at)->format('d-m-Y h:i:s A') }}  --}}
                                                                        RS.2500
                                                                    </span>
                                                                </td>
                                                                <td class="table__td">
                                                                    <span>
                                                                        Koraywala wants to pickup Kora denay wala's kora
                                                                    </span>
                                                                </td>
                                                                {{-- <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{ $lastTransaction->company->name }}
                                                                        pending
                                                                    </span>
                                                                </td> --}}
                                                                <td class="table__td">
                                                                    <div class="table__status">
                                                                        {{-- @if ($lastTransaction->status == "paid" ) --}}
                                                                            <span class="table__status-icon color-green"></span>
                                                                            Paid
                                                                        {{-- @endif --}}
                                                                        {{-- @if ($lastTransaction->status == "cancelled" ) --}}
                                                                            <span class="table__status-icon color-red"></span>
                                                                            Canceled
                                                                        {{-- @endif --}}
                                                                        {{-- @if ($lastTransaction->status == "pending" ) --}}
                                                                            <span class="table__status-icon color-blue"></span>
                                                                            Pending
                                                                        {{-- @endif --}}
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="table__row">
                                                                {{-- <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{$lastTransaction->number}} 
    
                                                                        Sindhi Koraywala
                                                                    </span>
                                                                </td> --}}
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Koraywala
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Kora denay wala
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Kora
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{-- {{ \Carbon\Carbon::parse($lastTransaction->created_at)->format('d-m-Y h:i:s A') }}  --}}
                                                                        RS.2500
                                                                    </span>
                                                                </td>
                                                                <td class="table__td">
                                                                    <span>
                                                                        Kora denay wala just confirmed at  Koraywala's bid to pickup kora
                                                                    </span>
                                                                </td>
                                                                {{-- <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{ $lastTransaction->company->name }}
                                                                        pending
                                                                    </span>
                                                                </td> --}}
                                                                <td class="table__td">
                                                                    <div class="table__status">
                                                                        {{-- @if ($lastTransaction->status == "paid" ) --}}
                                                                            <span class="table__status-icon color-green"></span>
                                                                            Paid
                                                                        {{-- @endif --}}
                                                                        {{-- @if ($lastTransaction->status == "cancelled" ) --}}
                                                                            <span class="table__status-icon color-red"></span>
                                                                            Canceled
                                                                        {{-- @endif --}}
                                                                        {{-- @if ($lastTransaction->status == "pending" ) --}}
                                                                            <span class="table__status-icon color-blue"></span>
                                                                            Pending
                                                                        {{-- @endif --}}
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="table__row">
                                                                {{-- <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{$lastTransaction->number}} 
    
                                                                        Sindhi Koraywala
                                                                    </span>
                                                                </td> --}}
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Koraywala
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Kora denay wala
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Kora
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{-- {{ \Carbon\Carbon::parse($lastTransaction->created_at)->format('d-m-Y h:i:s A') }}  --}}
                                                                        RS.2500
                                                                    </span>
                                                                </td>
                                                                <td class="table__td">
                                                                    <span>
                                                                        Koraywala wants to pickup Kora denay wala's kora
                                                                    </span>
                                                                </td>
                                                                {{-- <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{ $lastTransaction->company->name }}
                                                                        pending
                                                                    </span>
                                                                </td> --}}
                                                                <td class="table__td">
                                                                    <div class="table__status">
                                                                        {{-- @if ($lastTransaction->status == "paid" ) --}}
                                                                            <span class="table__status-icon color-green"></span>
                                                                            Paid
                                                                        {{-- @endif --}}
                                                                        {{-- @if ($lastTransaction->status == "cancelled" ) --}}
                                                                            <span class="table__status-icon color-red"></span>
                                                                            Canceled
                                                                        {{-- @endif --}}
                                                                        {{-- @if ($lastTransaction->status == "pending" ) --}}
                                                                            <span class="table__status-icon color-blue"></span>
                                                                            Pending
                                                                        {{-- @endif --}}
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="table__row">
                                                                {{-- <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{$lastTransaction->number}} 
    
                                                                        Sindhi Koraywala
                                                                    </span>
                                                                </td> --}}
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Koraywala
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Kora denay wala
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Kora
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{-- {{ \Carbon\Carbon::parse($lastTransaction->created_at)->format('d-m-Y h:i:s A') }}  --}}
                                                                        RS.2500
                                                                    </span>
                                                                </td>
                                                                <td class="table__td">
                                                                    <span>
                                                                        Kora denay wala just confirmed at  Koraywala's bid to pickup kora
                                                                    </span>
                                                                </td>
                                                                {{-- <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{ $lastTransaction->company->name }}
                                                                        pending
                                                                    </span>
                                                                </td> --}}
                                                                <td class="table__td">
                                                                    <div class="table__status">
                                                                        {{-- @if ($lastTransaction->status == "paid" ) --}}
                                                                            <span class="table__status-icon color-green"></span>
                                                                            Paid
                                                                        {{-- @endif --}}
                                                                        {{-- @if ($lastTransaction->status == "cancelled" ) --}}
                                                                            <span class="table__status-icon color-red"></span>
                                                                            Canceled
                                                                        {{-- @endif --}}
                                                                        {{-- @if ($lastTransaction->status == "pending" ) --}}
                                                                            <span class="table__status-icon color-blue"></span>
                                                                            Pending
                                                                        {{-- @endif --}}
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="table__row">
                                                                {{-- <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{$lastTransaction->number}} 
    
                                                                        Sindhi Koraywala
                                                                    </span>
                                                                </td> --}}
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Koraywala
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Kora denay wala
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Kora
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{-- {{ \Carbon\Carbon::parse($lastTransaction->created_at)->format('d-m-Y h:i:s A') }}  --}}
                                                                        RS.2500
                                                                    </span>
                                                                </td>
                                                                <td class="table__td">
                                                                    <span>
                                                                        Koraywala wants to pickup Kora denay wala's kora
                                                                    </span>
                                                                </td>
                                                                {{-- <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{ $lastTransaction->company->name }}
                                                                        pending
                                                                    </span>
                                                                </td> --}}
                                                                <td class="table__td">
                                                                    <div class="table__status">
                                                                        {{-- @if ($lastTransaction->status == "paid" ) --}}
                                                                            <span class="table__status-icon color-green"></span>
                                                                            Paid
                                                                        {{-- @endif --}}
                                                                        {{-- @if ($lastTransaction->status == "cancelled" ) --}}
                                                                            <span class="table__status-icon color-red"></span>
                                                                            Canceled
                                                                        {{-- @endif --}}
                                                                        {{-- @if ($lastTransaction->status == "pending" ) --}}
                                                                            <span class="table__status-icon color-blue"></span>
                                                                            Pending
                                                                        {{-- @endif --}}
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="table__row">
                                                                {{-- <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{$lastTransaction->number}} 
    
                                                                        Sindhi Koraywala
                                                                    </span>
                                                                </td> --}}
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Koraywala
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Kora denay wala
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <div class="media-item">
                                                                        <div class="media-item__icon color-orange">
                                                                            <div class="media-item__icon-text">
                                                                                boi
                                                                            </div>
                                                                            <img class="media-item__thumb"
                                                                                src="
                                                                                {{-- {{ asset($lastTransaction->freelancer->img) }} --}}
                                                                                {{ asset("img/profile-pictures/default.svg") }}
                                                                                "
                                                                                alt="#" />
                                                                                {{-- {{ $lastTransaction->freelancer->img  }} --}}
                                                                        </div>
                                                                        <div class="media-item__right">
                                                                            <h5 class="media-item__title">
                                                                                {{-- {{$lastTransaction->freelancer->name}} --}}
                                                                                Kora
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{-- {{ \Carbon\Carbon::parse($lastTransaction->created_at)->format('d-m-Y h:i:s A') }}  --}}
                                                                        RS.2500
                                                                    </span>
                                                                </td>
                                                                <td class="table__td">
                                                                    <span>
                                                                        Kora denay wala just confirmed at  Koraywala's bid to pickup kora
                                                                    </span>
                                                                </td>
                                                                {{-- <td class="table__td">
                                                                    <span class="text-grey">
                                                                        {{ $lastTransaction->company->name }}
                                                                        pending
                                                                    </span>
                                                                </td> --}}
                                                                <td class="table__td">
                                                                    <div class="table__status">
                                                                        {{-- @if ($lastTransaction->status == "paid" ) --}}
                                                                            <span class="table__status-icon color-green"></span>
                                                                            Paid
                                                                        {{-- @endif --}}
                                                                        {{-- @if ($lastTransaction->status == "cancelled" ) --}}
                                                                            <span class="table__status-icon color-red"></span>
                                                                            Canceled
                                                                        {{-- @endif --}}
                                                                        {{-- @if ($lastTransaction->status == "pending" ) --}}
                                                                            <span class="table__status-icon color-blue"></span>
                                                                            Pending
                                                                        {{-- @endif --}}
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        {{-- @endforeach --}}
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

@endsection
