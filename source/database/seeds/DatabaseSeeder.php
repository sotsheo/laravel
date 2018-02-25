<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
       $this->call(TheLoaiTableSeeder::class);
       $this->call(LoaiTinTableSeeder::class);
        $this->call(TinTucTableSeeder::class);
        $this->call(CommentTableSeeder::class);
    }
}
class LoaiTinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('LoaiTin')->insert([
            ['idTheLoai'=>'1','Ten' => 'Giáo Dục','TenKhongDau' => 'Giao-Duc'],
            ['idTheLoai'=>'1','Ten' => 'Nhịp Điệu Trẻ','TenKhongDau' => 'Nhip-Dieu-Tre'],
            ['idTheLoai'=>'1','Ten' => 'Du Lịch','TenKhongDau' => 'Du-Lich'],
            ['idTheLoai'=>'1','Ten' => 'Du Học','TenKhongDau' => 'Du-Hoc'],
            ['idTheLoai'=>'2','Ten' => 'Cuộc Sống Đó Đây','TenKhongDau' => 'Cuoc-Song-Do-Day'],
            ['idTheLoai'=>'2','Ten' => 'Ảnh','TenKhongDau' => 'Anh'],
            ['idTheLoai'=>'2','Ten' => 'Người Việt 5 Châu','TenKhongDau' => 'Nguoi-Viet-5-Chau'],
            ['idTheLoai'=>'2','Ten' => 'Phân Tích','TenKhongDau' => 'Phan-Tich'],
            ['idTheLoai'=>'3','Ten' => 'Chứng Khoán','TenKhongDau' => 'Chung-Khoan'],
            ['idTheLoai'=>'3','Ten' => 'Bất Động Sản','TenKhongDau' => 'Bat-Dong-San'],
            ['idTheLoai'=>'3','Ten' => 'Doanh Nhân','TenKhongDau' => 'Doanh-Nhan'],
            ['idTheLoai'=>'3','Ten' => 'Quốc Tế','TenKhongDau' => 'Quoc-Te'],
            ['idTheLoai'=>'3','Ten' => 'Mua Sắm','TenKhongDau' => 'Mua-Sam'],
            ['idTheLoai'=>'3','Ten' => 'Doanh Nghiệp Viết','TenKhongDau' => 'Doanh-Nghiep-Viet'],
            ['idTheLoai'=>'4','Ten' => 'Hoa Hậu','TenKhongDau' => 'Hoa-Hau'],
            ['idTheLoai'=>'4','Ten' => 'Nghệ Sỹ','TenKhongDau' => 'Nghe-Sy'],
            ['idTheLoai'=>'4','Ten' => 'Âm Nhạc','TenKhongDau' => 'Am-Nhac'],
            ['idTheLoai'=>'4','Ten' => 'Thời Trang','TenKhongDau' => 'Thoi-Trang'],
            ['idTheLoai'=>'4','Ten' => 'Điện Ảnh','TenKhongDau' => 'Dien-Anh'],
            ['idTheLoai'=>'4','Ten' => 'Mỹ Thuật','TenKhongDau' => 'My-Thuat'],
            ['idTheLoai'=>'5','Ten' => 'Bóng Đá','TenKhongDau' => 'Bong-Da'],
            ['idTheLoai'=>'5','Ten' => 'Tennis','TenKhongDau' => 'Tennis'],
            ['idTheLoai'=>'5','Ten' => 'Chân Dung','TenKhongDau' => 'Chan-Dung'],
            ['idTheLoai'=>'5','Ten' => 'Ảnh','TenKhongDau' => 'Anh-TT'],
            ['idTheLoai'=>'6','Ten' => 'Hình Sự','TenKhongDau' => 'Hinh-Su']
        ]);
    }
}
class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $NoiDung = array(
            'Bài viết rất hay',
            'Tôi rất thích bài viết này',
            'Bài viết này tạm ổn',
            'Hay quá trời',
            'Tôi sẽ học thèo bài viết này',
            'Bài viết này chưa được hay lắm',
            'Ý kiến của tôi khác so với bài này',
            'Bài viết này được',
            'Không thích bài viết này',
            'Tôi chưa có ý kiến gì'
        );

        for($i=1;$i<=100;$i++)
        {
            DB::table('Comment')->insert(
                [
                    'idUser' => rand(1,10),
                    'idTinTuc' => rand(1,120),
                    'NoiDung' => $NoiDung[rand(0,9)],
                    'created_at' =>new DateTime()
                ]
            );
        }
    }
}
class TheLoaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('TheLoai')->insert([
            ['Ten' => 'Xã Hội','TenKhongDau' => 'Xa-Hoi'],
            ['Ten' => 'Thế Giới','TenKhongDau' => 'The-Gioi'],
            ['Ten' => 'Kinh Doanh','TenKhongDau' => 'Kinh-Doanh'],
            ['Ten' => 'Văn Hoá','TenKhongDau' => 'Van-Hoa'],
            ['Ten' => 'Thể Thao','TenKhongDau' => 'The-Thao'],
            ['Ten' => 'Pháp Luật','TenKhongDau' => 'Phap-Luat'],
            ['Ten' => 'Đời Sống','TenKhongDau' => 'Doi-Song'],
            ['Ten' => 'Khoa Học','TenKhongDau' => 'Khoa-Hoc'],
            ['Ten' => 'Vi Tính','TenKhongDau' => 'Vi-Tinh']
        ]);

    }
}

class TinTucTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $NoiDung = "
        </h3>Nội dung tin tức: Khoá học Lập trình PHP tại trung tâm đào tạo tin học khoa phạm</h3>
        <p>
        <b>Hotline kỹ thuật <b>: 0967 908 907<br>
        <b>Hotline tư vấn kháo học <b>: 094 276 4080<br>
        <b>Địa chỉ </b>: 90 Lê Thị Riêng, P.Bến Thành, Q1, TPHCM<br>
        <b>Website</b>: khoapham.vn<br>
        <b>Học Online tại :</b>online.khoapham.vn<br>
        </p>
        ";
        DB::table('TinTuc')->insert([
            ['idLoaiTin'=>'1','TieuDe' => 'Lần đầu ĐH FPT cấp học bổng tiến sĩ ','TieuDeKhongDau' => 'Lan-Dau-Dh-Fpt-Cap-Hoc-Bong-Tien-Si','TomTat' => 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.','NoiDung' => $NoiDung,'Hinh' => 'FPT-2.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'1','TieuDe' => '300 tỷ đồng phát triển giáo dục mầm non ','TieuDeKhongDau' => '300-Ty-Dong-Phat-Trien-Giao-Duc-Mam-Non','TomTat' => 'Bộ Giáo dục và Đào tạo đang xây dựng chương trình, mục tiêu quốc gia về giáo dục giai đoạn 2011-2015, trong đó dự kiến chi 300 tỷ đồng để phát triển giáo dục mầm non năm 2011. ','NoiDung' => $NoiDung,'Hinh' => 'tre_em_set_sub.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'1','TieuDe' => 'Nợ giáo viên tiền tỷ chi phí phổ cập giáo dục ','TieuDeKhongDau' => 'No-Giao-Vien-Tien-Ty-Chi-Phi-Pho-Cap-Giao-Duc','TomTat' => 'Ba năm qua, nhiều giáo viên ở Khánh Hòa bỏ công sức, kể cả tiền bạc để thực hiện phổ cập giáo dục cho học sinh trên địa bàn tỉnh, song đến nay vẫn chưa nhận được tiền chính quyền chi trả. ','NoiDung' => $NoiDung,'Hinh' => 'pho-cap-giao-duc-nho-2.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'1','TieuDe' => 'Đón và chăm sóc trẻ sau giờ tan trường qua dịch vụ ','TieuDeKhongDau' => 'Don-Va-Cham-Soc-Tre-Sau-Gio-Tan-Truong-Qua-Dich-Vu','TomTat' => 'Các bé sẽ được chăm sóc bữa ăn, tắm rửa sạch sẽ, vui chơi và học tập cùng cô giáo theo các nội dung trong sổ báo bài, mở rộng hoặc đào sâu kiến thức theo yêu cầu của phụ huynh. ','NoiDung' => $NoiDung,'Hinh' => 'be-2.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'1','TieuDe' => '7 học sinh rơi từ tầng hai xuống đất vì gãy lan can ','TieuDeKhongDau' => '7-Hoc-Sinh-Roi-Tu-Tang-Hai-Xuong-Dat-Vi-Gay-Lan-Can','TomTat' => 'Đang giờ ra chơi, bất ngờ toàn bộ lan can tầng hai của Trường THCS thị trấn Chợ Rã (Bắc Kạn) gãy đổ ra ngoài, kéo theo 7 học sinh lớp 6A rơi xuống đất. ','NoiDung' => $NoiDung,'Hinh' => 'tai_nan_set_top.gif','NoiBat' => 1],
            ['idLoaiTin'=>'1','TieuDe' => 'Giáo viên TP HCM được thưởng tết tối thiểu 700.000 đồng ','TieuDeKhongDau' => 'Giao-Vien-Tp-Hcm-Duoc-Thuong-Tet-Toi-Thieu-700.000-Dong','TomTat' => 'Sở GD&ĐT TP HCM vừa có thông báo về việc UBND thành phố chấp thuận đề nghị hỗ trợ mức quà tết cho cán bộ công chức trong ngành tối thiểu là 700.000 đồng. Mức thưởng này cao hơn năm ngoái 100.000 đồng. ','NoiDung' => $NoiDung,'Hinh' => 'thuong-tet-3.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'1','TieuDe' => 'Mức sinh hoạt phí tối đa cho lưu học sinh là 1.200 USD ','TieuDeKhongDau' => 'Muc-Sinh-Hoat-Phi-Toi-Da-Cho-Luu-Hoc-Sinh-La-1.200-Usd','TomTat' => 'Đối với lưu học sinh tại Ba Lan, Bungary, Nga..., mức sinh hoạt phí sẽ tăng từ 400 USD lên 480 USD; tại Australia, New Zealand tăng từ 860 USD lên 1.032 USD và tại Mỹ, Canada, Anh, Nhật Bản tăng từ 1.000 lên 1.200 USD một người một tháng... ','NoiDung' => $NoiDung,'Hinh' => 'du_hoc_sinh_set_sub.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'1','TieuDe' => 'Học sinh Hà Nội được nghỉ 11 ngày Tết ','TieuDeKhongDau' => 'Hoc-Sinh-Ha-Noi-Duoc-Nghi-11-Ngay-Tet','TomTat' => 'UBND thành phố Hà Nội vừa đồng ý với đề xuất của Sở Giáo dục và Đào tạo về việc cho học sinh nghỉ tết Tết Nguyên đán Tân Mão 11 ngày. ','NoiDung' => $NoiDung,'Hinh' => 't2.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'1','TieuDe' => 'Hàng trăm nghìn học sinh nghỉ học vì giá rét ','TieuDeKhongDau' => 'Hang-Tram-Nghin-Hoc-Sinh-Nghi-Hoc-Vi-Gia-Ret','TomTat' => 'Sớm nay, các trường tiểu học ở Hà Nội đều trưng biển thông báo nghỉ học do nhiệt độ ở mức 8 độ C. Một vài phụ huynh không theo dõi dự báo thời tiết vẫn đưa con đến trường và ngậm ngùi quay xe ra về. ','NoiDung' => $NoiDung,'Hinh' => 'phu_huynh_xem_lich_nghi_hoc_set_sub.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'1','TieuDe' => 'Phương pháp Mathnasium giúp trẻ yêu thích môn toán ','TieuDeKhongDau' => 'Phuong-Phap-Mathnasium-Giup-Tre-Yeu-Thich-Mon-Toan','TomTat' => 'Phương pháp dạy toán Mathnasium với 5 kỹ thuật giảng dạy bổ sung nhau, giúp trẻ em tiếp thu kiến thức toán hiệu quả, không cảm thấy áp lực và nhàm chán. ','NoiDung' => $NoiDung,'Hinh' => 'hinh_250x195[1]_JPG_thumb210x0_ns.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'2','TieuDe' => 'Những nụ hôn ngọt ngào trong đêm tình nhân ','TieuDeKhongDau' => 'Nhung-Nu-Hon-Ngot-Ngao-Trong-Dem-Tinh-Nhan','TomTat' => 'Tối 13/2, hàng nghìn bạn trẻ có mặt tại cầu Ánh Sao (quận 7, TP HCM) chứng kiến những lời tỏ tình cùng những nụ hôn ngọt ngào của 100 cặp tình nhân trong "Đêm Valentine thế kỷ". ','NoiDung' => $NoiDung,'Hinh' => '250h_jpg_thumb210x0_ns.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'2','TieuDe' => 'Hot girl tâm sự về ngày Valentine ','TieuDeKhongDau' => 'Hot-Girl-Tam-Su-Ve-Ngay-Valentine','TomTat' => 'Một bông hồng trắng bằng khăn giấy, chiếc xe đạp gắn đầy hoa, hay bài thơ của chàng "thi sĩ" vô danh gửi tặng… là những món quà đầy ấn tượng mà hot girl Midu từng nhận được trong các mùa Valentine. ','NoiDung' => $NoiDung,'Hinh' => 'hot-girl-valentine-2.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'2','TieuDe' => 'Nên duyên chồng vợ từ mạng mai mối ','TieuDeKhongDau' => 'Nen-Duyen-Chong-Vo-Tu-Mang-Mai-Moi','TomTat' => 'Quen nhau qua trang web kết bạn, để chiếm được tình cảm của cô nàng cao tới 1,71 m, chàng trai cao 1,58 m kiên trì tỏ tình tới 10 lần và hạnh phúc đã mỉm cười với họ. ','NoiDung' => $NoiDung,'Hinh' => 'cap_doi_hoan_hao_set_sub.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'2','TieuDe' => 'Những món quà Valentine làm từ tình yêu ','TieuDeKhongDau' => 'Nhung-Mon-Qua-Valentine-Lam-Tu-Tinh-Yeu','TomTat' => 'Cặm cụi cả tuần để thêu móc chìa khóa bằng len tặng người yêu, làm tranh bằng chính những hạt đỗ "kỷ niệm ngày quen nhau" của hai đứa là cách mà giới trẻ đang làm để tặng người yêu dịp lễ Valentine. ','NoiDung' => $NoiDung,'Hinh' => 'socola_set_sub.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'2','TieuDe' => '100 cặp tình nhân hôn nhau trên khinh khí cầu ','TieuDeKhongDau' => '100-Cap-Tinh-Nhan-Hon-Nhau-Tren-Khinh-Khi-Cau','TomTat' => '100 cặp tình nhân sẽ trao nhau nụ hôn trên khinh khí cầu và được tặng một bó hoa với 999 nụ hồng xanh, nhận "lời cầu hôn của thần Cupid"... trong lễ hội Valentine sẽ được tổ chức tại cầu Ánh Sao (quận 7, TP HCM) tối 13/2. ','NoiDung' => $NoiDung,'Hinh' => 'valentine22.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'2','TieuDe' => 'Nhà thám hiểm 9 tuổi đặt chân tới Nam Cực ','TieuDeKhongDau' => 'Nha-Tham-Hiem-9-Tuoi-Dat-Chan-Toi-Nam-Cuc','TomTat' => 'Vượt qua hành trình dài nhiều ngày, Phạm Vũ Thiều Quang, cậu bé 9 tuổi đã cùng bố đặt chân tới Nam Cực vào chiều mùng 1 Tết. Cậu bé đã trở thành người châu Á trẻ tuổi nhất đặt chân tới vùng đất này. ','NoiDung' => $NoiDung,'Hinh' => 'top-2.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'2','TieuDe' => 'Giới trẻ nô nức xin chữ đầu năm ','TieuDeKhongDau' => 'Gioi-Tre-No-Nuc-Xin-Chu-Dau-Nam','TomTat' => '9h sáng mùng 4 Tết dòng người kéo đến Văn miếu Quốc Tử Giám đông nghẹt. Nhiều bạn trẻ đứng chen chân hàng tiếng đồng hồ để xin được chữ: Trạng nguyên, Đỗ đạt, Trí, Nhân... khi xuân về. ','NoiDung' => $NoiDung,'Hinh' => 'tre-1.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'2','TieuDe' => 'Mong ước đầu năm của giới trẻ ','TieuDeKhongDau' => 'Mong-Uoc-Dau-Nam-Cua-Gioi-Tre','TomTat' => 'Trong năm mới, chàng thủ khoa ĐH Ngoại thương Tăng Văn Bình quyết tâm trau dồi ngoại ngữ để thực hiện ước mơ du học, còn Miss Teen Diễm Trang sẽ dành nhiều thời gian hơn cho hoạt động xã hội, giao lưu quốc tế. ','NoiDung' => $NoiDung,'Hinh' => 'diem-trang-2.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'2','TieuDe' => 'Giám đốc tuổi mèo và thành tích đáng nể ','TieuDeKhongDau' => 'Giam-Doc-Tuoi-Meo-Va-Thanh-Tich-Dang-Ne','TomTat' => 'Học hết lớp 9, Nguyễn Hữu Năm phải nghỉ học vì nhà nghèo lại đông con, nhưng chàng trai đất Chương Mỹ (Hà Nội) đã xuất sắc giành nhiều giải thưởng sáng tạo trẻ và hiện là chủ công ty chuyên về chế tạo máy. ','NoiDung' => $NoiDung,'Hinh' => 'Nguyen_Huu_Nam_set_sub.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'1','TieuDe' => 'Học sinh vùng cao nghỉ Tết kéo dài vì giá rét','TieuDeKhongDau' => 'Hoc-Sinh-Vung-Cao-Nghi-Tet-Keo-Dai-Vi-Gia-Ret','TomTat' => 'Học sinh Hà Giang có thể nghỉ Tết Tân Mão gần 20 ngày còn học sinh Lào Cai được nghỉ Tết hơn các vùng khác 3 ngày để tránh giá rét. ','NoiDung' => $NoiDung,'Hinh' => 'sapa9.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'1','TieuDe' => 'Không để thí sinh đăng ký đại học như chơi xổ số','TieuDeKhongDau' => 'Khong-De-Thi-Sinh','TomTat' => '"Chúng ta không thể để học sinh đăng ký nguyện vọng như chơi sổ xố, đến cuối cùng mới biết kết quả. Hãy để các em thấy rõ cơ hội của mình", Bộ trưởng GD&ĐT Phạm Vũ Luận phát biểu tại Hội nghị tuyển sinh sáng 18/2. ','NoiDung' => $NoiDung,'Hinh' => 'Pham_Vu_Luan.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'1','TieuDe' => 'Chụp ảnh cưới tại Flamingo Đại Lải Resort ','TieuDeKhongDau' => 'Chup-Anh-Cuoi-Tai-Flamingo-Dai-Lai-Resort','TomTat' => 'Với hệ sinh thái độc đáo gồm đảo với đàn chim hàng nghìn con cùng nhiều hồ, suối, bán đảo… Flamingo Đại Lải Resort là điểm đến cho các đôi uyên ương muốn tìm nơi lưu giữ khoảnh khắc trăm năm và nghỉ dưỡng cuối tuần. ','NoiDung' => $NoiDung,'Hinh' => 'New_Imagesp2.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'1','TieuDe' => 'Hỗ trợ gần 3.000 vé xe tết cho sinh viên','TieuDeKhongDau' => 'Ho-Tro-Gan-3.000-Ve-Xe-Tet-Cho-Sinh-Vien','TomTat' => 'Mỗi khi máy bay sắp hạ cánh xuống sân bay Suvarnabhumi, tôi đều có cảm giác mình sắp được trở về nhà, về quê hương thân thương thứ hai của mình. Bạn Đặng Quốc Chí chia sẻ.Khoảng 2.700 sinh viên ngoại tỉnh có hoàn cảnh khó khăn, đang học tập tại TP HCM sẽ được tặng vé xe miễn phí về quê trong dịp tết Tân Mão.','NoiDung' => $NoiDung,'Hinh' => 'sinhvien[1]_1.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Một mình ở Thái Lan ','TieuDeKhongDau' => 'Mot-Minh-O-Thai-Lan','TomTat' => 'Không quá ồn ã tấp nập như Hong Kong, hay quá yên bình như Hội An, Bangkok khiến cho tôi cảm thấy vô cùng phấn khích, tựa hồ như vừa thức giấc sau một cơn ngủ say. Bạn Nguyễn Anh Ngọc viết. ','NoiDung' => $NoiDung,'Hinh' => 'top1.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Trai Hà thành trổ tài vật cầu đầu xuân','TieuDeKhongDau' => 'Trai-Ha-Thanh-Tro-Tai-Vat-Cau-Dau-Xuan','TomTat' => 'Những pha tranh cướp quyết liệt cùng những tiếng cười vui là hình ảnh về lễ hội vật cầu đầu xuân của các thanh niên làng Thúy Lĩnh, quận Hoàng Mai (Hà Nội), diễn ra chiều 8/2 (6 Tết). ','NoiDung' => $NoiDung,'Hinh' => '130.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Các bãi biển Đà Nẵng đồng loạt thả chim bồ câu ','TieuDeKhongDau' => 'Cac-Bai-Bien-Da-Nang-Dong-Loat-Tha-Chim-Bo-Cau','TomTat' => 'Sáng nay, Ban quản lý bán đảo Sơn Trà và các bãi biển du lịch thành phố Đà Nẵng đã tổ chức thả chim bồ câu, phát động xây dựng vườn chim hòa bình tại công viên biển Đông. ','NoiDung' => $NoiDung,'Hinh' => 'thachim2.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Đi tìm cây đa đại thụ hơn nghìn năm tuổi ','TieuDeKhongDau' => 'Di-Tim-Cay-Da-Dai-Thu-Hon-Nghin-Nam-Tuoi','TomTat' => 'Chúng tôi thẳng tiến về Bán đảo Sơn Trà (Đà Nẵng) nơi được mạnh danh là “Mắt thần Đông Dương”. Mục tiêu của chúng tôi là khám phá cây đa cổ thụ hơn nghìn năm tuổi. Đường dốc và ngoằn nghèo khiến du khách có cảm giác như bay lên thiên giới. Bạn Triệu Hòa chia sẻ. ','NoiDung' => $NoiDung,'Hinh' => 'cayda2.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Rêu nảy lộc xuân trên phố cổ Hội An','TieuDeKhongDau' => 'Reu-Nay-Loc-Xuan-Tren-Pho-Co-Hoi-An','TomTat' => 'Trong màn sương lãng đãng, phố cổ Hội An hiện ra như bức tranh bình dị mà sâu lắng. Rêu nảy lộc trên từng ngõ phố, bật mầm trên từng mái ngói cũ xưa gieo nhớ thương, neo lòng du khách trong khoảnh khắc mùa xuân đang về. ','NoiDung' => $NoiDung,'Hinh' => 'a-top-2-reu-xuan-HA.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => '50.000 du khách đến Huế ăn Tết ','TieuDeKhongDau' => '50.000-Du-Khach-Den-Hue-An-Tet','TomTat' => 'Lượng khách du lịch đến tỉnh Thừa Thiên - Huế ăn Tết năm nay tăng mạnh. Dự kiến sẽ có khoảng 50.000 du khách trong và ngoài nước đến cố đô, tăng khoảng 20.000 khách so với Tết năm trước ','NoiDung' => $NoiDung,'Hinh' => 'set.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => '4 độc giả viết về du lịch Thái Lan được tặng quà','TieuDeKhongDau' => '4-Doc-Gia-Viet-Ve-Du-Lich-Thai-Lan-Duoc-Tang-Qua','TomTat' => 'Trong số nhiều độc giả gửi bài tham dự cuộc thi viết "Trải nghiệm kỳ thú khi du lịch Thái Lan", Ban biên tập đã lựa chọn 4 bài viết để trao quà tặng cho tháng 1. ','NoiDung' => $NoiDung,'Hinh' => 'a3.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Lễ hội thổ dân nơi tận cùng thế giới ','TieuDeKhongDau' => 'Le-Hoi-Tho-Dan-Noi-Tan-Cung-The-Gioi','TomTat' => 'Lễ hội thổ dân ở thung lũng Baliem, trên hòn đảo West Papua New Guinea thuộc Indonesia là một điểm nhấn văn hóa mang đậm hơi thở của những bộ tộc hoang dã nhất hành tinh. Bạn Trần Thu Thủy chia sẻ.','NoiDung' => $NoiDung,'Hinh' => '7.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Người Hà Nội du xuân phương Nam tránh rét','TieuDeKhongDau' => 'Nguoi-Ha-Noi-Du-Xuan-Phuong-Nam-Tranh-Ret','TomTat' => 'Lo ngại giá lạnh trong ngày Tết, nhiều gia đình ở Hà Nội đã lên kế hoạch du xuân phương Nam. Một số công ty du lịch cũng tung ra chương trình tour đáp ứng nhu cầu du khách, đặc biệt là người lớn tuổi.','NoiDung' => $NoiDung,'Hinh' => 'thanh-pho1.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Tôi đi trốn rét ở Thái Lan','TieuDeKhongDau' => 'Toi-Di-Tron-Ret-O-Thai-Lan','TomTat' => 'Với tour tự do đi trốn rét này, được bạn người Thái hướng dẫn, chúng tôi thăm thú mấy đô thị nhỏ lân cận Pattaya, đều trong tỉnh Chonburi, Đông Nam nước Thái. Bạn An Bình chia sẻ.','NoiDung' => $NoiDung,'Hinh' => 'thai1.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => '3 tiêu đề và biểu tượng du lịch Việt Nam đoạt giải cao','TieuDeKhongDau' => '3-Tieu-De-Va-Bieu-Tuong-Du-Lich-Viet-Nam-Doat-Giai-Cao','TomTat' => 'Tối 26/1, Tổng cục Du lịch đã công bố và trao giải cuộc thi "Tiêu đề - Biểu tượng" cho chương trình xúc tiến du lịch Việt Nam giai đoạn 2011 - 2015.','NoiDung' => $NoiDung,'Hinh' => 'logo6.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Bangkok và Pattaya, gió và những đêm không ngủ','TieuDeKhongDau' => 'Bangkok-Va-Pattaya,-Gio-Va-Nhung-Dem-Khong-Ngu','TomTat' => '"Ngày ở Pattaya, tôi được thử cảm giác đi xe nghịch hướng. Ngồi sau xe máy, làn gió làm bay tóc, những ánh đèn pha ngược chiều, ngược cả hướng làm tôi hơi lo sợ, tôi thấy bờ vai che chở lúc này thật là... hữu dụng", bạn Thuc Nga chia sẻ.','NoiDung' => $NoiDung,'Hinh' => 'Cho-Noi-Pattaya1.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Ngôi đền cổ Phimai','TieuDeKhongDau' => 'Ngoi-Den-Co-Phimai','TomTat' => 'Phimai xưa kia từng được xem là một trong những thành phố quan trọng của người Khmer. Kiến trúc và điêu khắc của đền được xem là cùng thời kỳ với kiến trúc của Bayon, Baphuon và Angkor Wat.','NoiDung' => $NoiDung,'Hinh' => 'den4.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Tour Tết Tân Mão giá ưu đãi','TieuDeKhongDau' => 'Tour-Tet-Tan-Mao-Gia-Uu-Dai','TomTat' => 'Công ty cổ phần Truyền thông Du Lịch Việt đưa ra những chùm tour "Tết Tân Mão" ưu đãi như Singapore - Malaysia 7 ngày 6 đêm giá từ 699 USD, miền Trung 5 ngày 4 đêm giá đặc biệt từ 4,9 triệu đồng...','NoiDung' => $NoiDung,'Hinh' => 'hinh_1_400x300.JPG','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Làng đào Hà Nội nín thở vì giá rét','TieuDeKhongDau' => '','TomTat' => 'Những người trồng hoa Nhật Tân, Tứ Liên (Hà Nội) như ngồi trên đống lửa vì lo giá rét có nguy cơ kéo dài. Một tháng trước Tết nhưng đào vẫn chưa có dấu hiệu gì đón xuân.','NoiDung' => $NoiDung,'Hinh' => 'HHH_9967.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Gift Voucher ưu đãi tại Vinpearl Nha Trang','TieuDeKhongDau' => '','TomTat' => 'Vinpearl Nha Trang giới thiệu chương trình “Gift Voucher” - thẻ quà tặng dành cho khách. Theo đó, bạn sẽ được hưởng trực tiếp ưu đãi tại Vinpearl Nha Trang Resort & Spa từ 18% đến 40%, tùy từng thời điểm đặt phòng.','NoiDung' => $NoiDung,'Hinh' => '','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Mai Châu mờ sương ngày đầu năm','TieuDeKhongDau' => 'Mai-Chau-Mo-Suong-Ngay-Dau-Nam','TomTat' => 'Trong ngày đầu của năm mới 2011, khung cảnh ở bản Hang Kia, Mai Châu (Hòa Bình) hiện lên huyền ảo trong làn sương mịt mù. Sương mù kèm theo thời tiết giá lạnh 13 độ C tại Mai Châu sáng mùng 1 Tết Dương lịch. Một trong những ngôi nhà tại bản Hang Kia chìm trong sương. Xe máy đi lại khó khăn. Thời điểm giáp xuân, những cây hoa mận đã nở nhưng khó có thể nhận ra trong làn sương mờ ảo. Một người phụ nữ Mông cho gia cầm ăn. Những đứa trẻ cùng nhau chơi quay. Một em bé thiếu quần mặc trong giá rét. Hai mẹ con người dân tộc Mông sưởi ấm trong căn nhà gỗ. Những người đàn ông đang quây quần trong bữa cơm chào năm mới. Một người đàn ông trở về nhà cùng chiếc khèn.','NoiDung' => $NoiDung,'Hinh' => 'maichau1.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Thi viết về những trải nghiệm kỳ thú ở Thái Lan','TieuDeKhongDau' => 'Thi-Viet-Ve-Nhung-Trai-Nghiem-Ky-Thu-O-Thai-Lan','TomTat' => 'Mỗi tháng VnExpress.net sẽ tặng một cặp vé máy bay khứ hồi cho độc giả gửi bài viết hay nhất về du lịch trên đất nước Thái Lan. ','NoiDung' => $NoiDung,'Hinh' => 'chua-1.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Trải nghiệm cảm giác sống chậm tại Côn Đảo','TieuDeKhongDau' => 'Trai-Nghiem-Cam-Giac-Song-Cham-Tai-Con-Dao','TomTat' => 'Sự vắng vẻ, phong cảnh tự nhiên cùng sự ra đời của khu nghỉ dưỡng cao cấp giúp Côn Đảo trở thành địa điểm lý tưởng cho người muốn trải nghiệm cảm giác sống chậm.','NoiDung' => $NoiDung,'Hinh' => 'New_Image1.JPG','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Du lịch kết hợp mua sắm Tết tại Trung Quốc','TieuDeKhongDau' => 'Du-Lich-Ket-Hop-Mua-Sam-Tet-Tai-Trung-Quoc','TomTat' => 'Hai tour du lịch kết hợp mua sắm Tết tại Trung Quốc là Nam Ninh - Quảng Châu và Thượng Hải - Hàng Châu - Tô Châu phục vụ du khách có nhu cầu mua sắm trong mùa siêu giảm giá trước Tết Nguyên đán.','NoiDung' => $NoiDung,'Hinh' => 'Hang-Chau--Trung-Quoc.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Ngăn chặn hiện tượng tiêu cực mùa lễ hội','TieuDeKhongDau' => 'Ngan-Chan-Hien-Tuong-Tieu-Cuc-Mua-Le-Hoi','TomTat' => 'Bộ Văn hóa Thể thao và Du lịch vừa chỉ đạo các khách sạn, cơ sở lưu trú du lịch đảm bảo an toàn vệ sinh thực phẩm, không tăng giá, ép giá đối với du khách dịp tết Tân Mão.','NoiDung' => $NoiDung,'Hinh' => 'a4.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => '14 ngày trải nghiệm tại 3 quốc gia châu Âu','TieuDeKhongDau' => '14-Ngay-Trai-Nghiem-Tai-3-Quoc-Gia-Chau-Au','TomTat' => 'Với chuyến đi 14 ngày, bạn sẽ được tới thăm 3 quốc gia châu Âu gồm kinh đô ánh sáng - Pháp, ngã tư của các nền văn minh châu Âu - Thụy Sĩ và cái nôi của nền nghệ thuật thế giới - Italy.','NoiDung' => $NoiDung,'Hinh' => 'chau-au.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Noel và năm mới tại Vinpearl Resort & Spa','TieuDeKhongDau' => 'Noel-Va-Nam-Moi-Tai-Vinpearl-Resort---Spa','TomTat' => 'Ngày 24, 25/12, khách du lịch ở tại Vinpearl Resort & Spa sẽ được tham gia các hoạt động vui chơi ngoài trời vui nhộn. Vào ngày 31/12, tiệc đón năm mới sẽ được tổ chức trong không gian ấm cúng với nến, rượu vang, chocolate.','NoiDung' => $NoiDung,'Hinh' => '8.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Huế lung linh sắc màu đón Giáng sinh','TieuDeKhongDau' => 'Hue-Lung-Linh-Sac-Mau-Don-Giang-Sinh','TomTat' => 'Không khí Giáng sinh đến Huế muộn hơn Sài Gòn, Hà Nội, nhưng không vì thế mà làm giảm đi sắc màu lung linh. Khắp các ngả đường của cố đô ngập tràn ánh đèn điện trang hoàng cho đêm Noel đang cận kề.','NoiDung' => $NoiDung,'Hinh' => 'doi.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Ana Mandara Villas Dalat lưu giữ kiến trúc Pháp cổ','TieuDeKhongDau' => 'Ana-Mandara-Villas-Dalat-Luu-Giu-Kien-Truc-Phap-Co','TomTat' => 'Khu nghỉ Ana Mandara Villas Dalat được trùng tu nguyên vẹn kiến trúc cổ biệt thự Pháp, đan xen trang trí vật dụng xưa làm toát lên vẻ quyền uy của giới thượng lưu.','NoiDung' => $NoiDung,'Hinh' => 'du-lich1 (1).jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Khám phá Đài Loan','TieuDeKhongDau' => 'Kham-Pha-Dai-Loan','TomTat' => 'Tòa tháp cao thứ hai thế giới, sông tình yêu, hội chợ hoa quốc tế, Nhật Nguyệt Đàm hay những điểm vui chơi được xem là hiện đại bậc nhất trong khu vực đã hút một lượng khách khá lớn đến Đài Loan.','NoiDung' => $NoiDung,'Hinh' => 'canh.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Nghỉ dưỡng tại Evason Ana Mandara Nha Trang','TieuDeKhongDau' => 'Nghi-Duong-Tai-Evason-Ana-Mandara-Nha-Trang','TomTat' => 'Khu du lịch Evason Ana Mandara Nha Trang được xây dựng trong khuôn viên 26.000 m2 bao quanh bởi khu vườn nhiệt đới riêng biệt nhìn ra biển.','NoiDung' => $NoiDung,'Hinh' => 'nha-trang-2.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Lên mái nhà của châu Âu','TieuDeKhongDau' => 'Len-Mai-Nha-Cua-Chau-Au','TomTat' => 'Cao 3.454 m, ngọn núi Jungfrau cao nhất thuộc dãy Alps (Thụy Sĩ) quanh năm tuyết phủ. Du khách như lạc trong thế giới truyện cổ tích với những ngôi nhà thơ mộng phủ tuyết trắng xóa bên sườn núi, trong cảnh thiên nhiên hùng vĩ. VnExpress.net ghi nhận một số hình ảnh trên mái nhà châu Âu.','NoiDung' => $NoiDung,'Hinh' => '14.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Sắc màu văn hóa Ấn Độ trên đất Singapore','TieuDeKhongDau' => 'Sac-Mau-Van-Hoa-An-Do-Tren-Dat-Singapore','TomTat' => 'Các thiếu nữ say sưa trong điệu múa truyền thống, người đàn ông bước đi trên than nóng..., lễ hội Ánh sáng của người Ấn trên đảo quốc sư tử đã thu hút sự chú ý của đông đảo người dân bản địa và du khách nước ngoài.','NoiDung' => $NoiDung,'Hinh' => 'anh-sang8.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Disneyland - nơi giấc mơ cổ tích trở thành sự thực','TieuDeKhongDau' => 'Disneyland---Noi-Giac-Mo-Co-Tich-Tro-Thanh-Su-Thuc','TomTat' => 'Đây là địa điểm tôi thích nhất trong chuyến du ngoạn Hong Kong mùa thu năm nay vì những cảm xúc có được ở đây là những cảm xúc tuyệt vời nhất mà tôi không thể nào quên được. Bạn Nguyễn Thu Hà chia sẻ','NoiDung' => $NoiDung,'Hinh' => '3.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Thắng cảnh suối nước Vàng','TieuDeKhongDau' => 'Thang-Canh-Suoi-Nuoc-Vang','TomTat' => 'Cách thành phố Bắc Giang chừng 60 km về phía đông bắc, thắng cảnh nước Vàng ở xã Lục Sơn (Lục Nam, Bắc Giang) thuộc khu bảo tồn thiên nhiên Tây Yên Tử là điểm đến đầy kỳ thú cho các chuyến dã ngoại của những du khách “bụi” đi tìm cảm giác mạnh. Độc giả Nguyễn Văn Hưởng viết.','NoiDung' => $NoiDung,'Hinh' => '1.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Nghỉ mát ở thành phố Cebu ','TieuDeKhongDau' => 'Nghi-Mat-O-Thanh-Pho-Cebu','TomTat' => 'Cách Manila 365 dặm về phía nam, Cebu được coi là một trung tâm hành chính thứ hai của Philippines. Cebu còn nổi tiếng bởi những bãi cát trắng sạch và nước biển trong xanh như pha lê. Bạn Kenji Chen chia sẻ. ','NoiDung' => $NoiDung,'Hinh' => '2.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Nhiều tour khám phá Hà Nội dịp đại lễ','TieuDeKhongDau' => 'Nhieu-Tour-Kham-Pha-Ha-Noi-Dip-Dai-Le','TomTat' => 'Các công ty du lịch ở Hà Nội ồ ạt tung ra nhiều tour khám phá phố cổ, thăm các võ đường hay đến kinh đô Việt cổ để phục vụ du khách muốn tìm hiểu thắng cảnh, văn hóa đất Tràng An.','NoiDung' => $NoiDung,'Hinh' => '9.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Du lịch các nước châu Á - Thái Bình Dương bằng tàu biển','TieuDeKhongDau' => 'Du-Lich-Cac-Nuoc-Chau-A---Thai-Binh-Duong-Bang-Tau-Bien','TomTat' => 'Bạn có thể tới thăm Singapore hay Hong Kong - Nhật Bản bằng du thuyền cao cấp với giá hấp dẫn 16.030.000 đồng và 49.700.000 đồng.','NoiDung' => $NoiDung,'Hinh' => '9 (1).jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Team building - tour du lịch khám phá TP HCM','TieuDeKhongDau' => 'Team-Building---Tour-Du-Lich-Kham-Pha-Tp-Hcm','TomTat' => 'Chương trình giúp các nhóm khách lần đầu đặt chân đến TP HCM có thể tự mình khám phá, cảm nhận, hiểu khái quát nét văn hóa, ẩm thực, con người nơi đây... chỉ trong vài giờ tham quan.','NoiDung' => $NoiDung,'Hinh' => 'DSC_4142 400x266.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Nhớ hương Fanxifan','TieuDeKhongDau' => 'Nho-Huong-Fanxifan','TomTat' => 'Trong mỗi người trẻ tuổi, luôn có một khát khao. Với tôi, đỉnh Fanxifan, nóc nhà Đông Dương chính là trường dạy cho giới trẻ khát vọng chinh phục. Bạn Phạm Thị Tốt chia sẻ.','NoiDung' => $NoiDung,'Hinh' => '1 (2).jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Phố phường Hà Nội rực rỡ trước đại lễ','TieuDeKhongDau' => 'Pho-Phuong-Ha-Noi-Ruc-Ro-Truoc-Dai-Le','TomTat' => '20 ngày trước đại lễ nghìn năm, đường phố Hà Nội rực rỡ ánh đèn cùng những hình tượng hoa văn màu sắc. Hồ Gươm như lung linh hơn.','NoiDung' => $NoiDung,'Hinh' => 'dienbienphu.jpg','NoiBat' => 1],
          
          
        ]);
    }
}

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 1; $i <= 10;$i++)
        {
            DB::table('Users')->insert(
                [
                    'name' => 'User_'.$i,
                    'email' => 'user_'.$i.'@mymail.com',
                    'password' => bcrypt('123456'),
                   
                    'created_at' => new DateTime(),
                ]
            );
        }
    }
}