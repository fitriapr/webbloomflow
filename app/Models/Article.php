<?php

namespace App\Models;



class Article 
{
    private static $article_ = [
        [
            "title" => "Baloon Bouqet",
            "slug" => "baloon-bouquet",
            "author" => "Bloomflow",
            "body" => "Tren beraneka jenis buket yang unik tengah merebak di masyarakat, salah satunya adalah buket balon. 
            Sesuai namanya, buket ini menggunakan balon sebagai isian sebuah buket.
            Namun, bahan balon yang digunakan tidaklah sembarangan. Bukan berasal dari latex yang tipis dan mudah meletus.
            Bahan yang digunakan adalah bahan khusus yang tidak mudah meletus dan lebih tahan lama.
            Selain itu, Buket balon adalah hadiah yang lucu dan menggemaskan, karena bentuknya yang unik dan lebih besar dari buket bunga atau uang.
            Sehingga banyak orang mulai melirik buket jenis ini sebagai alternatif hadiah.
            Ada banyak bentuk dan varian buket balon yang dapat kamu pilih sebagai hadiah untuk orang tersayang.
            Karena setiap orang pasti memiliki seleranya masing masing. Hot air balloon bisa disulap menjadi hadiah yang elegan dan romantis."
        ],
    
        [
            "title" => "Flowers Bouqet",
            "slug" => "flowers-bouquet",
            "author" => "Bloomflow",
            "body" => "Buket bunga dapat menjadi pilihan hadiah dalam berbagai acara, misalnya saja ulang tahun, kelulusan, hingga pernikahan. 
            Membuat buket bunga sendiri memang lebih istimewa untuk diberikan, selain menjadi nilai tersendiri bagi yang membuat,
            serta harganya juga pastinya lebih murah"
        ],

        [
            "title" => "Bloom Box",
            "slug" => "bloom-box",
            "author" => "Bloomflow",
            "body" => "Buket bunga yang disajikan dalam bentuk box bulat. Rangkaian bunga yang dapat disesuaikan dengan budget
            Anda dan jangan ragu untuk bertanya jika Anda memiliki permintaan"
        ],

        [
            "title" => "Bouquet Money",
            "slug" => "bouquet-money",
            "author" => "Bloomflow",
            "body" => "Tidak hanya rangkaian bunga, buket juga memiliki varian lain yaitu uang. Sejumlah uang yang disusun
            sedemikian rupa dengan ornamen bunga kering dapat mempercantik buket uang Anda!"
        ]
        ];
    
    public static function all()
    {
        return self::$article_;
    }

    public static function find($slug)
    {
        $
    }



}
