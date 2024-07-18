<?php
/**
 * @package thanhdieuv5 (tester)
 * @author  Creative <www.facebok.com/Creative>
 */
interface CreativeConfigInterface {
    public function CommonMethod();
}
class CreativeHeader implements CreativeConfigInterface {
    public $title = "Creative | Reup Source";
    public $description = "Hi my name is Creative / A freelance / web developer / vexer";
    public $keywords = "thanhdieu,web thanh dieu,vuong thanh dieu,thanhdieutv,wsteam,wusteam,thanhdieu home,profile thanhdieu";
    public $favicon = "./res/v5/img/logo.jpg";
    public $namesite = "Creative | HOME";
    public $avatar = "./res/v5/img/orange_cat.gif";
    public $userName = ["Hello Everybody", "My name is Creative.", "I really like website design 🌭"];
    public $trigger = "👉 Tìm hiểu tôi 😶&zwj;🌫️";
    public $bio1 = "🤖️ Người đam mê công nghệ";
    public $bio2 = "🔍 Chia sẻ và giúp đỡ nhiệt tình";
    public $bio3 = "💻 Kỹ sư công nghệ thông tin";
    public $bio4 = "Developer Discord Server 🥳";
    public $bio5 = "Ăn, ngủ, nghỉ, làm và code 💻";
    public $bio6 = "Kẻ khờ dại tin vào tình yêu ✨";
    public $SocialNetworks = [
        "facebook" => "https://facebook.com/nhd31082003", // Thay link facebook
        "instagram" => "https://www.instagram.com/creative1896", // Thay link instagram
        "tiktok" => "https://www.tiktok.com/", // Thay link tiktok
        "telegram" => "https://t.me/" // Thay link telegram
    ];
    public function CommonMethod(){date_default_timezone_set('Asia/Ho_Chi_Minh');}
}

class CreativeLoveDays implements CreativeConfigInterface {
    public $ConfigLove = [
        "avatar_male" => "./res/v5/img/male.jpeg", // Thay đường dẫn tới thư mục chứa ảnh của bạn hoặc up ảnh lấy link tại img.thanhdieu.com
        "name_male" => "Creative", // Thay tên của bạn
        //========================================================//
        "avatar_female" => "./res/v5/img/female.png", // Thay đường dẫn tới thư mục chứa ảnh bạn gái hoặc up ảnh lấy link tại img.thanhdieu.com
        "name_female" => "Bé iu cụa anhhh", // Thay tên đối phương
        //========================================================//
        "time_relashiption" => "18/07/2024" // Định dạng ngày tháng năm: DD-MM-YYYY or / or :
        //========================================================//
    ];
    public function CommonMethod() {}
}
class CreativeMusicList implements CreativeConfigInterface {
    public $songs = [
        [
            "url" => "https://files.catbox.moe/hkqk6x.mp3",
            "avatar" => "https://i.imgur.com/GEOKT8b.png",
            "title" => "Chúng Ta Của Tương Lai",
            "author" => "Sơn Tùng M-TP"
        ],
        [
            "url" => "https://files.catbox.moe/t902jj.mp3",
            "avatar" => "https://i.ibb.co/FWmBtWh/image.jpg",
            "title" => "Legend Never Die",
            "author" => "League of Legends"
        ],
        [
            "url" => "https://files.catbox.moe/psi0w6.mp3",
            "avatar" => "https://files.catbox.moe/qn9jb4.jpg",
            "title" => "LOI CHOI - không điểm dừng",
            "author" => "Wren Evans"
        ],
        // Thêm nhạc tại đây
    ];
    public function CommonMethod() {}
}