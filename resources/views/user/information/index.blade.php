@extends('layouts.app')

@section('content')
    <div data-v-137e7c86="" class="flex-grow">
        <div data-v-32523081="" data-v-81795212="" data-v-137e7c86="" class="container">
            <div data-v-1d375fcb="" data-v-81795212="" class="section address-section" data-v-32523081=""><span
                    data-v-81795212="" data-v-1d375fcb="" class="text-title-2">Hồ sơ khách hàng</span>
                <div data-v-81795212="" data-v-1d375fcb="" class="mt-4">
                    <div data-v-a998cdca="" data-v-81795212="" class="input-field mt-4" data-v-1d375fcb=""><label
                            data-v-a998cdca="" for="fullName" class="label">Họ và tên
                            <!---->
                        </label>
                        <div data-v-a998cdca="" class="field">
                            <!----> <input data-v-a998cdca="" name="fullName" inputmode="text" pattern="text" type="text"
                                placeholder="Trần Thanh Danh" class="input">
                        </div>
                        <!---->
                    </div>
                    <div data-v-81795212="" data-v-1d375fcb="" class="mt-4">Giới tính</div>
                    <div data-v-47a45188="" data-v-81795212="" class="radio-group" data-v-1d375fcb="">
                        <!----> <label data-v-47a45188="" class="radio"><span data-v-47a45188=""
                                class="radio__input"><input data-v-47a45188="" type="radio" name="gender" value="male">
                                <span data-v-47a45188="" class="controller"></span></span> <span data-v-47a45188=""
                                class="radio__label">Nam</span></label><label data-v-47a45188=""
                            class="radio"><span data-v-47a45188="" class="radio__input"><input data-v-47a45188=""
                                    type="radio" name="gender" value="female"> <span data-v-47a45188=""
                                    class="controller"></span></span> <span data-v-47a45188=""
                                class="radio__label">Nữ</span></label>
                    </div>
                    <div data-v-a998cdca="" data-v-81795212="" class="input-field mt-4" data-v-1d375fcb=""><label
                            data-v-a998cdca="" for="birthday" class="label">Ngày sinh nhật
                            <!---->
                        </label>
                        <div data-v-a998cdca="" class="field">
                            <!----> <input data-v-a998cdca="" name="birthday" inputmode="text" pattern="text" type="date"
                                placeholder="Trần Thanh
        Danh" class="input">
                        </div>
                        <!---->
                    </div>
                    <div data-v-a998cdca="" data-v-5467b54c="" data-v-81795212="" class="input-field input-number mt-4"
                        country="vi" data-v-1d375fcb=""><label data-v-a998cdca="" class="label">Số điện thoại
                            <!---->
                        </label>
                        <div data-v-a998cdca="" class="field">
                            <!---->
                            <div data-v-5467b54c="" data-v-a998cdca="" class="icon"><img data-v-5467b54c=""
                                    data-v-a998cdca="" src="/assets/images/vietnam.8bdd3c.png" alt="vi-flag"></div> <input
                                data-v-a998cdca="" inputmode="numeric" pattern="[0-9]*" type="number"
                                placeholder="0961633xxx" class="input has-icon">
                        </div>
                        <!---->
                    </div>
                    <div data-v-a998cdca="" data-v-81795212="" class="input-field mt-4" data-v-1d375fcb=""><label
                            data-v-a998cdca="" for="email" class="label">Email
                            <!---->
                        </label>
                        <div data-v-a998cdca="" class="field">
                            <!----> <input data-v-a998cdca="" name="email" inputmode="text" pattern="text" type="email"
                                placeholder="hop.thu.cua.toi@gmail.com" class="input">
                        </div>
                        <!---->
                    </div>
                </div>
            </div>
            <div data-v-1d375fcb="" data-v-81795212="" class="section action-section text-center py-8" data-v-32523081="">
                <div data-v-7b0e022a="" data-v-81795212="" class="button ripple" data-v-1d375fcb=""><span
                        data-v-7b0e022a="" class="label">Quay về</span></div>
                <div data-v-7b0e022a="" data-v-81795212="" class="ml-1 button ripple is-primary" data-v-1d375fcb=""><span
                        data-v-7b0e022a="" class="label">Cập nhật</span></div>
            </div>
        </div>
    </div>
@endsection
