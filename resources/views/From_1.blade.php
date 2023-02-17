
@php
    $year = App\Event::Where('status' , 'ACTIVE')->first();
@endphp
<body class="antialiased">
    <div class="formbold-main-wrapper">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="formbold-form-wrapper">
            <h3>A. THÔNG TIN CÁ NHÂN</h3>
            <form action="feedback" method="POST">
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
                            Họ và Tên
                        </label>
                        <input type="text" name="name" placeholder="Nguyen Van A" class="formbold-form-input" />
                    </div>
                    <div>
                        <label for="lastname" class="formbold-form-label">Ngày Sinh</label>
                        <input type="text" name="date" placeholder="" class="formbold-form-input" />
                    </div>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="firstname" class="formbold-form-label">
                            Khóa học
                        </label>
                        <input type="text" name="course" placeholder="K18" class="formbold-form-input" />
                    </div>
                    <div>
                        <label for="lastname" class="formbold-form-label">Lớp</label>
                        <input type="text" name="class" placeholder="KTPMK18A" class="formbold-form-input" />
                    </div>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="firstname" class="formbold-form-label">
                            Ngành đào tạo
                        </label>
                        <input type="text" name="majors" placeholder="Công nghệ phần mềm"
                            class="formbold-form-input" />
                    </div>
                    <div>
                        <label for="lastname" class="formbold-form-label">Điện thoại</label>
                        <input type="text" name="phone" placeholder="" class="formbold-form-input" />
                    </div>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="lastname" class="formbold-form-label"> Email</label>
                        <input type="text" name="email" placeholder="Email" class="formbold-form-input" />
                    </div>
                </div>
                <h3>B. Nội dung đánh giá</h3>
                <h4>I. Chương trình đào tạo</h4>

                <div class="formbold-mb-5">
                    <label for="qusOne" class="formbold-form-label">
                        1.Mức độ phù hợp của nội dung chương trình đào tạo với các chuẩn đầu ra
                    </label>
                    <div class="formbold-radio-flex">
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_01" value="4"
                                    id="qusOne" />
                                Tốt
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_01" value="3"
                                    id="qusOne" />
                                Khá
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_01" value="2"
                                    id="qusOne" />
                                Trung Bình
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input class="formbold-input-radio" type="radio" name="question_01" value="1"
                                    id="qusOne" />
                                Kém
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="formbold-mb-5">
                    <label for="qusTwo" class="formbold-form-label">
                        2.Mục tiêu của chương trình đào tạo đáp ứng ở mức nào với năng lực sinh viên khi tốt nghiệp
                    </label>

                    <div class="formbold-radio-flex">
                      <div class="formbold-radio-group">
                          <label class="formbold-radio-label">
                              <input class="formbold-input-radio" type="radio" name="question_02" value="4"
                                  id="qusOne" />
                              Tốt
                              <span class="formbold-radio-checkmark"></span>
                          </label>
                      </div>
                      <div class="formbold-radio-group">
                          <label class="formbold-radio-label">
                              <input class="formbold-input-radio" type="radio" name="question_02" value="3"
                                  id="qusOne" />
                              Khá
                              <span class="formbold-radio-checkmark"></span>
                          </label>
                      </div>
                      <div class="formbold-radio-group">
                          <label class="formbold-radio-label">
                              <input class="formbold-input-radio" type="radio" name="question_02" value="2"
                                  id="qusOne" />
                              Trung Bình
                              <span class="formbold-radio-checkmark"></span>
                          </label>
                      </div>
                      <div class="formbold-radio-group">
                          <label class="formbold-radio-label">
                              <input class="formbold-input-radio" type="radio" name="question_02" value="1"
                                  id="qusOne" />
                              Kém
                              <span class="formbold-radio-checkmark"></span>
                          </label>
                      </div>
                    </div>
                </div>

                <div class="formbold-mb-5">
                    <label for="qusThree" class="formbold-form-label">
                      3.Tỷ lệ phân bổ hợp lý giữa lý thuyết và thực hành
                    </label>

                    <div class="formbold-radio-flex">
                      <div class="formbold-radio-group">
                          <label class="formbold-radio-label">
                              <input class="formbold-input-radio" type="radio" name="question_03" value="4"
                                  id="qusOne" />
                              Tốt
                              <span class="formbold-radio-checkmark"></span>
                          </label>
                      </div>
                      <div class="formbold-radio-group">
                          <label class="formbold-radio-label">
                              <input class="formbold-input-radio" type="radio" name="question_03" value="3"
                                  id="qusOne" />
                              Khá
                              <span class="formbold-radio-checkmark"></span>
                          </label>
                      </div>
                      <div class="formbold-radio-group">
                          <label class="formbold-radio-label">
                              <input class="formbold-input-radio" type="radio" name="question_03" value="2"
                                  id="qusOne" />
                              Trung Bình
                              <span class="formbold-radio-checkmark"></span>
                          </label>
                      </div>
                      <div class="formbold-radio-group">
                          <label class="formbold-radio-label">
                              <input class="formbold-input-radio" type="radio" name="question_03" value="1"
                                  id="qusOne" />
                              Kém
                              <span class="formbold-radio-checkmark"></span>
                          </label>
                      </div>
                    </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    4.Chương trình đào tạo được thiết kế, tạo điều kiện thuận lợi cho SV lựa chọn theo nhu cầu, nguyên vọng học tập
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_04" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_04" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_04" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_04" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    5.Các môn học trong chương trình đào tạo tích hợp được các kiến thức và kỹ năng theo chuẩn đầu ra của ngành đã công bố
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
                    6.Mức độ gắn kết giữa các khối kiến thức (cơ bản, cơ sở ngành, chuyên ngành) và kiến thức thực tế trong nội dung chương trình đào tạo
                  </label>

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
                  <label for="qusTwo" class="formbold-form-label">
                    7.Sinh viên hiểu rõ được chuẩn đầu ra của ngành đào tạo về kiến thức, kỹ năng và thái độ người học cần đạt được
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

                <h4>II. Đội ngũ giảng viên</h4>
                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    8.Trình độ chuyên môn của giảng viên đáp ứng yêu cầu đào tạo
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
                    9.Phương pháp giảng dạy của giảng viên dễ hiểu, phù hợp với sinh viên
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
                    10.Giảng viên có hướng dẫn sinh viên tự học, sẵn sàng trao đổi về nội dung môn học với sinh viên
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
                    11.Việc thực hiện giờ lên lớp, kế hoạch giảng dạy và khả năng sử dụng các thiết bị hỗ trợ dạy học của giảng viên
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

                <h4>III. Tổ chức và quản lý phục vụ đào tạo</h4>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    12.Nhà trường cung cấp đầy đủ thông tin về quy chế đào tạo, chương trình đào tạo, quy chế học sinh sinh viên và phương pháp kiểm tra đánh giá từ đầu khóa tới sinh viên.
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

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    13.Việc triển khai cho sinh viên đi thực tập gắn liền với thực tiễn tại các cơ quan, doanh nghiệp ngoài trường hợp lý khoa học đạt hiệu quả
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_13" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_13" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_13" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_13" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    14.Cán bộ, nhân viên các phòng/trung tâm có thái độ phục vụ sinh viên tận tình, thân thiện.
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_14" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_14" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_14" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_14" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    15.Các phòng chức năng giải quyết các thắc mắc kiến nghị của sinh viên,nhanh chóng, thuận lợi, thỏa mãn các yêu cầu
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_15" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_15" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_15" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_15" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    16.Các chế độ chính sách xã hội, học bổng khuyến khích học tập của nhà trường được triển khai tới sinh viên theo đúng quy định.
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_16" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_16" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_16" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_16" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    17.Các chế độ chăm sóc sức khỏe, y tế học đường và cải thiện sức khỏe của nhà trường đối với sinh viên.
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_17" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_17" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_17" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_17" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    18.Các hoạt động tư vấn, hỗ trợ sinh viên được thực hiện đầy đủ và có hiệu quả
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_18" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_18" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_18" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_18" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    19.Hoạt động của các tổ chức Đảng/Đoàn/Hội có hiệu quả, tác dụng tốt trong học tập và rèn luyện chính trị, tư tưởng, đạo đức lối sống của sinh viên
                  </label>

                  <div class="formbold-radio-flex">
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
                  <label for="qusTwo" class="formbold-form-label">
                    20.Các thông tin về hoạt động đào tạo đa dạng, phong phú và cập nhật thường xuyên trên website nhà trường.
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_20" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_20" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_20" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_20" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    21.Hàng năm, nhà trường tổ chức có hiệu quả các buổi đối thoại trực tiếp giữa sinh viên với lãnh đạo nhà trường/ các tổ chức Đoàn/Hội sinh viên.
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_21" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_21" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_21" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_21" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <h4>IV. Kiểm tra đánh giá</h4>
                
                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    22.Mức độ đa dạng hóa các hình thức thi, kiểm tra đánh giá phù hợp với nội dung môn học
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_22" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_22" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_22" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_22" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    23.Tổ chức thi, kiểm tra, chấm bài tập, thực tập, tiểu luận đánh giá đảm bảo nghiêm túc, khách quan, chính xác và công bằng 
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_23" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_23" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_23" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_23" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    24.Các kế hoạch thi, kiểm tra được thông báo rõ ràng, kịp thời cho sinh viên 
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_24" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_24" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_24" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_24" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    25.Kết quả học tập của sinh viên được thông báo kịp thời tới sinh viên
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_25" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_25" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_25" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_25" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <h4>V. Cơ sở vật chất</h4>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    26.Thư viện Trường có đủ các giáo trình và tài liệu tham khảo cho toàn khóa học

                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_26" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_26" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_26" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_26" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    27.Cơ sở vật chất nhà trường (giảng đường, bàn ghế, phương tiện nghe nhìn dùng cho việc học, sân vận động, chỗ gửi xe,…) 
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_27" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_27" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_27" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_27" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    28.Trang thiết bị phòng thực hành thí nghiệm có đảm bảo chất lượng phục vụ công tác học tập và nghiên cứu khoa học.
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_28" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_28" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_28" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_28" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    29.Cơ sở vật chất ký túc xá đáp ứng tốt cho sinh viên nội trú
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_29" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_29" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_29" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_29" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    30.Cảnh quan vệ sinh môi trường sạch đẹp
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_30" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_30" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_30" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_30" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    31.Căng tin trong trường phục vụ tốt nhu cầu ăn uống của sinh viên.
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_31" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_31" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_31" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_31" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <h4>VI. Công tác tài chính</h4>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    32.Công tác thu - chi tài chính liên quan đến sinh viên của nhà trường được thực hiện công khai, rõ ràng, chính xác và thuận lợi cho sinh viên

                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_32" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_32" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_32" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_32" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    33.Cán bộ, nhân viên trong phòng Kế hoạch – Tài chính có  tinh thần và thái độ đúng mực, thân thiện trong giải quyết công việc phục vụ sinh viên. 
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_33" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_33" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_01" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_01" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <h4>VII. Đội ngũ cán bộ quản lý, nhân viên và kỹ thuật viên của Trường</h4>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    34.Thái độ nghiêm túc, nhiệt tình và có trách nhiệm khi được yêu cầu giải quyết công việc thuộc phạm vi đảm nhận

                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_34" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_34" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_34" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_43" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    35.Thái độ phục vụ khi được yêu cầu giải quyết công việc thuộc phạm vi trách nhiệm (vui vẻ, thân thiện, nhiệt tình)
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_35" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_35" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_35" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_35" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    36.Quy trình giải quyết công việc đảm bảo tính khoa học, rõ ràng và đúng quy định
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_36" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_36" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_36" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_36" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    37.Giải quyết công việc nhanh chóng, kip thời đảm bảo tốt yêu cầu nghiệp vụ
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_37" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_37" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_37" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_37" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    38.Luôn tạo điều kiện thuận lợi khi đến làm việc tại Phòng
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_38" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_38" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_38" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_38" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    39.Mức độ hài lòng của Sinh viên về đội ngũ cán bộ quản lý, nhân viên và kỹ thuật viên của Trường
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_39" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_39" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_39" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_39" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <h4>VIII. Đánh giá chung về khóa học</h4>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    40.Sinh viên được cung cấp đủ những kiến thức và các kỹ năng cần thiết cho công việc theo ngành tốt nghiệp

                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_40" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_40" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_40" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_40" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    41.Mức độ tự tin về kiến thức, kỹ năng của sinh viên khi tốt nghiệp
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_41" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_41" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_41" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_41" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5">
                  <label for="qusTwo" class="formbold-form-label">
                    42.Mức độ hài lòng về chất lượng đào tạo của nhà trường
                  </label>

                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_42" value="4"
                                id="qusOne" />
                            Tốt
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_42" value="3"
                                id="qusOne" />
                            Khá
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_42" value="2"
                                id="qusOne" />
                            Trung Bình
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="question_42" value="1"
                                id="qusOne" />
                            Kém
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                  </div>
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


