<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
@php
    $year = App\Event::Where('status' , 'ACTIVE')->first();
@endphp
<body class="antialiased">
    <div class="formbold-main-wrapper">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="formbold-form-wrapper">
            <h3>A. TH??NG TIN C?? NH??N</h3>
            <form action="alumni" method="POST">
                @csrf
                 <div class="formbold-input-group">
                    <label class="formbold-form-label">
                    ?????t kh???o s??t n??m
                    </label>

                    <select class="formbold-form-select" name="event_id" id="occupation">
                    <option value="{{$year->year}}">{{$year->year}}</option>
                    
                    </select>
                </div>
                <div class="formbold-input-flex">
                    <div>
                        <label for="firstname" class="formbold-form-label">
                            H??? v?? T??n
                        </label>
                        <input type="text" name="name" placeholder="Nguyen Van A" class="formbold-form-input" />
                    </div>
                    <div>
                        <label for="dob" class="formbold-form-label"> Ng??y sinh </label>
                        <input 
                        type="date" 
                        name="date" 
                        id="dob" 
                        class="formbold-form-input"
                        />
                    </div>
                </div>

                <div class="formbold-mb-5">
                    <label for="qusOne" class="formbold-form-label">
                        Gi???i t??nh
                    </label>
                    <div class="formbold-radio-flex">
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="gender" value="nam"
                                    id="qusOne" />
                                Nam
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="gender" value="n???"
                                    id="qusOne" />
                               N???
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="firstname" class="formbold-form-label">
                            ?????a ch??? li??n h???
                        </label>
                        <input type="text" name="address" placeholder="" class="formbold-form-input" />
                    </div>
                    <div>
                        <label for="lastname" class="formbold-form-label">C??n c?????c c??ng d??n</label>
                        <input type="text" name="CCCD" placeholder="" class="formbold-form-input" />
                    </div>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="firstname" class="formbold-form-label">
                           ??i???n tho???i
                        </label>
                        <input type="text" name="phone" placeholder=""
                            class="formbold-form-input" />
                    </div>
                    <div>
                        <label for="lastname" class="formbold-form-label">Zalo</label>
                        <input type="text" name="zalo" placeholder="" class="formbold-form-input" />
                    </div>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="firstname" class="formbold-form-label">
                           Email
                        </label>
                        <input type="text" name="email" placeholder=""
                            class="formbold-form-input" />
                    </div>
                    <div>
                        <label for="lastname" class="formbold-form-label">Facebook</label>
                        <input type="text" name="facebook" placeholder="" class="formbold-form-input" />
                    </div>
                </div>

                <div class="formbold-mb-5">
                    <label for="qusOne" class="formbold-form-label">
                        T??nh tr???ng vi???c l??m
                    </label>
                    <div class="formbold-radio-flex">
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_01" value="4"
                                    id="qusOne" />
                                    C?? vi???c l??m
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_01" value="3"
                                    id="qusOne" />
                                    Ch??a c?? vi???c l??m nh??ng ??ang ??i h???c n??ng cao
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_01" value="2"
                                    id="qusOne" />
                                    Ch??a c?? vi???c l??m
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                       
                    </div>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="firstname" class="formbold-form-label">
                           ????n v??? c??ng t??c
                        </label>
                        <input type="text" name="question_08" placeholder=""
                            class="formbold-form-input" />
                    </div>
                    
                </div>

                <div class="formbold-mb-5">
                    <label for="qusOne" class="formbold-form-label">
                        L??nh v???c c??ng t??c c?? ????ng chuy??n ng??nh kh??ng
                    </label>
                    <div class="formbold-radio-flex">
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_03" value="4"
                                    id="qusOne" />
                                    C??
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_03" value="3"
                                    id="qusOne" />
                                   Kh??ng
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="formbold-mb-5">
                    <label for="qusOne" class="formbold-form-label">
                        Thu nh???p b??nh qu??n h??ng th??ng
                    </label>
                    <div class="formbold-radio-flex">
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_10" value="4"
                                    id="qusOne" />
                                    < 5 tri???uVN??
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_04" value="3"
                                    id="qusOne" />
                                    5 -10 tri???uVN??
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_04" value="2"
                                    id="qusOne" />
                                    > 10 tri???uVN??
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="formbold-mb-5">
                    <label for="qusOne" class="formbold-form-label">
                        Khu v???c l??m vi???c
                    </label>
                    <div class="formbold-radio-flex">
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_05" value="4"
                                    id="qusOne" />
                                    Khu v???c nh?? n?????c
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_05" value="3"
                                    id="qusOne" />
                                    Khu v???c t?? nh??n
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_05" value="2"
                                    id="qusOne" />
                                    Li??n doanh n?????c ngo??i
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_05" value="1"
                                    id="qusOne" />
                                    T??? t???o vi???c l??m
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="formbold-mb-5">
                    <label for="qusOne" class="formbold-form-label">
                        Th???i gian t??m ???????cvi???cl??m sau khi t???t nghi???p?
                    </label>
                    <div class="formbold-radio-flex">
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_06" value="4"
                                    id="qusOne" />
                                    < 6 th??ng
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_06" value="3"
                                    id="qusOne" />
                                    7???12 th??ng
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_06" value="2"
                                    id="qusOne" />
                                    >12 th??ng
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                   
                    </div>
                </div>

                <h3>B.????NH GI??V??? CH????NG TR??NH ????O T???O C???A NH?? TR?????NG</h3>
                <h4>Xin b???n vui l??ng cho ?? ki???n nh???n x??t c???a m??nh v??? kh??a h???c t???i Tr?????ng ?????i h???c C??ng ngh??? th??ng tin v?? Truy???n th??ng b???ng c??ch ????nh d???u (x)v??o ?? t????ng ???ng  cho t???ng m???c (TT) v???i m???c ????? do m??nh ch???n cho t???t c??? c??c l??nh v???c d?????i ????y:
                    M???c ?????: 1= K??m, 2= Trung b??nh, 3= Kh??, 4= T???t.
                    </h4>

                <div class="formbold-mb-5">
                    <label for="qusOne" class="formbold-form-label">
                        S??? ????p ???ng c???a ki???n th???c chuy??n m??n ???????c ????o t???o trong tr?????ng cho c??ng vi???c hi???n nay c???a Anh/Ch???
                    </label>
                    <div class="formbold-radio-flex">
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_07" value="4"
                                    id="qusOne" />
                                T???t
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_07" value="3"
                                    id="qusOne" />
                                Kh??
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_07" value="2"
                                    id="qusOne" />
                                Trung B??nh
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_07" value="1"
                                    id="qusOne" />
                                K??m
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="formbold-mb-5">
                    <label for="qusTwo" class="formbold-form-label">
                        S??? ????p ???ng c???a c??c k??? n??ng ???????c ????o t???o trong tr?????ng cho c??ng vi???c hi???n nay c???a Anh/Ch???

                    <div class="formbold-radio-flex">
                      <div class="formbold-radio-group">
                          <label class="formbold-radio-label">
                              <input class="formbold-input-radio" type="radio" name="question_08" value="4"
                                  id="qusOne" />
                              T???t
                              <span class="formbold-radio-checkmark"></span>
                          </label>
                      </div>
                      <div class="formbold-radio-group">
                          <label class="formbold-radio-label">
                              <input class="formbold-input-radio" type="radio" name="question_08" value="3"
                                  id="qusOne" />
                              Kh??
                              <span class="formbold-radio-checkmark"></span>
                          </label>
                      </div>
                      <div class="formbold-radio-group">
                          <label class="formbold-radio-label">
                              <input class="formbold-input-radio" type="radio" name="question_08" value="2"
                                  id="qusOne" />
                              Trung B??nh
                              <span class="formbold-radio-checkmark"></span>
                          </label>
                      </div>
                      <div class="formbold-radio-group">
                          <label class="formbold-radio-label">
                              <input class="formbold-input-radio" type="radio" name="question_08" value="1"
                                  id="qusOne" />
                              K??m
                              <span class="formbold-radio-checkmark"></span>
                          </label>
                      </div>
                    </div>
                </div>

                <div class="formbold-mb-5">
                    <label for="qusThree" class="formbold-form-label">
                        M???c ????? t????ng th??ch c???a chu???n ?????u ra v???i y??u c???u c???a th??? tr?????ng lao ?????ng
                    </label>

                    <div class="formbold-radio-flex">
                      <div class="formbold-radio-group">
                          <label class="formbold-radio-label">
                              <input class="formbold-input-radio" type="radio" name="question_09" value="4"
                                  id="qusOne" />
                              T???t
                              <span class="formbold-radio-checkmark"></span>
                          </label>
                      </div>
                      <div class="formbold-radio-group">
                          <label class="formbold-radio-label">
                              <input class="formbold-input-radio" type="radio" name="question_09" value="3"
                                  id="qusOne" />
                              Kh??
                              <span class="formbold-radio-checkmark"></span>
                          </label>
                      </div>
                      <div class="formbold-radio-group">
                          <label class="formbold-radio-label">
                              <input class="formbold-input-radio" type="radio" name="question_09" value="2"
                                  id="qusOne" />
                              Trung B??nh
                              <span class="formbold-radio-checkmark"></span>
                          </label>
                      </div>
                      <div class="formbold-radio-group">
                          <label class="formbold-radio-label">
                              <input class="formbold-input-radio" type="radio" name="question_09" value="1"
                                  id="qusOne" />
                              K??m
                              <span class="formbold-radio-checkmark"></span>
                          </label>
                      </div>
                    </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    Th???i l?????ng c??c h???c ph???n th???c h??nh ????? h??nh th??nh c??c k??? n??ng ngh??? nghi???p chuy??n m??n.
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_10" value="4"
                                id="qusOne" />
                            T???t
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_10" value="3"
                                id="qusOne" />
                            Kh??
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_10" value="2"
                                id="qusOne" />
                            Trung B??nh
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_10" value="1"
                                id="qusOne" />
                            K??m
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    M???c ????? h??i l??ng v??? trang thi???t b??? ph???c v??? th???c h??nh, th?? nghi???m trong qu?? tr??nh h???c t???p t???i tr?????ng.
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_11" value="4"
                                id="qusOne" />
                            T???t
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_11" value="3"
                                id="qusOne" />
                            Kh??
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_11" value="2"
                                id="qusOne" />
                            Trung B??nh
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_11" value="1"
                                id="qusOne" />
                            K??m
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    M???c ????? h??i l??ng v??? ph????ng ph??p gi???ng d???y c???a c??c gi???ng vi??n 
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_12" value="4"
                                id="qusOne" />
                            T???t
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_12" value="3"
                                id="qusOne" />
                            Kh??
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_12" value="2"
                                id="qusOne" />
                            Trung B??nh
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_12" value="1"
                                id="qusOne" />
                            K??m
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    M???c ????? ????p ???ng c???a n???i dung ch????ng tr??nh ????o t???o v???i y??u c???u c???a th??? tr?????ng lao ?????ng
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_13" value="4"
                                id="qusOne" />
                            T???t
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_13" value="3"
                                id="qusOne" />
                            Kh??
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_13" value="2"
                                id="qusOne" />
                            Trung B??nh
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_13" value="1"
                                id="qusOne" />
                            K??m
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    ????nh gi?? s??? h??i l??ng c???a ho???t ?????ng k???t n???i v?? ph???c v??? c???ng ?????ng c???a nh?? tr?????ng
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_14" value="4"
                                id="qusOne" />
                            T???t
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_14" value="3"
                                id="qusOne" />
                            Kh??
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_14" value="2"
                                id="qusOne" />
                            Trung B??nh
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_14" value="1"
                                id="qusOne" />
                            K??m
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <h3>C.?? KI???N KH??C</h3>

                <div class="formbold-mb-3">
                    <label for="address" class="formbold-form-label">
                        1. Theo Anh/Ch??? nh???ng h???c ph???n n??o trong ch????ng tr??nh ????o t???o m?? Anh/Ch??? ???? h???c ????ng vai tr?? quan tr???ng trong vi???c h??nh th??nh ki???n th???c, k??? n??ng ngh??? nghi???p.
                    </label>
                    <input
                      type="text"
                      name="question_15"
                      id="address"
                      class="formbold-form-input"
                    />
                  </div>
                
                  <div class="formbold-mb-3">
                    <label for="address" class="formbold-form-label">
                        2. Theo Anh/Ch??? c??c m??n h???c n??o c???n ???????c b??? sung th??m v??o ch????ng tr??nh ????o t???o.
                    </label>
                    <input
                      type="text"
                      name="question_16"
                      id="address"
                      class="formbold-form-input"
                    />
                  </div>

                  <div class="formbold-mb-3">
                    <label for="address" class="formbold-form-label">
                        3. K??? n??ng n??o c???n ph???i b??? sung v??o chu???n ?????u ra ????? ????p ???ng y??u c???u c??ng vi???c.
                    </label>
                    <input
                      type="text"
                      name="question_17"
                      id="address"
                      class="formbold-form-input"
                    />
                  </div>

                  <div class="formbold-mb-3">
                    <label for="address" class="formbold-form-label">
                        4. Theo Anh/Ch??? Nh?? tr?????ng c???n t??ng c?????ng c??c ho???t ?????ng n??o ????? gi??p sinh vi??n t???t nghi???p ra tr?????ng t??m ki???m ???????c vi???c l??m.
                    </label>
                    <input
                      type="text"
                      name="question_18"
                      id="address"
                      class="formbold-form-input"
                    />
                  </div>

                  <div class="formbold-mb-3">
                    <label for="address" class="formbold-form-label">
                        5. Nh???ng h???c ph???n n??o trong ch????ng tr??nh ????o t???o c???n thi???t ph???i t??ng th??m th???i l?????ng.
                    </label>
                    <input
                      type="text"
                      name="question_19"
                      id="address"
                      class="formbold-form-input"
                    />
                  </div>
                  
                <button type="submit" class="formbold-btn">G???i ph???n h???i</button>
            </form>
        </div>
    </div>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

         .formbold-form-select {
            width: 100%;
            padding: 12px 22px;
            border-radius: 5px;
            border: 1px solid #dde3ec;
            background: #ffffff;
            font-size: 16px;
            color: #536387;
            outline: none;
            resize: none;
        }

        .formbold-main-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 48px;
        }

        .formbold-form-wrapper {
            margin: 0 auto;
            max-width: 800px;
            width: 100%;
            background: #e0dfef;
            padding: 40px;
        }

        .formbold-img {
            margin-bottom: 40px;
        }

        .formbold-input-flex {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }

        .formbold-input-flex>div {
            width: 50%;
        }

        .formbold-form-input {
            width: 100%;
            padding: 13px 22px;
            border-radius: 5px;
            border: 1px solid #dde3ec;
            background: #ffffff;
            font-weight: 500;
            font-size: 16px;
            color: #536387;
            outline: none;
            resize: none;
        }

        .formbold-form-input:focus {
            border-color: #6a64f1;
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }

        .formbold-form-label {
            color: #536387;
            font-weight: 500;
            font-size: 14px;
            line-height: 24px;
            display: block;
            margin-bottom: 10px;
        }

        .formbold-mb-5 {
            margin-bottom: 20px;
        }

        .formbold-radio-flex {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .formbold-radio-label {
            font-size: 14px;
            line-height: 24px;
            color: #07074d;
            position: relative;
            padding-left: 25px;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .formbold-input-radio {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .formbold-radio-checkmark {
            position: absolute;
            top: -1px;
            left: 0;
            height: 18px;
            width: 18px;
            background-color: #ffffff;
            border: 1px solid #dde3ec;
            border-radius: 50%;
        }

        .formbold-radio-label .formbold-input-radio:checked~.formbold-radio-checkmark {
            background-color: #6a64f1;
        }

        .formbold-radio-checkmark:after {
            content: '';
            position: absolute;
            display: none;
        }

        .formbold-radio-label .formbold-input-radio:checked~.formbold-radio-checkmark:after {
            display: block;
        }

        .formbold-radio-label .formbold-radio-checkmark:after {
            top: 50%;
            left: 50%;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #ffffff;
            transform: translate(-50%, -50%);
        }

        .formbold-btn {
            text-align: center;
            width: 30%;
            font-size: 16px;
            border-radius: 5px;
            padding: 14px 25px;
            border: none;
            font-weight: 500;
            background-color: #6a64f1;
            color: white;
            cursor: pointer;
            margin-top: 25px;
        }

        .formbold-btn:hover {
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }
    </style>
</body>

</html>
