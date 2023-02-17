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
            <h3>A. THÔNG TIN CHUNG VỀ CƠ QUAN / DOANH NGHIỆP</h3>
            <form action="enterprise" method="POST">
                @csrf
                 <div class="formbold-input-group">
                    <label class="formbold-form-label">
                    Đợt khảo sát năm
                    </label>

                    <select class="formbold-form-select" name="event_id" id="occupation">
                    <option value="{{$year->year}}">{{$year->year}}</option>
                    
                    </select>
                </div>
                <div class="formbold-input-flex">
                    <div>
                        <label for="firstname" class="formbold-form-label">
                            Tên Đơn vị trả lời Phiếu khảo sát:
                        </label>
                        <input type="text" name="name" placeholder="" class="formbold-form-input" />
                    </div>
                    <div>
                        <label for="dob" class="formbold-form-label"> Địa chỉ: </label>
                        <input type="text" name="address" placeholder="" class="formbold-form-input" />
                    </div>
                </div>
                <div class="formbold-input-flex">
                    <div>
                        <label for="firstname" class="formbold-form-label">
                            E-mail:
                        </label>
                        <input type="text" name="email" placeholder="" class="formbold-form-input" />
                    </div>
                    <div>
                        <label for="lastname" class="formbold-form-label">Telephone/Mobile: </label>
                        <input type="text" name="phone" placeholder="" class="formbold-form-input" />
                    </div>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="firstname" class="formbold-form-label">
                            Lĩnh vực hoạt động: 
                        </label>
                        <input type="text" name="field" placeholder=""
                            class="formbold-form-input" />
                    </div>
                    
                </div>

               
                <div class="formbold-mb-5">
                    <label for="qusOne" class="formbold-form-label">
                        Thành phần đơn vị tổ chức:
                    </label>
                    <div class="formbold-radio-flex">
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="ingredient" value="4"
                                    id="qusOne" />
                                    Nhà nước
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="ingredient" value="3"
                                    id="qusOne" />
                                    Tư nhân
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="ingredient" value="2"
                                    id="qusOne" />
                                    Liên doanh nước ngoài
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>

                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="ingredient" value="1"
                                    id="qusOne" />
                                    Khác
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                       
                    </div>
                </div>
                <h3>B. NỘI DUNG KHẢO SÁT</h3>
                <h4>1. Số lượng cán bộ công nhân viên hiện đang làm việc tại Quý cơ quan/ Doanh nghiệp
                    có người tốt nghiệp đại học tại Đại học Công nghệ thông tin và Truyền thông là:     </h4>
                <div class="formbold-input-flex">
                    <div>
                       
                       
                        <input type="text" name="question_01" placeholder=""
                            class="formbold-form-input" />
                    </div>
                    
                </div>

                <div class="formbold-mb-5">
                    <label for="qusOne" class="formbold-form-label">
                        Và thuộc các nhóm ngành sau:
                    </label>
                    <div class="formbold-radio-flex">
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_02" value="4"
                                    id="qusOne" />
                                    Công nghệ thông tin
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_02" value="3"
                                    id="qusOne" />
                                    Công nghệ kỹ thuật điện tử – viễn thông
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_02" value="2"
                                    id="qusOne" />
                                    Hệ thống thông tin quản lý, Quản trị văn phòng, thương mại điện tử
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_02" value="1"
                                    id="qusOne" />
                                    Hệ thống thông tin quản lý
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_02" value="1"
                                    id="qusOne" />
                                    Truyền thông đa phương tiện
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <h4>2.  Nhu cầu tuyển dụng kỹ sư, cử nhân Trường Đại học Công nghệ thông tin và truyền thông của doanh nghiệp:     </h4>
                        
                <div class="formbold-input-flex">
                    <div>
                        
                        <input type="text" name="question_03" placeholder=""
                            class="formbold-form-input" />
                    </div>
                    
                </div>

                <div class="formbold-mb-5">
                    <label for="qusOne" class="formbold-form-label">
                        Nhóm lĩnh vực:
                    </label>
                    <div class="formbold-radio-flex">
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_04" value="4"
                                    id="qusOne" />
                                    Công nghệ thông tin
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_04" value="3"
                                    id="qusOne" />
                                    Công nghệ kỹ thuật điện tử – viễn thông
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_04" value="2"
                                    id="qusOne" />
                                    Hệ thống thông tin quản lý, Quản trị văn phòng, thương mại điện tử
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_04" value="1"
                                    id="qusOne" />
                                    Hệ thống thông tin quản lý
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_04" value="1"
                                    id="qusOne" />
                                    Truyền thông đa phương tiện
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <h4>3. Quý vị vui lòng đánh giá Người học của nhà trường đã và đang làm việc tại Tổ chức/ Doanh nghiệp theo các tiêu chí sau đây:</h4>

                <div class="formbold-mb-5">
                    <label for="qusOne" class="formbold-form-label">
                        Kiến thức chuyên ngành đào tạo
                    </label>
                    <div class="formbold-radio-flex">
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_05" value="4"
                                    id="qusOne" />
                                Tốt
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_05" value="3"
                                    id="qusOne" />
                                Khá
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_05" value="2"
                                    id="qusOne" />
                                Trung Bình
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_05" value="1"
                                    id="qusOne" />
                                Kém
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="formbold-mb-5">
                    <label for="qusTwo" class="formbold-form-label">
                        Kỹ năng chuyên môn nghề nghiệp
                    <div class="formbold-radio-flex">
                      <div class="formbold-radio-group">
                          <label class="formbold-radio-label">
                              <input class="formbold-input-radio" type="radio" name="question_06" value="4"
                                  id="qusOne" />
                              Tốt
                              <span class="formbold-radio-checkmark"></span>
                          </label>
                      </div>
                      <div class="formbold-radio-group">
                          <label class="formbold-radio-label">
                              <input class="formbold-input-radio" type="radio" name="question_06" value="3"
                                  id="qusOne" />
                              Khá
                              <span class="formbold-radio-checkmark"></span>
                          </label>
                      </div>
                      <div class="formbold-radio-group">
                          <label class="formbold-radio-label">
                              <input class="formbold-input-radio" type="radio" name="question_06" value="2"
                                  id="qusOne" />
                              Trung Bình
                              <span class="formbold-radio-checkmark"></span>
                          </label>
                      </div>
                      <div class="formbold-radio-group">
                          <label class="formbold-radio-label">
                              <input class="formbold-input-radio" type="radio" name="question_06" value="1"
                                  id="qusOne" />
                              Kém
                              <span class="formbold-radio-checkmark"></span>
                          </label>
                      </div>
                    </div>
                </div>

                <div class="formbold-mb-5">
                    <label for="qusThree" class="formbold-form-label">
                        Kỹ năng sử dụng ngoại ngữ trong công việc
                    </label>

                    <div class="formbold-radio-flex">
                      <div class="formbold-radio-group">
                          <label class="formbold-radio-label">
                              <input class="formbold-input-radio" type="radio" name="question_07" value="4"
                                  id="qusOne" />
                              Tốt
                              <span class="formbold-radio-checkmark"></span>
                          </label>
                      </div>
                      <div class="formbold-radio-group">
                          <label class="formbold-radio-label">
                              <input class="formbold-input-radio" type="radio" name="question_07" value="3"
                                  id="qusOne" />
                              Khá
                              <span class="formbold-radio-checkmark"></span>
                          </label>
                      </div>
                      <div class="formbold-radio-group">
                          <label class="formbold-radio-label">
                              <input class="formbold-input-radio" type="radio" name="question_07" value="2"
                                  id="qusOne" />
                              Trung Bình
                              <span class="formbold-radio-checkmark"></span>
                          </label>
                      </div>
                      <div class="formbold-radio-group">
                          <label class="formbold-radio-label">
                              <input class="formbold-input-radio" type="radio" name="question_07" value="1"
                                  id="qusOne" />
                              Kém
                              <span class="formbold-radio-checkmark"></span>
                          </label>
                      </div>
                    </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    Kỹ năng tin học và sử dụng máy vi tính
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_08" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_08" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_08" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_08" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    Ý thức chấp hành nội quy, quy định, kỷ luật lao động
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_09" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_09" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_09" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_09" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    Kỹ năng vận dụng kiến thức để giải quyết công việc với hiệu quả cao và tiến độ cao.
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_10" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_10" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_10" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_10" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    Phẩm chất cá nhân (chăm chỉ, kiên trì, tự tin, linh hoạt, nhiệt tình, trách nhiệm, tinh thần học hỏi...)
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_11" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_11" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_11" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_11" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    Kỹ năng làm việc, quản lý nhóm (lập kế hoạch, tổ chức công việc, làm việc nhóm, khả năng làm việc độc lập....)
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_12" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_12" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_12" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_12" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <h4>4. Theo Quý vị, sinh viên và Người học nhà trường cần được đào tạo thêm ở những tiêu chí nào dưới đây và nên do ai đào tạo?</h4>
                
                <div class="formbold-mb-5">
                    <label for="qusOne" class="formbold-form-label">
                        Kỹ năng chuyên môn nghề nghiệp
                    </label>
                    <div class="formbold-radio-flex">
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_13" value="4"
                                    id="qusOne" />
                                    Không cần đào tạo
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_13" value="3"
                                    id="qusOne" />
                                    Nhà trường
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_13" value="2"
                                    id="qusOne" />
                                    Doanh nghiệp/ Tổ chức
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="formbold-mb-5">
                    <label for="qusTwo" class="formbold-form-label">
                        Kỹ năng mềm
                        <div class="formbold-radio-flex">
                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="question_14" value="4"
                                        id="qusOne" />
                                        Không cần đào tạo
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>
                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="question_14" value="3"
                                        id="qusOne" />
                                        Nhà trường
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>
                            <div class="formbold-radio-group">
                                <label class="formbold-radio-label">
                                    <input class="formbold-input-radio" type="radio" name="question_14" value="2"
                                        id="qusOne" />
                                        Doanh nghiệp/ Tổ chức
                                    <span class="formbold-radio-checkmark"></span>
                                </label>
                            </div>
                        </div>
                </div>

                <div class="formbold-mb-5">
                    <label for="qusThree" class="formbold-form-label">
                        Khả năng ngoại ngữ
                    </label>

                    <div class="formbold-radio-flex">
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_15" value="4"
                                    id="qusOne" />
                                    Không cần đào tạo
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_15" value="3"
                                    id="qusOne" />
                                    Nhà trường
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_15" value="2"
                                    id="qusOne" />
                                    Doanh nghiệp/ Tổ chức
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    Kỹ năng tin học và sử dụng máy vi tính
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_16" value="4"
                                id="qusOne" />
                                Không cần đào tạo
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_16" value="3"
                                id="qusOne" />
                                Nhà trường
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_16" value="2"
                                id="qusOne" />
                                Doanh nghiệp/ Tổ chức
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    Ý thức, thái độ và nhận thức về bản thân và xã hội
                  </label>

                    <div class="formbold-radio-flex">
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_17" value="4"
                                    id="qusOne" />
                                    Không cần đào tạo
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_17" value="3"
                                    id="qusOne" />
                                    Nhà trường
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_17" value="2"
                                    id="qusOne" />
                                    Doanh nghiệp/ Tổ chức
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="formbold-mb-5">
                    <h4>5. Đối với Kỹ sư/ Cử nhân Trường Đại học Công nghệ thông tin và Truyền thông mới tốt nghiệp: </h4>
  
                      <div class="formbold-radio-flex">
                          <div class="formbold-radio-group">
                              <label class="formbold-radio-label">
                                  <input class="formbold-input-radio" type="radio" name="question_18" value="4"
                                      id="qusOne" />
                                      Sinh viên đáp ứng yêu cầu của công việc, có thể sử dụng được ngay
                                  <span class="formbold-radio-checkmark"></span>
                              </label>
                          </div>
                          <div class="formbold-radio-group">
                              <label class="formbold-radio-label">
                                  <input class="formbold-input-radio" type="radio" name="question_18" value="3"
                                      id="qusOne" />
                                      Sinh viên cơ bản đáp ứng yêu cầu của công việc, nhưng phải đào tạo thêm
                                  <span class="formbold-radio-checkmark"></span>
                              </label>
                          </div>
                          <div class="formbold-radio-group">
                              <label class="formbold-radio-label">
                                  <input class="formbold-input-radio" type="radio" name="question_18" value="2"
                                      id="qusOne" />
                                      Sinh viên phải được đào tạo lại hoặc đào tạo bổ sung ít nhất 6 tháng
                                  <span class="formbold-radio-checkmark"></span>
                              </label>
                          </div>
                      </div>
                </div>

                <div class="formbold-mb-5">
                    <h4>6. Chất lượng chung của Kỹ sư/ Cử nhân Trường Đại học Công nghệ thông tin và Truyền thông là:</h4>
  
                      <div class="formbold-radio-flex">
                          <div class="formbold-radio-group">
                              <label class="formbold-radio-label">
                                  <input class="formbold-input-radio" type="radio" name="question_19" value="5"
                                      id="qusOne" />
                                      Xuất sắc
                                  <span class="formbold-radio-checkmark"></span>
                              </label>
                          </div>
                          <div class="formbold-radio-group">
                              <label class="formbold-radio-label">
                                  <input class="formbold-input-radio" type="radio" name="question_19" value="4"
                                      id="qusOne" />
                                      Tốt
                                  <span class="formbold-radio-checkmark"></span>
                              </label>
                          </div>
                          <div class="formbold-radio-group">
                              <label class="formbold-radio-label">
                                  <input class="formbold-input-radio" type="radio" name="question_19" value="3"
                                      id="qusOne" />
                                      Khá
                                  <span class="formbold-radio-checkmark"></span>
                              </label>
                          </div>
                          <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_19" value="2"
                                    id="qusOne" />
                                    Trung Bình
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_19" value="1"
                                    id="qusOne" />
                                    Kém
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                      </div>
                </div>

                <div class="formbold-mb-5">
                    <h4>7. Quý vị có muốn tiếp tục tuyển dụng Người học của Nhà trường khi có nhu cầu?</h4>
  
                      <div class="formbold-radio-flex">
                          <div class="formbold-radio-group">
                              <label class="formbold-radio-label">
                                  <input class="formbold-input-radio" type="radio" name="question_20" value="4"
                                      id="qusOne" />
                                      Có
                                  <span class="formbold-radio-checkmark"></span>
                              </label>
                          </div>
                          <div class="formbold-radio-group">
                              <label class="formbold-radio-label">
                                  <input class="formbold-input-radio" type="radio" name="question_20" value="3"
                                      id="qusOne" />
                                      Còn phải cân nhắc
                                  <span class="formbold-radio-checkmark"></span>
                              </label>
                          </div>
                          <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_20" value="2"
                                    id="qusOne" />
                                    Không
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        
                      </div>
                </div>

                <div class="formbold-mb-5">
                    <h4>8. Quý vị có thể đóng góp gì để Trường Đại học Công nghệ thông tin và Truyền thông xây dựng và thực hiện chương trình đào tạo chất lượng và hiệu quả hơn?</h4>
  
                      <div class="formbold-radio-flex">
                          <div class="formbold-radio-group">
                              <label class="formbold-radio-label">
                                  <input class="formbold-input-radio" type="radio" name="question_21" value="5"
                                      id="qusOne" />
                                      Tham gia vào quá trình xây dựng nội dung chương trình.
                                  <span class="formbold-radio-checkmark"></span>
                              </label>
                          </div>
                          <div class="formbold-radio-group">
                              <label class="formbold-radio-label">
                                  <input class="formbold-input-radio" type="radio" name="question_21" value="4"
                                      id="qusOne" />
                                      Tham gia thực hiện đào tạo như giảng dạy, phối hợp tổ chức hội thảo, seminar, nói chuyện chuyên đề...
                                  <span class="formbold-radio-checkmark"></span>
                              </label>
                          </div>
                          <div class="formbold-radio-group">
                              <label class="formbold-radio-label">
                                  <input class="formbold-input-radio" type="radio" name="question_21" value="3"
                                      id="qusOne" />
                                      Tham gia các buổi nói chuyện về hướng nghiệp, giới thiệu cơ hội việc làm.
                                  <span class="formbold-radio-checkmark"></span>
                              </label>
                          </div>
                          <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_21" value="2"
                                    id="qusOne" />
                                    Nhận sinh viên thực tập. 
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_21" value="1"
                                    id="qusOne" />
                                    Đóng góp ý kiến phản hồi về chất lượng sinh viên và người học Trường Đại học Công nghệ thông tin và Truyền thông.
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                      </div>
                </div>

                <div class="formbold-mb-3">
                    <h4>9. Các ý kiến khác</h4>
                    <input
                      type="text"
                      name="question_22"
                      id="address"
                      class="formbold-form-input"
                    />
                  </div>
                    
                  
                <button type="submit" class="formbold-btn">Gửi phản hồi</button>
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
